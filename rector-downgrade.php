<?php
declare(strict_types=1);

use Rector\CodeQuality\Rector\Array_\CallableThisArrayToAnonymousFunctionRector;
use Rector\CodeQuality\Rector\FuncCall\SetTypeToCastRector;
use Rector\CodeQuality\Rector\LogicalAnd\LogicalToBooleanRector;
use Rector\CodeQuality\Rector\NotEqual\CommonNotEqualRector;
use Rector\Config\RectorConfig;
use Rector\Core\Configuration\Option;
use Rector\DeadCode\Rector\ClassMethod\RemoveEmptyClassMethodRector;
use Rector\DeadCode\Rector\Node\RemoveNonExistingVarAnnotationRector;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Set\ValueObject\DowngradeLevelSetList;


return static function (RectorConfig $rectorConfig): void {
	$rectorConfig->disableParallel();
	
	$rectorConfig->phpVersion(70205);
	
	$rectorConfig->autoloadPaths([
		__DIR__ . '/vendor/autoload.php',
	]);
	
	$rectorConfig->paths([
		__DIR__ . '/libraries/src',
		__DIR__ . '/src',
	]);
	
	// define sets of rules
	$rectorConfig->sets([
		DowngradeLevelSetList::DOWN_TO_PHP_72,
	]);
	
	$rectorConfig->importNames();
	$rectorConfig->parameters()->set(Option::APPLY_AUTO_IMPORT_NAMES_ON_CHANGED_FILES_ONLY, true);
	
	
	$rectorConfig->skip(
		[
			__DIR__ . '/**/tests/**/*',
			__DIR__ . '/**/vendor/**/*',
			__DIR__ . '/**/lib/**/*',
			__DIR__ . '/**/third/**/*',
			CallableThisArrayToAnonymousFunctionRector::class,
			RemoveNonExistingVarAnnotationRector::class,
			RemoveEmptyClassMethodRector::class,
			StringClassNameToClassConstantRector::class,
			CommonNotEqualRector::class,
			SetTypeToCastRector::class,
			LogicalToBooleanRector::class,
		]
	);
	
};
