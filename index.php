
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Information Form</title>
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <script src="js/validation.js"></script>
</head>
<body>
    <h1>Student Information Form</h1>

    
    <form method="post"  action="student_reflector.php" nonvalidate >
        

        <label for="name">Name</label>
        <input type="text" id="name" name="name" required minlength="2" maxlength="20" pattern="[A-Za-z\s]+" title="Name should only contain letters and spaces.">

        <label for="program">Program of study</label>
        <select id="program" name="program" required title="Please select a program of study.">
            <option value="">-- Select --</option>
            <option value="Computer Systems Technology" >Computer Systems Technology</option>
            <option value="Information Technology" >Information Technology</option>
            <option value="Electronics Technology" >Electronics Technology</option>
        </select>

        <label for="year">Year of study</label>
        <input type="number" id="year" name="year" required min="2021" max="2025" title="Please enter a valid year of study.">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required title="Please enter a valid email address.">
        
        <button type="submit">Submit</button>
        <button type="reset">Reset</button>
    </form>
</body>
</html>
