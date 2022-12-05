@extends('welcome')
@section('content')

<div class="col-sm-12">
    <div class="blog-post-area">
        <h2 class="title text-center">MỚI NHẤT TỪ BLOG CỦA CHÚNG TÔI</h2>
        <div class="single-blog-post">
            <h3>Những Sản Phẩm Mới Nhất 2022</h3>
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i>Ngọc Hải</li>
                    <li><i class="fa fa-clock-o"></i> 1:35 pm</li>
                    <li><i class="fa fa-calendar"></i> Oct 10, 2022</li>
                </ul>
                <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                </span>
            </div>
            <a href="">
                <img src="{{URL::to('public/frontend/images/a18.jpg')}}" alt="">
            </a>
            <p>
            Đầu tư vào một bộ PC đúng cách luôn là vấn đề nan giải đối với dân công nghệ nói chung và game thủ nói riêng. 
            Bởi vì nếu không tìm hiểu hoặc được tư vấn kỹ lưỡng, các bạn sẽ rất dễ bỏ tiền ra mua những linh kiện không thật sự phù hợp với nhu cầu sử dụng, 
            hoặc thậm chí máy tính không hoạt động tốt như mong muốn so với số tiền bỏ ra.
            </p>
            <a  class="btn btn-primary" href="">Đọc Thêm</a>
        </div>
        <br><br>

        <div class="single-blog-post">
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> Ngọc Hải </li>
                    <li><i class="fa fa-clock-o"></i> 1:33 pm</li>
                    <li><i class="fa fa-calendar"></i> Oct 10, 2022</li>
                </ul>
                <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                </span>
            </div>
            <a href="">
                <img src="{{URL::to('public/frontend/images/a1.jpg')}}" alt="">
            </a>
            <p>
            Hiểu được điều đó, N6-Strore chúng tôi đã tạo ra sẵn rất nhiều bộ PC khác nhau dành cho từng phân khúc người dùng với từng mức tiền khác nhau để bạn có thể thoải mái và dễ dàng lựa chọn một bộ PC phù hợp với mình mà không sợ lựa chọn sai hoặc đầu tư phí tiền.
            Bộ PC gaming lần này mà N6-Strore muốn giới thiệu tới các bạn có tên là GVN Minion i380, 
            nhằm hướng tới phân khúc người dùng phổ thông nhưng vẫn đảm bảo hiệu năng tốt.
            </p>
            <a  class="btn btn-primary" href="">Đọc Thêm</a>
        </div>
        <br><br>

        <div class="single-blog-post">
            <div class="post-meta">
                <ul>
                    <li><i class="fa fa-user"></i> Ngọc Hải </li>
                    <li><i class="fa fa-clock-o"></i> 1:36 pm</li>
                    <li><i class="fa fa-calendar"></i> Oct 5, 2022</li>
                </ul>
                <span>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star"></i>
                        <i class="fa fa-star-half-o"></i>
                </span>
            </div>
            <a href="">
                <img src="{{URL::to('public/frontend/images/a20.jpg')}}" alt="">
            </a>
            <p>
            GVN Minion i380 sở hữu hiệu suất cao với CPU đến từ đội xanh với chíp xử lý Intel Core i3 10105F (4 nhân/8 luồng).
             Với ưu thế vượt trội về số nhân lẫn số luồng cùng khả năng ép xung mạnh mẽ, bạn hoàn toàn có thể tin tưởng vào khả năng xử lý đa tác vụ lẫn chơi các tựa game đòi hỏi tài nguyên CPU lớn mà không sợ gặp tình trạng vi xử lý hoạt động quá mức.
            </p>
                 <a  class="btn btn-primary" href="">Đọc Thêm</a>
        </div>
        
        <div class="pagination-area">
            <ul class="pagination">
                <li><a href="" class="active">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href=""><i class="fa fa-angle-double-right"></i></a></li>
            </ul>
        </div>
    </div>
</div>

@endsection