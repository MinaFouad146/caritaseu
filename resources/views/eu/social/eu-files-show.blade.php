@extends('layouts.admin')

@section('title')
    Social | EU Files
@endsection

@section('contentHeader')
    EU Files
@endsection


{{-- ################################## breadcrumb-item ################## --}}

@section('contentHeaderLink')
    EU Files
@endsection

@section('contentHeaderActive')
@endsection

{{-- ################################## Content ################## --}}
@section('backgroundimg')
    {{ asset('assets/images/prints2.png') }}
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">DataTable with minimal features & hover style</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>EU NO</th>
                        <th>Open Location</th>
                        <th>Referral_From(s)</th>
                        <th>Referral_no</th>
                        <th>city</th>
                        <th>area</th>
                        <th>address</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($euFiles as $file)
                        <tr>
                            <td> {{ $file->eu_no }}</td>
                            <td> {{ $file->Open_File_Location }}</td>
                            <td> {{ $file->Referral_From }}</td>
                            <td> {{ $file->Referral_no }}</td>
                            <td> {{ $file->city }}</td>
                            <td> {{ $file->area }}</td>
                            <td> {{ $file->address }}</td>
                        </tr>
                    @endforeach

            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection




{{-- ################################## Styles & Scripts ################## --}}
@section('styles')
@endsection


@section('scripts')
@endsection
