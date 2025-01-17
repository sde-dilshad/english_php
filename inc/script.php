<!-- welcome notification  -->
<div id="notification-welcome" class="notification-box">
        <div class="notification-dialog android-style">
            <div class="notification-header">
                <div class="in">
                    <img src="assets/img/icon/72x72.png" alt="image" class="imaged w24">
                    <strong>Softxcite</strong>
                    <span>just now</span>
                </div>
                <a href="#" class="close-button">
                    <ion-icon name="close"></ion-icon>
                </a>
            </div>
            <div class="notification-content">
                <div class="in">
                    <h3 class="subtitle">Welcome to Softxcite</h3>
                    <div class="text">
                        Softxcite is a PWA ready Mobile UI Kit Template.
                        Great way to start your mobile websites and pwa projects.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- * welcome notification -->

    <!-- ///////////// Js Files ////////////////////  -->
    <!-- Jquery -->
    <script src="assets/js/lib/jquery-3.4.1.min.js"></script>
    <!-- Bootstrap-->
    <script src="assets/js/lib/popper.min.js"></script>
    <script src="assets/js/lib/bootstrap.min.js"></script>
    <!-- Ionicons -->
    <script type="module" src="https://unpkg.com/ionicons@5.0.0/dist/ionicons/ionicons.js"></script>
    <!-- Owl Carousel -->
    <script src="assets/js/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- jQuery Circle Progress -->
    <script src="assets/js/plugins/jquery-circle-progress/circle-progress.min.js"></script>
    <!-- Base Js File -->
    <script src="assets/js/base.js"></script>
    <script src="./assets/js/custom.js"></script>
    <script>
        const key = 'codeHasRunToday';
        const today = new Date().toLocaleDateString();

        if (localStorage.getItem(key) != today) {
            localStorage.setItem(key, today);
            // console.log('hii');
            $('#showDailyLogin').trigger('click')
        }



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

        $(document).ready(function () {
            banner_div = $('#banner_div').height();
            $('#whole_body').css({ top: banner_div + 80 });
            setTimeout(() => {
                $('#openLoginPopUp').trigger('click');
            }, 1500);
        });

        window.addEventListener('scroll', function (e) {
            $('#banner_div').css({
                scale: (100 - (window.scrollY / 80) * 4) + '%'
            });
        });


        $(document).on('click', '.openLessonInPopUp', function (e) {
            $('#showLessonPupParent').show();
            $('#showLessonPup').show(300, () => {
                $('.showPopOptions').slideDown(300);
            });
        });
        $(document).on('click', '#hideLessonPup', function () {
            // $('#showLessonPupParent').hide(300);
            $('#showLessonPupParent,#showLessonPup,.showPopOptions').fadeOut(200);
        });
    </script>

</body>

</html>