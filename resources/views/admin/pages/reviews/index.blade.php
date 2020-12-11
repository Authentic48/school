@extends('layouts.admin')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<section class="content-header">
    <h1>Kурсы</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Kурсы</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>имя</th>
                            <th>профессия</th>
                            <th>создано в</th>
                            <th>обновлено в</th>
                        </tr>
                        @foreach ($reviews as $review)
                        <tr>
                            <td>{{ $review->name }}</td>
                            <td>{{ $review->profession }}</td>
                            <td>{{ $review->created_at->diffForHumans() }}</td>
                            <td>{{ $review->updated_at->diffForHumans() }}</td>
                            <td><a href="{{ route('reviews.edit', $review->id) }}"><i class="fa fa-edit"></i></a>
                            </td>
                            <td><a href="{{ route('reviews.delete', $review->id) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete').submit();"><i
                                        class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <form id="delete" action="{{ route('reviews.delete', $review->id) }}" method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                        @endforeach
                    </table>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix no-border">
                        <a href="{{ route('reviews.create') }}" class="btn btn-default pull-right"><i
                                class="fa fa-plus"></i>Добавить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection