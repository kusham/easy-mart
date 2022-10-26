@extends('AdminPanel.layout.master')

@section('content')
    <div class="content-wrapper p-2">
        <div class="container">
            <div class="card p-4">
                <div class="col-md-12">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li >{{$error}}</li>
                            @endforeach
                        </ul>
                    </div>
                        
                    @endif
                </div>
                <form action="{{route('banner.store')}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="title">Title<span class="text-danger">*</span></label>
                        <input name="title" type="text" value="{{old('title')}}" class="form-control" id="title" placeholder="title">
                    </div>
                    <label for="Photo">Photo<span class="text-danger">*</span></label>
                    <div class="input-group">

                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-success">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input value="{{old('photo')}}" name="photo" id="thumbnail" class="form-control" type="text" name="filepath">
                    </div>
                    <div id="holder" style="margin-top:15px;max-height:100px;"></div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea value="{{old('description')}}" name="description" class="form-control" id="description"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect1">Condition</label>
                        <select name="condition" class="form-control" id="exampleFormControlSelect1">
                            <option value="">--condition--</option>
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
