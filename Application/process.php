<?php


function find_type ($Nom,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,$Q12,$Q13,$Q14,$Q15,$Q16,$Q17,$Q18,$Q19,$Q20,$Q21,$Q22,$Q23,$Q24,$Q25,$Q26,$Q27,$Q28,$Q29,$Q30,$Q31,$Q32,$Q33,$Q34,$Q35,$Q36)
 {

$output = `swipl -s type_personnalite.pl -g "calcul_type($Nom,$Q1,$Q2,$Q3,$Q4,$Q5,$Q6,$Q7,$Q8,$Q9,$Q10,$Q11,$Q12,$Q13,$Q14,$Q15,$Q16,$Q17,$Q18,$Q19,$Q20,$Q21,$Q22,$Q23,$Q24,$Q25,$Q26,$Q27,$Q28,$Q29,$Q30,$Q31,$Q32,$Q33,$Q34,$Q35,$Q36)." -t halt.`;
return ($output);

}

?>