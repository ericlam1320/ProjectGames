@extends('admin.layout.master')
@section('title', 'Admin - Thêm thể loại')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Thêm thể loại</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif

                     	<!-- Copy day nha -->
                      <form method="POST" action="admin/genres/them" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Tên thể loại</label>
                                                    <input type="text" class="form-control" name="TenTheLoai">
                                                </div>
                                            </div>   
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group ">
                                                    <label class="control-label">Ghi chú</label>
                                                    <textarea id="demo" class="form-control " rows="8" name="GhiChu" id="GhiChu"></textarea>
                                                    
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