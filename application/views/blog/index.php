<?php

foreach ($query as $key => $value) {
	$url = "http://localhost/ci_first/index.php/blog_controller/edit/".$value->id;
	echo $value->title;
	echo '<a href="'.$url.'">Edit</a><br>';
	
}


$query = $this->db->query('SELECT title, content, date FROM entries');

foreach ($query->result() as $row)
{
        echo $row->title;
        echo $row->content;
        echo $row->date;
}

echo 'Total Results: ' . $query->num_rows();

// $query = $this->db->query('SELECT title FROM entries LIMIT 1');
// $row = $query->row();
// echo $row->title;

// $sql = "INSERT INTO entries (title, content) VALUES ('Alo', 'Potol')";
// $this->db->query($sql);
// echo 'QWEERRT'.$this->db->affected_rows();

$query = $this->db->get('entries');

foreach ($query->result() as $row)
{
        echo $row->title;
}