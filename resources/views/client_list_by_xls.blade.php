<form action="/admin/client_list_by_xls" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
      <select name="capacity" class="form-control">
        <option value="">Select Capacity</option>
        @foreach($capacities as $capacity)
          <option value="{{$capacity->name}}">{{$capacity->name}}</option>
        @endforeach
      </select>
  </div>

  <div class="form-group">
    <input type="file" name="file" class="form-control">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>

</form>
  
  