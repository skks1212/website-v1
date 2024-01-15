<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<html>
    <title>
        Shivank Kacker - Freelance Web Developer 
    </title>
    <?php
        include 'inc/head.php';
        include 'inc/fn/functions.php';
    ?>
    <body>
        <div class="s-progress-bar">
            <div class="s-progress-bar-line">

            </div>
            <div class="s-progress-line">
                <div class="s-progress-point" toPage = "0" onclick="goTo(0)">
                    <i class="fal fa-user"></i>
                </div>
                <div class="s-progress-point" toPage = "1" onclick="goTo(1)">
                    <i class="fal fa-quote-left"></i>
                </div>
                <div class="s-progress-point" toPage = "2" onclick="goTo(2)">
                    <i class="fal fa-brackets-curly"></i>
                </div>
                <div class="s-progress-point" toPage = "3" onclick="goTo(3)">
                    <i class="fal fa-medal"></i>
                </div>
                <div class="s-progress-point" toPage = "4" onclick="goTo(4)">
                    <i class="fal fa-at"></i>
                </div>
            </div>
        </div>
        <div class="s-landing-wrap" ap = "0">
            <div class="s-landing-bg">

            </div>
            <div class="s-landing-txt">
                <div class="float">
                    <div class="s-landing-name">
                        SHIVANK<br>KACKER
                    </div>
                    <br><br>
                    Full Stack Web Developer
                    <br>
                    Vadodara, Gujarat
                </div>
                
            </div>
            <div class="s-landing-face">

            </div>
        </div>
        <div class="s-about-wrap" ap = "1">
            <div class="s-about-side-phone img-move" >

            </div>
            <div class="s-about-side-pc img-move">

            </div>
            <div class="s-about-container float">
                <div class="s-title">
                    About Me
                </div>
                <span class="s-quote">
                    "I strive to maintain the balance between design and functionality by fabricating bold and prepossessive applications with their own unique personalities."
                </span>
                <br>
                <br>
                I am an <?php echo myAge();?> year old freelance web developer situated in Vadodara, Gujarat. I have been practicing web development and programming for <?php echo myAge() - 13;?> years now. I own <a href="https://www.writeroo.in">writeroo.in</a>, a social platform for readers and writers with users from 55+ countries and <a href="https://discord.gg/MFWSFw5">gameroo.in</a>, an esports company with a community of more than 300 gamers.
            </div>
            
        </div>
        <div class="s-code-wrap" ap = "2">
            <div class="s-code-container">
                <div class="s-code-block" title="HTML 5">
                    <i class="fab fa-html5"></i>
                </div>
                <div class="s-code-block " title="CSS 3">
                    <i class="fab fa-css3-alt"></i>
                </div>
                <div class="s-code-block" title="Javascript">
                    <i class="fab fa-js-square"></i>
                </div>
                <div class="s-code-block" title="PHP">
                    <i class="fab fa-php"></i>
                </div>
                <div class="s-code-block" title="MySQL">
                    <img src="med/mysql__.png">
                </div>
                <div class="s-code-block" title="Node.js">
                    <i class="fab fa-node-js"></i>
                </div>
                <div class="s-code-block" title="React.js">
                    <i class="fab fa-react"></i>
                </div>
                <div class="s-code-block" title="Cordova">
                    <img src="med/cordova.png">
                </div>
                <div class="s-code-block" title="Cordova">
                    <i class="fab fa-python"></i>
                </div>
            </div>
            <div class="s-code-write float">
                <div class="s-title">
                    My Skills
                </div>
                <br>
                <br>
                I master in Javascript and PHP. To brew the most lovable and interactive web pages, I combine these with HTML, CSS and MySQL. Alongside these, I also have fair knowledge of Node.js, React Native, jQuery, Cordova and Python.      
            </div>
        </div>
        <div class="s-ach-wrap" ap = "3">
            <div>
                <!--<div class="s-ach-tab-wrap">
                    <div class="s-ach-tab-back">

                    </div>
                    <div class="s-ach-tab-front">

                    </div>
                    <div class="s-ach-tab-main">
                        <div class="s-ach-tab-taskbar">
                            <div class="s-taskbar-time" style="text-align: left;">
                                <i class="fab fa-facebook-square"></i>
                                <i class="fab fa-whatsapp"></i>
                            </div>
                            <div class="s-taskbar-time">
                                11:11 PM
                                
                            </div>
                            <div class="s-taskbar-time" style="text-align: right;">
                                <i class="fab fa-bluetooth-b"></i>
                                <i class="far fa-wifi"></i>
                                &nbsp;
                                <i class="far fa-battery-half"></i>
                                47%
                            </div>
                        </div>
                        <div class="s-ach-tab-app-wrap">
                            <div class="s-ach-tab-app-item">
                                
                            </div>
                        </div>
                    </div>
                </div>-->
                <div class="s-ach-box-wrap-wrap">
                    <div class="s-ach-box-wrap float">
                        <a class="s-ach-box" href="https://www.writeroo.in" bid = "1" style="margin-left: 0px;">
                            <div class="s-ach-box-number">
                                01
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/writerooin.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        Writeroo
                                    </div>
                                    <div class="s-ach-box-desc">
                                        A Social Platform for readers and Writers, with a 1000+ userbase from more than 55 countries.
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" href="https://discord.gg/MFWSFw5" bid = "2">
                            <div class="s-ach-box-number">
                                02
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/gameroo.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        Gameroo
                                    </div>
                                    <div class="s-ach-box-desc">
                                        E-sports company co-founded by me with a community of more than 300 gamers.
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" href="https://nl-ms.com" bid = "2">
                            <div class="s-ach-box-number">
                                03
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/nl-ms.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        nl-ms.com
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Website for Next Level Mentoring Solutions
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" bid = "2">
                            <div class="s-ach-box-number">
                                04
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/haazir.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        Haazir
                                    </div>
                                    <div class="s-ach-box-desc">
                                        A solo project of mine, a tool to record university attendance.
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" href="https://www.thephotos.in" bid = "2">
                            <div class="s-ach-box-number">
                                05
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/thephotos.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        The Photos
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Website for a startup as a freelance project. (incomplete)
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" href="https://www.rise21.in" bid = "2">
                            <div class="s-ach-box-number">
                                06
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/navrise.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        NavRise
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Website for a school event.
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" bid = "2">
                            <div class="s-ach-box-number">
                                07
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/healium.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        Healium App
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Fitness Android App made solely by me in under 48 hours for a national competition. 
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" href="https://play.google.com/store/apps/details?id=in.writeroo.writeroo" bid = "1">
                            <div class="s-ach-box-number">
                                08
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/writerooapp.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        Writeroo App
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Android App for Writeroo, with 1000+ downloads on the Play Store
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" bid = "1">
                            <div class="s-ach-box-number">
                                09
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/shivank.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        This Website
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Yes
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" bid = "1">
                            <div class="s-ach-box-number">
                                10
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/supercharged.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        supercharged
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Freelance Project - Online Forum for Car Enthusiasts
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" href="https://www.pawadopt.in" bid = "1">
                            <div class="s-ach-box-number">
                                11
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/pawadopt.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        Pawadopt
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Freelance Project - Website about shelter adoption
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                        <a class="s-ach-box" href="https://new.writeroo.in" bid = "1">
                            <div class="s-ach-box-number">
                                12
                            </div>
                            <div class="s-ach-box-background">
                                <div class="s-ach-box-background-bg" style="background: url('med/writeroo_new.png');background-size: cover;background-position: center;">
    
                                </div>
                            </div>
                            <div class="s-ach-box-front">
                                <div class="s-ach-box-written">
                                    <div class="s-ach-box-title">
                                        New Writeroo
                                    </div>
                                    <div class="s-ach-box-desc">
                                        Upcoming release candidate for Writeroo
                                    </div>
                                </div>
                                
                            </div>
                        </a>
                    </div>
                </div>
                <div class="s-slide-control">
                    <div class="s-slide-control-button" onclick="slide(-1)">
                        <i class="far fa-chevron-left"></i>
                    </div>
                    <div class="s-slide-control-button" onclick="slide(1)">
                        <i class="far fa-chevron-right"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="s-contact-wrap" ap = "4">
            <div class="s-contact-main" style="text-align: center;">
                <div class="s-title">
                    Lets get in touch
                </div>
                <br>
                Interested to discuss some stuff? Catch me here:
                <br>
                <br>
                <br>
                <a class="s-contact-butts float" href="mailto:shivank@writeroo.in">
                    <i class="far fa-envelope"></i>
                </a>
                <!--<a class="s-contact-butts float" href="https://blog.shivank.cf">
                    <i class="far fa-blog"></i>
                </a>-->
                <a class="s-contact-butts float" href="https://instagram.com/shivankacker">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="s-contact-butts float" href="https://github.com/Skks1212">
                    <i class="fab fa-github"></i>
                </a>
                <a class="s-contact-butts float" href="https://twitter.com/shivankacker">
                    <i class="fab fa-twitter"></i>
                </a>
            </div>
            
        </div>
    </body>
</html>