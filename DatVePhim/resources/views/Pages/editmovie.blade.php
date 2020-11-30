@extends('Pages/admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            SỬA PHIM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                            @foreach($edit as $key=>$edit)
                                <form action="{{URL::to('save_editmovie/'.$edit->mv_id)}}"  method="POST" enctype="multipart/form-data">
                                <!-- {{ csrf_field() }} -->    @csrf
                                <div class="form-group">
                                    <label for="exampleInput1">Tên Phim</label>
                                    <input type="" name="name" value="{{$edit->mv_name}}" class="form-control" id="exampleInput1" placeholder="Enter "> 
                                </div>

                                <div class="form-group">
                                    <label for="exampleInput1">Đạo diễn</label>
                                    <input type="" value="{{$edit->mv_daodien}}"  name="daodien" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInput1">Diễn viên</label>
                                    <input type="" name="dienvien" value="{{$edit->mv_dienvien}}"  class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInput1">Thể loại</label>
                                    <input type="" name="theloai" value="{{$edit->mv_theloai}}"  class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Quốc gia</label>
                                    <input type="" name="quocgia" value="{{$edit->mv_quocgia}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Nhà sản xuất</label>
                                    <input type="" name="nsx" value="{{$edit->mv_nsx}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thời lượng</label>
                                    <input type="" name="thoiluong" value="{{$edit->mv_thoiluong}}" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>



                                <div class="form-group">
                                <select name="trangthai" class="form-control input-sm m-bot15">
                                <?php
                                    if($edit->mv_trangthai==0){
                                ?>
                                <option  value="0">Ẩn</option>
                                <?php
                                    }else{
                                ?>
                                <option value="1">Hiển thị</option>
                                <?php
                                    }
                                ?>
                                <div class="form-group"  enctype="multipart/form-data">
                                </div>

                               
                               
                                <div class="form-group" enctype="multipart/form-data">
                                    <label for="exampleInputFile" enctype="multipart/form-data">Hình ảnh</label>
                                    <input type="file" name="mv_trailer" value="{{$edit->mv_trailer}}" id="exampleInputPassword1" enctype="multipart/form-data">
                                   
                                 
                                    </td> 
                                </div>
                              
                                <div class="form-group" enctype="multipart/form-data">
                                    <label for="exampleInputFile" enctype="multipart/form-data">Hình ảnh</label>
                                    <input type="file" name="mv_hinhanh" value="{{$edit->mv_hinhanh}}" id="exampleInputPassword1" enctype="multipart/form-data">
                                    <img src="{{'../uploads/image/'.$edit->mv_hinhanh}}"  width="100" height="100" >
                                 
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