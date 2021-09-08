<?php $page = 'contact'; ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

    <title>DAPS</title>

    <?php include('includes/style.php') ?>


    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->    
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <?php include('includes/nav.php') ?>

    <!-- ***** Welcome Area Start ***** -->
    <div class="about-container">
        <br><br><br><br><br><br><br><br><br>
        <!-- ***** Header Text Start ***** -->
        <div class="header-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12">
                        <img src="assets/images/group.svg" alt="" style="height: 30%;" class="img-fluid">

                        <div style="margin-top: 5%;">
                            <h5>ADDRESS</h5>
                            <ul>
                                <li>Sample Street Sample Zone Philippines</li>
                            </ul>
                            
                        </div>

                        <div style="margin-top: 5%;">
                            <h5>PHONE</h5>
                            <ul>
                                <li>+63 998-2634-391</li>
                                <li>+63 998-2634-391</li>
                            </ul>
                        </div>

                        <div style="margin-top: 5%;">
                            <h5>ONLINE SERVICE</h5>
                            <ul>
                                <li>www.sample.com</li>
                                <li>hello.sample@gmail.com</li>
                            </ul>
                        </div>
                   </div>
                   <div class="col-lg-6 col-md-6 col-sm-12">
                        <div class="container" style="background-color: #fff; box-shadow: 5px 10px 50px rgba(16, 112, 177, 0.2); border-radius: 10px;">
                            <div class="container" style="padding: 5%;">
                                <h6>SEND US MESSAGE</h6>

                                <form action="" method="post">
                                    <div class="form-group" style="margin-top: 5%;">
                                        <label for="">Full Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Your Name" require="required">
                                    </div>

                                    <div class="form-group" style="margin-top: 5%;">
                                        <label for="">Email</label>
                                        <input type="email" class="form-control" name="email" placeholder="Your Email" require="required">
                                    </div>

                                    <div class="form-group" style="margin-top: 5%;">
                                        <label for="">Message</label>
                                        <textarea  type="text" class="form-control" name="text" placeholder="Your Message" rows="5"> </textarea>
                                    </div>

                                    <div class="form-group" style="margin-top: 5%;">
                                        <button name="submit" class="btn btn-info" style="width: 100%; background-color: #28378F; box-shadow: 5px 20px 50px rgba(16, 112, 177, 0.2); border-radius: 10px; padding: 3%;">
                                        SUBMIT
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>    
                   </div>
                </div>
            </div>
        </div>
        <!-- ***** Header Text End ***** -->
    </div>
    <!-- ***** Welcome Area End ***** -->




 


   <?php include('includes/footer.php') ?>
   


    <?php include('includes/script.php') ?>
    
 
    

  </body>
</html>
<?php 
    if(isset($_POST['submit']))
    {
        $to = "jchu24608@gmai.com";
        $name = $_POST['name'];
        $email = $_POST['email'];
        $subject = "DAPS Contact";
        $message = $_POST['text'];
        
        $headers = "From: " . $email;
        $headers2 = "From: " . $to;
        mail($to,$subject,$message,$headers);
        //mail($from,$subject,$message2,$headers2); // sends a copy of the message to the sender
        echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
?>