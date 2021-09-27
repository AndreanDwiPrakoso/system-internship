<?php
class C_admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->model('M_login');
        $this->load->helper('url');
    }

    public function index()
    {
        check_not_login();
        $this->load->view('v_admin');
        $this->load->view('templates/footer');
    }

    public function detail($user_id)
    {
        check_not_login();
        $where = array(
            'user_id' => $user_id
        );
        $data['tampil_data'] = $this->M_admin->show_detail($where, 'tb_activity')->result();
        // $this->load->view('templates/sidebar');
        // $this->load->view('templates/header');
        $this->load->view('v_detail', $data);
        $this->load->view('templates/footer');
    }

    public function edit($id)
    {
        check_not_login();
        $where = array(
            'id' => $id
        );
        $data['edit'] = $this->M_admin->edit_detail($where, 'tb_activity')->result_array();
        // $this->load->view('templates/sidebar');
        // $this->load->view('templates/header');
        $this->load->view('v_edit_detail', $data);
        $this->load->view('templates/footer');
    }

    public function update_detail()
    {
        $id         = $this->input->post('id');
        $date       = $this->input->post('date');
        $schedule   = htmlspecialchars($this->input->post('schedule'));
        $ex_time    = htmlspecialchars($this->input->post('execute_time'));

        $schedule2   = htmlspecialchars($this->input->post('schedule2'));
        $ex_time2    = htmlspecialchars($this->input->post('execute_time2'));

        $schedule3   = htmlspecialchars($this->input->post('schedule3'));
        $ex_time3    = htmlspecialchars($this->input->post('execute_time3'));

        $schedule4   = htmlspecialchars($this->input->post('schedule4'));
        $ex_time4    = htmlspecialchars($this->input->post('execute_time4'));

        $schedule5   = htmlspecialchars($this->input->post('schedule5'));
        $ex_time5    = htmlspecialchars($this->input->post('execute_time5'));

        $schedule6   = htmlspecialchars($this->input->post('schedule6'));
        $ex_time6    = htmlspecialchars($this->input->post('execute_time6'));

        $schedule7   = htmlspecialchars($this->input->post('schedule7'));
        $ex_time7    = htmlspecialchars($this->input->post('execute_time7'));

        $schedule8   = htmlspecialchars($this->input->post('schedule8'));
        $ex_time8    = htmlspecialchars($this->input->post('execute_time8'));

        $schedule9   = htmlspecialchars($this->input->post('schedule9'));
        $ex_time9    = htmlspecialchars($this->input->post('execute_time9'));

        $schedule10   = htmlspecialchars($this->input->post('schedule10'));
        $ex_time10    = htmlspecialchars($this->input->post('execute_time10'));

        $data = array(
            'date' => $date,
            'schedule' => $schedule,
            'execute_time' => $ex_time,

            'schedule2'      => $schedule2,
            'execute_time2'  => $ex_time2,

            'schedule3'      => $schedule3,
            'execute_time3'  => $ex_time3,

            'schedule4'      => $schedule4,
            'execute_time4'  => $ex_time4,

            'schedule5'      => $schedule5,
            'execute_time5'  => $ex_time5,

            'schedule6'      => $schedule6,
            'execute_time6'  => $ex_time6,

            'schedule7'      => $schedule7,
            'execute_time7'  => $ex_time7,

            'schedule8'      => $schedule8,
            'execute_time8'  => $ex_time8,

            'schedule9'      => $schedule9,
            'execute_time9'  => $ex_time9,

            'schedule10'      => $schedule10,
            'execute_time10'  => $ex_time10
        );
        $where = array(
            'id' => $id
        );
        $this->M_admin->update_detail($where, $data, 'tb_activity');
        redirect('c_admin');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_admin->delete_detail($where, 'tb_activity');
        redirect('c_admin');
    }

    public function calender_detail()
    {
        check_not_login();
        // $this->load->view('templates/sidebar');
        // $this->load->view('templates/header');
        $this->load->view('calender_admin');
        $this->load->view('templates/footer');
    }
}
