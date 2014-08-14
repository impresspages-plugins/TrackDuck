<?php echo ipRenderWidget('Heading', array('title' => 'TackDuck')) ?>
<div class="ipsNotRegistered ipsDynamic ipgHide">
    <p>
        Please login to TrackDuck website
    </p>
    <p>
        <a class="btn btn-default" href="https://app.trackduck.com/auth/google?redirect=<?php echo escAttr(ipConfig()->baseUrl() . '?aa=TrackDuck') ?>">Google</a>
    </p>
    <p>
        <a class="btn btn-default" href="https://app.trackduck.com/auth/Facebook?redirect=<?php echo escAttr(ipConfig()->baseUrl() . '?aa=TrackDuck') ?>">Facebook</a>
    </p>
    <p>
        <a class="btn btn-default" href="https://app.trackduck.com/auth/login?redirect?redirect=<?php echo escAttr(ipConfig()->baseUrl() . '?aa=TrackDuck') ?>">TrackDuck</a>
    </p>
    </div>
<div class="ipsNoProject ipsDynamic ipgHide">
    <p>
        Please add new project
    </p>
    <p>
        <a class="btn btn-default" href="https://app.trackduck.com/#/project/new/step1?url=<?php echo escAttr(ipConfig()->baseUrl()) ?>">Create TrackDuck project</a>
    </p>
</div>
<style type="text/css">
    .ipgHide{
        display: none;
    }
</style>
