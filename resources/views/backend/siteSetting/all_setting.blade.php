@extends('backend.master')
@section('main')
        <!-- Start app main Content -->
        <div class="main-content">
        <section class="section">
                

                <div class="section-body">
                    
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Setting List</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center">
                                            <tr>
                                                <th>#</th>
                                                <th>Meta Title</th>
                                                <th>Meta Author</th>
                                                <th>Meta Description</th>
                                                <th>Meta Keyword</th>
                                                <th>Logo</th>
                                                <th>Action</th>
                                            </tr>
                                           @foreach($settings as $setting)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $setting->meta_title}}</td>
                                                <td>{{ $setting->meta_author}}</td>
                                                <td>{!! $setting->meta_description !!}</td>
                                                <td>{{ $setting->meta_keyword}}</td>
                                                 <td><img src="{{asset($setting->logo)}}"></td>
                                                
                                                <td><a href="{{route('setting.edit',$setting->id)}}" class="btn btn-secondary">Edit</a>
                                                <!-- <a href="{{ route('setting.delete',$setting->id) }}" onclick="return confirm('Are you sure you want to delete this post?');" class="btn btn-danger">Delete</a> -->
                                            </td>
                                            </tr>
                                            @endforeach
                                          
                                        </table>
                                    </div>
                                </div>
                           
                            </div>
                        </div>
                        
                    </div>
                 
                    
                </div>
            </section>
        </div>
@endsection