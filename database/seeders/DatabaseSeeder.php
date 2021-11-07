<?php

namespace Database\Seeders;

use App\Models\artikel_model;
use App\Models\rumah_sakit;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $json = '[
            {
                "No.": "1",
                "Kota": "KAB.MALANG",
                "nama": "RS Bala Keselamatan Bokor",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Jenderal Ahmad Yani, Turen, Purwodadi, Blimbing, Malang, Jawa Timur 65126",
                "no_telp": "0341-363653"
            },
            {
                "No.": "2",
                "Kota": "KAB.MALANG",
                "nama": "RS Jiwa Dr. Radjiman Wediodiningrat Lawang",
                "jenis": "RS Jiwa",
                "tipe": "Kelas A",
                "alamat": "Jl. A Yani, Krajan Utara, Sumber Porong, Kec. Lawang, Malang, Jawa Timur 65208",
                "no_telp": "0341- 426015"
            },
            {
                "No.": "3",
                "Kota": "KAB.MALANG",
                "nama": "RS Umum Daerah Kanjuruhan Kepanjen",
                "jenis": "RS Umum",
                "tipe": "Kelas B",
                "alamat": "Jl. Panji No.100, Krajan, Panggungrejo, Kec. Kepanjen, Malang, Jawa Timur 65163",
                "no_telp": "0341- 395041"
            },
            {
                "No.": "4",
                "Kota": "KAB.MALANG",
                "nama": "RS Marsudi Waluyo",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Mondoroko Sel. No.KM 09, Ngentong, Purwoasri, Kec. Singosari, Malang, Jawa Timur 65153",
                "no_telp": "0341-458974"
            },
            {
                "No.": "5",
                "Kota": "KAB.MALANG",
                "nama": "RS Umum Daerah Lawang",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Kartini No.5, Lawang, Kec. Lawang, Malang, Jawa Timur 65211",
                "no_telp": "0341-426072"
            },
            {
                "No.": "6",
                "Kota": "KAB.MALANG",
                "nama": "RS Umum Wava Husada",
                "jenis": "RS Umum",
                "tipe": "Kelas B",
                "alamat": "Jl. Panglima Sudirman No.99A, Lemah Duwur, Dilem, Kec. Kepanjen, Malang, Jawa Timur 65163",
                "no_telp": "0341-393000"
            },
            {
                "No.": "7",
                "Kota": "KAB.MALANG",
                "nama": "RS Mitra Delima",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Raya Bulupayung No.1B, Bulupayung, Krebet, Kec. Bululawang, Malang, Jawa Timur 65171",
                "no_telp": "0341-805183"
            },
            {
                "No.": "8",
                "Kota": "KAB.MALANG",
                "nama": "RS Prasetya Husada",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Raya Ngijo Karangploso No.25, Kendalsari, Ngijo, Kec. Karang Ploso, Malang, Jawa Timur 65152",
                "no_telp": "0341-460558"
            },
            {
                "No.": "9",
                "Kota": "KAB.MALANG",
                "nama": "RS Siti Miriam",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. DR. Wahidin No.101, Krajan, Kalirejo, Kec. Lawang, Malang, Jawa Timur 65215",
                "no_telp": "0341-426057"
            },
            {
                "No.": "10",
                "Kota": "KAB.MALANG",
                "nama": "RS dr. M. Munir",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Komplek TNI AU, Jl. Dr. Munir No. 18, Saptorenggo, Pakis, Krajan, Saptorenggo, Kec. Pakis, Malang, Jawa Timur 65154",
                "no_telp": "0341-792273"
            },
            {
                "No.": "11",
                "Kota": "KAB.MALANG",
                "nama": "RS Prima Husada",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Raya Mondoroko, Mondoroko, Banjararum, Kec. Singosari, Malang, Jawa Timur 65153",
                "no_telp": "0341-458679"
            },
            {
                "No.": "12",
                "Kota": "KAB.MALANG",
                "nama": "RS Lawang Medika",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. DR. Cipto No.8, Sengkkrajan, Bedali, Kec. Lawang, Malang, Jawa Timur 65215",
                "no_telp": "0341-420888"
            },
            {
                "No.": "13",
                "Kota": "KAB.MALANG",
                "nama": "RS Ben Mari",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Raya Kendalpayak No.17, Kendal Payak, Kendalpayak, Kec. Pakisaji, Malang, Jawa Timur 65162",
                "no_telp": "0341-837777"
            },
            {
                "No.": "14",
                "Kota": "KAB.MALANG",
                "nama": "RS Umum Universitas Muhammadiyah Malang",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Tlogomas No.45, Dusun Rambaan, Landungsari, Kec. Dau, Kota Malang, Jawa Timur 65144",
                "no_telp": "0341-561666"
            },
            {
                "No.": "15",
                "Kota": "KAB.MALANG",
                "nama": "RSK Geriatri Teja Husada",
                "jenis": "RS Umum",
                "tipe": "",
                "alamat": "Jl. Panglima Sudirman No.73, Ketawang, Dilem, Kec. Kepanjen, Malang, Jawa Timur 65163",
                "no_telp": "0341-396273"
            },
            {
                "No.": "16",
                "Kota": "KOTA MALANG",
                "nama": "RS Umum Bhakti Bunda",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Mayjend Panjaitan No.176, Penanggungan, Kec. Klojen, Kota Malang, Jawa Timur 65113"
            },
            {
                "No.": "17",
                "Kota": "KAB.MALANG",
                "nama": "RS Singhasari Medika",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Pagetan, Candirenggo, Kec. Singosari, Malang, Jawa Timur 65153"
            },
            {
                "No.": "18",
                "Kota": "KAB.MALANG",
                "nama": "RSU Salsabila Husada",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Raya Jatikerto No.305, Cupak, Jatikerto, Kec. Kromengan, Malang, Jawa Timur 65165",
                "no_telp": "0341-397333"
            },
            {
                "No.": "19",
                "Kota": "KAB.MALANG",
                "nama": "RS Umum Pindad",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Semeru No.1, Turen, Kec. Turen, Kota Malang, Jawa Timur 65175",
                "no_telp": "0341-827295"
            },
            {
                "No.": "20",
                "Kota": "KAB.MALANG",
                "nama": "RS Umum Islam Gondang Legi",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Hayam Wuruk No.66, Krajan, Gondanglegi Wetan, Kec. Gondanglegi, Malang, Jawa Timur",
                "no_telp": "0341-879047"
            },
            {
                "No.": "21",
                "Kota": "KAB.MALANG",
                "nama": "RS Sumber Sentosa",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Raya Kebonsari No.221, Kebonsari, Tumpang, Kec. Tumpang, Malang, Jawa Timur 65156",
                "no_telp": "0341-787233"
            },
            {
                "No.": "22",
                "Kota": "KAB.MALANG",
                "nama": "RS Umum Islam Madinah Kasembon",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jalan Raya Sukosari No.32 RT.3/RW.2 Besuk, Besuk, Sukosari, Kec. Kasembon, Malang, Jawa Timur",
                "no_telp": "0341-328144"
            },
            {
                "No.": "23",
                "Kota": "KAB.MALANG",
                "nama": "RS Bedah Hasta Husada",
                "jenis": "RSK Bedah",
                "tipe": "Kelas C",
                "alamat": "Jl. Bromo No.98-100, Sukun, Kepanjen, Kec. Kepanjen, Malang, Jawa Timur 65163",
                "no_telp": "0341-399499"
            },
            {
                "No.": "24",
                "Kota": "KOTA MALANG",
                "nama": "RS Umum Daerah Dr. Saiful Anwar",
                "jenis": "RS Umum",
                "tipe": "Kelas A",
                "alamat": "Jl. Jaksa Agung Suprapto No.2, Klojen, Kec. Klojen, Kota Malang, Jawa Timur 65112",
                "no_telp": "0341-362101"
            },
            {
                "No.": "25",
                "Kota": "KOTA MALANG",
                "nama": "RS Tk. II Dr. Soepraoen",
                "jenis": "RS Umum",
                "tipe": "Kelas B",
                "alamat": "Jl. S. Supriadi No.22, Sukun, Kec. Sukun, Kota Malang, Jawa Timur 65112",
                "no_telp": "0341-325112"
            },
            {
                "No.": "26",
                "Kota": "KOTA MALANG",
                "nama": "RS Umum Panti Nirmala",
                "jenis": "RS Umum",
                "tipe": "Kelas B",
                "alamat": "Jl. Kebalen Wetan No.2-8, Kotalama, Kec. Kedungkandang, Kota Malang, Jawa Timur 65134",
                "no_telp": "0341-362459"
            },
            {
                "No.": "27",
                "Kota": "KOTA MALANG",
                "nama": "RS Umum Panti Waluya Sawahan Malang",
                "jenis": "RS Umum",
                "tipe": "Kelas B",
                "alamat": "Jl. Nusakambangan No.56, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117",
                "no_telp": "0341-366033"
            },
            {
                "No.": "28",
                "Kota": "KOTA MALANG",
                "nama": "RS Umum Lavalette Malang",
                "jenis": "RS Umum",
                "tipe": "Kelas B",
                "alamat": "Jl. W.R. Supratman No.10, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111",
                "no_telp": "0341-470805"
            },
            {
                "No.": "29",
                "Kota": "KAB.MALANG",
                "nama": "RS Ibu dan Anak Husada Bunda",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "l. Pahlawan Trip, Oro-oro Dowo, Klojen, Malang City, East Java 65112",
                "no_telp": "0341-566972"
            },
            {
                "No.": "30",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Muhammadiyah Malang",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Kyai H. Wahid Hasyim No.26, Kauman, Klojen, Kota Malang, Jawa Timur"
            },
            {
                "No.": "31",
                "Kota": "KOTA MALANG",
                "nama": "RSU Islam Aisyiyah Malang",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Sulawesi No.16, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117",
                "no_telp": "0341-326773"
            },
            {
                "No.": "32",
                "Kota": "KOTA MALANG",
                "nama": "RS Islam Malang",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jalan Mayjen Haryono No.139, Dinoyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65144",
                "no_telp": "0341-551356"
            },
            {
                "No.": "33",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Mardi Waloeja Kauman Malang",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. W.R. Supratman No.1, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111",
                "no_telp": "0341-364756"
            },
            {
                "No.": "34",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Puri",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Taman Slamet No.20, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115",
                "no_telp": "0341-325329"
            },
            {
                "No.": "35",
                "Kota": "KOTA MALANG",
                "nama": "RSU Hermina Tangkubanprahu",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Tangkuban Perahu No.31-33, Kauman, Kec. Klojen, Kota Malang, Jawa Timur 65119",
                "no_telp": "0341-325082"
            },
            {
                "No.": "36",
                "Kota": "KOTA MALANG",
                "nama": "RS Bersalin Permata Hati",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Danau Toba No.16 - 18, Lesanpuro, Kec. Kedungkandang, Kota Malang, Jawa Timur 65138",
                "no_telp": "0341-718068"
            },
            {
                "No.": "37",
                "Kota": "KOTA MALANG",
                "nama": "RS Umum Permata Bunda",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Soekarno - Hatta No.75, Mojolangu, Kec. Lowokwaru, Kota Malang, Jawa Timur 65142",
                "no_telp": "0341-407462"
            },
            {
                "No.": "38",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Puri Bunda",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Simpang Sulfat Utara No.60A, Pandanwangi, Kec. Blimbing, Kota Malang, Jawa Timur 65126",
                "no_telp": "0341-480047"
            },
            {
                "No.": "39",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Mardi Waloeja Rampal Malang",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. W.R. Supratman No.1, Rampal Celaket, Kec. Klojen, Kota Malang, Jawa Timur 65111",
                "no_telp": "0341-364756"
            },
            {
                "No.": "40",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Mutiara Bunda",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Ciujung No.19, Purwantoro, Kec. Blimbing, Kota Malang, Jawa Timur 65126",
                "no_telp": "0341-400403"
            },
            {
                "No.": "41",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Melati Husada",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Kawi No.32 - 34, Gading Kasri, Kec. Klojen, Kota Malang, Jawa Timur 65115",
                "no_telp": "0341-341357"
            },
            {
                "No.": "42",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Galeri Candra Malang",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Andong No.3, Jatimulyo, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141",
                "no_telp": "0341-478571"
            },
            {
                "No.": "43",
                "Kota": "KOTA MALANG",
                "nama": "RS Bantuan 05.08.04 Lawang",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Sumberwaras No.32, Karang Sono, Kalirejo, Kec. Lawang, Malang, Jawa Timur 65216",
                "no_telp": "0341-426579"
            },
            {
                "No.": "44",
                "Kota": "KOTA MALANG",
                "nama": "RS Persada Hospital",
                "jenis": "RS Umum",
                "tipe": "Kelas B",
                "alamat": "Kompleks Araya Business Centre Kav. 2-4 Jalan Panji Suroso Blimbing Purwodadi Blimbing Kota Malang Jawa Timur 65126 ID, Jl. Raden Panji Suroso No.4, Purwodadi, Kec. Blimbing, Kota Malang, Jawa Timur 65126",
                "no_telp": "0341-2996333"
            },
            {
                "No.": "45",
                "Kota": "KOTA MALANG",
                "nama": "RS Umum Daerah Kota Malang",
                "jenis": "RS Umum",
                "tipe": "Kelas D",
                "alamat": "Jl. Rajasa No.27, Bumiayu, Kec. Kedungkandang, Kota Malang, Jawa Timur 65116",
                "no_telp": "0341-754338"
            },
            {
                "No.": "46",
                "Kota": "KOTA MALANG",
                "nama": "RSIA REFA HUSADA",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Jl. Mayjen Sungkono No.9, RT.005/RW.004, Tlogowaru, Kec. Kedungkandang, Kota Malang",
                "no_telp": "81331181310"
            },
            {
                "No.": "47",
                "Kota": "KOTA MALANG",
                "nama": "RS Ibu dan Anak Rumkitbab 05.08.02 Malang",
                "jenis": "RSIA",
                "tipe": "Kelas C",
                "alamat": "Rumkitban, Jl. Panglima Sudirman No.E20, Kesatrian, Kec. Blimbing, Kota Malang, Jawa Timur 65111",
                "no_telp": "0341-354396"
            },
            {
                "No.": "48",
                "Kota": "KOTA MALANG",
                "nama": "RS Universitas Brawijaya",
                "jenis": "RS Umum",
                "tipe": "Kelas C",
                "alamat": "Jl. Soekarno - Hatta, Lowokwaru, Kec. Lowokwaru, Kota Malang, Jawa Timur 65141",
                "no_telp": "0341-403000"
            }
        ]';
        $json_dec=json_decode($json,true);
        foreach ($json_dec as $key => $value) {
            $rumah_sakit=new rumah_sakit;
            $rumah_sakit->nama=$value['nama'];
            $rumah_sakit->kota=$value['Kota'];
            $rumah_sakit->jenis=$value['jenis'];
            $rumah_sakit->tipe=$value['tipe'];
            $rumah_sakit->alamat=$value['alamat'];
            $rumah_sakit->no_telp=(isset($value['no_telp']))?$value['no_telp']:"";
            $rumah_sakit->save();
        }

        $user = new User;
        $user->name = "admin";
        $user->email = "admin@covimedub.com";
        $user->password = bcrypt('admin12345'); 
        $user->save();
        
        $artikel=new artikel_model;
        $artikel->judul="Pentingnya Kesehatan Kehamilan di Masa Covid-19";
        $artikel->isi="Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";
        $artikel->save();
    }
}
