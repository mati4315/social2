<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network
 * @author    Open Source Social Network Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */

/* Define Paths */
define('__OSSN_POKE__', ossn_route()->com . 'OssnPoke/');

/* Load OssnPoke Class */
require_once __OSSN_POKE__ . 'classes/OssnPoke.php';

/**
 * Initialize the poke component.
 *
 * @return void
 */
function ossn_poke() {
		//css
		ossn_extend_view('css/ossn.default', 'css/poke');

		//actions
		if(ossn_isLoggedin()) {
				ossn_register_action('poke/user', __OSSN_POKE__ . 'actions/user/poke.php');
		}
		//hooks
		ossn_add_hook('notification:view', 'ossnpoke:poke', 'ossn_poke_notification');
		//profile menu
		ossn_register_callback('page', 'load:profile', 'ossn_user_poke_menu', 1);
}

/**
 * User poke menu item in profile.
 *
 * @return void
 */
function ossn_user_poke_menu($name, $type, $params) {
		$user = ossn_get_page_owner_guid();
		$poke = ossn_site_url("action/poke/user?user={$user}", true);
		ossn_register_menu_link('poke', ossn_print('poke'), $poke, 'profile_extramenu');
}

/**
 * User notification menu item
 *
 * @return void
 */
function ossn_poke_notification($name, $type, $return, $params) {
		$notif   = $params;
		$baseurl = ossn_site_url();
		$user    = ossn_user_by_guid($notif->poster_guid);

		$user->fullname = "<strong>{$user->fullname}</strong>";

		$url     = $user->profileURL();
		$iconURL = $user->iconURL()->small;
		return ossn_plugin_view('notifications/template/view', array(
				'iconURL'     => $iconURL,
				'guid'        => $notif->guid,
				'type'        => $notif->type,
				'viewed'      => $notif->viewed,
				'url'         => $url,
				'icon_type'   => 'poke',
				'instance'    => $notif,
				'customprint' => $text,
				'fullname'    => $user->fullname,
		));
}
ossn_register_callback('ossn', 'init', 'ossn_poke');