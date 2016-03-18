/**
 * Created by terehof on 18.03.2016.
 */
'use strict';
$(document).ready(function () {

    $('.test-api-btn').click(function () {

        $.ajax({
            type: 'GET',
            url: '/wp-json/wp/v2/posts',
            success: function (data) {
                console.log('success', data);
            },
            error: function (data) {
                console.log('error', data);
            }
        })


    });







});