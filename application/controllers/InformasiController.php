<?php
class InformasiController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != "ADMIN") {
			redirect('/');
		};
        $this->load->model('Informasi');
        $this->load->library(array('upload', 'image_lib'));
    }

	public function Info()
	{
        $list = $this->Informasi->getAll();
		$data = array(
			'title' => 'Informasi - SIM DBD PUSKESMAS DINOYO',
            'list' => $list
		);
		$this->template->admin('admin/VInfo', $data);
	}

    public function store()
    {
        $param = $_POST;        

        $store['judul_info']    =$param['judul_info'];
        $store['desc_info']     =$param['desc_info'];
        $store['status']        =$param['status'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar'] = $banner;
        };

        $this->Informasi->insert($store);
        redirect('info'); 
    }    

    public function ajxGet(){
        $data['filter'] = 'id_info = '.$_POST['id_info'];
        
        $datas = $this->Informasi->get($data);
        
        $date=date_create($datas[0]->tgl_info);
        $datas[0]->tgl_info = date_format($date,"d F Y H:i:s");

        echo json_encode($datas);
    }

    public function edit(){
        $param = $_POST;

        $store['judul_info']    =$param['judul_info'];
        $store['desc_info']     =$param['desc_info'];
        $store['status']        =$param['status'];
        $store['id_info']       =$param['id_info'];

        if(!empty($_FILES['file']['name'])){
            $banner = $this->upload_image();
            $store['gambar'] = $banner;
        };

        $this->Informasi->update($store);

        redirect('info');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Informasi->delete($dataDelete);
        redirect('info');
    }

    function upload_image(){
        $config['upload_path'] = './uploads/info/'; 
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; 
        $config['encrypt_name'] = TRUE; 
 
        $this->upload->initialize($config);
        if(!empty($_FILES['file']['name'])){
 
            if ($this->upload->do_upload('file')){
                $gbr = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./uploads/info/'.$gbr['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= true;
                // $config['quality']= '100%';
                //$config['width']= 600;
                // $config['height']= 400;
                $config['new_image']= './uploads/info/'.$gbr['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
 
                $gambar=$gbr['file_name'];

                return base_url('uploads/info/'.$gambar);
            }                      
        }else{
            return base_url('uploads/info/default.jpg');
        }         
    }
}
