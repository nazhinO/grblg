<div class="footer" id="footer1">
  <div class="footer-content">
    <div class="footer-section links">
      <h2>Quick Links</h2>
      <br>
      <ul>
        <?php
          require_once('/opt/lampp/htdocs/grblg/includes/dbh.inc.php');
          
          $sql = "SELECT * FROM link WHERE linkID = '1';";
          $execute = mysqli_query($conn, $sql);
          $postData = mysqli_num_rows($execute);
          if($postData > 0){
              while($row = mysqli_fetch_array($execute)){ 
                  $instagram = $row['linkInstagram'];
                  $twitter = $row['linkTwitter'];
                  $facebook = $row['linkFacebook'];
                }
              }
        ?>
        <a href="<?php echo $instagram; ?>" target="_blank" rel="noopener noreferrer">
          <li>Instagram</li>
        </a>
        <a href="<?php echo $twitter; ?>" target="_blank" rel="noopener noreferrer">
          <li>Twitter</li>
        </a>
        <a href="<?php echo $facebook; ?>" target="_blank" rel="noopener noreferrer">
          <li>Facebook</li>
        </a>
        <!-- <a href="#">
          <li>Terms and Conditions</li>
        </a> -->
      </ul>
    </div>

    <div class="footer-section contact-form">
      <h2>Contact us</h2>
      <br>
      <form action="index.html" method="post">
        <input type="email" name="email" class="text-input contact-input" placeholder="Your email address...">
        <textarea rows="4" name="message" class="text-input contact-input" placeholder="Your message..."></textarea>
        <button type="submit" class="btn btn-big contact-btn">
          <i class="fas fa-envelope"></i>
          Send
        </button>
      </form>
    </div>

  </div>

  <div class="footer-bottom">
    &copy; QueenCasino
  </div>
</div>


  <!-- // footer -->


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="/grblg/js/scripts.js"></script>

  <!-- responsive navigation -->
  <script>

  var settingLinks = document.getElementById("settingLinks");

  function showMenu(){
    settingLinks.style.left = "0";
  }
  
  function hideMenu(){
    settingLinks.style.left = "-60%";
  }
  
</script>

<!-- Richtexteditor -->
<script type="text/javascript" src="/grblg/js/richtexteditor/rte.js"></script>
<script type="text/javascript" src='/grblg/js/richtexteditor/plugins/all_plugins.js'></script>
<script>
  var editor1 = new RichTextEditor("#div_editor1");
  //editor1.setHTMLCode("Use inline HTML or setHTMLCode to init the default content.");
</script>

</body>

</html>
