<?php

if(isset($_POST['Submit'])){
    
   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $id =  $_POST['ID'];
   $major =  $_POST['Major'];
   $semester =  $_POST['Sem'];
   $year = $_POST['Year'];
    
    $connection = mysqli_connect('localhost', 'root', 'root', 'Capstone');
    
    if ( $connection){
        echo "We are connected";
    }
    
    else
    {
        die("Database connection failed");
    }
    
    
    $query = "INSERT INTO Student_Academics(FirstName, LastName, ID, Major, Semester, Year)";
    $query .= "VALUES ('$firstname', '$lastname', '$id', '$major', '$semester', '$year') ";
    $result = mysqli_query($connection, $query);
    
    if(!$result)
    {
        die('Query Failed' . mysqli_error());
    }
    
//     echo $firstname;
//     echo $lastname;
//     echo $id;
//     echo $major;
//     echo $semester;
//     echo $year;
}

?>
<!DOCTYPE html>
<html>
    
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>GETTING STARTED WITH BRACKETS</title>
        <link rel="stylesheet" href="styles.css">
        
       
        <meta name="description" content="Individual Learning Record.">
        
    </head>
    
    <body>
    
           <header>
            
            <ul class="menu">
            <li> <h1 id=logo> <img src="/Images/Logo.png" alt="Engaging Minds"></h1></li>
            
            <li > <a  href="#">  <button type="button">Home</button> </a></li>
            <li> <a  href="index.php"> <button type="button"> ILR </button> </a></li>
            
          
            
            </ul>

</header>
            
    <main>
               
               <div class="survey"> 
               <div class=col  colgrid>
               
               
               <form class="entries" action="index.php" method="post">
           <!--  placeholder -->
            
            
             <label for ="user" >First name: </label>
             <input type="text" name="firstname"> <br>
             <br>
             
             <label for ="userL" >Last name: </label> 
             <input type="text" name="lastname"> <br> 
             <br>
             
             <label for ="userll" >Student ID: </label>
             <input type="text" name="ID"><br>
             
             <p id="demo"></p>
             


<!-- radio buttons -->             
            <label for ="Stream" >Major: </label>
            
             <input class= "Push" type="radio" name="Major" value="Chemistry" > Chemistry
             
             <input type="radio" name="Major" value="Bio-Chemistry"> Bio-Chemistry
             
             <input type="radio" name="Major" value="Other"  > Other
             
            <br>
            
<!--This is for the other text field to appear -->
<!--
            <script>
            
        
           function setVisible(element)
                {
               document.getElementById(element).style.visibility= 'visible';
            
                
                }
                
            </script> 
-->
             
 <!-- Semester   -->   
             <br>
             
             <label for ="Semester" >Semester: </label>
             
             <input type="radio" name="Sem" value="Fall" > Fall
             
             <input type="radio" name="Sem" value="Spring"> Spring
             
             <input type="radio" name="Sem" value="Summer"> Summer
             
             <br>
             <br>
             
   <!-- year  --> 
              <label for ="year" >Year: </label>
                <select name="Year">
                
                <option value="Freshman" name="Year" >Freshman</option>
                
                 <option value="Sophmore" name="Year">Sophomore</option>
                <option value="Junior" name="Year">Junior</option>
                 
                  <option value="Senior" name="Year">Senior</option>
                  
                </select> 
                 
                <br> 
                <br> 
               
    <!-- picture      --> 
           <label for ="" >Upload Photo: </label>
            <input type="file" name="pic" accept="image/*">  
            
            <br>
           <br>
           <br>
           
           
           <input type="submit" name="Submit" value="Submit">
           
           <!--  Automatic date and time stamp-->
           <script>
             
            var d = new Date();
            document.getElementById("demo").innerHTML = d;
     
           </script>
           
           
           
            
            </form>
           
           

            
           
             
            </div>
              
              <div class= col  colgrid>
              
              <img src="/Images/Student.png" alt="This is where your photo appears" class="grid"> 
              
              </div>
               
                
            </div>
               
                
           
  </main>
    
    </body>