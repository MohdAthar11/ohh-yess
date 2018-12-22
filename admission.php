<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" media="screen" href="admission.css">    
    <link rel="stylesheet" media="screen" href="footer.css">
    <link rel="stylesheet" media="screen" href="head.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="icon" href="image/logo.png">
    <title>S.E.A College of Engineering and technology</title>
    <style>

    </style>
</head>
<body>
    <header>
        <div id="first">
            <ul>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="career.php">Career</a></li>
                
                
            </ul>
            
        </div>
        <div class="navbar">
            <div id="align">
                <a href="index.php">HOME</a>
                <a href="course.php">COURSE</a>
                <a href="admission.php">ADMISSION</a>
                
                <a href="about.php">ABOUT US</a>
                <div class="dropdown">
                  <button class="dropbtn">MORE 
                    <i class="fa fa-caret-down"></i>
                  </button>
                  <div class="dropdown-content">
                    <a href="contact.php">Campus Visit</a>
                    <a href="event.php">Events</a>
                    <a href="gallery.php">Gallery</a>
                  </div>
                </div> 
            </div>
        </div>
        <a href="index.php"> <img src="image/logo.png" alt="sea college logo" height="130px" width="100px"></a>
    </header>
    
        <img src="image/college1.jpg" alt="college image" height="450px" width="100%">
        <form action="process.php" method="POST">
            <label for="name">Name</label><input type="text" name="name" required> <br>
            <label for="name">Father Name</label><input type="text" name="fname"> <br>
            <label for="name">Mother Name</label><input type="text" name="mname"> <br>
            <label for="email">Email</label><input type="email" name="email" required> <br>
            <label for="Phone">Phone Number</label><input type="tel" name="phone" required> <br>
            <label for="Phone">Parent Phone Number</label><input type="tel" name="pphone" required> <br>
            <label for="gender">Gender</label> <select name="gender" id="gender" required>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
            </select> <br>
            <label for="degree">Highest degree</label> <select name="hdegree" id="hdegree" required>
                <option value="graduation">Graduation</option>
                <option value="2nd PUC">2nd PUC</option>
                <option value="diploma">Diploma</option>
            </select> <br>
            <label for="apply-for">Apply For</label> <select name="applyfor" id="apply-for" required>
                <option value="Graduation">Graduation</option>
                <option value="Post-Graduation">Post-Graduation</option>
                <option value="MBA">MBA</option>
            </select> <br>
            <input type="submit" value="Submit" name="login">
        </form>
        <footer>
            <div class="footerimg">
                <h2>Gallery</h2>
                <a style="text-decoration:none;" href="gallery.php">
                    <img src="image/_DSC2064.jpg" width="100px" height="100px" alt="Campus picture">
                    <img src="image/NVP_2789.jpg" width="100px" height="100px" alt="Badminton court">
                    <img src="image/DPP_0147.jpg" width="100px" height="100px" alt="Library">
                    <img src="image/fest.jpg" width="100px" height="100px" alt="colleg fest">
                    <img src="image/festival.jpg" width="100px" height="100px" alt="festival picture">
                    <img src="image/event.jpg" width="100px" height="100px" alt="college event">
                </a>
            </div>
            <div class="foot_second">
                    <h2>About Us</h2>
                    <p>
                        S.E.A College of Engineering and Technology (SEACET) was established in the year 2007-08. 
                        Initially, it started functioning with Computer Science, Electronics and Communication, 
                        Information Science and Mechanical Engineering branches, offering 4 years duration Degree 
                        Programme in Engineering. A two years duration Masters Programme in Business Administration 
                        (MBA) was added in the year 2008-09.
                    </p>
                    <a href="index.php">HOME</a>
                    <a href="course.php">COURSE</a>
                    <a href="event.php">EVENTS</a>
                    <a href="admission.php">ADMISSION</a>
                    <a href="contact.php">CONTACT</a>
                   <p style="color:red; margin-top: 10px;"> &copy;Copyright 2018 All rights reserved. <img src="image/logo.png" alt="college logo" width="20px" height="20px"></p>
                </div>
                
        </footer>    
</body>
</html>