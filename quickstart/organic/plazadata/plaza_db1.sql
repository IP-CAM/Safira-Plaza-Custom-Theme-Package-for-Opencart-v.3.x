DELETE FROM `oc_layout_route`;
INSERT INTO `oc_layout_route` (`layout_id`, `store_id`, `route`) VALUES
(6, 0, 'account/%'),
(3, 0, 'product/category'),
(2, 0, 'product/product'),
(15, 0, 'plaza/responsive/mobile'),
(4, 0, ''),
(14, 0, 'plaza/blog/post'),
(1, 0, 'common/home');
UPDATE `oc_setting` SET `value` = '[\"1\",\"2\",\"3\",\"4\"]' WHERE `oc_setting`.`key` = 'module_ptcontrolpanel_header_layout' AND store_id = 0;
UPDATE `oc_setting` SET `value` = '4' WHERE `oc_setting`.`key` = 'config_layout_id' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Organic 1' WHERE `oc_setting`.`key` = 'config_name' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Organic 1' WHERE `oc_setting`.`key` = 'config_meta_description' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Organic 1 - Responsive Opencart Theme' WHERE `oc_setting`.`key` = 'config_meta_title' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'tt_safira1' WHERE `oc_setting`.`key` = 'theme_default_directory' AND store_id = 0;
