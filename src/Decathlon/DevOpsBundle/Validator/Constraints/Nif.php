<?php


namespace Decathlon\DevOpsBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
* @Annotation
*/
class Nif extends Constraint
{

    public $message = 'dni.notvalid';

}

