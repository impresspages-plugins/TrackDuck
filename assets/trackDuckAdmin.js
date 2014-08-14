
$( document ).ready(function() {
    "use strict";
    checkProject();
});

var checkProject = function () {
    "use strict";
    $.ajax({
        url: 'https://app.trackduck.com/api/bar/settings/',
        dataType: 'json',
        type: 'GET',
        xhrFields: {
            withCredentials: true
        },
        data: {url: ip.baseUrl},
        success: function (response) {
            $('.ipsDynamic').addClass('ipgHide');

            if (response.status === 401) {
                $('.ipsNotRegistered').removeClass('ipgHide');
            }
            if (response.status === 403) {
                $('.ipsNoProject').removeClass('ipgHide');
            }
            if (response.status === 200) {

                $.ajax({
                    url: ip.baseUrl,
                    dataType: 'json',
                    type: 'POST',
                    data: {
                        aa: 'TrackDuck.storeProjectId',
                        securityToken: ip.securityToken,
                        projectId: response.projectId
                    },
                    success: function (response) {
//                        window.location = window.location.href.split('#')[0];
//                        window.location.reload();
                    }
                });
                //store response.projectId
                //add Js to the website
                //<script src="//tdcdn.blob.core.windows.net/toolbar/assets/prod/td.js" data-trackduck-id="{projectId from settings request}" async=""></script>
            }
        }
    });
};
