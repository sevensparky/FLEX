@extends('layouts.app') @section('title', 'ثبت نام') @section('content')
<div class="account">
    <form method="POST" class="form" action="{{ route('register') }}">
        @csrf
        <a class="account-logo" href="index.html">
            <img src="img/weblogo.png" alt="" />
        </a>
        <div class="form-content form-account">
            <input
                type="text"
                name="name"
                class="txt @error('password') is-invalid @enderror"
                placeholder="نام و نام خانوادگی"
            />
            @error('name')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror
            <input
                type="email"
                name="email"
                class="txt txt-l @error('email') is-invalid @enderror"
                placeholder="پست الکترونیکی (ایمیل)"
            />
            @error('email')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror
            <input
                type="text"
                name="mobile"
                class="txt txt-l"
                placeholder="شماره موبایل"
            />
            @error('mobile')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror
            <input
                type="password"
                name="password"
                class="txt txt-l @error('password') is-invalid @enderror"
                placeholder="رمز عبور"
            />
            @error('password')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror

            <input
                type="password"
                name="password_confirmation"
                class="txt txt-l @error('password_confirmation') is-invalid @enderror"
                placeholder="تکرار رمز عبور"
            />
            @error('password_confirmation')
            <span class="invalid-feedback" role="alert">
                <small>{{ $message }}</small>
            </span>
            @enderror

            <span class="rules"
                >رمز عبور باید حداقل ۶ کاراکتر و ترکیبی از حروف بزرگ، حروف کوچک،
                اعداد و کاراکترهای غیر الفبا مانند !@#$%^&*() باشد.</span
            >
            <br />
            <button class="btn continue-btn">ثبت نام و ادامه</button>
        </div>
        <div class="form-footer">
            <a href="{{ route('login') }}">صفحه ورود</a>
        </div>
    </form>
</div>
@endsection
