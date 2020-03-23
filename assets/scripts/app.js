let modal = document.getElementById("contact-modal");

const showContact = () => {
    document.getElementById("contact-modal").style.display = "block";
}

const closeContact = () => {
    document.getElementById("contact-modal").style.display = "none";
}

window.onClick = event => {
    if(event.target == modal) {
        document.getElementById("contact-modal").style.display= "none";
    }
}