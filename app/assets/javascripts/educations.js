$(document).ready(function() {
  $('#education_registered_at').on('dp.change', updateGraduateMinYear);
});

function updateGraduateMinYear(e) {
  $('#education_graduated_at').data('DateTimePicker').clear();
  $('#education_graduated_at').data('DateTimePicker').destroy();

  initDateTimePicker('#education_graduated_at', { format: 'YYYY', maxDate: moment(), minDate: e.date });
}