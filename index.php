<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package mochipan
 */
?>

<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <?php get_header(); ?>
</head>


<body>
  <!-- スマホヘッダー -->
  <header class="sp">
    <div class="container">
      <nav>
        <a href="#" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/img/hy5_Company-Logo-Design.png" alt="株式会社ハイファイブ" height="42px"></a>
        <button id="open" class="burger show"><i class="bi bi-list"></i></button>
      </nav>
    </div>
  </header>

  <section class="sp-menu">
    <ul>
      <li><a href="#"><i class="bi bi-house-fill"></i>ホーム</a></li>
      <li><a href="#service"><i class="bi bi-laptop-fill"></i>事業内容</a></li>
      <li><a href="#pholosophy"><i class="bi bi-person-lines-fill"></i>企業理念</a></li>
      <li><a href="#company"><i class="bi bi-building"></i>会社概要</a></li>
      <li><a href="#contact"><i class="bi bi-envelope-fill"></i>お問い合わせ</a></li>
    </ul>

    <div>
      <button id="close" class="burger">
        <i class="bi bi-x-lg"></i>
      </button>
    </div>
  </section>

  <!-- PCヘッダー -->
  <header class="pc">
    <div class="container">
      <nav>
        <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/hy5_Company-Logo-Design.png" alt="株式会社ハイファイブ" height="60px"></a>
        <ul>
          <li><a href="#"><i class="bi bi-house-fill"></i><br>ホーム</a></li>
          <li><a href="#service"><i class="bi bi-laptop-fill"></i><br>事業内容</a></li>
          <li><a href="#pholosophy"><i class="bi bi-person-lines-fill"></i><br>企業理念</a></li>
          <li><a href="#company"><i class="bi bi-building"></i><br>会社概要</a></li>
          <li><a href="#contact"><i class="bi bi-envelope-fill"></i><br>お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
  </header>

  <!-- TOP -->
  <section class="top">
    <img src="<?php echo get_template_directory_uri(); ?>/img/top.jpg" alt="">
    <div class="top-msg en">
      <div class="container">
        <h2>WE MAKE "IT” EASY</h2>
        <p>Let's make a change for the better.</p>
      </div>
    </div>
  </section>

  <div id="target"></div>

  <!-- 事業内容 -->
  <section class="service-contents" id="service">
    <div class="container">
      <h1>事業内容</h1>
      <div class="services">

        <div class="service" style="background-color: rgba(54,140,191,1);">
          <div class="container">
            <div class="item">
              <i class="bi bi-headset"></i>
              <h3>国内外資企業向け<br>ITサービスデスク</h3>
            </div>
            <div class="detail sd">
              <div class="container">
                <p>
                  ユーザー様からのお問い合わせに丁寧かつ円滑に対応し、解決方法を導き出します。
                  キッティング作業、コールセンターやメールおよびチャットの対応まで、貴社のヘルプデスク業務をサポートいたします。
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="service" style="background-color: rgba(126,188,89,1);">
          <div class="container">
            <div class="item">
              <i class="bi bi-gear-fill"></i>
              <h3>ITネットワーク インフラ設計<br>構築、運用支援サービス</h3>
            </div>
            <div class="detail infra">
              <div class="container">
                <p>
                  最新の経験や知識に基づいて、効率の良いシステム環境をご提供いたします。
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="service" style="background-color: rgba(240,120,16,1);">
          <div class="container">
            <div class="item">
              <i class="bi bi-chat-right-dots-fill"></i>
              <h3>通訳翻訳業務サービス</h3>
            </div>
            <div class="detail translate">
              <div class="container">
                <p>
                  日本語、英語、スペイン語の通訳・翻訳・即時ビジネススキル教育を担当いたします。
                  資料の翻訳や作成、海外とのテレビ会議の同時通訳等、ニーズに沿った形でご利用いただけます。
                </p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- 企業理念 -->
  <section id="pholosophy">
    <div class="container">
      <h1>企業理念</h1>
      <h2>孤高の価値を追及し、世界との融合性を生む</h2>
    </div>

    <!-- 信条 -->
    <section class="beliefs">
      <div class="container">
        <h3>私たちの信条　ー５か条ー</h3>

        <dl>
          <dt><i class="bi bi-caret-right-fill"></i> 1. 時間に左右されず、時間を制御する</dt>
          <dd>
            コントロールできないほどの業務量を受注し、時間に追われる…。<br>
            そのような状況では、クライアントにとってもメリットはありません。<br>
            適正な量を受注し時間を制御することにより、社員のやりがいもクライアントの満足度も向上できると信じています。
          </dd>
        </dl>

        <dl>
          <dt><i class="bi bi-caret-right-fill"></i> 2. 時代の変化を恐れず、変化を楽しむ</dt>
          <dd>
            目まぐるしく情報がアップデートされ、新しい技術が生まれる現代です。<br>
            進化をポジティブに受け入れ日々腕を磨くことで、いつの時代にも適応できるサービスを提供できると考えています。
          </dd>
        </dl>

        <dl>
          <dt><i class="bi bi-caret-right-fill"></i> 3. 過去の自分を肯定できる自分へ成長する</dt>
          <dd>
            どんなに時が流れ過去の技術が廃れてしまっても、過去の自分の努力が未来に紡がれていきます。<br>
            「あの時こうしていれば」と悔いの残らぬよう、一歩ずつ成長していきます。
          </dd>
        </dl>

        <dl>
          <dt><i class="bi bi-caret-right-fill"></i> 4. 社会へのありがたみを忘れない</dt>
          <dd>
            クライアントがあり社会があって、私たちはサービスを提供することができます。<br>
            一人一人のクライアントへ感謝の気持ちを忘れず、一つ一つのお仕事を丁寧にこなしていきます。
          </dd>
        </dl>

        <dl>
          <dt><i class="bi bi-caret-right-fill"></i> 5. 成功した後の先を想像する</dt>
          <dd>
            目標は「成功すること」ではありません。<br>
            会社が成長したその先に重きを置きます。<br>
            クライアントの満足度をより向上するためには？社員のモチベーションを維持し続けるには？<br>
            状況に応じた目標を日々アップデートし、社員と共有していきます。
          </dd>
        </dl>

      </div>

    </section>
  </section>

  <!-- 会社概要 -->
  <section id="company">
    <div class="container">
      <h1>会社概要</h1>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">会社名</th>
            <td colspan="3">株式会社ハイファイブ（略称 hy5）</td>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">英文名称</th>
            <td colspan="3">hy5 Incorporated</td>
          </tr>
          <tr>
            <th scope="row">設立</th>
            <td colspan="3">2020年5月29日</td>
          </tr>
          <tr>
            <th scope="row">所在地</th>
            <td colspan="3">東京都板橋区大谷口1-22-9</td>
          </tr>
          <tr>
            <th scope="row">代表取締役</th>
            <td colspan="3">山﨑　仁史</td>
          </tr>
          <tr>
            <th scope="row">資本金</th>
            <td colspan="3">2,000,000円</td>
          </tr>
          <tr>
            <th scope="row">主要事業</th>
            <td colspan="3">
              情報通信コンサルタント業<br>
              ITインフラ運用保守管理サービス<br>
              通訳翻訳サービス
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- お問い合わせ -->
  <section id="contact">
    <div class="container">
      <h1>お問い合わせ</h1>

      <div class="info">
        <div class="tel">
          <p><i class="bi bi-telephone-fill"></i><span>直通電話</span></p>
          <p>070-3300-1789</p>
        </div>
        <div class="mail">
          <p><i class="bi bi-envelope-fill"></i><span>メールアドレス</span></p>
          <p><a href="mailto:info@hy5.co.jp">info@hy5.co.jp</a></p>
        </div>
        <div class="line">
          <p><i class="bi bi-line"></i>LINE</p>
          <p><img src="<?php echo get_template_directory_uri(); ?>/img/LINE-ID-hy5-100x100.jpg" alt="" height="80px"></p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <p>&copy;2022 株式会社ハイファイブ</p>
      <p><a class="privacy-policy-link" href="http://www.hy5.co.jp/?page_id=3">プライバシーポリシー</a></p>
    </div>
  </footer>
  <a href="#" id="to_top"><i class="bi bi-arrow-up-square-fill"></i></a>

  <?php get_footer(); ?>

</body>

</html>