@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    未登陆
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <ul>
            @foreach ($articless as $article)
                <li style="margin: 50px 0;">
                    <div class="title">
                        <a href="{{ url('article/'.$article->id) }}">
                            <h4>{{ $article->title }}</h4>
                        </a>
                    </div>
                    <div class="body">
                        <p>{{ $article->body }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>
@endsection
