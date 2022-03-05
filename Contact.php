<!DOCTYPE html>
<html lang="fr">
   <head>
      <meta charset="utf-8"> 
      <title>MonnaieDuSiècle</title>
      <link rel="stylesheet" href="css/style4.css">
      <link rel="stylesheet" href="css/all.min.css">
      <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/> -->
   </head>
   <body>
      <header class="main-head">
         <nav>
         <h1 id="logo"><a href="Accueil.html">Monnaie<font color="#F9A826">Du</font>Siècle</a></h1>  
            <lu class="menu">
               <li>
                  <a href="Accueil.html">Accueil</a>
               </li>
               <li>
                  <a href="Services.html">Services</a>
               </li>
               <li>
                <a href="About.html">à propos</a>
             </li>
             <li>
               <a href="Nouvelle.html">Nouveau</a>
            </li>
            </lu> 
         </nav>
      </header>
      <section>
         <input type="checkbox" id="toggle">
         <label for="toggle" class="show-btn">Show Modal</label>
         <div class="wrapper">
           <label for="toggle">
           <i class="cancel-icon fas fa-times"></i>
           </label>
           <div class="icon"><i class="far fa-envelope"></i></div>
           <div class="content">
             <header>Abonné</header>
             <p>Abonnez-vous à notre blog et recevez les dernières mises à jour directement dans votre boîte de réception.</p>
           </div>
           <form action="Contact.php" method="POST">
           <?php 
           $userEmail = ""; //first we leave email field blank
           if(isset($_POST['subscribe'])){ //if subscribe btn clicked
             $userEmail = $_POST['email']; //getting user entered email
             if(filter_var($userEmail, FILTER_VALIDATE_EMAIL)){ //validating user email
               $subject = "Merci de nous avoir abonné - MonnaieDuSiècle";
               $message = "Merci de vous être abonné à notre site. Vous recevrez toujours des mises à jour de notre part. Et nous ne partagerons ni ne vendrons vos informations.";
               $sender = "From: aminzer20187890@gmail.com";
               //php function to send mail
               if(mail($userEmail, $subject, $message, $sender)){
                 ?>
                  <!-- show sucess message once email send successfully -->
                 <div class="alert success-alert">
                   <?php echo "Thanks for Subscribing us." ?>
                 </div>
                 <?php
                 $userEmail = "";
               }else{
                 ?>
                 <!-- show error message if somehow mail can't be sent -->
                 <div class="alert error-alert">
                 <?php echo "Failed while sending your mail!" ?>
                 </div>
                 <?php
               }
             }else{
               ?>
               <!-- show error message if user entered email is not valid -->
               <div class="alert error-alert">
                 <?php echo "$userEmail is not a valid email address!" ?>
               </div>
               <?php
             }
           }
           ?>
             <div class="field">
               <input type="text" class="email" name="email" placeholder="Email Address" required value="<?php echo $userEmail ?>">
             </div>
             <div class="field btn">
               <div class="layer"></div>
               <button type="submit" name="subscribe">Abonné</button>
             </div>
           </form>
           <div class="text">nous vous protéger vos information.</div>
         </div>       
      </section>
      <article>   
      </article>
   </body>
</html>