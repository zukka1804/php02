<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>遺言書作成フォーム</title>
    <link href="css/style.css" rel="stylesheet">
    <link href="css/reset.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 16px;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fetch-jsonp@1.1.3/build/fetch-jsonp.min.js"></script>
</head>

<body>

    <!-- Head[Start] -->
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>
    <!-- Head[End] -->

    <!-- Main[Start] -->
    <form method="post" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <h2>
                <legend>遺言書作成フォーム</legend>
                </h2>
                <!-- 遺言者氏名 -->
                <label>遺言作成者のお名前：<input type="text" name="testator_name"></label><br>

                <!-- 遺言者住所 -->
                <!-- 本当は郵便番号から住所表示させて、name属性つけたかったけど、各住所項目にそれぞれname付けないといけないのか？？ -->
                <label>遺言作成者の住所：<br><textArea name="testator_address" rows="6" cols="40"></textArea></label><br>
                <!-- <div class="err_text" id="err_textbox"></div>
                <div id="app">
                    <p class="cp_iptxt">遺言作成者の郵便番号：
                        <input id="input" class="zipcode" type="text" class="address" value="" placeholder="郵便番号">
                    <div class="address_button">
                        <button id="search" type="button" class="address_search_button">住所検索</button>
                        <p id="error"></p>
                        </p>
                        <p>※住所検索ボタンを押すと住所が自動表示されます</p>
                    </div>
                    <div name="testator_address">
                        <div class="cp_iptxt">
                            <input id="address1" type="text" class="cp_iptxt" value="" placeholder="都道府県">
                        </div>
                        <div class="cp_iptxt">
                            <input id="address2" type="text" class="address" class="cp_iptxt" value="" placeholder="住所１">
                        </div>

                        <div class="cp_iptxt">
                            <input id="address3" type="text" class="address" class="cp_iptxt" value="" placeholder="住所２">
                        </div>
                        <div class="cp_iptxt">
                            <input id="address4" type="text" class="address" value="" placeholder="マンション名等">
                        </div>
                    </div>
                </div> -->
                <!-- 遺言者の誕生日 -->
                <div>遺言の実行をお願いする人の生年月日
                    <input type="date" name="testator_birth" id="">
                </div>


                <!-- １段目 -->
                <div class="matome">
                    渡したい財産:
                    <select name="number1" class="number">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>番
                    <select name="property1" class="property">
                        <option value="">-</option>
                        <option value="不動産">不動産</option>
                        <option value="預貯金">預貯金</option>
                        <option value="株式">株式</option>
                        <option value="自動車">自動車</option>
                    </select>
                    <select name="relation1" class="relation">
                        <option value="">-</option>
                        <option value="子">子</option>
                        <option value="親">親</option>
                        <option value="甥">甥</option>
                        <option value="姪">姪</option>
                        <option value="相続人以外">相続人以外の方</option>
                    </select><br>
                    <label>渡す相手先の名前：<input type="text" name="name1"></label><br>
                    <ul>
                        <li><label for="souzoku"><input type="radio" name="method1" id="souzoku" value="相続させる" class="uname" checked>相続人の方に渡す</label></li>
                        <li><label for="izou"><input type="radio" name="method1" id="izou" value="遺贈する" class="uname">相続人以外に渡す</label></li>
                    </ul>
                </div>
                <!-- ２段目 -->
                <div class="matome">
                    渡したい財産：
                    <select name="number2" class="number">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>番
                    <select name="property2" class="property">
                        <option value="">-</option>
                        <option value="不動産">不動産</option>
                        <option value="預貯金">預貯金</option>
                        <option value="株式">株式</option>
                        <option value="自動車">自動車</option>
                    </select>
                    <select name="relation2" class="relation">
                        <option value="">-</option>
                        <option value="子">子</option>
                        <option value="親">親</option>
                        <option value="甥">甥</option>
                        <option value="姪">姪</option>
                        <option value="相続人以外">相続人以外の方</option>
                    </select><br>
                    <label>渡す相手先の名前：<input type="text" name="name2"></label><br>
                    <ul>
                        <li><label for="souzoku"><input type="radio" name="method2" id="souzoku" value="相続させる" class="uname" checked>相続人の方に渡す</label></li>
                        <li><label for="izou"><input type="radio" name="method2" id="izou" value="遺贈する" class="uname">相続人以外に渡す</label></li>
                    </ul>
                </div>
                <!-- ３段目 -->
                <div class="matome">
                    渡したい財産：
                    <select name="number3" class="number">
                        <option value="">-</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                    </select>番
                    <select name="property3" class="property">
                        <option value="">-</option>
                        <option value="不動産">不動産</option>
                        <option value="預貯金">預貯金</option>
                        <option value="株式">株式</option>
                        <option value="自動車">自動車</option>
                    </select>
                    <select name="relation3" class="relation">
                        <option value="">-</option>
                        <option value="子">子</option>
                        <option value="親">親</option>
                        <option value="甥">甥</option>
                        <option value="姪">姪</option>
                        <option value="相続人以外">相続人以外の方</option>
                    </select><br>
                    <label>渡す相手先の名前：<input type="text" name="name3"></label><br>
                    <ul>
                        <li><label for="souzoku"><input type="radio" name="method3" id="souzoku" value="相続させる" class="uname" checked>相続人の方に渡す</label></li>
                        <li><label for="izou"><input type="radio" name="method3" id="izou" value="遺贈する" class="uname">相続人以外に渡す</label></li>
                    </ul>
                    <div class="matome">
                        <label>寄付する金額：<input type="text" name="amount"></label><br>

                        <label>寄付先の正式名称：<input type="text" name="group_name"></label><br>
                        <label>寄付先の住所：<br><textArea name="group_address" rows="6" cols="40"></textArea></label><br>
                    </div>
                    <div class="matome">
                    <label>遺言執行者の名前：<input type="text" name="lawyer_name"></label><br>
                    <!-- 遺言執行者住所 -->
                    <label>遺言作成者の住所：<br><textArea name="lawyer_address" rows="6" cols="40"></textArea></label><br>
                    
                    <!-- <p class="cp_iptxt">遺言執行者の郵便番号：
                    <input id="input" class="zipcode" type="text" class="address" value="" placeholder="郵便番号">
                <div class="address_button">
                    <button id="search" type="button" class="address_search_button">住所検索</button>
                    <p id="error"></p>
                    </p>
                    <p>※住所検索ボタンを押すと住所が自動表示されます</p> -->
                    <!-- </div> -->
                    <!-- うまくいくか不明な点 -->
                    <!-- <div name="lawyer_address">
                    <div class="cp_iptxt">
                        <input id="address1" type="text" name="address1" class="cp_iptxt" value="" placeholder="都道府県">
                    </div>
                    <div class="cp_iptxt">
                        <input id="address2" type="text" name="address2" class="address" class="cp_iptxt" value="" placeholder="住所１">
                    </div>

                    <div class="cp_iptxt">
                        <input id="address3" type="text" name="address3" class="address" class="cp_iptxt" value="" placeholder="住所２">
                    </div>
                    <div class="cp_iptxt">
                        <input id="address4" type="text" name="address4" class="address" value="" placeholder="マンション名等">
                    </div>
                </div> -->
                    <!-- 遺言執行者の生年月日 -->
                    <div>遺言執行者の生年月日
                        <input type="date" name="lawyer_birth" id="">
                    </div>
                    </div>
                    <div class="matome">
                    <!-- 付言事項 -->
                    <div>家族に特に伝えたいこと：</div>
                    <div><textArea name="ps" rows="6" cols="40"></textArea></div><br>
                    </div>
                    <input type="submit" value="送信">



            </fieldset>
        </div>
    </form>
    <!-- Main[End] -->



    <script>
        $(function() {
            $("#textbox").bind("blur", function() {
                var _textbox = $(this).val();
                check_textbox(_textbox);
            });
        });

        function check_textbox(str) {
            $("#err_textbox p").remove();
            let _result = true;
            let _textbox = $.trim(str);

            if (_textbox.match(/^[ 　\r\n\t]*$/)) {
                $("#err_textbox").append("<p><i class=\"fa fa-exclamation-triangle\"></i>テキストボックスを入力してください。</p>");
                _result = false;
            } else if (_textbox.length > 50) {
                $("#err_textbox").append("<p><i class=\"fa fa-exclamation-triangle\"></i>テキストボックスは50文字以内で入力してください。</p>");
                _result = false;
            }
            return _result;
        }
    </script>

    <script>
        let search = document.getElementById('search');
        search.addEventListener('click', () => {

            let api = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=';
            let error = document.getElementById('error');
            let input = document.getElementById('input');
            let address1 = document.getElementById('address1');
            let address2 = document.getElementById('address2');
            let address3 = document.getElementById('address3');
            let param = input.value.replace("-", ""); //入力された郵便番号から「-」を削除
            let url = api + param;

            fetchJsonp(url, {
                    timeout: 10000, //タイムアウト時間
                })
                .then((response) => {
                    error.textContent = ''; //HTML側のエラーメッセージ初期化
                    return response.json();
                })
                .then((data) => {
                    if (data.status === 400) { //エラー時
                        error.textContent = data.message;
                    } else if (data.results === null) {
                        error.textContent = '郵便番号から住所が見つかりませんでした。';
                    } else {
                        address1.value = data.results[0].address1;
                        address2.value = data.results[0].address2;
                        address3.value = data.results[0].address3;
                    }
                })
                .catch((ex) => { //例外処理
                    console.log(ex);
                });
        }, false);
    </script>


</body>

</html>