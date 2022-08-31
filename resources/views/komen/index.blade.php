@extends('template.base')
@section('content')
   <div class="container">
    <div class="card mt-3 pt-3">
    <div class="row ml-1 mr-2 mb-3">
      <div class="col-md-8">
        <h4>Komentar</h4>
      </div>
    </div>
                    <div class="card-body">
                        <table class="table table-datatable">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama</th>
                                <th>Tanggal</th>
                                <th>Isi</th>
                            </thead>
                            <tbody>
                                @foreach ($list_komen as $komen)
                                <tr>
                                  <td>{{ $loop->iteration }}</td>
                                  <td>
                                      <div class="btn-group">
                                        <a href="{{ url('komen', $komen->id) }}" class="btn btn-primary">
                                          <i class="fa fa-comment"></i>
                                      </a>
                                      </div>
                                  </td>
                                  <td>{{ $komen->nama  }}</td>
                                  <td>{{ $komen->created_at->diffForHumans()  }}</td>
                                  <td>{{ $komen->isi }}</td>
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