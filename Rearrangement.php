<?php
require_once('./inc/head.php');
require_once('./inc/menu.php');
require_once('./inc/sidebar.php');
?>
<style>
    .container {
        width: calc(100% - 20px);
        height: 60px;
        border: 2px solid #999;
        margin: 20px 0;
        padding: 10px;
        overflow: auto;
        border-radius: 5px;
    }

    .item {
        display: inline-block;
        width: 60px;
        height: 40px;
        background-color: #f0f0f0;
        border: 1px solid #ccc;
        margin-right: 10px;
        text-align: center;
        line-height: 40px;
        cursor: pointer;
        touch-action: manipulation;
        user-select: none;
        border-radius: 5px;
        position: relative;
    }

    .shake {
        animation: shake 0.2s ease-in-out;
        background-color: #ee4a4a;
        color: #ffffff;
    }

    .won {
        animation: won 1s ease-in-out;
    }

    @keyframes won {

        0%,
        50%,
        100% {
            background: green;
            color: #fff;
        }

        25%,
        75% {
            background: white;
            color: green;
        }
    }

    @keyframes shake {

        0%,
        100% {
            transform: translateX(0);
        }

        25%,
        75% {
            transform: translateX(-5px);
        }

        50% {
            transform: translateX(5px);
        }
    }

    .button {
        background: #c4ffc7;
        padding: 10px;
        border: 4px solid rgba(81, 255, 0, 0.362);
        border-radius: 5px;
        color: green;
        margin-top: 10px;
        width: 100%;
    }
</style>
<!-- App Header -->
<div class="appHeader bg-primary text-light">
    <div class="left">
        <a href="javascript:;" class="headerButton goBack">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </a>
    </div>
    <div class="pageTitle">Rearrangement of sentences</div>
    <div class="right"></div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">
    <div class="comment-box">
        <h4 id="question-title">आप कैसे हैं</h4>
        <div class="container w-100" id="container"></div>
        <div class="item" ontouchstart="startDrag(event)" data-index="2">are</div>
        <div class="item" ontouchstart="startDrag(event)" data-index="3">you?</div>
        <div class="item" ontouchstart="startDrag(event)" data-index="1">How</div>
        <button class="button" onclick="resetGame();" id="button-reset" style="display: none;">Again!</button>
        <button class="button" onclick="loadNextQuestion();" id="button-next" style="display: none;">Next</button>
    </div>
</div>
<!-- * App Capsule -->

<?php
require_once('./inc/script.php');
?>
<script>
    let draggedItem = null;
    let startX = 0;
    let startY = 0;
    let indexes = '';
    const answer = '123';
    const initialPositions = {};
    let currentQuestion = 0;

    const questions = [{
            question: 'आप कैसे हैं',
            items: ['are', 'you?', 'How'],
            answer: '123'
        },
        {
            question: 'यह पेन है',
            items: ['This', 'is', 'pen'],
            answer: '321'
        },
    ];

    // Store initial positions of items
    document.querySelectorAll('.item').forEach(item => {
        initialPositions[item.getAttribute('data-index')] = {
            left: item.style.left,
            top: item.style.top,
            parent: item.parentNode
        };
    });

    function startDrag(event) {
        event.preventDefault();
        draggedItem = event.target;
        startX = event.touches[0].clientX - draggedItem.getBoundingClientRect().left;
        startY = event.touches[0].clientY - draggedItem.getBoundingClientRect().top;
        draggedItem.style.opacity = '0.5';
        draggedItem.style.position = 'absolute';
        draggedItem.style.zIndex = '1000';
        window.addEventListener('touchmove', handleDrag);
        window.addEventListener('touchend', endDrag);
    }

    function handleDrag(event) {
        event.preventDefault();
        if (draggedItem) {
            let x = event.touches[0].clientX - startX;
            let y = event.touches[0].clientY - startY;
            draggedItem.style.left = `${x}px`;
            draggedItem.style.top = `${y}px`;
        }
    }

    function endDrag(event) {
        event.preventDefault();
        if (draggedItem) {
            draggedItem.style.opacity = '1';
            draggedItem.style.position = 'static';
            draggedItem.style.zIndex = 'auto';
            document.getElementById('container').appendChild(draggedItem);
            indexes += draggedItem.getAttribute('data-index');
            if (indexes.length === answer.length) {
                if (indexes === answer) { // Compare indexes directly with answer
                    document.querySelectorAll('.item').forEach(element => element.classList.add('won'));
                    document.getElementById('button-reset').style.display = 'none';
                    document.getElementById('button-next').style.display = 'block';
                } else {
                    resetItems();
                }
            }
            draggedItem = null;
            window.removeEventListener('touchmove', handleDrag);
            window.removeEventListener('touchend', endDrag);
        }
    }


    function resetItems() {
        document.querySelectorAll('.item').forEach(element => {
            $('.item').fadeOut(0);
            // element.classList.add('shake');
            setTimeout(() => {
                $('.item').fadeIn(200);
                // element.classList.remove('shake');
                let pos = initialPositions[element.getAttribute('data-index')];
                pos.parent.appendChild(element);
                element.style.left = pos.left;
                element.style.top = pos.top;
            }, 500);
        });
        indexes = '';
    }

    function resetGame() {
        resetItems();
        document.getElementById('button-reset').style.display = 'none';
        document.getElementById('button-next').style.display = 'none';
        document.querySelectorAll('.item').forEach(element => {
            element.classList.remove('won');
        });
    }

    function loadNextQuestion() {
        currentQuestion++;
        if (currentQuestion >= questions.length) {
            currentQuestion = 0; // Restart from the first question or handle end of questions
        }
        const question = questions[currentQuestion];
        document.getElementById('question-title').textContent = question.question;
        document.getElementById('button-next').style.display = 'none';
        const container = document.getElementById('container');
        container.innerHTML = '';
        question.items.forEach((item, index) => {
            const div = document.createElement('div');
            div.className = 'item';
            div.setAttribute('ontouchstart', 'startDrag(event)');
            div.setAttribute('data-index', index + 1);
            div.textContent = item;
            container.appendChild(div);
        });
        indexes = '';
        resetItems();
    }
</script>