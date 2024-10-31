// eliminar.js
import { getFirestore, doc, deleteDoc } from "https://www.gstatic.com/firebasejs/10.14.1/firebase-firestore.js";

const db = getFirestore();

async function eliminarPelicula(id) {
    try {
        await deleteDoc(doc(db, "peliculas", id));
        console.log(`Película eliminada: ID ${id}`);
    } catch (e) {
        console.error("Error al eliminar película: ", e);
    }
}

// Ejemplo de uso: eliminar una película
eliminarPelicula("ID_DE_LA_PELICULA_A_ELIMINAR");
