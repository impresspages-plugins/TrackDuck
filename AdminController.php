<?php
/**
 * @package   ImpressPages
 */


namespace Plugin\TrackDuck;
/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 8/14/14
 * Time: 4:14 PM
 */

class AdminController {
    public function index() {
        ipAddJs('assets/trackDuckAdmin.js');

        return ipView('view/admin.php');
    }
}
