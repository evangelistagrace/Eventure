<?php
$actual_link = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

echo '
 <navbar class="navbar-small">
    <ul class="left">
        <li class="hotline"><img src="img/002-phone-receiver.png">+6018-388-1318</li>
        <li class="email"><img src="img/001-envelope.png">mail@eventure.my</li>
    </ul>

    <ul class="right">
        <li><a href="?logout=1">Log out</a></li>
    </ul>
    </navbar>
'
   
?>