        // Función para calcular la suma y mostrarla
        function calcularSuma() {
            // Obtener los valores de precio unitario y cantidad
            var precioUnitario = parseFloat(document.getElementById('nuevoPrecioUnitarioM').value) || 0;
            var cantidad = parseInt(document.getElementById('nuevoCantidadM').value) || 0;

            // Calcular la suma
            var suma = precioUnitario * cantidad;

            // Mostrar la suma en el campo de resultado
            document.getElementById('resultadoSuma').value = suma.toFixed(2);
        }