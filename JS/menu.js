var clic = 1;

function mostrarmenu() {

	if (clic == 1) {

		document.getElementById("menu").style.display = "block";
		document.getElementById("conten").style.height = "500px";
		clic = clic + 1;

	} else {

		document.getElementById("menu").style.display = "none";
		document.getElementById("acc-close").checked = true;
		document.getElementById("conten").style.height = "50px";

		clic = 1;

	}
}