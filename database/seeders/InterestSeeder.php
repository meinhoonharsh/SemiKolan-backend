<?php

namespace Database\Seeders;
use App\Models\Interest;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use App\Models\Interest;

class InterestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
            // name, image, icon, description, active

            $interests = [
                [
                    'name' => 'Web Development',
                    'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'icon' => 'https://img.icons8.com/color/48/000000/web-development.png',
                    'description' => 'Web development is the work involved in developing a web site for the Internet or an intranet. Web development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.',
                ],
                [
                    'name' => 'App Development',
                    'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'icon' => 'https://img.icons8.com/color/48/000000/app-development.png',
                    'description' => 'App development is the work involved in developing a mobile application for the mobile platform. App development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.',
                ],
                [
                    'name' => 'Game Development',
                    'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'icon' => 'https://img.icons8.com/color/48/000000/game-development.png',
                    'description' => 'Game development is the work involved in developing a video game for the video game console. Game development can range from developing a simple single static page of plain text to complex web-based internet applications, electronic businesses, and social network services.',
                ],
                [
                    'name' => 'ML, AI & Data Science',
                    'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'icon' => 'https://img.icons8.com/color/48/000000/machine-learning.png',
                    'description' => 'Machine learning is the science of getting computers to learn without being explicitly programmed. Machine learning focuses on the development of computer programs that can access data and use it learn for themselves.',

                ],
                [
                    'name' => 'Web3 & Blockchain',
                    'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'icon' => 'https://img.icons8.com/color/48/000000/blockchain.png',
                    'description' => 'Blockchain is a distributed ledger that is a public ledger of transactions. It is a system of record that is linked to a network of computers and a system of consensus to validate the transactions and the state of the ledger. ',
                ],
                [
                    'name' => 'Designing',
                    'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'icon' => 'https://img.icons8.com/color/48/000000/design.png',
                    'description' => 'Designing is the art and practice of visual communication and visual communication design. It is the process of conceptualizing, planning, and implementing a design.',
                ],
                [
                    'name' => 'AR & VR',
                    'image' => 'https://images.unsplash.com/photo-1518791841217-8f162f1e1131?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60',
                    'icon' => 'https://img.icons8.com/color/48/000000/3d-printer.png',
                    'description' => 'Augmented Reality (AR) is a subfield of computer science and computer graphics that deals with the creation of computer-generated images or scenes using real-world objects or people as the primary content.',
                ],
            ];

            foreach ($interests as $interest) {
                Interest::create($interest);

            }


                
                
                
                
                }
}
