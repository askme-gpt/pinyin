<?php

namespace Ysp\Pinyin;

use ArrayAccess;
use JsonSerializable;

class Collection implements ArrayAccess, JsonSerializable
{
    public function __construct($items = [])
    {
        $this->items = $items;
    }

    public function join(string $separator = ' ')
    {
        return implode($separator, \array_map(function ($item) {
            return \is_array($item) ? '['.\implode(', ', $item).']' : $item;
        }, $this->items));
    }

    public function map(callable $callback)
    {
        return new static(array_map($callback, $this->all()));
    }

    public function all()
    {
        return $this->items;
    }

    public function toArray()
    {
        return $this->all();
    }

    public function toJson(int $options = 0)
    {
        return json_encode($this->all(), $options);
    }

    public function __toString()
    {
        return $this->join();
    }

    public function offsetExists($offset)
    {
        return isset($this->items[$offset]);
    }

    public function offsetGet( $offset)
    {
        return $this->items[$offset] ?? null;
    }

    public function offsetSet( $offset, $value)
    {
        if ($offset === null) {
            $this->items[] = $value;
        } else {
            $this->items[$offset] = $value;
        }
    }

    public function offsetUnset( $offset)
    {
        unset($this->items[$offset]);
    }

    public function jsonSerialize()
    {
        return $this->items;
    }
}
