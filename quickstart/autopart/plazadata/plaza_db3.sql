DELETE FROM `oc_layout_route`;
INSERT INTO `oc_layout_route` (`layout_id`, `store_id`, `route`) VALUES
(27, 0, 'common/home'),
(28, 0, 'plaza/responsive/mobile'),
(29, 0, 'product/product'),
(25, 0, 'product/category'),
(26, 0, ''),
(23, 0, 'account/%'),
(24, 0, 'plaza/blog/post');
DELETE FROM `oc_setting` WHERE `code` LIKE '%module_pt%';
INSERT INTO `oc_setting` (`store_id`, `code`, `key`, `value`, `serialized`) VALUES
( 0, 'module_ptsearch', 'module_ptsearch_status', '1', 0),
( 0, 'module_ptsearch', 'module_ptsearch_ajax', '1', 0),
( 0, 'module_ptsearch', 'module_ptsearch_show_img', '1', 0),
( 0, 'module_ptsearch', 'module_ptsearch_show_price', '1', 0),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_label', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_prodes', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_wishlist', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_compare', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_cart', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_price', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_product_options', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_product_wishlist', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_product_compare', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_product_cart', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_product_price', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_header_currency', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_product_row', '[\"4\",\"4\",\"4\",\"4\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_header_cart', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_default_view', '[\"grid\",\"grid\",\"grid\",\"grid\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_cate_swatches_height', '[\"10\",\"10\",\"10\",\"10\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_advance_view', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_cate_swatches_width', '[\"10\",\"10\",\"10\",\"10\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_img_effect', '[\"hover\",\"hover\",\"hover\",\"hover\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_cate_quickview', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_filter_position', '[\"left\",\"left\",\"left\",\"left\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_use_filter', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_sub_category', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_description', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_swatches_option', '[\"5\",\"5\",\"5\",\"5\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_category_image', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_swatches_height', '[\"20\",\"20\",\"20\",\"20\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_swatches_width', '[\"20\",\"20\",\"20\",\"20\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_zoom_title', '[\"0\",\"0\",\"0\",\"0\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_use_swatches', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_zoom_space', '[\"30\",\"30\",\"30\",\"30\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_zoom_type', '[\"inner\",\"inner\",\"inner\",\"inner\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_button_color', '[\"FFFFFF\",\"FFFFFF\",\"FFFFFF\",\"FFFFFF\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_button_hover_color', '[\"FFFFFF\",\"FFFFFF\",\"FFFFFF\",\"FFFFFF\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_button_bg_color', '[\"253237\",\"253237\",\"253237\",\"253237\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_button_bg_hover_color', '[\"F2AD0F\",\"F2AD0F\",\"F2AD0F\",\"F2AD0F\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_related', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_social', '[\"0\",\"0\",\"0\",\"0\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_tax', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_tags', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_use_zoom', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_link_color', '[\"253237\",\"253237\",\"253237\",\"253237\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_link_hover_color', '[\"F2AD0F\",\"F2AD0F\",\"F2AD0F\",\"F2AD0F\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_heading_font_family_id', '[\"686\",\"686\",\"686\",\"686\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_heading_font_family_name', '[\"Open Sans\",\"Open Sans\",\"Open Sans\",\"Open Sans\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_heading_font_family_cate', '[\"sans-serif\",\"sans-serif\",\"sans-serif\",\"sans-serif\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_heading_font_family_link', '[\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\",\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\",\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\",\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_heading_font_weight', '[\"600\",\"600\",\"600\",\"600\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_heading_color', '[\"253237\",\"253237\",\"F2AD0F\",\"253237\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_body_color', '[\"888888\",\"888888\",\"888888\",\"888888\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_body_font_size', '[\"1.4rem\",\"1.4rem\",\"1.4rem\",\"1.4rem\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_body_font_weight', '[\"400\",\"400\",\"400\",\"400\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_body_font_family_link', '[\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\",\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\",\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\",\"https:\\/\\/fonts.googleapis.com\\/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin,latin-ext,vietnamese\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_body_font_family_cate', '[\"sans-serif\",\"sans-serif\",\"sans-serif\",\"sans-serif\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_body_font_family_name', '[\"Open Sans\",\"Open Sans\",\"Open Sans\",\"Open Sans\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_body_font_family_id', '[\"686\",\"686\",\"686\",\"686\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_loader_img', '[\"catalog\\/ajax-loader.gif\",\"catalog\\/ajax-loader.gif\",\"catalog\\/ajax-loader.gif\",\"catalog\\/ajax-loader.gif\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_lazy_load', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_scroll_top', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_sticky_header', '[\"1\",\"1\",\"1\",\"1\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_responsive_type', '[\"specified\",\"specified\",\"specified\",\"specified\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_header_layout', '["3"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_minify_js', '["1"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_minify_css', '["1"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_status', '1', 0),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_custom_css', '[\"\",\"\",\"\",\"\"]', 1),
( 0, 'module_ptcontrolpanel', 'module_ptcontrolpanel_custom_js', '[\"\",\"\",\"\",\"\"]', 1),
( 0, 'module_ptblog', 'module_ptblog_category_post_content', 'grid', 0),
( 0, 'module_ptblog', 'module_ptblog_category_layout', 'right', 0),
( 0, 'module_ptblog', 'module_ptblog_category_latest_post_limit', '5', 0),
( 0, 'module_ptblog', 'module_ptblog_category_latest_post', '1', 0),
( 0, 'module_ptblog', 'module_ptblog_category_post_limit', '10', 0),
( 0, 'module_ptblog', 'module_ptblog_category_height', '277', 0),
( 0, 'module_ptblog', 'module_ptblog_category_width', '450', 0),
( 0, 'module_ptblog', 'module_ptblog_seo_url', '{\"1\":\"blog\",\"6\":\"\"}', 1),
( 0, 'module_ptblog', 'module_ptblog_meta_keyword', 'Blog Keyword', 0),
( 0, 'module_ptblog', 'module_ptblog_meta_description', 'Blog Description', 0),
( 0, 'module_ptblog', 'module_ptblog_meta_title', 'Blog', 0),
( 0, 'module_ptblog', 'module_ptblog_blog_post_content', 'grid', 0),
( 0, 'module_ptblog', 'module_ptblog_blog_layout', 'right', 0),
( 0, 'module_ptblog', 'module_ptblog_blog_latest_post_limit', '5', 0),
( 0, 'module_ptblog', 'module_ptblog_blog_latest_post', '1', 0),
( 0, 'module_ptblog', 'module_ptblog_cates_list', '[\"1\",\"2\",\"3\",\"4\"]', 1),
( 0, 'module_ptblog', 'module_ptblog_cates_show', '1', 0),
( 0, 'module_ptblog', 'module_ptblog_blog_post_limit', '6', 0),
( 0, 'module_ptblog', 'module_ptblog_blog_height', '277', 0),
( 0, 'module_ptblog', 'module_ptblog_blog_width', '450', 0),
( 0, 'module_ptblog', 'module_ptblog_post_width', '1410', 0),
( 0, 'module_ptblog', 'module_ptblog_post_height', '868', 0),
( 0, 'module_ptblog', 'module_ptblog_post_related', '1', 0),
( 0, 'module_ptblog', 'module_ptblog_post_related_limit', '5', 0),
( 0, 'module_ptblog', 'module_ptblog_related_post_width', '450', 0),
( 0, 'module_ptblog', 'module_ptblog_related_post_height', '277', 0),
( 0, 'module_ptblog', 'module_ptblog_post_layout', 'full', 0),
( 0, 'module_ptajaxlogin', 'module_ptajaxlogin_redirect_status', '0', 0),
( 0, 'module_ptajaxlogin', 'module_ptajaxlogin_status', '1', 0);
UPDATE `oc_setting` SET `value` = '26' WHERE `oc_setting`.`key` = 'config_layout_id';
UPDATE `oc_setting` SET `value` = '4' WHERE `oc_setting`.`key` = 'config_compression';
UPDATE `oc_setting` SET `value` = '0' WHERE `oc_setting`.`key` = 'config_currency_auto';
UPDATE `oc_setting` SET `value` = '1' WHERE `oc_setting`.`key` = 'config_seo_url';
UPDATE `oc_setting` SET `value` = '0' WHERE `oc_setting`.`key` = 'developer_sass';
UPDATE `oc_setting` SET `value` = '0' WHERE `oc_setting`.`key` = 'developer_theme';
UPDATE `oc_setting` SET `value` = 'tt_safira_autopart3' WHERE `oc_setting`.`key` = 'theme_default_directory';
UPDATE `oc_setting` SET `value` = '125' WHERE `oc_setting`.`key` = 'theme_default_image_additional_height';
UPDATE `oc_setting` SET `value` = '125' WHERE `oc_setting`.`key` = 'theme_default_image_additional_width';
UPDATE `oc_setting` SET `value` = '90' WHERE `oc_setting`.`key` = 'theme_default_image_cart_height';
UPDATE `oc_setting` SET `value` = '90' WHERE `oc_setting`.`key` = 'theme_default_image_cart_width';
UPDATE `oc_setting` SET `value` = '80' WHERE `oc_setting`.`key` = 'theme_default_image_category_height';
UPDATE `oc_setting` SET `value` = '80' WHERE `oc_setting`.`key` = 'theme_default_image_category_width';
UPDATE `oc_setting` SET `value` = '90' WHERE `oc_setting`.`key` = 'theme_default_image_compare_height';
UPDATE `oc_setting` SET `value` = '90' WHERE `oc_setting`.`key` = 'theme_default_image_compare_width';
UPDATE `oc_setting` SET `value` = '800' WHERE `oc_setting`.`key` = 'theme_default_image_popup_height';
UPDATE `oc_setting` SET `value` = '800' WHERE `oc_setting`.`key` = 'theme_default_image_popup_width';
UPDATE `oc_setting` SET `value` = '600' WHERE `oc_setting`.`key` = 'theme_default_image_product_height';
UPDATE `oc_setting` SET `value` = '600' WHERE `oc_setting`.`key` = 'theme_default_image_product_width';
UPDATE `oc_setting` SET `value` = '370' WHERE `oc_setting`.`key` = 'theme_default_image_related_height';
UPDATE `oc_setting` SET `value` = '370' WHERE `oc_setting`.`key` = 'theme_default_image_related_width';
UPDATE `oc_setting` SET `value` = '800' WHERE `oc_setting`.`key` = 'theme_default_image_thumb_height';
UPDATE `oc_setting` SET `value` = '800' WHERE `oc_setting`.`key` = 'theme_default_image_thumb_width';
UPDATE `oc_setting` SET `value` = '90' WHERE `oc_setting`.`key` = 'theme_default_image_wishlist_height';
UPDATE `oc_setting` SET `value` = '90' WHERE `oc_setting`.`key` = 'theme_default_image_wishlist_width';
UPDATE `oc_setting` SET `value` = '180' WHERE `oc_setting`.`key` = 'theme_default_product_description_length';
UPDATE `oc_setting` SET `value` = '12' WHERE `oc_setting`.`key` = 'theme_default_product_limit';
