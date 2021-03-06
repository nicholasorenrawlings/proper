<?php

require 'class.php';
require 'functions.php';
define("OUTPUT_WIDTH", 80);
define("CODE_COLUMN_WIDTH", 36);

$demo = new Demo();




demo('Alpha is an unannotated property.  As such, it is neither readable nor writable:', array(
	'$demo->getAlpha()',
	'$demo->setAlpha("aspen")'
));

demo('Beta is marked as readable, but not writable:', array(
	'$demo->getBeta()',
	'$demo->setBeta("beech")'
));

demo('Gamma is both readable and writable:', array(
	'$demo->getGamma()',
	'$demo->setGamma("ginko")'
));

demo('Delta has a type filter that only allows string assignments:', array(
	'$demo->setDelta(3.14)',
	'$demo->setDelta(true)',
	'$demo->setDelta("dogwood")'
));

demo('Epsilon has a type filter casts assigned values to integers:', array(
	'$demo->setEpsilon(3.14)',
	'$demo->setEpsilon(true)',
	'$demo->setEpsilon("elm")'
));

demo('Zeta has a type filter that accepts any numeric input, including integers, floats, and strings containing digits.  It casts its input to a float:', array(
	'$demo->setZeta(127)',
	'$demo->setZeta(0x7F)',
	'$demo->setZeta(3.14)',
	'$demo->setZeta("3.14")',
	'$demo->setZeta("zebrawood")'
));

demo('Eta has a type filter that only accepts both integers and booleans.  It casts its input to a boolean:', array(
	'$demo->setEta(true)',
	'$demo->setEta(0)',
	'$demo->setEta(3)',
	'$demo->setEta(3.14)',
));

demo('Theta has a regular expression filter that only accepts strings that start with the letters "th":', array(
	'$demo->setTheta("arborvitae")',
	'$demo->setTheta("thuja")'
));

date_default_timezone_set('UTC');
demo('Iota has an instance filter that only accepts DateTime objects:', array(
	'$demo->setIota(new DateTime())',
	'$demo->setIota(time())'
));

demo('Kappa has a range filter that only accepts numbers greater than 0 and less than or equal to 1:', array(
	'$demo->setKappa(0.0)',
	'$demo->setKappa(0.5)',
	'$demo->setKappa(1.0)',
	'$demo->setKappa(1.5)'
));

demo('Lambda has a length filter that only accepts strings with a length between 5 and 7 characters:', array(
	'$demo->setLambda("larch")',
	'$demo->setLambda("lime")',
	'$demo->setLambda("leadwood")',
	'$demo->setLambda("locust")'
));