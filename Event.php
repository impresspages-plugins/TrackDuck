<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 8/14/14
 * Time: 5:38 PM
 */

namespace Plugin\TrackDuck;


class Event {
    public static function ipBeforeController()
    {
        $projectId = ipGetOption('TrackDuck.projectId');
        if ($projectId) {
            ipAddJs('//tdcdn.blob.core.windows.net/toolbar/assets/prod/td.js', array('data-trackduck-id' => $projectId));
        }
    }

}
