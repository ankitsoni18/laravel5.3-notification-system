<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Notifications List</title>

    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="container" style="margin-top:25px;background:#dad6d6;padding:15px;">
		<div class="row">
			<div class="col-sm-12">
				<table class="table table-striped">
				  	<thead>
				  		<tr>
				  			<th>#</th>
				  			<th>title</th>
				  			<th>Published At</th>
				  			<th></th>
				  			<th><a href="{{ route('notifications.create') }}" class="btn btn-primary">New Notification</a></th>
				  		</tr>
				  	</thead>
				  	<tbody>
				  		@foreach($items as $index => $item)
						<tr>
							<td>{{ $index+1 }}</td>
							<td>{{ $item->title }}</td>
							<td>{{ $item->created_at->format('j M Y') }}</td>
							<td><a href=""><i class="glyphicon glyphicon-eye-open"></i>  Show</a></td>
							<td></td>
						</tr>
						@endforeach
				  	</tbody>
				</table>
				{!! $items->appends($size)->render() !!}
			</div>
		</div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
