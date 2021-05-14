DELETE FROM `oc_layout_route`;
INSERT INTO `oc_layout_route` (`layout_id`, `store_id`, `route`) VALUES
(35, 0, 'plaza/responsive/mobile'),
(30, 0, 'account/%'),
(31, 0, 'plaza/blog/post'),
(33, 0, ''),
(34, 0, 'common/home'),
(32, 0, 'product/category'),
(36, 0, 'product/product');
UPDATE `oc_setting` SET `value` = '[\"4\",\"2\",\"3\",\"4\"]' WHERE `oc_setting`.`key` = 'module_ptcontrolpanel_header_layout' AND store_id = 0;
UPDATE `oc_setting` SET `value` = '33' WHERE `oc_setting`.`key` = 'config_layout_id' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Organic 4 - Responsive Opencart Theme' WHERE `oc_setting`.`key` = 'config_meta_title' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'tt_safira4' WHERE `oc_setting`.`key` = 'theme_default_directory' AND store_id = 0;