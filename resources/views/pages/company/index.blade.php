@extends('layouts.master')
@section('title', env('APP_NAME') . ' | Dashboard')

@section('content')
    <style>
        .form-group .col-form-label {
            font-weight: 600;
        }

        .my-pull-right {
            float: right;
        }

        @media only screen and (max-width: 600px) {
            .my-pull-right {
                float: left;
            }
        }
    </style>
    <div class="main-container">
        <div class="pd-ltr-20 xs-pd-20-10">
            <div class="min-height-200px">
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="title">
                                <h4>Company</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Company
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-6 text-right">
                            <a href="{{ route('company.create') }}" class="btn btn-primary">
                                <i class="bi-plus-circle"></i> Create New
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="min-height: 200px;">
                    <table class="table table-bordered table-hover data-table">
                        <thead>
                            <th>S.NO</th>
                            <th>Company Name</th>
                            <th>City </th>
                            <th>Phone</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Test Company</td>
                                <td>Chennai</td>
                                <td>+91 9876543210</td>
                                <td>
                                    <button class="btn btn-sm btn-warning"> <i class="fa fa-edit"></i> </button>
                                    <button class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('addscript')
    <script type="text/javascript">
        var table = $('.data-table').DataTable();
    </script>
@endsection
