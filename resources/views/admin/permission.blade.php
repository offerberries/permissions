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
                        <h3>Assign Roles 
                            <a href="{{url('roles')}}" class="btn btn-sm btn-outline-info float-end"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form accept-charset="utf-8" action="{{ route('assign-role-to-user.store') }}"  method="post" id="form">
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
                                    <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Role</label>
                                    <select class="form-control" name="role" id="exampleFormControlSelect1">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="user_id" value="{{ $user->id }}">
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