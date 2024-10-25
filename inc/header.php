<?php
ob_start("ob_gzhandler");
header("Timing-Allow-Origin: *");
header("Cache-Control: public, max-age=31536000, must-revalidate");

    $local ='http://localhost/suimaoga.vominhnguyen.phongkhamandonghcm.com'
    // $local ='https://suimaoga.vominhnguyen.phongkhamandonghcm.com'
?>
<!DOCTYPE html>
<html ⚡ lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <meta name="description"
        content="Phòng khám đa khoa chuyên điều trị bệnh nam khoa, bệnh xã hội, da liễu, hậu môn - trực tràng uy tính tại thành phố Hồ Chí Minh">
    <title>Phòng khám đa khoa</title>
   

    <link rel="icon" href="<?php echo $local ?>/images/icons/icon_logo.webp" type="image/x-icon">
    <link rel="preload" href="css/index.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>
    <link rel="preload" href="css/@media.min.css" as="style" onload='this.onload=null,this.rel="stylesheet"'>

    <noscript>
        <link rel="stylesheet" href="css/index.min.css">
        <link rel="stylesheet" href="css/@media.min.css">
    </noscript>