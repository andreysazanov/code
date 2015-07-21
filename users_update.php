<?

  function compare_time ($v1, $v2) {
    if ($v1["date_time"] == $v2["date_time"]) return 0;
    return ($v1["date_time"] < $v2["date_time"])? -1: 1;
  }
  function compare_date ($v1, $v2) {
    if ($v1["date"] == $v2["date"]) return 0;
    return ($v1["date"] < $v2["date"])? -1: 1;
  }
  function compare_user ($v1, $v2) {
    if ($v1["id_user"] == $v2["id_user"]) return 0;
    return ($v1["id_user"] < $v2["id_user"])? -1: 1;
  }

	$filename = 'datausers.txt';
  $handle = fopen($filename, "r");
  $contents = fread($handle, filesize($filename));
  fclose($handle);

  $contents_array = preg_split("[\n]", $contents);

  foreach ($contents_array as $key => $value):
  	$data = explode(" ", $value);
  	$id_user = $data[0];
		$date = $data[1];
		$date_time = $data[2];

		$data_new[$key]['id_user'] = $id_user;
		$data_new[$key]['date'] = $date;
		$data_new[$key]['date_time'] = $date_time;
  endforeach;

	//sort array
	usort($data_new, "compare_time");
	usort($data_new, "compare_date");
  usort($data_new, "compare_user");

  foreach ($data_new as $k => $v):
  	$contents_new .= $v['id_user'].' '.$v['date'].' '.$v['date_time'].'<br>';
  endforeach;

  //create new file
  echo $contents_new;
?>