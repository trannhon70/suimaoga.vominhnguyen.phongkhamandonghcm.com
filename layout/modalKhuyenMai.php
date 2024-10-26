
<style>
    .modal {
        display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0%;
            width: 100%;
            height: 100%;
            overflow: hidden;
    }

    .modal-content {
        margin: 15% auto;
        width: 500px;
        height: auto;
        animation-duration: 1s;
        animation-name: slidein;
    }

    .modal-content img {
        border-radius: 10px;
        border: 2px solid  #25286D;
    }

    @keyframes slidein {
            from {
                transform: translateX(150vw) scaleX(2);
            }
            to {
                transform: translateX(0) scaleX(1);
            }
        }

        @keyframes slideout {
            from {
                transform: translateX(0) scaleX(1);
            }

            to {
                transform: translateX(150vw) scaleX(2);
            }
        }


    .closeKM {
        color: red;
        float: right;
        font-size: 25px;
        font-weight: bold;
        position: absolute;
        top: -33px;
        right: -27px;
        border: 3px solid;
        border-radius: 50%;
        padding: 0px 7px;
    }

    .closeKM:hover,
    .closeKM:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    @media only screen and (max-width: 999px) {
        .modal-content {
            margin: 15% 8%;
            width: auto;
            height: auto;
            animation-duration: 1s;
            animation-name: slidein;
         }
            
         .closeKM {
            font-size: 20px;
            padding: 0px 5px;
        }
        }
</style>


<div id="myModalKM" class="modal">
    <div class="modal-content">

        <div style="position: relative;">
            <span class="closeKM" id="closeModalKM">&times;</span>
            <img loading="lazy" width="100%" height="auto" src="<?php echo $local ?>/images/banner/bac_si_tu_xa.webp" alt="...">
            <div style="position: absolute; bottom: 0; left: 0; display: flex; align-items: center; height: 60px; width: 100%; ">
                <a aria-label="phone" style="width: 50%;  height:60px; display: block; " href="tel:+0968063109"></a>
                <a aria-label="chat" style="width: 50%;  height:60px; display: block; " href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" ></a>
            </div>

        </div>
    </div>
</div>

<script defer>
    document.addEventListener("DOMContentLoaded", function () {
        const modal = document.getElementById("myModalKM");
        const btn = document.getElementById("openModalKM");
        const span = document.getElementById("closeModalKM");
        const sloseModal = document.getElementById("clickSloseModal");

        setTimeout(function() {
            modal.style.display = "block";
        }, 10000);

        if (btn) {
            btn.onclick = function() {
                modal.style.display = "block";
            };
        }

        if (sloseModal) {
            sloseModal.onclick = function() {
                modal.style.display = "none";
            };
        }

        if (span) {
            span.onclick = function() {
                modal.style.display = "none";
            };
        }

        window.onclick = function(event) {
            if (event.target === modal) {
                modal.style.display = "none";
            }
        };
    });
</script>