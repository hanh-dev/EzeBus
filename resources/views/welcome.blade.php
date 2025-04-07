<h2>Welcome, <span id="user-name"></span>!</h2>
<button id="logout-btn">Đăng xuất</button>

<script type="module">
    import { getAuth, signOut, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.7.1/firebase-auth.js";

    const auth = getAuth();

    // Lắng nghe trạng thái người dùng
    onAuthStateChanged(auth, (user) => {
        if (user) {
            document.getElementById("user-name").textContent = user.displayName;
        } else {
            // Nếu không có user, chuyển hướng về trang đăng nhập
            window.location.href = "/login";
        }
    });

    // Xử lý đăng xuất
    document.getElementById("logout-btn").addEventListener("click", () => {
        signOut(auth).then(() => {
            console.log("Đã đăng xuất Firebase!");

            // Mở tab mới để đăng xuất Google (khắc phục CORS)
            const logoutWindow = window.open("https://accounts.google.com/logout", "_blank");
            setTimeout(() => {
                if (logoutWindow) logoutWindow.close(); // Đóng tab sau 2 giây
                window.location.href = "/login"; // Chuyển hướng về trang đăng nhập
            }, 2000);

        }).catch((error) => {
            console.error("Lỗi đăng xuất Firebase:", error);
        });
    });
</script>
