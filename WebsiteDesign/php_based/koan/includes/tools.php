<?php
    function getPageName($main_page) {
        switch ($main_page) {
            case 'home':
                # code...
                return "首頁";
                break;
            
            case 'introduction':
                # code...
                return "公司簡介";
                break;

            case 'benefits':
                # code...
                return "員工福利";
                break;

            case 'training':
                # code...
                return "教育訓練";
                break;

            case 'jobs':
                # code...
                return "工作機會";
                break;

            case 'contact_us':
                # code...
                return "聯絡我們";
                break;
        default:
                # code...
                break;
        }
    }
?>