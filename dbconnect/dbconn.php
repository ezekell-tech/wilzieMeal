<!-- database connection string -->
 <?php
define("server","localhost");
define("username","root");
define("serverkey","");
define("database","wilzie_db");

$connectionstatus = mysqli_connect(server,username,serverkey,database);

    //test the connection if successful or there's a failure
    if($connectionstatus == true){
        //coennection was sucessful
        // echo"<script>";
        // echo "alert('database connected')";
        // echo"</script>";
    }

    else{
        //connection issue
        // echo"<script>";
        // echo"alert('Failed to connect to PharmacyDB, try again!')";
        // echo"</script>";
    }




?>