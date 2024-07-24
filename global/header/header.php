<?php

$rootDir = 'https://'.$_SERVER['HTTP_HOST'].'/';

?>

<header id="nav-bar" style="top: 0px;">
    <div class="nav-social-bar">
        <div class="nav-contact-bar">
            <div class="nav-contact">
                <i class="fas fa-mobile-alt" aria-hidden="true"></i> &nbsp; +91-9677032585
            </div>
            <div class="nav-contact">
                <i class="far fa-envelope" aria-hidden="true"></i> &nbsp; kurumburrajstudio@gmail.com
            </div>
            <div class="nav-contact">
                <i class="fas fa-map-marker-alt" aria-hidden="true"></i> &nbsp; All over Tamil Nadu
            </div>
        </div>
        <div class="nav-social">
            <a target="_blank" href="https://www.youtube.com/channel/UCejCPlNMH677r5wAy0Ome0w" class="fa fa-youtube" aria-hidden="true"></a>
            <a target="_blank" href="#" class="fa fa-facebook" aria-hidden="true"></a>
            <a target="_blank" href="https://www.instagram.com/kurumburrajstudio/" class="fa fa-instagram" aria-hidden="true"></a>
            <a target="_blank" href="https://twitter.com/kurumburraj/" class="fa fa-twitter" aria-hidden="true"></a>
            <a target="_blank" href="https://www.linkedin.com/in/kurumburrajstudio/" class="fa fa-linkedin" aria-hidden="true"></a>
            <a target="_blank" href="https://in.pinterest.com/kurumburrajstudio/" class="fa fa-pinterest" aria-hidden="true"></a>
            <a target="_blank" href="https://kurumburrajstudio.tumblr.com/" class="fa fa-tumblr" aria-hidden="true"></a>
        </div>
    </div>
    <div class="nav-main">
        <div class="nav-menu-btn-container" style="display: none;">
            <div class="nav-menu-btn">
                <div class="menu-btn-ham-1"></div>
                <div class="menu-btn-ham"></div>
                <div class="menu-btn-ham-3"></div>
            </div>
        </div>
        <div class="nav-logo">
        <a href="<?php echo $rootDir; ?>"><img src="global/img/banner/logo.jpg?v2" alt="kurumbur raj studio - logo"></a>
        </div>
        <div class="nav-link">
            <ul>
                <a href="<?php echo $rootDir; ?>"><li id="nav-btn-home">Home</li></a>
                <a style="display: none !important;" href="<?php echo $rootDir; ?>about"><li id="nav-btn-about">About</li></a>
                <a href="<?php echo $rootDir; ?>gallery"><li id="nav-btn-gallery">Gallery</li></a>
                <a href="<?php echo $rootDir; ?>video"><li id="nav-btn-video">Video</li></a>
                <a href="<?php echo $rootDir; ?>contactus"><li id="nav-btn-contact">Contact Us</li></a>
                <a href="<?php echo $rootDir; ?>book"><li class="nav-book" style="width: 100px !important; height: 60% !important;">Book Now</li></a>                      
            </ul>
        </div>
    </div>
</header>        
<div class="nav-menu">
    <div class="nav-menu-links">
        <div class="nav-closer"></div>
        <a href="<?php echo $rootDir; ?>">Home</a>
        <a href="<?php echo $rootDir; ?>about">About</a>
        <a href="<?php echo $rootDir; ?>gallery">Gallery</a>
        <a href="<?php echo $rootDir; ?>video">Videos</a>
        <a href="<?php echo $rootDir; ?>contactus">Contact Us</a>
        <a href="<?php echo $rootDir; ?>book">Book Now</a>
    </div>
    <div class="nav-menu-close"></div>
</div>