<?php
    require('./config.php');
?>

    <!DOCTYPE html>
    <html lang="">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FEU Alabang - Web App Project</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.css" />
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css?ver=1.0">
    </head>

    <body class="wow fadeIn" data-wow-delay='.5s'>
        <header style="
    background-image:url('./images/banner.jpg');">
            <!-- Banner -->
            <div class="banner">
                <div class="logo centered"><img src="./images/logo.png"></div>
            </div>
            <!-- Menu -->
            <div>
                <nav class="highlightGreen">
                    <ul>
                        <li>
                            <a data-scroll="" data-options="{ &quot;easing&quot;: &quot;easeInOutQuart&quot; }" href="#home">Home</a>
                        </li>
                        <li>
                            <a data-scroll="" data-options="{ &quot;easing&quot;: &quot;easeInOutQuart&quot; }" href="#about">About Us</a>
                        </li>
                        <li>
                            <a data-scroll="" data-options="{ &quot;easing&quot;: &quot;easeInOutQuart&quot; }" href="#academics">Academics</a>
                        </li>
                        <li>
                            <a data-scroll="" data-options="{ &quot;easing&quot;: &quot;easeInOutQuart&quot; }" href="#tour">University Tour</a>
                        </li>
                        <li>
                            <a data-scroll="" data-options="{ &quot;easing&quot;: &quot;easeInOutQuart&quot; }" href="#contact">Contact Us</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- HOME -->
        <div id="home"></div>
        <!-- Slider -->
        <div class="slider hero">
            <?php
            require('./slider.php');
        ?>
        </div>

        <!-- ABOUT -->
        <div id="about" class="limitWidth centered">

            <?php 
        $mysqli = connect();
        $query = $mysqli->query("SELECT * FROM pages WHERE id=1");
        while($result = $query->fetch_assoc()):
    ?>
            <!-- Heading -->
            <div class="highlightYellow fixH wow fadeInUp" data-wow-delay='.2s'>
                <h2><span class="green"><?= $result['title'] ?></span></h2>
            </div>

            <div class="flex column wow fadeInLeftBig" data-wow-delay='.75s'>
                <!-- Logo -->
                <div class="left">
                    <img src="./<?= $result['image'] ?>" alt="FEU Logo">
                </div>
                <!-- Text -->
                <div class="right">
                    <?= $result['content'] ?>
                </div>
            </div>
        </div>
        <?php endwhile; ?>



        <?php 
        
        $mysqli = connect();
        
        $query = $mysqli->query("SELECT * FROM pages WHERE id=2");
        while($result = $query->fetch_assoc()):
    ?>
        <!-- ACADEMICS -->
        <div id="academics" class="limitWidth centered">
            <!-- Heading -->
            <div class="heading highlightYellow fixH  wow fadeInUp" data-wow-delay='.5s'>
                <h2><span class="green"><?= $result['title'] ?></span></h2>
            </div>


            <!-- Flex Icons: Pop up -->
            <div class="acadWidth  wow fadeInUp" data-wow-delay='.5s'>
                <?php 
                $mysqli2 = connect();
                $dataName = 0;
                $query2 = $mysqli2->query("SELECT * FROM academics WHERE active = 1");
                while($result2 = $query2->fetch_assoc()):
                $dataName += 1;        
                ?>
                <!-- icon 1 -->
                <a data-fancybox data-src="#<?php echo $dataName; ?>" href="javascript:;">
                    <div class="box"><img src="./<?= $result2['image'] ?>" alt="<?= $result2['title'] ?>"></div>
                </a>

                <div style="display: none;" id="<?php echo $dataName; ?>">
                    <h2>
                        <?= $result2['title'] ?>
                    </h2>
                    <p>
                        <?= $result2['content'] ?>
                    </p>
                </div>
                <?php 
                endwhile;
                ?>
            </div>

            <!-- Description: Centered -->
            <div>
                <h4>
                    <?= $result['content'] ?>
                </h4>
            </div>
        </div>
        <?php endwhile; ?>


        <?php 
        
        $mysqli = connect();
        
        $query = $mysqli->query("SELECT * FROM pages WHERE id=3");
        while($result = $query->fetch_assoc()):
    ?>
        <!-- AVP Tour -->
        <div id="tour" class="centered">
            <div class="paddedGreen  wow fadeInUp" data-wow-delay='.5s'>
                <!-- Heading -->
                <div class="limitWidth centered heading">
                    <h2><span class="green"></span> <span class="yellow"><?= $result['title'] ?></span></h2>
                </div>


                <!-- Video Hold Styled Div -->
                <div class="holdVideo">
                    <!-- Embed Video -->
                    <?php 
                        $mysqli2 = connect();
                        $query2 = $mysqli2->query("SELECT * FROM university WHERE id=1");
                        while($result2 = $query2->fetch_assoc()):
                    ?>
                    <div class="centered placeholderVideo">
                        <?= $result2['text'] ?>
                    </div>
                    <?php endwhile; ?>
                </div>

                <!-- Description: Centered -->
                <div>
                    <h4>
                        <?= $result['content'] ?>
                    </h4>
                </div>
            </div>
        </div>
        <?php endwhile; ?>


        <?php 
        
        $mysqli = connect();
        
        $query = $mysqli->query("SELECT * FROM pages WHERE id=4");
        while($result = $query->fetch_assoc()):
    ?>
        <!-- Contact Us -->
        <div id="contact" class="limitWidth centered wow fadeInUp" data-wow-delay='.5s'>

            <!-- Heading -->
            <div class="highlightYellow fixH">
                <h2><span class="green"><?= $result['title'] ?></span></h2>
            </div>

            <!-- Flex -->
            <div class="flex column">
                <!-- Description: Left Green -->
                <div class="left">
                    <h4 class="description">
                        <?= $result['content'] ?>
                    </h4>
                    <!-- Form -->
                    <div style="width:80%; padding-left:5%;">
                        <style>
                            input {
                                width: 100%;
                                background-color: #fff;
                                border-color: #a7a5a6;
                                border-width: 2px;
                                color: #817f80;
                                font-family: Roboto;
                                font-size: 16px;
                                font-weight: 400;
                                text-align: center;
                                border-radius: 6px;
                                outline-style: none;
                                padding: 8px 0;
                            }
                            
                            form div {
                                max-width: 600px;
                                margin: 25px 0;
                            }
                            
                            textarea {
                                width: 100%;
                                padding: 65px 0;
                                resize: none;
                                background-color: #fff;
                                border-color: #a7a5a6;
                                border-width: 2px;
                                color: #817f80;
                                font-family: Roboto;
                                font-size: 16px;
                                font-weight: 400;
                                text-align: center;
                                border-radius: 6px;
                                outline-style: none;
                            }
                            
                            input[type="submit"] {
                                background-color: #005826;
                                width: 100%;
                                border-width: 0;
                                color: #fff;
                                font-size: 16px;
                                padding: 8px;
                                border-radius: 6px;
                            }

                        </style>
                        <form method="post">
                            <div>
                                <input type="text" id="name" name="name" placeholder="Name">
                            </div>
                            <div>
                                <input type="email" id="email" name="email" placeholder="Email">
                            </div>
                            <div>
                                <input type="text" id="subject" name="subject" placeholder="Subject">
                            </div>
                            <div>
                                <textarea placeholder="Message" id="message" name="message"></textarea>
                            </div>

                            <div>
                                <input type="submit" id="submit" name="submit" value="Send">
                            </div>
                        </form>

                        <div class="error"><span><?php if(!empty($errorMSG)) echo $errorMSG; ?></span></div>

                        <?php 
                            sendMail();
                        ?>

                    </div>
                </div>
                <!-- Maps: Right -->
                <div class="right">
                    <!-- Embed Map -->
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15443.663908266853!2d120.9864347!3d14.6038621!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x6cbb38e9611d76fa!2sFar+Eastern+University+-+Manila!5e0!3m2!1sen!2sph!4v1497002024180" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <!-- Share Icons -->
                    <div>
                        <?php 
                            $mysqli2 = connect();
                            $query2 = $mysqli2->query("SELECT * FROM share");
                            while($result2 = $query2->fetch_assoc()):
                        ?>
                        <div class="centered icon">
                            <a href="http://<?= $result2['redirect'] ?>"><img src="<?= $result2['image'] ?>" alt="<?= $result2['title'] ?>"></a>
                        </div>
                        <?php endwhile; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile; ?>

        <script src="./template/vendor/jquery/jquery.min.js"></script>
        <script src="./scripts/jquery.fancybox.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js?ver=1.0.0"></script>
        <script src="./scripts/smooth-scroll.min.js"></script>
        <script>
            smoothScroll.init();

            jQuery(window).scroll(function() {
                var navBar = $(".banner");
                if (jQuery(this).scrollTop() > 135) {
                    navBar.addClass("scrolled");
                } else {
                    navBar.removeClass("scrolled");
                }
            });
            
            new WOW().init();

        </script>
    </body>

    </html>
