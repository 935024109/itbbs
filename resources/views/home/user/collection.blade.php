@extends('home.layout.index')

@section('main')
<!-- <link href="https://cdn.bootcss.com/twitter-bootstrap/4.3.1/css/bootstrap.css" rel="stylesheet"> -->

<div class="bs-example" data-example-id="simple-table" style="width:1100px;margin:0 auto">
    <table class="table">
      <h1>{{ $user->nickname }}</h1>
      <thead>
        <tr>
          <th>序号</th>
          <th>贴子标题</th>
          <th>发帖人</th>
          <th>创建时间</th>
          <th>回复数量</th>
          <th>最后回复时间</th>
          <th>操作</th>
        </tr>
      </thead>
      <tbody>
        @foreach($data as $k => $v)
        <tr>
          <th scope="row">{{ $k+1 }}</th>
          <td><a >{{ $v->post->title }}</a></td>
          <td><a >{{ $v->post_user($v->pid)}}</a></td>
          <td>{{ $v->post->created_at }}</td>
          <td>{{ $v->post->replyCount($v->pid) }}</td>
          <td>{{ $v->post->last_time }}</td>
          <td>
              <a type="submit" href="/home/post/nolike/{{ $v->pid }}" class="btn btn-danger" onclick="return confirm('您确定?')"> 取消收藏</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>


@endsection