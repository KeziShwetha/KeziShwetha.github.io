    <!DOCTYPE html>
    <html>
    <body >

     <?php
       
        $servename = "localhost";
        $username = "admin";
        $password = "admin123";
           
        //Conneting database
        $conn = mysqli_connect($servename,$username,$password);

        //Connection check
        if(!$conn){
          die("Connection failed:" .mysqli_connect_error());
        }
         
        $sql = "Use portfolio";
        mysqli_query($conn, $sql);


        $name =  $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $message =  $_REQUEST['message'];

        // Performing insert query executio
        $sql = "INSERT INTO info (name,email,message)  VALUES ('$name','$email','$message')";
          
        $query = "SELECT email FROM info WHERE email='$email'";
        $sqli = mysqli_query($conn,$query);
    
        if (mysqli_num_rows($sqli)==1) 
        {
        echo "<h2>Already registed with this Email</h2>";
        echo "</br>"; 
        echo '<a href="index.html"> Back to website </a>';
        }else if(mysqli_query($conn, $sql)) {
            echo "<h2>Details sent.</h2>"; 
            echo "</br>"; 
            echo '<a href="index.html"> Back to website </a>';
        } 
       
  
      
?>
    
    
    </body>
    </html>
     

