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
    <div class="pageTitle">Refer Friends</div>
    <div class="right">
    </div>
</div>
<!-- * App Header -->

<!-- App Capsule -->
<div id="appCapsule">
    <div class="section full mt-2 mb-2">
        <div class="section-title">
            <div class="text">Add your friends Hello Code and gift him/her 400 coins</div>
        </div>
        <div class="wide-block pb-1 pt-2">
            <form>
                <div class="row">
                    <div class="col-9">
                        <div class="form-group boxed">
                            <div class="input-wrapper">
                                <input type="text" class="form-control" id="name5" placeholder="Friend's Hello Code">
                                <i class="clear-input">
                                    <ion-icon name="close-circle" role="img" class="md hydrated" aria-label="close circle"></ion-icon>
                                </i>
                            </div>
                        </div>
                    </div>
                    <div class="col-3 mt-1">
                        <button type="button" class="btn btn-primary rounded"><ion-icon name="send-outline"></ion-icon></button>
                    </div>
                </div>
            </form>
            <h6 class="text-mute">You Can only do it once.</h6>
        </div>


        <div class="comment-box">
            <h4 class="text-success">Friend join you get 400 coins and<br> 20 tickets</h4>
            <img src="assets/img/sample/avatar/avatar8.jpg" alt="avatar" class="imaged w64 rounded">

            <div class="card-text" style="font-size: medium;">Share your Hello Code</div>
            <h4 class="card-title">SUBHAM8394</h4>

        </div>
        <style>
            /* Styles for Social Media Share Buttons */
            .social-share-buttons {
                display: flex;
                gap: 12px;
                margin-bottom: 20px;
            }

            .share-btn {
                display: inline-flex;
                align-items: center;
                justify-content: center;
                border-radius: 50%;
                transition: background-color 0.3s;
            }

            .share-btn img {
                width: 30px;
                height: auto;
            }

            /* Hover effect */
            .share-btn:hover {
                opacity: 0.8;
            }

            /* Responsive design */
            @media (max-width: 600px) {
                .social-share-buttons {
                    justify-content: center;
                }
            }
        </style>
        <div class="card pt-3">
            <div class="social-share-buttons">
                <a href="https://deepakness.com/" class="share-btn general" onclick="generalShare(event)">
                    <img src="https://cdn-icons-png.flaticon.com/512/2175/2175280.png" alt="Share" />
                </a>
                <a href="https://deepakness.com/" class="share-btn whatsapp" onclick="shareOnWhatsApp(event)">
                    <img src="https://cdn-icons-png.flaticon.com/512/3670/3670051.png" alt="WhatsApp" />
                </a>
                <a href="https://deepakness.com/" class="share-btn telegram" onclick="shareOnTelegram(event)">
                    <img src="https://cdn-icons-png.flaticon.com/512/5968/5968804.png" alt="Telegram" />
                </a>
            </div>
        </div>
        <script>
            // JavaScript for handling the share functionality
            function shareOnWhatsApp(e) {
                e.preventDefault();
                const url = window.location.href;
                window.open(`https://wa.me/?text=${encodeURIComponent(url)}`, "_blank");
            }

            function shareOnTelegram(e) {
                e.preventDefault();
                const url = window.location.href;
                window.open(`https://t.me/share/url?url=${encodeURIComponent(url)}`, "_blank");
            }

            function generalShare(e) {
                e.preventDefault();
                if (navigator.share) {
                    navigator
                        .share({
                            title: document.title,
                            url: window.location.href
                        })
                        .then(() => {
                            console.log("Thanks for sharing!");
                        })
                        .catch(console.error);
                } else {
                    // fallback for browsers that do not support navigator.share
                    alert("Your browser does not support the Web Share API");
                }
            }
        </script>

    </div>

</div>
<!-- * App Capsule -->

<?php
require_once('./inc/script.php');
?>