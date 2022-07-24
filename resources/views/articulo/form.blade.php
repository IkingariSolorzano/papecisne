<div class="row">
    <div class="col-sm-3">
        <label class="form-label" for="codigoBarras">Codigo de Barras</label>
        <input class="form-control form-control-lg" autocomplete="off" type="text" name="codigo_barras"
            id="codigoBarras" value="{{ old('codigo_barras', $articulos->codigo_barras)}}"
            placeholder="Codigo de Barras" autofocus />
    </div>
    <div class="col-sm-4">
        <label class="form-label" for="nombreArticulo"><span class="badge bg-success text-wrap p-1">Nombre del
                Articulo</span></label>
        <input class="form-control form-control-lg" type="text" name="nombre_articulo" id="nombreArticulo"
            value="{{ old('nombre_articulo', $articulos->nombre_articulo)}}" placeholder="Nombre del Articulo"
            required />
    </div>

    <div class="col-sm-4">
        <label class="form-label" for="precioPublico"><span class="badge bg-success text-wrap p-1">Precio al
                Publico</span></label>
        <input class="form-control form-control-lg" type="number" inputmode="numeric" step=".50" name="precio_publico"
            id="precioPublico" value="{{ old('precio_publico', $articulos->precio_publico) }}"
            placeholder="Precio al Publico" required />

    </div>
</div>

<div class="row">
    <div class="col-sm-3">
        <label class="form-label" for="contenido">Contenido</label>
        <input class="form-control form-control-sm" type="number" name="contenido" id="contenido"
            value="{{ old('contenido', '1')}}" placeholder="Contenido" />
    </div>

    <div class="col-sm-3">

        <label class="form-label" for="presentacion">Presentacion</label>
        <input class="form-control form-control-sm" type="text" name="presentacion" id="presentacion"
            value="{{ old('presentacion', $articulos->presentacion ) }}" placeholder="Presentacion" />
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="clave">Clave</label>
        <input class="form-control form-control-sm" type="text" name="clave_articulo" id="clave"
            value="{{ old('clave_articulo', $articulos->clave_articulo)}}" placeholder="Clave" />
    </div>
    <div class="col-sm-3">
        <label class="form-label" for="precioCompra">Precio de Compra</label>
        <input class="form-control form-control-sm" type="number" inputmode="decimal" step=".50" name="precio_compra"
            id="precioCompra" value="{{ old('precio_compra', $articulos->precio_compra)}}"
            placeholder="Precio de Compra" />
    </div>
</div>

<div class="row">
    <div class="col-sm-6">
        <label class="form-label" for="categoria">Categoria</label>
        <select class="form-select" name="categoria_id" id="categoria_id">
            <option value="">--- seleccione una categoría ---</option>
            @foreach($categorias as $categoria)
            <option value="{{$categoria->id}}" {{ $categoria->id == $articulos->categoria_id ? 'selected' : ''
                }}>{{$categoria->nombre_categoria}}</option>
            @endforeach
        </select>
        <a name="agregar_categoria" id="agregar_categoria" class="btn btn-primary mt-2"
            href="{{ url('/categoria/create')}}" role="button">Agregar Categoría</a>
    </div>
    <div class="col-sm-6">

        <label class="form-label" for="marca">marca</label>
        <select class="form-select" name="marca_id" id="marca_id">
            <option value="">--- seleccione una marca ---</option>
            @foreach($marcas as $marca)
            <option value="{{$marca->id}}" {{ $marca->id == $articulos->marca_id ? 'selected' : ''
                }}>{{$marca->nombre_marca}}
            </option>
            @endforeach
        </select>
        <a name="agregar_marca" id="agregar_marca" class="btn btn-primary mt-2" href="{{ url('/marca/create')}}"
            role="button">Agregar Marca</a>
    </div>
</div>

<div class="row justify-content-end">
    <div class="col-3 p-4">
        <input class="btn btn-success btn-lg p-2" type="submit" value="Enviar" />
    </div>
</div>
