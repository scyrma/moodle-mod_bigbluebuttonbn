<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * The mod_bigbluebuttonbn locallib/bigbluebutton.
 *
 * @package   mod_bigbluebuttonbn
 * @copyright 2010-2017 Blindside Networks Inc
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v2 or later
 * @author    Jesus Federico  (jesus [at] blindsidenetworks [dt] com)
 */

namespace mod_bigbluebuttonbn\locallib;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/bigbluebuttonbn/locallib.php');

class bigbluebutton {

    /**
     * @param string $action
     * @param array  $data
     * @param array  $metadata
     * @return string
     */
    public static function action_url($action = '', $data = array(), $metadata = array()) {
        $baseurl = \mod_bigbluebuttonbn\locallib\config::get('server_url').'api/'.$action.'?';
        $params = '';

        foreach ($data as $key => $value) {
            $params .= '&'.$key.'='.urlencode($value);
        }

        foreach ($metadata as $key => $value) {
            $params .= '&'.'meta_'.$key.'='.urlencode($value);
        }

        return $baseurl.$params.'&checksum='.sha1($action.$params.\mod_bigbluebuttonbn\locallib\config::get('shared_secret'));
    }
}
