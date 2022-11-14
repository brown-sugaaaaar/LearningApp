@include('layouts.header')

<section>
    <h2>{{$category->name}} Posts</h2>

    <div class="post-list">
      <ul>
        @foreach($post_category_index as $post_index)
        <li>
          <a href="{{ $post_index->category->name }}/{{ $post_index->id }}">
          <div class="post-content">
            <div class="thumb">
              <img src="/storage/images/thumb/{{ $post_index->thumb_name }}" class="thumb_img">
            </div>
            <div class="summary">
              <p>{{ $post_index->title }}</p>
              <p>{{ $post_index->created_at }}</p>
            </div>
          </div>
          </a>
        </li>
        @endforeach
      </ul>
    </div>
</section>

@include('layouts.footer')