<?php

function randFileName()
{
    return md5(time() . mt_rand(1000000000, 9999999999));
}