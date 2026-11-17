
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <title>Student Info Page</title>
</head>
<body>
    <h1>Student Information</h1>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST["name"] ;
    $program = $_POST["program"] ;
    $year    = $_POST["year"] ;
    $email   = $_POST["email"] ;

    echo "<p>Thank you, " . $name . " ! Your information was submitted successfully.</p>";
        echo "<p>Program: " . $program . "</p>";
        echo "<p>Year: " . $year . "</p>";
        echo "<p>Email: " . $email . "</p>";

    } else {
        echo "<p>No valid submission received.</p>";
    }
   
    ?>

</body>
</html>
