<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
   
    <section class="contact">
        <div class="content">
        <h2>Contact Us</h2>
        <p>Hi, I am Toki Tahmid Khan and I am a Web Deveoper. I love to make webpages as client demands and like to fullfil my task because I love coding. You are welcome to reach me through your Name and Mail id!</p>
    </div>
    <div class="container">
        <div class="contactInfo">
            <div class="box">
                <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <h3>Address</h3>
                    <p>sector :11, road :17, house no : 22 <br>Uttara, Dhaka-1230</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i>
                </div>
                <div class="text">
                    <h3>Phone</h3>
                    <p>+880 1633607667</p>
                </div>
            </div>
            <div class="box">
                <div class="icon"><i class="fa fa-address-book" aria-hidden="true"></i>

                </div>
                <div class="text">
                    <h3>Email</h3>
                    <p>tokitahmidkhan@gmail.com</p>
                </div>
            </div>
        </div>
        <div class="contactForm">
                    <form action="connect.php" method="POST">
                        <h3>Send Message</h3>
                        <div class="inputBox">
                            <input type="text" name="fullName" required="required" >
                            <span>Full Name</span>
                        </div>
                        <div class="inputBox">
                            <input type="text" name="email" required="required">
                            <span>Email</span>
                        </div>
                        <div class="inputBox">
                            <textarea required = "required" name="message"></textarea>
                            <span>Type your Message</span>
                        </div>
                        <div class="inputBox">
                            <input type="submit" value="Send">
                        </div>
                       
                    </form>
                </div>
    </div>
    </section>
</body>
</html>