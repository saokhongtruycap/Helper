<?php 
namespace Tests;

use PHPUnit\Framework\TestCase;
use PackageUrlHelper\UrlHelper;

/**
 * 
 */
class UrlHelperTest extends TestCase
{
	public function testValidateUrl()
	{
		$valiUrl = UrlHelper::validateUrl('https://www.google.com');
		$this->assertTrue($valiUrl);
	}

	public function testAppendUrlWithPathForHasSubdir()
	{
		$url = UrlHelper::appendUrlWithPath('https://www.google.com','abc','xyz.html');
		$urlResult = 'https://www.google.com/abc/xyz.html';
		$this->assertEquals($urlResult, $url);
	}

	public function testAppendUrlWithPathForNotSubdir()
	{
		$url = UrlHelper::appendUrlWithPath('https://www.google.com','','xyz.html');
		$urlResult = 'https://www.google.com/xyz.html';
		$this->assertEquals($urlResult, $url);
	}

}