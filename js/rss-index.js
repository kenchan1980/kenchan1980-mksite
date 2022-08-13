   // HTMLドキュメントの解析後に実行
   window.addEventListener('DOMContentLoaded', function () {
       // XMLHttpRequestのインスタンスを作成
       var req = new XMLHttpRequest();

       // 読み込み時の処理を設定
       req.onreadystatechange = function () {
           // readyState=4は全てのデータを受信済み、
           // status=200は正常に処理されたことを意味します
           if (req.readyState == 4 && req.status == 200) {
               // 結果を代入
               document.getElementById("message").innerHTML = req.responseText;
           }
       }

       // 接続先のURLやメソッドを設定します
       req.open("GET", "../output_rss.php");

       // リクエストをサーバに送信
       req.send();

   })
