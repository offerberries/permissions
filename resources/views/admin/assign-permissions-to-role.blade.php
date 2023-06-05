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
                            <form accept-charset="utf-8" action="{{ route('assign-permissions-to-role.store') }}"
                                method="post" id="form">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleFormControlSelect1">Select Role</label>
                                    <select class="form-control" name="role" id="exampleFormControlSelect1">
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->id }}">{{ $role->name }}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Permissions</label>
                                    @foreach ($permissions as $permission)
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input" value="{{ $permission->id }}" name='perms[]'
                                                id="exampleCheck1">
                                            <label class="form-check-label"
                                                for="exampleCheck1">{{ $permission->name }}</label>
                                        </div>
                                    @endforeach
                                </div>
                                <input type="submit" class="btn btn-primary mb-3 mt-3">
                            </form>
                        </div>
                        <div class="box-footer">
                        </div>
                    </div>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
</body>

</html>
