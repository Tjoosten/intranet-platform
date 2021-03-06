<?php
/**
 * @version     $Id: default.php 1481 2012-02-10 01:46:24Z johanjanssens $
 * @category	Nooku
 * @package     Nooku_Components
 * @subpackage  Logs
 * @copyright   Copyright (C) 2011 - 2012 Timble CVBA and Contributors. (http://www.timble.net).
 * @license     GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link        http://www.nooku.org
 */

defined('KOOWA') or die( 'Restricted access' ); ?>

<style src="media://com_logs/css/logs-default.css" />

<!-- Start Sidebar -->
<div id="sidebar">
	<?=@template('packages')?>
</div>
<!-- End Sidebar -->

<div id="list" class="-koowa-box-flex">

	<!-- Start Filter -->
	<?=@template('filters')?>
	<!-- End Filter -->

	<!-- Start Logs List -->
	<form action="<?= @route()?>" method="get" class="-koowa-grid">
		<table class="adminlist" style="clear: both;">
			<thead>
				<tr>
					<th style="text-align:left;width:10px">
						<?= @helper('grid.checkall') ?>
					</th>
					<th class="-logs-when"><?=@text('When')?></th>
					<th class="-logs-message"><?=@text('Log Message')?></th>
					<th class="-logs-item"><?=@text('Related Item')?></th>
				</tr>
			</thead>
			
			<tbody>
				<? if (count($logs)) : ?>
					<?= @template('default_logs'); ?>
				<? else : ?>
				<tr>
					<td colspan="20" align="center">
						<?= @text('No items found'); ?>
					</td>
				</tr>
				<? endif; ?>
			</tbody>
			
			<tfoot>
				<tr>
					<td colspan="20">
						<?= @helper('paginator.pagination', array('total' => $total)) ?>
					</td>
				</tr>
			</tfoot>
		</table>
	</form>
	<!-- End Logs List -->
</div>