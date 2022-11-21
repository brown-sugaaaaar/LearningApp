@include('layouts.form-header')

<h2 class="form-title display-3">Contact Form</h2>

<div class="row">
  <div class="col-md-8 form">
    <form method="post" action="/contact/thanks">
    @csrf

      <div class="form-group">
        <label class="form-label" for="name">name:</label>
        {{ $inputs['name'] }}
        <input name="name" type="hidden" class="form-control" value="{{ $inputs['name'] }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="email">email:</label>
        {{ $inputs['email'] }}
        <input name="email" type="hidden" class="form-control" value="{{ $inputs['email'] }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="subject">subject:</label>
        {{ $inputs['subject'] }}
        <input name="subject" type="hidden" class="form-control" value="{{ $inputs['subject'] }}">
      </div>

      <div class="form-group">
        <label class="form-label" for="inquiry">inquiry:</label>
        {{ $inputs['inquiry'] }}
        <input name="inquiry" type="hidden" class="form-control" value="{{ $inputs['inquiry'] }}">
      </div>

        <button type="submit" class="btn btn-primary">送信</button>

    </form>
  </div>
</div>
@include('layouts.footer')