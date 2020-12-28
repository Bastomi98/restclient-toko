<?php 
use GuzzleHttp\Client;
class Barang_model extends CI_model {
    private $_client;
    public function __construct(){
        $this->_client = new Client([
            'base_uri' => 'http://localhost/restapi-toko/server/index.php/'
        ]);
    }

    public function getAllBarang()
    {
        $response =$this->_client->request('GET', 'barang', [
            'query' => [
                'API-TOKEN' => '0896557'
            ],
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }

    public function tambahDataBarang()
    {
        $data = [
            "id_barang" => $this->input->post('id_barang', true),
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga_barang" => $this->input->post('harga_barang', true),
            "stok_barang" => $this->input->post('stok_barang', true),
            'API-TOKEN' => '0896557'
        ];

        $response =$this->_client->request('POST', 'barang', [
            'form_params' => $data
        ]);
        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'];
    }
    
    public function getBarangById($id)
    {
         $response =$this->_client->request('GET', 'barang', [
            'query' => [
                'id' => $id,
                'API-TOKEN' => '0896557'
            ]
        ]);

        $result= json_decode($response->getBody()->getContents(), true);
        return $result['data'][0];
        
    }

    public function ubahDataBarang()
    {
        $data = [
            
            "nama_barang" => $this->input->post('nama_barang', true),
            "harga_barang" => $this->input->post('harga_barang', true),
            "stok_barang" => $this->input->post('stok_barang', true),
            "id_barang" => $this->input->post('id_barang', true),
            'API-TOKEN' => '0896557',
            
        ];

        $response =$this->_client->request('PUT', 'barang', [
            'form_params' => $data
        ]);
        $result= json_decode($response->getBody()->getContents(), true);
        return $result;
    }
   

    public function hapusDataBarang($id)
    {
        $response =$this->_client->request('DELETE', 'barang', [
            'form_params' => [
                'id_barang' => $id,
                'API-TOKEN' => '0896557'
            ],
        ]);

        return $result['data'][0];
    }
    
}