$(document).ready(function() {
    $("#DateFrom").datepicker({
        showOn: 'button',
        buttonImageOnly: true,
        buttonImage: 'http://pet.loc/pet/owner/img/Calendar.ico',
        monthNames: ['Январь', 'Февраль', 'Март', 'Апрель',
            'Май', 'Июнь', 'Июль', 'Август', 'Сентябрь',
            'Октябрь', 'Ноябрь', 'Декабрь'],
        dayNamesMin: ['Вс','Пн','Вт','Ср','Чт','Пт','Сб'],
        firstDay: 1,



    });
});
$( function() {
    $( ".widget button" )
        .eq( 0 ).button()
        .end().eq( 1 ).button( {
        icon: "ui-icon-gear",
        showLabel: false
    } ).end().eq( 2 ).button( {
        icon: "ui-icon-gear"
    } ).end().eq( 3 ).button( {
        icon: "ui-icon-gear",
        iconPosition: "end"
    } ).end().eq( 4 ).button( {
        icon: "ui-icon-gear",
        iconPosition: "top"
    } ).end().eq( 5 ).button( {
        icon: "ui-icon-gear",
        iconPosition: "bottom"
    } );
} );