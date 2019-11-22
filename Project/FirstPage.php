<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="StyleforFP.css">
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
</body>
</html>