<?php
    include 'database.php';
    if(isset($_POST['submit']))
    {
            $first_name = mysqli_real_escape_string($con,$_POST['Firstname']);
            $last_name = mysqli_real_escape_string($con,$_POST['Lastname']);
            $age = mysqli_real_escape_string($con,$_POST['age']);
            $roll_no = mysqli_real_escape_string($con,$_POST['Rollno']);
            $phone_no = mysqli_real_escape_string($con,$_POST['Phoneno']);
            $sem = mysqli_real_escape_string($con,$_POST['sem']);
            $branch = mysqli_real_escape_string($con,$_POST['branch']);
            $email_id =mysqli_real_escape_string($con,$_POST['email']);
            $parent_ph =mysqli_real_escape_string($con,$_POST['parent_ph']);
            $aadhar_no = mysqli_real_escape_string($con,$_POST['aadhar']);

        $sql = "INSERT INTO details(first_name,last_name,age,roll_no,phone_no,sem,branch,email_id,parent_ph,aadhar_no) 
        VALUES ('$first_name','$last_name','$age','$roll_no','$phone_no','$sem','$branch','$email_id','$parent_ph','$aadhar_no')";

       /* if(count_digit($phone_no) >11 && count_digit($parent_ph) >11 ){
            echo "<script>alert('Phone number invalid')</script>";
            echo "<script>window.open('insert.php','_self')</script>";
        }*/
        $check_roll_no = "SELECT * FROM details WHERE roll_no = $roll_no";
        $qer = mysqli_query($con,$check_roll_no);
        $fet = mysqli_fetch_array($qer);

        if($fet >0)
        {
            echo "<script>alert('Error: Roll number already resgistered')</script>";
            echo "<script>window.open('tripform.php','_self')</script>";
        }
        elseif (!filter_var($email_id, FILTER_VALIDATE_EMAIL)) 
        {
            echo "<script>alert('Error: Invalid Email address')</script>";
            echo "<script>window.open('tripform.php','_self')</script>";
        }
        elseif (!preg_match('/^[a-zA-Z\s]+$/',$first_name,$last_name)) 
        {
            echo "<script>alert('Error: Name should be Letters only')</script>";
            echo "<script>window.open('tripform.php','_self')</script>";
        }
        elseif (!preg_match('/^([0-9]{10})+$/',$phone_no,$parent_ph)) 
        {
            echo "<script>alert('Error: Phone number')</script>";
            echo "<script>window.open('tripform.php','_self')</script>";
        }
        elseif(mysqli_query($con,$sql))
        {
            echo "<script>alert('Registration Successful')</script>";
            echo "<script>window.open('tripform.php','_self')</script>";
        }
        else{
            echo "Your responce has not been submitted".mysqli_error($con);
            echo "<script>window.open('tripform.php','_self')</script>";
        }
        mysqli_close($con);    
    }
?>    