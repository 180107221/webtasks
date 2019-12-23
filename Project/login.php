<?php
    if(isset($_COOKIE['user'])){
    $mycon = mysqli_connect('localhost','root','','verse');
    mysqli_select_db($mycon,'verse');
    $q  = $_COOKIE['user'];
    $query = "SELECT * FROM `cookie` WHERE `md5_user`= '$q'";
    $res = mysqli_query($mycon,$query);
    while($row = mysqli_fetch_array($res)){
        if(isset($_COOKIE['user']) == $row['md5_user']){
            echo '<script type="text/javascript">location.replace("index.php");</script>';   
        }
    }
}      
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
                    while($row = mysqli_fetch_array($res)){
                        if($row['email'] == $_POST['Email'] && $row['password'] == md5($_POST['Password']."KMG010601")){
                            $cook = md5($_POST['Email'].$_POST['Password']."KMG010601");
                            setcookie ("user", $cook,time()+3600*24*30, "/", "localhost");
                            echo '<script type="text/javascript">location.replace("index.php");</script>';
                        }
                        else{
                            echo "<script>alert('Login or password is not correct');</script>";
                        }
                    }
                }
                mysqli_close($mycon);
            }
            else{
                echo '<script>alert("Fill in the entire field!!!");</script>';
            }
        }
?>

            <title>Login</title>
    <form action="#" method="POST">
            <div>
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