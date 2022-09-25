<?php

namespace App\Console\Commands;


use App\Models\tenkisyousai;
use App\Models\TenkiUrl;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class Scrapetenki extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scrape:tenki';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Scrape Tenki';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $this->truncateTables();
        $this->saveNagasaki();
        $this->saveSaga();
        $this->saveFukuoka();
        $this->saveOita();
        $this->saveKumamoto();
        $this->saveMiyazaki();
        $this->saveKagosima();
        $this->saveOkinawa();
        $this->saveKagawa();
        $this->saveTokusima();
        $this->saveEhime();
        $this->saveKouchi();
        $this->saveHiroshima();
        $this->saveOkayama();
        $this->saveYamaguchi();
        $this->saveShimane();
        $this->saveTottori();
        $this->saveOsaka();
        $this->saveHyogo();
        $this->saveKyoto();
        $this->saveShiga();
        $this->saveNara();
        $this->saveWakayama();
        $this->saveMie();
        $this->saveShizuoka();
        $this->saveAichi();
        $this->saveGifu();
        $this->saveYamanashi();
        $this->saveNagano();
        $this->saveNiigata();
        $this->saveToyama();
        $this->saveIshikawa();
        $this->saveFukui();
        $this->saveTokyo();
        $this->saveKanagawa();
        $this->saveSaitama();
        $this->saveChiba();
        $this->saveIbaraki();
        $this->saveTochigi();
        $this->saveGunma();
        $this->saveAomori();
        $this->saveIwate();
        $this->saveAkita();
        $this->saveMiyagi();
        $this->saveYamagata();
        $this->saveFukushima();
        $this->saveHokkaido();
    }

    private function truncateTables()
    {
        DB::table('tenkisyousais')->truncate();
    }


    // 長崎の天気
    private function saveNagasaki()
    {
        $url = 'https://weathernews.jp/onebox/tenki/nagasaki/42201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 佐賀の天気
    private function saveSaga()
    {
        $url = 'https://weathernews.jp/onebox/tenki/saga/41201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 福岡の天気
    private function saveFukuoka()
    {
        $url = 'https://weathernews.jp/onebox/tenki/fukuoka/40132/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 大分の天気
    private function saveOita()
    {
        $url = 'https://weathernews.jp/onebox/tenki/oita/44201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 熊本の天気
    private function saveKumamoto()
    {
        $url = 'https://weathernews.jp/onebox/tenki/kumamoto/43101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 宮崎の天気
    private function saveMiyazaki()
    {
        $url = 'https://weathernews.jp/onebox/tenki/miyazaki/45201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 鹿児島の天気
    private function saveKagosima()
    {
        $url = 'https://weathernews.jp/onebox/tenki/kagoshima/46201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 沖縄の天気
    private function saveOkinawa()
    {
        $url = 'https://weathernews.jp/onebox/tenki/okinawa/47201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 香川の天気
    private function saveKagawa()
    {
        $url = 'https://weathernews.jp/onebox/tenki/kagawa/37201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 徳島の天気
    private function saveTokusima()
    {
        $url = 'https://weathernews.jp/onebox/tenki/tokushima/36201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 愛媛の天気
    private function saveEhime()
    {
        $url = 'https://weathernews.jp/onebox/tenki/ehime/38201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 高知の天気
    private function saveKouchi()
    {
        $url = 'https://weathernews.jp/onebox/tenki/kouchi/39201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 広島の天気
    private function saveHiroshima()
    {
        $url = 'https://weathernews.jp/onebox/tenki/hiroshima/34101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 岡山の天気
    private function saveOkayama()
    {
        $url = 'https://weathernews.jp/onebox/tenki/okayama/33101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 島根の天気
    private function saveShimane()
    {
        $url = 'https://weathernews.jp/onebox/tenki/shimane/32201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 山口の天気
    private function saveYamaguchi()
    {
        $url = 'https://weathernews.jp/onebox/tenki/yamaguchi/35201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 鳥取の天気
    private function saveTottori()
    {
        $url = 'https://weathernews.jp/onebox/tenki/tottori/31201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 大阪の天気
    private function saveOsaka()
    {
        $url = 'https://weathernews.jp/onebox/tenki/osaka/27102/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 兵庫の天気
    private function saveHyogo()
    {
        $url = 'https://weathernews.jp/onebox/tenki/hyogo/28101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    // 京都の天気
    private function saveKyoto()
    {
        $url = 'https://weathernews.jp/onebox/tenki/kyoto/26101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 滋賀の天気
    private function saveShiga()
    {
        $url = 'https://weathernews.jp/onebox/tenki/shiga/25201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 奈良の天気
    private function saveNara()
    {
        $url = 'https://weathernews.jp/onebox/tenki/shiga/25201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 和歌山の天気
    private function saveWakayama()
    {
        $url = 'https://weathernews.jp/onebox/tenki/wakayama/30201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 三重の天気
    private function saveMie()
    {
        $url = 'https://weathernews.jp/onebox/tenki/mie/24201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 静岡の天気
    private function saveShizuoka()
    {
        $url = 'https://weathernews.jp/onebox/tenki/shizuoka/22101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 愛知の天気
    private function saveAichi()
    {
        $url = 'https://weathernews.jp/onebox/tenki/aichi/23101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 岐阜の天気
    private function saveGifu()
    {
        $url = 'https://weathernews.jp/onebox/tenki/gifu/21201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 山梨の天気
    private function saveYamanashi()
    {
        $url = 'https://weathernews.jp/onebox/tenki/yamanashi/19201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 長野の天気
    private function saveNagano()
    {
        $url = 'https://weathernews.jp/onebox/tenki/nagano/20201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 新潟の天気
    private function saveNiigata()
    {
        $url = 'https://weathernews.jp/onebox/tenki/niigata/15101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 富山の天気
    private function saveToyama()
    {
        $url = 'https://weathernews.jp/onebox/tenki/toyama/16201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 石川の天気
    private function saveIshikawa()
    {
        $url = 'https://weathernews.jp/onebox/tenki/ishikawa/17201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 福井の天気
    private function saveFukui()
    {
        $url = 'https://weathernews.jp/onebox/tenki/fukui/18201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 東京の天気
    private function saveTokyo()
    {
        $url = 'https://weathernews.jp/onebox/tenki/tokyo/13101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 神奈川の天気
    private function saveKanagawa()
    {
        $url = 'https://weathernews.jp/onebox/tenki/kanagawa/14101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 埼玉の天気
    private function saveSaitama()
    {
        $url = 'https://weathernews.jp/onebox/tenki/saitama/11101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 千葉の天気
    private function saveChiba()
    {
        $url = 'https://weathernews.jp/onebox/tenki/chiba/12101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 茨城の天気
    private function saveIbaraki()
    {
        $url = 'https://weathernews.jp/onebox/tenki/ibaraki/08201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 栃木の天気
    private function saveTochigi()
    {
        $url = 'https://weathernews.jp/onebox/tenki/tochigi/09201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 群馬の天気
    private function saveGunma()
    {
        $url = 'https://weathernews.jp/onebox/tenki/gunma/10201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 青森の天気
    private function saveAomori()
    {
        $url = 'https://weathernews.jp/onebox/tenki/aomori/02201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 岩手の天気
    private function saveIwate()
    {
        $url = 'https://weathernews.jp/onebox/tenki/iwate/03201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 秋田の天気
    private function saveAkita()
    {
        $url = 'https://weathernews.jp/onebox/tenki/akita/05201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 宮城の天気
    private function saveMiyagi()
    {
        $url = 'https://weathernews.jp/onebox/tenki/miyagi/04101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 山形の天気
    private function saveYamagata()
    {
        $url = 'https://weathernews.jp/onebox/tenki/yamagata/06201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 福島の天気
    private function saveFukushima()
    {
        $url = 'https://weathernews.jp/onebox/tenki/fukushima/07201/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }
    // 北海道の天気
    private function saveHokkaido()
    {
        $url = 'https://weathernews.jp/onebox/tenki/hokkaido/01101/';
        $crawler = \Goutte::request('GET', $url);

        tenkisyousai::create(
            [
                'url' => $url,
                'prefectures' => $this->getprefectures($crawler),
                'weather' => $this->getweather($crawler),
            ]
        );
    }

    private function getprefectures($crawler)
    {
        return $crawler->filter('.index__tit')->text();
    }

    private function getweather($crawler)
    {
        return $crawler->filter('.wIcon')->attr('src');
    }
}
