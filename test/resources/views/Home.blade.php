@extends('layouts.default')

@section('title', 'koresawa portfolio')

@section('content')
<h1>
  おすすめ動画
</h1>
<ul>
<div class="movie-wrap">
<iframe width="560" height="315" src="https://www.youtube.com/embed/PgAzHovs_fU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
  <li>
      {{ csrf_field() }}
      {{ method_field('delete') }}
    </form>
  </li>

  <li>No posts yet</li>

</ul>
<script src="/js/main.js"></script>
@endsection
