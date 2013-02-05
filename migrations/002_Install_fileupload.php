<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Migration_Install_fileupload extends Migration {

	public function up()
	{
		$prefix = $this->db->dbprefix;
		
		$this->dbforge->add_field('`id` INT(10) NOT NULL AUTO_INCREMENT');
		$this->dbforge->add_field('`image_field_name` varchar(45) NOT NULL');
		
		$this->dbforge->add_key('id', true);
		$this->dbforge->create_table('fileupload');
		
		$this->db->query("INSERT INTO {$prefix}fileupload VALUES(1, 'image1.jpg')");		
		$this->db->query("INSERT INTO {$prefix}fileupload VALUES(2, 'image2.jpg')");
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$prefix = $this->db->dbprefix;

		$this->dbforge->drop_table('fileupload');

	}

	//--------------------------------------------------------------------

}