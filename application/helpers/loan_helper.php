<?php

if (!function_exists('calculate_emi_and_amortization')) {
    /**
     * Calculate EMI, generate the amortization table, and total repayment amount.
     *
     * @param float $loan_amount The loan amount
     * @param float $loan_interest_rate The annual interest rate
     * @param int $loan_tenor The loan tenor in months
     * @return array The calculated EMI, amortization table, and total repayment amount
     */
    function calculate_emi_and_amortization($loan_amount, $loan_interest_rate, $loan_tenor) {
        // Calculate EMI
        $loan_ir = $loan_interest_rate; // Annual Interest Rate
        $loan_time = $loan_tenor / 12;  // Loan tenure in years
        $numerator = $loan_amount * pow((1 + $loan_ir / (12 * 100)), $loan_time * 12);
        $denominator = 100 * 12 * (pow((1 + $loan_ir / (12 * 100)), $loan_time * 12) - 1) / $loan_ir;
        $emi = ($numerator / $denominator);
        
        $emi_sn = [];
        $emi_interest = [];
        $emi_principal = [];
        $emi_balance = [];
        $table = '';
        $total_repayment = 0; // Initialize total repayment amount
        
        // Generate amortization schedule
        for ($i = 1; $i <= $loan_tenor; $i++) {
            if ($i == 1) {
                $emi_sn[$i] = "Month " . $i;
                $emi_interest[$i] = ($loan_amount * $loan_interest_rate / 1200);
                $emi_principal[$i] = $emi - $emi_interest[$i];
                $emi_balance[$i] = $loan_amount - $emi_principal[$i];
            } else if ($i < 37) {
                $emi_sn[$i] = "Month " . $i;
                $emi_interest[$i] = ($emi_balance[$i - 1] * $loan_interest_rate / 1200);
                $emi_principal[$i] = $emi - $emi_interest[$i];
                $emi_balance[$i] = $emi_balance[$i - 1] - $emi_principal[$i];
            } else if ($i >= 37) {
                break;
            }

            // Payment date logic
            $day = date('j');
            if ($day >= 8) {
                $date = date('07/F/Y', strtotime('+' . $i . ' month'));
            } else {
                if ($i == 1) {
                    $date = date('07/F/Y');
                } else {
                    $date = date('07/F/Y', strtotime('+' . ($i - 1) . ' month'));
                }
            }
			
			$installment_days = $i * 30;

            // Add to table HTML
            $table .= "<tr><td>" . $emi_sn[$i] . "</td>" . "<td>" . round($emi) . "</td>" . "<td> After " . $installment_days . " days</td>" . "<td>" . round($emi_interest[$i]) . "</td>" . "<td>" . round($emi_principal[$i]) . "</td>" . "<td>" . round($emi_balance[$i]) . "</td></tr>";
            
            // Accumulate total repayment amount
            $total_repayment += round($emi);
        }

        return [
            'emi' => round($emi),
            'table' => $table,
            'emi_interest' => $emi_interest,
            'emi_principal' => $emi_principal,
            'emi_balance' => $emi_balance,
            'total_repayment' => $total_repayment
        ];
    }
}
