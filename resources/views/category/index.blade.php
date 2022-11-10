@include('layouts.header')

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

@include('layouts.footer')