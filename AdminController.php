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

        if (Model::projectId()) {
            //project id exists
            $data = array(
                'projectId' => Model::projectId(),
                'settingsUrl' => ipActionUrl(array('aa' => 'Plugins.index')) . '#/hash=&plugin=TrackDuck'
            );
            return ipView('view/status.php', $data);
        } else {
            //no project id
            ipAddJs('assets/trackDuckAdmin.js');
            return ipView('view/admin.php');
        }
    }

    public function storeProjectId()
    {
        ipRequest()->mustBePost();
        ipSetOption('TrackDuck.projectId', ipRequest()->getPost('projectId'));
        return new \Ip\Response\Json(array('status' => 'success'));
    }
}
