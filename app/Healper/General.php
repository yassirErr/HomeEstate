<?php

define('PAGINATION_COUNT',8);



function uploadImage($folder,$image){
    $image ->store('/',$folder);
    $filename=$image->hashName();

    return $filename;
}

    