<?php

namespace Eutranet\Init\Database\Seeders;

use Illuminate\Database\Seeder;
use Eutranet\Init\Models\Language;
use DB;

class LanguageSeeder extends Seeder
{
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */
	public function run()
	{
		$languages =
			[
				[
					'id' => '1',
					'code' => 'ab',
					'name' => '{"fr":"abkhaze","en":"Abkhazian","pt":"abc\u00e1zio"}'
				],
				[
					'id' => '2',
					'code' => 'ace',
					'name' => '{"fr":"aceh","en":"Achinese","pt":"ach\u00e9m"}'
				],
				[
					'id' => '3',
					'code' => 'ach',
					'name' => '{"fr":"acoli","en":"Acoli","pt":"acoli"}'
				],
				[
					'id' => '4',
					'code' => 'ada',
					'name' => '{"fr":"adangme","en":"Adangme","pt":"adangme"}'
				],
				[
					'id' => '5',
					'code' => 'ady',
					'name' => '{"fr":"adygh\u00e9en","en":"Adyghe","pt":"adigue"}'
				],
				[
					'id' => '6',
					'code' => 'aa',
					'name' => '{"fr":"afar","en":"Afar","pt":"afar"}'
				],
				[
					'id' => '7',
					'code' => 'afh',
					'name' => '{"fr":"afrihili","en":"Afrihili","pt":"afrihili"}'
				],
				[
					'id' => '8',
					'code' => 'af',
					'name' => '{"fr":"afrikaans","en":"Afrikaans","pt":"afric\u00e2ner"}'
				],
				[
					'id' => '9',
					'code' => 'agq',
					'name' => '{"fr":"aghem","en":"Aghem","pt":"aghem"}'
				],
				[
					'id' => '10',
					'code' => 'ain',
					'name' => '{"fr":"a\u00efnou","en":"Ainu","pt":"ainu"}'
				],
				[
					'id' => '11',
					'code' => 'ak',
					'name' => '{"fr":"akan","en":"Akan","pt":"akan"}'
				],
				[
					'id' => '12',
					'code' => 'akk',
					'name' => '{"fr":"akkadien","en":"Akkadian","pt":"acadiano"}'
				],
				[
					'id' => '13',
					'code' => 'bss',
					'name' => '{"fr":"akoose","en":"Akoose","pt":"akoose"}'
				],
				[
					'id' => '14',
					'code' => 'akz',
					'name' => '{"fr":"Alabama","en":"Alabama","pt":"Alabama"}'
				],
				[
					'id' => '15',
					'code' => 'sq',
					'name' => '{"fr":"albanais","en":"Albanian","pt":"alban\u00eas"}'
				],
				[
					'id' => '16',
					'code' => 'ale',
					'name' => '{"fr":"al\u00e9oute","en":"Aleut","pt":"ale\u00fate"}'
				],
				[
					'id' => '17',
					'code' => 'arq',
					'name' => '{"fr":"Algerian Arabic","en":"Algerian Arabic","pt":"Algerian Arabic"}'
				],
				[
					'id' => '18',
					'code' => 'de',
					'name' => '{"fr":"allemand","en":"German","pt":"alem\u00e3o"}'
				],
				[
					'id' => '19',
					'code' => 'de_AT',
					'name' => '{"fr":"allemand autrichien","en":"Austrian German","pt":"alem\u00e3o austr\u00edaco"}'
				],
				[
					'id' => '20',
					'code' => 'de_CH',
					'name' => '{"fr":"allemand suisse","en":"Swiss High German","pt":"alto alem\u00e3o su\u00ed\u00e7o"}'
				],
				[
					'id' => '21',
					'code' => 'alt',
					'name' => '{"fr":"alta\u00ef du Sud","en":"Southern Altai","pt":"altai do sul"}'
				],
				[
					'id' => '22',
					'code' => 'zgh',
					'name' => '{"fr":"amazighe standard marocain","en":"Standard Moroccan Tamazight","pt":"tamazight marroquino padr\u00e3o"}'
				],
				[
					'id' => '23',
					'code' => 'ase',
					'name' => '{"fr":"American Sign Language","en":"American Sign Language","pt":"American Sign Language"}'
				],
				[
					'id' => '24',
					'code' => 'am',
					'name' => '{"fr":"amharique","en":"Amharic","pt":"am\u00e1rico"}'
				],
				[
					'id' => '25',
					'code' => 'ang',
					'name' => '{"fr":"ancien anglais","en":"Old English","pt":"ingl\u00eas arcaico"}'
				],
				[
					'id' => '26',
					'code' => 'fro',
					'name' => '{"fr":"ancien fran\u00e7ais","en":"Old French","pt":"franc\u00eas arcaico"}'
				],
				[
					'id' => '27',
					'code' => 'goh',
					'name' => '{"fr":"ancien haut allemand","en":"Old High German","pt":"alem\u00e3o arcaico alto"}'
				],
				[
					'id' => '28',
					'code' => 'sga',
					'name' => '{"fr":"ancien irlandais","en":"Old Irish","pt":"irland\u00eas arcaico"}'
				],
				[
					'id' => '29',
					'code' => 'anp',
					'name' => '{"fr":"angika","en":"Angika","pt":"angika"}'
				],
				[
					'id' => '30',
					'code' => 'en',
					'name' => '{"fr":"anglais","en":"English","pt":"ingl\u00eas"}'
				],
				[
					'id' => '31',
					'code' => 'en_US',
					'name' => '{"fr":"anglais am\u00e9ricain","en":"American English","pt":"ingl\u00eas americano"}'
				],
				[
					'id' => '32',
					'code' => 'en_AU',
					'name' => '{"fr":"anglais australien","en":"Australian English","pt":"ingl\u00eas australiano"}'
				],
				[
					'id' => '33',
					'code' => 'en_GB',
					'name' => '{"fr":"anglais britannique","en":"British English","pt":"ingl\u00eas brit\u00e2nico"}'
				],
				[
					'id' => '34',
					'code' => 'en_CA',
					'name' => '{"fr":"anglais canadien","en":"Canadian English","pt":"ingl\u00eas canadense"}'
				],
				[
					'id' => '35',
					'code' => 'njo',
					'name' => '{"fr":"Ao Naga","en":"Ao Naga","pt":"Ao Naga"}'
				],
				[
					'id' => '36',
					'code' => 'ar',
					'name' => '{"fr":"arabe","en":"Arabic","pt":"\u00e1rabe"}'
				],
				[
					'id' => '37',
					'code' => 'ar_001',
					'name' => '{"fr":"arabe standard moderne","en":"Modern Standard Arabic","pt":"\u00e1rabe moderno"}'
				],
				[
					'id' => '38',
					'code' => 'shu',
					'name' => '{"fr":"arabe tchadien","en":"Chadian Arabic","pt":"\u00e1rabe chadiano"}'
				],
				[
					'id' => '39',
					'code' => 'an',
					'name' => '{"fr":"aragonais","en":"Aragonese","pt":"aragon\u00eas"}'
				],
				[
					'id' => '40',
					'code' => 'arc',
					'name' => '{"fr":"aram\u00e9en","en":"Aramaic","pt":"aramaico"}'
				],
				[
					'id' => '41',
					'code' => 'sam',
					'name' => '{"fr":"aram\u00e9en samaritain","en":"Samaritan Aramaic","pt":"aramaico samaritano"}'
				],
				[
					'id' => '42',
					'code' => 'aro',
					'name' => '{"fr":"Araona","en":"Araona","pt":"Araona"}'
				],
				[
					'id' => '43',
					'code' => 'arp',
					'name' => '{"fr":"arapaho","en":"Arapaho","pt":"arapaho"}'
				],
				[
					'id' => '44',
					'code' => 'arn',
					'name' => '{"fr":"araukan","en":"Mapuche","pt":"araucano"}'
				],
				[
					'id' => '45',
					'code' => 'arw',
					'name' => '{"fr":"arawak","en":"Arawak","pt":"arauaqui"}'
				],
				[
					'id' => '46',
					'code' => 'hy',
					'name' => '{"fr":"arm\u00e9nien","en":"Armenian","pt":"arm\u00eanio"}'
				],
				[
					'id' => '47',
					'code' => 'as',
					'name' => '{"fr":"assamais","en":"Assamese","pt":"assam\u00eas"}'
				],
				[
					'id' => '48',
					'code' => 'asa',
					'name' => '{"fr":"assou","en":"Asu","pt":"asu"}'
				],
				[
					'id' => '49',
					'code' => 'ast',
					'name' => '{"fr":"asturien","en":"Asturian","pt":"asturiano"}'
				],
				[
					'id' => '50',
					'code' => 'cch',
					'name' => '{"fr":"atsam","en":"Atsam","pt":"atsam"}'
				],
				[
					'id' => '51',
					'code' => 'av',
					'name' => '{"fr":"avar","en":"Avaric","pt":"avaric"}'
				],
				[
					'id' => '52',
					'code' => 'ae',
					'name' => '{"fr":"avestique","en":"Avestan","pt":"av\u00e9stico"}'
				],
				[
					'id' => '53',
					'code' => 'awa',
					'name' => '{"fr":"awadhi","en":"Awadhi","pt":"awadhi"}'
				],
				[
					'id' => '54',
					'code' => 'ay',
					'name' => '{"fr":"aymara","en":"Aymara","pt":"aimara"}'
				],
				[
					'id' => '55',
					'code' => 'az',
					'name' => '{"fr":"az\u00e9ri","en":"Azerbaijani","pt":"azerbaijano"}'
				],
				[
					'id' => '56',
					'code' => 'ba',
					'name' => '{"fr":"bachkir","en":"Bashkir","pt":"bashkir"}'
				],
				[
					'id' => '57',
					'code' => 'bfq',
					'name' => '{"fr":"Badaga","en":"Badaga","pt":"Badaga"}'
				],
				[
					'id' => '58',
					'code' => 'ksf',
					'name' => '{"fr":"bafia","en":"Bafia","pt":"bafia"}'
				],
				[
					'id' => '59',
					'code' => 'bfd',
					'name' => '{"fr":"bafut","en":"Bafut","pt":"bafut"}'
				],
				[
					'id' => '60',
					'code' => 'bqi',
					'name' => '{"fr":"Bakhtiari","en":"Bakhtiari","pt":"Bakhtiari"}'
				],
				[
					'id' => '61',
					'code' => 'ban',
					'name' => '{"fr":"balinais","en":"Balinese","pt":"balin\u00eas"}'
				],
				[
					'id' => '62',
					'code' => 'bal',
					'name' => '{"fr":"baloutchi","en":"Baluchi","pt":"bal\u00fachi"}'
				],
				[
					'id' => '63',
					'code' => 'bm',
					'name' => '{"fr":"bambara","en":"Bambara","pt":"bambara"}'
				],
				[
					'id' => '64',
					'code' => 'bax',
					'name' => '{"fr":"bamoun","en":"Bamun","pt":"bamum"}'
				],
				[
					'id' => '65',
					'code' => 'bjn',
					'name' => '{"fr":"Banjar","en":"Banjar","pt":"Banjar"}'
				],
				[
					'id' => '66',
					'code' => 'nds',
					'name' => '{"fr":"bas-allemand","en":"Low German","pt":"baixo alem\u00e3o"}'
				],
				[
					'id' => '67',
					'code' => 'dsb',
					'name' => '{"fr":"bas-sorabe","en":"Lower Sorbian","pt":"sor\u00e1bio baixo"}'
				],
				[
					'id' => '68',
					'code' => 'eu',
					'name' => '{"fr":"basque","en":"Basque","pt":"basco"}'
				],
				[
					'id' => '69',
					'code' => 'bas',
					'name' => '{"fr":"bassa","en":"Basaa","pt":"basa"}'
				],
				[
					'id' => '70',
					'code' => 'bbc',
					'name' => '{"fr":"Batak Toba","en":"Batak Toba","pt":"Batak Toba"}'
				],
				[
					'id' => '71',
					'code' => 'bar',
					'name' => '{"fr":"Bavarian","en":"Bavarian","pt":"Bavarian"}'
				],
				[
					'id' => '72',
					'code' => 'bej',
					'name' => '{"fr":"bedja","en":"Beja","pt":"beja"}'
				],
				[
					'id' => '73',
					'code' => 'bem',
					'name' => '{"fr":"bemba","en":"Bemba","pt":"bemba"}'
				],
				[
					'id' => '74',
					'code' => 'bez',
					'name' => '{"fr":"b\u00e9na","en":"Bena","pt":"bena"}'
				],
				[
					'id' => '75',
					'code' => 'bn',
					'name' => '{"fr":"bengali","en":"Bengali","pt":"bengali"}'
				],
				[
					'id' => '76',
					'code' => 'bew',
					'name' => '{"fr":"Betawi","en":"Betawi","pt":"Betawi"}'
				],
				[
					'id' => '77',
					'code' => 'bho',
					'name' => '{"fr":"bhojpuri","en":"Bhojpuri","pt":"bhojpuri"}'
				],
				[
					'id' => '78',
					'code' => 'bi',
					'name' => '{"fr":"bichelamar","en":"Bislama","pt":"bislam\u00e1"}'
				],
				[
					'id' => '79',
					'code' => 'be',
					'name' => '{"fr":"bi\u00e9lorusse","en":"Belarusian","pt":"bielorrusso"}'
				],
				[
					'id' => '80',
					'code' => 'bik',
					'name' => '{"fr":"bikol","en":"Bikol","pt":"bikol"}'
				],
				[
					'id' => '81',
					'code' => 'bin',
					'name' => '{"fr":"bini","en":"Bini","pt":"bini"}'
				],
				[
					'id' => '82',
					'code' => 'my',
					'name' => '{"fr":"birman","en":"Burmese","pt":"birman\u00eas"}'
				],
				[
					'id' => '83',
					'code' => 'bpy',
					'name' => '{"fr":"Bishnupriya","en":"Bishnupriya","pt":"Bishnupriya"}'
				],
				[
					'id' => '84',
					'code' => 'byn',
					'name' => '{"fr":"blin","en":"Blin","pt":"blin"}'
				],
				[
					'id' => '85',
					'code' => 'brx',
					'name' => '{"fr":"bodo","en":"Bodo","pt":"bodo"}'
				],
				[
					'id' => '86',
					'code' => 'bs',
					'name' => '{"fr":"bosniaque","en":"Bosnian","pt":"b\u00f3snio"}'
				],
				[
					'id' => '87',
					'code' => 'bum',
					'name' => '{"fr":"boulou","en":"Bulu","pt":"bulu"}'
				],
				[
					'id' => '88',
					'code' => 'bua',
					'name' => '{"fr":"bouriate","en":"Buriat","pt":"buriat"}'
				],
				[
					'id' => '89',
					'code' => 'brh',
					'name' => '{"fr":"Brahui","en":"Brahui","pt":"Brahui"}'
				],
				[
					'id' => '90',
					'code' => 'bra',
					'name' => '{"fr":"braj","en":"Braj","pt":"braj"}'
				],
				[
					'id' => '91',
					'code' => 'br',
					'name' => '{"fr":"breton","en":"Breton","pt":"bret\u00e3o"}'
				],
				[
					'id' => '92',
					'code' => 'bug',
					'name' => '{"fr":"bugi","en":"Buginese","pt":"bugin\u00eas"}'
				],
				[
					'id' => '93',
					'code' => 'bg',
					'name' => '{"fr":"bulgare","en":"Bulgarian","pt":"b\u00falgaro"}'
				],
				[
					'id' => '94',
					'code' => 'cad',
					'name' => '{"fr":"caddo","en":"Caddo","pt":"caddo"}'
				],
				[
					'id' => '95',
					'code' => 'frc',
					'name' => '{"fr":"Cajun French","en":"Cajun French","pt":"Cajun French"}'
				],
				[
					'id' => '96',
					'code' => 'yue',
					'name' => '{"fr":"cantonais","en":"Cantonese","pt":"canton\u00eas"}'
				],
				[
					'id' => '97',
					'code' => 'cps',
					'name' => '{"fr":"Capiznon","en":"Capiznon","pt":"Capiznon"}'
				],
				[
					'id' => '98',
					'code' => 'kea',
					'name' => '{"fr":"capverdien","en":"Kabuverdianu","pt":"kabuverdianu"}'
				],
				[
					'id' => '99',
					'code' => 'krl',
					'name' => '{"fr":"car\u00e9lien","en":"Karelian","pt":"idioma car\u00e9lio"}'
				],
				[
					'id' => '100',
					'code' => 'car',
					'name' => '{"fr":"caribe","en":"Carib","pt":"caribe"}'
				],
				[
					'id' => '101',
					'code' => 'ca',
					'name' => '{"fr":"catalan","en":"Catalan","pt":"catal\u00e3o"}'
				],
				[
					'id' => '102',
					'code' => 'cay',
					'name' => '{"fr":"cayuga","en":"Cayuga","pt":"cayuga"}'
				],
				[
					'id' => '103',
					'code' => 'ceb',
					'name' => '{"fr":"cebuano","en":"Cebuano","pt":"cebuano"}'
				],
				[
					'id' => '104',
					'code' => 'dtp',
					'name' => '{"fr":"Central Dusun","en":"Central Dusun","pt":"Central Dusun"}'
				],
				[
					'id' => '105',
					'code' => 'esu',
					'name' => '{"fr":"Central Yupik","en":"Central Yupik","pt":"Central Yupik"}'
				],
				[
					'id' => '106',
					'code' => 'ksb',
					'name' => '{"fr":"chambala","en":"Shambala","pt":"shambala"}'
				],
				[
					'id' => '107',
					'code' => 'ch',
					'name' => '{"fr":"chamorro","en":"Chamorro","pt":"chamorro"}'
				],
				[
					'id' => '108',
					'code' => 'chr',
					'name' => '{"fr":"cherokee","en":"Cherokee","pt":"cherokee"}'
				],
				[
					'id' => '109',
					'code' => 'chy',
					'name' => '{"fr":"cheyenne","en":"Cheyenne","pt":"cheiene"}'
				],
				[
					'id' => '110',
					'code' => 'chb',
					'name' => '{"fr":"chibcha","en":"Chibcha","pt":"chibcha"}'
				],
				[
					'id' => '111',
					'code' => 'qug',
					'name' => '{"fr":"Chimborazo Highland Quichua","en":"Chimborazo Highland Quichua","pt":"Chimborazo Highland Quichua"}'
				],
				[
					'id' => '112',
					'code' => 'zh',
					'name' => '{"fr":"chinois","en":"Chinese","pt":"chin\u00eas"}'
				],
				[
					'id' => '113',
					'code' => 'zh_Hans',
					'name' => '{"fr":"chinois simplifi\u00e9","en":"Simplified Chinese","pt":"chin\u00eas simplificado"}'
				],
				[
					'id' => '114',
					'code' => 'zh_Hant',
					'name' => '{"fr":"chinois traditionnel","en":"Traditional Chinese","pt":"chin\u00eas tradicional"}'
				],
				[
					'id' => '115',
					'code' => 'chp',
					'name' => '{"fr":"chipewyan","en":"Chipewyan","pt":"chipewyan"}'
				],
				[
					'id' => '116',
					'code' => 'shi',
					'name' => '{"fr":"chleuh","en":"Tachelhit","pt":"tachelhit"}'
				],
				[
					'id' => '117',
					'code' => 'cho',
					'name' => '{"fr":"choctaw","en":"Choctaw","pt":"choctaw"}'
				],
				[
					'id' => '118',
					'code' => 'chk',
					'name' => '{"fr":"chuuk","en":"Chuukese","pt":"chuukese"}'
				],
				[
					'id' => '119',
					'code' => 'si',
					'name' => '{"fr":"cinghalais","en":"Sinhala","pt":"cingal\u00eas"}'
				],
				[
					'id' => '120',
					'code' => 'swb',
					'name' => '{"fr":"comorien","en":"Comorian","pt":"comoriano"}'
				],
				[
					'id' => '121',
					'code' => 'cop',
					'name' => '{"fr":"copte","en":"Coptic","pt":"copta"}'
				],
				[
					'id' => '122',
					'code' => 'ko',
					'name' => '{"fr":"cor\u00e9en","en":"Korean","pt":"coreano"}'
				],
				[
					'id' => '123',
					'code' => 'kw',
					'name' => '{"fr":"cornique","en":"Cornish","pt":"c\u00f3rnico"}'
				],
				[
					'id' => '124',
					'code' => 'co',
					'name' => '{"fr":"corse","en":"Corsican","pt":"c\u00f3rsico"}'
				],
				[
					'id' => '125',
					'code' => 'cr',
					'name' => '{"fr":"cree","en":"Cree","pt":"cree"}'
				],
				[
					'id' => '126',
					'code' => 'mus',
					'name' => '{"fr":"creek","en":"Creek","pt":"creek"}'
				],
				[
					'id' => '127',
					'code' => 'mfe',
					'name' => '{"fr":"cr\u00e9ole mauricien","en":"Morisyen","pt":"morisyen"}'
				],
				[
					'id' => '128',
					'code' => 'hr',
					'name' => '{"fr":"croate","en":"Croatian","pt":"croata"}'
				],
				[
					'id' => '129',
					'code' => 'dak',
					'name' => '{"fr":"dakota","en":"Dakota","pt":"dacota"}'
				],
				[
					'id' => '130',
					'code' => 'da',
					'name' => '{"fr":"danois","en":"Danish","pt":"dinamarqu\u00eas"}'
				],
				[
					'id' => '131',
					'code' => 'dar',
					'name' => '{"fr":"dargwa","en":"Dargwa","pt":"dargwa"}'
				],
				[
					'id' => '132',
					'code' => 'dzg',
					'name' => '{"fr":"dazaga","en":"Dazaga","pt":"dazaga"}'
				],
				[
					'id' => '133',
					'code' => 'del',
					'name' => '{"fr":"delaware","en":"Delaware","pt":"delaware"}'
				],
				[
					'id' => '134',
					'code' => 'din',
					'name' => '{"fr":"dinka","en":"Dinka","pt":"dinka"}'
				],
				[
					'id' => '135',
					'code' => 'dyo',
					'name' => '{"fr":"diola-fogny","en":"Jola-Fonyi","pt":"jola-fonyi"}'
				],
				[
					'id' => '136',
					'code' => 'dyu',
					'name' => '{"fr":"dioula","en":"Dyula","pt":"di\u00fala"}'
				],
				[
					'id' => '137',
					'code' => 'doi',
					'name' => '{"fr":"dogri","en":"Dogri","pt":"dogri"}'
				],
				[
					'id' => '138',
					'code' => 'dgr',
					'name' => '{"fr":"dogrib","en":"Dogrib","pt":"dogrib"}'
				],
				[
					'id' => '139',
					'code' => 'dua',
					'name' => '{"fr":"douala","en":"Duala","pt":"duala"}'
				],
				[
					'id' => '140',
					'code' => 'dz',
					'name' => '{"fr":"dzongkha","en":"Dzongkha","pt":"dzonga"}'
				],
				[
					'id' => '141',
					'code' => 'sco',
					'name' => '{"fr":"\u00e9cossais","en":"Scots","pt":"escoc\u00eas"}'
				],
				[
					'id' => '142',
					'code' => 'efi',
					'name' => '{"fr":"efik","en":"Efik","pt":"efique"}'
				],
				[
					'id' => '143',
					'code' => 'arz',
					'name' => '{"fr":"Egyptian Arabic","en":"Egyptian Arabic","pt":"Egyptian Arabic"}'
				],
				[
					'id' => '144',
					'code' => 'egy',
					'name' => '{"fr":"\u00e9gyptien ancien","en":"Ancient Egyptian","pt":"eg\u00edpcio arcaico"}'
				],
				[
					'id' => '145',
					'code' => 'eka',
					'name' => '{"fr":"ekajuk","en":"Ekajuk","pt":"ekajuk"}'
				],
				[
					'id' => '146',
					'code' => 'elx',
					'name' => '{"fr":"\u00e9lamite","en":"Elamite","pt":"elamite"}'
				],
				[
					'id' => '147',
					'code' => 'ebu',
					'name' => '{"fr":"embou","en":"Embu","pt":"embu"}'
				],
				[
					'id' => '148',
					'code' => 'egl',
					'name' => '{"fr":"Emilian","en":"Emilian","pt":"Emilian"}'
				],
				[
					'id' => '149',
					'code' => 'myv',
					'name' => '{"fr":"erzya","en":"Erzya","pt":"erzya"}'
				],
				[
					'id' => '150',
					'code' => 'es',
					'name' => '{"fr":"espagnol","en":"Spanish","pt":"espanhol"}'
				],
				[
					'id' => '151',
					'code' => 'es_ES',
					'name' => '{"fr":"espagnol europ\u00e9en","en":"European Spanish","pt":"espanhol europeu"}'
				],
				[
					'id' => '152',
					'code' => 'es_419',
					'name' => '{"fr":"espagnol latino-am\u00e9ricain","en":"Latin American Spanish","pt":"espanhol latino-americano"}'
				],
				[
					'id' => '153',
					'code' => 'es_MX',
					'name' => '{"fr":"espagnol mexicain","en":"Mexican Spanish","pt":"espanhol mexicano"}'
				],
				[
					'id' => '154',
					'code' => 'eo',
					'name' => '{"fr":"esp\u00e9ranto","en":"Esperanto","pt":"esperanto"}'
				],
				[
					'id' => '155',
					'code' => 'et',
					'name' => '{"fr":"estonien","en":"Estonian","pt":"estoniano"}'
				],
				[
					'id' => '156',
					'code' => 'ee',
					'name' => '{"fr":"\u00e9w\u00e9","en":"Ewe","pt":"eve"}'
				],
				[
					'id' => '157',
					'code' => 'ewo',
					'name' => '{"fr":"\u00e9wondo","en":"Ewondo","pt":"ewondo"}'
				],
				[
					'id' => '158',
					'code' => 'ext',
					'name' => '{"fr":"Extremaduran","en":"Extremaduran","pt":"Extremaduran"}'
				],
				[
					'id' => '159',
					'code' => 'fan',
					'name' => '{"fr":"fang","en":"Fang","pt":"fangue"}'
				],
				[
					'id' => '160',
					'code' => 'fat',
					'name' => '{"fr":"fanti","en":"Fanti","pt":"fanti"}'
				],
				[
					'id' => '161',
					'code' => 'fo',
					'name' => '{"fr":"f\u00e9ro\u00efen","en":"Faroese","pt":"fero\u00eas"}'
				],
				[
					'id' => '162',
					'code' => 'fj',
					'name' => '{"fr":"fidjien","en":"Fijian","pt":"fijiano"}'
				],
				[
					'id' => '163',
					'code' => 'hif',
					'name' => '{"fr":"Fiji Hindi","en":"Fiji Hindi","pt":"Fiji Hindi"}'
				],
				[
					'id' => '164',
					'code' => 'fil',
					'name' => '{"fr":"filipino","en":"Filipino","pt":"filipino"}'
				],
				[
					'id' => '165',
					'code' => 'fi',
					'name' => '{"fr":"finnois","en":"Finnish","pt":"finland\u00eas"}'
				],
				[
					'id' => '166',
					'code' => 'nl_BE',
					'name' => '{"fr":"flamand","en":"Flemish","pt":"flamengo"}'
				],
				[
					'id' => '167',
					'code' => 'fon',
					'name' => '{"fr":"fon","en":"Fon","pt":"fom"}'
				],
				[
					'id' => '168',
					'code' => 'gur',
					'name' => '{"fr":"Frafra","en":"Frafra","pt":"Frafra"}'
				],
				[
					'id' => '169',
					'code' => 'fr',
					'name' => '{"fr":"fran\u00e7ais","en":"French","pt":"franc\u00eas"}'
				],
				[
					'id' => '170',
					'code' => 'fr_CA',
					'name' => '{"fr":"fran\u00e7ais canadien","en":"Canadian French","pt":"franc\u00eas canadense"}'
				],
				[
					'id' => '171',
					'code' => 'fr_CH',
					'name' => '{"fr":"fran\u00e7ais suisse","en":"Swiss French","pt":"franc\u00eas su\u00ed\u00e7o"}'
				],
				[
					'id' => '172',
					'code' => 'ksh',
					'name' => '{"fr":"francique ripuaire","en":"Colognian","pt":"k\u00f6lsch"}'
				],
				[
					'id' => '173',
					'code' => 'frp',
					'name' => '{"fr":"franco-proven\u00e7al","en":"Arpitan","pt":"Arpitan"}'
				],
				[
					'id' => '174',
					'code' => 'fur',
					'name' => '{"fr":"frioulan","en":"Friulian","pt":"friulano"}'
				],
				[
					'id' => '175',
					'code' => 'frr',
					'name' => '{"fr":"frison du Nord","en":"Northern Frisian","pt":"fr\u00edsio setentrional"}'
				],
				[
					'id' => '176',
					'code' => 'fy',
					'name' => '{"fr":"frison occidental","en":"Western Frisian","pt":"fr\u00edsio ocidental"}'
				],
				[
					'id' => '177',
					'code' => 'frs',
					'name' => '{"fr":"frison oriental","en":"Eastern Frisian","pt":"fris\u00e3o oriental"}'
				],
				[
					'id' => '178',
					'code' => 'gaa',
					'name' => '{"fr":"ga","en":"Ga","pt":"ga"}'
				],
				[
					'id' => '179',
					'code' => 'gd',
					'name' => '{"fr":"ga\u00e9lique \u00e9cossais","en":"Scottish Gaelic","pt":"ga\u00e9lico escoc\u00eas"}'
				],
				[
					'id' => '180',
					'code' => 'gag',
					'name' => '{"fr":"gagaouze","en":"Gagauz","pt":"gagauz"}'
				],
				[
					'id' => '181',
					'code' => 'gl',
					'name' => '{"fr":"galicien","en":"Galician","pt":"galego"}'
				],
				[
					'id' => '182',
					'code' => 'cy',
					'name' => '{"fr":"gallois","en":"Welsh","pt":"gal\u00eas"}'
				],
				[
					'id' => '183',
					'code' => 'gan',
					'name' => '{"fr":"Gan Chinese","en":"Gan Chinese","pt":"Gan Chinese"}'
				],
				[
					'id' => '184',
					'code' => 'lg',
					'name' => '{"fr":"ganda","en":"Ganda","pt":"luganda"}'
				],
				[
					'id' => '185',
					'code' => 'gay',
					'name' => '{"fr":"gayo","en":"Gayo","pt":"gayo"}'
				],
				[
					'id' => '186',
					'code' => 'gba',
					'name' => '{"fr":"gbaya","en":"Gbaya","pt":"gbaia"}'
				],
				[
					'id' => '187',
					'code' => 'ka',
					'name' => '{"fr":"g\u00e9orgien","en":"Georgian","pt":"georgiano"}'
				],
				[
					'id' => '188',
					'code' => 'aln',
					'name' => '{"fr":"Gheg Albanian","en":"Gheg Albanian","pt":"Gheg Albanian"}'
				],
				[
					'id' => '189',
					'code' => 'bbj',
					'name' => '{"fr":"ghomala","en":"Ghomala","pt":"ghomala\u2019"}'
				],
				[
					'id' => '190',
					'code' => 'glk',
					'name' => '{"fr":"Gilaki","en":"Gilaki","pt":"Gilaki"}'
				],
				[
					'id' => '191',
					'code' => 'gil',
					'name' => '{"fr":"gilbertais","en":"Gilbertese","pt":"gilbert\u00eas"}'
				],
				[
					'id' => '192',
					'code' => 'gom',
					'name' => '{"fr":"Goan Konkani","en":"Goan Konkani","pt":"Goan Konkani"}'
				],
				[
					'id' => '193',
					'code' => 'gon',
					'name' => '{"fr":"gondi","en":"Gondi","pt":"gondi"}'
				],
				[
					'id' => '194',
					'code' => 'gor',
					'name' => '{"fr":"gorontalo","en":"Gorontalo","pt":"gorontalo"}'
				],
				[
					'id' => '195',
					'code' => 'got',
					'name' => '{"fr":"gotique","en":"Gothic","pt":"g\u00f3tico"}'
				],
				[
					'id' => '196',
					'code' => 'grb',
					'name' => '{"fr":"grebo","en":"Grebo","pt":"grebo"}'
				],
				[
					'id' => '197',
					'code' => 'el',
					'name' => '{"fr":"grec","en":"Greek","pt":"grego"}'
				],
				[
					'id' => '198',
					'code' => 'grc',
					'name' => '{"fr":"grec ancien","en":"Ancient Greek","pt":"grego arcaico"}'
				],
				[
					'id' => '199',
					'code' => 'kl',
					'name' => '{"fr":"groenlandais","en":"Kalaallisut","pt":"groenland\u00eas"}'
				],
				[
					'id' => '200',
					'code' => 'gn',
					'name' => '{"fr":"guarani","en":"Guarani","pt":"guarani"}'
				],
				[
					'id' => '201',
					'code' => 'gez',
					'name' => '{"fr":"gu\u00e8ze","en":"Geez","pt":"geez"}'
				],
				[
					'id' => '202',
					'code' => 'gu',
					'name' => '{"fr":"gujarati","en":"Gujarati","pt":"guzerate"}'
				],
				[
					'id' => '203',
					'code' => 'guz',
					'name' => '{"fr":"gusii","en":"Gusii","pt":"gusii"}'
				],
				[
					'id' => '204',
					'code' => 'gwi',
					'name' => '{"fr":"gwich\u02bcin","en":"Gwich\u02bcin","pt":"gwich\u02bcin"}'
				],
				[
					'id' => '205',
					'code' => 'hai',
					'name' => '{"fr":"haida","en":"Haida","pt":"haida"}'
				],
				[
					'id' => '206',
					'code' => 'ht',
					'name' => '{"fr":"ha\u00eftien","en":"Haitian","pt":"haitiano"}'
				],
				[
					'id' => '207',
					'code' => 'hak',
					'name' => '{"fr":"Hakka Chinese","en":"Hakka Chinese","pt":"Hakka Chinese"}'
				],
				[
					'id' => '208',
					'code' => 'ha',
					'name' => '{"fr":"haoussa","en":"Hausa","pt":"hau\u00e7\u00e1"}'
				],
				[
					'id' => '209',
					'code' => 'hsb',
					'name' => '{"fr":"haut-sorabe","en":"Upper Sorbian","pt":"sor\u00e1bio alto"}'
				],
				[
					'id' => '210',
					'code' => 'haw',
					'name' => '{"fr":"hawa\u00efen","en":"Hawaiian","pt":"havaiano"}'
				],
				[
					'id' => '211',
					'code' => 'he',
					'name' => '{"fr":"h\u00e9breu","en":"Hebrew","pt":"hebraico"}'
				],
				[
					'id' => '212',
					'code' => 'hz',
					'name' => '{"fr":"h\u00e9r\u00e9ro","en":"Herero","pt":"herero"}'
				],
				[
					'id' => '213',
					'code' => 'hil',
					'name' => '{"fr":"hiligaynon","en":"Hiligaynon","pt":"hiligaynon"}'
				],
				[
					'id' => '214',
					'code' => 'hi',
					'name' => '{"fr":"hindi","en":"Hindi","pt":"h\u00edndi"}'
				],
				[
					'id' => '215',
					'code' => 'ho',
					'name' => '{"fr":"hiri motu","en":"Hiri Motu","pt":"hiri motu"}'
				],
				[
					'id' => '216',
					'code' => 'hit',
					'name' => '{"fr":"hittite","en":"Hittite","pt":"hitita"}'
				],
				[
					'id' => '217',
					'code' => 'hmn',
					'name' => '{"fr":"hmong","en":"Hmong","pt":"hmong"}'
				],
				[
					'id' => '218',
					'code' => 'hu',
					'name' => '{"fr":"hongrois","en":"Hungarian","pt":"h\u00fangaro"}'
				],
				[
					'id' => '219',
					'code' => 'hup',
					'name' => '{"fr":"hupa","en":"Hupa","pt":"hupa"}'
				],
				[
					'id' => '220',
					'code' => 'sah',
					'name' => '{"fr":"iakoute","en":"Sakha","pt":"iacuto"}'
				],
				[
					'id' => '221',
					'code' => 'iba',
					'name' => '{"fr":"iban","en":"Iban","pt":"iban"}'
				],
				[
					'id' => '222',
					'code' => 'ibb',
					'name' => '{"fr":"ibibio","en":"Ibibio","pt":"ibibio"}'
				],
				[
					'id' => '223',
					'code' => 'io',
					'name' => '{"fr":"ido","en":"Ido","pt":"ido"}'
				],
				[
					'id' => '224',
					'code' => 'ig',
					'name' => '{"fr":"igbo","en":"Igbo","pt":"ibo"}'
				],
				[
					'id' => '225',
					'code' => 'ilo',
					'name' => '{"fr":"ilokano","en":"Iloko","pt":"ilocano"}'
				],
				[
					'id' => '226',
					'code' => 'id',
					'name' => '{"fr":"indon\u00e9sien","en":"Indonesian","pt":"indon\u00e9sio"}'
				],
				[
					'id' => '227',
					'code' => 'inh',
					'name' => '{"fr":"ingouche","en":"Ingush","pt":"inguche"}'
				],
				[
					'id' => '228',
					'code' => 'izh',
					'name' => '{"fr":"Ingrian","en":"Ingrian","pt":"Ingrian"}'
				],
				[
					'id' => '229',
					'code' => 'ia',
					'name' => '{"fr":"interlingua","en":"Interlingua","pt":"interl\u00edngua"}'
				],
				[
					'id' => '230',
					'code' => 'ie',
					'name' => '{"fr":"interlingue","en":"Interlingue","pt":"interlingue"}'
				],
				[
					'id' => '231',
					'code' => 'iu',
					'name' => '{"fr":"inuktitut","en":"Inuktitut","pt":"inuktitut"}'
				],
				[
					'id' => '232',
					'code' => 'ik',
					'name' => '{"fr":"inupiaq","en":"Inupiaq","pt":"inupiaque"}'
				],
				[
					'id' => '233',
					'code' => 'ga',
					'name' => '{"fr":"irlandais","en":"Irish","pt":"irland\u00eas"}'
				],
				[
					'id' => '234',
					'code' => 'is',
					'name' => '{"fr":"islandais","en":"Icelandic","pt":"island\u00eas"}'
				],
				[
					'id' => '235',
					'code' => 'it',
					'name' => '{"fr":"italien","en":"Italian","pt":"italiano"}'
				],
				[
					'id' => '236',
					'code' => 'jam',
					'name' => '{"fr":"Jamaican Creole English","en":"Jamaican Creole English","pt":"Jamaican Creole English"}'
				],
				[
					'id' => '237',
					'code' => 'ja',
					'name' => '{"fr":"japonais","en":"Japanese","pt":"japon\u00eas"}'
				],
				[
					'id' => '238',
					'code' => 'chn',
					'name' => '{"fr":"jargon chinook","en":"Chinook Jargon","pt":"chinook jargon"}'
				],
				[
					'id' => '239',
					'code' => 'jv',
					'name' => '{"fr":"javanais","en":"Javanese","pt":"javan\u00eas"}'
				],
				[
					'id' => '240',
					'code' => 'kaj',
					'name' => '{"fr":"jju","en":"Jju","pt":"jju"}'
				],
				[
					'id' => '241',
					'code' => 'jrb',
					'name' => '{"fr":"jud\u00e9o-arabe","en":"Judeo-Arabic","pt":"judaico-ar\u00e1bico"}'
				],
				[
					'id' => '242',
					'code' => 'jpr',
					'name' => '{"fr":"jud\u00e9o-persan","en":"Judeo-Persian","pt":"judaico-persa"}'
				],
				[
					'id' => '243',
					'code' => 'jut',
					'name' => '{"fr":"Jutish","en":"Jutish","pt":"Jutish"}'
				],
				[
					'id' => '244',
					'code' => 'quc',
					'name' => '{"fr":"k\u2019iche\u2019","en":"K\u02bciche\u02bc","pt":"quich\u00e9"}'
				],
				[
					'id' => '245',
					'code' => 'kbd',
					'name' => '{"fr":"kabardin","en":"Kabardian","pt":"kabardiano"}'
				],
				[
					'id' => '246',
					'code' => 'kab',
					'name' => '{"fr":"kabyle","en":"Kabyle","pt":"kabyle"}'
				],
				[
					'id' => '247',
					'code' => 'kac',
					'name' => '{"fr":"kachin","en":"Kachin","pt":"kachin"}'
				],
				[
					'id' => '248',
					'code' => 'csb',
					'name' => '{"fr":"kachoube","en":"Kashubian","pt":"kashubian"}'
				],
				[
					'id' => '249',
					'code' => 'kgp',
					'name' => '{"fr":"Kaingang","en":"Kaingang","pt":"Kaingang"}'
				],
				[
					'id' => '250',
					'code' => 'kkj',
					'name' => '{"fr":"kako","en":"Kako","pt":"kako"}'
				],
				[
					'id' => '251',
					'code' => 'kln',
					'name' => '{"fr":"kalenjin","en":"Kalenjin","pt":"kalenjin"}'
				],
				[
					'id' => '252',
					'code' => 'xal',
					'name' => '{"fr":"kalmouk","en":"Kalmyk","pt":"kalmyk"}'
				],
				[
					'id' => '253',
					'code' => 'kam',
					'name' => '{"fr":"kamba","en":"Kamba","pt":"kamba"}'
				],
				[
					'id' => '254',
					'code' => 'kbl',
					'name' => '{"fr":"kanembou","en":"Kanembu","pt":"kanembu"}'
				],
				[
					'id' => '255',
					'code' => 'kn',
					'name' => '{"fr":"kannada","en":"Kannada","pt":"canar\u00eas"}'
				],
				[
					'id' => '256',
					'code' => 'kr',
					'name' => '{"fr":"kanouri","en":"Kanuri","pt":"can\u00fari"}'
				],
				[
					'id' => '257',
					'code' => 'kaa',
					'name' => '{"fr":"karakalpak","en":"Kara-Kalpak","pt":"kara-kalpak"}'
				],
				[
					'id' => '258',
					'code' => 'krc',
					'name' => '{"fr":"karatcha\u00ef balkar","en":"Karachay-Balkar","pt":"karachay-balkar"}'
				],
				[
					'id' => '259',
					'code' => 'ks',
					'name' => '{"fr":"kashmiri","en":"Kashmiri","pt":"caxemira"}'
				],
				[
					'id' => '260',
					'code' => 'kaw',
					'name' => '{"fr":"kawi","en":"Kawi","pt":"kawi"}'
				],
				[
					'id' => '261',
					'code' => 'kk',
					'name' => '{"fr":"kazakh","en":"Kazakh","pt":"cazaque"}'
				],
				[
					'id' => '262',
					'code' => 'ken',
					'name' => '{"fr":"Kenyang","en":"Kenyang","pt":"Kenyang"}'
				],
				[
					'id' => '263',
					'code' => 'kha',
					'name' => '{"fr":"khasi","en":"Khasi","pt":"khasi"}'
				],
				[
					'id' => '264',
					'code' => 'km',
					'name' => '{"fr":"khmer","en":"Khmer","pt":"khmer"}'
				],
				[
					'id' => '265',
					'code' => 'kho',
					'name' => '{"fr":"khotanais","en":"Khotanese","pt":"khotan\u00eas"}'
				],
				[
					'id' => '266',
					'code' => 'khw',
					'name' => '{"fr":"Khowar","en":"Khowar","pt":"Khowar"}'
				],
				[
					'id' => '267',
					'code' => 'cgg',
					'name' => '{"fr":"kiga","en":"Chiga","pt":"chiga"}'
				],
				[
					'id' => '268',
					'code' => 'ki',
					'name' => '{"fr":"kikuyu","en":"Kikuyu","pt":"quicuio"}'
				],
				[
					'id' => '269',
					'code' => 'kmb',
					'name' => '{"fr":"kiMboundou","en":"Kimbundu","pt":"quimbundo"}'
				],
				[
					'id' => '270',
					'code' => 'krj',
					'name' => '{"fr":"Kinaray-a","en":"Kinaray-a","pt":"Kinaray-a"}'
				],
				[
					'id' => '271',
					'code' => 'ky',
					'name' => '{"fr":"kirghize","en":"Kyrgyz","pt":"quirguiz"}'
				],
				[
					'id' => '272',
					'code' => 'kiu',
					'name' => '{"fr":"Kirmanjki","en":"Kirmanjki","pt":"Kirmanjki"}'
				],
				[
					'id' => '273',
					'code' => 'tlh',
					'name' => '{"fr":"klingon","en":"Klingon","pt":"klingon"}'
				],
				[
					'id' => '274',
					'code' => 'bkm',
					'name' => '{"fr":"kom","en":"Kom","pt":"kom"}'
				],
				[
					'id' => '275',
					'code' => 'kv',
					'name' => '{"fr":"komi","en":"Komi","pt":"komi"}'
				],
				[
					'id' => '276',
					'code' => 'koi',
					'name' => '{"fr":"komi-permiak","en":"Komi-Permyak","pt":"komi-permyak"}'
				],
				[
					'id' => '277',
					'code' => 'kg',
					'name' => '{"fr":"kongo","en":"Kongo","pt":"congol\u00eas"}'
				],
				[
					'id' => '278',
					'code' => 'kok',
					'name' => '{"fr":"konkani","en":"Konkani","pt":"concani"}'
				],
				[
					'id' => '279',
					'code' => 'kfo',
					'name' => '{"fr":"koro","en":"Koro","pt":"koro"}'
				],
				[
					'id' => '280',
					'code' => 'avk',
					'name' => '{"fr":"Kotava","en":"Kotava","pt":"Kotava"}'
				],
				[
					'id' => '281',
					'code' => 'kum',
					'name' => '{"fr":"koumyk","en":"Kumyk","pt":"kumyk"}'
				],
				[
					'id' => '282',
					'code' => 'khq',
					'name' => '{"fr":"koyra chiini","en":"Koyra Chiini","pt":"koyra chiini"}'
				],
				[
					'id' => '283',
					'code' => 'ses',
					'name' => '{"fr":"koyraboro senni","en":"Koyraboro Senni","pt":"koyraboro senni"}'
				],
				[
					'id' => '284',
					'code' => 'kpe',
					'name' => '{"fr":"kpell\u00e9","en":"Kpelle","pt":"kpelle"}'
				],
				[
					'id' => '285',
					'code' => 'kri',
					'name' => '{"fr":"Krio","en":"Krio","pt":"Krio"}'
				],
				[
					'id' => '286',
					'code' => 'kj',
					'name' => '{"fr":"kuanyama","en":"Kuanyama","pt":"kuanyama"}'
				],
				[
					'id' => '287',
					'code' => 'ku',
					'name' => '{"fr":"kurde","en":"Kurdish","pt":"curdo"}'
				],
				[
					'id' => '288',
					'code' => 'kru',
					'name' => '{"fr":"kurukh","en":"Kurukh","pt":"kurukh"}'
				],
				[
					'id' => '289',
					'code' => 'kos',
					'name' => '{"fr":"kusaien","en":"Kosraean","pt":"kosraean"}'
				],
				[
					'id' => '290',
					'code' => 'kut',
					'name' => '{"fr":"kutenai","en":"Kutenai","pt":"kutenai"}'
				],
				[
					'id' => '291',
					'code' => 'nmg',
					'name' => '{"fr":"kwasio","en":"Kwasio","pt":"kwasio"}'
				],
				[
					'id' => '292',
					'code' => 'lad',
					'name' => '{"fr":"ladino","en":"Ladino","pt":"ladino"}'
				],
				[
					'id' => '293',
					'code' => 'lah',
					'name' => '{"fr":"lahnda","en":"Lahnda","pt":"lahnda"}'
				],
				[
					'id' => '294',
					'code' => 'lkt',
					'name' => '{"fr":"lakota","en":"Lakota","pt":"lacota"}'
				],
				[
					'id' => '295',
					'code' => 'lam',
					'name' => '{"fr":"lamba","en":"Lamba","pt":"lamba"}'
				],
				[
					'id' => '296',
					'code' => 'lag',
					'name' => '{"fr":"langi","en":"Langi","pt":"langi"}'
				],
				[
					'id' => '297',
					'code' => 'und',
					'name' => '{"fr":"langue ind\u00e9termin\u00e9e","en":"Unknown Language","pt":"idioma desconhecido"}'
				],
				[
					'id' => '298',
					'code' => 'lo',
					'name' => '{"fr":"lao","en":"Lao","pt":"laosiano"}'
				],
				[
					'id' => '299',
					'code' => 'ltg',
					'name' => '{"fr":"Latgalian","en":"Latgalian","pt":"Latgalian"}'
				],
				[
					'id' => '300',
					'code' => 'la',
					'name' => '{"fr":"latin","en":"Latin","pt":"latim"}'
				],
				[
					'id' => '301',
					'code' => 'lzz',
					'name' => '{"fr":"Laz","en":"Laz","pt":"Laz"}'
				],
				[
					'id' => '302',
					'code' => 'lv',
					'name' => '{"fr":"letton","en":"Latvian","pt":"let\u00e3o"}'
				],
				[
					'id' => '303',
					'code' => 'lez',
					'name' => '{"fr":"lezghien","en":"Lezghian","pt":"lezghian"}'
				],
				[
					'id' => '304',
					'code' => 'lij',
					'name' => '{"fr":"Ligurian","en":"Ligurian","pt":"Ligurian"}'
				],
				[
					'id' => '305',
					'code' => 'li',
					'name' => '{"fr":"limbourgeois","en":"Limburgish","pt":"limburgu\u00eas"}'
				],
				[
					'id' => '306',
					'code' => 'ln',
					'name' => '{"fr":"lingala","en":"Lingala","pt":"lingala"}'
				],
				[
					'id' => '307',
					'code' => 'lfn',
					'name' => '{"fr":"Lingua Franca Nova","en":"Lingua Franca Nova","pt":"Lingua Franca Nova"}'
				],
				[
					'id' => '308',
					'code' => 'lzh',
					'name' => '{"fr":"Literary Chinese","en":"Literary Chinese","pt":"Literary Chinese"}'
				],
				[
					'id' => '309',
					'code' => 'lt',
					'name' => '{"fr":"lituanien","en":"Lithuanian","pt":"lituano"}'
				],
				[
					'id' => '310',
					'code' => 'liv',
					'name' => '{"fr":"Livonian","en":"Livonian","pt":"Livonian"}'
				],
				[
					'id' => '311',
					'code' => 'jbo',
					'name' => '{"fr":"lojban","en":"Lojban","pt":"lojban"}'
				],
				[
					'id' => '312',
					'code' => 'lmo',
					'name' => '{"fr":"Lombard","en":"Lombard","pt":"Lombard"}'
				],
				[
					'id' => '313',
					'code' => 'sli',
					'name' => '{"fr":"Lower Silesian","en":"Lower Silesian","pt":"Lower Silesian"}'
				],
				[
					'id' => '314',
					'code' => 'loz',
					'name' => '{"fr":"lozi","en":"Lozi","pt":"lozi"}'
				],
				[
					'id' => '315',
					'code' => 'lu',
					'name' => '{"fr":"luba-katanga","en":"Luba-Katanga","pt":"luba-catanga"}'
				],
				[
					'id' => '316',
					'code' => 'lua',
					'name' => '{"fr":"luba-lulua","en":"Luba-Lulua","pt":"luba-lulua"}'
				],
				[
					'id' => '317',
					'code' => 'lui',
					'name' => '{"fr":"luiseno","en":"Luiseno","pt":"luiseno"}'
				],
				[
					'id' => '318',
					'code' => 'lun',
					'name' => '{"fr":"lunda","en":"Lunda","pt":"lunda"}'
				],
				[
					'id' => '319',
					'code' => 'luo',
					'name' => '{"fr":"luo","en":"Luo","pt":"luo"}'
				],
				[
					'id' => '320',
					'code' => 'lus',
					'name' => '{"fr":"lushai","en":"Mizo","pt":"lushai"}'
				],
				[
					'id' => '321',
					'code' => 'lb',
					'name' => '{"fr":"luxembourgeois","en":"Luxembourgish","pt":"luxemburgu\u00eas"}'
				],
				[
					'id' => '322',
					'code' => 'mde',
					'name' => '{"fr":"maba","en":"Maba","pt":"maba"}'
				],
				[
					'id' => '323',
					'code' => 'mk',
					'name' => '{"fr":"mac\u00e9donien","en":"Macedonian","pt":"maced\u00f4nio"}'
				],
				[
					'id' => '324',
					'code' => 'jmc',
					'name' => '{"fr":"machame","en":"Machame","pt":"machame"}'
				],
				[
					'id' => '325',
					'code' => 'mad',
					'name' => '{"fr":"madurais","en":"Madurese","pt":"madur\u00eas"}'
				],
				[
					'id' => '326',
					'code' => 'maf',
					'name' => '{"fr":"mafa","en":"Mafa","pt":"mafa"}'
				],
				[
					'id' => '327',
					'code' => 'mag',
					'name' => '{"fr":"magahi","en":"Magahi","pt":"magahi"}'
				],
				[
					'id' => '328',
					'code' => 'vmf',
					'name' => '{"fr":"Main-Franconian","en":"Main-Franconian","pt":"Main-Franconian"}'
				],
				[
					'id' => '329',
					'code' => 'mai',
					'name' => '{"fr":"maithili","en":"Maithili","pt":"maithili"}'
				],
				[
					'id' => '330',
					'code' => 'mak',
					'name' => '{"fr":"makassar","en":"Makasar","pt":"makasar"}'
				],
				[
					'id' => '331',
					'code' => 'mgh',
					'name' => '{"fr":"makhuwa-meetto","en":"Makhuwa-Meetto","pt":"macua"}'
				],
				[
					'id' => '332',
					'code' => 'kde',
					'name' => '{"fr":"makonde","en":"Makonde","pt":"maconde"}'
				],
				[
					'id' => '333',
					'code' => 'ms',
					'name' => '{"fr":"malais","en":"Malay","pt":"malaio"}'
				],
				[
					'id' => '334',
					'code' => 'ml',
					'name' => '{"fr":"malayalam","en":"Malayalam","pt":"malaiala"}'
				],
				[
					'id' => '335',
					'code' => 'dv',
					'name' => '{"fr":"maldivien","en":"Divehi","pt":"divehi"}'
				],
				[
					'id' => '336',
					'code' => 'mg',
					'name' => '{"fr":"malgache","en":"Malagasy","pt":"malgaxe"}'
				],
				[
					'id' => '337',
					'code' => 'mt',
					'name' => '{"fr":"maltais","en":"Maltese","pt":"malt\u00eas"}'
				],
				[
					'id' => '338',
					'code' => 'mdr',
					'name' => '{"fr":"mandar","en":"Mandar","pt":"mandar"}'
				],
				[
					'id' => '339',
					'code' => 'mnc',
					'name' => '{"fr":"mandchou","en":"Manchu","pt":"manchu"}'
				],
				[
					'id' => '340',
					'code' => 'man',
					'name' => '{"fr":"mandingue","en":"Mandingo","pt":"mandinga"}'
				],
				[
					'id' => '341',
					'code' => 'mni',
					'name' => '{"fr":"manipuri","en":"Manipuri","pt":"manipuri"}'
				],
				[
					'id' => '342',
					'code' => 'gv',
					'name' => '{"fr":"manx","en":"Manx","pt":"manx"}'
				],
				[
					'id' => '343',
					'code' => 'mi',
					'name' => '{"fr":"maori","en":"Maori","pt":"maori"}'
				],
				[
					'id' => '344',
					'code' => 'mr',
					'name' => '{"fr":"marathe","en":"Marathi","pt":"marata"}'
				],
				[
					'id' => '345',
					'code' => 'chm',
					'name' => '{"fr":"mari","en":"Mari","pt":"mari"}'
				],
				[
					'id' => '346',
					'code' => 'mh',
					'name' => '{"fr":"marshall","en":"Marshallese","pt":"marshal\u00eas"}'
				],
				[
					'id' => '347',
					'code' => 'mwr',
					'name' => '{"fr":"marwar\u00ee","en":"Marwari","pt":"marwari"}'
				],
				[
					'id' => '348',
					'code' => 'mas',
					'name' => '{"fr":"masai","en":"Masai","pt":"massai"}'
				],
				[
					'id' => '349',
					'code' => 'mzn',
					'name' => '{"fr":"Mazanderani","en":"Mazanderani","pt":"Mazanderani"}'
				],
				[
					'id' => '350',
					'code' => 'byv',
					'name' => '{"fr":"medumba","en":"Medumba","pt":"medumba"}'
				],
				[
					'id' => '351',
					'code' => 'men',
					'name' => '{"fr":"mend\u00e9","en":"Mende","pt":"mende"}'
				],
				[
					'id' => '352',
					'code' => 'mwv',
					'name' => '{"fr":"Mentawai","en":"Mentawai","pt":"Mentawai"}'
				],
				[
					'id' => '353',
					'code' => 'mer',
					'name' => '{"fr":"merou","en":"Meru","pt":"meru"}'
				],
				[
					'id' => '354',
					'code' => 'mgo',
					'name' => '{"fr":"m\u00e9ta\u2019","en":"Meta\u02bc","pt":"meta\u2019"}'
				],
				[
					'id' => '355',
					'code' => 'mic',
					'name' => '{"fr":"micmac","en":"Micmac","pt":"miquemaque"}'
				],
				[
					'id' => '356',
					'code' => 'nan',
					'name' => '{"fr":"Min Nan Chinese","en":"Min Nan Chinese","pt":"Min Nan Chinese"}'
				],
				[
					'id' => '357',
					'code' => 'min',
					'name' => '{"fr":"minangkabau","en":"Minangkabau","pt":"minangkabau"}'
				],
				[
					'id' => '358',
					'code' => 'xmf',
					'name' => '{"fr":"Mingrelian","en":"Mingrelian","pt":"Mingrelian"}'
				],
				[
					'id' => '359',
					'code' => 'mwl',
					'name' => '{"fr":"mirandais","en":"Mirandese","pt":"mirand\u00eas"}'
				],
				[
					'id' => '360',
					'code' => 'moh',
					'name' => '{"fr":"mohawk","en":"Mohawk","pt":"moicano"}'
				],
				[
					'id' => '361',
					'code' => 'mdf',
					'name' => '{"fr":"moksa","en":"Moksha","pt":"mocsa"}'
				],
				[
					'id' => '362',
					'code' => 'ro_MD',
					'name' => '{"fr":"moldave","en":"Moldavian","pt":"mold\u00e1vio"}'
				],
				[
					'id' => '363',
					'code' => 'lol',
					'name' => '{"fr":"mongo","en":"Mongo","pt":"mongo"}'
				],
				[
					'id' => '364',
					'code' => 'mn',
					'name' => '{"fr":"mongol","en":"Mongolian","pt":"mongol"}'
				],
				[
					'id' => '365',
					'code' => 'mos',
					'name' => '{"fr":"mor\u00e9","en":"Mossi","pt":"mossi"}'
				],
				[
					'id' => '366',
					'code' => 'ary',
					'name' => '{"fr":"Moroccan Arabic","en":"Moroccan Arabic","pt":"Moroccan Arabic"}'
				],
				[
					'id' => '367',
					'code' => 'enm',
					'name' => '{"fr":"moyen anglais","en":"Middle English","pt":"ingl\u00eas m\u00e9dio"}'
				],
				[
					'id' => '368',
					'code' => 'frm',
					'name' => '{"fr":"moyen fran\u00e7ais","en":"Middle French","pt":"franc\u00eas m\u00e9dio"}'
				],
				[
					'id' => '369',
					'code' => 'gmh',
					'name' => '{"fr":"moyen haut-allemand","en":"Middle High German","pt":"alem\u00e3o m\u00e9dio-alto"}'
				],
				[
					'id' => '370',
					'code' => 'mga',
					'name' => '{"fr":"moyen irlandais","en":"Middle Irish","pt":"irland\u00eas m\u00e9dio"}'
				],
				[
					'id' => '371',
					'code' => 'dum',
					'name' => '{"fr":"moyen n\u00e9erlandais","en":"Middle Dutch","pt":"holand\u00eas m\u00e9dio"}'
				],
				[
					'id' => '372',
					'code' => 'mul',
					'name' => '{"fr":"multilingue","en":"Multiple Languages","pt":"idiomas m\u00faltiplos"}'
				],
				[
					'id' => '373',
					'code' => 'mua',
					'name' => '{"fr":"mundang","en":"Mundang","pt":"mundang"}'
				],
				[
					'id' => '374',
					'code' => 'ttt',
					'name' => '{"fr":"Muslim Tat","en":"Muslim Tat","pt":"Muslim Tat"}'
				],
				[
					'id' => '375',
					'code' => 'mye',
					'name' => '{"fr":"my\u00e8n\u00e8","en":"Myene","pt":"myene"}'
				],
				[
					'id' => '376',
					'code' => 'nqo',
					'name' => '{"fr":"n\u2019ko","en":"N\u02bcKo","pt":"n\u2019ko"}'
				],
				[
					'id' => '377',
					'code' => 'naq',
					'name' => '{"fr":"nama","en":"Nama","pt":"nama"}'
				],
				[
					'id' => '378',
					'code' => 'nap',
					'name' => '{"fr":"napolitain","en":"Neapolitan","pt":"napolitano"}'
				],
				[
					'id' => '379',
					'code' => 'na',
					'name' => '{"fr":"nauruan","en":"Nauru","pt":"nauruano"}'
				],
				[
					'id' => '380',
					'code' => 'nv',
					'name' => '{"fr":"navaho","en":"Navajo","pt":"navajo"}'
				],
				[
					'id' => '381',
					'code' => 'nd',
					'name' => '{"fr":"nd\u00e9b\u00e9l\u00e9 du Nord","en":"North Ndebele","pt":"ndebele do norte"}'
				],
				[
					'id' => '382',
					'code' => 'nr',
					'name' => '{"fr":"nd\u00e9b\u00e9l\u00e9 du Sud","en":"South Ndebele","pt":"ndebele do sul"}'
				],
				[
					'id' => '383',
					'code' => 'ng',
					'name' => '{"fr":"ndonga","en":"Ndonga","pt":"dongo"}'
				],
				[
					'id' => '384',
					'code' => 'nl',
					'name' => '{"fr":"n\u00e9erlandais","en":"Dutch","pt":"holand\u00eas"}'
				],
				[
					'id' => '385',
					'code' => 'ne',
					'name' => '{"fr":"n\u00e9palais","en":"Nepali","pt":"nepali"}'
				],
				[
					'id' => '386',
					'code' => 'new',
					'name' => '{"fr":"newari","en":"Newari","pt":"newari"}'
				],
				[
					'id' => '387',
					'code' => 'nwc',
					'name' => '{"fr":"newar\u00ee classique","en":"Classical Newari","pt":"newari cl\u00e1ssico"}'
				],
				[
					'id' => '388',
					'code' => 'sba',
					'name' => '{"fr":"ngambay","en":"Ngambay","pt":"ngambay"}'
				],
				[
					'id' => '389',
					'code' => 'nnh',
					'name' => '{"fr":"ngiemboon","en":"Ngiemboon","pt":"ngiemboon"}'
				],
				[
					'id' => '390',
					'code' => 'jgo',
					'name' => '{"fr":"ngomba","en":"Ngomba","pt":"nguemba"}'
				],
				[
					'id' => '391',
					'code' => 'yrl',
					'name' => '{"fr":"Nheengatu","en":"Nheengatu","pt":"Nheengatu"}'
				],
				[
					'id' => '392',
					'code' => 'nia',
					'name' => '{"fr":"nias","en":"Nias","pt":"nias"}'
				],
				[
					'id' => '393',
					'code' => 'niu',
					'name' => '{"fr":"niu\u00e9","en":"Niuean","pt":"niueano"}'
				],
				[
					'id' => '394',
					'code' => 'nog',
					'name' => '{"fr":"noga\u00ef","en":"Nogai","pt":"nogai"}'
				],
				[
					'id' => '395',
					'code' => 'no',
					'name' => '{"fr":"norv\u00e9gien","en":"Norwegian","pt":"noruegu\u00eas"}'
				],
				[
					'id' => '396',
					'code' => 'nb',
					'name' => '{"fr":"norv\u00e9gien bokm\u00e5l","en":"Norwegian Bokm\u00e5l","pt":"bokm\u00e5l noruegu\u00eas"}'
				],
				[
					'id' => '397',
					'code' => 'nn',
					'name' => '{"fr":"norv\u00e9gien nynorsk","en":"Norwegian Nynorsk","pt":"nynorsk noruegu\u00eas"}'
				],
				[
					'id' => '398',
					'code' => 'nov',
					'name' => '{"fr":"Novial","en":"Novial","pt":"Novial"}'
				],
				[
					'id' => '399',
					'code' => 'nus',
					'name' => '{"fr":"nuer","en":"Nuer","pt":"nuer"}'
				],
				[
					'id' => '400',
					'code' => 'nym',
					'name' => '{"fr":"nyamwezi","en":"Nyamwezi","pt":"nyamwezi"}'
				],
				[
					'id' => '401',
					'code' => 'ny',
					'name' => '{"fr":"nyanja","en":"Nyanja","pt":"nianja"}'
				],
				[
					'id' => '402',
					'code' => 'nyn',
					'name' => '{"fr":"nyankol\u00e9","en":"Nyankole","pt":"nyankole"}'
				],
				[
					'id' => '403',
					'code' => 'nyo',
					'name' => '{"fr":"nyoro","en":"Nyoro","pt":"nyoro"}'
				],
				[
					'id' => '404',
					'code' => 'nzi',
					'name' => '{"fr":"nzema","en":"Nzima","pt":"nzima"}'
				],
				[
					'id' => '405',
					'code' => 'oc',
					'name' => '{"fr":"occitan","en":"Occitan","pt":"occit\u00e2nico"}'
				],
				[
					'id' => '406',
					'code' => 'oj',
					'name' => '{"fr":"ojibwa","en":"Ojibwa","pt":"ojibwa"}'
				],
				[
					'id' => '407',
					'code' => 'luy',
					'name' => '{"fr":"oluluyia","en":"Luyia","pt":"luyia"}'
				],
				[
					'id' => '408',
					'code' => 'or',
					'name' => '{"fr":"oriya","en":"Oriya","pt":"oriya"}'
				],
				[
					'id' => '409',
					'code' => 'om',
					'name' => '{"fr":"oromo","en":"Oromo","pt":"oromo"}'
				],
				[
					'id' => '410',
					'code' => 'osa',
					'name' => '{"fr":"osage","en":"Osage","pt":"osage"}'
				],
				[
					'id' => '411',
					'code' => 'os',
					'name' => '{"fr":"oss\u00e8te","en":"Ossetic","pt":"ossetic"}'
				],
				[
					'id' => '412',
					'code' => 'udm',
					'name' => '{"fr":"oudmourte","en":"Udmurt","pt":"udmurt"}'
				],
				[
					'id' => '413',
					'code' => 'uga',
					'name' => '{"fr":"ougaritique","en":"Ugaritic","pt":"ugar\u00edtico"}'
				],
				[
					'id' => '414',
					'code' => 'ug',
					'name' => '{"fr":"ou\u00efghour","en":"Uyghur","pt":"uigur"}'
				],
				[
					'id' => '415',
					'code' => 'ur',
					'name' => '{"fr":"ourdou","en":"Urdu","pt":"urdu"}'
				],
				[
					'id' => '416',
					'code' => 'uz',
					'name' => '{"fr":"ouzbek","en":"Uzbek","pt":"usbeque"}'
				],
				[
					'id' => '417',
					'code' => 'ps',
					'name' => '{"fr":"pachto","en":"Pashto","pt":"pashto"}'
				],
				[
					'id' => '418',
					'code' => 'pal',
					'name' => '{"fr":"pahlavi","en":"Pahlavi","pt":"p\u00e1lavi"}'
				],
				[
					'id' => '419',
					'code' => 'pfl',
					'name' => '{"fr":"Palatine German","en":"Palatine German","pt":"Palatine German"}'
				],
				[
					'id' => '420',
					'code' => 'pau',
					'name' => '{"fr":"palau","en":"Palauan","pt":"palauano"}'
				],
				[
					'id' => '421',
					'code' => 'pi',
					'name' => '{"fr":"pali","en":"Pali","pt":"p\u00e1li"}'
				],
				[
					'id' => '422',
					'code' => 'pam',
					'name' => '{"fr":"pampangan","en":"Pampanga","pt":"pampanga"}'
				],
				[
					'id' => '423',
					'code' => 'pag',
					'name' => '{"fr":"pangasinan","en":"Pangasinan","pt":"pangasin\u00e3"}'
				],
				[
					'id' => '424',
					'code' => 'pap',
					'name' => '{"fr":"papiamento","en":"Papiamento","pt":"papiamento"}'
				],
				[
					'id' => '425',
					'code' => 'pa',
					'name' => '{"fr":"pendjabi","en":"Punjabi","pt":"panjabi"}'
				],
				[
					'id' => '426',
					'code' => 'pdc',
					'name' => '{"fr":"Pennsylvania German","en":"Pennsylvania German","pt":"Pennsylvania German"}'
				],
				[
					'id' => '427',
					'code' => 'fa',
					'name' => '{"fr":"persan","en":"Persian","pt":"persa"}'
				],
				[
					'id' => '428',
					'code' => 'peo',
					'name' => '{"fr":"persan ancien","en":"Old Persian","pt":"persa arcaico"}'
				],
				[
					'id' => '429',
					'code' => 'ff',
					'name' => '{"fr":"peul","en":"Fulah","pt":"fula"}'
				],
				[
					'id' => '430',
					'code' => 'phn',
					'name' => '{"fr":"ph\u00e9nicien","en":"Phoenician","pt":"fen\u00edcio"}'
				],
				[
					'id' => '431',
					'code' => 'pcd',
					'name' => '{"fr":"Picard","en":"Picard","pt":"Picard"}'
				],
				[
					'id' => '432',
					'code' => 'pms',
					'name' => '{"fr":"Piedmontese","en":"Piedmontese","pt":"Piedmontese"}'
				],
				[
					'id' => '433',
					'code' => 'pdt',
					'name' => '{"fr":"Plautdietsch","en":"Plautdietsch","pt":"Plautdietsch"}'
				],
				[
					'id' => '434',
					'code' => 'pon',
					'name' => '{"fr":"pohnpei","en":"Pohnpeian","pt":"pohnpeian"}'
				],
				[
					'id' => '435',
					'code' => 'pl',
					'name' => '{"fr":"polonais","en":"Polish","pt":"polon\u00eas"}'
				],
				[
					'id' => '436',
					'code' => 'pnt',
					'name' => '{"fr":"Pontic","en":"Pontic","pt":"Pontic"}'
				],
				[
					'id' => '437',
					'code' => 'pt',
					'name' => '{"fr":"portugais","en":"Portuguese","pt":"portugu\u00eas"}'
				],
				[
					'id' => '438',
					'code' => 'pt_BR',
					'name' => '{"fr":"portugais br\u00e9silien","en":"Brazilian Portuguese","pt":"portugu\u00eas do Brasil"}'
				],
				[
					'id' => '439',
					'code' => 'pt_PT',
					'name' => '{"fr":"portugais europ\u00e9en","en":"European Portuguese","pt":"portugu\u00eas europeu"}'
				],
				[
					'id' => '440',
					'code' => 'pro',
					'name' => '{"fr":"proven\u00e7al ancien","en":"Old Proven\u00e7al","pt":"proven\u00e7al arcaico"}'
				],
				[
					'id' => '441',
					'code' => 'prg',
					'name' => '{"fr":"Prussian","en":"Prussian","pt":"Prussian"}'
				],
				[
					'id' => '442',
					'code' => 'qu',
					'name' => '{"fr":"quechua","en":"Quechua","pt":"qu\u00edchua"}'
				],
				[
					'id' => '443',
					'code' => 'root',
					'name' => '{"fr":"racine","en":"Root","pt":"Root"}'
				],
				[
					'id' => '444',
					'code' => 'raj',
					'name' => '{"fr":"rajasthani","en":"Rajasthani","pt":"rajastani"}'
				],
				[
					'id' => '445',
					'code' => 'rap',
					'name' => '{"fr":"rapanui","en":"Rapanui","pt":"rapanui"}'
				],
				[
					'id' => '446',
					'code' => 'rar',
					'name' => '{"fr":"rarotongien","en":"Rarotongan","pt":"rarotongano"}'
				],
				[
					'id' => '447',
					'code' => 'rif',
					'name' => '{"fr":"Riffian","en":"Riffian","pt":"Riffian"}'
				],
				[
					'id' => '448',
					'code' => 'rgn',
					'name' => '{"fr":"Romagnol","en":"Romagnol","pt":"Romagnol"}'
				],
				[
					'id' => '449',
					'code' => 'rm',
					'name' => '{"fr":"romanche","en":"Romansh","pt":"romanche"}'
				],
				[
					'id' => '450',
					'code' => 'rof',
					'name' => '{"fr":"rombo","en":"Rombo","pt":"rombo"}'
				],
				[
					'id' => '451',
					'code' => 'rtm',
					'name' => '{"fr":"Rotuman","en":"Rotuman","pt":"Rotuman"}'
				],
				[
					'id' => '452',
					'code' => 'ro',
					'name' => '{"fr":"roumain","en":"Romanian","pt":"romeno"}'
				],
				[
					'id' => '453',
					'code' => 'rn',
					'name' => '{"fr":"roundi","en":"Rundi","pt":"rundi"}'
				],
				[
					'id' => '454',
					'code' => 'rug',
					'name' => '{"fr":"Roviana","en":"Roviana","pt":"Roviana"}'
				],
				[
					'id' => '455',
					'code' => 'ru',
					'name' => '{"fr":"russe","en":"Russian","pt":"russo"}'
				],
				[
					'id' => '456',
					'code' => 'rue',
					'name' => '{"fr":"Rusyn","en":"Rusyn","pt":"Rusyn"}'
				],
				[
					'id' => '457',
					'code' => 'rwk',
					'name' => '{"fr":"rwa","en":"Rwa","pt":"rwa"}'
				],
				[
					'id' => '458',
					'code' => 'rw',
					'name' => '{"fr":"rwanda","en":"Kinyarwanda","pt":"kinyarwanda"}'
				],
				[
					'id' => '459',
					'code' => 'ssy',
					'name' => '{"fr":"saho","en":"Saho","pt":"saho"}'
				],
				[
					'id' => '460',
					'code' => 'saq',
					'name' => '{"fr":"samburu","en":"Samburu","pt":"samburu"}'
				],
				[
					'id' => '461',
					'code' => 'smn',
					'name' => '{"fr":"sami d\u2019Inari","en":"Inari Sami","pt":"inari sami"}'
				],
				[
					'id' => '462',
					'code' => 'smj',
					'name' => '{"fr":"sami de Lule","en":"Lule Sami","pt":"lule sami"}'
				],
				[
					'id' => '463',
					'code' => 'se',
					'name' => '{"fr":"sami du Nord","en":"Northern Sami","pt":"sami do norte"}'
				],
				[
					'id' => '464',
					'code' => 'sma',
					'name' => '{"fr":"sami du Sud","en":"Southern Sami","pt":"sami do sul"}'
				],
				[
					'id' => '465',
					'code' => 'sms',
					'name' => '{"fr":"sami skolt","en":"Skolt Sami","pt":"skolt sami"}'
				],
				[
					'id' => '466',
					'code' => 'sm',
					'name' => '{"fr":"samoan","en":"Samoan","pt":"samoano"}'
				],
				[
					'id' => '467',
					'code' => 'sgs',
					'name' => '{"fr":"Samogitian","en":"Samogitian","pt":"Samogitian"}'
				],
				[
					'id' => '468',
					'code' => 'sad',
					'name' => '{"fr":"sandawe","en":"Sandawe","pt":"sandawe"}'
				],
				[
					'id' => '469',
					'code' => 'sg',
					'name' => '{"fr":"sangho","en":"Sango","pt":"sango"}'
				],
				[
					'id' => '470',
					'code' => 'sbp',
					'name' => '{"fr":"sangu","en":"Sangu","pt":"sangu"}'
				],
				[
					'id' => '471',
					'code' => 'zxx',
					'name' => '{"fr":"sans contenu linguistique","en":"No linguistic content","pt":"sem conte\u00fado lingu\u00edstico"}'
				],
				[
					'id' => '472',
					'code' => 'sa',
					'name' => '{"fr":"sanskrit","en":"Sanskrit","pt":"s\u00e2nscrito"}'
				],
				[
					'id' => '473',
					'code' => 'sat',
					'name' => '{"fr":"santal","en":"Santali","pt":"santali"}'
				],
				[
					'id' => '474',
					'code' => 'sc',
					'name' => '{"fr":"sarde","en":"Sardinian","pt":"sardo"}'
				],
				[
					'id' => '475',
					'code' => 'sas',
					'name' => '{"fr":"sasak","en":"Sasak","pt":"sasak"}'
				],
				[
					'id' => '476',
					'code' => 'sdc',
					'name' => '{"fr":"Sassarese Sardinian","en":"Sassarese Sardinian","pt":"Sassarese Sardinian"}'
				],
				[
					'id' => '477',
					'code' => 'stq',
					'name' => '{"fr":"Saterland Frisian","en":"Saterland Frisian","pt":"Saterland Frisian"}'
				],
				[
					'id' => '478',
					'code' => 'saz',
					'name' => '{"fr":"Saurashtra","en":"Saurashtra","pt":"Saurashtra"}'
				],
				[
					'id' => '479',
					'code' => 'sly',
					'name' => '{"fr":"Selayar","en":"Selayar","pt":"Selayar"}'
				],
				[
					'id' => '480',
					'code' => 'sel',
					'name' => '{"fr":"selkoupe","en":"Selkup","pt":"selkup"}'
				],
				[
					'id' => '481',
					'code' => 'seh',
					'name' => '{"fr":"sena","en":"Sena","pt":"sena"}'
				],
				[
					'id' => '482',
					'code' => 'see',
					'name' => '{"fr":"seneca","en":"Seneca","pt":"seneca"}'
				],
				[
					'id' => '483',
					'code' => 'sr',
					'name' => '{"fr":"serbe","en":"Serbian","pt":"s\u00e9rvio"}'
				],
				[
					'id' => '484',
					'code' => 'sh',
					'name' => '{"fr":"serbo-croate","en":"Serbo-Croatian","pt":"servo-croata"}'
				],
				[
					'id' => '485',
					'code' => 'srr',
					'name' => '{"fr":"s\u00e9r\u00e8re","en":"Serer","pt":"serere"}'
				],
				[
					'id' => '486',
					'code' => 'sei',
					'name' => '{"fr":"Seri","en":"Seri","pt":"Seri"}'
				],
				[
					'id' => '487',
					'code' => 'st',
					'name' => '{"fr":"sesotho","en":"Southern Sotho","pt":"soto do sul"}'
				],
				[
					'id' => '488',
					'code' => 'shn',
					'name' => '{"fr":"shan","en":"Shan","pt":"shan"}'
				],
				[
					'id' => '489',
					'code' => 'sn',
					'name' => '{"fr":"shona","en":"Shona","pt":"shona"}'
				],
				[
					'id' => '490',
					'code' => 'scn',
					'name' => '{"fr":"sicilien","en":"Sicilian","pt":"siciliano"}'
				],
				[
					'id' => '491',
					'code' => 'sid',
					'name' => '{"fr":"sidamo","en":"Sidamo","pt":"sidamo"}'
				],
				[
					'id' => '492',
					'code' => 'bla',
					'name' => '{"fr":"siksika","en":"Siksika","pt":"siksika"}'
				],
				[
					'id' => '493',
					'code' => 'szl',
					'name' => '{"fr":"Silesian","en":"Silesian","pt":"Silesian"}'
				],
				[
					'id' => '494',
					'code' => 'sd',
					'name' => '{"fr":"sindhi","en":"Sindhi","pt":"sindi"}'
				],
				[
					'id' => '495',
					'code' => 'den',
					'name' => '{"fr":"slavey","en":"Slave","pt":"slave"}'
				],
				[
					'id' => '496',
					'code' => 'cu',
					'name' => '{"fr":"slavon d\u2019\u00e9glise","en":"Church Slavic","pt":"eslavo eclesi\u00e1stico"}'
				],
				[
					'id' => '497',
					'code' => 'sk',
					'name' => '{"fr":"slovaque","en":"Slovak","pt":"eslovaco"}'
				],
				[
					'id' => '498',
					'code' => 'sl',
					'name' => '{"fr":"slov\u00e8ne","en":"Slovenian","pt":"esloveno"}'
				],
				[
					'id' => '499',
					'code' => 'xog',
					'name' => '{"fr":"soga","en":"Soga","pt":"lusoga"}'
				],
				[
					'id' => '500',
					'code' => 'sog',
					'name' => '{"fr":"sogdien","en":"Sogdien","pt":"sogdiano"}'
				],
				[
					'id' => '501',
					'code' => 'so',
					'name' => '{"fr":"somali","en":"Somali","pt":"somali"}'
				],
				[
					'id' => '502',
					'code' => 'snk',
					'name' => '{"fr":"sonink\u00e9","en":"Soninke","pt":"soninqu\u00ea"}'
				],
				[
					'id' => '503',
					'code' => 'ckb',
					'name' => '{"fr":"sorani","en":"Central Kurdish","pt":"sor\u00e2ni curdo"}'
				],
				[
					'id' => '504',
					'code' => 'nso',
					'name' => '{"fr":"sotho du Nord","en":"Northern Sotho","pt":"soto setentrional"}'
				],
				[
					'id' => '505',
					'code' => 'su',
					'name' => '{"fr":"soundanais","en":"Sundanese","pt":"sundan\u00eas"}'
				],
				[
					'id' => '506',
					'code' => 'sus',
					'name' => '{"fr":"soussou","en":"Susu","pt":"sosso"}'
				],
				[
					'id' => '507',
					'code' => 'azb',
					'name' => '{"fr":"South Azerbaijani","en":"South Azerbaijani","pt":"South Azerbaijani"}'
				],
				[
					'id' => '508',
					'code' => 'srn',
					'name' => '{"fr":"sranan tongo","en":"Sranan Tongo","pt":"idioma surinam\u00eas"}'
				],
				[
					'id' => '509',
					'code' => 'sv',
					'name' => '{"fr":"su\u00e9dois","en":"Swedish","pt":"sueco"}'
				],
				[
					'id' => '510',
					'code' => 'gsw',
					'name' => '{"fr":"suisse allemand","en":"Swiss German","pt":"alem\u00e3o su\u00ed\u00e7o"}'
				],
				[
					'id' => '511',
					'code' => 'suk',
					'name' => '{"fr":"sukuma","en":"Sukuma","pt":"sukuma"}'
				],
				[
					'id' => '512',
					'code' => 'sux',
					'name' => '{"fr":"sum\u00e9rien","en":"Sumerian","pt":"sum\u00e9rio"}'
				],
				[
					'id' => '513',
					'code' => 'sw',
					'name' => '{"fr":"swahili","en":"Swahili","pt":"sua\u00edli"}'
				],
				[
					'id' => '514',
					'code' => 'swc',
					'name' => '{"fr":"swahili du Congo","en":"Congo Swahili","pt":"sua\u00edli do Congo"}'
				],
				[
					'id' => '515',
					'code' => 'ss',
					'name' => '{"fr":"swati","en":"Swati","pt":"swati"}'
				],
				[
					'id' => '516',
					'code' => 'zbl',
					'name' => '{"fr":"symboles Bliss","en":"Blissymbols","pt":"s\u00edmbolos blis"}'
				],
				[
					'id' => '517',
					'code' => 'syr',
					'name' => '{"fr":"syriaque","en":"Syriac","pt":"sir\u00edaco"}'
				],
				[
					'id' => '518',
					'code' => 'syc',
					'name' => '{"fr":"syriaque classique","en":"Classical Syriac","pt":"sir\u00edaco cl\u00e1ssico"}'
				],
				[
					'id' => '519',
					'code' => 'tg',
					'name' => '{"fr":"tadjik","en":"Tajik","pt":"tajique"}'
				],
				[
					'id' => '520',
					'code' => 'tl',
					'name' => '{"fr":"tagalog","en":"Tagalog","pt":"tagalo"}'
				],
				[
					'id' => '521',
					'code' => 'ty',
					'name' => '{"fr":"tahitien","en":"Tahitian","pt":"taitiano"}'
				],
				[
					'id' => '522',
					'code' => 'dav',
					'name' => '{"fr":"taita","en":"Taita","pt":"taita"}'
				],
				[
					'id' => '523',
					'code' => 'tly',
					'name' => '{"fr":"Talysh","en":"Talysh","pt":"Talysh"}'
				],
				[
					'id' => '524',
					'code' => 'tmh',
					'name' => '{"fr":"tamacheq","en":"Tamashek","pt":"tamaxeque"}'
				],
				[
					'id' => '525',
					'code' => 'tzm',
					'name' => '{"fr":"tamazight","en":"Central Atlas Tamazight","pt":"tamazight do Atlas Central"}'
				],
				[
					'id' => '526',
					'code' => 'ta',
					'name' => '{"fr":"tamoul","en":"Tamil","pt":"t\u00e2mil"}'
				],
				[
					'id' => '527',
					'code' => 'trv',
					'name' => '{"fr":"taroko","en":"Taroko","pt":"taroko"}'
				],
				[
					'id' => '528',
					'code' => 'twq',
					'name' => '{"fr":"tasawaq","en":"Tasawaq","pt":"tasawaq"}'
				],
				[
					'id' => '529',
					'code' => 'tt',
					'name' => '{"fr":"tatar","en":"Tatar","pt":"tatar"}'
				],
				[
					'id' => '530',
					'code' => 'chg',
					'name' => '{"fr":"tchaghata\u00ef","en":"Chagatai","pt":"chagatai"}'
				],
				[
					'id' => '531',
					'code' => 'cs',
					'name' => '{"fr":"tch\u00e8que","en":"Czech","pt":"tcheco"}'
				],
				[
					'id' => '532',
					'code' => 'ce',
					'name' => '{"fr":"tch\u00e9tch\u00e8ne","en":"Chechen","pt":"checheno"}'
				],
				[
					'id' => '533',
					'code' => 'cv',
					'name' => '{"fr":"tchouvache","en":"Chuvash","pt":"chuvash"}'
				],
				[
					'id' => '534',
					'code' => 'te',
					'name' => '{"fr":"t\u00e9lougou","en":"Telugu","pt":"telugu"}'
				],
				[
					'id' => '535',
					'code' => 'tem',
					'name' => '{"fr":"temne","en":"Timne","pt":"timne"}'
				],
				[
					'id' => '536',
					'code' => 'ter',
					'name' => '{"fr":"tereno","en":"Tereno","pt":"tereno"}'
				],
				[
					'id' => '537',
					'code' => 'teo',
					'name' => '{"fr":"teso","en":"Teso","pt":"teso"}'
				],
				[
					'id' => '538',
					'code' => 'tet',
					'name' => '{"fr":"tetum","en":"Tetum","pt":"t\u00e9tum"}'
				],
				[
					'id' => '539',
					'code' => 'th',
					'name' => '{"fr":"tha\u00ef","en":"Thai","pt":"tailand\u00eas"}'
				],
				[
					'id' => '540',
					'code' => 'bo',
					'name' => '{"fr":"tib\u00e9tain","en":"Tibetan","pt":"tibetano"}'
				],
				[
					'id' => '541',
					'code' => 'tig',
					'name' => '{"fr":"tigr\u00e9","en":"Tigre","pt":"tigr\u00e9"}'
				],
				[
					'id' => '542',
					'code' => 'ti',
					'name' => '{"fr":"tigrigna","en":"Tigrinya","pt":"tigr\u00ednia"}'
				],
				[
					'id' => '543',
					'code' => 'tiv',
					'name' => '{"fr":"tiv","en":"Tiv","pt":"tiv"}'
				],
				[
					'id' => '544',
					'code' => 'tli',
					'name' => '{"fr":"tlingit","en":"Tlingit","pt":"tlinguite"}'
				],
				[
					'id' => '545',
					'code' => 'tpi',
					'name' => '{"fr":"tok pisin","en":"Tok Pisin","pt":"tok pisin"}'
				],
				[
					'id' => '546',
					'code' => 'tkl',
					'name' => '{"fr":"tokelau","en":"Tokelau","pt":"toquelauano"}'
				],
				[
					'id' => '547',
					'code' => 'tog',
					'name' => '{"fr":"tonga nyasa","en":"Nyasa Tonga","pt":"tongan\u00eas de Nyasa"}'
				],
				[
					'id' => '548',
					'code' => 'to',
					'name' => '{"fr":"tonguien","en":"Tongan","pt":"tongan\u00eas"}'
				],
				[
					'id' => '549',
					'code' => 'fit',
					'name' => '{"fr":"Tornedalen Finnish","en":"Tornedalen Finnish","pt":"Tornedalen Finnish"}'
				],
				[
					'id' => '550',
					'code' => 'tyv',
					'name' => '{"fr":"touva","en":"Tuvinian","pt":"tuviniano"}'
				],
				[
					'id' => '551',
					'code' => 'tkr',
					'name' => '{"fr":"Tsakhur","en":"Tsakhur","pt":"Tsakhur"}'
				],
				[
					'id' => '552',
					'code' => 'tsd',
					'name' => '{"fr":"Tsakonian","en":"Tsakonian","pt":"Tsakonian"}'
				],
				[
					'id' => '553',
					'code' => 'tsi',
					'name' => '{"fr":"tsimshian","en":"Tsimshian","pt":"tsimshian"}'
				],
				[
					'id' => '554',
					'code' => 'ts',
					'name' => '{"fr":"tsonga","en":"Tsonga","pt":"tsonga"}'
				],
				[
					'id' => '555',
					'code' => 'tn',
					'name' => '{"fr":"tswana","en":"Tswana","pt":"tswana"}'
				],
				[
					'id' => '556',
					'code' => 'tcy',
					'name' => '{"fr":"Tulu","en":"Tulu","pt":"Tulu"}'
				],
				[
					'id' => '557',
					'code' => 'tum',
					'name' => '{"fr":"tumbuka","en":"Tumbuka","pt":"tumbuka"}'
				],
				[
					'id' => '558',
					'code' => 'aeb',
					'name' => '{"fr":"Tunisian Arabic","en":"Tunisian Arabic","pt":"Tunisian Arabic"}'
				],
				[
					'id' => '559',
					'code' => 'tr',
					'name' => '{"fr":"turc","en":"Turkish","pt":"turco"}'
				],
				[
					'id' => '560',
					'code' => 'crh',
					'name' => '{"fr":"turc de Crim\u00e9e","en":"Crimean Turkish","pt":"turco da Crimeia"}'
				],
				[
					'id' => '561',
					'code' => 'ota',
					'name' => '{"fr":"turc ottoman","en":"Ottoman Turkish","pt":"turco otomano"}'
				],
				[
					'id' => '562',
					'code' => 'tk',
					'name' => '{"fr":"turkm\u00e8ne","en":"Turkmen","pt":"turcomeno"}'
				],
				[
					'id' => '563',
					'code' => 'tru',
					'name' => '{"fr":"Turoyo","en":"Turoyo","pt":"Turoyo"}'
				],
				[
					'id' => '564',
					'code' => 'tvl',
					'name' => '{"fr":"tuvalu","en":"Tuvalu","pt":"tuvaluano"}'
				],
				[
					'id' => '565',
					'code' => 'tw',
					'name' => '{"fr":"twi","en":"Twi","pt":"twi"}'
				],
				[
					'id' => '566',
					'code' => 'kcg',
					'name' => '{"fr":"tyap","en":"Tyap","pt":"tyap"}'
				],
				[
					'id' => '567',
					'code' => 'rom',
					'name' => '{"fr":"tzigane","en":"Romany","pt":"romani"}'
				],
				[
					'id' => '568',
					'code' => 'uk',
					'name' => '{"fr":"ukrainien","en":"Ukrainian","pt":"ucraniano"}'
				],
				[
					'id' => '569',
					'code' => 'umb',
					'name' => '{"fr":"umbundu","en":"Umbundu","pt":"umbundu"}'
				],
				[
					'id' => '570',
					'code' => 'vai',
					'name' => '{"fr":"va\u00ef","en":"Vai","pt":"vai"}'
				],
				[
					'id' => '571',
					'code' => 'rup',
					'name' => '{"fr":"valaque","en":"Aromanian","pt":"aromeno"}'
				],
				[
					'id' => '572',
					'code' => 've',
					'name' => '{"fr":"venda","en":"Venda","pt":"venda"}'
				],
				[
					'id' => '573',
					'code' => 'vec',
					'name' => '{"fr":"Venetian","en":"Venetian","pt":"Venetian"}'
				],
				[
					'id' => '574',
					'code' => 'vep',
					'name' => '{"fr":"Veps","en":"Veps","pt":"Veps"}'
				],
				[
					'id' => '575',
					'code' => 'vi',
					'name' => '{"fr":"vietnamien","en":"Vietnamese","pt":"vietnamita"}'
				],
				[
					'id' => '576',
					'code' => 'non',
					'name' => '{"fr":"vieux norrois","en":"Old Norse","pt":"n\u00f3rdico arcaico"}'
				],
				[
					'id' => '577',
					'code' => 'vo',
					'name' => '{"fr":"volapuk","en":"Volap\u00fck","pt":"volapuque"}'
				],
				[
					'id' => '578',
					'code' => 'vro',
					'name' => '{"fr":"V\u00f5ro","en":"V\u00f5ro","pt":"V\u00f5ro"}'
				],
				[
					'id' => '579',
					'code' => 'vot',
					'name' => '{"fr":"vote","en":"Votic","pt":"votic"}'
				],
				[
					'id' => '580',
					'code' => 'vun',
					'name' => '{"fr":"vunjo","en":"Vunjo","pt":"vunjo"}'
				],
				[
					'id' => '581',
					'code' => 'wal',
					'name' => '{"fr":"walamo","en":"Wolaytta","pt":"walamo"}'
				],
				[
					'id' => '582',
					'code' => 'wa',
					'name' => '{"fr":"wallon","en":"Walloon","pt":"val\u00e3o"}'
				],
				[
					'id' => '583',
					'code' => 'wae',
					'name' => '{"fr":"walser","en":"Walser","pt":"walser"}'
				],
				[
					'id' => '584',
					'code' => 'war',
					'name' => '{"fr":"waray","en":"Waray","pt":"waray"}'
				],
				[
					'id' => '585',
					'code' => 'wbp',
					'name' => '{"fr":"Warlpiri","en":"Warlpiri","pt":"Warlpiri"}'
				],
				[
					'id' => '586',
					'code' => 'was',
					'name' => '{"fr":"washo","en":"Washo","pt":"washo"}'
				],
				[
					'id' => '587',
					'code' => 'guc',
					'name' => '{"fr":"Wayuu","en":"Wayuu","pt":"Wayuu"}'
				],
				[
					'id' => '588',
					'code' => 'vls',
					'name' => '{"fr":"West Flemish","en":"West Flemish","pt":"West Flemish"}'
				],
				[
					'id' => '589',
					'code' => 'mrj',
					'name' => '{"fr":"Western Mari","en":"Western Mari","pt":"Western Mari"}'
				],
				[
					'id' => '590',
					'code' => 'wo',
					'name' => '{"fr":"wolof","en":"Wolof","pt":"u\u00f3lofe"}'
				],
				[
					'id' => '591',
					'code' => 'wuu',
					'name' => '{"fr":"Wu Chinese","en":"Wu Chinese","pt":"Wu Chinese"}'
				],
				[
					'id' => '592',
					'code' => 'xh',
					'name' => '{"fr":"xhosa","en":"Xhosa","pt":"xosa"}'
				],
				[
					'id' => '593',
					'code' => 'hsn',
					'name' => '{"fr":"Xiang Chinese","en":"Xiang Chinese","pt":"Xiang Chinese"}'
				],
				[
					'id' => '594',
					'code' => 'yav',
					'name' => '{"fr":"yangben","en":"Yangben","pt":"yangben"}'
				],
				[
					'id' => '595',
					'code' => 'yao',
					'name' => '{"fr":"yao","en":"Yao","pt":"yao"}'
				],
				[
					'id' => '596',
					'code' => 'yap',
					'name' => '{"fr":"yapois","en":"Yapese","pt":"yapese"}'
				],
				[
					'id' => '597',
					'code' => 'ybb',
					'name' => '{"fr":"yemba","en":"Yemba","pt":"yemba"}'
				],
				[
					'id' => '598',
					'code' => 'ii',
					'name' => '{"fr":"yi du Sichuan","en":"Sichuan Yi","pt":"sichuan yi"}'
				],
				[
					'id' => '599',
					'code' => 'yi',
					'name' => '{"fr":"yiddish","en":"Yiddish","pt":"i\u00eddiche"}'
				],
				[
					'id' => '600',
					'code' => 'yo',
					'name' => '{"fr":"yoruba","en":"Yoruba","pt":"ioruba"}'
				],
				[
					'id' => '601',
					'code' => 'zap',
					'name' => '{"fr":"zapot\u00e8que","en":"Zapotec","pt":"zapoteca"}'
				],
				[
					'id' => '602',
					'code' => 'dje',
					'name' => '{"fr":"zarma","en":"Zarma","pt":"zarma"}'
				],
				[
					'id' => '603',
					'code' => 'zza',
					'name' => '{"fr":"zazaki","en":"Zaza","pt":"zaza"}'
				],
				[
					'id' => '604',
					'code' => 'zea',
					'name' => '{"fr":"Zeelandic","en":"Zeelandic","pt":"Zeelandic"}'
				],
				[
					'id' => '605',
					'code' => 'zen',
					'name' => '{"fr":"zenaga","en":"Zenaga","pt":"zenaga"}'
				],
				[
					'id' => '606',
					'code' => 'za',
					'name' => '{"fr":"zhuang","en":"Zhuang","pt":"zhuang"}'
				],
				[
					'id' => '607',
					'code' => 'gbz',
					'name' => '{"fr":"Zoroastrian Dari","en":"Zoroastrian Dari","pt":"Zoroastrian Dari"}'
				],
				[
					'id' => '608',
					'code' => 'zu',
					'name' => '{"fr":"zoulou","en":"Zulu","pt":"zulu"}'
				],
				[
					'id' => '609',
					'code' => 'zun',
					'name' => '{"fr":"zuni","en":"Zuni","pt":"zunhi"}'
				],
			];
		if (Language::count() < 1) {
			foreach ($languages as $l) {
				DB::table('languages')->insert(
					$l
				);
			}
		}
	}
}
