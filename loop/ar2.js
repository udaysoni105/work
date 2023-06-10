const data = {
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

const customerID = [];
for (i=0; i<data.data.length; i++)
{
    const customer = data.data[i].customer;
    customerID.push(customer.id);
}
console.log(customerID);

 //FOREACH LOOP

 const cID = [];
 data.data.forEach((items) => {
    const customer = items.customer;
    cID.push(customer.id);
 });

 //WHILE LOOP

let j = 0;
while (j<data.data.length)
{
    const item = data.data[j];
    console.log(item.customer.id);
    j++;
}

//DO-WHILE LOOP

let k=0;
do 
{
    console.log(data.data[k].customer.id);
    k++;
}while(k<data.data.length);