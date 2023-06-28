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
    <section>
        <div class="container about-us">
            <div class="row mt-48">
                <div class="col d-flex justify-content-center">
                    <span class="heading-m neutral-content-primary text-center">Contacto</span>
                </div>
            </div>
            <div class="row mt-8">
                <div class="col">
                    <p class="body-m neutral-content-secondary text-left">Si quieres tomar contacto con nosotros,
                        escríbenos y te responderemos lo más rápido posible.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-6">
                    <form>
                        <div class="form-group mt-32">
                            <input type="text" class="form-control textfield" id="fname" aria-describedby="fname"
                                placeholder="Nombre">
                        </div>
                        <div class="form-group mt-39">
                            <input type="text" class="form-control textfield" id="lname" aria-describedby="lname"
                                placeholder="Apellidos">
                        </div>
                        <div class="form-group mt-39">
                            <input type="email" class="form-control textfield" id="email" aria-describedby="email"
                                placeholder="Email">
                        </div>
                        <div class="form-group mt-39">
                            <input type="number" class="form-control textfield" id="phonenumber"
                                aria-describedby="phonenumber" placeholder="Teléfono">
                        </div>
                        <div class="form-group mt-39">
                            <textarea class="form-control textfield" id="message" rows="5"
                                placeholder="Mensaje"></textarea>
                        </div>

                        <div class="mt-39">
                            <img src=" assets\svg\image 18.png">
                        </div>
                        <div class="mt-32">
                            <button class="btn jps-button medium " disabled>Enviar mensaje</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row mt-96">
                <div class="col text-center">
                    <p><span class="heading-xs neutral-content-primary">También puedes contactarnos a través de:</span>
                    </p>
                </div>
            </div>
            <div class="row mt-32 align-items-center">
                <div class="col d-flex align-items-center whatsapp-container">
                    <img src="assets/svg/help-illustracion.svg">
                    <div class="ml-54">
                        <div class="d-flex"><img src="assets/svg/whatsapp.svg"> <span
                                class="body-xl neutral-content-primary fw-bold">+569 8765 4321</span></div>
                        <div class="mt-9"><span class="body-m neutral-content-secondary">Llámanos o escríbenos de lunes
                                a
                                viernes en
                                horario continuado las 24 horas.</span></div>
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
</body>

</html>