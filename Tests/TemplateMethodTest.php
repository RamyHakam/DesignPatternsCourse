<?php

namespace Tests;

use Behavioral\TemplateMethod\HomePage;
use Behavioral\TemplateMethod\LoginPage;
use Behavioral\TemplateMethod\NotFoundPage;
use Behavioral\TemplateMethod\RegisterPage;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{
    public function testCanRenderHomePage(): void
    {
        $homePage = new HomePage();
        $renderedHomePage = $homePage->renderPage();

        self::assertStringContainsString('<body>List Of New Feeds</body>', $renderedHomePage);
        self::assertStringNotContainsString('<body>Login Form</body>', $renderedHomePage);
    }

    public function testCanRenderLoginPage(): void
    {
        $loginPage = new LoginPage();
        $renderedHomePage = $loginPage->renderPage();

        self::assertStringNotContainsString('<body>List Of New Feeds</body>', $renderedHomePage);
        self::assertStringContainsString('<body>Login Form</body>', $renderedHomePage);
        self::assertStringNotContainsString('<footer></footer>', $renderedHomePage);

    }

    public function testCanRenderRegisterPage(): void
    {
        $registerPage = new RegisterPage();
        $renderedHomePage = $registerPage->renderPage();

        self::assertStringNotContainsString('<body>List Of New Feeds</body>', $renderedHomePage);
        self::assertStringContainsString('<body>Register Form</body>', $renderedHomePage);
        self::assertStringNotContainsString('<footer></footer>', $renderedHomePage);

    }

    public function testCanRende404Page(): void
    {
        $notFoundPage = new NotFoundPage();
        $renderedHomePage = $notFoundPage->renderPage();

        self::assertStringNotContainsString('<body>List Of New Feeds</body>', $renderedHomePage);
        self::assertStringNotContainsString('<body>Login Form</body>', $renderedHomePage);
        self::assertStringContainsString('<footer>Contact Us and Site Map</footer>', $renderedHomePage);
        self::assertStringContainsString('<footer>Contact Us and Site Map</footer>', $renderedHomePage);
        self::assertStringContainsString('<body>404 message</body>', $renderedHomePage);
    }

}