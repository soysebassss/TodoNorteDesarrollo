<?php
class Client_model extends CI_Model {

        //las mismas columnas de la base de datos
        private $_columns = array(
                'cli_id'=>0,
                'cli_nombre'=>'',
                'cli_apellidoPaterno'=>'',
                'cli_apellidoMaterno'=>'',
                'cli_rut'=>'',
                'cli_dv'=>'',
                'cli_nombrefantasia'=>'',
                'cli_direccion'=>'',
                'cli_telefono'=>'',
                'cli_email'=>'',
                'cli_comuna'=>'',
                'cli_giro'=>''

        );
        protected static $_table = 'cliente';

        public function __construct(){

        }
        public function findAll($where = array()) {
                $this->load->database();
                $result = null;
                $res    = $this->db->get_where(self::$_table , $where);
                if ($res->num_rows() > 0) {
                        foreach ($res->result() as $value) {
                                $result[] = $this->create($value);
                        }
                }
                return $result;
        }
        public function getRequired() {
                $requiredFields = array(
                        'cli_nombre',
                        'cli_rut',
                        'cli_email',
                        //'use_prof_id',
                        //'use_password',
                );
                return $requiredFields;
        }
        public function isNew() {
                return $this->_columns['cli_id'] == 0;
        }
        // metodo para obtener la comuna del cliente
        public function getComuna() {
                return self::$comuna[$this->_columns['cli_comuna']];
        }
        public function validate() {
                $emptyCollumn = array();
                foreach ($this->_columns as $key => $value) {
                        if ((is_null($value) || empty(str_replace(' ', "", $value))) && in_array($key, $this->getRequired())) {
                                $emptyCollumn[] = $key;
                        }
                }
                return $emptyCollumn;
        }
        public function setColumns($row = null) {
                foreach ($row as $key => $value) {
                        $this->_columns[$key] = $value;
                }
        }
        public function set($key, $value) {
                $this->_columns[$key] = $value;
        }
        public function findById($id = null) {
                $id = intval($id);
                $this->load->database();
                $res    = $this->db->get_where(self::$_table, array('cli_id' => $id));
                $result = null;
                if ($res->num_rows() == 1) {
                        $result = $this->create($res->row_object());
                }
                return $result;
        }
        public function get($attr) {
                return $this->_columns[$attr];
        }

        public function create($row) {
                $client = new Client_model();
                $client->setColumns($row);
                return $client;
        }

        public function save() {
                try {
                        $this->load->database();
                        if ($this->_columns['cli_id'] == 0 || is_null($this->_columns['cli_id'])) {
                                $this->db->insert(self::$_table, $this->_columns);
                                $this->_columns['cli_id'] = $this->db->insert_id();
                        } else {
                                $this->db->where('cli_id', $this->_columns['cli_id']);
                                $this->db->update(self::$_table, $this->_columns);
                        }
                } catch (Exception $e) {
                        echo "se produjo una excepcion del tipo".$e->getMessage();
                }
        }
        public function delete(){
                
        }
        public function toArray() {
                return get_object_vars($this);
        }

}
?>