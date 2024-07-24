<?php

include_once 'config.php';

$rootDir = 'https://'.$_SERVER['HTTP_HOST'].'/';

?>
<?php include 'global/head.php'; ?> 
<style>    

.slider-btn-container{
    position: absolute;
    top: 0;
    left: 0;
    width: 50%;
    height: 70px;
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: flex-start;
}

.slider-btn-album, .slider-btn-img{
    height: 70%;
    width: 115px;
    padding: 10px;
    margin: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #eee;
    border-radius: 10px;
    font-size: 20px;
    cursor: pointer;
    transition: 0.2s;
}

.slider-btn-album:hover, .slider-btn-img:hover{
    background: #f5f5f5;
}

.gallery-container{
    height: fit-content;
    width: calc(100vw - 200px);
    border-radius: 5px;
    box-shadow: 0 0 10px rgb(0 0 0 / 20%);
    transform: translateY(-70px);
    background: #fff;
    overflow: hidden;
}

.gallery-slider{
    height: fit-content;
    width: 200%;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    padding-top: 70px;
    position: relative;
}

.image-gallery, .album-gallery{
    height: fit-content;
    width: 100%;
    display: flex;
    flex-direction: row;
    align-items: flex-start;
    justify-content: center;
    flex-wrap: wrap;
    padding: 5px;
    transition: 0.5s;
    transform: translate(0%,0%);
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
}
.album-poster:hover{
    box-shadow: 0px 12.8px 22.8px rgb(0 0 0 / 22%), 0px 2.4px 7.2px rgb(0 0 0 / 18%);
}
.album-poster img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
    transition: 0.5s all ease-in-out;
}
.album-poster img:hover {
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
.album-content-slideshow .album-content-img-container img{
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
    .gallery-container{
        width: 100%;
        border-radius: 0px;
    }
    .photo-container{
        width: calc(100% / 2);
        height: 265px;
    }
    .album-content-img-container img{
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
</style>

<body>     
    <?php include 'global/header/header.php'; ?>   

    <div class="body">
      <div class="page-head">
          <h1>Photo Gallery</h1>
      </div>
      <section class="content">
            <div class="gallery-container">
                <div class="gallery-slider">

                    <!-- Slider Buttons -->

                    <div class="slider-btn-container">
                        <div class="slider-btn-img" onclick=
                            "
                            document.getElementById('image-gallery').style.transform = 'translate(0,0)';
                            document.getElementById('album-gallery').style.transform = 'translate(0,0)';
                            document.getElementById('image-gallery').style.height = 'fit-content';
                            document.getElementById('album-gallery').style.height = '0';
                            "
                        >
                            Images
                        </div>
                        <div class="slider-btn-album" onclick=
                            "
                            document.getElementById('image-gallery').style.transform = 'translate(-100%,0)';
                            document.getElementById('album-gallery').style.transform = 'translate(-100%,0)';
                            document.getElementById('image-gallery').style.height = '0';
                            document.getElementById('album-gallery').style.height = 'fit-content';
                            "
                        >
                            Albums
                        </div>
                    </div>

                    <!-- Image Gallery -->

                    <div class="image-gallery" id="image-gallery">
                        <?php
                            $sql = "SELECT * FROM tbl_album_img ORDER BY disp_order";
                            $result = mysqli_query($conn, $sql);
                            $increment_id = 0;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){                             
                        ?>

                        <div class="photo-container" >
                            <div class="album-poster"><img src="https://uniim1.shutterfly.com/render/<?php echo $row['img_url'] ?>"></div>
                        </div>

                        <?php
                                }
                            }
                        ?>
                    </div>

                    <!-- Album Gallery -->

                    <div class="album-gallery" id="album-gallery" style="height: 0;">
                        <?php
                            $sql = "SELECT * FROM tbl_album ORDER BY disp_order";
                            $result = mysqli_query($conn, $sql);
                            $increment_id = 0;
                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)){                             
                        ?>

                        <div class="photo-container" >
                            <div class="album-poster"><img src="<?php echo $row['PosterURL'] ?>"></div>
                        </div>

                        <?php
                                }
                            }
                        ?>
                    </div>
                </div>
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
                        <img src="">
                    </div>    
                </div>
                <div class="album-slider-right">❯</div>
            </div>
            <div class="album-content-footer"></div>
        </div>

    </div>

    <?php include 'global/footer/footer.php'; ?> 

<script src="./global/global.js"></script>
<script src="./global/gallery.js?v2"></script>
<script>

$(document).ready(function(){
$("#nav-btn-gallery").addClass("active");
});

// For Image Gallery

const gallery  = document.querySelectorAll(".image-gallery .photo-container"),
album_gallery  = document.querySelectorAll(".album-gallery .photo-container"),
previewBox = document.querySelector("#album-content"),
previewImg = previewBox.querySelector("img"),
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
    album_gallery.onclick = () => {
        previewBox.classList.add("show");
    }
}







</script>

</body>
</html>