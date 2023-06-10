<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
function getCurrentUTCDateTime() {
    var now = moment.utc();
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
  var currentUTCDateTime = getCurrentUTCDateTime();
  console.log(currentUTCDateTime.date);
  console.log(currentUTCDateTime.month);
  console.log(currentUTCDateTime.year);
  console.log(currentUTCDateTime.hours);
  console.log(currentUTCDateTime.minutes);
  