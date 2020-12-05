<?php
setcookie('thienth-dep-trai', 
            sha1(mktime()), 
            strtotime('+15 days'), 
            '/');
echo "done";



?>