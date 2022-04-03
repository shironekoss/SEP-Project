<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Menu extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('menu')->insert([
            [
            'nama_menu'=>"Cheese Mixed Soba",
            'harga_menu'=>35000,
            'deskripsi_menu'=>"Anda tidak bisa melihat supnya, dan bahannya sangat kental sehingga menutupi mie. Jika Anda mencampur semuanya saat masih panas, keju akan meleleh dan rasanya akan seperti carbonara. Bahan-bahannya adalah keju cheddar, char siu, kuning telur, mizuna, bayam, crouton, menma, dan daun bawang. Ketahuilah bahwa itu adalah ramen dengan menambahkan char siu",
            'foto_menu'=>'cheese mixed soba.jpg',
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'nama_menu'=>"Super Back Fat Niboshi Ramen",
                'harga_menu'=>58000,
                'deskripsi_menu'=>"Supnya memiliki rasa lemak punggung sapi sementara aroma sarden kering menyebar di mulut. Mienya berjenis lurus tipis dan memiliki tekstur yang halus dan lembut.Bahan-bahannya adalah char siu, bakso, bayam, menma, dan daun bawang.Char siu dibungkus dengan iga babi, dan meskipun dipanggang, lembut dan memiliki tekstur yang meleleh di mulut. Bola rasa setengah matang dan memiliki tekstur renyah yang bagus.",
                'foto_menu'=>'Super Back Fat Niboshi Ramen.jpeg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Salt Ramen",
                'harga_menu'=>30000,
                'deskripsi_menu'=>"Ini adalah semangkuk ramen dengan 1 potongan daging ayam yang besar, dan daun bawang yang
                dibuat perlahan dengan api kecil. Ini adalah ramen asin yang lembut dengan banyak umami dan rasa manis",
                'foto_menu'=>'Salt Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Shio-Ramen",
                'harga_menu'=>35000,
                'deskripsi_menu'=>"Oreryu Shio-Ramen merupakan Ramen asin  yang dibuat dengan Perlahan dan hati-hati dimasak dengan merebus sejumlah besar tulang ayam dan daun bawang. dicampur banyak umami dan rasa manis untuk rasa yang ringan.",
                'foto_menu'=>'Oreryu Shio-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Jukusei Shio-Ramen",
                'harga_menu'=>65000,
                'deskripsi_menu'=>"Oreryu Jukusei Shio-Ramen dimasak dengan Tulang ayam dan daun bawang dimasak dengan cepat dalam panci bertekanan tinggi. Karena dimasak begitu cepat, yang tersisa hanyalah umami dan rasa manis, tanpa sedikit pun bau busuk. Dari kelihatannya, sepertinya susu kedelai telah dituangkan, tetapi kaldunya hanya terbuat dari tulang ayam dan daun bawang. Ramen asin ini sendiri akan menipu harapan Anda.",
                'foto_menu'=>'Oreryu Jukusei Shio-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Otokomori-Ramen",
                'harga_menu'=>60000,
                'deskripsi_menu'=>"Oreryu Otokozakari-Ramen menggunakan Ayam goreng, char siu, dan telur pilihan. Kemudian ditambahkan ke dalam semangkuk mie ramen.",
                'foto_menu'=>'Oreryu Otokomori-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Shin Jukusei-Ramen",
                'harga_menu'=>43000,
                'deskripsi_menu'=>"Evolusi Ramen asin. Silahkan dimakan dengan menambahkan saus pedas rahasia ke dalam sup rasa bawang putih. Banyak Minyak Pedas buatan resep rahasia restoran digunakan untuk saus pedas di kuah ramen",
                'foto_menu'=>'Oreryu Shin Jukusei-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Kuro Jukusei-Ramen",
                'harga_menu'=>55000,
                'deskripsi_menu'=>"Ramen dipadukan dengan basis sup yang kaya. Ini adalah Ramen asin matang yang ditambahkan minyak bawang putih asli kami yang dibakar. Bahan ini akan menggandakan rasa hidangan yang enak",
                'foto_menu'=>'Oreryu Kuro Jukusei-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Ume Shio-Ramen",
                'harga_menu'=>50000,
                'deskripsi_menu'=>"Ramen asin yang diberikan buah Plum. Plum kering manis yang dipilih dengan cermat, dan aroma shiso membuat ramen ini terasa segar. Sangat populer di kalangan wanita, dan mereka yang suka sup ringan",
                'foto_menu'=>'Oreryu Ume Shio-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Yuzu Shio-Ramen",
                'harga_menu'=>35000,
                'deskripsi_menu'=>"Oreryu Yuzu Shio-Ramen adalah Ramen asin dengan ekstrak lemon Yuzu membuat kombinasi yang sangat bagus dengan bahan dasar sup yang lembut, dan kami menggunakannya banyak untuk ramen ini. Topping mustard menghadirkan rasa yang menyegarkan untuk hidangan ini",
                'foto_menu'=>'Oreryu Yuzu Shio-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Miso-Ramen",
                'harga_menu'=>49000,
                'deskripsi_menu'=>"Oreryu Miso-Ramen dibuat dengan menambahkan banyak pasta wijen spesial ke dalam dasar sup miso merah untuk membuat ramen ini. Ini adalah ramen yang populer di kalangan penggemar berat, karena rasanya yang sangat unik.",
                'foto_menu'=>'Oreryu Miso-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Kara Miso-Ramen",
                'harga_menu'=>65000,
                'deskripsi_menu'=>"Oreryu Kara Miso-Ramen adalah Ramen Miso Pedas. Kami menambahkan saus pedas khusus ke miso ramen untuk menyiapkan hidangan ini. Anda pasti akan ketagihan dengan dari ramen yang kaya dan sangat pedas ini.....",
                'foto_menu'=>'Oreryu Kara Miso-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Kara Shio-Ramen",
                'harga_menu'=>52000,
                'deskripsi_menu'=>"Oreryu Kara Shio-Ramen adalah Ramen asin pedas yang dibuat dengan saus pedas spesial. Char siu dipotong menjadi kubus dan ditambahkan ke saus pedas, menciptakan rasa yang luar biasa seimbang",
                'foto_menu'=>'Oreryu Kara Shio-Ramen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Tobikkiri Kairou Wonton Men",
                'harga_menu'=>55000,
                'deskripsi_menu'=>"Tobikkiri Kairou Wonton Men adalah Mie Pangsit Udang Luar Biasa. Kami menggunakan banyak udang untuk membuat pangsit empuk.Kami bangga dengan hidangan ini, dibuat sebagai penghormatan kepada pangsit dari restoran Hong Kong yang populer.",
                'foto_menu'=>'Tobikkiri Kairou Wonton Men.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Otokomori-Gabachi",
                'harga_menu'=>37000,
                'deskripsi_menu'=>"Oreryu Otokomori-Gabachi dalah ramen yang dipadu dengan Ayam goreng, char siu, dan telur ditambahkan ke dalam ramen. Kata ini dibuat dari kombinasi dengan 'GA' dari bawang putih goreng, 'ba' dari  mentega dan 'chi' dari keju..",
                'foto_menu'=>'Oreryu Otokomori-Gabachi.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Tsukemen",
                'harga_menu'=>39000,
                'deskripsi_menu'=>"Cobalah dan hargai mie asli yang kami banggakan, bersama dengan supnya.Porsi besar tersedia untuk hidangan ini dengan harga yang sama.",
                'foto_menu'=>'Oreryu Tsukemen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Toku-Tsukemen",
                'harga_menu'=>33000,
                'deskripsi_menu'=>"Oreryu Toku-Tsukemen adalah Tsukemen Spesial. Saat Anda ingin makan kenyang, miliki Tsukemen Spesial!. Disajikan dengan tambahan char siu dan topping telur..",
                'foto_menu'=>'Oreryu Toku-Tsukemen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],[
                'nama_menu'=>"Oreryu Miso-Tsukemen",
                'harga_menu'=>48000,
                'deskripsi_menu'=>"Oreryu Miso-Tsukemen adalah miso dengan banyak pasta wijen khusus ke dalam dasar sup miso merah untuk membuat sup tsukemen ini. Pastikan untuk memiliki porsi besar mie bersama dengan itu.",
                'foto_menu'=>'Oreryu Miso-Tsukemen.png',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
             ],
            ]);
    }
}
