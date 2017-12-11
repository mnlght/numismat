<?php 
function znachok($valuta) {
		if ($valuta == "руб"){$znachok="$";}
		if ($valuta == "$"){$znachok=" руб";}
		if ($valuta == "грн"){$znachok="$";}
		return $znachok;
}

function znachok1($valuta,$znachok) {
		if ($valuta == "руб"){if ($znachok=="$"){$znachok2=" грн";}}
		if ($valuta == "$"){if ($znachok==" руб"){$znachok2=" грн";}}
		if ($valuta == "грн"){if ($znachok=="$"){$znachok2=" руб";}}
		return $znachok2;
}
?>