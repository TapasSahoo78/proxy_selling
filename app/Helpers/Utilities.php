<?php

use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Support\Facades\Http;

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

if (!function_exists('getBlogCategory')) {
    function getBlogCategory($category_id)
    {
        $data = BlogCategory::all();
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

if (!function_exists('getNavbar')) {
    function getNavbar($navbar)
    {
        $data = ["proxies", "blog", "proxy-checker", "faq", "contact-us", "privacy-policy", "term-condition"];
        echo "<option value='' selected>Select Page</option>";

        foreach ($data as $key => $value) {
            if ($navbar == $value) {
                echo "<option value='" . $value . "' selected>" . $value . "</option>";
            } else {
                echo "<option value='" . $value . "'>" . $value . "</option>";
            }
        }
    }
}

if (!function_exists('getNavContent')) {
    function getNavContent($navbar)
    {
        $data = ["home", "faq", "contact-us", "privacy-policy", "term-condition"];
        echo "<option value='' selected>Select Page</option>";

        foreach ($data as $key => $value) {
            if ($navbar == $value) {
                echo "<option value='" . $value . "' selected>" . $value . "</option>";
            } else {
                echo "<option value='" . $value . "'>" . $value . "</option>";
            }
        }
    }
}

