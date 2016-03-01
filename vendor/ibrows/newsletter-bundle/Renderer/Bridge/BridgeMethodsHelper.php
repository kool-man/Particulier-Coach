<?php

namespace Ibrows\Bundle\NewsletterBundle\Renderer\Bridge;

class BridgeMethodsHelper
{
    protected $bridge;

    public function __construct($bridge)
    {
        $this->bridge = $bridge;
    }

    /**
     * @return array
     */
    public function getMethodDefinitions()
    {
        $reflection = new \ReflectionClass($this->bridge);
        $definitions = array();

        foreach ($reflection->getMethods() as $reflectionMethod) {
            if (substr($reflectionMethod->getName(), 0, 2) == "__") {
                continue;
            }

            $parameters = array();

            foreach ($reflectionMethod->getParameters() as $reflectionParameter) {
                $parameters[] = array(
                    'name' => $reflectionParameter->getName(),
                    'isOptional' => $reflectionParameter->isOptional(),
                    'defaultValue' => $reflectionParameter->isOptional() ? $reflectionParameter->getDefaultValue() : null
                );
            }

            $definitions[] = array(
                'name' => $reflectionMethod->getName(),
                'parameters' => $parameters
            );
        }

        return $definitions;
    }
}
