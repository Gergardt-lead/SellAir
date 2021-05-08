<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
{headers}
<script type="text/javascript" src="{THEME}/js/style.js"></script>
<link media="screen" href="{THEME}/uikit/css/components/notify.css" type="text/css" rel="stylesheet"/>
<script src="{THEME}/uikit/js/components/notify.min.js"></script>
<link rel="shortcut icon" href="{THEME}/dleimages/favicon.ico" />
<link media="screen" href="{THEME}/style/styles.css" type="text/css" rel="stylesheet" />
<link media="screen" href="{THEME}/style/engine.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="{THEME}/js/slides.js"></script>   
<script type="text/javascript" src="{THEME}/js/script.js"></script>
<link media="screen" href="{THEME}/uikit/css/uikit.gradient.css" type="text/css" rel="stylesheet" />
<script src="{THEME}/uikit/js/uikit.min.js"></script>
[aviable=cabinet]<link media="screen" href="{THEME}/uikit/css/components/form-file.min.css" type="text/css" rel="stylesheet" />[/aviable]
</head>
    <div id='launcher' class='uk-modal'>
				<div class='uk-modal-dialog' style='width: 700px;    height: 614px;'>
					<a class='uk-modal-close uk-close'></a>
<table class='uk-width-1-1' style='margin-bottom: 20px'>
				<tr>
					<td width='100px' align='center'>
						<div class='GrCstart'>1</div>
					</td>
					<td>
						Для начала вам нужно зарегистрировать свой игровой аккаунт перейдя к <a href='/register' target='_blank'>регистрации</a>.<br>Запомните, что только Вы в силах защитить свой аккаунт от рук злоумышленников установив сложный пароль, например: <b>h53qfwstr4gt2</b>
					</td>
				</tr>
			</table>
			<hr/>
			<table class='uk-width-1-1' style='margin-bottom: 20px'>
				<tr>
					<td width='100px' align='center'>
						<div class='GrCstart'>2</div>
					</td>
					<td>
						Перед непосредственным началом игры Вам в обязательном порядке необходимо ознакомиться с <a href='/rules' target='_blank'>правилами игры на игровых серверах GRCraft.Su</a>. <br>Все эти правила призваны сделать игру максимально честной, комфортной и интересной.
					</td>
				</tr>
			</table>
			<hr/>
			<table class='uk-width-1-1' style='margin-bottom: 20px'>
				<tr>
					<td width='100px' align='center'>
						<div class='GrCstart'>3</div>
					</td>
					<td>
						Теперь Вам стоит определиться с тем, какой тематики сервер вам больше нравится.<br> На сегодняшний день мы предлагаем Вам самые стабильные сборки серверов среди русскоязычного Minecraft сообщества на самых последних версиях доступных игровых модов. Ознакомиться с описанием наших серверов Вы можете перейдя на страницу интересующего Вас сервера в шапке сайта.
					</td>
				</tr>
			</table>
			<hr/>
			<table class='uk-width-1-1' style='margin-bottom: 20px'>
				<tr>
					<td width='100px' align='center'>
						<div class='GrCstart'>4</div>
					</td>
					<td>
						Если первые три пункта Вы успешно преодолели - поздравляем, остается последний заключительный пункт. Сейчас Вам необходимо перейти на специальную страницу с выбором лаунчера для вашей операционной системы. Перейти на эту страничку можно нажав на красиво висящий щит в шапке сайта со словами '<a href='/' target='_blank'>Скачать лаунчер</a>'
					</td>
				</tr>
			</table>
			<hr/>
			<table class='uk-width-1-1' style='margin-bottom: 20px'>
				<tr>
					<td width='100px' align='center'>
						<div class='GrCstart' style='background: url({THEME}/images/numVK.jpg)'>5</div>
					</td>
					<td>
						Кстати, не забудьте подписаться на нашу группу ВКонтакте.<br> Очень много важных новостей, которые не всегда публикуются на сайте, мы размещаем именно там. Более того, в нашей группе ВКонтакте периодически проводятся различные конкурсы, в которых можно выиграть что-нибудь ценное.<br> <a href='http://vk.com/grcraft_su' target='_blank'>Перейти в нашу официальную группу ВКонтакте</a>.
					</td>
				</tr>
			</table>
		</div>
	</div>
			
   
<body>

{AJAX}

<div id="wrapper">
<div class="bg-1">
<div class="bg-2">
<div class="bg-3">

<!-- header --><div class="header full">
   
    						<script>
							var modal = UIkit.modal('#youarebanned', {center: true});
							if ( modal.isActive() ) {
							    modal.hide();
							} else {
							    modal.show();
							}
						</script>
    
    <style>
        .rotate:hover{
	  -webkit-animation-name: hvr-pulse;
  animation-name: hvr-pulse;
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-timing-function: linear;
  animation-timing-function: linear;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
-webkit-transform: rotateZ(-30deg);
-ms-transform: rotateZ(-30deg);
transform: rotateZ(-360deg);
transition:all 0.9s ease;
color: #059;
}
    </style>

<a href="/" class="header-logo"></a>
[group=5]<a href="/register" class="header-start"></a>[/group]
    [not-group=5]<a data-uk-modal="{target: '#launcher'}" class="header-launcher"></a>[/not-group]
<ul>
<li><a href="/">Главная</a></li>
<li><a href="/servers">Наши сервера</a></li>
<li><a href="/donate"><b>Донат</b></a></li>
<li><a href="/commands">Команды</a></li>
<li><a href="/rules">Правила</a></li>
<li><a href="/banlist">Бан-Лист</a></li>
</ul>
   
        <style>
            
            .footer-menu1 a:hover {
    color: #f9d59b;
                padding-bottom: 8px;
border-bottom: 3px solid rgb(179, 120, 60);
}
            
          .scene{position:absolute;left:50%;margin-left:-500px;}
            .tablelol i {
	font-size: 12em;
	-webkit-transition: all 0.3s ease;
	-moz-transition: all 0.3s ease;
	-o-transition: all 0.3s ease;
	-ms-transition: all 0.3s ease;
}
            .footer-menu1 li {
    display: inline-block;
    border-bottom: 1px solid rgba(188, 133, 68, 0.46);
    padding: 12px 17px 7px;
    margin-right: -4px;
}

.tablelol:hover i {
	font-size: 11em;
	color: #060508;
}
    </style>
       <div class="row ">
<div id="parallax" class="scene">
    
    <div data-depth="0.9"><img src="{THEME}/images/fly.png" style="display: inline; opacity: 1;margin-left: 169px; margin-top: -3px;" width="70px" height="148px" /></div>
    <div data-depth="0.9"><img src="{THEME}/images/fly2.png" data-depth="0.9" style="display: inline; opacity: 1;margin-left: 480px;margin-top: -17px;" width="60px" height="103px"/></div>  
    
</div>

<div id="l"></div>
</div>  
   
</div><!-- /header -->

<!-- side-main --><div class="side-main full">
<div class="side-left">

[aviable=main]<div class="slides">
<div class="slides_switch">
<a class="prev uk-icon-arrow-left" style="color:#fff; font-size:42px"></a>
<a class="next uk-icon-arrow-right" style="color:#fff; font-size:42px"></a>
</div>
<div class="slides_container">
<a><img src="{THEME}/images/slider/slide_05.jpg" alt="" /></a>
<a><img src="{THEME}/images/slider/slide_04.jpg" alt="" /></a>
<a><img src="{THEME}/images/slider/slides3.png" alt="" /></a>
<a><img src="{THEME}/images/slider/slides1.png" alt="" /></a>    
</div>
</div>

    
 [group=5]   <div style="margin-left: -50px;margin-bottom: 10px;width: 590px;" class="uk-alert uk-alert-danger" data-uk-alert="">
<center><a style="text-decoration:none;color:#d85030;" href="/register">Зарегистрируйтесь</a> или войдите на сайт, для доступа к <b>основным</b> функциям сайта!</center></div>
    [/group] 

    [/aviable]
    
{info}
    {content}<br/><br/><br/><br/><br/><br/>

</div>
<div class="side-in">

[not-group=5]{include file="engine/modules/others/checkvkGRC.php"}[/not-group]

{include file='engine/modules/others/shop/friends.php'}
{login}
    
<!-- block --><div class="block">
<div class="block-top"><i class="uk-icon-signal"></i> Мониторинг</div>
<div class="block-content">
    <script type="text/javascript">
$(document).ready(function() {
    $(".monitoring").load("/files/monitoring/index.php");
});
</script>
    
    <div class="monitoring" ><center style='font-size: 18px'><i class="uk-icon-spinner uk-icon-spin"></i> Загружаю мониторинг</center></div>  
</div>
</div><!-- /block -->

<!-- block --><div class="block">
<div class="block-top"><i class="uk-icon-vk"></i> Мы Вконтакте</div>
<div class="block-content"><center>

<script type="text/javascript" src="//vk.com/js/api/openapi.js?121"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 2, width: "220", height: "400"}, 110001222);
</script>
    </center>

</div>
    </div><!-- /block --><div style='margin-bottom: 200px'></div>
    
</div>
</div><!-- /side-main -->

<!-- footer --><div class="footer full">
<div class="footer-text">
   Copyright © 2015-2016 GrCraft.Su <br> Копирование дизайна и элементов сайта запрещено. Powered by <a target="_blank" href="/engine/go.php?url=aHR0cDovL25ld3RlbXBsYXRlcy5ydS8%3D">DataLife Engine</a>
</div>
    
    
<div class="footer-text">
	<ul class="reset footer-menu1" style="margin-top: 71px;margin-left: -221px;text-decoration: none;/* padding-bottom: 37px; */">
		<li><a href="/" style="text-decoration: none;">Главная</a></li>
		<li><a style="  text-decoration: none;" href="">Форум</a></li>
		<li><a style="    text-decoration: none;" href="/rules">Правила</a></li>
		<li><a style="   text-decoration: none;" href="/team">Команда проекта</a></li>
		<li><a style=" text-decoration: none;" href="/commands">Команды</a></li>
	</ul>
</div>

<div class="footer-advert">
<div class="blank">
<a href="/" target="_blank"><img src="https://www.interkassa.com/img/ik_88x31_01.gif"data-uk-tooltip="" title="Пополнение через InterKassa"></a></div>
<div class="blank"><a href="/" target="_blank"><img src="/files/wm.png" data-uk-tooltip="" title="Пополнение через WebMoney"></a></div>
</div>
</div>

</div>
</div>
</div>
</div>

</body>
</html>