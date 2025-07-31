document.addEventListener("DOMContentLoaded", function () {
    const select = document.getElementById("type_site");
    const autreDiv = document.getElementById("autre_field");
    const autreInput = document.getElementById("type_site_autre");

    function toggleField() {
        if (select.value === "autre") {
            autreDiv.style.display = "block";
            autreInput.required = true;
        } else {
            autreDiv.style.display = "none";
            autreInput.required = false;
            autreInput.value = "";
        }
    }

    select.addEventListener("change", toggleField);
});