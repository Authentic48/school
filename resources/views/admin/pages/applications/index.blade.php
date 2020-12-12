@extends('layouts.admin')

@section('content')
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
<section class="content-header">
    <h1>Applications</h1>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Applications</h3>
                </div>
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tr>
                            <th>имя</th>
                            <th>Email</th>
                            <th>Телефон</th>
                            <th>Cтатус</th>
                            <th>создано в</th>
                            <th>обновлено в</th>
                        </tr>
                        @foreach ($applications as $application)
                        <tr>
                            <td>{{ $application->name }}</td>
                            <td>{{ $application->email }}</td>
                            <td>{{ $application->phone }}</td>
                            <td>{{ $application->status }}</td>
                            <td>{{ $application->created_at->diffForHumans() }}</td>
                            <td>{{ $application->updated_at->diffForHumans() }}</td>
                            <td><a href="{{ route('applications.edit', $application->id) }}"><i class="fa fa-edit"></i></a>
                            </td>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection