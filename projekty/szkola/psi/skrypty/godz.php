<?php
$cgodzina = date("G");
$godzina=array('1' => 'Pierwsza',
               '2' => 'Druga',
               '3' => 'Trzecia',
               '4' => 'Czwarta',
               '5' => 'Piąta',
               '6' => 'Szosta',
               '7' => 'Siodma',
               '8' => 'Osma',
               '9' => 'Dziewiata',
               '10' => 'Dziesiata',
               '11' => 'Jedynasta',
               '12' => 'Dwunasta',
               '13' => 'Trzynasta',
               '14' => 'Czternasta',
               '15' => 'Pietnasta',
               '16' => 'Szesnasta',
               '17' => 'Siedemnasta',
               '18' => 'Osiemnasta',
               '19' => 'Dziewietnasta',
               '20' => 'Dwudziesta',
               '21' => 'Dwudziesta pierwsza',
               '22' => 'Dwudziesta druga',
               '23' => 'Dwudziesta trzecia',
               '24' => 'Dwudziesta czwarta'
               );
$cminuty = date("i");
$minuty=array('01' => 'Jeden',
              '02' => 'Dwa',
              '03' => 'Trzy',
              '04' => 'Cztery',
              '05' => 'Piec',
              '06' => 'Szesc',
              '07' => 'Siedem',
              '08' => 'Osiem',
              '09' => 'Dziewiec',
              '10' => 'Dziesiec',
              '11' => 'Jedynascie',
              '12' => 'Dwanascie',
              '13' => 'Trzynascie',
              '14' => 'Czternascie',
              '15' => 'Pietnascie',
              '16' => 'Szesnascie',
              '17' => 'Siedemnascie',
              '18' => 'Osiemnascie',
              '19' => 'Dziewietnascie',
              '20' => 'Dwadziescia',
              '21' => 'Dwadziescia jeden',
              '22' => 'Dwadziescia dwa',
              '23' => 'Dwadziescia trzy',
              '24' => 'Dwadziescia cztery',
              '25' => 'Dwadziescia piec',
              '26' => 'Dwadziescia szesc',
              '27' => 'Dwadziescia siedem',
              '28' => 'Dwadziescia osiem',
              '29' => 'Dwadziescia dziewiec',
              '30' => 'Trzydzieści',
              '31' => 'Trzydzieści jeden',
              '32' => 'Trzydzieści dwa',
              '33' => 'Trzydzieści Trzy',
              '34' => 'Trzydzieści trzy',
              '35' => 'Trzydzieści cztery',
              '36' => 'Trzydzieści piec',
              '37' => 'Trzydzieści szesc',
              '38' => 'Trzydzieści siedem',
              '39' => 'Trzydzieści osiem',
              '40' => 'Trzydzieści dziewiec',
              '41' => 'Czterdziesci',
              '42' => 'Czterdziesci jeden',
              '43' => 'Czterdziesci dwa',
              '44' => 'Czterdziesci trzy',
              '45' => 'Czterdziesci piec',
              '46' => 'Czterdziesci szesc',
              '47' => 'Czterdziesci siedem',
              '48' => 'Czterdziesci osiem',
              '49' => 'Czterdziesci dziewiec',
              '50' => 'Piecdziesiat',
              '51' => 'Piecdziesiat jeden',
              '52' => 'Piecdziesiat dwa',
              '53' => 'Piecdziesiat trzy',
              '54' => 'Piecdziesiat cztery',
              '55' => 'Piecdziesiat piec',
              '56' => 'Piecdziesiat szesc',
              '57' => 'Piecdziesiat siedem',
              '58' => 'Piecdziesiat osiem',
              '59' => 'Piecdziesiat dziewiec'
                          );
                          
$godziny = $godzina[$cgodzina];
$minuta = $minuty[$cminuty];

echo 'Obecna Godzina to:';
echo '&nbsp;';
echo '<b>';
echo $godziny;
echo '</b>';
echo '&nbsp;';
echo '<b>';
echo $minuta;
echo '</b>';
?>

