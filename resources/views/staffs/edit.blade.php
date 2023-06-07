@extends('layouts.layout')

@section('page')
 
	<div>Add Staff</div>
 
@endsection
@section('content')

<div class="page-title mg-top-50">
	<div class="container">
		<a class="float-left" href="/">Home</a>
		<span class="float-right">Staff</span>
	</div>
</div>
    <!-- goal area Start -->
    <div class="goal-area pd-top-36">
        <div class="container">
            <div class="section-title">
                <h3 class="title">Janny Anne</h3>
            </div>
            <div class="staff-area">
                <form class="staff-form-inner">
                    <label class="single-input-wrap">
                        <input type="text" placeholder="Name">
                    </label>
                    <label class="single-input-wrap">
                        <input type="text" placeholder="Email Address">
                    </label>
                    <label class="single-input-wrap">
                        <input type="number" placeholder="Mobile">
                    </label>
                    <label class="single-input-wrap">
                        <input type="text" placeholder="User name">
                    </label>
                    <label class="single-input-wrap">
                        <input type="password" placeholder="Password">
                    </label>
                    <a class="btn btn-purple" href="#">Save</a>
                </form>
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