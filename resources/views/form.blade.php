<div class="row justify-content-center">
  <div class="col-md-6 mt-3">
    <form action="" method="POST">
      @csrf
      <div class="form-group">
        <label for="name">Nombre</label>
        <input class="form-control" type="text" name="name" required>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" required>
      </div>
      <div class="form-group">
        <label for="subject">Asunto</label>
        <select class="form-control" name="subject" required>
            <option></option>
          @foreach ($asuntos as $sbj)
            <option value="{{$sbj->id}}">{{$sbj->desc}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <label for="body">Mensaje</label>
        <textarea class="form-control" name="body" rows="10" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary btn-sm btn-block">Enviar</button>
    </form>
  </div>  
</div>