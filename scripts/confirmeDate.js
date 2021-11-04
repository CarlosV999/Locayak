function validerDate() {
  var dateObject = $("#dateDebutDisponibiliter").datepicker('getDate');
  $("#prix").innerHTML = 4;

  //$('#date').datepicker('option', 'minDate', new Date(startDate));
}
function configurerDate(dateNonFormater) {
  let date = new Date(dateNonFormater);
  console.log(date);
  
}
$(document).ready(function() {

//Lors de la selection de la date
$("#dateDebutDisponibiliter").datepicker({
  
  maxDate: '+2m',
  minDate: dateDebut,
  
  onSelect: function(dateText, inst) {
    var dateObject = $("#dateDebutDisponibiliter").datepicker('getDate');
    let datePourDebutFin = new Date(dateObject);
    let dateFinLocation = new Date(dateObject);
    datePourDebutFin.setDate(datePourDebutFin.getDate() + 2); 
    dateFinLocation.setDate(datePourDebutFin.getDate() + 12); 
    $('#dateFinDisponibiliter').datepicker('option', 'minDate', new Date(datePourDebutFin));
    $('#dateFinDisponibiliter').datepicker('option', 'maxDate', new Date(dateFinLocation));
  }
});
});



