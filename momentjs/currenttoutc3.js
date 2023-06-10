<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
function convertToUTCDate() {
    return moment().utc().format('YYYY-MM-DD');
  }
  
  // Example usage:
  var utcDate = convertToUTCDate();
  console.log(utcDate);
  