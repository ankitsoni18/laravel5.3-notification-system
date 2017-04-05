<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Notifications Create</title>

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
          @if (Session::has('no_user_found'))
              <div class="alert alert-danger">
                  {{ Session::get('no_user_found') }}
              </div>
          @endif
          @if (Session::has('send_notification'))
              <div class="alert alert-success">
                  {{ Session::get('send_notification') }}
              </div>
          @endif
          <a href="{{ route('notifications.index') }}" class="btn btn-primary">List Notifications</a>
            <div class="col-sm-10">
                <form method="post" action="{{ route('notifications.store') }}">
                    {!! csrf_field() !!}
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="title" class="form-control" id="title" placeholder="Title" required>
                      </div>
                      <div class="form-group">
                        <label for="body">Body</label>
                        <textarea name="body" id="" class="form-control" rows="4" placeholder="body" required></textarea>
                      </div>
                      <button type="submit" class="btn btn-success btn-lg">Send</button>
                </form>
            </div>
        </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
