<?php

use Illuminate\Support\Facades\Log;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;

if (!function_exists('onProduction')) {
    function onProduction()
    {
        return config('serve_config.RELEASE_STATUS') == 'staging' ? false : true;
    }
}

if (!function_exists('uploadMultipleFile')) {
    function uploadMultipleFile($file, $path)
    {
        try {
            foreach ($file as $imagefile) {
                $fileName = time() . '_' . uniqid() . '.' . $imagefile->getClientOriginalExtension();

                $imagePath = public_path($path . '/');

                $file->move($imagePath, $fileName);

                return $fileName;
            }
        } catch (Exception $e) {
            Log::info('Upload logo ' . $e->getMessage());
            return false;
        }
    }
}

if (!function_exists('uploadImage')) {
    function uploadImage(UploadedFile $file, $destinationPath, $imageName = null, $width = 200, $height = 200)
    {
        if ($imageName === null) {
            $imageName = uniqid() . '.' . $file->getClientOriginalExtension();
        }

        $image = Image::make($file);
        $image->fit($width, $height, function ($constraint) {
            $constraint->upsize();
        });

        $image->save(public_path($destinationPath . $imageName));

        return $imageName;
    }
}

if (!function_exists('checkFileDirectory')) {
    function checkFileDirectory($fileName, $filePath)
    {
        if ($fileName != '' && $filePath != '') :
            $file = './public/' . $filePath . '/' . $fileName;

            if ($file) :
                return true;
            else :
                return false;
            endif;
        else :
            return false;
        endif;
    }
}

if (!function_exists('generateCouponCode')) {
    function generateCouponCode($length = 8)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $couponCode = '';

        for ($i = 0; $i < $length; $i++) {
            $couponCode .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $couponCode;
    }
}

if (!function_exists('getNetworkIpAddress')) {
    function getNetworkIpAddress()
    {
        // Make a request to an external service that echoes the public IP address
        $response = Http::get('https://api64.ipify.org?format=json');

        // Check if the request was successful
        if ($response->successful()) {
            // Get the public IP address from the response
            $networkIp = $response->json('ip');

            return $networkIp;
        }

        // Handle the case when the API request fails
        return 'Unable to fetch network IP address';
    }
}
