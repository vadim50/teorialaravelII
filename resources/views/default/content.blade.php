 <div class="col-md-9">
  {!! $script !!}
  <h1>@if($bvar)
      {{ $title }}
      @endif
  </h1>
  <h1>{{ isset($vbar) ? $title : $false }}</h1>

  @if(count($data) < 3)

  <p>меньше 3</p>

  @elseif(count($data)>10)
    <p>больше 10</p>
  @else

  <p>Неизвестно..</p>

  @endif

  <ul>
    @for($i=0;$i < count($dataI);$i++)

      <li>{{ $dataI[$i] }}</li>

    @endfor
  </ul>

  <ul>
    @foreach($data as $k=>$v)
      <li>{{ $k.'=>'.$v }}</li>
    @endforeach
  </ul>

  <ul>
    @forelse($data as $k=>$v)
      <li>{{ $k.'=>'.$v }}</li>
    @empty
    <p>No Items...</p>
    @endforelse
  </ul>

  <ul>
<?php $i=1; ?>
    @while($i < count($dataI))
      
     <li>{{ $i.') '.$dataI[$i] }}</li>
     <?php $i++; ?>
     @endwhile
  </ul>

  @each('default.list',$dataI,'value')

  <h1>@myDir('HEllo')</h1>
        <div class="row">
          <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
        </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-6">
        <h2>Heading</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui.
        </p>
        <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
      </div>
        </div>
        <div class="row">
      <div class="col-md-12">
        <h2>Sample Blog Post</h2>
        <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
        Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. 
        </p>
      </div>
    </div>
    </div>