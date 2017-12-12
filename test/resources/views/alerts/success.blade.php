@if(Session::has('message'))
<div class="alert alert-Success" role="alert">
  <strong>{{Session::get('message')}}</strong>.
</div>
@endif