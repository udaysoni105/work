<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
function convertToUTCTime(dateString) {
    return moment.utc(dateString, 'YYYY-MM-DD HH:mm:ss').format('YYYY-MM-DD HH:mm:ss');
  }
  
  // Example usage:
  var date = "2017-12-5 12:14:50";
  var utcTime = convertToUTCTime(date);
  console.log(utcTime);
  