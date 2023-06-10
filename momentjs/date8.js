<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
function convertDateFormat(dateString) {
    return moment(dateString, 'DD-MM-YYYY').format('YYYY-MM-DD');
  }
  
  // Example usage:
  var date = "10-05-2023";
  var convertedDate = convertDateFormat(date);
  console.log(convertedDate);
  