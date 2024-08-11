<div class="card">
    <div class="card-body">
        <div class="mb-3">
            <label for="meta_title">Tiêu đề</label>
            <input name="meta_title" type="text" value="{{ $post->meta_title ?? old('meta_title') }}" 
            class="form-control" id="meta_title" type="text" 
            placeholder="Nhập tiêu đề seo">
        </div>

        <div class="mb-3">
            <label for="meta_keyword">Từ khóa SEO</label>
            <input name="meta_keyword" type="text" value="{{ $post->meta_keyword ?? old('meta_keyword') }}" 
            autofocus class="form-control" id="meta_keyword"
            placeholder="Nhập từ khóa seo">
        </div>

        <div class="mb-3">
            <label for="meta_description">Mô tả SEO</label>
            <textarea name="meta_description" id="meta_description" class="form-control"> {{ $post->meta_description ?? old('meta_description') }}</textarea>
        </div>
    </div>
</div>