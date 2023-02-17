<?php
session_start();
if (empty($_SESSION["usuario"])) {
    header("Location: index.php");
    exit();
}

if (isset($_REQUEST["btnAgregar"])) {
    $img = $_REQUEST["imagen"];
    $producto = $_REQUEST["nombre-producto"];
    $cantidad = $_REQUEST["cant"];
    $costo = $_POST["precio"];

    $_SESSION["carrito"][$producto]["imgp"] = $img;
    $_SESSION["carrito"][$producto]["can"] = $cantidad;
    $_SESSION["carrito"][$producto]["prec"] = $costo;


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
                <ul class="menu">
                    <li><button class="boton-menu boton-categoria active"><i class="bi bi-controller"></i></i>Juegos</button></li>
                    <li><a class="boton-menu boton-carro" href="carrito.php"><i class="bi bi-cart2"></i>Carrito</a></li>
                    <li><A class="boton-menu boton-cerrar" href="Cerrar.php"><i class="bi bi-door-open"></i></i>Cerrar sesión<a></li>
                </ul>
            </nav>
            <footer>
                <p class="texto-footer">© 2023 Fabricio Cruz</p>
            </footer>
        </aside>
        <main>
            <h2 class="titulo-principal">Juegos</h2>
            <div class="contenedor-productos">
                <div class="producto">
                    <form action="cliente.php" method="post">
                        <input type="hidden" name="nombre-producto" value="Battlefield 2042">
                        <input type="hidden" name="precio" value="750">
                        <input type="hidden" name="imagen" value="./img/btf.jpeg">
                        <img class="producto-img" src="./img/btf.jpeg" alt="">
                        <div class="producto-detalles">
                            <h3 class="producto-titulo">Battlefield 2042 </h3>
                            <p class="producto-precio">$750</p>
                            <div>
                                <label for="can" style="font-size: large;">Cantidad</label>
                                <input type="number" name="cant" value="1" min="1" class="cantidad" id="can">
                            </div>
                            <button name="btnAgregar" type="submit" class="producto-agregar">Agregar al carrito</button>
                        </div>
                    </form>
                </div>
                <div class="producto">
                    <form action="cliente.php" method="post">
                        <input type="hidden" name="nombre-producto" value="Halo">
                        <input type="hidden" name="precio" value="1499">
                        <input type="hidden" name="imagen" value="./img/halo.jpeg">
                        <img class="producto-img" src="./img/halo.jpeg" alt="">
                        <div class="producto-detalles">
                            <h3 class="producto-titulo">Halo infinite</h3>
                            <p class="producto-precio">$1499</p>
                            <div>
                                <label for="can" style="font-size: large;">Cantidad</label>
                                <input type="number" name="cant" value="1" min="1" class="cantidad" id="can">
                            </div>
                            <button name="btnAgregar" type="submit" class="producto-agregar">Agregar al carrito</button>
                        </div>
                    </form>
                </div>
                <div class="producto">
                    <form action="cliente.php" method="post">
                        <input type="hidden" name="nombre-producto" value="Modern Warfare II">
                        <input type="hidden" name="precio" value="1399">
                        <input type="hidden" name="imagen" value="./img/cod.jpeg">
                        <img class="producto-img" src="./img/cod.jpeg" alt="">
                        <div class="producto-detalles">
                            <h3 class="producto-titulo">COD: Modern Warfare II</h3>
                            <p class="producto-precio">$1399</p>
                            <div>
                                <label for="can" style="font-size: large;">Cantidad</label>
                                <input type="number" name="cant" value="1" min="1" class="cantidad" id="can">
                            </div>
                            <button name="btnAgregar" type="submit" class="producto-agregar">Agregar al carrito</button>
                        </div>
                    </form>
                </div>
                <div class="producto">
                    <form action="cliente.php" method="post">
                        <input type="hidden" name="nombre-producto" value="Dead Space">
                        <input type="hidden" name="precio" value="1599">
                        <input type="hidden" name="imagen" value="./img/dead-space.jpeg">
                        <img class="producto-img" src="./img/dead-space.jpeg" alt="">
                        <div class="producto-detalles">
                            <h3 class="producto-titulo">Dead Space</h3>
                            <p class="producto-precio">$1599</p>
                            <div>
                                <label for="can" style="font-size: large;">Cantidad</label>
                                <input type="number" name="cant" value="1" min="1" class="cantidad" id="can">
                            </div>
                            <button name="btnAgregar" type="submit" class="producto-agregar">Agregar al carrito</button>
                        </div>
                    </form>
                </div>

                <div class="producto">
                    <form action="cliente.php" method="post">
                        <input type="hidden" name="nombre-producto" value="FIFA 23">
                        <input type="hidden" name="precio" value="1229">
                        <input type="hidden" name="imagen" value="./img/fifa.jpeg">
                        <img class="producto-img" src="./img/fifa.jpeg" alt="">
                        <div class="producto-detalles">
                            <h3 class="producto-titulo">FIFA 23</h3>
                            <p class="producto-precio">$1229</p>
                            <div>
                                <label for="can" style="font-size: large;">Cantidad</label>
                                <input type="number" name="cant" value="1" min="1" class="cantidad" id="can">
                            </div>
                            <button name="btnAgregar" type="submit" class="producto-agregar">Agregar al carrito</button>
                        </div>
                    </form>
                </div>
                <div class="producto">
                    <form action="cliente.php" method="post">
                        <input type="hidden" name="nombre-producto" value="Forza Horizon 5">
                        <input type="hidden" name="precio" value="1700">
                        <input type="hidden" name="imagen" value="./img/forza.jpeg">
                        <img class="producto-img" src="./img/forza.jpeg" alt="">
                        <div class="producto-detalles">
                            <h3 class="producto-titulo">Forza Horizon 5</h3>
                            <p class="producto-precio">$1700</p>
                            <div>
                                <label for="can" style="font-size: large;">Cantidad</label>
                                <input type="number" name="cant" value="1" min="1" class="cantidad" id="can">
                            </div>
                            <button name="btnAgregar" type="submit" class="producto-agregar">Agregar al carrito</button>
                        </div>
                    </form>
                </div>
            </div>
        </main>
    </div>
</body>

</html>