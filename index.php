<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAW WORLD | Tienda para mascotas</title>
    <link rel="stylesheet" href="estilos.css">
</head>
<body>

    <header class="encabezado">
        <div class="barra-superior">
            <a href="#" class="logo">🐾 PAW WORLD</a>
            <input type="search" id="buscador" placeholder="Buscar accesorios para tu mascota...">
            <button class="boton-carrito" id="abrir-carrito">
                🛒 Carrito (<span id="cantidad-carrito">0</span>)
            </button>
        </div>

        <nav class="navegacion">
            <a href="index.php">Inicio</a>
            <a href="accesorios.php">Accesorios</a>
            <a href="#pagos">Métodos de pago</a>    
            <a href="#ubicacion">Ubicación</a>
            <a href="#contacto">Contacto</a>
        </nav>
    </header>

    <main>
        <section class="banner" id="inicio">
            <div class="banner-texto">
                <span class="etiqueta">🐶 PARA LOS QUE MÁS QUIERES</span>
                <h1>Todo para consentir a tu mejor amigo</h1>
                <p>Descubre accesorios, juguetes y productos para el bienestar de tus mascotas.</p>
                <a href="#productos" class="boton-principal">Comprar ahora</a>
            </div>
            <img src="banner.jpeg" alt="Perros y gatos felices">
        </section>

        <section class="beneficios">
            <div>🚚 <strong>Envíos coordinados</strong><small>Consulta la cobertura</small></div>
            <div>💰 <strong>Precios cómodos</strong><small>Ofertas especiales</small></div>
            <div>💬 <strong>Atención directa</strong><small>Pedidos por WhatsApp</small></div>
            <div>🐾 <strong>Amor por las mascotas</strong><small>Productos para perros y gatos</small></div>
        </section>

        <section class="seccion-productos" id="productos">
            <div class="encabezado-seccion">
                <div>
                    <h2>Descubre nuestros productos</h2>
                    <p>Encuentra lo que tu mascota necesita.</p>
                </div>
                <select id="ordenar" aria-label="Ordenar productos">
                    <option value="destacados">Destacados</option>
                    <option value="menor">Precio: menor a mayor</option>
                    <option value="mayor">Precio: mayor a menor</option>
                </select>
            </div>

            <div class="categorias">
                <button class="categoria activa" data-categoria="todos">Todos</button>
                <button class="categoria" data-categoria="collares">Collares</button>
                <button class="categoria" data-categoria="paseo">Correas</button>
                <button class="categoria" data-categoria="juguetes">Juguetes</button>
                <button class="categoria" data-categoria="descanso">camas</button>
                <button class="categoria" data-categoria="ropa">Ropa</button>
                <button class="categoria" data-categoria="higiene">Higiene</button>
            </div>

            <div class="productos" id="lista-productos">

                <article class="producto" data-nombre="Collar ajustable" data-categoria="collares" data-precio="18.90">
                    <div class="producto-imagen">
                        <span class="descuento">-15%</span>
                        <img src="IMG/collares.jpg" alt="Collar ajustable">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">COLLARES</span>
                        <h3>Collar ajustable</h3>
                        <p class="descripcion">Cómodo para el uso diario.</p>
                        <div class="precios"><strong>S/ 18.90</strong><del>S/ 22.00</del></div>
                        <button class="agregar" data-id="1">Agregar al carrito</button>
                    </div>
                </article>

                <article class="producto" data-nombre="Correa para paseo" data-categoria="paseo" data-precio="24.90">
                    <div class="producto-imagen">
                        <span class="descuento">-17%</span>
                        <img src="IMG/correas.jpg" alt="Correa para paseo">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">PASEO</span>
                        <h3>Correa para paseo</h3>
                        <p class="descripcion">Ideal para salir a caminar.</p>
                        <div class="precios"><strong>S/ 24.90</strong><del>S/ 30.00</del></div>
                        <button class="agregar" data-id="2">Agregar al carrito</button>
                    </div>
                </article>

                <article class="producto" data-nombre="Juguete divertido" data-categoria="juguetes" data-precio="12.50">
                    <div class="producto-imagen">
                        <span class="descuento">-17%</span>
                        <img src="IMG/juguetes.jpg" alt="Juguete para mascotas">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">JUGUETES</span>
                        <h3>Juguete divertido</h3>
                        <p class="descripcion">Para jugar y entretenerse.</p>
                        <div class="precios"><strong>S/ 12.50</strong><del>S/ 15.00</del></div>
                        <button class="agregar" data-id="3">Agregar al carrito</button>
                    </div>
                </article>

                <article class="producto" data-nombre="Cama para mascotas" data-categoria="descanso" data-precio="59.90">
                    <div class="producto-imagen">
                        <img src="IMG/camas.jpg" alt="Cama para mascotas">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">DESCANSO</span>
                        <h3>Cama para mascotas</h3>
                        <p class="descripcion">Un espacio cómodo para descansar.</p>
                        <div class="precios"><strong>S/ 59.90</strong></div>
                        <button class="agregar" data-id="4">Agregar al carrito</button>
                    </div>
                </article>

                <article class="producto" data-nombre="Comedero para mascotas" data-categoria="alimentacion" data-precio="19.90">
                    <div class="producto-imagen">
                        <img src="IMG/comederos.jpg" alt="Comedero para mascotas">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">ALIMENTACIÓN</span>
                        <h3>Comedero para mascotas</h3>
                        <p class="descripcion">Práctico para sus comidas.</p>
                        <div class="precios"><strong>S/ 19.90</strong></div>
                        <button class="agregar" data-id="5">Agregar al carrito</button>
                    </div>
                </article>

                <article class="producto" data-nombre="Ropa para mascotas" data-categoria="ropa" data-precio="29.90">
                    <div class="producto-imagen">
                        <img src="IMG/ropa.jpg" alt="Ropa para mascotas">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">ROPA</span>
                        <h3>Ropa para mascotas</h3>
                        <p class="descripcion">Diferentes estilos y modelos.</p>
                        <div class="precios"><strong>S/ 29.90</strong></div>
                        <button class="agregar" data-id="6">Agregar al carrito</button>
                    </div>
                </article>

                <article class="producto" data-nombre="Accesorios para gatos" data-categoria="collares" data-precio="15.90">
                    <div class="producto-imagen">
                        <img src="IMG/mascotas.jpg" alt="Accesorios para gatos">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">GATOS</span>
                        <h3>Accesorios para gatos</h3>
                        <p class="descripcion">Opciones para tu pequeño compañero.</p>
                        <div class="precios"><strong>S/ 15.90</strong></div>
                        <button class="agregar" data-id="7">Agregar al carrito</button>
                    </div>
                </article>

                <article class="producto" data-nombre="Kit de higiene" data-categoria="higiene" data-precio="22.90">
                    <div class="producto-imagen">
                        <img src="IMG/higiene.jpg" alt="Productos de higiene">
                    </div>
                    <div class="producto-info">
                        <span class="tipo">HIGIENE</span>
                        <h3>Kit de higiene</h3>
                        <p class="descripcion">Accesorios para el cuidado diario.</p>
                        <div class="precios"><strong>S/ 22.90</strong></div>
                        <button class="agregar" data-id="8">Agregar al carrito</button>
                    </div>
                </article>

            </div>

            <p id="sin-resultados" hidden>No encontramos productos con esa búsqueda.</p>
        </section>

        <section class="carrito-seccion" id="carrito">
            <div class="carrito-contenedor">
                <div>
                    <h2>🛒 Tu carrito de compras</h2>
                    <p>Revisa tus productos antes de realizar el pedido.</p>
                </div>

                <div id="productos-carrito">
                    <p class="carrito-vacio">Tu carrito está vacío.</p>
                </div>

                <div class="resumen">
                    <p>Subtotal: <strong id="subtotal">S/ 0.00</strong></p>
                    <p>Envío: <strong id="costo-envio">Por coordinar</strong></p>
                    <p class="total">Total de productos: <strong id="total">S/ 0.00</strong></p>
                    <small>El costo de envío se confirmará antes del pago.</small>
                </div>

                <button class="boton-principal" id="ir-pagos">Continuar con el pedido</button>
            </div>
        </section>

        <section class="seccion-pagos" id="pagos">
            <div class="pagos-contenedor">
                <h2>💳 Métodos de pago</h2>
                <p>Selecciona cómo deseas pagar tu pedido.</p>

                <form id="formulario-pago">
                    <label class="metodo-pago">
                        <input type="radio" name="pago" value="Yape" required>
                        <span>💜</span>
                        <div><strong>Yape</strong><small>Pago por billetera digital.</small></div>
                    </label>

                    <label class="metodo-pago">
                        <input type="radio" name="pago" value="Plin">
                        <span>💚</span>
                        <div><strong>Plin</strong><small>Pago por billetera digital.</small></div>
                    </label>

                    <label class="metodo-pago">
                        <input type="radio" name="pago" value="Transferencia bancaria">
                        <span>🏦</span>
                        <div><strong>Transferencia bancaria</strong><small>Coordina los datos con la tienda.</small></div>
                    </label>

                    <label class="metodo-pago">
                        <input type="radio" name="pago" value="Pago contra entrega">
                        <span>💵</span>
                        <div><strong>Pago contra entrega</strong><small>Sujeto a disponibilidad del servicio.</small></div>
                    </label>

                    <p class="aviso-pago">
                        La selección del método no realiza un cobro automático.
                        Los datos de pago y la disponibilidad se confirmarán por WhatsApp.
                    </p>

                    <button type="submit" class="boton-principal boton-completo">
                        Confirmar pedido por WhatsApp
                    </button>
                </form>
            </div>
        </section>

        <section class="ubicacion" id="ubicacion">
            <div class="ubicacion-texto">
                <span class="etiqueta">📍 ENCUÉNTRANOS</span>
                <h2>Ubicación de PAW WORLD</h2>
                <p>Juanjuí, provincia de Mariscal Cáceres, San Martín, Perú.</p>
                <p>Consulta por WhatsApp la dirección exacta, los horarios y las opciones de entrega.</p>
                <a class="boton-principal"
                   href="https://www.google.com/maps/search/?api=1&query=Juanjui%2C+San+Martin%2C+Peru"
                   target="_blank" rel="noopener noreferrer">
                    Abrir Google Maps
                </a>
            </div>

            <iframe
                src="https://maps.google.com/maps?q=Juanjui%2C%20San%20Martin%2C%20Peru&output=embed"
                title="Mapa de Juanjuí, San Martín"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </section>

        <section class="contacto" id="contacto">
            <h2>¿Necesitas ayuda?</h2>
            <p>Te ayudamos a elegir los mejores accesorios para tu mascota.</p>
            <a href="https://wa.me/51987654321?text=Hola%2C%20deseo%20informaci%C3%B3n%20sobre%20PAW%20WORLD"
               target="_blank" rel="noopener noreferrer" class="boton-principal">
                Hablar con un asesor
            </a>
        </section>
    </main>

    <footer>
        <a href="#" class="logo">🐾 PAW WORLD</a>
        <p>Accesorios para mascotas | Juanjuí, San Martín, Perú</p>
        <p>WhatsApp: +51 987 654 321</p>
        <p class="copyright">© 2026 PAW WORLD. Todos los derechos reservados.</p>
    </footer>

    <a href="https://wa.me/51987654321?text=Hola%2C%20quisiera%20hacer%20un%20pedido%20en%20PAW%20WORLD"
       target="_blank" rel="noopener noreferrer"
       class="whatsapp-flotante" aria-label="Contactar por WhatsApp">
        <img src="https://cdn-icons-png.flaticon.com/512/3670/3670515.png"
             alt="WhatsApp">
    </a>

    <script src="script.js"></script>
</body>
</html>