function formatDateYYYYMMDD(date) {
    var yyyy = date.getFullYear().toString();
    var mm = (date.getMonth()+1).toString();
    var dd  = date.getDate().toString();

    // CONVERT mm AND dd INTO chars
    var mmChars = mm.split('');
    var ddChars = dd.split('');

    // CONCAT THE STRINGS IN YYYY-MM-DD FORMAT
    var datestring = yyyy + '-' + (mmChars[1]?mm:"0"+mmChars[0]) + '-' + (ddChars[1]?dd:"0"+ddChars[0]);
    return datestring;
}

$(document).ready(function () {

    $(function () {
        $("#datepickerForge").datepicker({
            prevText: 'Préc',
            nextText: 'Suiv',
            currentText: 'Aujourd\'hui',
            dateFormat: "yy-mm-dd",
            monthNames: ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai', 'Juin',
                'Juillet', 'Aout', 'Septembre', 'Octobre', 'Novembre', 'Decembre'],
            monthNamesShort: ['Jan', 'Fev', 'Mar', 'Avr', 'Mai', 'Jun',
                'Jul', 'Aou', 'Sep', 'Oct', 'Nov', 'Dec'],
            dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
            dayNamesShort: ['Dim', 'Lun', 'Mar', 'Mer', 'Jeu', 'Ven', 'Sam'],
            dayNamesMin: ['Di', 'Lu', 'Ma', 'Me', 'Je', 'Ve', 'Sa'],
            firstDay: 1,
            beforeShowDay: function (date) {
                var datestring = formatDateYYYYMMDD(date);
                for (var i = 0; i < joursForge.length; i++) {
                    if (joursForge[i] == datestring) {
                        return [true, 'highlight'];
                    }
                }
                return [true, 'available'];
            },
            onSelect: function(date) {
                alert(date);
            },
        });
    });
});
