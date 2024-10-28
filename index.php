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
    <div id="content-placeholder" class="content-placeholder" >

    </div>
   
    
   <div id="body-placeholder" class="body-placeholder" >

   </div>

    <?php include_once "inc/footer.php" ?>