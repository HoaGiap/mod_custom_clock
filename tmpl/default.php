<?php
defined('_JEXEC') or die;
$timezone = $params->get('timezone', 'UTC');
date_default_timezone_set($timezone);
$currentDate = date('d/m/Y');
$currentTime = date('H:i:s');
?>

<div class="custom-clock">
    <p >Ngày: <?php echo $currentDate; ?></p>
    <p>Giờ: <span id="clock"><?php echo $currentTime; ?></span></p>
    <select id="timezone-select">
        <option value="UTC">UTC</option>
        <option value="Asia/Ho_Chi_Minh">Ho_Chi_Minh</option>
        <option value="Australia/Sydney">Sydney</option>
        <option value="Africa/Cairo">Cairo</option>
        <option value="Asia/Tokyo">Tokyo</option>
        <option value="Asia/Shanghai">Shanghai</option>
        <option value="Asia/Seoul">Seoul</option>
        <option value="Asia/Kolkata">Kolkata</option>
        <option value="Asia/Dubai">Dubai</option>
        <option value="America/New_York">New_York</option>
        <option value="America/Mexico_City">Mexico_City</option>
        <option value="America/Los_Angeles">Los_Angeles</option>
        <option value="Europe/Paris">Paris</option>
        <option value="Europe/London">London</option>
        <option value="Europe/Madrid">Madrid</option>
        <option value="Europe/Rome">Rome</option>

    </select>
    <button onclick="changeTimezone()">Thay đổi múi giờ</button>
</div>

<script src="<?php echo JUri::base(); ?>modules/mod_custom_clock/assets/js/script.js"></script>
<link rel="stylesheet" href="<?php echo JUri::base(); ?>modules/mod_custom_clock/assets/css/style.css" />