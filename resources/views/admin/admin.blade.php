@extends('layouts/admin_master')
@extends('box.gallery.gallery')
@section('title')
Home
@endsection
	
@section('content')


  <div class="content">
		<div class="container">
			<!--~~~~~~~ TABLE ONE ~~~~~~~~~-->
			<button type="button" class=" _btn _mar_b20" data-toggle="modal" data-target="#createModal">
            	<i class="fa fa-plus-circle"></i>&nbsp;Add Post
        	</button>
			<div class="_1adminOverveiw_table_recent _box_shadow _border_radious _mar_b30 _p20">
				<p class="_title0">Recent Post Table</p>

				<div class="_overflow _table_div">
					<table class="_table">
						<!-- TABLE TITLE -->
						<tr>
							<th>Date</th>
							<th>Title</th>
							<th>Image</th>
							<th>Action</th>
						</tr>
						<!-- TABLE TITLE -->
						<!-- ITEMS -->
						 @foreach($table as $row)
						<tr>
							<td>{{$row->created_at}}</td>
							<td>{{$row->img_title}}</td>
							<td><img style="width: 60px; height: 40px" src="{{asset('public/uploads/'.$row->image)}}" alt=""></td>
							<td>
								<button class="_btn _action_btn view_btn1" type="button">View</button>
								<button class="_btn _action_btn edit_btn1" type="button">Edit</button>
								<button class="_btn _action_btn make_btn1" type="button">Delete</button>
							</td>
						</tr>
							<!-- ITEMS -->
						 @endforeach

						

					</table>
				</div>
			</div>
	

		</div>
	</div>




@endsection