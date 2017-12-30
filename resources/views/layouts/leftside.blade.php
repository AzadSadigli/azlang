<div class="col-md-4 col-md-pull-8" style="box-shadow: 1px 1px 0px 0px black;">

  <div class="fh5co-sidebox">
    <h3 class="fh5co-sidebox-lead">Recommended Topic</h3>
    <ul class="fh5co-post">
      
      @php
              $gram = App\Gramma::inRandomOrder()->take(3)->get()
              @endphp
              @foreach($gram as $gram)
              <li>
                <a href="/gramma/{{$gram->id}}" style="color: black;">
                    {{$gram->title}}
                    <span class="fh5co-post-meta">Topic: 
                    @php
                    $topic = App\Topic::all()
                    @endphp
                    @foreach($topic as $topic)
                    @if($topic->id==$gram->topic_id)
                      {{$topic->name_topic}}
                    @endif
                    @endforeach
                    </span>
                </a>
              </li>
              @endforeach
    </ul>

  </div>

 <!--  <div class="fh5co-sidebox">
    <h3 class="fh5co-sidebox-lead">Paragraph</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, temporibus vitae. Dolores sequi, animi dolorem. Ullam minima laudantium culpa dolorem, nulla doloribus totam obcaecati reprehenderit quasi nam eius autem nihil.</p>
  </div> -->
<!-- 
  <div class="fh5co-sidebox">
    <h3 class="fh5co-sidebox-lead">Check list</h3>
    <ul class="fh5co-list-check">
      <li>Lorem ipsum dolor sit.</li>
      <li>Nostrum eveniet animi sint.</li>
      <li>Dolore eligendi, porro ipsam.</li>
      <li>Repudiandae voluptate dolorem voluptas.</li>
      <li>Voluptate cupiditate, est laborum?</li>
    </ul>
  </div> -->
</div>
