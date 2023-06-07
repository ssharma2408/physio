@extends('layouts.layout')

@section('page')
 
	<div>Staff</div>
 
@endsection
 
@section('content')
<!-- page-title stary -->
<div class="page-title mg-top-50">
	<div class="container">
		<a class="float-left" href="/">Home</a>
		<span class="float-right">Staff</span>
	</div>
</div>
<div class="goal-area pd-top-36">
	<div class="container">
		<div class="section-title">
			<h3 class="title">Our Staff</h3>
			<a class="fw-5 mx-1" href="staffs/create">Add New Staff</a>
			<a class="goal-title" href="#">Total-45</a>
		</div>
		<div class="single-goal single-goal-one">
			<div class="row align-items-center">
				<a href="staffs/1">
					<div class="col-7 pr-0">
						<div class="details">
							<h6>Janny Anne</h6>
							<p>Administrator</p>
						</div>
					</div>
				</a>
				<div class="col-5 pl-0">
					<div class="d-flex align-items-center justify-content-end pr-3">
						<a class="icon-outline text-red fw-5 mx-1" href="staffs/1/edit"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						<a class="icon bg-violet text-white fw-5 mx-1" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="single-goal single-goal-one">
			<div class="row align-items-center">
				<div class="col-7 pr-0">
					<div class="details">
						<h6>Peter M</h6>
						<p>Housekeeping</p>
					</div>
				</div>
				<div class="col-5 pl-0">
					<div class="d-flex align-items-center justify-content-end pr-3">
						<a class="icon-outline text-red fw-5 mx-1" href="edit-staff.html"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						<a class="icon bg-violet text-white fw-5 mx-1" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="single-goal single-goal-one">
			<div class="row align-items-center">
				<div class="col-7 pr-0">
					<div class="details">
						<h6>David Johnson</h6>
						<p>Physician</p>
					</div>
				</div>
				<div class="col-5 pl-0">
					<div class="d-flex align-items-center justify-content-end pr-3">
						<a class="icon-outline text-red fw-5 mx-1" href="edit-staff.html"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						<a class="icon bg-violet text-white fw-5 mx-1" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
		<div class="single-goal single-goal-one">
			<div class="row align-items-center">
				<div class="col-7 pr-0">
					<div class="details">
						<h6>Tania Arendse</h6>
						<p>Nurse Head</p>
					</div>
				</div>
				<div class="col-5 pl-0">
					<div class="d-flex align-items-center justify-content-end pr-3">
						<a class="icon-outline text-red fw-5 mx-1" href="edit-staff.html"><i class="fa fa-pencil" aria-hidden="true"></i></a>
						<a class="icon bg-violet text-white fw-5 mx-1" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- goal area End -->
@endsection
@section('scripts')
@parent
<script>

</script>
@endsection