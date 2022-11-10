
@include('layouts.header')

<section>
    <h2>{{ $post->title }}</h2>

    <div class="post-list">
      <ul>
        <li>
          <div>
            <p>{{ $post->content }}</p>
            <p>{{ $post->category->name }}</p>
            <p>{{ $post->created_at }}</p>
          </div>
        </li>
      </ul>
    </div>
</section>

@include('layouts.footer')