@extends('layouts.admin')

@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-8">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">курсы</h3>
                </div>
                <form method="POST" action="{{ route('branches.update', $branch->id) }}" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="box-body">
                        <div class="form-group">
                            <label>город</label>
                            <input type="text" class="form-control" placeholder="город" name="city"
                                value="{{ old('city', $branch->city) }}">
                            @error('city')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>адрес</label>
                            <input type="text" class="form-control" placeholder="адрес" name="address"
                                value="{{ old('address', $branch->address) }}">
                            @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Телефон</label>
                            <input type="text" class="form-control" placeholder="Телефон" name="phone"
                                value="{{ old('phone', $branch->phone) }}">
                            @error('phone')
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