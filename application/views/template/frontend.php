<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/reset.css' ?>" />
        <link rel="stylesheet" href="<?php echo base_url().'assets/css/style.css' ?>" />
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
        <link href='http://fonts.googleapis.com/css?family=Open+Sans|Baumans' rel='stylesheet' type='text/css'>
        
        <script src="<?php echo base_url().'assets/js/vendor/modernizr.min.js' ?>"></script>
        <script src="<?php echo base_url().'assets/js/vendor/respond.min.js' ?>"></script>
        
        <!-- include extern jQuery file but fall back to local file if extern one fails to load !-->
        <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
        <script type="text/javascript">window.jQuery || document.write('<script type="text/javascript" src="js\/vendor\/1.7.2.jquery.min.js"><\/script>')</script>
        
        <script src="<?php echo base_url().'assets/lightbox/js/lightbox.js' ?>"></script>
        <script src="<?php echo base_url().'assets/js/vendor/prefixfree.min.js' ?>"></script>
        <script src="<?php echo base_url().'assets/js/vendor/jquery.slides.min.js' ?>"></script>
        <script src="<?php echo base_url().'assets/js/script.js' ?>"></script>
        
        <script>
        $(function() {
          $('#slides').slidesjs({	
            height: 235,
            navigation: false,
            pagination: false,
            effect: {
              fade: {
                speed: 400
              }
            },
            callback: {
                start: function(number)
                {			
                    $("#slider_content1,#slider_content2,#slider_content3").fadeOut(500);
                },
                complete: function(number)
                {			
                    $("#slider_content" + number).delay(500).fadeIn(1000);
                }		
            },
            play: {
                active: false,
                auto: true,
                interval: 6000,
                pauseOnHover: false,
                effect: "fade"
            }
          });
        });
        </script>
	</head>

	<body>
        <header>
            <div class="toggleMobile">
                <span class="menu1"></span>
                <span class="menu2"></span>
                <span class="menu3"></span>
            </div>
            <div id="mobileMenu">
                <ul>
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Porfolio</a></li>
                    <li><a href="javascript:void(0)">About</a></li>
                </ul>
            </div>           
            <h1>Lingulo HTML5</h1>
            <p>A responsive website tutorial</p>           
            
            <nav>
            	<h2 class="hidden">Our navigation</h2>
                <ul>
                    <li><a href="javascript:void(0)">Home</a></li>
                    <li><a href="javascript:void(0)">Porfolio</a></li>
                    <li><a href="javascript:void(0)">About</a></li>
                    <li><a href="javascript:void(0)">Contact</a></li>
                </ul>
            </nav>
        </header>
        <section class="container">
        	<h2 class="hidden">Lorem Ipsum</h2>
            <article id="slider_content1">
                <h3>Lorem ipsum dolor?</h3>
                <p>Weit hinten, hinter den Wortbergen, fern der Länder Vokalien und Konsonantien leben die Blindtexte. Abgeschieden wohnen Sie in Buchstabhausen an der Küste des Semantik. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <article id="slider_content2">
                <h3>Nulla consequat</h3>
                <p>Ein kleines Bächlein namens Duden fließt durch ihren Ort und versorgt sie mit den nötigen Regelialien. Es ist ein paradiesmatisches Land, in dem einem gebratene Satzteile in den Mund fliegen. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <article id="slider_content3">
                <h3>Lorem ipsum</h3>
                <p>Nicht einmal von der allmächtigen Interpunktion werden die Blindtexte beherrscht – ein geradezu unorthographisches Leben. <a href="javascript:void(0)" class="responsive_button">Mehr lesen...</a></p>
                <a class="button" href="javascript:void(0)">Mehr lesen</a>
            </article>
            <div id="slides">
                <img src="<?php echo base_url().'assets/img/slide3.jpg' ?>" alt="Some alt text">
                <img src="<?php echo base_url().'assets/img/slide2.jpg' ?>" alt="Some alt text">    	
                <img src="<?php echo base_url().'assets/img/slide1.jpg' ?>" alt="Some alt text">
            </div>
        </section>
        <section id="spacer">  
        	<h2 class="hidden">Dolor sit amet</h2>          
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit?</p>
            <div class="search">
                <form action="#">
                    <input type="text" name="sitesearch" value="Enter a word..."/>
                    <input type="submit" name="start_search" class="button" value="Search"/>
                </form>
            </div>            
        </section>
        
        <!-- start content -->

        <?php $this->load->view($content); ?>
        
        <!-- end content -->

        <section id="text_columns">
        	<h2 class="hidden">Blindtext</h2>
            <article class="column1">    
                <h3>Dolor sit amet</h3>
                <p>Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein eigenes, sicheres Land zurückkehren.</p>
                    <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange, bis ihm ein paar heimtückische Werbetexter auflauerten, es mit Longe und Parole betrunken machten und es dann in ihre Agentur schleppten, wo sie es für ihre Projekte wieder und wieder mißbrauchten.</p>
            </article>
            <section class="column2">
            	<h3 class="hidden">Lorem Impsum</h3>
                <article class="row">  
                	<h4 class="hidden">Dolor sit</h4>                  
                    <img src="<?php echo base_url().'assets/img/icon4.png' ?>" width="80" class="rocket" alt="Some alt text"/>
                    <p>Und wenn es nicht umgeschrieben wurde, dann benutzen Sie es immernoch.</p>
                </article> 
                <article class="row">
                	<h4 class="hidden">Ipsum</h4>                
                    <img src="<?php echo base_url().'assets/img/icon5.png' ?>" width="80" class="clock" alt="Some alt text"/>
                    <p>Doch alles Gutzureden konnte es nicht überzeugen und so dauerte es nicht lange.</p>
                </article>   
            </section>
        </section>
        <footer>
        	<h2 class="hidden">Our footer</h2>
            <section id="copyright">
            	<h3 class="hidden">Copyright notice</h3>
                <div class="wrapper">
                    <div class="social">
                        <a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/icon6.png' ?>" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/icon7.png' ?>" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/icon8.png' ?>" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/icon9.png' ?>" alt="Some alt text" width="25"/></a>
                        <a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/icon10.png' ?>" alt="Some alt text" width="25"/></a>
                    </div>
                    &copy; Copyright 2014 by <a href="http://www.example.com">Example</a>. All Rights Reserved.
                </div>
            </section>
            <section class="wrapper">
            	<h3 class="hidden">Footer content</h3>
                <article class="column">
                    <h4>Lorem ipsum</h4>
                    Unterwegs traf es eine Copy. Die Copy warnte das Blindtextchen, da, wo sie herkäme wäre sie zigmal umgeschrieben worden und alles, was von ihrem Ursprung noch übrig wäre, sei das Wort "und" und das Blindtextchen solle umkehren und wieder in sein.
                </article>
                <article class="column midlist">
                    <h4>Consectetuer</h4>
                    <ul>
                        <li><a href="javascript:void(0)">Die Copy warnte das Blindtextchen</a></li>
                        <li><a href="javascript:void(0)">Unterwegs traf es eine Copy</a></li>
                        <li><a href="javascript:void(0)">Doch alles Gutzureden konnte</a></li>
                        <li><a href="javascript:void(0)">Als es die ersten Hügel</a></li>
                    </ul>
                </article>
                <article class="column rightlist">
                    <h4>Dolor sit amet</h4>
                    <ul>
                        <li><a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/example-slide-1sml.jpg' ?>" width="80" alt="Some alt text"/><span>Unterwegs traf es eine Copy. Die Copy warnte.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/example-slide-2sml.jpg' ?>" width="80" alt="Some alt text"/><span>Doch alles Gutzureden konnte es nicht.</span></a></li>
                        <li><a href="javascript:void(0)"><img src="<?php echo base_url().'assets/img/example-slide-3sml.jpg' ?>" width="80" alt="Some alt text"/><span>Und es dann in ihre Agentur schleppten.</span></a></li>
                    </ul>
                    <br class="clear"/>
                </article>
            </section>
        </footer>
	</body>
</html>
