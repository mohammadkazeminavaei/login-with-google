@extends('layouts.master')
@section('title' , 'ورود')
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
                                        <div class="form-row mt-3 ">
                                            <a href=" {{ route('auth.google') }} " class=" text-center btn-primary-cm btn-with-icon mx-auto w-100">
                                                <i class="mdi mdi-login-variant"></i>
                                                ورود با گوگل
                                            </a>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Content -->
@endsection

