<div class="modal" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

  <div class="modal-dialog" role="document">

    <div class="modal-content">

      <div class="modal-header">

        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>

        <h4 class="modal-title" id="myModalLabel">Actualizar Genero</h4>

      </div>

      <div class="modal-body">

      

      	<input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">

      	<input type="hidden" id="id">

<div class="form-group">
    <form>
        <input type="hidden" name="_token" value="{{ csrf_token() }}" id="token">
        <label for="">Nombre:</label>
        <input type="text" name="nombre" id="nombre" placeholder="ingresa nombre"/>
        <label for="">Raza:</label>
        <input type="text" name="raza" id="raza" placeholder="ingresa raza"/>
        
    </form>
</div>
      </div>

      <div class="modal-footer">

    <a class="btn btn-primary btn-lg" href="#" id="actualizar" role="button">Registrar</a>

      </div>

    </div>

  </div>

</div>