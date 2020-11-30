@extends('Pages/admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SỬA dienvien
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            @foreach($edit as $key=>$edit)
                                <form action="{{URL::to('save_editdienvien/'.$edit->dienvien_id)}}"  method="POST" enctype="multipart/form-data">
                                <!-- {{ csrf_field() }} -->    @csrf
                                <div class="form-group">
                                    <label for="exampleInput1">Tên đạo diễn</label>
                                    <input type="" name="dienvien_ten" value="{{$edit->dienvien_ten}}" class="form-control" id="exampleInput1" placeholder="Enter "> 
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">Ngày sinh đạo diễn</label>
                                    <input type="" name="dienvien_ngaysinh" value="{{$edit->dienvien_ngaysinh}}" class="form-control" id="exampleInput1" placeholder="Enter "> 
                                </div>
                                
                                <div class="form-group" enctype="multipart/form-data">
                                    <label for="exampleInputFile" enctype="multipart/form-data">Hình ảnh</label>
                                    <input type="file" name="dienvien_hinhanh" value="{{$edit->dienvien_hinhanh}}" id="exampleInputPassword1" enctype="multipart/form-data">
                                    <img src="{{'../uploads/image/'.$edit->dienvien_hinhanh}}"  width="100" height="100" >
                                 
                                    </td> 
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