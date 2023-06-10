console.log ("\n Using for loop");
const gradeIDs = [];
for (let i=0; i<data.donation.length; i++)
{
    const gradeId = data.donation[i].user.student.get_grade.id;
    gradeIDs.push(gradeId);
    console.log(gradeIDs); 
    //console.log(data.donation[i].user.student.get_grade.id);
}


console.log("Using foreach loop");
data.donation.forEach(
    donation => {
        console.log(donation.user.student.get_grade.id);
    }
);

console.log("Using while loop");
let j=0;
while (j<data.donation.length)
{
    console.log(data.donation[j].user.student.get_grade.id);
    j++;
}

console.log("Using do-while loop");
let k=0;
do
{
    console.log(data.donation[k].user.student.get_grade.id);
    k++
}while (k<data.donation.length);
