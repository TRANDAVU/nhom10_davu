@extends('master_user_shop')<!-- ke thua tu trang mmaster-->
<!--thay the noi dung da mat - thay vao cho #yield('contend')-->
@section('title')
	Sửa thông tin đơn hàng
@endsection
@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><br></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<h3><div class="panel-heading"><b>Sửa thông tin đơn hàng</b></div></h3>
					<div class="panel-body">
						
						<form method="post" enctype="multipart/form-data" action="">
							<input type="hidden" name="_token" value="{{csrf_token()}}">
							<div class="row" style="margin-bottom:40px">
								<div class="col-xs-12">

									<div class="form-group" >
										<label>Tên người nhận</label>
										<input required id="img" type="text" name="c1" class="form-control " value='{{$donhang->donhang_nguoi_nhan}}'>
									</div>

									<div class="form-group" >
										<label>Email</label>
										<input required id="img" type="text" name="c2" class="form-control " value='{{$donhang->donhang_nguoi_nhan_email}}'>
									</div>

									
									
									<div class="form-group" >
										<label>SĐT khách hàng</label>
										<input required id="img" type="text" name="c3" class="form-control " value='{{$donhang->donhang_nguoi_nhan_sdt}}'>
									</div>

									
									<div class="form-group" >
										<label>Địa chỉ</label>
										<input required id="img" type="text" name="c4" class="form-control " value='{{$donhang->donhang_nguoi_nhan_dia_chi}}'>
									</div>

									<div class="form-group" >
										<label>Tình trạng đơn hàng</label>
										<select required name="c5" class="form-control">
											@foreach($ttdh as $l)
												<option value="{{$l->id}}"> {{$l->tinhtranghd_ten}}</option>
											@endforeach
					                    </select>
									</div>

									<input type="submit" name="submit" value="Thêm" class="btn btn-primary">
									<a href="{{route('donhangshop')}}" class="btn btn-danger" style="margin-left: 25px;">Hủy bỏ</a>
									
								</div>
							</div>
						</form>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@endsection