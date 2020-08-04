<!DOCTYPE html>
<html>
<body>
<h1>Buat Account Baru!</h1>
<h3>Sign Up Form</h3>
<form action="/welcome" method="POST">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
    <p>First name:</p>
        <input type="text" name="first_name"/>
    <p>Last name:</p>
        <input type="text" name="last_name"/>
    <p>Gender:</p>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="female">
        <label for="female">Female</label><br>
        <input type="radio" id="other" name="gender" value="other">
        <label for="other">Other</label>
    <p>Nationality</p>
        <select name="national">
            <option value="indo">Indonesian</option>
            <option value="malay">Malaysian</option>
            <option value="singa">Singapore</option>
            <option value="aus">Australian</option>
        </select>
    <p>Language Spoken:</p>
        <input type="checkbox" id="indo" name="indo" value="indo">
        <label for="indo">Bahasa Indonesia</label><br>
        <input type="checkbox" id="english" name="english" value="english">
        <label for="english">English</label><br>
        <input type="checkbox" id="otherL" name="otherL" value="otherL">
        <label for="otherL">Other</label><br>
    <p>Bio:</p>
        <textarea id="textarea" name="textarea" rows="6" cols="20"></textarea>
    <br><br><input type="submit" value="Submit">
</form>
</body>
</html>