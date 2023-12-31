<?php
/**
 * ajax -> pages_groups_events -> create|edit
 * 
 * @package Sngine
 * @author Zamblek
 */

// fetch bootstrap
require('../../../bootstrap.php');

// check AJAX Request
is_ajax();

// user access
user_access(true);

// valid inputs
if(!in_array($_GET['do'], array('create', 'edit'))) {
	_error(400);
}

// (create|edit) => (page|group|event)
try {

	// initialize the return array
	$return = array();
	$return['callback'] = 'window.location.replace(response.path);';

	switch ($_GET['type']) {
		case 'page':

			// page create
			if($_GET['do'] == "create") {
				$user->create_page($_POST);
				$return['path'] = $system['system_url'].'/pages/'.$_POST['username'];

			// page edit
			} elseif($_GET['do'] == "edit") {
				/* valid inputs */
				if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
					_error(400);
				}
				if(!in_array($_GET['edit'], array('settings', 'info', 'action','social'))) {
					_error(400);
				}
				/* edit page */
				$page_name = $user->edit_page($_GET['id'], $_GET['edit'], $_POST);
				$return['path'] = $system['system_url'].'/pages/'.$page_name;
			}
			break;

		case 'group':

			// group create
			if($_GET['do'] == "create") {
				$user->create_group($_POST);
				$return['path'] = $system['system_url'].'/groups/'.$_POST['username'];

			// group edit
			} elseif($_GET['do'] == "edit") {
				/* check id */
				if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
					_error(400);
				}
				/* edit group */
				$user->edit_group($_GET['id'], $_POST);
				$return['path'] = $system['system_url'].'/groups/'.$_POST['username'];
			}
			break;

		case 'event':
			
			// event create
			if($_GET['do'] == "create") {
				$event_id = $user->create_event($_POST);
				$return['path'] = $system['system_url'].'/events/'.$event_id;

			// event edit
			} elseif($_GET['do'] == "edit") {
				/* check id */
				if(!isset($_GET['id']) || !is_numeric($_GET['id'])) {
					_error(400);
				}
				/* edit event */
				$user->edit_event($_GET['id'], $_POST);
				$return['path'] = $system['system_url'].'/events/'.$_GET['id'];
			}
			break;
		
		default:
			_error(400);
			break;
	}	

	// return & exit
	return_json($return);
	
} catch (Exception $e) {
	return_json( array('error' => true, 'message' => $e->getMessage()) );
}

?>