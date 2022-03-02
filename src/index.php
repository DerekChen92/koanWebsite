<!DOCTYPE html>
<html>
    <head>
        <title>展森事業有限公司 | 入口網站</title>
        <meta charset='utf-8'>
        <meta keyword='keywords' content='舞台, 植栽, 園藝, 花海工程, 防汛搶災, 病蟲害防治, 造景, 美化工程, 水土保持, 喬木, 灌木, 養護, 樹木修剪, 環境綠化, 防風林, 展森, 展森事業, 展森事業有限公司, 格安, 
        格安企業, 格安企業有限公司, 舞台搭建, 人力派遣, zhansen, zhan sen, koan, 入口網站, 綠美化, 專業團隊, 專業, 演唱會, 搭舞台, 除草, 景觀, 景觀工程, 草木移植, 草花移植, 草皮養護, 草坪養護, 草皮修剪, 公園綠地, 公園養護, 公園清潔, 工作機會, 專業人才, 園藝人才'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
        <meta name='author' content='Derek Chen'>
        <link href='./assets/css/style.css' rel='stylesheet' type='text/css' media='all'>
    </head>
    <body>
    <?php
    $zhansenPath='./zhansen/';
    $koanPath='./koan/';
    $zhansenLogo='./assets/images/zhansen_logo.png';
    $koanLogo='./assets/images/koan_logo.png';
    $footerInfo='&copy; 2022 - All Rights Reserved - zhansen.com.tw';

    echo  
    "<div class='margin_row'>
    </div>
    <div class='center_box flex_box'>
      <a class='flur_anim' href=$zhansenPath>
        <img src=$zhansenLogo>
      </a>
      <div class='grey_line'></div>
      <a class='flur_anim' href=$koanPath>
        <img src=$koanLogo>
      </a>
    </div>
    <div class='margin_row'>
    </div>
    <div class='footer'>
      <p>
        $footerInfo
      </p>  
    </div>";

    ?>
    </body>
</html>