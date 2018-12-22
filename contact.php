<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>S.E.A College of Engineeriing and Technology</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="stylesheet" media="screen" href="head.css">
    <link rel="stylesheet" media="screen" href="footer.css">
    <link rel="icon" href="image/logo.png">
    <style>
        .contact-main{
            width: 100%;
            height: 300px;
            margin-top: 70px;
        }
         .contact-call{
            background: goldenrod;
            float: left;
            width: 300px;
            margin-left: 100px;
            padding: 20px;
            border-radius: 5px;
        }
        .contact-call i{
            font-size: 140px;
            color:#074972;
        }
        .contact-call a{
            float: right;
            width: 150px;
            padding: 10px;
            margin-top: 50px;
            text-decoration: none;
            
        }
        .contact-address{
            float: right;
            width: 600px;
            margin-right: 100px;
            height: 140px;
            padding: 20px;
            background: goldenrod;
            border-radius: 5px;
        }
        .contact-address i{
            font-size: 140px;
            color:#074972;
        }
         address{
            position: relative;
            top: -100px;
            left: 150px;
            
        }
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
    <div class="contact-main">
        <div class="contact-call">
            <i class="fa fa-phone"></i>
            <a href="tel">+91-7548977567 +91-7548977568</a>
            
        </div>
        <div class="contact-address">
            <i class="fa fa-map-marker"></i>
            <p> <address>
                S.E.A College of Engineeriing and Technology, <br> Basavanpura, Krishnarajpuram,
                 Bangalore. <br>
                PIN-560049
            </address> </p>
        </div>
    </div>
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