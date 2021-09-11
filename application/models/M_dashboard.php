<?php
class M_dashboard extends CI_Model
{
    public function show_data()
    {
        $c = $this->session->userdata('ID');
        $this->db->where('user_id', $c);
        $this->db->order_by('date', 'ASC');
        return $this->db->get('tb_activity');
    }

    public function input_data($data, $table)
    {
        $this->db->insert($table, $data);
    }

    public function delete_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
