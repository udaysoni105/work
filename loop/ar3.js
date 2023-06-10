const detail = {
    "totalItems": 35,
    "data": [
        {
            "id": 33,
            "user_id": 12,
            "received_by": 1,
            "carrier_name": "ASN",
            "package_qty": 10,
            "package_type": "Pallet",
            "expected_arrival_date": 1514613958000,
            "actual_arrival_date": 1514615031000,
            "created_by": 12,
            "invoiced": 0,
            "recieved": 1,
            "blind_shipment": 0,
            "charge": [
                {
                    "id": 29,
                    "asn_id": 33
                },
                {
                    "id": 30,
                    "asn_id": 33
                },
                {
                    "id": 31,
                    "asn_id": 33
                },
                {
                    "id": 32,
                    "asn_id": 33
                }
            ],
            "customer": {
                "id": 12,
                "name": "jai thanki11"
            }
        },
        {
            "id": 32,
            "user_id": 12,
            "received_by": 1,
            "carrier_name": "df",
            "package_qty": 10,
            "package_type": "Pallet",
            "expected_arrival_date": 1515214490000,
            "actual_arrival_date": 1514611683000,
            "created_by": 12,
            "invoiced": 0,
            "recieved": 1,
            "blind_shipment": 0,
            "charge": [],
            "customer": {
                "id": 12,
                "name": "jai thanki11"
            }
        },
        {
            "id": 29,
            "user_id": 12,
            "received_by": 1,
            "carrier_name": "sddddddddddddddddd",
            "package_qty": 20,
            "package_type": "Pallet",
            "expected_arrival_date": 1514606581000,
            "actual_arrival_date": 1514607796000,
            "created_by": 1,
            "invoiced": 0,
            "recieved": 1,
            "blind_shipment": 1,
            "charge": [
                {
                    "id": 25,
                    "asn_id": 29
                },
                {
                    "id": 26,
                    "asn_id": 29
                },
                {
                    "id": 27,
                    "asn_id": 29
                },
                {
                    "id": 28,
                    "asn_id": 29
                }
            ],
            "customer": {
                "id": 12,
                "name": "jai thanki11"
            }
        }
    ]
}

//FOR LOOP

console.log("\n  Using for loop");
for (let a=0; a < detail.data.length;a++)
{
    for(let b=0; b<detail.data[a].charge.length; b++)
    {
        console.log(detail.data[a].charge[b].id);
    }
}


//FOREACH LOOP
console.log("\n FOREACH LOOP");
detail.data.forEach(item => {
  item.charge.forEach(chargeItem => {
    console.log(chargeItem.id);
  });
});

//WHILE LOOP
console.log("\n WHILE LOOP");
let i = 0;
while (i < detail.data.length) {
  const charges = detail.data[i].charge;
  for (let j = 0; j < charges.length; j++) {
    const chargeId = charges[j].id;
    console.log(chargeId);
  }
  i++;
}

//DO-WHILE LOOP
console.log("\n DO-WHILE LOOP");
let k = 0;
let chargeIds = [];

do {
  const charges = detail.data[k].charge;
  for (let j = 0; j < charges.length; j++) {
    chargeIds.push(charges[j].id);
  }
  k++;
} while (k < detail.data.length);

console.log(chargeIds);