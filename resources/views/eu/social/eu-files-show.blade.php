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
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($euFiles as $file)
                        <tr>
                            <td> {{ $file->eu_no }}</td>
                            <td> {{ $file->Open_File_Location }}</td>
                            <td> {{ $file->Referral_From }}</td>
                            <td> {{ $file->Referral_no }}</td>
                            <td>
                                @if ($file->city_id)
                                    {{ $file->city->name }}
                                @endif
                            </td>
                            <td> {{ $file->area }}</td>
                            <td> {{ $file->address }}</td>
                            <td>
                                <a class="btn btn-sm btn-success btn-edit" data-toggle="modal" data-target="#editCustomer"
                                    href="" data-cust="#">Edit</a>

                                <a class="btn btn-sm btn-info btn-edit" href="#">show</a>

                                <button data-url="#" data-toggle="modal" data-target="#deleteModal"
                                    class='btn btni btn-danger btn-xs btn-delete delete-item text-white'
                                    data-toggle="tooltip" data-placement="bottom" title="delete"><i class="fa fa-trash"></i>
                                </button>
                            </td>
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
