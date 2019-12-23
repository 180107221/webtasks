<?php 
    if(isset($_POST['submit'])){
        if($_POST['FirstName'] != "" && $_POST['LastName'] != "" && $_POST['EmailAddress'] != "" && $_POST['Password'] != "" && $_POST['PasswordAgain'] != ""){
            if($_POST["Password"] == $_POST["PasswordAgain"]){
                $em = $_POST['EmailAddress'];
                if(!(filter_var($em, FILTER_VALIDATE_EMAIL))){
                    echo '<script>alert("Invalid account format");</script>';
                }
                else{
                    $mycon = mysqli_connect('localhost','root','','verse');
                    mysqli_select_db($mycon,'verse');
                    $q  = $_POST['EmailAddress'];
                    $query = "SELECT * FROM `verse` WHERE `email`= '$q'";
                    $res = mysqli_query($mycon,$query);
                    $b = mysqli_num_rows($res);
                    $quer = "SELECT * FROM `verse_images` WHERE `id`= 10";
                    $re = mysqli_query($mycon,$quer);
                    while($row = mysqli_fetch_array($re)){
                        $i = $row['image'];
                    }
                    if($b == 0){
                        $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                        $name = $_POST['FirstName'];
                        $lname = $_POST['LastName'];
                        $d = $_POST['days'];
                        $m = $months[$_POST['month']];
                        $y = $_POST['year'];
                        $e = $_POST['EmailAddress'];
                        $pass = md5($_POST['Password']."KMG010601");
                        $sql = mysqli_query($mycon,"INSERT INTO `verse` (`firstname`, `lastname`, `year`,`email`,`password`,`profile_img`) VALUES ('$name', '$lname','$d/$m/$y','$e','$pass','$i')");
                        $cook = md5($e.$_POST['Password']."KMG010601");
                        setcookie("user", $cook,time()+3600*24*30,"/","localhost");
                        mysqli_query($mycon,"INSERT INTO `cookie` (`id_user`, `md5_user`) VALUES ('','$cook')");
                        echo '<script type="text/javascript">location.replace("index.php");</script>';
                    }
                    else{
                        echo "<script>alert('An account already exists with this mailing address');</script>";
                    }
                    mysqli_close($mycon);        
                }
            }
            else{
                echo "<script>alert('Different Passwords');</script>";
            }
        }
        else{
            echo "<script>alert('Fill in the entire field!!!');</script>";
        }  
    }
?>
<title>Registration</title>
<link rel="stylesheet" type="text/css" href="StyleforReg.css">
<form name="form" action="#" method="POST">
    <div>
        <div>
            <p> First Name <input type="text" name="FirstName" id="name"></p>
            <p> Last Name <input type="text" name="LastName" id="lastname"></p>
            <p> Birth Date
                <select name="days" id="days">
                    <script defer>
                        let ss = document.getElementById('days');
                        for(let i = 1; i <= 31; i++){
                            let op = document.createElement('option');
                            op.innerHTML = i;
                            ss.appendChild(op);
                        }
                    </script>
                </select>
                <select name="month" id="month" onchange="days_this_month()"> 
                    <script defer>
                        let m = document.getElementById('month');
                        for(let i = 0; i < 12; i++){
                            let months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                            let mon = document.createElement('option');
                            mon.innerHTML = months[i];
                            mon.value = i;
                            m.appendChild(mon);
                        }
                    </script>
                </select> 
                <select name="year" id="year" onchange="days_this_month()">
                    <script defer>
                        let y = document.getElementById('year');
                        for(let i = 2019; i >= 1919; i--){
                            let op = document.createElement('option');
                            op.innerHTML = i;
                            y.appendChild(op);
                        }
                    </script>
                </select>
            </p>
            <p> Email address <input type="text" name="EmailAddress" id="email"></p>
            <p> Password <input type="password" name="Password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"> <input type="checkbox" onclick="onClick()">Show Password </p>
            
            <p> Password again <input type="password" name="PasswordAgain" id="password1"><div id="password1P"></div></p>
        </div>
        <div id="message">
            <p>Password must contain the following:</p>
            <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
            <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
            <p id="number" class="invalid">A <b>number</b></p>
            <p id="length" class="invalid">Minimum <b>8 characters</b></p>
        </div>
        <div id="message1">
            <p> Passwords do not match </p>
        </div>
        <div id="message2">
            <p> Invalid account format </p>
        </div>
        <button name="submit" type="submit"> Registration</button>
    </div>
</form>
<script defer>
    function days_this_month(){
        let month = document.getElementById('month').value;
        let year = document.getElementById('year').value;
        let days = document.getElementById('days');
        let d = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31];
        for(let i = 0; i < 12; i++){
            if(month == 1){
                if(year % 4 == 0 &&(year % 100 != 0 || year % 400 == 0)){
                    days.innerHTML = "";
                    for(let x = 1; x <= 29; x++){
                        let optionDay = document.createElement('option');
                        optionDay.innerHTML = x;
                        days.appendChild(optionDay);
                    }
                }
                else{
                    days.innerHTML = "";
                    for(let x = 1; x <= d[month]; x++){
                        let optionDay = document.createElement('option');
                        optionDay.innerHTML = x;
                        days.appendChild(optionDay);
                    }
                }
            }
            else{
                days.innerHTML = "";
                for(let x = 1; x <= d[month]; x++){
                    let optionDay = document.createElement('option');
                    optionDay.innerHTML = x;
                    days.appendChild(optionDay);
                }
            }
        }
    }
var myInput = document.getElementById("password");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");
myInput.onfocus = function() {
    document.getElementById("message").style.display = "block";
}
myInput.onblur = function() {
    document.getElementById("message").style.display = "none";
}
myInput.onkeyup = function() {
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } 
  else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } 
  else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } 
  else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } 
  else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}
var myInput1 = document.getElementById('password1');
myInput1.onfocus = function() {
    myInput1.onkeyup = function(){
        if(myInput.value == myInput1.value){
            document.getElementById("message1").style.display = "none";
        }
        else{
            document.getElementById("message1").style.display = "block";
        }
    }
    if(myInput.value == myInput1.value){
            document.getElementById("message1").style.display = "none";
        }
        else{
            document.getElementById("message1").style.display = "block";
        }
}
myInput1.onblur = function() {
    document.getElementById("message1").style.display = "none";
}
function onClick(){
    var x = document.getElementById("password");
    var y = document.getElementById("password1");
    if (x.type === "password" && y.type === "password") {
        x.type = "text";
        y.type = 'text';
    } 
    else {
        x.type = "password";
        y.type = "password";
    }
}
let myInput2 = document.getElementById('email');
myInput2.onfocus = function() {
    myInput2.onkeyup = function(){
        if(validateEmail(myInput2.value)){
            document.getElementById('message2').style.display = 'none';
        }
        else{
            document.getElementById('message2').style.display = 'block';
        }
    }
}
myInput2.onblur = function() {
    document.getElementById("message2").style.display = "none";
}
function validateEmail(email1) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email1);
}
</script>