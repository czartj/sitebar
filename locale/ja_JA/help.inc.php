<?php

$help['100'] = <<<_P
SiteBar の各機能へは<strong>ユーザ メニュー</strong>およびフォルダやリンクの<strong>コンテキスト メニュー</strong>からアクセスを行うことができます。ユーザ メニューは SiteBar の下部に表示されており、コンテキスト メニューはフォルダまたはリンクを右クリックすることで利用可能になります。Opera および Apple 社のコンピュータを使っている場合には右クリックのかわりとして Ctrl + クリックを使用することができます。万が一 Ctrl + クリックですら認識されない場合には「ユーザ別設定」を開き「メニュー アイコンの表示」にチェックをつけてください。このオプションにチェックがついている場合にはフォルダもしくはリンクを示すアイコンの近くに小さなメニュー アイコンが表示されます。このアイコンをクリックすることによりコンテキスト メニューが表示されます。
<p>
コンテキスト メニューおよびユーザ メニューはいずれもシステムにおける権限にもとづきユーザ毎に異なるコマンドのリストを表示することができます。各ノードに対するユーザの権限やプログラムの現在のモード/状態によりコンテキスト メニュー内の項目のうちいくつかは無効になっているかもしれません。コマンドの実行はコマンド ウィンドウを通して実行されます。
_P;

$help['101'] = <<<_P
フォルダまたはリンク上でマウスのボタンを押しボタンを押したまま別のフォルダの上にマウス カーソルを移動させます。ドロップの対象となるフォルダが強調表示されドラッグ中であることが表現されます。マウスのボタンを放した時点でそのとき強調表示されているフォルダに対しドラッグされていたリンクもしくはフォルダがドロップされます。
<p>
Opera に関しては SiteBar チームはドラッグ & ドロップの実装を行っていません。このためドラグ & ドロップのかわりにコピーと貼り付けを利用する必要があります。
_P;

$help['103'] = <<<_P
<p><strong>フィルタ</strong> - 画面に表示されるリンクに対しフィルタリングを行います。
プリフィックスを使用することによりフィルタリングの対象となる項目の指定を行うことができます。
プリフィックスには以下のものを指定することができます：<strong>url:</strong>、<strong>name:</strong>、<strong>desc:</strong>、<strong>all:</strong>。
既定のプリフィックスは <strong>name:</strong> に設定されていますが「ユーザ別設定」で変更することができます。

<p><strong>検索</strong> - 検索と同じですがバックグラウンドで処理を行い別のフォーム内に表示します。

<p><strong>Web 検索</strong> - Web 検索の実行が許可されており検索エンジンの設定が行われている場合に表示されます。

<p><strong>ツリー全体の伸縮</strong> - すべてのノードを折りたたみます。 もう一度クリックした場合（すべてのノードがすでに折りたたまれている場合）にはすべてのノードの展開を行います。

<p><strong>すべて再読込</strong> - すべてのリンクをサーバから再度読み込みます。 「フォルダを非表示に」コマンドで非表示状態になっているフォルダに関しても読み込みが行われます。

<p><strong>再読込</strong> - リンクをサーバから再度読み込みます。 （ブラウザによっては）ユーザが再読み込みを行うことができないサイドバーにプラグインが配置されるためこの機能が用意されています。
_P;

$help['200'] = <<<_P
各コマンドはいくつかの論理的なグループとしてまとめられています。コマンドに関するヘルプを表示する場合はグループのいずれかを選択してください。
_P;

$help['210'] = <<<_P
<p><strong>ログイン</strong> - システムへのログインを行います。 Cookie の利用を有効にしておくことを忘れないでください。 ユーザは Cookie の保存期間を指定することができます。

<p><strong>ログアウト</strong> - システムからログアウトします。 共用のコンピュータを利用している場合には必ず実行するべきでしょう。 ログイン時にセッションの保存期間をウィンドウを閉じるまでに設定しブラウザのウィンドウをすべて閉じた場合にも同様の効果があります。

<p><strong>新規登録</strong> - システムのユーザとして新規登録を行うことができます。 新規登録時には email アドレスをもとにグループに対する参加資格があるかどうかがチェックされます。 該当するグループが存在する場合には email の照合を行う必要があります。 email の照合が必要な場合には照合用の email がユーザに対し自動的に送信されます。 システムの管理者は新規登録を禁止することができます。 さらに管理者はユーザが SiteBar の利用を開始する前に email の照合や管理者によるアカウントの承認を必要とするように設定することができます。
_P;

$help['220'] = <<<_P
<p><strong>セットアップ</strong> - SiteBar のインストールとデータベースの設定を行った後、管理者が目にする最初のコマンドです。 管理用アカウントの作成と SiteBar の基本的なパラメータの設定を行います。 "パーソナル モード" オプションが選択された場合は全機能のサブセットが利用可能になります。

<p><strong>SiteBar の設定</strong> - 管理者は SiteBar の各パラメータを後で変更することができます。 管理者とは管理グループのメンバであり "セットアップ" コマンドを使用して作成されたユーザのことです。 email 関連機能に関する説明は "新規登録" を参照してください。 今後のリリースでは email 関連機能の強化が計画されています。

<p><strong>ツリーの作成</strong> - 管理者および email 照合済みのユーザ（SiteBar の設定による）は新しくツリーを作成することができます。 新規ツリーの作成時にはツリーを既存のユーザに対して割り当てる必要があります（自分以外のユーザに対し割り当てを行うことができるのは管理者だけです）。 チーム用ブックマークの作成においては新しくツリーを作成しグループを管理するユーザに割り当てるという方法が標準的のものです。 グループは "グループの作成" を使用し別途作成します。 このユーザはグループのメンバに対して新たに作成されたツリーに関する権限を与えたりグループにメンバを追加することができます。
_P;

$help['230'] = <<<_P
<p><strong>ユーザ別設定</strong> - ユーザ個別の設定を変更します。 "コマンドを別ウィンドウで実行" がチェックされていない場合、コマンド ウィンドウは新しいウィンドウではなく現在 SiteBar が表示されているウィンドウに表示されます。 コマンドによっては常に SiteBar と同じウィンドウで開きます（"ログイン"、"ログアウト"、"新規登録"、"ユーザ別設定"）。 "実行メッセージをスキップ" がチェックされている場合にはコマンドが正常に処理された際の確認画面は表示されません。 "ACL フォルダを見分けやすくする" が有効になっている場合にはセキュリティ指定が行われているフォルダに対しマークが表示されます。

<p><strong>メンバ権限</strong> - 各グループからの退会や公開グループへの参加を行うことができます。 ユーザが退会することによりグループのモデレータがいなくなってしまう場合にはそのユーザはグループから退会することができません。 このような場合には管理者に連絡を取りグループを削除してもらう必要があります。

<p><strong>Email の照合</strong> - システムの機能制限を解除するため email アドレスの照合を行います。
_P;

$help['240'] = <<<_P
<p><strong>ユーザの管理</strong> - ユーザ名が記載されたリストボックスが表示され下記のコマンドを実行することができます。

<p><strong>ユーザ情報の変更</strong> - 現時点ではユーザがパスワードを忘れた場合には管理者が一時的なパスワードを設定し、パスワードをユーザに対して emial で送信して変更を依頼するしかありません。 管理者はアカウントをデモ用として設定することができます。 デモ用のアカウントはパスワードをはじめ、いくつかのプロパティを変更することができなくなります。

<p><strong>ユーザの削除</strong> - ユーザとそのユーザが持つすべてのメンバ権限を削除します。 削除されたユーザに割り当てられていたツリーは他のユーザに対して再度割り当てが行われます。 削除しようとしているユーザ以外にモデレータが存在しないグループがある場合にはユーザの削除は行えません。

<p><strong>ユーザの作成</strong> - "新規登録" と同じ意味を持ちますが管理者によって実行されます。 作成されるユーザの email は照合済みとして扱われます。

_P;

$help['250'] = <<<_P
<p><strong>グループの管理</strong> - グループ名が記載されたリストボックスが表示され下記のコマンドを実行することができます。

<p><strong>グループ プロパティ</strong> - グループのモデレータだけがアクセスすることができます。 グループ名、コメント、email に対する自動参加用正規表現式の変更を行うことができます。 自動参加用正規表現式が指定されており新規登録ユーザの email アドレスが該当した場合にはユーザに対し照合を行うよう指示されます。 照合が行われた後、そのユーザは自動的にグループのメンバとして登録されます。 "ユーザによる参加登録を許可する" にチェックが付いている場合、自動登録に関するemail の照合は必要ありません。

<p><strong>グループ メンバ</strong> - モデレータのみがメンバとして登録されるユーザを選択することができます。 自分以外のモデレータの登録を解除することはできません。 モデレータをグループ メンバから削除する場合は、まず最初に下記のコマンドを使ってモデレータとしての役割を解除しておく必要があります。

<p><strong>グループ モデレータ</strong> - グループのモデレータだけがアクセスすることができます。 グループに対しては常に最低一人のモデレータを指定しておく必要があります。

<p><strong>グループの削除</strong> - 管理者だけがアクセスすることができます。 グループおよびそのグループに登録されているすべてのメンバ権限を削除します。

<p><strong>グループの作成</strong> - 管理者だけがアクセスすることができます。 グループの作成とグループに対する最初のモデレータを指定することができます。

_P;

$help['270'] = <<<_P
<p><strong>リンクを Email で送信</strong> - email を使って友人や知人にリンクを知らせることができます。 email 照合済みのユーザーは SiteBar の組み込みメール システムを利用することができます。 照合が済んでいない場合には利用しているコンピュータにメール クライアントがインストールされている必要があります。

<p><strong>リンクのコピー</strong> - 内部クリップボードにリンクをコピーします。 ノードに対してリンクをコピー/移動する場合はフォルダの上で「貼り付け」コマンドを使用します。

<p><strong>リンクを削除</strong> - ノードからリンクを削除します。 削除されたリンクは親フォルダに対して「削除の取り消し」コマンドを使用することにより復活させることができます。

<p><strong>プロパティ</strong> - リンクのプロパティを編集します。 リンクをプライベートとして設定することができます。
_P;

$help['305'] = <<<_P
現在インストールしているSiteBarから別のサーバーに移転するには、
<ul>
<li>元のデータベースのsitebar_*テーブルを.SQLファイルに書き出す。
<li>移転先のデータベースにそのファイルをインポートする。
<li>SiteBarソフトウェアを移動するか、新しいSiteBarのインストールをする。（アップグレード、ダウングレードは自動的に行われます。）
<li>もしデータベース接続情報が変更されている場合はinc/config.inc.phpファイルを削除するか、更新してください。</ul><p>エクスポートとインポートは<a href='http://www.phpmyadmin.net/'>phpMyAdmin</a>を使うとより簡単に行えます。sitebar_favicon (3.2.6まで) 及び sitebar_cache (3.3以上)は転送する必要なありません。ソフトウェアにより再構築されます。
_P;
