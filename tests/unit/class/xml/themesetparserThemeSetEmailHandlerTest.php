<?php
require_once(__DIR__.'/../../init_new.php');

class ThemeSetEmailHandlerTest extends \PHPUnit\Framework\TestCase
{
    protected $myclass = 'ThemeSetEmailHandler';
    protected $object = null;

    public function setUp()
    {
        $input = 'input';
        $this->object = new $this->myclass($input);
    }

    public function test___construct()
    {
        $instance = $this->object;
        $this->assertInstanceOf('XmlTagHandler', $instance);
    }

    public function test_getName()
    {
        $instance = $this->object;

        $name = $instance->getName();
        $this->assertSame('email', $name);
    }

    public function test_handleCharacterData()
    {
        $instance = $this->object;

        $input = 'input';
        $parser = new XoopsThemeSetParser($input);
        $parser->tags = array('author','author');
        $data = 'data';
        $x = $instance->handleCharacterData($parser, $data);
        $this->assertSame(null, $x);
        $this->assertSame($data, $parser->getTempArr('email'));

        $input = 'input';
        $parser = new XoopsThemeSetParser($input);
        $parser->tags = array('dummy','dummy');
        $data = 'data';
        $x = $instance->handleCharacterData($parser, $data);
        $this->assertSame(null, $x);
        $this->assertSame(false, $parser->getTempArr('email'));
    }
}
