<?php

namespace Behavioral\TemplateMethod;

abstract class Page
{
    private array $renderSteps;

    final public function renderPage(): string
    {
        $this->renderSteps [] = $this->getPageHeader();
        $this->renderSteps [] = $this->getPageNav();
        $this->renderSteps [] = $this->getPageBody();
        $this->renderSteps [] = $this->getPageFooter();
        return implode(" ", $this->renderSteps);
    }

    abstract protected function getPageHeader(): string;

    abstract protected function getPageNav(): string;

    abstract protected function getPageBody(): string;

    abstract protected function getPageFooter(): string;
}