<?php
    function helper_log($tipe = "", $str = ""){
        $CI =& get_instance();

     
        if (strtolower($tipe) == "login"){
            $log_tipe   = 0;
        }
        elseif(strtolower($tipe) == "logout")
        {
            $log_tipe   = 1;
        }
        elseif(strtolower($tipe) == "update"){
            $log_tipe   = 2;
            $subcont_id = $CI->input->post('subcont_id');
        }
        elseif(strtolower($tipe) == "approved"){
            $log_tipe  = 3;
            $subcont_id = $CI->input->post('id_subcont');
        }elseif(strtolower($tipe) == "rejected"){
            $log_tipe  = 4;
            $subcont_id = $CI->input->post('id_subcont');
        }
        else{
            $log_tipe  = 5;
        };
     
        // paramter
        $param['subcont_id']    = $subcont_id;
        $param['log_user']      = $CI->session->userdata('username');
        $param['log_tipe']      = $log_tipe;
        $param['log_desc']      = $str;

        // var_dump($param);die;


        //load model log
        $CI->load->model('m_log');
     
        //save to database
        $CI->m_log->save_log($param);

        // var_dump($param);die;
     
    }
?>