<?php

namespace Behavioral\TemplateMethod;

class NotFoundPage extends Page
{
    protected function getPageHeader(): string
    {
        return "<header>Load css and js files</header>";
    }

    protected function getPageNav(): string
    {
        return "";
    }

    protected function getPageBody(): string
    {
        return "<body>404 message</body>";
    }

    protected function getPageFooter(): string
    {
        return "<footer>Contact Us and Site Map</footer>";
    }
}