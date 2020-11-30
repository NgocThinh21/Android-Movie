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
                                <form action="{{URL::to('savedaodien')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput1">Tên dao dien</label>
                                    <input type="" name="daodien_ten" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInput1">ngay sinh dao dien</label>
                                    <input type="" name="daodien_ngaysinh" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>
                                <div class="form-group" enctype="multipart/form-data">
                                    <label for="exampleInput1" enctype="multipart/form-data">Hinh dao dien</label>
                                    <input type="file" name="daodien_hinhanh" class="form-control" id="exampleInput1" enctype="multipart/form-data">
                                </div>
                              
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div> 
 @stop