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
$OssnClasses = array(
		'DynamicCacheKeyNotExists',
		'DynamicCaching',
		'Memcached',
		'Redis',
		'Session',
		'Factory',
		'SiteException',
		'DatabaseException',
		'Base',
		'Translit',
		'Mail',
		'Pagination',
		'Database',
		'Site',
		'Entities',
		'User',
		'Object',
		'Annotation',
		'Themes',
		'File',
		'Components',
		'Menu',
		'Image',
		'JWT',
);
foreach ($OssnClasses as $class) {
		$loadClass['Ossn' . $class] = ossn_route()->classes . "Ossn{$class}.php";
}
$loadClass['MemoryCaching'] = ossn_route()->classes . 'interfaces/MemoryCaching.php';
ossn_register_class($loadClass);