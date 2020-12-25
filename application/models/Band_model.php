<?php 

use GuzzleHttp\Client;

class Band_model extends CI_model {

    private $_client;

    public function __construct()
  {
    $this->_client = new Client([
      'base_uri' =>'http://localhost/restful/index.php/'
        
    ]);
  }
    public function getAllBand()
    {
        //return $this->db->get('daftar_band')->result_array();
        $response = $this->_client->request('GET','band',[
            'query' =>[
                'X-API-KEY' => '1234'
              ]
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function tambahDataBand()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "genre" => $this->input->post('genre', true),
            "kota" => $this->input->post('kota', true),
            "kontak" => $this->input->post('kontak', true),
            'X-API-KEY' => '1234'
        ];

        $response = $this->_client->request('POST','band',[
            'form_params' => $data
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function hapusDataBand($id)
    {
        // $this->db->where('id', $id);
        //$this->db->delete('daftar_band', ['id' => $id]);
        $response = $this->_client->request('DELETE','band',[
            'form_params' =>[
                'X-API-KEY' => '1234',
                'id' => $id
              ]
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function getBandById($id)
    {
        //return $this->db->get_where('daftar_band', ['id' => $id])->row_array();
        $response = $this->_client->request('GET','band',[
            'query' =>[
                'X-API-KEY' => '1234',
                'id' => $id
              ]
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
    }

    public function ubahDataBand()
    {
        $data = [
            "nama" => $this->input->post('nama', true),
            "genre" => $this->input->post('genre', true),
            "kota" => $this->input->post('kota', true),
            "kontak" => $this->input->post('kontak', true),
            "id" => $this->input->post('id', true),
            'X-API-KEY' => '1234'
        ];

        $response = $this->_client->request('PUT','band',[
            'form_params' => $data
        ]);
    
        $result = json_decode($response->getBody()->getContents(), true);
        return $result;
    }

    public function cariDataBand()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('genre', $keyword);
        $this->db->or_like('kota', $keyword);
    
        //return $this->db->get('daftar_band')->result_array();
     
    }
}