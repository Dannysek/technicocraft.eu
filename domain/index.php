<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=windows-1251"> 
<script type="text/javascript">try{if(!window.CloudFlare){var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/acv=4125811108/"},atok:"810a76532e4336ba8c0023d0825a8336",petok:"c776d858f630b494a75c7600e7147102-1386511226-1800",zone:"futurecraft.ru",rocket:"a",apps:{}}];CloudFlare.push({apps:{ape:"daa36ce209fe396030abf7372f064dcf"}});document.write('
<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/acv=616370821/cloudflare.min.js">\x3c/script>')}}catch(e$$12){};
</script>


<link rel="stylesheet" href="style.css" type="text/css" media="screen" charset="utf-8">
<script type="text/rocketscript" data-rocketsrc="./jquery-1.8.3.min.js">
</script>
<script type="text/rocketscript">imageDir = "http://mvcreative.ru/example/6/2/snow/";sflakesMax = 65;sflakesMaxActive = 65;svMaxX = 2;svMaxY = 6;ssnowStick = 1;ssnowCollect = 0;sfollowMouse = 1;sflakeBottom = 0;susePNG = 1;sflakeTypes = 5;sflakeWidth = 15;sflakeHeight = 15;
</script>
<script type="text/rocketscript" data-rocketsrc="http://mvcreative.ru/example/6/2/snow.js">
</script>
<script type="text/rocketscript" data-rocketsrc="http://bootstrap-ru.com/assets/js/bootstrap-popover.js">
</script>
<script type="text/rocketscript" data-rocketsrc="http://bootstrap-ru.com/assets/js/bootstrap-tab.js">
</script>
<script data-rocketsrc="http://bootstrap-ru.com/assets/js/bootstrap-collapse.js" type="text/rocketscript">
</script>
<script type="text/rocketscript" data-rocketsrc="http://futurecraft.ru/js/bootstrap.min.js">
</script>

<link href="http://futurecraft.ru/css/bootstrap.min.css" rel="stylesheet" media="screen">

<link rel="shortcut icon" href="http://futurecraft.ru/favicon.ico">
<script type="text/rocketscript" data-rocketsrc="js/jquery.dropDown.pack.js">
</script>
<script type="text/rocketscript">$(document).ready(function(){$('ul#nav').NavDropDown({duration:300,hoverElement:'li',hoverClass:'hover',dropHolder:'div',showEffect:'slide' // slide, fade, slide&fade});});
</script>
<script type="text/rocketscript" data-rocketsrc="http://futurecraft.ru/core2.js?ver=15" charset="utf-8">
</script>
<script type="text/rocketscript" data-rocketsrc="//vk.com/js/api/openapi.js?75">
</script>
<script type="text/rocketscript" data-rocketsrc="js/jquery.nivo.slider.pack.js">
</script>
<script type="text/rocketscript">$(window).load(function() {$('#slider').nivoSlider();});
</script>
<script type="text/rocketscript">$(document).ready(function(){$(".btn-slide").click(function(){$("#panel").slideToggle("slow");$(this).toggleClass("active"); return false;});});
</script>
<title>FutureCraft
</title>
</head>


<body style="font-size:12px;line-height:normal">

<div id='body_top'>

<div id='body_bottom'>

<div id='wrapper'>

<div style="background:url(design_img/header_bg_happy.jpg) no-repeat" id='header'>

<div id="panel"><a href="./reg">Регистрация</a>&nbsp;&nbsp;<a href="./rememberpassword">Забыли пароль?</a>
<br>
<label style="display:none" class="authnick">
</label>

<div class="alert alert-error" style="display:none" id="loginform_error_text"> 
</div>Логин:
<br>
<input id="auth_login" name="login" type="text">
<br>Пароль:
<br>
<input id="auth_pass" name="pass" type="password">
<br><center><button id="login" onClick="save_auth()">Вход</button></center>
</div>

<span class="slide" id='login_button'><a href="#" class="btn-slide">Авторизация</a>
</span>
<script type="text/rocketscript">var get_login = get_cookie('t_login');var get_pass = get_cookie('t_pass');var get_reg_login = get_cookie('reg_login');var get_reg_pass = get_cookie('reg_pass');var get_reg_status = get_cookie('reg_done');if(get_pass !== null & get_login !== null){$('#auth_login')[0].value = get_login;$('#auth_pass')[0].value = get_pass;}$(window).load(function() {if(get_reg_status=="yes"){var name = "reg_done";var tmp = "no";expires = new Date();expires.setTime(expires.getTime() + (1000 * 86400 * 365));set_cookie(name, tmp, expires);$('#auth_login')[0].value = get_reg_login;$('#auth_pass')[0].value = get_reg_pass;$('#login')[0].click();}});function save_auth(){var name = "t_login";var tmp = $('#auth_login')[0].value;expires = new Date();expires.setTime(expires.getTime() + (1000 * 86400 * 365));set_cookie(name, tmp, expires);var name = "t_pass";var tmp = $('#auth_pass')[0].value;expires = new Date();expires.setTime(expires.getTime() + (1000 * 86400 * 365));set_cookie(name, tmp, expires);}function set_cookie(name, value, expires){if (!expires){expires = new Date();}document.cookie = name + "=" + escape(value) + "; expires=" + expires.toGMTString() + "; path=/";}function get_cookie(name){cookie_name = name + "=";cookie_length = document.cookie.length;cookie_begin = 0;while (cookie_begin < cookie_length){value_begin = cookie_begin + cookie_name.length;if (document.cookie.substring(cookie_begin, value_begin) == cookie_name){var value_end = document.cookie.indexOf (";", value_begin);if (value_end == -1){value_end = cookie_length;}return unescape(document.cookie.substring(value_begin, value_end));}cookie_begin = document.cookie.indexOf(" ", cookie_begin) + 1;if (cookie_begin == 0){break;}}return null;}
</script>
</div>

<div id='logo'><a href="/"><img src="design_img/logo.jpg" alt=""></a>
</div>

<div id='menu'>

<div id='menu_p'>
<ul id="nav">
<li><a href="./" id='menu_main'>Главная</a></li>
<li><a href="http://fc.iff.su/" id='menu_forum'>Форум</a>

<div>
<ul>
<li><a href="./">FutureCraft</a></li>
<li><a href="#">Игровые сервера</a></li>
<li><a href="#">Гайды и статьи</a></li>
<li><a href="#">Жалобы</a></li>
</ul>
</div></li>
<li><a href="./start" id='menu_start'>Как начать игру</a></li>
<li><a href="http://fc.iff.su/index.php?forums/223/" id='menu_about'>Описание серверов</a></li>
<li><a href="./donat" id='menu_donate'>Донат</a></li>
<li><a href="./regulations" id='menu_rules'>Правила</a></li>
<li><a href="./info" id='menu_agreement'>Информация</a></li>
</ul>
</div>

<div id='reg_p'><a href="./reg"></a>
</div>
</div>

<div id='content'>

<div id='content_top'>

<div id='content_bottom'>

<div id='right'>

<div id='online_title'>Игровой онлайн
</div>

<div class='block'>

<div class='block_top'>

<div class='block_bottom'>
<br><center><b>FUTURECRAFT SERVERS </b></center>
<br>

<div class='server'>

<div class='server_title'>

<div class='s_online'>100
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr2" onmouseover="$('#hd_sr2').popover('show')" onmouseout="$('#hd_sr2').popover('hide')" data-content="Статус: 100/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 2 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaTech #1 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaTech #1 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>95
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr3" onmouseover="$('#hd_sr3').popover('show')" onmouseout="$('#hd_sr3').popover('hide')" data-content="Статус: 95/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 3 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaTech #2 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaTech #2 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:95%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>96
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr4" onmouseover="$('#hd_sr4').popover('show')" onmouseout="$('#hd_sr4').popover('hide')" data-content="Статус: 96/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 4 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaTech #3 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaTech #3 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:96%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>85
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr5" onmouseover="$('#hd_sr5').popover('show')" onmouseout="$('#hd_sr5').popover('hide')" data-content="Статус: 85/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 5 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaTech #4 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaTech #4 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:85%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>91
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr6" onmouseover="$('#hd_sr6').popover('show')" onmouseout="$('#hd_sr6').popover('hide')" data-content="Статус: 91/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 6 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaTech #5 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaTech #5 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:91%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>100
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr7" onmouseover="$('#hd_sr7').popover('show')" onmouseout="$('#hd_sr7').popover('hide')" data-content="Статус: 100/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 7 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaUltimate #1 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaUltimate #1 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>100
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr10" onmouseover="$('#hd_sr10').popover('show')" onmouseout="$('#hd_sr10').popover('hide')" data-content="Статус: 100/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 7 
<br>Расположен на: sr4 " data-html="true" data-original-title="UltimateTech #1 PvP "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>UltimateTech #1 PvP 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>75
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr10" onmouseover="$('#hd_sr10').popover('show')" onmouseout="$('#hd_sr10').popover('hide')" data-content="Статус: 75/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 7 
<br>Расположен на: sr4 " data-html="true" data-original-title="UltimateTech #2 PvP "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>UltimateTech #2 PvP 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:75%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>150
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr10" onmouseover="$('#hd_sr10').popover('show')" onmouseout="$('#hd_sr10').popover('hide')" data-content="Статус: 150/150 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 7 
<br>Расположен на: sr4 " data-html="true" data-original-title="UltimateTech #3 PvP "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>UltimateTech #3 PvP 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>OFF
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr8" onmouseover="$('#hd_sr8').popover('show')" onmouseout="$('#hd_sr8').popover('hide')" data-content="Статус: Отключен 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 8 
<br>Расположен на: sr1 " data-html="true" data-original-title="Atlantis "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>Atlantis 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>OFF
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr11" onmouseover="$('#hd_sr11').popover('show')" onmouseout="$('#hd_sr11').popover('hide')" data-content="Статус: Отключен 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 11 
<br>Расположен на: sr6 " data-html="true" data-original-title="RPG "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>RPG 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>
<br><center><b>CH1BA SERVERS </b></center>
<br>

<div class='server'>

<div class='server_title'>

<div class='s_online'>84
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr42" onmouseover="$('#hd_sr42').popover('show')" onmouseout="$('#hd_sr42').popover('hide')" data-content="Статус: 84/100 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 11 
<br>Расположен на: sr6 " data-html="true" data-original-title="MagicWorld #1 (Wait..) "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>MagicWorld #1 (Wait..) 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:84%">
</div>
</div>
</div>
<br><center><b>EVGEXA SERVERS </b></center>
<br>

<div class='server'>

<div class='server_title'>

<div class='s_online'>OFF
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr43" onmouseover="$('#hd_sr43').popover('show')" onmouseout="$('#hd_sr43').popover('hide')" data-content="Статус: Отключен 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 9 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaTech #6 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaTech #6 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>

<div class='server'>

<div class='server_title'>

<div class='s_online'>OFF
</div>

<div class='s_icons'><a href="#" rel="popover" id="hd_sr44" onmouseover="$('#hd_sr44').popover('show')" onmouseout="$('#hd_sr44').popover('hide')" data-content="Статус: Отключен 
<br>Владелец: FC
<br>Управляющий: TAXD
<br>FCID: 9 
<br>Расположен на: sr4 " data-html="true" data-original-title="NovaTech #7 "><img src="design_img/icon.png" alt=""></a>
</div>

<div class='s_name'>NovaTech #7 
</div>
</div>

<div class='bar_bg'>

<div class='bar' style="width:100%">
</div>
</div>
</div>

<div id='total'>Общий онлайн: 976/1050
</div>
</div>
</div>
</div>

<div id='vk_title'>Вконтакте
</div>

<div class='block'>

<div class='block_top'>

<div class='block_bottom'>

<div id='vk_module'><center>

<div id="vk_groups">
</div>
<script type="text/rocketscript">VK.Widgets.Group("vk_groups", {mode: 2, width: "200", height: "300"}, 12026995);
</script></center>
</div>
</div>
</div>
</div>
</div>

<div id='left'>

<div id='left_bg'>

<div id='left_top_bg'>

<div id='left_bottom_bg'>
<hr><center>

<div class="alert alert-error" style="display:none" id="form_error_text"> 
</div></center>

<div class='news'>

<div class='news_title'><a href="#">Набор в команду FutureCraft</a>
</div>

<div class='news_img'><a href="#"><img src="https://pp.vk.me/c320629/v320629992/5df3/ZOITc6z60o0.jpg" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>Над нашим проектом для вас трудятся большое кол-во людей, на данный момент команда проекта FutureCraft насчитывает более 100 человек. Мы выбирает лучшие заявки и берём только знающих людей, которые любят работать в команде, получать от этого удовольствие и делать проект лучше с каждым днём.
<br>
<br>Наша команда выполнила за несколько месяцев все наши многочисленные обещания. Начиная от стабильности проекта и заканчивая большим кол-вом собственных разработок и онлайном.
<br>
<br>Но с каждый днём проект растёт и нам нужно больше людей. Каждый на нашем проекте может сделать карьеру начиная от хэлпера и заканчивая администратором который получает хорошую зарплату, все администраторы проекта тому пример.
<br>
<br>Если у вас есть желание стать частью нашей команды и попробовать свои силы в работе в команде и карьерном росте - мы будем рады вашей заявки на должность хэлпера ( именно с этой должности начинали все текущие администраторы ), далее всё зависит от вас, вы можете стать модератором, управляющим а затем и администратором, зависит только от вашей целеустремленности.
<br>
<br>Если вас это заинтересовало, то вот несколько шагов которые нужно пройти чтобы присоединиться к команде проекта FC:
<br>1. Отправить заявку в тикет-систему ( http://futurecraft.ru/support.php ) используя этот шаблон - http://fc.iff.su/index.php?threads/8694/
<br>2. Пройти собеседование в Skype
<br>3. Готово! Вы восхитительны!
<br>
<br>Приятной игры на FC!
<br>
<br>P.S. <b>Все новости проекта публикуются в нашей группе VK чаще чем на сайте, поэтому советуем подписаться на нашу группу чтобы быть в курсе событий которые происходят на проекте (<a href="https://vk.com/futurecraft">Мы в VK</a>)</b>
</div>

<div class='news_info'>Дата: 07.12.2013

<span>
</span>Просмотров: 154835

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>

<div class='news'>

<div class='news_title'><a href="#">Открытие UltimateTech с DivineRPG и обновление доната на NovaTech серверах</a>
</div>

<div class='news_img'><a href="#"><img src="https://pp.vk.me/c322923/v322923992/5b68/yZ3KkIIprvM.jpg" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>- Обновлены возможности платных групп на NovaTech серверах (Добавлены киты)
<br>
<br>- Сервер UltimateTech #1 PvP был доделан, обновлён мод DivineRPG (Вайпа не было и не будет), теперь отображается полоска из дивайнрпг, также обновлены некоторые плагины. Уже доступна покупка платных групп VIP/PRO/PREMIUM (Их описание появится на сайте в ближайшее время, пока-что можем сказать что возможности будут примерно такие-же как на новатеч серверах).
<br>
<br>- С сервера UltimateTech #1 PvP был снят статус "Beta". Веб-магазин также скоро будет доступен на этом сервере, мы обязательно вам сообщим когда появятся товары.
<br>
<br>- На NovaTech серверах был разрешён лазер и некоторые другие предметы необходимые для крафта
<br>
<br>- Как только мы убедимся что сервер UltimateTech #1 работает стабильно и интересен вам, мы откроем ещё несколько серверов на этой сборке. Сервера UltimateTech будут разделены на PvP (С неотключаемым PvP) и PvE (с PvP по желанию)
<br>
<br>
<br>
<br>Приятной игры на FC!
<br>
<br>P.S. <b>Все новости проекта публикуются в нашей группе VK чаще чем на сайте, поэтому советуем подписаться на нашу группу чтобы быть в курсе событий которые происходят на проекте (<a href="https://vk.com/futurecraft">Мы в VK</a>)</b>
</div>

<div class='news_info'>Дата: 26.11.2013

<span>
</span>Просмотров: 95835

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>

<div class='news'>

<div class='news_title'><a href="#">Исправление последних проблем FCv8</a>
</div>

<div class='news_img'><a href="#"><img src="https://pp.vk.me/c419422/v419422414/d1a6/e-Us3otjX30.jpg" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>Сейчас был исправлен серьёзный баг, из-за которого у многих из вас "лагал" клиент. Приносим свои извинения за предоставленные неудобства! Больше таких лагов у вас быть не должно.
<br>P.S. Чтобы наверняка избавиться от лагов зайдите в настройки лаунчера и укажите там 1024МБ для выделения RAM MineCraft'y. Это на 100% защитит вас от лагов при хорошем компьютере.
<br>
<br>Приятной игры и ещё раз приносим свои извинения!
<br>
<br>P.S. NovaUltimate и NovaMagic сервера будут открыты на днях!
</div>

<div class='news_info'>Дата: 26.11.2013

<span>
</span>Просмотров: 95835

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>

<div class='news'>

<div class='news_title'><a href="#">Открытие серверов и исправление ошибок клиента</a>
</div>

<div class='news_img'><a href="#"><img src="http://cdn2.planetminecraft.com/files/resource_media/screenshot/1234/future-craft_3388213.jpg" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>Все наши старые сервера (За исключением U-t серверов и MagicWorld'a) открыты и уже работают на новой версии MC 1.6.4 (FCv8).
<br>
<br>Также мы исправили все известные баги со входом в игру. Если у вас не работал лаунчер/клиент на NovaTech серверах просто перезапустите его, проблемы должны исчезнуть.
<br>P.S. Если у вас возникают ошибки в лаунчере то они решаются следующим образом:
<br>- Удалением всего клиента FutureCraft (находится в C://User/Имя/AppData/Roaming, перейти туда можно из лаунчера, нажав кнопку "Директория клиента").
<br>- Отключение анти-вирусника (Если есть)
<br>- Запуск лаунчера от имени адмиинстратора
<br>
<br>Т.к. все сервера были переименованы выкладываем этот список, чтобы не было путаницы. Все ваши VIP/PRO/PREMIUM статусы перенесены со старых серверов на новые по следующий схеме:
<br>FC Servers:
<br>HiTech #1 » NovaTech #1
<br>HiTech #2 » NovaTech #2
<br>HiTech #3 » NovaTech #3
<br>HiTech #4 » NovaTech #4
<br>HiTech #5 » NovaTech #5
<br>UltimateTech #1 » NovaUltimate #1 [Ещё не открыт]
<br>
<br>Evgexa Servers:
<br>HiTech #6 » NovaTech #6
<br>UltimateTech #3 » NovaTech #7
<br>
<br>Ch1ba Servers:
<br>MagicWorld #1 » MagicWorld #1 [Ещё не открыт]
<br>
<br>Shurik Servers:
<br>Сожалеем, но все сервера Shurik'a закрыты по решению их владельца (Shurik'a). Если вы покупали VIP/PRO/PREMIUM статусы на серверах HiTech #6 или UltimateTech #2 - напишите в тех. поддержку и мы вернём вам часть монет на ваш личный счёт в личном кабинете. (Тоже самое касается и сервера SandBox #1)
<br>
<br>Приятной игры на FC!
<br>P.S. NovaUltimate будет открыт на днях. Также скоро нас ждёт открытие развлекательных серверов. :)
</div>

<div class='news_info'>Дата: 21.11.2013

<span>
</span>Просмотров: 95835

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>

<div class='news'>

<div class='news_title'><a href="#">Переход всех серверов на FCv8 и другие новости</a>
</div>

<div class='news_img'><a href="#"><img src="http://cs540108.vk.me/c418624/v418624313/8410/YOPVsx2BPog.jpg" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>1. Начался плавный переход всех наших серверов на 1.6.4 (FCv8).
<br>
<br>Сервера NovaTech это тебе HiTech'и только на новой сборке. Т.е. если у вас есть VIP статус на сервере HiTech #1 то он автоматически перемещён на сервер NovaTech #1. Таким образом в течении 10-ти дней все хайтечи перейдёт на новую версию а старые будут закрыты. 
<br>
<br>Аналоги серверов UltimateTech и MagicWorld будут открыты чуть позже.
<br>
<br>Т.е. в течении 10-ти дней у нас не останется серверов на версии 1.5.2 (FCv7) и все сервера (и с ними ваши платные группы) перейдут на новые, интересные, сервера на версии 1.6.4.
<br>Скоро будет больше информации об обновлении, следите за новостями.
<br>
<br>2. Новый лаунчер и интересные модули. Как вы знаете, на версии FCv8 мы вновь добавили микрофон, также скоро появится модуль регионов и некоторые другие.
<br>
<br>Мы знаем что текущий лаунчер работает не у всех и не совсем стабильно, но уже совсем скоро мы завершим разработку совершенно нового лаунчера. Он намного удобней, комфортней, стабильней и более хорошо защищён он взломов + добавлено несколько новых методов защиты нашего игрового клиента.
<br>
<br>3. Уменьшение доната. Мы идём в сторону уменьшения влияния доната на экономику. В обновлении FCv8 на основных серверах у VIP/PRO/PREMIUM игроков отсутствуют какие-либо киты. Таким образом, покупая платную группу, вы получаете огромное кол-во возможностей, но не получаете ресурсов. Нам кажется что слишком "жирные" киты - это очень плохо, пора с этим покончить, ибо теряется какой-либо интерес к игре когда у вас сундуки наполненные алмазами.
<br>
<br>Это лишь первая часть изменений которая вас ждёт в ближайшее время. Остальными поделимся когда придёт время, вас ждут очень приятные сюрпризы.
<br>
<br>Спасибо за то, что вы с нами, приятной игры на FC!
</div>

<div class='news_info'>Дата: 30.10.2013

<span>
</span>Просмотров: 649142

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>

<div class='news'>

<div class='news_title'><a href="#">FCv8 и обновление платных групп</a>
</div>

<div class='news_img'><a href="#"><img src="http://transvagonpark.ru/site/pictures/minecraft1.png" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>На днях стал доступен новый клиент на версии MineCraft 1.6.4, обновление получило название "FCv8".
<br>Скорее всего, все наши сервера на версии 1.6.4 будут подключены к единому лобби-серверу (который уже доступен).
<br>В лобби-сервере уже доступен новый сервер "Atlantis", также скоро будут доступно множество развлекательных серверов, а также RPG сервер.
<br>
<br>Были обновлены платные группы на HiTech и UltimateTech (<a href="./donat">Ознакомиться с новыми возможностями VIP, PRO и Premium игроков</a>)
<br>
<br>Приятной игры на FC!
</div>

<div class='news_info'>Дата: 30.10.2013

<span>
</span>Просмотров: 649142

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>

<div class='news'>

<div class='news_title'><a href="#">Тикет-система и The Grand Building I</a>
</div>

<div class='news_img'><a href="#"><img src="http://cs408921.vk.me/v408921992/2e05/7TYyKodSlGg.jpg" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>Несколько новостей:
<br>Закрыты все разделы "Предложения, жалобы, заявки на должность хэлпера" и подобные в группе и на форуме. Теперь для этих целей, пожалуйста, используйте тикет-систему:
<br><a href="http://futurecraft.ru/support.php">http://futurecraft.ru/support.php</a>
<br>А также принимайте участие в конкурсе TGB ^^
<br><a href="http://www.youtube.com/watch?v=4Z9Wnwojfb4">- Анонс конкурса на FCTV</a>
<br><a href="http://fc.iff.su/index.php?threads/the-grand-building-%E2%85%A0.8733/">- Принять участие</a>
<br>Приятной игры на FC!
</div>

<div class='news_info'>Дата: 06.10.2013

<span>
</span>Просмотров: 478514

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>

<div class='news'>

<div class='news_title'><a href="#">Обновление FCv7 завершено!</a>
</div>

<div class='news_img'><a href="#"><img src="http://cs316724.vk.me/v316724780/8b68/07pVUaC5Oz8.jpg" alt=""></a>
</div>

<div class='news_text'>Уважаемые игроки!
<br>
<br>Приносим свои извинения за длительный застой на проекте.
<br>
<br>Хочу сказать от лица администрации проекта что нами было проделано огромное кол-во работы и мы близки к завершению самого масштабного и самого долгого обновления в истории проекта.
<br>
<br>Вы часто ругаете проект, причем обоснованно, но учтите один момент. За кулисами проекта произошло кое-что из-за чего мы так долго всё это делали. Ушел администратор Matrix, который занимался до этого всей технической частью. Но как оказалось - незаменимых людей не бывает.
<br>
<br>Мы благодарны игрокам которые оставались с нами несмотря на такое большое кол-во проблем. Спасибо вам. И приятной игры на FutureCraft!
<br>
<br>P.S. Обновление FCv7 почти завершено, подводя итоги хочу привести список изменений:
<br>- Разработан (студией DKArts [ http://dkarts.ru/project.php?id=139 ] ) дизайн и логотип проекта.
<br>- Найдено большое кол-во партнеров, в данный момент сервера готовы пропиарить на суммарную аудиторию более полумиллиона человек
<br>- Новый лаунчер с защитой, написан с 0
<br>- Новый клиент с защитой, написан с 0
<br>- Новая серверная часть, написана с 0
<br>- Сайт частично переписан, изменены некоторые модули
<br>- Ядро сервера, частично переписано с 0
<br>- Добавлена и проработана партнерская программа для крупных сообществ и ютуберов.
<br>- Будет проведен ребрендинг
<br>- Полностью пересмотрен админ-состав проекта
<br>- Все модераторы/управляющие теперь получают ЗП
<br>- Появились GameManager'ы
<br>- Изменена донат-система
<br>- Изменены ID/названия/сборки всех серверов
<br>- Исправлено большинство известных внутриигровых проблем
<br>- Написано несколько плагинов, одни защищают сервера от читеров/дюпов а другие помогают игрокам комфортно играть на проекте
<br>- Всем были возвращены деньги за платные группы купленные до обновления проекта
<br>
<br>Возможно было проще написать то что осталось от "старого" FC чем писать список изменений. Итак, список того что осталось от "старого" FC:
<br>- Люди.
</div>

<div class='news_info'>Дата: 20.09.2013

<span>
</span>Просмотров: 781786

<span>
</span>Комментариев: 0<a href="#" class='more'>Подробнее</a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<div id='footer'>

<div id='f_menu'>

<div id='f_menu_stats'>

<div class='counter'>
<script type="text/rocketscript">document.write("<a href='http://www.liveinternet.ru/click' "+"target=_blank><img src='//counter.yadro.ru/hit?t16.6;r"+escape(document.referrer)+((typeof(screen)=="undefined")?"":";s"+screen.width+"*"+screen.height+"*"+(screen.colorDepth?screen.colorDepth:screen.pixelDepth))+";u"+escape(document.URL)+";"+Math.random()+"' alt='' title='LiveInternet: показано число просмотров за 24"+" часа, посетителей за 24 часа и за сегодня' "+"border='0' width='88' height='31'><\/a>")
</script>
</div>

<div class='counter'><a href="https://passport.webmoney.ru/asp/certview.asp?wmid=126865347867" target="_blank"><img src="./img/wm_attest.png" alt="Здесь находится аттестат нашего WM идентификатора 126865347867" border="0"/><br/>

<span style="font-size:0,7em">Проверить аттестат
</span></a>
</div>
</div>

<div id='f_menu_p'><a href="./">ГЛАВНАЯ</a>

<span>
</span><a href="http://fc.iff.su">ФОРУМ</a>

<span>
</span><a href="./start">КАК НАЧАТЬ ИГРУ</a>

<span>
</span><a href="http://fc.iff.su/index.php?forums/223/">ОПИСАНИЕ СЕРВЕРОВ</a>

<span>
</span><a href="./donat">ДОНАТ</a>

<span>
</span><a href="./regulations">ПРАВИЛА</a>

<span>
</span><a href="./info">ИНФОРМАЦИЯ</a>
</div>
</div>

<div id='f_copyright'>

<div id='dkarts'>ДИЗАЙН САЙТА — <a href="http://dkarts.ru/" title="Дизайн сайта разработан в студии DKarts">DKARTS</a>
</div>

<div id='copyright'>© 2011-2013 FUTURECRAFT.RU
<br>ВСЕ ПРАВА ЗАЩИЩЕНЫ.
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>