<?php
setcookie('thienth-dep-trai', 
            sha1(mktime()), 
            strtotime('-1 second'), 
            '/');
echo "done";