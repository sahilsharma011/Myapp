@extends('questions.layout')

@section('content')

    <div class="content">
        <div class="section-warp ask-me">
            <div class="container clearfix">
                <div class="box_icon box_warp box_no_border box_no_background" box_border="transparent" box_background="transparent" box_color="#FFF">
                    <div class="row">
                        <div class="col-md-3">
                            <h2 style="color: black">Welcome to Winuall!</h2>

                            <p style="color: black"> The Catalyst in the Intellectual Pursuit of your Dreams.<br>A One stop solution for <b>Physics,
                                    Chemistry, Maths</b><br>Get answer to all your doubts at <b>Winuall</b> by the Experts.
                                We have Experts for you to solve your problems, be it an easy one or a difficult one!
                            </p>

                            <h1>All Questions</h1>

                            @foreach($questions as $question)

                                {{--<h1><a href="/questions/{{ $question->id }}"> {{ $question->title }}</a></h1>--}}
                                <h1><a href="{{ $question->path() }}"> {{ $question->title }}</a></h1>
                                {{--used for complicated paths.--}}
                                <h2 style="color: black">{{ $question->chapter }}</h2>

                                <h2 style="color: black">{{ $question->description }}</h2>
                                </br>


                            @endforeach

                            <div class="gallery">
                                <div class="container">
                                    <form action="/questions/upload" method="POST" class="form-signin">
                                        <p><input required type="text" name="title" value="" placeholder="Title"></p>
                                          <p><input required type="text" name="tags" value="" placeholder="Tags"></p>
                                          <p><input required type="text" name="subject" value="" placeholder="Subject"></p>
                                          <p><input required type="text" name="chapter" value="" placeholder="Chapter"></p>
                                          <p><input required type="text" name="description" value="" placeholder="Description"></p>
                                          <p><input required type="text" name="image" value="" placeholder="Image"></p>
                                          <p><input type="submit" value="Upload" class="btn  btn-primary "/></p>
                                        <input type="hidden"  value="{{ Session::token() }}" name="_token" />

                                    </form>
                                </div>
                            </div>



                            <div class="clearfix"></div>
                        </div>
                        <div class="col-md-9" >

                    </div><!-- End row -->
                </div><!-- End box_icon -->
            </div><!-- End container -->
        </div><!-- End section-warp -->



    @stop



