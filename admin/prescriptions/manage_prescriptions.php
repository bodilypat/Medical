<?php

    require '../includes/functions.php';

    $prescription = getPrescriptions();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UFT-8">
        <title>Prescriptions List</title>
    </head>
    <body>
        <h2>Prescriptions List</h2>
        <table border="1" name="prescription-table">
            <tr>
                 <th>ID</th>
                 <th>Patient Name</th>
                 <th>Doctor Name</th>
                 <th>Instructions</th>
                 <th>Medications</th>
                 <th>Dosage</th>
                 <th>Start Date</th>
                 <th>End Date</th>
                 <th>Actions</th>
            </tr>
            <?php foreach($prescriptions as $prescription): ?>
            <tr>
                 <td><?php echo $prescription['id'];?></td>
                 <td><?php echo $prescription['patient_name'];?></td>
                 <td><?php echo $prescription['doctor_name'];?></td>
                 <td><?php echo $prescription['instruction'];?></td>
                 <td><?php echo $prescription['medication'];?></td>
                 <td><?php echo $prescription['dosage'];?></td>
                 <td><?php echo $prescription['start_date'];?></td>
                 <td><?php echo $prescription['end_date'];?></td>
                 <td>
                    <a href="edit_prescription.php?id=<?php echo $prescription['id']; ?>">Edit</a>
                    <a href="delete_prescription.php?id=<?php echo $prescription['id']; ?>" 
                       onClick=" Confirm('Are you sure you want to delete this prescription?');">Delete</a>
                 </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <a href="add_prescription.php">Add New Prescription</a>
    </body>
</html>
