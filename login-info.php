
<div class='login-box'>
	<ul class='login-box-top'>
		<li class='top-button'><div class='selected'>내 프로필</div></li>
		<li class='top-button'><div class='unselected'> <a href="<?=url_bbs()?>/member_confirm.php?url=register_form.php" id="ol_after_info">정보 수정</a></div></li>
	</ul>
	<div style='clear:left;'></div>
	<div class='login-box-middle'>
	<?php if ($is_admin == 'super' || $is_auth) {  ?>
		<div class='admin-mode'><a href="<?php echo G5_ADMIN_URL ?>">ADMIN PANEL</a></div>
		<div class='admin-mode'><a href="<?=x::url_admin()?>">X Admin Panel</a></div>
	<?php }  ?>
     
		<div class='user-info'><b><?=my('nick')?></b>님 로그인</div>
    
		<div class='point-scrap'>
			<a href="<?php echo G5_BBS_URL ?>/memo.php" target="_blank" id="ol_after_memo" class="win_memo">
				쪽지<span class='no_of_unreaded_message'><?=g::memo_new()?></span>
			</a>&nbsp;&nbsp;
			<? if ( admin() ) {?>
				<a href="<?=url_site_config()?>">사이트 관리</a>
			<? } else {?>
				<a href="<?=url_bbs()?>/point.php" target="_blank" id="ol_after_pt" class="win_point">
				   포인트
				   <?=g::member_point()?>
				</a>
			<? }?>
		<? /*
            <a class='scrap-button' href="<?php echo G5_BBS_URL ?>/scrap.php" target="_blank" id="ol_after_scrap" class="win_scrap">스크랩</a>
			<div style='clear:right;'></div>
		*/?>
		</div>
		
        <a href="<?php echo G5_BBS_URL ?>/logout.php" id="ol_after_logout" class='logout-button'>LOGOUT</a>
	</div>
</div> 
