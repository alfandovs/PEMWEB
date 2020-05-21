@extends('admin/layout/main')
@section('title', 'Jadwal Tes')
@section('container')

@if (session('status'))
<section class="content-header">
	<div class="alert alert-success alert-dismissible">
		<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
		<h4><i class="icon fa fa-check"></i> Berhasil!</h4>
		{{session('status')}}
	</div>
</section>
@endif

<section class="content-header">
	<h1>
		Data Jadwal 
	</h1>
	<ol class="breadcrumb">
		<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
		<li class="active">Data Jadwal</li>
	</ol>
</section>

<!-- Main content -->
<section class="content">

<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Tambah</button>
					<div class="modal fade" id="exampleModal">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span></button>
										<h4 class="modal-title">Tambah Jadwal</h4>
									</div>
									<div class="modal-body">
						<form action="{{url('/disc/jadwal')}}" method="post">
						@csrf
						<div class="form-group">
                            <label>ID</label>
                            <div >
                                <input type="id" name="id" value="" class="form-control" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label>Hari</label>
                            <div >
                                <input type="date" name="namauser" value="" class="form-control" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Jam</label>
                            <div >
                                <input type="text" name="email" value="" class="form-control" required>
                            </div>
                        </div>
                                <div class="modal-footer">
								<button
								type="submit" class="btn btn-primary">Tambah</type=>
                            </div>
					</form>
					</div>
				</div>
		</div>
	</div>				
</div>
	<div class="row">
		<div class="col-xs-12">
			<div class="box">
				<div class="box-header">
					<!-- /.box-header -->
					<div class="box-body">
						<table id="example" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th width="5%">Id</th>
									<th>Hari</th>
									<th>Jam</th>
                                    <th width="5%">Aksi</th>
								</tr>
							</thead>

							<tbody>
								@foreach($jadwal as $data)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>{{$data->hari}}</td>
									<td>{{$data->jam}}</td>
								
								<td>
									<button data-toggle="modal" data-target="#del{{$data->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
										<!-- Hapus -->
										<div id="del{{$data->id}}" class="modal fade" tabindex="-1" role="dialog">
											<div class="modal-dialog modal-sm">
												<div class="modal-content">
													<div class="modal-header">
														<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
														<h4 class="modal-title">Hapus Data</h4>
													</div>
													<div class="modal-body">
														<p>Data dengan id <b>{{$data->id}}</b> akan dihapus!!!</p>
													</div>
                                                    <div class="modal-footer">
														<form action="{{url('/disc/jadwal')}}" method="post" class="d-inline">
															@method('delete')
															@csrf
															<button type="submit" class="btn btn-danger">Hapus</button>
														</form>
													</div>
                                                </div>
                                            </div>
								</td>
                                </tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>			
</section>
@endsection()