<?php

/**
 * @Project NUKEVIET 4.x
 * @Author VINADES.,JSC (contact@vinades.vn)
 * @Copyright (C) 2014 VINADES.,JSC. All rights reserved
 * @Language Tiếng Việt
 * @License CC BY-SA (http://creativecommons.org/licenses/by-sa/4.0/)
 * @Createdate Mar 04, 2010, 03:22:00 PM
 */

if( ! defined( 'NV_ADMIN' ) or ! defined( 'NV_MAINFILE' ) ) die( 'Stop!!!' );

$lang_translator['author'] = 'VINADES.,JSC (contact@vinades.vn)';
$lang_translator['createdate'] = '04/03/2010, 15:22';
$lang_translator['copyright'] = '@Copyright (C) 2012 VINADES.,JSC. All rights reserved';
$lang_translator['info'] = '';
$lang_translator['langtype'] = 'lang_module';

$lang_module['categories'] = 'Quản lý chuyên mục';
$lang_module['topics'] = 'Theo dòng sự kiện';
$lang_module['topics_error_title'] = 'Lỗi: Bạn không nhập vào tiêu đề sự kiện';
$lang_module['sources'] = 'Nguồn tin';
$lang_module['save'] = 'Lưu thay đổi';
$lang_module['action'] = 'Thực hiện';
$lang_module['move'] = 'Di chuyển bài viết';
$lang_module['save_temp'] = 'Lưu tạm';
$lang_module['save_send_admin'] = 'Lưu bài, chuyển biên tập';
$lang_module['save_send_spadmin'] = 'Lưu bài, chuyển tổng biên tập';
$lang_module['publtime'] = 'Đăng bài viết';
$lang_module['exptime'] = 'Cho hết hạn bài viết';
$lang_module['status_action_0'] = 'Chuyển sang chờ duyệt';
$lang_module['declined'] = 'Từ chối bài viết';
$lang_module['re_published'] = 'Đăng lại bài viết';
$lang_module['status'] = 'Trạng thái';
$lang_module['status_0'] = 'Chờ duyệt';
$lang_module['status_1'] = 'Xuất bản';
$lang_module['status_2'] = 'Hẹn giờ đăng';
$lang_module['status_3'] = 'Hết hạn';
$lang_module['status_4'] = 'Lưu tạm';
$lang_module['status_5'] = 'Từ chối';
$lang_module['status_6'] = 'Chuyển biên tập';
$lang_module['errorsave'] = 'Lỗi hệ thống không cập nhật được nội dung, bạn hãy kiểm tra lại liên kết tĩnh tiêu đề bài viết có thể bị trùng';
$lang_module['saveok'] = 'Cập nhật bài viết thành công';
$lang_module['clickgotomodule'] = 'Click vào đây để chuyển vào trang quản lý bài viết.';
$lang_module['alias'] = 'Liên kết tĩnh';
$lang_module['name'] = 'Tiêu đề';
$lang_module['titlesite'] = 'Tùy chỉnh Tiêu đề site';
$lang_module['error_name'] = 'Lỗi:Bạn cần nhập Tiêu đề';
$lang_module['weight'] = 'Vị trí';
$lang_module['numsubcat'] = 'Số chuyên mục con';
$lang_module['inhome'] = 'Hiển thị trang chủ';
$lang_module['numlinks'] = 'Số liên kết';
$lang_module['numcomments'] = 'Số bình luận';
$lang_module['newday'] = 'Icon tin mới (ngày)';
$lang_module['hitstotal'] = 'Số lượt xem';
$lang_module['checkall'] = 'Chọn tất cả';
$lang_module['uncheckall'] = 'Bỏ chọn tất cả';

$lang_module['description'] = 'Miêu tả';
$lang_module['viewdescription'] = 'Hiển thị nội dung chi tiết khi xem chủ đề';
$lang_module['viewdescription_0'] = 'Không hiển thị ';
$lang_module['viewdescription_1'] = 'Hiển thị tại trang số 1 của chủ đề';
$lang_module['viewdescription_2'] = 'Hiển thị ở tất cả các trang của chủ đề';

$lang_module['keywords'] = 'Từ khóa';
$lang_module['content_list'] = 'Danh sách bài viết';
$lang_module['content_add'] = 'Thêm bài viết';
$lang_module['add_cat'] = 'Thêm chuyên mục';
$lang_module['add_topic'] = 'Thêm dòng sự kiện';
$lang_module['add_sources'] = 'Thêm nguồn tin';
$lang_module['edit_cat'] = 'Sửa chuyên mục';
$lang_module['edit_topic'] = 'Sửa dòng sự kiện';
$lang_module['edit_sources'] = 'Sửa nguồn tin';
$lang_module['add_block_cat'] = 'Thêm nhóm tin';
$lang_module['edit_block_cat'] = 'Sửa nhóm tin';
$lang_module['link'] = 'Website nguồn tin';
$lang_module['cat_sub'] = 'Thuộc chuyên mục';
$lang_module['cat_sub_sl'] = 'Là chuyên mục chính';
$lang_module['topic_sl'] = 'Chọn nhóm tin liên quan hoặc tự điền';
$lang_module['delcat_msg_cat'] = 'Chuyên mục này có %s Chuyên mục thành phần, bạn cần xóa hoặc di chuyển các Chuyên mục thành phần trước';
$lang_module['delcat_msg_rows'] = 'Chuyên mục có %s bài viết, bạn có chắc chắn xóa hoặc di chuyển sang Chuyên mục khác';
$lang_module['delcat_msg_rows_select'] = 'Chú ý: Chuyên mục %s có %s bài viết. <br />Bạn xóa Chuyên mục này tức là xóa tất cả bài viết bên trong nó.';
$lang_module['delcat_msg_rows_move'] = 'Hoặc chọn Chuyên mục để di chuyển bài viết tới';
$lang_module['delcat_msg_cat_permissions'] = 'Bạn không có quyền thực hiện thao tác này';
$lang_module['delcatandrows'] = 'Xóa Chuyên mục và các bài viết';
$lang_module['delcat_msg_rows_noselect'] = 'Bạn cần chọn Chuyên mục để di chuyển bài viết tới';
$lang_module['deltopic_msg_rows'] = 'nhóm tin liên quan có %s bài viết, bạn có chắc chắn xóa, khi đó nhóm tin liên quan sẽ bị xóa khỏi các bài viết.';

$lang_module['setting'] = 'Cấu hình module';
$lang_module['setting_indexfile'] = 'Phương án thể hiện trang chủ';
$lang_module['setting_homesite'] = 'Kích thước của hình tại trang chủ';
$lang_module['setting_thumbblock'] = 'Kích thước của hình tại các block ';
$lang_module['setting_imagefull'] = 'Kích thước của hình dưới phần mở đầu bài viết ';
$lang_module['setting_per_page'] = 'Số bài viết được hiển thị cùng với phần giới thiệu ngắn gọn trên một trang';
$lang_module['setting_st_links'] = 'Số bài viết chỉ hiển thị link';
$lang_module['setting_idf_df'] = 'Mặc định';
$lang_module['setting_copyright'] = 'Nội dung hiển thị nếu bài viết có lựa chọn giữ bản quyền bài viết';
$lang_module['setting_view'] = 'Cấu hình hiển thị';
$lang_module['setting_post'] = 'Cấu hình đăng bài';
$lang_module['setting_auto_tags'] = 'Tự động tạo từ khóa cho bài viết nếu không nhập từ khóa lúc đăng bài';
$lang_module['setting_tags_remind'] = 'Nhắc nhở các từ khóa không có mô tả';
$lang_module['setting_alias_lower'] = 'Chuyển Liên kết tĩnh về chữ thường khi tạo mới';

$lang_module['viewcat_page'] = 'Cách thể hiện Chuyên mục';
$lang_module['viewcat_page_new'] = 'danh sách, mới lên trên';
$lang_module['viewcat_page_old'] = 'danh sách, cũ lên trên';
$lang_module['viewcat_main_left'] = 'chuyên mục, tin khác nằm bên trái';
$lang_module['viewcat_main_right'] = 'chuyên mục,tin khác nằm bên phải';
$lang_module['viewcat_main_bottom'] = 'chuyên mục,tin khác nằm bên dưới';
$lang_module['viewcat_two_column'] = 'chuyên mục thành 2 cột';
$lang_module['viewcat_list_new'] = 'theo tiêu đề, mới lên trên';
$lang_module['viewcat_list_old'] = 'theo tiêu đề, cũ lên trên';
$lang_module['viewcat_grid_new'] = 'theo lưới, mới lên trên';
$lang_module['viewcat_grid_old'] = 'theo lưới, cũ lên trên';
$lang_module['viewcat_none'] = 'không hiển thị';

$lang_module['search'] = 'Tìm kiếm';
$lang_module['search_type'] = 'Tìm kiếm theo';
$lang_module['search_status'] = 'Trạng thái';
$lang_module['search_id'] = 'ID';
$lang_module['search_key'] = 'Từ khóa tìm kiếm';
$lang_module['search_cat'] = 'Chuyên mục bài viết';
$lang_module['search_cat_all'] = 'Tất cả các chuyên mục';
$lang_module['search_title'] = 'Tiêu đề';
$lang_module['search_bodytext'] = 'Nội dung';
$lang_module['search_author'] = 'Tác giả bài viết';
$lang_module['search_admin'] = 'Người nhập liệu';
$lang_module['search_per_page'] = 'Số bài viết hiển thị';
$lang_module['search_note'] = 'Từ khóa tìm kiếm không ít hơn 2 ký tự, không lớn hơn 64 ký tự, không dùng các mã html';
$lang_module['content_edit'] = 'Sửa bài viết';
$lang_module['error_title'] = 'Lỗi: Bài viết chưa có tiêu đề';
$lang_module['error_bodytext'] = 'Lỗi: Bài viết chưa có nội dung';
$lang_module['error_cat'] = 'Lỗi: Bài viết chưa có chuyên mục';
$lang_module['sources_sl'] = 'Hãy chọn hoặc tự điền';

$lang_module['content_cat'] = 'Chuyên mục của bài viết';
$lang_module['content_block'] = 'Bài viết thuộc các nhóm tin';
$lang_module['content_topic'] = 'Thuộc dòng sự kiện';
$lang_module['content_homeimg'] = 'Hình minh họa';
$lang_module['content_homeimgalt'] = 'Chú thích cho hình';
$lang_module['content_hometext'] = 'Giới thiệu ngắn gọn';
$lang_module['content_notehome'] = '(Hiển thị đối với mọi đối tượng kể cả khi không được phân quyền)';
$lang_module['content_tag'] = 'Các tag cho bài viết';
$lang_module['content_tag_note'] = 'Để tạo tự động, hãy copy toàn bộ nội dung bài viết vào ô trống dưới đây và bấm';
$lang_module['content_clickhere'] = 'vào đây';
$lang_module['content_showmore'] = '(Mở rộng để xem chi tiết)';
$lang_module['content_notetime'] = '(Ngày/tháng/năm giờ:phút)';
$lang_module['content_publ_date'] = 'Thời gian đăng';
$lang_module['content_exp_date'] = 'Thời gian hết hạn';
$lang_module['content_extra'] = 'Tính năng mở rộng';
$lang_module['content_inhome'] = 'Hiển thị trên trang chủ';
$lang_module['content_allowed_comm'] = 'Cho phép thảo luận';
$lang_module['content_note_comm'] = 'Chức năng Cho phép thảo luận hiện tại đang được quản lý tại module Quản lý bình luận';
$lang_module['content_allowed_rating'] = 'Cho phép xếp hạng';
$lang_module['allowed_rating_point'] = 'Hiển thị đánh giá bài viết trên google nếu bài viết có số điểm';
$lang_module['no_allowed_rating'] = 'Không hiển thị';
$lang_module['content_allowed_send'] = 'Cho phép gửi bài viết';
$lang_module['content_allowed_print'] = 'Cho phép in bài viết';
$lang_module['content_allowed_save'] = 'Cho phép lưu bài viết';
$lang_module['content_allshow'] = 'Xem tất cả ';
$lang_module['content_allcollapse'] = 'Đóng tắt cả';
$lang_module['content_bodytext'] = 'Nội dung chi tiết';
$lang_module['content_bodytext_note'] = ' (Chỉ hiển thị đối với những đối tượng được phép xem)';
$lang_module['content_admin'] = 'Người tạo';
$lang_module['content_author'] = 'Tác giả bài viết';
$lang_module['content_sourceid'] = 'Nguồn tin';
$lang_module['content_copyright'] = 'Giữ bản quyền bài viết';
$lang_module['content_saveok'] = 'Đã ghi dữ liệu thành công';
$lang_module['content_main'] = 'Quay lại trang quản lý';
$lang_module['content_back'] = 'Quay lại trang sửa bài viết';
$lang_module['redircet_title'] = 'Thực hiện thành công thao tác';
$lang_module['content_checkcat'] = 'Chủ đề chính cho bài viết';
$lang_module['content_checkcatmsg'] = 'Bạn cần chọn chủ đề chính cho bài viết.';
$lang_module['content_archive'] = 'Lưu trữ sau thời gian hết hạn';
$lang_module['content_tags_empty'] = 'Chú ý: Bài viết chưa có từ khóa nào';
$lang_module['content_tags_empty_auto'] = 'Hệ thống sẽ tạo tự động từ khóa lúc lưu bài viết này, có thể tắt tính năng tự động tạo từ khóa ở phần quản lý module';

$lang_module['showtooltip'] = 'Hiển thị tooltips';
$lang_module['showtooltip_position'] = 'Vị trí hiển thị';
$lang_module['showtooltip_position_top'] = 'Trên';
$lang_module['showtooltip_position_bottom'] = 'Dưới';
$lang_module['showtooltip_position_left'] = 'Trái';
$lang_module['showtooltip_position_right'] = 'Phải';
$lang_module['showtooltip_length'] = 'Số ký tự';
$lang_module['showhometext'] = 'Hiển thị phần Giới thiệu ngắn gọn khi xem bài viết';
$lang_module['show_no_image'] = 'Hiển thị ảnh No-Image nếu không bài viết không có hình minh họa';
$lang_module['imgposition'] = 'Trình bày hình trong bài viết';
$lang_module['imgpositiondefault'] = 'Cấu hình mặc định, Trình bày hình trong bài viết khi đăng bài';
$lang_module['imgposition_0'] = 'Không hiển thị';
$lang_module['imgposition_1'] = 'Hiển thị theo cấu hình module';
$lang_module['imgposition_2'] = 'Hiển thị dưới phần mở đầu';
$lang_module['addtoblock'] = 'Thêm bài viết vào nhóm tin';
$lang_module['delete_from_block'] = 'Xóa bài viết khỏi nhóm tin';
$lang_module['error_del_content'] = 'Lỗi: Hệ thống không xóa hết được các bài viết, vui lòng thử lại';
$lang_module['msgnocheck'] = 'Bạn cần chọn ít nhất 1 bài viết để thực hiện';
$lang_module['facebookAppID'] = 'Facebook App ID';
$lang_module['facebookAppIDNote'] = ' (Có dạng 1419186468293063, <a href="http://wiki.nukeviet.vn/nukeviet:admin:news:facebookapi" target="_blank">xem chi tiết</a>)';
$lang_module['socialbutton'] = 'Hiển thị các công cụ Like facebook, G+, Twitter khi xem bài viết';
$lang_module['block'] = 'Các nhóm tin';
$lang_module['adddefaultblock'] = 'Chọn mặc định khi tạo bài viết';
$lang_module['source_logo'] = 'Logo nguồn tin';
$lang_module['topic_page'] = 'Tin tức thuộc nhóm tin liên quan';
$lang_module['topic_del'] = 'Xóa khỏi dòng sự kiện';
$lang_module['topic_nocheck'] = 'Hãy chọn ít nhất 1 bài viết để có thể thực hiện';
$lang_module['topic_delete_confirm'] = 'Bạn có chắc muốn xóa nhóm tin liên quan ra khỏi bài viết ?';
$lang_module['topic_delete_success'] = 'Loại bỏ thành công !';
$lang_module['topic_nonews'] = 'Hiện tại không có bài viết nào thuộc nhóm tin liên quan này !';
$lang_module['addtotopics'] = 'Thêm vào nhóm tin liên quan';
$lang_module['topic_update_success'] = 'Cập nhật thành công!';
$lang_module['topic_num_news'] = ' bài viết';

$lang_module['siteinfo_publtime'] = 'Tổng số bài viết hiệu lực';
$lang_module['siteinfo_users_send'] = 'Số bài viết thành viên gửi tới';
$lang_module['siteinfo_pending'] = 'Số bài viết chờ đăng';
$lang_module['siteinfo_expired'] = 'Số bài viết đã hết hạn';
$lang_module['siteinfo_exptime'] = 'Số bài viết sắp hết hạn';
$lang_module['siteinfo_comment'] = 'Tổng số bình luận được đăng';
$lang_module['siteinfo_comment_pending'] = 'Số bình luận chờ duyệt';
$lang_module['siteinfo_tags_incomplete'] = 'Số tags chưa có mô tả';

$lang_module['group_content'] = 'Cấu hình đăng bài viết tại trang người dùng';
$lang_module['group_addcontent'] = 'Được đăng bài viết';
$lang_module['group_postcontent'] = 'Đăng bài viết không cần kiểm duyệt';
$lang_module['group_editcontent'] = 'Được sửa bài viết đã đăng';
$lang_module['group_delcontent'] = 'Được xóa bài viết đã đăng';

$lang_module['admin'] = 'Phân quyền quản lý';
$lang_module['admin_permissions'] = 'Quyền hạn';
$lang_module['admin_edit'] = 'Sửa quyền hạn';
$lang_module['admin_edit_user'] = 'Sửa quyền hạn thành viên';
$lang_module['admin_full_module'] = 'Toàn quyền module';
$lang_module['admin_module'] = 'Quản lý module';
$lang_module['admin_module_for_user'] = 'Bạn có tất cả các quyền hạn của module, trừ chức năng phân quyền quản lý';
$lang_module['admin_cat'] = 'Quản lý Chuyên mục';
$lang_module['admin_cat_for_user'] = 'Quyền hạn của bạn tại các chuyên mục';
$lang_module['admin_no_user'] = 'Chức năng phân quyền cho module này chỉ áp dụng cho người điều hành module, bạn cần thêm người điều hành module trước khi tiến hành phân quyền.';
$lang_module['admin_userid'] = 'userid';
$lang_module['admin_username'] = 'Tài khoản';
$lang_module['admin_full_name'] = 'Họ tên';
$lang_module['admin_first_name'] = 'Tên';
$lang_module['admin_last_name'] = 'Họ';
$lang_module['admin_email'] = 'Email';

$lang_module['permissions_admin'] = 'Quản lý Chuyên mục';
$lang_module['permissions_add_content'] = 'Tạo bài viết';
$lang_module['permissions_pub_content'] = 'Đăng bài viết';
$lang_module['permissions_app_content'] = 'Duyệt bài viết';
$lang_module['permissions_edit_content'] = 'Sửa bài viết';
$lang_module['permissions_del_content'] = 'Xóa bài viêt';
$lang_module['permissions_pub_error'] = 'Lỗi: Bạn không được đăng bài viết tại Chuyên mục: %1$s';
$lang_module['permissions_sendspadmin_error'] = 'Lỗi: Bạn không được phép chuyển bài viết cho tổng biên tập tại Chuyên mục: %1$s';
$lang_module['permissions_pub_show_error'] = 'Lỗi: Bạn không được cho hiển thị bài viết tại Chuyên mục: %1$s';

$lang_module['error_no_del_content_id'] = 'Lỗi: Hệ thống không xóa được các bài viết có id:';
$lang_module['structure_image_upload'] = 'Ảnh upload của module được lưu trữ mặc định theo cấu trúc thư mục';

$lang_module['config_source'] = 'Cấu hình hiển thị nguồn bài viết tại chi tiết tin';
$lang_module['config_source_title'] = 'Hiển thị tiêu đề nguồn tin';
$lang_module['config_source_link'] = 'Hiển thị link của nguồn tin';
$lang_module['config_source_logo'] = 'Hiển thị logo của nguồn tin';

$lang_module['tags'] = 'Quản lý Tags';
$lang_module['add_tags'] = 'Thêm Tags';
$lang_module['edit_tags'] = 'Sửa Tags';
$lang_module['tags_alias'] = 'Lọc bỏ dấu tiếng việt, các ký tự khác a-z, 0-9, - trong Liên kết tĩnh của tags';
$lang_module['alias_search'] = 'Để hiển thị các tags khác, bạn dùng chức năng tìm kiếm để hiển thị nhiều kết quả hơn';
$lang_module['tags_all_link'] = 'Chế độ xem các tags chưa có mô tả đang được kích hoạt, nhấp vào đây để xem tất cả các tags';
$lang_module['tags_no_description'] = 'Chưa có mô tả';

$lang_module['googleplus'] = 'Xác thực Google+ (quyền tác giả)';
$lang_module['googleplus_1'] = 'Không sử dụng';
$lang_module['googleplus_0'] = 'Theo quyền tác giả của module';
$lang_module['input_title_blocks'] = 'Nhập tiêu đề nhóm tin...';
$lang_module['input_keyword_tags'] = 'Nhập từ khóa...';
$lang_module['alias_empty_notice'] = 'Liên kết tĩnh còn trống, hệ thống sẽ tự động tạo liên kết tĩnh phù hợp';