<!--Gurjit Kaur 8622642-->

<!DOCTYPE html>
<?PHP
    session_start(); //start the session

//check for method
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $productid = $_GET["id"];
        $productquantity = $_GET["quant"];
        $productimg = $_GET["image"];
        $productName = $_GET["bookName"];
        
        //declaring session variables
        $_SESSION["id"]=$productid;
        $_SESSION["quant"]=$productquantity;
        $_SESSION["image"]=$productimg;
        $_SESSION["bookName"]=$productName;
        
            header('location:checkout.php');
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
        <img src="img/store.jpg" width="100%" height="280">
        <h1 class="div_block">Our Books</h1>
         <p class="block_lines">We offer different types of books like fiction, non-fiction, anthology, satire. Book inventory that includes new, used, and bargain books which come with attractive price tags. We believe that being the bestseller in bargain books is about much more than providing you with great selection and value. We want you to have an enjoyable shopping experience from start to finish! </p>
         <div class="row">
 
        <div class="side">
           <table class="table"><tr>
                <?php
                require ('mysqli_connect.php'); //connect to database
               
               //select query
                $query = "SELECT * FROM bookinventory";
                $res = @mysqli_query($dbc,$query);
                if(mysqli_num_rows($res) >0)
                {
                    //output fetch
                   while($row = mysqli_fetch_assoc($res)) 
                   {
                       ?>

              
                    <td>
                        <form method="post" action="store1.php?id=<?php echo $row['bookId']; ?>&quant=<?php echo $row['quantity']; ?>&image=<?php echo $row['image'];?>&productName=<?php echo $row['bookName']; ?>">
                       
                        <div class="fakeimg"><img src="img/<?php echo $row['image']; ?> " width="80%" height="100%"></div>
                        <h5><?php echo $row['bookName']; ?></h5>
                        
                            
                            <input type="submit" value="Add to Cart" class="btnAddAction" />
                        </form>
                    </td>
                    
        
             <?php
            }
            }
            ?>
               </tr>
            </table>
             </div>
        </div>
    </main>
             

    <footer>
        <div id="foot">
            <p class="p1">Copyright &copy; Book Inventory Store 2020</p>
            <span>Subscribe:</span> <input type="email" name="email" placeholder="Email Address" />
            <input type="Submit" name="Subscribe Now" />
        </div>
        <div id="sign">
            <span>Follow us:</span><a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-twitter"></a>
            <a href="#" class="fa fa-instagram"></a>
        </div>
    </footer>
</div>

</html>
