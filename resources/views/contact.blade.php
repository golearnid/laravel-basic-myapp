<!doctype html>
<html>
   <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>
   </head>
   <body>
      @include("partials/nav")

      <h2>Contact</h2>
      
      <strong>{{ $name }}</strong>
      <br/>
      {{ $addr_line1 }} <br/>
      {{ $addr_line2 }} <br/>
      Ph: {{ $phone }} <br/>
      Email: <a href="mailto:{{ $email }}">{{ $email }}</a> <br/>
   </body>
</html>