<!DOCTYPE html>
<html>
<body>
<h2>Student Form</h2>
<p>* All fields are mandatory</p>
<form action="display.php" method="post">
Name:<br>
<input type = "text" name="name" maxlength="40" required><small>(max 40 characters)</small><br>
<br>
MIS:<br>
<input type = "text" name="mis" required><small>(9 digit number)</small><br>
<br>
Contact no.:<br>
<input type="number" name="phone" maxlength="10" required>
<br>
<input type="submit" name="submit" value="Submit"> 
</form>


</body>
</html>

