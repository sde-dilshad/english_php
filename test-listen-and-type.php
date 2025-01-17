<?php
require_once('./inc/head.php');
require_once('./inc/sidebar.php');
if (isset($_GET['lesson_id']) && !empty($action->database->text_filter($_GET['lesson_id']))) {
    $lesson_id = $action->database->text_filter($_GET['lesson_id']);
    $select_video_code_id = $action->database->query_sql("SELECT * FROM `tbl_code_video_tips` WHERE lesson_id = '{$lesson_id}' AND status = 1;");
    if ($select_video_code_id) {
    }
} else {
    // Redirect to another page after 1 second
    header("refresh:1;url=pbasic-cource.php");
    exit();
}
?>
<style>
    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
    }

    /* button {
          padding: 10px 20px;
          margin: 10px 0;
          border: none;
          border-radius: 5px;
          /* background-color: #007BFF; */
    /* color: #fff;
          font-size: 16px;
          cursor: pointer;
      } */
    */ input {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #result {
        margin-top: 10px;
        font-size: 16px;
    }
</style>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle"> Listen & Type </div>

</div>
<!-- * App Header -->
<!-- App Capsule -->
<div id="appCapsule">

    <div class="section mt-2">
        <div class="card text-center">
            <div class="card-header">
                Featured
            </div>


            <div class="card-body">
                <!-- <p id="text-to-read">Learn</p> -->
                <a href="#" class="btn btn-primary rounded mb-2" id="play-audio">Play Audio</a>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <input type="text" id="user-input" class="form-control" placeholder="Type what you hear">
                <!-- <a href="#" class="btn btn-primary rounded"><ion-icon name="volume-high-outline"></ion-icon></a> -->
                <a href="#" class="btn btn-primary rounded mt-5" id="check-answer">Check Answer</a>
                <a href="#" class="btn btn-primary rounded mt-5" id="reset">Reset</a>
                <!-- <button>Check Answer</button>
                    <button >Reset</button> -->

            </div>
            <div class="card-footer text-muted">
                <p id="result"></p>
            </div>
        </div>
    </div>

</div>
<!-- * App Capsule -->
<?php
require_once('./inc/script.php');
?>
<script>
    $(document).ready(function() {
        listen_text_array = < % -JSON.stringify(listen_and_type_list, ) % > ;
        let current_index = 0;
        let textToRead = '';
        listen_text_array[current_index]['word'];

        function showNextQuestion() {
            textToRead = listen_text_array[current_index]['word'];
        }
        showNextQuestion();
        // console.log(listen_text_array);


        // Play the text as audio
        $('#play-audio').on('click', function() {
            const speech = new SpeechSynthesisUtterance(textToRead);
            speechSynthesis.speak(speech);
        });

        // Check the user's input
        $('#check-answer').on('click', function() {
            const userInput = $('#user-input').val().trim();
            console.log(userInput);
            if (userInput.toLowerCase() === textToRead.toLowerCase()) {
                $('#result').text('Correct!').css('color', 'green');
                setTimeout(() => {
                    current_index++;
                    console.log([current_index, listen_text_array.length]);
                    if (current_index >= listen_text_array.length) {
                        console.log('hii');
                        $('.card-body').html(`<p class="text-center text-success">Successfully Completed!!</p><p class="text-center"><button class="btn btn-success" onclick="window.history.back();">Go Back</button></p>`);
                    } else {
                        $('#result').fadeOut(1000, () => {
                            $('#result').text('');
                            $('#user-input').val('');
                            $('#result').fadeIn();
                        });
                        showNextQuestion();
                    }
                }, 400)
            } else {
                console.log('incorrect');
                $('#result').text('Incorrect, please try again.').css('color', 'red');
            }
        });

        // Reset the inputs and results
        $('#reset').on('click', function() {
            $('#user-input').val('');
            $('#result').text('');
        });
    });
</script>