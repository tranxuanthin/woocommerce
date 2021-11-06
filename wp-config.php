<?php
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
define( 'DB_NAME', 'woocommerce' );

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
define( 'AUTH_KEY',         '%{NP1CSvYQd-*JHtk#QFTy^(l/qK l,}ed~zQ$<<<Z(gX;/#WK_sZeB/<de*`@1L' );
define( 'SECURE_AUTH_KEY',  'I/fj4IUQvxTXa}@t7faPIEJ1.;|j31r#fg&e]b@.3P_iIe*(|)=dD@EWwgYSq9iF' );
define( 'LOGGED_IN_KEY',    '_@&UXD9%xY16g,<Dw:qFG6b/N2ZD[`n4}6^~=;Ytx-]hCHV!wA*2Pw 6&OLS;!b~' );
define( 'NONCE_KEY',        'L;C32ed90>=ZS]Gz.6hgzGP{m@s}j5u@A2bc;b0XF8-NgGaE#b-k^#?T>oyTryLZ' );
define( 'AUTH_SALT',        'zGiY/0|{>wlf tU*Z1MUS5/0:IJXGW-,=|V7y0jl.CVWw_gXZ7j(Z%yV *B89N2k' );
define( 'SECURE_AUTH_SALT', 'TXyFNoD;BFZIp0obK@?+Gin?a2cMjHoPb|-7*t)y5+6xKg]i(~|&0*IGnX=1-h)/' );
define( 'LOGGED_IN_SALT',   'Cj6;q[&iEcWM$eThoBp/aBD-lquX4%nZjTh@V3]hOKZh<PU4i<c2P~`1Ch~{QPLa' );
define( 'NONCE_SALT',       'F9`qOyJ7YEu</Rac0-u0c2wafxJ3mJh<b87}qt=h2xU7YxF^6v7ZTTS~2?sjtwCe' );

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
