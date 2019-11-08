<!DOCTYPE html>
<html>
	<head>
		<title> Show Data User </title>
		<a href="{{URL::to('/contact')}}"> Contact Us </a> 
		<a href="{{URL::to('/message')}}"> Message </a>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>

	<body>
    <div class="card" style="margin: 20px">
  <div class="card-header">
   <strong>Contact Us</strong> 
  </div>
  <div class="card-body">
    
    <form action="{{URL::to('/addcontact')}}" method="POST">
        {!! csrf_field() !!}
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail4">First Name</label>
                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First Name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword4">Last Name</label>
                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" required>
                </div>
        </div>
        <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="inputEmail5">E-mail</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="E-mail" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="inputPassword5">Phone Number</label>
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="Phone Number" required>
                </div>
            </div>

            <label for="exampleFormControlTextarea1">Message</label>
            <textarea class="form-control" id="message" name="message" rows="3" required></textarea>
            <button type="submit" class="btn btn-primary" style="margin-top:12pt">Send Message</button>

        </div>
    </form>
</div>
   
			
		<!-- </div> -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>