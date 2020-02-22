@extends('layouts.app')

@section('content')
  <article>
    <div class="main-container">
      @include('partials.page-header')

      <section id="what">
        <div class="container">
          <div class="row">
            <h2 class="section-title">はじめに</h2>
          </div>

          @if (!have_posts())
            <div class="alert alert-warning">
              {{ __('Sorry, no results were found.', 'sage') }}
            </div>
            {!! get_search_form(false) !!}
          @endif

          @while (have_posts()) @php the_post() @endphp
          @include('partials.content-'.get_post_type())
          @endwhile

          {!! get_the_posts_navigation() !!}

          <div class="row">
            <h3 class="section-subTitle">オープン会って？</h3>
          </div>
          <div class="row">
            <h3 class="section-subTitle">気を付けておきたいこと</h3>
          </div>
          <div class="row">
            <h3 class="section-subTitle">気軽に参加してみよう！</h3>
          </div>
        </div>
      </section>

      <section id="report">
        <div class="container">
          <div class="row">
            <h2 class="section-title">この会について</h2>
          </div>

          <div class="row">
            <h4 class="caution_title mx-auto">注意事項</h4>
          </div>
          <div class="row">
            <div class="caution_box mx-auto w-75">
              <ul>
                <li>
                  貴重品の管理は自己責任でお願いします。会で発生したいかなるトラブルも責任を持ちません。
                </li>
                <li>
                  他の参加者に迷惑となる行為はご遠慮ください。注意をしても改善が見られない場合、退出をお願いすることがあります。
                </li>
                <li>
                  ボードゲームは丁寧に扱いましょう。会にあるゲームは、みんなで持ち寄ったゲームです。個人の持ち物となるので、破損・紛失がないようにしましょう。
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="summary">
        <div class="container">
          <div class="row">
            <h2 class="section-title">開催概要/アクセス</h2>
          </div>

          <div class="next-schedule text-center">
            <h3>次回の予定</h3>
          </div>
          <div class="row justify-content-center">
            <div class="col-11 col-md-4">
              <table class="next-schedule">
                <tr>
                  <th>会場</th>
                  <td>・・・</td>
                </tr>
                <tr>
                  <th>開催時間</th>
                  <td> yyyy/MM/dd hh:mi:ss</td>
                </tr>
                <tr>
                  <th>参加費</th>
                  <td> 400円</td>
                </tr>
              </table>

              <p class="text-right">
                初めての方、お子様歓迎!!
              </p>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="col-12 col-md-5 text-center">
              <div class="gmap">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3180.9255532433813!2d138.243561814556!3d37.13068615179044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x5ff677111ac135c5%3A0xb178dadea5e5044b!2z5LiK6LaK5biCIOW4guawkeODl-ODqeOCtg!5e0!3m2!1sja!2sjp!4v1577605860120!5m2!1sja!2sjp" width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="contact">
        <div class="container">
          <div class="row">
            <h2 class="section-title">お問い合わせ</h2>
          </div>
          <div class="row justify-content-center">
            <?php echo do_shortcode('[contact-form-7 id="16" title="お問い合わせフォーム"]'); ?>
          </div>
        </div>
      </section>
    </div>
  </article>
@endsection
