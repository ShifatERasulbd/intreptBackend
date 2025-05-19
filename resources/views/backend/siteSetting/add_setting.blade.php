@extends('backend.master')
@section('main')
<!-- Start app main Content -->
<div class="main-content">
    <section class="section">
        <div class="section-body">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Add Settings</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('setting.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="meta_title" class="form-control">
                                    </div>
                                </div>


                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Logo</label>
                                    <div class="col-sm-12 col-md-7">
                                          <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>


                                  <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Author</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="meta_author" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Keywords</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="meta_keywords" class="form-control">
                                    </div>
                                </div>
                              
                                 <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta Description</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="summernote" name="meta_description"></textarea>
                                        </div>
                                    </div>


                                <!-- Submit Button -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                    <div class="col-sm-12 col-md-7">
                                 
                                        <input type="submit" class="btn btn-primary px-4" value="Save Changes" />
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- Repeater Script -->


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

@endsection
