<!DOCTYPE html>
<html>
<head>
    <title>PHP Form</title>
</head>
<body>

 <form action="\Web Programming(Final Term-PHP)\form2.php"  method="GET">

    <label for="name"> Name: </label>
    <input type="text" id="name" placeholder="Enter your name" name="name" required>

    <br><br>

    <label for="ID">ID: </label>
    <input type="number" id="ID" placeholder="Enter your Id" name="ID" required>
    
    <br><br>

    <label for="email">Email: </label>
    <input type="email" id="email" placeholder="Example:demo@gmail.com" name="email" required>
    
    <br><br>

   <label for="number"> Contact Number: </label>
   <input type="tel" id="number" placeholder="Enter your contact number" name="number" required>
   
   <br><br>

    <!--<input type="submit" value="Submit">-->
    <button type="submit">Submit</button>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h3>Submitted Data</h3>";
    echo "Name: " . htmlspecialchars($_GET['name']) . "<br>";
    echo "ID: " . htmlspecialchars($_GET['ID']) . "<br>";
    echo "Email: " . htmlspecialchars($_GET['email']) . "<br>";
    echo "Phone Number: " . htmlspecialchars($_GET['number']) . "<br>";
}
?>
<a href="\Web Programming(Final Term-PHP)\form2.php"> Click Here For Second Page </a>

</body>
</html>

<?php
    echo ("<br><br>");
    echo ("Hello, Department Of CSE!!!");
?>