<div class="container mt-33">
    <div class="row">
        <div class="col">
            <img src="assets\svg\chevron-left.svg"></img><a href="/busesjps" class="body-s primary-blue">Volver al
                inicio</a>
        </div>
        <div class="col d-flex justify-content-end">
            <div class="d-flex mr-32">
                <div class="stepper<?php if (basename($_SERVER['PHP_SELF']) == 'results.php')
                    echo ' active'; ?> mr-8">
                    <span>1</span>
                </div>
                <span class="body-s">Seleccionar viaje</span>
            </div>
            <div class="d-flex mr-32">
                <div class="stepper<?php if (basename($_SERVER['PHP_SELF']) == 'seats.php')
                    echo ' active'; ?> mr-8">
                    <span>2</span>
                </div>
                <span class="body-s">Asientos</span>
            </div>
            <div class="d-flex mr-32">
                <div class="stepper<?php if (basename($_SERVER['PHP_SELF']) == 'pasajeros.php')
                    echo ' active'; ?> mr-8">
                    <span>3</span>
                </div>
                <span class="body-s">Pasajeros</span>
            </div>
            <div class="d-flex">
                <div class="stepper<?php if (basename($_SERVER['PHP_SELF']) == 'pago.php')
                    echo ' active'; ?> mr-8">
                    <span>3</span>
                </div>
                <span class="body-s">Pago</span>
            </div>
        </div>
    </div>
</div>