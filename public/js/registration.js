var checkbox = document.getElementById("check-startup");
var additionalInputDiv = document.getElementById("additional-input");
const kode_referal = document.getElementById("kode-referal")

var startupNameInput = document.getElementById("startup-name");
var startupDescriptionInput = document.getElementById("startup-description");
const inputRefferal = document.getElementById("referal");

  checkbox.addEventListener("change", function() {
    if (checkbox.checked) {
        inputRefferal.value = "";
        additionalInputDiv.style.display = "block";
        kode_referal.style.display = "none"
    } else {
        startupNameInput.value = ""; // Menghapus nilai input nama startup
        startupDescriptionInput.value = ""; // Menghapus nilai input deskripsi startup
        additionalInputDiv.style.display = "none";
        kode_referal.style.display = "block"
    }
  });

const hustler = document.getElementById('hustler');
const hipster = document.getElementById('hipster');
const hacker = document.getElementById('hacker');

const listHustler = document.getElementById('list-hustler');
const listHipster = document.getElementById('list-hipster');
const listHacker = document.getElementById('list-hacker');

hacker.addEventListener('click', () => {
    listHacker.style.display = 'block';
    listHipster.style.display = 'none';
    listHustler.style.display = 'none';

    // listHacker animation display fade
    listHacker.classList.add('fade-in');
    listHipster.classList.remove('fade-in');
    listHustler.classList.remove('fade-in');
});

hipster.addEventListener('click', () => {
    listHipster.style.display = 'block';
    listHacker.style.display = 'none';
    listHustler.style.display = 'none';

    // listHipster animation display fade
    listHipster.classList.add('fade-in');
    listHacker.classList.remove('fade-in');
    listHustler.classList.remove('fade-in');
});

hustler.addEventListener('click', () => {
    listHustler.style.display = 'block';
    listHipster.style.display = 'none';
    listHacker.style.display = 'none';

    // listHustler animation display fade
    listHustler.classList.add('fade-in');
    listHipster.classList.remove('fade-in');
    listHacker.classList.remove('fade-in');
});
