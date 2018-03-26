<?php
class Job_Bootstrap
{
    public static function init($bootstrap)
    {
        # Register assets
        Siberian_Assets::registerAssets("Job", "/app/local/modules/Job/resources/var/apps/");
        Siberian_Assets::addJavascripts(array(
            "modules/job/controllers/job.js",
            "modules/job/factories/job.js",
        ));

        Siberian_Assets::addStylesheets(array(
            "modules/job/css/styles.css",
        ));
    }
}
