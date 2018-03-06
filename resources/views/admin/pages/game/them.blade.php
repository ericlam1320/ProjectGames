@extends('admin.layout.master')
@section('title', 'Admin - Thêm game')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Thêm game</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif
                     	
                        
                        <!-- Copy day nha -->
                        <form method="POST" action="admin/games/them" enctype="multipart/form-data">
                          <input type="hidden" name="_token" value="{{ csrf_token() }}">

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label class="control-label">Chọn thể loại</label>
                                <select class="form-control" name="TheLoai" id="TheLoai">
                                  @foreach($genres as $genre)
                                  <option value="{{$genre->id}}">{{$genre->name}}</option>
                                  @endforeach
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Tên game</label>
                                <input type="text" class="form-control" name="TenGame">
                              </div>
                            </div>   
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group ">
                                <label class="control-label">Tóm tắt</label>
                                <textarea id="demo" class="form-control " rows="8" name="TomTat" id="TomTat"></textarea>
                                <script type="text/javascript">CKEDITOR.replace( 'TomTat' );</script>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group ">
                                <label class="control-label">Nội dung</label>
                                <textarea id="demo" class="form-control " rows="8" name="NoiDung" id="NoiDung"></textarea>
                                <script type="text/javascript">CKEDITOR.replace( 'NoiDung' );</script>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Hình ảnh</label>
                                <input type="file" name="HinhGame" class="form-control" />
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group label-floating">
                                <label class="control-label">Trailer game</label>
                                <input type="text" class="form-control" name="TrailerGame">
                              </div>
                            </div>   
                          </div>

                          <div class="row">
                            <div class="col-md-6">
                              <div class="form-group ">
                                <label class="control-label">Cấu hình tối thiểu</label>
                                <textarea id="demo" class="form-control " rows="6" name="CauHinhToiThieu" id="CauHinhToiThieu"></textarea>
                              </div>
                            </div>
                            <div class="col-md-6">
                              <div class="form-group ">
                                <label class="control-label">Cấu hình đề nghị</label>
                                <textarea id="demo" class="form-control " rows="6" name="CauHinhDeNghi" id="CauHinhDeNghi"></textarea>
                              </div>
                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-4">
                              <div class="form-group label-floating">
                                <label class="control-label">Năm phát hành</label>
                                <input type="number" value="<?= date('Y') ?>" class="form-control"  name="NamPhatHanh">
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
                                <input type="text" value="Cài đặt và chơi" class="form-control" name="HuongDan">
                              </div>

                            </div>
                          </div>


                          <button type="submit" class="btn btn-danger pull-right">Thêm</button>
                          <div class="clearfix"></div>
                        </form>

                        </div>

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
	$('.alert').delay(5000).slideUp()
</script>

@endsection