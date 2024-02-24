@extends('admin.layouts.app')

@section('title')

    Upload Servise
    
@endsection

@php
    $page= 'Upload';
@endphp

@section('mainpart')

    <div class="card">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h4 class="card-title">All Service</h4>
            <button class="btn btn-primary" data-toggle="modal" data-target="#AddpostModel">Add Service</button>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="dataTable">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Category</th>
                        <th>Thumbnail</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($services as $key => $service)
                        
                    
                    
                        <tr>
                            <td>{{++$key }}</td>
                            <td>{{$service->title }}</td>
                            <td>
                                @php
                                    echo $service->description;
                                @endphp
                            </td>
                            <td>{{$service->category_name }}</td>
                            <td>
                                <img src="{{asset('post_thumbnails/' . $service->thumbnail)}}" alt="" style="width: 100px">
                            </td>
                            <td>
                                @if($service->status==1)
                                    <span class="badge badge-success">Active</span>
                                @else 
                                    <span class="badge badge-danger">Inactive</span>                                    
                                    
                                @endif
                                   
                            </td>
                            <td>
                                <div class="d-flex">
                                    <button class="btn btn-primary btn-sm mr-1" data-toggle="modal" data-target="{{'#Edit' . $service->id . 'postModel'}}"><i class="fas fa-edit"></i></button>
                                    
                                    <form action="{{ route('post.destroy', $service->id)}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="DELETE" name="_method">
                                        <button type="submit" class="delete btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div>
                                
                            </td>
                        </tr>

                        <!-- post edit Modal-->
                    <div class="modal" id="{{'Edit' . $service->id . 'postModel'}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                               
                                <form action="{{route('post.update', $service->id)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="_method" value="put">
                                    <div class="modal-body">
                                        
                                        
            
                                        <div class="form-group">
                                            <label for="post_name">Post Category</label>
                                            <select name="category_id" class="form-control">
                                                
                                                @foreach ($categories as $category)
            
                                                    <option value="{{ $category->id }}" @if ($category->id == $service->category_id) selected @endif>{{ $category->name}}</option>
                                                    
                                                @endforeach
                                            </select>
                                                                                      
                                        </div>
            
                                            <label for="status" class="form-check-label">
                                                <input type="checkbox" value="1" name="status" id="status" @if ($service->status == 1) checked 
                                                    
                                                @endif> Status
                                            </label>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <a class="btn btn-light" type="button" data-dismiss="modal">Cancel</a>
                                        <button class="btn btn-primary" type="submit">Approved</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- service_create add Modal-->
<div class="modal" id="AddpostModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Create Service</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{route('service_create')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        
                            <div class="form-group">
                                <label for="post_name">Service Title</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror " name="title" value="{{ old('title')}}" >
                                @error('title')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="post_name">Location</label>
                                <input type="text" class="form-control @error('Location') is-invalid @enderror " name="Location" value="{{ old('Location')}}" >
                                @error('Location')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    
                                @enderror
                            </div>


                            <div class="form-group">
                                <label for="post_name">Starting payment</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror " name="payment" value="{{ old('payment')}}" >
                                @error('payment')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                    
                                @enderror
                            </div>

                            <div class="form-group">
                                <label for="post_name">Service Category</label>
                                <select name="category_id" class="form-control">
                                    <option selected disabled>Select Category</option>
                                    @foreach ($categories as $category)

                                        <option value="{{ $category->id }}">{{ $category->name}}</option>
                                        
                                    @endforeach
                                </select>
                                
                            
                            </div>

                            <div class="form-group">
                                <label for="post_name">Service Description</label>
                                <textarea class="summernote form-control @error('description') is-invalid @enderror " name="description" rows="7">{{ old('description')}}</textarea>
                                @error('description')

                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message}}</strong>
                                    </span>
                                
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="post_name">Service Thumbnail</label>
                                <input type="file" class="form-control-file" name="thumbnail"  >
                            
                            </div>

                        
                                <label for="status" class="form-check-label">
                                    <input type="checkbox" value="1" name="status" id="status"> Status
                                </label>
                            
                        
                    </div>
                    <div class="modal-footer">
                        <a class="btn btn-light" type="button" data-dismiss="modal">Cancel</a>
                        <button class="btn btn-primary" type="submit">Add Service </button>
                    </div>
                </form>
            </div>
        </div>
</div>
    
@endsection