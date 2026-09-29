<?php get_header(); ?>

<main>
    <section class="about">
        <div class="inner">
            <h2>Profile</h2>
            <div class="basic">
                <img class="AboutIcon" src="<?php echo esc_url(get_theme_file_uri('/BlogImages/icon.png')); ?>" alt="プロフィールアイコン">
                <p>井上 美結</p>
                <p>トライデントコンピュータ専門学校<br>
                    Webデザイン学科</p>
            </div>

            <p class="thought">見ているだけで心がやわらぐような、温かみのある世界観が大好きです。<br>
                使う人の気持ちに寄り添い、「なんだか好きだな」「使いやすいな」と感じてもらえるWebデザイナーを目指して、日々デザインやコーディングに挑戦中です!<br>イラストレーターがもっと使えるようになりたい、配色の勉強を頑張りたいと思っています!
            </p>


            <div class="skill">
                <h3>勉強していること</h3>
                <h4> Webデザイン、カラーデザイン</h4>
                <p>Photoshopや、Illustrator、Figmaの使い方、画像や文字の扱い方を学んでいます。カラーデザインでは色の基礎知識から配色のことを勉強しています。
                </p>
                <h4>HTML基礎</h4>
                <p>Visual Studio Codeを使い、HTML、CSSを1から学んでいます。</p>
                <h4>業界研究</h4>
                <p>業界のことを勉強したり、講師の方のお話を聞いたりしています。</p>
                <h4>ベーシックプログラム,社会人基礎力
                </h4>
                <p>ワードやエクセルの使い方の勉強、敬語の勉強やグループワークの勉強をしています。</p>
                <h4>造形基礎</h4>
                <p>デジタルだけでなく、デッサンや平面構成など、アナログのことも学んでいます。</p>

            </div>



            <div class="hobby">
                <h3>趣味</h3>
                <h4>絵画、イラストを描くこと！</h4>
                <p>作品たちはInstagramの作品垢に載せてます。</p>

                <p>オリジナルのメッセージカードを作成。<br>テーマは女の子、子供向けに赤、ピンクの可愛いものを詰め込みました。
                </p>

                <div class="images">
                    <img src="<?php echo esc_url(get_theme_file_uri('/BlogImages/card1.png')); ?>" alt="オリジナルメッセージカードのデータ">
                    <img src="<?php echo esc_url(get_theme_file_uri('/BlogImages/card2.jpg')); ?>" alt="オリジナルメッセージカードの写真">
                </div>
                <p>油絵を描いています。<br>テーマは暗いものが多いですが、自分の思いを自由に形にしています。<br>下にあるものは左は可愛さの中の不安、右は死に対する思いをテーマにしています。</p>
                <div class="images">
                    <img src="<?php echo esc_url(get_theme_file_uri('/BlogImages/art1.jpg')); ?>" alt="油絵の写真">
                    <img src="<?php echo esc_url(get_theme_file_uri('/BlogImages/art2.jpg')); ?>" alt="油絵の写真">
                </div>
                <div class="music">
                    <h4>音楽を聴くこと!</h4>
                    <p>いろんな音楽を聴きます。人の紡ぐ言葉、歌詞がとても大好きです。好きな曲のリンクを貼っておくので、ぜひ聴いてみてください。</p>
                    <a href="https://youtube.com/playlist?list=PLKG_TicYtE9E&si=80CMj8x7FieWoOvM">好きな曲リスト</a>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('template-parts/loop', 'sideber');
    ?>

</main>

<?php get_footer(); ?>