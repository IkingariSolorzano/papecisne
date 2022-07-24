<div class="row">
   <div class="col-sm-6">
      <label class="form-label" for="nombreMarca">Nombre de la marca</label>
      <input class="form-control form-control-lg" autocomplete="off" type="text" name="nombre_marca" id="nombreMarca"
         value="{{ old('nombre_marca', $marcas->nombre_marca)}}" placeholder="Nombre de Marca" autofocus />
   </div>
   <div class="col-sm-6">
      <label class="form-label" for="descripcionMarca"><span class="badge bg-success text-wrap p-1">Descripcion de
            la marca</span></label>
      <input class="form-control form-control-lg" type="text" name="descripcion" id="nombreMarca"
         value="{{ old('descripcion', $marcas->descripcion)}}" placeholder="Descripción de la Marca" required />
   </div>
</div>
<div class="row justify-content-end">
   <div class="col-3 p-4">
      <input class="btn btn-success btn-lg p-2" type="submit" value="Enviar" />
   </div>
</div>
