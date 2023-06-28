<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
    <title>Buses JPS</title>
</head>

<body>
    <header>
        <?php
        require 'header.php';
        ?>
    </header>
    <header>
        <?php
        require 'topbar.php';
        ?>
    </header>
    <section>
        <div class="container">
            <div class="row mt-33">
                <div class="col-4 container-resumen">
                    <?php
                    require 'resumen.php';
                    ?>
                </div>
                <div class="col resultado-container">
                    <div class="d-flex">
                        <span class="body-xl neutral-content-primary">Pago</span>
                    </div>
                    <div class="">
                        <?php
                        require 'info_pago.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php
        require 'footer.php';
        ?>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script>
    const seats = document.querySelectorAll('.bus-seat');

    function toggleSeatStatus(seat) {
        seat.classList.toggle("selected");
        if (seat.classList.contains("occupied")) {
            seat.classList.remove("occupied");
        } else {
            seat.classList.toggle("occupied");
        }
    }
    </script>
</body>

</html>