<?php 
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Assignment</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/css/bootstrap-datepicker.css">
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.4/js/bootstrap-datepicker.min.js"></script>

<style type="text/css">
    .bs-example{
    	margin-top:     10px;
    }
    .navbar{
        margin-top:     5px;
    }
    .panel_div {
        margin-left:    105px;
    }
    
    .submit_button {
        margin-left:    25px;
    }
    .form_blocks {
        padding-left:   25px;
    }
    .well_block {
        width:          600px;
        margin-left:    910px;
        text-align:     center;
        display:        none;
    }
    .required_error {
        color: red;
    }
</style>
</head>
<body>
<?php include 'navbar.php'; ?>