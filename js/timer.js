function  startDate(){
    var today = new Date();
    var dd = String(today.getDate()).padStart(2,'0');
    var mm = String (today.getMonth()+1).padStart(2,'0');
    var yyyy = today.getFullYear();
    mm = checkTime(mm);
    dd = checkTime(dd);
    document.getElementById("livedate").innerHTML = yyyy + ' : ' + mm + ' : ' + dd;
}

function startTime() {
    const today = new Date();
    let h = today.getHours();
    let m = today.getMinutes();
    let s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('livetime').innerHTML = h + " : " + m + " : " + s;
    setTimeout(startTime, 1000);
}

function checkTime(i) {
    if (i < 10) {i = "0" + i}  // add zero in front of numbers < 10
    return i;
}