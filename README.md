## [Bài tập] Ứng dụng Product Discount Calculator
### Mục tiêu
Luyện tập tạo ứng dụng Web PHP và xử lý dữ liệu nhập vào từ form.

### Mô tả
Ứng dụng Product Discount Calculator được sử dụng để tính chiết khấu cho sản phẩm khi mua hàng online.

##### Trong trang đầu tiên, người dùng sẽ nhập vào các dữ liệu sau:

- Product Description: Mô tả của sản phẩm

- List Price: Giá niêm yết của sản phẩm

- Discount Percent: Tỷ lệ chiết khấu (phần trăm)

- Khi người dùng nhấn vào nút Calculate Discount (Tính chiết khấu) thì sẽ đi đến trang /display-discount và hiển thị kết quả.

##### Trang kết quả sẽ hiển thị các thông tin người dùng nhập vào, kèm theo kết quả tính toán:

- Discount Amount: Lượng chiết khấu

- Discount Price: Giá sau khi đã được chiết khấu

- Công thức tính chiết khấu là:

        Discount Amount = List Price * Discount Percent * 0.1


#### Các bước thực hiện
- Bước 1: Tạo Route có url.
- Bước 2: Tạo form bằng ngôn ngữ HTML để người dùng nhập vào các trường dữ liệu.
Bao gồm:

    - Form có method là POST, có action trỏ đến url của route đac tạo ở bước 1.
    - Ô input Product Description cho người dùng nhập vào mô tả của sản phẩm.
    - Ô input List Price cho người dùng nhập vào giá.
    - Ô input Discount Percent cho người dùng nhập vào giá chiết khấu.
- Bước 3: Sử lý tính toán.
    - Tại route, sử dụng class Illuminate/Request để nhận các dữ liệu được gửi lên từ form khi người dùng nhấn nút Submit, đồng thời viết code sử lý tính toán Discount Amount theo công thức bên trên và trả về kết quả cho người dùng.

Gợi ý: Sử dụng cú pháp sau để trả về kết quả ra view.

    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
Bước 4: Tạo view hiển thị kết quả.
Gợi ý: Ở bước trên chúng ta sử dụng 
         
    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent'])); để đưa kết quả ra view, vì vậy tại view chúng ta sẽ sử dụng cú pháp {{ $discountAmount }} để hiển thị giá trị của biến $discountAmount lên màn hình, tương tự để hiển thị các dữ liệu khác.

Demo: http://demo.codegym.vn/lamp/1/product_discount/
