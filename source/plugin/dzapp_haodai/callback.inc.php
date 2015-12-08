<?php

/**
 * DZAPP Haodai Callback Interface
 *
 * @copyright (c) 2013 DZAPP. (http://www.dzapp.cn)
 * @author BranchZero <branchzero@gmail.com>
 */

!defined('IN_DISCUZ') && exit('Access Denied');

include_once DISCUZ_ROOT.'./data/dzapp_haodai_config.php';
require_once DISCUZ_ROOT.'./source/plugin/dzapp_haodai/haodai.api.class.php';

$oauth = new HaoDaiOAuth(HD_AKEY, HD_SKEY);

if(isset($_REQUEST['code'])){
	$keys = array();
	$keys['code'] = $_REQUEST['code'];
	$keys['redirect_uri'] = HD_CALLBACK_URL;
	$hd_token = $oauth->getAccessToken('code', $keys);
	require_once libfile('function/cache');
	writetocache('dzapp_haodai_setting', getcachevars(array('hd_token' => $hd_token)));
	dheader('Location: '.$_G['siteurl'].'admin.php?action=plugins&operation=config&identifier=dzapp_haodai&pmod=admincp_callback');
}

?>