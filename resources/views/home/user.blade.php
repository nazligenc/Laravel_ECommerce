<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

<h1>This is a test parameters</h1>
<form action="save" method="post">
    @csrf
    <label for="fname">First Name:</label>
    <input type="text" id="fname" name="fname"><br><br>
    <label for="lname">Last Name:</label>
    <input type="text" id="lname" name="lname"><br><br>
    <input type="submit" value="Save">
</form>

</body>
</html>
