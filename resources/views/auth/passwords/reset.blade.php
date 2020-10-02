@extends('layouts.master')
@section('title' , 'تغییر رمز')
@section('main')
                <!-- Start Content -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 ">
                            <div class="px-3">
                                <div class="form-ui dt-sl dt-sn pt-4"> 
                                    <div class="section-title title-wide mb-1 no-after-title-wide">
                                        <h2 class="font-weight-bold">ورود به دیجی کالا</h2>
                                    </div>
                                    @if ($errors->any())
                                                <div class="message-light">
                                                    <ul>
                                                        @foreach ($errors->all() as $item)
                                                             <li>{{ $item }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                    @endif
                                    <form method="POST" action=" {{ route('password.update') }} " novalidate>
                                        @csrf
                                        <input type="hidden" name="token" value="{{ $token }}">
                                        <div class="form-row-title">
                                            <h3>لطفا ایمیل خودتان را وارد کنید</h3>
                                        </div>
                                        <div class="form-row with-icon">
                                            <input type="email" name="email" class="input-ui pr-2" required>
                                            <i class="mdi mdi-account-circle-outline"></i>
                                        </div>
                                        <div class="form-row-title">
                                            <h3>لطفا رمز خودتان را وارد کنید</h3>
                                        </div>
                                        <div class="form-row with-icon">
                                            <input type="password" name="password" class="input-ui pr-2" required>
                                            <i class="mdi mdi-account-circle-outline"></i>
                                        </div>
                                        <div class="form-row-title">
                                            <h3>لطفا رمز خودتان را تایید کنید</h3>
                                        </div>
                                        <div class="form-row with-icon">
                                            <input type="password" name="password_confirmation" class="input-ui pr-2" required>
                                            <i class="mdi mdi-account-circle-outline"></i>
                                        </div>
                                        <div class="form-row mt-3">
                                            <button type="submit" class="btn-primary-cm btn-with-icon mx-auto w-100">
                                                <i class="mdi mdi-login-variant"></i>
                                                تایید
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
@endsection

