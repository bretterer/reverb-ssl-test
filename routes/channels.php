<?php

use Illuminate\Support\Facades\Broadcast;

Broadcast::channel('site-visit', function () {
    return true;
});
