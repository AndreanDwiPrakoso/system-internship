<?php
function check_ready_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('username');
    if ($user_session) {
        redirect('c_dashboard');
    }
}

function check_not_login()
{
    $ci = &get_instance();
    $user_session = $ci->session->userdata('username');
    if (!$user_session) {
        redirect('/');
    }
}
