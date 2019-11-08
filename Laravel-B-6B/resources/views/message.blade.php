<!DOCTYPE html>
<html>
	<head>
		<title> Show Data User </title>
		<a href="{{URL::to('/contact')}}"> Contact Us </a>
		<a href="{{URL::to('/message')}}"> Message </a>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>

	<body>
    <div style="margin: 20px">
		<h1> Messages from Contact Us </h1>
		<br>
		<table class="table">
			<tr>
            <th scope="col"> No. </th>
            <th scope="col"> First Name </th>
            <th scope="col"> List Name </th>
            <th scope="col"> Email </th>
            <th scope="col"> Phone Number </th>
            <th scope="col"> Message </th>
			</tr>

			@foreach($contacts as $index => $item)
			<tr>
				<td> {{$index +1}} </td>
				<td> {{$item->firstName}} </td>
				<td> {{$item->lastName}} </td>
				<td> {{$item->phoneNumber}} </td>
				<td> {{$item->email}} </td>
				<td> {{$item->message}} </td>
			</tr>
			@endforeach
		</table>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>