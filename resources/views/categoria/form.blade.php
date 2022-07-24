<div class="row">
   <div class="col-sm-6">
      <label class="form-label" for="nombreCategoria">Nombre de la categoría</label>
      <input class="form-control form-control-lg" autocomplete="off" type="text" name="nombre_categoria"
         id="nombreCategoria" value="{{ old('nombre_categoria', $categorias->nombre_categoria)}}"
         placeholder="Nombre de Categoría" autofocus />
   </div>
   <div class="col-sm-6">
      <label class="form-label" for="descripcionCategoria"><span class="badge bg-success text-wrap p-1">Descripcion de
            la Categoría</span></label>
      <input class="form-control form-control-lg" type="text" name="descripcion" id="nombreCategoria"
         value="{{ old('descripcion', $categorias->descripcion)}}" placeholder="Descripción de la Categoría" required />
   </div>
</div>
<div class="row justify-content-end">
   <div class="col-3 p-4">
      <input class="btn btn-success btn-lg p-2" type="submit" value="Enviar" />
   </div>
</div>
