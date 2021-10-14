<?php

function hubspot_contact_form_func() {
    return '
            <!--[if lte IE 8]>
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
            <![endif]-->
            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2.js"></script>
            <script>
             hbspt.forms.create({
            region: "na1",
            portalId: "104918",
            formId: "11d50f42-15d2-4496-96c7-b64c186d5986"
            });
            </script>
            ';
}

add_shortcode( 'hubspot_contact_form', 'hubspot_contact_form_func' );
