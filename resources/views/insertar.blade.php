<div class="container">
    <h2 class="text-center">Ingresar Producto</h2>
    <form method="post" class="mx-auto" style="max-width: 400px;">
        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="rname" class="form-control" required><br>

        <label for="tipo">Tipo de producto:</label>
        <input type="text" id="tipo" name="rtipo" class="form-control" required><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="rdescripcion" class="form-control" required><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="rprecio" class="form-control" required><br>

        <label for="cantidad">Cantidad en stock:</label>
        <input type="number" id="cantidad" name="rcantidad" class="form-control" required><br>

        <label for="origen">País de origen:</label>
        <input type="text" id="origen" name="rorigen" class="form-control" required><br>

        <label for="proveedor">Proveedor:</label>
        <input type="text" id="proveedor" name="rproveedor" class="form-control" required><br>

        <label for="certificacion">Certificación orgánica:</label>
        <input type="text" id="certificacion" name="rcertificacion" class="form-control" required><br>
        
        <input type="submit" class="btn btn-primary btn-block" value="Agregar Producto">
    </form>
</div>
