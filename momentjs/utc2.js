<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
function getCurrentUTCDateTime() {
    return moment.utc().format('YYYY-MM-DD HH:mm:ss');
  }
  
  // Example usage:
  var currentUTCDateTime = getCurrentUTCDateTime();
  console.log(currentUTCDateTime);
  