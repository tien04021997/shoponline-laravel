<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm" value="{{ old('name', isset($product->name) ? $category->name : '') }}" name="name">
                @if($errors->has('name'))
                    <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea name="description" class="form-control" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm"></textarea>
                @if($errors->has('description'))
                    <span class="error-text">
                        {{$errors->first('description')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea name="content" class="form-control" cols="30" rows="3" placeholder="Nội dung"></textarea>
                @if($errors->has('content'))
                    <span class="error-text">
                        {{$errors->first('content')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="title_seo">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title" value="{{ old('title_seo', isset($product->title_seo) ? $product->title_seo : '') }}" name="title_seo">
                @if($errors->has('title_seo'))
                    <span class="error-text">
                        {{$errors->first('title_seo')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="description_seo">Description seo:</label>
                <input type="text" class="form-control" placeholder="Description seo" value="{{ old('description_seo', isset($product->description_seo) ? $product->description_seo : '') }}" name="description_seo">
            </div>
        </div>

        <div class="col-sm-4">
            <div class="form-group">
                <label for="icon">Danh mục sản phẩm:</label>
                <select name="category_id" id="" class="form-control">
                    <option value="">----- Danh mục sản phẩm -----</option>
                    <option value="">Sản phẩm 1</option>
                </select>
                @if($errors->has('category_id'))
                    <span class="error-text">
                        {{$errors->first('category_id')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="price">Giá sản phẩm:</label>
                <input type="number" placeholder="Giá sản phẩm" class="form-control" name="price">
                @if($errors->has('price'))
                    <span class="error-text">
                        {{$errors->first('price')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="sale">Sale:</label>
                <input type="number" placeholder="% giảm giá" class="form-control" name="sale" value="0%">
            </div>

            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" name="avatar" class="form-control">
                @if($errors->has('avatar'))
                    <span class="error-text">
                        {{$errors->first('avatar')}}
                    </span>
                @endif
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