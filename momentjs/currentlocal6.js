<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
function getCurrentLocalDateTime() {
    var now = moment();
    var date = now.format('YYYY-MM-DD');
    var month = now.format('MMMM');
    var year = now.format('YYYY');
    var hours = now.format('HH');
    var minutes = now.format('mm');
  
    return {
      date: date,
      month: month,
      year: year,
      hours: hours,
      minutes: minutes
    };
  }
  
  // Example usage:
  var currentDateTime = getCurrentLocalDateTime();
  console.log(currentDateTime.date);
  console.log(currentDateTime.month);
  console.log(currentDateTime.year);
  console.log(currentDateTime.hours);
  console.log(currentDateTime.minutes);
  