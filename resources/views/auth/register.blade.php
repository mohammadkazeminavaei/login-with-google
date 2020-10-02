@extends('layouts.master')
@section('title' , 'ثبت')
@section('main')
                    <!-- Start Content -->
                    <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12 ">
                                <div class="px-3">
                                    <div class="form-ui dt-sl dt-sn pt-4"> 
                                        <div class="section-title title-wide mb-1 no-after-title-wide">
                                            <h2 class="font-weight-bold">ثبت نام در دیجی کالا</h2>
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
                                        <form method="POST" action=" {{ route('register') }} " novalidate>
                                            @csrf
                                            <div class="form-row-title">
                                                <h3>نام کاربری</h3>
                                            </div>
                                            <div class="form-row with-icon">
                                                <input type="text" name="name"  class="input-ui pr-2" placeholder="نام کاربری خود را وارد نمایید">
                                                <i class="mdi mdi-account-circle-outline"></i>
                                            </div>
                                            <div class="form-row-title">
                                                <h3>ایمیل </h3>
                                            </div>
                                            <div class="form-row with-icon">
                                                <input type="email" name="email" class="input-ui pr-2" placeholder="ایمیل  خود را وارد نمایید" >
                                                <i class="mdi mdi-account-circle-outline"></i>
                                                
                                            </div>
                                            <div class="form-row-title">
                                                <h3>رمز عبور</h3>
                                            </div>
                                            <div class="form-row with-icon">
                                                <input type="password" name="password" class="input-ui pr-2" placeholder="رمز عبور خود را وارد نمایید">
                                                <i class="mdi mdi-lock-open-variant-outline"></i>
                                            </div>
                                            <div class="form-row-title">
                                                <h3>تایید رمز</h3>
                                            </div>
                                            <div class="form-row with-icon">
                                                <input type="password" name="password_confirmation" class="input-ui pr-2" placeholder="رمز عبور خود را مجدد وارد نمایید">
                                                <i class="mdi mdi-lock-open-variant-outline"></i>
                                            </div>
                                            <div class="form-row mt-2">
                                                <div class="custom-control custom-checkbox float-right mt-2">
                                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                    <label class="custom-control-label text-justify" for="customCheck3">
                                                        <a href="#">حریم خصوصی</a> و <a href="#">شرایط و قوانین</a> استفاده از سرویس های سایت دیجی کالا را مطالعه نموده و با کلیه موارد آن موافقم.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="form-row mt-3">
                                                <button type="submit" class="btn-primary-cm btn-with-icon mx-auto w-100">
                                                    <i class="mdi mdi-account-circle-outline"></i>
                                                     ثبت نام در دیجی کالا
                                                </button>
                                            </div>
                                            <div class="form-footer text-right mt-3">
                                                <span class="d-block font-weight-bold">قبلا ثبت نام کرده اید؟</span>
                                                <a href=" {{ route('login') }} " class="d-inline-block mr-3 mt-2">وارد شوید</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Content -->  
@endsection