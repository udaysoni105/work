function getTotalDaysInMonth(year, month)
{
    return new Date(year, month, 0).getDate();
}

function getGujaratiDayOfWeek(date) {
    const gujaratiDaysOfWeek = ["રવિવાર", "સોમવાર", "મંગળવાર", "બુધવાર", "ગુરુવાર", "શુક્રવાર", "શનિવાર"];
    const dayOfWeek = date.getDay();
    return gujaratiDaysOfWeek[dayOfWeek];
  }

const year = 2023;
const month = 6;
const totalDays = getTotalDaysInMonth(year, month);
console.log(`Total days in ${month}/${year}: ${totalDays}`);

const date = new Date(year, month-1, 27);
const gujaratiDayOfWeek = getGujaratiDayOfWeek(date);
console.log(`Gujarati day of week for ${date.toLocaleDateString()}: ${gujaratiDayOfWeek}`); 