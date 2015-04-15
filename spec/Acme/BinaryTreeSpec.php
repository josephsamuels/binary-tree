<?php namespace spec\Acme;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class BinaryTreeSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Acme\BinaryTree');
    }

    function it_adds_one_element_to_tree()
    {
        $this->add('Hello');

        $this->get(0)->shouldReturn('Hello');
    }
}
