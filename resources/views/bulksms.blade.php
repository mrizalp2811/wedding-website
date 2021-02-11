<html>
  <head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
  </head>
      <body>
        <div class="container">
          <h1>Laravel 7 Ajax Request example - Nicesnippets.com</h1>
          <form id="ajax-form" action="" method="post">
            @csrf
              <div class="form-group">
                  <button class="btn btn-success btn-submit">Submit</button>
              </div>
              <input type="text" class="form-control" id="inputPhone" name="phone" autocomplete="off" required>
              <label class="control-label" for="inputConfirm" style="margin-bottom: 15px;">Will you be coming?</label></br>
									<input type="radio" id="yes" name="confirmation" value="yes" required>
  									<label for="yes">I Will Attend</label></br>
  									<input type="radio" id="no" name="confirmation" value="no" required>
  									<label for="no">No, I can't Attend</label>
          </form>
      </div>
  </body>
      </form>
      <script src="assets/js/vendor/jquery.min.js"></script>
	    <script src="assets/js/vendor/jquery.easing.1.3.js"></script>
      <script src="assets/js/ajaxrequest.js" type="text/javascript"></script>
    </body>

</html>