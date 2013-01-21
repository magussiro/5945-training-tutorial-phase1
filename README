
以下是簡易的 php 題目：


h1. RD training tutorial phase1
 
 
h2. Codeigniter & Database training tutorial phase1
 
過程中有看不懂、有問題的地方請隨時找 Tony 討論。
 
1.Install Apache/Php/Mysql
 
> 基礎環境建設
> * win:http://www.wampserver.com/en/
> * mac:http://www.mamp.info/de/index.html
> * linux:搜尋 distribution name & LAMP
 
 
2. 安裝 codeigniter
 
> 先試著裝在 /var/www (mac/linux) or c:/wamp/www (win) 底下的 test folder，
> 並用 http://localhost/test 進行測試。
> 
> 官網：http://www.codeigniter.org.tw/
> 安裝教學：http://www.codeigniter.org.tw/user_guide/installation/index.html
 
 
3. 建立 5945forum database 
 
* 請試著在 local mysql 用 WAMP 或 MAMP 裡面附帶的 phpmyadmin 操作建立 table
  （沒有的話就裝一下）
 
4. 試著 create 5945Post table , 欄位表列如下 (如果欄位說明看不懂，請找 Tony。)
 
> //型別 欄位名稱 其他屬性(null 表示可允許 null)
> * bigint PostID auto-increasement Primary key,
> * varchar(50) UserName  null
> * varchar(100) UserEmail null
> * text Content null
> * bigint Category null  
> * timestamp CreateDate default current_timestamp() null
> * timestamp ModifyDate null
 
5. 實作留言清單
 
> 建立 http://localhost/test/index.php/post/index 頁面
> 
> * 在資料庫先建立 Post 資料表的假資料一筆
> * 建立 Post Controller
> * 實作 Post#index 函式，包括以下部份：
> ** 設定 codiginter database.php 
> ** 實作 PostModel （設定 autoload 預設載入 database libraries )
> ** controller 函式實作
> ** view (html+css+JS) 
> ** 先不用考慮分頁
> ** 要至少練習建立一個外部 css 的連接，將 style 的部份抽離 view，請務必引入bootstrap 。
> 
> 
> 參考資料：
> 
> 如何建立view 
> http://ithelp.ithome.com.tw/question/10102961
> 
> 如何設定 database.php 與建立 model 
> http://ithelp.ithome.com.tw/question/10103302
> 
> 
註：做完這步請找 Tony 討論。
 
 
6. 實作發文動作
 
＠表單頁：
 
> 建立 http://localhost/test/index.php/post/new_ 頁面
> * 實作 Post#new_ 函式
> * 實作 Post#new_ 頁面
> ** controller
> ** view (html+css+js)
> ** 表單欄位是 "使用者姓名"、"Email"、"發文內容" ，
> 要做 client 表單驗證（只要檢查 使用者姓名、發文內容 不得為空即可）
> 
> 驗證效果不限，能達到目的就好。(alert/info..etc)
 
＠遞交頁：(Form 的 action page )
 
> 建立 http://localhost/test/index.php/post/create 頁面
> * 實作 Post#create 函式
> ** controller
> ** view (html+css+js) 
> ** server side validation ：
> 檢查 使用者姓名、發文內容 不得為空。
> 
> 如果驗證失敗，請跳回表單頁、呈現錯誤訊息，
> 並保留所有使用者輸入內容。
> 
> ** 如果發文成功，將使用者輸入的資料新增進 5945Post table (注意，要一併更新 modify date)，
> 並轉回 http://localhost/test/index.php/post/index 頁。
> 
 
-------
到這應該入門 php 玩家可在最多 8 小時內完成，完全沒碰過的新手估計 16小時。
 
如果有碰到任何問題或者覺得這時間不夠(ex.不熟、需要survey)，
請務必在時間到（八小時）之前內提出反應並說明，時間可延長。
 
因為時間有限，所以 UI 設計以達到目標為原則，不用刻意做得太 fancy。
（要做也行，時間內可以完成就好。）
