<?php
declare(strict_types=1);

use Rector\CodeQuality\Rector\Array_\CallableThisArrayToAnonymousFunctionRector;
use Rector\CodeQuality\Rector\FuncCall\SetTypeToCastRector;
use Rector\CodeQuality\Rector\LogicalAnd\LogicalToBooleanRector;
use Rector\CodeQuality\Rector\NotEqual\CommonNotEqualRector;
use Rector\Config\RectorConfig;
use Rector\Core\Configuration\Option;
use Rector\Php55\Rector\String_\StringClassNameToClassConstantRector;
use Rector\Set\ValueObject\SetList;


return static function (RectorConfig $rectorConfig): void {
	$rectorConfig->disableParallel();
	
	// PHP minimum for Joomla! 4.x
	$rectorConfig->phpVersion(70205);
	
	$rectorConfig->paths([
		__DIR__ . '/src',
	]);
	
	// define sets of rules
	$rectorConfig->sets([
		SetList::NAMING,
		SetList::MYSQL_TO_MYSQLI,
		SetList::CODE_QUALITY,
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
			StringClassNameToClassConstantRector::class,
			CommonNotEqualRector::class,
			SetTypeToCastRector::class,
			LogicalToBooleanRector::class,
		]
	);
	
};
