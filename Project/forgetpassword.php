<style>
    .forget{
        grid-area: content;
        margin-top: 100px;
        display: flex;
        flex-direction: column;
    }
    #messageBox{
        display: none;
    }
    #messageBox b{
        font-size: 22px;
        margin: 5px;
        color: red;
    }
    .forget input{
        margin: 5px;
        width: 100px;
        font-size: 18px;
    }
    .forget .in{
        width: 300px;
    }
    #in{
        width: 300px;
    }
    a{
        font-size: 18px;
    }
    .back{
        margin: 10px;
        width: 250px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
</style>
<div class="forget">
    <input id="in" type="text" placeholder="Введите email адрес аккаунта">
    <div id="messageBox">
        <b>Invalid Email account format</b>
    </div>
    <input class="in" type="text" placeholder="Введите секретный слова">
    <div class="back">
        <a href="FirstPage.php">Back</a>
        <input type="submit" value="Submit">
    </div>
</div>
<script defer>
let myInput4 = document.getElementById('in');
myInput4.onfocus = function() {
    myInput4.onkeyup = function(){
        if(validateEmail(myInput4.value)){
            document.getElementById('messageBox').style.display = 'none';
        }
        else{
            document.getElementById('messageBox').style.display = 'block';
        }
    }
}
myInput4.onblur = function() {
    document.getElementById("messageBox").style.display = "none";
}
function validateEmail(email) {
  var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}
</script>