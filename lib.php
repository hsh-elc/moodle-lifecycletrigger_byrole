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
 * Class to identify the courses to be deleted since they miss a
 * a person in charge.
 *
 * @package tool_cleanupcourses
 * @copyright  2017 Tobias Reischmann WWU Nina Herrmann WWU
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
namespace tool_cleanupcourses\trigger;

use tool_cleanupcourses\response\trigger_response;

defined('MOODLE_INTERNAL') || die();
require_once(__DIR__ . '/../lib.php');


class byrole implements base {
    /**
     * Checks the course and returns a response, which tells if the course should be further processed.
     * @param $course object to be processed.
     * @return trigger_response
     */
    public function check_course($course) {
        global $CFG;
        $delay = $CFG->cleanupcoursestrigger_byrole_delay;
        $roles = $CFG->cleanupcoursestrigger_byrole_roles;
        return trigger_response::next();
    }
}