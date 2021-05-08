<script>
					var modal = UIkit.modal('#youarebanned', {center: true});
					if (modal.isActive()) modal.hide();
					else modal.show();
				</script>
[group=5]<div class="block">
<div class="block-top"><i class="uk-icon-user"></i> Войти на сайт</div>
<div class="block-content">
<form method="post" action="" class="auth">
<div><input type="login" name="login_name" value="Логин" onblur="if(this.value=='') this.value='Логин';" onfocus="if(this.value=='Логин') this.value='';" /></div>
<div><input type="password" name="login_password" value="******" onblur="if(this.value=='') this.value='******';" onfocus="if(this.value=='******') this.value='';" /></div>
<div><input name="login" type="hidden" id="login" value="submit" /></div>
<div><a href="/register" class="reg"></a></div>
<div><button onclick="submit();" type="submit"></button></div>
    <br><center><a href="/recovery" style='color: #b76938'><b>Забыли пароль?</b></a></center>
</form>
</div>
</div>[/group]

[not-group=5]
<div class='block'>
<div class='block-top'><i class='uk-icon-user'></i> Мини профиль</div>
<div class='block-content'>
    <!---<a href='/index.php?do=pm' class=''><i class='uk-icon-envelope uk-text-muted' style='margin-left: 207px;'></i></a>-->
 
    <div id='welcome_nickname' style='margin-left: 98px;font-size: 17px;margin-top: 5px;margin-bottom: -10px;'>Привет, <b>{login}</b></div>
    <hr style='margin-top: 9px;margin-bottom: -23px;margin-left: 49px;width: 203px;'>
    <div class='balance' style='margin-bottom: -67px;margin-top: 36px;margin-left: 87px;width: 64px;border-radius: 15px;border: 2px solid rgba(121, 82, 49, 0.11);font-size: 15px;'><b>{include file='/files/balance.php'}</b>    <i class='uk-icon-rub' ></i> </div>
<center><img src='{foto}' style='border-radius: 57%;margin-left: -128px;height: 97px;margin-bottom: 24px;border: 3px solid rgba(121, 82, 49, 0.32);' width='100px'></center>

<div style='margin-top: -41px;'>
    <!-- <a  class='uk-icon-calendar uk-text-muted' style='font-size: 30pt; float: right;     margin-top: -25px;     padding: 3px;' href='#stat' data-uk-modal='' data-uk-tooltip='' title='Статистика аккаунта'><span> </span></a>-->
       <!-- <span style='float: right;'><span data-uk-tooltip='' title='{online_t}<br/>{time_t}'>{online_p}</span> ----> 
</div><div style='margin-top:27px'></div>
<center>

 <div  style='font-size: 16px;margin-top: -3px;/* color: rgba(39, 39, 39, 0.58); */' data-uk-modal='' class='' data-cached-title=''><span>Вы {include file='/files/whouser.php'}</span></div>

   
    <a href="#vaunch" data-uk-modal="" class="test-test-test goldbutton" style="height: 20px;border-radius: 3px;font-size: 27px;width: 23px;margin-top: -100px;margin-bottom: 65px;line-height: 11px;margin-left: 175px;background: rgba(185, 154, 62, 0.24);opacity: 0.8;"><i class="uk-icon-gift"></i>     
  </a>
    {include file="engine/modules/others/usersideGRC.php"}
    
    
    <div id="vaunch" class="uk-modal uk-open" aria-hidden="false" style="display: none; overflow-y: scroll;"> 
<div class="uk-modal-dialog"> 
<a class='uk-modal-close uk-close'></a> 
<div class="modal_content"> 
<form class="uk-form" action="" method="post"> 
<h4>Введите ваучер и получите предусмотренное вознаграждение</h4><hr> 
<b>Ваучер</b> - созданный администрацией код, длинной 12 символов с разным регистром букв. Активировать ваучер возможно только один раз одним игроком. Администрация публикует ваучеры в <a style="text-decoration:none;color:#07d;" href="http://vk.com/grcraft_su" target="_blank">нашей группе ВК</a> в произвольное время. 
<br><br> 
<div class="uk-form"> 
<center><input type="text" id="vouchertext2" style="height: 50px; font-size: 18pt; text-align: center; border-radius: 0px;     line-height: 24px;font-family: cursive;" class="uk-width-1-1" placeholder="Введите ваучер" maxlength="12"> 
<button type="button" style="margin-top: 12px;border-radius: 0px;font-family: cursive; " id="vaucher_goo" class="uk-width-1-1 uk-button uk-button-success">Активировать ваучер</button></center> 
<div id="resultlogin" style="margin-top: 10px;"></div> 
</div> 

</form> 
<input type="hidden" value="{login}" id="username2"> 
<script> 
    
    $("#perevod_go").click(function() {
	var user = document.getElementById('perevod_name').value,
	summa = document.getElementById('perevod_summa').value;
	
        $.post("/files/perevod.php", { user: username, name: user, summa: summa}, function(p) {
		switch(p) {
			case "1":
				$("#per_ret").html("<div style=\"margin-top: 5px;margin-bottom: 0px;\" class=\"uk-alert uk-alert-success\" data-uk-alert=''><center><font color='green'><i class='uk-icon-info'></i> Вы успешно перевели <b>"+summa+"</b> <i data-uk-tooltip=\"\" title=\"Руб\" class=\"uk-icon-rub\"></i> игроку <b>"+user+"</b>.</font></center></div>");
				break;
			case "2":
				$("#per_ret").html("<div style=\"margin-top: 5px;margin-bottom: 0px;\" class=\"uk-alert uk-alert-danger\" data-uk-alert=\"\"><center><font color='red'><i class='uk-icon-info'></i> Пользователь <b>"+user+"</b> не найден.</font></center></div>");
				break;
			case "3":
				$("#per_ret").html("<div style=\"margin-top: 5px;margin-bottom: 0px;\" class=\"uk-alert uk-alert-danger\" data-uk-alert=\"\"><center><font color='red'><i class='uk-icon-info'></i> Недостаточно средств для перевода <b>"+summa+"</b> <i data-uk-tooltip=\"\" title=\"Руб\" class=\"uk-icon-rub\"></i>.</font></center></div>");
				break;
			case "4":
				$("#per_ret").html("<div style=\"margin-top: 5px;margin-bottom: 0px;\" class=\"uk-alert uk-alert-danger\" data-uk-alert=\"\"><center><font color='red'><i class='uk-icon-info'></i> Минималная сумма перевода <b>5</b> <i data-uk-tooltip=\"\" title=\"Руб\" class=\"uk-icon-rub\"></i></font></center></div>");
				break;
				 case "5":
                $("#per_ret").html("<div style=\"margin-top: 5px;margin-bottom: 0px;\" class=\"uk-alert uk-alert-danger\" data-uk-alert=\"\"><center><font color='red'><i class='uk-icon-info'></i> Ошибка!</font></center></div>");
                break;
                case "6":
                $("#per_ret").html("<div style=\"margin-top: 5px;margin-bottom: 0px;\" class=\"uk-alert uk-alert-danger\" data-uk-alert=\"\"><center><font color='red'><i class='uk-icon-info'></i> Сам себе? Не смеши <i class='uk-icon-smile-o'></i></font></center></div>");
                break;
		}
	});
});
    
    
var username2 = document.getElementById('username2').value; 

$("#vaucher_goo").click(function() { 
var text2 = document.getElementById('vouchertext2').value; 
    $.post("/engine/modules/others/vaucherGRC.php", {user2: username2, text2: text2}, function(t) { 
$("#resultlogin").html(t); 
}); 

}); 

vaucher_goo.onclick = function () { 
this.btnClick = (this.btnClick || 0) + 1; 
if (this.btnClick == 5) { 
this.disabled = true; 
setTimeout(function(){ 
vaucher_goo.disabled = false; 
vaucher_goo.btnClick = 0; 
}, 5000); // 5 секунд 
} 
}; 

</script> 
</div> 
</div> 
</div>
</div>
[/not-group]