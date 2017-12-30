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
            <br>
            <div class="panel panel-default">
                <div class="panel-heading" style="">Test Results</div>

                <div class="panel-body">
                    <ul>
                        @php
                        $result = App\Results::where('user_id',[Auth::user()->id])->orderBy('created_at','desc')->get()
                        @endphp
                        @foreach($result as $result)
                        <li>
                            <b>
                  @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 100%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 80%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 80%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 80%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 80%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 80%
                                    
                    @endif



                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif

                    
                    @if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 60%
                                    
                    @endif



                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif
                    @if(($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 40%
                                    
                    @endif




                    @if(($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 20%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && ($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 20%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && ($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 20%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && ($result->givenans_4 == $result->rightans_4))
                                        Your test result is 20%
                                    
                    @endif
                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && ($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 20%
                                    
                    @endif








                    @if(!($result->givenans_5 == $result->rightans_5) && !($result->givenans_1 == $result->rightans_1) && !($result->givenans_2 == $result->rightans_2) && !($result->givenans_3 == $result->rightans_3) && !($result->givenans_4 == $result->rightans_4))
                                        Your test result is 0%
                                    
                    @endif



</b>
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