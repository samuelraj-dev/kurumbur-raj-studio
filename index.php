<?php 

include_once 'config.php';

include_once 'global/head.php'; 

?>

<style>



/************************************************* End of Content holder [Body] ***********************************/

/************************************************* Page banner ***********************************/

.page-banner{
    height: 100vh;
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    background: radial-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), radial-gradient(rgba(0, 0, 0, 0) 33%, rgba(0, 0, 0, 0.3) 166%), url('./gallery/img/e.jpg');    
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    position: relative;
}

.banner-title{
    padding-bottom: 56px;
    padding-top: 112px;
    padding-left: 48px;
    padding-right: 48px;
    position: absolute;
    top: calc(-90px);
    height: calc(100% + 90px);
    width: 100%;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.banner-title span{
    letter-spacing: 2px;
    line-height: 2;
    text-align: center;
    font-size: 37.5pt;
    color: #ffffff;
    text-shadow: 0px 0px 10px #151515;
}

/************************************************* End of Page banner ***********************************/

/************************************************* Content ***********************************/


.content-album-slider{
    height: 100%;    
    width: 100%;
    margin-bottom: 0px;
}


.content-album{
    width: 290px;
    margin: 20px 5px;
    box-shadow: 0 2px 4px rgb(0 0 0 / 20%);
    transition: 0.3s all ease-in-out;
    cursor: pointer;
}

.content-album:hover{
    box-shadow: 0px 2px 20px rgb(0 0 0 / 22%), 0px 2px 20px rgb(0 0 0 / 18%);
}

.content-album:hover  .album-poster img{
    transform: scale(1.1);
}

.content-album:hover  .album-poster-video .pt-img{
    transform: scale(1.1);
}

.content:nth-child(even){
    background: #fff;
}

.content:nth-child(even) .album-name{
    background: #fff;
}

.content:nth-child(odd){
    background: #f5f5f5;
}

.content:nth-child(odd) .album-name{
    background: #fff;
}

.slick-next, .slick-prev {
    position: absolute;
    top: 50%;
    left: ;
    display: flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    border-radius: 5px;
    color: #151515;
    transform: translate(0%, -50%);
    cursor: pointer;
    background: #fff;
    transition: 0.2;
    box-shadow: 0 0 4px rgb(0 0 0 / 50%);
    z-index: 1;
}

.slick-next:focus, .slick-next:hover, .slick-prev:focus, .slick-prev:hover {
    color: #000;
    outline: 0;
    background: #eee;
    box-shadow: 0 0px 4px rgb(0 0 0 / 70%);
}

.slick-next:before {
    content: '';
}

.slick-prev:before {
    content: '';
}

.slick-dots{
    display: none;
}

.slick-track{

}

.fa-chevron-right, .fa-chevron-left{
    color: #151515;
    font-size: 20px;
}

.album-poster, .album-poster-video{
    position: relative;
    height: 190px;
    width: 100%;
    overflow: hidden;
}


.album-poster-video .pl-btn-img{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 40% !important;
    width: auto !important;
    z-index: 3;
}
.album-poster-video .pl-btn-img:hover{
    transform: translate(-50%, -50%) !important;
}
.pl-btn-img:hover + .pt-img{
    transform: scale(1.1);
}

.album-poster img, .album-poster-video img {
    height: 100%;
    width: 100%;
    object-fit: cover;
    object-position: center;
    transition: 0.5s all ease-in-out;
}

.album-name{
    padding: 10px 8px;
    width: 100%;
    white-space: pre-wrap;
    word-wrap: break-word;
    text-align: center;
    color: rgba(33,33,33,1);
    font-size: 16pt;
}

#slogan{
    background: radial-gradient(rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.5) 100%), radial-gradient(rgba(0, 0, 0, 0) 33%, rgba(0, 0, 0, 0.3) 166%), url('./global/img/homePg/slogan_bg.jpg') !important;
    background-attachment: fixed !important;
    background-position: center !important;
    background-size: cover !important;
    background-repeat: no-repeat !important;
    text-align: center;
    font-size: 30px;
    line-height: 70px;
    flex-direction: column;
    color: #fff;
}

#slogan p:nth-child(1){
    font-size: 50px;
}

#slogan p:nth-child(2){
    font-family: "Cormorant Garamond", Sans-serif;
    font-style: italic;
    font-weight: 300;
    margin-bottom: 30px;
    text-shadow: 0px 0px 10px #151515;
    color: #fff;
}

#slogan p:nth-child(3){
    font-size: 20px;
    font-weight: bold;
}

#slogan-body{
    overflow-x: hidden;
    flex-direction: column !important;
}

/************************************************* End of Content ***********************************/

/************************************************* Footer ***********************************/


/************************************************* End of Footer ***********************************/

/************************************************* Social Media ***********************************/

.fa {
    padding: 7px;
    font-size: 12px;
    height: 10px;
    width: 10px;
    text-decoration: none;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 4px;
    color: rgba(0,0,0,0.6);
  }

  /************************************************* End of Social Media ***********************************/

  @media screen and (max-width: 900px) {

    .body{
        padding-top: 50px;
    }
    .banner-title{
        padding: 90px 20px !important;
    }
    .nav-contact-bar1{
        display: block !important;
    }
    .banner-title span:nth-child(1){
        letter-spacing: 1px;
        line-height: 1.5;   
        font-size: 40px;
    }
    .album-poster, .album-poster-video {
        height: 100px;
    }
    .album-name{
        padding: 5px 8px;
        min-height: 60px;
        background: #f5f5f5;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .content{
        height: auto !important;
    }
    .content-body{
        padding: 1.5rem 20px;
    }
    .content-album-slider .content-album{
        width: calc(50% - 10px);
        padding: 0px !important;
        margin: 5px;
    }
    .nav-book{
        margin: 20px 10px;
    }
    .content-album{
        width: 100%;
    }
    .content-album-slider{
        display: flex;
        align-items: center;
        justify-content: center;
        flex-wrap: wrap;
    }
    #slogan p:nth-child(2){
        line-height: 1.5;
    }
    .album-content-slideshow .album-content-img-container img {
        max-width: calc(100% - 84px);
        height: auto !important;
        max-height: 100%;
    }
    .album-content-slideshow-video .album-content-img-container-video img {
        width: calc(100% - 84px);
        height: auto !important;
        max-height: 100%;
    }
  }

  #recent .content-album:nth-child(1) .play-icon {
      display: flex;
  }

/**************************** preview box ******************* */

#album-content, #album-content-video{
        position: fixed;
        top: 0;
        left: 0;
        z-index: -1;
        opacity: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
        width: 100vw;
        background: rgba(0,0,0,0.9);
    }
    #album-content.show{
        z-index: 3;
        opacity: 1;        
    }
    #album-content-video.show{
        z-index: 3;
        opacity: 1;        
    }
    .album-content-header, .album-content-header-video{
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .album-content-control, .album-content-control-video, .album-content-number, .album-content-number-video, .album-content-name, .album-content-name-video{
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-left: 10px;
    }
    .album-content-control, .album-content-control-video{
        justify-content: flex-end;
    }    
    .album-content-number, .album-content-number-video{
        justify-content: flex-start;
    }
    .album-content-control-unit, .album-content-control-unit-video{
        height: 100%;
        width: 60px;
        padding: 10px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .album-content-body, .album-content-body-video{
        position: relative;
        height: calc(100% - 120px);
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .album-content-slideshow, .album-content-slideshow-video{
        height: 100%;
        width: fit-content;
        display: flex;
        align-items: center;
        justify-content: center;
        position: absolute;
        top: 0;
        transition-duration: 0.2s;
        transition-timing-function: cubic-bezier(0.4, 0, 0.2, 1);
    }    
    .album-content-slideshow .album-content-img-container{
        height: 100%;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }    
    .album-content-slideshow-video .album-content-img-container-video{
        height: 100%;
        width: 100vw;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .album-content-slideshow .album-content-img-container img{
        height: 100%;
    }
    .album-content-slideshow-video .album-content-img-container-video img{
        height: 100%;
    }
    .album-slider-left, .album-slider-left-video{
        position: absolute;
        top: 50%;
        left: 0;
        z-index: 1;
        cursor: pointer;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: #fff;
        font-weight: bold;
        font-size: 18px;
        transition: background-color 0.6s ease;
        border-radius: 0 3px 3px 0;
    }    
    .album-slider-right, .album-slider-right-video{
        position: absolute;
        top: 50%;
        right: 0;
        z-index: 1;
        cursor: pointer;
        width: auto;
        padding: 16px;
        margin-top: -22px;
        color: #fff;
        font-weight: bold;
        font-size: 18px;
        transition: background-color 0.6s ease;
        border-radius: 3px 0 0 3px;
    }
    .album-slider-right:hover, .album-slider-left:hover {
        color: white;
        background-color: rgba(0,0,0,0.95);
    }
    .album-slider-right-video:hover, .album-slider-left-video:hover {
        color: white;
        background-color: rgba(0,0,0,0.95);
    }
    .album-content-footer, .album-content-footer-video{
        height: 60px;
        width: 100%;
    }
/**************************** end of preview box ******************* */

</style>
<body>
    <?php include $_SESSION['rootDir'] . 'global/header/header.php'; ?>
        <div class="body">
            <section class="page-banner">

                <div class="nav-contact-bar1" style="z-index:100; position: absolute;top: 5px;width: 100%;color: white;display: none;">
                    <div class="nav-contact">
                        <i class="fas fa-mobile-alt" aria-hidden="true"></i> &nbsp; +91-9677032585
                    </div>
                    <div class="nav-contact">
                        <i class="far fa-envelope" aria-hidden="true"></i> &nbsp; kurumburrajstudio@gmail.com
                    </div>
                </div>
                
                <div class="banner-title">
                        <span>Capturing The Moments as it Unfolds</span>
                        <span style="font-size: 11pt; margin: 30px;">Wedding | Pre-Wedding | Engagement | Baby Shower | Baby Shoot | Ear Boring | Puberty Shoot | Housewarming | Corporate Events</span>
                        <a href="<?php echo $rootDir; ?>book" style="text-decoration: none; color: inherit;"><div class="nav-book" style="height: 42px !important ;width: 120px;">Book Now</div></a>
                </div>
            </section>
            <section class="content" id="recent">
                <div class="content-heading">
                    <h1>Latest Clicks and Films</h1>
                    <br>
                    <img src="global/img/homePg/line.jpg?v2?v6">
                </div>
                <div class="content-body">
                    <div class="content-album-slider">                    
                        <?php
                        
                            $sql = "SELECT * FROM tbl_album ORDER BY disp_order";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){   
                                    if($row['featured'] == 'Yes'){
                                        if($row['al_type_fk'] == 'YT'){

                        ?>
                            <div class="content-album" style="position: relative;">
                                <div class="album-poster-video">
                                    <videourl style="display: none;"><?php echo $row['video_url'] ?></videourl>
                                    <img src="./global/video/pl-btn.png?v2" class="pl-btn-img">
                                    <img src="<?php echo $row['PosterURL'] ?>" alt="kurumbur raj studio - <?php echo $row['AlbumName']; ?>" class="pt-img">
                                </div>
                                <div class="album-name"><?php echo $row['AlbumName']; ?></div>
                            </div>
                        <?php
                                        }
                                        else{
                        ?>
                            <div class="content-album">
                                <div class="album-poster">
                                    <img src="<?php echo $row['PosterURL'] ?>" alt="kurumbur raj studio - <?php echo $row['AlbumName']; ?>">
                                </div>
                                <div class="album-name"><?php echo $row['AlbumName']; ?></div>
                            </div>
                        <?php 
                                        }
                                    }
                                }
                            }
                        ?>
                    </div>
                    <a href="./gallery" style="text-decoration: none; color: inherit;"><div class="nav-book" style="height: 42px !important ;width: 120px;">View More</div></a>
                </div>
            </section>
            <section class="content" id="service">
                <div class="content-heading">
                    <h1>Our Services</h1>
                    <br>
                    <img src="global/img/homePg/line.jpg?v2?v6">
                </div>
                <div class="content-body">
                    <div class="content-album-slider">
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_we.jpg?v1" alt="kurumbur raj studio - Wedding">
                            </div>
                            <div class="album-name">Wedding</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_pw.jpg" alt="kurumbur raj studio - Pre-Wedding">
                            </div>
                            <div class="album-name">Pre-Wedding</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_eg.jpg" alt="kurumbur raj studio - Engagement">
                            </div>
                            <div class="album-name">Engagement</div>
                        </div>
                        
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_ms.jpg?v2" alt="kurumbur raj studio - Baby Shower">
                            </div>
                            <div class="album-name">Baby Shower</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_bs.jpg?v1" alt="kurumbur raj studio - Baby Shooting">
                            </div>
                            <div class="album-name">Baby Shoot</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_eb.jpg" alt="kurumbur raj studio - Baby Shooting">
                            </div>
                            <div class="album-name">Ear Boring</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_pc.jpg?v2" alt="kurumbur raj studio - Puberty Shoot">
                            </div>
                            <div class="album-name">Puberty Shoot</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_hw.jpg?v1" alt="kurumbur raj studio - Baby Shooting">
                            </div>
                            <div class="album-name">Housewarming</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/ser_ce.jpg" alt="kurumbur raj studio - Corporate Events">
                            </div>
                            <div class="album-name">Corporate Events</div>
                        </div>
                        
                    </div>
                    <a href="./services" style="text-decoration: none; color: inherit; display: none;"><div class="nav-book" style="height: 42px !important ;width: 120px;">View More</div></a>
                </div>
            </section>
            <section class="content" id="technology">
                <div class="content-heading">
                    <h1>World Class Technology</h1>
                    <br>
                    <img src="global/img/homePg/line.jpg?v2?v6">
                </div>
                <div class="content-body">
                    <div class="content-album-slider">
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/tech_4k.jpg" alt="kurumbur raj studio - 4K Technology">
                            </div>
                            <div class="album-name">4K Full HD</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/tech_candid.jpg?v1" alt="kurumbur raj studio - Candid Photography">
                            </div>
                            <div class="album-name">Candid Shooting</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/tech_drone.jpg?v1" alt="kurumbur raj studio - Drone Videography">
                            </div>
                            <div class="album-name">Drone</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/tech_yt.jpg?v1" alt="kurumbur raj studio - Youtube live stream">
                            </div>
                            <div class="album-name">Youtube Live Streaming</div>
                        </div>
                        <div class="content-album">
                            <div class="album-poster">
                                <img src="global/img/homePg/tech_led.jpg?v2" alt="kurumbur raj studio - High quality LED display">
                            </div>
                            <div class="album-name">LED Display</div>
                        </div>
                    </div>
                    <a href="./technology" style="text-decoration: none; color: inherit; display: none;"><div class="nav-book" style="height: 42px !important ;width: 120px;">View More</div></a>
                </div>
            </section>
            <section class="content" id="slogan">
                <div class="content-body" id="slogan-body">
                    <p><i class="fas fa-quote-left" aria-hidden="true"></i></p>
                    <p>Because we think that each couple is unique, no two weddings are ever the same. We've worked on destination weddings with hundreds of clients from all over the world to personalize their love tales because you deserve to stand out! Let us be inspired by your narrative and help you envision it. A fantastic photo, in our opinion, does not happen by itself because there is a lot more to it than just looking good.</p>
                    <p>Kurumbur Raj Studio</p>
                </div>
            </section>            
            <!-- <section class="content">
                <div class="content-heading">
                    <h1>Our Candid Photography & Videography</h1>
                    <br>
                    <img src="global/img/homePg/line.jpg?v2?v6">
                </div>
                <div class="content-body">
                    <div class="content-body-img">
                        <img src="global/img/homePg/t1.jpg?v2" alt="Kurumbur raj studio- Chennai and Kurumbur. Photography studio in kurumbur and chennai. Candid photography and Videography.">
                    </div>
                    <div class="content-body-text">
                        <p>                            
                            For our lovely couples on their most special night of their life we are capturing natural candid shots. We consider that each photograph has its own narrative to tell, and that the whole of these stories brings out the beauty of the day and the couple. You might not want to burn a hole in your pocket with the photographers with so much going on with your wedding. As a result, we at Raj Studios make absolutely sure you don't have to! We ensure that you get high-quality photos at a minimal cost by following your financial guidelines and working efficiently. We can provide you with both traditional and candid photographic packages, depending on your needs.
                        </p>
                    </div>
                </div>
            </section>         -->
        </div>

<?php include $_SESSION['rootDir'] . 'global/footer/footer.php'; ?>

<!-- for photos -->
        <div id="album-content" style="color: #fff;">
            <div class="album-content-header">
                <div class="album-content-number">
                    <p class="current-img"></p>/<p class="total-img"></p>
                </div>
                <div class="album-content-name"></div>                   
                <div class="album-content-control">
                    <div class="album-content-control-unit" id="closeAlbum">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
            <div class="album-content-body">
                <div class="album-slider-left">❮</div>
                <div class="album-content-slideshow" id="album-content-slideshow">
                    <div class="album-content-img-container">
                        <img src="">
                    </div>    
                </div>
                <div class="album-slider-right">❯</div>
            </div>
            <div class="album-content-footer"></div>
        </div>

<!-- for videos -->
        <div id="album-content-video" style="color: #fff;">
            <div class="album-content-header-video">
                <div class="album-content-number-video">
                    <p class="current-img-video"></p>/<p class="total-img-video"></p>
                </div>
                <div class="album-content-name-video"></div>                   
                <div class="album-content-control-video">
                    <div class="album-content-control-unit-video" id="closeAlbum-video">
                        <i class="fas fa-times"></i>
                    </div>
                </div>
            </div>
            <div class="album-content-body-video">
                <div class="album-slider-left-video">❮</div>
                <div class="album-content-slideshow-video" id="album-content-slideshow-video">
                    <div class="album-content-img-container-video">
                        <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>    
                </div>
                <div class="album-slider-right-video">❯</div>
            </div>
            <div class="album-content-footer-video"></div>
        </div>


<script src="./global/global.js?v8"></script>
<script>
  $(document).ready(function(){
    $("#nav-btn-home").addClass("active");
    // $("#recent .slick-track").addClass("slick-track-1");
    // $("#service .slick-track").addClass("slick-track-2");
    // $("#technology .slick-track").addClass("slick-track-3");
    // // $("#recent .popup-yt").removeClass("slick-track-1");

    // $(".slick-track-1").magnificPopup({
    //     type : 'image',
    //     delegate : '.popup-img',
    //     gallery : {
    //         enabled : true
    //     }
    // });
    // $(".slick-track-2").magnificPopup({
    //     type : 'image',
    //     delegate : 'a',
    //     gallery : {
    //         enabled : true
    //     }
    // });
    // $(".slick-track-3").magnificPopup({
    //     type : 'image',
    //     delegate : 'a',
    //     gallery : {
    //         enabled : true
    //     }
    // });

    
  });

const gallery  = document.querySelectorAll(".album-poster"),
previewBox = document.querySelector("#album-content"),
previewImg = previewBox.querySelector("img"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
closeIcon = previewBox.querySelector("#closeAlbum"),
VDgallery  = document.querySelectorAll(".album-poster-video"),
VDpreviewBox = document.querySelector("#album-content-video"),
VDpreviewImg = previewBox.querySelector("img-video"),
VDcurrentImg = previewBox.querySelector(".current-img-video"),
VDtotalImg = previewBox.querySelector(".total-img-video"),
VDcloseIcon = previewBox.querySelector("#closeAlbum-video");

window.onload = ()=> {
    for (let i = 0; i < gallery.length; i++) {
        totalImg.textContent = gallery.length;
        let newIndex = i;
        let clickImgIndex;
        gallery[i].onclick = () => {
            clickImgIndex = newIndex;
            console.log(i);
            function preview(){
                let selectedImgURL = gallery[newIndex].querySelector("img").src;
                console.log(selectedImgURL);
                currentImg.textContent = newIndex + 1;
                previewImg.src = selectedImgURL;
            }

            const prevBtn = document.querySelector(".album-slider-left");
            const nextBtn = document.querySelector(".album-slider-right");

            if (newIndex == 0){
                prevBtn.style.display = 'none';
            }
            if (newIndex >= gallery.length - 1){
                nextBtn.style.display = 'none';
            }

            prevBtn.onclick = () => {
                newIndex--;
                console.log(newIndex);
                if (newIndex == 0){
                    preview();
                    prevBtn.style.display = 'none';
                }
                else{
                    preview();
                    nextBtn.style.display = 'block';
                }
            }
            nextBtn.onclick = () => {
                newIndex++;
                console.log(newIndex);
                if (newIndex >= gallery.length - 1){
                    preview();
                    nextBtn.style.display = 'none';
                }
                else{
                    preview();
                    prevBtn.style.display = 'block';
                }
            }

            preview();
            previewBox.classList.add("show");
            document.querySelector("body").style.overflowY = 'hidden'; 

            closeAlbum.onclick = () => {
                clickImgIndex = newIndex;
                document.querySelector("body").style.overflowY = 'scroll';
                previewBox.classList.remove("show");
                prevBtn.style.display = 'block';
                nextBtn.style.display = 'block';
                previewImg.src = '';
            }
        }        
    } 






for (let j = 0; j < VDgallery.length; j++) {
        VDtotalImg.textContent = VDgallery.length;
        let VDnewIndex = j;
        let VDclickImgIndex;
        VDgallery[j].onclick = () => {
            VDclickImgIndex = VDnewIndex;
            console.log(20);
            function preview2(){
                VDcurrentImg.textContent = VDnewIndex + 1;
                let VDselectedImgURL = VDgallery[VDnewIndex].querySelector("videourl").innerHTML;
                VDpreviewImg.src = 'https://www.youtube.com/embed/' + VDselectedImgURL;
            }

            const VDprevBtn = document.querySelector(".album-slider-left-video");
            const VDnextBtn = document.querySelector(".album-slider-right-video");

            if (VDnewIndex == 0){
                VDprevBtn.style.display = 'none';
            }
            if (VDnewIndex >= VDgallery.length - 1){
                VDnextBtn.style.display = 'none';
            }

            VDprevBtn.onclick = () => {
                VDnewIndex--;
                console.log(VDnewIndex);
                if (VDnewIndex == 0){
                    preview2();
                    VDprevBtn.style.display = 'none';
                }
                else{
                    preview2();
                    VDnextBtn.style.display = 'block';
                }
            }
            VDnextBtn.onclick = () => {
                VDnewIndex++;
                console.log(VDnewIndex);
                if (VDnewIndex >= VDgallery.length - 1){
                    preview2();
                    VDnextBtn.style.display = 'none';
                }
                else{
                    preview2();
                    VDprevBtn.style.display = 'block';
                }
            }

            preview2();
            VDpreviewBox.classList.add("show");
            document.querySelector("body").style.overflowY = 'hidden'; 

            closeAlbum.onclick = () => {
                VDclickImgIndex = VDnewIndex;
                document.querySelector("body").style.overflowY = 'scroll';
                VDpreviewBox.classList.remove("show");
                VDprevBtn.style.display = 'block';
                VDnextBtn.style.display = 'block';
                VDpreviewImg.src = '';
            }
        }        
    } 
}

</script>

</body>
</html>