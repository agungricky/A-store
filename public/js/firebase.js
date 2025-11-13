import { initializeApp } from "https://www.gstatic.com/firebasejs/12.5.0/firebase-app.js";
import { getDatabase } from "https://www.gstatic.com/firebasejs/12.5.0/firebase-database.js";

// Import the functions you need from the SDKs you need
// import { initializeApp } from "https://www.gstatic.com/firebasejs/12.5.0/firebase-app.js";
// TODO: Add SDKs for Firebase products that you want to use
// https://firebase.google.com/docs/web/setup#available-libraries

// Your web app's Firebase configuration
const firebaseConfig = {
    apiKey: "AIzaSyDH1AwjWhUyFhwhNY1Crat7U65E1tigGyc",
    authDomain: "airdetector-b5baf.firebaseapp.com",
    databaseURL: "https://airdetector-b5baf-default-rtdb.asia-southeast1.firebasedatabase.app",
    projectId: "airdetector-b5baf",
    storageBucket: "airdetector-b5baf.firebasestorage.app",
    messagingSenderId: "612249633567",
    appId: "1:612249633567:web:20f0333e6f19a57034e62a"
};

// Initialize Firebase
const app = initializeApp(firebaseConfig);
export const db = getDatabase(app);