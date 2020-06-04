@extends('master_admin')<!-- ke thua tu trang mmaster-->
<!--thay the noi dung da mat - thay vao cho #yield('contend')-->
@section('title')
	Loại sản phẩm
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
				@if(Session::has('thongbao_23'))
					<div class="alert alert-success">{{Session::get('thongbao_23')}} </div>
				@endif

				@if(Session::has('thongbao_30'))
					<div class="alert alert-success">{{Session::get('thongbao_30')}} </div>
				@endif

				@if(Session::has('thongbao_loi_33'))
					<div class="alert alert-danger">{{Session::get('thongbao_loi_33')}} </div>
				@endif
				<div class="panel panel-primary">
					<h3><div class="panel-heading"><b>Danh sách loại sản phẩm<b></div> </h3>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<table class="table table-bordered" style="margin-top:20px;">				
									<thead>
										<tr class="bg-primary">
											<th style="color: white;">ID</th>
											<th style="color: white;">Tên loại</th>
											<th style="color: white;">Ảnh</th>
											<th style="color: white;">Mô tả</th>
											<th style="color: white;">Tùy chọn</th>
										</tr>
									</thead>
									
									<tbody>
										@foreach($loaisanpham as $l)
										<tr>
											<th style="color: black;">{{$l->id}}</th>
											<th style="color: black;">{{$l->loaisanpham_ten}}</th>
											<td style="color: black;">
												<img width="200px" height="100px" src="../user/image/images/{{$l->loaisanpham_anh}} " class="thumbnail">
											</td>
											<th style="color: black;color: black; overflow-y: auto;height: 300px;"><?php echo $l->loaisanpham_mo_ta ;?></th>
											<td>
												<a href="{{route('sualoaisanphamall',$l->id)}}" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i> Sửa</a>
												<a href="{{route('xoaloaisanphamall',$l->id)}}" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa phần tử này ?')"><i class="fa fa-trash" aria-hidden="true"></i> Xóa</a>
											</td>
										</tr>
										@endforeach
										
									</tbody>
								</table>	
								<div class="row" style="margin-left: 15px;">
									{{$loaisanpham->links()}}
								</div>					
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>

@endsection