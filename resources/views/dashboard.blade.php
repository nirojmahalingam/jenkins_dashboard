@extends('basic')
@section('content')
<!-- row Start -->
  <div class="row">
    <!-- WILL BE FILLED WITH JS -->
  </div>
<!-- Row Stop -->

<script>
  setInterval(function() {
        $('body').display_builds();
  }, 10000);
</script>
@endsection
