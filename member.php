<?php
function member()
{
    $member = array('khairil','jamil',);
    $random_member = $member[mt_rand(0, sizeof($member) - 1)];
    return $random_name;
}
$is = member();
echo$is ;
