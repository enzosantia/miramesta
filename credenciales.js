import { initializeApp } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-app.js";
import { getAuth } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-auth.js";

// Configuración de Firebase
const firebaseConfig = {
    apiKey: "AIzaSyAmZg851yKxO2FAPyGlzuKpyrtzqTBRY8Y",
    authDomain: "mirameesta-91b7e.firebaseapp.com",
    projectId: "mirameesta-91b7e",
    storageBucket: "mirameesta-91b7e.appspot.com",
    messagingSenderId: "1012336571139",
    appId: "1:1012336571139:web:b02138d9c2c88e6675af36",
    measurementId: "G-S34021V3E5"
};

// Inicializar Firebase
const app = initializeApp(firebaseConfig);
const auth = getAuth(app);

export default auth;
