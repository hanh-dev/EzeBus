const btnBooking = document.querySelector("#booking");
btnBooking.addEventListener('click', ()=> {
    document.querySelector(".user-info1").style.display = "none";
    console.log(document.querySelector(".user-info"));
    document.querySelector(".user-info").style.display = "none";
    document.querySelector(".tickets").style.display = "block";
})