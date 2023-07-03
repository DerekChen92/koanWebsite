<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $main_page = "home";
        foreach (glob("../includes/*.php") as $filename)
            include_once $filename;
        getHead($main_page, '..');
        // getTableCss();
    ?>
</head>

<body>
  <div id="wrapper">

    <?php getHeader($main_page, '..'); ?>

    <section id="maincontent">
      <div class="container">
        
        <?php
            buildTable("./custom/table1.txt");
        ?>

      </div>
      <!-- Messenger 洽談外掛程式 Code -->
    <div id="fb-root"></div>

    <!-- Your 洽談外掛程式 code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "106825818412525");
      chatbox.setAttribute("attribution", "biz_inbox");

      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v12.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/zh_TW/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    </section>
    
    <!-- Footer
 ================================================== -->
    <?php getFooter($main_page); ?>

  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <?php getScripts($main_page); ?>

</body>
</html>
