<?php

$rootDir = 'https://'.$_SERVER['HTTP_HOST'].'/';

?>
<?php include 'global/head.php'; ?> 
<style>

body {
    font-family: Arial, Helvetica, sans-serif;
    margin: 0;
  }
  
  html {
    box-sizing: border-box;
  }
  
  *, *:before, *:after {
    box-sizing: inherit;
  }
  
  .column {
    float: left;
    width: 33.3%;
    margin-bottom: 16px;
    padding: 0 8px;
  }
  
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    margin: 8px;
  }
  
  .about-section {
    padding: 50px;
    text-align: center;
    background-color: #474e5d;
    color: white;
  }
  
  .container {
    padding: 0 16px;
  }
  
  .container::after, .row::after {
    content: "";
    clear: both;
    display: table;
  }
  
  .title {
    color: grey;
  }
  
  .button {
    border: none;
    outline: 0;
    display: inline-block;
    padding: 8px;
    color: white;
    background-color: #000;
    text-align: center;
    cursor: pointer;
    width: 100%;
  }
  
  .button:hover {
    background-color: #555;
  }
  
  @media screen and (max-width: 650px) {
    .column {
      width: 100%;
      display: block;
    }
  }

</style>

<body>     
    <?php include 'global/header/header.php'; ?>   

    <div class="body">

    <div class="about-section">
  <h1>About Us Page</h1>
  <p></p>
  <p></p>
</div>

<h2 style="text-align:center">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="" alt="Kebiraja" style="width:100%">
      <div class="container">
        <h2>Kebiraja</h2>
        <p class="title">Founder</p>
        <p></p>
        <p></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="" alt="Suthans" style="width:100%">
      <div class="container">
        <h2>Suthans</h2>
        <p class="title">Director</p>
        <p></p>
        <p>suthansm@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="" alt="" style="width:100%">
      <div class="container">
        <h2></h2>
        <p class="title">Designer</p>
        <p></p>
        <p></p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>   
    </div>

    <?php include 'global/footer/footer.php'; ?> 
    
<script src="./global/global.js"></script>
<script>
  $(document).ready(function(){
    $("#nav-btn-about").addClass("active");
  });
</script>

</body>
</html>