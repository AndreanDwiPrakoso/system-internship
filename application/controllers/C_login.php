<?php

use JetBrains\PhpStorm\Internal\ReturnTypeContract;

class C_login extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('M_login');
    }

    public function index()
    {
        check_ready_login();
        // $x = $this->M_login->curl_login();
        // var_dump($x);
        // $curl = $this->M_login->curl_login();
        // $x = $curl['msg'];
        // $t = $this->db->get('user')->result_array();
        // echo print_r($t);
        $this->load->view('login');
    }

    public function action_login()
    {
        // $username = $this->input->post('username');
        // $data = array(
        //     'username'  => $username
        // );
        // $tes = $this->M_login->check_login('user', $data)->result_array();
        // $cek = $this->M_login->check_login('user', $data)->num_rows();
        // $s = @$tes[0]['id'];
        // if ($cek > 0) {
        //     $data_session = array(
        //         'ID'            => $s,
        //         'username'      => $username
        //     );
        //     $x = $this->session->set_userdata($data_session);
        //     var_dump($x);
        //     echo '<script>
        //             alert("Anda Berhasil Login");
        //             window.location.href="' . base_url('c_dashboard/dashboard') . '";
        //         </script>';
        // } else {
        //     echo '<script>
        //             alert("Username yang Anda masukan salah");
        //             window.location.href="' . base_url('/') . '";
        //         </script>';
        // }

        $username = $this->input->post('username');
        $password = md5($this->input->post('password'));
        // $data = array(
        //     'username' => $username,
        //     'password' => $password
        // );
        $cek = $this->M_login->curl_login();
        $r = ($cek['msg']);
        foreach ($r as $val) {
            $user = $val['username'];
            $pass = $val['password'];
            $name = $val['name'];
            $nick = $val['_nickname'];
            $address = $val['_address'];
            $id = $val['ID'];
            if ($val['password'] == $password) {
                $session = array(
                    'username'  => $user,
                    'password'  => $pass,
                    'name'      => $name,
                    '_nickname' => $nick,
                    '_address'  => $address,
                    'ID'        => $id
                );
                // var_dump($session);
                $this->session->set_userdata($session);
                echo '<script>
                        window.location.href="' . base_url('c_dashboard') . '";
                    </script>';
            } else {
                echo '<script>
                        window.location.href="' . base_url('/') . '";
                    </script>';
            }
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('username');
        session_destroy();
        echo '<script>alert("Anda Berhasil Logout");window.location.href="' . base_url('/') . '";</script>';
    }
}
