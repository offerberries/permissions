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
                        <h3>Create Role
                            <a href="{{ url('roles') }}" class="btn btn-sm btn-outline-info float-end"><i
                                    class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        </h3>

                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form accept-charset="utf-8" action="{{ route('role.store') }}" method="post"
                                id="form">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Role Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Role Name">
                                </div>
                                <input type="submit" class="btn btn-primary mb-3 mt-3">
                            </form>
                        </div>
                        <div class="box-footer">

                            {{-- <a href="{{url('permissions','$id')}}" class="btn btn-secondary"><i class="fas fa-times"></i> Cancel</a> --}}
                        </div>
                    </div>

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Slug</th>
                                <th scope="col">Permissions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($roles as $role)
                                <tr>
                                <th scope="row">{{ $role->id }}</th>
                                <td>{{ $role->name }}</td>
                                <td>{{ $role->slug }}</td>
                                <td>
                                    @foreach ($role->permissions as $permission)
                                        <span class="badge badge-primary" style="color:blue;">{{ $permission->name }}</span>
                                    @endforeach
                                </td>
                            </tr>
                            @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>

</html>
