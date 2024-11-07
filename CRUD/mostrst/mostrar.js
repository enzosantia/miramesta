import { getFirestore, collection, getDocs } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-firestore.js";

const db = getFirestore();

export async function mostrarPeliculas() {
    const peliculasRef = collection(db, "peliculas");
    const snapshot = await getDocs(peliculasRef);
    const lista = document.createElement('ul');

    snapshot.forEach(doc => {
        const item = document.createElement('li');
        item.textContent = `${doc.data().titulo} - ${doc.data().duracion}`;
        lista.appendChild(item);
    });

    const resultadosDiv = document.getElementById("resultados");
    resultadosDiv.innerHTML = "";
    resultadosDiv.appendChild(lista);
}
