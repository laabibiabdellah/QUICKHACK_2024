<x-dashboard-scope title='All cities'>
    <style>
  
  .dropdown-menu {
      width: fit-content !important;
      height: fit-content!important;
      margin-left: -10px !important;
  }
    </style>
    
                  <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    @if (session()->has('success'))
                      <div class="alert alert-success text-center">{{session()->get('success')}}</div>
                    @endif
                    <div class="table-responsive">
                      <table class="table table-striped p-2">
                        <thead>
                          <tr>
                            <th>
                              Id
                            </th>
                            <th>
                              City name
                            </th>
                
                            <th>
                              Actions
                            </th>
                          </tr>
                        </thead>
                        <tbody>
  
                            @if (count($cities) <= 0)
                            <tr>
                              <td colspan="3" class="text-center">No data</td>
                            </tr>
                            @else
  
                            @foreach ( $cities as $city )
                            <tr>
                              <td class="py-1">
                                {{$loop->iteration}}
                              </td>
                              <td>
                                {{$city->name}}
                              </td>
                              
                              <td>
                                <div class="dropdown">
                                  <i class="ti-angle-down text-black" style="cursor:pointer !important;" role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>
                                  <ul class="dropdown-menu">
                                     <li><a class="dropdown-item" href="{{route('dashboard-posts.update',$city->id)}}">Edit</a></li>
                                    <li> 
  
                                      <form action="{{route('dashboard-posts.destroy',$city->id)}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button class="dropdown-item delete-btn">Delete</button>
                                      </form>
                                    </li>
                                  </ul>
                                </div>
                              </td>
                            <tr>
                            @endforeach
                            @endif
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
  </x-dashboard-scope>