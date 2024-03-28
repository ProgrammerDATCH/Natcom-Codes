const form = document.getElementById('form');
const nameInput = document.getElementById('nameInput');

form.addEventListener('submit', (e)=>{
    e.preventDefault();
    if(nameInput.value == ""){
        alert("Enter name please!");
    }
});