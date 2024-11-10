<?php include("head.html")
?>
<body>
    <div class="register">
        <form action="#" method="post">
            <br><br>
            <label for="username">USERNAME:<br></label>
            <input type="text" size="20" name="n" placeholder="Enter Your Name" required>
            <br><br>
            <label for="age">AGE:<br></label>
            <input type="number" size="3" name="a">
            <br><br>
            <label for="DOB">DOB:<br></label>
            <input type="date" name="d">
            <br><br>
            <label for="gender">GENDER</label>
            <input type="radio" value="male" name="g">male
            <input type="radio" value="female" name="g">female
            <input type="radio" value="others" name="g">others
            <br><br>
            <label for="email">EMAIL:<br></label>
            <input type="email" size="30" name="e">
            <br><br>
            <label for="password">PASSWPRD:<br></label>
            <input type="password" maxlength="8" min="4" name="p">
            <br><br>
            <input type="submit" value="REGISTER">
            <input type="reset" value="CANCEL">
        </form>
    </div>
</body>
<?php include("footer.html")
?>