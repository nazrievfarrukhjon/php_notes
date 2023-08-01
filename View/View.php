<?php

namespace View;

class View {
    public array $data;

    public function __set(string $name, $value): void
    {
        $this->data[$name] = $value;
    }

    public function __isset(string $name): bool
    {
        return isset($this->data[$name]);
    }

    public function __get(string $name)
    {

        return $this->data[$name] ?? null;
    }

    public function assign($key, $data)
    {
        $this->data[$key] = $data;
    }

    public function display(string $template): void
    {
//        foreach ($this->data as $name => $datum) {
//            ${$name} = $datum;
//        }

        include $template;
    }
}

