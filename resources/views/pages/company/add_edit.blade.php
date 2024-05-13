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
                                <h4>Create Company</h4>
                            </div>
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('dashboard') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item">
                                        <a href="{{ url('company') }}">Company</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Create
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-6 text-right">
                            <a class="btn btn-primary" href="{{ route('company.index') }}">
                                <i class="icon-copy bi bi-arrow-left-circle"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30" style="min-height: 200px;">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    Company Details
                                </div>
                                <div class="card-body">
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Company Name&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" name="company_name" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Address Line 1&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Address Line 2&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Address Line 3&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">City&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">State&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Pincode&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Country&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Phone #1&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Phone #2&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Fax&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Website&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    Contact Person Details
                                </div>
                                <div class="card-body">

                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Name&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Desigination&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Email&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="card mt-3">
                                <div class="card-header">
                                    Other Details
                                </div>
                                <div class="card-body">

                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">TNGST Number&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">CST Number&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">ECC&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">Area Code&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">TIN Number&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">CIN Number&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-4">
                                            <label class="col-form-label my-pull-right">GST Number&nbsp;:&nbsp;</label>
                                        </div>
                                        <div class="col-sm-8">
                                            <input type="text" class="form-control" required>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
