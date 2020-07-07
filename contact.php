<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Style the body */
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Header/logo Title */
.header {
  padding: 80px;
  background-image:url("images/crime3.jpg");
   background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Increase the font size of the heading */
/*.header h3 {
  font-size: 80px;
  text-align:;
  color: white;
}

/* Style the top navigation bar */
.navbar {
  overflow: hidden;
  background-color: #333;
}

/* Style the navigation bar links */
.navbar a {
  float: left;
  display: block;
  color: white;
  text-align: center;
  padding: 14px 20px;
  text-decoration: none;
}

/* Right-aligned link */
.navbar a.right {
  float: right;
}

/* Change color on hover */
.navbar a:hover {
  background-color: #ddd;
  color: black;
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sits next to each other */
/* Sidebar/left column */
.side {
  -ms-flex: 30%; /* IE10 */
  flex: 30%;
  background-color: #f1f1f1;
  padding: 20px;
}

/* Main column */
.main {   
  -ms-flex: 70%; /* IE10 */
  flex: 70%;
  background-color: white;
  padding: 20px;
}

/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 50px;
 /* text-align: center;*/
  background: #ddd;
}
.foot{
  float:top;
text-align:center;
font-size: 20px;
}
#connect{
  text-align: right;
  
  font-size: 20px
}
/* Responsive layout - when the screen is less than 700px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 700px) {
  .row {   
    flex-direction: column;
  }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .navbar a {
    float: none;
    width: 100%;
  }
}
.column {
  float: left;
  width: 25%;
  padding: 0 10px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive columns */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  padding: 16px;
  text-align: center;
  background-color: #f1f1f1;
  }
  .container {
  padding: 64px;
}

.row:after {
  content: "";
  display: table;
  clear: both
}

.column-66 {
  float: left;
  width: 66.66666%;
  padding: 20px;
}

.column-33 {
  float: left;
  width: 33.33333%;
  padding: 20px;
}

.large-font {
  font-size: 48px;
}

.xlarge-font {
  font-size: 64px
}

.button {
  border: none;
  color: white;
  padding: 14px 28px;
  font-size: 16px;
  cursor: pointer;
  background-color: #4CAF50;
}

img {
  display: block;
  height: auto;
  max-width: 100%;
}

@media screen and (max-width: 1000px) {
  .column-66,
  .column-33 {
    width: 100%;
    text-align: center;
  }
  img {
    margin: auto;
  }
}
.box{
        position: relative;
        display: inline-block; /* Make the width of box same as image */
    }
    .box .text{
        position: absolute;
        z-index: 999;
        margin: 0 auto;
        left: 0;
        right: 0;
        top: 40%; /* Adjust this value to move the positioned div up and down */
        text-align: center;
        width: 60%; /* Set the width of the positioned div */
    }

</style>
</head>
<body>

<div class="header">
  
</div>

<div class="navbar">
  <a href="http://www.gmail.com">E-mail</a>
  <a href="http://www.google.com">Message</a>
  <a href="http://www.google.com">Call</a>
  <a href="http://www.google.com" class="right">Emergency</a>
</div>


  <div style="text-align:center; color:red;">
  <h1><strong>Responsive 24 hours Contact Zone</strong></h1>
  <p style="color:black;">support us by contacting us with all the criminal offences you see and face,be the voice of change and protect those who need you.</p>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b style="color:seagreen">How to find this office</b></h1>
      <h1 class="large-font"><b>Reach to us</b></h1>
      <p><span ></span></p>
      <p>Sydney (Australia Office)
        Address:-
        20 Hunter St, Level 7 Sydney NSW 2000
        Phone
        +61 1300 482 7768.</p>
      <button class="button">Download Address</button>
    </div>
    <div class="column-33">
        <img src="images/map.jpg" width="335" height="471">
    </div>
  </div>
</div>

<!-- Clarity Section -->
<div class="container" style="background-color:linear-gradient(white,grey,darkgrey)">
  <div class="row">
    <div class="column-33">
      <img src="images/call.png" alt="App" width="335" height="471">
    </div>
    <div class="column-66">
      <h1 class="xlarge-font"><b>Connect with one of our global offices</b></h1>
      <h1 class="large-font" style="color:red;"><b>Call, who?</b></h1>
      <p><span style="font-size:24px">A call for help.</span>Headquarters
25 First Street, 2nd Floor

Cambridge, MA 02141

United States

Phone / Fax
+1 888 HUBSPOT
(+1 888 482 7768)

Fax: +1 617 812 5820

Press / Media / Blogger Information
Visit our Newsroom for contact info </p>
      <button class="button" style="background-color:red">Read More</button>
    </div>
  </div>
</div>

<!-- The App Section -->
<div class="container">
  <div class="row">
    <div class="column-66">
      <h1 class="xlarge-font"><b>The Customer Support</b></h1>
      <h1 class="large-font" style="color:MediumSeaGreen;"><b>Why us?</b></h1>
      <p><span style="font-size:36px">Non-stop help within 24 hours of info.</span>Contact Customer Support
Sometimes you need a little help from your friends. Or a professional support rep. Don’t worry… we’re here for you.</p>
      <button class="button">Contact Support</button>
    </div>
    <div class="column-33">
        <img src="images/uss.jpg" style="height:400px;width:800px;" >
    </div>
  </div>
</div>

  <div class="main">
    <h2>Headquaters</h2>
    <h5>Established, Dec 7, 2018</h5>
    <div class="fakeimg" style="height:200px;"><div class="row">
  <div class="column">
    <div class="card">
      <h3>Americas</h3>
      <p><marquee>US and Canada
+1 877 683 0497 (English)
+1 857 829 5064 (Spanish)</marquee>
</p>
      
    </div>
  </div>

  <div class="column">
    <div class="card">
      <h3>Europe</h3>
      <p><marquee>Finland
+358 7 5325 2986 (English)</marquee></p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Asia Pacific</h3>
      <p><marquee>India
+91 11 7127 9211 (English)</marquee>
</p>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <h3>Berlin (Berlin Office)</h3>
      <p><marquee>Address Offices 10243 Berlin Phone
+49 30 56796549</marquee></p>
    </div>
  </div>
</div>
</div>
    <p>Talk to department</p>
    <p>Interested in joining our team? Just pick up the phone to chat with a member of our cyber team +91 11 7127 9211</p>
    <p>View all global numbers.</p>
    <a href="http://www.contactus.com">click here</a>
    <br>
    <h2><strong>About Us</strong></h2>
    <div class="fakeimg" style="height:200px;"><div class="row">
  <div class="column">
    <div class="card">
      <img src="images/news.jfif" height="150" width="170">
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="images/award.jfif" height="150" width="170">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/blog.jfif " height="160" width="170">
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="images/info.png" height="200" width="250">
    </div>
  </div>
</div>
</div>
<p>Criminal Ivestigation Command is a leading growth platform. Since 2018,CIC has been on a mission to make the world more secure. Today, over 56,500 total customers in more than 100 countries use CIC award-winning software and services.</p>
  </div>
</div>


<div class="box"><br>
    <br>
    <br>
        <img src="gallery/b.jpg" alt="Flying Kites" style="padding-left:20px;padding-top:30px;width:1350px;height:450px;">
        <div class="text">
            <p style="font-size:18px;"><h2><font style="color:white">About Criminal Investigation Command
            </h2><br>
We are an independant umbrella organization of national and local Crime Stoppers programmes. We provide platforms for communities around the world to report on crime anonymously. Every 14 minutes a crime is solved somewhere in the world as a direct result of this.<br>
<h1>Crime Stoppers Global Statistics<br></h1>
Arrests made: 965.163<br> 
Cases Cleared: 1.501.776 
</font>
            </p>
        </div>
    </div>  
        
   </div>
</body>
</html>
