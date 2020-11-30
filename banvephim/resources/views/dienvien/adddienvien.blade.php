@extends('Pages/admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM QUỐC GIA
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{URL::to('savedienvien')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput1">Tên dao dien</label>
                                    <input type="" name="dienvien_ten" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">ngay sinh dao dien</label>
                                    <input type="" name="dienvien_ngaysinh" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>
                                <div class="form-group" enctype="multipart/form-data">
                                    <label for="exampleInput1" enctype="multipart/form-data">Hinh dao dien</label>
                                    <input type="file" name="dienvien_hinhanh" class="form-control" id="exampleInput1" enctype="multipart/form-data">
                                </div>
                              
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div> 
 @stop