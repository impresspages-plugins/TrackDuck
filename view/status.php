<?php echo ipRenderWidget('Heading', array('title' => 'TackDuck')) ?>
<p><a href="http://www.trackduck.com" target="_blank">TrackDuck</a> setup is complete. Your website visitors should see <a href="http://www.trackduck.com" target="_blank">TrackDuck</a> icon and be able to give a feedback to you.</p>
<p><img src="<?php echo ipFileUrl('Plugin/TrackDuck/assets/trackduck.png'); ?>" /></p>
<p>You project ID is <a href="<?php echo escAttr($settingsUrl) ?>"><?php echo esc($projectId) ?></a></p>
<p></p>

