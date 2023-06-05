
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
                        <h3>User Roles
                            <a href="roles.html" class="btn btn-sm btn-outline-primary float-end"><i class="fas fa-plus-circle"></i> Add</a>
                            <a href="users.html" class="btn btn-sm btn-outline-info float-end me-1"><i class="fas fa-angle-left"></i> <span class="btn-header">Return</span></a>
                        </h3>
                    </div>
                    <div class="box box-primary">
                        <div class="box-body">
                            <table width="100%" class="table table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>User Name</th>
                                        <th>User Email</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>@foreach ($user as $us)
                                    
                                
                                    <tr> 
                                        <td>{{$us->name}}</td>
                                        <td>{{$us->email}}</td>
                                        <td>Active</td>
                                        <td class="text-end">
                                            <a href="{{url('permission',$us->id)}}" class="btn btn-outline-secondary btn-rounded"><i class="fas fa-toggle-on"></i></a>
                                            <a href="" class="btn btn-outline-info btn-rounded"><i class="fas fa-pen"></i></a>
                                            <a href="" class="btn btn-outline-danger btn-rounded"><i class="fas fa-trash"></i></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.footer')
 
</body>

</html>