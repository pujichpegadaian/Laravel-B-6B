<!DOCTYPE html>
<html>
	<head>
		<title> Show Data User </title>
		<a href="{{URL::to('/contact')}}"> Contact Us </a>
		<a href="{{URL::to('/message')}}"> Message </a>
	</head>

	<body>
		<h1> Message from Contact Us </h1>
		<br>
		<table border="1">
			<tr>
				<td> No. </td>
				<td> First Name </td>
				<td> List Name </td>
				<td> Email </td>
				<td> Phone Number </td>
				<td> Message </td>
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
	</body>
</html>