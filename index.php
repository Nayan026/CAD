<?php
require("includes/common.php");
if(isset($_SESSION['email'])) {
  header('location: products.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Food Forward</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!--Get your own code at fontawesome.com-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- Custom CSS -->
        <link href="style.css" rel="stylesheet">
    </head>
    <body style="padding-top: 50px;">
        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>

        <div id="content">
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        
                    </center>
                </div>
            </div>
            <div style="border:3px solid; margin-top:10px;" id="about">
                <center><h2>About Us</h2></center>
                <p style="font-size:18px;padding-left:10px;padding-right:10px;">
                Initially, our organization's primary focus was to provide the latest news and insights on global injustices, with a goal to enhance the health and wellness of all individuals. This involved advocating for proper veteran care, raising awareness about food deserts across the country, and addressing issues related to food security.
Currently, our objective is to distribute excess food to individuals who require it the most. Our organization collaborates with others to feed those in need, including homeless individuals. We strive to empower and support homeless individuals to enable them to access their food requirements and live a life of dignity and respect.
Over the last few years, our organization has experienced tremendous growth, and we have broadened our scope of services to encompass other areas where people need hope and support, such as:<br>
                    • Poverty<br>
                    • Avoid Food Waste<br>
                    • Malnutrition<br>
                    • Awareness about Food Security<br> 
                    • Disaster Emergencies<br>
                    • Sustainable Food<br>
                    • Food Safety<br>
                    • Zero Hunger<br>
                    As our organization continues to grow, we have made it a priority to stick to our core value: keeping the public informed on some of humanity’s most important issues. And given the current state of the world, it’s more important than ever to be an active, educated citizen so we encourage you to bookmark our page and follow our social media accounts to stay up to date on the latest global issues and humanitarian efforts
                </p>
            
            </div>
            <div style="border:3px solid; margin-top:10px;" id="services">
                <center><h2 style="margin-bottom:-40px;">Our Services</h2></center>
            <div class="container">
                <div class="row text-center" id="item_list">
                    <div class="col-sm-4">
                        <a href="products.php#events" >
                            <div class="thumbnail">
                                <img src="img/events.png" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Our Events</h3>
                                  
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#money" >
                            <div class="thumbnail">
                                <img src="img/money.jpg" alt="" style="height:240px;">
                                <div class="caption">
                                    <h3>Donate Money</h3>
                                    
                                </div>
                            </div> 
                        </a>
                    </div>
                    <div class="col-sm-4">
                        <a href="products.php#food" >
                            <div class="thumbnail">
                                <img src="img/food.jpg" alt="">
                                <div class="caption">
                                    <h3>Donate Food</h3>                                  
                                </div>
                            </div>
                        </a>
                    </div>              
                </div>
            </div>
            </div>
            <div id="team" style="border:3px solid; margin-top:10px;margin-bottom:10px; ">
                <center><h2>Our Team</h2></center>
                <div class="container">
                <div class="row text-center">
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/nayan.jpg" alt="" style="height:300px;">
                                <div class="caption">
                                    <h3>Nayan Patel</h3>
                                </div>
                            </div> 
                    </div>
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/mojiz.jpg" alt="" style="height:300px;">
                                <div class="caption">
                                    <h3>Mirza Mojiz</h3>
                                </div>
                            </div> 
                    </div>
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/rakshit.jpg" alt="" style="height:300px;width:230px;">
                                <div class="caption">
                                    <h3>Rakshit</h3>
                                </div>
                            </div> 
                    </div>
                    <div class="col-sm-3">                       
                            <div class="thumbnail" style="border-color:transparent;">
                                <img src="img/pushkin.jpg" alt="" style="height:300px;">
                                <div class="caption">
                                    <h3>Pushkin</h3>
                                </div>
                            </div> 
                    </div>
                                  
                </div>
            </div>
            </div>
            <div id="contact" style="margin-top:10px;background-color:#1B1E23;">
              <div class="container">
                  <div class="row text-center">
                  <div class="col-sm-6">
                      <h2 style="color:#D4AF37;font-size:25px;">FoodForward</h2>
                      <div class="thumbnail" style="background-color:#1B1E23;color:white;border-color:#1B1E23;">
                      <p style="font: normal normal normal 20px arial,sans-serif;">This company is a nonprofit organization with the aim of improving health and wellness around the world.If you're interested in learning more or partnering for a good cause. Please feel free to reach out </p>
                      
                      </div>    
                  </div>
                  <div class="col-sm-6">
                      <h2 style="color:#D4AF37;font-size:25px;">Contact Information</h2>
                      <div class="thumbnail" style="background-color:#1B1E23;color:white;border-color:#1B1E23;">
                      <p class="fa fa-google" style="font-size:20px;"> foodorward@gmail.com</p><br>
                      <p class="fa fa-phone" style="font-size:20px;"> +91 9313696799</p><br>
                      <a href="#" class="fa fa-facebook" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      <a href="#" class="fa fa-youtube" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      <a href="#" class="fa fa-instagram" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      <a href="#" class="fa fa-linkedin" style="padding:5px 20px 10px 5px;border-radius: 50%;font-size: 20px;width: 5px;height:5px;text-align: center;text-decoration: none;margin: 1px 2px;color: white;"></a>
                      </div>
                  </div>
                  </div>
              </div>
            </div>
        </div>
        <?php
        include 'includes/footer.php';
        ?>   
    </body> 
</html>