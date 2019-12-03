<title>Registration</title>
<link rel="stylesheet" type="text/css" href="StyleforReg.css">
<form name="form" action="#" method="POST">
    <div>
        <div>
            <p> First Name <input type="text" name="FirstName" id="name"></p>
            <p> Last Name <input type="text" name="LastName" id="lastname"></p>
            <p> Birth Date
                <select name="days" id="days">
                    <?php 
                      for($i = 1; $i <= 31;$i++){
                        echo "<option>$i</option>";
                      }
                    ?>
                </select>
                <select name="month" id="month" onchange="days_this_month()"> 
                    <script>
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
                    <script>
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
        <button name="submit" type="submit" onclick="onCheck()"> Registration</button>
    </div>
</form>

<?php 
    $mycon = mysqli_connect('localhost','root','','verse');
    mysqli_select_db($mycon,'verse');
    $query = "SELECT * FROM `verse`";
    $res = mysqli_query($mycon,$query);
    mysqli_close($mycon);
?>

<script type="text/javascript">
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
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
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

function onCheck(){
    let name = document.getElementById('name').value;
    let lastname = document.getElementById('lastname').value;
    let email = document.getElementById('email').value;
    let pass = document.getElementById('password').value;
    let pass1 = document.getElementById('password1').value;
    if(name == "" || lastname == "" || email == "" || pass == "" || pass1 == ""){
        alert("Fill in the entire field!!!");
    }
}
</script>


