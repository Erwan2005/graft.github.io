<?php 
    require 'base.php';
    $DB = new DB();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Salanitra | Entreprise</title>
</head>
<body>
    <header>
       <nav>
        <div class="logo">
            <h4>Salanitra | Entréprise</h4>
        </div>
        <ul class="nav-links">
            <li class="active"><a href="index.html" class="fa fa-home">Accueil</a></li>
            <li><a href="#modalpanier" class="fa fa-shopping-cart">Panier</a></li>
            <li><a href="contact.php" class="fa fa-envelope-o">Contact</a></li>
        </ul>
        <div class="burger">
            <div class="line1"></div>
            <div class="line2"></div>
            <div class="line3"></div>
        </div>
    </nav> 
    </header>
    
    <div class="container">
        <div class="slider">
            <div class="img-slide">
                <div id="img">
                    <img src="images/3.jpg" alt="">
                </div>
            </div>

        </div>
        <div class="jumbotron">
            <div class="jumbotron-header">
                Catégories
            </div>
            <div class="jumbotron-content">
                 <div class="wraper">
                     <a href="#bonjour">
                     <div class="image">
                         <img src="images/satroka.jpg" alt="">
                         <div class="dtl">
                             Bonjour
                         </div> 
                     </div>
                 </div></a>

                <div class="wraper">
                    <div class="image">
                        <img src="images/panier.jpg" alt="">
                        <div class="dtl">
                            Bonjour
                        </div> 
                    </div>
                    
                </div>


                <div class="wraper">
                    <div class="image">
                        <img src="images/dos.jpg" alt="">
                        <div class="dtl">
                            Bonjour
                        </div> 
                    </div>
                    
                </div>


                <div class="wraper">
                    <div class="image">
                        <img src="images/main.jpg" alt="">
                        <div class="dtl">
                            Bonjour
                        </div> 
                    </div>
                    
                </div>

                <div class="wraper">
                    <a href="#bonjour">
                    <div class="image">
                        <img src="images/satroka.jpg" alt="">
                        <div class="dtl">
                            Bonjour
                        </div> 
                    </div>
                </div></a>

                <div class="wraper">
                   <div class="image">
                       <img src="images/panier.jpg" alt="">
                       <div class="dtl">
                           Bonjour
                       </div> 
                   </div>
                   
               </div>


               <div class="wraper">
                   <div class="image">
                       <img src="images/dos.jpg" alt="">
                       <div class="dtl">
                           Bonjour
                       </div> 
                   </div>
                   
               </div>


               <div class="wraper">
                   <div class="image">
                       <img src="images/main.jpg" alt="">
                       <div class="dtl">
                           Bonjour
                       </div> 
                   </div>
                   
               </div>

            </div>
        </div>
    </div>
    <?php require 'popup.php' ?>
    <div class="footer">
        copyright &#169; Salanitre 2020. All rights reserved</br>
        Manohisoa Guy Aimar web Developper since
    </div>
    <script src="app.js"></script>
    <script>
        var img = document.getElementById('img');
        var images = ['1.jpg','2.jpg','3.jpg'];
        var x = 0;
        function slide(){
            if (x<images.length){
                x = x + 1;
            }else{
                x = 1;
            }
            img.innerHTML = "<img src=images/"+images[x-1]+">";
        }
        setInterval(slide,4000)
    </script>
</body>
</html>