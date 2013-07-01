<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

$cakeDescription = __d('cake_dev', 'Cake on Xoops: the rapid development php framework');


require_once('../../../../mainfile.php');

require_once( XOOPS_ROOT_PATH.'/mainfile.php' );
require XOOPS_ROOT_PATH.'/header.php';
global $xoopsTpl,$xoopsOption;

$root=&XCube_Root::getSingleton();
if(!is_object($root->mController)) exit();

ob_start();
?>
	<div id="container">
		<div id="header">
			<h1><?php echo $this->Html->link($cakeDescription, 'http://cakephp.org'); ?></h1>
		</div>
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div id="footer">
			<?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false)
				);
			?>
		</div>
	</div>
	<?php echo $this->element('sql_dump'); ?>

<?php
$cakecms = ob_get_contents();
ob_end_clean();
$xoopsTpl->assign('cakecms', $cakecms );
//Template
$xoopsOption['template_main'] = "cakecms.html";
include XOOPS_ROOT_PATH."/footer.php";
?>