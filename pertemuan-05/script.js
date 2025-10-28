
document.getElementById("menutoggle").addEventListener("click", function () {
  const nav = document.querySelector("nav");
  nav.classList.toggle("active");
  this.textContent = nav.classList.contains("active") ? "✖" : "☰";
});


document.getElementById("txtPesan").addEventListener("input", function () {
  const panjang = this.value.length;
  document.getElementById("charCount").textContent = panjang + "/200 karakter";
});


document.addEventListener("DOMContentLoaded", function () {
  const homeSection = document.getElementById("home");
  const ucapan = document.createElement("p");
  ucapan.textContent = "Halo! Selamat datang di halaman saya!";
  homeSection.appendChild(ucapan);
});


document.querySelector("form").addEventListener("submit", function (e) {
  const nama = document.getElementById("txtNama");
  const email = document.getElementById("txtEmail");
  const pesan = document.getElementById("txtPesan");

  
  document.querySelectorAll(".Error-msg").forEach(el => el.remove());
  [nama, email, pesan].forEach(el => el.style.border = "");

  let isValid = true;

 
  if (nama.value.trim().length < 3) {
    showError(nama, "Nama minimal 3 huruf dan tidak boleh kosong.");
    isValid = false;
  } else if (!/^[A-Za-z\s]+$/.test(nama.value)) {
    showError(nama, "Nama hanya boleh berisi huruf dan spasi.");
    isValid = false;
  }

  if (email.value.trim() === "") {
    showError(email, "Email wajib diisi.");
    isValid = false;
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
    showError(email, "Format email tidak valid. Contoh: nama@mail.com");
    isValid = false;
  }


  if (pesan.value.trim().length < 10) {
    showError(pesan, "Pesan minimal 10 karakter agar lebih jelas.");
    isValid = false;
  }


  if (!isValid) {
    e.preventDefault();
  } else {
    alert("Terima kasih, " + nama.value + "!\nPesan Anda telah dikirim.");
  }
});


function showError(inputElement, message) {
  const label = inputElement.closest("label");
  if (!label) return;

  const small = document.createElement("small");
  small.className = "Error-msg"; 
  small.textContent = message;
  label.appendChild(small);
  inputElement.style.border = "1px solid red";
}


window.addEventListener("resize", () => {
  document.querySelectorAll(".Error-msg").forEach(small => {
    const target = document.getElementById(small.dataset?.forId);
    if (target) alignErrorMessage(small, target);
  });
});
