<?php
require_once('./inc/head.php');
require_once('./inc/menu.php');
require_once('./inc/sidebar.php')
?>
    <!-- App Header -->
    <div class="appHeader bg-primary text-light">
        <div class="left">
            <a href="javascript:;" class="headerButton goBack">
                <ion-icon name="chevron-back-outline"></ion-icon>
            </a>
        </div>
        <div class="pageTitle">About</div>
        <div class="right"></div>
    </div>
    <!-- * App Header -->

    <!-- App Capsule -->
    <div id="appCapsule">

        <div class="section full">
            <img src="assets/img/app-assets/abou.png" alt="image" class="imaged square w-100">
        </div>

        <div class="section full mt-2">
            <div class="section-title">About us</div>
            <div class="wide-block pt-2 pb-1">
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur at magna porttitor lorem mollis
                    ornare. Fusce varius varius massa. Vivamus nec odio tempus, condimentum ex eget, varius diam.

                </p>
                <p>
                    Nunc efficitur laoreet vulputate. Curabitur mi ligula, aliquet commodo leo in, consectetur venenatis
                    tellus. Maecenas quis vehicula erat, vitae finibus tellus. Cras rhoncus ipsum quis lacus aliquam,
                    quis
                    euismod ligula varius. Phasellus ac odio rhoncus, aliquet nisl lobortis, commodo orci. Quisque
                    bibendum
                    est ut pellentesque hendrerit.
                </p>
            </div>
        </div>
    </div>
    <!-- * App Capsule -->
    <?php
    require_once('./inc/bottom-btn.php');
    // require_once('./inc/footer.php');
    require_once('./inc/script.php');
    ?>