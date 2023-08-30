// ex this fun when window loaded properly
window.addEventListener("load", function () {
    // fetches parameter property_ id  GET from url 
    const search = window.location.search;
    // coverts into object
    const params = new URLSearchParams(search);
    // returns the value
    const property_id = params.get('property_id');


    // fetches element in the array, 0 says first element , filled heart empty heart
    // event listener ex fun when event is clicked
    var is_interested_image = document.getElementsByClassName("is-interested-image")[0];
    is_interested_image.addEventListener("click", function (event) {
        var XHR = new XMLHttpRequest();

        // On success
        XHR.addEventListener("load", toggle_interested_success);

        // On error
        XHR.addEventListener("error", on_error);

        // Set up request
        XHR.open("GET", "api/toggle_interested.php?property_id=" + property_id);

        // Initiate the request
        XHR.send();

        document.getElementById("loading").style.display = 'block';
        event.preventDefault();
    });
});

// removing loading part
var toggle_interested_success = function (event) {
    document.getElementById("loading").style.display = 'none';
    // checking if user is logged in
    var response = JSON.parse(event.target.responseText);
    if (response.success) {
        // when user logged out , when user logged in 
        var is_interested_image = document.getElementsByClassName("is-interested-image")[0];
        var interested_user_count = document.getElementsByClassName("interested-user-count")[0];

        if (response.is_interested) {
            is_interested_image.classList.add("fas");
            is_interested_image.classList.remove("far");
            interested_user_count.innerHTML = parseFloat(interested_user_count.innerHTML) + 1;
        } else {
            is_interested_image.classList.add("far");
            is_interested_image.classList.remove("fas");
            interested_user_count.innerHTML = parseFloat(interested_user_count.innerHTML) - 1;
        }       
        // else login modal 
    } else if (!response.success && !response.is_logged_in) {
        window.$("#login-modal").modal("show");
    }
};
