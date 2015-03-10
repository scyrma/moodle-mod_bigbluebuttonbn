<?php
/**
 * Language File
 *
 * @package   mod_bigbluebuttonbn
 * @author    Fred Dixon  (ffdixon [at] blindsidenetworks [dt] com)
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 * @copyright 2010-2015 Blindside Networks Inc.
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 */
defined('MOODLE_INTERNAL') || die();

$string['bbbduetimeoverstartingtime'] = 'The due time for this activity must be greater than the starting time';
$string['bbbdurationwarning'] = 'The maximum duration for this session is %duration% minutes.';
$string['bbbfinished'] = 'This activity is over.';
$string['bbbinprocess'] = 'This activity is in process.';
$string['bbbnorecordings'] = 'There is no recording yet, please come back later.';
$string['bbbnotavailableyet'] = 'Sorry, this session is not yet available.';
$string['bbbrecordwarning'] = 'This session may be recorded.';
$string['bigbluebuttonbn:join'] = 'Join a meeting';
$string['bigbluebuttonbn:moderate'] = 'Moderate a meeting';
$string['bigbluebuttonbn:addinstance'] = 'Add a new meeting';
$string['bigbluebuttonbn'] = 'BigBlueButton';
$string['bigbluebuttonbnWait'] = 'User has to wait';

$string['config_general'] = 'General configuration';
$string['config_general_description'] = 'These settings are <b>always</b> used';
$string['config_server_url'] = 'BigBlueButton Server URL';
$string['config_server_url_description'] = 'The URL of your BigBlueButton server must end with /bigbluebutton/. (This default URL is for a BigBlueButton server provided by Blindside Networks that you can use for testing.)';
$string['config_shared_secret'] = 'BigBlueButton Shared Secret';
$string['config_shared_secret_description'] = 'The security salt of your BigBlueButton server.  (This default salt is for a BigBlueButton server provided by Blindside Networks that you can use for testing.)';

$string['config_feature'] = 'Feature configuration';
$string['config_feature_description'] = 'These settings are feature specific';
$string['config_feature_recording_default'] = 'Recording feature enabled by default';
$string['config_feature_recording_default_description'] = 'If enabled the sessions rooms or conference created will have the recording feature enabled.';
$string['config_feature_waitformoderator_default'] = 'Wait for moderator enabled by default';
$string['config_feature_waitformoderator_default_description'] = 'Wait for moderator feature is enabled by default when a new room or conference is added.';
$string['config_feature_waitformoderator_ping_interval'] = 'Wait for moderator ping (seconds)';
$string['config_feature_waitformoderator_ping_interval_description'] = 'When the wait for moderator feature is enabled, the client pings for the status of the session each [number] seconds. This parameter defines the interval for requests made to the Moodle server';
$string['config_feature_waitformoderator_cache_ttl'] = 'Wait for moderator cache TTL (seconds)';
$string['config_feature_waitformoderator_cache_ttl_description'] = 'To support a heavy load of clients this plugin makes use of a cache. This parameter defines the time the cache will be kept before the next request is sent to the BigBlueButton server.';
$string['config_feature_newwindow_default'] = 'Open in a new window enabled by default';
$string['config_feature_newwindow_default_description'] = 'Open in a new window feature is enabled by default when a new room or conference is added. When this feature is enabled the BigBlueButton session will be oppened in a new window for users entering into the room or conference.';
$string['config_feature_recordingtagging_default'] = 'Recording tagging enabled by default';
$string['config_feature_recordingtagging_default_description'] = 'Recording tagging feature is enabled by default when a new room or conference is added.<br>When this feature is enabled an intermediate page that allows to input a description and tags for the BigBlueButton session is shown to the first moderator joining. The description and tags are afterwards used by the RecordingsBN plugin.';

$string['config_ui'] = 'UI configuration';
$string['config_ui_description'] = 'These settings enable or disable options in the UI and also defines default values for these options.';
$string['config_ui_recording_editable'] = 'Recording feature can be edited';
$string['config_ui_recording_editable_description'] = 'If enabled, the activities have an option to activate the start/stop recording button in BigBlueButton.';
$string['config_ui_waitformoderator_editable'] = 'Wait for moderator feature can be edited';
$string['config_ui_waitformoderator_editable_description'] = 'Wait for moderator value by default can be edited when the room or conference is added or updated.';
$string['config_ui_newwindow_editable'] = 'Open in a new window feature can be edited';
$string['config_ui_newwindow_editable_description'] = 'Open in a new window value by default can be edited when the room or conference is added or updated.';
$string['config_ui_voicebridge_editable'] = 'Conference voice bridge can be edited';
$string['config_ui_voicebridge_editable_description'] = 'Conference voice bridge number can be permanently assigned to a room conference. When assigned, the number can not be used by any other room or conference';
$string['config_ui_recordingtagging_editable'] = 'Recording tagging feature can be edited';
$string['config_ui_recordingtagging_editable_description'] = 'Recording tagging value by default can be edited when the room or conference is added or updated.';
$string['config_ui_preuploadpresentation_enabled'] = 'Pre-uploading presentation enabled';
$string['config_ui_preuploadpresentation_enabled_description'] = 'Preupload presentation feature is enabled in the UI when the room or conference is added or updated.';

$string['config_permission'] = 'Permission configuration';
$string['config_permission_description'] = 'These settings define the permissions by default for the rooms or conference created.';
$string['config_permission_moderator_default'] = 'Moderator by default';
$string['config_permission_moderator_default_description'] = 'This rule is used by default when a new room or conference is added.';

$string['general_error_unable_connect'] = 'Unable to connect. Please check the url of the BigBlueButton server AND check to see if the BigBlueButton server is running.';

$string['index_confirm_end'] = 'Do you wish to end the virtual class?';
$string['index_disabled'] = 'disabled';
$string['index_enabled'] = 'enabled';
$string['index_ending'] = 'Ending the virtual classroom ... please wait';
$string['index_error_checksum'] = 'A checksum error occurred. Make sure you entered the correct salt.';
$string['index_error_forciblyended'] = 'Unable to join this meeting because it has been manually ended.';
$string['index_error_unable_display'] = 'Unable to display the meetings. Please check the url of the BigBlueButton server AND check to see if the BigBlueButton server is running.';
$string['index_heading_actions'] = 'Actions';
$string['index_heading_group'] = 'Group';
$string['index_heading_moderator'] = 'Moderators';
$string['index_heading_name'] = 'Room';
$string['index_heading_recording'] = 'Recording';
$string['index_heading_users'] = 'Users';
$string['index_heading_viewer'] = 'Viewers';
$string['index_heading'] = 'BigBlueButton Rooms';
$string['index_running'] = 'running';
$string['index_warning_adding_meeting'] = 'Unable to assign a new meeting ID.';
$string['mod_form_block_general'] = 'General settings';
$string['mod_form_block_presentation'] = 'Presentation content';
$string['mod_form_block_participants'] = 'Participants';
$string['mod_form_block_schedule'] = 'Schedule for session';
$string['mod_form_block_record'] = 'Record settings';
$string['mod_form_field_openingtime'] = 'Join open';
$string['mod_form_field_closingtime'] = 'Join closed';
$string['mod_form_field_description'] = 'Description of recorded session';
$string['mod_form_field_description_help'] = 'A short description for the recording that is being shown in the recording list. It can be changed per session.';
$string['mod_form_field_duration_help'] = 'Setting the duration for a meeting will establish the maximum time for a meeting to keep alive before the recording finish';
$string['mod_form_field_duration'] = 'Duration';
$string['mod_form_field_limitusers'] = 'Limit users';
$string['mod_form_field_limitusers_help'] = 'Maximum limit of users allowed in a meeting';
$string['mod_form_field_name'] = 'Virtual classroom name';
$string['mod_form_field_room_name'] = 'Room name';
$string['mod_form_field_conference_name'] = 'Conference name';
$string['mod_form_field_newwindow'] = 'Open in a new window';
$string['mod_form_field_record'] = 'Session can be recorded';
$string['mod_form_field_voicebridge'] = 'Voice bridge [####]';
$string['mod_form_field_voicebridge_help'] = 'Voice conference number that participants enter to join the voice conference when using dial-in. A number between 1 and 9999 must be typed. If the value is 0 the static voicebridge number will be ignored and a random number will be generated by BigBlueButton. A number 7 will preced to the four digits typed';
$string['mod_form_field_voicebridge_format_error'] = 'Format error. You should input a number between 1 and 9999.';
$string['mod_form_field_voicebridge_notunique_error'] = 'Not a unique value. This number is being used by another room or conference.';
$string['mod_form_field_recordingtagging'] = 'Activate tagging interface for moderators';
$string['mod_form_field_wait'] = 'Wait for moderator';
$string['mod_form_field_wait_help'] = 'Viewers must wait until a moderator enters the session before they can do so';
$string['mod_form_field_welcome'] = 'Welcome message';
$string['mod_form_field_welcome_help'] = 'Replaces the default message setted up for the BigBlueButton server. The message can includes keywords  (%%CONFNAME%%, %%DIALNUM%%, %%CONFNUM%%) which will be substituted automatically, and also html tags like <b>...</b> or <i></i> ';
$string['mod_form_field_welcome_default'] = '<br>Welcome to <b>%%CONFNAME%%</b>!<br><br>To understand how BigBlueButton works see our <a href="event:http://www.bigbluebutton.org/content/videos"><u>tutorial videos</u></a>.<br><br>To join the audio bridge click the headset icon (upper-left hand corner). <b>Please use a headset to avoid causing noise for others.</b>';
$string['mod_form_field_participant_add'] = 'Add participant';
$string['mod_form_field_participant_list'] = 'Participant list';
$string['mod_form_field_participant_list_type_all'] = 'All users enrolled';
$string['mod_form_field_participant_list_type_role'] = 'Role';
$string['mod_form_field_participant_list_type_user'] = 'User';
$string['mod_form_field_participant_list_type_owner'] = 'Owner';
$string['mod_form_field_participant_list_text_as'] = 'as';
$string['mod_form_field_participant_list_action_add'] = 'Add';
$string['mod_form_field_participant_list_action_remove'] = 'Remove';
$string['mod_form_field_participant_bbb_role_moderator'] = 'Moderator';
$string['mod_form_field_participant_bbb_role_viewer'] = 'Viewer';
$string['modulename'] = 'BigBlueButtonBN';
$string['modulenameplural'] = 'BigBlueButtonBN';
$string['modulename_help'] = 'BigBlueButtonBN lets you create from within Moodle links to real-time on-line classrooms using BigBlueButton, an open source web conferencing system for distance education.

Using BigBlueButtonBN you can specify for the title, description, calendar entry (which gives a date range for joining the session), groups, and details about the recording of the on-line session.

To view later recordings, add a RecordingsBN resource to this course.';
$string['modulename_link'] = 'BigBlueButtonBN/view';
$string['pluginadministration'] = 'BigBlueButton administration';
$string['pluginname'] = 'BigBlueButtonBN';
$string['serverhost'] = 'Server Name';
$string['view_error_no_group_student'] = 'You have not been enrolled in a group. Please contact your Teacher or the Administrator.';
$string['view_error_no_group_teacher'] = 'There are no groups configured yet. Please set up groups or contact the Administrator.';
$string['view_error_no_group'] = 'There are no groups configured yet. Please set up groups before trying to join the meeting.';
$string['view_error_unable_join_student'] = 'Unable to connect to the BigBlueButton server. Please contact your Teacher or the Administrator.';
$string['view_error_unable_join_teacher'] = 'Unable to connect to the BigBlueButton server. Please contact the Administrator.';
$string['view_error_unable_join'] = 'Unable to join the meeting. Please check the url of the BigBlueButton server AND check to see if the BigBlueButton server is running.';
$string['view_error_create'] = 'The BigBlueButton server responded with an error message, the meeting could not be created.';
$string['view_error_max_concurrent'] = 'Number of concurrent sessions allowed has been reached.';
$string['view_groups_selection_join'] = 'Join';
$string['view_groups_selection'] = 'Select the group you want to join and confirm the action';
$string['view_login_moderator'] = 'Logging in as moderator ...';
$string['view_login_viewer'] = 'Logging in as viewer ...';
$string['view_noguests'] = 'The BigBlueButtonBN is not open to guests';
$string['view_nojoin'] = 'You are not in a role allowed to join this session.';
$string['view_recording_list_actionbar_delete'] = 'Delete';
$string['view_recording_list_actionbar_hide'] = 'Hide';
$string['view_recording_list_actionbar_show'] = 'Show';
$string['view_recording_list_actionbar'] = 'Toolbar';
$string['view_recording_list_activity'] = 'Activity';
$string['view_recording_list_course'] = 'Course';
$string['view_recording_list_date'] = 'Date';
$string['view_recording_list_description'] = 'Description';
$string['view_recording_list_duration'] = 'Duration';
$string['view_recording_list_recording'] = 'Recording';
$string['view_wait'] = 'The virtual class has not yet started.  Waiting until a moderator joins ...';

$string['event_activity_created'] = 'BigBlueButtonBN activity created';
$string['event_activity_viewed'] = 'BigBlueButtonBN activity viewed';
$string['event_activity_viewed_all'] = 'BigBlueButtonBN activity management viewed';
$string['event_activity_modified'] = 'BigBlueButtonBN activity modified';
$string['event_activity_deleted'] = 'BigBlueButtonBN activity deleted';
$string['event_meeting_created'] = 'BigBlueButtonBN meeting created';
$string['event_meeting_joined'] = 'BigBlueButtonBN meeting joined';
$string['event_meeting_left'] = 'BigBlueButtonBN meeting left';
$string['event_meeting_ended'] = 'BigBlueButtonBN meeting forcibly ended';


'Recording feature default value can be edited'

?>