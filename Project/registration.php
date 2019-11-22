<title>Registration</title>
<form name="form" action="#" method="POST">
    <div>
        <div>
            <p> First Name <input type="text" name="First Name" id="name"></p>
            <p> Last Name <input type="text" name="Last Name" id="lastname"></p>
            <p> Year 
                <select>
                    <option></option>
                    <?php 
                        for($i = 1919;$i <= date(Y);$i++){
                            echo "<option>$i</option>";
                        }
                    ?>
                </select>
            </p>
            <p> Email address <input type="text" name="Email address" id="email"></p>
            <p> Password <input type="password" name="Password" id="password"></p>
            <p> Password again <input type="password" name="Password again" id="password1"></p>
        </div>
        <button type="submit">Registration</button>
    </div>
</form>