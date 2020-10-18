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
 * Grading panel for simple direct grading.
 *
 * @module     core_grades/grades/grader/gradingpanel/scale
 * @package    core_grades
 * @copyright  2019 Andrew Nicols <andrew@nicols.co.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

import {saveGrade, fetchGrade} from './repository';
import {compareData} from 'core_grades/grades/grader/gradingpanel/comparison';
// Note: We use jQuery.serializer here until we can rewrite Ajax to use XHR.send()
import jQuery from 'jquery';
import {invalidResult} from './normalise';

export const fetchCurrentGrade = (...args) => fetchGrade('scale')(...args);

export const storeCurrentGrade = (component, context, itemname, userId, notifyUser, rootNode) => {
    const form = rootNode.querySelector('form');
    const grade = form.querySelector('select[name="grade"]');

    if (!grade.checkValidity() || !grade.value.trim()) {
        return invalidResult;
    }

    if (compareData(form) === true) {
        return saveGrade('scale')(component, context, itemname, userId, notifyUser, jQuery(form).serialize());
    } else {
        return '';
    }
};
