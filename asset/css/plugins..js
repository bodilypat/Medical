/* ---------------------------------------------------------------------- */
/*  Perfect Scrollbar
/* ---------------------------------------------------------------------- */
.ps-container .ps-scrollbar-x-rail:hover,
.ps-container .ps-scrollbar-x-rail.hover {
  background-color: #eee !important;
}

.ps-container .ps-scrollbar-y-rail {
  -moz-transition: all 300ms !important;
  -o-transition: all 300ms !important;
  -webkit-transition: all 300ms !important;
  transition: all 300ms !important;
  width: 4px !important;
}

.ps-container .ps-scrollbar-y {
  -moz-transition: all 300ms !important;
  -o-transition: all 300ms !important;
  -webkit-transition: all 300ms !important;
  transition: all 300ms !important;
  width: 4px !important;
}

.ps-container:hover .ps-scrollbar-y-rail,
.ps-container.hover .ps-scrollbar-y-rail {
  -moz-transition: all 300ms !important;
  -o-transition: all 300ms !important;
  -webkit-transition: all 300ms !important;
  transition: all 300ms !important;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=40);
  opacity: 0.4;
  width: 4px !important;
}

.ps-container .ps-scrollbar-y-rail:hover,
.ps-container .ps-scrollbar-y-rail.hover,
.ps-container .ps-scrollbar-y-rail.in-scrolling {
  background-color: #eee;
  width: 10px !important;
  filter: progid:DXImageTransform.Microsoft.Alpha(Opacity=60);
  opacity: 0.6;
}

.ps-container .ps-scrollbar-y-rail:hover .ps-scrollbar-y,
.ps-container .ps-scrollbar-y-rail.hover .ps-scrollbar-y,
.ps-container .ps-scrollbar-y-rail.in-scrolling .ps-scrollbar-y {
  background-color: #999;
  width: 10px !important;
}

.perfect-scrollbar {
  overflow-y: hidden !important;
}

.touch .perfect-scrollbar {
  overflow-y: scroll !important;
  -webkit-overflow-scrolling: touch !important;
}

/* ---------------------------------------------------------------------- */
/* Bootsrap Slider
/* ---------------------------------------------------------------------- */
.slider {
  display: inline-block;
  position: relative;
  vertical-align: middle;
}

.slider.slider-horizontal {
  margin: 10px 0;
  width: 210px !important;
}

.slider.slider-horizontal .slider-track {
  height: 5px !important;
  left: 0;
  margin-top: -5px;
  top: 50%;
  width: 100%;
}

.slider.slider-horizontal .slider-handle {
  margin-top: -10px !important;
}

.slider.slider-vertical {
  margin: 0 10px;
}

.slider.slider-vertical .slider-handle {
  margin-left: -10px !important;
}

.slider.slider-vertical .slider-track {
  width: 5px !important;
}

.slider.slider-vertical .slider-handle {
  margin-left: -10px !important;
}

.slider-handle.round {
  background: linear-gradient(to bottom, #dddddd 13%, #ffffff 97%) repeat scroll 0 0 transparent;
  box-shadow: 0 2px 1px -1px #ffffff inset, 0 1px 3px rgba(0, 0, 0, 0.39);
  height: 26px;
  opacity: 1;
  width: 26px;
}

.slider-selection {
  background-image: none !important;
  border-radius: none;
  box-shadow: none;
}

.slider.slider-primary .slider-selection {
  background: #007AFF;
}

.slider.slider-blue .slider-selection {
  background: #5F8295;
}

.slider.slider-green .slider-selection {
  background: #1FBBA6;
}

.slider.slider-orange .slider-selection {
  background: #FF6600;
}

.slider.slider-red .slider-selection {
  background: #C82E29;
}

.slider.slider-yellow .slider-selection {
  background: #FFB848;
}

.slider.slider-purple .slider-selection {
  background: #804C75;
}

.slider.slider-azure .slider-selection {
  background: #0095C8;
}

/* ---------------------------------------------------------------------- */
/*  Tree
/* ---------------------------------------------------------------------- */
.box-tree .nav > li > a {
  color: #8e8e93;
  font-size: 14px;
}
.box-tree .nav > li > a:hover, .box-tree .nav > li > a:focus {
  color: #5b5b60;
}
.box-tree .nav > li > a i {
  color: #007AFF;
}
.box-tree .nav > li.active > a, .box-tree .nav > li.active > a:hover, .box-tree .nav > li.active a:focus {
  color: #ffffff;
}
.box-tree .nav > li.active > a i, .box-tree .nav > li.active > a:hover i, .box-tree .nav > li.active a:focus i {
  color: #ffffff;
}

/* ---------------------------------------------------------------------- */
/*  Crop Image
/* ---------------------------------------------------------------------- */
.cropBox {
  background-color: #f5f5f5;
  border-radius: 4px;
  color: #666;
  margin-bottom: 20px;
  padding: 10px;
}

.cropArea {
  height: 350px;
  overflow: hidden;
  background-color: #ffffff;
}

.croppedBox {
  width: 220px;
  height: 220px;
}
.croppedBox > div {
  background: #fff url(../images/picture.svg) center center no-repeat;
  background-size: 50px 50px;
  height: 200px;
}

img-crop {
  background: url(../images/picture.svg) center center no-repeat;
  background-size: 100px 100px;
}

/* ---------------------------------------------------------------------- */
/*  File Input
/* ---------------------------------------------------------------------- */
.fileinput {
  display: block !important;
}

.fileinput-new.thumbnail {
  width: 200px;
}

.fileinput-preview.thumbnail {
  max-width: 200px;
  line-height: 20px;
}

/* ---------------------------------------------------------------------- */
/*  Nestable
/* ---------------------------------------------------------------------- */
.angular-ui-tree-handle {
  background: #f7f7f8;
  border: 1px solid #c8c7cc;
  color: #8e8e93;
  padding: 10px 10px;
  font-size: 14px;
  font-weight: normal !important;
}

.angular-ui-tree-handle:hover {
  color: #5b5b60;
  background: #eaeaec;
  border-color: #a6a4ac;
}

.angular-ui-tree-placeholder {
  background: #f0f9ff;
  border: 2px dashed #bed2db;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

.group-title {
  background-color: #687074 !important;
  color: #FFF !important;
}

.dd {
  max-width: none !important;
}

.dd-item > button:before {
  content: "\e649" !important;
  font-family: "themify";
  color: #007AFF;
}

.dd-item > button[data-action="collapse"]:before {
  content: "\e64b" !important;
}

.dd-handle {
  background: #f7f7f8 !important;
  border: 1px solid #c8c7cc !important;
  color: #8e8e93 !important;
}

.dd-handle:hover {
  background: #eaeaec !important;
  border-color: #a6a4ac !important;
}

/* ---------------------------------------------------------------------- */
/*  Sweet Alert
/* ---------------------------------------------------------------------- */
.sweet-overlay {
  z-index: 9998 !important;
}

.sweet-alert {
  z-index: 9999 !important;
}
.sweet-alert h2 {
  color: #5b5b60 !important;
  font-family: "Raleway", sans-serif !important;
  font-weight: 300 !important;
}
.sweet-alert button {
  padding: 5px 32px !important;
  box-shadow: none !important;
}

/* ---------------------------------------------------------------------- */
/*  Calendar
/* ---------------------------------------------------------------------- */
#calendar {
  position: relative;
}

.fc-event, #event-categories .event-category {
  padding: 2px 5px;
  background: #f7f7f8 !important;
  border: 1px solid #dddcdf !important;
  color: #8e8e93 !important;
}

#event-categories .event-category {
  cursor: move;
}

.fc-day-number {
  margin: 2px 2px 0 0;
}

.fc-header-title h2 {
  color: #c8c7cc;
  font-weight: 200;
  letter-spacing: -1px;
}

.fc-today .fc-day-number {
  font-weight: bold;
}

.fc-state-highlight {
  background: #F5F5F5 !important;
}

.fc-button {
  color: #858585 !important;
  height: 40px !important;
  line-height: 40px;
  opacity: 0.6;
}

.fc-button:hover {
  opacity: 1;
}

.fc-button-prev, .fc-button-next {
  padding: 0;
  width: 40px;
  line-height: 40px;
  text-align: center;
  position: relative;
  text-indent: -9999px;
}

.fc-button-prev .fc-text-arrow, .fc-button-next .fc-text-arrow {
  font-weight: bold;
}

.fc-button-prev:after, .fc-button-next:after {
  font-family: FontAwesome;
  text-indent: 0;
  width: 40px;
  height: 40px;
  position: absolute;
  top: 0;
  left: 0;
}

.fc-button-prev:after {
  content: "\f104";
}

.fc-button-next:after {
  content: "\f105";
}

.fc-state-default {
  background-color: #ffffff !important;
  background-image: none !important;
  border-color: #DDDDDD !important;
  box-shadow: none !important;
  color: #666666;
  text-shadow: none !important;
  border-radius: 0 !important;
}

.fc-state-down, .fc-state-active {
  opacity: 1;
}

.fc-header-left {
  position: absolute !important;
  top: 0;
  left: 15px;
  width: 50% !important;
}

.fc-header-right {
  position: absolute !important;
  top: 0;
  right: 15px;
  width: 50% !important;
}

.fc-header-center {
  display: block !important;
  padding-top: 60px !important;
}

.event-category {
  color: #ffffff;
  padding: 5px;
  border-radius: 3px;
  margin: 5px 0;
}

.fc-border-separate tr.fc-last th {
  border-top: none !important;
  border-left: none !important;
}

.fc-border-separate th.fc-last {
  border-right: none !important;
}

.fc-grid th {
  text-align: right;
}

.fc-event {
  background-color: #F0F0F0;
  border: none;
  color: #333333;
  font-size: 12px;
}

.fc-event .fc-content > span:first-child:before, .event-category:before {
  content: "\f111";
  font-family: FontAwesome;
  font-size: 6px;
  line-height: 16px;
  padding-right: 5px;
  color: #00AEFF;
  float: left;
}

.event-category {
  color: #858585;
}

.event-category:before {
  line-height: 20px;
}

.event-cancelled .fc-content > span:first-child:before, .event-category.event-cancelled:before {
  color: #FFB848 !important;
}

.event-home .fc-content > span:first-child:before, .event-category.event-home:before {
  color: #804C75 !important;
}

.event-overtime .fc-content > span:first-child:before, .event-category.event-overtime:before {
  color: #711A76;
}

.event-generic .fc-content > span:first-child:before, .event-category.event-generic:before {
  color: #46b8da !important;
}

.event-job .fc-content > span:first-child:before, .event-category.event-job:before {
  color: #007AFF !important;
}

.event-off-site-work .fc-content > span:first-child:before, .event-category.event-off-site-work:before {
  color: #1FBBA6 !important;
}

.event-to-do .fc-content > span:first-child:before, .event-category.event-to-do:before {
  color: #FF6600 !important;
}

.fc-view-month .fc-event-time {
  display: none;
}

.fc-icon-fa {
  display: inline-block;
  font-family: FontAwesome !important;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  font-size: 1.33333333em;
}

/* ---------------------------------------------------------------------- */
/*  Chartjs
/* ---------------------------------------------------------------------- */
.chart-legend > ul {
  list-style-type: none;
  padding-left: 0;
}

.chart-legend > ul li {
  clear: both;
  display: block;
  float: left;
  padding: 10px;
  line-height: 25px;
  font-size: 11px;
}

.chart-legend > ul li span {
  display: block;
  float: left;
  height: 25px;
  margin-right: 10px;
  width: 25px;
}

.legend-xs .chart-legend > ul li {
  line-height: 15px;
}
.legend-xs .chart-legend > ul li span {
  height: 15px;
  width: 15px;
  margin-right: 5px;
}

.inline .chart-legend > ul li {
  clear: none;
  display: inline-block;
  float: none;
  padding: 10px;
}

.full-width {
  max-width: 100% !important;
}

.mini-pie {
  height: 150px;
  position: relative;
  width: 100px;
  display: inline-block;
}
.mini-pie canvas {
  height: 150px;
  left: 0;
  position: absolute;
  top: 0;
  width: 100px;
}
.mini-pie span {
  line-height: 150px;
}

/* ---------------------------------------------------------------------- */
/*  Sparkline
/* ---------------------------------------------------------------------- */
.mini-stats {
  list-style: none;
  margin: 0;
  padding: 0;
}
.mini-stats li {
  text-align: center;
  margin: 0 0 0 25px;
  display: inline-block;
}
.mini-stats li:last-child {
  border-right: 0 none;
}
.mini-stats .values {
  font-size: 12px;
  padding: 5px 0 0 0;
}
.mini-stats .values strong {
  display: block;
  font-size: 18px;
  margin-bottom: 2px;
  line-height: 18px;
}
@media (max-width: 767px) {
  .mini-stats {
    width: 100%;
    padding: 20px 0;
  }
}

.jqstooltip {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
}

.mini-stats .sparkline-bar {
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  line-height: normal !important;
}

.sparkline > canvas span {
  box-shadow: none;
  border: none;
  background: red;
}

/* ---------------------------------------------------------------------- */
/*  Jcrop - Crop Image
/* ---------------------------------------------------------------------- */
.crop-image form {
  margin: 1.5em 0;
}

.jcrop-holder #preview-pane {
  display: block;
  position: absolute;
  z-index: 1000;
  top: 10px;
  right: -280px;
  padding: 6px;
  border: 1px rgba(0, 0, 0, 0.4) solid;
  background-color: white;
  -webkit-border-radius: 6px;
  -moz-border-radius: 6px;
  border-radius: 6px;
  -webkit-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  -moz-box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
  box-shadow: 1px 1px 5px 2px rgba(0, 0, 0, 0.2);
}

/* The Javascript code will set the aspect ratio of the crop
 area based on the size of the thumbnail preview,
 specified here */
#preview-pane .preview-container {
  width: 250px;
  height: 170px;
  overflow: hidden;
}

/* ---------------------------------------------------------------------- */
/*  Multiple File Upload
/* ---------------------------------------------------------------------- */
.fileupload .uneditable-input {
  white-space: nowrap;
}

.fileupload-new .input-group .btn-file {
  -webkit-border-radius: 0 3px 3px 0 !important;
  -moz-border-radius: 0 3px 3px 0 !important;
  border-radius: 0 3px 3px 0 !important;
}

.fileinput-button {
  overflow: hidden;
  position: relative;
}

.fileinput-button input {
  cursor: pointer;
  direction: ltr;
  font-size: 23px;
  margin: 0;
  opacity: 0;
  position: absolute;
  right: 0;
  top: 0;
  transform: translate(-300px, 0px) scale(4);
}

/* ---------------------------------------------------------------------- */
/*  Maps
/* ---------------------------------------------------------------------- */
.map {
  display: block;
  height: 350px;
  margin: 0 auto;
}
