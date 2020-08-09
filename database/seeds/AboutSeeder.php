<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new \App\About([
            'content' => 'On a sunny day in 1993, a group of experienced property managers came together to solve a problem plaguing their industry: Water Management. High water bills, leaks, and other issues were causing financial hardships for multi-unit housing professionals across the board. The managers knew they needed to find a way to reduce operating costs and conserve water. After hard work and testing, the team developed a unique system of monitoring monthly water use, billing each unit individually, and installing a shut-off valve in every unit. Within three months, the overall water bill of the property was reduced by 50%! Today, Water Systems provides both superior equipment and a state-of-the-art billing service to over 600 properties across 30 states.  We account for every drop of water used and accurately bill the responsible resident. Our technology is the leading the sub-metering industry! Don’t get left behind. Give us a call to speak with one of our experts about how Water Systems can save both water and money at your property today!'
        ]);

        $about->save();
    }
}