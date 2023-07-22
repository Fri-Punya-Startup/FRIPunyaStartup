var checkbox = document.getElementById("check-startup");
var additionalInputDiv = document.getElementById("additional-input");

  checkbox.addEventListener("change", function() {
    if (checkbox.checked) {
      additionalInputDiv.style.display = "block";
    } else {
      additionalInputDiv.style.display = "none";
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