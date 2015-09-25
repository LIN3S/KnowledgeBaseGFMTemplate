<?php

/*
 * This file is part of the Knowledge Base package.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace spec\LIN3S\KnowledgeBaseGFMTemplate;

use LIN3S\KnowledgeBaseGFMTemplate\Template;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

/**
 * Spec class of template.
 *
 * @author Beñat Espiña <benatespina@gmail.com>
 */
class TemplateSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('LIN3S\KnowledgeBaseGFMTemplate\Template');
    }
    
    function it_implements_template_interface()
    {
        $this->shouldImplement('LIN3S\KnowledgeBase\Templating\TemplateInterface');
    }

    function it_renders()
    {
        $this->render([]);
    }
    
    function it_name()
    {
        $this->name()->shouldReturn(Template::NAME);
    }
    
    function it_assets_path()
    {
        $this->assetsPath();
    }
}
