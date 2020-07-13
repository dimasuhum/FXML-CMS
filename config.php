<?php
if(!defined('XMLCMS')) exit();


$offline_message = 'XML портал закрыт на техническое обслуживание.<br />Пожалуйста, зайдите позже.';
$display_offline_message = '0';
$offline_image = '';
$friendly_links=false;
$sitename='FXML CMS - Мой портал';
$sitebackground='http://f0453684.xsph.ru/include/templates/images/fon20.jpg';

$sitecolor='#eeeeee'; //Цвет текста, если пустое то будет использовно системное
$sitechbkg=''; //Фон ссылки при выделении в rgba, если пустое то будет использовно системное, если none то без фона
$sitechcolor='#fa5961'; //Цвет текста ссылки при выделении, если пустое то будет использовно системное
$typelistStart='start'; //Вид главной '' - списком, 'start' - плиткой

$siteicon='http://f0453684.xsph.ru/include/templates/images/logo.png';
$sitepageinfo='Мой портал на FXML CMS';
$siteperpage=50;
$siteurl= 'http://f0453684.xsph.ru'; //without / in end
$secret=md5('38b752b7d467c8fc2622ab12bf2d3305'); // Соль для токенов паролей и авторизаций аккаунтов
$friendly_links=0;
$logo='http://f0453684.xsph.ru/include/templates/images/logo.png';
$host = 'localhost';
$user = 'f0453684_fxml';
$password = 'dima1330';
$db = 'f0453684_fxml';
$dbprefix = 'axml_';