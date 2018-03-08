@extends('layouts.master')

@section('content')
<div class="row mt-4">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">{{ $post->title }}
                    <span class="float-right">
                        {{ $post->created_at->diffForHumans() }}
                    </span>
                    <h6>
                        <!--
                        cara panggil one-to-one
                        $post point kepada nama_method tanpa () kemudian nama column dalam DB
                        contohnya $post->post_information->color
                         -->
                        #<span style="color:{{ $post->post_information->color}};font-weight:bold">
                                {{ $post->post_information->hashtag}}
                         </span>
                    </h6>
            </div>
            <div class="card-body">
                {{ $post->body }}
            </div>

        </div>

        <div class="card mt-4 card-primary">
            <div class="card-header">Comments</div>
            <div class="card-body">
                <form class="form-control" action="#" method="post">
                    <div class="form-group">
                      <label for="comment">Comment:</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">Nama Orang
                    <span class="float-right">
                        {{ $post->created_at->diffForHumans() }}
                    </span>
            </div>
            <div class="card-body">
                Content Comment tersebut
            </div>
        </div>

</div>
@endsection
