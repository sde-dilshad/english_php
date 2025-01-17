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
    <div class="pageTitle">Today,s HomeWork's</div>

</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">
    <ul class="listview image-listview border-0">

        <li class="bg-white mb-1 showPopOptions">
            <a href="./homework-fill-in-the-blank.php" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Fill in the blanks
                        <footer>8 Coins to wins</footer>
                    </div>
                </div>
                <!-- <ion-icon name="lock-closed-outline"></ion-icon> -->
            </a>
        </li>
        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-re-arrangement" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Rearrangement of sentences
                        <footer>Play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>
        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-find-correct-sentence" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        find out the correct sentence
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>
        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-listen-and-type" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Listen & Type
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>
        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-conversation" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Conversation
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>
        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-story" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Storys
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>

        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-answer-the-questions" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Answer the questions
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>

        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-finding-the-gems" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Finding the Gems
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>

        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-listen-select-options" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Listen & select the correct sentence
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>
        <li class="bg-white mb-1 showPopOptions">
            <a href="/homework-fill-code-videos" class="item openLessonInPopUp lesson_links">
                <img src="./assets/img/app-assets/spell.png" alt="image" class="image">
                <div class="in">
                    <div>
                        Fill the code from video tips
                        <footer>play a practice game with another learner</footer>
                    </div>
                </div>
            </a>
        </li>

    </ul>

</div>
<!-- * App Capsule -->

<!-- chat footer -->
<div class="chatFooter">
    <form id="form_data_users">

        <div class="form-group boxed" style=" width: max-content;">
            <div class="input-wrapper">
                <input type="text" class="form-control" name="message_user" placeholder="Type a message...">
                <i class="clear-input">
                    <ion-icon name="close-circle"></ion-icon>
                </i>
            </div>
        </div>
        <button type="submit" class="btn btn-icon btn-primary rounded">
            <ion-icon name="send"></ion-icon>
        </button>
    </form>
</div>
<!-- * chat footer -->
<?php
require_once('./inc/bottom-btn.php');
// require_once('./inc/footer.php');
require_once('./inc/script.php');
?>