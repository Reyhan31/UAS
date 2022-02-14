<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('e_books')->insert([
            [
                'title' => 'The Hunger Games',
                'author' => 'Suzanne Collins',
                'description' => 'The Hunger Games menceritakan tentang seorang gadis berusia 16 tahun bernama Katniss Everdeen yang tinggal di sebuah tempat bernama Distrik 12, di mana mayoritas penduduknya bekerja sebagai penambang. Distrik 12 adalah sebuah distrik terakhir, salah satu dari 12 distrik di negara yang disebut Panem. Panem sendiri merupakan sebuah negara di mana dulunya Amerika Utara pernah berada, yang setelah bencana besar di Bumi menjadi satu-satunya wilayah yang selamat. Karena pemberontakan gagal terhadap pemerintahan Panem 75 tahun sebelumnya, pemerintahan Panem lantas melakukan sebuah kompetisi maut yang diadakan di ibu kota negara yang bernama Capitol.'
            ],
            [
                'title' => 'Harry Potter',
                'author' => 'J. K. Rowling',
                'description' => 'Buku Harry Potter menceritakan sebuah kisah tentang anak sekolah yang memiliki sihir dan berjuang melawan kejahatan.'
            ],
            [
                'title' => 'Catching Fire',
                'author' => 'Suzanne Collinse',
                'description' => 'Buku Catching Fire menceritakan lanjutan kisah dari buku pertama Suzanne Collins, yaitu The Hunger Games.'
            ],
            [
                'title' => 'Rahasia Keajaiban Tumbuhan',
                'author' => 'Nurul Ihsan',
                'description' => 'Buku ini menjelaskan tentang berbagai jenis tumbuhan yang ada di bumi yang dikemas dengan bentuk yang menyenangkan sehingga diminati oleh anak-anak.'
            ],
            [
                'title' => 'Rahasia Keajaiban Makhluk Hidup',
                'author' => 'Nurul Ihsan',
                'description' => 'Buku ini menjelaskan tentang berbagai jenis makhluk hidup yang ada di bumi. Buku ini dilengkapi dengan berbagai gambar yang akan menarik perhatian.'
            ],
            [
                'title' => 'Rahasia Keajaiban Api',
                'author' => 'Nurul Ihsan',
                'description' => 'Buku ini menjelaskan tentang berbagai hal unik tentang api yang disajikan dengan tampilan yang menarik sehingga tidak akan membuat pembacanya merasa bosan.'
            ],
            [
                'title' => 'Pengantar Ilmu Komputer',
                'author' => 'Dwi Krisbiantoro',
                'description' => 'Buku ini berisi pengantar ilmu komputer yang membantu pemula yang baru belajar komputer untuk segera menguasi ilmu komputer.'
            ],
            [
                'title' => 'Pengenalan Komputer',
                'author' => 'Prof. Dr. Jogiyanto Hartono',
                'description' => 'Buku Pengenalan Komputer akan membantu para pembacanya untuk mengenal komputer secara lebih dalam dengan berbagai fakta menarik.'
            ],
            [
                'title' => 'Pengantar Aplikasi Komputer',
                'author' => 'Yenny Iskandar',
                'description' => 'Buku Pengantar Aplikasi Komputer ini akan memberi pengetahuan kepada pembacanya menganai beragai ilmu aplikasi pada komputer.'
            ],
            [
                'title' => 'Aplikasi Komputer',
                'author' => 'Jonathan John',
                'description' => 'Buku ini memberikan pengetahuan dasar kepada pembaca tentang aplikasi komputer.'
            ]
        ]);
    }
}
