<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\{Type, Portofolio, User, Jabatan};


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        // User::create([
            //     'name' => 'rizki',
            //     'email' => 'rizki@gmail.com',
            //     'password' => bcrypt('123456'),
            // ]);
            
            User::create([
                    'name' => 'Admin',
                    'email' => 'adminfps@gmail.com',
                    'role' => 'admin',
                    'password' => bcrypt('startup.Fr1web'),
                    'jabatan_id' => null,
                    'verifikasi' => 1,
            ]);
                
                // Portofolio::create([
                    //     'product' => 'Startup',
                    //     'type_id' => 1,
                    //     'user_id' => 1,
                    //     'description' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque ante lacus, quis aliquet arcu scelerisque vel. Mauris at aliquam sem, eu luctus est. Nullam lacinia fringilla urna, et accumsan odio ornare sit amet. Vivamus vulputate scelerisque molestie. Fusce viverra neque non auctor fringilla. Maecenas id tellus sagittis odio bibendum aliquam. Quisque bibendum augue eget commodo euismod. Morbi in semper lorem, at gravida magna. Donec accumsan auctor mauris at posuere. Etiam in est pharetra, mattis nisl eget, laoreet lectus. Aenean non tempus sapien. </p> <p> Sed vitae tortor sed dui finibus feugiat at sit amet sem. Maecenas vestibulum mattis odio nec interdum. Etiam eu laoreet lectus. Donec quis nibh at ligula pulvinar auctor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vitae tortor sed leo fringilla mollis. Nunc consectetur aliquam venenatis. Quisque ultricies odio sit amet pellentesque pretium. Proin elementum tellus non mattis dictum. Praesent eget faucibus mi, eu fermentum odio. Vestibulum posuere enim bibendum sapien placerat sagittis. Sed dolor lorem, scelerisque eu sodales eu, gravida eget nibh. Aenean tincidunt purus urna, ut consectetur odio gravida a. Nunc aliquet nibh non arcu congue, id ullamcorper justo faucibus. </p>',
                    //     'web' => 'startup.com',
        //     'contact' => '08123456789',
        // ]);
        
        // Portofolio::create([
            //     'product' => 'Motorland',
            //     'type_id' => 2,
            //     'user_id' => 2,
            //     'description' => '<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam pellentesque ante lacus, quis aliquet arcu scelerisque vel. Mauris at aliquam sem, eu luctus est. Nullam lacinia fringilla urna, et accumsan odio ornare sit amet. Vivamus vulputate scelerisque molestie. Fusce viverra neque non auctor fringilla. Maecenas id tellus sagittis odio bibendum aliquam. Quisque bibendum augue eget commodo euismod. Morbi in semper lorem, at gravida magna. Donec accumsan auctor mauris at posuere. Etiam in est pharetra, mattis nisl eget, laoreet lectus. Aenean non tempus sapien. </p> <p> Sed vitae tortor sed dui finibus feugiat at sit amet sem. Maecenas vestibulum mattis odio nec interdum. Etiam eu laoreet lectus. Donec quis nibh at ligula pulvinar auctor. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Proin vitae tortor sed leo fringilla mollis. Nunc consectetur aliquam venenatis. Quisque ultricies odio sit amet pellentesque pretium. Proin elementum tellus non mattis dictum. Praesent eget faucibus mi, eu fermentum odio. Vestibulum posuere enim bibendum sapien placerat sagittis. Sed dolor lorem, scelerisque eu sodales eu, gravida eget nibh. Aenean tincidunt purus urna, ut consectetur odio gravida a. Nunc aliquet nibh non arcu congue, id ullamcorper justo faucibus. </p>',
            //     'web' => 'motorland.com',
            //     'contact' => '08123456789',
            // ]);

            User::factory(7)->create();
            
            Portofolio::factory(10)->create();

            Type::create([
                'name' => 'Teknologi'
            ]);
            
            Type::create([
                'name' => 'Otomotif'
            ]);

            Type::create([
                'name' => 'Kesehatan'
            ]);

            Jabatan::create([
                'name' => 'CEO'
            ]);

            Jabatan::create([
                'name' => 'CTO'
            ]);

            Jabatan::create([
                'name' => 'CMO'
            ]);

            Jabatan::create([
                'name' => 'CFO'
            ]);

            Jabatan::create([
                'name' => 'COO'
            ]);
            
            
    }
}
