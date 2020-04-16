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
                 <div class="main_slider">
                    <s id="a1"></s>
                    <s id="a2"></s>
                    <s id="a3"></s>
                    <div class="slider">
                        <img class="front_image" src="img/animals-2730764_1280.png" alt="slider_img1">
                        <img class="front_image" src="img/child-865116_1920.jpg" alt="slider_img2">
                        <img class="front_image" src="img/kids-2985782_1920.jpg" alt="slider_img3">
                    </div>
                    <div class="prevNext">
                        <div><a href="#a4">&#60;</a><a href="#a2">&#62;</a></div>
                        <div><a href="#a1">&#60;</a><a href="#a3">&#62;</a></div>
                        <div><a href="#a2">&#60;</a><a href="#a4">&#62;</a></div>
                    </div>
                    <div class="bullets">
                        <a href="#a1"></a>
                        <a href="#a2"></a>
                        <a href="#a3"></a>
                    </div>
                </div>

                <div>
                    <h1 class="div_block">Our Books</h1>
                    <p class="block_lines">We offer different types of books like fiction, non-fiction, anthology, satire. Book inventory that includes new, used, and bargain books which come with attractive price tags </p>
                </div>

                <div class="flex_container">
                    <div>
                        <img src="img/1.jpg" class="courses_img" alt="courses_img1">

                            <h3 class="heading">THE SPLENDID AND THE VILE</h3>

                        <h4>Erik Larson</h4>
                        <h4>$100</h4>

                    </div>
                    <div>
                        <img src="img/3.jpg" class="courses_img" alt="courses_img1">

                            <h3 class="heading">CHAIN OF GOLD</h3>

                        <h4>Cassandra Clare</h4>
                        <h4>$140</h4>

                    </div>
                </div>

                <div class="flex_container">
                    <div>
                        <img src="img/4.jpg" class="courses_img" alt="courses_img1">

                            <h3 class="heading">HIDDEN FIGURES</h3>

                        <h4>Margot Lee Shetterly</h4>
                        <h4>$200</h4>
                    </div>
                    <div>
                        <img src="img/2.jpg" class="courses_img" alt="courses_img1">

                            <h3 class="heading">THE MAMBA MENTALITY</h3>

                        <h4>Kobe Bryant</h4>
                        <h4>$45</h4>
                    </div>
                </div>



                <div>
                    <h1 class="div_block"> Our Pricing</h1>
                    <p class="block_lines">We offer online learning and different plans with different prices. Each book has its own price based on months. There are different plans for the books. Basic Plan, Standard Plan and Premium Plan.</p>
                </div>

                <div class="pricing_table">
                    <div class="price_box">
                        <h2>Basic</h2>
                        <span class="price">$14.99/ Month</span>
                        <button id="basic_btn">Read Book</button>

                    </div>
                    <div class="price_box">
                        <h2>Standard</h2>
                        <span class="price">$25.99/ 2-Months</span>
                        <button id="standard_btn">Read Book</button>
                    </div>
                    <div class="price_box pricing-table-best">
                        <h2>Premium</h2>
                        <span class="price">$49.55/ 4-Months</span>
                        <button id="premium_btn">Read Book</button>
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