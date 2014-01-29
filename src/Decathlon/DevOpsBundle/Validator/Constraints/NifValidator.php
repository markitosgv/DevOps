<?php

namespace Decathlon\DevOpsBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * @author Marcos Gómez
 *
 * @api
 */
class NifValidator extends ConstraintValidator {
	/**
	 * {@inheritDoc}
	 */
	public function validate($value, Constraint $constraint) {
        if (null === $value || '' === $value) {
            return;
        }
        $letters = 'TRWAGMYFPDXBNJZSQVHLCKE';
        $letter = strtoupper(substr($value,8,1));
        $nif = strtoupper(substr($value,0,8));
        $nif = str_replace('X','0',$nif);
        $nif = str_replace('Y','1',$nif);
        $nif = str_replace('Z','2',$nif);
        $nif -= intval($nif/23) * 23;
		if ($letters{$nif} != $letter) {
			$this->context
					->addViolation($constraint->message,
                             array('%string%' => $value));
		}

	}

}
