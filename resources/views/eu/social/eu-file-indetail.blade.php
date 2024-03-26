@extends('layouts.admin')

@section('title')
    Social | EU Files
@endsection

@section('contentHeader')
    EU File : {{ $eufile->id }}
@endsection


{{-- ################################## breadcrumb-item ################## --}}

@section('contentHeaderLink')
@endsection

@section('contentHeaderActive')
@endsection

{{-- ################################## Content ################## --}}
@section('backgroundimg')
    {{ asset('assets/images/prints2.png') }}
@endsection



@section('content')
    {{-- //////////////////////////////////////  Case Individuals Data --}}

    <div class="card card-warning">
        <div class="card-header text-left">
            <h4 class=""> Individuls</h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover table-sm">
                <thead>
                    <tr>
                        <th>EU NO</th>
                        <th>indvidual id</th>
                        <th>name</th>
                        <th>personal_info</th>
                        <th>education_info</th>
                        <th>work_info</th>
                        <th>Nationality</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($Individuals as $ind)
                        <tr>
                            <td> {{ $ind->eu_no->id }}</td>
                            <td> {{ $ind->id }}</td>
                            <td> {{ $ind->name }}</td>
                            <td> {{ $ind->personal_info }}</td>
                            <td> {{ $ind->education_info }}</td>
                            <td> {{ $ind->work_info }}</td>
                            <td>
                                @if ($ind->country_id)
                                    {{ $ind->nationality->name }}
                                @endif
                            </td>
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


    {{-- //////////////////////////////////////  Last Summary Data --}}
    <div class="card card-success">
        <div class="card-header text-left">
            <h4 class=""> Social Vulnerability Assessment</h4>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example2" class="table table-bordered table-hover table-sm">

                <tr>
                    <th class="table-info">Family Income</th>
                    <td>{{ $socialassessment->family_income_resources }}</td>
                    <th class="table-info">Family Expenses</th>
                    <td>{{ $socialassessment->family_expenses }}</td>
                    <th class="table-info">Accommodation Type</th>
                    <td>{{ $socialassessment->accommodation_type }}</td>
                </tr>
                <tr>
                    <th class="table-info">Level</th>
                    <td>{{ $socialassessment->family_level }}</td>
                    <th class="table-info">Medical Contributions</th>
                    <td>{{ $socialassessment->medical_contributions }}</td>
                    <th class="table-info">Social Worker</th>
                    <td>{{ $socialassessment->createdby->name }}</td>
                </tr>
                <tr>
                    <td colspan="6"> {{ $socialassessment->family_summary }}</td>
                </tr>




                {{-- <thead>
                    <tr>
                        <th>EU NO</th>
                        <th>indvidual id</th>
                        <th>name</th>
                        <th>personal_info</th>
                        <th>education_info</th>
                        <th>work_info</th>
                        <th>Nationality</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($Individuals as $ind)
                        <tr>
                            <td> {{ $ind->eu_no->id }}</td>
                            <td> {{ $ind->id }}</td>
                            <td> {{ $ind->name }}</td>
                            <td> {{ $ind->personal_info }}</td>
                            <td> {{ $ind->education_info }}</td>
                            <td> {{ $ind->work_info }}</td>
                            <td>
                                @if ($ind->country_id)
                                    {{ $ind->nationality->name }}
                                @endif
                            </td>
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
                    @endforeach --}}
            </table>
        </div>
        <!-- /.card-body -->
    </div>
@endsection




{{-- ################################## Styles & Scripts ################## --}}
@section('styles')
    <style>
        .content-wrapper {
            background-repeat: repeat;
            background-size: 80%;
            background-attachment: fixed;
            height: 100vh;
        }
    </style>
@endsection


@section('scripts')
@endsection
