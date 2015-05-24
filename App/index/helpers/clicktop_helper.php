<?php

	function clicktop($fid)
	{
		$CI = & get_instance();
		$CI->load->model('WebDaohang');
		$daohang = WebDaohang::where('fid','=',$fid)->get();
		if(!empty($daohang->toArray()))
		{
			return $daohang;
		}else{
			return false;
		}
		
	}



?>