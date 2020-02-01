// this is the form in enter_new_record.php -
const coffeeform = document.querySelector('#coffee_form');

// this is a DIV in enter_new_record.php -
const response_content = document.querySelector('#response');

// this DIV contains the form in enter_new_record.php -
const container_2_form = document.querySelector('#container_2');
// show the DIV if it is hidden
container_2_form.style.display = 'block';


// event handler
coffeeform.onsubmit = (e) => {
    // gets the names and current values from the form
    const formData = new FormData(coffeeform);
    // FETCH
    fetch('enter.php', {
        method: "POST",
        body: formData,
        credentials: "same-origin"
    })
    .then( (response) => {
        if (!response.ok) {
            throw new Error("Network response was not ok");
        }
        return response.text();
    })
    .then( (data) => {
        container_2_form.style.display = 'none';
        response_content.innerHTML =
        "<p class='announce'>" + data + "</p>" +
        "<p class='middle'><a href='coffee_form.php'>Return to the form</a></p>";
    })
    .catch( (error) => {
        console.error('Error in fetch: ', error);
    }); // end of FETCH
    return false;
}; // end sockform.onsubmit
