/**
 * Created by Sushant Gauchan
 * Email : sushant.gauchan11@gmail.com
 */
 var $ = jQuery;
 var winWidth = $(window).width();

$(document).ready(function () {
    navInit();
    modalInit();
});


/*------------------------------- Functions Starts -------------------------------*/
function navInit() {
    $('.logo-nav-wrapper .mobile-toggle').click(function() {
        $('.nav-container').toggleClass('toggle-active');
    });
}

function modalInit() {
    $('.history-toggle').click(function (e) {
        e.preventDefault();
        $('#historyModal').modal('show');
    });
}
/*-------------------------------- Functions Ends --------------------------------*/
