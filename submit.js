const Name = document.getElementById("name");
const email = document.getElementById("email");
const message = document.getElementById("message");
let button = document.getElementById("button");
// the default state is 'disabled'
button.disabled = true; 
var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

Name.addEventListener("keyup", buttonState);
email.addEventListener("change", buttonState);
message.addEventListener("keyup", buttonState);


function buttonState() {
    if (Name.value === "" || !email.value.match(mailFormat) || message.value === "") {
        button.disabled = true; // return disabled as true whenever the input field is empty or email is in the wrong format
    } else {
        button.disabled = false; // enable the button once the input field has content
    }
    //console.log("Results", document.getElementById("name").value, document.getElementById("email").value, document.getElementById("message").value);
}