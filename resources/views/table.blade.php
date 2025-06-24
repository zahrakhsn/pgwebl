@extends('layout.tamplate')

@section('content')
<div style="background-color: rgb(251, 246, 246); padding: 0;">
    <!-- Konten di dalam div -->
    <div style="background-color: rgb(214, 231, 250); padding: 20px; border-radius: 12px;">


    {{-- Data Points --}}
    <div class="row justify-content-center mb-4">
  <div class="col-md-10">
    <div class="card shadow-sm mb-4 border-0 rounded-3">
        <div class="card-header bg-info text-white rounded-top-3">
            <h4 class="mb-0">Data Points</h4>
        </div>
        <div class="card-body p-3 table-responsive">
            <table class="table table-hover align-middle table-bordered" id="pointstable">
                <thead class="table-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($points as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->description }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $p->image) }}"
                                     class="img-thumbnail rounded-2"
                                     alt="{{ $p->image }}"
                                     style="width:100px; height:auto; object-fit:cover;">
                            </td>
                            <td>{{ $p->created_at }}</td>
                            <td>{{ $p->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
  </div>
    </div>

    {{-- Data Polylines --}}
    <div class="row justify-content-center mb-4">
  <div class="col-md-10">
    <div class="card shadow-sm mb-4 border-0 rounded-3">
        <div class="card-header bg-info text-white rounded-top-3">
            <h4 class="mb-0">Data Polylines</h4>
        </div>
        <div class="card-body p-3 table-responsive">
            <table class="table table-hover align-middle table-bordered" id="polylinestable">
                <thead class="table-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($polylines as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->description }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $p->image) }}"
                                     class="img-thumbnail rounded-2"
                                     style="width:100px; height:auto; object-fit:cover;"
                                     alt="{{ $p->image }}">
                            </td>
                            <td>{{ $p->created_at }}</td>
                            <td>{{ $p->updated_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

    {{-- Data Polygons --}}
    <div class="row justify-content-center mb-4">
  <div class="col-md-10">
    <div class="card shadow-sm border-0 rounded-3">
        <div class="card-header bg-info text-white rounded-top-3">
            <h4 class="mb-0">Data Polygons</h4>
        </div>
        <div class="card-body p-3 table-responsive">
            <table class="table table-hover align-middle table-bordered" id="polygonstable">
                <thead class="table-light text-center">
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Image</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($polygons as $p)
                        <tr>
                            <td>{{ $p->id }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->description }}</td>
                            <td>
                                <img src="{{ asset('storage/images/' . $p->image) }}"
                                     class="img-thumbnail rounded-2"
                                     style="width:100px; height:auto; object-fit:cover;"
                                     alt="{{ $p->image }}">
                            </td>
                            <td>{{ $p->created_at }}</td>
                            <td>{{ $p->updated_at }}</td>
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

@section('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.1/css/dataTables.dataTables.min.css">
    <style>
        .card-header { font-size: 1.2rem; font-weight: bold; }
        table thead th { vertical-align: middle; }
        table tbody tr:hover { background-color: #f9f9f9; }
    </style>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.3.1/js/dataTables.min.js"></script>
    <script>
        new DataTable('#pointstable');
        new DataTable('#polylinestable');
        new DataTable('#polygonstable');
    </script>
@endsection
