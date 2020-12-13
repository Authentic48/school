@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Team</h3>
                </div>
                <form method="POST" action="{{ route('teams.update', $team->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>имя</label>
                            <input type="text" class="form-control" placeholder="имя" name="name" value="{{ old('name', $team->name) }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>профессия</label>
                            <input type="text" class="form-control" placeholder="профессия" name="profession" value="{{ old('profession', $team->profession) }}">
                            @error('profession')
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