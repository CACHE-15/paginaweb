
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Collares y correas | PAW WORLD</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f7f8fa;
            color: #292d32;
        }

        a {
            text-decoration: none;
        }

        button {
            font: inherit;
            cursor: pointer;
        }

        /* ENCABEZADO: MISMO ESTILO DE INDEX.PHP */
        header {
            background: #ffffff;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.07);
            padding: 20px 6%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #23894e;
            white-space: nowrap;
        }

        header a:not(.logo) {
            color: #444444;
            font-size: 14px;
            font-weight: bold;
            transition: color 0.3s;
        }

        header a:hover {
            color: #23894e;
        }

        /* BANNER CON LOS COLORES DEL INDEX */
        .titulo-pagina {
            min-height: 250px;
            padding: 55px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            background: linear-gradient(120deg, #fff0dc, #e8f8ed);
        }

        .etiqueta {
            display: inline-block;
            color: #23894e;
            font-weight: bold;
            font-size: 13px;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .titulo-pagina h1 {
            font-size: clamp(30px, 4vw, 42px);
            line-height: 1.2;
            margin-bottom: 15px;
            color: #292d32;
        }

        .titulo-pagina p {
            font-size: 16px;
            color: #62666a;
            line-height: 1.8;
        }

        /* CONTENEDOR DE PRODUCTOS */
        .rejilla-productos {
            width: 88%;
            max-width: 1250px;
            margin: 50px auto 65px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 25px;
        }

        /* TARJETAS BLANCAS COMO EN INDEX.PHP */
        .producto {
            background: #ffffff;
            border: 1px solid #eeeeee;
            border-radius: 13px;
            overflow: hidden;
            box-shadow: 0 3px 12px rgba(0, 0, 0, 0.04);
            transition: transform 0.25s, box-shadow 0.25s;
        }

        .producto:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.09);
        }

        .producto img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
            background: #f2f3f5;
        }

        .producto-contenido {
            padding: 20px;
            text-align: center;
        }

        .producto h3 {
            font-size: 17px;
            margin-bottom: 10px;
            color: #292d32;
        }

        /* PRECIOS EN NARANJA */
        .precio {
            color: #e85f16;
            font-size: 22px;
            font-weight: bold;
            margin: 15px 0;
        }

        /* BOTONES VERDES DEL INDEX */
        button {
            width: 100%;
            padding: 12px 10px;
            background: #23894e;
            color: #ffffff;
            border: none;
            border-radius: 7px;
            font-size: 14px;
            font-weight: bold;
            transition: background 0.3s, transform 0.2s;
        }

        button:hover {
            background: #176c3a;
            transform: translateY(-2px);
        }

        /* PIE DE PÁGINA: VERDE OSCURO */
        footer {
            padding: 40px 20px;
            text-align: center;
            background: #183f2c;
            color: #ffffff;
        }

        footer .logo {
            display: inline-block;
            color: #ffffff;
            margin-bottom: 15px;
        }

        footer p {
            margin: 10px 0;
            font-size: 14px;
        }

        footer .copyright {
            padding-top: 20px;
            margin-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
            color: #d7e5dc;
        }

        /* TABLETS */
        @media (max-width: 900px) {
            .rejilla-productos {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                width: 92%;
                gap: 18px;
            }

            header {
                gap: 20px;
            }
        }

        /* CELULARES */
        @media (max-width: 600px) {
            header {
                padding: 18px 5%;
                gap: 15px;
            }

            .logo {
                width: 100%;
                text-align: center;
                font-size: 22px;
            }

            header a:not(.logo) {
                font-size: 12px;
            }

            .titulo-pagina {
                min-height: 220px;
                padding: 40px 20px;
            }

            .titulo-pagina h1 {
                font-size: 29px;
            }

            .titulo-pagina p {
                font-size: 14px;
            }

            .rejilla-productos {
                grid-template-columns: repeat(2, minmax(0, 1fr));
                width: 94%;
                gap: 12px;
                margin: 30px auto 45px;
            }

            .producto img {
                height: 165px;
            }

            .producto-contenido {
                padding: 12px;
            }

            .producto h3 {
                font-size: 14px;
            }

            .precio {
                font-size: 18px;
            }

            button {
                padding: 11px 6px;
                font-size: 12px;
            }
        }

        @media (max-width: 380px) {
            .rejilla-productos {
                grid-template-columns: 1fr;
                max-width: 320px;
            }

            .producto img {
                height: 220px;
            }
        }
    </style>
</head>

<body>

    <header>
        <a href="index.php" class="logo">🐾 PAW WORLD</a>
        <a href="index.php">Inicio</a>
        <a href="juguetes.html">Collares</a>
        <a href="moda.html">Correas</a>
        <a href="camas.html">Juguetes</a>
        <a href="camas.html">Camas</a>
        <a href="camas.html">Ropa</a>
        <a href="camas.html">Higiene</a>
    </header>

    <section class="titulo-pagina">
        <span class="etiqueta">PAW WORLD · ACCESORIOS</span>
        <h1>Collares y correas</h1>
        <p>Accesorios para pasear con estilo y seguridad.</p>
    </section>

    <main class="rejilla-productos">

        <article class="producto">
            <img src="IMG/collar1.jpg" alt="Collar para mascotas">
            <div class="producto-contenido">
                <h3>Collar para mascotas</h3>
                <p class="precio">S/ 18.90</p>
                <button onclick="agregarProducto('Collar para mascotas',18.90)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/correa1.jpg" alt="Correa resistente">
            <div class="producto-contenido">
                <h3>Correa resistente</h3>
                <p class="precio">S/ 25.00</p>
                <button onclick="agregarProducto('Correa resistente',25)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/collar2.jpg" alt="Collar ajustable">
            <div class="producto-contenido">
                <h3>Collar ajustable</h3>
                <p class="precio">S/ 20.00</p>
                <button onclick="agregarProducto('Collar ajustable',20)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/correa2.jpg" alt="Correa de paseo">
            <div class="producto-contenido">
                <h3>Correa de paseo</h3>
                <p class="precio">S/ 28.00</p>
                <button onclick="agregarProducto('Correa de paseo',28)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/collar3.jpg" alt="Collar elegante">
            <div class="producto-contenido">
                <h3>Collar elegante</h3>
                <p class="precio">S/ 22.50</p>
                <button onclick="agregarProducto('Collar elegante',22.50)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/correa3.jpg" alt="Correa para perros grandes">
            <div class="producto-contenido">
                <h3>Correa para perros grandes</h3>
                <p class="precio">S/ 32.00</p>
                <button onclick="agregarProducto('Correa para perros grandes',32)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/collar4.jpg" alt="Collar con diseño">
            <div class="producto-contenido">
                <h3>Collar con diseño</h3>
                <p class="precio">S/ 19.90</p>
                <button onclick="agregarProducto('Collar con diseño',19.90)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/correa4.jpg" alt="Correa extensible">
            <div class="producto-contenido">
                <h3>Correa extensible</h3>
                <p class="precio">S/ 35.00</p>
                <button onclick="agregarProducto('Correa extensible',35)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/collar5.jpg" alt="Collar con placa">
            <div class="producto-contenido">
                <h3>Collar con placa</h3>
                <p class="precio">S/ 24.00</p>
                <button onclick="agregarProducto('Collar con placa',24)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/correa5.jpg" alt="Correa acolchada">
            <div class="producto-contenido">
                <h3>Correa acolchada</h3>
                <p class="precio">S/ 29.90</p>
                <button onclick="agregarProducto('Correa acolchada',29.90)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/collar6.jpg" alt="Collar para gatos">
            <div class="producto-contenido">
                <h3>Collar para gatos</h3>
                <p class="precio">S/ 15.00</p>
                <button onclick="agregarProducto('Collar para gatos',15)">Agregar al carrito</button>
            </div>
        </article>

        <article class="producto">
            <img src="IMG/correa6.jpg" alt="Juego de collar y correa">
            <div class="producto-contenido">
                <h3>Juego de collar y correa</h3>
                <p class="precio">S/ 39.90</p>
                <button onclick="agregarProducto('Juego de collar y correa',39.90)">Agregar al carrito</button>
            </div>
        </article>

    </main>

    <footer>
        <a href="index.php" class="logo">🐾 PAW WORLD</a>
        <p>Accesorios para mascotas | Juanjuí, San Martín, Perú</p>
        <p>WhatsApp: +51 987 654 321</p>
        <p class="copyright">
            © 2026 PAW WORLD. Todos los derechos reservados.
        </p>
    </footer>

    <script src="script.js"></script>

</body>
</html>
