<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
// Function to add days to a date
function addDays(dateString, days) {
    return moment(dateString, 'YYYY-MM-DD').add(days, 'days').format('YYYY-MM-DD');
  }
  
  // Function to subtract days from a date
  function subtractDays(dateString, days) {
    return moment(dateString, 'YYYY-MM-DD').subtract(days, 'days').format('YYYY-MM-DD');
  }
  
  // Example usage:
  var date = "2023-05-10";
  
  var futureDate = addDays(date, 7);
  console.log(futureDate); // Output: 2023-05-17
  
  var pastDate = subtractDays(date, 3);
  console.log(pastDate); // Output: 2023-05-07
  