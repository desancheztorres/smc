{!! Form::open(['route' => 'admin.cards.store', 'data-parsley-validate' => '', 'files' => 'true']) !!}
<div class="row">
    <div class="col">
        @if ($errors->any())
            <div class="alert alert-danger">
                <p><strong>Errors:</strong></p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
</div>
{{ csrf_field() }}
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
        <div class="form-group">
            {{ Form::label('logo', 'Image:') }}
            {{ Form::file('logo', array('class' => 'form-control')) }}
        </div>
        <div class="form-group">
            {{ Form::label('link', 'Link') }}
            {{ Form::text('link', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
    </div>
    <div class="col-md-8">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    {{ Form::label('title1', 'Title 1:') }}
                    {{ Form::text('title1', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    {{ Form::label('title2', 'Title 2:') }}
                    {{ Form::text('title2', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('title3', 'Title 3:') }}
                    {{ Form::text('title3', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('category_id', 'Category:') }}
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach($categoryCards as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('description1', 'Description 1:') }}
            {{ Form::text('description1', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('description2', 'Description 2:') }}
            {{ Form::text('description2', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            {{ Form::label('description3', 'Description 3:') }}
            {{ Form::text('description3', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('info1', 'Info 1:') }}
            {{ Form::textarea('info1', null, array('class' => 'form-control tiny' , 'required' => '')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('info2', 'Info 2:') }}
            {{ Form::textarea('info2', null, array('class' => 'form-control tiny' , 'required' => '')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('example', 'Example:') }}
            {{ Form::textarea('example', null, array('class' => 'form-control tiny' , 'required' => '')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        {{ Form::submit('Create Card', array('class' => 'btn btn-success')) }}
    </div>
</div>
{!! Form::close() !!}