document.addEventListener("DOMContentLoaded", function () {
    const typeSiteSelect = document.getElementById("type_site");
    const autreField = document.getElementById("autre_field");
    const autreInput = document.getElementById("type_site_autre");

    // Toggle autre field
    typeSiteSelect.addEventListener("change", function () {
        if (typeSiteSelect.value === "autre") {
            autreField.style.display = "block";
            autreInput.required = true;
        } else {
            autreField.style.display = "none";
            autreInput.required = false;
            autreInput.value = "";
        }
    });

    // Aperçu logo
    const logoInput = document.getElementById("logo");
    const previewImage = document.createElement("img");
    previewImage.style.maxWidth = "200px";
    previewImage.style.marginTop = "10px";
    logoInput.parentNode.appendChild(previewImage);

    logoInput.addEventListener("change", function () {
        const file = logoInput.files[0];
        if (file && file.type.startsWith("image/")) {
            const reader = new FileReader();
            reader.onload = function (e) {
                previewImage.src = e.target.result;
            };
            reader.readAsDataURL(file);
        } else {
            previewImage.src = "";
        }
    });

    // Validation avant envoi
    const form = document.querySelector("form");
    form.addEventListener("submit", function (e) {
        if (typeSiteSelect.value === "autre" && !autreInput.value.trim()) {
            e.preventDefault();
            alert("Veuillez préciser le type de site.");
            autreInput.focus();
        }
    });
});
