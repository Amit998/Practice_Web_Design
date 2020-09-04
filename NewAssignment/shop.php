
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAFEDOCS TECHNOLOGY</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.js" integrity="sha256-kiFgik3ybDpn1VOoXqQiaSNcpp0v9HQZFIhTgw1c6i0=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="productList.css">
    
</head>
<body>
    <?php
    error_reporting(0);
    ?>
  <!-- NAVBAR -->

  <nav class="navbar navbar-expand-lg fixed-top py-3">
    <a href="./index.php" class="navbar-brand">SAFEDOCS TECHNOLOGY</a>
    <button
      class="navbar-toggler custom-toggler"
      type="button"
      data-toggle="collapse"
      data-target="#navbarSupportedContent"
    >
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto">
        <li class="nav-item active">
          <a href="./index.php" class="nav-link">Home</a>
        </li>
 
        <li class="nav-item">
          <a href="./shop.php" class="nav-link">Products</a>
        </li>

        <li class="nav-item">
          <a  href="tel:+918210431630" class="nav-link">Contact : +918210431630 </a>
        </li>
      </ul>

      <!--ul class="navbar-nav mx-auto">
        <form class="form-inline d-none d-sm-block" action="FullPost.php?id=<?/*php $searchQueryParameter */?>">
          <div class="form-group">
            <input class="form-control mr-2" name="search" type="text" placeholder="Search Here.." />
            <button class="btn" name="searchBtn" type="submit">Search</button>
          </div>
        </form>
      </ul-->
    </div>
  </nav>
  <br>
  <!-- NAV BAR END -->

    <section class="shop-section">
        <div class="container">
            <h3 class="text-center">Our Product</h3>
            <div class="border"></div>
            <!--div class="row"-->

            <form action="" method="POST" class="">
            
                    <div class="row">

                      <div class="col-md-4 product-grid" > 
                        <div class="image">
                            <a href="">
                                <img src="./img/12.jpg" alt="here" class="w-100"><!--12-->
                                
                                <!--div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                </div-->
                            </a>
                        </div>
                        
                          <h4 class="text-center">SAFETY HELMET / HARD HAT</h4>
                          <h5 class="text-center">₹ 165.00</h5>
                          <h6 class="text-center">FRP Industrial Helmet <br>IS:2925</h6>
                          <p class="text-center">Mail us or call us to get the best & satisfactory quotation for required quantities</p>
                          
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <!--div class="form-group"-->
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="object1">
                            <label class="form-check-label" for="exampleCheck1">Select Item</label>
                          </div>
                        <!--/div-->
                        <!--div class="form-group"-->
                          <input class="form-control" id="exampleInputEmail1" aria-describedby="totalAmount" type="number" name="quantity1" placeholder="quantity" min="0" max="10">
                          <!-- small id="totalAmount" class="form-text text-muted">Enter The Amount.</small -->
                        <!--/div-->

                        </div>


                        <div class="col-md-4 product-grid" > 
                          <div class="image">
                              <a href="">
                                  <img src="./img/13.jpg" alt="here" class="w-100">
                                  
                                  <!--div class="overlay">
                                      <div class="detail"><span class="">VIEW DETAILS</span></div>
                                  </div-->
                              </a>
                          </div>
                          
                            <h4 class="text-center">SAFETY SHOES / BOOTS</h4>
                            <h5 class="text-center">₹ 470.00</h5>
                            
                            <h6 class="text-center">IS15298:2011</h6>
                            <p class="text-center">We have shoes ranging from Acme to regular usable ones and the prices vary a much with manufacturer's quality. Kindly mail us or call us to get the best & satisfactory quotation for required quantities.</p>
                                    
                          <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                          <!--div class="form-group"-->
                            <div class="form-check">
                              <input type="checkbox" class="form-check-input" name="object2">
                              <label class="form-check-label" for="exampleCheck1">Select Item</label>
                            </div>
                          <!--/div-->
                          <!--div class="form-group"-->
                            <input class="form-control" id="exampleInputEmail1" aria-describedby="totalAmount" type="number" name="quantity2" placeholder="quantity" min="0" max="10">
                            <!--small id="totalAmount" class="form-text text-muted">Enter The Amount.</small-->
                          </div>
  
                         
                        

                        <div class="col-md-4 product-grid" > 
                        <div class="image">
                            <a href="">
                                <img src="./img/9.jpg" alt="here" class="w-100">
                                
                                <!--div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                </div-->
                            </a>
                        </div>
                        
                          <h4 class="text-center">FLORESCENT JACKET (HIGH VISIBILITY REFLECTING SAFETY CLOTH)</h4>
                          <h5 class="text-center">₹ 215.00</b></h5>
                          
                          <h6 class="text-center">Cotton high visibility traffic vest<br>EN-471</h6>
                          <p class="text-center">We have fluorescent jackets ranging from Udyogi & other certified Manufacturers thus the prices differs. Kindly mail us or call us to get the best & satisfactory quotation for required quantities.</p>       
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <!--div class="form-group"-->
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="object3">
                            <label class="form-check-label" for="exampleCheck1">Select Item</label>
                          </div>
                        <!--/div-->
                        <!--div class="form-group"-->
                          <input class="form-control" aria-describedby="totalAmount" type="number" name="quantity3" placeholder="quantity" min="0" max="10">
                          <!--small id="totalAmount" class="form-text text-muted">Enter The Amount.</small-->
                        </div>

                        


                        <div class="col-md-4 product-grid" > 
                        <div class="image">
                            <a href="">
                                <img src="./img/14.jpg" alt="here" class="w-100"><!--14-->
                                
                                <!--div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                </div-->
                            </a>
                        </div>
                        
                          <h4 class="text-center">FIRE RETARDANT JACKET</h4>
                          <h5 class="text-center">₹ 550.00</b></h5>
                          
                          <p class="text-center">We have fire retardant jackets manufactured by certified agencies and the prices are different with fabric & clothing. We also custom design jackets for companies with specific amount of fabric thickness required and providing cost effective solution. Kindly mail us or call us to get the best & satisfactory quotation for required quantities</p>
                                  
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <div class="form-group">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="object4">
                            <label class="form-check-label" for="exampleCheck1">Select Item</label>
                          </div>
                        <!--/div-->
                        <!--div class="form-group"-->
                          <input class="form-control" aria-describedby="totalAmount" type="number" name="quantity4" placeholder="quantity" min="0" max="10">
                          <!--small id="totalAmount" class="form-text text-muted">Enter The Amount.</small-->
                        </div>
                        </div>

                        




                        <div class="col-md-4 product-grid" > 
                        <div class="image">
                            <a href="">
                                <img src="./img/11.jpg" alt="here" class="w-100"><!--11-->
                                
                                <!--div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                </div-->
                            </a>
                        </div>
                        
                          <h4 class="text-center">SAFETY GOGGLES / GLASSES</h4>
                          <h5 class="text-center">₹ 55.00</b></h5>
                          
                          <p class="text-center">We have safety glasses manufactured by certified agencies like 3M & others and the prices varies with UV protection, covering & thickness of material. Kindly mail us or call us to get the best & satisfactory quotation for required quantities.</p>
                                  
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->
                        <div class="form-group" >
                          <div class="form-check" >
                            <input type="checkbox" class="form-check-input" name="object5">
                            <label class="form-check-label" for="exampleCheck1">Select Item</label>
                          </div>
                        <!--/div-->
                        <!--div class="form-group"-->
                          <input class="form-control"  aria-describedby="totalAmount" type="number" name="quantity5" placeholder="quantity" min="0" max="10">
                          <!--small id="totalAmount" class="form-text text-muted">Enter The Amount.</small-->
                        </div>
                        </div>

                        



                        <div class="col-md-4 product-grid" > 
                        <div class="image">
                            <a href="">
                                <img src="./img/10.jpg" alt="here" class="w-100">
                                
                                <!--div class="overlay">
                                    <div class="detail"><span class="">VIEW DETAILS</span></div>
                                </div-->
                            </a>
                        </div>
                        
                          <h4 class="text-center">NOSE MASK</h4>
                          <h5 class="text-center">₹ 117.00</b></h5>
                          <p class="text-center">We have many types of nose mask like 3M Safety 8210V, N95, KN95, N99 & others and the price varies. Kindly mail us or call us to get the best & satisfactory quotation for required quantities.</p>
                                  
                        <!--a href="" type="submit" class="btn cartBtn" id="addToCart" >ADD TO CART</a-->

                        <div class="form-group">
                          <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="object6">
                            <label class="form-check-label" for="exampleCheck1">Select Item</label>
                          </div>
                        <!--/div-->
                        <!--div class="form-group"-->
                          <input class="form-control" aria-describedby="totalAmount" type="number" name="quantity6" placeholder="Quantity" min="0" max="10">
                          <!--small id="totalAmount" class="form-text text-muted">Enter The Amount.</small-->
                        </div>
                        </div>
                        
                        




 

                        
                        

            </div>
                    </div>
            <div class="container">

            <div class="form-group">
            
              <h2>Have Any Query?</h2>
              <h4>Feel Free To Reach Us</h4>

              <label for="inputEmail">Email</label>

              <input type="email" class="form-control" id="inputEmail" name="inputEmail" placeholder="xyz@gmail.com" required="true" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
            </div>

            <div class="form-group">
              <label for="phn">Mobile Number</label>
<<<<<<< HEAD
              <input type="text" class="form-control"  name="phn" required="true" pattern="[7-9]{1}[0-9]{9}" placeholder="7*****10">
=======
              <input type="text" class="form-control"  name="phn" required="true" pattern="[7-9]{1}[0-9]{9}" placeholder="7*******10">
>>>>>>> ea9a30ddd66ae57924ee1b9537ab80f493184f42
            </div>

            <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" name="inputName" required="true" class="form-control" id="inputName" placeholder="Full Name">
            </div>

            <div class="form-group">
              <textarea rows="3" class="form-control" name="text" placeholder="Add Your Question"></textarea>
            </div>
    

            <input type="submit" name="btn" class="btn btn-primary">
            <input type="hidden" name="form_submitted" value="1">
          </div>



            

                        
                   
                   
             
             
<?php
if(isset($_POST["btn"]) and isset($_POST["form_submitted"])){
  $email= $_POST["inputEmail"];
  $phn= $_POST["phn"];
  $name=$_POST["inputName"];
  $text=$_POST["text"];
 

?>


</form>

              <?php
                     
                    if(isset($_POST['btn'])){
                        if(!empty($_POST['object1'])){
                            $object1=$_POST['quantity1'];
                        }
                        if(!empty($_POST['object2'])){
                            $object2=$_POST['quantity2'];
                        }
                        if(!empty($_POST['object3'])){
                            $object3=$_POST['quantity3'];
                        }
                        if(!empty($_POST['object4'])){
                            $object4=$_POST['quantity4'];
                        }
                        if(!empty($_POST['object5'])){
                            $object5=$_POST['quantity5'];
                        }
                        if(!empty($_POST['object6'])){
                            $object6=$_POST['quantity6'];
                        }
                    }
                    if(empty($object1)){
                        $object1=0;
                    }
                    if(empty($object2)){
                        $object2=0;
                    }
                    if(empty($object3)){
                        $object3=0;
                    }
                    if(empty($object4))
                    {
                        $object4=0;
                    }
                     if(empty($object5))
                    {
                        $object5=0;
                    }
                    if(empty($object6))
                    {
                        $object6=0;
                    }
                    
                    $to="damitlucky998@gmail.com";
                    $subject="Asking for Quotation";
                    
<<<<<<< HEAD
                    $message1="Mail from:".$email."\n"."Name:".$name."\n"."Phn number=".$phn."\n"."Object1 quantity=".$object1."\n"."Object2 quantity=".$object2."\n"."Object3 quantity=".$object3."\n"."Object4 quantity=".$object4."\n  Object5 quantity=".$object5."\n"."  Object6 quantity=".$object6."\n Message :".$text;
                    //echo $message;
                    if(mail($to,$subject,$message1)){
                        
                        ?>
            <!-- <script>alert("successful");</script> -->
=======
                    $message="Mail from:".$email."\n"."Name:".$name."\n"."Phn number=".$phn."\n"."Object1 quantity=".$object1."\n"."Object2 quantity=".$object2."\n"."Object3 quantity=".$object3."\n"."Object4 quantity=".$object4."\n  Object5 quantity=".$object5."\n"."  Object6 quantity=".$object6."\n Message :".$text;
                    //echo $message;
                    if(mail($to,$subject,$message)){
                        
                        ?>
            <script>alert("successful");</script>
>>>>>>> ea9a30ddd66ae57924ee1b9537ab80f493184f42
                    <?php
                      
                    } else{
                        
                        ?>
<<<<<<< HEAD
            <!-- <script>alert("unsuccessful");</script> -->
=======
            <script>alert("unsuccessful");</script>
>>>>>>> ea9a30ddd66ae57924ee1b9537ab80f493184f42
                        <?php  
                        
                        }
                    }
                    
                        ?>        
                      
            </div>

        <a href="#" class="gotoTop"><i class="fa fa-arrow-up"></i></a>
    </section>

    

    <!-- Footer -->

    <div class="footer">
      <div class="inner-footer">
          <div class="footer-items" style="visibility: hidden;">
          <h2>Our Works</h2>
          <div class="footer-border"></div>
          <ul>
            <a href="#"><li>Work 1</li></a>
            <a href="#"><li>Work 2</li></a>
            <a href="#"><li>Work 3</li></a>
            <a href="#"><li>Work 4</li></a>
          </ul>
        </div>

          <div class="footer-items" style="visibility: hidden;">
          <h2>Our Portfolio</h2>
          <div class="footer-border"></div>
          <ul>
            <a href=""><li>Portfolio 1</li></a>
            <a href=""><li>Portfolio 2</li></a>
            <a href=""><li>Portfolio 3</li></a>
          </ul>
        </div>

        <div class="footer-items">
          <h2>Contact</h2>
          <div class="footer-border"></div>
          <ul>
            <li>
              <i class="fa fa-map-marker" aria-hidden="true"></i>
           
                Jamshedpur,Jharkhand, India
 
            </li>
            <li>
        <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+918210431630">+918210431630</a>
              
            </li>
            <li>
              <i class="fa fa-envelope" aria-hidden="true"></i>
              <a href="mailto:safedocstechnology@gmail.com">safedocstechnology@gmail.com</a>
            </li>
          </ul>

          <div class="footer-icons" style="visibility: hidden;">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-github"></i></a>
          </div>
        </div>
      </div>
      <div class="footer-bottom">
        Copyright &copy; Safedocs Technology . All Rights Reserved
      </div>
    </div>

    
    
    <script src="./js/main.js"></script>
    
    
</body>
</html>
