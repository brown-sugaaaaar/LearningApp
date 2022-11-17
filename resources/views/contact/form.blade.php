@include('layouts.form-header')

<form id="form">

  <h2>Contact Form</h2>

  <div>
    <div class="col-sm-4">
        <label class="form-label" for="name">name</label>
        <input type="text" class="form-control" id="name">
    </div>

    <div class="col-sm-4">
        <label class="form-label" for="email">email</label>
        <input type="email" class="form-control" id="email" placeholder="hogehoge@example.com">
    </div>

    <div class="col-sm-8">
        <label class="form-label" for="subject">subject</label>
        <input type="text" class="form-control" id="subject">
    </div>

    <div class="col-sm-8">
        <label class="form-label" for="inquiry">inquiry</label>
        <textarea class="form-control" rows="10" id="inquiry"></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">送信</button>

</form>

@include('layouts.footer')