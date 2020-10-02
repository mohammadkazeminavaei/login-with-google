@extends('layouts.master')
@section('title' , 'تایید ایمیل')
@section('main')
                <!-- Start Content -->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12 ">
                            <div class="px-3">
                                <div class="form-ui dt-sl dt-sn pt-4">
                                    @if (session('resent'))
                                    <div class="section-title title-wide mb-1 no-after-title-wide">
                                        <h2 class="font-weight-bold">ایمیل تایید با موفقیت ارسال شد</h2>
                                    </div>
                                    @else
                                    <div class="section-title title-wide mb-1 no-after-title-wide">
                                        <h2 class="font-weight-bold">ایمیل تایید با موفقیت ارسال شد</h2>
                                    </div>                                    
                                    @endif
                                    <form method="POST" action=" {{ route('verification.resend') }} ">
                                        @csrf
                                        <div class="form-row mt-3">
                                            <button type="submit" class="btn-primary-cm btn-with-icon mx-auto w-100">
                                                <i class="mdi mdi-login-variant"></i>
                                                ارسال مجدد ایمیل
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

