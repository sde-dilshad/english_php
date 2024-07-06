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
    <div class="pageTitle">Ask Questions</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">
    <div class="wide-block pb-1 pt-2">

        <form id="student_questions_ask_form">

            <div class="form-group boxed">
                <div class="input-wrapper">
                    <label class="label" for="address5">Questions</label>
                    <input type="hidden" name="user_id" value="<?= @$user_id ?>">
                    <textarea id="address5" name="student_questions_ask" rows="2" class="form-control" placeholder="Ask Your Questions" ></textarea>
                    <i class="clear-input">
                        <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                    </i>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mr-1 mb-1">Submit</button>
        </form>

    </div>
</div>
<!-- * App Capsule -->

<?php
require_once('./inc/script.php');
?>