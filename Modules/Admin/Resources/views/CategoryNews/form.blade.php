<form action="" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Tên danh mục:</label>
        <input type="text" class="form-control" placeholder="Tên danh mục" value="{{ old('name', isset($category->name) ? $category->name : '') }}" name="name">
        @if($errors->has('name'))
            <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
        @endif
    </div>

    <div class="form-group">
        <label for="icon">Icon:</label>
        <input type="text" class="form-control" placeholder="fa fa-cart" value="{{ old('icon', isset($category->icon) ? $category->icon : '') }}" name="icon">
        @if($errors->has('icon'))
            <div class="error-text">
                {{$errors->first('icon')}}
            </div>
        @endif
    </div>

    <div class="form-group">
        <label for="icon">Meta title:</label>
        <input type="text" class="form-control" placeholder="Meta title" value="{{ old('title_seo', isset($category->title_seo) ? $category->title_seo : '') }}" name="title_seo">
    </div>

    <div class="form-group">
        <label for="icon">Description seo:</label>
        <input type="text" class="form-control" placeholder="Description seo" value="{{ old('description_seo', isset($category->description_seo) ? $category->description_seo : '') }}" name="description_seo">
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label><input type="checkbox" name="hot"> Nổi bật</label>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Thêm mới</button>
</form>