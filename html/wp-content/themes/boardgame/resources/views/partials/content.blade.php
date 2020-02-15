<article @php post_class() @endphp>
  <h2 class="entry-title"><a href="{{ get_permalink() }}">{!! get_the_title() !!}</a></h2>
  @include('partials/entry-meta')
  <div class="entry-summary">
    @php the_post_thumbnail('thumbnail') @endphp
    @php the_excerpt() @endphp
  </div>
</article>
