<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <link rel="stylesheet" media="screen" href="footer.css">
    <link rel="stylesheet" media="screen" href="head.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.css">
    <link rel="icon" href="image/logo.png">
    <title>S.E.A College of Engineering and technology</title>
    <style>
        table {
    font-size: 0.8em;
    font-family: Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    border-top: 4px solid #DCA806;
    text-align: center;
    width: 100%;
}
caption{
    font-weight: bold;
    padding: 0.25em 0 0.25em 0;
    text-align: left;
    text-transform: uppercase;
    border-top: 1px solid #DCA806;
}
thead tr{
    background-color: #062f4f;
    color: white;
}
th{
    padding:0.75em;
    
}
tbody tr{
    background-color: #F1F1F1;
    border-bottom: solid 1pt white;
    color: #6E6E6E;
}
tbody td{
    padding:10px;
    vertical-align: top;
}

tbody tr:nth-child(odd){
    background-color:rgb(243, 240, 240);
}
tbody tr:hover{
    background-color: #c0bcbc;
    color: black;
}
tbody td,th{
    border: 1px solid #ddd;
    height: 20px;
}
h2{
    text-align:center;
}
    </style>
</head>
<body>
    <header>
        <div id="first">
            <ul>
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
                <li><a href="contact.php">Contact</a></li>
                
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
        <div>
            <table>
            <caption><h2 style="padding:10px 0px;">We are HIRING</h2></caption>
                <thead>
                <tr>
                <th>Branch</th>
                <th>Designation</th>
                <th>Contact</th>
                </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Computer Science </td>
                        <td>Software Engineering faculty</td>
                        <td> <a href="mailto:seaeduinfo@seaedu.ac.in "> <i class="fa fa-envelope"></i>seaeduinfo@seaedu.ac.in </a></td>
                    </tr>
                    <tr>
                        <td>Computer Science </td>
                        <td>Artificial Intelligence faculty</td>
                        <td> <a href="mailto:seaeduinfo@seaedu.ac.in "> <i class="fa fa-envelope"></i>seaeduinfo@seaedu.ac.in </a></td>
                    </tr>
                    <tr>
                        <td>Computer Science </td>
                        <td>Unix System faculty</td>
                        <td> <a href="mailto:seaeduinfo@seaedu.ac.in "> <i class="fa fa-envelope"></i>seaeduinfo@seaedu.ac.in </a></td>
                    </tr>
                    <tr>
                        <td>Mechanical Engineering </td>
                        <td>CAD Design faculty</td>
                        <td> <a href="mailto:seaeduinfo@seaedu.ac.in "> <i class="fa fa-envelope"></i>seaeduinfo@seaedu.ac.in </a></td>
                    </tr>
                    <tr>
                        <td>Civil Engineering</td>
                        <td>Architecture design faculty</td>
                        <td> <a href="mailto:seaeduinfo@seaedu.ac.in "> <i class="fa fa-envelope"></i>seaeduinfo@seaedu.ac.in </a></td>
                    </tr>
                </tbody>
            </table>
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