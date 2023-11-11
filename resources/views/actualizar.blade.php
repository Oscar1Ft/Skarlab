<div class="container w-25 border p4 mt-4">
    <form action="{{ route('actualizar-producto', ['id' => $producto->id]) }}" method="post">
        @method('PATCH')
        @csrf
        @if (session('success'))
            <h6 class="alert alert-success">{{session('success')}}</h6>
        @endif
        @include('modulos.errorForm')

        <label for="nombre">Nombre del producto:</label>
        <input type="text" id="nombre" name="nombre" class="form-control" value="{{$producto->nombre}}" required><br>

        <label for="tipo">Tipo de producto:</label>
        <input type="text" id="tipo" name="tipo" class="form-control" value="{{$producto->tipo}}" required><br>

        <label for="descripcion">Descripción:</label>
        <input type="text" id="descripcion" name="descripcion" class="form-control" value="{{$producto->descripcion}}" required><br>

        <label for="precio">Precio:</label>
        <input type="number" id="precio" name="precio" class="form-control" value="{{$producto->precio}}" required><br>

        <label for="stock">Cantidad en stock:</label>
        <input type="number" id="stock" name="stock" class="form-control" value="{{$producto->stock}}" required><br>

        <label for="origen">País de origen:</label>
        <input type="text" id="origen" name="origen" class="form-control" value="{{$producto->origen}}" required><br>

        <label for="proveedor">Proveedor:</label>
        <input type="text" id="proveedor" name="proveedor" class="form-control" value="{{$producto->proveedor}}" required><br>

        <label for="certificacion">Certificación orgánica:</label>
        <input type="text" id="certificacion" name="certificacion" class="form-control" value="{{$producto->certificacion}}" required><br>
        
        <button type="submit" class="btn btn-primary btn-block" >Actualizar</button>

    </form>
    
</div>