<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CmsPage;

class CmsPageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cmsPageRecord = [
            [
                'id' => 1,
                'title' => 'About Us',
                'description' => 'Content is Coming soon',
                'url' => 'about-us',
                'meta_title' => 'About Us',
                'meta_description' => 'About Us Content',
                'meta_keyword' => 'about us, about',
                'status' =>1
            ],
            [
                'id' => 2,
                'title' => 'Terms & Condition',
                'description' => 'These are the terms and conditions...',
                'url' => 'terms-condition',
                'meta_title' => 'Terms & Condition',
                'meta_description' => 'Details about the terms and conditions.',
                'meta_keyword' => 'terms, conditions, policy',
                'status' => 1
            ],
            [
                'id' => 3,
                'title' => 'Privacy Policy',
                'description' => 'This is the privacy policy...',
                'url' => 'privacy-policy',
                'meta_title' => 'Privacy Policy',
                'meta_description' => 'Information about our privacy policy.',
                'meta_keyword' => 'privacy, policy, data protection',
                'status' => 1
            ]
        ];
        CmsPage::insert($cmsPageRecord);
    }
}
