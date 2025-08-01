<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Restaurant;

class RestaurantSeeder extends Seeder
{
    public function run()
    {
        Restaurant::insert([
            [
                'name' => '仙人',
                'area' => 'tokyo',
                'genre' => 'sushi',
                'image_path' => '/images/sushi.jpg',
                'description' => '料理長厳選の食材から作る寿司を用いたコースをぜひお楽しみください。食材・味・価格、お客様の満足度を徹底的に追及したお店です。特別な日のお食事、ビジネス接待まで気軽に使用することができます。',
            ],
            [
                'name' => '牛助',
                'area' => 'osaka',
                'genre' => 'yakiniku',
                'image_path' => '/images/yakiniku.jpg',
                'description' => '焼肉業界で20年間経験を積み、肉を熟知したマスターによる実力派焼肉店。長年の実績とお付き合いをもとに、なかなか食べられない希少部位も仕入れております。また、ゆったりとくつろげる空間はお仕事終わりの一杯や女子会にぴったりです。',
            ],
            [
                'name' => '戦栗',
                'area' => 'hukuoka',
                'genre' => 'izakaya',
                'image_path' => '/images/izakaya.jpg',
                'description' => '気軽に立ち寄れる昔懐かしの大衆居酒屋です。キンキンに冷えたビールを、なんと199円で。鳥かわ煮込み串は販売総数100000本突破の名物料理です。仕事帰りに是非御来店ください。',
            ],
            [
                'name' => 'ルーク',
                'area' => 'tokyo',
                'genre' => 'italian',
                'image_path' => '/images/italian.jpg',
                'description' => '都心にひっそりとたたずむ、古民家を改築した落ち着いた空間です。イタリアで修業を重ねたシェフによるモダンなイタリア料理とソムリエセレクトによる厳選ワインとのペアリングが好評です。ゆっくりと上質な時間をお楽しみください。',
            ],
            [
                'name' => '志摩屋',
                'area' => 'hukuoka',
                'genre' => 'ramen',
                'image_path' => '/images/ramen.jpg',
                'description' => 'ラーメン屋とは思えない店内にはカウンター席はもちろん、個室も用意してあります。ラーメンはこってり系・あっさり系ともに揃っています。その他豊富な一品料理やアルコールも用意しており、居酒屋としても利用できます。ぜひご来店をお待ちしております。',
            ],
            [
                'name' => '香',
                'area' => 'tokyo',
                'genre' => 'yakiniku',
                'image_path' => '/images/yakiniku.jpg',
                'description' => '大小さまざまなお部屋をご用意してます。デートや接待、記念日や誕生日など特別な日にご利用ください。皆様のご来店をお待ちしております。',
            ],
            [
                'name' => 'JJ',
                'area' => 'osaka',
                'genre' => 'italian',
                'image_path' => '/images/italian.jpg',
                'description' => 'イタリア製ピザ窯芳ばしく焼き上げた極薄のミラノピッツァや厳選されたワインをお楽しみいただけます。女子会や男子会、記念日やお誕生日会にもオススメです。',
            ],
            [
                'name' => 'らーめん極み',
                'area' => 'tokyo',
                'genre' => 'ramen',
                'image_path' => '/images/ramen.jpg',
                'description' => '一杯、一杯心を込めて職人が作っております。味付けは少し濃いめです。 食べやすく最後の一滴まで美味しく飲めると好評です。',
            ],
            [
                'name' => '鳥雨',
                'area' => 'osaka',
                'genre' => 'izakaya',
                'image_path' => '/images/izakaya.jpg',
                'description' => '素材の旨味を存分に引き出す為に、塩焼を中心としたお店です。比内地鶏を中心に、厳選素材を職人が備長炭で豪快に焼き上げます。清潔な内装に包まれた大人の隠れ家で贅沢で優雅な時間をお過ごし下さい。',
            ],
            [
                'name' => '築地色合',
                'area' => 'tokyo',
                'genre' => 'sushi',
                'image_path' => '/images/sushi.jpg',
                'description' => '鮨好きの方の為の鮨屋として、迫力ある大きさの握りを1貫ずつ提供致します。',
            ],
            [
                'name' => '晴海',
                'area' => 'osaka',
                'genre' => 'yakiniku',
                'image_path' => '/images/yakiniku.jpg',
                'description' => '毎年チャンピオン牛を買い付け、仙台市長から表彰されるほどの上質な仕入れをする精肉店オーナーの本当に美味しい国産牛を食べてもらいたいという思いから誕生したお店です。',
            ],
                        [
                'name' => '三子',
                'area' => 'hukuoka',
                'genre' => 'yakiniku',
                'image_path' => '/images/yakiniku.jpg',
                'description' => '最高級の美味しいお肉で日々の疲れを軽減していただければと贅沢にサーロインを盛り込んだ御膳をご用意しております。',
            ],
                        [
                'name' => '八戒',
                'area' => 'tokyo',
                'genre' => 'izakaya',
                'image_path' => '/images/izakaya.jpg',
                'description' => '当店自慢の鍋や焼き鳥などお好きなだけ堪能できる食べ放題プランをご用意しております。飲み放題は2時間と3時間がございます。',
            ],
                        [
                'name' => '福助',
                'area' => 'osaka',
                'genre' => 'sushi',
                'image_path' => '/images/sushi.jpg',
                'description' => 'ミシュラン掲載店で磨いた、寿司職人の旨さへのこだわりはもちろん、 食事をゆっくりと楽しんでいただける空間作りも意識し続けております。 接待や大切なお食事にはぜひご利用ください。',
            ],
                        [
                'name' => 'ラー北',
                'area' => 'tokyo',
                'genre' => 'ramen',
                'image_path' => '/images/ramen.jpg',
                'description' => 'お昼にはランチを求められるサラリーマン、夕方から夜にかけては、学生や会社帰りのサラリーマン、小上がり席もありファミリー層にも大人気です。',
            ],
                        [
                'name' => '翔',
                'area' => 'osaka',
                'genre' => 'izakaya',
                'image_path' => '/images/izakaya.jpg',
                'description' => '博多出身の店主自ら厳選した新鮮な旬の素材を使ったコース料理をご提供します。一人一人のお客様に目が届くようにしております。',
            ],
                        [
                'name' => '経緯',
                'area' => 'tokyo',
                'genre' => 'sushi',
                'image_path' => '/images/sushi.jpg',
                'description' => '職人が一つ一つ心を込めて丁寧に仕上げた、江戸前鮨ならではの味をお楽しみ頂けます。鮨に合った希少なお酒も数多くご用意しております。他にはない海鮮太巻き、当店自慢の蒸し鮑、是非ご賞味下さい。',
            ],
                        [
                'name' => '漆',
                'area' => 'tokyo',
                'genre' => 'yakiniku',
                'image_path' => '/images/yakiniku.jpg',
                'description' => '店内に一歩足を踏み入れると、肉の焼ける音と芳香が猛烈に食欲を掻き立ててくる。そんな漆で味わえるのは至極の焼き肉です。',
            ],
                        [
                'name' => 'THE TOOL',
                'area' => 'hukuoka',
                'genre' => 'italian',
                'image_path' => '/images/italian.jpg',
                'description' => '非日常的な空間で日頃の疲れを癒し、ゆったりとした上質な時間を過ごせる大人の為のレストラン&バーです。',
            ],
                        [
                'name' => '木船',
                'area' => 'osaka',
                'genre' => 'sushi',
                'image_path' => '/images/sushi.jpg',
                'description' => '毎日店主自ら市場等に出向き、厳選した魚介類が、お鮨をはじめとした繊細な料理に仕立てられます。また、選りすぐりの種類豊富なドリンクもご用意しております。',
            ],
        ]);
    }
}
