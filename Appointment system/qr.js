qrEntry = document.getElementById('entry');
qrFirstname = document.getElementById('dataInput');
qrLastname = document.getElementById('lastname');
qrCategory= document.getElementById('category');

qrAddress = document.getElementById('address');
qrEmail = document.getElementById('email');
qrStatus = document.getElementById('status');

qrContactNo = document.getElementById('contactno');

// appointDate = document.getElementById('date');

// qrDOA = new Date("25 Dec, 1995 23:15:00");
qrDOA  = document.getElementById('date');
qrTOA = document.getElementById('time');
qrOffice = document.getElementById('office');

qrPOA = document.getElementById('POA');
qrQR = document.getElementById('QR-code');


qrImage = document.getElementById('imageInput');
qrColor = document.getElementById('colorInput');
qrType = document.getElementById('typeInput');

const qrCode = new QRCodeStyling({
  width: 300,
  height: 300,
  data: "If this Shows. Re-enter Valication of the QR code in the form.",
  image: "",
  dotsOptions: {
    color: "#000",
    type: "square"
  },
});

const updateQrdatainput = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQrlastname = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQrcategory = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};


const updateQraddress = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQremail = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQrcontactno = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQrstatus= () => {
  newQrData =
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQrDOA= () => {
  newQrData =
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};
const updateQrTOA = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};

const updateQroffice = () => {
  newQrData = 
  "     URS QR CODE     "+"\n"+          
  "Validity Until         : "+qrQR.value+"\n"+"\n"+

  "Entry ID                  : "+qrEntry.value+"\n"+
  "Status                    : "+qrStatus.value+"\n"+
  "Name            : "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category                : "+qrCategory.value+"\n"+
  "Address                 : "+qrAddress.value+"\n"+
  "Date of Arrival     : "+qrDOA.value+"\n"+
  "Time of Arrival    : "+qrTOA.value+"\n"+
  "Office                    : "+qrOffice.value+"\n"+
  "Purpose               : "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};

const updateQrQR = () => {
  newQrData =    
   "     URS QR CODE     "+"\n"+          
  "Validity Unti: "+qrQR.value+"\n"+"\n"+

  "Entry ID: "+qrEntry.value+"\n"+
  "Status: "+qrStatus.value+"\n"+
  "Name: "+qrFirstname.value+
  " "+qrLastname.value+"\n"+
  "Category: "+qrCategory.value+"\n"+
  "Address: "+qrAddress.value+"\n"+
  "Date of Arrival: "+qrDOA.value+"\n"+
  "Time of Arrival: "+qrTOA.value+"\n"+
  "Office: "+qrOffice.value+"\n"+
  "Purpose: "+qrPOA.value;
  qrCode.update({
    data: newQrData
  });
};


const updateQrImg = () => {
  newQrImage = URL.createObjectURL(qrImage.files[0]);
  console.log(newQrImage);
  qrCode.update({
    image: newQrImage
  });
};

const updateQrColor = () => {
  newQrColor = qrColor.value;
  qrCode.update({
    dotsOptions: {
      color: newQrColor
    }
  });
};

const updateQrType = () => {
  newQrType = qrType.value;
  qrCode.update({
    dotsOptions: {
      type: newQrType
    }
  });
};

const download = () => qrCode.download("jpeg");

qrCode.append(document.getElementById('canvas'));

    