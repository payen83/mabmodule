<?php
# PhotoFrames module, data.
$name = "PhotoFrames";
$category = "social";

# Icons, the first icon is set as default for the Feature,
# then all the icons are inserted in a library
$icons = [
    "/app/local/modules/PhotoFrames/resources/media/library/photo_frames_1.png",
    "/app/local/modules/PhotoFrames/resources/media/library/photo_frames_2.png",
];

$result = Siberian_Feature::installIcons($name, $icons);

# Install the Feature
$data = [
    "library_id" => $result["library_id"],
    "icon_id" => $result["icon_id"],
    "code" => "photo_frames",
    "name" => $name,
    "model" => "Job_Model_Company",
    "desktop_uri" => "photo_frames/application_job/",
    "mobile_uri" => "photo_frames/mobile_list/",
    "mobile_view_uri" => "photo_frames/mobile_view/",
    "mobile_view_uri_parameter" => "company_id",
    "only_once" => 0,
    "is_ajax" => 1,
    "position" => 1000,
    "social_sharing_is_available" => 1
];

$option = Siberian_Feature::install($category, $data, ["code"]);

# Multiple layouts
#
# If your feature have multiple layouts, use the following section, otherwise skip it
# Layouts
$layout_data = [1, 2];
$slug = "photo_frames";

Siberian_Feature::installLayouts($option->getId(), $slug, $layout_data);
# !Multiple layouts

# This section duplicates the icons for the Flat design, you can have different icons,
# or use the same, however since 4.2 you must write this section
# Icons
$icons = [
    "/app/local/modules/PhotoFrames/resources/media/library/photo_frames_1.png",
    "/app/local/modules/PhotoFrames/resources/media/library/photo_frames_2.png",
];

$result = Siberian_Feature::installIcons("{$name}-flat", $icons);
