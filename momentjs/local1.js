<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>;
function getCurrentDateTime() {
  return moment().format("YYYY-MM-DD HH:mm:ss");
}

// Example usage:
var currentDateTime = getCurrentDateTime();
console.log(currentDateTime);
