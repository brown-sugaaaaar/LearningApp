<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Yomogi&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="title-block">
      <h2>エンジニア学習帳</h2>
    </div>
  </header>

<section>
    <h2>PHP Posts</h2>

    <div class="post-list">
      <ul>
        @foreach($post_category_index as $post_index)
        <li>
          <a href="{{ $post_index->category->name }}/{{ $post_index->id }}">
            <div>
              <p>{{ $post_index->title }}</p>
              <p>{{ $post_index->created_at }}</p>
            </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
</section>

  <footer>
    <ul>
      <li>CONTACT</li>
      <li>SNS</li>
    </ul>
  </footer>
</body>
</html>