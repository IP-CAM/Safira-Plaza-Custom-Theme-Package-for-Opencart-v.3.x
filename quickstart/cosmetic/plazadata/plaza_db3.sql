DELETE FROM `oc_layout_route`;
INSERT INTO `oc_layout_route` (`layout_id`, `store_id`, `route`) VALUES
(27, 0, 'common/home'),
(28, 0, 'plaza/responsive/mobile'),
(29, 0, 'product/product'),
(25, 0, 'product/category'),
(26, 0, ''),
(23, 0, 'account/%'),
(24, 0, 'plaza/blog/post');
UPDATE `oc_setting` SET `value` = '[\"3\",\"2\",\"3\",\"4\"]' WHERE `oc_setting`.`key` = 'module_ptcontrolpanel_header_layout' AND store_id = 0;
UPDATE `oc_setting` SET `value` = '26' WHERE `oc_setting`.`key` = 'config_layout_id' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Cosmetic 3 - Responsive Opencart Theme' WHERE `oc_setting`.`key` = 'config_meta_title' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Cosmetic 3' WHERE `oc_setting`.`key` = 'config_owner' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Cosmetic 3' WHERE `oc_setting`.`key` = 'config_name' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'tt_safira_cosmetic3' WHERE `oc_setting`.`key` = 'theme_default_directory' AND store_id = 0;