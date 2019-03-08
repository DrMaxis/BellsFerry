<?php

function productImage($path)
{
    return  $path != null && file_exists('storage/' . $path) ? asset('storage/' . $path) : asset('assets/imgs/no-img.jpg');
}