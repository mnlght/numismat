<?php 
function forex($valuta,$price,$kurs1,$kurs2,$kurs3) {
		if ($valuta == "руб"){$new_price1 = $price/$kurs1;}//тут первым выводит доллар
		if ($valuta == "$"){$new_price1 = $price*$kurs1;}//тут первым выводит рубль
		if ($valuta == "грн"){$new_price1 = $price/$kurs3;}//тут первым выводит доллар
		$new_price1 = round($new_price1);
		return $new_price1;
}

function forex2($valuta,$price,$znachok,$kurs1,$kurs2,$kurs3){
		if ($valuta == "руб"){if ($znachok == "$"){$new_price2 = $price/$kurs2;}}//то тут гривна
		elseif($valuta == "$"){if ($znachok == " руб"){$new_price2 = $price*$kurs3;}}//то тут гривна
		elseif($valuta == "грн"){if ($znachok == "$"){$new_price2 = $price*$kurs2;}}// то тут рубль
		$new_price2 = round($new_price2);
		return $new_price2;
}

?>