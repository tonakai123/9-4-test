
    $title = __('Create User');
@endphp
@extends('layouts.default')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <form action="{{ url('users') }}" method="post">
        @csrf {{-- CSRF保護 --}}
        @method('POST') {{-- 疑似フォームメソッド --}}
        <div class="form-group">
            <label for="name">{{ __('Name') }}</label>
            <input id="name" type="text" class="form-control @if ($errors->has('name')) is-invalid @endif" name="name" value="{{ old('name') }}" required autofocus>
            @if ($errors->has('name'))
                <span class="invalid-feedback" role="alert">
                    {{ $errors->first('name') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="email">{{ __('E-Mail Address') }}</label>
            <input id="email" type="email" class="form-control @if ($errors->has('email')) is-invalid @endif" name="email" value="{{ old('email') }}" required>
            @if ($errors->has('email'))
                <span class="invalid-feedback" role="alert">
                    {{ $errors->first('email') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="password">{{ __('Password') }}</label>
            <input id="password" type="password" class="form-control @if ($errors->has('password')) is-invalid @endif" name="password" required>
            @if ($errors->has('password'))
                <span class="invalid-feedback" role="alert">
                    {{ $errors->first('password') }}
                </span>
            @endif
        </div>
        <div class="form-group">
            <label for="password_confirmation">{{ __('Confirm Password') }}</label>
            <input id="password_confirmation" type="password" class="form-control" name="password_confirmation" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </form>
</div>
@endsection
