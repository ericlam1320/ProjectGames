@extends('admin.layout.master')
@section('title', 'Admin - Thêm link download')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Thêm link download</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<form method="POST" action="admin/links/them" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">


                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group">
                                              <label class="control-label">Chọn thể loại</label>
                                              <select class="form-control" name="TheLoai" id="TheLoai">
                                                @foreach($games as $game)
                                                <option value="{{$game->id}}">{{$game->title}}</option>
                                                @endforeach
                                              </select>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên link</label>
                                                    <input type="text" class="form-control" name="TenLink">
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Mô tả</label>
                                                    <textarea id="demo" class="form-control " rows="8" name="MoTa" id="MoTa"></textarea>
                                                    
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Trạng thái</label>
                                                    <textarea id="demo" class="form-control " rows="8" name="TrangThai" id="TrangThai"></textarea>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <button type="submit" class="btn btn-danger pull-right">Thêm</button>
                      </form>

                        </div>
                      </div>
                  </div>
              </section>
            </div>
          </section>
      </section>

@endsection
@section('script')


<script type="text/javascript">
	$('.alert').delay(5000).slideUp()
</script>

@endsection