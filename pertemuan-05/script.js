document.getElementById("menuToggle").addEventListener("click", function() {
    document.querySelector("nav").classList.toggle("active");
});

document.querySelector("form").addEventListener("submit", function (e) {
    const nama = document.getElementById("txtNama");
    const email = document.getElementById("txtEmail");
    const pesan = document.getElementById("txtPesan");

    document.querySelectorAll(".error-msg").forEach(el => el.remove());
    [nama, email, pesan].forEach(el => el.style.border = "");

    let isValid = true;

    if (nama.ValueMax.trim().length < 3) {
        showError(nama, "Nama minimal 3 huruf dan tidak boleh kosong.");
        isValid = false;
    }   else if (!/^[A-Za-z\s]+$/.test(nama.value)) {
        isValid = false;
    } 

    if (email.value.trim() === "") {
        showError(nama, "Email wajib diisi.");
        isValid = false;
    }   else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email.value)) {
        showError(email, "format email tidak valid. Contoh: nama@mail.com");
        isValid = false;
    }

    if (pesan.value.trim().lrngth < 10) {
        showError(pesan, "Pesan minimal 10 karakter agar lebih jelas.");
        isValid = false;
    }

    if (!isValid) {
        e.preventDefault();
    }   else {
        alert("Terima kasih, " + nama.value + "!\nPesan Anda telah dikirim.");
    }
});

function showError(inputElement, message) {
    const label = inputElement.closest("label");
    if (!label) return;

    label.style.flexWrap = "wrap";

    const small = document.createElement("small");
    small.className = "error.msg";
    small.textContent = message;

    small.style.color = "red";
    small.style.fontSize = "14px";
    small.style.display = "block";
    small.style.marginTop = "4px";
    small.style.flexBasis = "100%";
    small.dataset.forId = inputElement.id;

    if (inputElement.nextSibling) {
        label.insertBefore(small, inputElement.nextSibling);
    }   else {
        label.appendChild(small);
    }

    inputElement.style.border = "1px solid red";

    alignErrorMessage(small, inputElement);
}

function alignErrorMessage(smaLLEL,inputEL) {
    const isMobile = window.matchMedia("(max-width: 600px)").matches;
    if (isMobile) {
        smaLLEL.style.marginleft = "0";
        smaLLEL.style.width = "100%";
        return;
    }

    const label = inputEL.closest("label");
    if (!label) return;

    const rectLabel = label.getBoundingClientRect();
    const recInput = inputEL.getBoundingClientRect();
    const offsetLeft = Math.max(0, Math.round(recInput.left - rectLabel.left));

    smaLLEL.style.marginleft = offsetLeft + "px";
    smaLLEL.style.width = Math.round(recInput.width) + "px";
}

window.addEventListener("resize", () => {
    document.querySelectorAll(".error-msg").forEach(small => {
        const target = document.getElementById(smaLL.dataset.forId);
        if (target) alignErrorMessage(smaLL, target);
    });

});
