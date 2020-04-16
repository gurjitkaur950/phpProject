<!--Gurjit KAur 8622642-->

<html>
    <head>
        <title>My Project1</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <link rel="stylesheet" href="css/style1.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <div id="wrapper">
             <header>
                <img src="img/5.png" alt="Logo" width="100" height="100">
                <h1>Book Inventory Store</h1>
            </header>     
            <nav>
                    <ul>
                        <li><a href="index.php" class="a">Home</a></li>
                        <li><a href="store1.php" class="a">Store</a></li>
                        
                        <li><a href="contact.php" class="a">Contact Us</a></li>
                    </ul>
            </nav>

           <main>

            <div class="contact_container">
                <div style="text-align:center">
                    <h2>Contact Us</h2>
                    <p>If you have any queries, leave us a message, we are happy to help you:</p>
                </div>
                <div class="contact_row">
                    <div class="contact_column">
                        <img id="cont_img" src="img/alphabet-2730767_1280.png" alt="heart">
                    </div>
                    <div class="contact_column">
                        <form action="#">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">
                            <label for="lname">Last Name</label>
                            <input type="text" id="lname" name="lastname" placeholder="Your last name..">
                            <label for="email">E-Mail</label>
                            <input type="text" id="email" name="E-Mail" placeholder="Your E-Mail..">
                            <label for="subject">Subject</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
                            <input type="submit" value="Submit">
                        </form>
                    </div>
                </div>
            </div>
        </main>

            <footer>
                <div id="foot">
                    <p class="p1">Copyright &copy; Book Inventory Store 2020</p>
                    <span>Subscribe:</span> <input type="email" name="email" placeholder="Email Address"/>
                    <input type="Submit" name="Subscribe Now"/>
                </div>
                <div id="sign">
                    <span>Follow us:</span><a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-instagram"></a>
                </div>
            </footer>
    </div>
</html>