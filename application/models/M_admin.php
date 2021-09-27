<?php
class M_admin extends CI_Model
{
    public function show_data()
    {
        $this->db->get('tb_activity')->result_array();
        return $this->db->get('tb_activity');
    }

    public function edit_detail($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_detail($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function show_detail($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function delete_detail($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
