@extends('layout')

@section('content')

<div class="main">
    <div class="copy-container">
        <h1>あなたの本棚を<br>図書館に</h1>
        <h2>簡単に、正確に本を管理</h2>
    </div>

    <div class="contents">
        <h3 class="section-title">主なサービス</h3>
        <div class="contents-item">
            <img src="images/iconbook.png"><img src="images/iconchare.png"><img src="images/icongood.png">
            <p>自分の本の登録、管理</p><p>本の貸し借り管理</p><p>みんなの評価</p>
        </div>
        <br>
        <h3 class="section-title">本サービスについて</h3>
        <p class="texts">Book Shareとは、自分の本をBook Shareに登録し、管理、他の人々と貸し借りをするサービスです。皆様の本棚を連結し、仮想上の図書館を形成することで、より正確に、より簡単に、そしてより多くの本を貸し借りすることができます。このサービスを通じて、利用者によりよい読書生活を提供することが目的です。</p>
        <h3 class="section-title">アップデート情報</h3>
        <!-- 更新履歴ボックス -->
        <style type="text/css">
	    .kousin {
		    overflow:auto;
            /* width:300px; */
            height:200px;
		    padding:5px;
		    border:2px dotted #ffffff;
		    color:#000000;
		    background-color:#ffffff;
		    line-height:1.5em;
        }
        span {
		    color:#ff0000;
		    line-height:1.5em;
        }
        </style>

        <div class="kousin">
            2021/01/22　<span>＜重要!!＞</span>Githubで公開<br>
            2020/XX/XX　HOGE<br>
            2020/XX/XX　FUGA<br>
            2020/XX/XX　PIYO<br>
            2020/XX/XX　ABA<br>
            2020/XX/XX　UGE<br>
            2020/XX/XX　ATAAAA!!<br>
            2020/XX/XX　DOMU<br>
            2020/XX/XX　GUHU<br>
            2020/XX/XX　<br>
            2020/XX/XX　<br>
            2020/XX/XX　BIG<br>
            2020/XX/XX　BROTHER<br>
            2020/XX/XX　IS<br>
            2020/XX/XX　WATCHING<br>
            2020/XX/XX　YOU<br>
            2020/XX/XX　<br>
            2020/XX/XX　<br>
	        2020/XX/XX　ページ製作開始<br>
        </div>
        <p class="texts"></p>
        <h3 class="section-title">リンク</h3>
        <a href={{ route('book.list') }}>本の一覧</a>
        <a href={{ route('book.list') }}>サービスの詳細</a>
        <a href={{ route('book.ans') }}>Q&A</a>
    </div>
    <div>
</div>