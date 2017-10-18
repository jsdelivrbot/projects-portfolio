<script>
window.location = "http://<?php
$ip = file_get_contents('../../server_ip');
echo $ip;
?>:<?php 
$port = file_get_contents('./port');
echo $port;
?>";
</script>