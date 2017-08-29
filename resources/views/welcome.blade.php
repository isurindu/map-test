<!DOCTYPE html>
<head>
<meta name="csrf-token" content="{{ csrf_token() }}">

  <title>Pusher Test</title>
  <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
  {{-- <script type="text/javascript" src="/js/app.js"></script> --}}
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('34653cd92e346ea5e0cc', {
      encrypted: true,
      authEndpoint: '{{url('/broadcasting/auth')}}',
    });

    var channel = pusher.subscribe('private-my-channel');
    channel.bind('App\\Events\\TestEvent', function(data) {
      alert(data.message);
    });
  </script>
</head>
<body>
    
    sdsd
</body>
</html>