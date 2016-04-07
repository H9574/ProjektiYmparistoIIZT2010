<?php
//lääkkis laskuja

class Laskuja {
        protected $KuivaAine;
        protected $Laimennus;
        protected $Minimi;
        protected $Maksimi;
        protected $Aika;
        protected $InfuusioNopeus;
        protected $Paino;
        protected $Vahvuus;
        protected $Annos;
        protected $TarvittavaAntoNopeus;
        protected $AntoNopeus;
        protected $KohdeProsentti;
        protected $Ruisku;
        protected $Maara;
        protected $Suolaliuos;
        protected $Injektioliuos;
        protected $Laake;
        //Tehtävä 1
        public function LaskeAnnostusMaksimi($Maksimi, $Aika){
                $Vastaus = $Maksimi*$Aika;
                return $Vastaus;
        }
        public function LaskeAnnostusMinimi($Minimi, $Aika){
                $Vastaus = $Minimi*$Aika;
                return $Vastaus;
        }
        //Tehtävä 2
        public function LaskeRuiskujenMaara($Aika, $Ruisku, $InfuusioNopeus){
                $Vastaus = $InfuusioNopeus*$Aika/$Ruisku;
                return $Vastaus;
        }
        //Tehtävä 3
        public function LaskeAntoNopeus($Paino, $Vahvuus, $TarvittavaAntoNopeus){
                $Vastaus = $Paino*$TarvittavaAntoNopeus/$Vahvuus;
                return $Vastaus;
        }
        //Tehtävä 4
        public function LaskeNesteMaarasta($KuivaAine, $Laimennus){
                $Vastaus = $KuivaAine/$Laimennus;
                return $Vastaus;
        }
        //Tehtävä 5
        public function LaskeNesteProsenteilla($KuivaAine, $KohdeProsentti){
                $Vastaus = $KuivaAine/($KohdeProsentti*10);
                return $Vastaus;
        }
        //Tehtävä 6
        public function LaskeNestePainosta($Annos, $Paino, $Aika){
                $Vastaus = $Annos*$Paino*$Aika;
                return $Vastaus;
        }
        //Tehtävä 7
        public function LaskeYksikössäMgMl($KuivaAine, $Liuos){
                $Vastaus = $KuivaAine/$Liuos;
                return $Vastaus;
        }
		public function LaskeYksikössäProsentti($KuivaAine, $Liuos){
                $Vastaus = $KuivaAine/($Liuos*10);
                return $Vastaus;
        }
        //Tehtävä 8
        public function LaskeVahvuus($KuivaAine, $Laimennus){
                $Vastaus = $KuivaAine/$Laimennus;
                return $Vastaus;
        }
        //Tehtävä 9
        public function LaskeSaatuLaake($Laake, $Vahvuus){
                $Vastaus = $Laake*$Vahvuus;
                return $Vastaus;
        }
        //Tehtävä 10
        public function LaskeSaatuLiuos($Laake, $Vahvuus, $Paino, $Injektioliuos, $Suolaliuos){
                $Vastaus = $Paino*$Laake*$Vahvuus/($Injektioliuos*$Suolaliuos);
                return $Vastaus;
        }
        //Tehtävä 11
        public function LaskeMaara($KuivaAine, $Suolaliuos, $Maara){
                $Vastaus = $Maara*$Suolaliuos/$KuivaAine;
                return $Vastaus;
        }
        //Tehtävä 12
        public function LaskeSaatuMaara($Vahvuus, $Maara){
                $Vastaus = $Maara/$Vahvuus;
                return $Vastaus;
        }
}

class Roomalaiset {
        protected $Normi;
		protected $Rooma;


        /* Lähde: https://www.rosettacode.org/wiki/Roman_numerals/Encode  */
        public function MuunnaNormiRoomaksi($Normi){
                if (!is_int($Normi) || $Normi < 1) return false; // Negatiivisia ja nollaa ei huomioida

                $Numerot = array(900, 500,  400, 100,   90,  50,   40,  10,    9,   5,    4,   1);
                $Roomalaiset = array('CM', 'D', 'CD', 'C', 'XC', 'L', 'XL', 'X', 'IX', 'V', 'IV', 'I');
                $Suurin = intval($Normi / 1000) * 1000;
                $Pienin = $Normi - $Suurin;
                $Luku = $leastSig = '';

                for ($i = 0; $i < sizeof($Numerot); $i++) {
                        while ($Pienin >= $Numerot[$i]) {
                                $leastSig .= $Roomalaiset[$i];
                                $Pienin  -= $Numerot[$i];
                        }
                }
                if ($Luku >= 1000 && $Luku < 40000) {
                        if ($Suurin >= 10000) {
                                $Luku .= '(';
                                while ($Suurin >= 10000) {
                                        $Luku .= 'X';
                                        $Suurin -= 10000;
                                }
                                $Luku .= ')';
                        }
                        if ($Suurin == 9000) {
                                $Luku .= 'M(X)';
                                return $Luku . $leastSig;
                       }
                        if ($Suurin == 4000) {
                                $Luku .= 'M(V)';
                                return $Luku . $leastSig;
                        }
                        if ($Suurin >= 5000) {
                                $Luku .= '(V)';
                                $Suurin -= 5000;
                        }
                        while ($Suurin >= 1000) {
                                $Luku .= 'M';
                                $Suurin -= 1000;
                        }
                }

                if ($Normi >= 40000) {
                        $Suurin = $Suurin/1000;
                        $Luku .= '(' . MuunnaNormiRoomaksi($Suurin) . ')';
                }
                return $Luku . $leastSig;
        }


        /* Lähde: https://www.rosettacode.org/wiki/Roman_numerals/Decode#PHP  */
        public function MuunnaRoomaNormiksi($Rooma){
                $RoomaNormiksi = array( 'I' => 1,
										'V' => 5,
										'X' => 10,
										'L' => 50,
										'C' => 100,
										'D' => 500,
										'M' => 1000,);

                // Rikkoo roomalaisen luvun osiksi ja ne luvuiksi
                $digits = str_split($Rooma);
                $ViimeinenIndeksi = count($digits)-1;
                $summaus = 0;

                foreach($digits as $Indeksi => $digit)
                {
                        if(!isset($digits[$Indeksi]))
                        {
                                continue;
                        }

                        if(isset($RoomaNormiksi[$digit]))
                        {
                                if($Indeksi < $ViimeinenIndeksi)
                                {
                                        $left = $RoomaNormiksi[$digits[$Indeksi]];
                                        $right = $RoomaNormiksi[$digits[$Indeksi+1]];
                                        if($left < $right)
                                        {
                                                $summaus += ($right - $left);
                                                unset($digits[$Indeksi+1],$left, $right);
                                                continue;
                                        }
                                        unset($left, $right);
                                }
                        }
                        $summaus += $RoomaNormiksi[$digit];
                }

                return $summaus;
        }
}
?>
