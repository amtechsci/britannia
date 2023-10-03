<?php include 'head.php';?>

<div id="fullpage">
    <div class="section" id="section0">
        <div class="row mp-0" style="background: #d2d2d2;">
            <div class="col-12 mp-0 a-center d-flex">
                <div class="video-container" style="width:100%;height: 100vh;">
                    <video style="width:100%;" id="myVideo" poster="img/pos2.png">
                        <source src="video/z1.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <button class="play-pause-button" id="playPauseButton">▶</button>

                    <div class="controls" id="controls">
                        <input type="range" id="progressBar" value="0" step="0.1">
                        <!--<input type="range" id="volumeControl" value="1" min="0" max="1" step="0.01">-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section1">
        <div class="">
            <div id="wrapper">
                <div id="stage">
                    <div class="block" id="box1">
                        <div class="caption a-middle a-center">
                            <div class="mp-0 text-center">
                                <h1 class="a-font-2">Hunger has no boundaries</h1>
                                <h3 class="a-font-2">Let's break it together.</h3>
                                <h5 style="font-weight: 500;"><span
                                        style="background: #208d47;">#Britannia_nutrition_foundation</span></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-5">
                <div class="row m-2">
                    <div class="col-6 mp-0 a-center d-flex flex-column">
                        <h3 style="color:#099440;font-weight: 900;">VISION</h3>
                        <b style="/* color:#099440; */font-weight: 500;">A malnutrition free community.</b>
                        <h3 style="color:#099440;font-weight: 900;margin-top: 45px;">MiSSION</h3>
                        <p>Contribute to every child's right to Nutrition and growth by implementing sustainable,
                            replicable
                            programs, pursuing product innovation and research, addressing core and allied causes for
                            malnutrition
                            and assuming responsibility for the nourishment and vitality of the community.</p>
                    </div>
                    <div class="col-6 p-0 a-middle a-center" style="flex-direction: column;">
                        <img src="img/VIMI.webp" style="width:95%!important; border-radius:10px;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section2">
        <div style="background: #f2f2f2;">
            <div class="p-5">
                <div class="row">
                    <div class="col-12 p-0 a-middle a-center mb-5" style="flex-direction: column;">
                        <h1 style="color:#099440;font-weight: 900;" class="text-center">OUR IMPACT STORIES</h1>
                    </div>
                    <!-- Card 1 -->
                    <div class="col-md-4">
                        <div class="pantheoncard hover-card">
                            <img src="img/23.webp" class="img-fluid">
                            <div class="card-overlay">
                                <h4>Kartik Adivasi, A Child recovered from malnutrition</h4>
                                <p>
                                    <?=trim_paragraph("Acute malnutrition among Sahariyas, a particularly vulnerable tribal group, is very high due to crushing poverty, lack of diet, breastfeeding, premature pregnancies & seasonal migration.");?>
                                </p>
                                <a href="#" class="pantheonlink">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="col-md-4">
                        <div class="pantheoncard hover-card">
                            <img src="img/26.webp" class="img-fluid">
                            <div class="card-overlay">
                                <h4>Durga Adivasi - SAM Child Story</h4>
                                <p>
                                    <?=trim_paragraph("Durga Adivasi is a two and a half year old child who lives in the hamlet hastinapur, Shivpuri which is 3 kms away from village. Durga was a SAM child, When BNF team detected her, the child was in malnourished situations, BNF has made efforts to convince the parents that child needs medical assistance. But child parents believes in black magic and was under an impression that")?>
                                </p>
                                <a href="#" class="pantheonlink">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="col-md-4">
                        <div class="pantheoncard hover-card">
                            <img src="img/24.webp" class="img-fluid">
                            <div class="card-overlay">
                                <h4>Kartik Adivasi, Another Story</h4>
                                <p>
                                    <?=trim_paragraph("Acute malnutrition among Sahariyas, a particularly vulnerable tribal group, is very high due to crushing poverty, lack of diet, breastfeeding, premature pregnancies & seasonal migration.")?>
                                </p>
                                <a href="#" class="pantheonlink">READ MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 p-0 a-middle a-center mt-5" style="flex-direction: column;">
                        <a href="#" class="pantheonlink">VIEW ALL STORIES</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section3">
        <div class="">
            <div class="row m-2">
                <div class="col-12 p-0 a-middle a-center" style="flex-direction: column;">
                    <img id="imgmap">
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section4">
        <div style="background: #f2f2f2;">
            <div class="p-5">
                <div class="row">
                    <div class="col-12 p-0 a-middle a-center mb-5" style="flex-direction: column;">
                        <h1 style="color:#099440;font-weight: 900;" class="text-center">Gallery</h1>
                    </div>
                </div>
                <div class="gallery-row">
                    <!-- Image 1 -->
                    <div class="gallery-item">
                        <img src="img/22-01.webp" class="img-fluid">
                    </div>
                    <!-- Image 2 -->
                    <div class="gallery-item">
                        <img src="img/22-02.webp" class="img-fluid">
                    </div>
                    <!-- Image 3 -->
                    <div class="gallery-item">
                        <img src="img/22-03.webp" class="img-fluid">
                    </div>
                    <!-- Image 4 -->
                    <div class="gallery-item">
                        <img src="img/22-04.webp" class="img-fluid">
                    </div>
                    <!-- Image 5 -->
                    <div class="gallery-item">
                        <img src="img/22-05.webp" class="img-fluid">
                    </div>
                    <!-- Image 6 -->
                    <div class="gallery-item">
                        <img src="img/22-06.webp" class="img-fluid">
                    </div>
                    <!-- Image 7 -->
                    <div class="gallery-item">
                        <img src="img/22-07.webp" class="img-fluid">
                    </div>
                    <!-- Image 8 -->
                    <div class="gallery-item">
                        <img src="img/22-08.webp" class="img-fluid">
                    </div>
                    <!-- Image 9 -->
                    <div class="gallery-item">
                        <img src="img/22-09.webp" class="img-fluid">
                    </div>
                    <!-- Image 10 -->
                    <div class="gallery-item">
                        <img src="img/22-10.webp" class="img-fluid">
                    </div>
                    <!-- Image 11 -->
                    <div class="gallery-item">
                        <img src="img/22-11.webp" class="img-fluid">
                    </div>
                    <!-- Image 12 -->
                    <div class="gallery-item">
                        <img src="img/22-12.webp" class="img-fluid">
                    </div>
                    <!-- Image 13 -->
                    <div class="gallery-item">
                        <img src="img/22-13.webp" class="img-fluid">
                    </div>
                    <!-- Image 14 -->
                    <div class="gallery-item">
                        <img src="img/22-14.webp" class="img-fluid">
                    </div>
                    <!-- Image 15 -->
                    <div class="gallery-item">
                        <img src="img/22-15.webp" class="img-fluid">
                    </div>
                    <!-- Image 16 -->
                    <div class="gallery-item">
                        <img src="img/22-16.webp" class="img-fluid">
                    </div>
                    <!-- Image 17 -->
                    <div class="gallery-item">
                        <img src="img/22-17.webp" class="img-fluid">
                    </div>
                    <!-- Image 18 -->
                    <div class="gallery-item">
                        <img src="img/22-18.webp" class="img-fluid">
                    </div>
                    <!-- Image 19 -->
                    <div class="gallery-item">
                        <img src="img/22-19.webp" class="img-fluid">
                    </div>
                    <!-- Image 20 -->
                    <div class="gallery-item">
                        <img src="img/22-20.webp" class="img-fluid">
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section5">
        <div style="background: #fff;">
            <div class="p-5">
                <div class="row">
                    <div class="col-12 p-0 a-middle a-center mb-5" style="flex-direction: column;">
                        <h1 style="color:#099440;font-weight: 900;" class="text-center">Our Teams</h1>
                    </div>
                </div>
                <div class="row team-row ">
                    <!-- Team Member 1 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/1.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>John Doe</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/2.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Jane Smith</h3>
                                    <p>Lead Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 12 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/3.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/4.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/5.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/6.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/7.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>John Doe</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/8.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Jane Smith</h3>
                                    <p>Lead Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 12 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/9.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/10.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/11.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/12.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/13.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>John Doe</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/14.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Jane Smith</h3>
                                    <p>Lead Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 12 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/15.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/16.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/17.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/18.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/19.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>John Doe</h3>
                                    <p>CEO & Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 2 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/20.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Jane Smith</h3>
                                    <p>Lead Developer</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Team Member 12 -->
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/21.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/22.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/23.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="team-card">
                            <div class="team-card-inner">
                                <div class="team-card-front">
                                    <img src="img/team/24.webp" class="img-fluid">
                                </div>
                                <div class="team-card-back">
                                    <h3>Lucy Purple</h3>
                                    <p>Assistant</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section" id="section6">
        <?php include 'foot.php';?>
    </div>
</div>

<div id="fp-nav" class="dots" style="margin-top: -63.5px;">
    <ul>
        <li><a href="#" class="active"></a></li>
        <li><a href="#" class=""></a></li>
        <li><a href="#" class=""></a></li>
        <li><a href="#" class=""></a></li>
        <li><a href="#" class=""></a></li>
        <li><a href="#" class=""></a></li>
    </ul>
</div>






















<?php include 'foot.php';?>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.4/fullpage.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script>
    const video = document.getElementById('myVideo');
    const playPauseButton = document.getElementById('playPauseButton');
    const progressBar = document.getElementById('progressBar');
    const controls = document.getElementById('controls');
    // const volumeControl = document.getElementById('volumeControl');

    playPauseButton.addEventListener('click', function () {
        controls.style.display = "flex";
        if (video.paused) {
            video.play();
            playPauseButton.textContent = "❚❚"; // Pause symbol
        } else {
            video.pause();
            playPauseButton.textContent = "▶"; // Play symbol
        }
    });

    video.addEventListener('timeupdate', function () {
        let percentagePlayed = (video.currentTime / video.duration) * 100;
        progressBar.value = percentagePlayed;

        // Update the background gradient for Webkit browsers
        progressBar.style.background = `linear-gradient(to right, blue ${percentagePlayed}%, grey ${percentagePlayed}%)`;
    });

    progressBar.addEventListener('input', function () {
        video.currentTime = (progressBar.value / 100) * video.duration;
    });

    // volumeControl.addEventListener('input', function () {
    //     video.volume = volumeControl.value;
    // });

    video.addEventListener('ended', function () {
        playPauseButton.textContent = "▶";
    });

    var $carousel = $(".slick-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: false,
        arrows: false,
        vertical: true,
        dots: true
    });

    $("#fullpage").fullpage({
        navigation: true,
        dots: true,
        onLeave: function (origin, destination, direction) {
            if (direction == "down") {
                $carousel.slick("slickNext");
            } else if (direction == "up") {
                $carousel.slick("slickPrev");
            }
        },
        afterLoad: function (origin, destination, direction) {
            // Check if the second section is on the screen (destination.index is 1 for the second section)
            if (destination.index !== 0) {
                // Hide the navigation bar
                $(".a-nav-back").css("background-color", "white");
                $(".a-nav-back").css("transition", "0.4s ");
                $(".socialmedia").addClass("socialmediaActive");
            }
            else {
                // Show the navigation bar for other sections
                $(".a-nav-back").css("background-color", "transparent");
                $(".socialmedia").removeClass("socialmediaActive");
            }
        }
    });



</script>