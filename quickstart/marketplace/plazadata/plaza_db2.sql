DELETE FROM `oc_layout_route`;
INSERT INTO `oc_layout_route` (`layout_id`, `store_id`, `route`) VALUES
(18, 0, 'common/home'),
(17, 0, 'plaza/blog/post'),
(16, 0, 'account/%'),
(22, 0, ''),
(21, 0, 'product/category'),
(20, 0, 'product/product'),
(19, 0, 'plaza/responsive/mobile');
UPDATE `oc_setting` SET `value` = '[\"2\",\"2\",\"3\",\"4\"]' WHERE `oc_setting`.`key` = 'module_ptcontrolpanel_header_layout' AND store_id = 0;
UPDATE `oc_setting` SET `value` = '22' WHERE `oc_setting`.`key` = 'config_layout_id' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Marketplace 2 - Responsive Opencart Theme' WHERE `oc_setting`.`key` = 'config_meta_title' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Marketplace 2' WHERE `oc_setting`.`key` = 'config_owner' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'Safira Marketplace 2' WHERE `oc_setting`.`key` = 'config_name' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'tt_safira_marketplace2' WHERE `oc_setting`.`key` = 'theme_default_directory' AND store_id = 0;
UPDATE `oc_setting` SET `value` = 'catalog/logo/safira.png' WHERE `oc_setting`.`key` = 'config_logo' AND store_id = 0;