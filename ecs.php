<?php
declare(strict_types=1);

use PhpCsFixer\Fixer\ArrayNotation\ArraySyntaxFixer;
use PhpCsFixer\Fixer\Import\NoUnusedImportsFixer;
use Symplify\EasyCodingStandard\Config\ECSConfig;

return static function (ECSConfig $ecsConfig): void {
	$ecsConfig->paths([
		__DIR__ . '/src',
	]);
	
	$ecsConfig->rule(NoUnusedImportsFixer::class);
	
	$ecsConfig->ruleWithConfiguration(ArraySyntaxFixer::class, [
		'syntax' => 'short',
	]);
	
	$ecsConfig->skip([
		__DIR__ . '/**/tests/**/*',
		__DIR__ . '/**/vendor/**/*',
		__DIR__ . '/**/lib/**/*',
		__DIR__ . '/**/third/**/*',
	]);
};
