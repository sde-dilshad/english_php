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
    <div class="pageTitle">Message</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">


    <ul class="listview image-listview">
        <li>
            <a href="ask-teacher-chat.php">
                <div class="item">
                    <div class="icon-box bg-primary">
                        <ion-icon name="help-circle-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Helpline: Ask Teachers</div>
                        <span class="text-muted">28/04/24</span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="word-of-the-day-chat.php">
                <div class="item">
                    <div class="icon-box bg-warning">
                        <ion-icon name="at-circle-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Word of the day</div>
                        <span class="text-muted">None</span>
                    </div>
                </div>
            </a>
        </li>
        <li>
            <a href="tip-of-the-day.php">
                <div class="item">
                    <div class="icon-box bg-success">
                        <ion-icon name="at-circle-outline"></ion-icon>
                    </div>
                    <div class="in">
                        <div>Tip of the day</div>
                        <span class="text-muted">date</span>
                    </div>
                </div>
            </a>
        </li>
    </ul>

</div>

<?php
require_once('./inc/script.php');
?>