<?php
# Job module un-installer.
$name = "PhotoFrame";
# Clean-up library icons
Siberian_Feature::removeIcons($name);
Siberian_Feature::removeIcons("{$name}-flat");
# Clean-up Layouts
$layout_data = [1];
$slug = "photo_frame";
Siberian_Feature::removeLayouts($option->getId(), $slug, $layout_data);
# Clean-up Option(s)/Feature(s)
$code = "photo_frame";
Siberian_Feature::uninstallFeature($code);
# Clean-up DB be really carefull with this.
$tables = [
    "photo_frames",
];
Siberian_Feature::dropTables($tables);
# Clean-up module
Siberian_Feature::uninstallModule($name);