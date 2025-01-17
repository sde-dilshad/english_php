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
    <div class="pageTitle">My Friends</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">

    <div class="section full">
        <div class="wide-block transparent p-0">
            <ul class="nav nav-tabs lined iconed" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#feed" role="tab">
                        People I follow (5)
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#friends" role="tab">
                        My Followers (5)
                    </a>
                </li>

            </ul>
        </div>
    </div>

    <!-- tab content -->
    <div class="section full mb-2">
        <div class="tab-content">

            <!-- feed -->
            <div class="tab-pane fade show active" id="feed" role="tabpanel">
                <ul class="listview image-listview flush transparent">
                    <div class="listview-title mt-2">Friends Lists</div>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Edward Lindgren
                                    <div class="text-muted">532 followers <span class="text-warning" style="padding-left: 7px;"><ion-icon name="star-outline"></ion-icon>Rank: 1</span></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Emelda Scandroot
                                    Emelda Scandroot
                                    <div class="text-muted">120k followers <span class="text-warning" style="padding-left: 7px;"><ion-icon name="star-outline"></ion-icon>Rank: 2</span></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Henry Bove
                                    <div class="text-muted">920k followers</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Ava Gregoraci
                                    <div class="text-muted">5092 followers</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Emmy Elsner
                                    <div class="text-muted">92 followers</div>
                                </div>
                            </div>
                        </a>
                    </li>
                   
                </ul>
            </div>
            <!-- * feed -->

            <!-- * friends -->
            <div class="tab-pane fade" id="friends" role="tabpanel">
                <ul class="listview image-listview flush transparent">
                    <div class="listview-title mt-2">Friends Ranks</div>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Edward Lindgren
                                    <div class="text-muted">532 followers <span class="text-warning" style="padding-left: 7px;"><ion-icon name="star-outline"></ion-icon>Rank: 1</span></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Emelda Scandroot
                                    Emelda Scandroot
                                    <div class="text-muted">120k followers <span class="text-warning" style="padding-left: 7px;"><ion-icon name="star-outline"></ion-icon>Rank: 2</span></div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Henry Bove
                                    <div class="text-muted">920k followers</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Ava Gregoraci
                                    <div class="text-muted">5092 followers</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="item">
                            <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image">
                            <div class="in">
                                <div>
                                    Emmy Elsner
                                    <div class="text-muted">92 followers</div>
                                </div>
                            </div>
                        </a>
                    </li>
                    
                </ul>
            </div>
            <!-- * friends -->
        </div>
    </div>
    <!-- * tab content -->


</div>
<!-- * App Capsule -->

<?php
require_once('./inc/bottom-btn.php');
// require_once('./inc/footer.php');
require_once('./inc/script.php');
?>