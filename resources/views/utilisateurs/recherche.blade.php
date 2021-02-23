<form action="{{ url('/recherche') }}" class="d-flex">
    @csrf
      <div >
        <input type="text" name="tag1" id="" placeholder="tag 1">
      </div>
      <div >
        <input type="text" name="tag2" id="" placeholder="tag 2">
      </div>
      <div >
        <input type="text" name="tag3" id="" placeholder="tag 3">
      </div>
    
    <button type="submit">chercher</button>
    

  </form>

  @foreach($images as $image)
  <div>
    <h3>{{$image->nom}}</h3>
  </div>
@endforeach