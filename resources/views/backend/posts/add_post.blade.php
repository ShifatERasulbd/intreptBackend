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

                                    <h4>Add Post</h4>
                                </div>
                                <div class="card-body">
                                    <form action="{{ route('posts.store')}}" method="POST">
                                        @csrf
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                                        <div class="col-sm-12 col-md-7">

                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publish Date</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="date" name="publish_date" class="form-control">
                                        </div>
                                    </div>


                                    <!-- <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Type</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" name="type" class="form-control">
                                        </div>
                                    </div> -->


                                      <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric" name="type">
                                                <option style="display:none">Select Category</option>
                                                @foreach($category as $cat)
                                                     <option value="{{$cat->id}}">{{ $cat->category_name }}</option>
                                                @endforeach

                                                </select>
                                            </div>
                                        </div>


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Details</label>
                                        <div class="col-sm-12 col-md-7">
                                            <textarea class="my-editor" name="details" id="editor-1"></textarea>

                                        </div>
                                    </div>

                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Featured Image</label>
                                        <div class="col-sm-12 col-md-7">
                                            <div class="input-group">
                                                <span class="input-group-btn">
                                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                                        <i class="fa fa-picture-o"></i> Choose
                                                    </a>
                                                </span>
                                                <input id="thumbnail" class="form-control" type="text" name="image">
                                            </div>
                                            <div id="holder" style="margin-top:15px;max-height:200px;"></div>
                                        </div>
                                    </div>





                                      <!-- Product Images Repeater -->
                                <div class="form-group row mb-4">
                                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Field Name</label>
                                    <div class="col-sm-12 col-md-7">
                                        <!-- Wrapper for all image inputs -->
                                        <div class="image-repeater-wrapper">
                                            <div class="row control-group input-group mb-2">
                                                <div class="col-sm-5 col-md-5">
                                                     <input type="text" name="field_name[]" class="form-control" placeholder="Add Field Name Here" />
                                                </div>
                                                <div class="col-sm-5 col-md-5">
                                                     <input type="text" name="value[]" class="form-control" placeholder="Add Value Here" />
                                                </div>

                                                <div class="col-sm-2  col-md-2">
                                                    <button class="btn btn-success btn-increment" type="button">Add More</button>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Hidden clone template -->
                                        <div class="clone d-none">
                                            <div class="row control-group input-group mb-2">
                                            <div class="col-sm-5 col-md-4">
                                                     <input type="text" name="field_name[]" class="form-control" placeholder="Add Field Name Here" />
                                                </div>
                                                <div class="col-sm-5 col-md-4">
                                                     <input type="text" name="value[]" class="form-control" placeholder="Add Value Here" />
                                                </div>
                                                <div class="col-sm-2 col-md-4">
                                                <button class="btn btn-success btn-increment" type="button">Add More</button>
                                                    <button class="btn btn-danger remove-btn" type="button">Delete</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>




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

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

<script>
    $(document).ready(function () {
        const APP_URL = "{{ url('/') }}";
        var lfm = function(id, type, options) {
            let button = document.getElementById(id);

            button.addEventListener('click', function () {
                var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
                var target_input = document.getElementById(button.getAttribute('data-input'));
                var target_preview = document.getElementById(button.getAttribute('data-preview'));

                window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (items) {
                var file_path = items.map(function (item) {
                    return item.url;
                }).join(',');

                // set the value of the desired input to image url
                target_input.value = file_path;
                target_input.dispatchEvent(new Event('change'));

                // clear previous preview
                target_preview.innerHtml = '';

                // set or change the preview image src
                items.forEach(function (item) {
                    let img = document.createElement('img')
                    img.setAttribute('style', 'height: 5rem')
                    img.setAttribute('src', item.thumb_url)
                    target_preview.appendChild(img);
                });

                // trigger change event
                target_preview.dispatchEvent(new Event('change'));
                };
            });
        };
        var route_prefix = APP_URL + '/laravel-filemanager';
        lfm('lfm', 'image', {prefix: route_prefix});
        $('.summernote').summernote();
        // On Add More
        $('body').on('click', '.btn-increment', function () {
            // Get the HTML from the .clone div
            var html = $('.clone').html();
            var newElement = $(html);

            // Remove any pre-initialized Summernote artifacts
            newElement.find('.note-editor').remove();

            // Replace the textarea with a fresh clone
            newElement.find('textarea').val('');

            // Append the cleaned-up element
            $('.image-repeater-wrapper').append(newElement);

            // Initialize Summernote only now
            newElement.find('.summernote').summernote();
        });

        // Remove row
        $('body').on('click', '.remove-btn', function () {
            $(this).closest('.control-group').remove();
        });


    });
</script>
@endsection