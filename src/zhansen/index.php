<!DOCTYPE html>
<html lang="en">

<head>
    <?php 
        $main_page = "home";
        foreach (glob("./includes/*.php") as $filename)
            include_once $filename;
        getHead($main_page, '.');
    ?>
</head>

<body>
  <div id="wrapper">

    <?php getHeader($main_page, '.'); ?>

    <section id="intro">
      <div class="container">
        <div class="row">
          <div class="span12">
            <!-- Place somewhere in the <body> of your page -->

            <div id="mainslider" class="flexslider">

              <ul class="slides">

                <?php
                  /*For customize your slides, put slide image in ./custom/slides/ directory and name it img#.jpg
                  also you need the image instruction text which need to put in the same directory and name ite info#.txt with same number
                  make sure every image with an info file*/
                  $total_img = count(glob("./custom/slides/img*.jpg"));
                  for($i = 1; $i <= $total_img; $i++) {
                    $info = fopen("./custom/slides/info$i.txt", "r");
                    echo "
                    <li data-thumb='./custom/slides/img$i.jpg'>
                      <img src='./custom/slides/img$i.jpg' alt='' />
                      <div class='flex-caption success'>
                        <h2>".fgets($info)."</h2>
                        <p>".fgets($info)."</p>
                      </div>
                    </li>
                    ";
                    fclose($info);
                  }
                ?>

              </ul>
            </div>
          </div>
        </div>
      </div>

    </section>
    <section id="maincontent">
      <div class="container">
        
        <?php
          /* name the article as text#.txt and image as img#.jpg
              Different text file referes to different paragraph.
          */
          $total_txt = count(glob("./custom/article/*.txt"));
          for ($i = 1; $i <= $total_txt; $i++) {
            $text = fopen("./custom/article/text$i.txt", "r");
            echo "<div class='row'>";
            if (file_exists("./custom/article/img$i.jpg")) {
              # switch paragraph's text and img position
              if ($i % 2 == 1) {
                echo "<div class='span6 about_us'>";
                while (!feof($text)) {
                  echo "&emsp;&emsp;".fgets($text)."<br>";
                }
                echo "</div>";
                echo "<img class='span6' src='./custom/article/img$i.jpg'>";
              } else {
                echo "<img class='span6' src='./custom/article/img$i.jpg'>";
                echo "<div class='span6 about_us'>";
                while (!feof($text)) {
                  echo "&emsp;&emsp;".fgets($text)."<br>";
                }
                echo "</div>";
              }
            } else {
              # if there is no img with associate number, spread the text contents
              echo "<div class='span12 about_us'>";
              while (!feof($text)) {
                echo "&emsp;&emsp;".fgets($text)."<br>";
              }
              echo "</div>";
            }
            echo "</div>";
            fclose($text);
          }
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
