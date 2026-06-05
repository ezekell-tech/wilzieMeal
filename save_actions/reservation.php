<?php
// php script to send the data to the db
if (isset($_POST['order'])) {

    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $food = trim($_POST['food'] ?? '');
    $people = trim($_POST['people'] ??'');
    $selectedDate = trim($_POST['date'] ?? '');
    $date = date('y-m-d');
  

   
    

    //check if any of the fields are empty
    if ($name == '') {
        echo "<script>
        alert('All fields required!');
        window.history.back();
        </script>";
        exit;
        
    }        
    if(!preg_match("/^[a-zA-Z\s]+$/", $name))
    {
       echo"<script>
       alert('Sorry Your Name must contain Only Letters!');
       window.history.back();
       </script>
       ";
       exit;
    }

    if ($phone == '') {
        echo "<script>
        alert('All fields required!');
        window.history.back();
        </script>";
        exit;
    }  
    if(!preg_match("/^\+?[0-9]{10,15}$/", $phone))
    {
        echo"<script>
        alert('Sorry Your Phone Number Must be Only digits(+,10-15)!!');
        window.history.back();
        </script>
        ";
        exit;
    }

    if ($email == '') {
        echo "<script>
        alert('All fields required!');
        window.history.back();
        </script>";
        exit;
    }  
    if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        echo"<script>
        alert('Invalid Email Format!');
        window.history.back();
        </script>
        ";
        exit;
    }

    if ($food == '') {
        echo "<script>
        alert('All fields required!');
        window.history.back();
        </script>";
        exit;
        
    }        
    if(!preg_match("/^[a-zA-Z\s]+$/", $food))
    {
       echo"<script>
       alert('Enter a proper Meal!');
       window.history.back();
       </script>
       ";
       exit;
    }


    if ($people == '') {
        echo "<script>
        alert('All fields required!');
        window.history.back();
        </script>";
        exit;
    }  

    if ($selectedDate == '') {
        echo "<script>
        alert('All fields required!');
        window.history.back();
        </script>";
        exit;
    }  
    if(strtotime($selectedDate) < strtotime($date)){
        echo "<script>
        alert('Can not Select Past Date!!');
        window.history.back();
        </script>";
        exit;

    }




  
        //locate connection string to establish db connection
        require('../dbconnect/dbconn.php');

        $query = "INSERT INTO reservations(`name`, `phone`, `email`, `food`,`persons`, `reservation_date`) 
                  VALUES ('$name', '$phone', '$email', '$food', '$people', '$selectedDate')";

        //executing query to insert data into db
        $result = mysqli_query($connectionstatus, $query);

        //check whether data was inserted successfully or not
        if ($result == 1) {
            echo "<script>
            alert('Reservation successful');
             window.location.href = '../contact.php';
            </script>";
        } 
        else {
            echo "<script>
            alert('Failed to make reservation');
            window.reload();
            </script>";
        }
   
}





?>