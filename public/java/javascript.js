// // Obtener elementos del DOM
// const selectOpciones = document.getElementById('opciones');
// const campoEntrada = document.getElementById('campoEntrada');

// // Agregar evento de cambio al select
// selectOpciones.addEventListener('change', mostrarCampoEntrada);

// function mostrarCampoEntrada() {
//     const seleccionada = selectOpciones.options[selectOpciones.selectedIndex];
//     if (seleccionada.value === 'si') {
//         campoEntrada.style.display = 'block';
//     } else {
//         campoEntrada.style.display = 'none';
//     }
// }
// Obtener elementos del DOM
const elegir = document.getElementById('elegir');
const campo = document.getElementById('campo');

// Agregar evento de cambio al select
elegir.addEventListener('change', mostrarcampo);

function mostrarCampoEntrada() {
    const seleccionada = elegir.options[elegir.selectedIndex];
    if (seleccionada.value === 'si') {
        campo.style.display = 'block';
    } else {
        campo.style.display = 'none';
    }
}