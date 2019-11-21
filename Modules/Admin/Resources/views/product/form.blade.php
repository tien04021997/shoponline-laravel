<form action="" method="POST">
    @csrf
    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label for="name">Tên sản phẩm:</label>
                <input type="text" class="form-control" placeholder="Tên sản phẩm" value="{{ old('name', isset($product->name) ? $product->name : '') }}" name="name">
                @if($errors->has('name'))
                    <span class="error-text">
                        {{$errors->first('name')}}
                    </span>
                @endif
            </div>

            <div class="form-group">
                <label for="description">Mô tả:</label>
                <textarea name="description" class="form-control" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm">
                    {{ old('description', isset($product->description) ? $product->description : '') }}
                </textarea>
            </div>

            <div class="form-group">
                <label for="content">Nội dung:</label>
                <textarea name="content" class="form-control" cols="30" rows="3" placeholder="Nội dung">
                    {{ old('content', isset($product->content) ? $product->content : '') }}
                </textarea>
            </div>

            <div class="form-group">
                <label for="icon">Meta title:</label>
                <input type="text" class="form-control" placeholder="Meta title" value="{{ old('title_seo', isset($product->title_seo) ? $product->title_seo : '') }}" name="title_seo">
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
                    @if(isset($categories))
                        @foreach($categories as $categories)
                            <option value="{{ $categories->id }}" {{ old('category_id', isset($product->category_id) ? $product->category_id : '' == $categories->id ? "selected='selected'" : "") }}>{{ $categories->c_name }}</option>
                        @endforeach
                    @endif
                </select>
            </div>

            <div class="form-group">
                <label for="price">Giá sản phẩm:</label>
                <input type="number" name="price" placeholder="Giá sản phẩm" class="form-control" value="{{ old('price', isset($product->price) ? $product->price : '') }}">
            </div>

            <div class="form-group">
                <label for="sale">Sale:</label>
                <input type="number" name="sale" placeholder="% giảm giá" class="form-control" value="{{ old('sale', isset($product->sale) ? $product->sale : '0') }}">
            </div>

            <div class="form-group">
                <label for="avatar">Avatar:</label>
                <input type="file" name="avatar" class="form-control" value="{{ old('avatar', isset($product->avatar) ? $product->avatar : '') }}">
            </div>

            <div class="form-group">
                <div class="checkbox">
                    <label><input type="checkbox" name="hot" value="0"> Nổi bật</label>
                </div>
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-success">Thêm mới</button>
</form>