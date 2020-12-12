@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">курсы</h3>
                </div>
                <form method="POST" action="{{ route('applications.update', $application->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>Ваше имя</label>
                            <input type="text" class="form-control" placeholder="Ваше имя" name="name"
                                value="{{ old('name', $application->name) }}">
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Ваш адрес электронной почты</label>
                            <input type="text" class="form-control" placeholder="Ваш адрес электронной почты" name="email"
                                value="{{ old('email', $application->email) }}">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Телефон</label>
                            <input type="text" class="form-control" placeholder="Телефон" name="phone"
                                value="{{ old('phone', $application->phone) }}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Cтатус</label>
                            <input type="text" class="form-control" placeholder="Cтатус" name="status"
                                value="{{ old('status', $application->status) }}">
                            @error('status')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
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