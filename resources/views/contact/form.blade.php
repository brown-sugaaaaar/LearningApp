@include('layouts.form-header')

<h2 class="form-title display-3">Contact Form</h2>

<div class="row">
  <div class="col-md-8 form">
    <form method="post" action="/contact/confirm">
    @csrf
      <div class="form-group">
        <label class="form-label" for="name">name</label>
        <input type="text" class="form-control" name="name">
      </div>

      <div class="form-group">
        <label class="form-label" for="email">email</label>
        <input type="email" class="form-control" name="email" placeholder="hogehoge@example.com">
      </div>

      <div class="form-group">
        <label class="form-label" for="subject">subject</label>
        <input type="text" class="form-control" name="subject">
      </div>

      <div class="form-group">
        <label class="form-label" for="inquiry">inquiry</label>
        <textarea class="form-control" rows="10" name="inquiry"></textarea>
      </div>

        <button type="submit" class="btn btn-primary">確認画面へ</button>

    </form>
  </div>
</div>
@include('layouts.footer')