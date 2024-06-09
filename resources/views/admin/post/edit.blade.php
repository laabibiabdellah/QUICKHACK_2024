<x-dashboard-scope title='Change Status'>
    <div>
            <div class="col-12">
            <form action="{{route('dashboard-posts.update',$post)}}" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <div class="form-group">
                        <label for="exampleSelectGender">Status</label>
                          <select class="form-control bg-white" name="status" id="exampleSelectGender">
                            <option selected disabled>---</option>
                            <option value="0">In process</option>
                            <option value="1">Done</option>
                            <option value="2">Send</option>
                          </select>
                    </div>
                        @error('status')
                        <small class="text-danger">{{$message}}</small>
                      @enderror
                </div>

                <button type="submit" class="btn btn-primary me-2">Change Status</button>
                <a href="{{route('dashboard-posts.index')}}" class="btn btn-light">Cancel</a>
            </form>
          </div>
    </div>
</x-dashboard-scope>


