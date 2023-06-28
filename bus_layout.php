<div class="row main-container width-min mt-24">
    <div class="col width-fit py-24">
        <img src="assets\svg\bus-wheel.svg">
    </div>
    <div class="divisor"></div>
    <div class=" d-flex p-32">
        <div class="col width-fit">
            <div class="bus-seats">
                <div class="bus-seat" onclick="toggleSeatStatus(this)">1</div>
                <div class="bus-seat" onclick="toggleSeatStatus(this)">2</div>
                <div class="bus-seat" onclick="toggleSeatStatus(this)">5</div>
                <div class="bus-seat" onclick="toggleSeatStatus(this)">6</div>
                <!-- Add more seat divs as needed -->
            </div>
        </div>
        <div class="col width-fit">
            <div class="bus-seats">
                <div class="bus-seat" onclick="toggleSeatStatus(this)">3</div>
                <div class="bus-seat" onclick="toggleSeatStatus(this)">4</div>
                <div class="bus-seat" onclick="toggleSeatStatus(this)">7</div>
                <div class="bus-seat" onclick="toggleSeatStatus(this)">8</div>
                <!-- Add more seat divs as needed -->
            </div>
        </div>
    </div>
</div>
<div class="row mt-24">
    <div class="col d-flex info-seat">
        <div class="col d-flex">
            <div class="circle yellow"></div>
            <span class="body-xs">Asientos disponible</span>
        </div>
        <div class="col d-flex">
            <div class="circle blue"></div>
            <span class="body-xs">Asientos seleccionados</span>

        </div>
        <div class="col d-flex">
            <div class="circle grey"></div>
            <span class="body-xs">Asientos ocupados</span>

        </div>
    </div>
    <div class="row">
        <div class="col">
            <a class="btn jps-button medium" href="pasajeros.php">Continuar</a>
        </div>
    </div>
</div>