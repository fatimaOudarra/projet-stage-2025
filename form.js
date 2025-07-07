
document.addEventListener("DOMContentLoaded", function () {

    const typeSiteSelect = document.getElementById("type_site");

 
    const autreInput = document.createElement("input");
    autreInput.setAttribute("type", "text");
    autreInput.setAttribute("name", "type_site_autre");
    autreInput.setAttribute("id", "type_site_autre");
    autreInput.setAttribute("placeholder", "Précisez le type de site");
    autreInput.style.display = "none"; 

    typeSiteSelect.parentNode.appendChild(autreInput);


    typeSiteSelect.addEventListener("change", function () {
        if (typeSiteSelect.value === "autre") {
           
            autreInput.style.display = "block";
            autreInput.required = true;
        } else {
          
            autreInput.style.display = "none";
            autreInput.required = false;
        }
    });

   
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

  
    const form = document.querySelector("form");

    form.addEventListener("submit", function (e) {
      
        if (typeSiteSelect.value === "autre" && !autreInput.value.trim()) {
            e.preventDefault(); 
            alert("Veuillez préciser le type de site.");
            autreInput.focus();
        }
    });

});
