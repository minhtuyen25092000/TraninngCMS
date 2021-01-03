<?php
define( 'WP_CACHE', true );
/**
 * Cấu hình cơ bản cho WordPress
 *
 * Trong quá trình cài đặt, file "wp-config.php" sẽ được tạo dựa trên nội dung 
 * mẫu của file này. Bạn không bắt buộc phải sử dụng giao diện web để cài đặt, 
 * chỉ cần lưu file này lại với tên "wp-config.php" và điền các thông tin cần thiết.
 *
 * File này chứa các thiết lập sau:
 *
 * * Thiết lập MySQL
 * * Các khóa bí mật
 * * Tiền tố cho các bảng database
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Thiết lập MySQL - Bạn có thể lấy các thông tin này từ host/server ** //
/** Tên database MySQL */
define( 'DB_NAME', 'database' );

/** Username của database */
define( 'DB_USER', 'root' );

/** Mật khẩu của database */
define( 'DB_PASSWORD', '' );

/** Hostname của database */
define( 'DB_HOST', 'localhost' );

/** Database charset sử dụng để tạo bảng database. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kiểu database collate. Đừng thay đổi nếu không hiểu rõ. */
define('DB_COLLATE', '');

/**#@+
 * Khóa xác thực và salt.
 *
 * Thay đổi các giá trị dưới đây thành các khóa không trùng nhau!
 * Bạn có thể tạo ra các khóa này bằng công cụ
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Bạn có thể thay đổi chúng bất cứ lúc nào để vô hiệu hóa tất cả
 * các cookie hiện có. Điều này sẽ buộc tất cả người dùng phải đăng nhập lại.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C!a4l=Qbi6B_a+c7A:uw%,XyjYiw*LhNy{hUByouV)tH1/0Z4yeb_*f)S:wGNL%*' );
define( 'SECURE_AUTH_KEY',  ')d5[)n:4?Dc?|=m( Y<t=58!S8tNMqgnUMW-iJ69!kDZea@ (f8gATgq(W[G}VFF' );
define( 'LOGGED_IN_KEY',    '0%E]:5-W^#d>jsW2)ip=!I;81T <sKG@SW?&g-(%m`e0~AP$ N*_=l1R?=o8em$>' );
define( 'NONCE_KEY',        '2GYzWxy[L;OZm}|(*{1!15e%/i${V[W#yv9Jy#aSW9UU+Emi:ym^2}X0M9{cL-&N' );
define( 'AUTH_SALT',        'L4iL|h$8lwJF](z(?(][14q`p#olf(v%^)BrPz.N!|*wO$i@8:Z#wAKvx8H 0 v6' );
define( 'SECURE_AUTH_SALT', 'X> %0#3*CG, 3zi9aso ,ao;hWe7TnAD=@f9 {1n+Xrz?;$D]O)MT+}G!e!(:=wY' );
define( 'LOGGED_IN_SALT',   ')[!cxg>5fL-(m=1pGi-Y`!(3j+:.<*cRDO5:[L)bXX>fEI$50QX=rHxx!Y?2|-Wd' );
define( 'NONCE_SALT',       'oEj{4v~HptFQkjWz.NC.Bof7J+)ngi_(+8P>qk^ gTETKewNe`GFKW9Ju(p*K]~Z' );

/**#@-*/

/**
 * Tiền tố cho bảng database.
 *
 * Đặt tiền tố cho bảng giúp bạn có thể cài nhiều site WordPress vào cùng một database.
 * Chỉ sử dụng số, ký tự và dấu gạch dưới!
 */
$table_prefix = 'wp_';

/**
 * Dành cho developer: Chế độ debug.
 *
 * Thay đổi hằng số này thành true sẽ làm hiện lên các thông báo trong quá trình phát triển.
 * Chúng tôi khuyến cáo các developer sử dụng WP_DEBUG trong quá trình phát triển plugin và theme.
 *
 * Để có thông tin về các hằng số khác có thể sử dụng khi debug, hãy xem tại Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Đó là tất cả thiết lập, ngưng sửa từ phần này trở xuống. Chúc bạn viết blog vui vẻ. */

/** Đường dẫn tuyệt đối đến thư mục cài đặt WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Thiết lập biến và include file. */
require_once(ABSPATH . 'wp-settings.php');
