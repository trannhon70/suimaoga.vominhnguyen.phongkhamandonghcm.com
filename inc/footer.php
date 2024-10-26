
<footer class="footer" >
    <img loading="lazy" src="<?php echo $local ?>/images/banner/footer.webp" alt="...">
    <div class="footer__body" >
        <div class="footer__body-top" >
            <a aria-label="left" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
            <a aria-label="center" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
            <a aria-label="right" href="https://npa.zoosnet.net/LR/Chatpre.aspx?id=NPA46777247&lng=en"></a>
        </div>
        <div class="footer__body-botom" >
            <a aria-label="bottom" href="tel:+0968063109"></a>
        </div>
    </div>
</footer>
<?php include_once 'layout/modalKhuyenMai.php' ?>

<script defer src="<?php echo $local ?>/js/slider.min.js"></script>
<script language="javascript" src="https://npa.zoosnet.net/JS/LsJS.aspx?siteid=NPA46777247&float=1&lng=en"></script>
<script defer >
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
</script>
<script defer >
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
  </script>
</body>
</html>