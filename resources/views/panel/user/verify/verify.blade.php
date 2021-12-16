
@extends('layouts.user.master')


@section('style')

@endsection


@section('content')
    <div class="content-body">
    <div class="verification section-padding">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-xl-5 col-md-6">
                    <div class="auth-form card">
                        <div class="card-body">
                            <form action="add-debit-card.html" class="identity-upload">
                                <div class="identity-content">
                                    <span class="icon"><i class="fa fa-check"></i></span>
                                    <h4>Identity Verified</h4>
                                    <p>Congrats! your identity has been successfully verified and your
                                        investment
                                        limit has been increased.</p>
                                </div>

                                <div class="text-center mb-4">
                                    <a href="{{$page}}" type="submit" class="btn btn-success ps-5 pe-5">Continue</a>
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

