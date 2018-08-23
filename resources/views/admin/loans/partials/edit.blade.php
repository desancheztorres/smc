{!! Form::model($loan, ['route' => ['admin.loans.update', $loan->id], 'method' => 'PUT', 'files' => 'true']) !!}
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
    <div class="col">
        <div class="form-group">
            {{ Form::label('name', 'Name:') }}
            {{ Form::text('name', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('minLoan', 'Min Loan:') }}
            {{ Form::number('minLoan', null, array('class' => 'form-control', 'required' => '', 'min' => '50')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('maxLoan', 'Max Loan:') }}
            {{ Form::number('maxLoan', null, array('class' => 'form-control', 'required' => '', 'min' => '50')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('logo', 'Image:') }}
            {{ Form::file('logo', array('class' => 'form-control')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('minTerm', 'Min Term:') }}
            {{ Form::number('minTerm', null, array('class' => 'form-control', 'required' => '')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('maxTerm', 'Max Term:') }}
            {{ Form::number('maxTerm', null, array('class' => 'form-control', 'required' => '')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('apr', 'APR:') }}
            {{ Form::number('apr', null, array('class' => 'form-control', 'required' => '')) }}
        </div>
        <div class="form-group">
            {{ Form::label('lender', 'Lender') }}
            {{ Form::text('lender', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('category_id', 'Category:') }}
            <select name="category_id" id="category_id" class="form-control">
                @foreach($categoryLoans as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('url', 'Link') }}
            {{ Form::text('url', null, array('class' => 'form-control', 'required' => '', 'maxlength' => '191')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        <div class="form-group">
            {{ Form::label('rep', 'Rep:') }}
            {{ Form::textarea('rep', null, array('class' => 'form-control' , 'required' => '')) }}
        </div>
    </div>
    <div class="col">
        <div class="form-group">
            {{ Form::label('details', 'Details:') }}
            {{ Form::textarea('details', null, array('class' => 'form-control' , 'required' => '')) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col">
        {{ Form::submit('Update Loan', array('class' => 'btn btn-success')) }}
    </div>
</div>
{!! Form::close() !!}