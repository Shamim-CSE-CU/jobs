@extends('admin.layouts.app')

@section('title')

    Dashboard
    
@endsection

@php
    $page= 'Dashboard';

@endphp

@section('mainpart')

                       
    
                            
                            
    
                        <!-- Content Row -->
    
                        <div class="row">
    
                            <!-- Area Chart -->
                            <div class="col-xl-12 col-lg-7">
                                <div class="card shadow mb-4">
                                    <!-- Card Header - Dropdown -->
                                    <div
                                        class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                        <h4 class="m-0 font-weight-bold text-primary">POTATO</h4>
                                    
                                        
                                    </div>
                                    <!-- Card Body -->
                                    <div class="card-body">
                                        <div class="chart-area">
                                            <img src="{{asset('usr_assets/images/potatoanimationImage.jpg')}}" style="width: 100%; height:100%;" alt="">
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
    
                            
                        </div>
    
                        
                       
    
@endsection




