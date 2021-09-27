<?php
class C_dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_dashboard');
        $this->load->helper('url');
    }

    public function index()
    {
        check_not_login();
        $data['tampil_data'] = $this->M_dashboard->show_data()->result();
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('v_data', $data);
        $this->load->view('templates/footer');
    }

    public function form_input()
    {
        check_not_login();
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('form');
        $this->load->view('templates/footer');
    }

    public function action_input()
    {
        $idsession = $this->session->userdata('ID');
        $date       = $this->input->post('date');
        $schedule   = $this->input->post('schedule');
        $ex_time    = $this->input->post('execute_time');

        // $schedule2   = htmlspecialchars($this->input->post('schedule2'));
        // $ex_time2    = htmlspecialchars($this->input->post('execute_time2'));

        // $schedule3   = htmlspecialchars($this->input->post('schedule3'));
        // $ex_time3    = htmlspecialchars($this->input->post('execute_time3'));

        // $schedule4   = htmlspecialchars($this->input->post('schedule4'));
        // $ex_time4    = htmlspecialchars($this->input->post('execute_time4'));

        // $schedule5   = htmlspecialchars($this->input->post('schedule5'));
        // $ex_time5    = htmlspecialchars($this->input->post('execute_time5'));

        // $schedule6   = htmlspecialchars($this->input->post('schedule6'));
        // $ex_time6    = htmlspecialchars($this->input->post('execute_time6'));

        // $schedule7   = htmlspecialchars($this->input->post('schedule7'));
        // $ex_time7    = htmlspecialchars($this->input->post('execute_time7'));

        // $schedule8   = htmlspecialchars($this->input->post('schedule8'));
        // $ex_time8    = htmlspecialchars($this->input->post('execute_time8'));

        // $schedule9   = htmlspecialchars($this->input->post('schedule9'));
        // $ex_time9    = htmlspecialchars($this->input->post('execute_time9'));

        // $schedule10   = htmlspecialchars($this->input->post('schedule10'));
        // $ex_time10    = htmlspecialchars($this->input->post('execute_time10'));

        $data       = array(
            'user_id'       => $idsession,
            'date'          => $date,
            'schedule'      => $schedule,
            'execute_time'  => $ex_time

            // 'schedule2'      => $schedule2,
            // 'execute_time2'  => $ex_time2,

            // 'schedule3'      => $schedule3,
            // 'execute_time3'  => $ex_time3,

            // 'schedule4'      => $schedule4,
            // 'execute_time4'  => $ex_time4,

            // 'schedule5'      => $schedule5,
            // 'execute_time5'  => $ex_time5,

            // 'schedule6'      => $schedule6,
            // 'execute_time6'  => $ex_time6,

            // 'schedule7'      => $schedule7,
            // 'execute_time7'  => $ex_time7,

            // 'schedule8'      => $schedule8,
            // 'execute_time8'  => $ex_time8,

            // 'schedule9'      => $schedule9,
            // 'execute_time9'  => $ex_time9,

            // 'schedule10'      => $schedule10,
            // 'execute_time10'  => $ex_time10
        );

        $this->M_dashboard->input_data($data, 'tb_activity');
        redirect('c_dashboard');
    }

    public function delete($id)
    {
        $where = array('id' => $id);
        $this->M_dashboard->delete_data($where, 'tb_activity');
        redirect('c_dashboard');
    }

    public function edit($id)
    {
        check_not_login();
        $where = array(
            'id' => $id
        );
        $data['edit'] = $this->M_dashboard->edit_data($where, 'tb_activity')->result_array();
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('v_edit', $data);
        $this->load->view('templates/footer');
    }

    public function update()
    {
        $id         = $this->input->post('id');
        $date       = $this->input->post('date');
        $schedule   = $this->input->post('schedule');
        $ex_time    = $this->input->post('execute_time');

        // $schedule2   = htmlspecialchars($this->input->post('schedule2'));
        // $ex_time2    = htmlspecialchars($this->input->post('execute_time2'));

        // $schedule3   = htmlspecialchars($this->input->post('schedule3'));
        // $ex_time3    = htmlspecialchars($this->input->post('execute_time3'));

        // $schedule4   = htmlspecialchars($this->input->post('schedule4'));
        // $ex_time4    = htmlspecialchars($this->input->post('execute_time4'));

        // $schedule5   = htmlspecialchars($this->input->post('schedule5'));
        // $ex_time5    = htmlspecialchars($this->input->post('execute_time5'));

        // $schedule6   = htmlspecialchars($this->input->post('schedule6'));
        // $ex_time6    = htmlspecialchars($this->input->post('execute_time6'));

        // $schedule7   = htmlspecialchars($this->input->post('schedule7'));
        // $ex_time7    = htmlspecialchars($this->input->post('execute_time7'));

        // $schedule8   = htmlspecialchars($this->input->post('schedule8'));
        // $ex_time8    = htmlspecialchars($this->input->post('execute_time8'));

        // $schedule9   = htmlspecialchars($this->input->post('schedule9'));
        // $ex_time9    = htmlspecialchars($this->input->post('execute_time9'));

        // $schedule10   = htmlspecialchars($this->input->post('schedule10'));
        // $ex_time10    = htmlspecialchars($this->input->post('execute_time10'));

        $data = array(
            'date' => $date,
            'schedule' => $schedule,
            'execute_time' => $ex_time
        );
        $where = array(
            'id' => $id
        );
        $this->M_dashboard->update_data($where, $data, 'tb_activity');
        redirect('c_dashboard');
    }

    public function export()
    {
        check_not_login();
        // $this->load->library('dompdf_gen');
        // $data['export_pdf'] = $this->M_dashboard->show_data('tb_activity')->result();

        // $this->load->view('laporan_pdf', $data);

        // $paper_size = 'A4';
        // $orientation = 'portrait';
        // $html = $this->output->get_output();

        // $this->dompdf->set_paper($paper_size, $orientation);
        // $this->dompdf->load_html($html);
        // $this->dompdf->render();
        // $this->dompdf->stream('Laporan Internship.pdf', array('Attachment' => 0));
        $data['export_pdf'] = $this->M_dashboard->show_data('tb_activity')->result();
        $this->load->view('laporan_pdf', $data);
    }

    public function calender()
    {
        check_not_login();
        $this->load->view('templates/sidebar');
        $this->load->view('templates/header');
        $this->load->view('calender');
        $this->load->view('templates/footer');
    }
}
