<?php
require_once('./inc/head.php');
require_once('./inc/menu.php');
require_once('./inc/sidebar.php');
$user_id = "000001";
?>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Ask a Questions</div>
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
                        All Posts
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#friends" role="tab">
                        My Post
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
                    <div class="listview-title mt-2">All Questions</div>
                    <?php
                    $select_students_questions_ask = $action->database->query_sql("SELECT * FROM `tbl_students_questions_ask`");
                    if ($select_students_questions_ask) {
                        foreach ($select_students_questions_ask as $data_students_quest) {
                    ?>
                            <li>
                                <a href="all-anwers.php?question_id=<?= @$data_students_quest['id'] ?>" class="item">
                                    <!-- <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image"> -->
                                    <div class="in">
                                        <div>
                                            <?php
                                            $inputString = $data_students_quest['questions_users'];
                                            $wordLimit = 14;
                                            $shortenedString = $action->database->getFirstWords($inputString, $wordLimit);
                                            ?>
                                            <?= $shortenedString ?>...
                                            <div class="row mt-1">
                                                <div class="col-6">
                                                    <div class="text-muted"><?= $data_students_quest['date'] ?> </div>
                                                </div>
                                                <div class="col-6" style="text-align: end;">
                                                    <div class="text-muted">
                                                        <!-- <ion-icon name="chatbox-outline"></ion-icon> -->
                                                        <!-- 532 -->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>

                            </li>
                    <?php
                        }
                    }
                    ?>

                </ul>
                <div class="fab-button text bottom-right">
                    <a href="type-questions.php" class="fab" style="padding: 12px; font-size: 12px; margin-bottom: 10px;margin-top: 10px;">
                        <ion-icon name="add-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
                        Ask Your Questions
                    </a>
                </div>
            </div>
            <!-- * feed -->

            <!-- * friends -->
            <div class="tab-pane fade" id="friends" role="tabpanel">
                <div class="section full mt-2">
                    <!-- <div class="profile-stats pl-2 pr-2">
                        <a href="#" class="item">
                            <strong>152</strong>My Upvote
                        </a>
                        <a href="#" class="item">
                            <strong>52</strong>My Downvotes
                        </a>
                        <a href="#" class="item">
                            <strong>27k</strong>Net Votes
                        </a> -->

                    <!-- <a href="#" class="item">
                    <strong>506</strong>following
                </a> -->
                    <!-- </div> -->
                </div>
                <!-- <hr> -->
                <ul class="listview image-listview flush transparent">
                    <div class="listview-title mt-2">My Questions</div>
                    <?php
                    $select_questions_user = $action->database->query_sql("SELECT * FROM `tbl_students_questions_ask` WHERE user_id = '{$user_id}';");
                    if ($select_questions_user) {
                        foreach ($select_questions_user as $data_question_user) {
                    ?>
                            <li>
                                <a href="all-anwers.php?question_id=<?= @$data_question_user['id'] ?>" class="item">
                                    <!-- <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image"> -->
                                    <div class="in">
                                        <div>
                                            <?= @$data_question_user['questions_users'] ?>
                                            <div class="row mt-1">
                                                <div class="col-6">
                                                    <div class="text-muted"><?= @$data_question_user['date'] ?></div>
                                                </div>
                                                <div class="col-6" style="text-align: end;">
                                                    <!-- <div class="text-muted">
                                                        <ion-icon name="chatbox-outline"></ion-icon>
                                                        532
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                    <?php
                        }
                    }
                    ?>
                    <hr>
                    <div class="listview-title mt-2">My Answers</div>
                    <?php
                    $select_answere_user = $action->database->query_sql("SELECT * FROM `tbl_student_answers` WHERE user_id = '{$user_id}';");
                    if ($select_answere_user) {
                        foreach ($select_answere_user as $data_answere_user) {
                    ?>
                            <li>
                                <a href="all-anwers.php?question_id=<?= @$data_answere_user['ques_id'] ?>" class="item">
                                    <!-- <img src="./assets/img/app-assets/avtar-icon.png" alt="image" class="image"> -->
                                    <div class="in">
                                        <div>
                                            <?= @$data_answere_user['answere'] ?>
                                            <div class="row mt-1">
                                                <div class="col-6">
                                                    <div class="text-muted"><?= @$data_answere_user['date'] ?> </div>
                                                </div>
                                                <div class="col-6" style="text-align: end;">
                                                    <!-- <div class="text-muted">
                                                        <ion-icon name="chatbox-outline"></ion-icon>
                                                        532
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                    <?php
                        }
                    }
                    ?>

                </ul>
                <!-- <div class="fab-button text bottom-right">
          <a href="/type-answers" class="fab" style="padding: 12px; font-size: 12px; margin-bottom: 10px;margin-top: 10px;">
            <ion-icon name="add-outline" role="img" class="md hydrated" aria-label="add outline"></ion-icon>
            Ask Your Answers
          </a>
        </div> -->
            </div>
            <!-- * friends -->

        </div>
    </div>
    <!-- * tab content -->


</div>
<!-- * App Capsule -->

<?php
require_once('./inc/script.php');
?>