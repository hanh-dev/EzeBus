import { initializeApp } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-app.js";
import { getAuth, signInWithPopup, GoogleAuthProvider, onAuthStateChanged } from "https://www.gstatic.com/firebasejs/10.4.0/firebase-auth.js";

const firebaseConfig = {
    apiKey: "AIzaSyD0Ctfde1AdzEz4Dc0ufp2hYEErYd4lSR8",
    authDomain: "laravel-9b066.firebaseapp.com",
    databaseURL: "https://laravel-9b066-default-rtdb.firebaseio.com",
    projectId: "laravel-9b066",
    storageBucket: "laravel-9b066.appspot.com",
    messagingSenderId: "600928995577",
    appId: "1:600928995577:web:3c4e5714bb26f3f186fa28",
    measurementId: "G-S2N1R5SNW6"
};

const app = initializeApp(firebaseConfig);
const auth = getAuth(app);
const provider = new GoogleAuthProvider();

onAuthStateChanged(auth, (user) => {
    if (user) {
        console.log("User đã đăng nhập:", user);
        window.location.href = "/home";
    }
});

document.getElementById("googleLogin").addEventListener("click", async function () {
    try {
        const result = await signInWithPopup(auth, provider);
        const user = result.user;
        console.log("Dữ liệu gửi lên server:", {
            name: user.displayName,
            email: user.email,
            uid: user.uid,
            avatar: user.photoURL
        });

        // Gửi thông tin user lên Laravel
        const response = await fetch('/add-users', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({
                name: user.displayName,
                email: user.email,
                uid: user.uid,
                avatar: user.photoURL,
                password: 'sponseredbygoogle'
            })
        });
        const data = await response.json();
        console.log('Data: ', data);
        if(response.success) {
            window.location.href('/home')
        } else {
            console.error("Error from server: ", data);
        }
        console.log("Phản hồi từ server:", data);

    } catch (error) {
        console.error("Google Login Error:", error);
    }
});