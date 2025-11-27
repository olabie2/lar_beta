<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Admin User
        User::factory()->create([
            'name' => 'Admin User',
            'email' => 'admin@hopn.eu',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        // Regular User
        User::factory()->create([
            'name' => 'Regular User',
            'email' => 'user@hopn.eu',
            'password' => bcrypt('password'),
            'is_admin' => false,
        ]);

        // User::factory(10)->create();

        \App\Models\Career::factory(20)->create();
        \App\Models\Blog::factory(20)->create();
        \App\Models\CompanyEvent::factory(20)->create();
        \App\Models\EventRegisterApplication::factory()->count(20)->create();

        // Projects Seeding
        $projects = [
            [
                'title' => 'EcoTrack Analytics',
                'description' => 'AI-powered sustainability monitoring platform for large enterprises to track and reduce their carbon footprint.',
                'problem_solved' => 'Companies struggle to accurately track and report their carbon footprint across complex global supply chains. Traditional methods are manual, error-prone, and fail to provide real-time visibility into emission sources. This makes it nearly impossible for organizations to meet increasingly strict environmental regulations and sustainability goals.',
                'solution' => 'We built a comprehensive cloud-based dashboard that integrates seamlessly with IoT sensors, ERP systems, and supply chain management tools. The platform uses machine learning algorithms to analyze real-time carbon emission data, automatically categorize sources, and provide actionable insights for reduction. The system includes automated reporting for compliance, predictive analytics for future emissions, and a recommendation engine that suggests specific actions to reduce environmental impact.',
                'team_members' => [
                    ['name' => 'Alice Johnson', 'role' => 'Lead Developer'],
                    ['name' => 'Bob Smith', 'role' => 'Data Scientist'],
                    ['name' => 'Charlie Davis', 'role' => 'UI/UX Designer'],
                    ['name' => 'Diana Prince', 'role' => 'IoT Specialist'],
                ],
                'start_date' => '2024-01-15',
                'end_date' => '2024-06-30',
                'image_url' => 'https://images.unsplash.com/photo-1460925895917-afdab827c52f?q=80&w=2426&auto=format&fit=crop',
                'client' => 'Global Manufacturing Corp',
                'website' => 'https://ecotrack-demo.example.com',
                'technologies' => ['Laravel', 'React', 'Python', 'TensorFlow', 'PostgreSQL', 'AWS IoT', 'Docker'],
                'testimonial_quote' => 'EcoTrack Analytics transformed how we approach sustainability. We reduced our carbon emissions by 32% in the first year and saved $2.4M in energy costs. The real-time insights are game-changing.',
                'testimonial_author' => 'Sarah Mitchell, Chief Sustainability Officer',
                'stats' => [
                    ['label' => 'Emission Reduction', 'value' => '32%'],
                    ['label' => 'Cost Savings', 'value' => '$2.4M'],
                    ['label' => 'Data Points Analyzed', 'value' => '15M+'],
                    ['label' => 'Facilities Monitored', 'value' => '47'],
                ],
            ],
            [
                'title' => 'HealthConnect App',
                'description' => 'Telemedicine platform connecting patients in rural areas with specialized healthcare professionals through secure video consultations.',
                'problem_solved' => 'Rural communities face a critical healthcare access crisis, with patients often traveling hundreds of miles to see specialists. This leads to delayed diagnoses, worsening conditions, and increased healthcare costs. The shortage of specialists in rural areas creates a healthcare disparity that disproportionately affects underserved populations.',
                'solution' => 'A mobile-first telemedicine platform featuring HIPAA-compliant secure video consultations, real-time vital signs monitoring through connected devices, digital prescription management, and seamless integration with local pharmacies. The app includes AI-powered symptom checking, appointment scheduling, medical record management, and multilingual support. It also provides offline functionality for areas with poor connectivity and integrates with rural clinic networks for follow-up care.',
                'team_members' => [
                    ['name' => 'David Lee', 'role' => 'Project Manager'],
                    ['name' => 'Eva Green', 'role' => 'Mobile Developer'],
                    ['name' => 'Frank Wilson', 'role' => 'Healthcare Compliance Officer'],
                ],
                'start_date' => '2023-11-01',
                'end_date' => '2024-04-15',
                'image_url' => 'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?q=80&w=2070&auto=format&fit=crop',
                'client' => 'Rural Health Alliance',
                'website' => 'https://healthconnect-demo.example.com',
                'technologies' => ['React Native', 'Node.js', 'MongoDB', 'WebRTC', 'Twilio', 'Firebase', 'AWS'],
                'testimonial_quote' => 'HealthConnect has been a lifeline for our community. Patients no longer need to travel 200+ miles to see a specialist. We\'ve completed over 5,000 consultations with 98% patient satisfaction.',
                'testimonial_author' => 'Dr. James Patterson, Medical Director',
                'stats' => [
                    ['label' => 'Consultations', 'value' => '5,000+'],
                    ['label' => 'Patient Satisfaction', 'value' => '98%'],
                    ['label' => 'Average Travel Saved', 'value' => '220mi'],
                    ['label' => 'Active Providers', 'value' => '150+'],
                ],
            ],
            [
                'title' => 'FinGuard Security',
                'description' => 'Real-time fraud detection system for fintech startups using advanced machine learning and behavioral analysis.',
                'problem_solved' => 'New fintech companies are prime targets for sophisticated financial fraud attacks. Traditional rule-based fraud detection systems generate excessive false positives, frustrate legitimate customers, and fail to catch evolving fraud patterns. This results in millions in losses and damaged customer trust.',
                'solution' => 'An API-based fraud detection engine that analyzes transaction patterns in real-time using ensemble machine learning models. The system examines over 200 behavioral and transactional features, including device fingerprinting, geolocation analysis, velocity checks, and network analysis. It provides risk scores within 50ms, enables configurable rules, and continuously learns from new fraud patterns. The platform includes a comprehensive dashboard for fraud analysts with case management, pattern visualization, and automated investigation workflows.',
                'team_members' => [
                    ['name' => 'Frank White', 'role' => 'Security Engineer'],
                    ['name' => 'Grace Hall', 'role' => 'Backend Developer'],
                    ['name' => 'Henry Zhang', 'role' => 'ML Engineer'],
                    ['name' => 'Isabel Rodriguez', 'role' => 'DevOps Engineer'],
                ],
                'start_date' => '2024-02-20',
                'end_date' => null, // Ongoing
                'image_url' => 'https://images.unsplash.com/photo-1563013544-824ae1b704d3?q=80&w=2070&auto=format&fit=crop',
                'client' => 'PayStream Technologies',
                'website' => 'https://finguard-demo.example.com',
                'technologies' => ['Python', 'FastAPI', 'Redis', 'Kafka', 'TensorFlow', 'Kubernetes', 'PostgreSQL', 'Elasticsearch'],
                'testimonial_quote' => 'FinGuard reduced our fraud losses by 87% while cutting false positives in half. The response time is incredible, and our customers barely notice the additional security layer.',
                'testimonial_author' => 'Michael Chen, VP of Risk Management',
                'stats' => [
                    ['label' => 'Fraud Reduction', 'value' => '87%'],
                    ['label' => 'False Positive Reduction', 'value' => '52%'],
                    ['label' => 'Avg Response Time', 'value' => '43ms'],
                    ['label' => 'Transactions Analyzed', 'value' => '50M+'],
                ],
            ],
            [
                'title' => 'SmartInventory Pro',
                'description' => 'Cloud-based inventory management system with predictive analytics for retail and e-commerce businesses.',
                'problem_solved' => 'Retailers struggle with inventory optimization - they either overstock (tying up capital) or understock (losing sales). Traditional inventory systems lack predictive capabilities and real-time visibility across multiple locations and channels.',
                'solution' => 'A comprehensive inventory management platform that uses machine learning to predict demand, optimize stock levels, and automate reordering. Features include multi-warehouse management, barcode/RFID scanning, real-time sync across channels, supplier integration, and detailed analytics. The system reduces stockouts by 75% and excess inventory by 40%.',
                'team_members' => [
                    ['name' => 'Jennifer Adams', 'role' => 'Full Stack Developer'],
                    ['name' => 'Kevin Brown', 'role' => 'Business Analyst'],
                ],
                'start_date' => '2023-08-10',
                'end_date' => '2023-12-20',
                'image_url' => 'https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?q=80&w=2070&auto=format&fit=crop',
                'client' => 'RetailMax Inc',
                'website' => null,
                'technologies' => ['Vue.js', 'Laravel', 'MySQL', 'Redis', 'Pusher'],
                'testimonial_quote' => 'Our inventory accuracy went from 82% to 99.2%. We freed up $800K in working capital and increased sales by reducing stockouts.',
                'testimonial_author' => 'Lisa Turner, COO',
                'stats' => [
                    ['label' => 'Inventory Accuracy', 'value' => '99.2%'],
                    ['label' => 'Capital Freed', 'value' => '$800K'],
                    ['label' => 'Stockout Reduction', 'value' => '75%'],
                    ['label' => 'SKUs Managed', 'value' => '12,000+'],
                ],
            ],
        ];

        foreach ($projects as $project) {
            \App\Models\Project::create(array_merge($project, [
                'slug' => \Illuminate\Support\Str::slug($project['title']),
            ]));
        }
    }
}
