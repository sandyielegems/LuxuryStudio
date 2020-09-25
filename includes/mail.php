<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once('../PHPMailer/src/Exception.php');
require_once('../PHPMailer/src/PHPMailer.php');
require_once('../PHPMailer/src/SMTP.php');

$mail = new PHPMailer(TRUE);
