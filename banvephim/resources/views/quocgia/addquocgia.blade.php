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
                                <form action="{{URL::to('savequocgia')}}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInput1">Tên quốc gia</label>
                                    <input type="" name="quocgia_ten" class="form-control" id="exampleInput1" placeholder="Enter ">
                                </div>
                              
                                <button type="submit" class="btn btn-info">Submit</button>
                            </form>
                            </div>
                        </div>
                    </section>
            </div>
        </div> 
 @stop