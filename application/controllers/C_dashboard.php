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

    public function action_input()
    {
        $idsession = $this->session->userdata('ID');
        $date       = $this->input->post('date');
        $schedule   = $this->input->post('schedule');
        $ex_time    = $this->input->post('execute_time');
        $schedule2   = $this->input->post('schedule2');
        $ex_time2   = $this->input->post('execute_time2');

        $data       = array(
            'user_id'       => $idsession,
            'date'          => $date,
            'schedule'      => $schedule,
            'execute_time'  => $ex_time,
            'schedule2'      => $schedule2,
            'execute_time2' => $ex_time2
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
        $schedule2   = $this->input->post('schedule2');
        $ex_time2   = $this->input->post('execute_time2');

        $data = array(
            'date' => $date,
            'schedule' => $schedule,
            'execute_time' => $ex_time,
            'schedule2' => $schedule2,
            'execute_time2' => $ex_time2
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
