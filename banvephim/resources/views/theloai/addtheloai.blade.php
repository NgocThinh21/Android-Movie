@extends('Pages/admin')
@section('content')
<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            THÊM THỂ LOẠI
                        </header>
                        <div class="panel-body">
                            <div class="position-center">
                                <form action="{{URL::to('savetheloai')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput1">Tên thể loại</label>
                                    <input type="" name="theloai_ten" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>
                              
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div> 
 @stop