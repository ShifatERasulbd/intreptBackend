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
                            <h4>Edit Post</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('posts.update', $post->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publish Date</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="date" name="publish_date" class="form-control" value="{{ $post->publish_date }}">
                                        </div>
                                    </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                                    <div class="col-sm-12 col-md-7">
                                        <input type="text" name="type" class="form-control" value="{{ $post->type }}">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Details</label>
                                    <div class="col-sm-12 col-md-7">
                                        <textarea class="summernote" name="details">{{ $post->details }}</textarea>
                                    </div>
                                </div>

                                <!-- Product Images Repeater -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Field Name</label>
                                    <div class="col-sm-12 col-md-7 image-repeater-wrapper">
                                        @foreach ($post->table_content as $content)
                                            <div class="row control-group input-group mb-2">
                                                <div class="col-sm-5 col-md-5">
                                                    <input type="text" name="field_name[]" class="form-control" value="{{ $content->field_name }}" />
                                                </div>
                                                <div class="col-sm-5 col-md-5">
                                                    <input type="text" name="value[]" class="form-control" value="{{ $content->value }}" />
                                                </div>
                                                <div class="col-sm-2 col-md-2">
                                                 
                                                    <button class="btn btn-danger remove-btn" type="button">Delete</button>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>

                                    <!-- Hidden clone template -->
                                    <div class="clone d-none">
                                        <div class="row control-group input-group mb-2">
                                            <div class="col-sm-5 col-md-5">
                                                <input type="text" name="field_name[]" class="form-control" placeholder="Add Field Name Here" />
                                            </div>
                                            <div class="col-sm-5 col-md-5">
                                                <input type="text" name="value[]" class="form-control" placeholder="Add Value Here" />
                                            </div>
                                            <div class="col-sm-2 col-md-2">
                                               
                                                <button class="btn btn-danger remove-btn" type="button">Delete</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <div class="col-sm-12 col-md-7 offset-md-3">
                                        <button class="btn btn-success btn-increment" type="button">Add More</button>
                                        <input type="submit" class="btn btn-primary px-4" value="Update Post" />
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

<!-- Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        $('.summernote').summernote();

        $('body').on('click', '.btn-increment', function () {
            var html = $('.clone').html();
            var newElement = $(html);
            newElement.find('.note-editor').remove();
            newElement.find('textarea').val('');
            $('.image-repeater-wrapper').append(newElement);
            newElement.find('.summernote').summernote();
        });

        $('body').on('click', '.remove-btn', function () {
            $(this).closest('.control-group').remove();
        });
    });
</script>

@endsection