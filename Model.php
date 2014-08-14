<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 8/14/14
 * Time: 5:45 PM
 */

namespace Plugin\TrackDuck;


class Model {
    public static function projectId()
    {
        return ipGetOption('TrackDuck.projectId');
    }

    public static function showInAdmin()
    {
        return ipGetOption('TrackDuck.showInAdmin');
    }
}
