@extends('admin.layout.master')
@section('title', 'Admin - Cập nhật link donwload')
@section('content')

  <section id="main-content">
          <section class="wrapper">
            <div class="panel panel-body">
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-heading"><b>Cập nhật link donwload</b>
                      </div>
                      <div class="panel-body">
                        
                        <div class="col-md-8">  
                        @if(count($errors) > 0)                       
                            <div class="alert alert-danger">@foreach($errors->all() as $err){{$err}}<br>@endforeach</div>
                        @endif
                        
                        <!-- Copy o day nha -->

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