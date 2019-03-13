### 使用Docker啟用Laravel
```console
docker-compose up
```

### 問題1

> 您正在爬樓梯，樓梯具有 n 層階梯，您可以一次爬 1 層階梯，或是一次爬 2 層階梯，請問 n 層階梯有多少種方法可以登頂？請使用 PHP 寫出解決方案。

```console
http://localhost/calc
```

### 問題2.1

> 小明任職於一家做電商的新創公司，銷售的商品會上架於 Pchome, Yahoo, Ruten, Shopee 拍賣平台，小明的任務是當一個產品發佈(publish)的時候，能夠馬上通知所有平台產品已經發布，當平台收到通知後就會回傳「Pchome 已收到商品發佈通知」字樣，Yahoo, Ruten, Shopee 以此類推，並且可以隨時增加、減少任一個通路的通知，比如拿掉 Yahoo，新增 Shopee 的通路，請您設計出一個可以隨時增加、減少需求的程式碼架構，幫助小明達到此功能！

```console
POST /api/product
form-data:['title'='商品名稱','price'='價格']
```

1) App\Stores 存放各賣場程式邏輯
2) App\Product.php 發布產品的程式邏輯

### 問題2.2
> 承上題，小明終於完成了主管的需求，但是每一次需求的變更下，都需要手動測試是否正常運作，請您再次幫助小明，撰寫一個自動化測試的檔案 Test.php，當中請驗證 Pchome, Yahoo, Ruten, Shopee 是否正常，以及驗證增加、減少平台也能夠正確執行！

1) **進入容器**
```console
docker exec -it laravel bash
```
2) **單元測試**
```console
phpunit
```