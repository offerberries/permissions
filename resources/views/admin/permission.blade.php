<base href="/public">
@include('admin.header')

<body>
    <div class="wrapper">
        <!-- sidebar navigation component -->
@include('admin.sidbar')
       
        <!-- end of sidebar component -->
        <div id="body" class="active">
            <!-- navbar navigation component -->
@include('admin.navbar')
            
            <!-- end of navbar navigation -->
            <div class="content">
                <div class="container">
                    <div class="page-title">
                        <h3>User Permissions
                            <a href="{{url('roles')}}" class="btn btn-sm btn-outline-info float-end"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        </h3>
                        @if(Session::has('msg'))
                        <p class="alert alert-info">{{ Session::get('msg') }}</p>
                       
                            
                        @else
                            
                        
                        @endif

                       
        
                     
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form accept-charset="utf-8" action=""  method="post" id="form">
                              @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label text-uppercase"><small>Dashboard</small></label>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="switch1">
                                      <label class="form-check-label" for="switch1">Open dashboard page</label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="text-uppercase"><small>Users Roles</small></label>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flex" value="admin" id="flexRadioDefault1">
                                      <label class="form-check-label" for="flexRadioDefault1">
                                        Admin
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flex" value="teacher" id="flexRadioDefault2"checked >
                                      <label class="form-check-label" for="flexRadioDefault2">
                                        Teacher
                                      </label>
                                    </div>
                                    <div class="form-check">
                                      <input class="form-check-input" type="radio" name="flex" value="student" id="flexRadioDefault2" >
                                      <label class="form-check-label" for="flexRadioDefault2">
                                        Student
                                      </label>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="text-uppercase"><small>Roles & Permissions</small></label>

                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="add" value="add" name="add">
                                      <label class="form-check-label" for="switch5">Add Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="edit"  value="edit" name="add">
                                      <label class="form-check-label" for="switch6">Edit Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="delete"  value="delete" name="add">
                                      <label class="form-check-label" for="switch7">Delete Roles</label>
                                    </div>
                                    <div class="form-check form-switch">
                                      <input class="form-check-input" type="checkbox" id="update"  value="update" name="add">
                                      <label class="form-check-label" for="switch8">Update Permissions</label>
                                    </div>
                                </div>
                                <input type="submit" class="btn btn-primary mb-3" >
                            </form>
                        </div>
                        <div class="box-footer">
                          
                            {{-- <a href="{{url('permissions','$id')}}" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @include('admin.footer')
</body>

</html>