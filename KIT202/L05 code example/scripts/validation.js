const myForm = document.querySelector("#myForm");
if (myForm) {
    myForm.addEventListener("submit", validateForm);
}

function validateForm(event) {
    // Shortcut to get the form element as it will have generated
    // the submit event and therefore will be the target.
    const frm = event.target;

    // Alternatively, each element could be retrieved using standard DOM methods
    // let firstName = document.querySelector("#first");

    // Remove all invalid CSS classes
    // The 'of' foreach loop returns all objects of a collection; in this case, all children of the form
    for (let elem of frm) {
        elem.classList.remove("invalid");
    }

    // Assume the form is valid.
    let valid = true;

    if (frm.first.value === "" || frm.first.value.length < 3) {
        valid = false;
        console.log("Invalid first");
        frm.first.classList.add("invalid"); // Apply invalid class to element
    }
    if (frm.age.value < 1 || frm.age.value > 120) {
        valid = false;
        console.log("Invalid age");
    }
    if (frm.secret.value === "") {
        valid = false;
        console.log("Invalid password");
    }

    // If the form is invalid, prevent its defauly behaviour (submitting) from occuring
    if (!valid) {
        event.preventDefault();
    }
}

