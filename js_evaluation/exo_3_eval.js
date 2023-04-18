
var tab = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
var prénom = window.prompt("Veuillez écrire votre prénom")
if (tab.includes(prénom)) {
	tab.splice(tab.indexOf(prénom), 1);
	tab.push(" ");
}
else { alert("Votre prénom ne fait pas parti des selectionnés") }

alert(tab);