<!DOCTYPE html>
<html>
    <head>
        <title>
            Form Sign Up
        </title>
    </head>

    <body>
        <h1>
            Buat Account Baru !
        </h1>
        <h4>Sign Up For Form</h4>
        <form action="welcome" method="POST">
            @csrf
            <label for="fname">First Name :</label>
            <br>
            <input type="text" id="fname" name="fname">
            <br><br>
            <label for="lname">Last Name :</label>
            <br>
            <input type="text" id="lname" name="lname">
            <br><br>
            <label>Gender :</label>
            <br><br>
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label><br>
            <input type="radio" id="other" name="gender" value="other">
            <label for="other">Other</label><br>
            <br>
            <label for="nationality">Nationality :</label><br><br>
            <select name="nationality" id="nationality">
                <option>Indonesian</option>
                <option>America</option>
                <option>Malaysia</option>
                <option>Singapore</option>
            </select><br><br>
            <label for="language">Language Spoken :</label><br><br>
            <input type="checkbox" id="bahasa" name="bahasa" value="Bahasa Indonesia">
            <label for="bahasa">Bahasa Indonesia</label><br>
            <input type="checkbox" id="english" name="english" value="english">
            <label for="english">English</label><br>
            <input type="checkbox" id="chkOther" name="chkOther" value="other">
            <label for="chkOther">Other</label><br>
            <br>
            <label>Bio :</label><br><br>
            <textarea id="txtBio" name="txtBio" rows="4" cols="25"></textarea>
            <br>
            <input type="submit" value="Sign Up">
        </form>
    </body>
</html>
