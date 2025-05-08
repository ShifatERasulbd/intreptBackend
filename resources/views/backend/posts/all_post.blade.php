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
                                    <h4>News</h4>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-bordered table-md v_center">
                                            <tr>
                                                <th>#</th>
                                                <th>Title</th>
                                                <th>Type</th>
                                                <th>Details</th>
                                                <th>Other Information</th>
                                                <th>Action</th>
                                            </tr>
                                            @foreach($posts as $posts)
                                            <tr>
                                                <td>1</td>
                                                <td>{{ $posts->title }}</td>
                                                <td>{{ $posts->type }}</td>
                                                <td>{!! $posts->details !!}</td>
                                              <td>@foreach($posts->table_content as $c_table)
                                                 <span style="padding-right:50px"> <b>  {{ $c_table->field_name }}</b></span>
                                                    {{ $c_table->value }}<br>
                                              @endforeach
                                              </td>
                                                <td><a href="{{ route('posts.Edit', $posts->id) }}" class="btn btn-secondary">Edit</a>
                                                <a href="{{ route('posts.delete', $posts->id) }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                                            </td>
                                            </tr>
                                            @endforeach
                                          
                                        </table> 
                                    </div>
                                </div>
                                <!-- <div class="card-footer text-right">
                                    <nav class="d-inline-block">
                                        <ul class="pagination mb-0">
                                            <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1"><i class="fas fa-chevron-left"></i></a></li>
                                            <li class="page-item active"><a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </nav>
                                </div> -->
                            </div>
                        </div>
                        
                    </div>
                 
                    
                </div>
            </section>
        </div>
@endsection