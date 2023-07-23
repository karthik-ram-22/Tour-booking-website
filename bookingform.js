function validate() {
    let x = document.getElementsByID("mem").value;

    if (isNaN(x) || x < 1) {
        window.alert("Enter a valid number");
    }
    windoow.location.href="payment.html";
}