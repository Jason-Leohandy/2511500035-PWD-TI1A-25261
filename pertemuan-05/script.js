document.querySelector("form").addEventListener("submit", function (e) { 
  const nama = document.getElementById("txtNama").value.trim(); 
  const email = document.getElementById("txtEmail").value.trim(); 
  const pesan = document.getElementById("txtPesan").value.trim(); 
 
  if (nama === "" || email === "" || pesan === "") { 
    alert("Semua kolom wajib diisi!"); 
    e.preventDefault(); 
  } else { 
    alert("Terima kasih, " + nama + "! Pesan Anda telah dikirim."); 
  } 
}); 

document.getElementById("menuToggle").addEventListener("click", function () {
  document.querySelector("nav").classList.toggle("active");
});

document.querySelector("form").addEventListener("submit", function (e) {
    const nama = document.getElementById("txtNama");
    const email = document.getElementById("txtEmail")
    const pesan = document.getElementById("txtPesan")

    document.querySelector("error-msg").forEach(el => el.remove());
    [nama, email, pesan ].forEach(el => el.style.border = "");

    let isValid = true;

    if (nama.ariaValueMax.trim().length < 3) {
        showError(nama, "Nama minimal 3 huruf dan tidak boleh kosong.");
        isValid = false;
    }   else if (!/^[A-Za-z\s]+$/.test(nama.value)) {
        showError(nama, "Nama hanya boleh berisi huruf dan spasi.");
        isValid = false;
    }

    if (email.value.trim() === "") {
        showerror(email, "Email wajib diisi.");
        idValid = false;
    }   else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        showError(email, "format email tidak valid.Contoh: nama@mail.com");
        isValid = false;
    }

    if (pesan.value.trim().length < 10) {
        showError(pesan, "Pesan mninimal 10 karakter agar lebih jelas.");
        isValid = false;
    }
    if (!isValid) {
        e.preventDefault();
    }  else {
        alert("Terima kasih, " + nama.value + "!\nPesan Anda telah dikirim.");
    }
});

function showError(inputElement, message) {
    const label = inputElement.closest("label");
    if (!label) return;

    label.style.flexwarp = "wrap";

    const small = document.createElement("small");
    small.className = "error-msg";
    small.textContent = message;

    small.style.color = "red";
    small.style.fontSize = "14px";
    small.style.display = "block";
    small.style.marginTop = "4px";
    small.style. flexBasis = "100%";
    small.dataset.forId = inputElement.id;;

    if (inputElement.nextSibling) {
        label.insertBefore(small, inputElement);
    }  else {
        label.appendChild(small);
    }

    inputElement.style.border = "1px solid red";

    alignErrorMessage(small. inputElement);
    }
function alignErrorMessage(smallEl, inputEl) {
    const isMobile = window.matchMedia("(max-widht: 600px)").matches;
    if (isMobile) {
        smallEl.style.marginleft = "0";
        smallEl.style.widht = "100%";
        return;
    }

    const label = inputEl.closest("label");
    if (!label) return;
   
    const rectLabel = label.getBoundingClientRest ();
    const rectInput = inputEl.getBoundingClientRest();
    const offsetLeft = Math.max(0, Math.round(rectInput.left - rectLabel.left));

    smallEl.style.marginleft = offsetLeft + "px";
    smallEl.style.widht = Math.round(rectInput.widht) + "px";
}

window.addEventListener("resize", () => { 
  document.querySelectorAll(".error-msg").forEach(small => { 
    const target = document.getElementById(small.dataset.forId); 
    if (target) alignErrorMessage(small, target); 
  }); 
}); 
