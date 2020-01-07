<form action="" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name">Tiêu đề:</label>
                <input type="text" class="form-control" placeholder="Tiêu đề" value="{{ old('name', isset($news->name) ? $news->name : '') }}" name="name">
                @if($errors->has('name'))
                    <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="icon">Mô tả:</label>
                <textarea name="description" id="news_description" class="form-control" cols="30" rows="3" placeholder="Mô tả ngắn tin tức">
                    {{ old('description', isset($news->description) ? $news->description : '') }}
                </textarea>
            </div>

            <div class="form-group">
                <label for="icon">Nội dung:</label>
                <textarea name="content" class="form-control" id="news_content" cols="30" rows="3" placeholder="Nội dung">
                    {{ old('content', isset($news->content) ? $news->content : '') }}
                </textarea>
            </div>

            <div class="form-group">
                <label for="title_seo">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title" value="{{ old('title_seo', isset($news->title_seo) ? $news->title_seo : '') }}" name="title_seo">
            </div>

            <div class="form-group">
                <label for="description_seo">Description seo:</label>
                <input type="text" class="form-control" placeholder="Description seo" value="{{ old('description_seo', isset($news->description_seo) ? $news->description_seo : '') }}" name="description_seo">
            </div>

        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="category_id">Danh mục tin tức:</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">----- Danh mục tin tức -----</option>
                    @if(isset($categorieNews))
                        @foreach($categorieNews as $categorieNews)
                            <option value="{{ $categorieNews->id }}" {{ old('category_id', isset($news->category_id) ? $news->category_id : '' == $categorieNews->id ? "selected='selected'" : "") }}>{{ $categorieNews->name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                <div class="image-form">
                    <img id="output_img" src="{{ asset('images/no-image.jpg') }}" alt="" />
                </div>
            </div>

            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input id="input_img" type="file" name="avatar" value="{{ old('avatar', isset($news->avatar) ? $news->avatar : '') }}" class="form-control">
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="hot"> Nổi bật</label>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Thêm mới</button>
</form>

@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace( 'news_content' );
        CKEDITOR.replace('news_description');
    </script>
@stop