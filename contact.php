<?php

include 'sendmail.php';

?>
<?php include 'global/head.php'; ?> 
<style>
</style>
<body>     
    <?php include 'global/header/header.php'; ?>   
    <?php echo $alert; ?>
    <div class="body">

        <div class="ContactContainer">
            <div class="AddressHeading" style="margin: 20px;">
                <h1>Contact Us</h1>
            </div>
            <div>
                <div class="nav-contact-bar" style="font-size: 18px;font-weight: bold;margin: 20px;">
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
            </div>
            <div class="AddressContent" style="margin: 28px; width: 50%;">
                <div class="footer-adress-container">
                    <div class="footer-adress">
                        <span style="margin-bottom: 7px;font-weight: bold;">Kurumbur</span>
                        <br>
                        <span>9/183, Saravana Complex,</span><br><span>Tiruchendur Road, Kurumbur,<span><br></span>Thoothukudi District - 628207</span>
                    </div>
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3945.0495802082573!2d78.0442786!3d8.591231799999997!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b038c42f127b0b1%3A0x9fa6a887663cd9fc!2sRaj%20Studio!5e0!3m2!1sen!2sin!4v1623227645331!5m2!1sen!2sin" width="300px" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="footer-adress-container">
                    <div class="footer-adress">
                        <span style="margin-bottom: 7px;font-weight: bold;">Chennai</span>
                        <br>
                        <span>T-13 Ashok Manor, 6th Street,</span><br><span>Krishna Nagar,</span><br><span>Tambaram West - 600045</span>
                    </div>     
                    <div class="map-container">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d192.7323578211127!2d80.0968516246913!3d12.918883518465204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a52f58a8ba9e22f%3A0xfcb0d04b5de2d5fe!2s6th%20St%2C%20Tambaram%20West%2C%20Tambaram%2C%20Chennai%2C%20Tamil%20Nadu%20600045!5e1!3m2!1sen!2sin!4v1623227946399!5m2!1sen!2sin" width="300px" height="200px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>               
                </div>
            </div>
        </div>
            
            <!-- <div class="contact-form">
                <h2>Contact Us</h2>
                <form class="contact" action="" method="post">
                    <input type="text" name="name" class="text-box" placeholder="Your Name" required>
                    <input type="email" name="email" class="text-box" placeholder="Your Email" required>
                    <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
                    <input type="submit" name="submit" class="send-btn" value="Send">
                </form>
            </div> -->
        </div>
    </div>

    <?php include 'global/footer/footer.php'; ?>  

<script src="./global/global.js"></script>
<script>
  $(document).ready(function(){
    $("#nav-btn-contact").addClass("active");
  });
  if(window.history.replaceState){
    window.history.replaceState(null, null, window.location.href);
  }
</script>

</body>
</html>