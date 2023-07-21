
function decimalToRatio($decimal)
{
    $numerator = $decimal;
    $denominator = 1;

    while (floor($numerator) !== $numerator) {
        $numerator *= 10;
        $denominator *= 10;
    }

    $gcd = function ($a, $b) use (&$gcd) {
        return $b === 0 ? $a : $gcd($b, $a % $b);
    };

    $divisor = $gcd($numerator, $denominator);

    $ratioNumerator = $numerator / $divisor;
    $ratioDenominator = $denominator / $divisor;

    return "{$ratioNumerator} : {$ratioDenominator}";
}
