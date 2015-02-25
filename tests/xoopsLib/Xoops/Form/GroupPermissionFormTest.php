<?php
namespace Xoops\Form;

require_once(dirname(__FILE__).'/../../../init_mini.php');

/**
 * Generated by PHPUnit_SkeletonGenerator on 2014-08-18 at 21:59:24.
 */
 
/**
 * PHPUnit special settings :
 * @backupGlobals disabled
 * @backupStaticAttributes disabled
 */

class GroupPermissionFormTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var GroupPermissionForm
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new GroupPermissionForm('Caption', 'name', 2, 'description');
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Xoops\Form\GroupPermissionForm::addItem
     */
    public function testAddItem()
    {
        // see testRender
    }

    /**
     * @covers Xoops\Form\GroupPermissionForm::render
     */
    public function testRender()
    {
        $this->object->addItem(1, 'item_name1');
        $this->object->addItem(10, 'item_name10', 1);
        $value = $this->object->render();
        $this->assertTrue(is_string($value));
        $this->assertTrue(false !== strpos($value, '<h4>Caption</h4>description'));
        $this->assertTrue(false !== strpos($value, '<form'));
        $this->assertTrue(false !== strpos($value, 'title="Caption"'));
        $this->assertTrue(false !== strpos($value, '<input'));
        $this->assertTrue(false !== strpos($value, 'type="checkbox"'));
        $this->assertTrue(false !== strpos($value, '</form'));
    }
}