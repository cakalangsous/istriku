@extends('vendor.installer.layouts.master')

@section('template_title')
    {{ trans('installer_messages.final.templateTitle') }}
@endsection

@section('title')
    <i class="fa fa-flag-checkered fa-fw" aria-hidden="true"></i>
    {{ trans('installer_messages.final.title') }}
@endsection

@section('container')
    @if (session('message')['dbOutputLog'])
        <p><strong><small>{{ trans('installer_messages.final.migration') }}</small></strong></p>
        <pre><code>{{ session('message')['dbOutputLog'] }}</code></pre>
    @endif

    <p><strong><small>{{ trans('installer_messages.final.console') }}</small></strong></p>
    <pre><code>{{ $finalMessages }}</code></pre>

    <p><strong><small>{{ trans('installer_messages.final.log') }}</small></strong></p>
    <pre><code>{{ $finalStatusMessage }}</code></pre>

    <p><strong><small>{{ trans('installer_messages.final.env') }}</small></strong></p>
    <pre><code>{{ $finalEnvFile }}</code></pre>

    <div class="alert" style="background-color: #41BBDD; color: #fff;">
        <h4 style="margin-top: 10px; color: #fff; text-align: center;"><i class="fa fa-info-circle"></i> Login Info</h4>

        <ul>
            <li style="list-style: none;">
                <p style="margin-bottom: 0;"><strong>Developer</strong></p>
                <p style="margin-bottom: 0;">Email: <strong>developer@dev.com</strong></p>
                <p style="margin-bottom: 0;">Password: <strong>asdfasdf</strong></p>
            </li>

            <li style="list-style: none; margin-top: 15px;">
                <p style="margin-bottom: 0;"><strong>Admin</strong></p>
                <p style="margin-bottom: 0;">Email: <strong>admin@admin.com</strong></p>
                <p style="margin-bottom: 0;">Password: <strong>asdfasdf</strong></p>
            </li>
        </ul>

    </div>
    <div class="buttons">
        <a href="{{ url('/') }}" class="button">{{ trans('installer_messages.final.exit') }}</a>
    </div>
@endsection
