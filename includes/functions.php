<?php
    session_start();

    /*  Function manage Auth */

    function registerUser($name, $mail, $password){
        global $pdo;

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $pdo->prepare("INSERT INTO users(name,email,password) VALUES(?,?,?,?)");
        return $stmt->execute($name, $email, $hashedPassword);
    }
    
    function loginUser($email, $password){
        global $pdo;

        $stmt = $pdo->prepare("SELECT * FROM user WHERE email= ?");
        $stm->execute([$email]);
        $user= $stmt->fetch();

        if($user && password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            return true;
        }
        return false;
    }

    function isloggedIn(){
        return isset($_SESSION['user_id']);
    }

    function login() {
        session_start();
        session_destroy();
        header("Location: login.php");
        exit();
    }
    /* Function manage Doctor */
    function addDoctor($name, $email, $specialization, $phone) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO doctors(name, email, specialization, phone) VALUES(?,?,?,?)");
        return $stmt->execute([$name,$mail,$specialization, $phone]);
    }

    function getDoctors(){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM doctors");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDoctor($id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM doctors WHERE id = ? ");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSC);
    }

    function updateDoctor($id, $name, $email, $specialization, $phone){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE doctors SET name = ? , email = ?, specialization = ?, phone = ?  WHERE id = ? ");
        return $stmt->execute([$name, $email,$specialization, $phone, $id])
    }

    function listDoctors() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM doctors");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function searchDoctors(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM doctors
                             WHERE name LIKE ? OR speicalialty LIKE ?");;
        $stmt->execute(['%' . $keyword . '%', '%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
    function deleteDoctor($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM doctors WHERE id = ? ");
        return $stmt->execute([id]);
    }

    /* Function manage Paitent */
    function addPatient($name, $email, $date_of_birth, $gender, $phone, $address) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO patients(name, email, date_of_birth, gender, phone, address) VALUES(?, ?, ?, ?,?) ");
        return $stmt->execute([$name, $email, $date_of_birth, $gender, $phone, $address]);
    }

    function getPatients(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM patients");
        return $stmt->execute(PDO::FETCH_ASSOC);
    }

    function getPatient($id) {
        global $pdo;
        $stmt = $stmt->prepare("SELECT * FROM patients WHERE id = ?");
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    
    function updatePatient($id, $name, $email, $date_of_birth, $gender, $phone, $address){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE patients SET name = ?, email = ?, date_of_birth = ?, gender = ?, phone = ?, address = ? WHERE id = ? ");
        return $stmt->execute([$name, $email, $date_of_birth, $gender, $phone, $address, $id]);
    }

    function listPatients(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM patients");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function searchPatient($keyword){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM patients WHERE name LIKE ? ");
        $stmt->execute(['%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function deletePatient($id){
        global $pdo;
        $stmt = $stmt->prepare("DELETE FROM patients WHERE id = ? ");
        return $stmt->execute([$id])
    }

    /* Function mange Appontment */
    function addAppointment($patient_id, $doctor_id, $appointment_date){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO appointments(patient_id, doctor_id, appointment_date) VALUES(?, ?, ?)");
        return $stmt->execute([$patient_name, $doctor_name, $appointment_date]);
    }

    function getAppointments() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM appointments");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getAppointment($id) {
        global $pdo;
        $stm = $pdo->prepare("SELECT * FROM appointments WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function updateAppointment($appointment_id, $patient_id, $doctor_id, $addpointment_date){
        global $pdo;
        $stm = $pdo->prepare("UPDATE appointments SET patient_id = ? , doctor_id = ?, appointment_date = ?  WHERE id = ?");
        return $stmt->execute([$patient_id, $doctor_id, $appointment_date, $appointment_id]);
    }

    function listAppointments(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM appointments");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function searchAppointment($keyword){
        global $pdo;
        $stmt = $pdo->prepare("
                SELECT * FROM appointments 
                WHERE patient_id IN(SELECT id FROM patients WHERE name LIKE ?)
                OR doctor_id IN(SELECT id FROM doctors WHERE name LIKE ?) ");
        $stmt->execute(['%' . $keyword . '%' , '%' $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function deleteAppointment($appointment_id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM appointments WHERE id = ? ");
        return $stmt->execute([$appintment_id]);
    }

    /* Function Manage Prescription */
    function addPrescription ($patient_id, $doctor_id, $medication, $dosage, $instructions){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO prescriptions(patient_name, doctor_name, medication, dosage, instructions) VALUES(?, ?, ?, ?, ?)");
        return $stmt->execute([$patient_id, $doctor_id, $medication, $dosage, $instructions]);
    }

    function getPrescriptions() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM prescriptions");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getPrescription($id){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM prescriptions WHERE id = ? ");
        $stmt->execute([$id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function updatePrescription($id, $medication, $dosage, $instruction){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE prescriptions SET  medication = ?, dasage = ?, instructions = ? WHERE id = ? ");
        return $stmt->execute([$medication, $dosage, $instructions, $id]);
    }

    function searchPrescriptions($keyword){
        global $pdo;
        $stmt = $pdo->prepare("SELECT  *
                               FROM prescriptions 
                               WHERE patient_id (SELECT id FROM  patients WHERE name LIKE ?)
                               OR doctor_id IN (SELECT id FROM doctors WHERE name LIKE ?)");
        $stmt->execute(['%' . $keyword . '%', '%' . $keyword . '%']);
        return $stmt->fetall(PDO::FETCH_ASSOC);
    }

    function listPrescriptions(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM Prescriptions");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function searchPrescription($keyword){
        global $pdo;
        $stmt = $pdo->prepare("
                SELECT * FROM prescriptions
                WHERE medication LIKE ?
                OR patient_id IN (SELECT ID FROM patient WHERE nam like ?)" );
        $stmt->execute(['%' . $keyword . '%', '%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function deletePrescription($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM prescriptions WHERE in = ? ");
        return $stmt->execute([$id]);
    }

    /* Function manage Medical_history */

    function addMedicalHistory($patient_id, $date_of_visit, $symtoms, $diagnosis, $treatment){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO medical_history(patient_id, date_of_visit, symptoms, diagnosis, treatment) VALUES(?, ?, ?, ?, ?) ");
        return $stmt->execute([$patient_id, $date_of_visit, $symptoms, $diagnosis, $treatment]);
    }

    function getMedicalHistories() {
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM medical_history");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getMedicalHistory($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM medical_history WHERE id = ? ");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function updateMedicalHistory($id, $date_of_visit, $symptoms, $diagnosis, $treatment){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE medical_history SET  date_of_visit = ?, symptoms = ?, diagnosis = ?, treatment = ? WHERE id = ? ");
        return $stmt->execute([$date_of_visit, $symptoms, $diagnosis, $treatment, $id]);
    }

    function listMedicalHistories($patient_id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM medical_history WHERE patient_id = ? ");
        $stmt->execute([$patient-id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function searchMedicalHistory($keyword){
        global $pdo;
        $stmt = $pdo->perpare("SELECT * FROM medical_history WHERE condition LIKE ? ");
        $stmt->execute(['%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSCO);
    }

    function deleteMedicalHistory($id){
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM medical_history WHERE id = ?");
        return $stmt->execute([$id]);
    }

    /* Function Manage Invoice */

    function addbilling($patient_id, $appointment_id, $amount, $status){
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO billing(patient_id,appointment_id, amount, date_billed, status, notes) VALUES(?,?,?, new(), ?,?) ");
        return $stmt->execute([$patient_id, $appointment_id, $amount, $status, $notes]);
    }

    function getbillings(){
        global $pdo;
        $stmt = $pdo->query("SELECT * FROM billing");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getBilling($billing_id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM billing WHERE id= ? ");
        $stmt->execute([$billing_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    function updateBilling($billng_id, $amount, $status, $notes){
        global $pdo;
        $stmt = $pdo->prepare("UPDATE invoices SET amount = ?, status = ?,  WHERE billing_id= ? ");
        return $stmt->execute([$amount, $status, $notes,$billing_id]);
    }

    function deleteBilling($billing_id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM billing WHERE billint_id = ? ");
        return $stmt->execute([$billing_id]);
    }

    function listBillings($patient_id){
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM billing WHERE patient_id = ?");
        $stmt->execute([$patient_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function searchBilling($keyword){
        global $pdo;
        $stmt = $pdo->prepare("
                    SELECT * FROM billing 
                    WHERE status LIKE ?
                    OR patient_id IN(SELECT id FROM patients WHERE name like ? )");
        $stmt->execute(['%' . $keyword . '%' , '%' . $keyword . '%']);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDoctorAppointment($doctor_id)
    {
        global  $pdo;
        $stmt = $pdo->prepare("SELECT a.id , p.name , a.appointment_date, a.status
                               FROM appointments a
                               JOIN patients p ON a.patient_id = p.id
                               WHERE a.doctor_id = ? 
                               ORDER BY a.appointment_date ASC");
        $stmt->execute([$doctor_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function getDoctorProfile($doctor_id)
    {
        $stmt = $pdo->prepare("SELECT * FROM doctors WHERE id = ? ");
        $stmt->execute([$doctor_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }  
?>
