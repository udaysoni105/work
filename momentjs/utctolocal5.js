<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
function convertToLocalStorage(utcDate) {
    return moment.utc(utcDate, 'YYYY-MM-DD HH:mm:ss').local().format('YYYY-MM-DD HH:mm:ss');
  }
  
  // Example usage:
  var utcDate = "2017-12-28 10:12:45";
  var localTime = convertToLocalStorage(utcDate);
  console.log(localTime);
  