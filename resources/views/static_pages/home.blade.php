@extends('layouts.default')

@section('content')
  @if (Auth::check())
    <div class="row">
      <div class="col-md-8">
        <section class="status_form">
          @include('shared._status_form')
        </section>
        <h4>微博列表</h4>
        <hr>
        @include('shared._feed')
      </div>
      <aside class="col-md-4">
        <section class="user_info">
          @include('shared._user_info', ['user' => Auth::user()])
        </section>
        <section class="stats mt-2">
          @include('shared._stats', ['user' => Auth::user()])
        </section>
      </aside>
    </div>
  @else
    <div class="bg-light p-3 p-sm-5 rounded">
      <h1>谁人的日志·其一·瑶光滩</h1>
      <p class="lead">某人遗落在野外的日志，描述了其人在<a href="https://github.com/jinhesui">瑶光滩</a>的不幸遭遇。</p>
      <p>——瑶光滩——</p>
      <p>又起大雾了，早知道真的不该听那些老矿工的话来这里淘金。这群老头子们几十年前就退休了，给我的信息全都过时了…没一条有用的！现在可好，大雾里不仅淘不到金子，就连回家的方向都找不到了。不知道东东有没有好好吃饭。</p>
      <p>雾中不知方向的地方传来了丘丘人的声音，或许我应该往声音的反方向走，这样就能得救了…</p>
      <p>不知道走了多久，大雾还没有散，看不出白天黑天。但好像前面有隐约的人影？岩王爷保佑我没有走错路，跟着他们走说不定就有救了！好，就这么办。</p>
      <p>迷雾里的人影看起来有点不妙，我在这里扎了个营地，等它们离开再想想怎么走。或许该往回走才对。</p>
      <p>糟糕，四周都是丘丘人的声音，我应该</p>
      <p>【日志内容在这里结束了。】</p>
      <p>
        <a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
      </p>
    </div>
  @endif
@stop
