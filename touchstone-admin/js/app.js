function generateQr(thing){
    new QRCode(document.getElementById("qrcode"), thing);
    document.getElementById("qrModal").classList.add("active");
}

function qrClose(){
    document.getElementById("qrcode").innerHTML = "";
    document.getElementById("qrModal").classList.remove("active");
}