@extends('master')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
@section('content')
	@if($role == 'student')
	<form class="my-5" action="{{ route('profile.store') }}" method="POST">
		@csrf

		<div class="row">
			<div class="imgUp">
				<div class="imagePreview">
					<label class="btn btn-primary">
					Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width: 0px;height: 0px;overflow: hidden;">
					</label>
				</div>
			</div>
			<div class="col-md">
				<div class="w-100 text-center">
					<span>Please complete to create an account</span>
					<div class="row">
						<div class="col-md-4 form-group">
							<input 
								type="type" 
								name="first_name" 
								placeholder="First Name" 
								class="form-control"
							>
						</div>
						<div class="col-md-4 form-group">
							<input 
								type="type" 
								name="middle_name" 
								placeholder="Middle Name" 
								class="form-control"
							>
						</div>
						<div class="col-md-4 form-group">
							<input 
								type="type" 
								name="last_name" 
								placeholder="Last Name" 
								class="form-control"
							>
						</div>
						<div class="col-md-4 form-group">
							<input 
								type="type" 
								name="course" 
								placeholder="Course" 
								class="form-control"
							>
						</div>
						<div class="col-md-4 form-group">
							<input 
								type="type" 
								name="year" 
								placeholder="Year" 
								class="form-control"
							>
						</div>
						<div class="col-md-4 form-group">
							<input 
								type="type" 
								name="semester" 
								placeholder="Semester" 
								class="form-control"
							>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 form-group pl-0">
				<input 
					class="form-control"
					name="gender" 
					placeholder="Gender" 
					type="type" 
				>
			</div>
			<div class="col-md-3 form-group">
				<input 
					class="form-control"
					name="birth_date" 
					placeholder="Date of Birth" 
					type="type" 
				>
			</div>
			<div class="col-md-3 form-group">
				<input 
					class="form-control"
					name="birth_place" 
					placeholder="Place of Birth" 
					type="type" 
				>
			</div>
			<div class="col-md-3 form-group pr-0">
				<input 
					class="form-control"
					name="nationality" 
					placeholder="Nationality" 
					type="type" 
				>
			</div>
			<div class="col-md-3 form-group pl-0">
				<input 
					class="form-control"
					name="contact" 
					placeholder="Contact No." 
					type="type" 
				>
			</div>
			<div class="col-md-3 form-group ">
				<input 
					class="form-control"
					name="email" 
					placeholder="Email Address" 
					type="type" 
				>
			</div>
			<div class="col-md-3 form-group ">
				<input 
					class="form-control"
					name="address_city" 
					placeholder="City Address" 
					type="type" 
				>
			</div>
			<div class="col-md-3 form-group pr-0">
				<input 
					class="form-control"
					name="address_provincial" 
					placeholder="Provincial Address" 
					type="type" 
				>
			</div>
		</div>
		<div class="row">
			<table class="table table-bordered">
			  <thead class="text-uppercase text-center">
			    <tr>
			        <th scope="col">Level</th>
			        <th scope="col">School</th>
			        <th scope="col">Location</th>
			        <th scope="col">Exclusive Date</th>
			        <th scope="col">Awards</th>
			    </tr>
			  </thead>
			    <tbody>
				    <tr>
						<th scope="row text-uppercase">
							Elementary
						</th>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
				    </tr>
				    <tr>
						<th scope="row text-uppercase">
							Secondary
						</th>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
				    </tr>
				    <tr>
						<th scope="row text-uppercase">
							College
						</th>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
				    </tr>
				    <tr>
						<th scope="row text-uppercase">
							Vocational
						</th>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
						<td>
							<input 
								class="form-control border-0 bg-transparent"
								name="school" 
								type="type" 
							>
						</td>
				    </tr>
			    </tbody>
			</table>
		</div>
		<div class="row">
			<table class="table table-bordered">
			  	<thead class="text-center">
				    <tr>
				      	<th scope="col">
				      		<span class="text-uppercase">
				      			hobbies and interest
				      		</span>
				      	</th>
				      	<th scope="col">
				      		<span class="text-uppercase">
				      			dreams and aspiration
				      		</span>
				      	</th>
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr>
				      	<th></th>
				      	<td></td>
				    </tr>
				    <tr>
				      	<th></th>
				      	<td></td>
				    </tr>
				    <tr>
				        <th></th>
				        <td></td>
				    </tr>
			  	</tbody>
			</table>
		</div>
		<div class="row">
			<table class="table table-bordered">
			  	<thead class="text-center text-uppercase">
				    <tr>
				      	<th></th>
				      	<th>
				      		<span>mother</span>
				      	</th>
				      	<th>
				      		<span>father</span>
				      	</th>
				      	<th>
				      		<span>guardian</span>
				      	</th>
				    </tr>
			  	</thead>
			  	<tbody>
				    <tr>
				      	<th class="text-uppercase text-center">
				      		<span>name</span>
				      	</th>
				      	<td></td>
				      	<td></td>
				      	<td></td>
				    </tr>
				    <tr>
				      	<th class="text-uppercase text-center">
				      		<span>address</span>
				      	</th>
				      	<td></td>
				      	<td></td>
				      	<td></td>
				    </tr>
				    <tr>
				      	<th class="text-uppercase text-center">
				      		<span>contact no.</span>
				      	</th>
				      	<td></td>
				      	<td></td>
				      	<td></td>
				    </tr>
				    <tr>
				      	<th class="text-uppercase text-center">
				      		<span>occupation</span>
				      	</th>
				      	<td></td>
				      	<td></td>
				      	<td></td>
				    </tr>
				    <tr>
				      	<th class="text-uppercase text-center">
				      		<span>birth date</span>
				      	</th>
				      	<td></td>
				      	<td></td>
				      	<td></td>
				    </tr>
			  	</tbody>
			</table>
		</div>
		<div class="row">
			<table class="table table-bordered">
				<thead class="text-uppercase text-center">
					<tr>
						<th>
							<span>name of sibling</span>
						</th>
						<th>
							<span>date of birth</span>
						</th>
						<th>
							<span>education</span>
						</th>
						<th>
							<span>occupation</span>
						</th>
						<th>
							<span>school/employer</span>
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
				</tbody>
			</table>
		</div>
		<input type="hidden" name="user_id" value="{{ auth()->id() }}">
		<div class="row">
			<button type="submit" class="btn btn-primary m-auto">
				Update Profile
			</button>
		</div>
	</form>
	@else
asdasd
	@endif
@endsection



<script type="text/javascript">

$(".imgAdd").click(function(){
  $(this).closest(".row").find('.imgAdd').before('<div class="col-sm-2 imgUp"><div class="imagePreview"></div><label class="btn btn-primary">Upload<input type="file" class="uploadFile img" value="Upload Photo" style="width:0px;height:0px;overflow:hidden;"></label><i class="fa fa-times del"></i></div>');
});
$(document).on("click", "i.del" , function() {
	$(this).parent().remove();
});
$(function() {
    $(document).on("change",".uploadFile", function()
    {
    		var uploadFile = $(this);
        var files = !!this.files ? this.files : [];
        if (!files.length || !window.FileReader) return; // no file selected, or no FileReader support
 
        if (/^image/.test( files[0].type)){ // only image file
            var reader = new FileReader(); // instance of the FileReader
            reader.readAsDataURL(files[0]); // read the local file
 
            reader.onloadend = function(){ // set image data as background of div
                //alert(uploadFile.closest(".upimage").find('.imagePreview').length);
uploadFile.closest(".imgUp").find('.imagePreview').css("background-image", "url("+this.result+")");
            }
        }
      
    });
});
</script>