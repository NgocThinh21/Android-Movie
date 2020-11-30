@extends('Pages/admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM PHIM
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{URL::to('savemovie')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                
                                <div class="form-group">
                                    <label for="exampleInput1">Tên Phim</label>
                                    <input type="" name="phim_ten" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">Giá Phim</label>
                                    <!-- <input type="" name="phim_gia" class="form-control" id="exampleInput1" placeholder="Enter "> -->
                                    <select name="phim_gia" class="form-control input-sm m-bot15">
                               
                                <option  value="0">50000 VND</option>
                                <option  value="1">65000 VND</option>
                                </select>
                             
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Thời lượng</label>
                                    <input type="" name="phim_thoiluong" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                </div>
                               

                                     
                                <div class="form-group">
                                <label for="exampleInput1">Đạo diễn</label>
                                <select name="phim_daodien" class="form-control input-sm m-bot15">
                                @foreach($daodien as $key =>$dao)
                                <option  value="{{$dao->daodien_id}}">{{$dao->daodien_ten}}</option>
                                @endforeach
                                </select>
                                </div>
                              
                            
                                <div class="form-group">
                              
                                <label for="exampleInput1"> Thể loại</label>
                               
                                <select name="phim_theloai" class="form-control input-sm m-bot15">
                                @foreach($theloai as $key =>$the)
                                <option name="phim_theloai" value="{{$the->theloai_id}}">{{$the->theloai_ten}}</option>
                                @endforeach
                                </select>
                             
                                </div>
                              
                        
                              
                            
                                <div class="form-group">
                                <label for="exampleInput1"> Diễn viên</label>
                                <select name="phim_dienvien" class="form-control input-sm m-bot15">
                                @foreach($dienvien as $key =>$dien)
                                <option value="{{$dien->dienvien_id}}">{{$dien->dienvien_ten}}</option>
                                @endforeach
                                </select>
                                </div>
                               
                                    <div class="form-group">
                                <label for="exampleInput1">Nhà sản xuất</label>
                                <select name="phim_nsx" class="form-control input-sm m-bot15">
                                @foreach($nsx as $key =>$dien)
                                <option value="{{$dien->nsx_id}}">{{$dien->nsx_ten}}</option>
                                @endforeach
                                </select>
                                </div>
                             
                                
                                <div class="form-group">
                                <label for="exampleInput1">Quốc gia</label>
                                <select name="phim_quocgia" class="form-control input-sm m-bot15">
                                @foreach($quocgia as $key =>$dien)
                                <option value="{{$dien->quocgia_id}}">{{$dien->quocgia_ten}}</option>
                                @endforeach
                                </select>
                                </div>

                              
                             

                                <div class="form-group">
                                <select name="phim_trangthai" class="form-control input-sm m-bot15">
                                <option  value="0">Ẩn</option>
                                <option value="1">Hiển thị</option>
                                </select >
                                <div class="form-group"  enctype="multipart/form-data"></div>
                                </div>
                                <div class="form-group" enctype="multipart/form-data">
                                    <label for="exampleInputFile" enctype="multipart/form-data">Trailer</label>
                                    <input type="file" name="phim_trailer"  id="exampleInputPassword1" enctype="multipart/form-data">
                                </div>
                             
                                <div class="form-group" enctype="multipart/form-data">
                                    <label for="exampleInputFile" enctype="multipart/form-data"> Hinh anh</label>
                                    <input type="file" name="phim_hinhanh"  id="exampleInputPassword1" enctype="multipart/form-data">
                                </div>
                             
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div> 
 @stop