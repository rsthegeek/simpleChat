@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('app.verify_email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('app.verify_email_sent') }}
                        </div>
                    @endif

                    {{ __('app.verify_email_check_inbox') }}
                    {{ __('app.verify_email_no_mail') }} <a href="{{ route('verification.resend') }}">{{ __('app.verify_email_no_email_new') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
