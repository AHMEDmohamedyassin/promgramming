<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>secure</title>
    
    <style>
        fieldset{
            margin-top: 200px;
        }
        input {
            display:block;
            margin:20px auto;
        }
    </style>
</head>
<body>
    <fieldset>
        <legend>sign in for the author only :0 </legend>
        <form action="check.php" method="POST">
            <input type="password" name="username">
            <input type="password" name="password">
            <input type="submit" name="submit">
        </form>
    </fieldset>
</body>
</html>
