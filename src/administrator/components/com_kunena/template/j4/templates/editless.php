<?php
/**
 * Kunena Component
 * @package         Kunena.Administrator.Template
 * @subpackage      Templates
 *
 * @copyright       Copyright (C) 2008 - 2018 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die();

// @var KunenaAdminViewTemplates $this

?>
<div id="kunena" class="container-fluid">
	<div class="row">
		<div class="col-md-2 d-none d-md-block sidebar">
			<div id="sidebar">
				<nav class="sidebar-nav"><?php include KPATH_ADMIN . '/template/j4/common/menu.php'; ?></nav>
			</div>
		</div>
		<div id="j-main-container" class="col-md-10" role="main">
			<form action="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=templates') ?>"
				  method="post" id="adminForm"
				  name="adminForm">
				<input type="hidden" name="task" value=""/>
				<input type="hidden" name="id" value="<?php echo $this->escape($this->templatename); ?>"/>
				<input type="hidden" name="cid[]" value="<?php echo $this->escape($this->templatename); ?>"/>
				<input type="hidden" name="filename" value="<?php echo $this->escape($this->filename); ?>"/>
				<?php echo JHtml::_('form.token'); ?>

				<?php // TODO: redo FTP protection fields ?>
				<fieldset>
					<legend><?php echo JText::_('COM_KUNENA_A_TEMPLATE_MANAGER_EDIT_LESS_TEMPLATE'); ?></legend>
					<table class="table table-bordered table-striped">
						<tr>
							<th>
								<?php echo $this->escape($this->less_path); ?>
							</th>
						</tr>
						<tr>
							<td>
								<textarea class="input-xxlarge" cols="110" rows="25"
										  name="filecontent"><?php echo $this->content; ?></textarea>
							</td>
						</tr>
					</table>
				</fieldset>
			</form>
		</div>
	</div>
	<div class="pull-right small">
		<?php echo KunenaVersion::getLongVersionHTML(); ?>
	</div>
</div>
