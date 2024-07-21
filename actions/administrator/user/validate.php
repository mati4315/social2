<?php
/**
 * Open Source Social Network
 *
 * @package   Open Source Social Network (OSSN)
 * @author    OSSN Core Team <info@openteknik.com>
 * @copyright (C) OpenTeknik LLC
 * @license   Open Source Social Network License (OSSN LICENSE)  http://www.opensource-socialnetwork.org/licence
 * @link      https://www.opensource-socialnetwork.org/
 */
$guids = input('guid');
$guids = explode(',', $guids);

//redirect back on any single fail
//[E] Allow selection on multiple users on the unvalidated list current page #2319
if(!empty($guids)) {
		foreach ($guids as $guid) {
				$user = ossn_user_by_guid($guid);
				if(!$user) {
						ossn_trigger_message(ossn_print('admin:user:validate:error'), 'error');
						redirect(REF);
				}
				$code = $user->activation;
				if(!$user->ValidateRegistration($code)) {
						ossn_trigger_message(ossn_print('admin:user:validate:error'), 'error');
						redirect(REF);
				}
		}
}
ossn_trigger_message(ossn_print('admin:user:validated'));
redirect(REF);