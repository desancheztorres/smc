{!! Form::model($category, ['route' => ['admin.blogs_category.update', $category->id], 'method' => 'PUT', 'class' => 'needs-validation', 'novalidate', 'id' => 'blogCategoryForm' , 'files' => 'true']) !!}
{{ csrf_field() }}
<div class="row">
    <div class="col-md-4 mx-auto">
        <div class="form-group">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
        {{ Form::submit('Edit Category', array('class' => 'btn btn-success')) }}
        {!! Form::close() !!}
    </div>
</div>