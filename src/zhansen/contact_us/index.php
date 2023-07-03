<!DOCTYPE html>
<html lang="en">

<head>
  <?php
  $main_page = "contact_us";
  foreach (glob("../includes/*.php") as $filename)
    include_once $filename;
  getHead($main_page, '..');
  ?>
</head>


<body>
  <div id="wrapper">
    <?php
    getHeader($main_page, '..');
    getSubintro($main_page);
    ?>

    <section id="maincontent">
      <div class="container">
        <div class="row">
          <div class="span4">
            <aside>
              <div class="widget">
                <h4 class="rheading">聯絡我們<span></span></h4>
                <ul>
                  <li><label><strong>電話 : </strong></label>
                    <p>
                      (03) 350-3085
                    </p>
                  </li>
                  <li><label><strong>傳真 : </strong></label>
                    <p>
                      (03) 350-3087
                    </p>
                  </li>
                  <li><label><strong>Email : </strong></label>
                    <p>
                      op@koanltd.com
                    </p>
                  </li>
                  <li><label><strong>地址 : </strong></label>
                    <p>
                      桃園市桃園區中正路366號 (21世紀大廈)
                    </p>
                  </li>
                  <li><label><strong>統一編號 : </strong></label>
                    <p>
                      28801517
                    </p>
                  </li>
                  <li><label><strong>服務時間 : </strong></label>
                    <table>
                      <tr>
                        <td>星期一 8:30 – 17:30</td>
                      </tr>
                      <tr>
                        <td>星期二 8:30 – 17:30</td>
                      </tr>
                      <tr>
                        <td>星期三 8:30 – 17:30</td>
                      </tr>
                      <tr>
                        <td>星期四 8:30 – 17:30</td>
                      </tr>
                      <tr>
                        <td>星期五 8:30 – 17:30</td>
                      </tr>
                      <tr>
                        <td>星期六 休息</td>
                      </tr>
                      <tr>
                        <td>星期日 休息</td>
                      </tr>
                    </table>
                  </li>
                </ul>
              </div>

              <!-- <div class="widget">
                <h4 class="rheading">Find us on social networks<span></span></h4>
                <ul class="social-links">
                  <li><a href="https://www.facebook.com/ZhanSenCoLtd/" title="Facebook"><i class="icon-square icon-32 icon-facebook"></i></a></li>
                  <li><a href="https://lin.ee/EhGgn9T" style="margin-left:3px;"><i><img src="./assets/ico/line_icon.png" style="width:30px; height:31px;"></i></a>

                </ul>
              </div> -->

            </aside>
          </div>
          <div class="span8">
            <iframe src="https://maps.google.com/maps?q=330%E6%A1%83%E5%9C%92%E5%B8%82%E6%A1%83%E5%9C%92%E5%8D%80%E4%B8%AD%E6%AD%A3%E8%B7%AF366%E8%99%9F&t=&z=17&ie=UTF8&iwloc=&output=embed" width="100%" height="715" frameborder="0" style="border:0" allowfullscreen></iframe>

            <div class="spacer30">
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- Footer
 ================================================== -->
    <?php
    getFooter($main_page);
    ?>

  </div>
  <!-- end wrapper -->
  <a href="#" class="scrollup"><i class="icon-chevron-up icon-square icon-48 active"></i></a>

  <?php getScripts($main_page); ?>

</body>

</html>