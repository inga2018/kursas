function getAge(birthDateString) {
    var today = new Date();
    var birthDate = new Date(birthDateString);
    var age = today.getFullYear() - birthDate.getFullYear();
    var m = today.getMonth() - birthDate.getMonth();
    if (m < 17 || (m === 17 && today.getDate() < birthDate.getDate())) {
        age--;
    }
    return alert;
}

if(getAge("12/11/2000") < 18 ) {
	document.getElementById("under17").innerHTML = "Į svetainę užeiti negalite";
}  

if(getAge("10/11/2000") = > 18 ) {
   document.getElementById("18").innerHTML = "Į svetainę užeiti galite";
}  
