<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$doc = JFactory::getDocument();

$doc->addStyleSheet(JURI::Base() . 'components/com_importer/assets/css/vendor/handsontable.full.css');
$doc->addStyleSheet(JURI::Base() . 'components/com_importer/assets/css/vendor/sweetalert.css');
$doc->addStyleSheet(JURI::Base() . 'components/com_importer/assets/css/style.css');

//$doc->addScript(JURI::base().'components/com_osian/js/sweetalert.min.js');
$doc->addScript('https://code.jquery.com/jquery-1.12.4.js');

$doc->addScript(JURI::base().'components/com_importer/assets/js/vendor/handsontable.full.js');
$doc->addScript(JURI::base().'components/com_importer/assets/js/importerService.js');
$doc->addScript(JURI::base().'components/com_importer/assets/js/importerUi.js');

?>


<div>
	<input id='clientApp' type="hidden" value="<?php echo $this->clientApp; ?>">
	<input id='userId' type="hidden" value="<?php echo $this->userId; ?>">
	<input id='userName' type="hidden" value="<?php echo $this->userName; ?>">

	<div>
		<h3>Welcome <i><?php echo $this->userName; ?>..!</i></h3>
		<p>What would you like to do today?</p>
		<p>Selected component - <b><?php echo $this->clientApp; ?></b> </p>
		<br/>
	</div>
	
	<div>
		<button id="add-data" class="btn demo-btns btn-secondary btn-modal-1" onclick="importerUi.showModalFirst(this);" modal-title-set="Select batch details to add records">Add Data</button>
		<button id="edit-data" class="btn demo-btns btn-secondary btn-modal-1" onclick="importerUi.showModalFirst(this);" modal-title-set="Select batch details to edit records">Edit Data</button>

		<button type="button" id="load-batch" class="btn demo-btns btn-secondary" onclick="importerUi.showModalFirst(this);" >Load Batch</button>

		<button type="button" class="btn demo-btns btn-secondary" data-toggle="modal" >Delete Data</button>
		<button type="button" class="btn demo-btns btn-secondary" data-toggle="modal" >Export Data</button>
		<button type="button" class="btn demo-btns btn-secondary" data-toggle="modal" >Edit Tags</button>
	</div>

	<div class="modal fade" id="step-one-model" role="dialog" data-backdrop="static" data-keyboard="false" style="display:none;">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" eventFor="step-one-model" onclick="importerUi.dismissModal(this)">&times;</button>
				  <h4 class="modal-title" id="modal-title-1"></h4>
				</div>

				<div class="modal-body" id="step1">
				</div>

				<div class="modal-footer" id="modal-footer-1">
				  <button type="button" class="btn btn-default" eventFor="step-one-model" onclick="importerUi.dismissModal(this)">Close</button>
				</div>
		  </div>
		</div>
	</div>




	<div class="modal fade" id="load-batch-model" role="dialog" data-backdrop="static" data-keyboard="false" style="display:none;">
		<div class="modal-dialog">
		  <!-- Modal content-->
		  <div class="modal-content">
				<div class="modal-header">
				  <button type="button" class="close" eventFor="load-batch-model" onclick="importerUi.dismissModal(this)">&times;</button>
				  <h4 class="modal-title" id="modal-title-2">Click on batch name to select the batch</h4>
				</div>

				<div class="modal-body" id="load-batch-content">
				</div>

				<div class="modal-footer" id="modal-footer-2">
				  <button type="button" class="btn btn-default" eventFor="load-batch-model" onclick="importerUi.dismissModal(this)">Close</button>
				</div>
		  </div>
		</div>
	</div>


</div>

<script>
	
</script>
