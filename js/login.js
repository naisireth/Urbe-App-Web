(function () {
	"use strict";

	// Fetch all the forms we want to apply custom Bootstrap validation styles to
	var forms = document.querySelectorAll(".needs-validation");

	// Loop over them and prevent submission
	Array.prototype.slice.call(forms).forEach(function (form) {
		form.addEventListener(
			"submit",
			function (event) {
				if (!form.checkValidity()) {
					event.preventDefault();
					event.stopPropagation();
				}

				form.classList.add("was-validated");
			},
			false
		);
	});
})();

function mostrarContrasena() {
	var tipo = document.getElementById("password");
	if (tipo.type == "password") {
		tipo.type = "text";
		
		document.getElementById("view-icon").classList.remove("fa-eye-slash");
		document.getElementById("view-icon").classList.add("fa-eye");
	} else {
		tipo.type = "password";
		document.getElementById("view-icon").classList.remove("fa-eye");
		document.getElementById("view-icon").classList.add("fa-eye-slash");
	}
}


