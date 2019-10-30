<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name">Tiêu đề:</label>
                <input type="text" class="form-control" placeholder="Tiêu đề" value="{{ old('name', isset($category->name) ? $category->name : '') }}" name="name">
                @if($errors->has('name'))
                    <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="icon">Mô tả:</label>
                <textarea name="" class="form-control" cols="30" rows="3" placeholder="Mô tả ngắn tin tức"></textarea>
            </div>

            <div class="form-group">
                <label for="icon">Nội dung:</label>
                <textarea name="" class="form-control" cols="30" rows="3" placeholder="Nội dung"></textarea>
            </div>

            <div class="form-group">
                <label for="icon">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title" value="{{ old('title_seo', isset($category->title_seo) ? $category->title_seo : '') }}" name="title_seo">
            </div>

            <div class="form-group">
                <label for="icon">Description seo:</label>
                <input type="text" class="form-control" placeholder="Description seo" value="{{ old('description_seo', isset($category->description_seo) ? $category->description_seo : '') }}" name="description_seo">
            </div>

        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="icon">Danh mục sản phẩm:</label>
                <select name="" id="" class="form-control">
                    <option value="">----- Danh mục tin tức -----</option>
                    <option value="">Tin tức 1</option>
                </select>
            </div>

            <div class="form-group">
                <label for="icon">Avatar:</label>
                <input type="file" name="Avatar" class="form-control">
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