<?php

require_once '../init.php';

set_login(false);

session_destroy();

redirect('./login.php');
