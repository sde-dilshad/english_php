<?php
require_once('./inc/head.php');
require_once('./inc/menu.php');
require_once('./inc/sidebar.php')
?>
<div id="appCapsule" class="pb-0" style="background: #6d70d78a;">

    <button type="button" id="openLoginPopUp" class="btn d-none btn-secondary" data-toggle="modal" data-target="#DialogBasic">
        Show
    </button>
    <div class="modal fade dialogbox" id="DialogBasic" data-backdrop="static" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background: #a789af;">
                    <h5 class="modal-title text-white pb-2 pt-1">Daily Attendance Bonus</h5>
                </div>
                <div class="modal-body px-2 pt-2 mb-2">
                    <div class="row">
                        <div class="col-3 my-1" style="position: relative;">
                            <img src="./assets/img/icon/coin.jpg" class="img-fluid w-100 rounded" />
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">+2</span>
                        </div>
                        <div class="col-3 my-1" style="position: relative;">
                            <img src="./assets/img/icon/coin.jpg" class="img-fluid w-100 rounded" />
                            <span style="position: absolute;z-index: 1;left: 0;top: 35%;font-size: 10px;line-height: 20px;" class="bg-dark rounded text-white w-100">08h 11m</span>
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">+20</span>
                        </div>
                        <div class="col-3 my-1" style="position: relative;">
                            <img src="./assets/img/icon/coin.jpg" class="img-fluid w-100 rounded" />
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">+4</span>
                        </div>
                        <div class="col-3 my-1" style="position: relative;">
                            <img src="./assets/img/icon/coin.jpg" class="img-fluid w-100 rounded" />
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">+50</span>
                        </div>
                        <div class="col-3 my-1" style="position: relative;">
                            <img src="./assets/img/icon/coin.jpg" class="img-fluid w-100 rounded" />
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">+6</span>
                        </div>
                        <div class="col-3 my-1" style="position: relative;">
                            <img src="./assets/img/icon/coin.jpg" class="img-fluid w-100 rounded" />
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">+100</span>
                        </div>
                        <div class="col-3 my-1" style="position: relative;">
                            <img src="./assets/img/icon/coin.jpg" class="img-fluid w-100 rounded" />
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">+100</span>
                        </div>
                        <div class="col-3 my-1">
                            <img src="test.png" class="img-fluid rounded" />
                            <span style="position: absolute;z-index: 1;right: 11px;bottom: 4px;font-size: 8px;line-height: 14px;" class="px-1 bg-light text-dark rounded">Mega Prize</span>
                        </div>
                    </div>
                    <p class="mb-0 mt-2">Come everyday for 7 days to unlock the mega prize!</p>
                </div>
                <div class="modal-footer" style="background: #d3c7d5;">
                    <div class="btn-inline">
                        <a href="#" class="btn btn-text-light" data-dismiss="modal">Next Bonus in 08h 11m</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .lesson-gradual_1 {
            background: #0281ff !important;
        }

        .lesson-gradual_2 {
            background: #01a48f !important;
        }

        .lesson-gradual_3 {
            background: #f74444 !important;
        }

        .lesson-gradual_4 {
            background: #b0435d !important;
        }

        #banner_div {
            position: fixed;
        }
    </style>

    <div class="container p-5" id="banner_div">
        <div class="row bg-white rounded pb-2 pt-1">

            <div class="col-5 row">
                <div class="col d-flex align-items-end">
                    <ion-icon class="h1 mb-0 text-warning" name="server-outline"></ion-icon>
                </div>
                <div class="col" style="position: relative;left: -20px;">
                    <p class="mb-0" style="position: relative;bottom: -5px;white-space: nowrap;">Coins</p>
                    <p class="mb-0 h3">4000</p>
                </div>
            </div>
            <div class="col-2 row"></div>
            <div class="col-5 row">
                <div class="col d-flex align-items-end">
                    <ion-icon class="h1 mb-0 text-danger" name="stats-chart-outline"></ion-icon>
                </div>
                <div class="col" style="position: relative;left: -20px;">
                    <p class="mb-0" style="position: relative;bottom: 0px;white-space: nowrap;">Block/city Rank</p>
                    <p class="mb-0 h3">100k</p>
                </div>
            </div>
        </div>
    </div>
    <div class="pt-4 container" id="whole_body" style="border-radius: 20px;background: rgb(232 232 232 / 90%);;min-height: 120vh;position: relative;
  z-index: 1;">
        <div class="row d-flex justify-content-around">

        </div>

        <div class="section full">
            <div class="carousel-single owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/img/sample/photo/banner-1.jpg" alt="alt" class="imaged w-100">
                </div>
                <div class="item">
                    <img src="./assets/img/sample/photo/banner-2.jpg" alt="alt" class="imaged w-100">
                </div>
                <div class="item">
                    <img src="./assets/img/sample/photo/banner-3.gif" alt="alt" class="imaged w-100">
                </div>
            </div>
        </div>

        <div class="section mt-2">
            <div class="card">
                <ul class="listview flush transparent image-listview">
                    <li>
                        <a href="practice-game.php" class="item">
                            <div class="icon-box bg-primary">
                                <ion-icon name="game-controller-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
                            </div>
                            <div class="in">
                                <div>Play Game</div>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="section mt-2">
            <div class="row">
                <div class="col-6">
                    <div class="card product-card" style="background-color: #8fca7fab;">
                        <a href="homework.php">
                            <div class="card-body text-center">
                                <img src="./assets/img/app-assets/homework.png" class="image" alt="product image" style="width: 60% !important;">
                                <h2 class="title text-center">HomeWork</h2>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card product-card" style="background-color: #6faea675;">
                        <div class="card-body text-center">
                            <img src="./assets/img/app-assets/travel.png" class="image" alt="product image" style="width: 60% !important;">
                            <h2 class="title">Beetroot</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-3">
            <!-- <h4>Share the app</h4> -->
            <div class="card" style="background: #cba5ef85;">
                <div class="row">

                    <div class="col-8">
                        <div class="card-body">
                            <h5 class="" style="font-size: medium;">Share with friends</h5>
                            <p class="card-text">Help your friends fall in love with learning through share
                            </p>

                        </div>
                    </div>
                    <div class="col-4">
                        <img src="./assets/img/app-assets/share.png" class="card-img-top" alt="image" style="width: 26vw;height: 20vh;">

                    </div>
                </div>
            </div>
        </div>

        <div class="section full mt-3 mb-3">
            <div class="carousel-multiple owl-carousel owl-theme">

                <div class="item">
                    <div class="card">
                        <img src="./assets/img/sample/photo/d1.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Progressive web app ready</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="./assets/img/sample/photo/d2.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Reusable components</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="./assets/img/sample/photo/d3.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Great for phones & tablets</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="./assets/img/sample/photo/d4.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Change the styles in one file</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="./assets/img/sample/photo/d6.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Sketch source file included</h4>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="card">
                        <img src="./assets/img/sample/photo/d5.jpg" class="card-img-top" alt="image">
                        <div class="card-body pt-2">
                            <h4 class="mb-0">Written with a code structure</h4>
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <div class="row d-flex justify-content-center mt-0 pt-2">
            <div class="col-11 px-2">
                <div class="row">
                    <div class="col-6 p-1">
                        <div class="rounded p-2 bg-white">

                        </div>
                    </div>
                    <div class="col-6 p-1">
                        <div class="rounded p-2 bg-white">

                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>


</div>
<!-- * App Capsule -->
<?php
require_once('./inc/bottom-btn.php');
require_once('./inc/footer.php');
require_once('./inc/script.php');
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    const key = 'codeHasRunToday';
    const today = new Date().toLocaleDateString();

    if (localStorage.getItem(key) != today) {
        localStorage.setItem(key, today);
        // console.log('hii');
        $('#showDailyLogin').trigger('click')
    }

    new Swiper('.swiperCreators', {
        slidesPerView: 1.2,
        spaceBetween: 30,
        pagination: {
            clickable: false,
        },
    });

    new Swiper('.courseSlider', {
        spaceBetween: 0,
        slidesPerView: 1.1,
        freeMode: true,
        pagination: {
            clickable: true,
        },
    });

    new Swiper('#recommended_courses', {
        spaceBetween: 30,
        // slidesPerView: 1,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });



    const now = new Date();
    const midnight = new Date(now);
    midnight.setHours(24, 0, 0, 0); // Set to midnight tonight

    const countdownTime = midnight.getTime() - now.getTime(); // Time until midnight
    const timerElement = document.getElementById('timer');

    function updateTimerDisplay(timeLeft) {
        const hours = Math.floor(timeLeft / (60 * 60 * 1000));
        const minutes = Math.floor((timeLeft % (60 * 60 * 1000)) / (60 * 1000));
        const seconds = Math.floor((timeLeft % (60 * 1000)) / 1000);
        timerElement.textContent = `${hours.toString().padStart(2, '0')}:${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
    }
</script>