<?php

use Illuminate\Database\Seeder;

class OurCommitmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $commiment = new \App\OurCommitment([
            'title' => 'Value',
            'content' => "Why Water Systems? The answer is simple. Water Systems Inc., is a unique submetering and utility billing company that can save you money. You don’t pay for your neighbor's HBO channels and you don’t pay for your neighbor’s dog walker, so why would you pay for their utility usage?  At Water Systems Inc., we bill residents individually. That means you only pay for what you use! Go ahead, use the extra money for something fun.",
            'logo' => 'fas fa-heart'
        ]);
        $commiment->save();

        $commiment = new \App\OurCommitment([
            'title' => 'Innovation',
            'content' => "All of us at Water Systems care about our planet. Our state-of-the-art sub-metering systems can reduce individual water usage up to 39%! And with over 600 properties across 30 states, that’s a lot of water. The team is working hard and improving our operations daily in order to shrink our carbon footprint and create the most positive impact on the environment. Help us conserve water today!",
            'logo' => 'fas fa-asterisk'
        ]);
        $commiment->save();

        $commiment = new \App\OurCommitment([
            'title' => 'Service',
            'content' => "At Water Systems, we have a commitment to excellence. While property managers and owners may be the people we sell our product to, YOU, the resident, are our end user. We have a robust customer service department ready to answer any questions or concerns that you may have regarding your bill.",
            'logo' => 'fab fa-servicestack'
        ]);
        $commiment->save();
    }
}