<?php

namespace Database\Seeders;

use App\Models\Country;
use Database\Factories\CountryFactory;
use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Country::insert([["id" => "7","code" => "ABW","name" => "Aruba","phone_code" => "297","citizen" => "Aruban",]
		,["id" => "8","code" => "AFG","name" => "Afghanistan","phone_code" => "93","citizen" => "Afghan",]
		,["id" => "9","code" => "AGO","name" => "Angola","phone_code" => "244","citizen" => "Angolan",]
		,["id" => "10","code" => "AIA","name" => "Anguilla","phone_code" => "1","citizen" => "Anguillian",]
		,["id" => "11","code" => "ALB","name" => "Albania","phone_code" => "355","citizen" => "Albanian",]
		,["id" => "12","code" => "AND","name" => "Andorra","phone_code" => "376","citizen" => "Andorran",]
		,["id" => "13","code" => "ANT","name" => "Netherlands Antilles","phone_code" => "599","citizen" => "Netherlands Antillean",]
		,["id" => "14","code" => "ARE","name" => "United Arab Emirates","phone_code" => "971","citizen" => "Emirati",]
		,["id" => "15","code" => "ARG","name" => "Argentina","phone_code" => "54","citizen" => "Argentine/Argentinian",]
		,["id" => "16","code" => "ARM","name" => "Armenia","phone_code" => "374","citizen" => "Armenian",]
		,["id" => "17","code" => "ASM","name" => "American Samoa","phone_code" => "1","citizen" => "American Samoan",]
		,["id" => "18","code" => "ATA","name" => "Antarctica","phone_code" => "672","citizen" => "Antarctican",]
		,["id" => "19","code" => "ATG","name" => "Antigua and Barbuda","phone_code" => "1","citizen" => "Antiguan/Barbudan",]
		,["id" => "20","code" => "AUS","name" => "Australia","phone_code" => "61","citizen" => "Australian",]
		,["id" => "21","code" => "AUT","name" => "Austria","phone_code" => "43","citizen" => "Austrian",]
		,["id" => "22","code" => "AZE","name" => "Azerbaijan","phone_code" => "994","citizen" => "Azerbaijani",]
		,["id" => "23","code" => "BDI","name" => "Burundi","phone_code" => "257","citizen" => "Burundian",]
		,["id" => "24","code" => "BEL","name" => "Belgium","phone_code" => "375","citizen" => "Belgian",]
		,["id" => "25","code" => "BEN","name" => "Benin","phone_code" => "229","citizen" => "Beninese",]
		,["id" => "26","code" => "BFA","name" => "Burkina Faso","phone_code" => "226","citizen" => "Burkinabé",]
		,["id" => "27","code" => "BGD","name" => "Bangladesh","phone_code" => "880","citizen" => "Bangladeshi",]
		,["id" => "28","code" => "BGR","name" => "Bulgaria","phone_code" => "359","citizen" => "Bulgarian",]
		,["id" => "29","code" => "BHR","name" => "Bahrain","phone_code" => "973","citizen" => "Bahraini",]
		,["id" => "30","code" => "BHS","name" => "Bahamas","phone_code" => "1242","citizen" => "Bahamian",]
		,["id" => "31","code" => "BIH","name" => "Bosnia and Herzegovina","phone_code" => "387","citizen" => "Bosnian",]
		,["id" => "32","code" => "BLR","name" => "Belarus","phone_code" => "375","citizen" => "Belarusian",]
		,["id" => "33","code" => "BLZ","name" => "Belize","phone_code" => "501","citizen" => "Belizean",]
		,["id" => "34","code" => "BMU","name" => "Bermuda","phone_code" => "1","citizen" => "Bermudian",]
		,["id" => "35","code" => "BOL","name" => "Bolivia","phone_code" => "591","citizen" => "Bolivian",]
		,["id" => "36","code" => "BRA","name" => "Brazil","phone_code" => "55","citizen" => "Brazilian",]
		,["id" => "37","code" => "BRB","name" => "Barbados","phone_code" => "1246","citizen" => "Barbadian",]
		,["id" => "38","code" => "BRN","name" => "Brunei Darussalm","phone_code" => "673","citizen" => "Bruneian",]
		,["id" => "39","code" => "BTN","name" => "Bhutan","phone_code" => "975","citizen" => "Bhutanese",]
		,["id" => "40","code" => "BWA","name" => "Botswana","phone_code" => "267","citizen" => "Botswanan",]
		,["id" => "41","code" => "CAF","name" => "Central African Republic","phone_code" => "236","citizen" => "Central African",]
		,["id" => "42","code" => "CAN","name" => "Canada","phone_code" => "1","citizen" => "Canadian",]
		,["id" => "43","code" => "CHA","name" => "Chad","phone_code" => "235","citizen" => "Chadian",]
		,["id" => "44","code" => "CHE","name" => "Switzerland","phone_code" => "41","citizen" => "Swiss",]
		,["id" => "45","code" => "CHL","name" => "Chile","phone_code" => "56","citizen" => "Chilean",]
		,["id" => "46","code" => "CHN","name" => "China","phone_code" => "86","citizen" => "Chinese",]
		,["id" => "47","code" => "CIV","name" => "Cote d'ivoire","phone_code" => "255","citizen" => "Ivorian",]
		,["id" => "48","code" => "CMR","name" => "Cameroon","phone_code" => "237","citizen" => "Cameroonian",]
		,["id" => "49","code" => "COG","name" => "Congo","phone_code" => "242","citizen" => "Congolese",]
		,["id" => "50","code" => "COK","name" => "Cook Islands","phone_code" => "682","citizen" => "Cook Islander",]
		,["id" => "51","code" => "COL","name" => "Colombia","phone_code" => "57","citizen" => "Colombian",]
		,["id" => "52","code" => "COM","name" => "Comoros","phone_code" => "269","citizen" => "Comoran",]
		,["id" => "53","code" => "CPV","name" => "Cape Verde","phone_code" => "238","citizen" => "Cape Verdean",]
		,["id" => "54","code" => "CRI","name" => "Costa Rica","phone_code" => "506","citizen" => "Costa Rican",]
		,["id" => "55","code" => "CUB","name" => "Cuba","phone_code" => "53","citizen" => "Cuban",]
		,["id" => "56","code" => "CXR","name" => "Christmas Island","phone_code" => "64","citizen" => "Christmas Islander",]
		,["id" => "57","code" => "CYM","name" => "Cayman Islands","phone_code" => "1345","citizen" => "Caymanian",]
		,["id" => "58","code" => "CYP","name" => "Cyprus","phone_code" => "357","citizen" => "Cypriot",]
		,["id" => "59","code" => "DEU","name" => "Germany","phone_code" => "49","citizen" => "German",]
		,["id" => "60","code" => "DJI","name" => "Djibouti","phone_code" => "253","citizen" => "Djiboutian",]
		,["id" => "61","code" => "DMA","name" => "Dominica","phone_code" => "1767","citizen" => "Dominican",]
		,["id" => "62","code" => "DNK","name" => "Denmark","phone_code" => "45","citizen" => "Danish",]
		,["id" => "63","code" => "DOM","name" => "Dominican Republic","phone_code" => "1809","citizen" => "Dominican",]
		,["id" => "64","code" => "DZA","name" => "Algeria","phone_code" => "213","citizen" => "Algerian",]
		,["id" => "65","code" => "ECU","name" => "Ecuador","phone_code" => "593","citizen" => "Ecuadorian",]
		,["id" => "66","code" => "EGY","name" => "Egypt","phone_code" => "20","citizen" => "Egyptian",]
		,["id" => "67","code" => "ERI","name" => "Eritrea","phone_code" => "291","citizen" => "Eritrean",]
		,["id" => "68","code" => "ESH","name" => "Western Sahara","phone_code" => "212","citizen" => "Sahrawi",]
		,["id" => "69","code" => "ESP","name" => "Spain","phone_code" => "34","citizen" => "Spanish",]
		,["id" => "70","code" => "EST","name" => "Estonia","phone_code" => "372","citizen" => "Estonian",]
		,["id" => "71","code" => "ETH","name" => "Ethiopia","phone_code" => "251","citizen" => "Ethiopian",]
		,["id" => "72","code" => "FIN","name" => "Finland","phone_code" => "358","citizen" => "Finnish",]
		,["id" => "73","code" => "FJI","name" => "Fiji Islands","phone_code" => "679","citizen" => "Fijian",]
		,["id" => "74","code" => "FLK","name" => "Falkland Islands","phone_code" => "500","citizen" => "Falklander",]
		,["id" => "75","code" => "FRA","name" => "France","phone_code" => "33","citizen" => "French",]
		,["id" => "76","code" => "FRO","name" => "Faroe Islands","phone_code" => "298","citizen" => "Faroese",]
		,["id" => "77","code" => "FSM","name" => "Micronesia","phone_code" => "691","citizen" => "Micronesian",]
		,["id" => "78","code" => "GAB","name" => "Gabon","phone_code" => "241","citizen" => "Gabonese",]
		,["id" => "79","code" => "GBR","name" => "United Kingdom","phone_code" => "44","citizen" => "British",]
		,["id" => "80","code" => "GEO","name" => "Georgia","phone_code" => "995","citizen" => "Georgian",]
		,["id" => "81","code" => "GHA","name" => "Ghana","phone_code" => "233","citizen" => "Ghanaian",]
		,["id" => "82","code" => "GIB","name" => "Gibraltar","phone_code" => "350","citizen" => "Gibraltarian",]
		,["id" => "83","code" => "GIN","name" => "Guinea","phone_code" => "224","citizen" => "Guinean",]
		,["id" => "84","code" => "GLP","name" => "Guadeloupe","phone_code" => "590","citizen" => "Guadeloupean",]
		,["id" => "85","code" => "GMB","name" => "Gambia","phone_code" => "220","citizen" => "Gambian",]
		,["id" => "86","code" => "GNB","name" => "Guinea-Bissau","phone_code" => "245","citizen" => "Guinean",]
		,["id" => "87","code" => "GNQ","name" => "Equatorial Guinea","phone_code" => "240","citizen" => "Equatorial Guinean",]
		,["id" => "88","code" => "GRC","name" => "Greece","phone_code" => "30","citizen" => "Greek",]
		,["id" => "89","code" => "GRD","name" => "Grenada","phone_code" => "1473","citizen" => "Grenadian",]
		,["id" => "90","code" => "GRL","name" => "Greenland","phone_code" => "299","citizen" => "Greenlandic",]
		,["id" => "91","code" => "GTM","name" => "Guatemala","phone_code" => "502","citizen" => "Guatemalan",]
		,["id" => "92","code" => "GUF","name" => "French Guiana","phone_code" => "594","citizen" => "French Guianese",]
		,["id" => "93","code" => "GUM","name" => "Guam","phone_code" => "1671","citizen" => "Guamanian",]
		,["id" => "94","code" => "GUY","name" => "Guyana","phone_code" => "592","citizen" => "Guyanese",]
		,["id" => "95","code" => "HKG","name" => "Hong Kong","phone_code" => "852","citizen" => "Hong Konger",]
		,["id" => "96","code" => "HND","name" => "Honduras","phone_code" => "504","citizen" => "Honduran",]
		,["id" => "97","code" => "HRV","name" => "Croatia","phone_code" => "385","citizen" => "Croatian",]
		,["id" => "98","code" => "HTI","name" => "Haiti","phone_code" => "509","citizen" => "Haitian",]
		,["id" => "99","code" => "HUN","name" => "Hungary","phone_code" => "36","citizen" => "Hungarian",]
		,["id" => "100","code" => "IDN","name" => "Indonesia","phone_code" => "62","citizen" => "Indonesian",]
		,["id" => "101","code" => "IND","name" => "India","phone_code" => "91","citizen" => "Indian",]
		,["id" => "102","code" => "IOT","name" => "British Indian Ocean Territory","phone_code" => "246","citizen" => "British Indian Ocean Territory",]
		,["id" => "103","code" => "IRL","name" => "Ireland","phone_code" => "353","citizen" => "Irish",]
		,["id" => "104","code" => "IRN","name" => "Iran","phone_code" => "98","citizen" => "Iranian",]
		,["id" => "105","code" => "IRQ","name" => "Iraq","phone_code" => "964","citizen" => "Iraqi",]
		,["id" => "106","code" => "ISL","name" => "Iceland","phone_code" => "354","citizen" => "Icelander",]
		,["id" => "107","code" => "ISR","name" => "Israel","phone_code" => "972","citizen" => "Israeli",]
		,["id" => "108","code" => "ITA","name" => "Italy","phone_code" => "39","citizen" => "Italian",]
		,["id" => "109","code" => "JAM","name" => "Jamaica","phone_code" => "1","citizen" => "Jamaican",]
		,["id" => "110","code" => "JOR","name" => "Jordan","phone_code" => "962","citizen" => "Jordanian",]
		,["id" => "111","code" => "JPN","name" => "Japan","phone_code" => "81","citizen" => "Japanese",]
		,["id" => "112","code" => "KAZ","name" => "Kazakhstan","phone_code" => "7","citizen" => "Kazakhstani",]
		,["id" => "113","code" => "KEN","name" => "Kenya","phone_code" => "254","citizen" => "Kenyan",]
		,["id" => "114","code" => "KGZ","name" => "Kyrgyzstan","phone_code" => "996","citizen" => "Kyrgyz",]
		,["id" => "115","code" => "KHM","name" => "Cambodia","phone_code" => "855","citizen" => "Cambodian",]
		,["id" => "116","code" => "KIR","name" => "Kiribati","phone_code" => "686","citizen" => "I-Kiribati",]
		,["id" => "117","code" => "KNA","name" => "Saint Kitts and Nevis","phone_code" => "1869","citizen" => "Kittitian/Nevisian",]
		,["id" => "118","code" => "KOR","name" => "South Korea","phone_code" => "82","citizen" => "South Korean",]
		,["id" => "119","code" => "KWT","name" => "Kuwait","phone_code" => "965","citizen" => "Kuwaiti",]
		,["id" => "120","code" => "LAO","name" => "Laos","phone_code" => "856","citizen" => "Laotian",]
		,["id" => "121","code" => "LBN","name" => "Lebanon","phone_code" => "961","citizen" => "Lebanese",]
		,["id" => "122","code" => "LBR","name" => "Liberia","phone_code" => "231","citizen" => "Liberian",]
		,["id" => "123","code" => "LBY","name" => "Libyan Arab Jamahiriya","phone_code" => "218","citizen" => "Libyan",]
		,["id" => "124","code" => "LCA","name" => "Saint Lucia","phone_code" => "1758","citizen" => "Saint Lucian",]
		,["id" => "125","code" => "LIE","name" => "Liechtenstein","phone_code" => "423","citizen" => "Liechtensteiner",]
		,["id" => "126","code" => "LKA","name" => "Sri Lanka","phone_code" => "94","citizen" => "Sri Lankan",]
		,["id" => "127","code" => "LSO","name" => "Lesotho","phone_code" => "266","citizen" => "Mosotho",]
		,["id" => "128","code" => "LTU","name" => "Lithuania","phone_code" => "370","citizen" => "Lithuanian",]
		,["id" => "129","code" => "LUX","name" => "Luxembourg","phone_code" => "352","citizen" => "Luxembourgish",]
		,["id" => "130","code" => "LVA","name" => "Latvia","phone_code" => "371","citizen" => "Latvian",]
		,["id" => "131","code" => "MAC","name" => "Macao","phone_code" => "853","citizen" => "Macaense",]
		,["id" => "132","code" => "MAR","name" => "Morocco","phone_code" => "212","citizen" => "Moroccan",]
		,["id" => "133","code" => "MCO","name" => "Monaco","phone_code" => "377","citizen" => "Monegasque",]
		,["id" => "134","code" => "MDA","name" => "Moldova","phone_code" => "373","citizen" => "Moldovan",]
		,["id" => "135","code" => "MDG","name" => "Madagascar","phone_code" => "261","citizen" => "Malagasy",]
		,["id" => "136","code" => "MDV","name" => "Maldives","phone_code" => "960","citizen" => "Maldivian",]
		,["id" => "137","code" => "MEX","name" => "Mexico","phone_code" => "52","citizen" => "Mexican",]
		,["id" => "138","code" => "MHL","name" => "Marshall Islands","phone_code" => "692","citizen" => "Marshallese",]
		,["id" => "139","code" => "MKD","name" => "Macedonia","phone_code" => "389","citizen" => "Macedonian",]
		,["id" => "140","code" => "MLI","name" => "Mali","phone_code" => "223","citizen" => "Malian",]
		,["id" => "141","code" => "MLT","name" => "Malta","phone_code" => "356","citizen" => "Maltese",]
		,["id" => "142","code" => "MMR","name" => "Myanmar","phone_code" => "95","citizen" => "Myanmarese",]
		,["id" => "143","code" => "MNG","name" => "Mongolia","phone_code" => "976","citizen" => "Mongolian",]
		,["id" => "144","code" => "MNP","name" => "Northern Mariana Islands","phone_code" => "1","citizen" => "Northern Marianan",]
		,["id" => "145","code" => "MOZ","name" => "Mozambique","phone_code" => "258","citizen" => "Mozambican",]
		,["id" => "146","code" => "MRT","name" => "Mauritania","phone_code" => "222","citizen" => "Mauritanian",]
		,["id" => "147","code" => "MSR","name" => "Montserrat","phone_code" => "1","citizen" => "Montserratian",]
		,["id" => "148","code" => "MTQ","name" => "Martinique","phone_code" => "596","citizen" => "Martinican",]
		,["id" => "149","code" => "MUS","name" => "Mauritius","phone_code" => "230","citizen" => "Mauritian",]
		,["id" => "150","code" => "MWI","name" => "Malawi","phone_code" => "265","citizen" => "Malawian",]
		,["id" => "151","code" => "MYS","name" => "Malaysia","phone_code" => "60","citizen" => "Malaysian",]
		,["id" => "152","code" => "MYT","name" => "Mayotte","phone_code" => "262","citizen" => "Mahoran",]
		,["id" => "153","code" => "NAM","name" => "Namibia","phone_code" => "264","citizen" => "Namibian",]
		,["id" => "154","code" => "NCL","name" => "New Caledonia","phone_code" => "687","citizen" => "New Caledonian",]
		,["id" => "155","code" => "NER","name" => "Niger","phone_code" => "227","citizen" => "Nigerien",]
		,["id" => "156","code" => "NFK","name" => "Norfolk Island","phone_code" => "672","citizen" => "Norfolk Islander",]
		,["id" => "157","code" => "NGA","name" => "Nigeria","phone_code" => "234","citizen" => "Nigerian",]
		,["id" => "158","code" => "NIC","name" => "Nicaragua","phone_code" => "505","citizen" => "Nicaraguan",]
		,["id" => "159","code" => "NIU","name" => "Niue","phone_code" => "683","citizen" => "Niuean",]
		,["id" => "160","code" => "NLD","name" => "Netherlands","phone_code" => "31","citizen" => "Dutch",]
		,["id" => "161","code" => "NOR","name" => "Norway","phone_code" => "47","citizen" => "Norwegian",]
		,["id" => "162","code" => "NPL","name" => "Nepal","phone_code" => "977","citizen" => "Nepalese",]
		,["id" => "163","code" => "NRU","name" => "Nauru","phone_code" => "674","citizen" => "Nauruan",]
		,["id" => "164","code" => "NZL","name" => "New Zealand","phone_code" => "64","citizen" => "New Zealander",]
		,["id" => "165","code" => "OMN","name" => "Oman","phone_code" => "968","citizen" => "Omani",]
		,["id" => "166","code" => "PAK","name" => "Pakistan","phone_code" => "92","citizen" => "Pakistani",]
		,["id" => "167","code" => "PAN","name" => "Panama","phone_code" => "507","citizen" => "Panamanian",]
		,["id" => "168","code" => "PER","name" => "Peru","phone_code" => "51","citizen" => "Peruvian",]
		,["id" => "169","code" => "PHL","name" => "Philippines","phone_code" => "63","citizen" => "Filipino",]
		,["id" => "170","code" => "PLW","name" => "Palau","phone_code" => "680","citizen" => "Palauan",]
		,["id" => "171","code" => "PNG","name" => "Papua New Guinea","phone_code" => "675","citizen" => "Papua New Guinean",]
		,["id" => "172","code" => "POL","name" => "Poland","phone_code" => "48","citizen" => "Polish",]
		,["id" => "173","code" => "PRK","name" => "North Korea","phone_code" => "850","citizen" => "North Korean",]
		,["id" => "174","code" => "PRT","name" => "Portugal","phone_code" => "351","citizen" => "Portuguese",]
		,["id" => "175","code" => "PRY","name" => "Paraguay","phone_code" => "595","citizen" => "Paraguayan",]
		,["id" => "176","code" => "PSE","name" => "Palestine","phone_code" => "970","citizen" => "Palestinian",]
		,["id" => "177","code" => "PYF","name" => "French Polynesia","phone_code" => "689","citizen" => "French Polynesian",]
		,["id" => "178","code" => "QAT","name" => "Qatar","phone_code" => "974","citizen" => "Qatari",]
		,["id" => "179","code" => "ROM","name" => "Romania","phone_code" => "40","citizen" => "Romanian",]
		,["id" => "180","code" => "RUS","name" => "Russia","phone_code" => "7","citizen" => "Russian",]
		,["id" => "181","code" => "RWA","name" => "Rwanda","phone_code" => "250","citizen" => "Rwandan",]
		,["id" => "182","code" => "SAU","name" => "Saudi Arabia","phone_code" => "966","citizen" => "Saudi",]
		,["id" => "183","code" => "SDN","name" => "Sudan","phone_code" => "249","citizen" => "Sudanese",]
		,["id" => "184","code" => "SEN","name" => "Senegal","phone_code" => "221","citizen" => "Senegalese",]
		,["id" => "185","code" => "SGP","name" => "Singapore","phone_code" => "65","citizen" => "Singaporean",]
		,["id" => "186","code" => "SHN","name" => "Saint Helena","phone_code" => "290","citizen" => "Saint Helenian",]
		,["id" => "187","code" => "SLB","name" => "Solomon Islands","phone_code" => "677","citizen" => "Solomon Islander",]
		,["id" => "188","code" => "SLE","name" => "Sierra Leone","phone_code" => "232","citizen" => "Sierra Leonean",]
		,["id" => "189","code" => "SLV","name" => "El Salvador","phone_code" => "503","citizen" => "Salvadoran",]
		,["id" => "190","code" => "SMR","name" => "San Marino","phone_code" => "374","citizen" => "Sammarinese",]
		,["id" => "191","code" => "SOM","name" => "Somalia","phone_code" => "252","citizen" => "Somali",]
		,["id" => "192","code" => "SPM","name" => "Saint Pierre and Miquelon","phone_code" => "508","citizen" => "Saint Pierre and Miquelonese",]
		,["id" => "193","code" => "STP","name" => "Sao Tome and Principe","phone_code" => "239","citizen" => "São Toméan",]
		,["id" => "194","code" => "SUR","name" => "Suriname","phone_code" => "597","citizen" => "Surinamese",]
		,["id" => "195","code" => "SVK","name" => "Slovakia","phone_code" => "421","citizen" => "Slovak",]
		,["id" => "196","code" => "SVN","name" => "Slovenia","phone_code" => "386","citizen" => "Slovenian",]
		,["id" => "197","code" => "SWE","name" => "Sweden","phone_code" => "46","citizen" => "Swedish",]
		,["id" => "198","code" => "SWZ","name" => "Swaziland","phone_code" => "41","citizen" => "Swazi",]
		,["id" => "199","code" => "SYC","name" => "Seychelles","phone_code" => "248","citizen" => "Seychellois",]
		,["id" => "200","code" => "SYR","name" => "Syria","phone_code" => "963","citizen" => "Syrian",]
		,["id" => "201","code" => "TGO","name" => "Togo","phone_code" => "228","citizen" => "Togolese",]
		,["id" => "202","code" => "THA","name" => "Thailand","phone_code" => "66","citizen" => "Thai",]
		,["id" => "203","code" => "TJK","name" => "Tajikistan","phone_code" => "992","citizen" => "Tajik",]
		,["id" => "204","code" => "TKL","name" => "Tokelau","phone_code" => "690","citizen" => "Tokelauan",]
		,["id" => "205","code" => "TMP","name" => "East Timor","phone_code" => "670","citizen" => "Timorese",]
		,["id" => "206","code" => "TON","name" => "Tonga","phone_code" => "676","citizen" => "Tongan",]
		,["id" => "207","code" => "TTO","name" => "Trinidad and Tobago","phone_code" => "1","citizen" => "Trinidadian/Tobagonian",]
		,["id" => "208","code" => "TUR","name" => "Turkey","phone_code" => "90","citizen" => "Turkish",]
		,["id" => "209","code" => "TUV","name" => "Tuvalu","phone_code" => "688","citizen" => "Tuvaluan",]
		,["id" => "210","code" => "TWN","name" => "Taiwan","phone_code" => "886","citizen" => "Taiwanese",]
		,["id" => "211","code" => "TZA","name" => "Tanzania","phone_code" => "255","citizen" => "Tanzanian",]
		,["id" => "212","code" => "UGA","name" => "Uganda","phone_code" => "256","citizen" => "Ugandan",]
		,["id" => "213","code" => "UKR","name" => "Ukraine","phone_code" => "380","citizen" => "Ukrainian",]
		,["id" => "214","code" => "URY","name" => "Uruguay","phone_code" => "598","citizen" => "Uruguayan",]
		,["id" => "215","code" => "USA","name" => "United States","phone_code" => "1","citizen" => "American",]
		,["id" => "216","code" => "UZB","name" => "Uzbekistan","phone_code" => "998","citizen" => "Uzbek",]
		,["id" => "217","code" => "VCT","name" => "Saint Vincent and the Grenadines","phone_code" => "1784","citizen" => "Vincentian",]
		,["id" => "218","code" => "VEN","name" => "Venezuela","phone_code" => "58","citizen" => "Venezuelan",]
		,["id" => "219","code" => "VGB","name" => "British Virgin Island","phone_code" => "1","citizen" => "British Virgin Islander",]
		,["id" => "220","code" => "VIR","name" => "U.S. Virgin Islands","phone_code" => "1340","citizen" => "U.S. Virgin Islander",]
		,["id" => "221","code" => "VNM","name" => "Vietnam","phone_code" => "84","citizen" => "Vietnamese",]
		,["id" => "222","code" => "VUT","name" => "Vanuatu","phone_code" => "678","citizen" => "Ni-Vanuatu",]
		,["id" => "223","code" => "WLF","name" => "Wallis and Futuna","phone_code" => "681","citizen" => "Wallisian/Futunan",]
		,["id" => "224","code" => "WSM","name" => "Samoa","phone_code" => "685","citizen" => "Samoan",]
		,["id" => "225","code" => "YEM","name" => "Yemen","phone_code" => "967","citizen" => "Yemeni",]
		,["id" => "226","code" => "ZAF","name" => "South Africa","phone_code" => "27","citizen" => "South African",]
		,["id" => "227","code" => "ZMB","name" => "Zambia","phone_code" => "260","citizen" => "Zambian",]
		,["id" => "228","code" => "ZWE","name" => "Zimbabwe","phone_code" => "263","citizen" => "Zimbabwean",]
		]);

	}
}
