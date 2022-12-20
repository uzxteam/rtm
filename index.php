<?php include_once "uzx.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KUTUBXONA  | UzX Team</title>
    <link rel="stylesheet" href="/sass/main.css">
</head>
<body> 
  <section id="top" class="header ">
       <nav class="nav">
           <div class="container">
               
               <ul class="nav__list">
                   <li class="nav__item">
                       <a href="#" class="nav__link">Bosh sahifa</a>
                   </li>
                   <li class="nav__item">
                      <a href="#" class="nav__link">Asarlar</a>
                   </li>
                   <li class="nav__item">
                      <a href="#" class="nav__link">Roman</a>
                   </li>
                   <li class="nav__item">
                      <a href="#" class="nav__link">Qissa</a>
                   </li>
                   <li class="nav__item">
                      <a href="#" class="nav__link">Hikoya</a>
                   </li>
                   <li class="nav__item">
                      <a href="#" class="nav__link">Darsliklar</a>
                   </li>
                   <li class="nav__item">
                      <a href="#" class="nav__link">Qo'llanmalar</a>
                   </li>
                   
               </ul>
               <div class="nav__right">
                   <a href="login.php" class="sign-in">Kitob joylash</a>
               </div>
               
           </div>
       </nav>
      
  </section>
 
  <section class="explore">
       <div class="container">
           
           <ul class="explore__list row mb-3">

           <?php $kitob = mysqli_query($conn, "SELECT * FROM tbl_books "); ?>
           <?php
    while ($row = mysqli_fetch_array($kitob)) {
   echo " <li class='col-1-of-4'> ";
   echo " <div class='card'> ";
   echo "  <div class='card__header'> ";
   echo "   <img class='card__img' src='./images/explore-1.png' alt='explore'> ";
   echo " </div> ";
   echo " <h2 class='card__title'>".$row['book_title']."</h2> ";
   echo "  <p class='card__text'>Lorem ipsum dolor sit amet consectetur adipisicing.</p> ";
   echo "  <a href="" class='card__link'>Read More</a> ";
   echo " </div>  ";
   echo "   </li> ";
     
    }
  ?> 
               
           </ul>
       </div>
  </section>
 
 

</body>
</html>