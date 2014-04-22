<?php
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
<div class='login-box'>
	<ul class='login-box-top'>
		<li class='top-button'><div class='selected'>로그인</div></li>
		<li class='top-button'><div class='unselected'><a href="<?=url_register()?>">회원가입</a></div></li>
	</ul>
	<div style='clear:left;'></div>
	
	<div class='login-box-middle'>
		<form action="<?=url_login_check()?>" method="post" autocomplete="off">
			<input type="hidden" name="url" value="<?php echo $outlogin_url ?>">

			<div class='input-wrapper'>
				<img class='user-icon' src='<?=$widget_config['url']?>/username.gif' />
				<input type="text" id="ol_id" name="mb_id" required  maxlength="20" placeholder='아이디'>
			</div>
			
			<div class='input-wrapper border-bottom'>
				<span><img class='password-icon' src='<?=$widget_config['url']?>/key.gif' />
				<input type="password" name="mb_password" id="ol_pw" required maxlength="20" placeholder='비밀번호'></span>
			</div>
			
			<div class='remember_me'>
				<img class='remember-me-check' src='<?=$widget_config['url']?>/unchecked.gif' />
				<input type="checkbox" style='display: none;' name="auto_login" value="1" id="auto_login">자동 로그인
			</div>
			<input type="image" id="ol_submit" src='<?=$widget_config['url']?>/signin_button.png' />
			<? /*<a href="<?php echo G5_BBS_URL ?>/password_lost.php" id="ol_password_lost"><?php echo _l('Find Password');?></a> */?>
		</form>
	</div>
</div>
<script>

$(function() {	
	$(".remember-me-check").click(function() {
		if ( $("#auto_login").is(":checked") ) {
			$(this).attr('src', '<?=$widget_config['url']?>/unchecked.gif');
			$("#auto_login").prop('checked', false);
		}
		else {
			$(this).attr('src', '<?=$widget_config['url']?>/checked.gif');
			$("#auto_login").prop('checked', true);
			/*
			 if(!confirm("자동로그인을 사용하시면 다음부터 회원아이디와 비밀번호를 입력하실 필요가 없습니다.\n\n공공장소에서는 개인정보가 유출될 수 있으니 사용을 자제하여 주십시오.\n\n자동로그인을 사용하시겠습니까?"))
                return false;
			*/
		}
	});	
});


</script>