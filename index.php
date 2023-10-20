<?php

define('APP_ROOT', __DIR__);
define('NO_CACHE', 1);

require "./lib/fw.php";

set_view('/', 'home');
set_view('/get-started', 'get-started');
set_view('/get-started/dotnet', 'get-started-dotnet');
set_view('/get-started/cli', 'get-started-cli');
set_view('/options', 'options');
set_view('/roadmap', 'roadmap');

router_execute();
