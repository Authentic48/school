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
                            <th>звание</th>
                            <th>уровень</th>
                            <th>учебник</th>
                            <th>создано в</th>
                            <th>обновлено в</th>
                        </tr>
                        @foreach ($courses as $course)
                        <tr>
                            <td>{{ $course->title }}</td>
                            <td>{{ $course->level }}</td>
                            <td>{{ $course->book }}</td>
                            <td>{{ $course->created_at->diffForHumans() }}</td>
                            <td>{{ $course->updated_at->diffForHumans() }}</td>
                            <td><a href="{{ route('courses.edit', $course->slug) }}"><i class="fa fa-edit"></i></a>
                            </td>
                            <td><a href="{{ route('courses.delete', $course->slug) }}"
                                    onclick="event.preventDefault(); document.getElementById('delete').submit();"><i
                                        class="fa fa-trash-o"></i></a></td>
                        </tr>
                        <form id="delete" action="{{ route('courses.delete', $course->slug) }}" method="post">
                            @method('DELETE')
                            @csrf
                        </form>
                        @endforeach
                    </table>
                    <!-- /.box-body -->
                    <div class="box-footer clearfix no-border">
                        <a href="{{ route('courses.create') }}" class="btn btn-default pull-right"><i
                                class="fa fa-plus"></i>Добавить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection