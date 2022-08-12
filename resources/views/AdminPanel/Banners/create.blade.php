@extends('AdminPanel.layout.master')

@section('content')
    <div class="content-wrapper">
        <div class="container p-2">
            <div class="card p-4">
                <form>
                    <div class="form-group">
                        <label for="title">Title<span class="text-danger">*</span></label>
                        <input name="title" type="text" class="form-control" id="title" placeholder="title">
                    </div>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input name="photo" id="thumbnail" class="form-control" type="text" name="filepath">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    <div class="form-group">
                        <label for="description">Description<span class="text-danger">*</span></label>
                        <textarea name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Condition<span class="text-danger">*</span></label>
                        <select name="condition" class="form-control" id="exampleFormControlSelect1">
                            <option>--condition--</option>
                            <option value="banner" {{ old('condition') == 'banner' ? 'selected' : '' }}>Banner</option>
                            <option value="promo" {{ old('condition') == 'promo' ? 'selected' : '' }}>Promo</option>
                        </select>
                        <select name="status" class="form-control mt-3" id="exampleFormControlSelect1">
                            <option>--status--</option>
                            <option value="active" {{ old('status') == 'active' ? 'selected' : '' }}>Active</option>
                            <option value="inactive" {{ old('status') == 'inactive' ? 'selected' : '' }}>Inactive</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="button" class="btn btn-secondary ml-2">Submit</button>
                </form>
            </div>

        </div>


    </div>
@endsection

@section('script')
    {{-- laravel file manager js --}}
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
        $(document).ready(function() {

            $('#description').summernote({
                height: 300
            });
        });
    </script>
@endsection
