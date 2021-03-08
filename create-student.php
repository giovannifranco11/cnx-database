<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create-Student</title>
</head>
<body>
    
    <form action="save-student.php" method="POST">
        Name <input type="text" name="name"> <br/><br/>
        Gender: 
        <input name="gender" type="radio" value="0"/> Female
        <input name="gender" type="radio" value="1"/> Male
        <br/><br/>
        <select name="stratum">
            <option value="1">One<option/>
            <option value="2">Two<option/>
            <option value="3">Three<option/>
            <option value="4">Four<option/>
            <option value="5">Five<option/>
            <option value="6">Six<option/>
        <select/>
        <br/><br/>
        <input type="submit" value="Save Student">

    </form>
     




</body>
</html>