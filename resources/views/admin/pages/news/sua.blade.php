@extends('admin.layout.master')
@section('title', 'Admin - Cập nhật tin game')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Cập nhật tin game</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	

                        </div>
                        
                        <form method="POST" action="admin/news/sua/{{$news->id}}" enctype="multipart/form-data">

                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group label-floating">
                                              <label class="control-label">Tiêu đề</label>
                                              <input type="text" class="form-control" name="TieuDe" value="{{$news->title}}">
                                            </div>
                                          </div>   
                                        </div>
                    
                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group ">
                                              <label class="control-label">Tóm tắt</label>
                                              <textarea id="demo" class="form-control " rows="8" name="TomTat" id="TomTat">{{$news->description}}</textarea>
                                              <script type="text/javascript">CKEDITOR.replace( 'TomTat' );</script>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">
                                          <div class="col-md-12">
                                            <div class="form-group ">
                                              <label class="control-label">Nội dung</label>
                                              <textarea id="demo" class="form-control " rows="8" name="NoiDung" id="NoiDung">{{$news->content}}</textarea>
                                              <script type="text/javascript">CKEDITOR.replace( 'NoiDung' );</script>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="row">

                                          <div class="col-md-4">
                                            <div class="form-group label-floating">
                                              <label class="control-label">Lượt xem</label>
                                              <input type="text" value="489" class="form-control" name="LuotXem" value="{{$news->view}}">
                                            </div>
                                          </div>

                                          <div class="col-md-4">
                                            <div class="form-group label-floating">
                                              <label class="control-label">Ngày đăng</label>
                                              <input type="date" class="form-control date" placeholder="Ngày cập nhật"  name="NgayDang" value="<?= date('Y-m-d') ?>">
                                            </div>
                                          </div>

                                          <div class="col-md-4">
                                            <div class="form-group label-floating">
                                              <label class="control-label">Hình ảnh</label>
                                              <input type="file" name="HinhTin" class="form-control" />
                                              <img src="adminAssets/img/photos/{{ $news->image }}" height="200px">
                                            </div>
                                          </div>

                                        </div>

                                        
                                        <button type="submit" class="btn btn-danger pull-right">Cập nhật</button>
                                        <div class="clearfix"></div>

                        </form>
                        <div class="col-md-4">
						
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
        $('div.alert').delay(5000).slideUp();
    </script>
@endsection