<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $randomChoice = rand(1, 4); // Adjust the range for product possibilities

        $iphoneSuffixes = [" - ", " Pro - ", " Pro Max - ", " Plus - ", " Max - "];
        $samsungSuffixes = [" - ", "+ 5G - ", " Ultra 5G - ", " 5G - ", " FE - "];
        $xiaomiSuffixes = [" - ", "T Pro - ", " Pro - ", " T - "];
        $oppoSuffixes = [" 5G - ", " Pro 5G - ", " Pro - "];
        $pixelSuffixes = [" Pro - ", " Pro XL - ", " - "];
        $macSuffixes = [" Air M1 - ", " Air M2 - ", " Air M3 - ", " M3 - ", " M2 - ", " M1 - ", " Pro M3 - ", " Pro M2 - ", " Pro M1 - "];
        $lenovoSuffixes = [" Thinkpad X1 - ", " LOQ 15 - ", " Yoga Pro 7 - ", " Yoga Slim 7 - ", " Legion Slim 5 - ", " Thinkpad T14 - ", " Legion 7 - ", " Ideapad Pro - ", " Yoga 7 2in1 - "];
        $hpSuffixes = [" Spectre x360 - ", " Envy x360 - ", " Victus Gaming 7 - ", " Pavilion Plus - ",];

        $productName = match($randomChoice) {
            1 => "Apple iPhone " . rand(12, 15) . $iphoneSuffixes[array_rand($iphoneSuffixes)] . fake()->colorName(), 
            2 => "Samsung Galaxy S" . rand(20, 24) . $samsungSuffixes[array_rand($samsungSuffixes)] . fake()->colorName(),
            3 => "Xiaomi " . rand(12, 14) . $xiaomiSuffixes[array_rand($xiaomiSuffixes)] . fake()->colorName(),
            4 => "Oppo Reno" . rand(10, 12) . $oppoSuffixes[array_rand($oppoSuffixes)] . fake()->colorName(),
            5 => "Google Pixel " . rand(7, 9) . $pixelSuffixes[array_rand($pixelSuffixes)] . fake()->colorName(),
            6 => "Apple MacBook " . $macSuffixes[array_rand($macSuffixes)] . fake()->colorName(),
            7 => "Asus ROG Zephyrus G" . rand(13, 16) . " - " . fake()->colorName(),
            8 => "Lenovo " . $lenovoSuffixes[array_rand($lenovoSuffixes)] . fake()->colorName(), 
            9 => "Microsoft Surface Pro " . rand(9, 11) . " - " . fake()->colorName(), 
            10 => "HP " . $hpSuffixes[array_rand($hpSuffixes)] . fake()->colorName(),
            11 => "Apple Watch SE"  . rand(1, 3) . " - " . fake()->colorName(),
            12 => "Samsung Galaxy Watch " . rand(5, 7) . " - " . fake()->colorName(),
            13 => "Samsung Galaxy Fit " . rand(1, 3) . " - " . fake()->colorName(),
            14 => "Apple Watch Series "  . rand(7, 10) . " - " . fake()->colorName(),
            15 => "Apple Watch Ultra "  . rand(1, 2) . " - " . fake()->colorName(),
            // To-Do add Tablet and something else...
        };

        // Determine general category for image path
        $productCategory = match ($randomChoice) {
            1, 2, 3, 4, 5 => '1', // handphone
            6, 7, 8, 9, 10 => '2', // laptop
            11, 12, 13, 14, 15 => '3', // smartwatch
        };
        
        $priceCategory = match ($randomChoice) {
            1, 2, 5 => rand(10000000, 23000000),
            3, 4 => rand(7500000, 12000000),
            6, 7, 8, 9, 10 => rand(10000000, 30000000),
            11 => rand(2500000, 4500000),
            12 => rand(3000000, 5000000),
            13 => rand(750000, 1000000),
            14 => rand(5000000, 7500000),
            15 => rand(12000000, 15000000),
        };

        // Image path based on category
        $imagePath = "storage/dummy_{$productCategory}.png"; 

        return [
            'name' => $name = fake()->jobTitle(),
            'slug' => Str::slug($name),
            'color' => fake()->colorName(),
        ];
    }
}
