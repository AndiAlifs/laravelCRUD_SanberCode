<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Sign Up</title>
</head>
<body>
    <h1>Buat Account Baru!</h1>
    <h2>Sign Up Form</h2>
    <form action="/welcome" method="post">
        @csrf
        First name:<br>
        <br> <input type="text" name="first_name" id="first_name"> <br>
        <br> Last name:<br>
        <br> <input type="text" name="last_name" id="last_name"> <br>
        <br> <label for="gender">Gender:</label> <br> <br>
        <input type="radio" name="gender" id="gender" value="Male"> Male <br>
        <input type="radio" name="gender" id="gender" value="Female"> Female <br>
        <input type="radio" name="gender" id="gender" value="Other"> Other <br>
        <br>Nationality: <br>
        <br> <select name="nationality" id="nationality">
            <option value="indonesian">Indonesian</option>
            <option value="singaporean">Singaporean</option>
            <option value="malaysian">Malaysian</option>
            <option value="australian">Australian</option>
        </select> <br>
        <br>Language spoken: <br> <br>
        <input type="checkbox" name="language" id="language" value="bahasa"> Bahasa Indonesia <br>
        <input type="checkbox" name="language" id="language" value="english"> English <br>
        <input type="checkbox" name="language" id="language" value="Other"> Other <br>
        <br>Bio: <br> <br>
        <textarea name="bio" id="bio" cols="30" rows="10"></textarea> <br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>