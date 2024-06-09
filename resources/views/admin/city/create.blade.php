<x-dashboard-scope title='Add City'>
    <div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="POST" action="{{route('dashboard-cities.store')}}" >
                  @csrf
                  <div class="form-group">
                    <label for="name">City name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="City name">
                    @error('name')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Add City</button>
                  <a href="{{route('dashboard-cities.index')}}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
</x-dashboard-scope>