<?php

include_once 'config.php';

$rootDir = 'https://'.$_SERVER['HTTP_HOST'].'/';

?>
<?php include 'global/head.php'; ?> 
<style>    

.album-gallery{
        background: #fff;
        height: fit-content;
        width: calc(100vw - 200px);
        border-radius: 5px;
        box-shadow: 0 0 10px rgb(0 0 0 / 20%);
        transform: translateY(-70px);
        display: flex;
        flex-direction: row;
        align-items: flex-start;
        justify-content: center;
        flex-wrap: wrap;
        padding: 5px;
    }
    .photo-container{
        width: calc(100% / 3);
        padding: 5px;
        height: 215px;
    }
    .album-poster{
        width: 100%;
        height: 100%;
        box-shadow: 0 0px 5px rgb(0 0 0 / 30%);
        transition: 0.5s all ease-in-out;
        cursor: pointer;
        overflow: hidden;
        position: relative;
    }
    .album-poster .pt-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        object-position: center;
        transition: 0.5s all ease-in-out;
    }
    .album-poster .pt-img:hover {
        transform: scale(1.1);
    }
    .album-poster .pl-btn-img{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 40%;
        width: auto;
        z-index: 3;
    }
    .pl-btn-img:hover + .pt-img{
        transform: scale(1.1);
    }
    #album-content{
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
    .album-content-header{
        height: 60px;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .album-content-control, .album-content-number, .album-content-name{
        height: 100%;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        padding-left: 10px;
    }
    .album-content-control{
        justify-content: flex-end;
    }    
    .album-content-number{
        justify-content: flex-start;
    }
    .album-content-control-unit{
        height: 100%;
        width: 60px;
        padding: 10px;
        color: #fff;
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
    }
    .album-content-body{
        position: relative;
        height: calc(100% - 120px);
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: flex-start;
    }
    .album-content-slideshow{
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
    .album-content-slideshow .album-content-img-container video{
        height: 100%;
    }
    .album-slider-left{
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
    .album-slider-right{
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
    .album-content-footer{
        height: 60px;
        width: 100%;
    }
    .content{
        min-height: auto;
    }

    @media screen and (max-width: 1100px) {
        .album-gallery{
            width: 100%;
            border-radius: 0px;
        }
        .photo-container{
            width: calc(100% / 2);
            height: 265px;
        }
        .album-content-img-container video{
            width: calc(100% - 84px);
            height: auto !important;
            max-height: 100%;
        }
    }
    @media screen and (max-width: 650px) {
        .photo-container{
            width: calc(100%);
            height: 230px;
        }
        .page-head{
            justify-content: center;            
        }
        .page-head h1{
            margin-left: 0 !important;
        }
    }

    /* ********************** Youtube ******************** */
    
    .ytp-title, .ytp-chrome-top-buttons, .ytp-impression-link{
        display: none !important;
        opacity: 0 !important;
    }
    .ytp-chrome-top, .ytp-show-cards-title{
        display: none !important;
        opacity: 0 !important;        
    }

</style>

<body>     
    <?php include 'global/header/header.php'; ?>   

    <div class="body">
      <div class="page-head">
          <h1>Video Gallery</h1>
      </div>
      <section class="content">
            <div class="album-gallery">
                <?php
                    $sql = "SELECT * FROM tbl_album WHERE al_type_fk = 'YT' ORDER BY disp_order";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)){                             
                ?>

                <div class="photo-container" >
                    <div class="album-poster">
                        <img src="./global/video/pl-btn.png?v2" class="pl-btn-img">
                        <img src="<?php echo $row['PosterURL'] ?>" class="pt-img">
                    </div>
                    <videourl style="display: none;"><?php echo $row['video_url'] ?></videourl>
                </div>

                <?php
                        }
                    }
                ?>
            </div>
      </section>   

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
                        <iframe width="560" height="315" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>    
                </div>
                <div class="album-slider-right">❯</div>
            </div>
            <div class="album-content-footer"></div>
        </div>

    </div>

    <?php include 'global/footer/footer.php'; ?> 

<script src="./global/global.js"></script>
<script>

$(document).ready(function(){
$("#nav-btn-video").addClass("active");
});

// function openModal(elem) {
//     document.getElementById("album-content").style.display = 'flex';
// }

// const close_btn = document.querySelector("#closeAlbum");
// const modal = document.querySelector("#album-content");

// close_btn.addEventListener("click", () => {
//     modal.style.display = 'none';
// });


//getting all required elements
const gallery  = document.querySelectorAll(".photo-container"),
previewBox = document.querySelector("#album-content"),
previewImg = previewBox.querySelector("iframe"),
currentImg = previewBox.querySelector(".current-img"),
totalImg = previewBox.querySelector(".total-img"),
closeIcon = previewBox.querySelector("#closeAlbum");

window.onload = ()=> {
    for (let i = 0; i < gallery.length; i++) {
        totalImg.textContent = gallery.length;
        let newIndex = i;
        let clickImgIndex;
        gallery[i].onclick = () => {
            clickImgIndex = newIndex;
            console.log(i);
            function preview(){
                currentImg.textContent = newIndex + 1;
                let selectedImgURL = gallery[newIndex].querySelector("videourl").innerHTML;
                previewImg.src = 'https://www.youtube.com/embed/' + selectedImgURL;
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
}

</script>

</body>
</html>