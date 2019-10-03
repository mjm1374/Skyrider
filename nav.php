<?php
$local = $_SERVER['REQUEST_URI'];
?>

<div id="navbar">
    <ul>
        <li><a href="index.php"             class="<?php if ($local == "/index.php") echo "active" ?>">HOME</a></li>
        <li><a href="pilots-profiles.php"   class="<?php if ($local == "/pilots-profiles.php") echo "active" ?>">PILOTS</a></li>
        <li><a href="balloons.php"          class="<?php if ($local == "/balloons.php") echo "active" ?>">BALLOONS</a></li>
        <li><a href="balloons-flights.php"  class="<?php if ($local == "/balloons-flights.php") echo "active" ?>">FLIGHTS</a></li>
        <li><a href="ballooning-faq.php"    class="<?php if ($local == "/balloons-faq.php") echo "active" ?>">FAQs</a></li>
        <li><a href="contact-skyrider.php"  class="<?php if ($local == "/contact-skyrider.php") echo "active" ?>">CONTACT</a></li>
    </ul>
</div>
