<?php

// active navbar links
function isActive($path) {
    return Request::is($path) ? 'active' : '';
}

// function input require
// return string: highlight require input with red star in labels
function req(){
    return '&nbsp; <span class="red">*</span> &nbsp;';
}
