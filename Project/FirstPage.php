<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="images/logo1.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="StyleForFP.css">
    <link href="https://fonts.googleapis.com/css?family=Lobster|Ranga&display=swap" rel="stylesheet">
</head>
<body>
    <?php include ('header.php'); ?>
    <?php 
        if(isset($_REQUEST['category'])){
            include('registration.php');
        }
        else{
            include('login.php');
        }
    ?>
    <?php include ('footer.php'); ?>
</body>
<link rel="stylesheet" type="text/css" href="StyleForFP.css">
</html>