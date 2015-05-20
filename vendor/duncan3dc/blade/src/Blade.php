<?php

namespace duncan3dc\Laravel;

use duncan3dc\Helpers\Env;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\View;

/**
 * Standalone class for generating text using blade templates.
 */
class Blade
{
    /**
     * @var BladeInstance $instance The internal cache of the BladeInstance to only instantiate it once
     */
    protected static $instance;

    /**
     * Get the BladeInstance object.
     *
     * @return BladeInstance
     */
    protected static function getInstance()
    {
        if (!static::$instance) {
            static::$instance = new BladeInstance;
        }

        return static::$instance;
    }


    /**
     * Add extra functionality to the blade templating compiler.
     *
     * @param BladeCompiler $blade The compiler to extend
     *
     * @return void
     */
    public static function extendBlade(BladeCompiler $blade)
    {
        $keywords = [
            "namespace",
            "use",
        ];
        foreach ($keywords as $keyword) {
            $blade->extend(function($view, $compiler) use($keyword) {
                $pattern = $compiler->createMatcher($keyword);
                return preg_replace_callback($pattern, function($matches) use($keyword) {
                    return $matches[1] . "<?php {$keyword} " . substr($matches[2], 1, -1) . " ?>";
                }, $view);
            });
        }
    }


    /**
     * Add a path to look for views in.
     *
     * @param string $path The path to look in
     *
     * @return void
     */
    public static function addPath($path)
    {
        static::getInstance()->addPath($path);
    }


    /**
     * Check if a view exists.
     *
     * @param string $view The name of the view to check
     *
     * @return boolean
     */
    public static function exists($view)
    {
        return static::getInstance()->exists($view);
    }


    /**
     * Share data across all views.
     *
     * @param string $key The name of the variable to share
     * @param mixed $value The value to assign to the variable
     *
     * @return void
     */
    public static function share($key, $value)
    {
        static::getInstance()->share($key, $value);
    }


    /**
     * Register a composer.
     *
     * @param string $key The name of the composer to register
     * @param mixed $value The closure or class to use
     *
     * @return void
     */
    public static function composer($key, $value)
    {
        static::getInstance()->composer($key, $value);
    }


    /**
     * Register a creator.
     *
     * @param string $key The name of the creator to register
     * @param mixed $value The closure or class to use
     *
     * @return void
     */
    public static function creator($key, $value)
    {
        static::getInstance()->creator($key, $value);
    }


    /**
     * Generate a view.
     *
     * @param string $view The name of the view to make
     * @param array $params The parameters to pass to the view
     *
     * @return View The generated view
     */
    public static function make($view, array $params = [])
    {
        return static::getInstance()->make($view, $params);
    }


    /**
     * Get the content by generating a view.
     *
     * @param string $view The name of the view to make
     * @param array $params The parameters to pass to the view
     *
     * @return string The generated content
     */
    public static function render($view, array $params = [])
    {
        return static::getInstance()->render($view, $params);
    }
}
