<?php
include "connection.php";

if(isset($_POST['submit'])){
            $fname = $_POST['first_name'];
            $lname = $_POST['last_name'];
            $age = $_POST['age'];  

            // query to insert to the database
            $form_data = "INSERT INTO student(first_name,last_name,age) VALUES('$fname','$lname',$age)";

            //execute query
            mysqli_query($conn,$form_data);

            //redirect to the form page
            header("Location:form.php");
           

}

######################################################################

//fetch all students from the database table
$datas = "SELECT * FROM student";
$students = mysqli_query($conn,$datas);


#################################################################
// view single data from the database
if(isset($_GET['id'])){
            $id = $_GET['id'];
            $single_data = "SELECT * FROM student WHERE id = $id";
            $my_single_data = mysqli_query($conn,$single_data);
}





########################################

//edit specifi data from database


if(isset($_GET['edit'])){
            $id = $_GET['edit'];
            $edit_data = "SELECT * FROM student WHERE id = $id";
            $my_single_datare = mysqli_query($conn, $edit_data);
}



###############################################


if(isset($_POST['update']) && isset($_GET['up'])){

    $id = $_GET['up'];
    $fname = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $age = $_POST['age'];

    $update_data = "UPDATE student 
                    SET first_name='$fname',
                        last_name='$lname',
                        age='$age'
                    WHERE id='$id'";



    if(mysqli_query($conn, $update_data)){
        header("Location: form.php");
        exit();
    }else{
        echo "Update Failed!";
    }
}


if(isset($_GET['del'])){
            $id = $_GET['del'];
            $delete_data = "DELETE FROM student WHERE id = $id";
            $my_single_datares = mysqli_query($conn, $delete_data);
             header("Location: form.php");
}

