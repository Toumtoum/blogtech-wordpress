
var maintenant=new Date();
var jour=maintenant.getDate();
var mois=maintenant.getMonth()+1;
var an=maintenant.getFullYear();
var heure=maintenant.getHours();
var minutes=maintenant.getMinutes();
var secondes=maintenant.getSeconds();

document.getElementById("Date").innerHTML = (jour+"/"+mois+"/"+an);


function confirmationEnvoi() {
  alert ("Votre Message a été envoyé");
}
