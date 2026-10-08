<?php
include "process.php";

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>simple page for data edditing</h2>

<?php foreach($my_single_datare as $data) { ?>
     <form action="process.php?up=<?php echo $data['id']; ?>" method="POST">
                        <label for="firstname">First name</label>
                        

                        <input type="text" name="first_name" value="<?php echo  $data['first_name']; ?>" id="first_name"><br>
                        <label for="lastname">Last name</label>
                        <input type="text" name="last_name" value="<?php echo  $data['last_name']; ?>" id="last_name"><br>
                        <label for="age">Age</label>
                        <input type="number" name="age" value="<?php echo  $data['age']; ?>" id="age"><br>
                        
                        <input type="submit" name="update" value ="update" id="submit">

            </form>


            <?php } ?></body>
</html>