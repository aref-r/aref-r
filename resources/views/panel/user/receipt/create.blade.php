@extends('layouts.user.master')


@section('style')
    <style>
        table tr {
            cursor: pointer;
        }
    </style>

@endsection


@section('content')

@if (\Session::has('success'))
@javascript('success', session('success'))
@javascript('type', 'success')
@elseif(\Session::has('info'))
@javascript('info', session('info'))
@javascript('type', 'info')
@elseif(\Session::has('warning'))
@javascript('warning', session('warning'))
@javascript('type', 'warning')
@elseif(\Session::has('error'))
@javascript('error', session('error'))
@javascript('type', 'error')
@endif

    <div class="content-body">
        <div class="verification section-padding mb-80">
            <div class="container h-100">
                <div class="row justify-content-center h-100 align-items-center  my-5">
                    <div class="col-xl-5 col-md-6">
                        <div class="auth-form card">
                            <div class="card-header">
                                <h4 class="card-title">Link a bank account</h4>
                            </div>
                            <div class="card-body">
                                <form action="{{route('user.receipt.store')}}" class="identity-upload" method="post"  enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Account number </label>
                                            <input type="text" class="form-control" name="sbank" placeholder="36475">
                                        </div>
                                        <input type="hidden" name="order_id" value="{{$order->id}}">
                                        <input type="hidden" name="type" value="{{$type}}">
                                        <div class="mb-3 col-xl-12">
                                            <label class="me-sm-2">Receipt</label>
                                            <input type="file" class="form-control" name="image">
                                        </div>
                                        <div class="text-center col-12">
                                            <a href="verify-step-5.html" class="btn btn-primary mx-2">Back</a>
                                            <button type="submit" class="btn btn-success mx-2">Save</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection


