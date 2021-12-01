<?php

namespace Abublihi\Tests;

// use ImmutableIdFunctions\ToBase64;
use Abublihi\Guid\ToBase64;
use PHPUnit\Framework\TestCase;

/**
*  Corresponding Class to test YourClass class
*
*  For each class in your library, there should be a corresponding Unit-Test for it
*  Unit-Tests should be as much as possible independent from other test going on.
*
*  @author yourname
*/
class ToBase64Test extends TestCase
{
    
  /**
  * Just check if the YourClass has no syntax error
  *
  * This is just a simple check to make sure your library has no syntax error. This helps you troubleshoot
  * any typo before you even use this library in a real project.
  *
  */
    public function testEncodingObjectGuidToBase64()
    {
        $toBase64 = new ToBase64("7ea2e22f-31cb-4c97-89eb-1b4501aafe40");
        $this->assertEquals($toBase64->getBase64(), "L+Kifssxl0yJ6xtFAar+QA==");

        $guidEncodedInBase64 = ToBase64::encode("748b2d72-706b-42f8-8b25-82fd8733860f");
        $this->assertEquals($guidEncodedInBase64, "ci2LdGtw+EKLJYL9hzOGDw==");
        
        $guidEncodedInBase64 = ToBase64::encode("7e26997b-09a9-4f6e-b406-7327e3a5c370");
        $this->assertTrue($guidEncodedInBase64 == "e5kmfqkJbk+0BnMn46XDcA==");
    }
}
