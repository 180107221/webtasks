<title>Login</title>
<form action="#" method="POST">
        <div class="form">
            <div>
			    <p> Email <input type="text" name="Email"></p>
			    <p> Password <input type="password" id="password" name="Password"><input type="checkbox" onclick="onClick()">Show Password</p>
            </div>
            <div>
                <button type="submit" name="submit">Login</button>
                <a href="FirstPage.php?category=registration"> Registration </a>
            </div>
        </div>
</form>

<script> 
function onClick(){
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } 
    else {
        x.type = "password";
    }
}
</script>

<?php  
    if(isset($_POST['submit'])){
        if($_POST['Email'] != "" && $_POST['Password'] != ""){
            $mycon = mysqli_connect('localhost','root','','verse');
            mysqli_select_db($mycon,'verse');
            $q  = $_POST['Email'];
            $query = "SELECT * FROM `verse` WHERE `email`= '$q'";
            $res = mysqli_query($mycon,$query);
            $b = mysqli_num_rows($res);
            if($b == 0){
                echo "<script>alert('Account does not exist with this mailing address');</script>";
            }
            else{
                if($b['email'] == $_POST['Email'] && $b['password'] == $_POST['Password']){
                    header('Location : index.php');
                    exit();
                }
                else{
                    echo "<script>alert('Login or password is not correct');</script>";
                }
            }
            mysqli_close($mycon);
        }
        else{
            echo '<script>alert("Fill in the entire field!!!");</script>';
        }
    }
?>