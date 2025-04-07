const btnBooking = document.querySelector("#booking");
btnBooking.addEventListener('click', ()=> {
    document.querySelector(".user-info1").style.display = "none";
    document.querySelector(".user-info").style.display = "block";
    document.querySelector(".tickets").style.display = "block";
})

document.addEventListener("DOMContentLoaded", function () {
    const tabs = document.querySelectorAll(".tab");
    const ticketContainer = document.querySelector(".ticket-container");

    tabs.forEach(tab => {
      tab.addEventListener("click", function () {
        // Xóa class "active" khỏi tất cả tabs
        tabs.forEach(t => t.classList.remove("active"));
        this.classList.add("active");

        // Thay đổi nội dung ticket tương ứng
        let tabName = this.innerText.toLowerCase(); // active, completed, cancelled

        let ticketHTML = "";
        if (tabName === "active") {
          ticketHTML = `
            <div class="ticket">
              <div class="ticket-header">
                <div class="location"><p>Chennai CMBT</p><h3>CHN</h3></div>
                <div class="time"><p><i class="fas fa-clock"></i> 3.05hrs</p></div>
                <div class="location right"><p>Bangalore BS</p><h3>BLR</h3></div>
              </div>
              <div class="ticket-details">
                <span class="icon-tickets1"><i class="far fa-calendar-alt"></i> Today</span>
                <span class="icon-tickets2"><i class="fas fa-user-friends"></i> 2 Persons</span>
                <span class="icon-tickets3"><i class="fas fa-coins"></i> £89/-</span>
              </div>
            </div>`;
        } else if (tabName === "completed") {
          ticketHTML = `
          <div class="ticket">
              <div class="ticket-header">
                <div class="location"><p>Chennai CMBT</p><h3>CHN</h3></div>
                <div class="time"><p><i class="fas fa-clock"></i> 3.05hrs</p></div>
                <div class="location right"><p>Bangalore BS</p><h3>BLR</h3></div>
              </div>
              <div class="ticket-details">
                <span class="icon-tickets1"><i class="far fa-calendar-alt"></i> Today</span>
                <span class="icon-tickets2"><i class="fas fa-user-friends"></i> 2 Persons</span>
                <span class="icon-tickets3"><i class="fas fa-coins"></i> £89/-</span>
              </div>
            </div>
          `;
        } else {
          ticketHTML = `
          <div class="ticket">
              <div class="ticket-header">
                <div class="location"><p>Chennai CMBT</p><h3>CHN</h3></div>
                <div class="time"><p><i class="fas fa-clock"></i> 3.05hrs</p></div>
                <div class="location right"><p>Bangalore BS</p><h3>BLR</h3></div>
              </div>
              <div class="ticket-details">
                <span class="icon-tickets1"><i class="far fa-calendar-alt"></i> Today</span>
                <span class="icon-tickets2"><i class="fas fa-user-friends"></i> 2 Persons</span>
                <span class="icon-tickets3"><i class="fas fa-coins"></i> £89/-</span>
              </div>
            </div>`;
        }

        // Thay đổi nội dung mà không ảnh hưởng CSS
        ticketContainer.innerHTML = ticketHTML;
      });
    });
  });