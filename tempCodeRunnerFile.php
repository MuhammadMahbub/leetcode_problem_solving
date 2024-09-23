<?php
$minItems = array_filter($counts, function($item) use ($minValue) {
        return $item == $minValue;
    });