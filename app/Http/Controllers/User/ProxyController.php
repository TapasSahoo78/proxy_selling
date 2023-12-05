<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProxyController extends Controller
{
    public function getIpInformation()
    {
        // Get the user's IP address
        // $ip = gethostbyname(gethostname()); //own system public IP
        $ip = getNetworkIpAddress();

        // Make a request to the ipapi API
        $response = Http::get("http://ipapi.co/{$ip}/json/");

        // Check if the request was successful
        if ($response->successful()) {
            // Decode the JSON response
            $ipInfo = $response->json();

            // Access information
            $country = $ipInfo['country_name'];
            $city = $ipInfo['city'];
            $zipcode = $ipInfo['postal'];
            $latitude = $ipInfo['latitude'];
            $longitude = $ipInfo['longitude'];

            // Timezone information
            $timezone = $ipInfo['timezone'];

            // Current time in the timezone
            $currentTime = now()->setTimezone($timezone);

            // Output the information
            $data = [
                'ip' => $ip,
                'country' => $country,
                'city' => $city,
                'zipcode' => $zipcode,
                'latitude' => $latitude,
                'longitude' => $longitude,
                'timezone' => $timezone,
                'current_time' => $currentTime,
            ];

            return view('user.pages.services.proxy.proxy_checker', compact('data'));
        }

        // Handle the case when the API request fails
        return ['error' => 'Unable to fetch IP information'];
    }
}
