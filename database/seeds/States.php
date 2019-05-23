<?php

use Illuminate\Database\Seeder;

class States extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $states = array(
        '1' => 'آذربايجان شرقي',
        '2' => 'آذربايجان غربي',
        '3' => 'اردبيل',
        '4' => 'اصفهان',
        '5' => 'البرز',
        '6' => 'ايلام',
        '7' => 'بوشهر',
        '8' => 'تهران',
        '9' => 'چهارمحال بختياري',
        '10' => 'خراسان جنوبي',
        '11' => 'خراسان رضوي',
        '12' => 'خراسان شمالي',
        '13' => 'خوزستان',
        '14' => 'زنجان',
        '15' => 'سمنان',
        '16' => 'سيستان و بلوچستان',
        '17' => 'فارس',
        '18' => 'قزوين',
        '19' => 'قم',
        '20' => 'کردستان',
        '21' => 'کرمان',
        '22' => 'کرمانشاه',
        '23' => 'کهکيلويه و بويراحمد',
        '24' => 'گلستان',
        '25' => 'گيلان',
        '26' => 'لرستان',
        '27' => 'مازندران',
        '28' => 'مرکزي',
        '29' => 'هرمزگان',
        '30' => 'همدان',
        '31' => 'يزد',
    );

    $cities = array(
        '1' => 'تبريز',
        '2' => 'کندوان',
        '3' => 'بندر شرفخانه',
        '4' => 'مراغه',
        '5' => 'ميانه',
        '6' => 'شبستر',
        '7' => 'مرند',
        '8' => 'جلفا',
        '9' => 'سراب',
        '10' => 'هاديشهر',
        '11' => 'بناب',
        '12' => 'کليبر',
        '13' => 'تسوج',
        '14' => 'اهر',
        '15' => 'هريس',
        '16' => 'عجبشير',
        '17' => 'هشترود',
        '18' => 'ملکان',
        '19' => 'بستان آباد',
        '20' => 'ورزقان',
        '21' => 'اسکو',
        '22' => 'آذر شهر',
        '23' => 'قره آغاج',
        '24' => 'ممقان',
        '25' => 'صوفيان',
        '26' => 'ايلخچي',
        '27' => 'خسروشهر',
        '28' => 'باسمنج',
        '29' => 'سهند',
        '30' => 'اروميه',
        '31' => 'نقده',
        '32' => 'ماکو',
        '33' => 'تکاب',
        '34' => 'خوي',
        '35' => 'مهاباد',
        '36' => 'سر دشت',
        '37' => 'چالدران',
        '38' => 'بوکان',
        '39' => 'مياندوآب',
        '40' => 'سلماس',
        '41' => 'شاهين دژ',
        '42' => 'پيرانشهر',
        '43' => 'سيه چشمه',
        '44' => 'اشنويه',
        '45' => 'چايپاره',
        '46' => 'پلدشت',
        '47' => 'شوط',
        '48' => 'اردبيل',
        '49' => 'سرعين',
        '50' => 'بيله سوار',
        '51' => 'پارس آباد',
        '52' => 'خلخال',
        '53' => 'مشگين شهر',
        '54' => 'مغان',
        '55' => 'نمين',
        '56' => 'نير',
        '57' => 'کوثر',
        '58' => 'کيوي',
        '59' => 'گرمي',
        '60' => 'اصفهان',
        '61' => 'فريدن',
        '62' => 'فريدون شهر',
        '63' => 'فلاورجان',
        '64' => 'گلپايگان',
        '65' => 'دهاقان',
        '66' => 'نطنز',
        '67' => 'نايين',
        '68' => 'تيران',
        '69' => 'کاشان',
        '70' => 'فولاد شهر',
        '71' => 'اردستان',
        '72' => 'سميرم',
        '73' => 'درچه',
        '74' => 'کوهپايه',
        '75' => 'مبارکه',
        '76' => 'شهرضا',
        '77' => 'خميني شهر',
        '78' => 'شاهين شهر',
        '79' => 'نجف آباد',
        '80' => 'دولت آباد',
        '81' => 'زرين شهر',
        '82' => 'آران و بيدگل',
        '83' => 'باغ بهادران',
        '84' => 'خوانسار',
        '85' => 'مهردشت',
        '86' => 'علويجه',
        '87' => 'عسگران',
        '88' => 'نهضت آباد',
        '89' => 'حاجي آباد',
        '90' => 'تودشک',
        '91' => 'ورزنه',
        '92' => 'ايلام',
        '93' => 'مهران',
        '94' => 'دهلران',
        '95' => 'آبدانان',
        '96' => 'شيروان چرداول',
        '97' => 'دره شهر',
        '98' => 'ايوان',
        '99' => 'سرابله',
        '100' => 'بوشهر',
        '101' => 'تنگستان',
        '102' => 'دشتستان',
        '103' => 'دير',
        '104' => 'ديلم',
        '105' => 'کنگان',
        '106' => 'گناوه',
        '107' => 'ريشهر',
        '108' => 'دشتي',
        '109' => 'خورموج',
        '110' => 'اهرم',
        '111' => 'برازجان',
        '112' => 'خارک',
        '113' => 'جم',
        '114' => 'کاکي',
        '115' => 'عسلويه',
        '116' => 'بردخون',
        '117' => 'تهران',
        '118' => 'ورامين',
        '119' => 'فيروزکوه',
        '120' => 'ري',
        '121' => 'دماوند',
        '122' => 'اسلامشهر',
        '123' => 'رودهن',
        '124' => 'لواسان',
        '125' => 'بومهن',
        '126' => 'تجريش',
        '127' => 'فشم',
        '128' => 'کهريزک',
        '129' => 'پاکدشت',
        '130' => 'چهاردانگه',
        '131' => 'شريف آباد',
        '132' => 'قرچک',
        '133' => 'باقرشهر',
        '134' => 'شهريار',
        '135' => 'رباط کريم',
        '136' => 'قدس',
        '137' => 'ملارد',
        '138' => 'شهرکرد',
        '139' => 'فارسان',
        '140' => 'بروجن',
        '141' => 'چلگرد',
        '142' => 'اردل',
        '143' => 'لردگان',
        '144' => 'سامان',
        '145' => 'قائن',
        '146' => 'فردوس',
        '147' => 'بيرجند',
        '148' => 'نهبندان',
        '149' => 'سربيشه',
        '150' => 'طبس مسينا',
        '151' => 'قهستان',
        '152' => 'درميان',
        '153' => 'مشهد',
        '154' => 'نيشابور',
        '155' => 'سبزوار',
        '156' => 'کاشمر',
        '157' => 'گناباد',
        '158' => 'طبس',
        '159' => 'تربت حيدريه',
        '160' => 'خواف',
        '161' => 'تربت جام',
        '162' => 'تايباد',
        '163' => 'قوچان',
        '164' => 'سرخس',
        '165' => 'بردسکن',
        '166' => 'فريمان',
        '167' => 'چناران',
        '168' => 'درگز',
        '169' => 'کلات',
        '170' => 'طرقبه',
        '171' => 'سر ولايت',
        '172' => 'بجنورد',
        '173' => 'اسفراين',
        '174' => 'جاجرم',
        '175' => 'شيروان',
        '176' => 'آشخانه',
        '177' => 'گرمه',
        '178' => 'ساروج',
        '179' => 'اهواز',
        '180' => 'ايرانشهر',
        '181' => 'شوش',
        '182' => 'آبادان',
        '183' => 'خرمشهر',
        '184' => 'مسجد سليمان',
        '185' => 'ايذه',
        '186' => 'شوشتر',
        '187' => 'انديمشک',
        '188' => 'سوسنگرد',
        '189' => 'هويزه',
        '190' => 'دزفول',
        '191' => 'شادگان',
        '192' => 'بندر ماهشهر',
        '193' => 'بندر امام خميني',
        '194' => 'اميديه',
        '195' => 'بهبهان',
        '196' => 'رامهرمز',
        '197' => 'باغ ملک',
        '198' => 'هنديجان',
        '199' => 'لالي',
        '200' => 'رامشير',
        '201' => 'حميديه',
        '202' => 'دغاغله',
        '203' => 'ملاثاني',
        '204' => 'شادگان',
        '205' => 'ويسي',
        '206' => 'زنجان',
        '207' => 'ابهر',
        '208' => 'خدابنده',
        '209' => 'طارم',
        '210' => 'ماهنشان',
        '211' => 'خرمدره',
        '212' => 'ايجرود',
        '213' => 'زرين آباد',
        '214' => 'آب بر',
        '215' => 'قيدار',
        '216' => 'سمنان',
        '217' => 'شاهرود',
        '218' => 'گرمسار',
        '219' => 'ايوانکي',
        '220' => 'دامغان',
        '221' => 'بسطام',
        '222' => 'زاهدان',
        '223' => 'چابهار',
        '224' => 'خاش',
        '225' => 'سراوان',
        '226' => 'زابل',
        '227' => 'سرباز',
        '228' => 'نيکشهر',
        '229' => 'ايرانشهر',
        '230' => 'راسک',
        '231' => 'ميرجاوه',
        '232' => 'شيراز',
        '233' => 'اقليد',
        '234' => 'داراب',
        '235' => 'فسا',
        '236' => 'مرودشت',
        '237' => 'خرم بيد',
        '238' => 'آباده',
        '239' => 'کازرون',
        '240' => 'ممسني',
        '241' => 'سپيدان',
        '242' => 'لار',
        '243' => 'فيروز آباد',
        '244' => 'جهرم',
        '245' => 'ني ريز',
        '246' => 'استهبان',
        '247' => 'لامرد',
        '248' => 'مهر',
        '249' => 'حاجي آباد',
        '250' => 'نورآباد',
        '251' => 'اردکان',
        '252' => 'صفاشهر',
        '253' => 'ارسنجان',
        '254' => 'قيروکارزين',
        '255' => 'سوريان',
        '256' => 'فراشبند',
        '257' => 'سروستان',
        '258' => 'ارژن',
        '259' => 'گويم',
        '260' => 'داريون',
        '261' => 'زرقان',
        '262' => 'خان زنيان',
        '263' => 'کوار',
        '264' => 'ده بيد',
        '265' => 'باب انار/خفر',
        '266' => 'بوانات',
        '267' => 'خرامه',
        '268' => 'خنج',
        '269' => 'سياخ دارنگون',
        '270' => 'قزوين',
        '271' => 'تاکستان',
        '272' => 'آبيک',
        '273' => 'بوئين زهرا',
        '274' => 'قم',
        '275' => 'طالقان',
        '276' => 'نظرآباد',
        '277' => 'اشتهارد',
        '278' => 'هشتگرد',
        '279' => 'کن',
        '280' => 'آسارا',
        '281' => 'شهرک گلستان',
        '282' => 'انديشه',
        '283' => 'کرج',
        '284' => 'نظر آباد',
        '285' => 'گوهردشت',
        '286' => 'ماهدشت',
        '287' => 'مشکين دشت',
        '288' => 'سنندج',
        '289' => 'ديواندره',
        '290' => 'بانه',
        '291' => 'بيجار',
        '292' => 'سقز',
        '293' => 'کامياران',
        '294' => 'قروه',
        '295' => 'مريوان',
        '296' => 'صلوات آباد',
        '297' => 'حسن آباد',
        '298' => 'کرمان',
        '299' => 'راور',
        '300' => 'بابک',
        '301' => 'انار',
        '302' => 'کوهبنان',
        '303' => 'رفسنجان',
        '304' => 'بافت',
        '305' => 'سيرجان',
        '306' => 'کهنوج',
        '307' => 'زرند',
        '308' => 'بم',
        '309' => 'جيرفت',
        '310' => 'بردسير',
        '311' => 'کرمانشاه',
        '312' => 'اسلام آباد غرب',
        '313' => 'سر پل ذهاب',
        '314' => 'کنگاور',
        '315' => 'سنقر',
        '316' => 'قصر شيرين',
        '317' => 'گيلان غرب',
        '318' => 'هرسين',
        '319' => 'صحنه',
        '320' => 'پاوه',
        '321' => 'جوانرود',
        '322' => 'شاهو',
        '323' => 'ياسوج',
        '324' => 'گچساران',
        '325' => 'دنا',
        '326' => 'دوگنبدان',
        '327' => 'سي سخت',
        '328' => 'دهدشت',
        '329' => 'ليکک',
        '330' => 'گرگان',
        '331' => 'آق قلا',
        '332' => 'گنبد کاووس',
        '333' => 'علي آباد کتول',
        '334' => 'مينو دشت',
        '335' => 'ترکمن',
        '336' => 'کردکوي',
        '337' => 'بندر گز',
        '338' => 'کلاله',
        '339' => 'آزاد شهر',
        '340' => 'راميان',
        '341' => 'رشت',
        '342' => 'منجيل',
        '343' => 'لنگرود',
        '344' => 'رود سر',
        '345' => 'تالش',
        '346' => 'آستارا',
        '347' => 'ماسوله',
        '348' => 'آستانه اشرفيه',
        '349' => 'رودبار',
        '350' => 'فومن',
        '351' => 'صومعه سرا',
        '352' => 'بندرانزلي',
        '353' => 'کلاچاي',
        '354' => 'هشتپر',
        '355' => 'رضوان شهر',
        '356' => 'ماسال',
        '357' => 'شفت',
        '358' => 'سياهکل',
        '359' => 'املش',
        '360' => 'لاهيجان',
        '361' => 'خشک بيجار',
        '362' => 'خمام',
        '363' => 'لشت نشا',
        '364' => 'بندر کياشهر',
        '365' => 'خرم آباد',
        '366' => 'ماهشهر',
        '367' => 'دزفول',
        '368' => 'بروجرد',
        '369' => 'دورود',
        '370' => 'اليگودرز',
        '371' => 'ازنا',
        '372' => 'نور آباد',
        '373' => 'کوهدشت',
        '374' => 'الشتر',
        '375' => 'پلدختر',
        '376' => 'ساري',
        '377' => 'آمل',
        '378' => 'بابل',
        '379' => 'بابلسر',
        '380' => 'بهشهر',
        '381' => 'تنکابن',
        '382' => 'جويبار',
        '383' => 'چالوس',
        '384' => 'رامسر',
        '385' => 'سواد کوه',
        '386' => 'قائم شهر',
        '387' => 'نکا',
        '388' => 'نور',
        '389' => 'بلده',
        '390' => 'نوشهر',
        '391' => 'پل سفيد',
        '392' => 'محمود آباد',
        '393' => 'فريدون کنار',
        '394' => 'اراک',
        '395' => 'آشتيان',
        '396' => 'تفرش',
        '397' => 'خمين',
        '398' => 'دليجان',
        '399' => 'ساوه',
        '400' => 'سربند',
        '401' => 'محلات',
        '402' => 'شازند',
        '403' => 'بندرعباس',
        '404' => 'قشم',
        '405' => 'کيش',
        '406' => 'بندر لنگه',
        '407' => 'بستک',
        '408' => 'حاجي آباد',
        '409' => 'دهبارز',
        '410' => 'انگهران',
        '411' => 'ميناب',
        '412' => 'ابوموسي',
        '413' => 'بندر جاسک',
        '414' => 'تنب بزرگ',
        '415' => 'بندر خمير',
        '416' => 'پارسيان',
        '417' => 'قشم',
        '418' => 'همدان',
        '419' => 'ملاير',
        '420' => 'تويسرکان',
        '421' => 'نهاوند',
        '422' => 'کبودر اهنگ',
        '423' => 'رزن',
        '424' => 'اسدآباد',
        '425' => 'بهار',
        '426' => 'يزد',
        '427' => 'تفت',
        '428' => 'اردکان',
        '429' => 'ابرکوه',
        '430' => 'ميبد',
        '431' => 'طبس',
        '432' => 'بافق',
        '433' => 'مهريز',
        '434' => 'اشکذر',
        '435' => 'هرات',
        '436' => 'خضرآباد',
        '437' => 'شاهديه',
        '438' => 'حميديه شهر',
        '439' => 'سيد ميرزا',
        '440' => 'زارچ',
    );

    $ids = array(
        '1'=>'1',
        '2'=>'1',
        '3'=>'1',
        '4'=>'1',
        '5'=>'1',
        '6'=>'1',
        '7'=>'1',
        '8'=>'1',
        '9'=>'1',
        '10'=>'1',
        '11'=>'1',
        '12'=>'1',
        '13'=>'1',
        '14'=>'1',
        '15'=>'1',
        '16'=>'1',
        '17'=>'1',
        '18'=>'1',
        '19'=>'1',
        '20'=>'1',
        '21'=>'1',
        '22'=>'1',
        '23'=>'1',
        '24'=>'1',
        '25'=>'1',
        '26'=>'1',
        '27'=>'1',
        '28'=>'1',
        '29'=>'1',
        '30'=>'2',
        '31'=>'2',
        '32'=>'2',
        '33'=>'2',
        '34'=>'2',
        '35'=>'2',
        '36'=>'2',
        '37'=>'2',
        '38'=>'2',
        '39'=>'2',
        '40'=>'2',
        '41'=>'2',
        '42'=>'2',
        '43'=>'2',
        '44'=>'2',
        '45'=>'2',
        '46'=>'2',
        '47'=>'2',
        '48'=>'3',
        '49'=>'3',
        '50'=>'3',
        '51'=>'3',
        '52'=>'3',
        '53'=>'3',
        '54'=>'3',
        '55'=>'3',
        '56'=>'3',
        '57'=>'3',
        '58'=>'3',
        '59'=>'3',
        '60'=>'4',
        '61'=>'4',
        '62'=>'4',
        '63'=>'4',
        '64'=>'4',
        '65'=>'4',
        '66'=>'4',
        '67'=>'4',
        '68'=>'4',
        '69'=>'4',
        '70'=>'4',
        '71'=>'4',
        '72'=>'4',
        '73'=>'4',
        '74'=>'4',
        '75'=>'4',
        '76'=>'4',
        '77'=>'4',
        '78'=>'4',
        '79'=>'4',
        '80'=>'4',
        '81'=>'4',
        '82'=>'4',
        '83'=>'4',
        '84'=>'4',
        '85'=>'4',
        '86'=>'4',
        '87'=>'4',
        '88'=>'4',
        '89'=>'4',
        '90'=>'4',
        '91'=>'4',
        '92'=>'6',
        '93'=>'6',
        '94'=>'6',
        '95'=>'6',
        '96'=>'6',
        '97'=>'6',
        '98'=>'6',
        '99'=>'6',
        '100'=>'7',
        '101'=>'7',
        '102'=>'7',
        '103'=>'7',
        '104'=>'7',
        '105'=>'7',
        '106'=>'7',
        '107'=>'7',
        '108'=>'7',
        '109'=>'7',
        '110'=>'7',
        '111'=>'7',
        '112'=>'7',
        '113'=>'7',
        '114'=>'7',
        '115'=>'7',
        '116'=>'7',
        '117'=>'8',
        '118'=>'8',
        '119'=>'8',
        '120'=>'8',
        '121'=>'8',
        '122'=>'8',
        '123'=>'8',
        '124'=>'8',
        '125'=>'8',
        '126'=>'8',
        '127'=>'8',
        '128'=>'8',
        '129'=>'8',
        '130'=>'8',
        '131'=>'8',
        '132'=>'8',
        '133'=>'8',
        '134'=>'8',
        '135'=>'8',
        '136'=>'8',
        '137'=>'8',
        '138'=>'9',
        '139'=>'9',
        '140'=>'9',
        '141'=>'9',
        '142'=>'9',
        '143'=>'9',
        '144'=>'9',
        '145'=>'10',
        '146'=>'10',
        '147'=>'10',
        '148'=>'10',
        '149'=>'10',
        '150'=>'10',
        '151'=>'10',
        '152'=>'10',
        '153'=>'11',
        '154'=>'11',
        '155'=>'11',
        '156'=>'11',
        '157'=>'11',
        '158'=>'11',
        '159'=>'11',
        '160'=>'11',
        '161'=>'11',
        '162'=>'11',
        '163'=>'11',
        '164'=>'11',
        '165'=>'11',
        '166'=>'11',
        '167'=>'11',
        '168'=>'11',
        '169'=>'11',
        '170'=>'11',
        '171'=>'11',
        '172'=>'12',
        '173'=>'12',
        '174'=>'12',
        '175'=>'12',
        '176'=>'12',
        '177'=>'12',
        '178'=>'12',
        '179'=>'13',
        '180'=>'13',
        '181'=>'13',
        '182'=>'13',
        '183'=>'13',
        '184'=>'13',
        '185'=>'13',
        '186'=>'13',
        '187'=>'13',
        '188'=>'13',
        '189'=>'13',
        '190'=>'13',
        '191'=>'13',
        '192'=>'13',
        '193'=>'13',
        '194'=>'13',
        '195'=>'13',
        '196'=>'13',
        '197'=>'13',
        '198'=>'13',
        '199'=>'13',
        '200'=>'13',
        '201'=>'13',
        '202'=>'13',
        '203'=>'13',
        '204'=>'13',
        '205'=>'13',
        '206'=>'14',
        '207'=>'14',
        '208'=>'14',
        '209'=>'14',
        '210'=>'14',
        '211'=>'14',
        '212'=>'14',
        '213'=>'14',
        '214'=>'14',
        '215'=>'14',
        '216'=>'15',
        '217'=>'15',
        '218'=>'15',
        '219'=>'15',
        '220'=>'15',
        '221'=>'15',
        '222'=>'16',
        '223'=>'16',
        '224'=>'16',
        '225'=>'16',
        '226'=>'16',
        '227'=>'16',
        '228'=>'16',
        '229'=>'16',
        '230'=>'16',
        '231'=>'16',
        '232'=>'17',
        '233'=>'17',
        '234'=>'17',
        '235'=>'17',
        '236'=>'17',
        '237'=>'17',
        '238'=>'17',
        '239'=>'17',
        '240'=>'17',
        '241'=>'17',
        '242'=>'17',
        '243'=>'17',
        '244'=>'17',
        '245'=>'17',
        '246'=>'17',
        '247'=>'17',
        '248'=>'17',
        '249'=>'17',
        '250'=>'17',
        '251'=>'17',
        '252'=>'17',
        '253'=>'17',
        '254'=>'17',
        '255'=>'17',
        '256'=>'17',
        '257'=>'17',
        '258'=>'17',
        '259'=>'17',
        '260'=>'17',
        '261'=>'17',
        '262'=>'17',
        '263'=>'17',
        '264'=>'17',
        '265'=>'17',
        '266'=>'17',
        '267'=>'17',
        '268'=>'17',
        '269'=>'17',
        '270'=>'18',
        '271'=>'18',
        '272'=>'18',
        '273'=>'18',
        '274'=>'19',
        '275'=>'5',
        '276'=>'5',
        '277'=>'5',
        '278'=>'5',
        '279'=>'5',
        '280'=>'5',
        '281'=>'5',
        '282'=>'5',
        '283'=>'5',
        '284'=>'5',
        '285'=>'5',
        '286'=>'5',
        '287'=>'5',
        '288'=>'20',
        '289'=>'20',
        '290'=>'20',
        '291'=>'20',
        '292'=>'20',
        '293'=>'20',
        '294'=>'20',
        '295'=>'20',
        '296'=>'20',
        '297'=>'20',
        '298'=>'21',
        '299'=>'21',
        '300'=>'21',
        '301'=>'21',
        '302'=>'21',
        '303'=>'21',
        '304'=>'21',
        '305'=>'21',
        '306'=>'21',
        '307'=>'21',
        '308'=>'21',
        '309'=>'21',
        '310'=>'21',
        '311'=>'22',
        '312'=>'22',
        '313'=>'22',
        '314'=>'22',
        '315'=>'22',
        '316'=>'22',
        '317'=>'22',
        '318'=>'22',
        '319'=>'22',
        '320'=>'22',
        '321'=>'22',
        '322'=>'22',
        '323'=>'23',
        '324'=>'23',
        '325'=>'23',
        '326'=>'23',
        '327'=>'23',
        '328'=>'23',
        '329'=>'23',
        '330'=>'24',
        '331'=>'24',
        '332'=>'24',
        '333'=>'24',
        '334'=>'24',
        '335'=>'24',
        '336'=>'24',
        '337'=>'24',
        '338'=>'24',
        '339'=>'24',
        '340'=>'24',
        '341'=>'25',
        '342'=>'25',
        '343'=>'25',
        '344'=>'25',
        '345'=>'25',
        '346'=>'25',
        '347'=>'25',
        '348'=>'25',
        '349'=>'25',
        '350'=>'25',
        '351'=>'25',
        '352'=>'25',
        '353'=>'25',
        '354'=>'25',
        '355'=>'25',
        '356'=>'25',
        '357'=>'25',
        '358'=>'25',
        '359'=>'25',
        '360'=>'25',
        '361'=>'25',
        '362'=>'25',
        '363'=>'25',
        '364'=>'25',
        '365'=>'26',
        '366'=>'26',
        '367'=>'26',
        '368'=>'26',
        '369'=>'26',
        '370'=>'26',
        '371'=>'26',
        '372'=>'26',
        '373'=>'26',
        '374'=>'26',
        '375'=>'26',
        '376'=>'27',
        '377'=>'27',
        '378'=>'27',
        '379'=>'27',
        '380'=>'27',
        '381'=>'27',
        '382'=>'27',
        '383'=>'27',
        '384'=>'27',
        '385'=>'27',
        '386'=>'27',
        '387'=>'27',
        '388'=>'27',
        '389'=>'27',
        '390'=>'27',
        '391'=>'27',
        '392'=>'27',
        '393'=>'27',
        '394'=>'28',
        '395'=>'28',
        '396'=>'28',
        '397'=>'28',
        '398'=>'28',
        '399'=>'28',
        '400'=>'28',
        '401'=>'28',
        '402'=>'28',
        '403'=>'29',
        '404'=>'29',
        '405'=>'29',
        '406'=>'29',
        '407'=>'29',
        '408'=>'29',
        '409'=>'29',
        '410'=>'29',
        '411'=>'29',
        '412'=>'29',
        '413'=>'29',
        '414'=>'29',
        '415'=>'29',
        '416'=>'29',
        '417'=>'29',
        '418'=>'30',
        '419'=>'30',
        '420'=>'30',
        '421'=>'30',
        '422'=>'30',
        '423'=>'30',
        '424'=>'30',
        '425'=>'30',
        '426'=>'31',
        '427'=>'31',
        '428'=>'31',
        '429'=>'31',
        '430'=>'31',
        '431'=>'31',
        '432'=>'31',
        '433'=>'31',
        '434'=>'31',
        '435'=>'31',
        '436'=>'31',
        '437'=>'31',
        '438'=>'31',
        '439'=>'31',
        '440'=>'31',
    );



    foreach ($states as $state)
      \App\State::create([
          'name' => $state
      ]);

    $i = 1;
    foreach ($cities as $city) {
      \App\City::create([
        'name' => $city,
        'state_id' => $ids[$i]
      ]);
      $i++;
    }

  }
}
