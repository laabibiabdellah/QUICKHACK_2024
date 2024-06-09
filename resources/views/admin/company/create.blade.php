<x-dashboard-scope title='Add Company'>
    <div>
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="POST" action="{{route('dashboard-companies.store')}}" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="name">Company name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control" id="name" placeholder="Company name">
                    @error('name')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="email">Email Company</label>
                    <input type="email" name="email" value="{{old('email')}}" class="form-control" id="email" placeholder="Email Company">
                    @error('email')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label>Logo Company</label>
                    <div class="input-group col-xs-12">
                      <input type="file" name="logo" class="form-control file-upload-info" placeholder="Logo Company">
                    </div>
                    @error('logo')
                      <small class="text-danger">{{$message}}</small>
                    @enderror
                  </div>
                  <button type="submit" class="btn btn-primary me-2">Add Company</button>
                  <a href="{{route('dashboard-companies.index')}}" class="btn btn-light">Cancel</a>
                </form>
              </div>
            </div>
          </div>
    </div>
</x-dashboard-scope>