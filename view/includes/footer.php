    <footer class="clearfix">
      <?php if(!isset($_GET['url'])) : ?>
        <a href="https://www.instagram.com/pebblesbeachbar/?hl=sr">
          <img src="./assets/icons/instagram.png" alt="instagram logo">
        </a>
        <a href="#">
          <img src="./assets/icons/facebook2.png" alt="facebook logo">
        </a>
    	<?php else : ?>
        <a href="https://www.instagram.com/pebblesbeachbar/?hl=sr">
          <img src="../assets/icons/instagram.png" alt="instagram logo">
        </a>
        <a href="#">
          <img src="../assets/icons/facebook2.png" alt="facebook logo">
        </a>
    	<?php endif; ?>
    </footer>
  </body>
</html>
