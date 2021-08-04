<?php

namespace Behavioral\TemplateMethod;

class RegisterPage extends Page
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
        return "<body>Register Form</body>";
    }

    protected function getPageFooter(): string
    {
        return "";
    }
}