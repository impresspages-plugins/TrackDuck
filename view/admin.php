<?php echo ipRenderWidget('Heading', array('title' => 'TackDuck')) ?>
<div class="ipsNotRegistered ipsDynamic ipgHide">
    <p>
        You have to be logged in to TrackDuck website to start using this plugin. Use one of listed ways to login to proceed
    </p>
    <p>
        <a class="btn btn-default" href="https://app.trackduck.com/auth/google?redirect=<?php echo escAttr(ipConfig()->baseUrl() . '?aa=TrackDuck') ?>">Google</a>
        <a class="btn btn-default" href="https://app.trackduck.com/auth/Facebook?redirect=<?php echo escAttr(ipConfig()->baseUrl() . '?aa=TrackDuck') ?>">Facebook</a>
        <a class="btn btn-default" href="https://app.trackduck.com/auth/login?redirect?redirect=<?php echo escAttr(ipConfig()->baseUrl() . '?aa=TrackDuck') ?>">TrackDuck</a>
    </p>
    <hr/>

    <video autoplay="autoplay" id="trackduckdemo" loop="loop" poster="https://trackduck.com/ip_themes/TrackDuck/images/tddemo.jpg" preload="auto" width="659" height="356">

        <source src="https://trackduck.com/ip_themes/TrackDuck/video/tddemo.mp4" type="video/mp4">
        <source src="https://trackduck.com/ip_themes/TrackDuck/video/tddemo.webm" type="video/webm">
        <source src="https://trackduck.com/ip_themes/TrackDuck/video/tddemo.ogv" type="video/ogg">
    </video>

</div>
<div class="ipsNoProject ipsDynamic ipgHide">
    <p>
        Now, when you have logged in to TrackDuck website, you have to create a project with the domain name of this website.
    </p>
    <p>
        Please follow link bellow to proceed and come back here when you finished.
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
