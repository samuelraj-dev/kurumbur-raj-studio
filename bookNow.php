<?php

$rootDir = 'https://'.$_SERVER['HTTP_HOST'].'/';

?>
<?php include 'global/head.php'; ?> 


<body>     
    <div class="container">
        <?php include 'global/header/header.php'; ?>   

        <div class="body">
            

            <div class="ContactContainer" style="min-height:85vh">
                <div class="AddressHeading" style="margin: 20px;">
                    <h1>Book us Now</h1>
                </div>
                <div>
                    <div class="nav-contact-bar1" style="font-size: 23px;font-weight: bold;margin: 20px;">
                        <div class="nav-contact">
                            <i class="fas fa-mobile-alt" aria-hidden="true"></i> &nbsp; +91-9677032585
                        </div>
                        <div class="nav-contact" style="margin-top:15px">
                            <i class="far fa-envelope" aria-hidden="true"></i> &nbsp; kurumburrajstudio@gmail.com
                        </div>
                    </div>
                </div>

        </div>

        <?php include 'global/footer/footer.php'; ?> 
    </div>     

<script src="./global/global.js"></script>
<script>
  $(document).ready(function(){
    $("#nav-btn-book").addClass("active");
  });
</script>

</body>
</html>