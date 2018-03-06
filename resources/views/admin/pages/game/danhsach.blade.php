@extends('admin.layout.master')
@section('title', 'Admin - danh sách games')
@section('content')

	<section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">

                  	@if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
                  	@endif

                      <div class="panel-heading"><b>Danh sách các games</b>
                      </div>
                      <div class="panel-body">
                          
                      <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				        <thead>
				            <tr>
				                <th>STT</th>
				                <th>Tên game</th>
				                <th>Thể loại</th>
				                <th>Năm phát hành</th>
				                <th>Hình</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </thead>
				        <tfoot>
				            <tr>
				                <th>STT</th>
				                <th>Tên game</th>
				                <th>Thể loại</th>
				                <th>Năm phát hành</th>
				                <th>Hình</th>
				                <th>Xóa</th>
				                <th>Cập nhật</th>
				            </tr>
				        </tfoot>
				        
					<!-- Copy day nha -->
					<tbody>					
						<?php $stt = 1; ?>
						@foreach ($games as $game)
						<tr>
							<td>{{ $stt }}</td>
							<td>{{ $game->title }}</td>
							<td>{{ ($game->GameGenre->name) }}</td>
							<td>{{ $game->year }}</td>
							<td><img height="100px" src="adminAssets/img/hinh_game/{{ $game->image }}" alt=""></td>
							<td width="80px" style="font-size: 25px" class="text-center"><a onclick="return XacNhanXoa('Bạn có chắc muốn xóa?')" href="admin/games/xoa/{{ $game->id }}"><i class="fa fa-trash-o fa-fw"></i></a></td>
							<td width="80px" style="font-size: 25px" class="text-center"><a href="admin/games/sua/{{ $game->id }}"><i class="fa fa-pencil fa-fw"></i></a></td>
						</tr>
						<?php $stt++; ?>
						@endforeach
					</tbody>

				    </table>

                      </div>
                  </div>
              </section>
            </div>
          </section>
      </section>

@endsection
@section('script')
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
<script>
	
    $(document).ready(function() {
        $('#example').DataTable();
        $('div.alert').delay(5000).slideUp();
    });

    function XacNhanXoa(message){
        	if(window.confirm(message)){
        		return true;
        	}
        	return false;
        }

</script>
@endsection