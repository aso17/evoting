<?php
function cek_log_admin()
{
    $ci = get_instance();
    $login = $ci->session->userdata('username');
    if ($login == null) {
        redirect('admin');
    }
}
function cek_log_role()
{
    $ci = get_instance();
    $login = $ci->session->userdata('role');
    if ($login == 1) {
        redirect('admin');
    }
}
function cek_log_user()
{
    $ci = get_instance();
    $login1 = $ci->session->userdata('email');
    if (!$login1) {
        redirect('Landing');
    }
}
function cek_log()
{
    $ci = get_instance();

    $login1 = $ci->session->userdata('email');
    if ($login1) {
        redirect('beranda');
    }
}