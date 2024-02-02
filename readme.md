During development,
set IS_VITE_DEVELOPMENT in functions.php to true, and set it to false for production.
When specifying images for scss (ex: background-image),Use relative paths.
Incorporate all of these files into your WordPress theme directory and start developing.


（日本語）

開発中は、functions.phpでIS_VITE_DEVELOPMENTをtrueに設定し、本番環境ではfalseに設定してください。

scssで画像を指定する場合（例：background-image）、ルート相対パスを使用してください。
background-image: url("/images/mainview.webp");

これらのファイルをすべてWordPressのテーマディレクトリに組み込んで、開発を始めてください。

開発時はmain.jsからスタイルシートやスクリプトが読み込まれるように設定している。

functions.phpもその仕様となっている。

本番環境ではnpm run build → dist にスタイルシート,スクリプト、圧縮後の画像が排出されるので、こちらを読むようになっている。

functions.phpも切り替わる。

vite.configの設定もnpm run dev時には切り替わるようになっている。

つまり、dev時以外はmain.jsはテーマデータに関わることは無い。