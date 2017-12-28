@include('layouts.header')
@include('layouts.master')
<br>
<br>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading" style="">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <ul>
                        @php
                        $topic = App\Topic::all()
                        @endphp
                        @foreach($topic as $topic)
                        <li>
                            <a  class="" style="cursor: pointer; color: gray; font-size: 15px;" data-toggle="collapse" data-target="#demo-{{$topic->id}}"><b>{{$topic->name_topic}}</b></a>
                           <div id="demo-{{$topic->id}}" class="collapse">
                                <ul>
                                    @php
                                    $gram = App\Gramma::all()
                                    @endphp
                                    @foreach($gram as $gram)
                                    @if($gram->topic_id == $topic->id)
                                    <li><a href="/gramma/{{$gram->id}}" style=" color: gray; font-size: 15px;"><b>{{$gram->title}}</b></a></li>
                                    @endif
                                    @endforeach
                                </ul>
                            </div>
                         </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>


@include('layouts.footer')