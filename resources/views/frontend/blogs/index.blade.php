@extends('frontend.layouts.app')

@section('content')

    <div id="Content">
        <div class="content_wrapper clearfix">
            <div class="column one column_fancy_heading">
                <div class="fancy_heading">
                    <div class="fancy_heading_wrapper has_icon">
                        <h2>Blogs</h2>
                        <div class="inside">
                            We will endeavor to get back to you by the end of the working day
                        </div>
                        <i class="fa fa-gear"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index-content">
        <div class="container">
           <div class="row">
               <?php $i=1; ?>
               @foreach($blogs as $blog)
                       <div class="col-lg-4">
                           <a href="{{ route('blog.detail', $blog->slug) }}">
                               <div class="card">
                                   <img src="{{ asset('images/admin/'.$blog->image) }}">
                                   <h4>{{ $blog->title }}</h4>
                                   <p>{{ substr(strip_tags($blog->content), 0, 200)}} {{ strlen(strip_tags($blog->content)) > 200 ? "..." : "" }}</p>
                                   <a href="{{ route('blog.detail', $blog->slug) }}" class="blue-button">Read More</a>
                               </div>
                           </a>
                       </div>
                        @if($i==3)
                           <div class="col-md-12 mb-3 clearfix"></div>
                            <?php $i=0; ?>
                       @endif
                       <?php $i++; ?>
               @endforeach
           </div>

        </div>
    </div>

@stop

@section('js')
    <script src="js/toucheffects.js"></script>
@endsection