<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOTY CHOCOLATES</title>
  <link rel="stylesheet" href="./css/style.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <?php include 'form.php'?>
</head>
<body>
<div id="home" class="header"><!--HEADER BEGIN-->
<div class="container"><!--CONTAINER BEGIN-->
    <div class="navbar"><!--NAVBAR BEGIN-->
        <div class="logo">
             <a href="#about"><img src="images/logo.png" width="125px"></a>
            
        </div>
        <nav>
            <ul id="MenuItems">
                <li><a href="./index.html">Home</a></li>
                <li><a href="./products.html">Products</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
                <li><a href="./login.html">Account</li></ul>
            </ul>
        </nav>
       <a href="./cart.html"> <img src="images/cart.png" width="30px" height="30px"></a>
        <img src="images/menu.png" class="menu-icon" onclick="menutoggle()">
    </div><!--NAVBAR END-->
    <div class="row">
        <div class="col-2">
            <h1>Feel the taste of Nilgiris!</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. 
            Saepe consectetur omnis nemo aliquid labore, aut nam? Dolorem rem facilis minus sit eos veniam? 
            Expedita, cumque pariatur architecto quasi deserunt mollitia.</p>
            <a href="#category" class="btn">Explore now &#8594;</a>
        </div>
        <div class="col-2">
            <img src="./images/first.png">
        </div>
</div> <!--CONTAINER END-->
</div>
</div> <!--HEADER END-->
<!---------------------------------------------PRODUCT SECTION-------------------------------------->
<div id="category" class="categories" style="background: radial-gradient(wheat,rgb(245, 194, 99));">
    <div class="small-container">
        <h2 class="title">What we sell in a glance</h1>
    <div class="row">
        <div class="col-3">
            <img src="./images/choco/ooty1.jpg">
        </div>
        <div class="col-3">
            <img src="./images/choco/ooty2.jpg">
        </div>   
        <div class="col-3">
             <img src="./images/choco/ooty3.jpg">
        </div>
        <div class="col-3">
             <img src="./images/choco/ooty4.jpg">
        </div>
        <div class="col-3">
            <img src="./images/choco/ooty2.jpg">
        </div>   
        <div class="col-3">
             <img src="./images/choco/ooty3.jpg">
    </div>
    <a href="./products.html" class="btn">See More</a>
  </div><!--small-container end-->
</div><!--categories end-->
<!--------------------------------------product tab------------------------------------------->
<div id="products" class="small-container">
    <h2 class="title">Special Chocolates</h2>
    <div class="row">
        <div class="col-4">
            <a href="./single.html"><img src="./images/choco/ooty1.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.150</p>
        </div>

        <div class="col-4">
            <a href="./single.html"><img src="./images/choco/ooty2.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.150</p>
        </div>

        <div class="col-4">
            <a href="./single.html"><img src="./images/choco/ooty3.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>Rs.150</p>
        </div>

        <div class="col-4">
            <a href="./single.html"><img src="./images/choco/ooty4.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.150</p>
        </div>
        <div class="col-4">
            <a href="./single.html"><img src="./images/choco/ooty1.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>Rs.150</p>
        </div>

        <div class="col-4">
            <a href="./single.html"> <img src="./images/choco/ooty2.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.150</p>
        </div>

        <div class="col-4">
            <a href="./single.html"> <img src="./images/choco/ooty3.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-half"></i>
            </div>
            <p>Rs.150</p>
        </div>

        <div class="col-4">
            <a href="./single.html"><img src="./images/choco/ooty4.jpg"></a>
            <h4>Brown HomeMade Chocolate</h4>
            <div class="rating"><!--Star rating-->
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
            </div>
            <p>Rs.150</p>
        </div>
        <a href="./products.html" class="btn">See More&#8594;</a>
    </div>
<!-----------------------------------TEA SECTION------------------------>
    <h2 class="title">Tea & Coffee</h2>
        <div id ="tea" class="row">
            <div class="col-4">
                <a href="./single.html">    <img src="./images/tea/t4.jpeg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.150</p>
            </div>
    
            <div class="col-4">
                <a href="./single.html"> <img src="./images/tea/T1.jpg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.150</p>
            </div>
    
            <div class="col-4">
                <a href="./single.html"><img src="./images/tea/T2.jpg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>Rs.150</p>
            </div>
    
            <div class="col-4">
                <a href="./single.html"><img src="./images/tea/T3.jpg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.150</p>
            </div>
            <div class="col-4">
                <a href="./single.html"><img src="./images/tea/t4.jpeg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Rs.150</p>
            </div>
    
            <div class="col-4">
                <a href="./single.html"><img src="./images/tea/T1.jpg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.150</p>
            </div>
    
            <div class="col-4">
                <a href="./single.html"><img src="./images/tea/T2.jpg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star-half"></i>
                </div>
                <p>Rs.150</p>
            </div>
    
            <div class="col-4">
                <a href="./single.html"><img src="./images/tea/T3.jpg"></a>
                <h4>NILIGIRI SPECIAL TEA</h4>
                <div class="rating"><!--Star rating-->
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <p>Rs.150</p>
            </div>
    <a href="./products.html" class="btn">See More &#8594;</a>
    </div>
</div>
<!---------------------------------Exclusive offer---------------------------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <a href="./single.html"><img src="images/first.png" class="offer-img"></a>
            </div>
            <div class="col-2">
                <p>Exclusive Offer on XYZ</p>
                <h1>Special Dark Chocolate</h1>
                <small>Buy Two get one Free.Special Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, 
                    rerum! Assumenda atque, laboriosam cum dignissimos tenetur fugit voluptate,ipsa voluptatem itaque numquam quis quo eveniet nihil explicabo voluptates perferendis eligendi.</small>
                    <a href="" class="btn">Get Offer &#8594;</a>
                </div>
        </div>
    </div>
</div>
<!---------------Testimonial------------------->
<div id="about" class="testimonials">
    <div class="small-container">
        <div class="row">
            <div class="col-1">
                <h2 class="title"> ABOUT GERIVI</h2>
                <i class="fa fa-quote-left"></i>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, perspiciatis natus. 
                    Veniam, doloremque quaerat natus ipsa iusto quae excepturi perspiciatis exercitationem! 
                    Eos id consequatur velit autem minus pariatur, architecto recusandae?</p>
                    <div class="rating"><!--Star rating-->
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                    </div>
                    <img src="./images/choco/ooty4.jpg">
                    <h2>GEETHU VIVEK</h2>
                    <p style="text-align:center ; color: black;">CEO, GERIVI</p>
            </div>
        </div>
    </div>
</div>
<!---------------------------FOOTER--------------->
        <div id="contact" class="footer">
            <div class="container">
                <div class="row">
                    <div class="footer-col-1">
                        <h2 style="color: white; padding: 20px;">Contact Us :</h2>
                        <div class="column">
                            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                              <!--<label for="fname">Name</label>-->
                              NAME :<input type="text" name="name" value="<?php echo $name;?>">
							  <span class="error">* <?php echo $nameErr;?></span>
                              EMAIL :<input type="text" name="email" value="<?php echo $email;?>">
							  <span class="error" style="color:red; font-size:20px;";><?php echo $emailErr;?></span><br><br>
                              COMMENT: <textarea name="comment" rows="5" cols="40"><?php echo $comment;?></textarea>
									<br><br>				
									<input type="submit" name="submit" value="Submit">
                            </form>
                          </div>
                    </div>
                    <div class="footer-col-2">
                        <h3>Useful Links</h3>
                        <ul>
                            <a href=""><li>Coupons</li></a>
                           <a href=""><li>Return policy</li></a>
                           <a href=""></a> <li>Terms and Conditions</li></a>
                            <a href=""><li>Tourism</li></a>
                        </ul>
                       
                        <a href="#home"><button class="top"><a href="#" class="fa fa-hand-o-up" style="font-size:35px; padding: 50px; color:rgb(255, 255, 255)"></a></button></a>
            
                    </div>
                    <div class="footer-col-3">
                        <h3>Follow us</h3>
                        <ul>
                           <li> <a href="#" class="fa fa-facebook"></a></li>
                            <li> <a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-instagram"></a></li>
                                    <li> <a href="#" class="fa fa-youtube-play" style="color:red"></a></li>
                        </ul>
                     
                    </div>
                </div>
                <hr>
                <p class="copyright">Copyright 2021 -VkDesigns</p>
            </div>
        </div>
</div>
<script>
    
            var MenuItems = document.getElementById("MenuItems");

            MenuItems.style.maxHeight = "0px";

            function menutoggle(){
                if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
                else{
                    MenuItems.style.maxHeight= "0px";
                }
            }
</script>
</body>
</html>