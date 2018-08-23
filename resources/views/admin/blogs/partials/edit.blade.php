{!! Form::model($blog, ['route' => ['admin.blogs.update', $blog->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate', 'id' => 'blogCreateForm' , 'files' => 'true']) !!}
{{ csrf_field() }}
<div class="form-row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', null, array('class' => 'form-control', 'maxlength' => '191')) }}
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('image', 'Upload Image') }}
                    {{ Form::file('image', array('class' => 'form-control')) }}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('alt_image', 'Alt Image:') }}
                    {{ Form::text('alt_image', null, array('class' => 'form-control', 'maxlength' => '191')) }}
                </div>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('subtitle', 'Subtitle:') }}
            {{ Form::text('subtitle', null, array('class' => 'form-control', 'maxlength' => '191')) }}
        </div>
        <div class="form-row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('category_id', 'Category:') }}
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categoryBlogs as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('status', 'Status:') }}
                    <select name="status" id="status" class="form-control">
                        <option value="0">Inactive</option>
                        <option value="1">Acctive</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('slug', 'Slug:') }}
            {{ Form::text('slug', null, array('class' => 'form-control', 'maxlength' => '191' , 'minlength' => '5')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('tags', 'Tags:') }}
            {{ Form::select('tags[]', $all_tags, null, ['id' => 'tags', 'class' => 'selectpicker form-control', 'multiple', 'data-live-search' => 'true']) }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('meta_description', 'Meta Description:') }}
            {{ Form::textarea('meta_description', null, array('class' => 'form-control', 'rows' => '4')) }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('keywords', 'Keywords:') }}
            {{ Form::select('keywords[]', $all_keywords, null, ['class' => 'selectpicker form-control', 'multiple', 'data-live-search' => 'true']) }}
        </div>
    </div>
</div>
<div class="form-row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content', null, array('content', 'class' => 'form-control tiny')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        {{ Form::submit('Update Blog', array('class' => 'btn btn-success')) }}
    </div>
</div>
{!! Form::close() !!}