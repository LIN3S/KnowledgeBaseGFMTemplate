<?php

/*
 * This file is part of the Knowledge Base project.
 *
 * Copyright (c) 2015 LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace LIN3S\KnowledgeBaseGFMTemplate;

use LIN3S\KnowledgeBase\Templating\TemplateInterface;

/**
 * Template class.
 *
 * @author Gorka Laucirica <gorka@lin3s.com>
 * @author Beñat Espiña <bespina@lin3s.com>
 */
final class Template implements TemplateInterface
{
    const NAME = 'gfm';
    const ASSETS_PATH = '/UI/assets';

    /**
     * The template engine
     *
     * @var \Twig_Environment
     */
    private $engine;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->engine = new \Twig_Environment(
            new \Twig_Loader_Filesystem([__DIR__ . self::ASSETS_PATH . '/../'])
        );
    }

    /**
     * {@inheritdoc}
     */
    public function render(array $content)
    {
        return $this->engine->render('page.html.twig', $content);
    }

    /**
     * {@inheritdoc}
     */
    public function name()
    {
        return self::NAME;
    }

    /**
     * {@inheritdoc}
     */
    public function assetsPath()
    {
        return __DIR__ . self::ASSETS_PATH;
    }
}
