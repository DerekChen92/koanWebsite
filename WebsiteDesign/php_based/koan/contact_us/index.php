<!DOCTYPE html>
<!--
Template Name: Cytocean
Author: <a href='http://www.os-templates.com/'>OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
    <?php
        $main_page = 'contact_us';
        foreach (glob('../includes/*.php') as $filename)
            include_once $filename;
        getHead($main_page, '.');
    ?>
</head>
<body id='top'>
    <?php
        getHeadInfo();
        getHeader($main_page);
    ?>
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->  
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- ################################################################################################ -->
      <div class="mapouter two_third">
        <div class="gmap_canvas">
          <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=330%E6%A1%83%E5%9C%92%E5%B8%82%E6%A1%83%E5%9C%92%E5%8D%80%E4%B8%AD%E6%AD%A3%E8%B7%AF366%E8%99%9F&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
          <a href="https://www.online-timer.net"></a>
          <br>
          <style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style>
          <a href="https://www.embedgooglemap.net"></a>
          <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
        </div>
      </div>
      <div class="one_third">
        <table>
          <tr><td>地址: 桃園市桃園區中正路366號7樓之3<br><span style="margin-left:40px">(21世紀大廈)</span></td></tr>
          <tr><td>電話: (03) 350-3085</td></tr>
          <tr><td>傳真: (03) 350-3087</td></tr>
          <tr><td>EMAIL: KOANVIVI@GMAIL.COM</td></tr>
          <tr><td>統一編號: 28801517</td> </tr>
          <tr><td><br></td></tr>
          <tr><td><b>服務時間</b></td></tr>
          <tr><td>星期一  8:30 – 17:30</td></tr>
          <tr><td>星期二  8:30 – 17:30</td></tr>
          <tr><td>星期三  8:30 – 17:30</td></tr>
          <tr><td>星期四  8:30 – 17:30</td></tr>
          <tr><td>星期五  8:30 – 17:30</td></tr>
          <tr><td>星期六  休息</td></tr>
          <tr><td>星期日  休息</td></tr>
        </table>
      </div>

      <!-- ################################################################################################ -->
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>

<?php
    getFooter($main_page);
    getFootInfo($main_page);
?>
<a id='backtotop' href='#top'><i class='fa fa-chevron-up'></i></a>
<?php
    getScripts();
?>
<!-- JAVASCRIPTS -->

</body>
</html>