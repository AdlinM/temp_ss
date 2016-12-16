$(document).ready(function(){
    $('.datepicker').pickadate({
        selectMonths: true, // Creates a dropdown to control month
        selectYears: 25, // Creates a dropdown of 15 years to control year
        format: 'You selected: dddd, dd/mm/yyyy',
        format_submit: 'yyyy-mm-dd'
    });
});
