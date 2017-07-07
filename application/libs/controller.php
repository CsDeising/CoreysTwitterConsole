<?php

/**
 * Base controller class that other controllers will extend.
 */
class Controller
{
    // This function allows our controllers to 'load' a model by its file name.
    public function loadModel($model_name)
    {
        require 'application/models/' . strtolower($model_name) . '.php';
	return new $model_name();
    }
}
