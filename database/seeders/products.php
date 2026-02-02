<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class products extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            // 1
            [
                'name' => 'Havells Thrill Air',
                'description' => 'Brand Havells
Colour Brown
Electric fan design Ceiling Fan
Power Source Corded Electric
Style Fans
Product Dimensions 30D x 54.5W x 18.2H Centimeters
Room Type Living Room, Bedroom, Dining Room
Special Feature High Velocity
Noise Level 65 dB
Wattage 78 Watts',
                'price' => 2150.00,
                'image_url' => 'images/products/p1.jpg',
            ],

            // 2
            [
                'name' => 'Havells Comfort Air',
                'description' => 'Number of Blades 3
Sweep Size 1200 mm
Speed 385 RPM
Warranty 2 Year
Weight 4.65 kg
Brand Havells
Power Consumption 60 W',
                'price' => 2050.00,
                'image_url' => 'images/products/p2.png',
            ],

            // 3
            [
                'name' => 'Havells SS390',
                'description' => 'Brand Havells
Color Brown
Warranty 2 Year
Sweep Size 1400 mm
Model SS 390
Air delivery 270 m3/min
Power consumption 80 W',
                'price' => 2350.00,
                'image_url' => 'images/products/p3.jpg',
            ],

            // 4
            [
                'name' => 'Reo Utsav',
                'description' => 'Sweep Size 1200 mm
Speed 380 RPM
Warranty 2 Years
Material Type Aluminium
Noise Level 60 dB
Weight 4 kg
Power 53 W
Rated Voltage 240 V
Rated Frequency 50 Hz
Star Rating 1 Star
Model Reo Utsav ES',
                'price' => 1850.00,
                'image_url' => 'images/products/p4.jpg',
            ],

            // 5
            [
                'name' => 'Polycab Vital HS',
                'description' => 'BEE Star Rating 1
Sweep Size (mm) 1200
Number of Blades 3
Speed (RPM) 400
Air Delivery (CMM) 215
Power (Watt) 53
Body Material Aluminium Body
Blade Material Aluminium Blades
Motor Winding 100% Copper
Warranty 3 Years Product Warranty',
                'price' => 2650.00,
                'image_url' => 'images/products/p5.png',
            ],

            // 6
            [
                'name' => 'Polycab Vital Plus',
                'description' => 'BEE Star Rating 1
Sweep Size (mm) 1200
Number of Blades 3
Speed (RPM) 400
Air Delivery (CMM) 215
Power (Watt) 53
Body Material Aluminium Body
Blade Material Aluminium Blades
Motor Winding 100% Copper
Warranty 3 Years Product Warranty',
                'price' => 2750.00,
                'image_url' => 'images/products/p6.jpg',
            ],

            // 7
            [
                'name' => 'Polycab Zoomer Prime',
                'description' => 'BEE Star Rating 1
Sweep Size (mm) 1200
Number of Blades 3
Speed (RPM) 400
Air Delivery (CMM) 215
Power (Watt) 53
Body Material MS Body
Blade Material Aluminium Blades
Motor Winding 100% Copper
Warranty 3 Years Product Warranty',
                'price' => 2850.00,
                'image_url' => 'images/products/p7.jpg',
            ],

            // 8
            [
                'name' => 'V-Guard Glado VX',
                'description' => 'Brand: V-Guard
Colour: BROWN
Electric fan design: Ceiling Fan
Power Source: Corded Electric
Style: Modern
Room Type: DRAWING ROOM, LIV, HALL
Special Feature: Double-shielded Ball Bearings, High-speed Motor, Low Voltage Operation, Durable Metal Construction, Corrosion Resistant
Wattage 55 Watts',
                'price' => 2450.00,
                'image_url' => 'images/products/p8.jpg',
            ],

            // 9
            [
                'name' => 'V-guard Glado Prime',
                'description' => 'Brand V-Guard
Colour Riband Blue Matte
Electric fan design Ceiling Fan
Power Source Electricity
Style BEE 1 STAR - Dust Repellent (Choco Brown Matte)
Product Dimensions 56D x 33.5W x 27H Centimeters
Room Type Living Room
Special Feature High Velocity
Recommended Uses For Product Cooling
Wattage 60 Watts',
                'price' => 3200.00,
                'image_url' => 'images/products/p9.jpg',
            ],

            // 10
            [
                'name' => 'Crompton 9W Bulb',
                'description' => 'Crompton Dyna Ray 9W Round B22 LED Cool Day
3 Star Rating for Extra Brightness and More Savings per Wattage',
                'price' => 60.00,
                'image_url' => 'images/products/p10.jpeg',
            ],

            // 11
            [
                'name' => 'HAVELLS 9w LED Bulb',
                'description' => '400 Volts High Voltage protection, BIS and BEE certified, 4kV Surge protection
Wattage 9 Watts
Voltage 240 Volts',
                'price' => 75.00,
                'image_url' => 'images/products/p11.jpg',
            ],

            // 12
            [
                'name' => 'Philips 9-Watts E27 LED',
                'description' => 'Brand PHILIPS
Light Type LED
9-Watts E27 LED Warm White LED Bulb
Light Colour White
Voltage 240 Volts',
                'price' => 85.00,
                'image_url' => 'images/products/p12.jpg',
            ],

            // 13
            [
                'name' => 'Crompton Dyna Ray 12W',
                'description' => 'Brand Crompton
Light Type LED
Special Feature Energy Efficient
Wattage 12 Watts
Bulb Shape Size A15
Bulb Base B22D',
                'price' => 170.00,
                'image_url' => 'images/products/p13.jpg',
            ],

            // 14
            [
                'name' => 'Philips 3-Watts LED',
                'description' => 'Brand PHILIPS
Light Type LED
3-Watts LED Warm White LED Bulb
Light Colour White
Voltage 240 Volts',
                'price' => 50.00,
                'image_url' => 'images/products/p14.jpg',
            ],

            // 15
            [
                'name' => 'Crompton Emergency 9 W LED Bulb',
                'description' => 'Crompton 9 Watt Backup LED Lamp with B22 Base comes with up to 4 hrs of power backup
One Year Manufacturer\'s Warranty
Special Feature Rechargeable, Power Backup
Voltage 230 Volts (AC)',
                'price' => 350.00,
                'image_url' => 'images/products/p15.jpg',
            ],

            // 16
            [
                'name' => 'Hi-Fi LED 9W INVERTER BULB',
                'description' => 'Brand Hi-Fi
Power backup up to 10 hours
Warranty: 1 year on product from date of invoice
Charging Time: 8-10 hrs
Low energy consumption and non-dimmable',
                'price' => 370.00,
                'image_url' => 'images/products/p16.jpg',
            ],

            // 17
            [
                'name' => 'Crompton Laser Ray Smile 20W LED Batten',
                'description' => 'Brand Crompton
Wattage 20 Watts
High performance smart price
Light Weight
Energy saving
Easy to install',
                'price' => 160.00,
                'image_url' => 'images/images/products/p17.jpg',
            ],

            // 18
            [
                'name' => 'Havells Flexion Led Ac Rope',
                'description' => 'Havells Flexion Led Ac Rope 120 Led/Mtr Ip65, 50 Meters
IP65 Rating withstand harsh High Surge Withstand Capability up to 3.5 kV, Suitable for festive decoration, balcony, garden, shops, offices, open places etc.',
                'price' => 5500.00,
                'image_url' => 'images/products/p18.webp',
            ],

            // 19
            [
                'name' => 'Havells Lifeline Wire 1 sq mm',
                'description' => 'Colour Blue
Brand Havells
Material Copper
Number of Cable Strands Multi Strand
Voltage 1100 Volts
Wire Length: 90 meters',
                'price' => 1300.00,
                'image_url' => 'images/products/p19.png',
            ],

            // 20
            [
                'name' => 'Havells Lifeline Wire 1.5 sq mm',
                'description' => 'Colour Black
Brand Havells
Material Copper
Number of Cable Strands Multi Strand
Voltage 1100 Volts
Wire Length: 90 meters',
                'price' => 2100.00,
                'image_url' => 'images/products/p20.webp',
            ],

            // 21
            [
                'name' => 'Havells Lifeline Wire 2.5 sq mm',
                'description' => 'Colour Red
Brand Havells
Material Copper
Number of Cable Strands Multi Strand
Voltage 1100 Volts
Wire Length: 90 meters',
                'price' => 3750.00,
                'image_url' => 'images/products/p21.webp',
            ],

            // 22
            [
                'name' => 'Polycab Optima plus 1 sq mm',
                'description' => 'Colour RED
Brand Polycab
Material Copper
Voltage 1100 Volts
Heat Resistant Eco Friendly PVC Insulated Copper Cable Energy Saving Flame Retardant',
                'price' => 1350.00,
                'image_url' => 'images/products/p22.jpg',
            ],

            // 23
            [
                'name' => 'Polycab Optima plus 1.5 sq mm',
                'description' => 'Colour green
Brand Polycab
Material Copper
Voltage 1100 Volts
Heat Resistant Eco Friendly PVC Insulated Copper Cable Energy Saving Flame Retardant',
                'price' => 2050.00,
                'image_url' => 'images/products/p23.jpg',
            ],

            // 24
            [
                'name' => 'Polycab Optima plus 2.5 sq mm',
                'description' => 'Colour yellow
Brand Polycab
Material Copper
Voltage 1100 Volts
Heat Resistant Eco Friendly PVC Insulated Copper Cable Energy Saving Flame Retardant',
                'price' => 3750.00,
                'image_url' => 'images/products/p24.jpg',
            ],

            // 25
            [
                'name' => 'RR Kabel Superex 1mm',
                'description' => 'Colour Black
Length 90 meter
Conductor material Copper
The quality of wire is great. 100% conductivity, less heat generation so reduce the electricity bill.',
                'price' => 1360.00,
                'image_url' => 'images/products/p25.jpeg',
            ],

            // 26
            [
                'name' => 'RR Kabel Superex 1.5mm',
                'description' => 'Colour Red
Length 90 meter
Conductor material Copper
The quality of wire is great. 100% conductivity, less heat generation so reduce the electricity bill.',
                'price' => 1980.00,
                'image_url' => 'images/products/p26.jpeg',
            ],

            // 27
            [
                'name' => 'RR Kabel Superex 2.5mm',
                'description' => 'Colour Blue
Length 90 meter
Conductor material Copper
The quality of wire is great. 100% conductivity, less heat generation so reduce the electricity bill.',
                'price' => 3860.00,
                'image_url' => 'images/products/p27.jpeg',
            ],

            // 28
            [
                'name' => 'Single Pole V Guard MCB',
                'description' => 'No.of Poles Single Pole
Rated Current 10 Amp
Type B Curve
Breaking Capacity 10 kA
Frequency 50 Hz
Voltage 220V
Phase Single Phase
Model Name/Number B10 SP
Product Code 1500699/1602697
Brand Name V Guard',
                'price' => 200.00,
                'image_url' => 'images/products/p28.jpg',
            ],

            // 29
            [
                'name' => 'Double Pole V Guard MCB',
                'description' => 'No.of Poles DoublePole
Rated Current 32 Amp
Type c Curve
Breaking Capacity 32 kA
Frequency 50 Hz
Voltage 220V
Phase Single Phase
Model Name/Number c32 dP
Brand Name V Guard',
                'price' => 600.00,
                'image_url' => 'images/products/p29.jpg',
            ],

            // 30
            [
                'name' => 'V-Guard 40A Double Pole RCCB',
                'description' => 'Brand V-Guard
Model Number RCCB 40A DP 100mA INVIDIA
Model Name RCCB 40A
Current Rating Range 40A
Number of Poles 2
Curve Characteristics ELCB
Warranty Summary 5
Covered in Warranty Manufacturing defects
Not Covered in Warranty burning and damaging etc
Warranty Service Type Company Warranty',
                'price' => 2500.00,
                'image_url' => 'images/products/p30.jpg',
            ],



        ];
        DB::table('products')->truncate();

        foreach ($products as $product) {
            DB::table('products')->insert([
                'name' => $product['name'],
                'description' => $product['description'],
                'price' => $product['price'],
                'image_url' => $product['image_url'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}

