<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-
    scale=1.0">
    <title>web designer</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css"> 
</head>
<body>
<section class="sub-header">
    <nav>

        <div class="topbar" id="topbar">
        
                <ul><!--- link to all pages within my project-->
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="fees.html">FEES</a></li>
                    <li><a href="services.html">SERVICES</a></li>
                   
                    <li><a href="contact.php">CONTACT</a></li>
                    <li><a href="experience.html">EXPERIENCE</a></li>
                  
                </ul>
                </form>
        </div>
        <i class="fa fa-bars" onclick="showMenu" aria-hidden="true"></i></i>
    </nav>
    <h1>Start Your Web Development Journey Today<br>Get In Touch</h1>
</section>
<section class="contact-us">

    <div class="row">
        <div class="contact-col">
            <div>
                
                <span>
                    <h4>CONTACT US</h4>
                  
                </span>
            </div>
            <div>
              
                <span>
                    <h5>P24 FX07, Block A</h5>
                    <p>SIdney Hill, Cork</p>
                </span>
            </div>
            <div>
                
                <span>
                    <h5>+353 87 0966455</h5>
                    <p>Monday to Friday, 9AM to 5PM</p>
                </span>
            </div>
    <!-- this code is taken and modified from the canvas slides---->
    <?php
{
        $username = $_POST["username"];
        $password = $_POST["passwprd"];
        echo "<p>Welcome $username</P>";
        echo "<p>Your password is $password</p>";
}
?>
 <form action="<?php echO htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    Username: <input type="text" name="username">
    Password: <input type="password" name="password">
    <input type="submit">
</form>
<!--- it retrieves the values of $_POST["username"] and $_POST["password"]. 
These values are submitted from the form when it's submitted via POST method.-->
<!--- he form submits to the same page ($_SERVER["PHP_SELF"]) and uses the POST method (method="post").--->
<!---  htmlspecialchars($_SERVER["PHP_SELF"]) is used to prevent XSS (Cross-Site Scripting) attacks by encoding special characters in the URL--->
<!--This code has been taken from the slides on canvas, i edited the code a small bit to suit my website for me-->
        <div class="contact-col">
            <form name="submit-to-google-sheet" onsubmit="return validateForm()">
                <input type="text" name="name" placeholder="Name">
                <br>
                <input type="email" name="email" placeholder="Email">
                <br>
                <input type="message" name="message" placeholder="Message">
                <br>
                <button type="submit" class="hero-btn blue-btn">submit<button>
            </form>
            <span id="msg"></span>
        </div>

<!-- Inside the div element with the class "contact-col", a form is created with the name "submit-to-google-sheet"
this form transports the information to a googlesheets file. Below the form, there's an empty <span> element with the id 
"msg", which is used to display a message or feedback after form submission-->
</section>

  <!-- referencing sourse - Nunnink, L. (2024). 
  levinunnink/html-form-to-google-sheet. [online] GitHub. 
  Available at: https://github.com/levinunnink/html-form-to-google-sheet 
  [Accessed 16 Apr. 2024].

‌-->
  <script>
    const scriptURL = 'https://script.google.com/macros/s/AKfycbxF_4RarJkfVjDDlNF3vDbaZElpXBXjpTO1QzFAwPI2Rq-O2Gs30u6HEi_saCFDB4p0/exec'
    const form = document.forms['submit-to-google-sheet']
    const msg = document.getElementById("msg")
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => {
            msg.innerHTML = "Message Sent successfully!"
            setTimeout(function(){
                msg.innerHTML = ""
            },5000)
            form.reset()
        })
        .catch(error => console.error('Error!', error.message))
    })
  </script>
  <!--When the form is submitted, the default form submission behavior is prevented using e.preventDefault() to avoid reloading the page-->

  <script>
    function validateForm() {
    var name = document.forms["myForm"]["name"].value;
    var email = document.forms["myForm"]["email"].value;
    var message = document.form["myForm"]["message"].value;
    if (name.trim() === "") {
    alert("Please enter your name");
    return false;
    }
    if (email.trim() === "") {
    alert("Please enter your email");
    return false;
    }
    if (message.trim() === "") {
    alert("please enter your message");
    return false;
    }
    return true;
    }
    </script>
<!--This JavaScript code submits form data to a Google Apps Script web app for storage in a Google Sheet. It displays 
a success message if the submission is successful and logs any errors to the console.-->
<!--The trim() method in JavaScript is used to remove whitespace characters (spaces, tabs, etc.)
from both ends of a string.-->
<!--n form validation, the trim() method is often used to ensure that the user hasn't entered
only whitespace characters in an input field, as these should typically be considered as
empty or invalid entries.
-->








<section class="endmessage" style="background-color: lightgrey;">
    <h4>Where To Find Us?<h4>
    <p>Instagram<br>Linkedin<br>Twitter<br>Facebook</p>
    <p>Made By Joshua David Radley</p>
  

    </div>
</section>
  








<!------------javascript for menu----------->
<script>

    var navLinks = document.getElementById("navLinks");

    function showMenu(){
        navLinks.style.right = "0";
    }
    function hideMenu(){
        navLinks.style.right = "-200px";
    }


<!-----Javascript for contact form-->
</script>
<!--- showMenu() sets the CSS property right of 
the element with the ID "navLinks" to "0", effectively sliding the element 
into view from the right side of the screen.
hideMenu() sets the CSS property right of the element with the ID "navLinks" to 
"-200px", hiding the element by sliding it out of view to the right side of the screen.-->
<script>


    <!----referencing source of information for transfering contact form information to a google sheets page-->
    <!----https://script.google.com/macros/s/AKfycbzpQI2V-LGqSXuD-vtnV2gajMSHctHSW1yBnAZDmvALEU5S6MRTPsQAnCV4M5qMFqs/exec>--->
    const scriptURL = '<https://script.google.com/macros/s/AKfycbzpQI2V-LGqSXuD-vtnV2gajMSHctHSW1yBnAZDmvALEU5S6MRTPsQAnCV4M5qMFqs/exec>'
    const form = document.forms['submit-to-google-sheet']
  
    form.addEventListener('submit', e => {
      e.preventDefault()
      fetch(scriptURL, { method: 'POST', body: new FormData(form)})
        .then(response => console.log('Success!', response))
        .catch(error => console.error('Error!', error.message))
    })
  </script
</body>
</html>