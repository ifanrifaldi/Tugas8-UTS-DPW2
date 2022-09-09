@extends('template.base')
@section('content')
<!-- start coding -->

   
   <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
        <div class="col-md-8">
            <h4>Data User</h4>
        </div>
        <div class="col-md-4">
            <a href="{{url('admin/user/create')}}" class="btn btn-primary float-right"><i class="fa fa-plus"></i> Tambah User</a>
        </div>
    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Article</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach ($list_user as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <a href="{{ url('admin/user', $user->id) }}" class="btn btn-dark">
                                                    <i class="fa fa-info"></i>
                                                </a>
                                                <a href="{{ url('admin/user', $user->id) }}/edit" class="btn btn-warning">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                                @include('template.utils.delete', ['url' => url('admin/user', $user->id)])
                                            </div>
                                        </td>
                                        <td>{{ $user->username }}</td>
                                        <td>{{ $user->nama  }}</td>
                                        <td>{{ $user->article_count }}</td>
                                        <td>{{ $user->email }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection