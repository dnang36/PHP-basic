# PHP basic

## Introduction to Web technology
- Công nghệ web là một thuật ngữ chung đề cập đến nhiều ngôn ngữ và gói đa phương tiện được sử dụng kết hợp với nhau, để tạo ra các trang web. Mỗi công nghệ có chức năng riêng biệt và cần yêu cầu sử dụng kép ít nhất thêm một công nghệ khác. Do đó, có thể nói rằng tất cả các thành phần tạo nên một trang web phụ thuộc lẫn nhau.
  

## Introduction HTML5 and CSS
1. HTML
- HTML là gì? Là chữ viết tắt của Hyper Text Markup Language, tạm dịch là ngôn ngữ đánh dấu siêu văn bản và được sử dụng phổ biến trên Word Wide Web.
- HTML5 là phiên bản thứ 5 của HTML, cải tiến với nhiều tính năng hơn để mọi người có thể truy cập internet dễ dàng hơn, các Lập trình viên Lập trình trang Web nhanh chóng, hiệu quả hơn.
2. CSS
- CSS là gì?  Là viết tắt của Cascading Style Sheets, là dạng ngôn ngữ đi tìm và định dạng lại các phần tử được tạo ra bởi ngôn ngữ đánh dấu như HTML.
- Có 3 cách viết CSS: inline, internal, 
- 
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
- Mảng là các biến phức tạp cho phép chúng ta lưu trữ nhiều hơn một giá trị hoặc một nhóm các giá trị dưới một tên biến duy nhất.
- Có ba loại mảng trong PHP mà bạn có thể tạo. Đó là:
  - Indexed Array – Một mảng có number key.
  - Associative array (Mảng kết hợp) – Một mảng trong đó có key và value riêng
  - Multidimensional array (Mảng đa chiều) – Một mảng chứa một hoặc nhiều mảng trong chính nó.
- khai báo mảng:
- $ten_mang = array('a','b','c'); hoặc $ten_mang = ["a","b","c",];

## PHP Operator
1. Toán tử số học (Arithmetic Operator) trong PHP
- Các toán tử số học được sử dụng để thực hiện các phép toán số học phổ biến, chẳng hạn như cộng, trừ, nhân, chia v.v …
2. Toán tử gán (Assignment Operator) trong PHP
- Các toán tử gán được sử dụng để gán giá trị cho các biến.:
3. Toán tử so sánh (Comparison Operator) trong PHP
- Các toán tử so sánh được sử dụng để so sánh hai giá trị theo kiểu ĐÚNG hoặc SAI (Kiểu Boolean)
4. Các toán tử tăng và giảm trong PHP
- Các toán tử tăng (++) / giảm (–) được sử dụng để tăng / giảm giá trị của một biến.
5. Toán tử Logic (Logical Operator) trong PHP
- Các toán tử logic thường được sử dụng kết hợp trong các câu lệnh có điều kiện.
6. Toán tử chuỗi (String Operator) PHP
- Có hai toán tử được thiết kế riêng dành cho chuỗi trong PHP là . và .=

## Control Structures
1. if else
- Câu lệnh điều kiện if else cho phép ta thay đổi luồng của chương trình dựa trên một điều kiện nào đó. Nếu điều kiện là đúng (true) thì chương trình sẽ được thực hiện, ngược lại nếu điều kiện đưa ra là sai (false) thì nội dung công việc đó sẽ không được thực hiện.
```
if(điều kiện){
    // Code thực thi nếu điều kiện đúng
} else{
    // Code thực thi nếu điều kiện sai
}
```
2. else if
- Câu lệnh if…elseif…else là một câu lệnh đặc biệt được sử dụng để kết hợp nhiều câu lệnh if … khác nhau.
```
if(điều kiện 1){
    // Code thực thi nếu điều kiện 1 True
} elseif(điều kiện 2){
    // Code thực thi nếu điều kiện 1 False và điều kiện 2 True
} else{
    // Code thực thi nếu cả điều kiện 1 và điề kiện 2 đều sai
}
```
3. switch case.
- Câu lệnh Switch…Case kiểm tra một biến đối với một loạt các giá trị cho đến khi tìm thấy khớp, và sau đó thực thi khối mã tương ứng với khớp đó.
```
switch(n){
    case label1:
        // Code thực thi nếu n=label1
        break;
    case label2:
        // Code thực thi nếu if n=label2
        break;
    ...
    default:
        // Code thực thi nếu n không thuộc tình huống nào đưa ra.
}
```
## Loops
- Các vòng lặp được sử dụng để thực thi cùng một khối mã nhiều lần, cho đến khi một điều kiện nhất định được đáp ứng.
1. While
- Cú pháp:
```
while ($condition) {
    // dòng lệnh
}
```
- Trong đó $condition là điều kiện để dừng vòng lặp. Nếu $condition có giá trị false thì vòng lặp kết thúc, ngược lại vòng lặp sẽ tiếp tục lặp. Vòng lặp while sẽ lặp vô hạn nếu biểu thức điều kiện bạn truyền vào luôn luôn đúng.
- Vòng lặp while sẽ kiểm tra điều kiện trước rồi thực hiện câu lệnh bên trong vòng lặp,
2. do while
- vòng lặp do while sẽ thực hiện câu lệnh bên trong vòng lặp trước rồi mới kiểm tra điều kiện. Nếu điều kiện đúng thì sẽ thực hiện tiếp vòng lặp kế tiếp, nếu điều kiện sai thì sẽ dừng vòng lặp. Vòng lặp do while trong php luôn luôn thực hiện ít nhất một lần lặp vì nó thực hiện trước rồi mới kiểm tra điều kiện.
- Cú pháp:
```
do {
    // dòng lệnh
} while ($condition);
```
3. for
- Cú pháp:
```
for ($bien_dieu_khien; $bieu_thuc_dieu_kien; $bieu_thuc_thay_doi_bien_dieu_khien)
{
    // lệnh
}
```
- Trong đó:
 - $bien_dieu_khien: là một câu lệnh gán giá trị ban đầu cho biến điều khiển trước khi thực hiên vòng lặp, hoặc là một biến có giá trị sẵn mà ta đã truyền vào cho nó trước khi tạo vòng lặp này, lệnh này được thực hiện duy nhất một lần.
 - $bieu_thuc_dieu_kien: là một biểu thức quan hệ xác định điều kiện thoát khỏi vòng lặp.
 - $bieu_thuc_thay_doi_bien_dieu_khien: Xác định biến điều khiển sẽ bị thay đổi như thế nào sau mỗi lần lặp được lặp lại (thường là tăng hoặc giảm giá trị của biến điều khiển).
4. foreach
- Vòng lặp foreach trong php dùng để lặp các phần tử trong mảng
- Cú pháp:
```
foreach ($array as $key => $value){
    // Các dòng lệnh
}
//hoặc
foreach ($array as $value){
    // Các dòng lệnh
}
```

## String functions
1. strlen($string): lấy độ dài 1 chuỗi
2. strrev(): Đảo ngược chuỗi
3. strtolower(): chuyển toàn bộ chuỗi về chữ thường
4. strtoupper(): chuyển toàn bộ chuỗi thành chữ in hoa
5. str_repalce('find','replace','$string'): tìm và thay thế văn bản trong 1 chuỗi
6. str_repeat($string,repeat): Lặp lại chuỗi
## Array functions
1. array_push(): chèn phần tử vào cuối mảng
2. array_unshift(): chèn phần tử vào đầu mảng
3. array_pop(): xoá phần tử cuối mảng
4. array_shift(): xoá phần tử đầu mảng
5. count($ten_mang): đếm số phần tử trong mảng

## File handling
- Xử lý tệp là một phần quan trọng của bất kỳ ứng dụng web nào. Bạn thường cần mở và xử lý một tệp cho các tác vụ khác nhau.
1. fopen(command,mode); mở file
- Trong đó:
  - command là đường dẫn đến file các bạn muốn mở.
  - mode là quyền truy cập vào file.

2. fclose(); đóng file
3. 