@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">курсы</h3>
                </div>
                <form method="POST" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Название курса</label>
                            <input type="text" class="form-control" placeholder="Название курса" name="title" value="{{ old('title') }}">
                            @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Уровень</label>
                            <input type="text" class="form-control" placeholder="Уровень" name="level"value="{{ old('level') }}">
                            @error('level')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Фотография курса</label>
                            <input type="file" name="image">
                            @error('image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>учебник</label>
                            <input type="text" class="form-control" placeholder="учебник" name="book" value="{{ old('book') }}">
                            @error('book')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Длительность курса</label>
                            <input type="text" class="form-control" placeholder="Длительность курса" name="duration" value="{{ old('duration') }}">
                            @error('duration')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Описание курса</label>
                            <textarea id="editor1" rows="10" cols="80" name="description">{{ old('description') }}</textarea>
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