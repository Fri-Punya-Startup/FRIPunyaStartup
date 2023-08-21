<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\{Type, Portofolio, User, Jabatan, Role, Team, Startup, TeamMember};


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {


        // buatkan roles
        Role::create([
            'id' => 1,
            "name" => "Hustler"
        ]);

        Role::create([
            'id' => 2,
            "name" => "Hipster"
        ]);

        Role::create([
            'id' => 3,
            "name" => "Hacker"
        ]);

        Role::create([
            'id' => 4,
            "name" => "Mentor"
        ]);

        User::create([
            "name" => "User",
            "avatar" => "https://api.dicebear.com/6.x/avataaars/png?seed=user&backgroundColor=b6e3f4,c0aede,d1d4f9,ffdfbf,ffd5dc&backgroundType=gradientLinear&accessoriesProbability=25",
            "email" => "user@example.com",
            "password" => bcrypt('user1234'),
            "role_id" => 1,
        ]);

        User::create([
            "name" => "anggota 1",
            "avatar" => "https://api.dicebear.com/6.x/avataaars/png?seed=user&backgroundColor=b6e3f4,c0aede,d1d4f9,ffdfbf,ffd5dc&backgroundType=gradientLinear&accessoriesProbability=25",
            "email" => "anggota1@gmail.com",
            "password" => bcrypt(123),
            "role_id" => 2,
        ]);

        User::create([
            "name" => "anggota 2",
            "avatar" => "https://api.dicebear.com/6.x/avataaars/png?seed=user&backgroundColor=b6e3f4,c0aede,d1d4f9,ffdfbf,ffd5dc&backgroundType=gradientLinear&accessoriesProbability=25",
            "email" => "anggota2@gmail.com",
            "password" => bcrypt(123),
            "role_id" => 2,
        ]);

        User::create([
            "name" => "anggota 3",
            "avatar" => "https://api.dicebear.com/6.x/avataaars/png?seed=user&backgroundColor=b6e3f4,c0aede,d1d4f9,ffdfbf,ffd5dc&backgroundType=gradientLinear&accessoriesProbability=25",
            "email" => "anggota3@gmail.com",
            "password" => bcrypt(123),
            "role_id" => 3,
        ]);

        User::create([
            "name" => "mentor",
            "avatar" => "https://api.dicebear.com/6.x/avataaars/png?seed=user&backgroundColor=b6e3f4,c0aede,d1d4f9,ffdfbf,ffd5dc&backgroundType=gradientLinear&accessoriesProbability=25",
            "email" => "mentor@gmail.com",
            "password" => bcrypt(123),
            "role_id" => 4,
        ]);


        Startup::create([
            "owners_id" => 1,
            "startup_name" => "UKM Kapitalis",
            "description" => "Sebuah umkm yang mememintangkan uang daripada kesejahteraan masyarakat"
        ]);

        Team::create([
            "startup_id" => 1,
            "name_team" => "UKM Kapitalis",
        ]);

        $ref = strtoupper(Str::random(6));

        TeamMember::create([
            "team_id" => 1,
            "user_id" => 1,
            'refferal' => $ref,
        ]);

        TeamMember::create([
            "team_id" => 1,
            "user_id" => 2,
            'refferal' => $ref,
        ]);

        TeamMember::create([
            "team_id" => 1,
            "user_id" => 3,
            'refferal' => $ref,
        ]);

        TeamMember::create([
            "team_id" => 1,
            "user_id" => 4,
            'refferal' => $ref,
        ]);

        // Startup::create([
        //     'name' => 'Feelsbox',
        //     'desc' => 'Feelsbox merupakan platform layanan kesehatan mental untuk usia remaja. Layanan kami meliputi konseling, mentoring, self-tracking, hingga coaching',
        //     'logo' => '/images/feelsbox.png',
        //     'category' => 'test',
        //     'team_id' => $team->id,
        // ]);

        // Startup::create([
        //     'name' => 'Kiri',
        //     'desc' => 'Kiri merupakan startup yang bergerak di bidang transportasi publik dengan tujuan menciptakan transportasi publik yang aman, nyaman, dan mudah diakses oleh masyarakat',
        //     'logo' => '/images/kiri.png',
        //     'category' => 'test',
        //     'team_id' => $team->id,
        // ]);

        // Startup::create([
        //     'name' => 'Sportgather',
        //     'desc' => 'Sportgather merupakan platform digital olahraga yang mewadahi para penggiat olahraga untuk dapat menentukan jadwal tanding, menemukan lawan tanding, serta memberikan rekomendasi venue olahraga.',
        //     'logo' => '/images/sport.png',
        //     'category' => 'test',
        //     'team_id' => $team->id,
        // ]);


        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'adminfps@gmail.com',
        //     'role' => 'admin',
        //     'password' => bcrypt('startup.Fr1web'),
        //     'jabatan_id' => null,
        //     'verifikasi' => 1,
        // ]);
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

        // User::factory(3)->create();

        // Portofolio::factory(10)->create();

        // Type::create([
        //     'name' => 'Teknologi'
        // ]);

        // Type::create([
        //     'name' => 'Otomotif'
        // ]);

        // Type::create([
        //     'name' => 'Kesehatan'
        // ]);

        // Jabatan::create([
        //     'name' => 'CEO'
        // ]);

        // Jabatan::create([
        //     'name' => 'CTO'
        // ]);

        // Jabatan::create([
        //     'name' => 'CMO'
        // ]);

        // Jabatan::create([
        //     'name' => 'CFO'
        // ]);

        // Jabatan::create([
        //     'name' => 'COO'
        // ]);

    }
}
