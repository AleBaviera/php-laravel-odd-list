<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    @include('tagParts.head')
  </head>
  <body>
    @include('elem.header')
    <div class="">
      <ul>
      <?php foreach ($oddNumbers as $number): ?>

          <li>{{$number}}</li>

      <?php endforeach; ?>
      </ul>
    </div>
    @include('elem.footer')
  </body>
</html>
