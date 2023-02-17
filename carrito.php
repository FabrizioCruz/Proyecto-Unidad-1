<?php
session_start();
if (empty($_SESSION["cliente"])) {
    header("Location: index.php");
    exit();
}
if (isset($_REQUEST["vaciar"])) {
    unset($_SESSION["carrito"]);
    header("Location: carrito.php");
}
if (isset($_REQUEST["eliminar"])) {
    $producto = $_REQUEST["eliminar"];
    unset($_SESSION["carrito"][$producto]);
    header("Location: carrito.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="diseños.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
</head>

<body>
    <div class="wrapper">
        <aside>
            <header>
                <h1 class="logo"><i class="bi bi-xbox"></i>XBOX</h1>
            </header>
            <nav>
                <ul>
                    <li><a class="boton-menu boton-volver" href="cliente.php"><i class="bi bi-arrow-bar-left"></i></i>Seguir comprando</a></li>
                    <li><a class="boton-menu boton-carro active" href="carrito.php"><i class="bi bi-cart2"></i>Carrito</a></li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© 2023 Fabricio Cruz</p>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal">Carrito</h2>
            <div class="contenedor-carrito">
                <?php
                $total = 0;
                if (isset($_SESSION["carrito"])) {
                    foreach ($_SESSION["carrito"] as $indice => $arreglo) {
                        $subtotal = $arreglo["can"] * $arreglo["prec"];
                        $total += $subtotal;
                ?>
                        <div class="carrito-productos">
                            <div class="carrito-producto">
                                <img class="carrito-producto-imagen" src="<?php echo $arreglo["imgp"] ?>" alt="">
                                <div class="carrito-producto-titulo">
                                    <small>Titulo</small>
                                    <p><?php echo $indice; ?>
                                    <p>
                                </div>
                                <div class="carrito-cantidad">
                                    <small>Cantidad</small>
                                    <p><?php echo $arreglo["can"]; ?></p>
                                </div>
                                <div class="carrito-precio">
                                    <small>Precio</small>
                                    <p>$<?php echo $arreglo["prec"]; ?></p>
                                </div>
                                <div class="carrito-subtotal">
                                    <small>Subtotal</small>
                                    <p>$<?php echo $subtotal; ?></p>
                                </div>
                                <a href="carrito.php?eliminar=<?php echo "$indice"; ?>" class="carrito-eliminar"><i class="bi bi-trash3"></i></a>
                            </div>
                        </div>
                    <?php
                    }
                } else {
                    ?>
                    <p class="carrito-vacio" style="color: #286d31;">El carrito esta vacío <i class="bi bi-emoji-dizzy"></i></p>
                <?php
                }
                ?>
                <div class="carrito-acc">
                    <div class="carrito-izq">
                        <br>
                        <a href="carrito.php?vaciar=true" class="carrito-vaciar">Vaciar carrito</a>
                    </div>
                    <div class="carrito-der">
                        <div class="acciones-total">
                            <p>Total:</p>
                            <p id="total">$<?php echo $total; ?></p>
                        </div>
                        <button data-bs-toggle="modal" data-bs-target="#exampleModal" method="post" class="carrito-comprar">Comprar</button>
                    </div>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                Muchas gracias por tu compra. <i class="bi bi-emoji-laughing"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>

</html>