@extends('admin.layout.master')
@section('title', 'Admin - Cập nhật game')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Cập nhật game</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	

                        </div>
                        
                        <!-- Copy day nha -->
                        <form method="POST" action="admin/games/sua/{{ $game->id }}" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">

                                <label class="control-label">Chọn thể loại</label>
                                <select class="form-control" name="TheLoai" id="TheLoai">
                                  @foreach($genres as $genre)
                                  <option @if($genre->id==$game->genre_id) {{ 'selected' }} @endif value="{{$genre->id}}">{{$genre->name}}</option>
                                  @endforeach
                                </select>

                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Tên game</label>
                                <input type="text" class="form-control" name="TenGame" value="{{ $game->title }}">
                              </div>
                            </div>   
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group ">
                                <label class="control-label">Tóm tắt</label>
                                <textarea id="demo" class="form-control " rows="8" name="TomTat" id="TomTat">{{ $game->description }}</textarea>
                                <script type="text/javascript">CKEDITOR.replace( 'TomTat' );</script>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group ">
                                <label class="control-label">Nội dung</label>
                                <textarea id="demo" class="form-control " rows="8" name="NoiDung" id="NoiDung">{{ $game->content }}</textarea>
                                <script type="text/javascript">CKEDITOR.replace( 'NoiDung' );</script>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Hình ảnh</label>
                                <input type="file" name="HinhGame" class="form-control" />
                                <img src="adminAssets/img/hinh_game/{{ $game->image }}" height="200px">
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Trailer game</label>
                                <input type="text" class="form-control" name="TrailerGame" value="{{ $game->trailer }}">
                              </div>
                            </div>   
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group ">
                                <label class="control-label">Cấu hình tối thiểu</label>
                                <textarea id="demo" class="form-control " rows="6" name="CauHinhToiThieu" id="CauHinhToiThieu">{{ $game->minimum }}</textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group ">
                                <label class="control-label">Cấu hình đề nghị</label>
                                <textarea id="demo" class="form-control " rows="6" name="CauHinhDeNghi" id="CauHinhDeNghi">{{ $game->recommended }}</textarea>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Năm phát hành</label>
                                <input type="number" value="{{ $game->year }}" class="form-control"  name="NamPhatHanh">
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Ngày cập nhật</label>
                                <input type="date" class="form-control date" placeholder="Ngày cập nhật"  name="NgayCapNhat" value="<?= date('Y-m-d') ?>">
                              </div>
                            </div>

                            <div class="col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Hướng dẫn</label>
                                <input type="text" class="form-control" name="HuongDan" value="{{ $game->guide }}">
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