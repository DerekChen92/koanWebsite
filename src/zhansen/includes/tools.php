<?php
    function getPageName($main_page) {
        switch ($main_page) {
            case "home":
                return "首頁";
                break;
            
            case "services":
                return "服務項目";
                break;
    
            case "products":
            case "products_details":
                return "作品展示";
                break;
    
            case "jobs":
                return "工作機會";
                break;
    
            case "contact_us":
                return "聯絡我們";
                break;

    
            default:
                # code...
                return $main_page;
                break;
        }
    }
