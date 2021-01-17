<?php
function getName()
{
    $names = array('khairil','jamil',);
       $random_name = $names[mt_rand(0, sizeof($names) - 1)];
    return $random_name;
}
$is = member();
echo$is;
