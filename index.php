<?php
include_once "inc/header.php"
?>
<link rel="preload" href="css/trang-chu.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>
<noscript>
    <link rel="stylesheet" href="css/trang-chu.min.css">
</noscript>

</head>

<?php
$slides = [
    [
        "image" => "/images/icons/icon_70.webp",
        "alt" => "icon 70",
        "symptom" => "Qua hành vi quan hệ tình dục",
        "complication" => "Đối tác của người bệnh có khả năng bị lây nhiễm virus HPV cao nhất."
    ],
    [
        "image" => "/images/icons/icon_30.webp",
        "alt" => "icon 3",
        "symptom" => "Gián tiếp qua vật dụng mang mầm bệnh",
        "complication" => "Dùng chung vật dụng sinh hoạt với người mang bệnh như khăn mặt, khăn tắm, quần áo, bồn tắm, v.v…"
    ],
    [
        "image" => "/images/icons/icon_18.webp",
        "alt" => "icon 18",
        "symptom" => "Từ mẹ sang con",
        "complication" => "Trẻ sinh thường dễ bị nhiễm HPV từ cổ tử cung, đường sinh môn của người mẹ."
    ],
    [
        "image" => "/images/icons/icon_9.webp",
        "alt" => "icon 70",
        "symptom" => "Qua vết thương hở",
        "complication" => "Virus HPV cũng có thể lây lan qua niêm mạc da bị tổn thương, tới tận biểu mô tế bào đáy."
    ],

];
?>

<body>
    <header class="header">
        <h1 class="header__title">
            BS. VÕ MINH NGUYỄN
        </h1>
    </header>
    <section class="banner">
        <img loading="lazy" src="<?php echo $local ?>/images/banner/banner.webp" alt="...">
    </section>
    <section class="sick">
        <div class="sick__container">
            <div class="sick__container-item">Sùi Màu Gà</div>
            <div class="sick__container-item">Bệnh Lậu</div>
            <div class="sick__container-item">Mụn Rộp</div>
        </div>
    </section>
    <section class="sick">
        <div class="sick__body">
            <div class="sick__body-card">
                Bệnh sùi mào gà là căn bệnh xã hội, lây lan qua hành vi quan hệ tình dục, bản chất là tình trạng tăng sinh của các tế bào biểu bì do lây nhiễm virus HPV (Human Palilama Virus), Virus HPV bao gồm các tuýp 1, 2, 6, 11, 16, 18, 31, 33 và 35. Trong đó bệnh ung thư cổ tử cung ở nữ giới có liên quan tới việc nhiễm HPV tuýp 16 và 18 trong thời gian dài. HPV là một phân tử khá nhỏ với đường kính = 55 nm, thuộc nhóm DNA. Các loại virus HPV được phát hiện có hơn 100 kiểu gen, trong đó có hơn 30 kiểu sẽ lây nhiễm và gây bệnh trên da và niêm mạc của bộ phận sinh dục, và gây ra các loại bệnh. Do bệnh có khả năng lây lan mạnh nên các triệu chứng của bệnh nên được nắm rõ, để không bỏ lỡ thời gian điều trị tốt.
            </div>
        </div>
    </section>

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
                <h5>VÕ MINH NGUYỄN</h5>
            </div>
        </div>
    </section>

    <section class="information">
        <div class="information__bacsi">
            <img loading="lazy" src="<?php echo $local ?>/images/banner/bac_si1.webp" alt="bác sĩ">
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
        <div class="time__body">
            <img width="100%" height="auto" loading="lazy" src="<?php echo $local ?>/images/banner/time.webp" alt="bác sĩ">
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

    <?php include_once "inc/footer.php" ?>