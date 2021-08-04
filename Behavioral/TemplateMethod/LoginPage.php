<?php

namespace Behavioral\TemplateMethod;

class LoginPage extends Page
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
        return "<body>Login Form</body>";
    }

    protected function getPageFooter(): string
    {
        return "";
    }
}