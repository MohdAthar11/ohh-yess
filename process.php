<?php
$con=mysqli_connect("localhost","root","","collegedatabase");
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $pphone=$_POST['pphone'];
    $gender=$_POST['gender'];
    $hdegree=$_POST['hdegree'];
    $applyfor=$_POST['applyfor'];
    $query="insert into admissionrequest(name,fname,mname,email,phone,pphone,gender,hdegree,applyfor)values('$name','$fname','$mname','$email',
    '$phone','$pphone','$gender','$hdegree','$applyfor')";
    $result=mysqli_query($con,$query);
    if($result)
    {
        echo "<script>alert('We will contact you shortly.')</script>";
        echo "<script>window.open('admission.php','_self')</script>";
    }
    else{
        echo "<script>alert('form not submitted')</script>";
        echo "<script>window.open('admission.php','_self')</script>";
    }
}
if(isset($_POST['submit'])){
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $usertype=$_POST['usertype'];
    $password=$_POST['password'];
    $query="insert into newuser(fname,lname,email,usertype,password)values('$firstname','$lastname','$email','$usertype','$password')";
    $result=mysqli_query($con,$query);
    if($result){
        echo "<script>alert('signup successfull.')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else{
        echo "<script>alert('please inspect your input')</script>";
    }
}
if(isset($_POST["submit1"])){  
  
    if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
        $user=$_POST['user'];  
        $pass=$_POST['pass'];    
        $query=mysqli_query("SELECT * FROM newuser WHERE username='".$user."' AND password='".$pass."'");  
        $numrows=mysqli_num_rows($query);  
        if($numrows!=0)  
        {  
        while($row=mysqli_fetch_assoc($query))  
        {  
        $dbusername=$row['username'];  
        $dbpassword=$row['password'];  
        }  
      
        if($user == $dbusername && $pass == $dbpassword)  
        {  
        session_start();  
        $_SESSION['sess_user']=$user;  
      
        /* Redirect browser */  
        header("Location: index.php");  
        }  
        } else {  
        echo "Invalid username or password!";  
        }  
      
    } else {  
        echo "All fields are required!";  
    }  
    } 
?>