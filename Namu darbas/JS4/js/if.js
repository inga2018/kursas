var age = prompt ("Įveskite savo amžių", "");

ageValidation (age);

function ageValidation (){

if(isNaN(age)){
	alert ("Prašau įveskite skaičių");
}
if (age < 18) {
    alert ("Jūs negalite užeiti į svetainę");
}
else if (age >=18) {
    alert ("Jūs galite užeiti į svetainę");
} 
}
