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
        $this->load->view('login');
    }

    public function action_login()
    {
        $user = $this->input->post('username');
        $pass = md5($this->input->post('password'));
        $data = array(
            'username'  => $user,
            'password'  => $pass
        );
        $tes = $this->M_login->check_login('user', $data)->result_array();
        $cek = $this->M_login->check_login('user', $data)->num_rows();
        $s = @$tes[0]['id'];
        if ($cek > 0) {
            $data_session = array(
                'ID'            => $s,
                'username'      => $user
            );
            $this->session->set_userdata($data_session);
            // var_dump($x);
            echo '<script>
                        window.location.href="' . base_url('c_admin') . '";
                    </script>';
        } else {
            echo '<script>
                        window.location.href="' . base_url('/') . '";
                    </script>';
        }

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
        echo '<script>
                window.location.href="' . base_url('/') . '";
            </script>';
    }
}
