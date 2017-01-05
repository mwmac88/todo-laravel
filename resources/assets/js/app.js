/**
 * Created by mattmaclean on 22/12/2016.
 */

import $ from 'jquery';
import jQuery from 'jquery';

require('material-design-lite/src/mdlComponentHandler.js');
require('material-design-lite/src/button/button.js');
require('material-design-lite/src/checkbox/checkbox.js');
require('material-design-lite/src/icon-toggle/icon-toggle.js');
require('material-design-lite/src/textfield/textfield.js');
require('material-design-lite/src/tooltip/tooltip.js');
require('material-design-lite/src/layout/layout.js');
require('material-design-lite/src/data-table/data-table.js');
require('material-design-lite/src/ripple/ripple.js');

$( document ).ready(function() {
    // Submit update form on checkbox change
    $('.c-card .c-form__check :checkbox').change( function () {
        $(this).parents('form').submit();
    });

    // Edit button click function
    // Hides view card & shows edit card
    $('.c-btn__edit, .c-btn__done').on('click', function () {
       $(this).closest('.o-container__cards').toggleClass('o-container__cards--flipped');
    });

    // Function to remove page message (Updated)
    const removeMessages = () => {
        $('#pageMessage, #pageErrors').removeClass('mdl-snackbar--active');
    };
    // Remove page message after 5000 seconds
    if ($('#pageMessage, #pageErrors').hasClass('mdl-snackbar--active')) {
        setTimeout(removeMessages, 5000);
    }
});
