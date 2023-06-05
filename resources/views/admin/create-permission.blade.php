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
                        <h3>Create Permission
                            <a href="{{ url('roles') }}" class="btn btn-sm btn-outline-info float-end"><i
                                    class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        </h3>

                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <form accept-charset="utf-8" action="{{ route('permission.store') }}" method="post"
                                id="form">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Permission Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" placeholder="Permission Name">
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($permissions as $permission)
                                <tr>
                                <th scope="row">{{ $permission->id }}</th>
                                <td>{{ $permission->name }}</td>
                                <td>{{ $permission->slug }}</td>
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
