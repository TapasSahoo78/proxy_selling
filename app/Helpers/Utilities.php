<?php

use App\Models\Category;

if (!function_exists('getCountry')) {
    function getCountry($country_id)
    {
        $data = array(
            '1' => 'India',
            '2' => 'USA',
        );
        echo "<option value='' selected>Select Country</option>";

        foreach ($data as $key => $value) {
            if ($country_id == $key) {
                echo "<option value='" . $key . "' selected>" . $value . "</option>";
            } else {
                echo "<option value='" . $key . "'>" . $value . "</option>";
            }
        }
    }
}

if (!function_exists('getCity')) {
    function getCity($city_id)
    {
        $data = array(
            '1' => 'Kolkata',
            '2' => 'Mumbai',
        );
        echo "<option value='' selected>Select City</option>";

        foreach ($data as $key => $value) {
            if ($city_id == $key) {
                echo "<option value='" . $key . "' selected>" . $value . "</option>";
            } else {
                echo "<option value='" . $key . "'>" . $value . "</option>";
            }
        }
    }
}

if (!function_exists('getPlan')) {
    function getPlan($plan_id)
    {
        $data = array(
            '1' => 'Professional Plan',
            '2' => 'Business Plan',
        );
        echo "<option value='' selected>Plan Frequency</option>";

        foreach ($data as $key => $value) {
            if ($plan_id == $key) {
                echo "<option value='" . $key . "' selected>" . $value . "</option>";
            } else {
                echo "<option value='" . $key . "'>" . $value . "</option>";
            }
        }
    }
}

if (!function_exists('getCategory')) {
    function getCategory($category_id)
    {
        $data = Category::all();
        echo "<option value='' selected>Select Category</option>";

        foreach ($data as $key => $value) {
            if ($category_id == $value->id) {
                echo "<option value='" . $value->id . "' selected>" . $value->name . "</option>";
            } else {
                echo "<option value='" . $value->id . "'>" . $value->name . "</option>";
            }
        }
    }
}
