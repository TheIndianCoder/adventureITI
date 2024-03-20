
@extends('admin.include.master')

@section('master-content')

@push('title')
    <title>Add Notice | Adventure Pvt. Ltd. </title>
@endpush

<div class="content-body">
    <!-- row -->
    <div class="container-fluid">
            
        <div class="row page-titles mx-0">
            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
            @if ($message = Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <i class="mdi mdi-check-all me-2"></i>
                    <strong>{{ $message }}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                        aria-label="Close"></button>
                </div>
            @endif
            <div class="col-sm-6 p-md-0">
                <div class="welcome-text">
                    <h4>All Gallery</h4>
                </div>
            </div>
            <div class="col-sm-6 p-md-0 justify-content-sm-end mt-2 mt-sm-0 d-flex">
                <ol class="breadcrumb">
                    
                    <li class="breadcrumb-item"><a href="javascript:void(0);">Gallery</a></li>
                    <li class="breadcrumb-item active"><a href="javascript:void(0);">All Gallery</a></li>
                </ol>
            </div>
        </div>
        
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Gallery List</h4>
                        <a href="{{route('admin.addGallery')}}" class="btn btn-primary"> + Add</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example5" class="display" style="min-width: 845px">
                                <thead>
                                    <tr>
                                        <th>S.No.</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Desc.</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gallery as $item)
                                    @php $id = base64_encode($item->id); @endphp
                                        <tr>
                                            <td>01</td>
                                            <td> <img style="height:10rem; width:15rem;" src="{{asset('uploads/gallery')}}/{{$item->image}}" alt=""> </td>
                                            <td>{{$item->title}} </td>
                                            <td>{{$item->description}} </td>
                                            <?php
                                                if($item->status == 1){
                                                    ?>
                                                        <td><a href="{{route('admin.changeStatus',$id)}}" class="btn btn-sm btn-success">Deactive </a>
                                                          </td>
                                                    <?php
                                                }else{
                                                    ?>
                                                        <td><a href="{{route('admin.changeStatus',$id)}}" class="btn btn-sm btn-danger">Active </a>
                                                        </td>
                                                    <?php
                                                }
                                            ?>
                                            
                                            <td>{{$item->status}} </td>
                                            
                                            <td>
                                                <a href="{{route('admin.deleteGallery',$id)}}" class="btn btn-xs sharp btn-danger"><i class="fa fa-trash"></i></a>
                                            </td>												
                                        </tr>
                                    @endforeach                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>

@endsection