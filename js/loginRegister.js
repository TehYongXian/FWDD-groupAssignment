function setFormMessage(formElement, type, message) {
    const messageElement = formElement.querySelector(".form__message");

    messageElement.textContent = message;
    messageElement.classList.remove("form__message--success", "form__message--error");
    messageElement.classList.add(`form__message--${type}`);
}

function setInputError(inputElement, message) {
    inputElement.classList.add("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = message;
}

function clearInputError(inputElement) {
    inputElement.classList.remove("form__input--error");
    inputElement.parentElement.querySelector(".form__input-error-message").textContent = "";
}

document.addEventListener("DOMContentLoaded", () => {
    const loginForm = document.querySelector("#login");
    const createAccountForm = document.querySelector("#createAccount");

    document.querySelector("#linkCreateAccount").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.add("form--hidden");
        createAccountForm.classList.remove("form--hidden");
    });

    document.querySelector("#linkLogin").addEventListener("click", e => {
        e.preventDefault();
        loginForm.classList.remove("form--hidden");
        createAccountForm.classList.add("form--hidden");
    });

    loginForm.addEventListener("submit", e => {
        e.preventDefault();

        // Perform your AJAX/Fetch login

        setFormMessage(loginForm, "error", "Invalid username/password combination");
    });

    document.querySelectorAll(".form__input").forEach(inputElement => {
        inputElement.addEventListener("blur", e => {
            if (e.target.id === "signupUsername" && e.target.value.length > 0 && e.target.value.length < 10) {
                setInputError(inputElement, "Username must be at least 10 characters in length");
            }
        });

        inputElement.addEventListener("input", e => {
            clearInputError(inputElement);
        });
    });
});



// login validation
// const form = {
//     username: document.getElementById('username'),
//     password: document.getElementById('password'),
//     submit: document.getElementById('btn-submit'),
//     messages: document.getElementById('form-messages')
// };

// form.submit.addEventListener('click', () => {
//     const request = new XMLHttpRequest();

//     request.onload = () => {
//         let responseObject = null;

//         try {
//             responseObject = JSON.parse(request.responseText);
//         } catch (e) {
//             console.error('Could not parse JSON!');
//         }

//         if (responseObject) {
//             handleResponse(responseObject);
//         }
//     };

//     const requestData = `username=${form.username.value}&password=${form.password.value}`;

//     request.open('post', 'check-login.php');
//     request.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
//     request.send(requestData);
// });

// function handleResponse (responseObject) {
//     if (responseObject.ok) {
//         location.href = 'dashboard.html';
//     } else {
//         while (form.messages.firstChild) {
//             form.messages.removeChild(form.messages.firstChild);
//         }

//         responseObject.messages.forEach((message) => {
//             const li = document.createElement('li');
//             li.textContent = message;
//             form.messages.appendChild(li);
//         });

//         form.messages.style.display = "block";
//     }
// }