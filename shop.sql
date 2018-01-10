-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2018 lúc 05:39 AM
-- Phiên bản máy phục vụ: 10.1.26-MariaDB
-- Phiên bản PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `account`
--

CREATE TABLE `account` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `permission` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `account`
--

INSERT INTO `account` (`id`, `email`, `password`, `fullname`, `address`, `phone`, `permission`) VALUES
(1, 'nguyentuan96ttbn@gmail.com', '123456789', 'Nguyen Tuan', 'Ha Noi', '0123456789', 0),
(2, 'ngoxuanloc@mail.com', '123456789', 'Xuan Loc', 'Ha Noi', '0916666666', 0),
(3, 'nguyenvanson@mail.com', '123456789', 'Nguyen Son', 'Ha Noi', '0968888888', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `visible` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `visible`) VALUES
(0, 'Unknown', 0),
(1, 'Smartphone', 0),
(2, 'External memory', 0),
(3, 'Selfie stick', 0),
(4, 'Battery', 0),
(5, 'Screen protector', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `create_at` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `discount` int(11) NOT NULL,
  `begin_at` int(20) NOT NULL,
  `expire_at` int(20) NOT NULL,
  `used` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `discount`, `begin_at`, `expire_at`, `used`) VALUES
(1, 'D171259', 5, 0, 0, 0),
(2, 'D180110', 10, 0, 0, 0),
(3, 'D180115', 15, 0, 0, 0),
(4, 'D180120', 20, 0, 0, 0),
(5, 'D180130', 30, 0, 0, 0),
(6, 'D180140', 40, 0, 0, 0),
(7, 'D180145', 45, 0, 0, 0),
(8, 'D180150', 50, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `view` int(11) NOT NULL,
  `create_at` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `news`
--

INSERT INTO `news` (`id`, `account_id`, `title`, `image`, `content`, `view`, `create_at`) VALUES
(1, 1, 'Surface Phone sẽ có một cuộc \"cách mạng\" với bộ camera mới?', 'anh1.jpg', 'Surface Phone dự kiến không chỉ là một smartphone mạnh mẽ mà nó có thể sẽ trở thành một máy ảnh chuyên nghiệp. Mới đây bằng sáng chế của Microsoft xuất hiện đã chứng minh điều đó.\r\n\r\nChiếc smartphone Surface Phone có thể sẽ ra mắt trong năm 2018 này, và ngày càng có nhiều dấu hiệu cho thấy Microsoft đang muốn trở lại mảng di động. Gần đây, một bằng sáng chế mới đã xuất hiện cho thấy sẽ có bộ camera \"khủng\" gắn trên chiếc smartphone của Microsoft.\r\n\r\nBằng sáng chế này được phát hiện bởi MS Power User, nó mô tả Surface Phone trang bị một camera cao cấp cho dù nó có khung vỏ mỏng. Suy đoán từ nguồn tin cho rằng Surface Phone chỉ dày 6 mm khi mở ra, điều này cho thấy không gian rất hạn chế để có thể lắp đặt được một máy ảnh mạnh mẽ.', 105, 0),
(2, 1, 'Trên tay và đánh giá nhanh Galaxy J2 Pro (2018): Kẻ kế thừa J2 Prime', 'anh2.jpg', 'Galaxy J2 Pro (2018) là sản phẩm vừa ra mắt nhằm kế vị Galaxy J2 Prime - chiếc smartphone luôn nằm trong danh sách bán chạy của Thế Giới Di Động. Galaxy J2 Pro có gì ấn tượng hay không, hãy cùng mình trên tay và đánh giá nhanh sản phẩm này ngay sau đây.\r\n- Thiết kế đẹp, bản sao của Galaxy J7 Pro\r\n- Màn hình 5 inch, độ phân giải qHD\r\n- Camera trước, sau cải tiến nhẹ\r\n- Cấu hình nâng cấp', 125, 0),
(3, 1, 'TOP 5 smartphone màu độc, giá từ 6 triệu đáng sắm dịp đầu năm', 'anh3.jpg', 'Những tông màu như Trắng, Đen hay Vàng Champagne đã dần trở nên nhàm chán đối với nhiều bạn vì đa phần các mẫu smartphone đang được bán trên thị trường thường sở hữu 1 trong 3 tông màu phổ biến này.\r\n\r\nChính vì vậy nếu muốn có một chú dế trung cấp với cấu hình tốt và sở hữu phiên bản màu độc ít đụng hàng, đây là 5 sản phẩm mà bạn nên tham khảo qua.\r\n\r\n- Xiaomi Mi A1 Đỏ (Giá tham khảo: 5.99 triệu đồng)\r\n- Huawei Nova 2i Xanh Rạng Đông (Giá tham khảo: 5.99 triệu đồng)\r\n- OPPO F5 Đỏ (Giá tham khảo: 6.99 triệu đồng)\r\n- Samsung Galaxy J7 Pro Xanh Ánh Bạc (Giá tham khảo: 6.99 triệu đồng)\r\n- Sony Xperia XA1 Ultra Hồng Quyến Rũ (Giá tham khảo: 7.49 triệu đồng)\r\n\r\n', 201, 0),
(4, 1, 'Nokia 6 (2018) sẽ được cập nhật Android 8.0 Oreo ngay lần khởi động', 'anh4.jpg', 'HMD đã chính thức ra mắt phiên bản Nokia 6 (2018) vào ngày 5/1 vừa qua với một số thay đổi về thiết kế và nâng cấp khá mạnh mẽ trong cấu hình của máy.\r\n\r\nTheo Gizchina, thay đổi mạnh mẽ nhất về mặt thiết kế trên Nokia 6 (2018) so với Nokia 6 (2017) chính là bỏ cảm biến vân tay và nút Home mặt trước, đưa cảm biến vân tay ra mặt sau. Các nút điều hướng sẽ đưa vào trong màn hình.\r\n\r\nNgoài thiết kế, Nokia 6 (2018) sẽ tích hợp sẵn Android 7.1.1 Nougat, điều này nghe có vẻ thất vọng, mặc dù Android Oreo đã được tung ra một thời gian. Tuy nhiên, HMD đã hứa sẽ cập nhật Oreo sớm nhất có thể.\r\n\r\nGiữ lời hứa của mình, báo cáo mới đây từ Trung Quốc cho biết, Nokia 6 (2018) sẽ được lên đời Android Oreo ngay trong lần khởi động đầu tiên. Ngoài ra, Nokia 6 (2018) tại Trung Quốc cung sẽ đi kèm với một số dịch vụ của Google nhưng sẽ không thể gỡ cài đặt.', 320, 0),
(5, 1, 'Hướng dẫn giấu ứng dụng, ảnh, video, tệp tin trên iPhone', 'anh5.jpg', 'Màn hình chủ của iPhone là nơi trưng bày hàng chục ứng dụng do người dùng tải về. Và dĩ nhiên khi muốn chúng không xuất hiện, bạn phải xóa đi. Hôm nay mình sẽ giới thiệu bạn một ứng dụng, không chỉ giúp ẩn ứng dụng khác ở màn hình chủ, còn hỗ trợ giấu video, ảnh, và nhiều dữ liệu khác.\r\nỨng dụng mình muốn nhắc đến là Locker, hiện ứng dụng đang được tải miễn phí tại Appstore.\r\nSau khi tải về, bạn mở Locker lên và thiết lập mã Pin bao gồm 4 số, ngoài ra Locker còn cho phép người dùng sử dụng Touch ID để mở khóa. Vì đây là ứng dụng miễn phí nên ngay tại giao diện chính có xuất hiện quảng cáo từ nhà phát triển.\r\n\r\nCách ẩn ứng dụng khỏi màn hình chủ iPhone\r\n\r\nĐể giấu ứng dụng trên iPhone, sau khi mở và kích hoạt Locker, bạn thực hiện chọn dấu + New App xuất hiện tại thẻ Apps. Sau đó, trên thanh tìm kiếm App name, tìm và chọn ứng dụng cần ẩn. \r\nQuay lại màn hình chủ, bạn bấm giữ ứng dụng cho đến khi chuyển sang chế độ cho phép di chuyển, và không thả tay ra. \r\n\r\nCùng lúc đó hãy nhấn giữ phím Home để kích hoạt Siri, kéo ứng dụng và giao diện Siri và thả tay ra là bạn đã có thể thực hiện giấu ứng dụng rồi. \r\nSau này khi muốn mở App, màn có thể vào Locker để chọn mở hoặc có thể sử dụng đến thanh tìm kiếm Spotlight.', 230, 0),
(6, 1, '7 game Android kinh điển miễn phí, hay nhất cho ngày cuối tuần', 'anh6.jpg', 'Hàng trăm tựa game hấp dẫn xuất hiện trên CH Play mỗi tháng. Một số đến từ các studio game nổi tiếng, số khác đến từ các nhà phát triển nhỏ. Hôm nay mình sẽ tiếp tục giới thiệu 7 tựa game Android kinh điển và hay nhất, mời các bạn tham khảo bên dưới.', 115, 0),
(7, 1, 'Samsung và TSMC có thể sản xuất chip 4 nm vào năm 2020', 'anh7.jpg', 'Các báo cáo từ Trung Quốc cho hay, sự cạnh tranh giữa Samsung và TSMC có thể dẫn đến cuộc chạy đua sản xuất chip xử lý 5 nm và thậm chí là 4 nm vào năm 2020. TSMC tuyên bố đã ký kết được hơn 40 khách hàng trong năm nay, trong đó có việc sản xuất các linh kiện của iPhone và Snapdragon 855 của Qualcomm.\r\n\r\nTSMC hiện đang nắm giữ khoảng 60% thị phần chip di động trên toàn cầu, so với 10% của Samsung. Tuy nhiên cả 2 \"ông lớn\" này dự kiến sẽ tung ra bộ vi xử lý được sản xuất trên quy trình 7 nm trong năm nay và Samsung dự định chiếm 25% thị phần trong 5 năm tới.\r\n\r\nTrong nhiều năm trở lại đây, chúng ta đã thấy chip di động đã có nhiều bước tiến mạnh mẽ, đặc biệt kích thước của nó ngày càng nhỏ đi và hiệu suất ngày càng tăng lên. Tuy nhiên, việc chuyển đổi quy trình sản xuất 11 nm hiện tại xuống còn 7 nm và thậm chí là 5 hoặc 4 nm sẽ là một thách thức đối với cả Samsung và TSMC.\r\n\r\nHiện tại, TSMC đã có kế hoạch sửa đổi quy trình 7 nm của họ bằng cách sử dụng tia cực tím trong sản xuất. Việc này sẽ giúp công ty TSMC tiến tới sản xuất chip 5 nm vào năm 2020 dễ dàng hơn. Nếu nguồn tin trên là đúng, họ sẽ bắt đầu thử nghiệm trong năm 2019. Mặt khác, Samsung cũng có kế hoạch dần chuyển từ 6 nm xuống 5 nm trong năm 2019 trước khi đạt mức 4 nm vào năm 2020.\r\n\r\nNgoài ra, TSMC sẽ bắt đầu sản xuất chip 3 nm để đối đầu với chip 4 nm của Samsung. Theo nguồn tin này, sẽ có khoảng đầu tư dự kiến 200 tỷ USD vào các dây chuyền sản xuất nói trên. Với tất cả điều đó, điều quan trọng là thách thức sẽ được khắc phục trên con đường phát triển của họ. Chúng ta hãy chờ cho đến khi Samsung và TSMC tiết lộ kế hoạch chi tiết của họ.', 120, 0),
(8, 1, 'CES 2018: LG sẽ ra mắt TV màn hình OLED 65 inch uốn dẻo được', 'anh8.jpg', 'Cách đây 2 năm, LG Display đã giới thiệu màn hình OLED 18 inch có thể uốn cong và cuộn lại như một tờ báo. Ngày nay, màn hình đó đã tăng kích thước lên đến 65 inch. Tại CES 2018, LG sẽ trưng bày màn hình OLED uốn dẻo này với kích thước 65 inch cùng độ phân giải 4K.\r\n\r\nVậy lý do gì mà chúng ta lại muốn một TV dẻo có thể cuộn lại? Vì nó làm cho việc cất giuwx và vận chuyển dễ dàng hơn. Màn hình trên có độ dẻo nhất định để cho ta có thể cuộn lại theo một mức độ nào đó, ngoài ra màn hình trên được cấu tạo từ các chất hữu cơ làm cho nó thân thiện với môi trường.\r\n\r\nChúng ta không có nhiều thông tin ngoài việc biết được sự có mặt của sản phẩm này, nhưng chắc chắn rằng màn hình này sẽ có mặt tại CES 2018 và hãy chờ đợi xem nó còn có điều gì đặc biệt khác nữa nhé.', 511, 0),
(9, 1, 'Đánh giá laptop Acer Aspire 3 A315 51 31X0: Thiết kế mạnh mẽ, cấu hình đủ chơi DOTA 2', 'anh9.jpg', 'cấu hình mà chúng mang lại. Vậy với chiếc Aspire 3 A315 51 31X0 (Trong bài viết xin phép gọi tắt là Aspire 3 A315) thuộc phân khúc 10 triệu đồng, Acer sẽ mang đến điều gì cho người dùng phổ thông chúng ta?\r\n\r\nƯu điểm:\r\n\r\nThân máy mỏng, dễ di chuyển.\r\nThiết kế mạnh mẽ, có pha chút laptop gaming.\r\nMàn hình độ phân giải FullHD (1920x1080), có công nghệ giảm ánh sáng xanh.\r\nKhả năng tản nhiệt tốt.\r\nDễ dàng nâng cấp RAM mà không sợ mất tem bảo hành.\r\nCó sẵn Windows 10 Single Language bản quyền.\r\n\r\nNhược điểm:\r\n\r\nVỏ máy bằng nhựa.\r\nBàn phím chưa đã tay, kêu khá to.\r\nTrackpad khá nông, còn rít tay.\r\nThời gian khởi động máy lâu.', 221, 0),
(10, 1, 'CES 2018: Acer trình làng Swift 7, chiếc laptop mỏng nhất thế giới.', 'anh10.jpg', 'Acer đã khởi đầu năm 2018 bằng cách ra mắt một trong những chiếc laptop mỏng nhất thế giới tại CES 2018. Nó có tên gọi Swift 7 (SF714-51) và chỉ dày 8.98 mm.\r\n\r\nTheo Cnet, Acer tuyên bố rằng đây là chiếc laptop mỏng nhất thế giới và nó sẽ được bán ra trong tháng 4 với giá 1.699 USD (khoảng 38 triệu đồng).\r\n\r\nKhông thể phủ nhận Acer Swift 7 có thiết kế đẹp mắt, khung vỏ nhôm màu đen sang trọng và chắc chắn, màn hình 14 inch với viền cạnh mỏng. Ngoài ra, nó cũng hỗ trợ kết nối mạng 4G LTE.\r\n\r\nAcer Swift 7 có nhiều lợi thế cạnh tranh nhờ vào thiết kế siêu mỏng nhẹ, kết nối mọi lúc mọi nơi. Tuy nhiên nó chỉ dùng vi xử lý Intel thế hệ 7, nhưng giá cả vẫn khá cao.\r\n\r\nCấu hình cụ thể:\r\n\r\nVi xử lý Intel Core i7 thế hệ 7.\r\nỔ SSD 256 GB.\r\nRAM 8 GB LPDDR3.\r\nHỗ trợ 4G LTE.\r\nMàn hình cảm ứng 14 inch độ phân giải Full HD.\r\nThời lượng pin 10 giờ.\r\nHỗ trợ cảm biến vân tay.', 622, 0),
(11, 1, 'Mẹo tạo mọi bài hát yêu thích làm nhạc chuông, làm 100% trên iPhone', 'anh11.jpg', 'Đổi nhạc chuông là việc mà người dùng iPhone nào cũng muốn, nhưng để làm được thì không dễ dàng như trên các nền tảng khác. Hôm nay, mình sẽ hướng dẫn các bạn cách làm đơn giản nhất, thao tác trực tiếp 100% trên iPhone và chỉ dẫn các bước cụ thể nhất. Đảm bảo bạn nào xem xong cũng có thể làm được ngay, chúng ta cùng bắt đầu nhé!\r\n\r\nĐầu tiên, các bạn tải về ứng dụng Documents TẠI ĐÂY.\r\nMở app lên, bấm vào tab Trình duyệt \r\nTruy cập địa chỉ: https://www.onlinevideoconverter.com/video-converter\r\n\r\nCác bạn quay ra màn hình chính, mở ứng dụng YouTube lên, tìm video yêu thích muốn cài làm nhạc chuông.\r\n\r\nBấm vào nút chia sẻ video yêu thích, chọn Sao chép liên kết của video.\r\n\r\nNOTE: Ngoài YouTube thì các bạn có thể sao chép mọi link bài hát yêu thích tại các trang nghe nhạc phổ biến như ZingMP3, NCT, Chia sẻ nhạc, ...\r\n\r\nCác bạn dán liên kết video vào ô bên dưới, chọn định dạng nhạc tải về là .m4a hoặc mp3. \r\n\r\nBấm Tải xuống > Save.\r\nChờ tải bài nhạc về và hoàn tất.\r\nMở ứng dụng GarageBand lên:\r\n\r\n1: Chọn mục BỘ THU ÂM THANH > Bấm vào phần Giọng.\r\n2: Tích vào icon như hình dưới.\r\n3: Bấm vào icon chọn bài hát.\r\nXuất hiện cửa sổ danh sách bài hát > Chọn phần Tệp âm thanh > Duyệt các mục từ ứng dụng tệp.\r\n5: Chọn mục Documents.\r\n6: Bấm chọn bài hát vừa tải về ở bước trên.\r\n7: Xuất hiện bài nhạc đã chọn.\r\n8: Nhấn giữ bài nhạc đó kéo vào giao diện hình chiếc Micro. Tại đây các bạn điều chỉnh độ dài nhạc chuông (dưới 30s) và cắt đoạn yêu thích của bài hát làm nhạc chuông.\r\n9: Các bạn bấm icon hình tam giác góc trái > Bấm Bài hát của tôi.\r\n10: Phần mềm sẽ tiến hành lưu lại đoạn nhạc chuông.\r\n11: Các bạn nhấn giữ vào nhạc chuông vừa tạo > Chọn Chia sẻ > Chọn Nhạc chuông.\r\nLúc này các bạn có thể chọn bài hát đó làm Nhạc chuông, Âm báo, Gán nhạc chuông cho từng liên hệ.\r\nSau khi chọn xong, các bạn ra ngoài màn hình chính, vào phần Cài đặt > Âm thanh & cảm ứng > Nhạc chuông > Kiếm tra và tận hưởng thành quả nhé!\r\nNhư vậy là bài hát yêu thích của bạn đã thành nhạc chuông yêu dấu trên iPhone rồi. Với cách này bạn có thể tạo mọi bài hát yêu thích làm nhạc chuông, âm báo hệ thống... rất nhanh và tiện lợi vì làm trực tiếp hoàn toàn trên iPhone.\r\n\r\nNếu các bạn thấy hữu ích thì nhớ chia sẻ cho bạn bè cùng biết để ủng hộ bài viết nhé!', 502, 0),
(12, 1, '\"Sửa chữa\" Facebook là mục tiêu trong năm 2018 của CEO Mark Zuckerberg', 'anh12.jpg', 'Trang Reuters mới đây cho biết, Mark Zuckerberg - CEO Facebook đã chia sẻ vào hôm thứ năm (4/1) rằng: Mục tiêu trong năm 2018 của ông sẽ là đưa việc kinh doanh lên một chỗ đứng vững chắc hơn cũng như sẽ \"sửa chữa\" Facebook để phù hợp với cả thế giới.\r\n\r\n\"Thế giới đang cảm thấy lo lắng và chia rẽ, và Facebook có rất nhiều việc phải làm\", Mark đã chia sẻ thông điệp này lên trang cá nhân của mình.\r\n\r\nĐiều đó cho thấy, ngoài những mục tiêu dài hạn đã đặt ra từ lâu như học tiếng Quan Thoại (ngôn ngữ của gia đình vợ), đọc 2 cuốn sách mỗi tháng và chu du đến các tiểu bang chưa từng đến ở Mỹ thì vị CEO 33 tuổi này còn muốn đổi mới Facebook.\r\n\r\nĐược biết hiện tại ở một số quốc gia phương Tây, Facebook đang bị chỉ trích là một công cụ làm tiêu tốn thời gian và phát tán những thông điệp thù địch vô kiểm soát.\r\n\r\nTrong khi ở Đức, người ta đã bắt đầu ban hành những đạo luật yêu cầu các mạng xã hội như Facebook và Twitter phải kiểm duyệt, loại bỏ những bài đăng có tính thù địch, khiêu khích cộng đồng nếu không sẽ nhận án phạt. Thì ở Mỹ, Facebook đã bị lên án vì để Nga can thiệp vào cuộc bầu cử năm 2016 bằng công cụ này.\r\n\r\nNhư vậy có thể thấy, việc CEO Mark Zuckerberg phải đăng đàn giải bày và đặt ra mục tiêu mới để phát triển Facebook là vô cùng cần thiết.\r\n\r\nÔng cho biết, \"thách thức cá nhân trong năm 2018 sẽ là sửa chữa những vấn đề quan trọng\", \"chúng tôi sẽ không thể ngăn chặn hết những (bài đăng có tính chất) sai lầm và lạm dụng nhưng Facebook đang cố làm nhiều thứ để hạn chế điều này\".', 256, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `content` longtext,
  `discount` int(11) NOT NULL,
  `expire_discount` int(11) NOT NULL,
  `price` int(20) NOT NULL,
  `create_at` int(11) NOT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `category_id`, `supplier_id`, `name`, `image`, `content`, `discount`, `expire_discount`, `price`, `create_at`, `view`) VALUES
(1, 1, 5, 'Điện thoại Sony Xperia XZ Premium', 'anh5.jpg', 'Sony Xperia XZ Premium là flagship của Sony trong năm 2017 với vẻ ngoài hào nhoáng, màn hình cao cấp cũng nhiều trang bị hàng đầu khác.\r\n\r\nThiết kế đậm chất Sony\r\n\r\nSony Xperia XZ Premium vẫn mang trong mình phong cách thiết kế tương tự đàn anh XZ. Điểm nhấn lớn nhất của máy chính là mặt lưng được làm từ kính cường lực Corning Gorilla Glass 5 sáng bóng và nổi bật.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 5.5\", Ultra HD (4K)\r\nHệ điều hành:	Android 8.0\r\nCamera sau:	19 MP\r\nCamera trước:	13 MP\r\nCPU:	Qualcomm Snapdragon 835 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:	2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nDung lượng pin:	3230 mAh, có sạc nhanh', 5, 0, 0, 0, 0),
(2, 1, 2, 'Điện thoại Samsung Galaxy S8 Plus', 'anh6.jpg', 'Galaxy S8 và S8 Plus hiện đang là chuẩn mực smartphone về thiết kế trong tương lai. Sau nhiều ngày được sử dụng, mình xin chia sẻ những cảm nhận chi tiết nhất về chiếc Galaxy S8 Plus - thiết bị đang có doanh số đặt hàng khủng nhất hiện tại.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	Super AMOLED, 6.2\", Quad HD+ (2K+)\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	12 MP\r\nCamera trước:	8 MP\r\nCPU:	Exynos 8895 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3500 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(3, 1, 1, 'Điện thoại iPhone X 256GB', 'anh1.jpg', '\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Jack chuyển tai nghe 3.5mm, Cáp, Cây lấy sim\r\niPhone X được Apple ra mắt ngày 12/9 vừa rồi đánh dấu chặng đường 10 năm lần đầu tiên iPhone ra đời. Sau một thời gian, giá iPhone X cũng được công bố. iPhone X mang trên mình thiết kế hoàn toàn mới với màn hình Super Retina viền cực mỏng và trang bị nhiều công nghệ hiện đại như nhận diện khuôn mặt Face ID, sạc pin nhanh và sạc không dây cùng khả năng chống nước bụi cao cấp.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	OLED, 5.8\", Super Retina\r\nHệ điều hành:	iOS 11\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A11 Bionic 6 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	256 GB\r\nThẻ SIM:	1 Nano SIM, Hỗ trợ 4G\r\nDung lượng pin:	2716 mAh, có sạc nhanh', 10, 1518739200, 30000000, 1515456000, 0),
(4, 1, 1, 'Điện thoại iPhone 8 Plus 256GB', 'anh2.jpg', 'Đặc điểm nổi bật của iPhone 8 Plus\r\n\r\nBộ sản phẩm chuẩn: Hộp, Sạc, Tai nghe, Sách hướng dẫn, Jack chuyển tai nghe 3.5mm, Cáp, Cây lấy sim\r\niPhone 8 Plus là bản nâng cấp nhẹ của chiếc iPhone 7 Plus đã ra mắt trước đó với cấu hình mạnh mẽ cùng camera có nhiều cải tiến.\r\nVề ngoại hình iPhone 8 Plus không có quá nhiều khác biệt so với người đàn anh đi trước.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:	iOS 11\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A11 Bionic 6 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	256 GB\r\nThẻ SIM:	1 Nano SIM, Hỗ trợ 4G\r\nDung lượng pin:	2691 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(5, 1, 2, 'Điện thoại Samsung Galaxy Note 8', 'anh3.jpg', 'Galaxy Note 8 là niềm hy vọng vực lại dòng Note danh tiếng của Samsung với diện mạo nam tính, sang trọng. Trang bị camera kép xóa phông thời thượng, màn hình vô cực như trên S8 Plus, bút Spen với nhiều tính năng mới và nhiều công nghệ được Samsung ưu ái đem lên Note 8.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	Super AMOLED, 6.3\", Quad HD (2K)\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	8 MP\r\nCPU:	Exynos 8895 8 nhân 64-bit\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:	2 Nano SIM, Hỗ trợ 4G\r\nDung lượng pin:	3300 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(6, 1, 3, 'Điện thoại OPPO F3 Plus', 'anh4.jpg', 'Sau sự thành công của F1 Plus, OPPO F3 Plus đang được người dùng quan tâm yêu thích với cụm camera selfie kép, công nghệ chụp thiếu sáng đỉnh cao, cấu hình mạnh mẽ và tất nhiên đó là thiết kế nguyên khối quá ư là sang trọng.\r\n\r\nOPPO F3 Plus vẫn sẽ mang trong mình phong cách thiết kế quen thuộc của OPPO trong thời gian gần đây với mặt lưng cùng các góc cạnh bo cong mềm mại.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 6.0\", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	16 MP\r\nCamera trước:	16 MP và 8 MP\r\nCPU:	Snapdragon 653 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	4000 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(7, 1, 6, 'Điện thoại HTC U11 Plus', 'anh7.jpg', 'HTC U11 Plus là bản nâng cấp của chiếc HTC U11 ra mắt trước đó với màn hình tỉ lệ 18:9 theo xu thế mà vẫn tích hợp được công nghệ bóp viền máy Edge Screen.\r\n\r\nThiết kế quen thuộc\r\n\r\nU11 Plus vẫn đi theo tư duy thiết kế như U11 nhưng HTC cũng biết tạo điểm nhấn bằng việc trong suốt hoá, mờ ảo mặt lưng kính để các bạn thấy được linh kiện bên trong máy.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	Super LCD 6, 6.0\", Quad HD (2K)\r\nHệ điều hành:	Android 8.0\r\nCamera sau:	12 MP\r\nCamera trước:	8 MP\r\nCPU:	Qualcomm Snapdragon 835 8 nhân 64-bit\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3930 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(8, 1, 1, 'Điện thoại iPhone 6s Plus 32GB', 'anh8.jpg', 'iPhone 6s Plus 32 GB là phiên bản nâng cấp hoàn hảo từ iPhone 6 Plus với nhiều tính năng mới hấp dẫn.\r\n\r\nCamera được cải tiến\r\n\r\niPhone 6s Plus 32 GB được nâng cấp độ phân giải camera sau lên 12 MP (thay vì 8 MP như trên iPhone 6 Plus), camera cho tốc độ lấy nét và chụp nhanh, thao tác chạm để chụp nhẹ nhàng. Chất lượng ảnh trong các điều kiện chụp khác nhau tốt.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:	iOS 11\r\nCamera sau:	12 MP\r\nCamera trước:	5 MP\r\nCPU:	Apple A9 2 nhân 64-bit\r\nRAM:	2 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ SIM:\r\n1 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	2750 mAh', 0, 0, 0, 0, 0),
(9, 1, 3, 'Điện thoại OPPO F5 6GB', 'anh9.jpg', 'OPPO F5 6GB là phiên bản nâng cấp cấu hình của chiếc OPPO F5, chuyên gia selfie làm đẹp thông minh và màn hình tràn viền tuyệt đẹp.\r\n\r\nThiết kế tuyệt đẹp tràn viền\r\n\r\nOPPO F5 6 GB khởi đầu xu hướng màn hình tràn viền trên dòng điện thoại OPPO với các cạnh máy ở mặt trước được làm mỏng, gọn cho trải nghiệm sử dụng hoàn toàn mới và khác biệt so với phong cách truyền thống.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 6.0\", FullHD+\r\nHệ điều hành:	ColorOS 3.2 (Android 7.1)\r\nCamera sau:	16 MP\r\nCamera trước:	20 MP\r\nCPU:	Mediatek Helio P23\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3200 mAh', 0, 0, 0, 0, 0),
(10, 1, 5, 'Điện thoại Nokia 8', 'anh10.jpg', 'Nokia 8 là chiếc flagship cao cấp nhất của Nokia trong năm 2017 mới được giới thiệu vào giữa tháng 8 với thiết kế khá giống với Nokia 6, nhưng đã được trang bị thêm camera kép Carl Zeiss danh tiếng.\r\n\r\nThiết kế đậm chất Nokia\r\n\r\nNokia 8 có thiết kế nhôm nguyên khối và rất mỏng, với độ dày trung bình chỉ 7.3 mm (4.6 mm tại điểm mỏng nhất và 7.9 mm ở điểm dày nhất).\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 5.3\", Quad HD (2K)\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 13 MP\r\nCamera trước:	13 MP\r\nCPU:	Qualcomm Snapdragon 835 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3090 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(11, 1, 5, 'Điện thoại Nokia 6', 'anh11.jpg', 'Nokia đã cho ra mắt chính thức Nokia 6 với cấu hình tốt trong mức giá tầm trung, thiết kế đẹp cùng bộ đôi camera chất lượng.\r\n\r\nThiết kế chắc chắn, sang trọng\r\n\r\nNokia 6 sở hữu một bộ khung từ nhôm nguyên khối vô cùng chắc chắn, thiết kế đẹp với chất lượng hoàn thiện vô cùng tốt, các góc cạnh được bo cong cho cảm giác cầm nắm thoải mái.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	16 MP\r\nCamera trước:	8 MP\r\nCPU:	Qualcomm Snapdragon 430 8 nhân 64 bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nThẻ SIM:\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3000 mAh', 0, 0, 0, 0, 0),
(12, 1, 4, 'Điện thoại Sony Xperia XZs', 'anh12.jpg', 'Sony Xperia XZs là smartphone được Sony đầu tư mạnh mẽ về camera với hàng loạt các trang bị cao cấp và sở hữu cho mình một mức giá bán hợp lý với người tiêu dùng.\r\n\r\nThiết kế quen thuộc\r\n\r\nMáy vẫn sở hữu thiết kế quen thuộc được thừa hưởng từ chiếc Xperia XZ đã ra mắt trước đó. Điểm khác biệt để phân biệt nằm ở mặt lưng khi XZs được trang bị cụm camera chính với nhiều cảm biến hơn.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 5.2\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	19 MP\r\nCamera trước:	13 MP\r\nCPU:	Snapdragon 820 4 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	2900 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(13, 1, 10, 'Điện thoại Mobiistar Zumbo S2 Dual', 'anh13.jpg', 'Mobiistar Zumbo S2 Dual là một bản nâng cấp nhẹ của chiếc Mobiistar Zumbo S2 đã khá thành công trước đó với điểm nhấn vẫn chính là camera và lần này không chỉ 1 mà Mobiistar mang lên máy tới 2 camera độ phân giải cao.\r\n\r\nThiết kế sang trọng\r\n\r\nBề ngoài của Mobiistar Zumbo S2 Dual không có nhiều khác biệt so với người đàn anh trước đó với một lớp vỏ bằng kim loại sang trọng và cứng cáp\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	13 MP\r\nCamera trước:	13 MP và 8 MP\r\nCPU:	MT6737T, 4 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 64 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3000 mAh', 0, 0, 0, 0, 0),
(14, 1, 7, 'Điện thoại Xiaomi Mi A1 32GB', 'anh14.jpg', 'Là một dự án kết hợp với Android One của Google, Xiaomi Mi A1 đã từng ra mắt bản 64GB tại Ấn Độ. Sau một thời gian thì bản Xiaomi Mi A1 32GB được tung ra để đáp ứng được những khách hàng yêu thích thương hiệu Xiaomi nhưng có nhu cầu lưu trữ ít hơn.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	LTPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 12 MP\r\nCamera trước:	5 MP\r\nCPU:	Snapdragon 625 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nThẻ SIM:\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3080 mAh', 0, 0, 0, 0, 0),
(15, 1, 2, 'Điện thoại Samsung Galaxy C9 Pro', 'anh15.jpg', 'Samsung Galaxy C9 Pro gây được sự chú ý cho người dùng bởi nó sở hữu mức RAM lên tới 6 GB, lần đầu tiên có một chiếc Galaxy đến từ Samsung sở hữu mức RAM đó.\r\n\r\nThiết kế mỏng, sang trọng\r\n\r\nKích thước của chiếc C9 Pro thực sự khá lớn so với các smartphone đang có mặt trên thị trường hiện nay bởi máy sở hữu cho mình một màn hình có kích thước lên tới 6 inch.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	Super AMOLED, 6.0\", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	16 MP\r\nCamera trước:	16 MP\r\nCPU:	Snapdragon 653 8 nhân 64-bit\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	4000 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(16, 1, 5, 'Điện thoại Nokia 8', 'anh16.jpg', 'Nokia 8 là chiếc flagship cao cấp nhất của Nokia trong năm 2017 mới được giới thiệu vào giữa tháng 8 với thiết kế khá giống với Nokia 6, nhưng đã được trang bị thêm camera kép Carl Zeiss danh tiếng.\r\n\r\nThiết kế đậm chất Nokia\r\n\r\nNokia 8 có thiết kế nhôm nguyên khối và rất mỏng, với độ dày trung bình chỉ 7.3 mm (4.6 mm tại điểm mỏng nhất và 7.9 mm ở điểm dày nhất).\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 5.3\", Quad HD (2K)\r\nHệ điều hành:	Android 7.1\r\nCamera sau:	2 camera 13 MP\r\nCamera trước:	13 MP\r\nCPU:	Qualcomm Snapdragon 835 8 nhân 64-bit\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3090 mAh, có sạc nhanh', 0, 0, 0, 0, 0),
(17, 1, 5, 'Nokia 6', 'anh17.jpg', 'Nokia đã cho ra mắt chính thức Nokia 6 với cấu hình tốt trong mức giá tầm trung, thiết kế đẹp cùng bộ đôi camera chất lượng.\r\n\r\nThiết kế chắc chắn, sang trọng\r\n\r\nNokia 6 sở hữu một bộ khung từ nhôm nguyên khối vô cùng chắc chắn, thiết kế đẹp với chất lượng hoàn thiện vô cùng tốt, các góc cạnh được bo cong cho cảm giác cầm nắm thoải mái.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	IPS LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 7.0\r\nCamera sau:	16 MP\r\nCamera trước:	8 MP\r\nCPU:	Qualcomm Snapdragon 430 8 nhân 64 bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 128 GB\r\nThẻ SIM:\r\n2 SIM Nano (SIM 2 chung khe thẻ nhớ), Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3000 mAh\r\n', 0, 0, 0, 0, 0),
(26, 1, 2, 'Samsung Galaxy J7 Prime', 'anh18.jpg', 'Galaxy J7 Prime xứng đáng là cái tên hàng đầu trong danh sách chọn smartphone phổ thông của giới trẻ khi nhận được nhiều đánh giá tích cực về thiết kế, thời lượng pin lâu dài và camera chụp hình chất lượng tốt.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	PLS TFT LCD, 5.5\", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	13 MP\r\nCamera trước:	8 MP\r\nCPU:	Exynos 7870 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 256 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	3300 mAh', 10, 0, 0, 0, 0),
(27, 1, 6, 'Điện thoại HTC U Play', 'anh19.jpg', 'HTC U Play đánh dấu sự trở lại của HTC ở phân khúc tầm trung với triết lý thiết kế mới: đẹp hơn - sang trọng hơn - bóng bẩy hơn, ngoài ra trải nghiệm người dùng được nâng cấp thông qua trợ lý ảo HTC Sense Companion.\r\n\r\nThông số kỹ thuật\r\nMàn hình:	Super LCD, 5.2\", Full HD\r\nHệ điều hành:	Android 6.0 (Marshmallow)\r\nCamera sau:	16 MP\r\nCamera trước:	16 MP\r\nCPU:	MTK Helio P10 8 nhân 64-bit\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 2 TB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTMua sim 4G Viettel (2GB data/tháng). Giá từ 75.000đ\r\nDung lượng pin:	2500 mAh', 20, 0, 0, 0, 0),
(28, 4, 2, 'Pin sạc dự phòng 5.000 mAh eValu Roller 2', 'anha.jpg', 'Thiết kế rất nhỏ gọn, tích hợp thêm đèn pin chiếu sáng.\r\nSạc 2 lần thiết bị pin dưới 1.500 mAh, 1 lần dưới 3.500 mAh.\r\nDễ dàng kiểm tra lại được dung lượng pin còn lại trong sạc.\r\nSử dụng lõi pin Li-Ion an toàn.\r\nSạc được cho mọi điện thoại và máy tính bảng.\r\nBộ sản phẩm gồm: pin sạc.\r\n\r\nThông số kỹ thuật\r\nHiệu suất sạc: 65%\r\nĐèn LED báo hiệu: Có\r\nThời gian sạc: 3 - 4 giờ (dùng Adapter 2.1A)\r\nNguồn vào: 5V - 2.1A\r\nLõi pin: Pin Li-Ion\r\nCổng ra USB 1: 5V - 2.1A\r\nKích thước: Dài 8.9 cm - ngang 4.9 cm - dày 2.1 cm\r\nTrọng lượng: 128 g', 0, 0, 0, 0, 0),
(29, 3, 1, 'Gậy chụp ảnh Bluetooth Cosano HD-P7', 'anhb.jpg', 'Gậy kết nối bluetooth với điện thoại để chụp ảnh.\r\nDùng được cho Android 2.0 và iOS 5 trở lên..\r\nThời gian sạc chỉ gần 1 tiếng như dùng được hơn 20 tiếng.\r\nĐộ dài gậy lên đến 80 cm, chụp nhóm nhiều người dễ hơn.\r\nĐầu gậy có thể gập mở góc 270 độ tùy bạn lựa chọn.\r\n\r\nThông số kỹ thuật\r\nKiểu kết nối: Bluetooth\r\nThời gian sạc: 0.5 giờ\r\nThời gian dùng: 20 giờ\r\nĐộ dài tối thiểu: 20 cm\r\nĐộ dài tối đa: 80 cm\r\nTương thích: Điện thoại dưới 6 inch', 0, 0, 0, 0, 0),
(30, 3, 3, 'Gậy chụp ảnh Mini Cosano CW1\r\n', 'anhc.jpg', 'Tay cầm bọc lớp cao su để hạn chế trơn trượt khi dùng.\r\nThiết kế nhỏ gọn chỉ 16 cm, dễ dàng mang theo bên mình.\r\nKhông cần hẹn giờ, chỉ cần ấn nút trên thân gậy để chụp ảnh.\r\nĐộ dài gậy có thể kéo dài lên đến 60 cm.\r\nĐầu gậy có thể gập mở góc 270 độ tùy bạn lựa chọn.\r\n\r\nThông số kỹ thuật\r\nKiểu kết nối: Dùng dây 3.5 mm\r\nĐộ dài tối thiểu: 16 cm\r\nĐộ dài tối đa: 60 cm\r\nTương thích: Điện thoại dưới 6 inch', 0, 0, 0, 0, 0),
(31, 2, 4, 'Dây cáp Micro USB 0.2', 'anhd.jpg', '<p>\r\n	D&ugrave;ng được cho c&aacute;c thiết bị d&ugrave;ng cổng Micro USB. Chất lượng tương đương với h&agrave;ng ch&iacute;nh h&atilde;ng. D&ugrave;ng để ch&eacute;p dữ liệu hay sạc pin (d&ugrave;ng với adapter ri&ecirc;ng). D&acirc;y ngắn 20 cm th&iacute;ch hợp để d&ugrave;ng với pin sạc dự ph&ograve;ng hay kết nối m&aacute;y t&iacute;nh... Th&ocirc;ng số kỹ thuật Jack cắm: Micro USB T&iacute;nh năng: Sạc, Truyền dữ liệu D&ograve;ng sạc tối đa: 2A Độ d&agrave;i d&acirc;y: 20 cm</p>\r\n', 0, 1515558653, 50000, 0, 0),
(32, 4, 1, 'Pin sạc dự phòng 5.000 mAh', 'anhe.jpg', 'Thiết kế bắt mắt với họa tiết caro, lắc để hiện dung lượng pin độc đáo.\r\nSạc 2 lần thiết bị pin dưới 1.500 mAh, 1 lần dưới 3.500 mAh.\r\nDễ dàng kiểm tra lại được dung lượng pin còn lại trong sạc.\r\nSử dụng lõi pin Li-Ion an toàn.\r\nSạc được cho mọi điện thoại và máy tính bảng.\r\nBộ sản phẩm gồm: pin sạc.\r\n\r\nThông số kỹ thuật\r\nHiệu suất sạc: 65%\r\nĐèn LED báo hiệu: Có\r\nThời gian sạc: 5 - 6 giờ (dùng Adapter 1A), 2 - 3 giờ (dùng Adapter 2.1A)\r\nNguồn vào: 5V - 2A\r\nLõi pin: Pin Li-Ion\r\nCổng ra USB 1: 5V - 1A\r\nCổng ra USB 2: 5V - 2.1A\r\nKích thước: Dài 9.5 cm - ngang 4.8 cm - dày 2 cm\r\nTrọng lượng: 200 g', 5, 0, 0, 0, 0),
(33, 3, 1, 'Gậy chụp ảnh Osmia', 'anhf.jpg', 'hân gậy họa tiết chú gấu Brown nổi tiếng ngộ nghĩnh.\r\nPhù hợp với nhiều dòng điện thoại dưới 6 inch khác nhau.\r\nKhông cần hẹn giờ, chỉ cần ấn nút trên thân gậy để chụp ảnh.\r\nĐộ dài gậy có thể kéo dài lên đến 80 cm.\r\nĐầu gậy có thể gập mở góc 270 độ tùy bạn lựa chọn.\r\n\r\nThông số kỹ thuật\r\nKiểu kết nối: Dùng dây 3.5 mm\r\nĐộ dài tối thiểu: 30 cm\r\nĐộ dài tối đa:	80 cm\r\nTương thích: Điện thoại dưới 6 inch', 10, 0, 0, 0, 0),
(34, 5, 5, 'Miếng dán màn hình Nokia 6', 'anhg.jpg', 'Miếng dán có độ dày 30 micrô mét.\r\nBảo hành 3 tháng dán lại tối đa 3 lần miễn phí cho trường hợp bong tróc, trầy xước.\r\nChống trầy xước tối ưu cho màn hình điện thoại Nokia 6\r\nLàm giảm các dấu vân tay và vết ố\r\nChất liệu Nhật Bản và đóng gói tại Đài Loan.\r\n\r\n', 0, 0, 0, 0, 0),
(35, 5, 3, 'Miếng dán màn hình Oppo F5\r\n', 'anhh.jpg', 'Miếng dán có độ dày 30 micrô mét.\r\nBảo hành 3 tháng dán lại tối đa 3 lần miễn phí cho trường hợp bong tróc, trầy xước.\r\nChống trầy xước tối ưu cho màn hình điện thoại Oppo F5\r\nLàm giảm các dấu vân tay và vết ố\r\nChất liệu Nhật Bản và đóng gói tại Đài Loan', 0, 0, 0, 0, 0),
(36, 5, 1, 'Miếng dán lưng iPhone X', 'anhi.jpg', 'Miếng dán có độ dày 30 micrô mét.\r\nBảo hành 3 tháng dán lại tối đa 3 lần miễn phí cho trường hợp bong tróc, trầy xước.\r\nChống trầy xước tối ưu cho mặt lưng điện thoại iPhone X\r\nLàm giảm các dấu vân tay và vết ố\r\nChất liệu Nhật Bản và đóng gói tại Đài Loan\r\n\r\n', 0, 0, 0, 0, 0),
(37, 2, 2, 'Thẻ nhớ Micro SD 8 GB', 'anhk.jpg', '<p>\r\n	Tốc độ đọc: 30 MB/s. Tốc độ ghi: 4 MB/s. Ch&eacute;p một video 1 GB v&agrave;o thẻ nhớ trong gần 4 ph&uacute;t rưỡi. Tương th&iacute;ch với hầu hết tất cả thiết bị (điện thoại, m&aacute;y t&iacute;nh bảng). Lưu trữ hơn 2.600 b&agrave;i h&aacute;t (1 b&agrave;i ~3 MB).</p>\r\n', 0, 1515555379, 100000, 0, 0),
(38, 2, 2, 'Thẻ nhớ Micro SD 16 GB', '', '<p>\r\n	Thương hiệu uy t&iacute;n: Transcend, Apacer, SanDisk. Tốc độ đọc: 30 MB/s Tốc độ ghi: 10 MB/s Kh&ocirc;ng k&eacute;n thiết bị nhận, dễ d&agrave;ng sử dụng. Lưu trữ hơn 15.500 tấm ảnh (1 tấm ~1.5 MB). Ch&eacute;p một video dung lượng 1 GB v&agrave;o thẻ chưa tới 2 ph&uacute;t. Tương th&iacute;ch với hầu hết tất cả thiết bị (điện thoại, m&aacute;y t&iacute;nh bảng).</p>\r\n', 0, 1515555280, 150000, 0, 0),
(39, 2, 2, 'Thẻ nhớ Micro SD 32', '', '<p>\r\n	Thương hiệu uy t&iacute;n: Transcend, Apacer. Tốc độ đọc: 30 MB/s; Tốc độ ghi: 10 MB/s. Kh&ocirc;ng k&eacute;n thiết bị nhận, dễ d&agrave;ng sử dụng. Ch&eacute;p một video dung lượng 1 GB v&agrave;o thẻ chưa tới 2 ph&uacute;t. Tương th&iacute;ch với hầu hết tất cả thiết bị (điện thoại, m&aacute;y t&iacute;nh bảng).</p>\r\n', 0, 1515555834, 200000, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `supplier`
--

CREATE TABLE `supplier` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `supplier`
--

INSERT INTO `supplier` (`id`, `name`) VALUES
(1, 'Apple'),
(8, 'Asus'),
(6, 'HTC'),
(10, 'Mobiistar'),
(5, 'Nokia'),
(3, 'Oppo'),
(2, 'Sam Sung'),
(4, 'Sony'),
(0, 'Unknown'),
(9, 'Vivo'),
(7, 'Xiaomi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_email` varchar(255) NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `user_phone` varchar(20) NOT NULL,
  `user_address` longtext NOT NULL,
  `order_date` int(11) NOT NULL,
  `update_at` int(11) NOT NULL,
  `money` int(20) NOT NULL,
  `payment_status` int(11) NOT NULL,
  `delivery_status` int(11) NOT NULL,
  `note` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `transaction`
--

INSERT INTO `transaction` (`id`, `product_id`, `user_email`, `user_name`, `user_phone`, `user_address`, `order_date`, `update_at`, `money`, `payment_status`, `delivery_status`, `note`) VALUES
(3, 31, 'a@gmail.com', 'a', '01234567980', 'sdffdsfdsfdsf', 0, 0, 100000, 1, 1, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Chỉ mục cho bảng `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Chỉ mục cho bảng `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_id` (`account_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Chỉ mục cho bảng `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Chỉ mục cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `account`
--
ALTER TABLE `account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT cho bảng `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_ibfk_2` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`);

--
-- Các ràng buộc cho bảng `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
