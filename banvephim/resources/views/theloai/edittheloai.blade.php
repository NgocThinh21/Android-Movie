@extends('Pages/admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SỬA theloai
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            @foreach($edit as $key=>$edit)
                                <form action="{{URL::to('save_edittheloai/'.$edit->theloai_id)}}"  method="POST" enctype="multipart/form-data">
                                <!-- {{ csrf_field() }} -->    @csrf
                                <div class="form-group">
                                    <label for="exampleInput1">Tên theloai</label>
                                    <input type="" name="theloai_ten" value="{{$edit->theloai_ten}}" class="form-control" id="exampleInput1" placeholder="Enter "> 
                                </div>
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            @endforeach
                            </div>

                        </div>
                    </section>

            </div>
            
               
        </div> 
        <!-- <form action="{{URL::to('savemovie')}}"  method="post" enctype="multipart/form-data">
        <input type="file" name="hinhanh">
        <input type="submit">
        </form> -->
 @stop