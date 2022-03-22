<?php
function lulus_matkul($nilai_total){
 	if ($nilai_total > 55){
 		return "LULUS";
 	}else{
 		return "TIDAK LULUS";
 	}
}

function grade($nilai) {
	if ($nilai_matkul >= 85){
		return "A";
	}elseif($nilai_matkul >= 70){
	   return "B";
	}elseif($nilai_matkul >= 56){
		return "C";
	}elseif($nilai_matkul >= 36){
		return "D";
	}elseif ($nilai_matkul >= 10){
		return "E";
	}else{
		return "(tidak ada nilai)";
	}
}

function predikat($grade){
	switch ($grade)
	{
		case "A":
			return "(Sangat Memuaskan)";
			break;

		case "B":
			return "(Memuaskan)";
			break;

		case "C":
			return "(Cukup)";
			break;

		case "D":
			return "(Kurang)";
			break;

		case "E":
			return "(Sangat Kurang)";
			break;
	}   
}
?>