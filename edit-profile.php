<?php
require_once('./inc/head.php');
require_once('./inc/menu.php');
require_once('./inc/sidebar.php');
$select_user = $action->database->query_sql("SELECT * FROM `tbl_user` WHERE user_uid = '{$user_id}';");
if ($select_user) {
    foreach ($select_user as $data_user) {
    }
}
?>
<style>
    .blink-soft {
        animation: blinker 1.5s linear infinite;
    }

    @keyframes blinker {
        50% {
            opacity: 0;
        }
    }
</style>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Edit Profile</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">
    <div class="section full">
        <div class="wide-block pt-2 pb-2">
            <p class="text-center text-danger blink-soft">Please Complete your Profile.</p>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
            </div>

        </div>
    </div>
    <div class="section full mb-2">
        <!-- <div class="section-title">Boxed Form Example</div>     -->
        <div class="wide-block pt-2 pb-2">

            <form class="needs-validation" id="edit_profile_form_data">

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="name5">Full Name</label>
                        <input type="text" class="form-control" name="full_name" id="full_name" value="<?= @$data_user['name'] ?>" placeholder="Enter your Full name">

                    </div>
                </div>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" value="<?= @$data_user['email'] ?>" disabled>
                    </div>
                </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="email5">Phone No.</label>
                        <input type="tel" class="form-control" name="phone_no" value="<?= @$data_user['mobile'] ?>" placeholder="Enter Phone Num.">
                    </div>
                </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="email5">Bio:</label>
                        <textarea name="bio_user" class="form-control" value="<?= @$data_user['bio'] ?>" placeholder="Enter About You"></textarea>
                    </div>
                </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="email5">Institute Name:</label>
                        <textarea name="institute_name" class="form-control" value="<?= @$data_user['institute_name'] ?>" placeholder="Enter Institute Name"></textarea>
                    </div>
                </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="email5">Class:</label>
                        <input type="text" class="form-control" name="class" value="<?= @$data_user['class'] ?>" placeholder="Enter Class">
                    </div>
                </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="email5">Address:</label>
                        <textarea name="address" class="form-control" value="<?= @$data_user['address'] ?>" placeholder="Enter Address"></textarea>
                    </div>
                </div>
                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="city5">Country</label>
                        <select class="form-control custom-select" name="Country" id="city5" required="">
                            <option selected="" disabled="" value="">Choose Country</option>
                            <?php
                            ?>
                            <option value="1">New York City</option>
                            <option value="2">Austin</option>
                            <option value="3">Colorado</option>
                        </select>

                    </div>
                </div>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="city5">State</label>
                        <select class="form-control custom-select" name="state" id="city5" required="">
                            <option selected="" disabled="" value="">Choose State</option>
                            <option value="1">New York City</option>
                            <option value="2">Austin</option>
                            <option value="3">Colorado</option>
                        </select>

                    </div>
                </div>

                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="city5">District</label>
                        <select class="form-control custom-select" name="District" id="city5" required="">
                            <option selected="" disabled="" value="">Choose District</option>
                            <option value="1">New York City</option>
                            <option value="2">Austin</option>
                            <option value="3">Colorado</option>
                        </select>

                    </div>
                </div>


                <div class="form-group boxed">
                    <div class="input-wrapper">
                        <label class="label" for="city5">Blocks / City</label>
                        <select class="form-control custom-select" name="blocks" id="city5" required="">
                            <option selected="" disabled="" value="">Choose Blocks / City</option>
                            <option value="1">New York City</option>
                            <option value="2">Austin</option>
                            <option value="3">Colorado</option>
                        </select>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please choose a city.</div>
                    </div>
                </div>

                <div class="mt-2">
                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                </div>

            </form>


        </div>
    </div>

</div>
<?php
require_once('./inc/script.php');
?>