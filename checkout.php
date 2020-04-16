<!--Gurjit KAur 8622642-->
<!DOCTYPE html>
<?php
    session_start();   //start the session
    $_SESSION['errorMessage']="";

//check for the method
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        require ('mysqli_connect.php'); //connect the database
        
        //check for firstname, lastname
    if(!empty($_POST["fname"]) && !empty($_POST["lname"]))
    {

        $firstname=mysqli_real_escape_string($dbc, $_POST['fname']);    
        $lastname=mysqli_real_escape_string($dbc, $_POST['lname']);
        $payment = $_POST['pay'];
       
        if(isset($_SESSION["id"])&&isset($_SESSION["quant"]))
        {
            $productid=$_SESSION["id"];
            $quantity=($_SESSION["quant"]-1); 
            
            //insert query
            $query = "insert into users (FirstName,LastName,ProductId,PaymentMethod) values('$firstname','$lastname','$productid','$payment')";
            $res = @mysqli_query($dbc,$query);
        if($res) {
            echo "Order Placed Successfully";
            
            //update query
            $updateListQuery= "UPDATE bookinventory SET quantity=".$quantity." WHERE bookId=".$productid;
                echo $updateListQuery;
            $res2 = @mysqli_query($dbc,$updateListQuery);
        if ($res2) {
            header('location:success.php');
        } else {
            $_SESSION['errorMessage']="Error";
        }

        } else {
            $_SESSION['errorMessage']= "Could not place order";
        }   
        }
           else
           {
              header('location:store1.php');
           }
        }
            else{
                $_SESSION['errorMessage']= "Enter all the fields";
            }
    }
?>
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
                <fieldset>
                    <legend><h3>Checkout Information</h3></legend>
                    <form action="checkout.php" method="post">
                        
                        <p><img src="img/<?php echo $_SESSION['image']?>"/></p>
                        
                        <label>First Name</label><input type="text" name="fname"><br/><br/> 
                        <label>Last Name</label><input type="text" name="lname"> <br/>
                        <label>Payment Option</label>
                            <input type="radio" id="credit" name="pay" value="credit">
                            <label for="credit">Credit Card</label>
                            <input type="radio" id="debit" name="pay" value="debit" >
                            <label for="debit">Debit Card</label><br/>
                        <div>
                            <?php
                                if(isset($_SESSION['errorMessage'])){
                                    echo "<p style='color:red;'>".$_SESSION['errorMessage']."</p>";
                                }


                                ?>
                        </div>
                        <input type="submit" name="submit" value="submit">
                     </form>
                </fieldset>
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
