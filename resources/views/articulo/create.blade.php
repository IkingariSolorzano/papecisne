<h1>Bienvenido</h1>
<h2>Registrar nuevo artículo</h2>

<form action="{{ url('/articulo')}}" method="post" enctype="multipart/form-data">
 @csrf
   <label for="codigoBarras">Codigo de Barras</label>
   <input class="" type="text" name="codigo_barras" id="codigoBarras" placeholder="Codigo de Barras" autofocus>
   <br>
   <label for="clave">Clave</label>
   <input class="" type="text" name="clave_articulo" id="clave" placeholder="Clave">
   <br>
   <label for="nombreArticulo">Nombre del Articulo</label>
   <input class="" type="text" name="nombre_articulo" id="nombreArticulo" placeholder="Nombre del Articulo">
   <br>
   <label for="presentacion">Presentacion</label>
   <input class="" type="text" name="presentacion" id="presentacion" placeholder="Presentacion">
   <br>
   <label for="contenido">Contenido</label>
   <input class="" type="number" name="contenido" id="contenido" placeholder="Contenido" value="1">
   <br>
   <label for="categoria">Categoria</label>
   <input list="categoria" name="categoria_id">
   <datalist id="categoria">
      <option value="1"></option>
      <option value="2"></option>
      <option value="3"></option>
      <option value="4"></option>
   </datalist>
   <br>
   <label for="marca">marca</label>
   <input list="marca" name="marca_id">
   <datalist id="marca">
      <option value="5"></option>
      <option value="6"></option>
      <option value="7"></option>
      <option value="8"></option>
   </datalist>
   <br>
   <label for="precioCompra">Precio de Compra</label>
   <input type="number" inputmode="decimal" step=".50" name="precio_compra" id="precioCompra" placeholder="Precio de Compra">
   <br>
   <label for="precioPublico">Precio al Publico</label>
   <input type="number" inputmode="numeric" step=".50" name="precio_publico" id="precioPublico" placeholder="Precio al Publico">
   <br>
   <input type="submit" value="Enviar">
</form>