<footer id="footer" >
   
   
</footer>
<?php include_once 'layout/loading.php' ?>

<script defer src="<?php echo $local ?>/js/slider.min.js"></script>
<script language="javascript" src="https://npa.zoosnet.net/JS/LsJS.aspx?siteid=NPA46777247&float=1&lng=en"></script>
<script defer>
    function handleShockImages() {
        //images gây shock
        const shockElements = document.querySelectorAll('.shock_img');
        shockElements.forEach(shockElement => {
            shockElement.classList = 'hiden_img'
            const viewdiv = document.createElement('div');
            viewdiv.id = 'viewdiv';
            viewdiv.className = 'view';
            viewdiv.textContent = 'Hình ảnh có nội dung gây shock !! cân nhất trước khi xem';

            const viewbutton = document.createElement('button');
            viewbutton.id = 'viewbutton';
            viewbutton.className = 'view_button';
            viewbutton.textContent = 'click vào xem';
            // Append the button to the parent of the shockElement (image-container)
            shockElement.appendChild(viewdiv);
            shockElement.appendChild(viewbutton);

            // Add click event listener to the button
            viewbutton.addEventListener('click', () => {
                // Remove the blur effect
                shockElement.classList.remove('blurred');
                shockElement.classList.remove('hiden_img');
                // Hide the button
                viewdiv.classList.add('hidden');
                viewbutton.classList.add('hidden');
            });
        })
    }
</script>
<script defer>
    function handlePing() {
        // Số lượng lớp ping cần tạo
        const numberOfLayers = 10;
        // Lấy phần tử chứa các lớp ping
        const pingWrapper = document.querySelector('.ping-wrapper');
        // Hàm tạo màu ngẫu nhiên tươi sáng
        function getRandomBrightColor() {
            // Sử dụng HSL để tạo màu với độ bão hòa và độ sáng cao
            const hue = Math.floor(Math.random() * 360);
            const saturation = 50;
            const lightness = Math.floor(Math.random() * 21) + 20;
            return `hsl(${hue}, ${saturation}%, ${lightness}%)`;
        }

        // Tạo các lớp ping
        for (let i = 1; i <= numberOfLayers; i++) {
            const pingLayer = document.createElement('div');
            pingLayer.className = `ping-layer ping-layer${i}`;
            pingLayer.style.width = `calc(100% + ${10 * i}px)`;
            pingLayer.style.height = `calc(100% + ${10 * i}px)`;
            pingLayer.style.border = '4px solid';
            pingLayer.style.borderColor = getRandomBrightColor();
            pingLayer.style.animationDelay = `${0.2 * (i - 0.6)}s`;
            pingWrapper.appendChild(pingLayer);
        }
    }
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const contentPlaceholder = document.getElementById("content-placeholder");
        const bodyPlaceholder = document.getElementById("body-placeholder");
        const footer = document.getElementById("footer");

        const loadContent = () => {
            contentPlaceholder.innerHTML = `
         <section class="banner">
        <img loading="lazy" src="<?php echo $local ?>/images/banner/banner.webp" alt="...">
    </section>
    <section class="banner" >
        <div class="banner__button" >
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" aria-label="title" class="box">tư vấn với bác sĩ tại đây</a>
        </div>
    </section>
    <section class="sick">
        <div class="sick__container">
            <div class="sick__container-item sick__container-item-active ">Sùi Màu Gà </div>
            <div class="sick__container-item">Bệnh Lậu</div>
            <div class="sick__container-item">Mụn Rộp</div>
        </div>
    </section>
    <section class="sick">
        <div  class="sick__body ">
        <div class="sick__body-card">
        <strong>Bệnh sùi mào gà</strong> là căn bệnh xã hội, lây lan qua hành vi quan hệ tình dục, bản chất là tình trạng tăng sinh của các tế bào biểu bì do lây nhiễm virus HPV (Human Papilloma Virus). Virus HPV bao gồm các tuýp 1, 2, 6, 11, 16, 18, 31, 33, và 35. Trong đó, bệnh ung thư cổ tử cung ở nữ giới có liên quan tới việc nhiễm HPV tuýp 16 và 18 trong thời gian dài. HPV là một phân tử khá nhỏ với đường kính = 55 nm, thuộc nhóm DNA. Có hơn 100 kiểu gen HPV, trong đó hơn 30 kiểu sẽ lây nhiễm và gây bệnh trên da và niêm mạc của bộ phận sinh dục, và gây ra các loại bệnh. Do bệnh có khả năng lây lan mạnh nên cần nhận biết triệu chứng để điều trị kịp thời.
      </div>
        </div>
    </section>
    <section class="treatment">
        <a aria-label="chat" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" class="expert__chat">
            <img loading="lazy" src="<?php echo $local ?>/images/icons/chat_dakhoa.gif" alt="...">
        </a>
    </section>
    `;
            contentPlaceholder.classList.add("loaded");
        };

        const loadBody = () => {
            bodyPlaceholder.innerHTML = `
      

    <section class="information">
        <h2 class="information__tile ">THÔNG TIN BÁC SĨ</h2>
    </section>
    <section class="information">
        <div class="information__body">
            <div class="information__body-title">
                <img width="30px" height="27px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_bv.webp" alt="...">
                <div class="information__body-right">
                    <strong>
                        trình độ học vấn
                    </strong>
                    <div>
                        <strong> THS, BÁC SĨ CHUYÊN KHOA NGOẠI </strong>
                        <span>tại Trường Đại Học Y Hà Nội </span>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <section class="information">
        <div class="information__body">
            <div class="information__body-bottom ">
                <img width="30px" height="27px" loading="lazy" src="<?php echo $local ?>/images/icons/icon_bv.webp" alt="...">
                <div class="information__body-right">
                    <strong>
                        quá trình công tác :
                    </strong>
                    <div class="information__body-right-text">
                        <strong> - CÔNG TÁC TẠI KHỐI NGOẠI</strong>
                        <span>tại Bệnh viện Đa khoa Sainpaul Hà Nội: </span>
                        <div class="information__body-right-text-li">
                            . Phẫu thuật thần kinh
                        </div>
                        <div class="information__body-right-text-li">
                            . Tiết niệu
                        </div>
                        <div class="information__body-right-text-li">
                            . Tiêu hóa
                        </div>
                        <div>
                            <strong> - CHUYÊN GIA Y TẾ TẠI NƯỚC NGOÀI</strong>
                        </div>
                        <div>
                            <strong>- TRƯỞNG KHOA NGOẠI BỆNH VIỆN ĐA KHOA TÂM TRÍ SÀI GÒN</strong>
                        </div>
                        <div>
                            <strong> - CHUYÊN MÔN ĐIỀU TRỊ:</strong>
                            <span>Bao quy đầu, tiết niệu tuyến, sinh dục tiết niệu, hậu môn trực tràng, thần kinh trung ương và ngoại biên. </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="information">
        <div class="information__bacsi">
            <img loading="lazy" src="<?php echo $local ?>/images/banner/bac_si.webp" alt="bác sĩ">
        </div>
    </section>

    <section class="information">
        <div class="information__thongtin">
            <div class="information__thongtin-body">
                <div class="information__thongtin-text">
                    “Tôi quan niệm rằng bệnh nhân luôn là trung tâm trong mọi quá trình điều trị. Một người bác sĩ giỏi không chỉ biết chữa bệnh, mà còn phải biết lắng nghe và thấu hiểu những tâm tư của bệnh nhân...”
                </div>
                <div class="information__thongtin-hr">
                    <span></span>
                </div>
                <div class="information__thongtin-bs" >VÕ MINH NGUYỄN</div>
            </div>
        </div>
    </section>

    <section class="information">
        <div class="information__bacsi">
            <img loading="lazy" src="<?php echo $local ?>/images/banner/bac_si1.webp" alt="bác sĩ">
        </div>
    </section>
    <section class="banner" >
        <div class="banner__button" >
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" aria-label="title" class="box">đặt lịch khám ngay</a>
        </div>
    </section>
    <section class="complication">
        <div class="complication__tile">
            BIỂU HIỆN VÀ BIẾN CHỨNG
        </div>
    </section>
    <section class="complication">
        <div class="complication__body">
            <strong> Biểu hiện:</strong>
            Nổi các nốt sần, gai thịt mềm tại âm đạo, môi lớn, môi bé, cổ tử cung (nữ); Lỗ sáo, quy đầu, bao quy đầu, thân dương vật (nam); Vùng hậu môn hoặc miệng, họng.
        </div>
        <div class="complication__img ">
            <div class="shock_img">
                <img class="" loading="lazy" src="<?php echo $local ?>/images/banner/sui_mau_ga.webp" alt="bác sĩ">
            </div>
        </div>
    </section>
    <section class="complication">
        <div class="complication__body">
            <strong> Biến chứng:</strong>
            Ảnh hưởng đến tâm lý, chất lượng cuộc sống và sức khỏe tổng thể. Thậm chí dẫn tới ung thư cổ tử cung (nữ), dương vật (nam), hậu môn hoặc hầu họng.
        </div>
        <div class="complication__img ">
            <div class="shock_img">
                <img class="" loading="lazy" src="<?php echo $local ?>/images/banner/sui_mau_ga1.webp" alt="bác sĩ">
            </div>
        </div>
    </section>
    <section class="treatment">
        <a aria-label="chat" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" class="expert__chat">
            <img loading="lazy" src="<?php echo $local ?>/images/icons/chat_dakhoa.gif" alt="...">
        </a>
    </section>
    <section class="harm">
        <div class="harm__tile">3 TÁC HẠI CỦA SÙI MÀU GÀ</div>
        <div class="harm__body">
            <div class="harm__body-text">
                <div>
                    1. Lây lan nhanh, mạnh, dễ dàng truyền bệnh cho người khác.
                </div>
                <div>
                    2. Các nốt sùi có thể hợp lại với nhau thành khóm lớn và biến chứng gây ung thư cổ tử cung, ung thư âm đạo, ung thư dương vật, ung thư vòm họng v.v….
                </div>
                <div>
                    3. Dễ tái phát bệnh do khả năng miễn dịch suy giảm, quan hệ tình dục không an toàn, điều trị không triệt để.
                </div>
            </div>
        </div>
    </section>

    <section class="virus">
        <div class="virus__title">
            VỊ TRÍ SINH TRƯỞNG CỦA VIRUS HPV TRÊN CƠ THỂ
        </div>
        <div class="virus__list">
            <div class="virus__item">
                Rãnh quy đầu, vùng hãm, bao quy đầu, túi tinh, xung quanh dương vật… của nam giới.
            </div>
            <div class="virus__item">
                Miệng và hậu môn.
            </div>
            <div class="virus__item">
                Môi lớn, môi bé, âm đạo,
                cổ tử cung… của nữ giới.
            </div>
            <div class="virus__item">
                Ngực, vị trí tiếp xúc
                khi quan hệ.
            </div>
        </div>
    </section>

    <section class="infection">
        <div class="infection__title">CON ĐƯỜNG LÂY NHIỄM </div>
    </section>


    <section class="infection">
        <div id="slider">
            <div class="slide_show w-100">
                <div class="list_image">
                    <?php foreach ($slides as $slide): ?>
                        <div class="list_image_card">
                            <img loading="lazy" height="300px" width="300px" src="<?php echo $local . $slide['image']; ?>" alt="<?php echo $slide['alt']; ?>">
                            <div class="list_image_card-text">
                                <div>
                                    <strong><?php echo $slide['symptom']; ?></strong>
                                </div>
                                <div>
                                    <span><?php echo $slide['complication']; ?></span>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="btns">
                    <div class="btn-left btn"><img loading="lazy" width="30px" height="30px" src="<?php echo $local ?>/images/icons/icon_prev.webp" alt="..."></div>
                    <div class="btn-right btn"><img loading="lazy" width="30px" height="30px" src="<?php echo $local ?>/images/icons/icon_next.webp" alt="..."></i></div>
                </div>

            </div>
        </div>
    </section>
  <section class="banner" >
        <div class="banner__button" >
            <a href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en" aria-label="title" class="box">liên hệ ngay</a>
        </div>
    </section>

    <section class="information">
        <div class="information__bacsi">
            <img loading="lazy" src="<?php echo $local ?>/images/banner/phuong_phap.webp" alt="bác sĩ">
        </div>
    </section>
    <section class="information">
        <div class="information__bacsi">
            <img loading="lazy" src="<?php echo $local ?>/images/banner/giay_phep.webp" alt="bác sĩ">
        </div>
    </section>
    <section class="time">
        <div class="ping-wrapper">
            <div class="ping-border">
                <img loading="lazy" src="<?php echo $local ?>/images/banner/time.webp" alt="...">
            </div>
        </div>
    </section>

    <section class="contact">
        <div class="contact__title">
            LIÊN HỆ TƯ VẤN VÀ ĐẶT LỊCH KHÁM
        </div>
        <div class="contact__body">
            <div>
                <a aria-label="phone" href="tel:+0968063109">
                    <strong>HOTLINE: </strong> <span>0968 063 109</span>
                </a>
            </div>
            <div>
                <a aria-label="phone" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                    <strong>ZALO: </strong> <span>0968 063 109</span>
                </a>
            </div>
            <div>
                <a aria-label="phone" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en">
                    <strong>CHAT TRỰC TIẾP </strong>
                </a>
            </div>
            <div>
                <strong>ĐỊA CHỈ: </strong> <span>360 An Dương Vương, P.4, Q.5, TP.HCM</span>
            </div>
        </div>
    </section>
    `;
            bodyPlaceholder.classList.add("loaded");
            observer.unobserve(bodyPlaceholder);
        };

        const loadFooter = () =>{
            footer.innerHTML= `
                 <div class="footer" >
                    <img loading="lazy" src="<?php echo $local ?>/images/banner/footer.webp" alt="...">
                    <div class="footer__body">
                        <div class="footer__body-top">
                            <a aria-label="left" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                            <a aria-label="center" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                            <a aria-label="right" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
                        </div>
                        <div class="footer__body-botom">
                            <a aria-label="bottom" href="tel:+0968063109"></a>
                        </div>
                    </div>
                </div>
            `;
            footer.classList.add("loaded");
        }

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    loadBody();
                    handleShockImages();
                    handlePing();
                    initImageSlider();
                    loadFooter();
                }
            });
        });

        // Khởi tạo tải content ban đầu và bắt đầu quan sát bodyPlaceholder
        loadContent();
        observer.observe(bodyPlaceholder);
    });
</script>

<!-- Google tag (gtag.js) -->
<script>
  function loadGtagScripts() {
    // Tải script Google Tag Manager
    var script = document.createElement('script');
    script.src = "https://www.googletagmanager.com/gtag/js?id=G-00PYVXZQ5G";
    script.onload = function () {
      // Khởi tạo Google Tag Manager sau khi script đã được tải
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());
      gtag('config', 'G-00PYVXZQ5G');
    };
    document.head.appendChild(script);
  }

  // Đợi trang tải xong rồi chờ thêm 10 giây trước khi gọi loadGtagScripts
  window.addEventListener('load', function () {
    setTimeout(loadGtagScripts, 10000); // 10 giây
  });
</script>

</body>

</html>