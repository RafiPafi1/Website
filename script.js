const email = document.getElementById('email');
const query = document.getElementById('query');
const form = document.getElementById('form');
const error = document.getElementById('error');
form.addEventListener('submit', (el) => {
    let messages = [];
    const name = document.getElementById('name');
    if(email.value === '' || email.value == null){
        messages.push('Insert a correct email!')
    }
    if(name.value === '' || name.value == null){
        messages.push('Name is required!');
    }
    if(query.value === '' || query.value == null){
        messages.push('Write some query do not leave it blank!')
    }
    
    if(messages.length > 0){
        error.innerText = messages.join(", ");
        el.preventDefault();
    }

})