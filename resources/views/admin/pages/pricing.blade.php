@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">курсы</h3>
                </div>
                <form method="POST" action="{{ route('pricings.update') }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label for="">содержание страницы</label>
                            <textarea id="editor1" rows="10" cols="80" name="description">{{ old('description', $pricing->description) }}</textarea>
                            @error('description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">сохранять</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection