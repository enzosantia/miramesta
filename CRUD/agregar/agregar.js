import { getFirestore, collection, addDoc } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-firestore.js";

const db = getFirestore();

export async function agregarPelicula(titulo, duracion) {
    try {
        const docRef = await addDoc(collection(db, "peliculas"), {
            titulo: titulo,
            duracion: duracion
        });
        console.log(`Película agregada: ${titulo} - ID: ${docRef.id}`);
    } catch (e) {
        console.error("Error al agregar película: ", e);
    }
}
