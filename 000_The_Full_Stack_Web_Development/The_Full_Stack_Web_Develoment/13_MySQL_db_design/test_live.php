<script>
window.location = "http://<?php
$ip = file_get_contents('../server_ip');
echo $ip;
?>/phpmyadmin";
</script>
