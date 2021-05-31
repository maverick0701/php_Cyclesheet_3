<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body >

<form action="index.php" method="post">
Name: <input type="text" name="name"><br>
Password :<input type="password" name="password"><br>
<input type="radio" name="gender" value="male"> Male<br>
<input type="radio" name="gender" value="female"> Female<br>
<input type="radio" name="gender" value="other"> Other<br>
<label for="birthday">Birthday:</label>
<input type="date" id="birthday" name="birthday"><br>
<h4>Education</h4>
<input type="checkbox" id="education" name="education[]" value="UG">
<label for="education">UG</label><br>
<input type="checkbox" id="education" name="education[]" value="PG">
<label for="education">PG</label><br>
<input type="checkbox" id="education" name="education[]" value="PROFF">
<label for="education">Professioanl</label><br>
Email: <input type="email" name="email"><br>
<input type="submit">
</body>
</html>