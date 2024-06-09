<x-dashboard-scope title='Add Prefecture'>
    <div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="POST" action="{{route('dashboard-prefectures.store')}}" >
                  @csrf
                  <div class="form-group">
                    <label for="name">Prefecture name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Prefecture name">
                    @error('name')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  
                  <div class="col-12">
                    <div class="form-group">
                        <label for="exampleSelectGender">Cities</label>
                          <select class="form-control bg-white" name="city_id" id="exampleSelectGender">
                            <option selected disabled>---</option>
                            @if (count($cities)<=0)
                            <option disabled>Null</option>
                            @else
                                @foreach ( $cities as $city )
                                <option value="{{$city->id}}">{{$city->name}}</option>
                                @endforeach
                            @endif
                          </select>
                        </div>
                        @error('city_id')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                </div>
                  <button type="submit" class="btn btn-primary me-2">Add Prefecture</button>
                  <a href="{{route('dashboard-prefectures.index')}}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
</x-dashboard-scope>