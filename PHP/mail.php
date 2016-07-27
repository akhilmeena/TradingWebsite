<?php

      if(isset($_POST['name']))
      {
        $name=$_POST['name'];
      }
      if(isset($_POST['email']))
      {
        $email=$_POST['email'];
      }
      if(isset($_POST['subject']))
      {
        $subject=$_POST['subject'];
      }
      if(isset($_POST['message']))
      {
        $message=$_POST['message'];
      }
      if(isset($_REQUEST['submit']))
      {
      $headers = 'From: ' . $name . ' <' . $email . '>\r\n' . 'Reply-To: ' . $email . '\r\n';
      $result=mail('sinisa.bubonja@gmail.com', $subject, $message, $headers);
    }

    echo "<!DOCTYPE html>
    <html>

    <head>
        <title>Pizza Bubonja's</title>
        <link rel='stylesheet' type='text/css' href='../CSS/pizza.css'>
        <script src='http://maps.googleapis.com/maps/api/js?key=AIzaSyD_LagaHj7Jqhui85MHrb5p5KhwOT4hhZg&callback=initMap'></script>
        <script src='JS/myScript.js' type='text/javascript'></script>
        <meta charset='UTF-8'>
    </head>

    <body>

      <div id='message' style='display:block;'><p id='message-text'>Your message has been sent.</p></div>

        <div id='background-header' style='position:absolute;'></div>

        <div id='container'>

            <div id='header' style='position:absolute;'>

                <img id='logo' src='../Images/logo.png' alt='Logo' />

                <p class='slogan'>Serving great pizza from our family to yours</p>

                <ul id='ul-header'>
                    <li><a href='Home.html'>Home</a></li>
                    <li><a href='About.html'>About Us</a></li>
                    <li><a href='Menu.html'>Menu</a></li>
                    <li><a class='active' href='Contact.html'>Contact</a></li>
                </ul>

            </div>

            <div id='empty'></div>

            <!--<img id='contact' src='Images/contactUs.png' alt='Contact Us'/>
    <img id='chef' src='Images/chef.png' alt='Chef'/>-->

            <div id='contact'>
                <div id='contact-form'>
                    <form action='../pizzabubonjas/PHP/mail.php' method='post' target='_self'>
                        Name:
                        <br>
                        <input type='text' name='name'></input>
                        <br> Email:
                        <br>
                        <input type='text' name='email'></input>
                        <br> Subject:
                        <br>
                        <input type='text' name='subject'></input>
                        <br> Your message:
                        <br>
                        <textarea name='message'></textarea>
                        <br>
                        <input type='submit' name='submit' value='Send email'>
                    </form>
                </div>

                <div id='contact-inf'>
                    <div id='address'>
                        <img src='Images/rest.png' alt='Address' />
                        <p>Primo Toscano
                            <br> Via dei Serpenti, 31
                            <br> 25026-Pontevico BS</p>
                    </div>
                    <div id='phone'>
                        <img src='Images/tele.png' alt='Telephone' />
                        <p>0363 2201860
                            <br> Country code: 39</p>
                    </div>
                    <div id='email'>
                        <img src='Images/mail.png' alt='Email' />
                        <p>PrimoToscano@rhyta.com </p>
                    </div>
                    <div id='map'></div>
                </div>

            </div>

            <div id='footer'>
                <p>&copy; 2016 Pizza Bubonja's. All Rights Reserved.</p>
            </div>

        </div>

    </body>

    </html>

    <script>
    setTimeout(function() {
      window.location.replace('/pizzabubonjas/Contact.html');
    }, 3000);
    </script>"

 ?>