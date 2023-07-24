<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;
use League\CommonMark\Util\Html5EntityDecoder;
use Nette\Utils\Html;



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Библиотека</title>

    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400"> 
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">                
    <link rel="stylesheet" href="css/bootstrap.min.css">                                      
    <link rel="stylesheet" href="css/tooplate-style.css">                                   


</head>

    <body>

        <div class="container-fluid">
            <!-- Navigation -->        
            <div class="tm-nav">
                <nav class="navbar">

                    <button class="navbar-toggler hidden-md-up" type="button" data-toggle="collapse" data-target="#tmNavbar"></button> 
                    <div class="collapse navbar-toggleable-sm text-xs-center tm-navbar" id="tmNavbar">
                        <ul class="nav navbar-nav">
                            <li class="nav-item active selected">
                                <a class="nav-link current" href="#home">Главная <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#services">Категории</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#testimonials">Регистрация/Вход</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            
            <section class="tm-section tm-section-home tm-flex-center" id="home">                
                
                <div class="tm-hero">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="text-uppercase tm-hero-title">Книга</h1>
                            <p class="tm-hero-subtitle">устройство, способное разжечь воображение</p>
                        </div>
                    </div>
                </div>                

            </section>
            
            <!-- Section 2 -->
            <section class="tm-section tm-section-about" id="about">

                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent tm-content-box tm-content-box-right tm-flex-center">
                        <div class="tm-content-box-inner">
                            <h2 class="tm-section-title">Mauris quis odio id sapien</h2>
                            <p>Aliquam sollicitudin mi sollicitudin justo viverra, nec posuere lorem fringilla. Morbi quam arcu, dignissim ac rutrum vel, hendrerit feugiat tortor. Ut vulputate eros non ante lobortis viverra.</p>
                            <p>Vestibulum ut est lorem. Sed nec blandit lorem, eget iaculis quam. Mauris quis odio id sapien scelerisque mollis. Maecenas aliquet luctus erat sit amet aliquet. Vestibulum mattis porta tristique. Vivamus suscipit bibendum lorem, at efficitur enim hendrerit nec.</p>   
                        </div>                        
                    </div>                    
                </div>
                
            </section>
            
           

            <!-- Section 5 -->
            <section class="tm-section tm-section-contact" id="contact">
                <div class="tm-page-content-width">
                    <div class="tm-bg-black-translucent text-xs-left tm-textbox tm-2-col-textbox-2 tm-textbox-padding tm-textbox-padding-contact tm-content-box  tm-content-box-right">
                        <h2 class="tm-section-title">Contact Us</h2>
                        
                        <!-- contact form -->
                        <form action="index.html" method="post" class="tm-contact-form">

                            <div class="form-group">
                                <input type="text" id="contact_name" name="contact_name" class="form-control" placeholder="Your Name"  required/>
                            </div>
                
                            <div class="form-group">                                                        
                                <input type="email" id="contact_email" name="contact_email" class="form-control" placeholder="Your Email"  required/>
                            </div>                                                        
                            
                            <div class="form-group">
                                <textarea id="contact_message" name="contact_message" class="form-control" rows="5" placeholder="Message" required></textarea>
                            </div> 

                            <button type="submit" class="tm-submit-btn">Submit</button>  
                        
                        </form>  
                    </div>
                </div>
                <div class="tm-bg-black-translucent tm-copyright-div">
                    <p class="tm-copyright-text">Copyright &copy; 2016 Your Company - Design: Tooplate</p>
                </div>                
            </section>

        </div>
        
        <!-- load JS files -->
        <script src="js/jquery-1.11.3.min.js"></script>         
        <script src="https://www.atlasestateagents.co.uk/javascript/tether.min.js"></script> 
        <script src="js/bootstrap.min.js"></script>            
        <script src="js/jquery.singlePageNav.min.js"></script>  

        <script>     
          
            function checkScrollPosition() {
                
                if($(window).width() < 767) {
                    $(".tm-nav").removeClass("scroll");
                    return;
                }

                if($(window).scrollTop() > 50) {
                  $(".tm-nav").addClass("scroll");
              } else {        
                  $(".tm-nav").removeClass("scroll");
              }
            }

            $(document).ready(function () {   
                // Single page nav
                $('.tm-nav').singlePageNav({
                    offset: 57,
                    filter: ':not(.external)',
                    updateHash: true        
                });

                checkScrollPosition();

                // navbar
                $('.navbar-toggle').click(function(){
                    $('.main-menu').toggleClass('show');
                });

                $('.main-menu a').click(function(){
                    $('.main-menu').removeClass('show');
                });
            });

            $(window).on("scroll", function() {
                checkScrollPosition();    
            });

            $('#tmNavbar a').click(function(){
                $('#tmNavbar').collapse('hide');
            });

        </script>             

</body>
</html>