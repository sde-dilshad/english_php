<?php
require_once('./inc/head.php');
?>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Tea Game</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->
<style>
    .section.full_edit {
        height: 90vh;
        background-color: rgb(255 106 84);
        display: flex;
        align-items: center;
        justify-content: space-between;
        flex-direction: column;
        padding: 30px;
    }

    .section.full_edit h3 {
        color: #fff;
        text-align: center;
    }

    .section.full_edit p {
        color: #fff;
        text-align: center;
    }

    .section.full_edit .start_glass {
        height: 200px;
    }

    .section.full_edit video {
        height: 79vh;
    }

    .main_video {
        position: relative;
    }

    .question_main {
        display: none;
        position: absolute;
        left: -8px;
        top: 0px;
        width: 100%;
        background: #ff6a54;
        align-items: center;
        justify-content: center;
    }

    .question_main h3 {
        margin: 0;
    }

    textarea {
        color: #fff;
        font-weight: 700;
        border: none;
        background: transparent;
        z-index: 1;
        width: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    textarea:focus-visible {
        border: 0;
        outline: 0;
    }

    textarea::placeholder {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .option1 {
        position: absolute;
        top: 27%;
        left: 15%;
        transform: rotate(8deg);
        background: #da8f59;
        /* background: transparent; */
        height: 113px;
        width: auto;
        border-radius: 16px;
        display: none;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: 700;
        z-index: 9;
    }

    .option2 {
        position: absolute;
        bottom: 26%;
        left: 16%;
        transform: rotate(352deg);
        background: #da8f59;
        /* background: transparent; */
        height: 113px;
        width: auto;
        border-radius: 16px;
        display: none;
        align-items: center;
        justify-content: center;
        text-align: center;
        font-weight: 700;
        z-index: 9;
    }

    #layer1 {
        display: none;
        position: absolute;
        background: #da8f59;
        width: 100px;
        top: 37%;
        left: 31%;
        height: 20px;
        transform: rotate(7deg);
    }

    #layer2 {
        display: none;
        position: absolute;
        background: #da8f59;
        width: 100px;
        bottom: 30%;
        left: 31%;
        height: 20px;
        transform: rotate(353deg);
    }

    .right_tab {
        height: 80vh;
        display: none;
        align-items: center;
        justify-content: center;
        flex-direction: column;
    }

    .right_icon {
        position: absolute;
        top: 40%;
        left: 40%;
        font-size: 50px;
        z-index: 999;
        color: #fff;
        background: green;
        border-radius: 100%;
        padding: 5px;
        transition: 1s ease-out;
        transform: scale(0);
    }

    .wrong_icon {
        position: absolute;
        top: 40%;
        left: 40%;
        font-size: 50px;
        z-index: 999;
        color: #fff;
        background: red;
        border-radius: 100%;
        padding: 5px;
        transition: 1s ease-out;
        transform: scale(0);
    }
</style>

<!-- App Capsule -->
<!-- App Capsule -->
<div id="appCapsule">
    <div class="section full full_edit">
        <div class="main_video">
            <video autoplay muted id="video">
                <source src="./assets/img/animate2.mp4" type="video/mp4">
            </video>

            <div class="question_main">
                <textarea id="que" readonly></textarea>
                <input id="answer" type="hidden">
            </div>

            <div class="option1">
                <textarea id="opt1" readonly></textarea>
            </div>
            <div class="option2">
                <textarea id="opt2" readonly></textarea>
            </div>
            <div id="layer1"></div>
            <div id="layer2"></div>

            <ion-icon class="right_icon" name="checkmark-done-outline"></ion-icon>
            <ion-icon class="wrong_icon" name="close-circle-outline"></ion-icon>
        </div>

        <div class="right_tab">
            <h2 class="text-center text-white" id="que2"></h2>
            <h3 class="my-3 text-light" id="right"></h3>
            <button class="btn btn-success p-3 px-5 mt-3" onclick="window.location.reload();">Continue</button>
        </div>
    </div>

</div>
<!-- * App Capsule -->
<!-- * App Capsule -->
<?php
require_once('./inc/script.php');
?>
<script>
    const allQuestions = [{
            'que': 'Which of the following is a markup language?',
            'a': 'HTML',
            'b': 'CSS',
            'ans': 'a',
            'right': 'HTML',
        },

        {
            'que': 'What year was JavaScript lunched?',
            'a': '1996',
            'b': '1995',
            'ans': 'b',
            'right': '1995',
        },

        {
            'que': 'What does Css stand for?',
            'a': 'Hypertext markeup language',
            'b': 'Cascading Style Sheet',
            'ans': 'b',
            'right': 'Cascading Style Sheet',
        }
    ]

    let video = document.querySelector('#video');
    let layer1 = document.querySelector('#layer1');
    let layer2 = document.querySelector('#layer2');
    let questionMain = document.querySelector('.question_main');
    let option1 = document.querySelector('.option1');
    let option2 = document.querySelector('.option2');
    let que = document.querySelector('#que');
    let que2 = document.querySelector('#que2');
    let right = document.querySelector('#right');
    let opt1 = document.querySelector('#opt1');
    let opt2 = document.querySelector('#opt2');
    let answer = document.querySelector('#answer');
    let ans_option = document.querySelector('.ans_option');

    function displayRandomQuestion() {
        let randomIndex = Math.floor(Math.random() * allQuestions.length);
        let randomQuestion = allQuestions[randomIndex];

        // Fill question and options
        que.value = randomQuestion.que;
        que2.innerText = randomQuestion.que;
        right.innerText = randomQuestion.right;
        answer.value = randomQuestion.ans;
        opt1.value = randomQuestion.a;
        opt2.value = randomQuestion.b;
    }

    $(document).on('click', '#opt1', function() {
        let ansOption = 'a';
        let ansVal = $('#answer').val();

        if (ansOption == ansVal) {
            $('.right_icon').css('transform', 'scale(2)');
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            $('.wrong_icon').css('transform', 'scale(2)');
            setTimeout(() => {
                $('.main_video').addClass('d-none');
                $('.right_tab').addClass('d-flex');
            }, 1000);
        }
    })

    $(document).on('click', '#opt2', function() {
        let ansOption = 'b';
        let ansVal = $('#answer').val();

        if (ansOption == ansVal) {
            $('.right_icon').css('transform', 'scale(2)');
            setTimeout(() => {
                window.location.reload();
            }, 1000);
        } else {
            $('.wrong_icon').css('transform', 'scale(2)');
            setTimeout(() => {
                $('.main_video').addClass('d-none');
                $('.right_tab').addClass('d-flex');
            }, 1000);
        }
    })

    window.onload = function() {
        displayRandomQuestion();
        setTimeout(() => {
            layer1.style.display = 'flex';
            layer2.style.display = 'flex';
            questionMain.style.display = 'flex';
            option1.style.display = 'flex';
            option2.style.display = 'flex';
        }, 2000);
    }


    let wrongTabDisplayStyle = $('.right_tab').css('display');
    console.log(wrongTabDisplayStyle);

    if (wrongTabDisplayStyle == 'none') {
        setTimeout(() => {
            window.location.reload();
        }, 9000);
    }
</script>