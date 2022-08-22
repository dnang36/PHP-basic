# PHP basic

## PHP Introduction
- Ngôn ngữ PHP là từ viết tắt của Personal Home Page (hiện nay là Hypertext Preprocessor). Thuật ngữ này chỉ chuỗi ngôn ngữ kịch bản hay mã lệnh, phù hợp để phát triển cho các ứng dụng nằm trên máy chủ.

- Khi viết phần mềm bằng ngôn ngữ PHP, chuỗi lệnh sẽ được xử lý trên server để từ đó sinh ra mã HTML trên client. Và dựa vào đó, các ứng dụng trên website của bạn sẽ hoạt động một cách dễ dàng.
Người ta thường sử dụng PHP trong việc xây dựng và phát triển các ứng dụng website chạy trên máy chủ. Mã lệnh PHP có thể nhúng được vào trang HTML bằng cách sử dụng cặp thẻ PHP.

- Nhờ đó, website bạn phát triển dễ dàng kết nối được với các website khác trên hệ thống mạng internet.

- PHP cũng là ngôn ngữ lập trình mã nguồn mở và miễn phí. PHP tương thích với nhiều nền tảng khác nhau như Windows, MacOS và Linux, v.v.

## PHP Syntax
1. Cú pháp PHP chuẩn

- Một tập lệnh PHP (đoạn mã) bắt đầu bằng thẻ <?php và kết thúc bằng thẻ ? >

```
<?php
// Some code to be executed
echo "Hello, world!";
?>
```
- Mỗi câu lệnh PHP kết thúc bằng dấu chấm phẩy “;” – Điều này cho PHP Engine biết rằng đã kết thúc câu lệnh hiện tại.
2. Nhúng PHP vào HTML
- Các tệp PHP là các tệp văn bản đơn giản với phần đuôi mở rộng .php
- Bên trong tệp PHP, bạn có thể viết HTML giống như bạn làm trong các trang HTML thông thường cũng như nhúng mã PHP để thực thi phía máy chủ.
````
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>A Simple PHP File</title>
</head>
<body>
    <h1><?php echo "Hello, world!"; ?></h1>
</body>
</html>
````
- Ví dụ trên cho thấy cách bạn có thể nhúng mã PHP trong HTML
3. PHP comment
- Một comment chỉ đơn giản là đoạn văn bản bị bỏ qua bởi PHP Engine. Mục đích của các comment là giải thích đoạn mã đang làm cái gì.
- PHP hỗ trợ comment dòng đơn cũng như các comment nhiều dòng. Để viết một comment một dòng ta bắt đầu với 2 dấu gạch chéo “//” và để viết comment nhiều dòng, hãy bắt đầu comment bằng dấu gạch chéo và theo sau là dấu hoa thị /* rồi kết thúc comment bằng dấu hoa thị theo sau là dấu gạch chéo */, ví dụ như sau:
````
<?php
// comment 1 dòng 
/*
comment 
nhiều 
dòng
*/
?>
````

## PHP Datatypes
1. Kiểu int  (Dữ liệu kiểu số nguyên)
- $a =10;
2. Kiểu String (Dữ liệu kiểu chuỗi)
- $a = 'chuỗi';
3. Kiểu Float hoặc Double (Dữ liệu kiểu số thập phân)
- $a = 10,68686;
4. Kiểu Boolean
- nó chỉ chứa 2 giá trị là đúng hoặc sai (TRUE hoặc FALSE).
5. kiểu dữ liệu mảng (array)
- $a = ['nguyen','doan','dang];
6. Kiểu object

## PHP Variables, Constants and Array
1. PHP Variables.
- Các biến được sử dụng để lưu trữ dữ liệu, như chuỗi văn bản, số, v.v … Các giá trị biến có thể thay đổi trong quá trình xử lý. Dưới đây là một số điều quan trọng cần biết về các biến:
  - PHP tự động chuyển đổi biến thành kiểu dữ liệu chính xác, tùy thuộc vào giá trị của nó.
  - Sau khi khai báo một biến, bạn có thể sử dụng biến để làm việc.
  - Toán tử gán “=” được sử dụng để gán giá trị cho một biến.
- Biến trong PHP có thể được khai báo như thế này: 
  - $var_name = value;
2. Constants.
- Constant (Hằng số) là tên hoặc mã định danh cho một giá trị cố định.
- Hằng số giống như các biến, nhưng chúng không thể định nghĩa hoặc thay đổi.
- Các hằng số được định nghĩa bằng hàm: define("Tên hằng số","Giá trị").
3. Array