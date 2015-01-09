<?php

/*
 * What protocol to use?
 * mail, sendmail, smtp
 */
$config['protocol'] = 'smtp';
/*
 * SMTP server address and port
 */
$config['smtp_host'] = 'ssl://smtp.googlemail.com';
$config['smtp_port'] = '465';

/*
 * SMTP username and password.
 */
$config['smtp_user'] = 'webdev.comlabsitb@gmail.com';
$config['smtp_pass'] = 'webdev212!';

/*
 * Heroku Sendgrid information.
 */
/*
$config['protocol'] = 'smtp';
$config['smtp_host'] = 'smtp.sendgrid.net';
$config['smtp_port'] = 587;
$config['smtp_user'] = $_SERVER['SENDGRID_USERNAME'];
$config['smtp_pass'] = $_SERVER['SENDGRID_PASSWORD'];
*/
