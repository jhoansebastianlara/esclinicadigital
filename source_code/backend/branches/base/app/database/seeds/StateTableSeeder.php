<?php

class StateTableSeeder extends Seeder {
 
    public function run() {
        DB::table('state')->truncate();
 		
 		$states = [
 			[
				"stateId" => 1,
				"countryId" => 14,
				"name" => "Victoria",
				"code" => "VI"
			], [
				"stateId" => 2,
				"countryId" => 14,
				"name" => "Tasmania",
				"code" => "TS"
			], [
				"stateId" => 3,
				"countryId" => 14,
				"name" => "Queensland",
				"code" => "QL"
			], [
				"stateId" => 4,
				"countryId" => 14,
				"name" => "New South Wales",
				"code" => "NS"
			], [
				"stateId" => 5,
				"countryId" => 14,
				"name" => "South Australia",
				"code" => "SA"
			], [
				"stateId" => 6,
				"countryId" => 14,
				"name" => "Western Australia",
				"code" => "WA"
			], [
				"stateId" => 7,
				"countryId" => 14,
				"name" => "Northern Territory",
				"code" => "NT"
			], [
				"stateId" => 8,
				"countryId" => 33,
				"name" => "Acre",
				"code" => "AC"
			], [
				"stateId" => 10,
				"countryId" => 33,
				"name" => "Amapá",
				"code" => "AP"
			], [
				"stateId" => 11,
				"countryId" => 33,
				"name" => "Bahia",
				"code" => "BA"
			], [
				"stateId" => 12,
				"countryId" => 33,
				"name" => "Goiás",
				"code" => "GO"
			], [
				"stateId" => 13,
				"countryId" => 33,
				"name" => "Piauí",
				"code" => "PI"
			], [
				"stateId" => 14,
				"countryId" => 33,
				"name" => "Ceará",
				"code" => "CE"
			], [
				"stateId" => 15,
				"countryId" => 33,
				"name" => "Paraná",
				"code" => "PR"
			], [
				"stateId" => 16,
				"countryId" => 33,
				"name" => "Alagoas",
				"code" => "AL"
			], [
				"stateId" => 17,
				"countryId" => 33,
				"name" => "Paraíba",
				"code" => "PB"
			], [
				"stateId" => 18,
				"countryId" => 33,
				"name" => "Roraima",
				"code" => "RR"
			], [
				"stateId" => 19,
				"countryId" => 33,
				"name" => "Sergipe",
				"code" => "SE"
			], [
				"stateId" => 20,
				"countryId" => 33,
				"name" => "Amazonas",
				"code" => "AM"
			], [
				"stateId" => 21,
				"countryId" => 33,
				"name" => "Maranhão",
				"code" => "MA"
			], [
				"stateId" => 22,
				"countryId" => 33,
				"name" => "Rondônia",
				"code" => "RO"
			], [
				"stateId" => 24,
				"countryId" => 33,
				"name" => "São Paulo",
				"code" => "SP"
			], [
				"stateId" => 25,
				"countryId" => 33,
				"name" => "Tocantins",
				"code" => "TO"
			], [
				"stateId" => 26,
				"countryId" => 33,
				"name" => "Mato Grosso",
				"code" => "MT"
			], [
				"stateId" => 27,
				"countryId" => 33,
				"name" => "Minas Gerais",
				"code" => "MG"
			], [
				"stateId" => 28,
				"countryId" => 33,
				"name" => "Espírito Santo",
				"code" => "ES"
			], [
				"stateId" => 29,
				"countryId" => 33,
				"name" => "Rio de Janeiro",
				"code" => "RJ"
			], [
				"stateId" => 30,
				"countryId" => 33,
				"name" => "Santa Catarina",
				"code" => "SC"
			], [
				"stateId" => 32,
				"countryId" => 33,
				"name" => "Rio Grande do Sul",
				"code" => "RS"
			], [
				"stateId" => 33,
				"countryId" => 33,
				"name" => "Mato Grosso do Sul",
				"code" => "MS"
			], [
				"stateId" => 34,
				"countryId" => 33,
				"name" => "Rio Grande do Norte",
				"code" => "RN"
			], [
				"stateId" => 35,
				"countryId" => 43,
				"name" => "Quebec",
				"code" => "QC"
			], [
				"stateId" => 36,
				"countryId" => 43,
				"name" => "Alberta",
				"code" => "AB"
			], [
				"stateId" => 37,
				"countryId" => 43,
				"name" => "Ontario",
				"code" => "ON"
			], [
				"stateId" => 38,
				"countryId" => 43,
				"name" => "Manitoba",
				"code" => "MB"
			], [
				"stateId" => 39,
				"countryId" => 43,
				"name" => "Nova Scotia",
				"code" => "NS"
			], [
				"stateId" => 40,
				"countryId" => 43,
				"name" => "Saskatchewan",
				"code" => "SK"
			], [
				"stateId" => 41,
				"countryId" => 43,
				"name" => "Newfoundland and Labrador",
				"code" => "NF"
			], [
				"stateId" => 42,
				"countryId" => 43,
				"name" => "New Brunswick",
				"code" => "NB"
			], [
				"stateId" => 43,
				"countryId" => 43,
				"name" => "British Columbia",
				"code" => "BC"
			], [
				"stateId" => 45,
				"countryId" => 43,
				"name" => "Prince Edward Island",
				"code" => "PE"
			], [
				"stateId" => 46,
				"countryId" => 43,
				"name" => "Northwest Territories",
				"code" => "NT"
			], [
				"stateId" => 49,
				"countryId" => 114,
				"name" => "Bali",
				"code" => "BA"
			], [
				"stateId" => 56,
				"countryId" => 159,
				"name" => "Sonora",
				"code" => "SO"
			], [
				"stateId" => 59,
				"countryId" => 159,
				"name" => "Jalisco",
				"code" => "JA"
			], [
				"stateId" => 60,
				"countryId" => 159,
				"name" => "Hidalgo",
				"code" => "HI"
			], [
				"stateId" => 61,
				"countryId" => 159,
				"name" => "Morelos",
				"code" => "MR"
			], [
				"stateId" => 62,
				"countryId" => 159,
				"name" => "Chiapas",
				"code" => "CP"
			], [
				"stateId" => 63,
				"countryId" => 159,
				"name" => "Tabasco",
				"code" => "TB"
			], [
				"stateId" => 66,
				"countryId" => 159,
				"name" => "Guerrero",
				"code" => "GR"
			], [
				"stateId" => 69,
				"countryId" => 159,
				"name" => "Nuevo Leon",
				"code" => "NL"
			], [
				"stateId" => 70,
				"countryId" => 159,
				"name" => "Tamaulipas",
				"code" => "TM"
			], [
				"stateId" => 71,
				"countryId" => 159,
				"name" => "Guanajuato",
				"code" => "GJ"
			], [
				"stateId" => 72,
				"countryId" => 159,
				"name" => "Quintana Roo",
				"code" => "QR"
			], [
				"stateId" => 73,
				"countryId" => 159,
				"name" => "Baja California",
				"code" => "BN"
			], [
				"stateId" => 74,
				"countryId" => 159,
				"name" => "Baja California Sur",
				"code" => "BS"
			], [
				"stateId" => 75,
				"countryId" => 165,
				"name" => "Tov",
				"code" => "TO"
			], [
				"stateId" => 76,
				"countryId" => 165,
				"name" => "Uvs",
				"code" => "UV"
			], [
				"stateId" => 80,
				"countryId" => 165,
				"name" => "Dornod",
				"code" => "DD"
			], [
				"stateId" => 81,
				"countryId" => 165,
				"name" => "Hovsgol",
				"code" => "HG"
			], [
				"stateId" => 82,
				"countryId" => 165,
				"name" => "Selenge",
				"code" => "SL"
			], [
				"stateId" => 86,
				"countryId" => 165,
				"name" => "Suhbaatar",
				"code" => "SB"
			], [
				"stateId" => 91,
				"countryId" => 203,
				"name" => "Komi",
				"code" => "KO"
			], [
				"stateId" => 105,
				"countryId" => 203,
				"name" => "Dagestan",
				"code" => "DA"
			], [
				"stateId" => 106,
				"countryId" => 203,
				"name" => "Mariy-El",
				"code" => "ME"
			], [
				"stateId" => 110,
				"countryId" => 203,
				"name" => "Tatarstan",
				"code" => "TT"
			], [
				"stateId" => 122,
				"countryId" => 254,
				"name" => "Alabama",
				"code" => "AL"
			], [
				"stateId" => 123,
				"countryId" => 254,
				"name" => "Alaska",
				"code" => "AK"
			], [
				"stateId" => 124,
				"countryId" => 254,
				"name" => "Arizona",
				"code" => "AZ"
			], [
				"stateId" => 125,
				"countryId" => 254,
				"name" => "Arkansas",
				"code" => "AR"
			], [
				"stateId" => 126,
				"countryId" => 254,
				"name" => "California",
				"code" => "CA"
			], [
				"stateId" => 127,
				"countryId" => 254,
				"name" => "Colorado",
				"code" => "CO"
			], [
				"stateId" => 128,
				"countryId" => 254,
				"name" => "Connecticut",
				"code" => "CT"
			], [
				"stateId" => 129,
				"countryId" => 254,
				"name" => "Delaware",
				"code" => "DE"
			], [
				"stateId" => 130,
				"countryId" => 254,
				"name" => "District of Columbia",
				"code" => "DC"
			], [
				"stateId" => 131,
				"countryId" => 254,
				"name" => "Florida",
				"code" => "FL"
			], [
				"stateId" => 132,
				"countryId" => 254,
				"name" => "Georgia",
				"code" => "GA"
			], [
				"stateId" => 133,
				"countryId" => 254,
				"name" => "Hawaii",
				"code" => "HI"
			], [
				"stateId" => 134,
				"countryId" => 254,
				"name" => "Idaho",
				"code" => "ID"
			], [
				"stateId" => 135,
				"countryId" => 254,
				"name" => "Illinois",
				"code" => "IL"
			], [
				"stateId" => 136,
				"countryId" => 254,
				"name" => "Indiana",
				"code" => "IN"
			], [
				"stateId" => 137,
				"countryId" => 254,
				"name" => "Iowa",
				"code" => "IA"
			], [
				"stateId" => 138,
				"countryId" => 254,
				"name" => "Kansas",
				"code" => "KS"
			], [
				"stateId" => 139,
				"countryId" => 254,
				"name" => "Kentucky",
				"code" => "KY"
			], [
				"stateId" => 140,
				"countryId" => 254,
				"name" => "Louisiana",
				"code" => "LA"
			], [
				"stateId" => 141,
				"countryId" => 254,
				"name" => "Maine",
				"code" => "ME"
			], [
				"stateId" => 142,
				"countryId" => 254,
				"name" => "Maryland",
				"code" => "MD"
			], [
				"stateId" => 143,
				"countryId" => 254,
				"name" => "Massachusetts",
				"code" => "MA"
			], [
				"stateId" => 144,
				"countryId" => 254,
				"name" => "Michigan",
				"code" => "MI"
			], [
				"stateId" => 145,
				"countryId" => 254,
				"name" => "Minnesota",
				"code" => "MN"
			], [
				"stateId" => 146,
				"countryId" => 254,
				"name" => "Mississippi",
				"code" => "MS"
			], [
				"stateId" => 147,
				"countryId" => 254,
				"name" => "Missouri",
				"code" => "MO"
			], [
				"stateId" => 148,
				"countryId" => 254,
				"name" => "Montana",
				"code" => "MT"
			], [
				"stateId" => 149,
				"countryId" => 254,
				"name" => "Nebraska",
				"code" => "NE"
			], [
				"stateId" => 150,
				"countryId" => 254,
				"name" => "Nevada",
				"code" => "NV"
			], [
				"stateId" => 151,
				"countryId" => 254,
				"name" => "New Hampshire",
				"code" => "NH"
			], [
				"stateId" => 152,
				"countryId" => 254,
				"name" => "New Jersey",
				"code" => "NJ"
			], [
				"stateId" => 153,
				"countryId" => 254,
				"name" => "New Mexico",
				"code" => "NM"
			], [
				"stateId" => 154,
				"countryId" => 254,
				"name" => "New York",
				"code" => "NY"
			], [
				"stateId" => 155,
				"countryId" => 254,
				"name" => "North Carolina",
				"code" => "NC"
			], [
				"stateId" => 156,
				"countryId" => 254,
				"name" => "North Dakota",
				"code" => "ND"
			], [
				"stateId" => 157,
				"countryId" => 254,
				"name" => "Ohio",
				"code" => "OH"
			], [
				"stateId" => 158,
				"countryId" => 254,
				"name" => "Oklahoma",
				"code" => "OK"
			], [
				"stateId" => 159,
				"countryId" => 254,
				"name" => "Oregon",
				"code" => "OR"
			], [
				"stateId" => 160,
				"countryId" => 254,
				"name" => "Pennsylvania",
				"code" => "PA"
			], [
				"stateId" => 161,
				"countryId" => 254,
				"name" => "Rhode Island",
				"code" => "RI"
			], [
				"stateId" => 162,
				"countryId" => 254,
				"name" => "South Carolina",
				"code" => "SC"
			], [
				"stateId" => 163,
				"countryId" => 254,
				"name" => "South Dakota",
				"code" => "SD"
			], [
				"stateId" => 164,
				"countryId" => 254,
				"name" => "Tennessee",
				"code" => "TN"
			], [
				"stateId" => 165,
				"countryId" => 254,
				"name" => "Texas",
				"code" => "TX"
			], [
				"stateId" => 166,
				"countryId" => 254,
				"name" => "Utah",
				"code" => "UT"
			], [
				"stateId" => 167,
				"countryId" => 254,
				"name" => "Virginia",
				"code" => "VA"
			], [
				"stateId" => 168,
				"countryId" => 254,
				"name" => "Washington",
				"code" => "WA"
			], [
				"stateId" => 169,
				"countryId" => 254,
				"name" => "West Virginia",
				"code" => "WV"
			], [
				"stateId" => 170,
				"countryId" => 254,
				"name" => "Wisconsin",
				"code" => "WI"
			], [
				"stateId" => 171,
				"countryId" => 254,
				"name" => "Wyoming",
				"code" => "WY"
			], [
				"stateId" => 172,
				"countryId" => 254,
				"name" => "Vermont",
				"code" => "VT"
			], [
				"stateId" => 174,
				"countryId" => 14,
				"name" => "Australian Capital Territory",
				"code" => "CT"
			], [
				"stateId" => 189,
				"countryId" => 114,
				"name" => "Papua",
				"code" => "IJ"
			], [
				"stateId" => 193,
				"countryId" => 165,
				"name" => "Bulgan",
				"code" => "BU"
			], [
				"stateId" => 194,
				"countryId" => 165,
				"name" => "Hovd",
				"code" => "HD"
			], [
				"stateId" => 196,
				"countryId" => 159,
				"name" => "Chihuahua",
				"code" => "CH"
			], [
				"stateId" => 197,
				"countryId" => 159,
				"name" => "Colima",
				"code" => "CL"
			], [
				"stateId" => 198,
				"countryId" => 159,
				"name" => "Durango",
				"code" => "DU"
			], [
				"stateId" => 201,
				"countryId" => 159,
				"name" => "Oaxaca",
				"code" => "OA"
			], [
				"stateId" => 203,
				"countryId" => 159,
				"name" => "San Luis Potosi",
				"code" => "SL"
			], [
				"stateId" => 204,
				"countryId" => 159,
				"name" => "Tlaxcala",
				"code" => "TL"
			], [
				"stateId" => 206,
				"countryId" => 159,
				"name" => "Zacatecas",
				"code" => "ZA"
			], [
				"stateId" => 268,
				"countryId" => 269,
				"name" => "World",
				"code" => "--"
			], [
				"stateId" => 539,
				"countryId" => 2,
				"name" => "Albania",
				"code" => "AL"
			], [
				"stateId" => 540,
				"countryId" => 3,
				"name" => "Algeria",
				"code" => "DZ"
			], [
				"stateId" => 541,
				"countryId" => 4,
				"name" => "American Samoa",
				"code" => "AS"
			], [
				"stateId" => 542,
				"countryId" => 5,
				"name" => "Andorra",
				"code" => "AD"
			], [
				"stateId" => 543,
				"countryId" => 6,
				"name" => "Angola",
				"code" => "AO"
			], [
				"stateId" => 544,
				"countryId" => 7,
				"name" => "Anguilla",
				"code" => "AI"
			], [
				"stateId" => 545,
				"countryId" => 8,
				"name" => "Antarctica",
				"code" => "AQ"
			], [
				"stateId" => 546,
				"countryId" => 9,
				"name" => "Antigua and Barbuda",
				"code" => "AG"
			], [
				"stateId" => 547,
				"countryId" => 10,
				"name" => "Argentina",
				"code" => "AR"
			], [
				"stateId" => 548,
				"countryId" => 11,
				"name" => "Armenia",
				"code" => "AM"
			], [
				"stateId" => 549,
				"countryId" => 12,
				"name" => "Aruba",
				"code" => "AW"
			], [
				"stateId" => 550,
				"countryId" => 13,
				"name" => "Ashmore and Cartier",
				"code" => "--"
			], [
				"stateId" => 551,
				"countryId" => 14,
				"name" => "Australia",
				"code" => "AU"
			], [
				"stateId" => 552,
				"countryId" => 15,
				"name" => "Austria",
				"code" => "AT"
			], [
				"stateId" => 553,
				"countryId" => 16,
				"name" => "Azerbaijan",
				"code" => "AZ"
			], [
				"stateId" => 554,
				"countryId" => 17,
				"name" => "The Bahamas",
				"code" => "BS"
			], [
				"stateId" => 555,
				"countryId" => 18,
				"name" => "Bahrain",
				"code" => "BH"
			], [
				"stateId" => 556,
				"countryId" => 19,
				"name" => "Baker Island",
				"code" => "--"
			], [
				"stateId" => 557,
				"countryId" => 20,
				"name" => "Bangladesh",
				"code" => "BD"
			], [
				"stateId" => 558,
				"countryId" => 21,
				"name" => "Barbados",
				"code" => "BB"
			], [
				"stateId" => 559,
				"countryId" => 22,
				"name" => "Bassas da India",
				"code" => "--"
			], [
				"stateId" => 560,
				"countryId" => 23,
				"name" => "Belarus",
				"code" => "BY"
			], [
				"stateId" => 561,
				"countryId" => 24,
				"name" => "Belgium",
				"code" => "BE"
			], [
				"stateId" => 563,
				"countryId" => 26,
				"name" => "Benin",
				"code" => "BJ"
			], [
				"stateId" => 564,
				"countryId" => 27,
				"name" => "Bermuda",
				"code" => "BM"
			], [
				"stateId" => 565,
				"countryId" => 28,
				"name" => "Bhutan",
				"code" => "BT"
			], [
				"stateId" => 566,
				"countryId" => 29,
				"name" => "Bolivia",
				"code" => "BO"
			], [
				"stateId" => 567,
				"countryId" => 30,
				"name" => "Bosnia and Herzegovina",
				"code" => "BA"
			], [
				"stateId" => 568,
				"countryId" => 31,
				"name" => "Botswana",
				"code" => "BW"
			], [
				"stateId" => 569,
				"countryId" => 32,
				"name" => "Bouvet Island",
				"code" => "BV"
			], [
				"stateId" => 570,
				"countryId" => 33,
				"name" => "Brazil",
				"code" => "BR"
			], [
				"stateId" => 571,
				"countryId" => 34,
				"name" => "British Indian Ocean Territory",
				"code" => "IO"
			], [
				"stateId" => 572,
				"countryId" => 35,
				"name" => "British Virgin Islands",
				"code" => "VG"
			], [
				"stateId" => 573,
				"countryId" => 36,
				"name" => "Brunei Darussalam",
				"code" => "BN"
			], [
				"stateId" => 574,
				"countryId" => 37,
				"name" => "Bulgaria",
				"code" => "BG"
			], [
				"stateId" => 575,
				"countryId" => 38,
				"name" => "Burkina Faso",
				"code" => "BF"
			], [
				"stateId" => 576,
				"countryId" => 39,
				"name" => "Burma",
				"code" => "MM"
			], [
				"stateId" => 577,
				"countryId" => 40,
				"name" => "Burundi",
				"code" => "BI"
			], [
				"stateId" => 578,
				"countryId" => 41,
				"name" => "Cambodia",
				"code" => "KH"
			], [
				"stateId" => 579,
				"countryId" => 42,
				"name" => "Cameroon",
				"code" => "CM"
			], [
				"stateId" => 580,
				"countryId" => 43,
				"name" => "Canada",
				"code" => "CA"
			], [
				"stateId" => 581,
				"countryId" => 44,
				"name" => "Cape Verde",
				"code" => "CV"
			], [
				"stateId" => 582,
				"countryId" => 45,
				"name" => "Cayman Islands",
				"code" => "KY"
			], [
				"stateId" => 583,
				"countryId" => 46,
				"name" => "Central African Republic",
				"code" => "CF"
			], [
				"stateId" => 584,
				"countryId" => 47,
				"name" => "Chad",
				"code" => "TD"
			], [
				"stateId" => 585,
				"countryId" => 48,
				"name" => "Chile",
				"code" => "CL"
			], [
				"stateId" => 586,
				"countryId" => 49,
				"name" => "China",
				"code" => "CN"
			], [
				"stateId" => 587,
				"countryId" => 50,
				"name" => "Christmas Island",
				"code" => "CX"
			], [
				"stateId" => 588,
				"countryId" => 51,
				"name" => "Clipperton Island",
				"code" => "--"
			], [
				"stateId" => 589,
				"countryId" => 52,
				"name" => "Cocos (Keeling) Islands",
				"code" => "CC"
			], [
				"stateId" => 590,
				"countryId" => 53,
				"name" => "Colombia",
				"code" => "CO"
			], [
				"stateId" => 591,
				"countryId" => 54,
				"name" => "Comoros",
				"code" => "KM"
			], [
				"stateId" => 592,
				"countryId" => 55,
				"name" => "Democratic Republic of the Congo",
				"code" => "CD"
			], [
				"stateId" => 593,
				"countryId" => 56,
				"name" => "Republic of the Congo",
				"code" => "CG"
			], [
				"stateId" => 594,
				"countryId" => 57,
				"name" => "Cook Islands",
				"code" => "CK"
			], [
				"stateId" => 595,
				"countryId" => 58,
				"name" => "Coral Sea Islands",
				"code" => "--"
			], [
				"stateId" => 596,
				"countryId" => 59,
				"name" => "Costa Rica",
				"code" => "CR"
			], [
				"stateId" => 597,
				"countryId" => 60,
				"name" => "Cote d'Ivoire",
				"code" => "CI"
			], [
				"stateId" => 598,
				"countryId" => 61,
				"name" => "Croatia",
				"code" => "HR"
			], [
				"stateId" => 599,
				"countryId" => 62,
				"name" => "Cuba",
				"code" => "CU"
			], [
				"stateId" => 600,
				"countryId" => 63,
				"name" => "Cyprus",
				"code" => "CY"
			], [
				"stateId" => 601,
				"countryId" => 64,
				"name" => "Czech Republic",
				"code" => "CZ"
			], [
				"stateId" => 602,
				"countryId" => 65,
				"name" => "Denmark",
				"code" => "DK"
			], [
				"stateId" => 604,
				"countryId" => 67,
				"name" => "Dominica",
				"code" => "DM"
			], [
				"stateId" => 605,
				"countryId" => 68,
				"name" => "Dominican Republic",
				"code" => "DO"
			], [
				"stateId" => 606,
				"countryId" => 69,
				"name" => "East Timor",
				"code" => "TP"
			], [
				"stateId" => 607,
				"countryId" => 70,
				"name" => "Ecuador",
				"code" => "EC"
			], [
				"stateId" => 608,
				"countryId" => 71,
				"name" => "Egypt",
				"code" => "EG"
			], [
				"stateId" => 609,
				"countryId" => 72,
				"name" => "El Salvador",
				"code" => "SV"
			], [
				"stateId" => 610,
				"countryId" => 73,
				"name" => "Equatorial Guinea",
				"code" => "GQ"
			], [
				"stateId" => 611,
				"countryId" => 74,
				"name" => "Eritrea",
				"code" => "ER"
			], [
				"stateId" => 612,
				"countryId" => 75,
				"name" => "Estonia",
				"code" => "EE"
			], [
				"stateId" => 613,
				"countryId" => 76,
				"name" => "Ethiopia",
				"code" => "ET"
			], [
				"stateId" => 614,
				"countryId" => 77,
				"name" => "Europa Island",
				"code" => "--"
			], [
				"stateId" => 615,
				"countryId" => 78,
				"name" => "Falkland Islands (Islas Malvinas)",
				"code" => "FK"
			], [
				"stateId" => 616,
				"countryId" => 79,
				"name" => "Faroe Islands",
				"code" => "FO"
			], [
				"stateId" => 617,
				"countryId" => 80,
				"name" => "Fiji",
				"code" => "FJ"
			], [
				"stateId" => 618,
				"countryId" => 81,
				"name" => "Finland",
				"code" => "FI"
			], [
				"stateId" => 619,
				"countryId" => 82,
				"name" => "France",
				"code" => "FR"
			], [
				"stateId" => 620,
				"countryId" => 83,
				"name" => "Metropolitan France",
				"code" => "FX"
			], [
				"stateId" => 621,
				"countryId" => 84,
				"name" => "French Guiana",
				"code" => "GF"
			], [
				"stateId" => 622,
				"countryId" => 85,
				"name" => "French Polynesia",
				"code" => "PF"
			], [
				"stateId" => 623,
				"countryId" => 86,
				"name" => "French Southern and Antarctic Lands",
				"code" => "TF"
			], [
				"stateId" => 624,
				"countryId" => 87,
				"name" => "Gabon",
				"code" => "GA"
			], [
				"stateId" => 625,
				"countryId" => 88,
				"name" => "The Gambia",
				"code" => "GM"
			], [
				"stateId" => 626,
				"countryId" => 89,
				"name" => "Gaza Strip",
				"code" => "--"
			], [
				"stateId" => 627,
				"countryId" => 90,
				"name" => "Georgia",
				"code" => "GE"
			], [
				"stateId" => 628,
				"countryId" => 91,
				"name" => "Germany",
				"code" => "DE"
			], [
				"stateId" => 629,
				"countryId" => 92,
				"name" => "Ghana",
				"code" => "GH"
			], [
				"stateId" => 630,
				"countryId" => 93,
				"name" => "Gibraltar",
				"code" => "GI"
			], [
				"stateId" => 631,
				"countryId" => 94,
				"name" => "Glorioso Islands",
				"code" => "--"
			], [
				"stateId" => 632,
				"countryId" => 95,
				"name" => "Greece",
				"code" => "GR"
			], [
				"stateId" => 633,
				"countryId" => 96,
				"name" => "Greenland",
				"code" => "GL"
			], [
				"stateId" => 634,
				"countryId" => 97,
				"name" => "Grenada",
				"code" => "GD"
			], [
				"stateId" => 635,
				"countryId" => 98,
				"name" => "Guadeloupe",
				"code" => "GP"
			], [
				"stateId" => 636,
				"countryId" => 99,
				"name" => "Guam",
				"code" => "GU"
			], [
				"stateId" => 638,
				"countryId" => 101,
				"name" => "Guernsey",
				"code" => "GG"
			], [
				"stateId" => 639,
				"countryId" => 102,
				"name" => "Guinea",
				"code" => "GN"
			], [
				"stateId" => 640,
				"countryId" => 103,
				"name" => "Guinea-Bissau",
				"code" => "GW"
			], [
				"stateId" => 641,
				"countryId" => 104,
				"name" => "Guyana",
				"code" => "GY"
			], [
				"stateId" => 642,
				"countryId" => 105,
				"name" => "Haiti",
				"code" => "HT"
			], [
				"stateId" => 643,
				"countryId" => 106,
				"name" => "Heard Island and McDonald Islands",
				"code" => "HM"
			], [
				"stateId" => 644,
				"countryId" => 107,
				"name" => "Holy See (Vatican City)",
				"code" => "VA"
			], [
				"stateId" => 645,
				"countryId" => 108,
				"name" => "Honduras",
				"code" => "HN"
			], [
				"stateId" => 646,
				"countryId" => 109,
				"name" => "Hong Kong (SAR)",
				"code" => "HK"
			], [
				"stateId" => 647,
				"countryId" => 110,
				"name" => "Howland Island",
				"code" => "--"
			], [
				"stateId" => 648,
				"countryId" => 111,
				"name" => "Hungary",
				"code" => "HU"
			], [
				"stateId" => 649,
				"countryId" => 112,
				"name" => "Iceland",
				"code" => "IS"
			], [
				"stateId" => 650,
				"countryId" => 113,
				"name" => "India",
				"code" => "IN"
			], [
				"stateId" => 651,
				"countryId" => 114,
				"name" => "Indonesia",
				"code" => "ID"
			], [
				"stateId" => 652,
				"countryId" => 115,
				"name" => "Iran",
				"code" => "IR"
			], [
				"stateId" => 653,
				"countryId" => 116,
				"name" => "Iraq",
				"code" => "IQ"
			], [
				"stateId" => 654,
				"countryId" => 117,
				"name" => "Ireland",
				"code" => "IE"
			], [
				"stateId" => 655,
				"countryId" => 118,
				"name" => "Israel",
				"code" => "IL"
			], [
				"stateId" => 656,
				"countryId" => 119,
				"name" => "Italy",
				"code" => "IT"
			], [
				"stateId" => 657,
				"countryId" => 120,
				"name" => "Jamaica",
				"code" => "JM"
			], [
				"stateId" => 658,
				"countryId" => 121,
				"name" => "Jan Mayen",
				"code" => "--"
			], [
				"stateId" => 659,
				"countryId" => 122,
				"name" => "Japan",
				"code" => "JP"
			], [
				"stateId" => 660,
				"countryId" => 123,
				"name" => "Jarvis Island",
				"code" => "--"
			], [
				"stateId" => 661,
				"countryId" => 124,
				"name" => "Jersey",
				"code" => "JE"
			], [
				"stateId" => 662,
				"countryId" => 125,
				"name" => "Johnston Atoll",
				"code" => "--"
			], [
				"stateId" => 663,
				"countryId" => 126,
				"name" => "Jordan",
				"code" => "JO"
			], [
				"stateId" => 664,
				"countryId" => 127,
				"name" => "Juan de Nova Island",
				"code" => "--"
			], [
				"stateId" => 665,
				"countryId" => 128,
				"name" => "Kazakhstan",
				"code" => "KZ"
			], [
				"stateId" => 666,
				"countryId" => 129,
				"name" => "Kenya",
				"code" => "KE"
			], [
				"stateId" => 667,
				"countryId" => 130,
				"name" => "Kingman Reef",
				"code" => "--"
			], [
				"stateId" => 668,
				"countryId" => 131,
				"name" => "Kiribati",
				"code" => "KI"
			], [
				"stateId" => 669,
				"countryId" => 132,
				"name" => "North Korea",
				"code" => "KP"
			], [
				"stateId" => 670,
				"countryId" => 133,
				"name" => "South Korea",
				"code" => "KR"
			], [
				"stateId" => 671,
				"countryId" => 134,
				"name" => "Kuwait",
				"code" => "KW"
			], [
				"stateId" => 672,
				"countryId" => 135,
				"name" => "Kyrgyzstan",
				"code" => "KG"
			], [
				"stateId" => 673,
				"countryId" => 136,
				"name" => "Laos",
				"code" => "LA"
			], [
				"stateId" => 674,
				"countryId" => 137,
				"name" => "Latvia",
				"code" => "LV"
			], [
				"stateId" => 675,
				"countryId" => 138,
				"name" => "Lebanon",
				"code" => "LB"
			], [
				"stateId" => 676,
				"countryId" => 139,
				"name" => "Lesotho",
				"code" => "LS"
			], [
				"stateId" => 677,
				"countryId" => 140,
				"name" => "Liberia",
				"code" => "LR"
			], [
				"stateId" => 678,
				"countryId" => 141,
				"name" => "Libya",
				"code" => "LY"
			], [
				"stateId" => 679,
				"countryId" => 142,
				"name" => "Liechtenstein",
				"code" => "LI"
			], [
				"stateId" => 680,
				"countryId" => 143,
				"name" => "Lithuania",
				"code" => "LT"
			], [
				"stateId" => 682,
				"countryId" => 145,
				"name" => "Macao",
				"code" => "MO"
			], [
				"stateId" => 683,
				"countryId" => 146,
				"name" => "The Former Yugoslav Republic of Macedonia",
				"code" => "MK"
			], [
				"stateId" => 684,
				"countryId" => 147,
				"name" => "Madagascar",
				"code" => "MG"
			], [
				"stateId" => 685,
				"countryId" => 148,
				"name" => "Malawi",
				"code" => "MW"
			], [
				"stateId" => 686,
				"countryId" => 149,
				"name" => "Malaysia",
				"code" => "MY"
			], [
				"stateId" => 687,
				"countryId" => 150,
				"name" => "Maldives",
				"code" => "MV"
			], [
				"stateId" => 688,
				"countryId" => 151,
				"name" => "Mali",
				"code" => "ML"
			], [
				"stateId" => 689,
				"countryId" => 152,
				"name" => "Malta",
				"code" => "MA"
			], [
				"stateId" => 690,
				"countryId" => 153,
				"name" => "Isle of Man",
				"code" => "IM"
			], [
				"stateId" => 691,
				"countryId" => 154,
				"name" => "Marshall Islands",
				"code" => "MH"
			], [
				"stateId" => 692,
				"countryId" => 155,
				"name" => "Martinique",
				"code" => "MQ"
			], [
				"stateId" => 693,
				"countryId" => 156,
				"name" => "Mauritania",
				"code" => "MR"
			], [
				"stateId" => 694,
				"countryId" => 157,
				"name" => "Mauritius",
				"code" => "MU"
			], [
				"stateId" => 695,
				"countryId" => 158,
				"name" => "Mayotte",
				"code" => "YT"
			], [
				"stateId" => 697,
				"countryId" => 160,
				"name" => "Federated States of Micronesia",
				"code" => "FM"
			], [
				"stateId" => 698,
				"countryId" => 161,
				"name" => "Midway Islands",
				"code" => "--"
			], [
				"stateId" => 699,
				"countryId" => 162,
				"name" => "Miscellaneous (French)",
				"code" => "--"
			], [
				"stateId" => 700,
				"countryId" => 163,
				"name" => "Moldova",
				"code" => "MD"
			], [
				"stateId" => 701,
				"countryId" => 164,
				"name" => "Monaco",
				"code" => "MC"
			], [
				"stateId" => 702,
				"countryId" => 165,
				"name" => "Mongolia",
				"code" => "MN"
			], [
				"stateId" => 703,
				"countryId" => 166,
				"name" => "Montenegro",
				"code" => "--"
			], [
				"stateId" => 704,
				"countryId" => 167,
				"name" => "Montserrat",
				"code" => "MS"
			], [
				"stateId" => 705,
				"countryId" => 168,
				"name" => "Morocco",
				"code" => "MA"
			], [
				"stateId" => 706,
				"countryId" => 169,
				"name" => "Mozambique",
				"code" => "MZ"
			], [
				"stateId" => 707,
				"countryId" => 170,
				"name" => "Myanmar",
				"code" => "--"
			], [
				"stateId" => 708,
				"countryId" => 171,
				"name" => "Namibia",
				"code" => "NA"
			], [
				"stateId" => 709,
				"countryId" => 172,
				"name" => "Nauru",
				"code" => "NR"
			], [
				"stateId" => 710,
				"countryId" => 173,
				"name" => "Navassa Island",
				"code" => "--"
			], [
				"stateId" => 711,
				"countryId" => 174,
				"name" => "Nepal",
				"code" => "NP"
			], [
				"stateId" => 712,
				"countryId" => 175,
				"name" => "The Netherlands",
				"code" => "NL"
			], [
				"stateId" => 713,
				"countryId" => 176,
				"name" => "Netherlands Antilles",
				"code" => "AN"
			], [
				"stateId" => 714,
				"countryId" => 177,
				"name" => "New Caledonia",
				"code" => "NC"
			], [
				"stateId" => 715,
				"countryId" => 178,
				"name" => "New Zealand",
				"code" => "NZ"
			], [
				"stateId" => 716,
				"countryId" => 179,
				"name" => "Nicaragua",
				"code" => "NI"
			], [
				"stateId" => 717,
				"countryId" => 180,
				"name" => "Niger",
				"code" => "NE"
			], [
				"stateId" => 718,
				"countryId" => 181,
				"name" => "Nigeria",
				"code" => "NG"
			], [
				"stateId" => 719,
				"countryId" => 182,
				"name" => "Niue",
				"code" => "NU"
			], [
				"stateId" => 720,
				"countryId" => 183,
				"name" => "Norfolk Island",
				"code" => "NF"
			], [
				"stateId" => 721,
				"countryId" => 184,
				"name" => "Northern Mariana Islands",
				"code" => "MP"
			], [
				"stateId" => 722,
				"countryId" => 185,
				"name" => "Norway",
				"code" => "NO"
			], [
				"stateId" => 723,
				"countryId" => 186,
				"name" => "Oman",
				"code" => "OM"
			], [
				"stateId" => 724,
				"countryId" => 187,
				"name" => "Pakistan",
				"code" => "PK"
			], [
				"stateId" => 725,
				"countryId" => 188,
				"name" => "Palau",
				"code" => "PW"
			], [
				"stateId" => 726,
				"countryId" => 189,
				"name" => "Palmyra Atoll",
				"code" => "--"
			], [
				"stateId" => 728,
				"countryId" => 191,
				"name" => "Papua New Guinea",
				"code" => "PG"
			], [
				"stateId" => 729,
				"countryId" => 192,
				"name" => "Paracel Islands",
				"code" => "--"
			], [
				"stateId" => 730,
				"countryId" => 193,
				"name" => "Paraguay",
				"code" => "PY"
			], [
				"stateId" => 731,
				"countryId" => 194,
				"name" => "Peru",
				"code" => "PE"
			], [
				"stateId" => 732,
				"countryId" => 195,
				"name" => "Philippines",
				"code" => "PH"
			], [
				"stateId" => 733,
				"countryId" => 196,
				"name" => "Pitcairn Islands",
				"code" => "PN"
			], [
				"stateId" => 734,
				"countryId" => 197,
				"name" => "Poland",
				"code" => "PL"
			], [
				"stateId" => 735,
				"countryId" => 198,
				"name" => "Portugal",
				"code" => "PT"
			], [
				"stateId" => 736,
				"countryId" => 199,
				"name" => "Puerto Rico",
				"code" => "PR"
			], [
				"stateId" => 737,
				"countryId" => 200,
				"name" => "Qatar",
				"code" => "QA"
			], [
				"stateId" => 738,
				"countryId" => 201,
				"name" => "Réunion",
				"code" => "RE"
			], [
				"stateId" => 739,
				"countryId" => 202,
				"name" => "Romania",
				"code" => "RO"
			], [
				"stateId" => 740,
				"countryId" => 203,
				"name" => "Russia",
				"code" => "RU"
			], [
				"stateId" => 741,
				"countryId" => 204,
				"name" => "Rwanda",
				"code" => "RW"
			], [
				"stateId" => 743,
				"countryId" => 206,
				"name" => "Saint Kitts and Nevis",
				"code" => "KN"
			], [
				"stateId" => 744,
				"countryId" => 207,
				"name" => "Saint Lucia",
				"code" => "LC"
			], [
				"stateId" => 745,
				"countryId" => 208,
				"name" => "Saint Pierre and Miquelon",
				"code" => "PM"
			], [
				"stateId" => 746,
				"countryId" => 209,
				"name" => "Saint Vincent and the Grenadines",
				"code" => "VC"
			], [
				"stateId" => 747,
				"countryId" => 210,
				"name" => "Samoa",
				"code" => "WS"
			], [
				"stateId" => 750,
				"countryId" => 213,
				"name" => "Saudi Arabia",
				"code" => "SA"
			], [
				"stateId" => 751,
				"countryId" => 214,
				"name" => "Senegal",
				"code" => "SN"
			], [
				"stateId" => 752,
				"countryId" => 215,
				"name" => "Serbia",
				"code" => "--"
			], [
				"stateId" => 753,
				"countryId" => 216,
				"name" => "Serbia and Montenegro",
				"code" => "--"
			], [
				"stateId" => 754,
				"countryId" => 217,
				"name" => "Seychelles",
				"code" => "SC"
			], [
				"stateId" => 755,
				"countryId" => 218,
				"name" => "Sierra Leone",
				"code" => "SL"
			], [
				"stateId" => 756,
				"countryId" => 219,
				"name" => "Singapore",
				"code" => "SG"
			], [
				"stateId" => 757,
				"countryId" => 220,
				"name" => "Slovakia",
				"code" => "SK"
			], [
				"stateId" => 758,
				"countryId" => 221,
				"name" => "Slovenia",
				"code" => "SI"
			], [
				"stateId" => 759,
				"countryId" => 222,
				"name" => "Solomon Islands",
				"code" => "SB"
			], [
				"stateId" => 760,
				"countryId" => 223,
				"name" => "Somalia",
				"code" => "SO"
			], [
				"stateId" => 761,
				"countryId" => 224,
				"name" => "South Africa",
				"code" => "ZA"
			], [
				"stateId" => 762,
				"countryId" => 225,
				"name" => "South Georgia and the South Sandwich Islands",
				"code" => "GS"
			], [
				"stateId" => 763,
				"countryId" => 226,
				"name" => "Spain",
				"code" => "ES"
			], [
				"stateId" => 764,
				"countryId" => 227,
				"name" => "Spratly Islands",
				"code" => "--"
			], [
				"stateId" => 765,
				"countryId" => 228,
				"name" => "Sri Lanka",
				"code" => "LK"
			], [
				"stateId" => 766,
				"countryId" => 229,
				"name" => "Sudan",
				"code" => "SD"
			], [
				"stateId" => 767,
				"countryId" => 230,
				"name" => "Suriname",
				"code" => "SR"
			], [
				"stateId" => 768,
				"countryId" => 231,
				"name" => "Svalbard",
				"code" => "SJ"
			], [
				"stateId" => 769,
				"countryId" => 232,
				"name" => "Swaziland",
				"code" => "SZ"
			], [
				"stateId" => 770,
				"countryId" => 233,
				"name" => "Sweden",
				"code" => "SE"
			], [
				"stateId" => 771,
				"countryId" => 234,
				"name" => "Switzerland",
				"code" => "CH"
			], [
				"stateId" => 772,
				"countryId" => 235,
				"name" => "Syria",
				"code" => "SY"
			], [
				"stateId" => 773,
				"countryId" => 236,
				"name" => "Taiwan",
				"code" => "TW"
			], [
				"stateId" => 774,
				"countryId" => 237,
				"name" => "Tajikistan",
				"code" => "TJ"
			], [
				"stateId" => 775,
				"countryId" => 238,
				"name" => "Tanzania",
				"code" => "TZ"
			], [
				"stateId" => 776,
				"countryId" => 239,
				"name" => "Thailand",
				"code" => "TH"
			], [
				"stateId" => 777,
				"countryId" => 240,
				"name" => "Togo",
				"code" => "TG"
			], [
				"stateId" => 778,
				"countryId" => 241,
				"name" => "Tokelau",
				"code" => "TK"
			], [
				"stateId" => 779,
				"countryId" => 242,
				"name" => "Tonga",
				"code" => "TO"
			], [
				"stateId" => 780,
				"countryId" => 243,
				"name" => "Trinidad and Tobago",
				"code" => "TT"
			], [
				"stateId" => 781,
				"countryId" => 244,
				"name" => "Tromelin Island",
				"code" => "--"
			], [
				"stateId" => 782,
				"countryId" => 245,
				"name" => "Tunisia",
				"code" => "TN"
			], [
				"stateId" => 783,
				"countryId" => 246,
				"name" => "Turkey",
				"code" => "TR"
			], [
				"stateId" => 784,
				"countryId" => 247,
				"name" => "Turkmenistan",
				"code" => "TM"
			], [
				"stateId" => 785,
				"countryId" => 248,
				"name" => "Turks and Caicos Islands",
				"code" => "TC"
			], [
				"stateId" => 786,
				"countryId" => 249,
				"name" => "Tuvalu",
				"code" => "TV"
			], [
				"stateId" => 787,
				"countryId" => 250,
				"name" => "Uganda",
				"code" => "UG"
			], [
				"stateId" => 788,
				"countryId" => 251,
				"name" => "Ukraine",
				"code" => "UA"
			], [
				"stateId" => 789,
				"countryId" => 252,
				"name" => "United Arab Emirates",
				"code" => "AE"
			], [
				"stateId" => 790,
				"countryId" => 253,
				"name" => "United Kingdom",
				"code" => "UK"
			], [
				"stateId" => 791,
				"countryId" => 254,
				"name" => "United States",
				"code" => "US"
			], [
				"stateId" => 792,
				"countryId" => 255,
				"name" => "United States Minor Outlying Islands",
				"code" => "UM"
			], [
				"stateId" => 793,
				"countryId" => 256,
				"name" => "Uruguay",
				"code" => "UY"
			], [
				"stateId" => 794,
				"countryId" => 257,
				"name" => "Uzbekistan",
				"code" => "UZ"
			], [
				"stateId" => 795,
				"countryId" => 258,
				"name" => "Vanuatu",
				"code" => "VU"
			], [
				"stateId" => 796,
				"countryId" => 259,
				"name" => "Venezuela",
				"code" => "VE"
			], [
				"stateId" => 797,
				"countryId" => 260,
				"name" => "Vietnam",
				"code" => "VN"
			], [
				"stateId" => 798,
				"countryId" => 261,
				"name" => "Virgin Islands",
				"code" => "VI"
			], [
				"stateId" => 799,
				"countryId" => 262,
				"name" => "Virgin Islands (UK)",
				"code" => "--"
			], [
				"stateId" => 800,
				"countryId" => 263,
				"name" => "Virgin Islands (US)",
				"code" => "--"
			], [
				"stateId" => 801,
				"countryId" => 264,
				"name" => "Wake Island",
				"code" => "--"
			], [
				"stateId" => 802,
				"countryId" => 265,
				"name" => "Wallis and Futuna",
				"code" => "WF"
			], [
				"stateId" => 803,
				"countryId" => 266,
				"name" => "West Bank",
				"code" => "--"
			], [
				"stateId" => 804,
				"countryId" => 267,
				"name" => "Western Sahara",
				"code" => "EH"
			], [
				"stateId" => 805,
				"countryId" => 268,
				"name" => "Western Samoa",
				"code" => "--"
			], [
				"stateId" => 806,
				"countryId" => 270,
				"name" => "Yemen",
				"code" => "YE"
			], [
				"stateId" => 808,
				"countryId" => 272,
				"name" => "Zaire",
				"code" => "--"
			], [
				"stateId" => 809,
				"countryId" => 273,
				"name" => "Zambia",
				"code" => "ZM"
			], [
				"stateId" => 810,
				"countryId" => 274,
				"name" => "Zimbabwe",
				"code" => "ZW"
			], [
				"stateId" => 815,
				"countryId" => 43,
				"name" => "Yukon Territory",
				"code" => "YT"
			], [
				"stateId" => 816,
				"countryId" => 9,
				"name" => "Barbuda",
				"code" => "BB"
			], [
				"stateId" => 817,
				"countryId" => 9,
				"name" => "Saint George",
				"code" => "GE"
			], [
				"stateId" => 818,
				"countryId" => 9,
				"name" => "Saint John",
				"code" => "JO"
			], [
				"stateId" => 819,
				"countryId" => 9,
				"name" => "Saint Mary",
				"code" => "MA"
			], [
				"stateId" => 820,
				"countryId" => 9,
				"name" => "Saint Paul",
				"code" => "PA"
			], [
				"stateId" => 821,
				"countryId" => 9,
				"name" => "Saint Peter",
				"code" => "PE"
			], [
				"stateId" => 822,
				"countryId" => 9,
				"name" => "Saint Philip",
				"code" => "PH"
			], [
				"stateId" => 823,
				"countryId" => 1,
				"name" => "Badakhshan",
				"code" => "BD"
			], [
				"stateId" => 824,
				"countryId" => 1,
				"name" => "Badghis",
				"code" => "BG"
			], [
				"stateId" => 825,
				"countryId" => 1,
				"name" => "Baghlan",
				"code" => "BL"
			], [
				"stateId" => 827,
				"countryId" => 1,
				"name" => "Bamian",
				"code" => "BM"
			], [
				"stateId" => 828,
				"countryId" => 1,
				"name" => "Farah",
				"code" => "FH"
			], [
				"stateId" => 829,
				"countryId" => 1,
				"name" => "Faryab",
				"code" => "FB"
			], [
				"stateId" => 830,
				"countryId" => 1,
				"name" => "Ghazni",
				"code" => "GZ"
			], [
				"stateId" => 831,
				"countryId" => 1,
				"name" => "Ghowr",
				"code" => "GR"
			], [
				"stateId" => 832,
				"countryId" => 1,
				"name" => "Helmand",
				"code" => "HM"
			], [
				"stateId" => 833,
				"countryId" => 1,
				"name" => "Herat",
				"code" => "HR"
			], [
				"stateId" => 835,
				"countryId" => 1,
				"name" => "Kabol",
				"code" => "KB"
			], [
				"stateId" => 836,
				"countryId" => 1,
				"name" => "Kapisa",
				"code" => "KP"
			], [
				"stateId" => 837,
				"countryId" => 1,
				"name" => "Konar",
				"code" => "KR"
			], [
				"stateId" => 838,
				"countryId" => 1,
				"name" => "Laghman",
				"code" => "LA"
			], [
				"stateId" => 839,
				"countryId" => 1,
				"name" => "Lowgar",
				"code" => "LW"
			], [
				"stateId" => 840,
				"countryId" => 1,
				"name" => "Nangarhar",
				"code" => "NG"
			], [
				"stateId" => 841,
				"countryId" => 1,
				"name" => "Nimruz",
				"code" => "NM"
			], [
				"stateId" => 842,
				"countryId" => 1,
				"name" => "Oruzgan",
				"code" => "OR"
			], [
				"stateId" => 843,
				"countryId" => 1,
				"name" => "Paktia",
				"code" => "PT"
			], [
				"stateId" => 844,
				"countryId" => 1,
				"name" => "Parvan",
				"code" => "PR"
			], [
				"stateId" => 845,
				"countryId" => 1,
				"name" => "Kandahar",
				"code" => "KD"
			], [
				"stateId" => 846,
				"countryId" => 1,
				"name" => "Kondoz",
				"code" => "KZ"
			], [
				"stateId" => 848,
				"countryId" => 1,
				"name" => "Takhar",
				"code" => "TK"
			], [
				"stateId" => 849,
				"countryId" => 1,
				"name" => "Vardak",
				"code" => "VR"
			], [
				"stateId" => 850,
				"countryId" => 1,
				"name" => "Zabol",
				"code" => "ZB"
			], [
				"stateId" => 851,
				"countryId" => 1,
				"name" => "Paktika",
				"code" => "PK"
			], [
				"stateId" => 852,
				"countryId" => 1,
				"name" => "Balkh",
				"code" => "BK"
			], [
				"stateId" => 853,
				"countryId" => 1,
				"name" => "Jowzjan",
				"code" => "JW"
			], [
				"stateId" => 854,
				"countryId" => 1,
				"name" => "Samangan",
				"code" => "SM"
			], [
				"stateId" => 855,
				"countryId" => 1,
				"name" => "Sare Pol",
				"code" => "SP"
			], [
				"stateId" => 856,
				"countryId" => 3,
				"name" => "Alger",
				"code" => "AL"
			], [
				"stateId" => 857,
				"countryId" => 3,
				"name" => "Batna",
				"code" => "BT"
			], [
				"stateId" => 858,
				"countryId" => 3,
				"name" => "Constantine",
				"code" => "CO"
			], [
				"stateId" => 859,
				"countryId" => 3,
				"name" => "Medea",
				"code" => "MD"
			], [
				"stateId" => 860,
				"countryId" => 3,
				"name" => "Mostaganem",
				"code" => "MG"
			], [
				"stateId" => 861,
				"countryId" => 3,
				"name" => "Oran",
				"code" => "OR"
			], [
				"stateId" => 862,
				"countryId" => 3,
				"name" => "Saida",
				"code" => "SD"
			], [
				"stateId" => 863,
				"countryId" => 3,
				"name" => "Setif",
				"code" => "SF"
			], [
				"stateId" => 864,
				"countryId" => 3,
				"name" => "Tiaret",
				"code" => "TR"
			], [
				"stateId" => 865,
				"countryId" => 3,
				"name" => "Tizi Ouzou",
				"code" => "TO"
			], [
				"stateId" => 866,
				"countryId" => 3,
				"name" => "Tlemcen",
				"code" => "TL"
			], [
				"stateId" => 867,
				"countryId" => 3,
				"name" => "Bejaia",
				"code" => "BJ"
			], [
				"stateId" => 868,
				"countryId" => 3,
				"name" => "Biskra",
				"code" => "BS"
			], [
				"stateId" => 869,
				"countryId" => 3,
				"name" => "Blida",
				"code" => "BL"
			], [
				"stateId" => 870,
				"countryId" => 3,
				"name" => "Bouira",
				"code" => "BU"
			], [
				"stateId" => 871,
				"countryId" => 3,
				"name" => "Djelfa",
				"code" => "DJ"
			], [
				"stateId" => 872,
				"countryId" => 3,
				"name" => "Guelma",
				"code" => "GL"
			], [
				"stateId" => 873,
				"countryId" => 3,
				"name" => "Jijel",
				"code" => "JJ"
			], [
				"stateId" => 874,
				"countryId" => 3,
				"name" => "Laghouat",
				"code" => "LG"
			], [
				"stateId" => 875,
				"countryId" => 3,
				"name" => "Mascara",
				"code" => "MC"
			], [
				"stateId" => 876,
				"countryId" => 3,
				"name" => "M'Sila",
				"code" => "MS"
			], [
				"stateId" => 877,
				"countryId" => 3,
				"name" => "Oum el Bouaghi",
				"code" => "OB"
			], [
				"stateId" => 878,
				"countryId" => 3,
				"name" => "Sidi Bel Abbes",
				"code" => "SB"
			], [
				"stateId" => 879,
				"countryId" => 3,
				"name" => "Skikda",
				"code" => "SK"
			], [
				"stateId" => 880,
				"countryId" => 3,
				"name" => "Tebessa",
				"code" => "TB"
			], [
				"stateId" => 881,
				"countryId" => 3,
				"name" => "Adrar",
				"code" => "AR"
			], [
				"stateId" => 882,
				"countryId" => 3,
				"name" => "Ain Defla",
				"code" => "AD"
			], [
				"stateId" => 883,
				"countryId" => 3,
				"name" => "Ain Temouchent",
				"code" => "AT"
			], [
				"stateId" => 884,
				"countryId" => 3,
				"name" => "Annaba",
				"code" => "AN"
			], [
				"stateId" => 885,
				"countryId" => 3,
				"name" => "Bechar",
				"code" => "BC"
			], [
				"stateId" => 886,
				"countryId" => 3,
				"name" => "Bordj Bou Arreridj",
				"code" => "BB"
			], [
				"stateId" => 887,
				"countryId" => 3,
				"name" => "Boumerdes",
				"code" => "BM"
			], [
				"stateId" => 888,
				"countryId" => 3,
				"name" => "Chlef",
				"code" => "CH"
			], [
				"stateId" => 889,
				"countryId" => 3,
				"name" => "El Bayadh",
				"code" => "EB"
			], [
				"stateId" => 890,
				"countryId" => 3,
				"name" => "El Oued",
				"code" => "EO"
			], [
				"stateId" => 891,
				"countryId" => 3,
				"name" => "El Tarf",
				"code" => "ET"
			], [
				"stateId" => 892,
				"countryId" => 3,
				"name" => "Ghardaia",
				"code" => "GR"
			], [
				"stateId" => 893,
				"countryId" => 3,
				"name" => "Illizi",
				"code" => "IL"
			], [
				"stateId" => 894,
				"countryId" => 3,
				"name" => "Khenchela",
				"code" => "KH"
			], [
				"stateId" => 895,
				"countryId" => 3,
				"name" => "Mila",
				"code" => "ML"
			], [
				"stateId" => 896,
				"countryId" => 3,
				"name" => "Naama",
				"code" => "NA"
			], [
				"stateId" => 897,
				"countryId" => 3,
				"name" => "Ouargla",
				"code" => "OG"
			], [
				"stateId" => 898,
				"countryId" => 3,
				"name" => "Relizane",
				"code" => "RE"
			], [
				"stateId" => 899,
				"countryId" => 3,
				"name" => "Souk Ahras",
				"code" => "SA"
			], [
				"stateId" => 900,
				"countryId" => 3,
				"name" => "Tamanghasset",
				"code" => "TM"
			], [
				"stateId" => 901,
				"countryId" => 3,
				"name" => "Tindouf",
				"code" => "TN"
			], [
				"stateId" => 902,
				"countryId" => 3,
				"name" => "Tipaza",
				"code" => "TP"
			], [
				"stateId" => 903,
				"countryId" => 3,
				"name" => "Tissemsilt",
				"code" => "TS"
			], [
				"stateId" => 904,
				"countryId" => 16,
				"name" => "Abseron",
				"code" => "AR"
			], [
				"stateId" => 905,
				"countryId" => 16,
				"name" => "Agcabadi",
				"code" => "AC"
			], [
				"stateId" => 906,
				"countryId" => 16,
				"name" => "Agdam",
				"code" => "AM"
			], [
				"stateId" => 907,
				"countryId" => 16,
				"name" => "Agdas",
				"code" => "AS"
			], [
				"stateId" => 908,
				"countryId" => 16,
				"name" => "Agstafa",
				"code" => "AF"
			], [
				"stateId" => 909,
				"countryId" => 16,
				"name" => "Agsu",
				"code" => "AU"
			], [
				"stateId" => 910,
				"countryId" => 16,
				"name" => "Ali Bayramli",
				"code" => "AB"
			], [
				"stateId" => 911,
				"countryId" => 16,
				"name" => "Astara",
				"code" => "AA"
			], [
				"stateId" => 912,
				"countryId" => 16,
				"name" => "Baki",
				"code" => "BA"
			], [
				"stateId" => 913,
				"countryId" => 16,
				"name" => "Balakan",
				"code" => "BL"
			], [
				"stateId" => 914,
				"countryId" => 16,
				"name" => "Barda",
				"code" => "BR"
			], [
				"stateId" => 915,
				"countryId" => 16,
				"name" => "Beylaqan",
				"code" => "BQ"
			], [
				"stateId" => 916,
				"countryId" => 16,
				"name" => "Bilasuvar",
				"code" => "BS"
			], [
				"stateId" => 917,
				"countryId" => 16,
				"name" => "Cabrayil",
				"code" => "CB"
			], [
				"stateId" => 918,
				"countryId" => 16,
				"name" => "Calilabad",
				"code" => "CL"
			], [
				"stateId" => 919,
				"countryId" => 16,
				"name" => "Daskasan",
				"code" => "DS"
			], [
				"stateId" => 920,
				"countryId" => 16,
				"name" => "Davaci",
				"code" => "DV"
			], [
				"stateId" => 921,
				"countryId" => 16,
				"name" => "Fuzuli",
				"code" => "FU"
			], [
				"stateId" => 922,
				"countryId" => 16,
				"name" => "Gadabay",
				"code" => "GD"
			], [
				"stateId" => 923,
				"countryId" => 16,
				"name" => "Ganca",
				"code" => "GA"
			], [
				"stateId" => 924,
				"countryId" => 16,
				"name" => "Goranboy",
				"code" => "GR"
			], [
				"stateId" => 925,
				"countryId" => 16,
				"name" => "Goycay",
				"code" => "GY"
			], [
				"stateId" => 926,
				"countryId" => 16,
				"name" => "Haciqabul",
				"code" => "HA"
			], [
				"stateId" => 927,
				"countryId" => 16,
				"name" => "Imisli",
				"code" => "IM"
			], [
				"stateId" => 928,
				"countryId" => 16,
				"name" => "Ismayilli",
				"code" => "IS"
			], [
				"stateId" => 929,
				"countryId" => 16,
				"name" => "Kalbacar",
				"code" => "KA"
			], [
				"stateId" => 930,
				"countryId" => 16,
				"name" => "Kurdamir",
				"code" => "KU"
			], [
				"stateId" => 931,
				"countryId" => 16,
				"name" => "Lacin",
				"code" => "LC"
			], [
				"stateId" => 932,
				"countryId" => 16,
				"name" => "Lankaran",
				"code" => "LA"
			], [
				"stateId" => 934,
				"countryId" => 16,
				"name" => "Lerik",
				"code" => "LE"
			], [
				"stateId" => 935,
				"countryId" => 16,
				"name" => "Masalli",
				"code" => "MA"
			], [
				"stateId" => 936,
				"countryId" => 16,
				"name" => "Mingacevir",
				"code" => "MI"
			], [
				"stateId" => 937,
				"countryId" => 16,
				"name" => "Naftalan",
				"code" => "NA"
			], [
				"stateId" => 938,
				"countryId" => 16,
				"name" => "Naxcivan",
				"code" => "NX"
			], [
				"stateId" => 939,
				"countryId" => 16,
				"name" => "Neftcala",
				"code" => "NE"
			], [
				"stateId" => 940,
				"countryId" => 16,
				"name" => "Oguz",
				"code" => "OG"
			], [
				"stateId" => 941,
				"countryId" => 16,
				"name" => "Qabala",
				"code" => "QA"
			], [
				"stateId" => 942,
				"countryId" => 16,
				"name" => "Qax",
				"code" => "QX"
			], [
				"stateId" => 943,
				"countryId" => 16,
				"name" => "Qazax",
				"code" => "QZ"
			], [
				"stateId" => 944,
				"countryId" => 16,
				"name" => "Qobustan",
				"code" => "QO"
			], [
				"stateId" => 945,
				"countryId" => 16,
				"name" => "Quba",
				"code" => "QB"
			], [
				"stateId" => 946,
				"countryId" => 16,
				"name" => "Qubadli",
				"code" => "QD"
			], [
				"stateId" => 947,
				"countryId" => 16,
				"name" => "Qusar",
				"code" => "QR"
			], [
				"stateId" => 948,
				"countryId" => 16,
				"name" => "Saatli",
				"code" => "ST"
			], [
				"stateId" => 949,
				"countryId" => 16,
				"name" => "Sabirabad",
				"code" => "SB"
			], [
				"stateId" => 950,
				"countryId" => 16,
				"name" => "Saki",
				"code" => "SA"
			], [
				"stateId" => 952,
				"countryId" => 16,
				"name" => "Salyan",
				"code" => "SL"
			], [
				"stateId" => 953,
				"countryId" => 16,
				"name" => "Samaxi",
				"code" => "SI"
			], [
				"stateId" => 954,
				"countryId" => 16,
				"name" => "Samkir",
				"code" => "SM"
			], [
				"stateId" => 955,
				"countryId" => 16,
				"name" => "Samux",
				"code" => "SX"
			], [
				"stateId" => 956,
				"countryId" => 16,
				"name" => "Siyazan",
				"code" => "SY"
			], [
				"stateId" => 957,
				"countryId" => 16,
				"name" => "Sumqayit",
				"code" => "SQ"
			], [
				"stateId" => 958,
				"countryId" => 16,
				"name" => "Susa",
				"code" => "SS"
			], [
				"stateId" => 960,
				"countryId" => 16,
				"name" => "Tartar",
				"code" => "TA"
			], [
				"stateId" => 961,
				"countryId" => 16,
				"name" => "Tovuz",
				"code" => "TO"
			], [
				"stateId" => 962,
				"countryId" => 16,
				"name" => "Ucar",
				"code" => "UC"
			], [
				"stateId" => 963,
				"countryId" => 16,
				"name" => "Xacmaz",
				"code" => "XZ"
			], [
				"stateId" => 964,
				"countryId" => 16,
				"name" => "Xankandi",
				"code" => "XA"
			], [
				"stateId" => 965,
				"countryId" => 16,
				"name" => "Xanlar",
				"code" => "XR"
			], [
				"stateId" => 966,
				"countryId" => 16,
				"name" => "Xizi",
				"code" => "XI"
			], [
				"stateId" => 967,
				"countryId" => 16,
				"name" => "Xocali",
				"code" => "XC"
			], [
				"stateId" => 968,
				"countryId" => 16,
				"name" => "Xocavand",
				"code" => "XD"
			], [
				"stateId" => 969,
				"countryId" => 16,
				"name" => "Yardimli",
				"code" => "YR"
			], [
				"stateId" => 970,
				"countryId" => 16,
				"name" => "Yevlax",
				"code" => "YE"
			], [
				"stateId" => 972,
				"countryId" => 16,
				"name" => "Zangilan",
				"code" => "ZG"
			], [
				"stateId" => 973,
				"countryId" => 16,
				"name" => "Zaqatala",
				"code" => "ZQ"
			], [
				"stateId" => 974,
				"countryId" => 16,
				"name" => "Zardab",
				"code" => "ZR"
			], [
				"stateId" => 975,
				"countryId" => 2,
				"name" => "Berat",
				"code" => "BR"
			], [
				"stateId" => 976,
				"countryId" => 2,
				"name" => "Diber",
				"code" => "DI"
			], [
				"stateId" => 977,
				"countryId" => 2,
				"name" => "Durres",
				"code" => "DR"
			], [
				"stateId" => 978,
				"countryId" => 2,
				"name" => "Elbasan",
				"code" => "EL"
			], [
				"stateId" => 979,
				"countryId" => 2,
				"name" => "Fier",
				"code" => "FR"
			], [
				"stateId" => 980,
				"countryId" => 2,
				"name" => "Gjirokaster",
				"code" => "GJ"
			], [
				"stateId" => 981,
				"countryId" => 2,
				"name" => "Gramsh",
				"code" => "GR"
			], [
				"stateId" => 982,
				"countryId" => 2,
				"name" => "Kolonje",
				"code" => "ER"
			], [
				"stateId" => 983,
				"countryId" => 2,
				"name" => "Korce",
				"code" => "KO"
			], [
				"stateId" => 984,
				"countryId" => 2,
				"name" => "Kruje",
				"code" => "KR"
			], [
				"stateId" => 985,
				"countryId" => 2,
				"name" => "Kukes",
				"code" => "KU"
			], [
				"stateId" => 986,
				"countryId" => 2,
				"name" => "Lezhe",
				"code" => "LE"
			], [
				"stateId" => 987,
				"countryId" => 2,
				"name" => "Librazhd",
				"code" => "LB"
			], [
				"stateId" => 988,
				"countryId" => 2,
				"name" => "Lushnje",
				"code" => "LU"
			], [
				"stateId" => 989,
				"countryId" => 2,
				"name" => "Mat",
				"code" => "MT"
			], [
				"stateId" => 990,
				"countryId" => 2,
				"name" => "Mirdite",
				"code" => "MR"
			], [
				"stateId" => 991,
				"countryId" => 2,
				"name" => "Permet",
				"code" => "PR"
			], [
				"stateId" => 992,
				"countryId" => 2,
				"name" => "Pogradec",
				"code" => "PG"
			], [
				"stateId" => 993,
				"countryId" => 2,
				"name" => "Puke",
				"code" => "PU"
			], [
				"stateId" => 994,
				"countryId" => 2,
				"name" => "Sarande",
				"code" => "SR"
			], [
				"stateId" => 995,
				"countryId" => 2,
				"name" => "Shkoder",
				"code" => "SH"
			], [
				"stateId" => 996,
				"countryId" => 2,
				"name" => "Skrapar",
				"code" => "SK"
			], [
				"stateId" => 997,
				"countryId" => 2,
				"name" => "Tepelene",
				"code" => "TE"
			], [
				"stateId" => 998,
				"countryId" => 2,
				"name" => "Tropoje",
				"code" => "TP"
			], [
				"stateId" => 999,
				"countryId" => 2,
				"name" => "Vlore",
				"code" => "VL"
			], [
				"stateId" => 1000,
				"countryId" => 2,
				"name" => "Tiran",
				"code" => "TI"
			], [
				"stateId" => 1001,
				"countryId" => 2,
				"name" => "Bulqize",
				"code" => "BU"
			], [
				"stateId" => 1002,
				"countryId" => 2,
				"name" => "Delvine",
				"code" => "DL"
			], [
				"stateId" => 1003,
				"countryId" => 2,
				"name" => "Devoll",
				"code" => "DV"
			], [
				"stateId" => 1004,
				"countryId" => 2,
				"name" => "Has",
				"code" => "HA"
			], [
				"stateId" => 1005,
				"countryId" => 2,
				"name" => "Kavaje",
				"code" => "KA"
			], [
				"stateId" => 1006,
				"countryId" => 2,
				"name" => "Kucove",
				"code" => "KC"
			], [
				"stateId" => 1007,
				"countryId" => 2,
				"name" => "Kurbin",
				"code" => "KB"
			], [
				"stateId" => 1008,
				"countryId" => 2,
				"name" => "Malesi e Madhe",
				"code" => "MM"
			], [
				"stateId" => 1009,
				"countryId" => 2,
				"name" => "Mallakaster",
				"code" => "MK"
			], [
				"stateId" => 1010,
				"countryId" => 2,
				"name" => "Peqin",
				"code" => "PQ"
			], [
				"stateId" => 1011,
				"countryId" => 2,
				"name" => "Tirane",
				"code" => "TR"
			], [
				"stateId" => 1012,
				"countryId" => 11,
				"name" => "Aragatsotn",
				"code" => "AG"
			], [
				"stateId" => 1013,
				"countryId" => 11,
				"name" => "Ararat",
				"code" => "AR"
			], [
				"stateId" => 1014,
				"countryId" => 11,
				"name" => "Armavir",
				"code" => "AV"
			], [
				"stateId" => 1015,
				"countryId" => 11,
				"name" => "Geghark'unik'",
				"code" => "GR"
			], [
				"stateId" => 1016,
				"countryId" => 11,
				"name" => "Kotayk'",
				"code" => "KT"
			], [
				"stateId" => 1017,
				"countryId" => 11,
				"name" => "Lorri",
				"code" => "LO"
			], [
				"stateId" => 1018,
				"countryId" => 11,
				"name" => "Shirak",
				"code" => "SH"
			], [
				"stateId" => 1019,
				"countryId" => 11,
				"name" => "Syunik'",
				"code" => "SU"
			], [
				"stateId" => 1020,
				"countryId" => 11,
				"name" => "Tavush",
				"code" => "TV"
			], [
				"stateId" => 1021,
				"countryId" => 11,
				"name" => "Vayots' Dzor",
				"code" => "VD"
			], [
				"stateId" => 1022,
				"countryId" => 11,
				"name" => "Yerevan",
				"code" => "ER"
			], [
				"stateId" => 1023,
				"countryId" => 5,
				"name" => "Andorra la Vella",
				"code" => "AN"
			], [
				"stateId" => 1024,
				"countryId" => 5,
				"name" => "Canillo",
				"code" => "CA"
			], [
				"stateId" => 1025,
				"countryId" => 5,
				"name" => "Encamp",
				"code" => "EN"
			], [
				"stateId" => 1026,
				"countryId" => 5,
				"name" => "La Massana",
				"code" => "MA"
			], [
				"stateId" => 1027,
				"countryId" => 5,
				"name" => "Ordino",
				"code" => "OR"
			], [
				"stateId" => 1028,
				"countryId" => 5,
				"name" => "Sant Julia de Loria",
				"code" => "JL"
			], [
				"stateId" => 1029,
				"countryId" => 6,
				"name" => "Benguela",
				"code" => "BG"
			], [
				"stateId" => 1030,
				"countryId" => 6,
				"name" => "Bie",
				"code" => "BI"
			], [
				"stateId" => 1031,
				"countryId" => 6,
				"name" => "Cabinda",
				"code" => "CB"
			], [
				"stateId" => 1032,
				"countryId" => 6,
				"name" => "Cuando Cubango",
				"code" => "CC"
			], [
				"stateId" => 1033,
				"countryId" => 6,
				"name" => "Cuanza Norte",
				"code" => "CN"
			], [
				"stateId" => 1034,
				"countryId" => 6,
				"name" => "Cuanza Sul",
				"code" => "CS"
			], [
				"stateId" => 1035,
				"countryId" => 6,
				"name" => "Cunene",
				"code" => "CU"
			], [
				"stateId" => 1036,
				"countryId" => 6,
				"name" => "Huambo",
				"code" => "HM"
			], [
				"stateId" => 1037,
				"countryId" => 6,
				"name" => "Huila",
				"code" => "HL"
			], [
				"stateId" => 1038,
				"countryId" => 6,
				"name" => "Luanda",
				"code" => "LU"
			], [
				"stateId" => 1039,
				"countryId" => 6,
				"name" => "Malanje",
				"code" => "ML"
			], [
				"stateId" => 1040,
				"countryId" => 6,
				"name" => "Namibe",
				"code" => "NA"
			], [
				"stateId" => 1041,
				"countryId" => 6,
				"name" => "Moxico",
				"code" => "MX"
			], [
				"stateId" => 1046,
				"countryId" => 6,
				"name" => "Uige",
				"code" => "UI"
			], [
				"stateId" => 1047,
				"countryId" => 6,
				"name" => "Zaire",
				"code" => "ZA"
			], [
				"stateId" => 1048,
				"countryId" => 6,
				"name" => "Lunda Norte",
				"code" => "LN"
			], [
				"stateId" => 1049,
				"countryId" => 6,
				"name" => "Lunda Sul",
				"code" => "LS"
			], [
				"stateId" => 1050,
				"countryId" => 6,
				"name" => "Bengo",
				"code" => "BO"
			], [
				"stateId" => 1051,
				"countryId" => 10,
				"name" => "Buenos Aires",
				"code" => "BA"
			], [
				"stateId" => 1052,
				"countryId" => 10,
				"name" => "Catamarca",
				"code" => "CT"
			], [
				"stateId" => 1053,
				"countryId" => 10,
				"name" => "Chaco",
				"code" => "CC"
			], [
				"stateId" => 1054,
				"countryId" => 10,
				"name" => "Chubut",
				"code" => "CH"
			], [
				"stateId" => 1055,
				"countryId" => 10,
				"name" => "Cordoba",
				"code" => "CB"
			], [
				"stateId" => 1056,
				"countryId" => 10,
				"name" => "Corrientes",
				"code" => "CN"
			], [
				"stateId" => 1057,
				"countryId" => 10,
				"name" => "Distrito Federal",
				"code" => "DF"
			], [
				"stateId" => 1058,
				"countryId" => 10,
				"name" => "Entre Rios",
				"code" => "ER"
			], [
				"stateId" => 1059,
				"countryId" => 10,
				"name" => "Formosa",
				"code" => "FM"
			], [
				"stateId" => 1060,
				"countryId" => 10,
				"name" => "Jujuy",
				"code" => "JY"
			], [
				"stateId" => 1061,
				"countryId" => 10,
				"name" => "La Pampa",
				"code" => "LP"
			], [
				"stateId" => 1062,
				"countryId" => 10,
				"name" => "La Rioja",
				"code" => "LR"
			], [
				"stateId" => 1063,
				"countryId" => 10,
				"name" => "Mendoza",
				"code" => "MZ"
			], [
				"stateId" => 1064,
				"countryId" => 10,
				"name" => "Misiones",
				"code" => "MN"
			], [
				"stateId" => 1065,
				"countryId" => 10,
				"name" => "Neuquen",
				"code" => "NQ"
			], [
				"stateId" => 1066,
				"countryId" => 10,
				"name" => "Rio Negro",
				"code" => "RN"
			], [
				"stateId" => 1067,
				"countryId" => 10,
				"name" => "Salta",
				"code" => "SA"
			], [
				"stateId" => 1068,
				"countryId" => 10,
				"name" => "San Juan",
				"code" => "SJ"
			], [
				"stateId" => 1069,
				"countryId" => 10,
				"name" => "San Luis",
				"code" => "SL"
			], [
				"stateId" => 1070,
				"countryId" => 10,
				"name" => "Santa Cruz",
				"code" => "SC"
			], [
				"stateId" => 1071,
				"countryId" => 10,
				"name" => "Santa Fe",
				"code" => "SF"
			], [
				"stateId" => 1072,
				"countryId" => 10,
				"name" => "Santiago del Estero",
				"code" => "SE"
			], [
				"stateId" => 1073,
				"countryId" => 10,
				"name" => "Antartida e Islas del Atlan Tierra del Fuego",
				"code" => "TF"
			], [
				"stateId" => 1074,
				"countryId" => 10,
				"name" => "Tucuman",
				"code" => "TM"
			], [
				"stateId" => 1075,
				"countryId" => 15,
				"name" => "Burgenland",
				"code" => "BU"
			], [
				"stateId" => 1076,
				"countryId" => 15,
				"name" => "Karnten",
				"code" => "KA"
			], [
				"stateId" => 1077,
				"countryId" => 15,
				"name" => "Niederosterreich",
				"code" => "NO"
			], [
				"stateId" => 1078,
				"countryId" => 15,
				"name" => "Oberosterreich",
				"code" => "OO"
			], [
				"stateId" => 1079,
				"countryId" => 15,
				"name" => "Salzburg",
				"code" => "SZ"
			], [
				"stateId" => 1080,
				"countryId" => 15,
				"name" => "Steiermark",
				"code" => "ST"
			], [
				"stateId" => 1081,
				"countryId" => 15,
				"name" => "Tirol",
				"code" => "TR"
			], [
				"stateId" => 1082,
				"countryId" => 15,
				"name" => "Vorarlberg",
				"code" => "VO"
			], [
				"stateId" => 1083,
				"countryId" => 15,
				"name" => "Wien",
				"code" => "WI"
			], [
				"stateId" => 1084,
				"countryId" => 18,
				"name" => "Al Hadd",
				"code" => "HD"
			], [
				"stateId" => 1085,
				"countryId" => 18,
				"name" => "Al Manamah",
				"code" => "MN"
			], [
				"stateId" => 1086,
				"countryId" => 18,
				"name" => "Al Muharraq",
				"code" => "MQ"
			], [
				"stateId" => 1087,
				"countryId" => 18,
				"name" => "Jidd Hafs",
				"code" => "JH"
			], [
				"stateId" => 1088,
				"countryId" => 18,
				"name" => "Sitrah",
				"code" => "ST"
			], [
				"stateId" => 1090,
				"countryId" => 18,
				"name" => "Al Mintaqah al Gharbiyah",
				"code" => "MG"
			], [
				"stateId" => 1091,
				"countryId" => 18,
				"name" => "Mintaqat Juzur Hawar",
				"code" => "MJ"
			], [
				"stateId" => 1092,
				"countryId" => 18,
				"name" => "Al Mintaqah ash Shamaliyah",
				"code" => "MS"
			], [
				"stateId" => 1093,
				"countryId" => 18,
				"name" => "Al Mintaqah al Wusta",
				"code" => "MW"
			], [
				"stateId" => 1094,
				"countryId" => 18,
				"name" => "Madinat Isa",
				"code" => "MI"
			], [
				"stateId" => 1096,
				"countryId" => 18,
				"name" => "Madinat Hamad",
				"code" => "MH"
			], [
				"stateId" => 1097,
				"countryId" => 21,
				"name" => "Christ Church",
				"code" => "CC"
			], [
				"stateId" => 1098,
				"countryId" => 21,
				"name" => "Saint Andrew",
				"code" => "AN"
			], [
				"stateId" => 1099,
				"countryId" => 21,
				"name" => "Saint George",
				"code" => "GE"
			], [
				"stateId" => 1100,
				"countryId" => 21,
				"name" => "Saint James",
				"code" => "JM"
			], [
				"stateId" => 1101,
				"countryId" => 21,
				"name" => "Saint John",
				"code" => "JN"
			], [
				"stateId" => 1102,
				"countryId" => 21,
				"name" => "Saint Joseph",
				"code" => "JS"
			], [
				"stateId" => 1103,
				"countryId" => 21,
				"name" => "Saint Lucy",
				"code" => "LU"
			], [
				"stateId" => 1104,
				"countryId" => 21,
				"name" => "Saint Michael",
				"code" => "MI"
			], [
				"stateId" => 1105,
				"countryId" => 21,
				"name" => "Saint Peter",
				"code" => "PE"
			], [
				"stateId" => 1106,
				"countryId" => 21,
				"name" => "Saint Philip",
				"code" => "PH"
			], [
				"stateId" => 1107,
				"countryId" => 21,
				"name" => "Saint Thomas",
				"code" => "TH"
			], [
				"stateId" => 1108,
				"countryId" => 31,
				"name" => "Central",
				"code" => "CE"
			], [
				"stateId" => 1109,
				"countryId" => 31,
				"name" => "Chobe",
				"code" => "CH"
			], [
				"stateId" => 1110,
				"countryId" => 31,
				"name" => "Ghanzi",
				"code" => "GH"
			], [
				"stateId" => 1111,
				"countryId" => 31,
				"name" => "Kgalagadi",
				"code" => "KG"
			], [
				"stateId" => 1112,
				"countryId" => 31,
				"name" => "Kgatleng",
				"code" => "KL"
			], [
				"stateId" => 1113,
				"countryId" => 31,
				"name" => "Kweneng",
				"code" => "KW"
			], [
				"stateId" => 1114,
				"countryId" => 31,
				"name" => "Ngamiland",
				"code" => "NG"
			], [
				"stateId" => 1115,
				"countryId" => 31,
				"name" => "NorthEast",
				"code" => "NE"
			], [
				"stateId" => 1116,
				"countryId" => 31,
				"name" => "SouthEast",
				"code" => "SE"
			], [
				"stateId" => 1117,
				"countryId" => 31,
				"name" => "Southern",
				"code" => "SO"
			], [
				"stateId" => 1118,
				"countryId" => 27,
				"name" => "Devonshire",
				"code" => "DE"
			], [
				"stateId" => 1119,
				"countryId" => 27,
				"name" => "Hamilton Municipality",
				"code" => "HC"
			], [
				"stateId" => 1121,
				"countryId" => 27,
				"name" => "Paget",
				"code" => "PA"
			], [
				"stateId" => 1122,
				"countryId" => 27,
				"name" => "Pembroke",
				"code" => "PE"
			], [
				"stateId" => 1123,
				"countryId" => 27,
				"name" => "Saint George",
				"code" => "SG"
			], [
				"stateId" => 1124,
				"countryId" => 27,
				"name" => "Saint George's",
				"code" => "SC"
			], [
				"stateId" => 1125,
				"countryId" => 27,
				"name" => "Sandys",
				"code" => "SA"
			], [
				"stateId" => 1126,
				"countryId" => 27,
				"name" => "Smiths",
				"code" => "SM"
			], [
				"stateId" => 1127,
				"countryId" => 27,
				"name" => "Southampton",
				"code" => "SO"
			], [
				"stateId" => 1128,
				"countryId" => 27,
				"name" => "Warwick",
				"code" => "WA"
			], [
				"stateId" => 1129,
				"countryId" => 24,
				"name" => "Antwerpen",
				"code" => "AN"
			], [
				"stateId" => 1131,
				"countryId" => 24,
				"name" => "Hainaut",
				"code" => "HT"
			], [
				"stateId" => 1132,
				"countryId" => 24,
				"name" => "Liege",
				"code" => "LG"
			], [
				"stateId" => 1133,
				"countryId" => 24,
				"name" => "Limburg",
				"code" => "LI"
			], [
				"stateId" => 1134,
				"countryId" => 24,
				"name" => "Luxembourg",
				"code" => "LX"
			], [
				"stateId" => 1135,
				"countryId" => 24,
				"name" => "Namur",
				"code" => "NA"
			], [
				"stateId" => 1136,
				"countryId" => 24,
				"name" => "Oost-Vlaanderen",
				"code" => "OV"
			], [
				"stateId" => 1137,
				"countryId" => 24,
				"name" => "West-Vlaanderen",
				"code" => "WV"
			], [
				"stateId" => 1138,
				"countryId" => 17,
				"name" => "Bimini",
				"code" => "BI"
			], [
				"stateId" => 1139,
				"countryId" => 17,
				"name" => "Cat Island",
				"code" => "CI"
			], [
				"stateId" => 1140,
				"countryId" => 17,
				"name" => "Exuma",
				"code" => "EX"
			], [
				"stateId" => 1143,
				"countryId" => 17,
				"name" => "Inagua",
				"code" => "IN"
			], [
				"stateId" => 1144,
				"countryId" => 17,
				"name" => "Long Island",
				"code" => "LI"
			], [
				"stateId" => 1145,
				"countryId" => 17,
				"name" => "Mayaguana",
				"code" => "MG"
			], [
				"stateId" => 1146,
				"countryId" => 17,
				"name" => "Ragged Island",
				"code" => "RI"
			], [
				"stateId" => 1147,
				"countryId" => 17,
				"name" => "Harbour Island",
				"code" => "HI"
			], [
				"stateId" => 1148,
				"countryId" => 17,
				"name" => "New Providence",
				"code" => "NP"
			], [
				"stateId" => 1149,
				"countryId" => 17,
				"name" => "Acklins and Crooked Islands",
				"code" => "AC"
			], [
				"stateId" => 1150,
				"countryId" => 17,
				"name" => "Freeport",
				"code" => "FP"
			], [
				"stateId" => 1151,
				"countryId" => 17,
				"name" => "Fresh Creek",
				"code" => "FC"
			], [
				"stateId" => 1152,
				"countryId" => 17,
				"name" => "Governor's Harbour",
				"code" => "GH"
			], [
				"stateId" => 1153,
				"countryId" => 17,
				"name" => "Green Turtle Cay",
				"code" => "GT"
			], [
				"stateId" => 1154,
				"countryId" => 17,
				"name" => "High Rock",
				"code" => "HR"
			], [
				"stateId" => 1155,
				"countryId" => 17,
				"name" => "Kemps Bay",
				"code" => "KB"
			], [
				"stateId" => 1156,
				"countryId" => 17,
				"name" => "Marsh Harbour",
				"code" => "MH"
			], [
				"stateId" => 1157,
				"countryId" => 17,
				"name" => "Nichollstown and Berry Islands",
				"code" => "NB"
			], [
				"stateId" => 1158,
				"countryId" => 17,
				"name" => "Rock Sound",
				"code" => "RS"
			], [
				"stateId" => 1159,
				"countryId" => 17,
				"name" => "Sandy Point",
				"code" => "SP"
			], [
				"stateId" => 1160,
				"countryId" => 17,
				"name" => "San Salvador and Rum Cay",
				"code" => "SR"
			], [
				"stateId" => 1161,
				"countryId" => 20,
				"name" => "Chittagong",
				"code" => "CG"
			], [
				"stateId" => 1162,
				"countryId" => 20,
				"name" => "Dhaka",
				"code" => "DA"
			], [
				"stateId" => 1163,
				"countryId" => 20,
				"name" => "Khulna",
				"code" => "KH"
			], [
				"stateId" => 1164,
				"countryId" => 20,
				"name" => "Rajshahi",
				"code" => "RJ"
			], [
				"stateId" => 1165,
				"countryId" => 25,
				"name" => "Belize",
				"code" => "BZ"
			], [
				"stateId" => 1166,
				"countryId" => 25,
				"name" => "Cayo",
				"code" => "CY"
			], [
				"stateId" => 1167,
				"countryId" => 25,
				"name" => "Corozal",
				"code" => "CZ"
			], [
				"stateId" => 1168,
				"countryId" => 25,
				"name" => "Orange Walk",
				"code" => "OW"
			], [
				"stateId" => 1169,
				"countryId" => 25,
				"name" => "Stann Creek",
				"code" => "SC"
			], [
				"stateId" => 1170,
				"countryId" => 25,
				"name" => "Toledo",
				"code" => "TO"
			], [
				"stateId" => 1171,
				"countryId" => 29,
				"name" => "Chuquisaca",
				"code" => "CQ"
			], [
				"stateId" => 1172,
				"countryId" => 29,
				"name" => "Cochabamba",
				"code" => "CB"
			], [
				"stateId" => 1173,
				"countryId" => 29,
				"name" => "El Beni",
				"code" => "EB"
			], [
				"stateId" => 1174,
				"countryId" => 29,
				"name" => "La Paz",
				"code" => "LP"
			], [
				"stateId" => 1175,
				"countryId" => 29,
				"name" => "Oruro",
				"code" => "OR"
			], [
				"stateId" => 1176,
				"countryId" => 29,
				"name" => "Pando",
				"code" => "PA"
			], [
				"stateId" => 1177,
				"countryId" => 29,
				"name" => "Potosi",
				"code" => "PO"
			], [
				"stateId" => 1178,
				"countryId" => 29,
				"name" => "Santa Cruz",
				"code" => "SC"
			], [
				"stateId" => 1179,
				"countryId" => 29,
				"name" => "Tarija",
				"code" => "TR"
			], [
				"stateId" => 1180,
				"countryId" => 39,
				"name" => "Rakhine State",
				"code" => "RA"
			], [
				"stateId" => 1181,
				"countryId" => 39,
				"name" => "Chin State",
				"code" => "CH"
			], [
				"stateId" => 1182,
				"countryId" => 39,
				"name" => "Ayeyarwady",
				"code" => "AY"
			], [
				"stateId" => 1183,
				"countryId" => 39,
				"name" => "Kachin State",
				"code" => "KC"
			], [
				"stateId" => 1184,
				"countryId" => 39,
				"name" => "Kayin State",
				"code" => "KN"
			], [
				"stateId" => 1185,
				"countryId" => 39,
				"name" => "Kayah State",
				"code" => "KH"
			], [
				"stateId" => 1187,
				"countryId" => 39,
				"name" => "Mandalay",
				"code" => "MD"
			], [
				"stateId" => 1189,
				"countryId" => 39,
				"name" => "Sagaing",
				"code" => "SA"
			], [
				"stateId" => 1190,
				"countryId" => 39,
				"name" => "Shan State",
				"code" => "SH"
			], [
				"stateId" => 1191,
				"countryId" => 39,
				"name" => "Tanintharyi",
				"code" => "TN"
			], [
				"stateId" => 1192,
				"countryId" => 39,
				"name" => "Mon State",
				"code" => "MO"
			], [
				"stateId" => 1194,
				"countryId" => 39,
				"name" => "Magway",
				"code" => "MG"
			], [
				"stateId" => 1195,
				"countryId" => 39,
				"name" => "Bago",
				"code" => "BA"
			], [
				"stateId" => 1196,
				"countryId" => 39,
				"name" => "Yangon",
				"code" => "YA"
			], [
				"stateId" => 1197,
				"countryId" => 26,
				"name" => "Atakora",
				"code" => "AK"
			], [
				"stateId" => 1198,
				"countryId" => 26,
				"name" => "Atlantique",
				"code" => "AQ"
			], [
				"stateId" => 1199,
				"countryId" => 26,
				"name" => "Borgou",
				"code" => "BO"
			], [
				"stateId" => 1200,
				"countryId" => 26,
				"name" => "Mono",
				"code" => "MO"
			], [
				"stateId" => 1201,
				"countryId" => 26,
				"name" => "Oueme",
				"code" => "OU"
			], [
				"stateId" => 1202,
				"countryId" => 26,
				"name" => "Zou",
				"code" => "ZO"
			], [
				"stateId" => 1203,
				"countryId" => 23,
				"name" => "Brestskaya Voblasts'",
				"code" => "BR"
			], [
				"stateId" => 1204,
				"countryId" => 23,
				"name" => "Homyel'skaya Voblasts'",
				"code" => "HO"
			], [
				"stateId" => 1205,
				"countryId" => 23,
				"name" => "Hrodzyenskaya Voblasts'",
				"code" => "HR"
			], [
				"stateId" => 1206,
				"countryId" => 23,
				"name" => "Minsk",
				"code" => "HM"
			], [
				"stateId" => 1207,
				"countryId" => 23,
				"name" => "Minskaya Voblasts'",
				"code" => "MI"
			], [
				"stateId" => 1208,
				"countryId" => 23,
				"name" => "Mahilyowskaya Voblasts'",
				"code" => "MA"
			], [
				"stateId" => 1209,
				"countryId" => 23,
				"name" => "Vitsyebskaya Voblasts'",
				"code" => "VI"
			], [
				"stateId" => 1210,
				"countryId" => 222,
				"name" => "Malaita",
				"code" => "ML"
			], [
				"stateId" => 1211,
				"countryId" => 222,
				"name" => "Western",
				"code" => "WE"
			], [
				"stateId" => 1212,
				"countryId" => 222,
				"name" => "Central",
				"code" => "CN"
			], [
				"stateId" => 1213,
				"countryId" => 222,
				"name" => "Guadalcanal",
				"code" => "GC"
			], [
				"stateId" => 1214,
				"countryId" => 222,
				"name" => "Isabel",
				"code" => "IS"
			], [
				"stateId" => 1215,
				"countryId" => 222,
				"name" => "Makira",
				"code" => "MK"
			], [
				"stateId" => 1216,
				"countryId" => 222,
				"name" => "Temotu",
				"code" => "TE"
			], [
				"stateId" => 1217,
				"countryId" => 33,
				"name" => "Distrito Federal",
				"code" => "DF"
			], [
				"stateId" => 1219,
				"countryId" => 33,
				"name" => "Paro",
				"code" => "PA"
			], [
				"stateId" => 1220,
				"countryId" => 33,
				"name" => "Pernambuco",
				"code" => "PE"
			], [
				"stateId" => 1221,
				"countryId" => 28,
				"name" => "Bumthang",
				"code" => "BU"
			], [
				"stateId" => 1222,
				"countryId" => 28,
				"name" => "Chhukha",
				"code" => "CK"
			], [
				"stateId" => 1223,
				"countryId" => 28,
				"name" => "Chirang",
				"code" => "CR"
			], [
				"stateId" => 1224,
				"countryId" => 28,
				"name" => "Daga",
				"code" => "DA"
			], [
				"stateId" => 1225,
				"countryId" => 28,
				"name" => "Geylegphug",
				"code" => "GE"
			], [
				"stateId" => 1226,
				"countryId" => 28,
				"name" => "Ha",
				"code" => "HA"
			], [
				"stateId" => 1227,
				"countryId" => 28,
				"name" => "Lhuntshi",
				"code" => "LH"
			], [
				"stateId" => 1228,
				"countryId" => 28,
				"name" => "Mongar",
				"code" => "MO"
			], [
				"stateId" => 1229,
				"countryId" => 28,
				"name" => "Paro",
				"code" => "PR"
			], [
				"stateId" => 1230,
				"countryId" => 28,
				"name" => "Pemagatsel",
				"code" => "PM"
			], [
				"stateId" => 1231,
				"countryId" => 28,
				"name" => "Punakha",
				"code" => "PN"
			], [
				"stateId" => 1232,
				"countryId" => 28,
				"name" => "Samchi",
				"code" => "SM"
			], [
				"stateId" => 1233,
				"countryId" => 28,
				"name" => "Samdrup",
				"code" => "SJ"
			], [
				"stateId" => 1234,
				"countryId" => 28,
				"name" => "Shemgang",
				"code" => "SG"
			], [
				"stateId" => 1235,
				"countryId" => 28,
				"name" => "Tashigang",
				"code" => "TA"
			], [
				"stateId" => 1236,
				"countryId" => 28,
				"name" => "Thimphu",
				"code" => "TM"
			], [
				"stateId" => 1237,
				"countryId" => 28,
				"name" => "Tongsa",
				"code" => "TO"
			], [
				"stateId" => 1238,
				"countryId" => 28,
				"name" => "Wangdi Phodrang",
				"code" => "WP"
			], [
				"stateId" => 1239,
				"countryId" => 37,
				"name" => "Burgas",
				"code" => "BR"
			], [
				"stateId" => 1240,
				"countryId" => 37,
				"name" => "Sofiya-Grad",
				"code" => "SG"
			], [
				"stateId" => 1241,
				"countryId" => 37,
				"name" => "Khaskovo",
				"code" => "KK"
			], [
				"stateId" => 1242,
				"countryId" => 37,
				"name" => "Lovech",
				"code" => "LV"
			], [
				"stateId" => 1243,
				"countryId" => 37,
				"name" => "Montana",
				"code" => "MT"
			], [
				"stateId" => 1244,
				"countryId" => 37,
				"name" => "Plovdiv",
				"code" => "PD"
			], [
				"stateId" => 1245,
				"countryId" => 37,
				"name" => "Razgrad",
				"code" => "RG"
			], [
				"stateId" => 1246,
				"countryId" => 37,
				"name" => "Sofiya",
				"code" => "SF"
			], [
				"stateId" => 1247,
				"countryId" => 37,
				"name" => "Varna",
				"code" => "VN"
			], [
				"stateId" => 1248,
				"countryId" => 36,
				"name" => "Belait",
				"code" => "BE"
			], [
				"stateId" => 1249,
				"countryId" => 36,
				"name" => "Brunei and Muara",
				"code" => "BM"
			], [
				"stateId" => 1250,
				"countryId" => 36,
				"name" => "Temburong",
				"code" => "TE"
			], [
				"stateId" => 1251,
				"countryId" => 36,
				"name" => "Tutong",
				"code" => "TU"
			], [
				"stateId" => 1252,
				"countryId" => 40,
				"name" => "Bujumbura",
				"code" => "BU"
			], [
				"stateId" => 1253,
				"countryId" => 40,
				"name" => "Muramvya",
				"code" => "MV"
			], [
				"stateId" => 1254,
				"countryId" => 40,
				"name" => "Bubanza",
				"code" => "BB"
			], [
				"stateId" => 1255,
				"countryId" => 40,
				"name" => "Bururi",
				"code" => "BR"
			], [
				"stateId" => 1256,
				"countryId" => 40,
				"name" => "Cankuzo",
				"code" => "CA"
			], [
				"stateId" => 1257,
				"countryId" => 40,
				"name" => "Cibitoke",
				"code" => "CI"
			], [
				"stateId" => 1258,
				"countryId" => 40,
				"name" => "Gitega",
				"code" => "GI"
			], [
				"stateId" => 1259,
				"countryId" => 40,
				"name" => "Karuzi",
				"code" => "KR"
			], [
				"stateId" => 1260,
				"countryId" => 40,
				"name" => "Kayanza",
				"code" => "KY"
			], [
				"stateId" => 1261,
				"countryId" => 40,
				"name" => "Kirundo",
				"code" => "KI"
			], [
				"stateId" => 1262,
				"countryId" => 40,
				"name" => "Makamba",
				"code" => "MA"
			], [
				"stateId" => 1263,
				"countryId" => 40,
				"name" => "Muyinga",
				"code" => "MY"
			], [
				"stateId" => 1264,
				"countryId" => 40,
				"name" => "Ngozi",
				"code" => "NG"
			], [
				"stateId" => 1265,
				"countryId" => 40,
				"name" => "Rutana",
				"code" => "RT"
			], [
				"stateId" => 1266,
				"countryId" => 40,
				"name" => "Ruyigi",
				"code" => "RY"
			], [
				"stateId" => 1267,
				"countryId" => 41,
				"name" => "Batdambang",
				"code" => "BA"
			], [
				"stateId" => 1268,
				"countryId" => 41,
				"name" => "Kampong Cham",
				"code" => "KM"
			], [
				"stateId" => 1269,
				"countryId" => 41,
				"name" => "Kampong Chhnang",
				"code" => "KG"
			], [
				"stateId" => 1270,
				"countryId" => 41,
				"name" => "Kampong Spoe",
				"code" => "KS"
			], [
				"stateId" => 1271,
				"countryId" => 41,
				"name" => "Kampong Thum",
				"code" => "KT"
			], [
				"stateId" => 1272,
				"countryId" => 41,
				"name" => "Kampot",
				"code" => "KP"
			], [
				"stateId" => 1273,
				"countryId" => 41,
				"name" => "Kandal",
				"code" => "KN"
			], [
				"stateId" => 1274,
				"countryId" => 41,
				"name" => "Kaoh Kong",
				"code" => "KK"
			], [
				"stateId" => 1275,
				"countryId" => 41,
				"name" => "Krachen",
				"code" => "KR"
			], [
				"stateId" => 1276,
				"countryId" => 41,
				"name" => "Mondol Kiri",
				"code" => "MK"
			], [
				"stateId" => 1277,
				"countryId" => 41,
				"name" => "Phnum Penh",
				"code" => "PP"
			], [
				"stateId" => 1278,
				"countryId" => 41,
				"name" => "Pouthisat",
				"code" => "PO"
			], [
				"stateId" => 1279,
				"countryId" => 41,
				"name" => "Preah Vihear",
				"code" => "PH"
			], [
				"stateId" => 1280,
				"countryId" => 41,
				"name" => "Prey Veng",
				"code" => "PY"
			], [
				"stateId" => 1283,
				"countryId" => 41,
				"name" => "Stoeng Treng",
				"code" => "ST"
			], [
				"stateId" => 1284,
				"countryId" => 41,
				"name" => "Svay Rieng",
				"code" => "SR"
			], [
				"stateId" => 1285,
				"countryId" => 41,
				"name" => "Takev",
				"code" => "TA"
			], [
				"stateId" => 1286,
				"countryId" => 41,
				"name" => "Rotanah Kiri",
				"code" => "RO"
			], [
				"stateId" => 1287,
				"countryId" => 41,
				"name" => "Siem Reab",
				"code" => "SI"
			], [
				"stateId" => 1288,
				"countryId" => 41,
				"name" => "Banteay Mean Cheay",
				"code" => "OM"
			], [
				"stateId" => 1289,
				"countryId" => 41,
				"name" => "Keb",
				"code" => "KB"
			], [
				"stateId" => 1290,
				"countryId" => 41,
				"name" => "Otdar Mean Cheay",
				"code" => "OC"
			], [
				"stateId" => 1291,
				"countryId" => 41,
				"name" => "Preah Seihanu",
				"code" => "KA"
			], [
				"stateId" => 1292,
				"countryId" => 47,
				"name" => "Batha",
				"code" => "BA"
			], [
				"stateId" => 1293,
				"countryId" => 47,
				"name" => "Biltine",
				"code" => "BI"
			], [
				"stateId" => 1294,
				"countryId" => 47,
				"name" => "Borkou-Ennedi-Tibesti",
				"code" => "BT"
			], [
				"stateId" => 1295,
				"countryId" => 47,
				"name" => "ChariBaguirmi",
				"code" => "CB"
			], [
				"stateId" => 1296,
				"countryId" => 47,
				"name" => "Guera",
				"code" => "GR"
			], [
				"stateId" => 1297,
				"countryId" => 47,
				"name" => "Kanem",
				"code" => "KA"
			], [
				"stateId" => 1298,
				"countryId" => 47,
				"name" => "Lac",
				"code" => "LC"
			], [
				"stateId" => 1299,
				"countryId" => 47,
				"name" => "Logone Occidental",
				"code" => "LO"
			], [
				"stateId" => 1300,
				"countryId" => 47,
				"name" => "Logone Oriental",
				"code" => "LR"
			], [
				"stateId" => 1301,
				"countryId" => 47,
				"name" => "Mayo-Kebbi",
				"code" => "MK"
			], [
				"stateId" => 1302,
				"countryId" => 47,
				"name" => "Moyen-Chari",
				"code" => "MC"
			], [
				"stateId" => 1303,
				"countryId" => 47,
				"name" => "Ouaddai",
				"code" => "OD"
			], [
				"stateId" => 1304,
				"countryId" => 47,
				"name" => "Salamat",
				"code" => "SA"
			], [
				"stateId" => 1305,
				"countryId" => 47,
				"name" => "Tandjile",
				"code" => "TA"
			], [
				"stateId" => 1306,
				"countryId" => 228,
				"name" => "Central",
				"code" => "CE"
			], [
				"stateId" => 1307,
				"countryId" => 228,
				"name" => "North Central",
				"code" => "NC"
			], [
				"stateId" => 1308,
				"countryId" => 228,
				"name" => "North Eastern",
				"code" => "NE"
			], [
				"stateId" => 1309,
				"countryId" => 228,
				"name" => "North Western",
				"code" => "NW"
			], [
				"stateId" => 1310,
				"countryId" => 228,
				"name" => "Sabaragamuwa",
				"code" => "SA"
			], [
				"stateId" => 1311,
				"countryId" => 228,
				"name" => "Southern",
				"code" => "SO"
			], [
				"stateId" => 1312,
				"countryId" => 228,
				"name" => "Uva",
				"code" => "UV"
			], [
				"stateId" => 1313,
				"countryId" => 228,
				"name" => "Western",
				"code" => "WE"
			], [
				"stateId" => 1314,
				"countryId" => 56,
				"name" => "Bouenza",
				"code" => "BO"
			], [
				"stateId" => 1315,
				"countryId" => 56,
				"name" => "Cuvette",
				"code" => "CU"
			], [
				"stateId" => 1316,
				"countryId" => 56,
				"name" => "Kouilou",
				"code" => "KO"
			], [
				"stateId" => 1317,
				"countryId" => 56,
				"name" => "Lekoumou",
				"code" => "LE"
			], [
				"stateId" => 1318,
				"countryId" => 56,
				"name" => "Likouala",
				"code" => "LI"
			], [
				"stateId" => 1319,
				"countryId" => 56,
				"name" => "Niari",
				"code" => "NI"
			], [
				"stateId" => 1320,
				"countryId" => 56,
				"name" => "Plateaux",
				"code" => "PL"
			], [
				"stateId" => 1321,
				"countryId" => 56,
				"name" => "Sangha",
				"code" => "SA"
			], [
				"stateId" => 1322,
				"countryId" => 56,
				"name" => "Pool",
				"code" => "PO"
			], [
				"stateId" => 1323,
				"countryId" => 56,
				"name" => "Brazzaville",
				"code" => "BR"
			], [
				"stateId" => 1324,
				"countryId" => 55,
				"name" => "Bandundu",
				"code" => "BN"
			], [
				"stateId" => 1325,
				"countryId" => 55,
				"name" => "Equateur",
				"code" => "EQ"
			], [
				"stateId" => 1326,
				"countryId" => 55,
				"name" => "Kasai-Occidental",
				"code" => "KC"
			], [
				"stateId" => 1327,
				"countryId" => 55,
				"name" => "Kasai-Oriental",
				"code" => "KR"
			], [
				"stateId" => 1328,
				"countryId" => 55,
				"name" => "Katanga",
				"code" => "KT"
			], [
				"stateId" => 1329,
				"countryId" => 55,
				"name" => "Kinshasa",
				"code" => "KN"
			], [
				"stateId" => 1331,
				"countryId" => 55,
				"name" => "Bas-Congo",
				"code" => "BC"
			], [
				"stateId" => 1332,
				"countryId" => 55,
				"name" => "Orientale",
				"code" => "HC"
			], [
				"stateId" => 1333,
				"countryId" => 49,
				"name" => "Anhui",
				"code" => "AH"
			], [
				"stateId" => 1334,
				"countryId" => 49,
				"name" => "Zhejiang",
				"code" => "ZJ"
			], [
				"stateId" => 1335,
				"countryId" => 49,
				"name" => "Jiangxi",
				"code" => "JX"
			], [
				"stateId" => 1336,
				"countryId" => 49,
				"name" => "Jiangsu",
				"code" => "JS"
			], [
				"stateId" => 1337,
				"countryId" => 49,
				"name" => "Jilin",
				"code" => "JL"
			], [
				"stateId" => 1338,
				"countryId" => 49,
				"name" => "Qinghai",
				"code" => "QH"
			], [
				"stateId" => 1339,
				"countryId" => 49,
				"name" => "Fujian",
				"code" => "FJ"
			], [
				"stateId" => 1340,
				"countryId" => 49,
				"name" => "Heilongjiang",
				"code" => "HL"
			], [
				"stateId" => 1341,
				"countryId" => 49,
				"name" => "Henan",
				"code" => "HE"
			], [
				"stateId" => 1342,
				"countryId" => 49,
				"name" => "Hebei",
				"code" => "HB"
			], [
				"stateId" => 1343,
				"countryId" => 49,
				"name" => "Hunan",
				"code" => "HN"
			], [
				"stateId" => 1344,
				"countryId" => 49,
				"name" => "Hubei",
				"code" => "HU"
			], [
				"stateId" => 1345,
				"countryId" => 49,
				"name" => "Xinjiang",
				"code" => "XJ"
			], [
				"stateId" => 1346,
				"countryId" => 49,
				"name" => "Xizang",
				"code" => "XZ"
			], [
				"stateId" => 1347,
				"countryId" => 49,
				"name" => "Gansu",
				"code" => "GS"
			], [
				"stateId" => 1348,
				"countryId" => 49,
				"name" => "Guangxi",
				"code" => "GX"
			], [
				"stateId" => 1349,
				"countryId" => 49,
				"name" => "Guizhou",
				"code" => "GZ"
			], [
				"stateId" => 1350,
				"countryId" => 49,
				"name" => "Liaoning",
				"code" => "LN"
			], [
				"stateId" => 1351,
				"countryId" => 49,
				"name" => "Nei Mongol",
				"code" => "NM"
			], [
				"stateId" => 1352,
				"countryId" => 49,
				"name" => "Ningxia",
				"code" => "NX"
			], [
				"stateId" => 1353,
				"countryId" => 49,
				"name" => "Beijing",
				"code" => "BJ"
			], [
				"stateId" => 1354,
				"countryId" => 49,
				"name" => "Shanghai",
				"code" => "SH"
			], [
				"stateId" => 1355,
				"countryId" => 49,
				"name" => "Shanxi",
				"code" => "SX"
			], [
				"stateId" => 1356,
				"countryId" => 49,
				"name" => "Shandong",
				"code" => "SD"
			], [
				"stateId" => 1357,
				"countryId" => 49,
				"name" => "Shaanxi",
				"code" => "SA"
			], [
				"stateId" => 1358,
				"countryId" => 49,
				"name" => "Sichuan",
				"code" => "SC"
			], [
				"stateId" => 1359,
				"countryId" => 49,
				"name" => "Tianjin",
				"code" => "TJ"
			], [
				"stateId" => 1360,
				"countryId" => 49,
				"name" => "Yunnan",
				"code" => "YN"
			], [
				"stateId" => 1361,
				"countryId" => 49,
				"name" => "Guangdong",
				"code" => "GD"
			], [
				"stateId" => 1362,
				"countryId" => 49,
				"name" => "Hainan",
				"code" => "HA"
			], [
				"stateId" => 1363,
				"countryId" => 49,
				"name" => "Chongqing",
				"code" => "CQ"
			], [
				"stateId" => 1364,
				"countryId" => 48,
				"name" => "Valparaiso",
				"code" => "VS"
			], [
				"stateId" => 1365,
				"countryId" => 48,
				"name" => "Aisen del General Carlos Ibanez del Campo",
				"code" => "AI"
			], [
				"stateId" => 1366,
				"countryId" => 48,
				"name" => "Antofagasta",
				"code" => "AN"
			], [
				"stateId" => 1367,
				"countryId" => 48,
				"name" => "Araucania",
				"code" => "AR"
			], [
				"stateId" => 1368,
				"countryId" => 48,
				"name" => "Atacama",
				"code" => "AT"
			], [
				"stateId" => 1369,
				"countryId" => 48,
				"name" => "Bio-Bio",
				"code" => "BI"
			], [
				"stateId" => 1370,
				"countryId" => 48,
				"name" => "Coquimbo",
				"code" => "CO"
			], [
				"stateId" => 1371,
				"countryId" => 48,
				"name" => "Libertador General Bernardo O'Higgins",
				"code" => "LI"
			], [
				"stateId" => 1372,
				"countryId" => 48,
				"name" => "Los Lagos",
				"code" => "LL"
			], [
				"stateId" => 1373,
				"countryId" => 48,
				"name" => "Magallanes y de la Antartica Chilena",
				"code" => "MA"
			], [
				"stateId" => 1374,
				"countryId" => 48,
				"name" => "Maule",
				"code" => "ML"
			], [
				"stateId" => 1375,
				"countryId" => 48,
				"name" => "Region Metropolitana",
				"code" => "RM"
			], [
				"stateId" => 1376,
				"countryId" => 48,
				"name" => "Tarapaca",
				"code" => "TA"
			], [
				"stateId" => 1377,
				"countryId" => 45,
				"name" => "Creek",
				"code" => "CR"
			], [
				"stateId" => 1378,
				"countryId" => 45,
				"name" => "Eastern",
				"code" => "EA"
			], [
				"stateId" => 1379,
				"countryId" => 45,
				"name" => "Midland",
				"code" => "MI"
			], [
				"stateId" => 1380,
				"countryId" => 45,
				"name" => "South Town",
				"code" => "SO"
			], [
				"stateId" => 1381,
				"countryId" => 45,
				"name" => "Spot Bay",
				"code" => "SP"
			], [
				"stateId" => 1382,
				"countryId" => 45,
				"name" => "Stake Bay",
				"code" => "ST"
			], [
				"stateId" => 1383,
				"countryId" => 45,
				"name" => "West End",
				"code" => "WD"
			], [
				"stateId" => 1384,
				"countryId" => 45,
				"name" => "Western",
				"code" => "WN"
			], [
				"stateId" => 1385,
				"countryId" => 42,
				"name" => "Est",
				"code" => "ES"
			], [
				"stateId" => 1386,
				"countryId" => 42,
				"name" => "Littoral",
				"code" => "LT"
			], [
				"stateId" => 1387,
				"countryId" => 42,
				"name" => "NordOuest",
				"code" => "NW"
			], [
				"stateId" => 1388,
				"countryId" => 42,
				"name" => "Ouest",
				"code" => "OU"
			], [
				"stateId" => 1389,
				"countryId" => 42,
				"name" => "SudOuest",
				"code" => "SW"
			], [
				"stateId" => 1390,
				"countryId" => 42,
				"name" => "Adamaoua",
				"code" => "AD"
			], [
				"stateId" => 1391,
				"countryId" => 42,
				"name" => "Centre",
				"code" => "CE"
			], [
				"stateId" => 1392,
				"countryId" => 42,
				"name" => "ExtremeNord",
				"code" => "EN"
			], [
				"stateId" => 1393,
				"countryId" => 42,
				"name" => "Nord",
				"code" => "NO"
			], [
				"stateId" => 1394,
				"countryId" => 42,
				"name" => "Sud",
				"code" => "SU"
			], [
				"stateId" => 1395,
				"countryId" => 54,
				"name" => "Anjouan",
				"code" => "AN"
			], [
				"stateId" => 1396,
				"countryId" => 54,
				"name" => "Grande Comore",
				"code" => "GC"
			], [
				"stateId" => 1397,
				"countryId" => 54,
				"name" => "Moheli",
				"code" => "MO"
			], [
				"stateId" => 1398,
				"countryId" => 53,
				"name" => "Amazonas",
				"code" => "AM"
			], [
				"stateId" => 1399,
				"countryId" => 53,
				"name" => "Antioquia",
				"code" => "AN"
			], [
				"stateId" => 1400,
				"countryId" => 53,
				"name" => "Arauca",
				"code" => "AR"
			], [
				"stateId" => 1401,
				"countryId" => 53,
				"name" => "Atlantico",
				"code" => "AT"
			], [
				"stateId" => 1402,
				"countryId" => 53,
				"name" => "Caqueta",
				"code" => "CQ"
			], [
				"stateId" => 1403,
				"countryId" => 53,
				"name" => "Cauca",
				"code" => "CA"
			], [
				"stateId" => 1404,
				"countryId" => 53,
				"name" => "Cesar",
				"code" => "CE"
			], [
				"stateId" => 1405,
				"countryId" => 53,
				"name" => "Choco",
				"code" => "CH"
			], [
				"stateId" => 1406,
				"countryId" => 53,
				"name" => "Cordoba",
				"code" => "CR"
			], [
				"stateId" => 1408,
				"countryId" => 53,
				"name" => "Guaviare",
				"code" => "GV"
			], [
				"stateId" => 1409,
				"countryId" => 53,
				"name" => "Guainia",
				"code" => "GN"
			], [
				"stateId" => 1410,
				"countryId" => 53,
				"name" => "Huila",
				"code" => "HU"
			], [
				"stateId" => 1411,
				"countryId" => 53,
				"name" => "La Guajira",
				"code" => "LG"
			], [
				"stateId" => 1412,
				"countryId" => 53,
				"name" => "Meta",
				"code" => "ME"
			], [
				"stateId" => 1413,
				"countryId" => 53,
				"name" => "Narino",
				"code" => "NA"
			], [
				"stateId" => 1414,
				"countryId" => 53,
				"name" => "Norte de Santander",
				"code" => "NS"
			], [
				"stateId" => 1415,
				"countryId" => 53,
				"name" => "Putumayo",
				"code" => "PU"
			], [
				"stateId" => 1416,
				"countryId" => 53,
				"name" => "Quindio",
				"code" => "QD"
			], [
				"stateId" => 1417,
				"countryId" => 53,
				"name" => "Risaralda",
				"code" => "RI"
			], [
				"stateId" => 1418,
				"countryId" => 53,
				"name" => "San Andres y Providencia",
				"code" => "SA"
			], [
				"stateId" => 1419,
				"countryId" => 53,
				"name" => "Santander",
				"code" => "ST"
			], [
				"stateId" => 1420,
				"countryId" => 53,
				"name" => "Sucre",
				"code" => "SU"
			], [
				"stateId" => 1421,
				"countryId" => 53,
				"name" => "Tolima",
				"code" => "TO"
			], [
				"stateId" => 1422,
				"countryId" => 53,
				"name" => "Valle del Cauca",
				"code" => "VC"
			], [
				"stateId" => 1423,
				"countryId" => 53,
				"name" => "Vaupes",
				"code" => "VP"
			], [
				"stateId" => 1424,
				"countryId" => 53,
				"name" => "Vichada",
				"code" => "VD"
			], [
				"stateId" => 1425,
				"countryId" => 53,
				"name" => "Casanare",
				"code" => "CS"
			], [
				"stateId" => 1426,
				"countryId" => 53,
				"name" => "Cundinamarca",
				"code" => "CU"
			], [
				"stateId" => 1427,
				"countryId" => 53,
				"name" => "Distrito Capital",
				"code" => "DC"
			], [
				"stateId" => 1428,
				"countryId" => 53,
				"name" => "Bolivar",
				"code" => "BL"
			], [
				"stateId" => 1429,
				"countryId" => 53,
				"name" => "Boyaca",
				"code" => "BY"
			], [
				"stateId" => 1430,
				"countryId" => 53,
				"name" => "Caldas",
				"code" => "CL"
			], [
				"stateId" => 1431,
				"countryId" => 53,
				"name" => "Magdalena",
				"code" => "MA"
			], [
				"stateId" => 1432,
				"countryId" => 59,
				"name" => "Alajuela",
				"code" => "AL"
			], [
				"stateId" => 1433,
				"countryId" => 59,
				"name" => "Cartago",
				"code" => "CA"
			], [
				"stateId" => 1434,
				"countryId" => 59,
				"name" => "Guanacaste",
				"code" => "GU"
			], [
				"stateId" => 1435,
				"countryId" => 59,
				"name" => "Heredia",
				"code" => "HE"
			], [
				"stateId" => 1436,
				"countryId" => 59,
				"name" => "Limon",
				"code" => "LI"
			], [
				"stateId" => 1437,
				"countryId" => 59,
				"name" => "Puntarenas",
				"code" => "PU"
			], [
				"stateId" => 1438,
				"countryId" => 59,
				"name" => "San Jose",
				"code" => "SJ"
			], [
				"stateId" => 1439,
				"countryId" => 46,
				"name" => "Bamingui-Bangoran",
				"code" => "BB"
			], [
				"stateId" => 1440,
				"countryId" => 46,
				"name" => "Basse-Kotto",
				"code" => "BK"
			], [
				"stateId" => 1441,
				"countryId" => 46,
				"name" => "Haute-Kotto",
				"code" => "HK"
			], [
				"stateId" => 1442,
				"countryId" => 46,
				"name" => "Haute-Sangha",
				"code" => "HS"
			], [
				"stateId" => 1443,
				"countryId" => 46,
				"name" => "Haut-Mbomou",
				"code" => "HM"
			], [
				"stateId" => 1444,
				"countryId" => 46,
				"name" => "Kemo-Gribingui",
				"code" => "KG"
			], [
				"stateId" => 1445,
				"countryId" => 46,
				"name" => "Lobaye",
				"code" => "LB"
			], [
				"stateId" => 1446,
				"countryId" => 46,
				"name" => "Mbomou",
				"code" => "MB"
			], [
				"stateId" => 1447,
				"countryId" => 46,
				"name" => "Nana-Mambere",
				"code" => "NM"
			], [
				"stateId" => 1448,
				"countryId" => 46,
				"name" => "Ouaka",
				"code" => "UK"
			], [
				"stateId" => 1449,
				"countryId" => 46,
				"name" => "Ouham",
				"code" => "AC"
			], [
				"stateId" => 1450,
				"countryId" => 46,
				"name" => "Ouham-Pende",
				"code" => "OP"
			], [
				"stateId" => 1451,
				"countryId" => 46,
				"name" => "Vakaga",
				"code" => "VK"
			], [
				"stateId" => 1452,
				"countryId" => 46,
				"name" => "Gribingui",
				"code" => "KB"
			], [
				"stateId" => 1453,
				"countryId" => 46,
				"name" => "Sangha",
				"code" => "SE"
			], [
				"stateId" => 1454,
				"countryId" => 46,
				"name" => "Ombella-Mpoko",
				"code" => "MP"
			], [
				"stateId" => 1455,
				"countryId" => 46,
				"name" => "Bangui",
				"code" => "BG"
			], [
				"stateId" => 1456,
				"countryId" => 62,
				"name" => "Pinar del Rio",
				"code" => "PR"
			], [
				"stateId" => 1457,
				"countryId" => 62,
				"name" => "Ciudad de La Habana",
				"code" => "CH"
			], [
				"stateId" => 1458,
				"countryId" => 62,
				"name" => "Matanzas",
				"code" => "MA"
			], [
				"stateId" => 1459,
				"countryId" => 62,
				"name" => "Isla de la Juventud",
				"code" => "IJ"
			], [
				"stateId" => 1460,
				"countryId" => 62,
				"name" => "Camaguey",
				"code" => "CM"
			], [
				"stateId" => 1461,
				"countryId" => 62,
				"name" => "Ciego de Avila",
				"code" => "CA"
			], [
				"stateId" => 1462,
				"countryId" => 62,
				"name" => "Cienfuegos",
				"code" => "CF"
			], [
				"stateId" => 1463,
				"countryId" => 62,
				"name" => "Granma",
				"code" => "GR"
			], [
				"stateId" => 1464,
				"countryId" => 62,
				"name" => "Guantanamo",
				"code" => "GU"
			], [
				"stateId" => 1465,
				"countryId" => 62,
				"name" => "La Habana",
				"code" => "LH"
			], [
				"stateId" => 1466,
				"countryId" => 62,
				"name" => "Holguin",
				"code" => "HO"
			], [
				"stateId" => 1467,
				"countryId" => 62,
				"name" => "Las Tunas",
				"code" => "LT"
			], [
				"stateId" => 1468,
				"countryId" => 62,
				"name" => "Sancti Spiritus",
				"code" => "SS"
			], [
				"stateId" => 1469,
				"countryId" => 62,
				"name" => "Santiago de Cuba",
				"code" => "SC"
			], [
				"stateId" => 1470,
				"countryId" => 62,
				"name" => "Villa Clara",
				"code" => "VC"
			], [
				"stateId" => 1471,
				"countryId" => 44,
				"name" => "Boa Vista",
				"code" => "BV"
			], [
				"stateId" => 1472,
				"countryId" => 44,
				"name" => "Brava",
				"code" => "BR"
			], [
				"stateId" => 1473,
				"countryId" => 44,
				"name" => "Calheta de São Miguel",
				"code" => "SM"
			], [
				"stateId" => 1474,
				"countryId" => 44,
				"name" => "Maio",
				"code" => "MA"
			], [
				"stateId" => 1475,
				"countryId" => 44,
				"name" => "Paul",
				"code" => "PA"
			], [
				"stateId" => 1476,
				"countryId" => 44,
				"name" => "Praia",
				"code" => "PI"
			], [
				"stateId" => 1477,
				"countryId" => 44,
				"name" => "Ribeira Grande",
				"code" => "RG"
			], [
				"stateId" => 1478,
				"countryId" => 44,
				"name" => "Sal",
				"code" => "SL"
			], [
				"stateId" => 1479,
				"countryId" => 44,
				"name" => "Santa Catarina",
				"code" => "SC"
			], [
				"stateId" => 1480,
				"countryId" => 44,
				"name" => "Sao Nicolau",
				"code" => "SN"
			], [
				"stateId" => 1481,
				"countryId" => 44,
				"name" => "Sao Vicente",
				"code" => "SV"
			], [
				"stateId" => 1482,
				"countryId" => 44,
				"name" => "Tarrafal",
				"code" => "TF"
			], [
				"stateId" => 1483,
				"countryId" => 63,
				"name" => "Famagusta",
				"code" => "FA"
			], [
				"stateId" => 1484,
				"countryId" => 63,
				"name" => "Kyrenia",
				"code" => "KY"
			], [
				"stateId" => 1485,
				"countryId" => 63,
				"name" => "Larnaca",
				"code" => "LA"
			], [
				"stateId" => 1486,
				"countryId" => 63,
				"name" => "Nicosia",
				"code" => "NI"
			], [
				"stateId" => 1487,
				"countryId" => 63,
				"name" => "Limassol",
				"code" => "LI"
			], [
				"stateId" => 1488,
				"countryId" => 63,
				"name" => "Paphos",
				"code" => "PA"
			], [
				"stateId" => 1489,
				"countryId" => 65,
				"name" => "Arhus",
				"code" => "AR"
			], [
				"stateId" => 1490,
				"countryId" => 65,
				"name" => "Bornholm",
				"code" => "BO"
			], [
				"stateId" => 1491,
				"countryId" => 65,
				"name" => "Frederiksborg",
				"code" => "FR"
			], [
				"stateId" => 1492,
				"countryId" => 65,
				"name" => "Fyn",
				"code" => "FY"
			], [
				"stateId" => 1493,
				"countryId" => 65,
				"name" => "Kobenhavn",
				"code" => "SK"
			], [
				"stateId" => 1494,
				"countryId" => 65,
				"name" => "Nordjylland",
				"code" => "NJ"
			], [
				"stateId" => 1495,
				"countryId" => 65,
				"name" => "Ribe",
				"code" => "RB"
			], [
				"stateId" => 1496,
				"countryId" => 65,
				"name" => "Ringkobing",
				"code" => "RK"
			], [
				"stateId" => 1497,
				"countryId" => 65,
				"name" => "Roskilde",
				"code" => "RS"
			], [
				"stateId" => 1498,
				"countryId" => 65,
				"name" => "Sonderjylland",
				"code" => "SJ"
			], [
				"stateId" => 1499,
				"countryId" => 65,
				"name" => "Storstrom",
				"code" => "ST"
			], [
				"stateId" => 1500,
				"countryId" => 65,
				"name" => "Vejle",
				"code" => "VJ"
			], [
				"stateId" => 1501,
				"countryId" => 65,
				"name" => "Vestsjalland",
				"code" => "VS"
			], [
				"stateId" => 1502,
				"countryId" => 65,
				"name" => "Viborg",
				"code" => "VB"
			], [
				"stateId" => 1503,
				"countryId" => 65,
				"name" => "Fredericksberg",
				"code" => "SF"
			], [
				"stateId" => 1504,
				"countryId" => 66,
				"name" => "'Ali Sabih",
				"code" => "AS"
			], [
				"stateId" => 1505,
				"countryId" => 66,
				"name" => "Dikhil",
				"code" => "DI"
			], [
				"stateId" => 1506,
				"countryId" => 66,
				"name" => "Djibouti",
				"code" => "DJ"
			], [
				"stateId" => 1507,
				"countryId" => 66,
				"name" => "Obock",
				"code" => "OB"
			], [
				"stateId" => 1508,
				"countryId" => 66,
				"name" => "Tadjoura",
				"code" => "TA"
			], [
				"stateId" => 1509,
				"countryId" => 67,
				"name" => "Saint Andrew",
				"code" => "AN"
			], [
				"stateId" => 1510,
				"countryId" => 67,
				"name" => "Saint David",
				"code" => "DA"
			], [
				"stateId" => 1511,
				"countryId" => 67,
				"name" => "Saint George",
				"code" => "GO"
			], [
				"stateId" => 1512,
				"countryId" => 67,
				"name" => "Saint John",
				"code" => "JN"
			], [
				"stateId" => 1513,
				"countryId" => 67,
				"name" => "Saint Joseph",
				"code" => "JH"
			], [
				"stateId" => 1514,
				"countryId" => 67,
				"name" => "Saint Luke",
				"code" => "LU"
			], [
				"stateId" => 1515,
				"countryId" => 67,
				"name" => "Saint Mark",
				"code" => "MA"
			], [
				"stateId" => 1516,
				"countryId" => 67,
				"name" => "Saint Patrick",
				"code" => "PK"
			], [
				"stateId" => 1517,
				"countryId" => 67,
				"name" => "Saint Paul",
				"code" => "PL"
			], [
				"stateId" => 1518,
				"countryId" => 67,
				"name" => "Saint Peter",
				"code" => "PR"
			], [
				"stateId" => 1519,
				"countryId" => 68,
				"name" => "Azua",
				"code" => "AZ"
			], [
				"stateId" => 1520,
				"countryId" => 68,
				"name" => "Baoruco",
				"code" => "BR"
			], [
				"stateId" => 1521,
				"countryId" => 68,
				"name" => "Barahona",
				"code" => "BH"
			], [
				"stateId" => 1522,
				"countryId" => 68,
				"name" => "Dajabon",
				"code" => "DA"
			], [
				"stateId" => 1523,
				"countryId" => 68,
				"name" => "Distrito Nacional",
				"code" => "DN"
			], [
				"stateId" => 1524,
				"countryId" => 68,
				"name" => "Duarte",
				"code" => "DU"
			], [
				"stateId" => 1525,
				"countryId" => 68,
				"name" => "Espaillat",
				"code" => "ES"
			], [
				"stateId" => 1526,
				"countryId" => 68,
				"name" => "Independencia",
				"code" => "IN"
			], [
				"stateId" => 1527,
				"countryId" => 68,
				"name" => "La Altagracia",
				"code" => "AL"
			], [
				"stateId" => 1528,
				"countryId" => 68,
				"name" => "Elias Pina",
				"code" => "EP"
			], [
				"stateId" => 1529,
				"countryId" => 68,
				"name" => "La Romana",
				"code" => "RO"
			], [
				"stateId" => 1530,
				"countryId" => 68,
				"name" => "Maria Trinidad Sanchez",
				"code" => "MT"
			], [
				"stateId" => 1531,
				"countryId" => 68,
				"name" => "Monte Cristi",
				"code" => "MC"
			], [
				"stateId" => 1532,
				"countryId" => 68,
				"name" => "Pedernales",
				"code" => "PN"
			], [
				"stateId" => 1533,
				"countryId" => 68,
				"name" => "Peravia",
				"code" => "PR"
			], [
				"stateId" => 1534,
				"countryId" => 68,
				"name" => "Puerto Plata",
				"code" => "PP"
			], [
				"stateId" => 1535,
				"countryId" => 68,
				"name" => "Salcedo",
				"code" => "SC"
			], [
				"stateId" => 1536,
				"countryId" => 68,
				"name" => "Samana",
				"code" => "SM"
			], [
				"stateId" => 1537,
				"countryId" => 68,
				"name" => "Sanchez Ramirez",
				"code" => "SZ"
			], [
				"stateId" => 1538,
				"countryId" => 68,
				"name" => "San Juan",
				"code" => "JU"
			], [
				"stateId" => 1539,
				"countryId" => 68,
				"name" => "San Pedro de Macoris",
				"code" => "PM"
			], [
				"stateId" => 1540,
				"countryId" => 68,
				"name" => "Santiago",
				"code" => "ST"
			], [
				"stateId" => 1541,
				"countryId" => 68,
				"name" => "Santiago Rodriguez",
				"code" => "SR"
			], [
				"stateId" => 1542,
				"countryId" => 68,
				"name" => "Valverde",
				"code" => "VA"
			], [
				"stateId" => 1543,
				"countryId" => 68,
				"name" => "El Seibo",
				"code" => "SE"
			], [
				"stateId" => 1544,
				"countryId" => 68,
				"name" => "Hato Mayor",
				"code" => "HM"
			], [
				"stateId" => 1545,
				"countryId" => 68,
				"name" => "La Vega",
				"code" => "VE"
			], [
				"stateId" => 1546,
				"countryId" => 68,
				"name" => "Monsenor Nouel",
				"code" => "MN"
			], [
				"stateId" => 1547,
				"countryId" => 68,
				"name" => "Monte Plata",
				"code" => "MP"
			], [
				"stateId" => 1548,
				"countryId" => 68,
				"name" => "San Cristobal",
				"code" => "CR"
			], [
				"stateId" => 1549,
				"countryId" => 70,
				"name" => "Galapagos",
				"code" => "GA"
			], [
				"stateId" => 1550,
				"countryId" => 70,
				"name" => "Azuay",
				"code" => "AZ"
			], [
				"stateId" => 1551,
				"countryId" => 70,
				"name" => "Bolivar",
				"code" => "BO"
			], [
				"stateId" => 1552,
				"countryId" => 70,
				"name" => "Canar",
				"code" => "CN"
			], [
				"stateId" => 1553,
				"countryId" => 70,
				"name" => "Carchi",
				"code" => "CR"
			], [
				"stateId" => 1554,
				"countryId" => 70,
				"name" => "Chimborazo",
				"code" => "CB"
			], [
				"stateId" => 1555,
				"countryId" => 70,
				"name" => "Cotopaxi",
				"code" => "CT"
			], [
				"stateId" => 1556,
				"countryId" => 70,
				"name" => "El Oro",
				"code" => "EO"
			], [
				"stateId" => 1557,
				"countryId" => 70,
				"name" => "Esmeraldas",
				"code" => "ES"
			], [
				"stateId" => 1558,
				"countryId" => 70,
				"name" => "Guayas",
				"code" => "GU"
			], [
				"stateId" => 1559,
				"countryId" => 70,
				"name" => "Imbabura",
				"code" => "IM"
			], [
				"stateId" => 1560,
				"countryId" => 70,
				"name" => "Loja",
				"code" => "LJ"
			], [
				"stateId" => 1561,
				"countryId" => 70,
				"name" => "Los Rios",
				"code" => "LR"
			], [
				"stateId" => 1562,
				"countryId" => 70,
				"name" => "Manabi",
				"code" => "MN"
			], [
				"stateId" => 1563,
				"countryId" => 70,
				"name" => "Morona-Santiago",
				"code" => "MS"
			], [
				"stateId" => 1564,
				"countryId" => 70,
				"name" => "Pastaza",
				"code" => "PA"
			], [
				"stateId" => 1565,
				"countryId" => 70,
				"name" => "Pichincha",
				"code" => "PI"
			], [
				"stateId" => 1566,
				"countryId" => 70,
				"name" => "Tungurahua",
				"code" => "TU"
			], [
				"stateId" => 1567,
				"countryId" => 70,
				"name" => "Zamora-Chinchipe",
				"code" => "ZC"
			], [
				"stateId" => 1568,
				"countryId" => 70,
				"name" => "Napo",
				"code" => "NA"
			], [
				"stateId" => 1569,
				"countryId" => 70,
				"name" => "Sucumbios",
				"code" => "SU"
			], [
				"stateId" => 1570,
				"countryId" => 71,
				"name" => "Ad Daqahliyah",
				"code" => "DQ"
			], [
				"stateId" => 1571,
				"countryId" => 71,
				"name" => "Al Bahr al Ahmar",
				"code" => "BA"
			], [
				"stateId" => 1572,
				"countryId" => 71,
				"name" => "Al Buhayrah",
				"code" => "BH"
			], [
				"stateId" => 1573,
				"countryId" => 71,
				"name" => "Al Fayyum",
				"code" => "FY"
			], [
				"stateId" => 1574,
				"countryId" => 71,
				"name" => "Al Gharbiyah",
				"code" => "GH"
			], [
				"stateId" => 1575,
				"countryId" => 71,
				"name" => "Al Iskandariyah",
				"code" => "IK"
			], [
				"stateId" => 1576,
				"countryId" => 71,
				"name" => "Al Isma'iliyah",
				"code" => "IS"
			], [
				"stateId" => 1577,
				"countryId" => 71,
				"name" => "Al Jizah",
				"code" => "JZ"
			], [
				"stateId" => 1578,
				"countryId" => 71,
				"name" => "Al Minufiyah",
				"code" => "MF"
			], [
				"stateId" => 1579,
				"countryId" => 71,
				"name" => "Al Minya",
				"code" => "MN"
			], [
				"stateId" => 1580,
				"countryId" => 71,
				"name" => "Al Qahirah",
				"code" => "QH"
			], [
				"stateId" => 1581,
				"countryId" => 71,
				"name" => "Al Qaly¯biyah",
				"code" => "QL"
			], [
				"stateId" => 1582,
				"countryId" => 71,
				"name" => "Al Wadi al Jadid",
				"code" => "WJ"
			], [
				"stateId" => 1583,
				"countryId" => 71,
				"name" => "Ash Sharqiyah",
				"code" => "SQ"
			], [
				"stateId" => 1584,
				"countryId" => 71,
				"name" => "As Suways",
				"code" => "SW"
			], [
				"stateId" => 1585,
				"countryId" => 71,
				"name" => "Aswan",
				"code" => "AN"
			], [
				"stateId" => 1586,
				"countryId" => 71,
				"name" => "Asyut",
				"code" => "AT"
			], [
				"stateId" => 1587,
				"countryId" => 71,
				"name" => "Bani Suwayf",
				"code" => "BN"
			], [
				"stateId" => 1588,
				"countryId" => 71,
				"name" => "Bur Sa'id",
				"code" => "BS"
			], [
				"stateId" => 1589,
				"countryId" => 71,
				"name" => "Dumyat",
				"code" => "DT"
			], [
				"stateId" => 1590,
				"countryId" => 71,
				"name" => "Kafr ash Shaykh",
				"code" => "KS"
			], [
				"stateId" => 1591,
				"countryId" => 71,
				"name" => "Matruh",
				"code" => "MT"
			], [
				"stateId" => 1592,
				"countryId" => 71,
				"name" => "Qina",
				"code" => "QN"
			], [
				"stateId" => 1593,
				"countryId" => 71,
				"name" => "Suhaj",
				"code" => "SJ"
			], [
				"stateId" => 1594,
				"countryId" => 71,
				"name" => "Janub Sina'",
				"code" => "JS"
			], [
				"stateId" => 1595,
				"countryId" => 71,
				"name" => "Shamal Sina'",
				"code" => "SS"
			], [
				"stateId" => 1596,
				"countryId" => 117,
				"name" => "Carlow",
				"code" => "CW"
			], [
				"stateId" => 1597,
				"countryId" => 117,
				"name" => "Cavan",
				"code" => "CN"
			], [
				"stateId" => 1598,
				"countryId" => 117,
				"name" => "Clare",
				"code" => "CE"
			], [
				"stateId" => 1599,
				"countryId" => 117,
				"name" => "Cork",
				"code" => "CK"
			], [
				"stateId" => 1600,
				"countryId" => 117,
				"name" => "Donegal",
				"code" => "DL"
			], [
				"stateId" => 1601,
				"countryId" => 117,
				"name" => "Dublin",
				"code" => "DN"
			], [
				"stateId" => 1602,
				"countryId" => 117,
				"name" => "Galway",
				"code" => "GY"
			], [
				"stateId" => 1603,
				"countryId" => 117,
				"name" => "Kerry",
				"code" => "KY"
			], [
				"stateId" => 1604,
				"countryId" => 117,
				"name" => "Kildare",
				"code" => "KE"
			], [
				"stateId" => 1605,
				"countryId" => 117,
				"name" => "Kilkenny",
				"code" => "KK"
			], [
				"stateId" => 1606,
				"countryId" => 117,
				"name" => "Leitrim",
				"code" => "LM"
			], [
				"stateId" => 1607,
				"countryId" => 117,
				"name" => "Laois",
				"code" => "LS"
			], [
				"stateId" => 1608,
				"countryId" => 117,
				"name" => "Limerick",
				"code" => "LK"
			], [
				"stateId" => 1609,
				"countryId" => 117,
				"name" => "Longford",
				"code" => "LD"
			], [
				"stateId" => 1610,
				"countryId" => 117,
				"name" => "Louth",
				"code" => "LH"
			], [
				"stateId" => 1611,
				"countryId" => 117,
				"name" => "Mayo",
				"code" => "MO"
			], [
				"stateId" => 1612,
				"countryId" => 117,
				"name" => "Meath",
				"code" => "MH"
			], [
				"stateId" => 1613,
				"countryId" => 117,
				"name" => "Monaghan",
				"code" => "MN"
			], [
				"stateId" => 1614,
				"countryId" => 117,
				"name" => "Offaly",
				"code" => "OY"
			], [
				"stateId" => 1615,
				"countryId" => 117,
				"name" => "Roscommon",
				"code" => "RN"
			], [
				"stateId" => 1616,
				"countryId" => 117,
				"name" => "Sligo",
				"code" => "SO"
			], [
				"stateId" => 1617,
				"countryId" => 117,
				"name" => "Tipperary",
				"code" => "TY"
			], [
				"stateId" => 1618,
				"countryId" => 117,
				"name" => "Waterford",
				"code" => "WD"
			], [
				"stateId" => 1619,
				"countryId" => 117,
				"name" => "Westmeath",
				"code" => "WH"
			], [
				"stateId" => 1620,
				"countryId" => 117,
				"name" => "Wexford",
				"code" => "WX"
			], [
				"stateId" => 1621,
				"countryId" => 117,
				"name" => "Wicklow",
				"code" => "WW"
			], [
				"stateId" => 1622,
				"countryId" => 73,
				"name" => "Annobon",
				"code" => "AN"
			], [
				"stateId" => 1623,
				"countryId" => 73,
				"name" => "Bioko Norte",
				"code" => "BN"
			], [
				"stateId" => 1624,
				"countryId" => 73,
				"name" => "Bioko Sur",
				"code" => "BS"
			], [
				"stateId" => 1625,
				"countryId" => 73,
				"name" => "Centro Sur",
				"code" => "CS"
			], [
				"stateId" => 1626,
				"countryId" => 73,
				"name" => "Kie-Ntem",
				"code" => "KN"
			], [
				"stateId" => 1627,
				"countryId" => 73,
				"name" => "Litoral",
				"code" => "LI"
			], [
				"stateId" => 1628,
				"countryId" => 73,
				"name" => "Wele-Nzas",
				"code" => "WN"
			], [
				"stateId" => 1629,
				"countryId" => 75,
				"name" => "Harjumaa",
				"code" => "HA"
			], [
				"stateId" => 1630,
				"countryId" => 75,
				"name" => "Hiiumaa",
				"code" => "HI"
			], [
				"stateId" => 1631,
				"countryId" => 75,
				"name" => "Ida-Virumaa",
				"code" => "IV"
			], [
				"stateId" => 1632,
				"countryId" => 75,
				"name" => "Jarvamaa",
				"code" => "JR"
			], [
				"stateId" => 1633,
				"countryId" => 75,
				"name" => "Jogevamaa",
				"code" => "JN"
			], [
				"stateId" => 1634,
				"countryId" => 75,
				"name" => "Laanemaa",
				"code" => "LN"
			], [
				"stateId" => 1635,
				"countryId" => 75,
				"name" => "Laane-Virumaa",
				"code" => "LV"
			], [
				"stateId" => 1636,
				"countryId" => 75,
				"name" => "Parnumaa",
				"code" => "PR"
			], [
				"stateId" => 1637,
				"countryId" => 75,
				"name" => "Polvamaa",
				"code" => "PL"
			], [
				"stateId" => 1638,
				"countryId" => 75,
				"name" => "Raplamaa",
				"code" => "RA"
			], [
				"stateId" => 1639,
				"countryId" => 75,
				"name" => "Saaremaa",
				"code" => "SA"
			], [
				"stateId" => 1640,
				"countryId" => 75,
				"name" => "Tartumaa",
				"code" => "TA"
			], [
				"stateId" => 1641,
				"countryId" => 75,
				"name" => "Valgamaa",
				"code" => "VG"
			], [
				"stateId" => 1642,
				"countryId" => 75,
				"name" => "Viljandimaa",
				"code" => "VD"
			], [
				"stateId" => 1643,
				"countryId" => 75,
				"name" => "Vorumaa",
				"code" => "VR"
			], [
				"stateId" => 1644,
				"countryId" => 72,
				"name" => "Ahuachapan",
				"code" => "AH"
			], [
				"stateId" => 1645,
				"countryId" => 72,
				"name" => "Cabanas",
				"code" => "CA"
			], [
				"stateId" => 1646,
				"countryId" => 72,
				"name" => "Chalatenango",
				"code" => "CH"
			], [
				"stateId" => 1647,
				"countryId" => 72,
				"name" => "Cuscatlan",
				"code" => "CU"
			], [
				"stateId" => 1648,
				"countryId" => 72,
				"name" => "La Libertad",
				"code" => "LI"
			], [
				"stateId" => 1649,
				"countryId" => 72,
				"name" => "La Paz",
				"code" => "PA"
			], [
				"stateId" => 1650,
				"countryId" => 72,
				"name" => "La Union",
				"code" => "UN"
			], [
				"stateId" => 1651,
				"countryId" => 72,
				"name" => "Morazan",
				"code" => "MO"
			], [
				"stateId" => 1652,
				"countryId" => 72,
				"name" => "San Miguel",
				"code" => "SM"
			], [
				"stateId" => 1653,
				"countryId" => 72,
				"name" => "San Salvador",
				"code" => "SS"
			], [
				"stateId" => 1654,
				"countryId" => 72,
				"name" => "Santa Ana",
				"code" => "SA"
			], [
				"stateId" => 1655,
				"countryId" => 72,
				"name" => "San Vicente",
				"code" => "SI"
			], [
				"stateId" => 1656,
				"countryId" => 72,
				"name" => "Sonsonate",
				"code" => "SO"
			], [
				"stateId" => 1657,
				"countryId" => 72,
				"name" => "Usulutan",
				"code" => "US"
			], [
				"stateId" => 1687,
				"countryId" => 76,
				"name" => "Harari People",
				"code" => "HA"
			], [
				"stateId" => 1688,
				"countryId" => 76,
				"name" => "Gambela Peoples",
				"code" => "GA"
			], [
				"stateId" => 1690,
				"countryId" => 76,
				"name" => "Benshangul-Gumaz",
				"code" => "BE"
			], [
				"stateId" => 1691,
				"countryId" => 76,
				"name" => "Tigray",
				"code" => "TI"
			], [
				"stateId" => 1692,
				"countryId" => 76,
				"name" => "Amhara",
				"code" => "AM"
			], [
				"stateId" => 1693,
				"countryId" => 76,
				"name" => "Afar",
				"code" => "AF"
			], [
				"stateId" => 1694,
				"countryId" => 76,
				"name" => "Oromia",
				"code" => "OR"
			], [
				"stateId" => 1695,
				"countryId" => 76,
				"name" => "Somali",
				"code" => "SO"
			], [
				"stateId" => 1696,
				"countryId" => 76,
				"name" => "Addis Ababa",
				"code" => "AA"
			], [
				"stateId" => 1697,
				"countryId" => 76,
				"name" => "Southern Nations",
				"code" => "SN"
			], [
				"stateId" => 1746,
				"countryId" => 64,
				"name" => "Hlavni Mesto Praha",
				"code" => "PR"
			], [
				"stateId" => 1772,
				"countryId" => 81,
				"name" => "Ahvenanmaa",
				"code" => "AV"
			], [
				"stateId" => 1777,
				"countryId" => 81,
				"name" => "Lappi",
				"code" => "LP"
			], [
				"stateId" => 1779,
				"countryId" => 81,
				"name" => "Oulu Laani",
				"code" => "OU"
			], [
				"stateId" => 1784,
				"countryId" => 80,
				"name" => "Central",
				"code" => "CE"
			], [
				"stateId" => 1785,
				"countryId" => 80,
				"name" => "Eastern",
				"code" => "EA"
			], [
				"stateId" => 1786,
				"countryId" => 80,
				"name" => "Northern",
				"code" => "NO"
			], [
				"stateId" => 1787,
				"countryId" => 80,
				"name" => "Rotuma",
				"code" => "RO"
			], [
				"stateId" => 1788,
				"countryId" => 80,
				"name" => "Western",
				"code" => "WE"
			], [
				"stateId" => 1789,
				"countryId" => 160,
				"name" => "Kosrae",
				"code" => "KO"
			], [
				"stateId" => 1790,
				"countryId" => 160,
				"name" => "Pohnpei",
				"code" => "PO"
			], [
				"stateId" => 1791,
				"countryId" => 160,
				"name" => "Chuuk",
				"code" => "CH"
			], [
				"stateId" => 1792,
				"countryId" => 160,
				"name" => "Yap",
				"code" => "YA"
			], [
				"stateId" => 1793,
				"countryId" => 82,
				"name" => "Aquitaine",
				"code" => "AQ"
			], [
				"stateId" => 1794,
				"countryId" => 82,
				"name" => "Auvergne",
				"code" => "AU"
			], [
				"stateId" => 1795,
				"countryId" => 82,
				"name" => "Basse-Normandie",
				"code" => "BA"
			], [
				"stateId" => 1796,
				"countryId" => 82,
				"name" => "Bourgogne",
				"code" => "BO"
			], [
				"stateId" => 1797,
				"countryId" => 82,
				"name" => "Bretagne",
				"code" => "BR"
			], [
				"stateId" => 1798,
				"countryId" => 82,
				"name" => "Centre",
				"code" => "CE"
			], [
				"stateId" => 1799,
				"countryId" => 82,
				"name" => "Champagne-Ardenne",
				"code" => "CH"
			], [
				"stateId" => 1800,
				"countryId" => 82,
				"name" => "Corse",
				"code" => "CO"
			], [
				"stateId" => 1801,
				"countryId" => 82,
				"name" => "Franche-Comte",
				"code" => "FC"
			], [
				"stateId" => 1802,
				"countryId" => 82,
				"name" => "Haute-Normandie",
				"code" => "HA"
			], [
				"stateId" => 1803,
				"countryId" => 82,
				"name" => "Ile-De-France",
				"code" => "IL"
			], [
				"stateId" => 1804,
				"countryId" => 82,
				"name" => "Languedoc-Roussillon",
				"code" => "LA"
			], [
				"stateId" => 1805,
				"countryId" => 82,
				"name" => "Limousin",
				"code" => "LI"
			], [
				"stateId" => 1806,
				"countryId" => 82,
				"name" => "Lorraine",
				"code" => "LO"
			], [
				"stateId" => 1807,
				"countryId" => 82,
				"name" => "Midi-Pyrenees",
				"code" => "MI"
			], [
				"stateId" => 1808,
				"countryId" => 82,
				"name" => "Nord-Pas-de-Calais",
				"code" => "NO"
			], [
				"stateId" => 1809,
				"countryId" => 82,
				"name" => "Pays de la Loire",
				"code" => "PA"
			], [
				"stateId" => 1810,
				"countryId" => 82,
				"name" => "Picardie",
				"code" => "PI"
			], [
				"stateId" => 1811,
				"countryId" => 82,
				"name" => "Poitou-Charentes",
				"code" => "PO"
			], [
				"stateId" => 1812,
				"countryId" => 82,
				"name" => "Provence-Alpes-Cote d'Azur",
				"code" => "PR"
			], [
				"stateId" => 1813,
				"countryId" => 82,
				"name" => "Rhone-Alpes",
				"code" => "RH"
			], [
				"stateId" => 1814,
				"countryId" => 82,
				"name" => "Alsace",
				"code" => "AL"
			], [
				"stateId" => 1815,
				"countryId" => 88,
				"name" => "Banjul",
				"code" => "BJ"
			], [
				"stateId" => 1816,
				"countryId" => 88,
				"name" => "Lower River",
				"code" => "LR"
			], [
				"stateId" => 1817,
				"countryId" => 88,
				"name" => "MacCarthy Island",
				"code" => "MC"
			], [
				"stateId" => 1818,
				"countryId" => 88,
				"name" => "Upper River",
				"code" => "UR"
			], [
				"stateId" => 1819,
				"countryId" => 88,
				"name" => "Western",
				"code" => "WE"
			], [
				"stateId" => 1820,
				"countryId" => 88,
				"name" => "North Bank",
				"code" => "NB"
			], [
				"stateId" => 1821,
				"countryId" => 87,
				"name" => "Estuaire",
				"code" => "ES"
			], [
				"stateId" => 1822,
				"countryId" => 87,
				"name" => "Haut-Ogooue",
				"code" => "HO"
			], [
				"stateId" => 1823,
				"countryId" => 87,
				"name" => "Moyen-Ogooue",
				"code" => "MO"
			], [
				"stateId" => 1824,
				"countryId" => 87,
				"name" => "Ngounie",
				"code" => "NG"
			], [
				"stateId" => 1825,
				"countryId" => 87,
				"name" => "Nyanga",
				"code" => "NY"
			], [
				"stateId" => 1826,
				"countryId" => 87,
				"name" => "Ogooue-Ivindo",
				"code" => "OI"
			], [
				"stateId" => 1827,
				"countryId" => 87,
				"name" => "Ogooue-Lolo",
				"code" => "OL"
			], [
				"stateId" => 1828,
				"countryId" => 87,
				"name" => "Ogooue-Maritime",
				"code" => "OM"
			], [
				"stateId" => 1829,
				"countryId" => 87,
				"name" => "Woleu-Ntem",
				"code" => "WN"
			], [
				"stateId" => 1831,
				"countryId" => 90,
				"name" => "Abkhazia",
				"code" => "AB"
			], [
				"stateId" => 1833,
				"countryId" => 90,
				"name" => "Ajaria",
				"code" => "AJ"
			], [
				"stateId" => 1879,
				"countryId" => 90,
				"name" => "T'bilisi",
				"code" => "TB"
			], [
				"stateId" => 1893,
				"countryId" => 92,
				"name" => "Greater Accra",
				"code" => "AA"
			], [
				"stateId" => 1894,
				"countryId" => 92,
				"name" => "Ashanti",
				"code" => "AH"
			], [
				"stateId" => 1895,
				"countryId" => 92,
				"name" => "Brong-Ahafo",
				"code" => "BA"
			], [
				"stateId" => 1896,
				"countryId" => 92,
				"name" => "Central",
				"code" => "CP"
			], [
				"stateId" => 1897,
				"countryId" => 92,
				"name" => "Eastern",
				"code" => "EP"
			], [
				"stateId" => 1898,
				"countryId" => 92,
				"name" => "Northern",
				"code" => "NP"
			], [
				"stateId" => 1899,
				"countryId" => 92,
				"name" => "Volta",
				"code" => "TV"
			], [
				"stateId" => 1900,
				"countryId" => 92,
				"name" => "Western",
				"code" => "WP"
			], [
				"stateId" => 1901,
				"countryId" => 92,
				"name" => "Upper East",
				"code" => "UE"
			], [
				"stateId" => 1902,
				"countryId" => 92,
				"name" => "Upper West",
				"code" => "UW"
			], [
				"stateId" => 1903,
				"countryId" => 97,
				"name" => "Saint Andrew",
				"code" => "AN"
			], [
				"stateId" => 1904,
				"countryId" => 97,
				"name" => "Saint David",
				"code" => "DA"
			], [
				"stateId" => 1905,
				"countryId" => 97,
				"name" => "Saint George",
				"code" => "GE"
			], [
				"stateId" => 1906,
				"countryId" => 97,
				"name" => "Saint John",
				"code" => "JO"
			], [
				"stateId" => 1907,
				"countryId" => 97,
				"name" => "Saint Mark",
				"code" => "MA"
			], [
				"stateId" => 1908,
				"countryId" => 97,
				"name" => "Saint Patrick",
				"code" => "PA"
			], [
				"stateId" => 1909,
				"countryId" => 96,
				"name" => "Nordgronland",
				"code" => "NG"
			], [
				"stateId" => 1910,
				"countryId" => 96,
				"name" => "Ostgronland",
				"code" => "EG"
			], [
				"stateId" => 1911,
				"countryId" => 96,
				"name" => "Vestgronland",
				"code" => "VG"
			], [
				"stateId" => 1912,
				"countryId" => 91,
				"name" => "Baden-Wurttemberg",
				"code" => "BW"
			], [
				"stateId" => 1913,
				"countryId" => 91,
				"name" => "Bayern",
				"code" => "BY"
			], [
				"stateId" => 1914,
				"countryId" => 91,
				"name" => "Bremen",
				"code" => "HB"
			], [
				"stateId" => 1915,
				"countryId" => 91,
				"name" => "Hamburg",
				"code" => "HH"
			], [
				"stateId" => 1916,
				"countryId" => 91,
				"name" => "Hessen",
				"code" => "HE"
			], [
				"stateId" => 1917,
				"countryId" => 91,
				"name" => "Niedersachsen",
				"code" => "NI"
			], [
				"stateId" => 1918,
				"countryId" => 91,
				"name" => "Nordrhein-Westfalen",
				"code" => "NW"
			], [
				"stateId" => 1919,
				"countryId" => 91,
				"name" => "Rheinland-Pfalz",
				"code" => "RP"
			], [
				"stateId" => 1920,
				"countryId" => 91,
				"name" => "Saarland",
				"code" => "SL"
			], [
				"stateId" => 1921,
				"countryId" => 91,
				"name" => "Schleswig-Holstein",
				"code" => "SH"
			], [
				"stateId" => 1922,
				"countryId" => 91,
				"name" => "Brandenburg",
				"code" => "BB"
			], [
				"stateId" => 1923,
				"countryId" => 91,
				"name" => "Mecklenburg-Vorpommern",
				"code" => "MY"
			], [
				"stateId" => 1924,
				"countryId" => 91,
				"name" => "Sachsen",
				"code" => "SN"
			], [
				"stateId" => 1925,
				"countryId" => 91,
				"name" => "Sachsen-Anhalt",
				"code" => "ST"
			], [
				"stateId" => 1926,
				"countryId" => 91,
				"name" => "Thuringen",
				"code" => "TH"
			], [
				"stateId" => 1927,
				"countryId" => 91,
				"name" => "Berlin",
				"code" => "BE"
			], [
				"stateId" => 1928,
				"countryId" => 95,
				"name" => "Evros",
				"code" => "ES"
			], [
				"stateId" => 1929,
				"countryId" => 95,
				"name" => "Rodhopi",
				"code" => "RD"
			], [
				"stateId" => 1930,
				"countryId" => 95,
				"name" => "Xanthi",
				"code" => "XN"
			], [
				"stateId" => 1931,
				"countryId" => 95,
				"name" => "Drama",
				"code" => "DR"
			], [
				"stateId" => 1932,
				"countryId" => 95,
				"name" => "Serrai",
				"code" => "SR"
			], [
				"stateId" => 1933,
				"countryId" => 95,
				"name" => "Kilkis",
				"code" => "KK"
			], [
				"stateId" => 1934,
				"countryId" => 95,
				"name" => "Pella",
				"code" => "PL"
			], [
				"stateId" => 1935,
				"countryId" => 95,
				"name" => "Florina",
				"code" => "FL"
			], [
				"stateId" => 1936,
				"countryId" => 95,
				"name" => "Kastoria",
				"code" => "KS"
			], [
				"stateId" => 1937,
				"countryId" => 95,
				"name" => "Grevena",
				"code" => "GE"
			], [
				"stateId" => 1938,
				"countryId" => 95,
				"name" => "Kozani",
				"code" => "KZ"
			], [
				"stateId" => 1939,
				"countryId" => 95,
				"name" => "Imathia",
				"code" => "IM"
			], [
				"stateId" => 1940,
				"countryId" => 95,
				"name" => "Thessaloniki",
				"code" => "TN"
			], [
				"stateId" => 1941,
				"countryId" => 95,
				"name" => "Kavala",
				"code" => "KV"
			], [
				"stateId" => 1942,
				"countryId" => 95,
				"name" => "Khalkidhiki",
				"code" => "KD"
			], [
				"stateId" => 1943,
				"countryId" => 95,
				"name" => "Pieria",
				"code" => "PI"
			], [
				"stateId" => 1944,
				"countryId" => 95,
				"name" => "Ioannina",
				"code" => "IO"
			], [
				"stateId" => 1945,
				"countryId" => 95,
				"name" => "Thesprotia",
				"code" => "TP"
			], [
				"stateId" => 1946,
				"countryId" => 95,
				"name" => "Preveza",
				"code" => "PV"
			], [
				"stateId" => 1947,
				"countryId" => 95,
				"name" => "Arta",
				"code" => "AR"
			], [
				"stateId" => 1948,
				"countryId" => 95,
				"name" => "Larisa",
				"code" => "LR"
			], [
				"stateId" => 1949,
				"countryId" => 95,
				"name" => "Trikala",
				"code" => "TR"
			], [
				"stateId" => 1950,
				"countryId" => 95,
				"name" => "Kardhitsa",
				"code" => "KT"
			], [
				"stateId" => 1951,
				"countryId" => 95,
				"name" => "Magnisia",
				"code" => "MG"
			], [
				"stateId" => 1952,
				"countryId" => 95,
				"name" => "Kerkira",
				"code" => "KE"
			], [
				"stateId" => 1953,
				"countryId" => 95,
				"name" => "Levkas",
				"code" => "LV"
			], [
				"stateId" => 1954,
				"countryId" => 95,
				"name" => "Kefallinia",
				"code" => "KF"
			], [
				"stateId" => 1955,
				"countryId" => 95,
				"name" => "Zakinthos",
				"code" => "ZK"
			], [
				"stateId" => 1956,
				"countryId" => 95,
				"name" => "Fthiotis",
				"code" => "FT"
			], [
				"stateId" => 1957,
				"countryId" => 95,
				"name" => "Evritania",
				"code" => "ET"
			], [
				"stateId" => 1958,
				"countryId" => 95,
				"name" => "Aitolia kai Akarnania",
				"code" => "AA"
			], [
				"stateId" => 1959,
				"countryId" => 95,
				"name" => "Fokis",
				"code" => "FK"
			], [
				"stateId" => 1960,
				"countryId" => 95,
				"name" => "Voiotia",
				"code" => "VT"
			], [
				"stateId" => 1961,
				"countryId" => 95,
				"name" => "Evvoia",
				"code" => "EV"
			], [
				"stateId" => 1962,
				"countryId" => 95,
				"name" => "Attiki",
				"code" => "AT"
			], [
				"stateId" => 1963,
				"countryId" => 95,
				"name" => "Argolis",
				"code" => "AG"
			], [
				"stateId" => 1964,
				"countryId" => 95,
				"name" => "Korinthia",
				"code" => "KO"
			], [
				"stateId" => 1965,
				"countryId" => 95,
				"name" => "Akhaia",
				"code" => "AK"
			], [
				"stateId" => 1966,
				"countryId" => 95,
				"name" => "Ilia",
				"code" => "IL"
			], [
				"stateId" => 1967,
				"countryId" => 95,
				"name" => "Messinia",
				"code" => "MS"
			], [
				"stateId" => 1968,
				"countryId" => 95,
				"name" => "Arkadhia",
				"code" => "AD"
			], [
				"stateId" => 1969,
				"countryId" => 95,
				"name" => "Lakonia",
				"code" => "LC"
			], [
				"stateId" => 1970,
				"countryId" => 95,
				"name" => "Khania",
				"code" => "KN"
			], [
				"stateId" => 1971,
				"countryId" => 95,
				"name" => "Rethimni",
				"code" => "RT"
			], [
				"stateId" => 1972,
				"countryId" => 95,
				"name" => "Iraklion (Crete)",
				"code" => "IR"
			], [
				"stateId" => 1973,
				"countryId" => 95,
				"name" => "Lasithi",
				"code" => "LT"
			], [
				"stateId" => 1974,
				"countryId" => 95,
				"name" => "Dhodhekanisos",
				"code" => "DO"
			], [
				"stateId" => 1975,
				"countryId" => 95,
				"name" => "Samos",
				"code" => "SM"
			], [
				"stateId" => 1976,
				"countryId" => 95,
				"name" => "Kikladhes",
				"code" => "KY"
			], [
				"stateId" => 1977,
				"countryId" => 95,
				"name" => "Khios",
				"code" => "KH"
			], [
				"stateId" => 1978,
				"countryId" => 95,
				"name" => "Lesvos",
				"code" => "LS"
			], [
				"stateId" => 1979,
				"countryId" => 100,
				"name" => "Alta Verapaz",
				"code" => "AV"
			], [
				"stateId" => 1980,
				"countryId" => 100,
				"name" => "Baja Verapaz",
				"code" => "BV"
			], [
				"stateId" => 1981,
				"countryId" => 100,
				"name" => "Chimaltenango",
				"code" => "CM"
			], [
				"stateId" => 1982,
				"countryId" => 100,
				"name" => "Chiquimula",
				"code" => "CQ"
			], [
				"stateId" => 1983,
				"countryId" => 100,
				"name" => "El Progreso",
				"code" => "PR"
			], [
				"stateId" => 1984,
				"countryId" => 100,
				"name" => "Escuintla",
				"code" => "ES"
			], [
				"stateId" => 1985,
				"countryId" => 100,
				"name" => "Guatemala",
				"code" => "GU"
			], [
				"stateId" => 1986,
				"countryId" => 100,
				"name" => "Huehuetenango",
				"code" => "HU"
			], [
				"stateId" => 1987,
				"countryId" => 100,
				"name" => "Izabal",
				"code" => "IZ"
			], [
				"stateId" => 1988,
				"countryId" => 100,
				"name" => "Jalapa",
				"code" => "JA"
			], [
				"stateId" => 1989,
				"countryId" => 100,
				"name" => "Jutiapa",
				"code" => "JU"
			], [
				"stateId" => 1990,
				"countryId" => 100,
				"name" => "Peten",
				"code" => "PE"
			], [
				"stateId" => 1991,
				"countryId" => 100,
				"name" => "Quetzaltenango",
				"code" => "QZ"
			], [
				"stateId" => 1992,
				"countryId" => 100,
				"name" => "Quiche",
				"code" => "QC"
			], [
				"stateId" => 1993,
				"countryId" => 100,
				"name" => "Retalhuleu",
				"code" => "RE"
			], [
				"stateId" => 1994,
				"countryId" => 100,
				"name" => "Sacatepequez",
				"code" => "SA"
			], [
				"stateId" => 1995,
				"countryId" => 100,
				"name" => "San Marcos",
				"code" => "SM"
			], [
				"stateId" => 1996,
				"countryId" => 100,
				"name" => "Santa Rosa",
				"code" => "SR"
			], [
				"stateId" => 1997,
				"countryId" => 100,
				"name" => "Solola",
				"code" => "SO"
			], [
				"stateId" => 1998,
				"countryId" => 100,
				"name" => "Suchitepequez",
				"code" => "SU"
			], [
				"stateId" => 1999,
				"countryId" => 100,
				"name" => "Totonicapan",
				"code" => "TO"
			], [
				"stateId" => 2000,
				"countryId" => 100,
				"name" => "Zacapa",
				"code" => "ZA"
			], [
				"stateId" => 2001,
				"countryId" => 102,
				"name" => "Beyla",
				"code" => "BE"
			], [
				"stateId" => 2002,
				"countryId" => 102,
				"name" => "Boffa",
				"code" => "BF"
			], [
				"stateId" => 2003,
				"countryId" => 102,
				"name" => "Boke",
				"code" => "BK"
			], [
				"stateId" => 2004,
				"countryId" => 102,
				"name" => "Conakry",
				"code" => "CK"
			], [
				"stateId" => 2005,
				"countryId" => 102,
				"name" => "Dabola",
				"code" => "DB"
			], [
				"stateId" => 2006,
				"countryId" => 102,
				"name" => "Dalaba",
				"code" => "DL"
			], [
				"stateId" => 2007,
				"countryId" => 102,
				"name" => "Dinguiraye",
				"code" => "DI"
			], [
				"stateId" => 2008,
				"countryId" => 102,
				"name" => "Dubreka",
				"code" => "DU"
			], [
				"stateId" => 2009,
				"countryId" => 102,
				"name" => "Faranah",
				"code" => "FA"
			], [
				"stateId" => 2010,
				"countryId" => 102,
				"name" => "Forecariah",
				"code" => "FO"
			], [
				"stateId" => 2011,
				"countryId" => 102,
				"name" => "Fria",
				"code" => "FR"
			], [
				"stateId" => 2012,
				"countryId" => 102,
				"name" => "Gaoual",
				"code" => "GA"
			], [
				"stateId" => 2013,
				"countryId" => 102,
				"name" => "Gueckedou",
				"code" => "GU"
			], [
				"stateId" => 2014,
				"countryId" => 102,
				"name" => "Kankan",
				"code" => "KA"
			], [
				"stateId" => 2015,
				"countryId" => 102,
				"name" => "Kerouane",
				"code" => "KE"
			], [
				"stateId" => 2016,
				"countryId" => 102,
				"name" => "Kindia",
				"code" => "KD"
			], [
				"stateId" => 2017,
				"countryId" => 102,
				"name" => "Kissidougou",
				"code" => "KS"
			], [
				"stateId" => 2018,
				"countryId" => 102,
				"name" => "Koundara",
				"code" => "KN"
			], [
				"stateId" => 2019,
				"countryId" => 102,
				"name" => "Kouroussa",
				"code" => "KO"
			], [
				"stateId" => 2020,
				"countryId" => 102,
				"name" => "Labe",
				"code" => "LA"
			], [
				"stateId" => 2021,
				"countryId" => 102,
				"name" => "Macenta",
				"code" => "MC"
			], [
				"stateId" => 2022,
				"countryId" => 102,
				"name" => "Mali",
				"code" => "ML"
			], [
				"stateId" => 2023,
				"countryId" => 102,
				"name" => "Mamou",
				"code" => "MM"
			], [
				"stateId" => 2024,
				"countryId" => 102,
				"name" => "Nzerekore",
				"code" => "NZ"
			], [
				"stateId" => 2025,
				"countryId" => 102,
				"name" => "Pita",
				"code" => "PI"
			], [
				"stateId" => 2026,
				"countryId" => 102,
				"name" => "Siguiri",
				"code" => "SI"
			], [
				"stateId" => 2027,
				"countryId" => 102,
				"name" => "Telimele",
				"code" => "TE"
			], [
				"stateId" => 2028,
				"countryId" => 102,
				"name" => "Tougue",
				"code" => "TO"
			], [
				"stateId" => 2029,
				"countryId" => 102,
				"name" => "Yomou",
				"code" => "YO"
			], [
				"stateId" => 2030,
				"countryId" => 104,
				"name" => "Barima-Waini",
				"code" => "BA"
			], [
				"stateId" => 2031,
				"countryId" => 104,
				"name" => "Cuyuni-Mazaruni",
				"code" => "CU"
			], [
				"stateId" => 2032,
				"countryId" => 104,
				"name" => "Demerara-Mahaica",
				"code" => "DE"
			], [
				"stateId" => 2033,
				"countryId" => 104,
				"name" => "East Berbice-Corentyne",
				"code" => "EB"
			], [
				"stateId" => 2034,
				"countryId" => 104,
				"name" => "Essequibo Islands-West Demerara",
				"code" => "ES"
			], [
				"stateId" => 2035,
				"countryId" => 104,
				"name" => "Mahaica-Berbice",
				"code" => "MA"
			], [
				"stateId" => 2036,
				"countryId" => 104,
				"name" => "Pomeroon-Supenaam",
				"code" => "PM"
			], [
				"stateId" => 2037,
				"countryId" => 104,
				"name" => "Potaro-Siparuni",
				"code" => "PT"
			], [
				"stateId" => 2038,
				"countryId" => 104,
				"name" => "Upper Demerara-Berbice",
				"code" => "UD"
			], [
				"stateId" => 2039,
				"countryId" => 104,
				"name" => "Upper Takutu-Upper Essequibo",
				"code" => "UT"
			], [
				"stateId" => 2040,
				"countryId" => 105,
				"name" => "Nord-Ouest",
				"code" => "NO"
			], [
				"stateId" => 2041,
				"countryId" => 105,
				"name" => "Artibonite",
				"code" => "AR"
			], [
				"stateId" => 2042,
				"countryId" => 105,
				"name" => "Centre",
				"code" => "CE"
			], [
				"stateId" => 2043,
				"countryId" => 105,
				"name" => "Grand'Anse",
				"code" => "GA"
			], [
				"stateId" => 2044,
				"countryId" => 105,
				"name" => "Nord",
				"code" => "ND"
			], [
				"stateId" => 2045,
				"countryId" => 105,
				"name" => "Nord-Est",
				"code" => "NE"
			], [
				"stateId" => 2046,
				"countryId" => 105,
				"name" => "Ouest",
				"code" => "OU"
			], [
				"stateId" => 2047,
				"countryId" => 105,
				"name" => "Sud",
				"code" => "SD"
			], [
				"stateId" => 2048,
				"countryId" => 105,
				"name" => "Sud-Est",
				"code" => "SE"
			], [
				"stateId" => 2049,
				"countryId" => 108,
				"name" => "Atlantida",
				"code" => "AT"
			], [
				"stateId" => 2050,
				"countryId" => 108,
				"name" => "Choluteca",
				"code" => "CH"
			], [
				"stateId" => 2051,
				"countryId" => 108,
				"name" => "Colon",
				"code" => "CL"
			], [
				"stateId" => 2052,
				"countryId" => 108,
				"name" => "Comayagua",
				"code" => "CM"
			], [
				"stateId" => 2053,
				"countryId" => 108,
				"name" => "Copan",
				"code" => "CP"
			], [
				"stateId" => 2054,
				"countryId" => 108,
				"name" => "Cortes",
				"code" => "CR"
			], [
				"stateId" => 2055,
				"countryId" => 108,
				"name" => "El Paraiso",
				"code" => "EP"
			], [
				"stateId" => 2056,
				"countryId" => 108,
				"name" => "Francisco Morazan",
				"code" => "FM"
			], [
				"stateId" => 2057,
				"countryId" => 108,
				"name" => "Gracias a Dios",
				"code" => "GD"
			], [
				"stateId" => 2058,
				"countryId" => 108,
				"name" => "Intibuca",
				"code" => "IN"
			], [
				"stateId" => 2059,
				"countryId" => 108,
				"name" => "Islas de la Bahia",
				"code" => "IB"
			], [
				"stateId" => 2060,
				"countryId" => 108,
				"name" => "La Paz",
				"code" => "LP"
			], [
				"stateId" => 2061,
				"countryId" => 108,
				"name" => "Lempira",
				"code" => "LE"
			], [
				"stateId" => 2062,
				"countryId" => 108,
				"name" => "Ocotepeque",
				"code" => "OC"
			], [
				"stateId" => 2063,
				"countryId" => 108,
				"name" => "Olancho",
				"code" => "OL"
			], [
				"stateId" => 2064,
				"countryId" => 108,
				"name" => "Santa Barbara",
				"code" => "SB"
			], [
				"stateId" => 2065,
				"countryId" => 108,
				"name" => "Valle",
				"code" => "VA"
			], [
				"stateId" => 2066,
				"countryId" => 108,
				"name" => "Yoro",
				"code" => "YO"
			], [
				"stateId" => 2067,
				"countryId" => 111,
				"name" => "Bacs-Kiskun",
				"code" => "BK"
			], [
				"stateId" => 2068,
				"countryId" => 111,
				"name" => "Baranya",
				"code" => "BA"
			], [
				"stateId" => 2069,
				"countryId" => 111,
				"name" => "Bekes",
				"code" => "BE"
			], [
				"stateId" => 2070,
				"countryId" => 111,
				"name" => "Borsod-Abauj-Zemplen",
				"code" => "BZ"
			], [
				"stateId" => 2071,
				"countryId" => 111,
				"name" => "Budapest",
				"code" => "BU"
			], [
				"stateId" => 2072,
				"countryId" => 111,
				"name" => "Csongrad",
				"code" => "CS"
			], [
				"stateId" => 2073,
				"countryId" => 111,
				"name" => "Debrecen",
				"code" => "DE"
			], [
				"stateId" => 2074,
				"countryId" => 111,
				"name" => "Fejer",
				"code" => "FE"
			], [
				"stateId" => 2075,
				"countryId" => 111,
				"name" => "Gyor-Moson-Sopron",
				"code" => "GS"
			], [
				"stateId" => 2076,
				"countryId" => 111,
				"name" => "Hajdu-Bihar",
				"code" => "HB"
			], [
				"stateId" => 2077,
				"countryId" => 111,
				"name" => "Heves",
				"code" => "HE"
			], [
				"stateId" => 2078,
				"countryId" => 111,
				"name" => "Komarom-Esztergom",
				"code" => "KE"
			], [
				"stateId" => 2079,
				"countryId" => 111,
				"name" => "Miskolc",
				"code" => "MI"
			], [
				"stateId" => 2080,
				"countryId" => 111,
				"name" => "Nograd",
				"code" => "NO"
			], [
				"stateId" => 2081,
				"countryId" => 111,
				"name" => "Pees",
				"code" => "PS"
			], [
				"stateId" => 2082,
				"countryId" => 111,
				"name" => "Pest",
				"code" => "PE"
			], [
				"stateId" => 2083,
				"countryId" => 111,
				"name" => "Somogy",
				"code" => "SO"
			], [
				"stateId" => 2084,
				"countryId" => 111,
				"name" => "Szabolcs-Szatmar-Bereg",
				"code" => "SZ"
			], [
				"stateId" => 2085,
				"countryId" => 111,
				"name" => "Szeged",
				"code" => "SD"
			], [
				"stateId" => 2086,
				"countryId" => 111,
				"name" => "Jasz-Nagykun-Szolnok",
				"code" => "JN"
			], [
				"stateId" => 2087,
				"countryId" => 111,
				"name" => "Tolna",
				"code" => "TO"
			], [
				"stateId" => 2088,
				"countryId" => 111,
				"name" => "Vas",
				"code" => "VA"
			], [
				"stateId" => 2089,
				"countryId" => 111,
				"name" => "Veszprem",
				"code" => "VM"
			], [
				"stateId" => 2090,
				"countryId" => 111,
				"name" => "Zala",
				"code" => "ZA"
			], [
				"stateId" => 2091,
				"countryId" => 111,
				"name" => "Gyor",
				"code" => "GY"
			], [
				"stateId" => 2092,
				"countryId" => 111,
				"name" => "Bekescsaba",
				"code" => "BC"
			], [
				"stateId" => 2093,
				"countryId" => 111,
				"name" => "Dunaujvaros",
				"code" => "DU"
			], [
				"stateId" => 2094,
				"countryId" => 111,
				"name" => "Eger",
				"code" => "EG"
			], [
				"stateId" => 2095,
				"countryId" => 111,
				"name" => "Hodmezovasarhely",
				"code" => "HV"
			], [
				"stateId" => 2096,
				"countryId" => 111,
				"name" => "Kaposvar",
				"code" => "KV"
			], [
				"stateId" => 2097,
				"countryId" => 111,
				"name" => "Kecskemet",
				"code" => "KM"
			], [
				"stateId" => 2098,
				"countryId" => 111,
				"name" => "Nagykanizsa",
				"code" => "NK"
			], [
				"stateId" => 2099,
				"countryId" => 111,
				"name" => "Nyiregyhaza",
				"code" => "NY"
			], [
				"stateId" => 2100,
				"countryId" => 111,
				"name" => "Sopron",
				"code" => "SN"
			], [
				"stateId" => 2101,
				"countryId" => 111,
				"name" => "Szekesfehervar",
				"code" => "SF"
			], [
				"stateId" => 2102,
				"countryId" => 111,
				"name" => "Szolnok",
				"code" => "SK"
			], [
				"stateId" => 2103,
				"countryId" => 111,
				"name" => "Szombathely",
				"code" => "SH"
			], [
				"stateId" => 2104,
				"countryId" => 111,
				"name" => "Tatabanya",
				"code" => "TB"
			], [
				"stateId" => 2105,
				"countryId" => 111,
				"name" => "Zalaegerszeg",
				"code" => "ZE"
			], [
				"stateId" => 2106,
				"countryId" => 112,
				"name" => "Akranes",
				"code" => "AK"
			], [
				"stateId" => 2107,
				"countryId" => 112,
				"name" => "Akureyri",
				"code" => "AU"
			], [
				"stateId" => 2108,
				"countryId" => 112,
				"name" => "Arnessysla",
				"code" => "AR"
			], [
				"stateId" => 2109,
				"countryId" => 112,
				"name" => "Austur-Bardastrandarsysla",
				"code" => "AB"
			], [
				"stateId" => 2110,
				"countryId" => 112,
				"name" => "Austur-Hunavatnssysla",
				"code" => "AH"
			], [
				"stateId" => 2111,
				"countryId" => 112,
				"name" => "Austur-Skaftafellssysla",
				"code" => "AS"
			], [
				"stateId" => 2112,
				"countryId" => 112,
				"name" => "Borgarfjardarsysla",
				"code" => "BF"
			], [
				"stateId" => 2113,
				"countryId" => 112,
				"name" => "Dalasysla",
				"code" => "DS"
			], [
				"stateId" => 2114,
				"countryId" => 112,
				"name" => "Eyjafjardarsysla",
				"code" => "EY"
			], [
				"stateId" => 2115,
				"countryId" => 112,
				"name" => "Gullbringusysla",
				"code" => "GU"
			], [
				"stateId" => 2116,
				"countryId" => 112,
				"name" => "Hafnarfjordur",
				"code" => "HA"
			], [
				"stateId" => 2117,
				"countryId" => 112,
				"name" => "Husavik",
				"code" => "HU"
			], [
				"stateId" => 2118,
				"countryId" => 112,
				"name" => "Isafjordur",
				"code" => "IA"
			], [
				"stateId" => 2119,
				"countryId" => 112,
				"name" => "Keflavik",
				"code" => "KE"
			], [
				"stateId" => 2120,
				"countryId" => 112,
				"name" => "Kjosarsysla",
				"code" => "KJ"
			], [
				"stateId" => 2121,
				"countryId" => 112,
				"name" => "Kopavogur",
				"code" => "KO"
			], [
				"stateId" => 2122,
				"countryId" => 112,
				"name" => "Myrasysla",
				"code" => "MY"
			], [
				"stateId" => 2123,
				"countryId" => 112,
				"name" => "Neskaupstadur",
				"code" => "NE"
			], [
				"stateId" => 2124,
				"countryId" => 112,
				"name" => "Nordur-Isafjardarsysla",
				"code" => "NI"
			], [
				"stateId" => 2125,
				"countryId" => 112,
				"name" => "Nordur-Mulasysla",
				"code" => "NM"
			], [
				"stateId" => 2126,
				"countryId" => 112,
				"name" => "Nordur-Tingeyjarsysla",
				"code" => "NT"
			], [
				"stateId" => 2127,
				"countryId" => 112,
				"name" => "Olafsfjordur",
				"code" => "OL"
			], [
				"stateId" => 2128,
				"countryId" => 112,
				"name" => "Rang·rvallasysla",
				"code" => "RA"
			], [
				"stateId" => 2129,
				"countryId" => 112,
				"name" => "Reykjavik",
				"code" => "RE"
			], [
				"stateId" => 2130,
				"countryId" => 112,
				"name" => "Saudarkrokur",
				"code" => "SA"
			], [
				"stateId" => 2131,
				"countryId" => 112,
				"name" => "Seydisfjordur",
				"code" => "SE"
			], [
				"stateId" => 2132,
				"countryId" => 112,
				"name" => "Siglufjordur",
				"code" => "SI"
			], [
				"stateId" => 2133,
				"countryId" => 112,
				"name" => "Skagafjardarsysla",
				"code" => "SG"
			], [
				"stateId" => 2134,
				"countryId" => 112,
				"name" => "Snafellsnes-og Hnappadalssysla",
				"code" => "SH"
			], [
				"stateId" => 2135,
				"countryId" => 112,
				"name" => "Strandasysla",
				"code" => "SD"
			], [
				"stateId" => 2136,
				"countryId" => 112,
				"name" => "Sudur-Mulasysla",
				"code" => "SM"
			], [
				"stateId" => 2137,
				"countryId" => 112,
				"name" => "Sudur-Tingeyjarsysla",
				"code" => "ST"
			], [
				"stateId" => 2138,
				"countryId" => 112,
				"name" => "Vestmannaeyjar",
				"code" => "VE"
			], [
				"stateId" => 2139,
				"countryId" => 112,
				"name" => "Vestur-Bardastrandarsysla",
				"code" => "VB"
			], [
				"stateId" => 2140,
				"countryId" => 112,
				"name" => "Vestur-Hunavatnssysla",
				"code" => "VH"
			], [
				"stateId" => 2141,
				"countryId" => 112,
				"name" => "Vestur-Isafjardarsysla",
				"code" => "VI"
			], [
				"stateId" => 2142,
				"countryId" => 112,
				"name" => "Vestur-Skaftafellssysla",
				"code" => "VS"
			], [
				"stateId" => 2143,
				"countryId" => 114,
				"name" => "Aceh (Atjeh)",
				"code" => "AC"
			], [
				"stateId" => 2144,
				"countryId" => 114,
				"name" => "Bengkulu",
				"code" => "BE"
			], [
				"stateId" => 2145,
				"countryId" => 114,
				"name" => "Jakarta Raya (Djakarta Raya)",
				"code" => "JK"
			], [
				"stateId" => 2146,
				"countryId" => 114,
				"name" => "Jambi (Djambi)",
				"code" => "JA"
			], [
				"stateId" => 2147,
				"countryId" => 114,
				"name" => "Jawa Barat (Djawa Barat)",
				"code" => "JR"
			], [
				"stateId" => 2148,
				"countryId" => 114,
				"name" => "Jawa Tengah (Djawa Tengah)",
				"code" => "JT"
			], [
				"stateId" => 2149,
				"countryId" => 114,
				"name" => "Jawa Timur (Djawa Timur)",
				"code" => "JI"
			], [
				"stateId" => 2150,
				"countryId" => 114,
				"name" => "Yogyakarta (Jogjakarta)",
				"code" => "YO"
			], [
				"stateId" => 2151,
				"countryId" => 114,
				"name" => "Kalimantan Barat",
				"code" => "KB"
			], [
				"stateId" => 2152,
				"countryId" => 114,
				"name" => "Kalimantan Selatan",
				"code" => "KS"
			], [
				"stateId" => 2153,
				"countryId" => 114,
				"name" => "Kalimantan Tengah",
				"code" => "KT"
			], [
				"stateId" => 2154,
				"countryId" => 114,
				"name" => "Kalimantan Timur",
				"code" => "KI"
			], [
				"stateId" => 2155,
				"countryId" => 114,
				"name" => "Lampung",
				"code" => "LA"
			], [
				"stateId" => 2156,
				"countryId" => 114,
				"name" => "Maluku",
				"code" => "MA"
			], [
				"stateId" => 2157,
				"countryId" => 114,
				"name" => "Nusa Tenggara Barat",
				"code" => "NB"
			], [
				"stateId" => 2158,
				"countryId" => 114,
				"name" => "Nusa Tenggara Timur",
				"code" => "NT"
			], [
				"stateId" => 2159,
				"countryId" => 114,
				"name" => "Riau",
				"code" => "RI"
			], [
				"stateId" => 2160,
				"countryId" => 114,
				"name" => "Sulawesi Selatan",
				"code" => "SN"
			], [
				"stateId" => 2161,
				"countryId" => 114,
				"name" => "Sulawesi Tengah",
				"code" => "ST"
			], [
				"stateId" => 2162,
				"countryId" => 114,
				"name" => "Sulawesi Tenggara",
				"code" => "SG"
			], [
				"stateId" => 2163,
				"countryId" => 114,
				"name" => "Sulawesi Utara",
				"code" => "SW"
			], [
				"stateId" => 2164,
				"countryId" => 114,
				"name" => "Sumatera Barat",
				"code" => "SB"
			], [
				"stateId" => 2165,
				"countryId" => 114,
				"name" => "Sumatera Selatan",
				"code" => "SL"
			], [
				"stateId" => 2166,
				"countryId" => 114,
				"name" => "Sumatera Utara",
				"code" => "SU"
			], [
				"stateId" => 2168,
				"countryId" => 113,
				"name" => "Andaman and Nicobar Islands",
				"code" => "AN"
			], [
				"stateId" => 2169,
				"countryId" => 113,
				"name" => "Andhra Pradesh",
				"code" => "AP"
			], [
				"stateId" => 2170,
				"countryId" => 113,
				"name" => "Assam",
				"code" => "AS"
			], [
				"stateId" => 2171,
				"countryId" => 113,
				"name" => "Bihar",
				"code" => "BR"
			], [
				"stateId" => 2172,
				"countryId" => 113,
				"name" => "Chandigarh",
				"code" => "CH"
			], [
				"stateId" => 2173,
				"countryId" => 113,
				"name" => "Dadra and Nagar Haveli",
				"code" => "DN"
			], [
				"stateId" => 2174,
				"countryId" => 113,
				"name" => "Delhi",
				"code" => "DL"
			], [
				"stateId" => 2175,
				"countryId" => 113,
				"name" => "Gujarat",
				"code" => "GJ"
			], [
				"stateId" => 2176,
				"countryId" => 113,
				"name" => "Haryana",
				"code" => "HR"
			], [
				"stateId" => 2177,
				"countryId" => 113,
				"name" => "Himachal Pradesh",
				"code" => "HP"
			], [
				"stateId" => 2178,
				"countryId" => 113,
				"name" => "Jammu and Kashmir",
				"code" => "JK"
			], [
				"stateId" => 2179,
				"countryId" => 113,
				"name" => "Kerala",
				"code" => "KL"
			], [
				"stateId" => 2180,
				"countryId" => 113,
				"name" => "Lakshadweep",
				"code" => "LD"
			], [
				"stateId" => 2181,
				"countryId" => 113,
				"name" => "Madhya Pradesh",
				"code" => "MP"
			], [
				"stateId" => 2182,
				"countryId" => 113,
				"name" => "Maharashtra",
				"code" => "MH"
			], [
				"stateId" => 2183,
				"countryId" => 113,
				"name" => "Manipur",
				"code" => "MM"
			], [
				"stateId" => 2184,
				"countryId" => 113,
				"name" => "Meghalaya",
				"code" => "ML"
			], [
				"stateId" => 2185,
				"countryId" => 113,
				"name" => "Karnataka",
				"code" => "KA"
			], [
				"stateId" => 2186,
				"countryId" => 113,
				"name" => "Nagaland",
				"code" => "NL"
			], [
				"stateId" => 2187,
				"countryId" => 113,
				"name" => "Orissa",
				"code" => "OR"
			], [
				"stateId" => 2188,
				"countryId" => 113,
				"name" => "Pondicherry",
				"code" => "PY"
			], [
				"stateId" => 2189,
				"countryId" => 113,
				"name" => "Punjab",
				"code" => "PB"
			], [
				"stateId" => 2190,
				"countryId" => 113,
				"name" => "Rajasthan",
				"code" => "RJ"
			], [
				"stateId" => 2191,
				"countryId" => 113,
				"name" => "Tamil Nadu",
				"code" => "TN"
			], [
				"stateId" => 2192,
				"countryId" => 113,
				"name" => "Tripura",
				"code" => "TR"
			], [
				"stateId" => 2193,
				"countryId" => 113,
				"name" => "Uttar Pradesh",
				"code" => "UP"
			], [
				"stateId" => 2194,
				"countryId" => 113,
				"name" => "West Bengal",
				"code" => "WB"
			], [
				"stateId" => 2195,
				"countryId" => 113,
				"name" => "Sikkim",
				"code" => "SK"
			], [
				"stateId" => 2196,
				"countryId" => 113,
				"name" => "Arunachal Pradesh",
				"code" => "AR"
			], [
				"stateId" => 2197,
				"countryId" => 113,
				"name" => "Mizoram",
				"code" => "MZ"
			], [
				"stateId" => 2198,
				"countryId" => 113,
				"name" => "Daman and Diu",
				"code" => "DD"
			], [
				"stateId" => 2199,
				"countryId" => 113,
				"name" => "Goa",
				"code" => "GA"
			], [
				"stateId" => 2200,
				"countryId" => 115,
				"name" => "Azarbayjan-e Gharbi",
				"code" => "WA"
			], [
				"stateId" => 2202,
				"countryId" => 115,
				"name" => "Chahar Ma±all va Bakhtiari",
				"code" => "CM"
			], [
				"stateId" => 2203,
				"countryId" => 115,
				"name" => "Sistan va Baluchestan",
				"code" => "SB"
			], [
				"stateId" => 2204,
				"countryId" => 115,
				"name" => "Kohgiluyeh va Buyer Ahmad",
				"code" => "KB"
			], [
				"stateId" => 2206,
				"countryId" => 115,
				"name" => "Fars",
				"code" => "FA"
			], [
				"stateId" => 2207,
				"countryId" => 115,
				"name" => "Gilan",
				"code" => "GI"
			], [
				"stateId" => 2208,
				"countryId" => 115,
				"name" => "Hamadan",
				"code" => "HD"
			], [
				"stateId" => 2209,
				"countryId" => 115,
				"name" => "Ilam",
				"code" => "IL"
			], [
				"stateId" => 2210,
				"countryId" => 115,
				"name" => "Hormozgan",
				"code" => "HG"
			], [
				"stateId" => 2212,
				"countryId" => 115,
				"name" => "Kermanshah",
				"code" => "BK"
			], [
				"stateId" => 2213,
				"countryId" => 115,
				"name" => "Khuzestan",
				"code" => "KZ"
			], [
				"stateId" => 2214,
				"countryId" => 115,
				"name" => "Kordestan",
				"code" => "KD"
			], [
				"stateId" => 2215,
				"countryId" => 115,
				"name" => "Mazandaran",
				"code" => "MN"
			], [
				"stateId" => 2219,
				"countryId" => 115,
				"name" => "Bushehr",
				"code" => "BS"
			], [
				"stateId" => 2220,
				"countryId" => 115,
				"name" => "Lorestan",
				"code" => "LO"
			], [
				"stateId" => 2221,
				"countryId" => 115,
				"name" => "Markazi",
				"code" => "MK"
			], [
				"stateId" => 2222,
				"countryId" => 115,
				"name" => "Semnan",
				"code" => "SM"
			], [
				"stateId" => 2223,
				"countryId" => 115,
				"name" => "Tehran",
				"code" => "TH"
			], [
				"stateId" => 2224,
				"countryId" => 115,
				"name" => "Zanjan",
				"code" => "ZA"
			], [
				"stateId" => 2225,
				"countryId" => 115,
				"name" => "Esfahan",
				"code" => "ES"
			], [
				"stateId" => 2226,
				"countryId" => 115,
				"name" => "Kerman",
				"code" => "KE"
			], [
				"stateId" => 2227,
				"countryId" => 115,
				"name" => "Khorasan",
				"code" => "KR"
			], [
				"stateId" => 2228,
				"countryId" => 115,
				"name" => "Yazd",
				"code" => "YA"
			], [
				"stateId" => 2229,
				"countryId" => 115,
				"name" => "Ardabil",
				"code" => "AR"
			], [
				"stateId" => 2230,
				"countryId" => 115,
				"name" => "Azarbayjan-e Sharqi",
				"code" => "EA"
			], [
				"stateId" => 2232,
				"countryId" => 118,
				"name" => "HaDarom (Southern)",
				"code" => "HD"
			], [
				"stateId" => 2233,
				"countryId" => 118,
				"name" => "HaMerkaz (Central)",
				"code" => "HM"
			], [
				"stateId" => 2234,
				"countryId" => 118,
				"name" => "Haûafon  (Northern)",
				"code" => "HZ"
			], [
				"stateId" => 2235,
				"countryId" => 118,
				"name" => "Híefa  (Haifa)",
				"code" => "HA"
			], [
				"stateId" => 2236,
				"countryId" => 118,
				"name" => "Tel Aviv",
				"code" => "TA"
			], [
				"stateId" => 2237,
				"countryId" => 118,
				"name" => "Yerushalayim  (Jerusalem)",
				"code" => "JM"
			], [
				"stateId" => 2238,
				"countryId" => 119,
				"name" => "Abruzzi",
				"code" => "AB"
			], [
				"stateId" => 2239,
				"countryId" => 119,
				"name" => "Basilicata",
				"code" => "BA"
			], [
				"stateId" => 2240,
				"countryId" => 119,
				"name" => "Calabria",
				"code" => "CA"
			], [
				"stateId" => 2241,
				"countryId" => 119,
				"name" => "Campania",
				"code" => "CM"
			], [
				"stateId" => 2242,
				"countryId" => 119,
				"name" => "Emilia-Romagna",
				"code" => "EM"
			], [
				"stateId" => 2243,
				"countryId" => 119,
				"name" => "Friuli-Venezia Giulia",
				"code" => "FR"
			], [
				"stateId" => 2244,
				"countryId" => 119,
				"name" => "Lazio",
				"code" => "LA"
			], [
				"stateId" => 2245,
				"countryId" => 119,
				"name" => "Liguria",
				"code" => "LI"
			], [
				"stateId" => 2246,
				"countryId" => 119,
				"name" => "Lombardia",
				"code" => "LO"
			], [
				"stateId" => 2247,
				"countryId" => 119,
				"name" => "Marche",
				"code" => "MA"
			], [
				"stateId" => 2248,
				"countryId" => 119,
				"name" => "Molise",
				"code" => "MO"
			], [
				"stateId" => 2249,
				"countryId" => 119,
				"name" => "Piemonte",
				"code" => "PI"
			], [
				"stateId" => 2250,
				"countryId" => 119,
				"name" => "Puglia",
				"code" => "PU"
			], [
				"stateId" => 2251,
				"countryId" => 119,
				"name" => "Sardegna",
				"code" => "SA"
			], [
				"stateId" => 2252,
				"countryId" => 119,
				"name" => "Sicilia",
				"code" => "SI"
			], [
				"stateId" => 2253,
				"countryId" => 119,
				"name" => "Toscana",
				"code" => "TO"
			], [
				"stateId" => 2254,
				"countryId" => 119,
				"name" => "Trentino-Alto Adige",
				"code" => "TR"
			], [
				"stateId" => 2255,
				"countryId" => 119,
				"name" => "Umbria",
				"code" => "UM"
			], [
				"stateId" => 2256,
				"countryId" => 119,
				"name" => "Valle d'Aosta",
				"code" => "VA"
			], [
				"stateId" => 2257,
				"countryId" => 119,
				"name" => "Veneto",
				"code" => "VE"
			], [
				"stateId" => 2259,
				"countryId" => 60,
				"name" => "Dabakala",
				"code" => "DB"
			], [
				"stateId" => 2260,
				"countryId" => 60,
				"name" => "Aboisso",
				"code" => "AO"
			], [
				"stateId" => 2261,
				"countryId" => 60,
				"name" => "Adzope",
				"code" => "AZ"
			], [
				"stateId" => 2262,
				"countryId" => 60,
				"name" => "Agboville",
				"code" => "AV"
			], [
				"stateId" => 2263,
				"countryId" => 60,
				"name" => "Biankouma",
				"code" => "BI"
			], [
				"stateId" => 2264,
				"countryId" => 60,
				"name" => "Bouna",
				"code" => "BO"
			], [
				"stateId" => 2265,
				"countryId" => 60,
				"name" => "Boundiali",
				"code" => "BL"
			], [
				"stateId" => 2266,
				"countryId" => 60,
				"name" => "Danane",
				"code" => "DN"
			], [
				"stateId" => 2267,
				"countryId" => 60,
				"name" => "Divo",
				"code" => "DV"
			], [
				"stateId" => 2268,
				"countryId" => 60,
				"name" => "Ferkessedougou",
				"code" => "FE"
			], [
				"stateId" => 2269,
				"countryId" => 60,
				"name" => "Gagnoa",
				"code" => "GA"
			], [
				"stateId" => 2270,
				"countryId" => 60,
				"name" => "Katiola",
				"code" => "KA"
			], [
				"stateId" => 2271,
				"countryId" => 60,
				"name" => "Korhogo",
				"code" => "KO"
			], [
				"stateId" => 2272,
				"countryId" => 60,
				"name" => "Odienne",
				"code" => "OD"
			], [
				"stateId" => 2273,
				"countryId" => 60,
				"name" => "Seguela",
				"code" => "SE"
			], [
				"stateId" => 2274,
				"countryId" => 60,
				"name" => "Touba",
				"code" => "TO"
			], [
				"stateId" => 2275,
				"countryId" => 60,
				"name" => "Bongouanou",
				"code" => "BG"
			], [
				"stateId" => 2276,
				"countryId" => 60,
				"name" => "Issia",
				"code" => "IS"
			], [
				"stateId" => 2277,
				"countryId" => 60,
				"name" => "Lakota",
				"code" => "LA"
			], [
				"stateId" => 2278,
				"countryId" => 60,
				"name" => "Mankono",
				"code" => "MK"
			], [
				"stateId" => 2279,
				"countryId" => 60,
				"name" => "Oume",
				"code" => "OU"
			], [
				"stateId" => 2280,
				"countryId" => 60,
				"name" => "Soubre",
				"code" => "SO"
			], [
				"stateId" => 2281,
				"countryId" => 60,
				"name" => "Tingrela",
				"code" => "TG"
			], [
				"stateId" => 2282,
				"countryId" => 60,
				"name" => "Zuenoula",
				"code" => "ZU"
			], [
				"stateId" => 2283,
				"countryId" => 60,
				"name" => "Abidjan",
				"code" => "AB"
			], [
				"stateId" => 2284,
				"countryId" => 60,
				"name" => "Bangolo",
				"code" => "BA"
			], [
				"stateId" => 2285,
				"countryId" => 60,
				"name" => "Beoumi",
				"code" => "BE"
			], [
				"stateId" => 2286,
				"countryId" => 60,
				"name" => "Bondoukou",
				"code" => "BD"
			], [
				"stateId" => 2287,
				"countryId" => 60,
				"name" => "Bouafle",
				"code" => "BF"
			], [
				"stateId" => 2288,
				"countryId" => 60,
				"name" => "Bouake",
				"code" => "BK"
			], [
				"stateId" => 2289,
				"countryId" => 60,
				"name" => "Daloa",
				"code" => "DL"
			], [
				"stateId" => 2290,
				"countryId" => 60,
				"name" => "Daoukro",
				"code" => "DO"
			], [
				"stateId" => 2291,
				"countryId" => 60,
				"name" => "Dimbokro",
				"code" => "DI"
			], [
				"stateId" => 2292,
				"countryId" => 60,
				"name" => "Duekoue",
				"code" => "DU"
			], [
				"stateId" => 2293,
				"countryId" => 60,
				"name" => "Grand-Lahou",
				"code" => "GL"
			], [
				"stateId" => 2294,
				"countryId" => 60,
				"name" => "Guiglo",
				"code" => "GU"
			], [
				"stateId" => 2295,
				"countryId" => 60,
				"name" => "Man",
				"code" => "MA"
			], [
				"stateId" => 2296,
				"countryId" => 60,
				"name" => "Mbahiakro",
				"code" => "MB"
			], [
				"stateId" => 2297,
				"countryId" => 60,
				"name" => "Sakassou",
				"code" => "SK"
			], [
				"stateId" => 2298,
				"countryId" => 60,
				"name" => "San Pedro",
				"code" => "SP"
			], [
				"stateId" => 2299,
				"countryId" => 60,
				"name" => "Sassandra",
				"code" => "SA"
			], [
				"stateId" => 2300,
				"countryId" => 60,
				"name" => "Sinfra",
				"code" => "SI"
			], [
				"stateId" => 2301,
				"countryId" => 60,
				"name" => "Tabou",
				"code" => "TA"
			], [
				"stateId" => 2302,
				"countryId" => 60,
				"name" => "Tanda",
				"code" => "TD"
			], [
				"stateId" => 2303,
				"countryId" => 60,
				"name" => "Tiassale",
				"code" => "TI"
			], [
				"stateId" => 2304,
				"countryId" => 60,
				"name" => "Toumodi",
				"code" => "TM"
			], [
				"stateId" => 2305,
				"countryId" => 60,
				"name" => "Vavoua",
				"code" => "VA"
			], [
				"stateId" => 2306,
				"countryId" => 60,
				"name" => "Yamoussoukro",
				"code" => "YA"
			], [
				"stateId" => 2307,
				"countryId" => 60,
				"name" => "Agnilbilekrou",
				"code" => "AG"
			], [
				"stateId" => 2308,
				"countryId" => 116,
				"name" => "Al Anbar",
				"code" => "AN"
			], [
				"stateId" => 2309,
				"countryId" => 116,
				"name" => "Al Basrah",
				"code" => "BA"
			], [
				"stateId" => 2310,
				"countryId" => 116,
				"name" => "Al Muthann·",
				"code" => "MU"
			], [
				"stateId" => 2311,
				"countryId" => 116,
				"name" => "Al Qadisiyah",
				"code" => "QA"
			], [
				"stateId" => 2312,
				"countryId" => 116,
				"name" => "As Sulaymaniyah",
				"code" => "SU"
			], [
				"stateId" => 2313,
				"countryId" => 116,
				"name" => "Babil",
				"code" => "BB"
			], [
				"stateId" => 2314,
				"countryId" => 116,
				"name" => "Baghdad",
				"code" => "BG"
			], [
				"stateId" => 2315,
				"countryId" => 116,
				"name" => "Dahuk",
				"code" => "DA"
			], [
				"stateId" => 2316,
				"countryId" => 116,
				"name" => "Dhi Qar",
				"code" => "DQ"
			], [
				"stateId" => 2317,
				"countryId" => 116,
				"name" => "Diyala",
				"code" => "DI"
			], [
				"stateId" => 2318,
				"countryId" => 116,
				"name" => "Arbil",
				"code" => "AR"
			], [
				"stateId" => 2319,
				"countryId" => 116,
				"name" => "Karbala'",
				"code" => "KA"
			], [
				"stateId" => 2320,
				"countryId" => 116,
				"name" => "At Ta'mim",
				"code" => "TS"
			], [
				"stateId" => 2321,
				"countryId" => 116,
				"name" => "Maysan",
				"code" => "MA"
			], [
				"stateId" => 2322,
				"countryId" => 116,
				"name" => "Ninawa",
				"code" => "NI"
			], [
				"stateId" => 2323,
				"countryId" => 116,
				"name" => "Wasit",
				"code" => "WA"
			], [
				"stateId" => 2324,
				"countryId" => 116,
				"name" => "An Najaf",
				"code" => "NA"
			], [
				"stateId" => 2325,
				"countryId" => 116,
				"name" => "Sñalah ad Din",
				"code" => "SD"
			], [
				"stateId" => 2326,
				"countryId" => 122,
				"name" => "Aichi",
				"code" => "AI"
			], [
				"stateId" => 2327,
				"countryId" => 122,
				"name" => "Akita",
				"code" => "AK"
			], [
				"stateId" => 2328,
				"countryId" => 122,
				"name" => "Aomori",
				"code" => "AM"
			], [
				"stateId" => 2329,
				"countryId" => 122,
				"name" => "Chiba",
				"code" => "CH"
			], [
				"stateId" => 2330,
				"countryId" => 122,
				"name" => "Ehime",
				"code" => "EH"
			], [
				"stateId" => 2331,
				"countryId" => 122,
				"name" => "Fukui",
				"code" => "FU"
			], [
				"stateId" => 2332,
				"countryId" => 122,
				"name" => "Fukuoka",
				"code" => "FK"
			], [
				"stateId" => 2333,
				"countryId" => 122,
				"name" => "Fukushima",
				"code" => "FS"
			], [
				"stateId" => 2334,
				"countryId" => 122,
				"name" => "Gifu",
				"code" => "GI"
			], [
				"stateId" => 2335,
				"countryId" => 122,
				"name" => "Gumma",
				"code" => "GU"
			], [
				"stateId" => 2336,
				"countryId" => 122,
				"name" => "Hiroshima",
				"code" => "HI"
			], [
				"stateId" => 2337,
				"countryId" => 122,
				"name" => "Hokkaido",
				"code" => "HO"
			], [
				"stateId" => 2338,
				"countryId" => 122,
				"name" => "Hyogo",
				"code" => "HY"
			], [
				"stateId" => 2339,
				"countryId" => 122,
				"name" => "Ibaraki",
				"code" => "IB"
			], [
				"stateId" => 2340,
				"countryId" => 122,
				"name" => "Ishikawa",
				"code" => "IS"
			], [
				"stateId" => 2341,
				"countryId" => 122,
				"name" => "Iwate",
				"code" => "IW"
			], [
				"stateId" => 2342,
				"countryId" => 122,
				"name" => "Kagawa",
				"code" => "KA"
			], [
				"stateId" => 2343,
				"countryId" => 122,
				"name" => "Kagoshima",
				"code" => "KG"
			], [
				"stateId" => 2344,
				"countryId" => 122,
				"name" => "Kanagawa",
				"code" => "KN"
			], [
				"stateId" => 2345,
				"countryId" => 122,
				"name" => "Kochi",
				"code" => "KO"
			], [
				"stateId" => 2346,
				"countryId" => 122,
				"name" => "Kumamoto",
				"code" => "KU"
			], [
				"stateId" => 2347,
				"countryId" => 122,
				"name" => "Kyoto",
				"code" => "KY"
			], [
				"stateId" => 2348,
				"countryId" => 122,
				"name" => "Mie",
				"code" => "MI"
			], [
				"stateId" => 2349,
				"countryId" => 122,
				"name" => "Miyagi",
				"code" => "MY"
			], [
				"stateId" => 2350,
				"countryId" => 122,
				"name" => "Miyazaki",
				"code" => "MZ"
			], [
				"stateId" => 2351,
				"countryId" => 122,
				"name" => "Nagano",
				"code" => "NA"
			], [
				"stateId" => 2352,
				"countryId" => 122,
				"name" => "Nagasaki",
				"code" => "NG"
			], [
				"stateId" => 2353,
				"countryId" => 122,
				"name" => "Nara",
				"code" => "NR"
			], [
				"stateId" => 2354,
				"countryId" => 122,
				"name" => "Niigata",
				"code" => "NI"
			], [
				"stateId" => 2355,
				"countryId" => 122,
				"name" => "Oita",
				"code" => "OI"
			], [
				"stateId" => 2356,
				"countryId" => 122,
				"name" => "Okayama",
				"code" => "OK"
			], [
				"stateId" => 2357,
				"countryId" => 122,
				"name" => "Osaka",
				"code" => "OS"
			], [
				"stateId" => 2358,
				"countryId" => 122,
				"name" => "Saga",
				"code" => "SA"
			], [
				"stateId" => 2359,
				"countryId" => 122,
				"name" => "Saitama",
				"code" => "SI"
			], [
				"stateId" => 2360,
				"countryId" => 122,
				"name" => "Shiga",
				"code" => "SH"
			], [
				"stateId" => 2361,
				"countryId" => 122,
				"name" => "Shimane",
				"code" => "SM"
			], [
				"stateId" => 2362,
				"countryId" => 122,
				"name" => "Shizuoka",
				"code" => "SZ"
			], [
				"stateId" => 2363,
				"countryId" => 122,
				"name" => "Tochigi",
				"code" => "TO"
			], [
				"stateId" => 2364,
				"countryId" => 122,
				"name" => "Tokushima",
				"code" => "TK"
			], [
				"stateId" => 2365,
				"countryId" => 122,
				"name" => "Tokyo",
				"code" => "TY"
			], [
				"stateId" => 2366,
				"countryId" => 122,
				"name" => "Tottori",
				"code" => "TT"
			], [
				"stateId" => 2367,
				"countryId" => 122,
				"name" => "Toyama",
				"code" => "TA"
			], [
				"stateId" => 2368,
				"countryId" => 122,
				"name" => "Wakayama",
				"code" => "WA"
			], [
				"stateId" => 2369,
				"countryId" => 122,
				"name" => "Yamagata",
				"code" => "YA"
			], [
				"stateId" => 2370,
				"countryId" => 122,
				"name" => "Yamaguchi",
				"code" => "YM"
			], [
				"stateId" => 2371,
				"countryId" => 122,
				"name" => "Yamanashi",
				"code" => "YN"
			], [
				"stateId" => 2372,
				"countryId" => 122,
				"name" => "Okinawa",
				"code" => "ON"
			], [
				"stateId" => 2373,
				"countryId" => 120,
				"name" => "Clarendon",
				"code" => "CL"
			], [
				"stateId" => 2374,
				"countryId" => 120,
				"name" => "Hanover",
				"code" => "HA"
			], [
				"stateId" => 2375,
				"countryId" => 120,
				"name" => "Manchester",
				"code" => "MA"
			], [
				"stateId" => 2376,
				"countryId" => 120,
				"name" => "Portland",
				"code" => "PO"
			], [
				"stateId" => 2377,
				"countryId" => 120,
				"name" => "Saint Andrew",
				"code" => "SD"
			], [
				"stateId" => 2378,
				"countryId" => 120,
				"name" => "Saint Ann",
				"code" => "SN"
			], [
				"stateId" => 2379,
				"countryId" => 120,
				"name" => "Saint Catherine",
				"code" => "SC"
			], [
				"stateId" => 2380,
				"countryId" => 120,
				"name" => "Saint Elizabeth",
				"code" => "SE"
			], [
				"stateId" => 2381,
				"countryId" => 120,
				"name" => "Saint James",
				"code" => "SJ"
			], [
				"stateId" => 2382,
				"countryId" => 120,
				"name" => "Saint Mary",
				"code" => "SM"
			], [
				"stateId" => 2383,
				"countryId" => 120,
				"name" => "Saint Thomas",
				"code" => "ST"
			], [
				"stateId" => 2384,
				"countryId" => 120,
				"name" => "Trelawny",
				"code" => "TR"
			], [
				"stateId" => 2385,
				"countryId" => 120,
				"name" => "Westmoreland",
				"code" => "WE"
			], [
				"stateId" => 2386,
				"countryId" => 120,
				"name" => "Kingston",
				"code" => "KI"
			], [
				"stateId" => 2387,
				"countryId" => 126,
				"name" => "Al Balqa'",
				"code" => "BA"
			], [
				"stateId" => 2388,
				"countryId" => 126,
				"name" => "Ma'an",
				"code" => "MN"
			], [
				"stateId" => 2389,
				"countryId" => 126,
				"name" => "Al Karak",
				"code" => "KA"
			], [
				"stateId" => 2390,
				"countryId" => 126,
				"name" => "Al Mafraq",
				"code" => "MA"
			], [
				"stateId" => 2391,
				"countryId" => 126,
				"name" => "'Amman",
				"code" => "AM"
			], [
				"stateId" => 2392,
				"countryId" => 126,
				"name" => "At Tafilah",
				"code" => "AT"
			], [
				"stateId" => 2393,
				"countryId" => 126,
				"name" => "Az Zaraq",
				"code" => "AZ"
			], [
				"stateId" => 2394,
				"countryId" => 126,
				"name" => "Irbid",
				"code" => "IR"
			], [
				"stateId" => 2395,
				"countryId" => 129,
				"name" => "Central",
				"code" => "CE"
			], [
				"stateId" => 2396,
				"countryId" => 129,
				"name" => "Coast",
				"code" => "CO"
			], [
				"stateId" => 2397,
				"countryId" => 129,
				"name" => "Eastern",
				"code" => "EA"
			], [
				"stateId" => 2398,
				"countryId" => 129,
				"name" => "Nairobi Area",
				"code" => "NA"
			], [
				"stateId" => 2399,
				"countryId" => 129,
				"name" => "NorthEastern",
				"code" => "NE"
			], [
				"stateId" => 2400,
				"countryId" => 129,
				"name" => "Nyanza",
				"code" => "NY"
			], [
				"stateId" => 2401,
				"countryId" => 129,
				"name" => "Rift Valley",
				"code" => "RV"
			], [
				"stateId" => 2402,
				"countryId" => 129,
				"name" => "Western",
				"code" => "WE"
			], [
				"stateId" => 2403,
				"countryId" => 135,
				"name" => "Bishkek",
				"code" => "BI"
			], [
				"stateId" => 2404,
				"countryId" => 135,
				"name" => "Chuy",
				"code" => "CH"
			], [
				"stateId" => 2405,
				"countryId" => 135,
				"name" => "Jalal-Abad",
				"code" => "DA"
			], [
				"stateId" => 2406,
				"countryId" => 135,
				"name" => "Naryn",
				"code" => "NA"
			], [
				"stateId" => 2407,
				"countryId" => 135,
				"name" => "Osh",
				"code" => "OS"
			], [
				"stateId" => 2408,
				"countryId" => 135,
				"name" => "Talas",
				"code" => "TL"
			], [
				"stateId" => 2409,
				"countryId" => 135,
				"name" => "Ysyk-Kol",
				"code" => "YK"
			], [
				"stateId" => 2410,
				"countryId" => 132,
				"name" => "Chagang-do",
				"code" => "CH"
			], [
				"stateId" => 2411,
				"countryId" => 132,
				"name" => "Hamgyong-namdo",
				"code" => "HN"
			], [
				"stateId" => 2412,
				"countryId" => 132,
				"name" => "Hwanghae-namdo",
				"code" => "WN"
			], [
				"stateId" => 2413,
				"countryId" => 132,
				"name" => "Hwanghae-bukto",
				"code" => "WB"
			], [
				"stateId" => 2414,
				"countryId" => 132,
				"name" => "Kaesong-si",
				"code" => "KS"
			], [
				"stateId" => 2415,
				"countryId" => 132,
				"name" => "Kangwon-do",
				"code" => "KW"
			], [
				"stateId" => 2416,
				"countryId" => 132,
				"name" => "P'yongan-namdo",
				"code" => "PN"
			], [
				"stateId" => 2417,
				"countryId" => 132,
				"name" => "P'yongyang-si",
				"code" => "PY"
			], [
				"stateId" => 2418,
				"countryId" => 132,
				"name" => "Yanggang-do",
				"code" => "YG"
			], [
				"stateId" => 2419,
				"countryId" => 132,
				"name" => "Namp'o-si",
				"code" => "NP"
			], [
				"stateId" => 2420,
				"countryId" => 132,
				"name" => "Hamgyong-bukto",
				"code" => "HG"
			], [
				"stateId" => 2421,
				"countryId" => 131,
				"name" => "Gilbert Islands",
				"code" => "GI"
			], [
				"stateId" => 2422,
				"countryId" => 131,
				"name" => "Line Islands",
				"code" => "LI"
			], [
				"stateId" => 2423,
				"countryId" => 131,
				"name" => "Phoenix Islands",
				"code" => "PI"
			], [
				"stateId" => 2424,
				"countryId" => 133,
				"name" => "Cheju-do",
				"code" => "CJ"
			], [
				"stateId" => 2425,
				"countryId" => 133,
				"name" => "Cholla-bukto",
				"code" => "CB"
			], [
				"stateId" => 2426,
				"countryId" => 133,
				"name" => "Ch'ungch'ong-bukto",
				"code" => "GB"
			], [
				"stateId" => 2427,
				"countryId" => 133,
				"name" => "Kangwon-do",
				"code" => "KW"
			], [
				"stateId" => 2428,
				"countryId" => 133,
				"name" => "Kyongsang-namdo",
				"code" => "KN"
			], [
				"stateId" => 2429,
				"countryId" => 133,
				"name" => "Pusan-gwangyoksi",
				"code" => "PU"
			], [
				"stateId" => 2430,
				"countryId" => 133,
				"name" => "Soul-t'ukpyolsi",
				"code" => "SO"
			], [
				"stateId" => 2431,
				"countryId" => 133,
				"name" => "Inch'on-gwangyoksi",
				"code" => "IN"
			], [
				"stateId" => 2432,
				"countryId" => 133,
				"name" => "Kyonggi-do",
				"code" => "KG"
			], [
				"stateId" => 2433,
				"countryId" => 133,
				"name" => "Kyongsang-bukto",
				"code" => "KB"
			], [
				"stateId" => 2434,
				"countryId" => 133,
				"name" => "Taegu-gwangyoksi",
				"code" => "TG"
			], [
				"stateId" => 2435,
				"countryId" => 133,
				"name" => "Cholla-namdo",
				"code" => "CN"
			], [
				"stateId" => 2436,
				"countryId" => 133,
				"name" => "Ch'ungch'ong-namdo",
				"code" => "GN"
			], [
				"stateId" => 2437,
				"countryId" => 133,
				"name" => "Kwangju-gwangyoksi",
				"code" => "KJ"
			], [
				"stateId" => 2438,
				"countryId" => 133,
				"name" => "Taejon-gwangyoksi",
				"code" => "TJ"
			], [
				"stateId" => 2439,
				"countryId" => 134,
				"name" => "Al Kuwayt",
				"code" => "KU"
			], [
				"stateId" => 2441,
				"countryId" => 134,
				"name" => "Hawalli",
				"code" => "HA"
			], [
				"stateId" => 2442,
				"countryId" => 134,
				"name" => "Al Ahmadi",
				"code" => "AH"
			], [
				"stateId" => 2443,
				"countryId" => 134,
				"name" => "Al Jahra'",
				"code" => "JA"
			], [
				"stateId" => 2444,
				"countryId" => 134,
				"name" => "Al Farwaniyah",
				"code" => "FA"
			], [
				"stateId" => 2445,
				"countryId" => 128,
				"name" => "Almaty",
				"code" => "AC"
			], [
				"stateId" => 2446,
				"countryId" => 128,
				"name" => "Aqmola",
				"code" => "AM"
			], [
				"stateId" => 2447,
				"countryId" => 128,
				"name" => "Aqtobe",
				"code" => "AT"
			], [
				"stateId" => 2448,
				"countryId" => 128,
				"name" => "Astana",
				"code" => "AS"
			], [
				"stateId" => 2449,
				"countryId" => 128,
				"name" => "Atyrau",
				"code" => "AR"
			], [
				"stateId" => 2450,
				"countryId" => 128,
				"name" => "Batys Qazaqstan",
				"code" => "BQ"
			], [
				"stateId" => 2451,
				"countryId" => 128,
				"name" => "Bayqongyr",
				"code" => "BY"
			], [
				"stateId" => 2452,
				"countryId" => 128,
				"name" => "Mangghystau",
				"code" => "MG"
			], [
				"stateId" => 2453,
				"countryId" => 128,
				"name" => "Ongtustik Qazaqstan",
				"code" => "OQ"
			], [
				"stateId" => 2454,
				"countryId" => 128,
				"name" => "Pavlodar",
				"code" => "PA"
			], [
				"stateId" => 2455,
				"countryId" => 128,
				"name" => "Qaraghandy",
				"code" => "QG"
			], [
				"stateId" => 2456,
				"countryId" => 128,
				"name" => "Qostanay",
				"code" => "QS"
			], [
				"stateId" => 2457,
				"countryId" => 128,
				"name" => "Qyzylorda",
				"code" => "QO"
			], [
				"stateId" => 2458,
				"countryId" => 128,
				"name" => "Shyghys Qazaqstan",
				"code" => "SQ"
			], [
				"stateId" => 2459,
				"countryId" => 128,
				"name" => "Soltustik Qazaqstan",
				"code" => "SA"
			], [
				"stateId" => 2460,
				"countryId" => 128,
				"name" => "Zhambyl",
				"code" => "ZM"
			], [
				"stateId" => 2464,
				"countryId" => 136,
				"name" => "Attapu",
				"code" => "AT"
			], [
				"stateId" => 2465,
				"countryId" => 136,
				"name" => "Champasak",
				"code" => "CH"
			], [
				"stateId" => 2466,
				"countryId" => 136,
				"name" => "Houaphan",
				"code" => "HO"
			], [
				"stateId" => 2467,
				"countryId" => 136,
				"name" => "Oudomxai",
				"code" => "OU"
			], [
				"stateId" => 2468,
				"countryId" => 136,
				"name" => "Xiagnabouli",
				"code" => "XA"
			], [
				"stateId" => 2469,
				"countryId" => 136,
				"name" => "Xiangkhoang",
				"code" => "XI"
			], [
				"stateId" => 2470,
				"countryId" => 136,
				"name" => "Khammouan",
				"code" => "KH"
			], [
				"stateId" => 2471,
				"countryId" => 136,
				"name" => "Louangnamtha",
				"code" => "LM"
			], [
				"stateId" => 2472,
				"countryId" => 136,
				"name" => "Louangphabang",
				"code" => "LP"
			], [
				"stateId" => 2473,
				"countryId" => 136,
				"name" => "Phongsali",
				"code" => "PH"
			], [
				"stateId" => 2474,
				"countryId" => 136,
				"name" => "Salavan",
				"code" => "SL"
			], [
				"stateId" => 2475,
				"countryId" => 136,
				"name" => "Savannakhet",
				"code" => "SV"
			], [
				"stateId" => 2476,
				"countryId" => 136,
				"name" => "Bokeo",
				"code" => "BK"
			], [
				"stateId" => 2477,
				"countryId" => 136,
				"name" => "Bolikhamxai",
				"code" => "BL"
			], [
				"stateId" => 2478,
				"countryId" => 136,
				"name" => "Viangchan",
				"code" => "VI"
			], [
				"stateId" => 2479,
				"countryId" => 136,
				"name" => "Xaisomboun",
				"code" => "XS"
			], [
				"stateId" => 2480,
				"countryId" => 136,
				"name" => "Xekong",
				"code" => "XE"
			], [
				"stateId" => 2481,
				"countryId" => 138,
				"name" => "Beqaa",
				"code" => "BI"
			], [
				"stateId" => 2482,
				"countryId" => 138,
				"name" => "Liban-Sud",
				"code" => "JA"
			], [
				"stateId" => 2483,
				"countryId" => 138,
				"name" => "Liban-Nord",
				"code" => "AS"
			], [
				"stateId" => 2484,
				"countryId" => 138,
				"name" => "Beyrouth",
				"code" => "BA"
			], [
				"stateId" => 2485,
				"countryId" => 138,
				"name" => "Mont-Liban",
				"code" => "JL"
			], [
				"stateId" => 2486,
				"countryId" => 137,
				"name" => "Aizjrayjkes Rajons",
				"code" => "AI"
			], [
				"stateId" => 2487,
				"countryId" => 137,
				"name" => "Aluksnes Rajons",
				"code" => "AL"
			], [
				"stateId" => 2488,
				"countryId" => 137,
				"name" => "Balvu Rajons",
				"code" => "BL"
			], [
				"stateId" => 2489,
				"countryId" => 137,
				"name" => "Bauskas Rajons",
				"code" => "BU"
			], [
				"stateId" => 2490,
				"countryId" => 137,
				"name" => "Cesu Rajons",
				"code" => "CE"
			], [
				"stateId" => 2491,
				"countryId" => 137,
				"name" => "Daugavpils",
				"code" => "DA"
			], [
				"stateId" => 2492,
				"countryId" => 137,
				"name" => "Daugavpils Rajons",
				"code" => "DU"
			], [
				"stateId" => 2493,
				"countryId" => 137,
				"name" => "Dobeles Rajons",
				"code" => "DO"
			], [
				"stateId" => 2494,
				"countryId" => 137,
				"name" => "Gulbenes Rajons",
				"code" => "GU"
			], [
				"stateId" => 2495,
				"countryId" => 137,
				"name" => "Jekabpils Rajons",
				"code" => "JK"
			], [
				"stateId" => 2496,
				"countryId" => 137,
				"name" => "Jelgava",
				"code" => "JE"
			], [
				"stateId" => 2497,
				"countryId" => 137,
				"name" => "Jelgavas Rajons",
				"code" => "JL"
			], [
				"stateId" => 2498,
				"countryId" => 137,
				"name" => "Jurmala",
				"code" => "JU"
			], [
				"stateId" => 2499,
				"countryId" => 137,
				"name" => "Kraslavas Rajons",
				"code" => "KR"
			], [
				"stateId" => 2500,
				"countryId" => 137,
				"name" => "Kuldigas Rajons",
				"code" => "KU"
			], [
				"stateId" => 2501,
				"countryId" => 137,
				"name" => "Liepaja",
				"code" => "LI"
			], [
				"stateId" => 2502,
				"countryId" => 137,
				"name" => "Liepajas Rajons",
				"code" => "LE"
			], [
				"stateId" => 2503,
				"countryId" => 137,
				"name" => "Limbazu Rajons",
				"code" => "LM"
			], [
				"stateId" => 2504,
				"countryId" => 137,
				"name" => "Ludzas Rajons",
				"code" => "LU"
			], [
				"stateId" => 2505,
				"countryId" => 137,
				"name" => "Madonas Rajons",
				"code" => "MA"
			], [
				"stateId" => 2506,
				"countryId" => 137,
				"name" => "Ogres Rajons",
				"code" => "OG"
			], [
				"stateId" => 2507,
				"countryId" => 137,
				"name" => "Preiju Rajons",
				"code" => "PR"
			], [
				"stateId" => 2508,
				"countryId" => 137,
				"name" => "Rezekne",
				"code" => "RE"
			], [
				"stateId" => 2509,
				"countryId" => 137,
				"name" => "Rezeknes Rajons",
				"code" => "RA"
			], [
				"stateId" => 2510,
				"countryId" => 137,
				"name" => "Riga",
				"code" => "RI"
			], [
				"stateId" => 2511,
				"countryId" => 137,
				"name" => "Rigas Rajons",
				"code" => "RG"
			], [
				"stateId" => 2512,
				"countryId" => 137,
				"name" => "Saldus Rajons",
				"code" => "SA"
			], [
				"stateId" => 2513,
				"countryId" => 137,
				"name" => "Talsu Rajons",
				"code" => "TA"
			], [
				"stateId" => 2514,
				"countryId" => 137,
				"name" => "Tukuma Rajons",
				"code" => "TU"
			], [
				"stateId" => 2515,
				"countryId" => 137,
				"name" => "Valkas Rajons",
				"code" => "VK"
			], [
				"stateId" => 2516,
				"countryId" => 137,
				"name" => "Valmieras Rajons",
				"code" => "VM"
			], [
				"stateId" => 2517,
				"countryId" => 137,
				"name" => "Ventspils",
				"code" => "VE"
			], [
				"stateId" => 2518,
				"countryId" => 137,
				"name" => "Ventspils Rajons",
				"code" => "VN"
			], [
				"stateId" => 2521,
				"countryId" => 143,
				"name" => "Alytaus Apskritis",
				"code" => "AL"
			], [
				"stateId" => 2531,
				"countryId" => 143,
				"name" => "Kauno Apskritis",
				"code" => "KU"
			], [
				"stateId" => 2535,
				"countryId" => 143,
				"name" => "Klaipedos Apskritis",
				"code" => "KL"
			], [
				"stateId" => 2540,
				"countryId" => 143,
				"name" => "Marijampoles Apskritis",
				"code" => "MR"
			], [
				"stateId" => 2548,
				"countryId" => 143,
				"name" => "Panevezio Apskritis",
				"code" => "PN"
			], [
				"stateId" => 2557,
				"countryId" => 143,
				"name" => "Siauliu Apskritis",
				"code" => "SA"
			], [
				"stateId" => 2564,
				"countryId" => 143,
				"name" => "Taurages Apskritis",
				"code" => "TA"
			], [
				"stateId" => 2565,
				"countryId" => 143,
				"name" => "Telsiu Apskritis",
				"code" => "TE"
			], [
				"stateId" => 2568,
				"countryId" => 143,
				"name" => "Utenos Apskritis",
				"code" => "UT"
			], [
				"stateId" => 2572,
				"countryId" => 143,
				"name" => "Vilniaus Apskritis",
				"code" => "VL"
			], [
				"stateId" => 2574,
				"countryId" => 140,
				"name" => "Bong",
				"code" => "BG"
			], [
				"stateId" => 2575,
				"countryId" => 140,
				"name" => "Grand Gedeh",
				"code" => "GG"
			], [
				"stateId" => 2576,
				"countryId" => 140,
				"name" => "Lofa",
				"code" => "LO"
			], [
				"stateId" => 2578,
				"countryId" => 140,
				"name" => "Nimba",
				"code" => "NI"
			], [
				"stateId" => 2579,
				"countryId" => 140,
				"name" => "Sinoe",
				"code" => "SI"
			], [
				"stateId" => 2580,
				"countryId" => 140,
				"name" => "Grand Bassa",
				"code" => "GB"
			], [
				"stateId" => 2581,
				"countryId" => 140,
				"name" => "Grand Cape Mount",
				"code" => "CM"
			], [
				"stateId" => 2582,
				"countryId" => 140,
				"name" => "Maryland",
				"code" => "MY"
			], [
				"stateId" => 2583,
				"countryId" => 140,
				"name" => "Montserrado",
				"code" => "MO"
			], [
				"stateId" => 2584,
				"countryId" => 140,
				"name" => "Bomi",
				"code" => "BM"
			], [
				"stateId" => 2585,
				"countryId" => 140,
				"name" => "Grand Kru",
				"code" => "GK"
			], [
				"stateId" => 2586,
				"countryId" => 140,
				"name" => "Margibi",
				"code" => "MG"
			], [
				"stateId" => 2587,
				"countryId" => 140,
				"name" => "River Cess",
				"code" => "RI"
			], [
				"stateId" => 2588,
				"countryId" => 220,
				"name" => "Banskobystricky",
				"code" => "BC"
			], [
				"stateId" => 2589,
				"countryId" => 220,
				"name" => "Bratislavsky",
				"code" => "BL"
			], [
				"stateId" => 2590,
				"countryId" => 220,
				"name" => "Kosicky",
				"code" => "KI"
			], [
				"stateId" => 2591,
				"countryId" => 220,
				"name" => "Nitrinsky",
				"code" => "NI"
			], [
				"stateId" => 2592,
				"countryId" => 220,
				"name" => "Presovsky",
				"code" => "PV"
			], [
				"stateId" => 2593,
				"countryId" => 220,
				"name" => "Treciansky",
				"code" => "TC"
			], [
				"stateId" => 2594,
				"countryId" => 220,
				"name" => "Trnavsky",
				"code" => "TA"
			], [
				"stateId" => 2595,
				"countryId" => 220,
				"name" => "Zilinsky",
				"code" => "ZI"
			], [
				"stateId" => 2596,
				"countryId" => 142,
				"name" => "Balzers",
				"code" => "BA"
			], [
				"stateId" => 2597,
				"countryId" => 142,
				"name" => "Eschen",
				"code" => "ES"
			], [
				"stateId" => 2598,
				"countryId" => 142,
				"name" => "Gamprin",
				"code" => "GA"
			], [
				"stateId" => 2599,
				"countryId" => 142,
				"name" => "Mauren",
				"code" => "MA"
			], [
				"stateId" => 2600,
				"countryId" => 142,
				"name" => "Planken",
				"code" => "PL"
			], [
				"stateId" => 2601,
				"countryId" => 142,
				"name" => "Ruggell",
				"code" => "RU"
			], [
				"stateId" => 2602,
				"countryId" => 142,
				"name" => "Schaan",
				"code" => "SN"
			], [
				"stateId" => 2603,
				"countryId" => 142,
				"name" => "Schellenberg",
				"code" => "SB"
			], [
				"stateId" => 2604,
				"countryId" => 142,
				"name" => "Triesen",
				"code" => "TN"
			], [
				"stateId" => 2605,
				"countryId" => 142,
				"name" => "Triesenberg",
				"code" => "TB"
			], [
				"stateId" => 2606,
				"countryId" => 142,
				"name" => "Vaduz",
				"code" => "VA"
			], [
				"stateId" => 2613,
				"countryId" => 139,
				"name" => "Berea",
				"code" => "BE"
			], [
				"stateId" => 2614,
				"countryId" => 139,
				"name" => "Butha-Buthe",
				"code" => "BB"
			], [
				"stateId" => 2615,
				"countryId" => 139,
				"name" => "Leribe",
				"code" => "LE"
			], [
				"stateId" => 2616,
				"countryId" => 139,
				"name" => "Mafeteng",
				"code" => "MF"
			], [
				"stateId" => 2617,
				"countryId" => 139,
				"name" => "Maseru",
				"code" => "MS"
			], [
				"stateId" => 2618,
				"countryId" => 139,
				"name" => "Mohale's Hoek",
				"code" => "MH"
			], [
				"stateId" => 2619,
				"countryId" => 139,
				"name" => "Mokhotlong",
				"code" => "MK"
			], [
				"stateId" => 2620,
				"countryId" => 139,
				"name" => "Qacha's Hoek",
				"code" => "QN"
			], [
				"stateId" => 2621,
				"countryId" => 139,
				"name" => "Quthing",
				"code" => "QT"
			], [
				"stateId" => 2622,
				"countryId" => 139,
				"name" => "Thaba-Tseka",
				"code" => "TT"
			], [
				"stateId" => 2623,
				"countryId" => 144,
				"name" => "Diekirch",
				"code" => "DI"
			], [
				"stateId" => 2624,
				"countryId" => 144,
				"name" => "Grevenmacher",
				"code" => "GR"
			], [
				"stateId" => 2625,
				"countryId" => 144,
				"name" => "Luxembourg",
				"code" => "LU"
			], [
				"stateId" => 2627,
				"countryId" => 141,
				"name" => "Al 'Aziziyah",
				"code" => "AZ"
			], [
				"stateId" => 2629,
				"countryId" => 141,
				"name" => "Al Jufrah",
				"code" => "JU"
			], [
				"stateId" => 2631,
				"countryId" => 141,
				"name" => "Al Kufrah",
				"code" => "KU"
			], [
				"stateId" => 2636,
				"countryId" => 141,
				"name" => "Ash Shati'",
				"code" => "SH"
			], [
				"stateId" => 2646,
				"countryId" => 141,
				"name" => "Murzuq",
				"code" => "MU"
			], [
				"stateId" => 2650,
				"countryId" => 141,
				"name" => "Sabha",
				"code" => "SB"
			], [
				"stateId" => 2655,
				"countryId" => 141,
				"name" => "Tarhunah",
				"code" => "TH"
			], [
				"stateId" => 2656,
				"countryId" => 141,
				"name" => "Töubruq",
				"code" => "TU"
			], [
				"stateId" => 2658,
				"countryId" => 141,
				"name" => "Zlitan",
				"code" => "ZL"
			], [
				"stateId" => 2660,
				"countryId" => 141,
				"name" => "Ajdabiya",
				"code" => "AJ"
			], [
				"stateId" => 2661,
				"countryId" => 141,
				"name" => "Al Fatih",
				"code" => "FA"
			], [
				"stateId" => 2662,
				"countryId" => 141,
				"name" => "Al Jabal al Akhdar",
				"code" => "JA"
			], [
				"stateId" => 2663,
				"countryId" => 141,
				"name" => "Al Khums",
				"code" => "KH"
			], [
				"stateId" => 2664,
				"countryId" => 141,
				"name" => "An Nuqat al Khams",
				"code" => "NK"
			], [
				"stateId" => 2665,
				"countryId" => 141,
				"name" => "Awbari",
				"code" => "AW"
			], [
				"stateId" => 2666,
				"countryId" => 141,
				"name" => "Az Zawiyah",
				"code" => "ZA"
			], [
				"stateId" => 2667,
				"countryId" => 141,
				"name" => "Banghazi",
				"code" => "BA"
			], [
				"stateId" => 2668,
				"countryId" => 141,
				"name" => "Darnah",
				"code" => "DA"
			], [
				"stateId" => 2669,
				"countryId" => 141,
				"name" => "Ghadamis",
				"code" => "GD"
			], [
				"stateId" => 2670,
				"countryId" => 141,
				"name" => "Gharyan",
				"code" => "GR"
			], [
				"stateId" => 2671,
				"countryId" => 141,
				"name" => "Misratah",
				"code" => "MI"
			], [
				"stateId" => 2672,
				"countryId" => 141,
				"name" => "Sawfajjin",
				"code" => "SF"
			], [
				"stateId" => 2673,
				"countryId" => 141,
				"name" => "Surt",
				"code" => "SU"
			], [
				"stateId" => 2674,
				"countryId" => 141,
				"name" => "Tarabulus",
				"code" => "TB"
			], [
				"stateId" => 2675,
				"countryId" => 141,
				"name" => "Yafran",
				"code" => "YA"
			], [
				"stateId" => 2676,
				"countryId" => 147,
				"name" => "Antsiranana",
				"code" => "AS"
			], [
				"stateId" => 2677,
				"countryId" => 147,
				"name" => "Fianarantsoa",
				"code" => "FI"
			], [
				"stateId" => 2678,
				"countryId" => 147,
				"name" => "Mahajanga",
				"code" => "MA"
			], [
				"stateId" => 2679,
				"countryId" => 147,
				"name" => "Toamasina",
				"code" => "TM"
			], [
				"stateId" => 2680,
				"countryId" => 147,
				"name" => "Antananarivo",
				"code" => "AV"
			], [
				"stateId" => 2681,
				"countryId" => 147,
				"name" => "Toliara",
				"code" => "TL"
			], [
				"stateId" => 2682,
				"countryId" => 145,
				"name" => "Ilhas",
				"code" => "IL"
			], [
				"stateId" => 2683,
				"countryId" => 145,
				"name" => "Macau",
				"code" => "MA"
			], [
				"stateId" => 2685,
				"countryId" => 163,
				"name" => "Balti",
				"code" => "BL"
			], [
				"stateId" => 2689,
				"countryId" => 163,
				"name" => "Cahul",
				"code" => "CG"
			], [
				"stateId" => 2696,
				"countryId" => 163,
				"name" => "Chisinau",
				"code" => "CE"
			], [
				"stateId" => 2702,
				"countryId" => 163,
				"name" => "Stinga Nistrului",
				"code" => "DU"
			], [
				"stateId" => 2703,
				"countryId" => 163,
				"name" => "Edinet",
				"code" => "ET"
			], [
				"stateId" => 2706,
				"countryId" => 163,
				"name" => "Gagauzia",
				"code" => "GA"
			], [
				"stateId" => 2714,
				"countryId" => 163,
				"name" => "Orhei",
				"code" => "OR"
			], [
				"stateId" => 2721,
				"countryId" => 163,
				"name" => "Soroca",
				"code" => "SR"
			], [
				"stateId" => 2727,
				"countryId" => 163,
				"name" => "Ungheni",
				"code" => "UN"
			], [
				"stateId" => 2729,
				"countryId" => 165,
				"name" => "Arhangay",
				"code" => "AR"
			], [
				"stateId" => 2730,
				"countryId" => 165,
				"name" => "Bayanhongor",
				"code" => "BH"
			], [
				"stateId" => 2731,
				"countryId" => 165,
				"name" => "Bayan-Olgiy",
				"code" => "BO"
			], [
				"stateId" => 2734,
				"countryId" => 165,
				"name" => "Dornogovi",
				"code" => "DG"
			], [
				"stateId" => 2735,
				"countryId" => 165,
				"name" => "Dundgovi",
				"code" => "DU"
			], [
				"stateId" => 2736,
				"countryId" => 165,
				"name" => "Dzavhan",
				"code" => "DZ"
			], [
				"stateId" => 2737,
				"countryId" => 165,
				"name" => "Govi-Altay",
				"code" => "GA"
			], [
				"stateId" => 2738,
				"countryId" => 165,
				"name" => "Hentiy",
				"code" => "HN"
			], [
				"stateId" => 2739,
				"countryId" => 165,
				"name" => "Omnogovi",
				"code" => "OG"
			], [
				"stateId" => 2740,
				"countryId" => 165,
				"name" => "Ovorhangay",
				"code" => "OH"
			], [
				"stateId" => 2741,
				"countryId" => 165,
				"name" => "Ulaanbaatar",
				"code" => "UB"
			], [
				"stateId" => 2742,
				"countryId" => 165,
				"name" => "Orhon",
				"code" => "ER"
			], [
				"stateId" => 2743,
				"countryId" => 167,
				"name" => "Saint Anthony",
				"code" => "SA"
			], [
				"stateId" => 2744,
				"countryId" => 167,
				"name" => "Saint Georges",
				"code" => "SG"
			], [
				"stateId" => 2745,
				"countryId" => 167,
				"name" => "Saint Peter",
				"code" => "SP"
			], [
				"stateId" => 2746,
				"countryId" => 148,
				"name" => "Chikwawa",
				"code" => "CK"
			], [
				"stateId" => 2747,
				"countryId" => 148,
				"name" => "Chiradzulu",
				"code" => "CR"
			], [
				"stateId" => 2748,
				"countryId" => 148,
				"name" => "Chitipa",
				"code" => "CT"
			], [
				"stateId" => 2749,
				"countryId" => 148,
				"name" => "Thyolo",
				"code" => "TH"
			], [
				"stateId" => 2750,
				"countryId" => 148,
				"name" => "Dedza",
				"code" => "DE"
			], [
				"stateId" => 2751,
				"countryId" => 148,
				"name" => "Dowa",
				"code" => "DO"
			], [
				"stateId" => 2752,
				"countryId" => 148,
				"name" => "Karonga",
				"code" => "KR"
			], [
				"stateId" => 2753,
				"countryId" => 148,
				"name" => "Kasungu",
				"code" => "KS"
			], [
				"stateId" => 2754,
				"countryId" => 148,
				"name" => "Machinga (Kasupe)",
				"code" => "MA"
			], [
				"stateId" => 2755,
				"countryId" => 148,
				"name" => "Lilongwe",
				"code" => "LI"
			], [
				"stateId" => 2756,
				"countryId" => 148,
				"name" => "Mangochi (Fort Johnston)",
				"code" => "MG"
			], [
				"stateId" => 2757,
				"countryId" => 148,
				"name" => "Mchinji",
				"code" => "MC"
			], [
				"stateId" => 2758,
				"countryId" => 148,
				"name" => "Mulanje (Mlange)",
				"code" => "MJ"
			], [
				"stateId" => 2759,
				"countryId" => 148,
				"name" => "Mzimba",
				"code" => "MZ"
			], [
				"stateId" => 2760,
				"countryId" => 148,
				"name" => "Ntcheu",
				"code" => "NU"
			], [
				"stateId" => 2761,
				"countryId" => 148,
				"name" => "Nkhata Bay",
				"code" => "NA"
			], [
				"stateId" => 2762,
				"countryId" => 148,
				"name" => "Nkhotakota",
				"code" => "NK"
			], [
				"stateId" => 2763,
				"countryId" => 148,
				"name" => "Nsanje",
				"code" => "NS"
			], [
				"stateId" => 2764,
				"countryId" => 148,
				"name" => "Ntchisi (Nchisi)",
				"code" => "NI"
			], [
				"stateId" => 2765,
				"countryId" => 148,
				"name" => "Rumphi (Rumpil)",
				"code" => "RU"
			], [
				"stateId" => 2766,
				"countryId" => 148,
				"name" => "Salima",
				"code" => "SA"
			], [
				"stateId" => 2767,
				"countryId" => 148,
				"name" => "Zomba",
				"code" => "ZO"
			], [
				"stateId" => 2768,
				"countryId" => 148,
				"name" => "Blantyre",
				"code" => "BL"
			], [
				"stateId" => 2769,
				"countryId" => 148,
				"name" => "Mwanza",
				"code" => "MN"
			], [
				"stateId" => 2770,
				"countryId" => 151,
				"name" => "Bamako",
				"code" => "BA"
			], [
				"stateId" => 2771,
				"countryId" => 151,
				"name" => "Gao",
				"code" => "GA"
			], [
				"stateId" => 2772,
				"countryId" => 151,
				"name" => "Kayes",
				"code" => "KY"
			], [
				"stateId" => 2773,
				"countryId" => 151,
				"name" => "Mopti",
				"code" => "MO"
			], [
				"stateId" => 2774,
				"countryId" => 151,
				"name" => "Segou",
				"code" => "SG"
			], [
				"stateId" => 2775,
				"countryId" => 151,
				"name" => "Sikasso",
				"code" => "SK"
			], [
				"stateId" => 2776,
				"countryId" => 151,
				"name" => "Koulikoro",
				"code" => "KK"
			], [
				"stateId" => 2777,
				"countryId" => 151,
				"name" => "Tombouctou",
				"code" => "TB"
			], [
				"stateId" => 2781,
				"countryId" => 168,
				"name" => "Agadir",
				"code" => "AG"
			], [
				"stateId" => 2782,
				"countryId" => 168,
				"name" => "Al HoceÔma",
				"code" => "AH"
			], [
				"stateId" => 2783,
				"countryId" => 168,
				"name" => "Azilal",
				"code" => "AZ"
			], [
				"stateId" => 2784,
				"countryId" => 168,
				"name" => "Ben Slimane",
				"code" => "BS"
			], [
				"stateId" => 2785,
				"countryId" => 168,
				"name" => "Beni Mellal",
				"code" => "BM"
			], [
				"stateId" => 2786,
				"countryId" => 168,
				"name" => "Boulemane",
				"code" => "BO"
			], [
				"stateId" => 2787,
				"countryId" => 168,
				"name" => "Casablanca",
				"code" => "CA"
			], [
				"stateId" => 2788,
				"countryId" => 168,
				"name" => "Chaouen",
				"code" => "CH"
			], [
				"stateId" => 2789,
				"countryId" => 168,
				"name" => "El Jadida",
				"code" => "EJ"
			], [
				"stateId" => 2790,
				"countryId" => 168,
				"name" => "El Kelaa des Sraghna",
				"code" => "EK"
			], [
				"stateId" => 2791,
				"countryId" => 168,
				"name" => "Er Rachidia",
				"code" => "ER"
			], [
				"stateId" => 2792,
				"countryId" => 168,
				"name" => "Essaouira",
				"code" => "ES"
			], [
				"stateId" => 2793,
				"countryId" => 168,
				"name" => "Fes",
				"code" => "FE"
			], [
				"stateId" => 2794,
				"countryId" => 168,
				"name" => "Figuig",
				"code" => "FI"
			], [
				"stateId" => 2795,
				"countryId" => 168,
				"name" => "Kenitra",
				"code" => "KE"
			], [
				"stateId" => 2796,
				"countryId" => 168,
				"name" => "Khemisset",
				"code" => "KH"
			], [
				"stateId" => 2797,
				"countryId" => 168,
				"name" => "Khenifra",
				"code" => "KN"
			], [
				"stateId" => 2798,
				"countryId" => 168,
				"name" => "Khouribga",
				"code" => "KO"
			], [
				"stateId" => 2799,
				"countryId" => 168,
				"name" => "Marrakech",
				"code" => "MR"
			], [
				"stateId" => 2800,
				"countryId" => 168,
				"name" => "Meknes",
				"code" => "ME"
			], [
				"stateId" => 2801,
				"countryId" => 168,
				"name" => "Nador",
				"code" => "NA"
			], [
				"stateId" => 2802,
				"countryId" => 168,
				"name" => "Ouarzazate",
				"code" => "OU"
			], [
				"stateId" => 2803,
				"countryId" => 168,
				"name" => "Oujda",
				"code" => "OJ"
			], [
				"stateId" => 2804,
				"countryId" => 168,
				"name" => "Rabat-Sale",
				"code" => "RA"
			], [
				"stateId" => 2805,
				"countryId" => 168,
				"name" => "Safi",
				"code" => "SA"
			], [
				"stateId" => 2806,
				"countryId" => 168,
				"name" => "Settat",
				"code" => "SE"
			], [
				"stateId" => 2807,
				"countryId" => 168,
				"name" => "Tanger",
				"code" => "TG"
			], [
				"stateId" => 2808,
				"countryId" => 168,
				"name" => "Tata",
				"code" => "TT"
			], [
				"stateId" => 2809,
				"countryId" => 168,
				"name" => "Taza",
				"code" => "TZ"
			], [
				"stateId" => 2810,
				"countryId" => 168,
				"name" => "Tiznit",
				"code" => "TI"
			], [
				"stateId" => 2811,
				"countryId" => 168,
				"name" => "Guelmim",
				"code" => "GU"
			], [
				"stateId" => 2812,
				"countryId" => 168,
				"name" => "Ifrane",
				"code" => "IF"
			], [
				"stateId" => 2813,
				"countryId" => 168,
				"name" => "Laayoune",
				"code" => "LA"
			], [
				"stateId" => 2814,
				"countryId" => 168,
				"name" => "Tan-Tan",
				"code" => "TN"
			], [
				"stateId" => 2815,
				"countryId" => 168,
				"name" => "Taounate",
				"code" => "TO"
			], [
				"stateId" => 2816,
				"countryId" => 168,
				"name" => "Sidi Kacem",
				"code" => "SK"
			], [
				"stateId" => 2817,
				"countryId" => 168,
				"name" => "Taroudannt",
				"code" => "TA"
			], [
				"stateId" => 2818,
				"countryId" => 168,
				"name" => "Tetouan",
				"code" => "TE"
			], [
				"stateId" => 2819,
				"countryId" => 168,
				"name" => "Larache",
				"code" => "LR"
			], [
				"stateId" => 2820,
				"countryId" => 168,
				"name" => "Assa-Zag",
				"code" => "AS"
			], [
				"stateId" => 2821,
				"countryId" => 168,
				"name" => "Es Smara",
				"code" => "EM"
			], [
				"stateId" => 2822,
				"countryId" => 157,
				"name" => "Black River",
				"code" => "BL"
			], [
				"stateId" => 2823,
				"countryId" => 157,
				"name" => "Flacq",
				"code" => "FL"
			], [
				"stateId" => 2824,
				"countryId" => 157,
				"name" => "Grand Port",
				"code" => "GP"
			], [
				"stateId" => 2825,
				"countryId" => 157,
				"name" => "Moka",
				"code" => "MO"
			], [
				"stateId" => 2826,
				"countryId" => 157,
				"name" => "Pamplemousses",
				"code" => "PA"
			], [
				"stateId" => 2827,
				"countryId" => 157,
				"name" => "Plaines Wilhems",
				"code" => "PW"
			], [
				"stateId" => 2828,
				"countryId" => 157,
				"name" => "Port Louis",
				"code" => "PL"
			], [
				"stateId" => 2829,
				"countryId" => 157,
				"name" => "RiviËre du Rempart",
				"code" => "RR"
			], [
				"stateId" => 2830,
				"countryId" => 157,
				"name" => "Savanne",
				"code" => "SA"
			], [
				"stateId" => 2831,
				"countryId" => 157,
				"name" => "Agalega Islands",
				"code" => "AG"
			], [
				"stateId" => 2832,
				"countryId" => 157,
				"name" => "Cargados Carajos",
				"code" => "CC"
			], [
				"stateId" => 2833,
				"countryId" => 157,
				"name" => "Rodrigues",
				"code" => "RO"
			], [
				"stateId" => 2834,
				"countryId" => 156,
				"name" => "Hodh Ech Chargui",
				"code" => "HC"
			], [
				"stateId" => 2835,
				"countryId" => 156,
				"name" => "Hodh El Gharbi",
				"code" => "HG"
			], [
				"stateId" => 2836,
				"countryId" => 156,
				"name" => "Assaba",
				"code" => "AS"
			], [
				"stateId" => 2837,
				"countryId" => 156,
				"name" => "Gorgol",
				"code" => "GO"
			], [
				"stateId" => 2838,
				"countryId" => 156,
				"name" => "Brakna",
				"code" => "BR"
			], [
				"stateId" => 2839,
				"countryId" => 156,
				"name" => "Trarza",
				"code" => "TR"
			], [
				"stateId" => 2840,
				"countryId" => 156,
				"name" => "Adrar",
				"code" => "AD"
			], [
				"stateId" => 2841,
				"countryId" => 156,
				"name" => "Dakhlet Nouadhibou",
				"code" => "DN"
			], [
				"stateId" => 2842,
				"countryId" => 156,
				"name" => "Tagant",
				"code" => "TG"
			], [
				"stateId" => 2843,
				"countryId" => 156,
				"name" => "Guidimaka",
				"code" => "GD"
			], [
				"stateId" => 2844,
				"countryId" => 156,
				"name" => "Tiris Zemmour",
				"code" => "TZ"
			], [
				"stateId" => 2845,
				"countryId" => 156,
				"name" => "Inchiri",
				"code" => "IN"
			], [
				"stateId" => 2846,
				"countryId" => 186,
				"name" => "Ad Dakhiliyah",
				"code" => "DA"
			], [
				"stateId" => 2847,
				"countryId" => 186,
				"name" => "Al Batinah",
				"code" => "BA"
			], [
				"stateId" => 2848,
				"countryId" => 186,
				"name" => "Al Wusta",
				"code" => "WU"
			], [
				"stateId" => 2849,
				"countryId" => 186,
				"name" => "Ash Sharqiyah",
				"code" => "SH"
			], [
				"stateId" => 2850,
				"countryId" => 186,
				"name" => "Az Zahirah",
				"code" => "ZA"
			], [
				"stateId" => 2851,
				"countryId" => 186,
				"name" => "Masqat",
				"code" => "MA"
			], [
				"stateId" => 2852,
				"countryId" => 186,
				"name" => "Musandam",
				"code" => "MU"
			], [
				"stateId" => 2853,
				"countryId" => 186,
				"name" => "Zufar",
				"code" => "JA"
			], [
				"stateId" => 2854,
				"countryId" => 150,
				"name" => "Seenu",
				"code" => "SE"
			], [
				"stateId" => 2858,
				"countryId" => 150,
				"name" => "Laamu",
				"code" => "LM"
			], [
				"stateId" => 2860,
				"countryId" => 150,
				"name" => "Thaa",
				"code" => "TH"
			], [
				"stateId" => 2862,
				"countryId" => 150,
				"name" => "Raa",
				"code" => "RA"
			], [
				"stateId" => 2865,
				"countryId" => 150,
				"name" => "Baa",
				"code" => "BA"
			], [
				"stateId" => 2867,
				"countryId" => 150,
				"name" => "Shaviyani",
				"code" => "SH"
			], [
				"stateId" => 2868,
				"countryId" => 150,
				"name" => "Noonu",
				"code" => "NO"
			], [
				"stateId" => 2869,
				"countryId" => 150,
				"name" => "Kaafu",
				"code" => "KA"
			], [
				"stateId" => 2873,
				"countryId" => 150,
				"name" => "Alifu",
				"code" => "AA"
			], [
				"stateId" => 2874,
				"countryId" => 150,
				"name" => "Dhaalu",
				"code" => "DA"
			], [
				"stateId" => 2875,
				"countryId" => 150,
				"name" => "Faafa",
				"code" => "FA"
			], [
				"stateId" => 2876,
				"countryId" => 150,
				"name" => "Gaafu Alifu",
				"code" => "GA"
			], [
				"stateId" => 2877,
				"countryId" => 150,
				"name" => "Gaafu Dhaalu",
				"code" => "GD"
			], [
				"stateId" => 2878,
				"countryId" => 150,
				"name" => "Haa Alifu",
				"code" => "HA"
			], [
				"stateId" => 2879,
				"countryId" => 150,
				"name" => "Haa Dhaalu",
				"code" => "HD"
			], [
				"stateId" => 2880,
				"countryId" => 150,
				"name" => "Lhaviyani",
				"code" => "LV"
			], [
				"stateId" => 2881,
				"countryId" => 150,
				"name" => "Maale",
				"code" => "MA"
			], [
				"stateId" => 2882,
				"countryId" => 150,
				"name" => "Meenu",
				"code" => "ME"
			], [
				"stateId" => 2883,
				"countryId" => 150,
				"name" => "Gnaviyani",
				"code" => "NA"
			], [
				"stateId" => 2884,
				"countryId" => 150,
				"name" => "Vaavu",
				"code" => "WA"
			], [
				"stateId" => 2885,
				"countryId" => 159,
				"name" => "Aguascalientes",
				"code" => "AG"
			], [
				"stateId" => 2886,
				"countryId" => 159,
				"name" => "Campeche",
				"code" => "CM"
			], [
				"stateId" => 2887,
				"countryId" => 159,
				"name" => "Coahuila de Zaragoza",
				"code" => "CA"
			], [
				"stateId" => 2888,
				"countryId" => 159,
				"name" => "Distrito Federal",
				"code" => "DF"
			], [
				"stateId" => 2889,
				"countryId" => 159,
				"name" => "Mexico",
				"code" => "MX"
			], [
				"stateId" => 2890,
				"countryId" => 159,
				"name" => "Michoacan de Ocampo",
				"code" => "MC"
			], [
				"stateId" => 2891,
				"countryId" => 159,
				"name" => "Nayarit",
				"code" => "NA"
			], [
				"stateId" => 2892,
				"countryId" => 159,
				"name" => "Puebla",
				"code" => "PU"
			], [
				"stateId" => 2893,
				"countryId" => 159,
				"name" => "Queretaro de Arteaga",
				"code" => "QE"
			], [
				"stateId" => 2894,
				"countryId" => 159,
				"name" => "Sinaloa",
				"code" => "SI"
			], [
				"stateId" => 2895,
				"countryId" => 159,
				"name" => "Veracruz-Llave",
				"code" => "VE"
			], [
				"stateId" => 2896,
				"countryId" => 159,
				"name" => "Yucatan",
				"code" => "YU"
			], [
				"stateId" => 2897,
				"countryId" => 149,
				"name" => "Johor",
				"code" => "JH"
			], [
				"stateId" => 2898,
				"countryId" => 149,
				"name" => "Kedah",
				"code" => "KH"
			], [
				"stateId" => 2899,
				"countryId" => 149,
				"name" => "Kelantan",
				"code" => "KN"
			], [
				"stateId" => 2900,
				"countryId" => 149,
				"name" => "Melaka",
				"code" => "ME"
			], [
				"stateId" => 2901,
				"countryId" => 149,
				"name" => "Negeri Sembilan",
				"code" => "NS"
			], [
				"stateId" => 2902,
				"countryId" => 149,
				"name" => "Pahang",
				"code" => "PH"
			], [
				"stateId" => 2903,
				"countryId" => 149,
				"name" => "Perak",
				"code" => "PK"
			], [
				"stateId" => 2904,
				"countryId" => 149,
				"name" => "Perlis",
				"code" => "PL"
			], [
				"stateId" => 2905,
				"countryId" => 149,
				"name" => "Pulau Pinang",
				"code" => "PG"
			], [
				"stateId" => 2906,
				"countryId" => 149,
				"name" => "Sarawak",
				"code" => "SK"
			], [
				"stateId" => 2907,
				"countryId" => 149,
				"name" => "Selangor",
				"code" => "SL"
			], [
				"stateId" => 2908,
				"countryId" => 149,
				"name" => "Terengganu",
				"code" => "TE"
			], [
				"stateId" => 2909,
				"countryId" => 149,
				"name" => "Wilayah Persekutuan",
				"code" => "KL"
			], [
				"stateId" => 2910,
				"countryId" => 149,
				"name" => "Labuan",
				"code" => "LA"
			], [
				"stateId" => 2911,
				"countryId" => 149,
				"name" => "Sabah",
				"code" => "SA"
			], [
				"stateId" => 2912,
				"countryId" => 169,
				"name" => "Cabo Delgado",
				"code" => "CD"
			], [
				"stateId" => 2913,
				"countryId" => 169,
				"name" => "Gaza",
				"code" => "GA"
			], [
				"stateId" => 2914,
				"countryId" => 169,
				"name" => "Inhambane",
				"code" => "IN"
			], [
				"stateId" => 2915,
				"countryId" => 169,
				"name" => "Maputo",
				"code" => "MP"
			], [
				"stateId" => 2916,
				"countryId" => 169,
				"name" => "Sofala",
				"code" => "SO"
			], [
				"stateId" => 2917,
				"countryId" => 169,
				"name" => "Nampula",
				"code" => "NM"
			], [
				"stateId" => 2918,
				"countryId" => 169,
				"name" => "Niassa",
				"code" => "NS"
			], [
				"stateId" => 2919,
				"countryId" => 169,
				"name" => "Tete",
				"code" => "TE"
			], [
				"stateId" => 2920,
				"countryId" => 169,
				"name" => "Zambezia",
				"code" => "ZA"
			], [
				"stateId" => 2921,
				"countryId" => 169,
				"name" => "Manica",
				"code" => "MN"
			], [
				"stateId" => 2922,
				"countryId" => 180,
				"name" => "Agadez",
				"code" => "AG"
			], [
				"stateId" => 2923,
				"countryId" => 180,
				"name" => "Diffa",
				"code" => "DF"
			], [
				"stateId" => 2924,
				"countryId" => 180,
				"name" => "Dosso",
				"code" => "DS"
			], [
				"stateId" => 2925,
				"countryId" => 180,
				"name" => "Maradi",
				"code" => "MA"
			], [
				"stateId" => 2926,
				"countryId" => 180,
				"name" => "Niamey",
				"code" => "NI"
			], [
				"stateId" => 2927,
				"countryId" => 180,
				"name" => "Tahoua",
				"code" => "TH"
			], [
				"stateId" => 2928,
				"countryId" => 180,
				"name" => "Zinder",
				"code" => "ZI"
			], [
				"stateId" => 2929,
				"countryId" => 180,
				"name" => "Tillaberi",
				"code" => "TL"
			], [
				"stateId" => 2931,
				"countryId" => 258,
				"name" => "Aoba//Maewo",
				"code" => "AO"
			], [
				"stateId" => 2932,
				"countryId" => 258,
				"name" => "Torba",
				"code" => "TR"
			], [
				"stateId" => 2938,
				"countryId" => 258,
				"name" => "Sanma",
				"code" => "SN"
			], [
				"stateId" => 2940,
				"countryId" => 258,
				"name" => "Tafea",
				"code" => "TF"
			], [
				"stateId" => 2941,
				"countryId" => 181,
				"name" => "Lagos",
				"code" => "LA"
			], [
				"stateId" => 2942,
				"countryId" => 181,
				"name" => "Bauchi",
				"code" => "BA"
			], [
				"stateId" => 2943,
				"countryId" => 181,
				"name" => "Rivers",
				"code" => "RI"
			], [
				"stateId" => 2944,
				"countryId" => 181,
				"name" => "Abuja Capital Territory",
				"code" => "FC"
			], [
				"stateId" => 2946,
				"countryId" => 181,
				"name" => "Ogun",
				"code" => "OG"
			], [
				"stateId" => 2947,
				"countryId" => 181,
				"name" => "Ondo",
				"code" => "ON"
			], [
				"stateId" => 2949,
				"countryId" => 181,
				"name" => "Plateau",
				"code" => "PL"
			], [
				"stateId" => 2951,
				"countryId" => 181,
				"name" => "Akwa Ibom",
				"code" => "AK"
			], [
				"stateId" => 2952,
				"countryId" => 181,
				"name" => "Cross River",
				"code" => "CR"
			], [
				"stateId" => 2953,
				"countryId" => 181,
				"name" => "Kaduna",
				"code" => "KD"
			], [
				"stateId" => 2955,
				"countryId" => 181,
				"name" => "Anambra",
				"code" => "AN"
			], [
				"stateId" => 2956,
				"countryId" => 181,
				"name" => "Benue",
				"code" => "BE"
			], [
				"stateId" => 2957,
				"countryId" => 181,
				"name" => "Borno",
				"code" => "BO"
			], [
				"stateId" => 2959,
				"countryId" => 181,
				"name" => "Kano",
				"code" => "KN"
			], [
				"stateId" => 2960,
				"countryId" => 181,
				"name" => "Kwara",
				"code" => "KW"
			], [
				"stateId" => 2961,
				"countryId" => 181,
				"name" => "Niger",
				"code" => "NI"
			], [
				"stateId" => 2962,
				"countryId" => 181,
				"name" => "Oyo",
				"code" => "OY"
			], [
				"stateId" => 2963,
				"countryId" => 181,
				"name" => "Sokoto",
				"code" => "SO"
			], [
				"stateId" => 2964,
				"countryId" => 181,
				"name" => "Abia",
				"code" => "AB"
			], [
				"stateId" => 2965,
				"countryId" => 181,
				"name" => "Adamawa",
				"code" => "AD"
			], [
				"stateId" => 2966,
				"countryId" => 181,
				"name" => "Delta",
				"code" => "DE"
			], [
				"stateId" => 2967,
				"countryId" => 181,
				"name" => "Edo",
				"code" => "ED"
			], [
				"stateId" => 2968,
				"countryId" => 181,
				"name" => "Enugu",
				"code" => "EN"
			], [
				"stateId" => 2969,
				"countryId" => 181,
				"name" => "Jigawa",
				"code" => "JI"
			], [
				"stateId" => 2970,
				"countryId" => 181,
				"name" => "Kebbi",
				"code" => "KE"
			], [
				"stateId" => 2971,
				"countryId" => 181,
				"name" => "Kogi",
				"code" => "KO"
			], [
				"stateId" => 2972,
				"countryId" => 181,
				"name" => "Osun",
				"code" => "OS"
			], [
				"stateId" => 2973,
				"countryId" => 181,
				"name" => "Taraba",
				"code" => "TA"
			], [
				"stateId" => 2974,
				"countryId" => 181,
				"name" => "Yobe",
				"code" => "YO"
			], [
				"stateId" => 2975,
				"countryId" => 175,
				"name" => "Drenthe",
				"code" => "DR"
			], [
				"stateId" => 2976,
				"countryId" => 175,
				"name" => "Friesland",
				"code" => "FR"
			], [
				"stateId" => 2977,
				"countryId" => 175,
				"name" => "Gelderland",
				"code" => "GE"
			], [
				"stateId" => 2978,
				"countryId" => 175,
				"name" => "Groningen",
				"code" => "GR"
			], [
				"stateId" => 2979,
				"countryId" => 175,
				"name" => "Limburg",
				"code" => "LI"
			], [
				"stateId" => 2980,
				"countryId" => 175,
				"name" => "Noord-Brabant",
				"code" => "NB"
			], [
				"stateId" => 2981,
				"countryId" => 175,
				"name" => "Noord-Holland",
				"code" => "NH"
			], [
				"stateId" => 2982,
				"countryId" => 175,
				"name" => "Overijssel",
				"code" => "OV"
			], [
				"stateId" => 2983,
				"countryId" => 175,
				"name" => "Utrecht",
				"code" => "UT"
			], [
				"stateId" => 2984,
				"countryId" => 175,
				"name" => "Zeeland",
				"code" => "ZE"
			], [
				"stateId" => 2985,
				"countryId" => 175,
				"name" => "Zuid-Holland",
				"code" => "ZH"
			], [
				"stateId" => 2989,
				"countryId" => 175,
				"name" => "Flevoland",
				"code" => "FL"
			], [
				"stateId" => 2990,
				"countryId" => 185,
				"name" => "Akershus",
				"code" => "AK"
			], [
				"stateId" => 2991,
				"countryId" => 185,
				"name" => "Aust-Agder",
				"code" => "AA"
			], [
				"stateId" => 2992,
				"countryId" => 185,
				"name" => "Buskerud",
				"code" => "BU"
			], [
				"stateId" => 2993,
				"countryId" => 185,
				"name" => "Finnmark",
				"code" => "FI"
			], [
				"stateId" => 2994,
				"countryId" => 185,
				"name" => "Hedmark",
				"code" => "HE"
			], [
				"stateId" => 2995,
				"countryId" => 185,
				"name" => "Hordaland",
				"code" => "HO"
			], [
				"stateId" => 2996,
				"countryId" => 185,
				"name" => "More og Romsdal",
				"code" => "MR"
			], [
				"stateId" => 2997,
				"countryId" => 185,
				"name" => "Nordland",
				"code" => "NL"
			], [
				"stateId" => 2998,
				"countryId" => 185,
				"name" => "Nord-Trondelag",
				"code" => "NR"
			], [
				"stateId" => 2999,
				"countryId" => 185,
				"name" => "Oppland",
				"code" => "OP"
			], [
				"stateId" => 3000,
				"countryId" => 185,
				"name" => "Oslo",
				"code" => "OS"
			], [
				"stateId" => 3001,
				"countryId" => 185,
				"name" => "ÿstfold",
				"code" => "OF"
			], [
				"stateId" => 3002,
				"countryId" => 185,
				"name" => "Rogaland",
				"code" => "RO"
			], [
				"stateId" => 3003,
				"countryId" => 185,
				"name" => "Sogn og Fjordane",
				"code" => "SF"
			], [
				"stateId" => 3004,
				"countryId" => 185,
				"name" => "Sor-Trondelag",
				"code" => "ST"
			], [
				"stateId" => 3005,
				"countryId" => 185,
				"name" => "Telemark",
				"code" => "TE"
			], [
				"stateId" => 3006,
				"countryId" => 185,
				"name" => "Troms",
				"code" => "TR"
			], [
				"stateId" => 3007,
				"countryId" => 185,
				"name" => "Vest-Agder",
				"code" => "VA"
			], [
				"stateId" => 3008,
				"countryId" => 185,
				"name" => "Vestfold",
				"code" => "VF"
			], [
				"stateId" => 3009,
				"countryId" => 174,
				"name" => "Bagmati",
				"code" => "BA"
			], [
				"stateId" => 3010,
				"countryId" => 174,
				"name" => "Bheri",
				"code" => "BH"
			], [
				"stateId" => 3011,
				"countryId" => 174,
				"name" => "Dhawalagiri",
				"code" => "DH"
			], [
				"stateId" => 3012,
				"countryId" => 174,
				"name" => "Gandaki",
				"code" => "GA"
			], [
				"stateId" => 3013,
				"countryId" => 174,
				"name" => "Janakpur",
				"code" => "JA"
			], [
				"stateId" => 3014,
				"countryId" => 174,
				"name" => "Karnali",
				"code" => "KA"
			], [
				"stateId" => 3015,
				"countryId" => 174,
				"name" => "Kosi",
				"code" => "KO"
			], [
				"stateId" => 3016,
				"countryId" => 174,
				"name" => "Lumbini",
				"code" => "LU"
			], [
				"stateId" => 3017,
				"countryId" => 174,
				"name" => "Mahakali",
				"code" => "MA"
			], [
				"stateId" => 3018,
				"countryId" => 174,
				"name" => "Mechi",
				"code" => "ME"
			], [
				"stateId" => 3019,
				"countryId" => 174,
				"name" => "Narayani",
				"code" => "NA"
			], [
				"stateId" => 3020,
				"countryId" => 174,
				"name" => "Rapti",
				"code" => "RA"
			], [
				"stateId" => 3021,
				"countryId" => 174,
				"name" => "Sagarmatha",
				"code" => "SA"
			], [
				"stateId" => 3022,
				"countryId" => 174,
				"name" => "Seti",
				"code" => "SE"
			], [
				"stateId" => 3023,
				"countryId" => 172,
				"name" => "Aiwo",
				"code" => "AI"
			], [
				"stateId" => 3024,
				"countryId" => 172,
				"name" => "Anabar",
				"code" => "AB"
			], [
				"stateId" => 3025,
				"countryId" => 172,
				"name" => "Anetan",
				"code" => "AT"
			], [
				"stateId" => 3026,
				"countryId" => 172,
				"name" => "Anibare",
				"code" => "AR"
			], [
				"stateId" => 3027,
				"countryId" => 172,
				"name" => "Baiti",
				"code" => "BA"
			], [
				"stateId" => 3028,
				"countryId" => 172,
				"name" => "Boe",
				"code" => "BO"
			], [
				"stateId" => 3029,
				"countryId" => 172,
				"name" => "Buada",
				"code" => "BU"
			], [
				"stateId" => 3030,
				"countryId" => 172,
				"name" => "Denigomodu",
				"code" => "DE"
			], [
				"stateId" => 3031,
				"countryId" => 172,
				"name" => "Ewa",
				"code" => "EW"
			], [
				"stateId" => 3032,
				"countryId" => 172,
				"name" => "Ijuw",
				"code" => "IJ"
			], [
				"stateId" => 3033,
				"countryId" => 172,
				"name" => "Meneng",
				"code" => "ME"
			], [
				"stateId" => 3034,
				"countryId" => 172,
				"name" => "Nibok",
				"code" => "NI"
			], [
				"stateId" => 3035,
				"countryId" => 172,
				"name" => "Uaboe",
				"code" => "UA"
			], [
				"stateId" => 3036,
				"countryId" => 172,
				"name" => "Yaren",
				"code" => "YA"
			], [
				"stateId" => 3037,
				"countryId" => 230,
				"name" => "Brokopondo",
				"code" => "BR"
			], [
				"stateId" => 3038,
				"countryId" => 230,
				"name" => "Commewijne",
				"code" => "CM"
			], [
				"stateId" => 3039,
				"countryId" => 230,
				"name" => "Coronie",
				"code" => "CR"
			], [
				"stateId" => 3040,
				"countryId" => 230,
				"name" => "Marowijne",
				"code" => "MA"
			], [
				"stateId" => 3041,
				"countryId" => 230,
				"name" => "Nickerie",
				"code" => "NI"
			], [
				"stateId" => 3042,
				"countryId" => 230,
				"name" => "Para",
				"code" => "PR"
			], [
				"stateId" => 3043,
				"countryId" => 230,
				"name" => "Paramaribo",
				"code" => "PM"
			], [
				"stateId" => 3044,
				"countryId" => 230,
				"name" => "Saramacca",
				"code" => "SA"
			], [
				"stateId" => 3045,
				"countryId" => 230,
				"name" => "Sipaliwini",
				"code" => "SI"
			], [
				"stateId" => 3046,
				"countryId" => 230,
				"name" => "Wanica",
				"code" => "WA"
			], [
				"stateId" => 3047,
				"countryId" => 179,
				"name" => "Boaco",
				"code" => "BO"
			], [
				"stateId" => 3048,
				"countryId" => 179,
				"name" => "Carazo",
				"code" => "CA"
			], [
				"stateId" => 3049,
				"countryId" => 179,
				"name" => "Chinandega",
				"code" => "CI"
			], [
				"stateId" => 3050,
				"countryId" => 179,
				"name" => "Chontales",
				"code" => "CO"
			], [
				"stateId" => 3051,
				"countryId" => 179,
				"name" => "Esteli",
				"code" => "ES"
			], [
				"stateId" => 3052,
				"countryId" => 179,
				"name" => "Granada",
				"code" => "GR"
			], [
				"stateId" => 3053,
				"countryId" => 179,
				"name" => "Jinotega",
				"code" => "JI"
			], [
				"stateId" => 3054,
				"countryId" => 179,
				"name" => "Leon",
				"code" => "LE"
			], [
				"stateId" => 3055,
				"countryId" => 179,
				"name" => "Madriz",
				"code" => "MD"
			], [
				"stateId" => 3056,
				"countryId" => 179,
				"name" => "Managua",
				"code" => "MN"
			], [
				"stateId" => 3057,
				"countryId" => 179,
				"name" => "Masaya",
				"code" => "MS"
			], [
				"stateId" => 3058,
				"countryId" => 179,
				"name" => "Matagalpa",
				"code" => "MT"
			], [
				"stateId" => 3059,
				"countryId" => 179,
				"name" => "Nueva Segovia",
				"code" => "NS"
			], [
				"stateId" => 3060,
				"countryId" => 179,
				"name" => "Rio San Juan",
				"code" => "SJ"
			], [
				"stateId" => 3061,
				"countryId" => 179,
				"name" => "Rivas",
				"code" => "RI"
			], [
				"stateId" => 3063,
				"countryId" => 179,
				"name" => "Atlantico Norte",
				"code" => "AN"
			], [
				"stateId" => 3064,
				"countryId" => 179,
				"name" => "Atlantico Sur",
				"code" => "AS"
			], [
				"stateId" => 3089,
				"countryId" => 178,
				"name" => "Hawke's Bay",
				"code" => "HB"
			], [
				"stateId" => 3106,
				"countryId" => 178,
				"name" => "Marlborough",
				"code" => "MA"
			], [
				"stateId" => 3126,
				"countryId" => 178,
				"name" => "Southland",
				"code" => "SO"
			], [
				"stateId" => 3129,
				"countryId" => 178,
				"name" => "Taranaki",
				"code" => "TK"
			], [
				"stateId" => 3137,
				"countryId" => 178,
				"name" => "Waikato",
				"code" => "WK"
			], [
				"stateId" => 3170,
				"countryId" => 193,
				"name" => "Alto Parana",
				"code" => "AA"
			], [
				"stateId" => 3171,
				"countryId" => 193,
				"name" => "Amambay",
				"code" => "AM"
			], [
				"stateId" => 3172,
				"countryId" => 193,
				"name" => "Caaguazu",
				"code" => "CG"
			], [
				"stateId" => 3173,
				"countryId" => 193,
				"name" => "Caazapa",
				"code" => "CZ"
			], [
				"stateId" => 3174,
				"countryId" => 193,
				"name" => "Central",
				"code" => "CE"
			], [
				"stateId" => 3175,
				"countryId" => 193,
				"name" => "Concepcion",
				"code" => "CN"
			], [
				"stateId" => 3176,
				"countryId" => 193,
				"name" => "Cordillera",
				"code" => "CR"
			], [
				"stateId" => 3177,
				"countryId" => 193,
				"name" => "Guaira",
				"code" => "GU"
			], [
				"stateId" => 3178,
				"countryId" => 193,
				"name" => "Itapua",
				"code" => "IT"
			], [
				"stateId" => 3179,
				"countryId" => 193,
				"name" => "Misiones",
				"code" => "MI"
			], [
				"stateId" => 3180,
				"countryId" => 193,
				"name" => "Neembucu",
				"code" => "NE"
			], [
				"stateId" => 3181,
				"countryId" => 193,
				"name" => "Paraguari",
				"code" => "PG"
			], [
				"stateId" => 3182,
				"countryId" => 193,
				"name" => "Presidente Hayes",
				"code" => "PH"
			], [
				"stateId" => 3183,
				"countryId" => 193,
				"name" => "San Pedro",
				"code" => "SP"
			], [
				"stateId" => 3184,
				"countryId" => 193,
				"name" => "Canindeyu",
				"code" => "CY"
			], [
				"stateId" => 3185,
				"countryId" => 193,
				"name" => "Asuncion",
				"code" => "AS"
			], [
				"stateId" => 3186,
				"countryId" => 193,
				"name" => "Alto Paraguay",
				"code" => "AG"
			], [
				"stateId" => 3187,
				"countryId" => 193,
				"name" => "Boqueron",
				"code" => "BQ"
			], [
				"stateId" => 3188,
				"countryId" => 194,
				"name" => "Amazonas",
				"code" => "AM"
			], [
				"stateId" => 3189,
				"countryId" => 194,
				"name" => "Ancash",
				"code" => "AN"
			], [
				"stateId" => 3190,
				"countryId" => 194,
				"name" => "Apurimac",
				"code" => "AP"
			], [
				"stateId" => 3191,
				"countryId" => 194,
				"name" => "Arequipa",
				"code" => "AR"
			], [
				"stateId" => 3192,
				"countryId" => 194,
				"name" => "Ayacucho",
				"code" => "AY"
			], [
				"stateId" => 3193,
				"countryId" => 194,
				"name" => "Cajamarca",
				"code" => "CJ"
			], [
				"stateId" => 3194,
				"countryId" => 194,
				"name" => "Callao",
				"code" => "CL"
			], [
				"stateId" => 3195,
				"countryId" => 194,
				"name" => "Cusco",
				"code" => "CS"
			], [
				"stateId" => 3196,
				"countryId" => 194,
				"name" => "Huancavelica",
				"code" => "HV"
			], [
				"stateId" => 3197,
				"countryId" => 194,
				"name" => "Huanuco",
				"code" => "HC"
			], [
				"stateId" => 3198,
				"countryId" => 194,
				"name" => "Ica",
				"code" => "IC"
			], [
				"stateId" => 3199,
				"countryId" => 194,
				"name" => "Junin",
				"code" => "JU"
			], [
				"stateId" => 3200,
				"countryId" => 194,
				"name" => "La Libertad",
				"code" => "LL"
			], [
				"stateId" => 3201,
				"countryId" => 194,
				"name" => "Lambayeque",
				"code" => "LB"
			], [
				"stateId" => 3202,
				"countryId" => 194,
				"name" => "Lima",
				"code" => "LI"
			], [
				"stateId" => 3203,
				"countryId" => 194,
				"name" => "Loreto",
				"code" => "LO"
			], [
				"stateId" => 3204,
				"countryId" => 194,
				"name" => "Madre de Dios",
				"code" => "MD"
			], [
				"stateId" => 3205,
				"countryId" => 194,
				"name" => "Moquegua",
				"code" => "MQ"
			], [
				"stateId" => 3206,
				"countryId" => 194,
				"name" => "Pasco",
				"code" => "PA"
			], [
				"stateId" => 3207,
				"countryId" => 194,
				"name" => "Piura",
				"code" => "PI"
			], [
				"stateId" => 3208,
				"countryId" => 194,
				"name" => "Puno",
				"code" => "PU"
			], [
				"stateId" => 3209,
				"countryId" => 194,
				"name" => "San Martin",
				"code" => "SM"
			], [
				"stateId" => 3210,
				"countryId" => 194,
				"name" => "Tacna",
				"code" => "TA"
			], [
				"stateId" => 3211,
				"countryId" => 194,
				"name" => "Tumbes",
				"code" => "TU"
			], [
				"stateId" => 3212,
				"countryId" => 194,
				"name" => "Ucayali",
				"code" => "UC"
			], [
				"stateId" => 3216,
				"countryId" => 187,
				"name" => "Federally Administered Tribal Areas",
				"code" => "TA"
			], [
				"stateId" => 3217,
				"countryId" => 187,
				"name" => "Balochistan",
				"code" => "BA"
			], [
				"stateId" => 3218,
				"countryId" => 187,
				"name" => "North-West Frontier",
				"code" => "NW"
			], [
				"stateId" => 3219,
				"countryId" => 187,
				"name" => "Punjab",
				"code" => "PB"
			], [
				"stateId" => 3220,
				"countryId" => 187,
				"name" => "Sindh",
				"code" => "SD"
			], [
				"stateId" => 3221,
				"countryId" => 187,
				"name" => "Azad Kashmir",
				"code" => "JK"
			], [
				"stateId" => 3222,
				"countryId" => 187,
				"name" => "Northern Areas",
				"code" => "NA"
			], [
				"stateId" => 3223,
				"countryId" => 187,
				"name" => "Islamabad",
				"code" => "IS"
			], [
				"stateId" => 3274,
				"countryId" => 197,
				"name" => "Dolnoslaskie",
				"code" => "DS"
			], [
				"stateId" => 3275,
				"countryId" => 197,
				"name" => "Kujawsko-Pomorskie",
				"code" => "KP"
			], [
				"stateId" => 3276,
				"countryId" => 197,
				"name" => "Lodzkie",
				"code" => "LD"
			], [
				"stateId" => 3277,
				"countryId" => 197,
				"name" => "Lubelskie",
				"code" => "LU"
			], [
				"stateId" => 3278,
				"countryId" => 197,
				"name" => "Lubuskie",
				"code" => "LB"
			], [
				"stateId" => 3279,
				"countryId" => 197,
				"name" => "Malopolskie",
				"code" => "MA"
			], [
				"stateId" => 3280,
				"countryId" => 197,
				"name" => "Mazowieckie",
				"code" => "MZ"
			], [
				"stateId" => 3281,
				"countryId" => 197,
				"name" => "Opolskie",
				"code" => "OP"
			], [
				"stateId" => 3282,
				"countryId" => 197,
				"name" => "Podkarpackie",
				"code" => "PK"
			], [
				"stateId" => 3283,
				"countryId" => 197,
				"name" => "Podlaskie",
				"code" => "PD"
			], [
				"stateId" => 3284,
				"countryId" => 197,
				"name" => "Pomorskie",
				"code" => "PM"
			], [
				"stateId" => 3285,
				"countryId" => 197,
				"name" => "Slaskie",
				"code" => "SL"
			], [
				"stateId" => 3286,
				"countryId" => 197,
				"name" => "Swietokrzyskie",
				"code" => "SK"
			], [
				"stateId" => 3287,
				"countryId" => 197,
				"name" => "Warminsko-Mazurskie",
				"code" => "WN"
			], [
				"stateId" => 3288,
				"countryId" => 197,
				"name" => "Wielkopolskie",
				"code" => "WP"
			], [
				"stateId" => 3289,
				"countryId" => 197,
				"name" => "Zachodniopomorskie",
				"code" => "ZP"
			], [
				"stateId" => 3290,
				"countryId" => 190,
				"name" => "Bocas del Toro",
				"code" => "BC"
			], [
				"stateId" => 3291,
				"countryId" => 190,
				"name" => "Chiriqui",
				"code" => "CH"
			], [
				"stateId" => 3292,
				"countryId" => 190,
				"name" => "Cocle",
				"code" => "CC"
			], [
				"stateId" => 3293,
				"countryId" => 190,
				"name" => "Colon",
				"code" => "CL"
			], [
				"stateId" => 3294,
				"countryId" => 190,
				"name" => "Darien",
				"code" => "DR"
			], [
				"stateId" => 3295,
				"countryId" => 190,
				"name" => "Herrera",
				"code" => "HE"
			], [
				"stateId" => 3296,
				"countryId" => 190,
				"name" => "Los Santos",
				"code" => "LS"
			], [
				"stateId" => 3297,
				"countryId" => 190,
				"name" => "Panama",
				"code" => "PN"
			], [
				"stateId" => 3298,
				"countryId" => 190,
				"name" => "San Blas",
				"code" => "SB"
			], [
				"stateId" => 3299,
				"countryId" => 190,
				"name" => "Veraguas",
				"code" => "VR"
			], [
				"stateId" => 3300,
				"countryId" => 198,
				"name" => "Aveiro",
				"code" => "AV"
			], [
				"stateId" => 3301,
				"countryId" => 198,
				"name" => "Beja",
				"code" => "BE"
			], [
				"stateId" => 3302,
				"countryId" => 198,
				"name" => "Braga",
				"code" => "BR"
			], [
				"stateId" => 3303,
				"countryId" => 198,
				"name" => "Braganca",
				"code" => "BA"
			], [
				"stateId" => 3304,
				"countryId" => 198,
				"name" => "Castelo Branco",
				"code" => "CB"
			], [
				"stateId" => 3305,
				"countryId" => 198,
				"name" => "Coimbra",
				"code" => "CO"
			], [
				"stateId" => 3306,
				"countryId" => 198,
				"name" => "Evora",
				"code" => "EV"
			], [
				"stateId" => 3307,
				"countryId" => 198,
				"name" => "Faro",
				"code" => "FA"
			], [
				"stateId" => 3308,
				"countryId" => 198,
				"name" => "Madeira",
				"code" => "MA"
			], [
				"stateId" => 3309,
				"countryId" => 198,
				"name" => "Guarda",
				"code" => "GU"
			], [
				"stateId" => 3310,
				"countryId" => 198,
				"name" => "Leiria",
				"code" => "LE"
			], [
				"stateId" => 3311,
				"countryId" => 198,
				"name" => "Lisboa",
				"code" => "LI"
			], [
				"stateId" => 3312,
				"countryId" => 198,
				"name" => "Portalegre",
				"code" => "PA"
			], [
				"stateId" => 3313,
				"countryId" => 198,
				"name" => "Porto",
				"code" => "PO"
			], [
				"stateId" => 3314,
				"countryId" => 198,
				"name" => "Santarem",
				"code" => "SA"
			], [
				"stateId" => 3315,
				"countryId" => 198,
				"name" => "Setubal",
				"code" => "SE"
			], [
				"stateId" => 3316,
				"countryId" => 198,
				"name" => "Viana do Castelo",
				"code" => "VC"
			], [
				"stateId" => 3317,
				"countryId" => 198,
				"name" => "Vila Real",
				"code" => "VR"
			], [
				"stateId" => 3318,
				"countryId" => 198,
				"name" => "Viseu",
				"code" => "VI"
			], [
				"stateId" => 3319,
				"countryId" => 198,
				"name" => "Azores",
				"code" => "AC"
			], [
				"stateId" => 3320,
				"countryId" => 191,
				"name" => "Central",
				"code" => "CE"
			], [
				"stateId" => 3321,
				"countryId" => 191,
				"name" => "Gulf",
				"code" => "GU"
			], [
				"stateId" => 3322,
				"countryId" => 191,
				"name" => "Milne Bay",
				"code" => "MB"
			], [
				"stateId" => 3323,
				"countryId" => 191,
				"name" => "Northern",
				"code" => "NO"
			], [
				"stateId" => 3324,
				"countryId" => 191,
				"name" => "Southern Highlands",
				"code" => "SH"
			], [
				"stateId" => 3325,
				"countryId" => 191,
				"name" => "Western",
				"code" => "WE"
			], [
				"stateId" => 3326,
				"countryId" => 191,
				"name" => "Bougainville",
				"code" => "NS"
			], [
				"stateId" => 3327,
				"countryId" => 191,
				"name" => "Chimbu",
				"code" => "CH"
			], [
				"stateId" => 3328,
				"countryId" => 191,
				"name" => "Eastern Highlands",
				"code" => "EH"
			], [
				"stateId" => 3329,
				"countryId" => 191,
				"name" => "East New Britain",
				"code" => "EN"
			], [
				"stateId" => 3330,
				"countryId" => 191,
				"name" => "East Sepik",
				"code" => "ES"
			], [
				"stateId" => 3331,
				"countryId" => 191,
				"name" => "Madang",
				"code" => "MD"
			], [
				"stateId" => 3332,
				"countryId" => 191,
				"name" => "Manus",
				"code" => "MN"
			], [
				"stateId" => 3333,
				"countryId" => 191,
				"name" => "Morobe",
				"code" => "MR"
			], [
				"stateId" => 3334,
				"countryId" => 191,
				"name" => "New Ireland",
				"code" => "NI"
			], [
				"stateId" => 3335,
				"countryId" => 191,
				"name" => "Western Highlands",
				"code" => "WH"
			], [
				"stateId" => 3336,
				"countryId" => 191,
				"name" => "West New Britain",
				"code" => "WN"
			], [
				"stateId" => 3337,
				"countryId" => 191,
				"name" => "Sandaun",
				"code" => "SA"
			], [
				"stateId" => 3338,
				"countryId" => 191,
				"name" => "Enga",
				"code" => "EG"
			], [
				"stateId" => 3339,
				"countryId" => 191,
				"name" => "National Capital",
				"code" => "NC"
			], [
				"stateId" => 3340,
				"countryId" => 103,
				"name" => "Bafata",
				"code" => "BA"
			], [
				"stateId" => 3341,
				"countryId" => 103,
				"name" => "Quinara",
				"code" => "QU"
			], [
				"stateId" => 3342,
				"countryId" => 103,
				"name" => "Oio",
				"code" => "OI"
			], [
				"stateId" => 3343,
				"countryId" => 103,
				"name" => "Bolama",
				"code" => "BL"
			], [
				"stateId" => 3344,
				"countryId" => 103,
				"name" => "Cacheu",
				"code" => "CA"
			], [
				"stateId" => 3345,
				"countryId" => 103,
				"name" => "Tombali",
				"code" => "TO"
			], [
				"stateId" => 3346,
				"countryId" => 103,
				"name" => "Gabu",
				"code" => "GA"
			], [
				"stateId" => 3347,
				"countryId" => 103,
				"name" => "Bissau",
				"code" => "BS"
			], [
				"stateId" => 3348,
				"countryId" => 103,
				"name" => "Biombo",
				"code" => "BM"
			], [
				"stateId" => 3349,
				"countryId" => 200,
				"name" => "Ad Dawhah",
				"code" => "DA"
			], [
				"stateId" => 3350,
				"countryId" => 200,
				"name" => "Al Ghuwayriyah",
				"code" => "GH"
			], [
				"stateId" => 3351,
				"countryId" => 200,
				"name" => "Al Jumayliyah",
				"code" => "JU"
			], [
				"stateId" => 3352,
				"countryId" => 200,
				"name" => "Al Khawr",
				"code" => "KH"
			], [
				"stateId" => 3353,
				"countryId" => 200,
				"name" => "Al Wakrah",
				"code" => "WA"
			], [
				"stateId" => 3354,
				"countryId" => 200,
				"name" => "Ar Rayyan",
				"code" => "RA"
			], [
				"stateId" => 3355,
				"countryId" => 200,
				"name" => "Jarayan al Batinah",
				"code" => "JB"
			], [
				"stateId" => 3356,
				"countryId" => 200,
				"name" => "Madinat ash Shamal",
				"code" => "MS"
			], [
				"stateId" => 3357,
				"countryId" => 200,
				"name" => "Umm Salal",
				"code" => "US"
			], [
				"stateId" => 3358,
				"countryId" => 202,
				"name" => "Alba",
				"code" => "AB"
			], [
				"stateId" => 3359,
				"countryId" => 202,
				"name" => "Arad",
				"code" => "AR"
			], [
				"stateId" => 3360,
				"countryId" => 202,
				"name" => "Arges",
				"code" => "AG"
			], [
				"stateId" => 3361,
				"countryId" => 202,
				"name" => "Bacau",
				"code" => "BC"
			], [
				"stateId" => 3362,
				"countryId" => 202,
				"name" => "Bihor",
				"code" => "BH"
			], [
				"stateId" => 3363,
				"countryId" => 202,
				"name" => "Bistrita-Nasaud",
				"code" => "BN"
			], [
				"stateId" => 3364,
				"countryId" => 202,
				"name" => "Botosani",
				"code" => "BT"
			], [
				"stateId" => 3365,
				"countryId" => 202,
				"name" => "Braila",
				"code" => "BR"
			], [
				"stateId" => 3366,
				"countryId" => 202,
				"name" => "Brasov",
				"code" => "BV"
			], [
				"stateId" => 3367,
				"countryId" => 202,
				"name" => "Bucuresti",
				"code" => "BU"
			], [
				"stateId" => 3368,
				"countryId" => 202,
				"name" => "Buzau",
				"code" => "BZ"
			], [
				"stateId" => 3369,
				"countryId" => 202,
				"name" => "Caras-Severin",
				"code" => "CS"
			], [
				"stateId" => 3370,
				"countryId" => 202,
				"name" => "Cluj",
				"code" => "CJ"
			], [
				"stateId" => 3371,
				"countryId" => 202,
				"name" => "Constanta",
				"code" => "CT"
			], [
				"stateId" => 3372,
				"countryId" => 202,
				"name" => "Covasna",
				"code" => "CV"
			], [
				"stateId" => 3373,
				"countryId" => 202,
				"name" => "Dambovita",
				"code" => "DB"
			], [
				"stateId" => 3374,
				"countryId" => 202,
				"name" => "Dolj",
				"code" => "DJ"
			], [
				"stateId" => 3375,
				"countryId" => 202,
				"name" => "Galati",
				"code" => "GL"
			], [
				"stateId" => 3376,
				"countryId" => 202,
				"name" => "Gorj",
				"code" => "GJ"
			], [
				"stateId" => 3377,
				"countryId" => 202,
				"name" => "Harghita",
				"code" => "HR"
			], [
				"stateId" => 3378,
				"countryId" => 202,
				"name" => "Hunedoara",
				"code" => "HD"
			], [
				"stateId" => 3379,
				"countryId" => 202,
				"name" => "Ialomita",
				"code" => "IL"
			], [
				"stateId" => 3380,
				"countryId" => 202,
				"name" => "Iasi",
				"code" => "IS"
			], [
				"stateId" => 3381,
				"countryId" => 202,
				"name" => "Maramures",
				"code" => "MM"
			], [
				"stateId" => 3382,
				"countryId" => 202,
				"name" => "Mehedinti",
				"code" => "MH"
			], [
				"stateId" => 3383,
				"countryId" => 202,
				"name" => "Mures",
				"code" => "MS"
			], [
				"stateId" => 3384,
				"countryId" => 202,
				"name" => "Neamt",
				"code" => "NT"
			], [
				"stateId" => 3385,
				"countryId" => 202,
				"name" => "Olt",
				"code" => "OT"
			], [
				"stateId" => 3386,
				"countryId" => 202,
				"name" => "Prahova",
				"code" => "PH"
			], [
				"stateId" => 3387,
				"countryId" => 202,
				"name" => "Salaj",
				"code" => "SJ"
			], [
				"stateId" => 3388,
				"countryId" => 202,
				"name" => "Satu Mare",
				"code" => "SM"
			], [
				"stateId" => 3389,
				"countryId" => 202,
				"name" => "Sibiu",
				"code" => "SB"
			], [
				"stateId" => 3390,
				"countryId" => 202,
				"name" => "Suceava",
				"code" => "SV"
			], [
				"stateId" => 3391,
				"countryId" => 202,
				"name" => "Teleorman",
				"code" => "TR"
			], [
				"stateId" => 3392,
				"countryId" => 202,
				"name" => "Timis",
				"code" => "TM"
			], [
				"stateId" => 3393,
				"countryId" => 202,
				"name" => "Tulcea",
				"code" => "TL"
			], [
				"stateId" => 3394,
				"countryId" => 202,
				"name" => "Vaslui",
				"code" => "VS"
			], [
				"stateId" => 3395,
				"countryId" => 202,
				"name" => "Valcea",
				"code" => "VL"
			], [
				"stateId" => 3396,
				"countryId" => 202,
				"name" => "Vrancea",
				"code" => "VN"
			], [
				"stateId" => 3397,
				"countryId" => 202,
				"name" => "Calarasi",
				"code" => "CL"
			], [
				"stateId" => 3398,
				"countryId" => 202,
				"name" => "Giurgiu",
				"code" => "GR"
			], [
				"stateId" => 3399,
				"countryId" => 195,
				"name" => "Abra",
				"code" => "AB"
			], [
				"stateId" => 3400,
				"countryId" => 195,
				"name" => "Agusan del Norte",
				"code" => "AN"
			], [
				"stateId" => 3401,
				"countryId" => 195,
				"name" => "Agusan del Sur",
				"code" => "AS"
			], [
				"stateId" => 3402,
				"countryId" => 195,
				"name" => "Aklan",
				"code" => "AK"
			], [
				"stateId" => 3403,
				"countryId" => 195,
				"name" => "Albay",
				"code" => "AL"
			], [
				"stateId" => 3404,
				"countryId" => 195,
				"name" => "Antique",
				"code" => "AQ"
			], [
				"stateId" => 3405,
				"countryId" => 195,
				"name" => "Bataan",
				"code" => "BA"
			], [
				"stateId" => 3406,
				"countryId" => 195,
				"name" => "Batanes",
				"code" => "BN"
			], [
				"stateId" => 3407,
				"countryId" => 195,
				"name" => "Batangas",
				"code" => "BT"
			], [
				"stateId" => 3408,
				"countryId" => 195,
				"name" => "Benguet",
				"code" => "BG"
			], [
				"stateId" => 3409,
				"countryId" => 195,
				"name" => "Bohol",
				"code" => "BO"
			], [
				"stateId" => 3410,
				"countryId" => 195,
				"name" => "Bukidnon",
				"code" => "BK"
			], [
				"stateId" => 3411,
				"countryId" => 195,
				"name" => "Bulacan",
				"code" => "BU"
			], [
				"stateId" => 3412,
				"countryId" => 195,
				"name" => "Cagayan",
				"code" => "CG"
			], [
				"stateId" => 3413,
				"countryId" => 195,
				"name" => "Camarines Norte",
				"code" => "CN"
			], [
				"stateId" => 3414,
				"countryId" => 195,
				"name" => "Camarines Sur",
				"code" => "CS"
			], [
				"stateId" => 3415,
				"countryId" => 195,
				"name" => "Camiguin",
				"code" => "CM"
			], [
				"stateId" => 3416,
				"countryId" => 195,
				"name" => "Capiz",
				"code" => "CP"
			], [
				"stateId" => 3417,
				"countryId" => 195,
				"name" => "Catanduanes",
				"code" => "CT"
			], [
				"stateId" => 3418,
				"countryId" => 195,
				"name" => "Cavite",
				"code" => "CV"
			], [
				"stateId" => 3419,
				"countryId" => 195,
				"name" => "Cebu",
				"code" => "CB"
			], [
				"stateId" => 3420,
				"countryId" => 195,
				"name" => "Basilan",
				"code" => "BS"
			], [
				"stateId" => 3421,
				"countryId" => 195,
				"name" => "Eastern Samar",
				"code" => "ES"
			], [
				"stateId" => 3422,
				"countryId" => 195,
				"name" => "Davao del Norte",
				"code" => "DV"
			], [
				"stateId" => 3423,
				"countryId" => 195,
				"name" => "Davao del Sur",
				"code" => "DS"
			], [
				"stateId" => 3424,
				"countryId" => 195,
				"name" => "Davao Oriental",
				"code" => "DO"
			], [
				"stateId" => 3425,
				"countryId" => 195,
				"name" => "Ifugao",
				"code" => "IF"
			], [
				"stateId" => 3426,
				"countryId" => 195,
				"name" => "Ilocos Norte",
				"code" => "IN"
			], [
				"stateId" => 3427,
				"countryId" => 195,
				"name" => "Ilocos Sur",
				"code" => "IS"
			], [
				"stateId" => 3428,
				"countryId" => 195,
				"name" => "Iloilo",
				"code" => "II"
			], [
				"stateId" => 3429,
				"countryId" => 195,
				"name" => "Isabela",
				"code" => "IB"
			], [
				"stateId" => 3430,
				"countryId" => 195,
				"name" => "Kalinga-Apayao",
				"code" => "KA"
			], [
				"stateId" => 3431,
				"countryId" => 195,
				"name" => "Laguna",
				"code" => "LG"
			], [
				"stateId" => 3432,
				"countryId" => 195,
				"name" => "Lanao del Norte",
				"code" => "LN"
			], [
				"stateId" => 3433,
				"countryId" => 195,
				"name" => "Lanao del Sur",
				"code" => "LS"
			], [
				"stateId" => 3434,
				"countryId" => 195,
				"name" => "La Union",
				"code" => "LB"
			], [
				"stateId" => 3435,
				"countryId" => 195,
				"name" => "Leyte",
				"code" => "LY"
			], [
				"stateId" => 3436,
				"countryId" => 195,
				"name" => "Marinduque",
				"code" => "MQ"
			], [
				"stateId" => 3437,
				"countryId" => 195,
				"name" => "Masbate",
				"code" => "MB"
			], [
				"stateId" => 3438,
				"countryId" => 195,
				"name" => "Mindoro Occidental",
				"code" => "MC"
			], [
				"stateId" => 3439,
				"countryId" => 195,
				"name" => "Mindoro Oriental",
				"code" => "MR"
			], [
				"stateId" => 3440,
				"countryId" => 195,
				"name" => "Misamis Occidental",
				"code" => "MD"
			], [
				"stateId" => 3441,
				"countryId" => 195,
				"name" => "Misamis Oriental",
				"code" => "MN"
			], [
				"stateId" => 3442,
				"countryId" => 195,
				"name" => "Mountain",
				"code" => "MT"
			], [
				"stateId" => 3443,
				"countryId" => 195,
				"name" => "RP45",
				"code" => "RP"
			], [
				"stateId" => 3444,
				"countryId" => 195,
				"name" => "Negros Oriental",
				"code" => "NR"
			], [
				"stateId" => 3445,
				"countryId" => 195,
				"name" => "Nueva Ecija",
				"code" => "NE"
			], [
				"stateId" => 3446,
				"countryId" => 195,
				"name" => "Nueva Vizcaya",
				"code" => "NV"
			], [
				"stateId" => 3447,
				"countryId" => 195,
				"name" => "Palawan",
				"code" => "PL"
			], [
				"stateId" => 3448,
				"countryId" => 195,
				"name" => "Pampanga",
				"code" => "PM"
			], [
				"stateId" => 3449,
				"countryId" => 195,
				"name" => "Pangasinan",
				"code" => "PN"
			], [
				"stateId" => 3450,
				"countryId" => 195,
				"name" => "Rizal",
				"code" => "RI"
			], [
				"stateId" => 3451,
				"countryId" => 195,
				"name" => "Romblon",
				"code" => "RM"
			], [
				"stateId" => 3452,
				"countryId" => 195,
				"name" => "Samar",
				"code" => "SM"
			], [
				"stateId" => 3453,
				"countryId" => 195,
				"name" => "Maguindanao",
				"code" => "MG"
			], [
				"stateId" => 3454,
				"countryId" => 195,
				"name" => "North Cotabato",
				"code" => "NC"
			], [
				"stateId" => 3455,
				"countryId" => 195,
				"name" => "Sorsogon",
				"code" => "SR"
			], [
				"stateId" => 3456,
				"countryId" => 195,
				"name" => "Southern Leyte",
				"code" => "SL"
			], [
				"stateId" => 3457,
				"countryId" => 195,
				"name" => "Sulu",
				"code" => "SU"
			], [
				"stateId" => 3458,
				"countryId" => 195,
				"name" => "Surigao del Norte",
				"code" => "SN"
			], [
				"stateId" => 3459,
				"countryId" => 195,
				"name" => "Surigao del Sur",
				"code" => "SS"
			], [
				"stateId" => 3460,
				"countryId" => 195,
				"name" => "Tarlac",
				"code" => "TR"
			], [
				"stateId" => 3461,
				"countryId" => 195,
				"name" => "Zambales",
				"code" => "ZM"
			], [
				"stateId" => 3462,
				"countryId" => 195,
				"name" => "Zamboanga del Norte",
				"code" => "ZN"
			], [
				"stateId" => 3463,
				"countryId" => 195,
				"name" => "Zamboanga del Sur",
				"code" => "ZS"
			], [
				"stateId" => 3464,
				"countryId" => 195,
				"name" => "Northern Samar",
				"code" => "NS"
			], [
				"stateId" => 3465,
				"countryId" => 195,
				"name" => "Quirino",
				"code" => "QR"
			], [
				"stateId" => 3466,
				"countryId" => 195,
				"name" => "Siquijor",
				"code" => "SQ"
			], [
				"stateId" => 3467,
				"countryId" => 195,
				"name" => "South Cotabato",
				"code" => "SC"
			], [
				"stateId" => 3468,
				"countryId" => 195,
				"name" => "Sultan Kudarat",
				"code" => "SK"
			], [
				"stateId" => 3469,
				"countryId" => 195,
				"name" => "Tawi-Tawi",
				"code" => "TT"
			], [
				"stateId" => 3470,
				"countryId" => 195,
				"name" => "Angeles",
				"code" => "AG"
			], [
				"stateId" => 3471,
				"countryId" => 195,
				"name" => "Bacolod",
				"code" => "BL"
			], [
				"stateId" => 3472,
				"countryId" => 195,
				"name" => "Bago",
				"code" => "BB"
			], [
				"stateId" => 3473,
				"countryId" => 195,
				"name" => "Baguio",
				"code" => "BI"
			], [
				"stateId" => 3474,
				"countryId" => 195,
				"name" => "Bais",
				"code" => "BD"
			], [
				"stateId" => 3475,
				"countryId" => 195,
				"name" => "Basilan City",
				"code" => "BC"
			], [
				"stateId" => 3476,
				"countryId" => 195,
				"name" => "Batangas City",
				"code" => "BY"
			], [
				"stateId" => 3477,
				"countryId" => 195,
				"name" => "Butuan",
				"code" => "BV"
			], [
				"stateId" => 3478,
				"countryId" => 195,
				"name" => "Cabanatuan",
				"code" => "CA"
			], [
				"stateId" => 3479,
				"countryId" => 195,
				"name" => "Cadiz",
				"code" => "CI"
			], [
				"stateId" => 3480,
				"countryId" => 195,
				"name" => "Cagayan de Oro",
				"code" => "CD"
			], [
				"stateId" => 3481,
				"countryId" => 195,
				"name" => "Calbayog",
				"code" => "CL"
			], [
				"stateId" => 3482,
				"countryId" => 195,
				"name" => "Caloocan",
				"code" => "CF"
			], [
				"stateId" => 3483,
				"countryId" => 195,
				"name" => "Canlaon",
				"code" => "CH"
			], [
				"stateId" => 3484,
				"countryId" => 195,
				"name" => "Cavite City",
				"code" => "CE"
			], [
				"stateId" => 3485,
				"countryId" => 195,
				"name" => "Cebu City",
				"code" => "CU"
			], [
				"stateId" => 3486,
				"countryId" => 195,
				"name" => "Cotabato",
				"code" => "CO"
			], [
				"stateId" => 3487,
				"countryId" => 195,
				"name" => "Dagupan",
				"code" => "DA"
			], [
				"stateId" => 3488,
				"countryId" => 195,
				"name" => "Danao",
				"code" => "DN"
			], [
				"stateId" => 3489,
				"countryId" => 195,
				"name" => "Dapitane",
				"code" => "DP"
			], [
				"stateId" => 3490,
				"countryId" => 195,
				"name" => "Davao City",
				"code" => "DC"
			], [
				"stateId" => 3491,
				"countryId" => 195,
				"name" => "Dipolog",
				"code" => "DI"
			], [
				"stateId" => 3492,
				"countryId" => 195,
				"name" => "Dumaguete",
				"code" => "DU"
			], [
				"stateId" => 3493,
				"countryId" => 195,
				"name" => "General Santos",
				"code" => "GS"
			], [
				"stateId" => 3494,
				"countryId" => 195,
				"name" => "Gingoog",
				"code" => "GI"
			], [
				"stateId" => 3495,
				"countryId" => 195,
				"name" => "Iligan",
				"code" => "IL"
			], [
				"stateId" => 3496,
				"countryId" => 195,
				"name" => "Iloilo City",
				"code" => "IC"
			], [
				"stateId" => 3497,
				"countryId" => 195,
				"name" => "Iriga",
				"code" => "IR"
			], [
				"stateId" => 3498,
				"countryId" => 195,
				"name" => "La Carlota",
				"code" => "LC"
			], [
				"stateId" => 3499,
				"countryId" => 195,
				"name" => "Laoag",
				"code" => "LO"
			], [
				"stateId" => 3500,
				"countryId" => 195,
				"name" => "LapuLapu",
				"code" => "LA"
			], [
				"stateId" => 3501,
				"countryId" => 195,
				"name" => "Legaspi",
				"code" => "LE"
			], [
				"stateId" => 3502,
				"countryId" => 195,
				"name" => "Lipa",
				"code" => "LI"
			], [
				"stateId" => 3503,
				"countryId" => 195,
				"name" => "Lucena",
				"code" => "LU"
			], [
				"stateId" => 3504,
				"countryId" => 195,
				"name" => "Mandaue",
				"code" => "MU"
			], [
				"stateId" => 3505,
				"countryId" => 195,
				"name" => "Manila",
				"code" => "MM"
			], [
				"stateId" => 3506,
				"countryId" => 195,
				"name" => "Marawi",
				"code" => "MA"
			], [
				"stateId" => 3507,
				"countryId" => 195,
				"name" => "Naga",
				"code" => "NA"
			], [
				"stateId" => 3508,
				"countryId" => 195,
				"name" => "Olongapo",
				"code" => "OL"
			], [
				"stateId" => 3509,
				"countryId" => 195,
				"name" => "Ormoc",
				"code" => "OM"
			], [
				"stateId" => 3510,
				"countryId" => 195,
				"name" => "Oroquieta",
				"code" => "OR"
			], [
				"stateId" => 3511,
				"countryId" => 195,
				"name" => "Ozamis",
				"code" => "OZ"
			], [
				"stateId" => 3512,
				"countryId" => 195,
				"name" => "Pagadiane",
				"code" => "PG"
			], [
				"stateId" => 3513,
				"countryId" => 195,
				"name" => "Palayan",
				"code" => "PY"
			], [
				"stateId" => 3514,
				"countryId" => 195,
				"name" => "Pasay",
				"code" => "PA"
			], [
				"stateId" => 3515,
				"countryId" => 195,
				"name" => "Puerto Princesa",
				"code" => "PP"
			], [
				"stateId" => 3516,
				"countryId" => 195,
				"name" => "Quezon City",
				"code" => "QC"
			], [
				"stateId" => 3517,
				"countryId" => 195,
				"name" => "Roxas",
				"code" => "RO"
			], [
				"stateId" => 3518,
				"countryId" => 195,
				"name" => "Negros Occidental San Carlos",
				"code" => "SA"
			], [
				"stateId" => 3519,
				"countryId" => 195,
				"name" => "Pangasinan San Carlos",
				"code" => "SO"
			], [
				"stateId" => 3520,
				"countryId" => 195,
				"name" => "San Jose",
				"code" => "SJ"
			], [
				"stateId" => 3521,
				"countryId" => 195,
				"name" => "San Pablo",
				"code" => "SP"
			], [
				"stateId" => 3522,
				"countryId" => 195,
				"name" => "Silay",
				"code" => "SI"
			], [
				"stateId" => 3523,
				"countryId" => 195,
				"name" => "Surigao",
				"code" => "SG"
			], [
				"stateId" => 3524,
				"countryId" => 195,
				"name" => "Tacloban",
				"code" => "TC"
			], [
				"stateId" => 3525,
				"countryId" => 195,
				"name" => "Tagaytay",
				"code" => "TG"
			], [
				"stateId" => 3526,
				"countryId" => 195,
				"name" => "Tagbilaran",
				"code" => "TB"
			], [
				"stateId" => 3527,
				"countryId" => 195,
				"name" => "Tangub",
				"code" => "TA"
			], [
				"stateId" => 3528,
				"countryId" => 195,
				"name" => "Toledo",
				"code" => "TO"
			], [
				"stateId" => 3529,
				"countryId" => 195,
				"name" => "Trece Martires",
				"code" => "TM"
			], [
				"stateId" => 3530,
				"countryId" => 195,
				"name" => "Zamboanga",
				"code" => "ZA"
			], [
				"stateId" => 3531,
				"countryId" => 195,
				"name" => "Aurora",
				"code" => "AU"
			], [
				"stateId" => 3532,
				"countryId" => 195,
				"name" => "Quezon",
				"code" => "QZ"
			], [
				"stateId" => 3533,
				"countryId" => 195,
				"name" => "Negros Occidental",
				"code" => "ND"
			], [
				"stateId" => 3534,
				"countryId" => 203,
				"name" => "Adygeya",
				"code" => "AD"
			], [
				"stateId" => 3535,
				"countryId" => 203,
				"name" => "Aginskiy Buryatskiy Avtonomnyy Okrug",
				"code" => "AB"
			], [
				"stateId" => 3536,
				"countryId" => 203,
				"name" => "Altay",
				"code" => "GA"
			], [
				"stateId" => 3537,
				"countryId" => 203,
				"name" => "Altayskiy Kray",
				"code" => "AL"
			], [
				"stateId" => 3538,
				"countryId" => 203,
				"name" => "Amurskaya Oblast'",
				"code" => "AM"
			], [
				"stateId" => 3539,
				"countryId" => 203,
				"name" => "Arkhangel'skaya Oblast'",
				"code" => "AR"
			], [
				"stateId" => 3540,
				"countryId" => 203,
				"name" => "Astrakhanskaya Oblast'",
				"code" => "AS"
			], [
				"stateId" => 3541,
				"countryId" => 203,
				"name" => "Bashkortostan",
				"code" => "BK"
			], [
				"stateId" => 3542,
				"countryId" => 203,
				"name" => "Belgorodskaya Oblast'",
				"code" => "BL"
			], [
				"stateId" => 3543,
				"countryId" => 203,
				"name" => "Bryanskaya Oblast'",
				"code" => "BR"
			], [
				"stateId" => 3544,
				"countryId" => 203,
				"name" => "Buryatiya",
				"code" => "BU"
			], [
				"stateId" => 3545,
				"countryId" => 203,
				"name" => "Chechnya",
				"code" => "CN"
			], [
				"stateId" => 3546,
				"countryId" => 203,
				"name" => "Chelyabinskaya Oblast'",
				"code" => "CL"
			], [
				"stateId" => 3547,
				"countryId" => 203,
				"name" => "Chitinskaya Oblast'",
				"code" => "CT"
			], [
				"stateId" => 3548,
				"countryId" => 203,
				"name" => "Chukotskiy Avtonomnyy Okrug",
				"code" => "CK"
			], [
				"stateId" => 3549,
				"countryId" => 203,
				"name" => "Chuvashiya",
				"code" => "CV"
			], [
				"stateId" => 3550,
				"countryId" => 203,
				"name" => "Evenkiyskiy Avtonomnyy Okrug",
				"code" => "EN"
			], [
				"stateId" => 3551,
				"countryId" => 203,
				"name" => "Ingushetiya",
				"code" => "IN"
			], [
				"stateId" => 3552,
				"countryId" => 203,
				"name" => "Irkutskaya Oblast'",
				"code" => "IR"
			], [
				"stateId" => 3553,
				"countryId" => 203,
				"name" => "Ivanovskaya Oblast'",
				"code" => "IV"
			], [
				"stateId" => 3554,
				"countryId" => 203,
				"name" => "Kabardino-Balkariya",
				"code" => "KB"
			], [
				"stateId" => 3555,
				"countryId" => 203,
				"name" => "Kaliningradskaya Oblast'",
				"code" => "KN"
			], [
				"stateId" => 3556,
				"countryId" => 203,
				"name" => "Kalmykiya",
				"code" => "KL"
			], [
				"stateId" => 3557,
				"countryId" => 203,
				"name" => "Kaluzhskaya Oblast'",
				"code" => "KG"
			], [
				"stateId" => 3558,
				"countryId" => 203,
				"name" => "Kamchatskaya Oblast'",
				"code" => "KA"
			], [
				"stateId" => 3559,
				"countryId" => 203,
				"name" => "Karachayevo-Cherkesiya",
				"code" => "KC"
			], [
				"stateId" => 3560,
				"countryId" => 203,
				"name" => "Kareliya",
				"code" => "KI"
			], [
				"stateId" => 3561,
				"countryId" => 203,
				"name" => "Kemerovskaya Oblast'",
				"code" => "KE"
			], [
				"stateId" => 3562,
				"countryId" => 203,
				"name" => "Khabarovskiy Kray",
				"code" => "KH"
			], [
				"stateId" => 3563,
				"countryId" => 203,
				"name" => "Khakasiya",
				"code" => "KK"
			], [
				"stateId" => 3564,
				"countryId" => 203,
				"name" => "Khanty-Mansiyskiy Avtonomnyy Okrug",
				"code" => "KM"
			], [
				"stateId" => 3565,
				"countryId" => 203,
				"name" => "Kirovskaya Oblast'",
				"code" => "KV"
			], [
				"stateId" => 3566,
				"countryId" => 203,
				"name" => "Komi-Permyatskiy Avtonomnyy Okrug",
				"code" => "KP"
			], [
				"stateId" => 3567,
				"countryId" => 203,
				"name" => "Koryakskiy Avtonomnyy Okrug",
				"code" => "KR"
			], [
				"stateId" => 3568,
				"countryId" => 203,
				"name" => "Kostromskaya Oblast'",
				"code" => "KT"
			], [
				"stateId" => 3569,
				"countryId" => 203,
				"name" => "Krasnodarskiy Kray",
				"code" => "KD"
			], [
				"stateId" => 3570,
				"countryId" => 203,
				"name" => "Krasnoyarskiy Kray",
				"code" => "KY"
			], [
				"stateId" => 3571,
				"countryId" => 203,
				"name" => "Kurganskaya Oblast'",
				"code" => "KU"
			], [
				"stateId" => 3572,
				"countryId" => 203,
				"name" => "Kurskaya Oblast'",
				"code" => "KS"
			], [
				"stateId" => 3573,
				"countryId" => 203,
				"name" => "Leningradskaya Oblast'",
				"code" => "LN"
			], [
				"stateId" => 3574,
				"countryId" => 203,
				"name" => "Lipetskaya Oblast'",
				"code" => "LP"
			], [
				"stateId" => 3575,
				"countryId" => 203,
				"name" => "Magadanskaya Oblast'",
				"code" => "MG"
			], [
				"stateId" => 3576,
				"countryId" => 203,
				"name" => "Mordoviya",
				"code" => "MR"
			], [
				"stateId" => 3577,
				"countryId" => 203,
				"name" => "Moskovskaya Oblast'",
				"code" => "MS"
			], [
				"stateId" => 3578,
				"countryId" => 203,
				"name" => "Moskva",
				"code" => "MC"
			], [
				"stateId" => 3579,
				"countryId" => 203,
				"name" => "Murmanskaya Oblast'",
				"code" => "MM"
			], [
				"stateId" => 3580,
				"countryId" => 203,
				"name" => "Nenetskiy Avtonomnyy Okrug",
				"code" => "NN"
			], [
				"stateId" => 3581,
				"countryId" => 203,
				"name" => "Nizhegorodskaya Oblast'",
				"code" => "NZ"
			], [
				"stateId" => 3582,
				"countryId" => 203,
				"name" => "Novgorodskaya Oblast'",
				"code" => "NG"
			], [
				"stateId" => 3583,
				"countryId" => 203,
				"name" => "Novosibirskaya Oblast'",
				"code" => "NS"
			], [
				"stateId" => 3584,
				"countryId" => 203,
				"name" => "Omskaya Oblast'",
				"code" => "OM"
			], [
				"stateId" => 3585,
				"countryId" => 203,
				"name" => "Orenburgskaya Oblast'",
				"code" => "OB"
			], [
				"stateId" => 3586,
				"countryId" => 203,
				"name" => "Orlovskaya Oblast'",
				"code" => "OL"
			], [
				"stateId" => 3587,
				"countryId" => 203,
				"name" => "Penzenskaya Oblast'",
				"code" => "PZ"
			], [
				"stateId" => 3588,
				"countryId" => 203,
				"name" => "Permskaya Oblast'",
				"code" => "PM"
			], [
				"stateId" => 3589,
				"countryId" => 203,
				"name" => "Primorskiy Kray",
				"code" => "PR"
			], [
				"stateId" => 3590,
				"countryId" => 203,
				"name" => "Pskovskaya Oblast'",
				"code" => "PS"
			], [
				"stateId" => 3591,
				"countryId" => 203,
				"name" => "Rostovskaya Oblast'",
				"code" => "RO"
			], [
				"stateId" => 3592,
				"countryId" => 203,
				"name" => "Ryazanskaya Oblast'",
				"code" => "RZ"
			], [
				"stateId" => 3593,
				"countryId" => 203,
				"name" => "Sakha (Yakutiya)",
				"code" => "SK"
			], [
				"stateId" => 3594,
				"countryId" => 203,
				"name" => "Sakhalinskaya Oblast'",
				"code" => "SL"
			], [
				"stateId" => 3595,
				"countryId" => 203,
				"name" => "Samarskaya Oblast'",
				"code" => "SA"
			], [
				"stateId" => 3596,
				"countryId" => 203,
				"name" => "Sankt-Peterburg",
				"code" => "SP"
			], [
				"stateId" => 3597,
				"countryId" => 203,
				"name" => "Saratovskaya Oblast'",
				"code" => "SR"
			], [
				"stateId" => 3598,
				"countryId" => 203,
				"name" => "Severnaya Osetiya-Alaniya",
				"code" => "NO"
			], [
				"stateId" => 3599,
				"countryId" => 203,
				"name" => "Smolenskaya Oblast'",
				"code" => "SM"
			], [
				"stateId" => 3600,
				"countryId" => 203,
				"name" => "Stavropol'skiy Kray",
				"code" => "ST"
			], [
				"stateId" => 3601,
				"countryId" => 203,
				"name" => "Sverdlovskaya Oblast'",
				"code" => "SV"
			], [
				"stateId" => 3602,
				"countryId" => 203,
				"name" => "Tambovskaya Oblast'",
				"code" => "TB"
			], [
				"stateId" => 3603,
				"countryId" => 203,
				"name" => "Taymyrskiy Dolgano-Nenetskiy Avtonomnyy Okrug",
				"code" => "TM"
			], [
				"stateId" => 3604,
				"countryId" => 203,
				"name" => "Tomskaya Oblast'",
				"code" => "TO"
			], [
				"stateId" => 3605,
				"countryId" => 203,
				"name" => "Tul'skaya Oblast'",
				"code" => "TL"
			], [
				"stateId" => 3606,
				"countryId" => 203,
				"name" => "Tverskaya Oblast'",
				"code" => "TV"
			], [
				"stateId" => 3607,
				"countryId" => 203,
				"name" => "Tyumenskaya Oblast'",
				"code" => "TY"
			], [
				"stateId" => 3608,
				"countryId" => 203,
				"name" => "Udmurtiya",
				"code" => "UD"
			], [
				"stateId" => 3609,
				"countryId" => 203,
				"name" => "Ul'yanovskaya Oblast'",
				"code" => "UL"
			], [
				"stateId" => 3610,
				"countryId" => 203,
				"name" => "Ust'-Ordynskiy Buryatskiy Avtonomnyy Okrug",
				"code" => "UB"
			], [
				"stateId" => 3611,
				"countryId" => 203,
				"name" => "Vladimirskaya Oblast'",
				"code" => "VL"
			], [
				"stateId" => 3612,
				"countryId" => 203,
				"name" => "Volgogradskaya Oblast'",
				"code" => "VG"
			], [
				"stateId" => 3613,
				"countryId" => 203,
				"name" => "Vologodskaya oblast'",
				"code" => "VO"
			], [
				"stateId" => 3614,
				"countryId" => 203,
				"name" => "Voronezhskaya Oblast'",
				"code" => "VR"
			], [
				"stateId" => 3615,
				"countryId" => 203,
				"name" => "Yamalo-Nenetskiy Avtonomnyy Okrug",
				"code" => "YN"
			], [
				"stateId" => 3616,
				"countryId" => 203,
				"name" => "Yaroslavskaya Oblast'",
				"code" => "YS"
			], [
				"stateId" => 3617,
				"countryId" => 203,
				"name" => "Yevreyskaya Avtonomnyy Oblast'",
				"code" => "YV"
			], [
				"stateId" => 3619,
				"countryId" => 204,
				"name" => "Butare",
				"code" => "BT"
			], [
				"stateId" => 3620,
				"countryId" => 204,
				"name" => "Byumba",
				"code" => "BM"
			], [
				"stateId" => 3621,
				"countryId" => 204,
				"name" => "Cyangugu",
				"code" => "CY"
			], [
				"stateId" => 3622,
				"countryId" => 204,
				"name" => "Gikongoro",
				"code" => "GK"
			], [
				"stateId" => 3623,
				"countryId" => 204,
				"name" => "Gisenyi",
				"code" => "GS"
			], [
				"stateId" => 3624,
				"countryId" => 204,
				"name" => "Gitarama",
				"code" => "GT"
			], [
				"stateId" => 3625,
				"countryId" => 204,
				"name" => "Kibungo",
				"code" => "KN"
			], [
				"stateId" => 3626,
				"countryId" => 204,
				"name" => "Kibuye",
				"code" => "KY"
			], [
				"stateId" => 3627,
				"countryId" => 204,
				"name" => "Kigali-Rural",
				"code" => "KR"
			], [
				"stateId" => 3628,
				"countryId" => 204,
				"name" => "Ruhengeri",
				"code" => "RU"
			], [
				"stateId" => 3629,
				"countryId" => 213,
				"name" => "Al Bahah",
				"code" => "BA"
			], [
				"stateId" => 3630,
				"countryId" => 213,
				"name" => "Al Madinah",
				"code" => "MD"
			], [
				"stateId" => 3631,
				"countryId" => 213,
				"name" => "Ash Sharqiyah",
				"code" => "SH"
			], [
				"stateId" => 3632,
				"countryId" => 213,
				"name" => "Al Qasim",
				"code" => "QS"
			], [
				"stateId" => 3633,
				"countryId" => 213,
				"name" => "Ar Riyad",
				"code" => "RI"
			], [
				"stateId" => 3634,
				"countryId" => 213,
				"name" => "'Asir",
				"code" => "AS"
			], [
				"stateId" => 3635,
				"countryId" => 213,
				"name" => "Ha'il",
				"code" => "HA"
			], [
				"stateId" => 3636,
				"countryId" => 213,
				"name" => "Makkah",
				"code" => "MK"
			], [
				"stateId" => 3637,
				"countryId" => 213,
				"name" => "Al Hudud ash Shamaliyah",
				"code" => "HS"
			], [
				"stateId" => 3638,
				"countryId" => 213,
				"name" => "Najran",
				"code" => "NJ"
			], [
				"stateId" => 3639,
				"countryId" => 213,
				"name" => "Jizan",
				"code" => "JZ"
			], [
				"stateId" => 3640,
				"countryId" => 213,
				"name" => "Tabuk",
				"code" => "TB"
			], [
				"stateId" => 3641,
				"countryId" => 213,
				"name" => "Al Jawf",
				"code" => "JF"
			], [
				"stateId" => 3643,
				"countryId" => 206,
				"name" => "Christ Church Nicholatown",
				"code" => "CC"
			], [
				"stateId" => 3644,
				"countryId" => 206,
				"name" => "Saint Anne Sandy Point",
				"code" => "AS"
			], [
				"stateId" => 3645,
				"countryId" => 206,
				"name" => "Saint George Basseterre",
				"code" => "GB"
			], [
				"stateId" => 3646,
				"countryId" => 206,
				"name" => "Saint George Gingerland",
				"code" => "GG"
			], [
				"stateId" => 3647,
				"countryId" => 206,
				"name" => "Saint James Windward",
				"code" => "JW"
			], [
				"stateId" => 3648,
				"countryId" => 206,
				"name" => "Saint John Capesterre",
				"code" => "JC"
			], [
				"stateId" => 3649,
				"countryId" => 206,
				"name" => "Saint John Figtree",
				"code" => "JF"
			], [
				"stateId" => 3650,
				"countryId" => 206,
				"name" => "Saint Mary Cayon",
				"code" => "MC"
			], [
				"stateId" => 3651,
				"countryId" => 206,
				"name" => "Saint Paul Capesterre",
				"code" => "PP"
			], [
				"stateId" => 3652,
				"countryId" => 206,
				"name" => "Saint Paul Charlestown",
				"code" => "PL"
			], [
				"stateId" => 3653,
				"countryId" => 206,
				"name" => "Saint Peter Basseterre",
				"code" => "PB"
			], [
				"stateId" => 3654,
				"countryId" => 206,
				"name" => "Saint Thomas Lowland",
				"code" => "TL"
			], [
				"stateId" => 3655,
				"countryId" => 206,
				"name" => "Saint Thomas Middle Island",
				"code" => "TM"
			], [
				"stateId" => 3656,
				"countryId" => 206,
				"name" => "Trinity Palmetto Point",
				"code" => "TP"
			], [
				"stateId" => 3657,
				"countryId" => 217,
				"name" => "Anse aux Pins",
				"code" => "PI"
			], [
				"stateId" => 3658,
				"countryId" => 217,
				"name" => "Anse Boileau",
				"code" => "AB"
			], [
				"stateId" => 3659,
				"countryId" => 217,
				"name" => "Anse Etoile",
				"code" => "ET"
			], [
				"stateId" => 3660,
				"countryId" => 217,
				"name" => "Anse Louis",
				"code" => "LO"
			], [
				"stateId" => 3661,
				"countryId" => 217,
				"name" => "Anse Royale",
				"code" => "RO"
			], [
				"stateId" => 3662,
				"countryId" => 217,
				"name" => "Baie Lazare",
				"code" => "BL"
			], [
				"stateId" => 3663,
				"countryId" => 217,
				"name" => "Baie Sainte Anne",
				"code" => "BS"
			], [
				"stateId" => 3664,
				"countryId" => 217,
				"name" => "Beau Vallon",
				"code" => "BV"
			], [
				"stateId" => 3665,
				"countryId" => 217,
				"name" => "Bel Air",
				"code" => "BA"
			], [
				"stateId" => 3666,
				"countryId" => 217,
				"name" => "Bel Ombre",
				"code" => "BO"
			], [
				"stateId" => 3667,
				"countryId" => 217,
				"name" => "Cascade",
				"code" => "CA"
			], [
				"stateId" => 3668,
				"countryId" => 217,
				"name" => "Glacis",
				"code" => "GL"
			], [
				"stateId" => 3669,
				"countryId" => 217,
				"name" => "Grand' Anse",
				"code" => "GP"
			], [
				"stateId" => 3670,
				"countryId" => 217,
				"name" => "La Digue",
				"code" => "DI"
			], [
				"stateId" => 3671,
				"countryId" => 217,
				"name" => "La Riviere Anglaise",
				"code" => "RA"
			], [
				"stateId" => 3672,
				"countryId" => 217,
				"name" => "Mont Buxton",
				"code" => "MB"
			], [
				"stateId" => 3673,
				"countryId" => 217,
				"name" => "Mont Fleuri",
				"code" => "MF"
			], [
				"stateId" => 3674,
				"countryId" => 217,
				"name" => "Plaisance",
				"code" => "PL"
			], [
				"stateId" => 3675,
				"countryId" => 217,
				"name" => "Pointe La Rue",
				"code" => "PR"
			], [
				"stateId" => 3676,
				"countryId" => 217,
				"name" => "Port Glaud",
				"code" => "PG"
			], [
				"stateId" => 3677,
				"countryId" => 217,
				"name" => "Saint Louis",
				"code" => "SL"
			], [
				"stateId" => 3678,
				"countryId" => 217,
				"name" => "Takamaka",
				"code" => "TA"
			], [
				"stateId" => 3680,
				"countryId" => 224,
				"name" => "KwaZulu-Natal",
				"code" => "NL"
			], [
				"stateId" => 3681,
				"countryId" => 224,
				"name" => "Free State",
				"code" => "FS"
			], [
				"stateId" => 3683,
				"countryId" => 224,
				"name" => "Eastern Cape",
				"code" => "EC"
			], [
				"stateId" => 3684,
				"countryId" => 224,
				"name" => "Gauteng",
				"code" => "GT"
			], [
				"stateId" => 3685,
				"countryId" => 224,
				"name" => "Mpumalanga",
				"code" => "MP"
			], [
				"stateId" => 3686,
				"countryId" => 224,
				"name" => "Northern Cape",
				"code" => "NC"
			], [
				"stateId" => 3687,
				"countryId" => 224,
				"name" => "Northern Province",
				"code" => "NP"
			], [
				"stateId" => 3688,
				"countryId" => 224,
				"name" => "North-West",
				"code" => "NW"
			], [
				"stateId" => 3689,
				"countryId" => 224,
				"name" => "Western Cape",
				"code" => "WC"
			], [
				"stateId" => 3690,
				"countryId" => 214,
				"name" => "Dakar",
				"code" => "DK"
			], [
				"stateId" => 3691,
				"countryId" => 214,
				"name" => "Diourbel",
				"code" => "DB"
			], [
				"stateId" => 3692,
				"countryId" => 214,
				"name" => "Saint-Louis",
				"code" => "SL"
			], [
				"stateId" => 3693,
				"countryId" => 214,
				"name" => "Tambacounda",
				"code" => "TC"
			], [
				"stateId" => 3694,
				"countryId" => 214,
				"name" => "Thies",
				"code" => "TH"
			], [
				"stateId" => 3695,
				"countryId" => 214,
				"name" => "Louga",
				"code" => "LG"
			], [
				"stateId" => 3696,
				"countryId" => 214,
				"name" => "Fatick",
				"code" => "FK"
			], [
				"stateId" => 3697,
				"countryId" => 214,
				"name" => "Kaolack",
				"code" => "KL"
			], [
				"stateId" => 3698,
				"countryId" => 214,
				"name" => "Kolda",
				"code" => "KD"
			], [
				"stateId" => 3699,
				"countryId" => 214,
				"name" => "Ziguinchor",
				"code" => "ZG"
			], [
				"stateId" => 3700,
				"countryId" => 205,
				"name" => "Ascension",
				"code" => "AC"
			], [
				"stateId" => 3701,
				"countryId" => 205,
				"name" => "Saint Helena",
				"code" => "SH"
			], [
				"stateId" => 3702,
				"countryId" => 205,
				"name" => "Tristan da Cunha",
				"code" => "TA"
			], [
				"stateId" => 3703,
				"countryId" => 221,
				"name" => "Ajdovscina",
				"code" => "AJ"
			], [
				"stateId" => 3704,
				"countryId" => 221,
				"name" => "Beltinci",
				"code" => "BE"
			], [
				"stateId" => 3705,
				"countryId" => 221,
				"name" => "Bled",
				"code" => "BL"
			], [
				"stateId" => 3706,
				"countryId" => 221,
				"name" => "Bohinj",
				"code" => "BH"
			], [
				"stateId" => 3707,
				"countryId" => 221,
				"name" => "Borovnica",
				"code" => "BO"
			], [
				"stateId" => 3708,
				"countryId" => 221,
				"name" => "Bovec",
				"code" => "BC"
			], [
				"stateId" => 3709,
				"countryId" => 221,
				"name" => "Brda",
				"code" => "BR"
			], [
				"stateId" => 3710,
				"countryId" => 221,
				"name" => "Brezice",
				"code" => "BZ"
			], [
				"stateId" => 3711,
				"countryId" => 221,
				"name" => "Brezovica",
				"code" => "BV"
			], [
				"stateId" => 3712,
				"countryId" => 221,
				"name" => "Cankova-Tisina",
				"code" => "CA"
			], [
				"stateId" => 3713,
				"countryId" => 221,
				"name" => "Celje",
				"code" => "CL"
			], [
				"stateId" => 3714,
				"countryId" => 221,
				"name" => "Cerklje Na Gorenjskem",
				"code" => "CG"
			], [
				"stateId" => 3715,
				"countryId" => 221,
				"name" => "Cerknica",
				"code" => "CK"
			], [
				"stateId" => 3716,
				"countryId" => 221,
				"name" => "Cerkno",
				"code" => "CE"
			], [
				"stateId" => 3717,
				"countryId" => 221,
				"name" => "Crensovci",
				"code" => "CR"
			], [
				"stateId" => 3718,
				"countryId" => 221,
				"name" => "Crna na Koroskem",
				"code" => "CN"
			], [
				"stateId" => 3719,
				"countryId" => 221,
				"name" => "Crnomelj",
				"code" => "CO"
			], [
				"stateId" => 3720,
				"countryId" => 221,
				"name" => "Destrnik-Trnovska Vas",
				"code" => "DV"
			], [
				"stateId" => 3721,
				"countryId" => 221,
				"name" => "Divaca",
				"code" => "DI"
			], [
				"stateId" => 3722,
				"countryId" => 221,
				"name" => "Dobrepolje",
				"code" => "DB"
			], [
				"stateId" => 3723,
				"countryId" => 221,
				"name" => "Dobrova-Horjul-Polhov Gradec",
				"code" => "DG"
			], [
				"stateId" => 3724,
				"countryId" => 221,
				"name" => "Dol pri Ljubljani",
				"code" => "DP"
			], [
				"stateId" => 3725,
				"countryId" => 221,
				"name" => "Domzale",
				"code" => "DM"
			], [
				"stateId" => 3726,
				"countryId" => 221,
				"name" => "Dornava",
				"code" => "DO"
			], [
				"stateId" => 3727,
				"countryId" => 221,
				"name" => "Dravograd",
				"code" => "DR"
			], [
				"stateId" => 3728,
				"countryId" => 221,
				"name" => "Duplek",
				"code" => "DU"
			], [
				"stateId" => 3729,
				"countryId" => 221,
				"name" => "Gorenja Vas-Poljane",
				"code" => "GV"
			], [
				"stateId" => 3730,
				"countryId" => 221,
				"name" => "Gorisnica",
				"code" => "GO"
			], [
				"stateId" => 3731,
				"countryId" => 221,
				"name" => "Gornja Radgona",
				"code" => "GR"
			], [
				"stateId" => 3732,
				"countryId" => 221,
				"name" => "Gornji Grad",
				"code" => "GG"
			], [
				"stateId" => 3733,
				"countryId" => 221,
				"name" => "Gornji Petrovci",
				"code" => "GP"
			], [
				"stateId" => 3734,
				"countryId" => 221,
				"name" => "Grosuplje",
				"code" => "GS"
			], [
				"stateId" => 3735,
				"countryId" => 221,
				"name" => "HodosSalovci",
				"code" => "HO"
			], [
				"stateId" => 3736,
				"countryId" => 221,
				"name" => "Hrastnik",
				"code" => "HR"
			], [
				"stateId" => 3737,
				"countryId" => 221,
				"name" => "Hrpelje-Kozina",
				"code" => "HK"
			], [
				"stateId" => 3738,
				"countryId" => 221,
				"name" => "Idrija",
				"code" => "ID"
			], [
				"stateId" => 3739,
				"countryId" => 221,
				"name" => "Ig",
				"code" => "IG"
			], [
				"stateId" => 3740,
				"countryId" => 221,
				"name" => "Ilirska Bistrica",
				"code" => "IB"
			], [
				"stateId" => 3741,
				"countryId" => 221,
				"name" => "Ivancna Gorica",
				"code" => "IV"
			], [
				"stateId" => 3742,
				"countryId" => 221,
				"name" => "Izola",
				"code" => "IZ"
			], [
				"stateId" => 3743,
				"countryId" => 221,
				"name" => "Jesenice",
				"code" => "JE"
			], [
				"stateId" => 3744,
				"countryId" => 221,
				"name" => "Jursinci",
				"code" => "JU"
			], [
				"stateId" => 3745,
				"countryId" => 221,
				"name" => "Kamnik",
				"code" => "KA"
			], [
				"stateId" => 3746,
				"countryId" => 221,
				"name" => "Kanal",
				"code" => "KN"
			], [
				"stateId" => 3747,
				"countryId" => 221,
				"name" => "Kidricevo",
				"code" => "KI"
			], [
				"stateId" => 3748,
				"countryId" => 221,
				"name" => "Kobarid",
				"code" => "KO"
			], [
				"stateId" => 3749,
				"countryId" => 221,
				"name" => "Kobilje",
				"code" => "KB"
			], [
				"stateId" => 3750,
				"countryId" => 221,
				"name" => "Kocevje",
				"code" => "KC"
			], [
				"stateId" => 3751,
				"countryId" => 221,
				"name" => "Komen",
				"code" => "KM"
			], [
				"stateId" => 3752,
				"countryId" => 221,
				"name" => "Koper",
				"code" => "KP"
			], [
				"stateId" => 3753,
				"countryId" => 221,
				"name" => "Kozje",
				"code" => "KJ"
			], [
				"stateId" => 3754,
				"countryId" => 221,
				"name" => "Kranj",
				"code" => "KR"
			], [
				"stateId" => 3755,
				"countryId" => 221,
				"name" => "Kranjska Gora",
				"code" => "KG"
			], [
				"stateId" => 3756,
				"countryId" => 221,
				"name" => "Krsko",
				"code" => "KS"
			], [
				"stateId" => 3757,
				"countryId" => 221,
				"name" => "Kungota",
				"code" => "KZ"
			], [
				"stateId" => 3758,
				"countryId" => 221,
				"name" => "Kuzma",
				"code" => "KU"
			], [
				"stateId" => 3759,
				"countryId" => 221,
				"name" => "Lasko",
				"code" => "LA"
			], [
				"stateId" => 3760,
				"countryId" => 221,
				"name" => "Lenart",
				"code" => "LE"
			], [
				"stateId" => 3761,
				"countryId" => 221,
				"name" => "Lendava",
				"code" => "LN"
			], [
				"stateId" => 3762,
				"countryId" => 221,
				"name" => "Litija",
				"code" => "LI"
			], [
				"stateId" => 3763,
				"countryId" => 221,
				"name" => "Ljubljana",
				"code" => "LB"
			], [
				"stateId" => 3764,
				"countryId" => 221,
				"name" => "Ljubno",
				"code" => "LC"
			], [
				"stateId" => 3765,
				"countryId" => 221,
				"name" => "Ljutomer",
				"code" => "LJ"
			], [
				"stateId" => 3766,
				"countryId" => 221,
				"name" => "Logatec",
				"code" => "LO"
			], [
				"stateId" => 3767,
				"countryId" => 221,
				"name" => "Loska Dolina",
				"code" => "LD"
			], [
				"stateId" => 3768,
				"countryId" => 221,
				"name" => "Loski Potok",
				"code" => "LP"
			], [
				"stateId" => 3769,
				"countryId" => 221,
				"name" => "Luce",
				"code" => "LU"
			], [
				"stateId" => 3770,
				"countryId" => 221,
				"name" => "Lukovica",
				"code" => "LK"
			], [
				"stateId" => 3771,
				"countryId" => 221,
				"name" => "Majsperk",
				"code" => "MJ"
			], [
				"stateId" => 3772,
				"countryId" => 221,
				"name" => "Maribor",
				"code" => "MA"
			], [
				"stateId" => 3773,
				"countryId" => 221,
				"name" => "Medvode",
				"code" => "MD"
			], [
				"stateId" => 3774,
				"countryId" => 221,
				"name" => "Menges",
				"code" => "MN"
			], [
				"stateId" => 3775,
				"countryId" => 221,
				"name" => "Metlika",
				"code" => "ME"
			], [
				"stateId" => 3776,
				"countryId" => 221,
				"name" => "Mezica",
				"code" => "MZ"
			], [
				"stateId" => 3777,
				"countryId" => 221,
				"name" => "Miren-Kostanjevica",
				"code" => "MI"
			], [
				"stateId" => 3778,
				"countryId" => 221,
				"name" => "Mislinja",
				"code" => "ML"
			], [
				"stateId" => 3779,
				"countryId" => 221,
				"name" => "Moravce",
				"code" => "MV"
			], [
				"stateId" => 3780,
				"countryId" => 221,
				"name" => "Moravske Toplice",
				"code" => "MT"
			], [
				"stateId" => 3781,
				"countryId" => 221,
				"name" => "Mozirje",
				"code" => "MO"
			], [
				"stateId" => 3782,
				"countryId" => 221,
				"name" => "Murska Sobota",
				"code" => "MS"
			], [
				"stateId" => 3783,
				"countryId" => 221,
				"name" => "Muta",
				"code" => "MU"
			], [
				"stateId" => 3784,
				"countryId" => 221,
				"name" => "Naklo",
				"code" => "NA"
			], [
				"stateId" => 3785,
				"countryId" => 221,
				"name" => "Nazarje",
				"code" => "NZ"
			], [
				"stateId" => 3786,
				"countryId" => 221,
				"name" => "Nova Gorica",
				"code" => "NG"
			], [
				"stateId" => 3787,
				"countryId" => 221,
				"name" => "Novo Mesto",
				"code" => "NM"
			], [
				"stateId" => 3788,
				"countryId" => 221,
				"name" => "Odranci",
				"code" => "OD"
			], [
				"stateId" => 3789,
				"countryId" => 221,
				"name" => "Ormoz",
				"code" => "OR"
			], [
				"stateId" => 3790,
				"countryId" => 221,
				"name" => "Osilnica",
				"code" => "OS"
			], [
				"stateId" => 3791,
				"countryId" => 221,
				"name" => "Pesnica",
				"code" => "PE"
			], [
				"stateId" => 3792,
				"countryId" => 221,
				"name" => "Piran",
				"code" => "PA"
			], [
				"stateId" => 3793,
				"countryId" => 221,
				"name" => "Pivka",
				"code" => "PI"
			], [
				"stateId" => 3794,
				"countryId" => 221,
				"name" => "Podcetrtek",
				"code" => "PD"
			], [
				"stateId" => 3795,
				"countryId" => 221,
				"name" => "Podvelka-Ribnica",
				"code" => "PV"
			], [
				"stateId" => 3796,
				"countryId" => 221,
				"name" => "Postojna",
				"code" => "PO"
			], [
				"stateId" => 3797,
				"countryId" => 221,
				"name" => "Preddvor",
				"code" => "PR"
			], [
				"stateId" => 3798,
				"countryId" => 221,
				"name" => "Ptuj",
				"code" => "PT"
			], [
				"stateId" => 3799,
				"countryId" => 221,
				"name" => "Puconci",
				"code" => "PU"
			], [
				"stateId" => 3800,
				"countryId" => 221,
				"name" => "Race-Fram",
				"code" => "RF"
			], [
				"stateId" => 3801,
				"countryId" => 221,
				"name" => "Radece",
				"code" => "RA"
			], [
				"stateId" => 3802,
				"countryId" => 221,
				"name" => "Radenci",
				"code" => "RD"
			], [
				"stateId" => 3803,
				"countryId" => 221,
				"name" => "Radlje ob Dravi",
				"code" => "RL"
			], [
				"stateId" => 3804,
				"countryId" => 221,
				"name" => "Radovljica",
				"code" => "RV"
			], [
				"stateId" => 3805,
				"countryId" => 221,
				"name" => "Ravne-Prevalje",
				"code" => "RN"
			], [
				"stateId" => 3806,
				"countryId" => 221,
				"name" => "Ribnica",
				"code" => "RI"
			], [
				"stateId" => 3807,
				"countryId" => 221,
				"name" => "Rogasevci",
				"code" => "RO"
			], [
				"stateId" => 3808,
				"countryId" => 221,
				"name" => "Rogaska Slatina",
				"code" => "RS"
			], [
				"stateId" => 3809,
				"countryId" => 221,
				"name" => "Rogatec",
				"code" => "RT"
			], [
				"stateId" => 3810,
				"countryId" => 221,
				"name" => "Ruse",
				"code" => "RU"
			], [
				"stateId" => 3811,
				"countryId" => 221,
				"name" => "Semic",
				"code" => "SM"
			], [
				"stateId" => 3812,
				"countryId" => 221,
				"name" => "Sencur",
				"code" => "SN"
			], [
				"stateId" => 3813,
				"countryId" => 221,
				"name" => "Sentilj",
				"code" => "SE"
			], [
				"stateId" => 3814,
				"countryId" => 221,
				"name" => "Sentjernej",
				"code" => "SR"
			], [
				"stateId" => 3815,
				"countryId" => 221,
				"name" => "Sentjur pri Celju",
				"code" => "SU"
			], [
				"stateId" => 3816,
				"countryId" => 221,
				"name" => "Sevnica",
				"code" => "SV"
			], [
				"stateId" => 3817,
				"countryId" => 221,
				"name" => "Sezana",
				"code" => "SZ"
			], [
				"stateId" => 3818,
				"countryId" => 221,
				"name" => "Skocjan",
				"code" => "SC"
			], [
				"stateId" => 3819,
				"countryId" => 221,
				"name" => "Skofja Loka",
				"code" => "SL"
			], [
				"stateId" => 3820,
				"countryId" => 221,
				"name" => "Skofljica",
				"code" => "SK"
			], [
				"stateId" => 3821,
				"countryId" => 221,
				"name" => "Slovenj Gradec",
				"code" => "SG"
			], [
				"stateId" => 3822,
				"countryId" => 221,
				"name" => "Slovenska Bistrica",
				"code" => "SB"
			], [
				"stateId" => 3823,
				"countryId" => 221,
				"name" => "Slovenske Konjice",
				"code" => "SS"
			], [
				"stateId" => 3824,
				"countryId" => 221,
				"name" => "Smarje pri Jelsah",
				"code" => "SP"
			], [
				"stateId" => 3825,
				"countryId" => 221,
				"name" => "Smartno ob Paki",
				"code" => "SA"
			], [
				"stateId" => 3826,
				"countryId" => 221,
				"name" => "Sostanj",
				"code" => "SO"
			], [
				"stateId" => 3827,
				"countryId" => 221,
				"name" => "Starse",
				"code" => "SH"
			], [
				"stateId" => 3828,
				"countryId" => 221,
				"name" => "Store",
				"code" => "ST"
			], [
				"stateId" => 3829,
				"countryId" => 221,
				"name" => "Sveti Jurij",
				"code" => "SJ"
			], [
				"stateId" => 3830,
				"countryId" => 221,
				"name" => "Tolmin",
				"code" => "TO"
			], [
				"stateId" => 3831,
				"countryId" => 221,
				"name" => "Trbovlje",
				"code" => "TB"
			], [
				"stateId" => 3832,
				"countryId" => 221,
				"name" => "Trebnje",
				"code" => "TE"
			], [
				"stateId" => 3833,
				"countryId" => 221,
				"name" => "Trzic",
				"code" => "TR"
			], [
				"stateId" => 3834,
				"countryId" => 221,
				"name" => "Turnisce",
				"code" => "TU"
			], [
				"stateId" => 3835,
				"countryId" => 221,
				"name" => "Velenje",
				"code" => "VE"
			], [
				"stateId" => 3836,
				"countryId" => 221,
				"name" => "Velike Lasce",
				"code" => "VL"
			], [
				"stateId" => 3837,
				"countryId" => 221,
				"name" => "Videm",
				"code" => "VI"
			], [
				"stateId" => 3838,
				"countryId" => 221,
				"name" => "Vipava",
				"code" => "VP"
			], [
				"stateId" => 3839,
				"countryId" => 221,
				"name" => "Vitanje",
				"code" => "VT"
			], [
				"stateId" => 3840,
				"countryId" => 221,
				"name" => "Vodice",
				"code" => "VO"
			], [
				"stateId" => 3841,
				"countryId" => 221,
				"name" => "Vojnik",
				"code" => "VJ"
			], [
				"stateId" => 3842,
				"countryId" => 221,
				"name" => "Vrhnika",
				"code" => "VR"
			], [
				"stateId" => 3843,
				"countryId" => 221,
				"name" => "Vuzenica",
				"code" => "VU"
			], [
				"stateId" => 3844,
				"countryId" => 221,
				"name" => "Zagorje ob Savi",
				"code" => "ZO"
			], [
				"stateId" => 3845,
				"countryId" => 221,
				"name" => "Zalec",
				"code" => "ZA"
			], [
				"stateId" => 3846,
				"countryId" => 221,
				"name" => "Zavrc",
				"code" => "ZV"
			], [
				"stateId" => 3847,
				"countryId" => 221,
				"name" => "Zelezniki",
				"code" => "ZE"
			], [
				"stateId" => 3848,
				"countryId" => 221,
				"name" => "Ziri",
				"code" => "ZI"
			], [
				"stateId" => 3849,
				"countryId" => 221,
				"name" => "Zrece",
				"code" => "ZR"
			], [
				"stateId" => 3850,
				"countryId" => 218,
				"name" => "Eastern",
				"code" => "EA"
			], [
				"stateId" => 3851,
				"countryId" => 218,
				"name" => "Northern",
				"code" => "NO"
			], [
				"stateId" => 3852,
				"countryId" => 218,
				"name" => "Southern",
				"code" => "SO"
			], [
				"stateId" => 3853,
				"countryId" => 218,
				"name" => "Western Area",
				"code" => "WE"
			], [
				"stateId" => 3854,
				"countryId" => 211,
				"name" => "Acquaviva",
				"code" => "AC"
			], [
				"stateId" => 3855,
				"countryId" => 211,
				"name" => "Chiesanuova",
				"code" => "CH"
			], [
				"stateId" => 3856,
				"countryId" => 211,
				"name" => "Domagnano",
				"code" => "DO"
			], [
				"stateId" => 3857,
				"countryId" => 211,
				"name" => "Faetano",
				"code" => "FA"
			], [
				"stateId" => 3858,
				"countryId" => 211,
				"name" => "Fiorentino",
				"code" => "FI"
			], [
				"stateId" => 3859,
				"countryId" => 211,
				"name" => "Borgo Maaggiore",
				"code" => "BM"
			], [
				"stateId" => 3860,
				"countryId" => 211,
				"name" => "San Marino",
				"code" => "SM"
			], [
				"stateId" => 3861,
				"countryId" => 211,
				"name" => "Monte Giardino",
				"code" => "MG"
			], [
				"stateId" => 3862,
				"countryId" => 211,
				"name" => "Serravalle",
				"code" => "SE"
			], [
				"stateId" => 3863,
				"countryId" => 223,
				"name" => "Bakool",
				"code" => "BK"
			], [
				"stateId" => 3864,
				"countryId" => 223,
				"name" => "Banaadir",
				"code" => "BN"
			], [
				"stateId" => 3865,
				"countryId" => 223,
				"name" => "Bari",
				"code" => "BR"
			], [
				"stateId" => 3866,
				"countryId" => 223,
				"name" => "Bay",
				"code" => "BY"
			], [
				"stateId" => 3867,
				"countryId" => 223,
				"name" => "Galguduud",
				"code" => "GA"
			], [
				"stateId" => 3868,
				"countryId" => 223,
				"name" => "Gedo",
				"code" => "GE"
			], [
				"stateId" => 3869,
				"countryId" => 223,
				"name" => "Hiiraan",
				"code" => "HI"
			], [
				"stateId" => 3870,
				"countryId" => 223,
				"name" => "Jubbada Dhexe",
				"code" => "JD"
			], [
				"stateId" => 3871,
				"countryId" => 223,
				"name" => "Jubbada Hoose",
				"code" => "JH"
			], [
				"stateId" => 3872,
				"countryId" => 223,
				"name" => "Mudug",
				"code" => "MU"
			], [
				"stateId" => 3873,
				"countryId" => 223,
				"name" => "Nugaal",
				"code" => "NU"
			], [
				"stateId" => 3874,
				"countryId" => 223,
				"name" => "Sanaag",
				"code" => "SA"
			], [
				"stateId" => 3875,
				"countryId" => 223,
				"name" => "Shabeellaha Dhexe",
				"code" => "SD"
			], [
				"stateId" => 3876,
				"countryId" => 223,
				"name" => "Shabeellaha Hoose",
				"code" => "SH"
			], [
				"stateId" => 3877,
				"countryId" => 223,
				"name" => "Togdheer",
				"code" => "TO"
			], [
				"stateId" => 3878,
				"countryId" => 223,
				"name" => "Woqooyi Galbeed",
				"code" => "WO"
			], [
				"stateId" => 3886,
				"countryId" => 226,
				"name" => "Islas Baleares",
				"code" => "PM"
			], [
				"stateId" => 3906,
				"countryId" => 226,
				"name" => "La Rioja",
				"code" => "LO"
			], [
				"stateId" => 3908,
				"countryId" => 226,
				"name" => "Madrid",
				"code" => "MD"
			], [
				"stateId" => 3910,
				"countryId" => 226,
				"name" => "Murcia",
				"code" => "MU"
			], [
				"stateId" => 3911,
				"countryId" => 226,
				"name" => "Navarra",
				"code" => "NA"
			], [
				"stateId" => 3913,
				"countryId" => 226,
				"name" => "Asturias",
				"code" => "AS"
			], [
				"stateId" => 3918,
				"countryId" => 226,
				"name" => "Cantabria",
				"code" => "CB"
			], [
				"stateId" => 3930,
				"countryId" => 226,
				"name" => "Andalucia",
				"code" => "AN"
			], [
				"stateId" => 3931,
				"countryId" => 226,
				"name" => "Aragon",
				"code" => "AR"
			], [
				"stateId" => 3932,
				"countryId" => 226,
				"name" => "Canarias",
				"code" => "CN"
			], [
				"stateId" => 3933,
				"countryId" => 226,
				"name" => "Castilla-La Mancha",
				"code" => "CM"
			], [
				"stateId" => 3934,
				"countryId" => 226,
				"name" => "Castilla y Leon",
				"code" => "CL"
			], [
				"stateId" => 3935,
				"countryId" => 226,
				"name" => "Cataluña",
				"code" => "CT"
			], [
				"stateId" => 3936,
				"countryId" => 226,
				"name" => "Extremadura",
				"code" => "EX"
			], [
				"stateId" => 3937,
				"countryId" => 226,
				"name" => "Galicia",
				"code" => "GA"
			], [
				"stateId" => 3938,
				"countryId" => 226,
				"name" => "Pais Vasco",
				"code" => "PV"
			], [
				"stateId" => 3939,
				"countryId" => 226,
				"name" => "Valenciana",
				"code" => "VC"
			], [
				"stateId" => 3941,
				"countryId" => 271,
				"name" => "Vojvodina",
				"code" => "VO"
			], [
				"stateId" => 3942,
				"countryId" => 207,
				"name" => "Anse-la-Raye",
				"code" => "AR"
			], [
				"stateId" => 3943,
				"countryId" => 207,
				"name" => "Dauphin",
				"code" => "DA"
			], [
				"stateId" => 3944,
				"countryId" => 207,
				"name" => "Castries",
				"code" => "CS"
			], [
				"stateId" => 3945,
				"countryId" => 207,
				"name" => "Choiseul",
				"code" => "CH"
			], [
				"stateId" => 3946,
				"countryId" => 207,
				"name" => "Dennery",
				"code" => "DE"
			], [
				"stateId" => 3947,
				"countryId" => 207,
				"name" => "Gros-Islet",
				"code" => "GI"
			], [
				"stateId" => 3948,
				"countryId" => 207,
				"name" => "Laborie",
				"code" => "LB"
			], [
				"stateId" => 3949,
				"countryId" => 207,
				"name" => "Micoud",
				"code" => "MI"
			], [
				"stateId" => 3950,
				"countryId" => 207,
				"name" => "Soufriere",
				"code" => "CO"
			], [
				"stateId" => 3951,
				"countryId" => 207,
				"name" => "Vieux-Fort",
				"code" => "VF"
			], [
				"stateId" => 3952,
				"countryId" => 207,
				"name" => "Praslin",
				"code" => "PR"
			], [
				"stateId" => 3953,
				"countryId" => 229,
				"name" => "A'ali an Nil",
				"code" => "UN"
			], [
				"stateId" => 3956,
				"countryId" => 229,
				"name" => "Al Khartum",
				"code" => "KH"
			], [
				"stateId" => 3957,
				"countryId" => 229,
				"name" => "Ash Shamaliyah",
				"code" => "NO"
			], [
				"stateId" => 3962,
				"countryId" => 229,
				"name" => "Al Babr al Ahmar",
				"code" => "RS"
			], [
				"stateId" => 3963,
				"countryId" => 229,
				"name" => "Al Buhayrat",
				"code" => "EB"
			], [
				"stateId" => 3964,
				"countryId" => 229,
				"name" => "Al Jazirah",
				"code" => "GZ"
			], [
				"stateId" => 3965,
				"countryId" => 229,
				"name" => "Al Qadarif",
				"code" => "GD"
			], [
				"stateId" => 3966,
				"countryId" => 229,
				"name" => "Al Wahdah",
				"code" => "WH"
			], [
				"stateId" => 3967,
				"countryId" => 229,
				"name" => "An Nil al Abyad",
				"code" => "WN"
			], [
				"stateId" => 3968,
				"countryId" => 229,
				"name" => "An Nil al Azraq",
				"code" => "BN"
			], [
				"stateId" => 3969,
				"countryId" => 229,
				"name" => "Bahr al Jabal",
				"code" => "BG"
			], [
				"stateId" => 3970,
				"countryId" => 229,
				"name" => "Gharb al Istiwa'iyah",
				"code" => "WE"
			], [
				"stateId" => 3971,
				"countryId" => 229,
				"name" => "Gharb Bahr al Ghazal",
				"code" => "WB"
			], [
				"stateId" => 3972,
				"countryId" => 229,
				"name" => "Gharb Darfur",
				"code" => "WD"
			], [
				"stateId" => 3973,
				"countryId" => 229,
				"name" => "Gharb Kurdufan",
				"code" => "WK"
			], [
				"stateId" => 3974,
				"countryId" => 229,
				"name" => "Janub Darfur",
				"code" => "JD"
			], [
				"stateId" => 3975,
				"countryId" => 229,
				"name" => "Janub Kurdufan",
				"code" => "SK"
			], [
				"stateId" => 3976,
				"countryId" => 229,
				"name" => "Junqali",
				"code" => "JG"
			], [
				"stateId" => 3977,
				"countryId" => 229,
				"name" => "Kassala",
				"code" => "KA"
			], [
				"stateId" => 3978,
				"countryId" => 229,
				"name" => "Nahr an Nil",
				"code" => "RN"
			], [
				"stateId" => 3979,
				"countryId" => 229,
				"name" => "Shamal Bahr al Ghazal",
				"code" => "NB"
			], [
				"stateId" => 3980,
				"countryId" => 229,
				"name" => "Shamal Darfur",
				"code" => "ND"
			], [
				"stateId" => 3981,
				"countryId" => 229,
				"name" => "Shamal Kurdufan",
				"code" => "NK"
			], [
				"stateId" => 3982,
				"countryId" => 229,
				"name" => "Sharq al Istiwa'iyah",
				"code" => "EE"
			], [
				"stateId" => 3983,
				"countryId" => 229,
				"name" => "Sinnar",
				"code" => "SI"
			], [
				"stateId" => 3984,
				"countryId" => 229,
				"name" => "Warab",
				"code" => "WR"
			], [
				"stateId" => 3986,
				"countryId" => 233,
				"name" => "Blekinge Lan",
				"code" => "BL"
			], [
				"stateId" => 3987,
				"countryId" => 233,
				"name" => "Gavleborgs Lan",
				"code" => "GV"
			], [
				"stateId" => 3989,
				"countryId" => 233,
				"name" => "Gotlands Lan",
				"code" => "GT"
			], [
				"stateId" => 3990,
				"countryId" => 233,
				"name" => "Hallands Lan",
				"code" => "HA"
			], [
				"stateId" => 3991,
				"countryId" => 233,
				"name" => "Jamtlands Lan",
				"code" => "JA"
			], [
				"stateId" => 3992,
				"countryId" => 233,
				"name" => "Jonkopings Lan",
				"code" => "JO"
			], [
				"stateId" => 3993,
				"countryId" => 233,
				"name" => "Kalmar Lan",
				"code" => "KA"
			], [
				"stateId" => 3994,
				"countryId" => 233,
				"name" => "Dalarnas Lan",
				"code" => "KO"
			], [
				"stateId" => 3996,
				"countryId" => 233,
				"name" => "Kronobergs Lan",
				"code" => "KR"
			], [
				"stateId" => 3998,
				"countryId" => 233,
				"name" => "Norrbottens Lan",
				"code" => "NB"
			], [
				"stateId" => 3999,
				"countryId" => 233,
				"name" => "Orebro Lan",
				"code" => "OR"
			], [
				"stateId" => 4000,
				"countryId" => 233,
				"name" => "Ostergotlands Lan",
				"code" => "OG"
			], [
				"stateId" => 4002,
				"countryId" => 233,
				"name" => "Sodermanlands Lan",
				"code" => "SD"
			], [
				"stateId" => 4003,
				"countryId" => 233,
				"name" => "Uppsala Lan",
				"code" => "UP"
			], [
				"stateId" => 4004,
				"countryId" => 233,
				"name" => "Varmlands Lan",
				"code" => "VR"
			], [
				"stateId" => 4005,
				"countryId" => 233,
				"name" => "Vasterbottens Lan",
				"code" => "VB"
			], [
				"stateId" => 4006,
				"countryId" => 233,
				"name" => "Vasternorrlands Lan",
				"code" => "VN"
			], [
				"stateId" => 4007,
				"countryId" => 233,
				"name" => "Vastmanlands Lan",
				"code" => "VM"
			], [
				"stateId" => 4008,
				"countryId" => 233,
				"name" => "Stockholms Lan",
				"code" => "ST"
			], [
				"stateId" => 4009,
				"countryId" => 233,
				"name" => "Skane Lan",
				"code" => "SN"
			], [
				"stateId" => 4010,
				"countryId" => 233,
				"name" => "Vastra Gotaland",
				"code" => "VG"
			], [
				"stateId" => 4011,
				"countryId" => 235,
				"name" => "Al Hasakah",
				"code" => "HA"
			], [
				"stateId" => 4012,
				"countryId" => 235,
				"name" => "Al Ladhiqiyah",
				"code" => "LA"
			], [
				"stateId" => 4013,
				"countryId" => 235,
				"name" => "Al Qunaytirah",
				"code" => "QU"
			], [
				"stateId" => 4014,
				"countryId" => 235,
				"name" => "Ar Raqqah",
				"code" => "RA"
			], [
				"stateId" => 4015,
				"countryId" => 235,
				"name" => "As Suwayda'",
				"code" => "SU"
			], [
				"stateId" => 4016,
				"countryId" => 235,
				"name" => "Dar'a",
				"code" => "DR"
			], [
				"stateId" => 4017,
				"countryId" => 235,
				"name" => "Dayr az Zawr",
				"code" => "DY"
			], [
				"stateId" => 4018,
				"countryId" => 235,
				"name" => "Rif Dimashq",
				"code" => "RD"
			], [
				"stateId" => 4019,
				"countryId" => 235,
				"name" => "Halab",
				"code" => "HL"
			], [
				"stateId" => 4020,
				"countryId" => 235,
				"name" => "Hamah",
				"code" => "HM"
			], [
				"stateId" => 4021,
				"countryId" => 235,
				"name" => "Hims",
				"code" => "HI"
			], [
				"stateId" => 4022,
				"countryId" => 235,
				"name" => "Idlib",
				"code" => "ID"
			], [
				"stateId" => 4023,
				"countryId" => 235,
				"name" => "Dimashq",
				"code" => "DI"
			], [
				"stateId" => 4024,
				"countryId" => 235,
				"name" => "Tartus",
				"code" => "TA"
			], [
				"stateId" => 4025,
				"countryId" => 234,
				"name" => "Aargau",
				"code" => "AG"
			], [
				"stateId" => 4026,
				"countryId" => 234,
				"name" => "Ausser-Rhoden",
				"code" => "AR"
			], [
				"stateId" => 4027,
				"countryId" => 234,
				"name" => "Basel-Landschaft",
				"code" => "BL"
			], [
				"stateId" => 4028,
				"countryId" => 234,
				"name" => "Basel-Stadt",
				"code" => "BS"
			], [
				"stateId" => 4029,
				"countryId" => 234,
				"name" => "Bern",
				"code" => "BE"
			], [
				"stateId" => 4030,
				"countryId" => 234,
				"name" => "Fribourg",
				"code" => "FR"
			], [
				"stateId" => 4031,
				"countryId" => 234,
				"name" => "Geneve",
				"code" => "GE"
			], [
				"stateId" => 4032,
				"countryId" => 234,
				"name" => "Glarus",
				"code" => "GL"
			], [
				"stateId" => 4033,
				"countryId" => 234,
				"name" => "Graubunden",
				"code" => "GR"
			], [
				"stateId" => 4034,
				"countryId" => 234,
				"name" => "Inner-Rhoden",
				"code" => "AI"
			], [
				"stateId" => 4035,
				"countryId" => 234,
				"name" => "Luzern",
				"code" => "LU"
			], [
				"stateId" => 4036,
				"countryId" => 234,
				"name" => "Neuchatel",
				"code" => "NE"
			], [
				"stateId" => 4037,
				"countryId" => 234,
				"name" => "Nidwalden",
				"code" => "NW"
			], [
				"stateId" => 4038,
				"countryId" => 234,
				"name" => "Obwalden",
				"code" => "OW"
			], [
				"stateId" => 4039,
				"countryId" => 234,
				"name" => "Sankt Gallen",
				"code" => "SG"
			], [
				"stateId" => 4040,
				"countryId" => 234,
				"name" => "Schaffhausen",
				"code" => "SH"
			], [
				"stateId" => 4041,
				"countryId" => 234,
				"name" => "Schwyz",
				"code" => "SZ"
			], [
				"stateId" => 4042,
				"countryId" => 234,
				"name" => "Solothurn",
				"code" => "SO"
			], [
				"stateId" => 4043,
				"countryId" => 234,
				"name" => "Thurgau",
				"code" => "TG"
			], [
				"stateId" => 4044,
				"countryId" => 234,
				"name" => "Ticino",
				"code" => "TI"
			], [
				"stateId" => 4045,
				"countryId" => 234,
				"name" => "Uri",
				"code" => "UR"
			], [
				"stateId" => 4046,
				"countryId" => 234,
				"name" => "Valais",
				"code" => "VS"
			], [
				"stateId" => 4047,
				"countryId" => 234,
				"name" => "Vaud",
				"code" => "VD"
			], [
				"stateId" => 4048,
				"countryId" => 234,
				"name" => "Zug",
				"code" => "ZG"
			], [
				"stateId" => 4049,
				"countryId" => 234,
				"name" => "Zurich",
				"code" => "ZH"
			], [
				"stateId" => 4050,
				"countryId" => 234,
				"name" => "Jura",
				"code" => "JU"
			], [
				"stateId" => 4051,
				"countryId" => 243,
				"name" => "Arima",
				"code" => "AR"
			], [
				"stateId" => 4052,
				"countryId" => 243,
				"name" => "Caroni",
				"code" => "CA"
			], [
				"stateId" => 4053,
				"countryId" => 243,
				"name" => "Mayaro",
				"code" => "MA"
			], [
				"stateId" => 4054,
				"countryId" => 243,
				"name" => "Nariva",
				"code" => "NA"
			], [
				"stateId" => 4055,
				"countryId" => 243,
				"name" => "Port-of-Spain",
				"code" => "PO"
			], [
				"stateId" => 4056,
				"countryId" => 243,
				"name" => "Saint Andrew",
				"code" => "SA"
			], [
				"stateId" => 4057,
				"countryId" => 243,
				"name" => "Saint David",
				"code" => "SD"
			], [
				"stateId" => 4058,
				"countryId" => 243,
				"name" => "Saint George",
				"code" => "SG"
			], [
				"stateId" => 4059,
				"countryId" => 243,
				"name" => "Saint Patrick",
				"code" => "SP"
			], [
				"stateId" => 4060,
				"countryId" => 243,
				"name" => "San Fernando",
				"code" => "SF"
			], [
				"stateId" => 4061,
				"countryId" => 243,
				"name" => "Tobago",
				"code" => "TO"
			], [
				"stateId" => 4062,
				"countryId" => 243,
				"name" => "Victoria",
				"code" => "VI"
			], [
				"stateId" => 4063,
				"countryId" => 239,
				"name" => "Mae Hong Son",
				"code" => "MH"
			], [
				"stateId" => 4064,
				"countryId" => 239,
				"name" => "Chiang Mai",
				"code" => "CM"
			], [
				"stateId" => 4065,
				"countryId" => 239,
				"name" => "Chiang Rai",
				"code" => "CR"
			], [
				"stateId" => 4066,
				"countryId" => 239,
				"name" => "Nan",
				"code" => "NA"
			], [
				"stateId" => 4067,
				"countryId" => 239,
				"name" => "Lamphun",
				"code" => "LN"
			], [
				"stateId" => 4068,
				"countryId" => 239,
				"name" => "Lampang",
				"code" => "LG"
			], [
				"stateId" => 4069,
				"countryId" => 239,
				"name" => "Phrae",
				"code" => "PR"
			], [
				"stateId" => 4070,
				"countryId" => 239,
				"name" => "Tak",
				"code" => "TK"
			], [
				"stateId" => 4071,
				"countryId" => 239,
				"name" => "Sukhothai",
				"code" => "SO"
			], [
				"stateId" => 4072,
				"countryId" => 239,
				"name" => "Uttaradit",
				"code" => "UD"
			], [
				"stateId" => 4073,
				"countryId" => 239,
				"name" => "Kamphaeng Phet",
				"code" => "KP"
			], [
				"stateId" => 4074,
				"countryId" => 239,
				"name" => "Phitsanulok",
				"code" => "PS"
			], [
				"stateId" => 4075,
				"countryId" => 239,
				"name" => "Phichit",
				"code" => "PC"
			], [
				"stateId" => 4076,
				"countryId" => 239,
				"name" => "Phetchabun",
				"code" => "PH"
			], [
				"stateId" => 4077,
				"countryId" => 239,
				"name" => "Uthai Thani",
				"code" => "UT"
			], [
				"stateId" => 4078,
				"countryId" => 239,
				"name" => "Nakhon Sawan",
				"code" => "NS"
			], [
				"stateId" => 4079,
				"countryId" => 239,
				"name" => "Nong Khai",
				"code" => "NK"
			], [
				"stateId" => 4080,
				"countryId" => 239,
				"name" => "Loei",
				"code" => "LE"
			], [
				"stateId" => 4081,
				"countryId" => 239,
				"name" => "Udon Thani",
				"code" => "UN"
			], [
				"stateId" => 4082,
				"countryId" => 239,
				"name" => "Sakon Nakhon",
				"code" => "SN"
			], [
				"stateId" => 4083,
				"countryId" => 239,
				"name" => "Nakhon Phanom",
				"code" => "NF"
			], [
				"stateId" => 4084,
				"countryId" => 239,
				"name" => "Khon Kaen",
				"code" => "KK"
			], [
				"stateId" => 4085,
				"countryId" => 239,
				"name" => "Kalasin",
				"code" => "KL"
			], [
				"stateId" => 4086,
				"countryId" => 239,
				"name" => "Maha Sarakham",
				"code" => "MS"
			], [
				"stateId" => 4087,
				"countryId" => 239,
				"name" => "Roi Et",
				"code" => "RE"
			], [
				"stateId" => 4088,
				"countryId" => 239,
				"name" => "Chaiyaphum",
				"code" => "CY"
			], [
				"stateId" => 4089,
				"countryId" => 239,
				"name" => "Nakhon Ratchasima",
				"code" => "NR"
			], [
				"stateId" => 4090,
				"countryId" => 239,
				"name" => "Buriram",
				"code" => "BR"
			], [
				"stateId" => 4091,
				"countryId" => 239,
				"name" => "Surin",
				"code" => "SU"
			], [
				"stateId" => 4092,
				"countryId" => 239,
				"name" => "Sisaket",
				"code" => "SI"
			], [
				"stateId" => 4093,
				"countryId" => 239,
				"name" => "Narathiwat",
				"code" => "NW"
			], [
				"stateId" => 4094,
				"countryId" => 239,
				"name" => "Chai Nat",
				"code" => "CN"
			], [
				"stateId" => 4095,
				"countryId" => 239,
				"name" => "Sing Buri",
				"code" => "SB"
			], [
				"stateId" => 4096,
				"countryId" => 239,
				"name" => "Lop Buri",
				"code" => "LB"
			], [
				"stateId" => 4097,
				"countryId" => 239,
				"name" => "Ang Thong",
				"code" => "AT"
			], [
				"stateId" => 4098,
				"countryId" => 239,
				"name" => "Phra Nakhon Si Ayutthaya",
				"code" => "PA"
			], [
				"stateId" => 4099,
				"countryId" => 239,
				"name" => "Sara Buri",
				"code" => "SR"
			], [
				"stateId" => 4100,
				"countryId" => 239,
				"name" => "Nonthaburi",
				"code" => "NO"
			], [
				"stateId" => 4101,
				"countryId" => 239,
				"name" => "Pathum Thani",
				"code" => "PT"
			], [
				"stateId" => 4102,
				"countryId" => 239,
				"name" => "Krung Thep Mahanakhon",
				"code" => "BM"
			], [
				"stateId" => 4103,
				"countryId" => 239,
				"name" => "Phayao",
				"code" => "PY"
			], [
				"stateId" => 4104,
				"countryId" => 239,
				"name" => "Samut Prakan",
				"code" => "SP"
			], [
				"stateId" => 4105,
				"countryId" => 239,
				"name" => "Nakhon Nayok",
				"code" => "NN"
			], [
				"stateId" => 4106,
				"countryId" => 239,
				"name" => "Chachoengsao",
				"code" => "CC"
			], [
				"stateId" => 4107,
				"countryId" => 239,
				"name" => "Prachin Buri",
				"code" => "PB"
			], [
				"stateId" => 4108,
				"countryId" => 239,
				"name" => "Chon Buri",
				"code" => "CB"
			], [
				"stateId" => 4109,
				"countryId" => 239,
				"name" => "Rayong",
				"code" => "RY"
			], [
				"stateId" => 4110,
				"countryId" => 239,
				"name" => "Chanthaburi",
				"code" => "CT"
			], [
				"stateId" => 4111,
				"countryId" => 239,
				"name" => "Trat",
				"code" => "TT"
			], [
				"stateId" => 4112,
				"countryId" => 239,
				"name" => "Kanchanaburi",
				"code" => "KN"
			], [
				"stateId" => 4113,
				"countryId" => 239,
				"name" => "Suphan Buri",
				"code" => "SH"
			], [
				"stateId" => 4114,
				"countryId" => 239,
				"name" => "Ratchaburi",
				"code" => "RT"
			], [
				"stateId" => 4115,
				"countryId" => 239,
				"name" => "Nakhon Pathom",
				"code" => "NP"
			], [
				"stateId" => 4116,
				"countryId" => 239,
				"name" => "Samut Songkhram",
				"code" => "SM"
			], [
				"stateId" => 4117,
				"countryId" => 239,
				"name" => "Samut Sakhon",
				"code" => "SS"
			], [
				"stateId" => 4118,
				"countryId" => 239,
				"name" => "Phetchaburi",
				"code" => "PE"
			], [
				"stateId" => 4119,
				"countryId" => 239,
				"name" => "Prachuap Khiri Khan",
				"code" => "PK"
			], [
				"stateId" => 4120,
				"countryId" => 239,
				"name" => "Chumphon",
				"code" => "CP"
			], [
				"stateId" => 4121,
				"countryId" => 239,
				"name" => "Ranong",
				"code" => "RN"
			], [
				"stateId" => 4122,
				"countryId" => 239,
				"name" => "Surat Thani",
				"code" => "ST"
			], [
				"stateId" => 4123,
				"countryId" => 239,
				"name" => "Phangnga",
				"code" => "PG"
			], [
				"stateId" => 4124,
				"countryId" => 239,
				"name" => "Phuket",
				"code" => "PU"
			], [
				"stateId" => 4125,
				"countryId" => 239,
				"name" => "Krabi",
				"code" => "KR"
			], [
				"stateId" => 4126,
				"countryId" => 239,
				"name" => "Nakon Si Thammarat",
				"code" => "NT"
			], [
				"stateId" => 4127,
				"countryId" => 239,
				"name" => "Trang",
				"code" => "TG"
			], [
				"stateId" => 4128,
				"countryId" => 239,
				"name" => "Phatthalung",
				"code" => "PL"
			], [
				"stateId" => 4129,
				"countryId" => 239,
				"name" => "Satun",
				"code" => "SA"
			], [
				"stateId" => 4130,
				"countryId" => 239,
				"name" => "Songkhla",
				"code" => "SG"
			], [
				"stateId" => 4131,
				"countryId" => 239,
				"name" => "Pattani",
				"code" => "PI"
			], [
				"stateId" => 4132,
				"countryId" => 239,
				"name" => "Yala",
				"code" => "YL"
			], [
				"stateId" => 4134,
				"countryId" => 239,
				"name" => "Yasothon",
				"code" => "YS"
			], [
				"stateId" => 4135,
				"countryId" => 239,
				"name" => "Ubon Ratchanthani",
				"code" => "UR"
			], [
				"stateId" => 4136,
				"countryId" => 239,
				"name" => "Amnat Charoen",
				"code" => "AC"
			], [
				"stateId" => 4137,
				"countryId" => 239,
				"name" => "Mukdahan",
				"code" => "MD"
			], [
				"stateId" => 4138,
				"countryId" => 239,
				"name" => "Nong Bua Lamphu",
				"code" => "NB"
			], [
				"stateId" => 4139,
				"countryId" => 239,
				"name" => "Sa Kaeo",
				"code" => "SK"
			], [
				"stateId" => 4140,
				"countryId" => 237,
				"name" => "Kuhistoni Badakhshon",
				"code" => "BK"
			], [
				"stateId" => 4141,
				"countryId" => 237,
				"name" => "Khatlon",
				"code" => "KL"
			], [
				"stateId" => 4142,
				"countryId" => 237,
				"name" => "Leninobod",
				"code" => "LE"
			], [
				"stateId" => 4143,
				"countryId" => 242,
				"name" => "Ha'apai",
				"code" => "HA"
			], [
				"stateId" => 4144,
				"countryId" => 242,
				"name" => "Tongatapu",
				"code" => "TT"
			], [
				"stateId" => 4145,
				"countryId" => 242,
				"name" => "Vava'u",
				"code" => "VA"
			], [
				"stateId" => 4167,
				"countryId" => 212,
				"name" => "Principe",
				"code" => "PR"
			], [
				"stateId" => 4168,
				"countryId" => 212,
				"name" => "Sao Tome",
				"code" => "ST"
			], [
				"stateId" => 4169,
				"countryId" => 245,
				"name" => "Al Qasrayn",
				"code" => "KS"
			], [
				"stateId" => 4170,
				"countryId" => 245,
				"name" => "Al Qayrawan",
				"code" => "KR"
			], [
				"stateId" => 4171,
				"countryId" => 245,
				"name" => "Jundubah",
				"code" => "JE"
			], [
				"stateId" => 4172,
				"countryId" => 245,
				"name" => "Al Kaf",
				"code" => "KF"
			], [
				"stateId" => 4173,
				"countryId" => 245,
				"name" => "Al Mahdiyah",
				"code" => "MH"
			], [
				"stateId" => 4174,
				"countryId" => 245,
				"name" => "Al Munastir",
				"code" => "MS"
			], [
				"stateId" => 4175,
				"countryId" => 245,
				"name" => "Bajah",
				"code" => "BJ"
			], [
				"stateId" => 4176,
				"countryId" => 245,
				"name" => "Banzart",
				"code" => "BZ"
			], [
				"stateId" => 4177,
				"countryId" => 245,
				"name" => "Nabul",
				"code" => "NB"
			], [
				"stateId" => 4178,
				"countryId" => 245,
				"name" => "Silyanah",
				"code" => "SL"
			], [
				"stateId" => 4179,
				"countryId" => 245,
				"name" => "Susah",
				"code" => "SS"
			], [
				"stateId" => 4180,
				"countryId" => 245,
				"name" => "Aryanah",
				"code" => "AN"
			], [
				"stateId" => 4181,
				"countryId" => 245,
				"name" => "Bin 'Arus",
				"code" => "BA"
			], [
				"stateId" => 4182,
				"countryId" => 245,
				"name" => "Madanin",
				"code" => "ME"
			], [
				"stateId" => 4183,
				"countryId" => 245,
				"name" => "Qabis",
				"code" => "GB"
			], [
				"stateId" => 4184,
				"countryId" => 245,
				"name" => "Qafsah",
				"code" => "QA"
			], [
				"stateId" => 4185,
				"countryId" => 245,
				"name" => "Qibili",
				"code" => "KB"
			], [
				"stateId" => 4186,
				"countryId" => 245,
				"name" => "Safaqi",
				"code" => "SF"
			], [
				"stateId" => 4187,
				"countryId" => 245,
				"name" => "Sidi Bu Zayd",
				"code" => "SZ"
			], [
				"stateId" => 4188,
				"countryId" => 245,
				"name" => "Tatawin",
				"code" => "TA"
			], [
				"stateId" => 4189,
				"countryId" => 245,
				"name" => "Tawzar",
				"code" => "TO"
			], [
				"stateId" => 4190,
				"countryId" => 245,
				"name" => "Tunis",
				"code" => "TU"
			], [
				"stateId" => 4191,
				"countryId" => 245,
				"name" => "Zaghwan",
				"code" => "ZA"
			], [
				"stateId" => 4192,
				"countryId" => 246,
				"name" => "Adana",
				"code" => "AA"
			], [
				"stateId" => 4193,
				"countryId" => 246,
				"name" => "Adiyaman",
				"code" => "AD"
			], [
				"stateId" => 4194,
				"countryId" => 246,
				"name" => "Afyon",
				"code" => "AF"
			], [
				"stateId" => 4195,
				"countryId" => 246,
				"name" => "Agri",
				"code" => "AG"
			], [
				"stateId" => 4196,
				"countryId" => 246,
				"name" => "Amasya",
				"code" => "AM"
			], [
				"stateId" => 4198,
				"countryId" => 246,
				"name" => "Antalya",
				"code" => "AL"
			], [
				"stateId" => 4199,
				"countryId" => 246,
				"name" => "Artvin",
				"code" => "AV"
			], [
				"stateId" => 4200,
				"countryId" => 246,
				"name" => "Aydin",
				"code" => "AY"
			], [
				"stateId" => 4201,
				"countryId" => 246,
				"name" => "Balikesir",
				"code" => "BK"
			], [
				"stateId" => 4202,
				"countryId" => 246,
				"name" => "Bilecik",
				"code" => "BC"
			], [
				"stateId" => 4203,
				"countryId" => 246,
				"name" => "Bingol",
				"code" => "BG"
			], [
				"stateId" => 4204,
				"countryId" => 246,
				"name" => "Bitlis",
				"code" => "BT"
			], [
				"stateId" => 4205,
				"countryId" => 246,
				"name" => "Bolu",
				"code" => "BL"
			], [
				"stateId" => 4206,
				"countryId" => 246,
				"name" => "Burdur",
				"code" => "BD"
			], [
				"stateId" => 4207,
				"countryId" => 246,
				"name" => "Bursa",
				"code" => "BU"
			], [
				"stateId" => 4208,
				"countryId" => 246,
				"name" => "Canakkale",
				"code" => "CK"
			], [
				"stateId" => 4209,
				"countryId" => 246,
				"name" => "Cankiri",
				"code" => "CI"
			], [
				"stateId" => 4210,
				"countryId" => 246,
				"name" => "Corum",
				"code" => "CM"
			], [
				"stateId" => 4211,
				"countryId" => 246,
				"name" => "Denizli",
				"code" => "DN"
			], [
				"stateId" => 4212,
				"countryId" => 246,
				"name" => "Diyarbakir",
				"code" => "DY"
			], [
				"stateId" => 4213,
				"countryId" => 246,
				"name" => "Edirne",
				"code" => "ED"
			], [
				"stateId" => 4214,
				"countryId" => 246,
				"name" => "Elazig",
				"code" => "EG"
			], [
				"stateId" => 4215,
				"countryId" => 246,
				"name" => "Erzincan",
				"code" => "EN"
			], [
				"stateId" => 4216,
				"countryId" => 246,
				"name" => "Erzurum",
				"code" => "EM"
			], [
				"stateId" => 4217,
				"countryId" => 246,
				"name" => "Eskisehir",
				"code" => "ES"
			], [
				"stateId" => 4218,
				"countryId" => 246,
				"name" => "Gaziantep",
				"code" => "GA"
			], [
				"stateId" => 4219,
				"countryId" => 246,
				"name" => "Giresun",
				"code" => "GI"
			], [
				"stateId" => 4222,
				"countryId" => 246,
				"name" => "Hatay",
				"code" => "HT"
			], [
				"stateId" => 4223,
				"countryId" => 246,
				"name" => "Icel",
				"code" => "IC"
			], [
				"stateId" => 4224,
				"countryId" => 246,
				"name" => "Isparta",
				"code" => "IP"
			], [
				"stateId" => 4225,
				"countryId" => 246,
				"name" => "Istanbul",
				"code" => "IB"
			], [
				"stateId" => 4226,
				"countryId" => 246,
				"name" => "Izmir",
				"code" => "IZ"
			], [
				"stateId" => 4227,
				"countryId" => 246,
				"name" => "Kars",
				"code" => "KA"
			], [
				"stateId" => 4228,
				"countryId" => 246,
				"name" => "Kastamonu",
				"code" => "KS"
			], [
				"stateId" => 4229,
				"countryId" => 246,
				"name" => "Kayseri",
				"code" => "KY"
			], [
				"stateId" => 4230,
				"countryId" => 246,
				"name" => "Kirklareli",
				"code" => "KL"
			], [
				"stateId" => 4231,
				"countryId" => 246,
				"name" => "Kirsehir",
				"code" => "KH"
			], [
				"stateId" => 4232,
				"countryId" => 246,
				"name" => "Kocaeli",
				"code" => "KC"
			], [
				"stateId" => 4234,
				"countryId" => 246,
				"name" => "Kutahya",
				"code" => "KU"
			], [
				"stateId" => 4235,
				"countryId" => 246,
				"name" => "Malatya",
				"code" => "ML"
			], [
				"stateId" => 4236,
				"countryId" => 246,
				"name" => "Manisa",
				"code" => "MN"
			], [
				"stateId" => 4237,
				"countryId" => 246,
				"name" => "Kahramanmaras",
				"code" => "KM"
			], [
				"stateId" => 4239,
				"countryId" => 246,
				"name" => "Mugla",
				"code" => "MG"
			], [
				"stateId" => 4240,
				"countryId" => 246,
				"name" => "Mus",
				"code" => "MS"
			], [
				"stateId" => 4241,
				"countryId" => 246,
				"name" => "Nevsehir",
				"code" => "NV"
			], [
				"stateId" => 4243,
				"countryId" => 246,
				"name" => "Ordu",
				"code" => "OR"
			], [
				"stateId" => 4244,
				"countryId" => 246,
				"name" => "Rize",
				"code" => "RI"
			], [
				"stateId" => 4245,
				"countryId" => 246,
				"name" => "Sakarya",
				"code" => "SK"
			], [
				"stateId" => 4246,
				"countryId" => 246,
				"name" => "Samsun",
				"code" => "SS"
			], [
				"stateId" => 4248,
				"countryId" => 246,
				"name" => "Sinop",
				"code" => "SP"
			], [
				"stateId" => 4249,
				"countryId" => 246,
				"name" => "Sivas",
				"code" => "SV"
			], [
				"stateId" => 4250,
				"countryId" => 246,
				"name" => "Tekirdag",
				"code" => "TG"
			], [
				"stateId" => 4251,
				"countryId" => 246,
				"name" => "Tokat",
				"code" => "TT"
			], [
				"stateId" => 4252,
				"countryId" => 246,
				"name" => "Trabzon",
				"code" => "TB"
			], [
				"stateId" => 4253,
				"countryId" => 246,
				"name" => "Tunceli",
				"code" => "TC"
			], [
				"stateId" => 4254,
				"countryId" => 246,
				"name" => "Sanliurfa",
				"code" => "SU"
			], [
				"stateId" => 4255,
				"countryId" => 246,
				"name" => "Usak",
				"code" => "US"
			], [
				"stateId" => 4256,
				"countryId" => 246,
				"name" => "Van",
				"code" => "VA"
			], [
				"stateId" => 4257,
				"countryId" => 246,
				"name" => "Yozgat",
				"code" => "YZ"
			], [
				"stateId" => 4258,
				"countryId" => 246,
				"name" => "Zonguldak",
				"code" => "ZO"
			], [
				"stateId" => 4259,
				"countryId" => 246,
				"name" => "Ankara",
				"code" => "AN"
			], [
				"stateId" => 4260,
				"countryId" => 246,
				"name" => "Gumushane",
				"code" => "GU"
			], [
				"stateId" => 4261,
				"countryId" => 246,
				"name" => "Hakkari",
				"code" => "HK"
			], [
				"stateId" => 4262,
				"countryId" => 246,
				"name" => "Konya",
				"code" => "KO"
			], [
				"stateId" => 4263,
				"countryId" => 246,
				"name" => "Mardin",
				"code" => "MR"
			], [
				"stateId" => 4264,
				"countryId" => 246,
				"name" => "Nigde",
				"code" => "NG"
			], [
				"stateId" => 4265,
				"countryId" => 246,
				"name" => "Siirt",
				"code" => "SI"
			], [
				"stateId" => 4266,
				"countryId" => 246,
				"name" => "Aksaray",
				"code" => "AK"
			], [
				"stateId" => 4267,
				"countryId" => 246,
				"name" => "Batman",
				"code" => "BM"
			], [
				"stateId" => 4268,
				"countryId" => 246,
				"name" => "Bayburt",
				"code" => "BB"
			], [
				"stateId" => 4269,
				"countryId" => 246,
				"name" => "Karaman",
				"code" => "KR"
			], [
				"stateId" => 4270,
				"countryId" => 246,
				"name" => "Kirikkale",
				"code" => "KK"
			], [
				"stateId" => 4271,
				"countryId" => 246,
				"name" => "Sirnak",
				"code" => "SR"
			], [
				"stateId" => 4272,
				"countryId" => 236,
				"name" => "Fu-chien",
				"code" => "FK"
			], [
				"stateId" => 4273,
				"countryId" => 236,
				"name" => "Kao-hsiung",
				"code" => "KH"
			], [
				"stateId" => 4274,
				"countryId" => 236,
				"name" => "T'ai-pei",
				"code" => "TP"
			], [
				"stateId" => 4275,
				"countryId" => 236,
				"name" => "T'ai-wan",
				"code" => "TA"
			], [
				"stateId" => 4276,
				"countryId" => 238,
				"name" => "Arusha",
				"code" => "AR"
			], [
				"stateId" => 4277,
				"countryId" => 238,
				"name" => "Dar es Salaam",
				"code" => "DS"
			], [
				"stateId" => 4278,
				"countryId" => 238,
				"name" => "Dodoma",
				"code" => "DO"
			], [
				"stateId" => 4279,
				"countryId" => 238,
				"name" => "Iringa",
				"code" => "IR"
			], [
				"stateId" => 4280,
				"countryId" => 238,
				"name" => "Kigoma",
				"code" => "KM"
			], [
				"stateId" => 4281,
				"countryId" => 238,
				"name" => "Kilimanjaro",
				"code" => "KL"
			], [
				"stateId" => 4282,
				"countryId" => 238,
				"name" => "Lindi",
				"code" => "LI"
			], [
				"stateId" => 4283,
				"countryId" => 238,
				"name" => "Mara",
				"code" => "MA"
			], [
				"stateId" => 4284,
				"countryId" => 238,
				"name" => "Mbeya",
				"code" => "MB"
			], [
				"stateId" => 4285,
				"countryId" => 238,
				"name" => "Morogoro",
				"code" => "MO"
			], [
				"stateId" => 4286,
				"countryId" => 238,
				"name" => "Mtwara",
				"code" => "MT"
			], [
				"stateId" => 4287,
				"countryId" => 238,
				"name" => "Mwanza",
				"code" => "MW"
			], [
				"stateId" => 4288,
				"countryId" => 238,
				"name" => "Pemba North",
				"code" => "PN"
			], [
				"stateId" => 4289,
				"countryId" => 238,
				"name" => "Ruvuma",
				"code" => "RV"
			], [
				"stateId" => 4290,
				"countryId" => 238,
				"name" => "Shinyanga",
				"code" => "SH"
			], [
				"stateId" => 4291,
				"countryId" => 238,
				"name" => "Singida",
				"code" => "SD"
			], [
				"stateId" => 4292,
				"countryId" => 238,
				"name" => "Tabora",
				"code" => "TB"
			], [
				"stateId" => 4293,
				"countryId" => 238,
				"name" => "Tanga",
				"code" => "TN"
			], [
				"stateId" => 4294,
				"countryId" => 238,
				"name" => "Kagera",
				"code" => "KR"
			], [
				"stateId" => 4295,
				"countryId" => 238,
				"name" => "Pemba South",
				"code" => "PS"
			], [
				"stateId" => 4296,
				"countryId" => 238,
				"name" => "Zanzibar Central//South",
				"code" => "ZS"
			], [
				"stateId" => 4297,
				"countryId" => 238,
				"name" => "Zanzibar North",
				"code" => "ZN"
			], [
				"stateId" => 4298,
				"countryId" => 238,
				"name" => "Rukwa",
				"code" => "RK"
			], [
				"stateId" => 4299,
				"countryId" => 238,
				"name" => "Zanzibar Urban//West",
				"code" => "ZW"
			], [
				"stateId" => 4300,
				"countryId" => 250,
				"name" => "Apac",
				"code" => "AP"
			], [
				"stateId" => 4301,
				"countryId" => 250,
				"name" => "Arua",
				"code" => "AR"
			], [
				"stateId" => 4302,
				"countryId" => 250,
				"name" => "Bundibogyo",
				"code" => "BN"
			], [
				"stateId" => 4303,
				"countryId" => 250,
				"name" => "Bushenyi",
				"code" => "BS"
			], [
				"stateId" => 4304,
				"countryId" => 250,
				"name" => "Gulu",
				"code" => "GU"
			], [
				"stateId" => 4305,
				"countryId" => 250,
				"name" => "Hoima",
				"code" => "HO"
			], [
				"stateId" => 4306,
				"countryId" => 250,
				"name" => "Iganga",
				"code" => "IG"
			], [
				"stateId" => 4307,
				"countryId" => 250,
				"name" => "Jinja",
				"code" => "JI"
			], [
				"stateId" => 4308,
				"countryId" => 250,
				"name" => "Kabale",
				"code" => "KA"
			], [
				"stateId" => 4309,
				"countryId" => 250,
				"name" => "Kabarole",
				"code" => "KB"
			], [
				"stateId" => 4310,
				"countryId" => 250,
				"name" => "Kalangala",
				"code" => "KN"
			], [
				"stateId" => 4311,
				"countryId" => 250,
				"name" => "Kampala",
				"code" => "KM"
			], [
				"stateId" => 4312,
				"countryId" => 250,
				"name" => "Kamuli",
				"code" => "KL"
			], [
				"stateId" => 4313,
				"countryId" => 250,
				"name" => "Kapchorwa",
				"code" => "KC"
			], [
				"stateId" => 4314,
				"countryId" => 250,
				"name" => "Kasese",
				"code" => "KS"
			], [
				"stateId" => 4315,
				"countryId" => 250,
				"name" => "Kibale",
				"code" => "KI"
			], [
				"stateId" => 4316,
				"countryId" => 250,
				"name" => "Kiboga",
				"code" => "KG"
			], [
				"stateId" => 4317,
				"countryId" => 250,
				"name" => "Kisoro",
				"code" => "KR"
			], [
				"stateId" => 4318,
				"countryId" => 250,
				"name" => "Kitgum",
				"code" => "KT"
			], [
				"stateId" => 4319,
				"countryId" => 250,
				"name" => "Kotido",
				"code" => "KO"
			], [
				"stateId" => 4320,
				"countryId" => 250,
				"name" => "Kumi",
				"code" => "KU"
			], [
				"stateId" => 4321,
				"countryId" => 250,
				"name" => "Lira",
				"code" => "LI"
			], [
				"stateId" => 4322,
				"countryId" => 250,
				"name" => "Luwero",
				"code" => "LU"
			], [
				"stateId" => 4323,
				"countryId" => 250,
				"name" => "Masaka",
				"code" => "MA"
			], [
				"stateId" => 4324,
				"countryId" => 250,
				"name" => "Masindi",
				"code" => "MS"
			], [
				"stateId" => 4325,
				"countryId" => 250,
				"name" => "Mbale",
				"code" => "ML"
			], [
				"stateId" => 4326,
				"countryId" => 250,
				"name" => "Mbarara",
				"code" => "MR"
			], [
				"stateId" => 4327,
				"countryId" => 250,
				"name" => "Moroto",
				"code" => "MO"
			], [
				"stateId" => 4328,
				"countryId" => 250,
				"name" => "Moyo",
				"code" => "MY"
			], [
				"stateId" => 4329,
				"countryId" => 250,
				"name" => "Mpigi",
				"code" => "MP"
			], [
				"stateId" => 4330,
				"countryId" => 250,
				"name" => "Mubende",
				"code" => "MU"
			], [
				"stateId" => 4331,
				"countryId" => 250,
				"name" => "Mukono",
				"code" => "MK"
			], [
				"stateId" => 4332,
				"countryId" => 250,
				"name" => "Nebbi",
				"code" => "NE"
			], [
				"stateId" => 4333,
				"countryId" => 250,
				"name" => "Ntungamo",
				"code" => "NT"
			], [
				"stateId" => 4334,
				"countryId" => 250,
				"name" => "Pallisa",
				"code" => "PA"
			], [
				"stateId" => 4335,
				"countryId" => 250,
				"name" => "Rakai",
				"code" => "RA"
			], [
				"stateId" => 4336,
				"countryId" => 250,
				"name" => "Rukungiri",
				"code" => "RU"
			], [
				"stateId" => 4337,
				"countryId" => 250,
				"name" => "Soroti",
				"code" => "SO"
			], [
				"stateId" => 4338,
				"countryId" => 250,
				"name" => "Tororo",
				"code" => "TO"
			], [
				"stateId" => 4431,
				"countryId" => 251,
				"name" => "Cherkas'ka Oblast'",
				"code" => "CK"
			], [
				"stateId" => 4432,
				"countryId" => 251,
				"name" => "Chernihivs'ka Oblast'",
				"code" => "CH"
			], [
				"stateId" => 4433,
				"countryId" => 251,
				"name" => "Chernivets'ka Oblast'",
				"code" => "CV"
			], [
				"stateId" => 4434,
				"countryId" => 251,
				"name" => "Dnipropetrovs'ka Oblast'",
				"code" => "DP"
			], [
				"stateId" => 4435,
				"countryId" => 251,
				"name" => "Donets'ka Oblast'",
				"code" => "DT"
			], [
				"stateId" => 4436,
				"countryId" => 251,
				"name" => "Ivano-Frankivs'ka Oblast'",
				"code" => "IF"
			], [
				"stateId" => 4437,
				"countryId" => 251,
				"name" => "Kharkivs'ka Oblast'",
				"code" => "KK"
			], [
				"stateId" => 4438,
				"countryId" => 251,
				"name" => "Khersons'ka Oblast'",
				"code" => "KS"
			], [
				"stateId" => 4439,
				"countryId" => 251,
				"name" => "Khmel'nyts'ka Oblast'",
				"code" => "KM"
			], [
				"stateId" => 4440,
				"countryId" => 251,
				"name" => "Kirovohrads'ka Oblast'",
				"code" => "KH"
			], [
				"stateId" => 4441,
				"countryId" => 251,
				"name" => "Avtonomna Respublika Krym",
				"code" => "KR"
			], [
				"stateId" => 4442,
				"countryId" => 251,
				"name" => "Misto Kyyiv",
				"code" => "KC"
			], [
				"stateId" => 4443,
				"countryId" => 251,
				"name" => "Kyyivs'ka Oblast'",
				"code" => "KV"
			], [
				"stateId" => 4444,
				"countryId" => 251,
				"name" => "Luhans'ka Oblast'",
				"code" => "LH"
			], [
				"stateId" => 4445,
				"countryId" => 251,
				"name" => "L'vivs'ka Oblast'",
				"code" => "LV"
			], [
				"stateId" => 4446,
				"countryId" => 251,
				"name" => "Mykolayivs'ka Oblast'",
				"code" => "MY"
			], [
				"stateId" => 4447,
				"countryId" => 251,
				"name" => "Odes'ka Oblast",
				"code" => "OD"
			], [
				"stateId" => 4448,
				"countryId" => 251,
				"name" => "Poltavs'ka Oblast'",
				"code" => "PL"
			], [
				"stateId" => 4449,
				"countryId" => 251,
				"name" => "Rivnens'ka Oblast'",
				"code" => "RV"
			], [
				"stateId" => 4450,
				"countryId" => 251,
				"name" => "Misto Sevastopol",
				"code" => "SC"
			], [
				"stateId" => 4451,
				"countryId" => 251,
				"name" => "Sums'ka Oblast'",
				"code" => "SM"
			], [
				"stateId" => 4452,
				"countryId" => 251,
				"name" => "Ternopil's'ka Oblast'",
				"code" => "TP"
			], [
				"stateId" => 4453,
				"countryId" => 251,
				"name" => "Vinnyts'ka Oblast'",
				"code" => "VI"
			], [
				"stateId" => 4454,
				"countryId" => 251,
				"name" => "Volyns'ka Oblast'",
				"code" => "VO"
			], [
				"stateId" => 4455,
				"countryId" => 251,
				"name" => "Zakarpats'ka Oblast'",
				"code" => "ZK"
			], [
				"stateId" => 4456,
				"countryId" => 251,
				"name" => "Zaporiz'ka Oblast'",
				"code" => "ZP"
			], [
				"stateId" => 4457,
				"countryId" => 251,
				"name" => "Zhytomyrs'ka Oblast'",
				"code" => "ZT"
			], [
				"stateId" => 4458,
				"countryId" => 38,
				"name" => "Bam",
				"code" => "BM"
			], [
				"stateId" => 4459,
				"countryId" => 38,
				"name" => "Bazega",
				"code" => "BZ"
			], [
				"stateId" => 4460,
				"countryId" => 38,
				"name" => "Bougouriba",
				"code" => "BB"
			], [
				"stateId" => 4461,
				"countryId" => 38,
				"name" => "Boulgou",
				"code" => "BL"
			], [
				"stateId" => 4462,
				"countryId" => 38,
				"name" => "Boulkiemde",
				"code" => "BK"
			], [
				"stateId" => 4463,
				"countryId" => 38,
				"name" => "Ganzourgou",
				"code" => "GZ"
			], [
				"stateId" => 4464,
				"countryId" => 38,
				"name" => "Gnagna",
				"code" => "GG"
			], [
				"stateId" => 4465,
				"countryId" => 38,
				"name" => "Gourma",
				"code" => "GM"
			], [
				"stateId" => 4466,
				"countryId" => 38,
				"name" => "Houe",
				"code" => "HO"
			], [
				"stateId" => 4467,
				"countryId" => 38,
				"name" => "Kadiogo",
				"code" => "KA"
			], [
				"stateId" => 4468,
				"countryId" => 38,
				"name" => "Kenedougou",
				"code" => "KN"
			], [
				"stateId" => 4469,
				"countryId" => 38,
				"name" => "Komoe",
				"code" => "KM"
			], [
				"stateId" => 4470,
				"countryId" => 38,
				"name" => "Kossi",
				"code" => "KS"
			], [
				"stateId" => 4471,
				"countryId" => 38,
				"name" => "Kouritenga",
				"code" => "KR"
			], [
				"stateId" => 4472,
				"countryId" => 38,
				"name" => "Mouhoun",
				"code" => "MO"
			], [
				"stateId" => 4473,
				"countryId" => 38,
				"name" => "Namentenga",
				"code" => "NM"
			], [
				"stateId" => 4474,
				"countryId" => 38,
				"name" => "Naouri",
				"code" => "NR"
			], [
				"stateId" => 4475,
				"countryId" => 38,
				"name" => "Oubritenga",
				"code" => "OB"
			], [
				"stateId" => 4476,
				"countryId" => 38,
				"name" => "Oudalan",
				"code" => "OD"
			], [
				"stateId" => 4477,
				"countryId" => 38,
				"name" => "Passore",
				"code" => "PA"
			], [
				"stateId" => 4478,
				"countryId" => 38,
				"name" => "Poni",
				"code" => "PO"
			], [
				"stateId" => 4479,
				"countryId" => 38,
				"name" => "Sanguie",
				"code" => "SG"
			], [
				"stateId" => 4480,
				"countryId" => 38,
				"name" => "Sanmatenga",
				"code" => "ST"
			], [
				"stateId" => 4481,
				"countryId" => 38,
				"name" => "Seno",
				"code" => "SE"
			], [
				"stateId" => 4482,
				"countryId" => 38,
				"name" => "Sissili",
				"code" => "SS"
			], [
				"stateId" => 4483,
				"countryId" => 38,
				"name" => "Soum",
				"code" => "SM"
			], [
				"stateId" => 4484,
				"countryId" => 38,
				"name" => "Sourou",
				"code" => "SR"
			], [
				"stateId" => 4485,
				"countryId" => 38,
				"name" => "Tapoa",
				"code" => "TA"
			], [
				"stateId" => 4486,
				"countryId" => 38,
				"name" => "Yatenga",
				"code" => "YT"
			], [
				"stateId" => 4487,
				"countryId" => 38,
				"name" => "Zoundweogo",
				"code" => "ZW"
			], [
				"stateId" => 4488,
				"countryId" => 256,
				"name" => "Artigas",
				"code" => "AR"
			], [
				"stateId" => 4489,
				"countryId" => 256,
				"name" => "Canelones",
				"code" => "CA"
			], [
				"stateId" => 4490,
				"countryId" => 256,
				"name" => "Cerro Largo",
				"code" => "CL"
			], [
				"stateId" => 4491,
				"countryId" => 256,
				"name" => "Colonia",
				"code" => "CO"
			], [
				"stateId" => 4492,
				"countryId" => 256,
				"name" => "Durazno",
				"code" => "DU"
			], [
				"stateId" => 4493,
				"countryId" => 256,
				"name" => "Flores",
				"code" => "FS"
			], [
				"stateId" => 4494,
				"countryId" => 256,
				"name" => "Florida",
				"code" => "FD"
			], [
				"stateId" => 4495,
				"countryId" => 256,
				"name" => "Lavalleja",
				"code" => "LA"
			], [
				"stateId" => 4496,
				"countryId" => 256,
				"name" => "Maldonado",
				"code" => "MA"
			], [
				"stateId" => 4497,
				"countryId" => 256,
				"name" => "Montevideo",
				"code" => "MO"
			], [
				"stateId" => 4498,
				"countryId" => 256,
				"name" => "Paysandu",
				"code" => "PA"
			], [
				"stateId" => 4499,
				"countryId" => 256,
				"name" => "Rio Negro",
				"code" => "RN"
			], [
				"stateId" => 4500,
				"countryId" => 256,
				"name" => "Rivera",
				"code" => "RV"
			], [
				"stateId" => 4501,
				"countryId" => 256,
				"name" => "Rocha",
				"code" => "RO"
			], [
				"stateId" => 4502,
				"countryId" => 256,
				"name" => "Salto",
				"code" => "SA"
			], [
				"stateId" => 4503,
				"countryId" => 256,
				"name" => "San Jose",
				"code" => "SJ"
			], [
				"stateId" => 4504,
				"countryId" => 256,
				"name" => "Soriano",
				"code" => "SO"
			], [
				"stateId" => 4505,
				"countryId" => 256,
				"name" => "Tacuarembo",
				"code" => "TA"
			], [
				"stateId" => 4506,
				"countryId" => 256,
				"name" => "Treinta y Tres",
				"code" => "TT"
			], [
				"stateId" => 4507,
				"countryId" => 257,
				"name" => "Andijon",
				"code" => "AN"
			], [
				"stateId" => 4508,
				"countryId" => 257,
				"name" => "Bukhoro",
				"code" => "BU"
			], [
				"stateId" => 4509,
				"countryId" => 257,
				"name" => "Farghona",
				"code" => "FA"
			], [
				"stateId" => 4510,
				"countryId" => 257,
				"name" => "Jizzakh",
				"code" => "JI"
			], [
				"stateId" => 4511,
				"countryId" => 257,
				"name" => "Khorazm",
				"code" => "KH"
			], [
				"stateId" => 4512,
				"countryId" => 257,
				"name" => "Namangan",
				"code" => "NG"
			], [
				"stateId" => 4513,
				"countryId" => 257,
				"name" => "Nawoiy",
				"code" => "NW"
			], [
				"stateId" => 4514,
				"countryId" => 257,
				"name" => "Qashqadaryo",
				"code" => "QA"
			], [
				"stateId" => 4515,
				"countryId" => 257,
				"name" => "Qoraqalpoghiston",
				"code" => "QR"
			], [
				"stateId" => 4516,
				"countryId" => 257,
				"name" => "Samarqand",
				"code" => "SA"
			], [
				"stateId" => 4517,
				"countryId" => 257,
				"name" => "Sirdaryo",
				"code" => "SI"
			], [
				"stateId" => 4518,
				"countryId" => 257,
				"name" => "Surkhondaryo",
				"code" => "SU"
			], [
				"stateId" => 4519,
				"countryId" => 257,
				"name" => "Toshkent",
				"code" => "TO"
			], [
				"stateId" => 4520,
				"countryId" => 209,
				"name" => "Charlotte",
				"code" => "CH"
			], [
				"stateId" => 4521,
				"countryId" => 209,
				"name" => "Saint Andrew",
				"code" => "AN"
			], [
				"stateId" => 4522,
				"countryId" => 209,
				"name" => "Saint David",
				"code" => "DA"
			], [
				"stateId" => 4523,
				"countryId" => 209,
				"name" => "Saint George",
				"code" => "GE"
			], [
				"stateId" => 4524,
				"countryId" => 209,
				"name" => "Saint Patrick",
				"code" => "PA"
			], [
				"stateId" => 4525,
				"countryId" => 209,
				"name" => "Grenadines",
				"code" => "GT"
			], [
				"stateId" => 4526,
				"countryId" => 259,
				"name" => "Amazonas",
				"code" => "AM"
			], [
				"stateId" => 4527,
				"countryId" => 259,
				"name" => "Anzoategui",
				"code" => "AN"
			], [
				"stateId" => 4528,
				"countryId" => 259,
				"name" => "Apure",
				"code" => "AP"
			], [
				"stateId" => 4529,
				"countryId" => 259,
				"name" => "Aragua",
				"code" => "AR"
			], [
				"stateId" => 4530,
				"countryId" => 259,
				"name" => "Barinas",
				"code" => "BA"
			], [
				"stateId" => 4531,
				"countryId" => 259,
				"name" => "Bolivar",
				"code" => "BO"
			], [
				"stateId" => 4532,
				"countryId" => 259,
				"name" => "Carabobo",
				"code" => "CA"
			], [
				"stateId" => 4533,
				"countryId" => 259,
				"name" => "Cojedes",
				"code" => "CO"
			], [
				"stateId" => 4534,
				"countryId" => 259,
				"name" => "Delta Amacuro",
				"code" => "DA"
			], [
				"stateId" => 4535,
				"countryId" => 259,
				"name" => "Distrito Federal",
				"code" => "DF"
			], [
				"stateId" => 4536,
				"countryId" => 259,
				"name" => "Falcon",
				"code" => "FA"
			], [
				"stateId" => 4537,
				"countryId" => 259,
				"name" => "Guarico",
				"code" => "GU"
			], [
				"stateId" => 4538,
				"countryId" => 259,
				"name" => "Lara",
				"code" => "LA"
			], [
				"stateId" => 4539,
				"countryId" => 259,
				"name" => "Merida",
				"code" => "ME"
			], [
				"stateId" => 4540,
				"countryId" => 259,
				"name" => "Miranda",
				"code" => "MI"
			], [
				"stateId" => 4541,
				"countryId" => 259,
				"name" => "Monagas",
				"code" => "MO"
			], [
				"stateId" => 4542,
				"countryId" => 259,
				"name" => "Nueva Esparta",
				"code" => "NE"
			], [
				"stateId" => 4543,
				"countryId" => 259,
				"name" => "Portuguesa",
				"code" => "PO"
			], [
				"stateId" => 4544,
				"countryId" => 259,
				"name" => "Sucre",
				"code" => "SU"
			], [
				"stateId" => 4545,
				"countryId" => 259,
				"name" => "Tachira",
				"code" => "TA"
			], [
				"stateId" => 4546,
				"countryId" => 259,
				"name" => "Trujillo",
				"code" => "TR"
			], [
				"stateId" => 4547,
				"countryId" => 259,
				"name" => "Yaracuy",
				"code" => "YA"
			], [
				"stateId" => 4548,
				"countryId" => 259,
				"name" => "Zulia",
				"code" => "ZU"
			], [
				"stateId" => 4549,
				"countryId" => 259,
				"name" => "Dependencias Federales",
				"code" => "DP"
			], [
				"stateId" => 4551,
				"countryId" => 260,
				"name" => "An Giang",
				"code" => "AG"
			], [
				"stateId" => 4553,
				"countryId" => 260,
				"name" => "Ben Tre",
				"code" => "BR"
			], [
				"stateId" => 4555,
				"countryId" => 260,
				"name" => "Cao Bang",
				"code" => "CB"
			], [
				"stateId" => 4557,
				"countryId" => 260,
				"name" => "Dak Lak",
				"code" => "DL"
			], [
				"stateId" => 4558,
				"countryId" => 260,
				"name" => "Dong Thap",
				"code" => "DT"
			], [
				"stateId" => 4562,
				"countryId" => 260,
				"name" => "Hai Phong",
				"code" => "HP"
			], [
				"stateId" => 4564,
				"countryId" => 260,
				"name" => "Ha Noi",
				"code" => "HN"
			], [
				"stateId" => 4568,
				"countryId" => 260,
				"name" => "Ho Chi Minh",
				"code" => "HC"
			], [
				"stateId" => 4569,
				"countryId" => 260,
				"name" => "Kien Giang",
				"code" => "KG"
			], [
				"stateId" => 4570,
				"countryId" => 260,
				"name" => "Lai Chau",
				"code" => "LC"
			], [
				"stateId" => 4571,
				"countryId" => 260,
				"name" => "Lam Dong",
				"code" => "LD"
			], [
				"stateId" => 4572,
				"countryId" => 260,
				"name" => "Long An",
				"code" => "LA"
			], [
				"stateId" => 4578,
				"countryId" => 260,
				"name" => "Quang Ninh",
				"code" => "QN"
			], [
				"stateId" => 4580,
				"countryId" => 260,
				"name" => "Son La",
				"code" => "SL"
			], [
				"stateId" => 4581,
				"countryId" => 260,
				"name" => "Tay Ninh",
				"code" => "TN"
			], [
				"stateId" => 4582,
				"countryId" => 260,
				"name" => "Thanh Hoa",
				"code" => "TH"
			], [
				"stateId" => 4583,
				"countryId" => 260,
				"name" => "Thai Binh",
				"code" => "TB"
			], [
				"stateId" => 4585,
				"countryId" => 260,
				"name" => "Tien Giang",
				"code" => "TG"
			], [
				"stateId" => 4587,
				"countryId" => 260,
				"name" => "Lang Son",
				"code" => "LS"
			], [
				"stateId" => 4590,
				"countryId" => 260,
				"name" => "Dong Nai",
				"code" => "DN"
			], [
				"stateId" => 4591,
				"countryId" => 260,
				"name" => "Ba Ria-Vung Tau",
				"code" => "BV"
			], [
				"stateId" => 4592,
				"countryId" => 260,
				"name" => "Binh Dinh",
				"code" => "BD"
			], [
				"stateId" => 4593,
				"countryId" => 260,
				"name" => "Binh Thuan",
				"code" => "BU"
			], [
				"stateId" => 4594,
				"countryId" => 260,
				"name" => "Can Tho",
				"code" => "CT"
			], [
				"stateId" => 4595,
				"countryId" => 260,
				"name" => "Gia Lai",
				"code" => "GL"
			], [
				"stateId" => 4596,
				"countryId" => 260,
				"name" => "Ha Giang",
				"code" => "HG"
			], [
				"stateId" => 4597,
				"countryId" => 260,
				"name" => "Ha Tay",
				"code" => "HA"
			], [
				"stateId" => 4598,
				"countryId" => 260,
				"name" => "Ha Tinh",
				"code" => "HT"
			], [
				"stateId" => 4599,
				"countryId" => 260,
				"name" => "Hoa Binh",
				"code" => "HO"
			], [
				"stateId" => 4600,
				"countryId" => 260,
				"name" => "Khanh Hoa",
				"code" => "KH"
			], [
				"stateId" => 4601,
				"countryId" => 260,
				"name" => "Kon Tum",
				"code" => "KT"
			], [
				"stateId" => 4602,
				"countryId" => 260,
				"name" => "Lao Cai",
				"code" => "LO"
			], [
				"stateId" => 4604,
				"countryId" => 260,
				"name" => "Nghe An",
				"code" => "NA"
			], [
				"stateId" => 4605,
				"countryId" => 260,
				"name" => "Ninh Binh",
				"code" => "NB"
			], [
				"stateId" => 4606,
				"countryId" => 260,
				"name" => "Ninh Thuan",
				"code" => "NT"
			], [
				"stateId" => 4607,
				"countryId" => 260,
				"name" => "Phu Yen",
				"code" => "PY"
			], [
				"stateId" => 4608,
				"countryId" => 260,
				"name" => "Quang Binh",
				"code" => "QB"
			], [
				"stateId" => 4609,
				"countryId" => 260,
				"name" => "Quang Ngai",
				"code" => "QG"
			], [
				"stateId" => 4610,
				"countryId" => 260,
				"name" => "Quang Tri",
				"code" => "QT"
			], [
				"stateId" => 4611,
				"countryId" => 260,
				"name" => "Soc Trang",
				"code" => "ST"
			], [
				"stateId" => 4612,
				"countryId" => 260,
				"name" => "Thura Thien-Hue",
				"code" => "TT"
			], [
				"stateId" => 4613,
				"countryId" => 260,
				"name" => "Tra Vinh",
				"code" => "TV"
			], [
				"stateId" => 4614,
				"countryId" => 260,
				"name" => "Tuyen Quang",
				"code" => "TQ"
			], [
				"stateId" => 4615,
				"countryId" => 260,
				"name" => "Vinh Long",
				"code" => "VL"
			], [
				"stateId" => 4616,
				"countryId" => 260,
				"name" => "Yen Bai",
				"code" => "YB"
			], [
				"stateId" => 4617,
				"countryId" => 260,
				"name" => "Bac Giang",
				"code" => "BG"
			], [
				"stateId" => 4618,
				"countryId" => 260,
				"name" => "Bac Kan",
				"code" => "BK"
			], [
				"stateId" => 4619,
				"countryId" => 260,
				"name" => "Bac Lieu",
				"code" => "BL"
			], [
				"stateId" => 4620,
				"countryId" => 260,
				"name" => "Bac Ninh",
				"code" => "BN"
			], [
				"stateId" => 4621,
				"countryId" => 260,
				"name" => "Bin Duong",
				"code" => "BI"
			], [
				"stateId" => 4622,
				"countryId" => 260,
				"name" => "Bin Phuoc",
				"code" => "BP"
			], [
				"stateId" => 4623,
				"countryId" => 260,
				"name" => "Ca Mau",
				"code" => "CM"
			], [
				"stateId" => 4624,
				"countryId" => 260,
				"name" => "Da Nang",
				"code" => "DA"
			], [
				"stateId" => 4625,
				"countryId" => 260,
				"name" => "Hai Duong",
				"code" => "HD"
			], [
				"stateId" => 4626,
				"countryId" => 260,
				"name" => "Ha Nam",
				"code" => "HM"
			], [
				"stateId" => 4627,
				"countryId" => 260,
				"name" => "Hung Yen",
				"code" => "HY"
			], [
				"stateId" => 4628,
				"countryId" => 260,
				"name" => "Nam Dinh",
				"code" => "ND"
			], [
				"stateId" => 4629,
				"countryId" => 260,
				"name" => "Phu Tho",
				"code" => "PT"
			], [
				"stateId" => 4630,
				"countryId" => 260,
				"name" => "Quang Nam",
				"code" => "QM"
			], [
				"stateId" => 4631,
				"countryId" => 260,
				"name" => "Thai Nguyen",
				"code" => "TY"
			], [
				"stateId" => 4632,
				"countryId" => 260,
				"name" => "Vinh Phuc",
				"code" => "VC"
			], [
				"stateId" => 4635,
				"countryId" => 171,
				"name" => "Khomas",
				"code" => "KH"
			], [
				"stateId" => 4636,
				"countryId" => 171,
				"name" => "Caprivi",
				"code" => "CA"
			], [
				"stateId" => 4637,
				"countryId" => 171,
				"name" => "Erongo",
				"code" => "ER"
			], [
				"stateId" => 4638,
				"countryId" => 171,
				"name" => "Hardap",
				"code" => "HA"
			], [
				"stateId" => 4639,
				"countryId" => 171,
				"name" => "Karas",
				"code" => "KA"
			], [
				"stateId" => 4640,
				"countryId" => 171,
				"name" => "Kunene",
				"code" => "KU"
			], [
				"stateId" => 4641,
				"countryId" => 171,
				"name" => "Ohangwena",
				"code" => "OW"
			], [
				"stateId" => 4642,
				"countryId" => 171,
				"name" => "Okavango",
				"code" => "OK"
			], [
				"stateId" => 4643,
				"countryId" => 171,
				"name" => "Omaheke",
				"code" => "OH"
			], [
				"stateId" => 4644,
				"countryId" => 171,
				"name" => "Omusati",
				"code" => "OS"
			], [
				"stateId" => 4645,
				"countryId" => 171,
				"name" => "Oshana",
				"code" => "ON"
			], [
				"stateId" => 4646,
				"countryId" => 171,
				"name" => "Oshikoto",
				"code" => "OT"
			], [
				"stateId" => 4647,
				"countryId" => 171,
				"name" => "Otjozondjupa",
				"code" => "OD"
			], [
				"stateId" => 4648,
				"countryId" => 210,
				"name" => "A'ana",
				"code" => "AA"
			], [
				"stateId" => 4649,
				"countryId" => 210,
				"name" => "Aiga-i-le-Tai",
				"code" => "AL"
			], [
				"stateId" => 4650,
				"countryId" => 210,
				"name" => "Atua",
				"code" => "AT"
			], [
				"stateId" => 4651,
				"countryId" => 210,
				"name" => "Fa'asaleleaga",
				"code" => "FA"
			], [
				"stateId" => 4652,
				"countryId" => 210,
				"name" => "Gaga'emauga",
				"code" => "GE"
			], [
				"stateId" => 4653,
				"countryId" => 210,
				"name" => "Va'a-o-Fonoti",
				"code" => "VF"
			], [
				"stateId" => 4654,
				"countryId" => 210,
				"name" => "Gagaifomauga",
				"code" => "GI"
			], [
				"stateId" => 4655,
				"countryId" => 210,
				"name" => "Palauli",
				"code" => "PA"
			], [
				"stateId" => 4656,
				"countryId" => 210,
				"name" => "Satupa'itea",
				"code" => "SA"
			], [
				"stateId" => 4657,
				"countryId" => 210,
				"name" => "Tuamasaga",
				"code" => "TU"
			], [
				"stateId" => 4658,
				"countryId" => 210,
				"name" => "Vaisigano",
				"code" => "VS"
			], [
				"stateId" => 4659,
				"countryId" => 232,
				"name" => "Hhohho",
				"code" => "HH"
			], [
				"stateId" => 4660,
				"countryId" => 232,
				"name" => "Lubombo",
				"code" => "LU"
			], [
				"stateId" => 4661,
				"countryId" => 232,
				"name" => "Manzini",
				"code" => "MA"
			], [
				"stateId" => 4662,
				"countryId" => 232,
				"name" => "Shiselweni",
				"code" => "SH"
			], [
				"stateId" => 4663,
				"countryId" => 270,
				"name" => "Abyan",
				"code" => "AB"
			], [
				"stateId" => 4664,
				"countryId" => 270,
				"name" => "'Adan",
				"code" => "AD"
			], [
				"stateId" => 4665,
				"countryId" => 270,
				"name" => "Al Mahrah",
				"code" => "MR"
			], [
				"stateId" => 4666,
				"countryId" => 270,
				"name" => "Hadramawt",
				"code" => "HD"
			], [
				"stateId" => 4667,
				"countryId" => 270,
				"name" => "Shabwah",
				"code" => "SH"
			], [
				"stateId" => 4668,
				"countryId" => 270,
				"name" => "Lahij",
				"code" => "LA"
			], [
				"stateId" => 4669,
				"countryId" => 270,
				"name" => "Al Bayda'",
				"code" => "BA"
			], [
				"stateId" => 4670,
				"countryId" => 270,
				"name" => "Al Hudaydah",
				"code" => "HU"
			], [
				"stateId" => 4671,
				"countryId" => 270,
				"name" => "Al Jawf",
				"code" => "JA"
			], [
				"stateId" => 4672,
				"countryId" => 270,
				"name" => "Al Mahwit",
				"code" => "MW"
			], [
				"stateId" => 4673,
				"countryId" => 270,
				"name" => "Dhamar",
				"code" => "DH"
			], [
				"stateId" => 4674,
				"countryId" => 270,
				"name" => "Hajjah",
				"code" => "HJ"
			], [
				"stateId" => 4675,
				"countryId" => 270,
				"name" => "Ibb",
				"code" => "IB"
			], [
				"stateId" => 4676,
				"countryId" => 270,
				"name" => "Ma'rib",
				"code" => "MA"
			], [
				"stateId" => 4677,
				"countryId" => 270,
				"name" => "Sa'dah",
				"code" => "SD"
			], [
				"stateId" => 4678,
				"countryId" => 270,
				"name" => "San'a'",
				"code" => "SN"
			], [
				"stateId" => 4679,
				"countryId" => 270,
				"name" => "Ta'izz",
				"code" => "TA"
			], [
				"stateId" => 4680,
				"countryId" => 273,
				"name" => "North-Western",
				"code" => "WE"
			], [
				"stateId" => 4681,
				"countryId" => 273,
				"name" => "Copperbelt",
				"code" => "CE"
			], [
				"stateId" => 4682,
				"countryId" => 273,
				"name" => "Western",
				"code" => "EA"
			], [
				"stateId" => 4683,
				"countryId" => 273,
				"name" => "Southern",
				"code" => "LP"
			], [
				"stateId" => 4684,
				"countryId" => 273,
				"name" => "Central",
				"code" => "NO"
			], [
				"stateId" => 4685,
				"countryId" => 273,
				"name" => "Eastern",
				"code" => "NW"
			], [
				"stateId" => 4686,
				"countryId" => 273,
				"name" => "Northern",
				"code" => "SO"
			], [
				"stateId" => 4687,
				"countryId" => 273,
				"name" => "Luapula",
				"code" => "CO"
			], [
				"stateId" => 4688,
				"countryId" => 273,
				"name" => "Lusaka",
				"code" => "LS"
			], [
				"stateId" => 4689,
				"countryId" => 274,
				"name" => "Manicaland",
				"code" => "MA"
			], [
				"stateId" => 4690,
				"countryId" => 274,
				"name" => "Midlands",
				"code" => "MI"
			], [
				"stateId" => 4691,
				"countryId" => 274,
				"name" => "Mashonaland Central",
				"code" => "MC"
			], [
				"stateId" => 4692,
				"countryId" => 274,
				"name" => "Mashonaland East",
				"code" => "ME"
			], [
				"stateId" => 4693,
				"countryId" => 274,
				"name" => "Mashonaland West",
				"code" => "MW"
			], [
				"stateId" => 4694,
				"countryId" => 274,
				"name" => "Matabeleland North",
				"code" => "MN"
			], [
				"stateId" => 4695,
				"countryId" => 274,
				"name" => "Matabeleland South",
				"code" => "MS"
			], [
				"stateId" => 4696,
				"countryId" => 274,
				"name" => "Masvingo",
				"code" => "MV"
			], [
				"stateId" => 4706,
				"countryId" => 178,
				"name" => "Auckland",
				"code" => "AU"
			], [
				"stateId" => 4721,
				"countryId" => 178,
				"name" => "Wellington",
				"code" => "WG"
			], [
				"stateId" => 4723,
				"countryId" => 178,
				"name" => "Canterbury",
				"code" => "CA"
			], [
				"stateId" => 4729,
				"countryId" => 178,
				"name" => "Bay of Plenty",
				"code" => "BP"
			], [
				"stateId" => 4741,
				"countryId" => 178,
				"name" => "Northland",
				"code" => "NO"
			], [
				"stateId" => 4744,
				"countryId" => 178,
				"name" => "Otago",
				"code" => "OT"
			], [
				"stateId" => 4761,
				"countryId" => 8,
				"name" => "Enderby Land",
				"code" => "EL"
			], [
				"stateId" => 4763,
				"countryId" => 8,
				"name" => "Ross Island",
				"code" => "RI"
			], [
				"stateId" => 4814,
				"countryId" => 178,
				"name" => "Chatham Islands",
				"code" => "CI"
			], [
				"stateId" => 4879,
				"countryId" => 81,
				"name" => "Etela-Suomen Laani",
				"code" => "ES"
			], [
				"stateId" => 4975,
				"countryId" => 156,
				"name" => "Nouakchott",
				"code" => "NO"
			], [
				"stateId" => 4996,
				"countryId" => 43,
				"name" => "Nunavut",
				"code" => "NU"
			], [
				"stateId" => 4997,
				"countryId" => 252,
				"name" => "United Arab Emigrates (general)",
				"code" => "UA"
			], [
				"stateId" => 4998,
				"countryId" => 252,
				"name" => "Abu Zaby",
				"code" => "AZ"
			], [
				"stateId" => 4999,
				"countryId" => 252,
				"name" => "'Ajman",
				"code" => "AJ"
			], [
				"stateId" => 5002,
				"countryId" => 252,
				"name" => "Dubayy",
				"code" => "DU"
			], [
				"stateId" => 5003,
				"countryId" => 252,
				"name" => "Al Fujayrah",
				"code" => "FU"
			], [
				"stateId" => 5004,
				"countryId" => 252,
				"name" => "Ra's al Khaymah",
				"code" => "RK"
			], [
				"stateId" => 5005,
				"countryId" => 252,
				"name" => "Ash Shariqah",
				"code" => "SH"
			], [
				"stateId" => 5006,
				"countryId" => 252,
				"name" => "Umm al Qaywayn",
				"code" => "UQ"
			], [
				"stateId" => 5007,
				"countryId" => 178,
				"name" => "Gisborne",
				"code" => "GI"
			], [
				"stateId" => 5010,
				"countryId" => 178,
				"name" => "Nelson",
				"code" => "NE"
			], [
				"stateId" => 5018,
				"countryId" => 178,
				"name" => "Tasman",
				"code" => "TS"
			], [
				"stateId" => 5019,
				"countryId" => 178,
				"name" => "Wanganui-Manawatu",
				"code" => "MW"
			], [
				"stateId" => 5020,
				"countryId" => 178,
				"name" => "West Coast",
				"code" => "WC"
			], [
				"stateId" => 5022,
				"countryId" => 81,
				"name" => "Ita-Suomen Laani",
				"code" => "IS"
			], [
				"stateId" => 5023,
				"countryId" => 81,
				"name" => "Lansi-Suomen Laani",
				"code" => "LS"
			], [
				"stateId" => 5024,
				"countryId" => 271,
				"name" => "Yugoslavia",
				"code" => "YU"
			], [
				"stateId" => 5025,
				"countryId" => 61,
				"name" => "Bjelovarsko-Bilogorska",
				"code" => "BB"
			], [
				"stateId" => 5026,
				"countryId" => 61,
				"name" => "Brodsko-Posavka",
				"code" => "SP"
			], [
				"stateId" => 5027,
				"countryId" => 61,
				"name" => "Dubrovacko-Neretvanska",
				"code" => "DN"
			], [
				"stateId" => 5028,
				"countryId" => 61,
				"name" => "Istarska",
				"code" => "IS"
			], [
				"stateId" => 5029,
				"countryId" => 61,
				"name" => "Karlovacka",
				"code" => "KA"
			], [
				"stateId" => 5030,
				"countryId" => 61,
				"name" => "Koprivnicko-Krizevacka",
				"code" => "KK"
			], [
				"stateId" => 5031,
				"countryId" => 61,
				"name" => "Krapinsko-Zagorska",
				"code" => "KZ"
			], [
				"stateId" => 5032,
				"countryId" => 61,
				"name" => "Licko-Senjska",
				"code" => "LS"
			], [
				"stateId" => 5033,
				"countryId" => 61,
				"name" => "Medimurska",
				"code" => "ME"
			], [
				"stateId" => 5034,
				"countryId" => 61,
				"name" => "Osjecko-Baranjska",
				"code" => "OB"
			], [
				"stateId" => 5035,
				"countryId" => 61,
				"name" => "Pozesko-Slavonska",
				"code" => "PS"
			], [
				"stateId" => 5036,
				"countryId" => 61,
				"name" => "Primorsko-Goranska",
				"code" => "PG"
			], [
				"stateId" => 5037,
				"countryId" => 61,
				"name" => "Sibensko-Kninska",
				"code" => "SB"
			], [
				"stateId" => 5038,
				"countryId" => 61,
				"name" => "Sisacko-Moslavacka",
				"code" => "SM"
			], [
				"stateId" => 5039,
				"countryId" => 61,
				"name" => "Splitsko-Dalmatinska",
				"code" => "SD"
			], [
				"stateId" => 5040,
				"countryId" => 61,
				"name" => "Varazdinska",
				"code" => "VA"
			], [
				"stateId" => 5041,
				"countryId" => 61,
				"name" => "Viroviticko-Podravska",
				"code" => "VP"
			], [
				"stateId" => 5042,
				"countryId" => 61,
				"name" => "Vukovarsko-Srijemska",
				"code" => "VS"
			], [
				"stateId" => 5043,
				"countryId" => 61,
				"name" => "Zadarska",
				"code" => "ZD"
			], [
				"stateId" => 5044,
				"countryId" => 61,
				"name" => "Zagrebacka",
				"code" => "ZG"
			], [
				"stateId" => 5045,
				"countryId" => 61,
				"name" => "Grad Zagreb",
				"code" => "GZ"
			], [
				"stateId" => 5047,
				"countryId" => 176,
				"name" => "Curacao",
				"code" => "CU"
			], [
				"stateId" => 5048,
				"countryId" => 176,
				"name" => "Bonaire",
				"code" => "BO"
			], [
				"stateId" => 5049,
				"countryId" => 176,
				"name" => "St Maarten",
				"code" => "SM"
			], [
				"stateId" => 5051,
				"countryId" => 24,
				"name" => "Brussels",
				"code" => "BU"
			], [
				"stateId" => 5052,
				"countryId" => 5,
				"name" => "Escaldes-Engordany",
				"code" => "EE"
			], [
				"stateId" => 5053,
				"countryId" => 247,
				"name" => "Ahal",
				"code" => "AL"
			], [
				"stateId" => 5054,
				"countryId" => 247,
				"name" => "Balkan",
				"code" => "BA"
			], [
				"stateId" => 5055,
				"countryId" => 247,
				"name" => "Dashhowuz",
				"code" => "DA"
			], [
				"stateId" => 5056,
				"countryId" => 247,
				"name" => "Lebap",
				"code" => "LE"
			], [
				"stateId" => 5057,
				"countryId" => 247,
				"name" => "Mary",
				"code" => "MA"
			], [
				"stateId" => 5058,
				"countryId" => 41,
				"name" => "Pailin",
				"code" => "PL"
			], [
				"stateId" => 5059,
				"countryId" => 70,
				"name" => "Orellana",
				"code" => "OR"
			], [
				"stateId" => 5060,
				"countryId" => 114,
				"name" => "Maluku Utara",
				"code" => "MU"
			], [
				"stateId" => 5061,
				"countryId" => 259,
				"name" => "Vargas",
				"code" => "VA"
			], [
				"stateId" => 5062,
				"countryId" => 271,
				"name" => "Crna Gora (Montenegro)",
				"code" => "CG"
			], [
				"stateId" => 5063,
				"countryId" => 271,
				"name" => "Srbija (Serbia)",
				"code" => "SR"
			], [
				"stateId" => 5064,
				"countryId" => 55,
				"name" => "Maniema",
				"code" => "MN"
			], [
				"stateId" => 5065,
				"countryId" => 55,
				"name" => "Nord-Kivu",
				"code" => "NK"
			], [
				"stateId" => 5066,
				"countryId" => 55,
				"name" => "Sud-Kivu",
				"code" => "SK"
			], [
				"stateId" => 5067,
				"countryId" => 126,
				"name" => "Ajlun",
				"code" => "AJ"
			], [
				"stateId" => 5068,
				"countryId" => 126,
				"name" => "Al Aqabah",
				"code" => "AQ"
			], [
				"stateId" => 5069,
				"countryId" => 126,
				"name" => "Jarash",
				"code" => "JA"
			], [
				"stateId" => 5070,
				"countryId" => 126,
				"name" => "Madaba",
				"code" => "MD"
			], [
				"stateId" => 5071,
				"countryId" => 258,
				"name" => "Malampa",
				"code" => "ML"
			], [
				"stateId" => 5072,
				"countryId" => 258,
				"name" => "Penama",
				"code" => "PM"
			], [
				"stateId" => 5073,
				"countryId" => 258,
				"name" => "Shefa",
				"code" => "SE"
			], [
				"stateId" => 5074,
				"countryId" => 181,
				"name" => "Bayelsa",
				"code" => "BY"
			], [
				"stateId" => 5075,
				"countryId" => 181,
				"name" => "Ebonyi",
				"code" => "EB"
			], [
				"stateId" => 5079,
				"countryId" => 181,
				"name" => "Ekiti",
				"code" => "EK"
			], [
				"stateId" => 5080,
				"countryId" => 181,
				"name" => "Gombe",
				"code" => "GO"
			], [
				"stateId" => 5081,
				"countryId" => 181,
				"name" => "Nassarawa",
				"code" => "NA"
			], [
				"stateId" => 5082,
				"countryId" => 181,
				"name" => "Zamfara",
				"code" => "ZA"
			], [
				"stateId" => 5083,
				"countryId" => 163,
				"name" => "Lapusna",
				"code" => "LP"
			], [
				"stateId" => 5084,
				"countryId" => 163,
				"name" => "Tighina",
				"code" => "TG"
			], [
				"stateId" => 5085,
				"countryId" => 37,
				"name" => "Blagoevgrad",
				"code" => "BL"
			], [
				"stateId" => 5086,
				"countryId" => 37,
				"name" => "Dobrich",
				"code" => "DO"
			], [
				"stateId" => 5087,
				"countryId" => 37,
				"name" => "Gabrovo ",
				"code" => "GB"
			], [
				"stateId" => 5088,
				"countryId" => 37,
				"name" => "Kurdzhali",
				"code" => "KZ"
			], [
				"stateId" => 5089,
				"countryId" => 37,
				"name" => "Kyustendil",
				"code" => "KY"
			], [
				"stateId" => 5090,
				"countryId" => 37,
				"name" => "Pazardzhik",
				"code" => "PZ"
			], [
				"stateId" => 5091,
				"countryId" => 37,
				"name" => "Pernik",
				"code" => "PN"
			], [
				"stateId" => 5092,
				"countryId" => 37,
				"name" => "Pleven",
				"code" => "PV"
			], [
				"stateId" => 5093,
				"countryId" => 37,
				"name" => "Ruse",
				"code" => "RS"
			], [
				"stateId" => 5094,
				"countryId" => 37,
				"name" => "Shumen",
				"code" => "SH"
			], [
				"stateId" => 5095,
				"countryId" => 37,
				"name" => "Silistra",
				"code" => "SI"
			], [
				"stateId" => 5096,
				"countryId" => 37,
				"name" => "Sliven",
				"code" => "SL"
			], [
				"stateId" => 5097,
				"countryId" => 37,
				"name" => "Smolyan",
				"code" => "SM"
			], [
				"stateId" => 5098,
				"countryId" => 37,
				"name" => "Stara Zagora",
				"code" => "SZ"
			], [
				"stateId" => 5099,
				"countryId" => 37,
				"name" => "Turgovishte",
				"code" => "TU"
			], [
				"stateId" => 5100,
				"countryId" => 37,
				"name" => "Veliko Turnovo",
				"code" => "VT"
			], [
				"stateId" => 5101,
				"countryId" => 37,
				"name" => "Vidin",
				"code" => "VD"
			], [
				"stateId" => 5102,
				"countryId" => 37,
				"name" => "Vratsa",
				"code" => "VR"
			], [
				"stateId" => 5103,
				"countryId" => 37,
				"name" => "Yambol",
				"code" => "YA"
			], [
				"stateId" => 5104,
				"countryId" => 115,
				"name" => "Golestan",
				"code" => "GO"
			], [
				"stateId" => 5105,
				"countryId" => 115,
				"name" => "Qazvin",
				"code" => "QZ"
			], [
				"stateId" => 5106,
				"countryId" => 115,
				"name" => "Qom",
				"code" => "QM"
			], [
				"stateId" => 5107,
				"countryId" => 246,
				"name" => "Ardahan",
				"code" => "AR"
			], [
				"stateId" => 5108,
				"countryId" => 246,
				"name" => "Bartin",
				"code" => "BR"
			], [
				"stateId" => 5109,
				"countryId" => 246,
				"name" => "Igdir",
				"code" => "IG"
			], [
				"stateId" => 5110,
				"countryId" => 246,
				"name" => "Karabuk",
				"code" => "KB"
			], [
				"stateId" => 5111,
				"countryId" => 246,
				"name" => "Kilis",
				"code" => "KI"
			], [
				"stateId" => 5112,
				"countryId" => 246,
				"name" => "Osmaniye",
				"code" => "OS"
			], [
				"stateId" => 5113,
				"countryId" => 246,
				"name" => "Yalova",
				"code" => "YL"
			], [
				"stateId" => 5114,
				"countryId" => 18,
				"name" => "Ar Rifa' wa al Mintaqah al Janubiyah",
				"code" => "RF"
			], [
				"stateId" => 5115,
				"countryId" => 30,
				"name" => "Republika Srpska",
				"code" => "SR"
			], [
				"stateId" => 5116,
				"countryId" => 30,
				"name" => "Federation of Bosnia and Herzegovina",
				"code" => "BF"
			], [
				"stateId" => 5118,
				"countryId" => 135,
				"name" => "Batken",
				"code" => "BA"
			], [
				"stateId" => 5119,
				"countryId" => 132,
				"name" => "P'yongan-bukto",
				"code" => "PB"
			], [
				"stateId" => 5120,
				"countryId" => 203,
				"name" => "Tyva",
				"code" => "TU"
			], [
				"stateId" => 5122,
				"countryId" => 64,
				"name" => "Jihomoravsky Kraj",
				"code" => "JM"
			], [
				"stateId" => 5123,
				"countryId" => 64,
				"name" => "Jihocesky Kraj",
				"code" => "JC"
			], [
				"stateId" => 5124,
				"countryId" => 64,
				"name" => "Vysocina",
				"code" => "VY"
			], [
				"stateId" => 5125,
				"countryId" => 64,
				"name" => "Karlovarsky Kraj",
				"code" => "KA"
			], [
				"stateId" => 5126,
				"countryId" => 64,
				"name" => "Kralovehradecky Kraj",
				"code" => "KR"
			], [
				"stateId" => 5127,
				"countryId" => 64,
				"name" => "Liberecky Kraj",
				"code" => "LI"
			], [
				"stateId" => 5128,
				"countryId" => 64,
				"name" => "Olomoucky Kraj",
				"code" => "OL"
			], [
				"stateId" => 5129,
				"countryId" => 64,
				"name" => "Moravskoslezsky Kraj",
				"code" => "MO"
			], [
				"stateId" => 5130,
				"countryId" => 64,
				"name" => "Pardubicky Kraj",
				"code" => "PA"
			], [
				"stateId" => 5131,
				"countryId" => 64,
				"name" => "Plzensky Kraj",
				"code" => "PL"
			], [
				"stateId" => 5132,
				"countryId" => 64,
				"name" => "Stredocesky Kraj",
				"code" => "ST"
			], [
				"stateId" => 5133,
				"countryId" => 64,
				"name" => "Ustecky Kraj",
				"code" => "US"
			], [
				"stateId" => 5134,
				"countryId" => 64,
				"name" => "Zlinsky Kraj",
				"code" => "ZL"
			], [
				"stateId" => 5135,
				"countryId" => 146,
				"name" => "Aracinovo",
				"code" => "AR"
			], [
				"stateId" => 5136,
				"countryId" => 146,
				"name" => "Bac",
				"code" => "BA"
			], [
				"stateId" => 5137,
				"countryId" => 146,
				"name" => "Belcista",
				"code" => "BE"
			], [
				"stateId" => 5138,
				"countryId" => 146,
				"name" => "Berovo",
				"code" => "BR"
			], [
				"stateId" => 5139,
				"countryId" => 146,
				"name" => "Bistrica",
				"code" => "BI"
			], [
				"stateId" => 5140,
				"countryId" => 146,
				"name" => "Bitola",
				"code" => "BO"
			], [
				"stateId" => 5141,
				"countryId" => 146,
				"name" => "Blatec",
				"code" => "BL"
			], [
				"stateId" => 5142,
				"countryId" => 146,
				"name" => "Bogdanci",
				"code" => "BG"
			], [
				"stateId" => 5143,
				"countryId" => 146,
				"name" => "Bogomila",
				"code" => "BM"
			], [
				"stateId" => 5144,
				"countryId" => 146,
				"name" => "Bogovinje",
				"code" => "BJ"
			], [
				"stateId" => 5145,
				"countryId" => 146,
				"name" => "Bosilovo",
				"code" => "BS"
			], [
				"stateId" => 5146,
				"countryId" => 146,
				"name" => "Brvenica",
				"code" => "BN"
			], [
				"stateId" => 5147,
				"countryId" => 146,
				"name" => "Cair",
				"code" => "CR"
			], [
				"stateId" => 5148,
				"countryId" => 146,
				"name" => "Capari",
				"code" => "CP"
			], [
				"stateId" => 5149,
				"countryId" => 146,
				"name" => "Caska",
				"code" => "CK"
			], [
				"stateId" => 5150,
				"countryId" => 146,
				"name" => "Cegrane",
				"code" => "CG"
			], [
				"stateId" => 5151,
				"countryId" => 146,
				"name" => "Centar",
				"code" => "CE"
			], [
				"stateId" => 5152,
				"countryId" => 146,
				"name" => "Centar Zupa",
				"code" => "CZ"
			], [
				"stateId" => 5153,
				"countryId" => 146,
				"name" => "Cesinovo",
				"code" => "CN"
			], [
				"stateId" => 5154,
				"countryId" => 146,
				"name" => "Cucer-Sandevo",
				"code" => "CS"
			], [
				"stateId" => 5155,
				"countryId" => 146,
				"name" => "Debar",
				"code" => "DB"
			], [
				"stateId" => 5156,
				"countryId" => 146,
				"name" => "Delcevo",
				"code" => "DL"
			], [
				"stateId" => 5157,
				"countryId" => 146,
				"name" => "Delogozdi",
				"code" => "DG"
			], [
				"stateId" => 5158,
				"countryId" => 146,
				"name" => "Demir Hisar",
				"code" => "DX"
			], [
				"stateId" => 5159,
				"countryId" => 146,
				"name" => "Demir Kapija",
				"code" => "DK"
			], [
				"stateId" => 5160,
				"countryId" => 146,
				"name" => "Dobrusevo",
				"code" => "DO"
			], [
				"stateId" => 5161,
				"countryId" => 146,
				"name" => "Dolna Banjica",
				"code" => "DJ"
			], [
				"stateId" => 5162,
				"countryId" => 146,
				"name" => "Dolneni",
				"code" => "DN"
			], [
				"stateId" => 5163,
				"countryId" => 146,
				"name" => "Dorce Petrov",
				"code" => "GP"
			], [
				"stateId" => 5164,
				"countryId" => 146,
				"name" => "Drugovo",
				"code" => "DR"
			], [
				"stateId" => 5165,
				"countryId" => 146,
				"name" => "Dzepciste",
				"code" => "DZ"
			], [
				"stateId" => 5166,
				"countryId" => 146,
				"name" => "Gazi Baba",
				"code" => "GB"
			], [
				"stateId" => 5167,
				"countryId" => 146,
				"name" => "Gevgelija",
				"code" => "GE"
			], [
				"stateId" => 5168,
				"countryId" => 146,
				"name" => "Gostivar",
				"code" => "GO"
			], [
				"stateId" => 5169,
				"countryId" => 146,
				"name" => "Gradsko",
				"code" => "GR"
			], [
				"stateId" => 5170,
				"countryId" => 146,
				"name" => "Ilinden",
				"code" => "IL"
			], [
				"stateId" => 5171,
				"countryId" => 146,
				"name" => "Izvor",
				"code" => "IZ"
			], [
				"stateId" => 5172,
				"countryId" => 146,
				"name" => "Jegunovce",
				"code" => "JE"
			], [
				"stateId" => 5173,
				"countryId" => 146,
				"name" => "Kamenjane",
				"code" => "KJ"
			], [
				"stateId" => 5174,
				"countryId" => 146,
				"name" => "Karbinci",
				"code" => "KB"
			], [
				"stateId" => 5175,
				"countryId" => 146,
				"name" => "Karpos",
				"code" => "KX"
			], [
				"stateId" => 5176,
				"countryId" => 146,
				"name" => "Kavadarci",
				"code" => "KD"
			], [
				"stateId" => 5177,
				"countryId" => 146,
				"name" => "Kicevo",
				"code" => "KH"
			], [
				"stateId" => 5178,
				"countryId" => 146,
				"name" => "Kisela Voda",
				"code" => "KV"
			], [
				"stateId" => 5179,
				"countryId" => 146,
				"name" => "Klecevce",
				"code" => "KL"
			], [
				"stateId" => 5180,
				"countryId" => 146,
				"name" => "Kocani",
				"code" => "KC"
			], [
				"stateId" => 5181,
				"countryId" => 146,
				"name" => "Konce",
				"code" => "KN"
			], [
				"stateId" => 5182,
				"countryId" => 146,
				"name" => "Kondovo",
				"code" => "KW"
			], [
				"stateId" => 5183,
				"countryId" => 146,
				"name" => "Konopiste",
				"code" => "KF"
			], [
				"stateId" => 5184,
				"countryId" => 146,
				"name" => "Kosel",
				"code" => "KE"
			], [
				"stateId" => 5185,
				"countryId" => 146,
				"name" => "Kartovo",
				"code" => "KY"
			], [
				"stateId" => 5186,
				"countryId" => 146,
				"name" => "Kriva Palanka",
				"code" => "KZ"
			], [
				"stateId" => 5187,
				"countryId" => 146,
				"name" => "Krivogastani",
				"code" => "KG"
			], [
				"stateId" => 5188,
				"countryId" => 146,
				"name" => "Krusevo",
				"code" => "KS"
			], [
				"stateId" => 5189,
				"countryId" => 146,
				"name" => "Kuklis",
				"code" => "KK"
			], [
				"stateId" => 5190,
				"countryId" => 146,
				"name" => "Kukurecani",
				"code" => "KQ"
			], [
				"stateId" => 5191,
				"countryId" => 146,
				"name" => "Kumanovo",
				"code" => "KM"
			], [
				"stateId" => 5192,
				"countryId" => 146,
				"name" => "Labunista",
				"code" => "LA"
			], [
				"stateId" => 5193,
				"countryId" => 146,
				"name" => "Lipkovo",
				"code" => "LI"
			], [
				"stateId" => 5194,
				"countryId" => 146,
				"name" => "Lozovo",
				"code" => "LO"
			], [
				"stateId" => 5195,
				"countryId" => 146,
				"name" => "Lukovo",
				"code" => "LU"
			], [
				"stateId" => 5196,
				"countryId" => 146,
				"name" => "Makedonska Kamenica",
				"code" => "MM"
			], [
				"stateId" => 5197,
				"countryId" => 146,
				"name" => "Makedonski Brod",
				"code" => "MB"
			], [
				"stateId" => 5198,
				"countryId" => 146,
				"name" => "Mavrovi Anovi",
				"code" => "MA"
			], [
				"stateId" => 5199,
				"countryId" => 146,
				"name" => "Meseista",
				"code" => "ME"
			], [
				"stateId" => 5200,
				"countryId" => 146,
				"name" => "Miravci",
				"code" => "MI"
			], [
				"stateId" => 5201,
				"countryId" => 146,
				"name" => "Mogila",
				"code" => "MO"
			], [
				"stateId" => 5202,
				"countryId" => 146,
				"name" => "Murtino",
				"code" => "MU"
			], [
				"stateId" => 5203,
				"countryId" => 146,
				"name" => "Negotino",
				"code" => "NG"
			], [
				"stateId" => 5204,
				"countryId" => 146,
				"name" => "Negotino-Polosko",
				"code" => "NP"
			], [
				"stateId" => 5205,
				"countryId" => 146,
				"name" => "Novaci",
				"code" => "NO"
			], [
				"stateId" => 5206,
				"countryId" => 146,
				"name" => "Novo Selo",
				"code" => "NS"
			], [
				"stateId" => 5207,
				"countryId" => 146,
				"name" => "Oblesevo",
				"code" => "OB"
			], [
				"stateId" => 5208,
				"countryId" => 146,
				"name" => "Ohrid",
				"code" => "OX"
			], [
				"stateId" => 5209,
				"countryId" => 146,
				"name" => "Orasac",
				"code" => "OR"
			], [
				"stateId" => 5210,
				"countryId" => 146,
				"name" => "Orizari",
				"code" => "OZ"
			], [
				"stateId" => 5211,
				"countryId" => 146,
				"name" => "Oslomej",
				"code" => "OS"
			], [
				"stateId" => 5212,
				"countryId" => 146,
				"name" => "Pehcevo",
				"code" => "PH"
			], [
				"stateId" => 5213,
				"countryId" => 146,
				"name" => "Petrovec",
				"code" => "PE"
			], [
				"stateId" => 5214,
				"countryId" => 146,
				"name" => "Plasnica",
				"code" => "PN"
			], [
				"stateId" => 5215,
				"countryId" => 146,
				"name" => "Podares",
				"code" => "PO"
			], [
				"stateId" => 5216,
				"countryId" => 146,
				"name" => "Prilep",
				"code" => "PR"
			], [
				"stateId" => 5217,
				"countryId" => 146,
				"name" => "Probistip",
				"code" => "PB"
			], [
				"stateId" => 5218,
				"countryId" => 146,
				"name" => "Radovis",
				"code" => "RD"
			], [
				"stateId" => 5219,
				"countryId" => 146,
				"name" => "Rankovce",
				"code" => "RN"
			], [
				"stateId" => 5220,
				"countryId" => 146,
				"name" => "Resen",
				"code" => "RE"
			], [
				"stateId" => 5221,
				"countryId" => 146,
				"name" => "Rosoman",
				"code" => "RM"
			], [
				"stateId" => 5222,
				"countryId" => 146,
				"name" => "Rostusa",
				"code" => "RT"
			], [
				"stateId" => 5223,
				"countryId" => 146,
				"name" => "Samokov",
				"code" => "SA"
			], [
				"stateId" => 5224,
				"countryId" => 146,
				"name" => "Saraj",
				"code" => "SJ"
			], [
				"stateId" => 5225,
				"countryId" => 146,
				"name" => "Sipkovica",
				"code" => "SI"
			], [
				"stateId" => 5226,
				"countryId" => 146,
				"name" => "Sopiste",
				"code" => "SS"
			], [
				"stateId" => 5227,
				"countryId" => 146,
				"name" => "Sopotnica",
				"code" => "SC"
			], [
				"stateId" => 5228,
				"countryId" => 146,
				"name" => "Srbinovo",
				"code" => "SB"
			], [
				"stateId" => 5229,
				"countryId" => 146,
				"name" => "Staravina",
				"code" => "SV"
			], [
				"stateId" => 5230,
				"countryId" => 146,
				"name" => "Star Dojran",
				"code" => "SD"
			], [
				"stateId" => 5231,
				"countryId" => 146,
				"name" => "Star Nagoricane",
				"code" => "SE"
			], [
				"stateId" => 5232,
				"countryId" => 146,
				"name" => "Stip",
				"code" => "ST"
			], [
				"stateId" => 5233,
				"countryId" => 146,
				"name" => "Struga",
				"code" => "SQ"
			], [
				"stateId" => 5234,
				"countryId" => 146,
				"name" => "Strumica",
				"code" => "SR"
			], [
				"stateId" => 5235,
				"countryId" => 146,
				"name" => "Studenicani",
				"code" => "SU"
			], [
				"stateId" => 5236,
				"countryId" => 146,
				"name" => "Suto Orizari",
				"code" => "SO"
			], [
				"stateId" => 5237,
				"countryId" => 146,
				"name" => "Sveti Nikole",
				"code" => "SL"
			], [
				"stateId" => 5238,
				"countryId" => 146,
				"name" => "Tearce",
				"code" => "TR"
			], [
				"stateId" => 5239,
				"countryId" => 146,
				"name" => "Tetovo",
				"code" => "TT"
			], [
				"stateId" => 5240,
				"countryId" => 146,
				"name" => "Topolcani",
				"code" => "TO"
			], [
				"stateId" => 5241,
				"countryId" => 146,
				"name" => "Valandovo",
				"code" => "VA"
			], [
				"stateId" => 5242,
				"countryId" => 146,
				"name" => "Vasilevo",
				"code" => "VL"
			], [
				"stateId" => 5243,
				"countryId" => 146,
				"name" => "Veles",
				"code" => "VE"
			], [
				"stateId" => 5244,
				"countryId" => 146,
				"name" => "Velesta",
				"code" => "VS"
			], [
				"stateId" => 5245,
				"countryId" => 146,
				"name" => "Vevcani",
				"code" => "VV"
			], [
				"stateId" => 5246,
				"countryId" => 146,
				"name" => "Vinica",
				"code" => "VN"
			], [
				"stateId" => 5247,
				"countryId" => 146,
				"name" => "Vitoliste",
				"code" => "VT"
			], [
				"stateId" => 5248,
				"countryId" => 146,
				"name" => "Vranestica",
				"code" => "VC"
			], [
				"stateId" => 5249,
				"countryId" => 146,
				"name" => "Vrapciste",
				"code" => "VP"
			], [
				"stateId" => 5250,
				"countryId" => 146,
				"name" => "Vratnica",
				"code" => "VR"
			], [
				"stateId" => 5251,
				"countryId" => 146,
				"name" => "Vrutok",
				"code" => "VK"
			], [
				"stateId" => 5252,
				"countryId" => 146,
				"name" => "Zajas",
				"code" => "ZA"
			], [
				"stateId" => 5253,
				"countryId" => 146,
				"name" => "Zelenikovo",
				"code" => "ZK"
			], [
				"stateId" => 5254,
				"countryId" => 146,
				"name" => "Zelino",
				"code" => "ZE"
			], [
				"stateId" => 5255,
				"countryId" => 146,
				"name" => "Zitose",
				"code" => "ZI"
			], [
				"stateId" => 5256,
				"countryId" => 146,
				"name" => "Zletovo",
				"code" => "ZL"
			], [
				"stateId" => 5257,
				"countryId" => 146,
				"name" => "Zrnovci",
				"code" => "ZR"
			], [
				"stateId" => 5258,
				"countryId" => 271,
				"name" => "Kosovo",
				"code" => "KM"
			], [
				"stateId" => 5259,
				"countryId" => 113,
				"name" => "Uttaranchal",
				"code" => "UL"
			], [
				"stateId" => 5260,
				"countryId" => 254,
				"name" => "AOL",
				"code" => "AO"
			], [
				"stateId" => 5261,
				"countryId" => 254,
				"name" => "WebTV",
				"code" => "WE"
			], [
				"stateId" => 5262,
				"countryId" => 14,
				"name" => "AOL",
				"code" => "AO"
			], [
				"stateId" => 5263,
				"countryId" => 253,
				"name" => "AOL",
				"code" => "AO"
			], [
				"stateId" => 5264,
				"countryId" => 33,
				"name" => "AOL",
				"code" => "AO"
			], [
				"stateId" => 5265,
				"countryId" => 122,
				"name" => "AOL",
				"code" => "AO"
			], [
				"stateId" => 5266,
				"countryId" => 91,
				"name" => "AOL",
				"code" => "AO"
			], [
				"stateId" => 5267,
				"countryId" => 113,
				"name" => "Chhattisgarh",
				"code" => "CT"
			], [
				"stateId" => 5268,
				"countryId" => 113,
				"name" => "Jharkhand",
				"code" => "JH"
			], [
				"stateId" => 5269,
				"countryId" => 40,
				"name" => "Mwaro",
				"code" => "MW"
			], [
				"stateId" => 5270,
				"countryId" => 274,
				"name" => "Bulawayo",
				"code" => "BU"
			], [
				"stateId" => 5271,
				"countryId" => 274,
				"name" => "Harare",
				"code" => "HA"
			], [
				"stateId" => 5272,
				"countryId" => 60,
				"name" => "Adiake",
				"code" => "AD"
			], [
				"stateId" => 5273,
				"countryId" => 60,
				"name" => "Alepe",
				"code" => "AL"
			], [
				"stateId" => 5274,
				"countryId" => 60,
				"name" => "Bocanda",
				"code" => "BN"
			], [
				"stateId" => 5275,
				"countryId" => 60,
				"name" => "Dabou",
				"code" => "DA"
			], [
				"stateId" => 5276,
				"countryId" => 60,
				"name" => "Grand-Bassam",
				"code" => "GR"
			], [
				"stateId" => 5277,
				"countryId" => 60,
				"name" => "Jacqueville",
				"code" => "JA"
			], [
				"stateId" => 5278,
				"countryId" => 60,
				"name" => "Toulepleu",
				"code" => "TP"
			], [
				"stateId" => 5279,
				"countryId" => 102,
				"name" => "Mandiana",
				"code" => "MD"
			], [
				"stateId" => 5280,
				"countryId" => 102,
				"name" => "Lola",
				"code" => "LO"
			], [
				"stateId" => 5281,
				"countryId" => 102,
				"name" => "Lelouma",
				"code" => "LE"
			], [
				"stateId" => 5282,
				"countryId" => 102,
				"name" => "Koubia",
				"code" => "KB"
			], [
				"stateId" => 5283,
				"countryId" => 102,
				"name" => "Coyah",
				"code" => "CO"
			], [
				"stateId" => 5284,
				"countryId" => 114,
				"name" => "Gorontalo",
				"code" => "GO"
			], [
				"stateId" => 5285,
				"countryId" => 114,
				"name" => "Kepulauan Bangka Belitung",
				"code" => "BB"
			], [
				"stateId" => 5286,
				"countryId" => 114,
				"name" => "Banten",
				"code" => "BT"
			], [
				"stateId" => 5287,
				"countryId" => 133,
				"name" => "Ulsan-gwangyoksi",
				"code" => "UL"
			], [
				"stateId" => 5289,
				"countryId" => 250,
				"name" => "Sembabule",
				"code" => "SE"
			], [
				"stateId" => 5290,
				"countryId" => 250,
				"name" => "Nakasongola",
				"code" => "NA"
			], [
				"stateId" => 5291,
				"countryId" => 250,
				"name" => "Katakwi",
				"code" => "KW"
			], [
				"stateId" => 5292,
				"countryId" => 250,
				"name" => "Busia",
				"code" => "BU"
			], [
				"stateId" => 5293,
				"countryId" => 250,
				"name" => "Bugiri",
				"code" => "BG"
			], [
				"stateId" => 5294,
				"countryId" => 250,
				"name" => "Adjumani",
				"code" => "AD"
			], [
				"stateId" => 5295,
				"countryId" => 138,
				"name" => "Nabatiye",
				"code" => "NA"
			], [
				"stateId" => 5296,
				"countryId" => 1,
				"name" => "Khost",
				"code" => "KT"
			], [
				"stateId" => 5297,
				"countryId" => 1,
				"name" => "Nuristan",
				"code" => "NR"
			], [
				"stateId" => 5298,
				"countryId" => 16,
				"name" => "Sarur",
				"code" => "SR"
			], [
				"stateId" => 5299,
				"countryId" => 16,
				"name" => "Sahbuz",
				"code" => "SH"
			], [
				"stateId" => 5300,
				"countryId" => 16,
				"name" => "Sadarak",
				"code" => "SD"
			], [
				"stateId" => 5301,
				"countryId" => 16,
				"name" => "Ordubud",
				"code" => "OR"
			], [
				"stateId" => 5302,
				"countryId" => 16,
				"name" => "Babak",
				"code" => "BB"
			], [
				"stateId" => 5303,
				"countryId" => 20,
				"name" => "Barisal",
				"code" => "BA"
			], [
				"stateId" => 5304,
				"countryId" => 20,
				"name" => "Sylhet",
				"code" => "SY"
			], [
				"stateId" => 5305,
				"countryId" => 24,
				"name" => "Brabant Wallon",
				"code" => "BW"
			], [
				"stateId" => 5306,
				"countryId" => 24,
				"name" => "Vlaams-Brabant",
				"code" => "VB"
			], [
				"stateId" => 5308,
				"countryId" => 27,
				"name" => "Hamilton",
				"code" => "HA"
			], [
				"stateId" => 5309,
				"countryId" => 4,
				"name" => "Eastern Tutuila",
				"code" => "ET"
			], [
				"stateId" => 5310,
				"countryId" => 4,
				"name" => "Unorganized",
				"code" => "UU"
			], [
				"stateId" => 5311,
				"countryId" => 4,
				"name" => "Western Tutuila",
				"code" => "WT"
			], [
				"stateId" => 5312,
				"countryId" => 4,
				"name" => "Manu'a",
				"code" => "MA"
			], [
				"stateId" => 5313,
				"countryId" => 30,
				"name" => "Brcko District",
				"code" => "BR"
			], [
				"stateId" => 5314,
				"countryId" => 28,
				"name" => "Tashi Yangtse",
				"code" => "TY"
			], [
				"stateId" => 5315,
				"countryId" => 28,
				"name" => "Gasa",
				"code" => "GA"
			], [
				"stateId" => 5316,
				"countryId" => 26,
				"name" => "Plateau",
				"code" => "PL"
			], [
				"stateId" => 5317,
				"countryId" => 26,
				"name" => "Littoral",
				"code" => "LI"
			], [
				"stateId" => 5318,
				"countryId" => 26,
				"name" => "Donga",
				"code" => "DO"
			], [
				"stateId" => 5319,
				"countryId" => 26,
				"name" => "Couffo",
				"code" => "CF"
			], [
				"stateId" => 5320,
				"countryId" => 26,
				"name" => "Collines",
				"code" => "CL"
			], [
				"stateId" => 5321,
				"countryId" => 26,
				"name" => "Alibori",
				"code" => "AL"
			], [
				"stateId" => 5322,
				"countryId" => 90,
				"name" => "Guria",
				"code" => "GU"
			], [
				"stateId" => 5323,
				"countryId" => 90,
				"name" => "Imereti",
				"code" => "IM"
			], [
				"stateId" => 5324,
				"countryId" => 90,
				"name" => "Kakheti",
				"code" => "KA"
			], [
				"stateId" => 5325,
				"countryId" => 90,
				"name" => "Kvemo Kartli",
				"code" => "KK"
			], [
				"stateId" => 5327,
				"countryId" => 90,
				"name" => "Mtskheta-Mtianeti",
				"code" => "MM"
			], [
				"stateId" => 5328,
				"countryId" => 90,
				"name" => "Racha-Lochkhumi-Kvemo Svaneti",
				"code" => "RL"
			], [
				"stateId" => 5329,
				"countryId" => 90,
				"name" => "Samegrelo-Zemo Svateni",
				"code" => "SZ"
			], [
				"stateId" => 5330,
				"countryId" => 90,
				"name" => "Samtskhe-Javakheti",
				"code" => "SJ"
			], [
				"stateId" => 5331,
				"countryId" => 90,
				"name" => "Shida Kartli",
				"code" => "SK"
			], [
				"stateId" => 5332,
				"countryId" => 165,
				"name" => "Govi-Sumber",
				"code" => "GS"
			], [
				"stateId" => 5333,
				"countryId" => 165,
				"name" => "Darhan Uul",
				"code" => "DA"
			], [
				"stateId" => 5334,
				"countryId" => 132,
				"name" => "Najin Sonbong-si",
				"code" => "NJ"
			], [
				"stateId" => 5335,
				"countryId" => 74,
				"name" => "Anseba",
				"code" => "AN"
			], [
				"stateId" => 5336,
				"countryId" => 74,
				"name" => "Semenawi Keyih Bahri",
				"code" => "SK"
			], [
				"stateId" => 5337,
				"countryId" => 74,
				"name" => "Maekel",
				"code" => "MA"
			], [
				"stateId" => 5338,
				"countryId" => 74,
				"name" => "Gash Barka",
				"code" => "GB"
			], [
				"stateId" => 5339,
				"countryId" => 74,
				"name" => "Debubawi Keyih Bahri",
				"code" => "DK"
			], [
				"stateId" => 5340,
				"countryId" => 74,
				"name" => "Debub",
				"code" => "DU"
			], [
				"stateId" => 5341,
				"countryId" => 44,
				"name" => "Mosteiros",
				"code" => "MO"
			], [
				"stateId" => 5342,
				"countryId" => 44,
				"name" => "Porto Novo",
				"code" => "PN"
			], [
				"stateId" => 5343,
				"countryId" => 44,
				"name" => "Santa Cruz",
				"code" => "SZ"
			], [
				"stateId" => 5344,
				"countryId" => 44,
				"name" => "São Domingos",
				"code" => "SD"
			], [
				"stateId" => 5345,
				"countryId" => 44,
				"name" => "São Filipe",
				"code" => "SF"
			], [
				"stateId" => 5346,
				"countryId" => 38,
				"name" => "Balé",
				"code" => "BA"
			], [
				"stateId" => 5347,
				"countryId" => 38,
				"name" => "Banwa",
				"code" => "BW"
			], [
				"stateId" => 5348,
				"countryId" => 38,
				"name" => "Ioba",
				"code" => "IO"
			], [
				"stateId" => 5349,
				"countryId" => 38,
				"name" => "Komondjari",
				"code" => "KJ"
			], [
				"stateId" => 5350,
				"countryId" => 38,
				"name" => "Kompienga",
				"code" => "KP"
			], [
				"stateId" => 5351,
				"countryId" => 38,
				"name" => "Koulpélogo",
				"code" => "KL"
			], [
				"stateId" => 5352,
				"countryId" => 38,
				"name" => "Kourwéogo",
				"code" => "KW"
			], [
				"stateId" => 5353,
				"countryId" => 38,
				"name" => "Léraba",
				"code" => "LE"
			], [
				"stateId" => 5354,
				"countryId" => 38,
				"name" => "Loroum",
				"code" => "LO"
			], [
				"stateId" => 5355,
				"countryId" => 38,
				"name" => "Nayala",
				"code" => "NY"
			], [
				"stateId" => 5356,
				"countryId" => 38,
				"name" => "Noumbiel",
				"code" => "NB"
			], [
				"stateId" => 5357,
				"countryId" => 38,
				"name" => "Tui",
				"code" => "TU"
			], [
				"stateId" => 5358,
				"countryId" => 38,
				"name" => "Yagha",
				"code" => "YG"
			], [
				"stateId" => 5359,
				"countryId" => 38,
				"name" => "Ziro",
				"code" => "ZR"
			], [
				"stateId" => 5360,
				"countryId" => 38,
				"name" => "Zondoma",
				"code" => "ZM"
			], [
				"stateId" => 5361,
				"countryId" => 97,
				"name" => "Carriacou",
				"code" => "CA"
			], [
				"stateId" => 5362,
				"countryId" => 140,
				"name" => "River Gee",
				"code" => "RG"
			], [
				"stateId" => 5363,
				"countryId" => 140,
				"name" => "Gbarpolu",
				"code" => "GP"
			], [
				"stateId" => 5364,
				"countryId" => 238,
				"name" => "Pwani",
				"code" => "PW"
			], [
				"stateId" => 5365,
				"countryId" => 246,
				"name" => "Düzce",
				"code" => "DU"
			], [
				"stateId" => 5366,
				"countryId" => 245,
				"name" => "Manouba",
				"code" => "MN"
			], [
				"stateId" => 5367,
				"countryId" => 151,
				"name" => "Kidal",
				"code" => "KD"
			], [
				"stateId" => 5368,
				"countryId" => 184,
				"name" => "Rota",
				"code" => "RO"
			], [
				"stateId" => 5369,
				"countryId" => 184,
				"name" => "Saipan",
				"code" => "SA"
			], [
				"stateId" => 5370,
				"countryId" => 184,
				"name" => "Tinian",
				"code" => "TA"
			], [
				"stateId" => 5371,
				"countryId" => 204,
				"name" => "Kigali-Ville",
				"code" => "KV"
			], [
				"stateId" => 5372,
				"countryId" => 204,
				"name" => "Umutara",
				"code" => "UM"
			], [
				"stateId" => 5373,
				"countryId" => 155,
				"name" => "Trinité",
				"code" => "TR"
			], [
				"stateId" => 5374,
				"countryId" => 155,
				"name" => "Saint-Pierre",
				"code" => "SP"
			], [
				"stateId" => 5375,
				"countryId" => 155,
				"name" => "Marin",
				"code" => "MA"
			], [
				"stateId" => 5376,
				"countryId" => 155,
				"name" => "Fort-de-France",
				"code" => "FF"
			], [
				"stateId" => 5377,
				"countryId" => 163,
				"name" => "Taraclia",
				"code" => "TR"
			], [
				"stateId" => 5378,
				"countryId" => 148,
				"name" => "Phalombe",
				"code" => "PH"
			], [
				"stateId" => 5379,
				"countryId" => 148,
				"name" => "Likoma",
				"code" => "LK"
			], [
				"stateId" => 5380,
				"countryId" => 148,
				"name" => "Balaka",
				"code" => "BA"
			], [
				"stateId" => 5381,
				"countryId" => 149,
				"name" => "Putrajaya",
				"code" => "PJ"
			], [
				"stateId" => 5382,
				"countryId" => 84,
				"name" => "Saint-Laurent-du-Maroni",
				"code" => "SL"
			], [
				"stateId" => 5383,
				"countryId" => 84,
				"name" => "Cayenne",
				"code" => "CY"
			], [
				"stateId" => 5384,
				"countryId" => 261,
				"name" => "Saint Thomas",
				"code" => "ST"
			], [
				"stateId" => 5385,
				"countryId" => 261,
				"name" => "Saint John",
				"code" => "SJ"
			], [
				"stateId" => 5386,
				"countryId" => 261,
				"name" => "Saint Croix",
				"code" => "SC"
			], [
				"stateId" => 5387,
				"countryId" => 275,
				"name" => "West Bank",
				"code" => "WE"
			], [
				"stateId" => 5388,
				"countryId" => 275,
				"name" => "Gaza",
				"code" => "GZ"
			], [
				"stateId" => 5389,
				"countryId" => 253,
				"name" => "Wales",
				"code" => "WA"
			], [
				"stateId" => 5390,
				"countryId" => 253,
				"name" => "Scotland",
				"code" => "SC"
			], [
				"stateId" => 5391,
				"countryId" => 253,
				"name" => "Northern Ireland",
				"code" => "NI"
			], [
				"stateId" => 5392,
				"countryId" => 253,
				"name" => "England",
				"code" => "EN"
			], [
				"stateId" => 5393,
				"countryId" => 240,
				"name" => "Centre",
				"code" => "CE"
			], [
				"stateId" => 5394,
				"countryId" => 240,
				"name" => "Kara",
				"code" => "KA"
			], [
				"stateId" => 5395,
				"countryId" => 240,
				"name" => "Maritime",
				"code" => "MA"
			], [
				"stateId" => 5396,
				"countryId" => 240,
				"name" => "Plateaux",
				"code" => "PL"
			], [
				"stateId" => 5397,
				"countryId" => 240,
				"name" => "Savanes",
				"code" => "SA"
			], [
				"stateId" => 5398,
				"countryId" => 221,
				"name" => "Imo",
				"code" => "IM"
			], [
				"stateId" => 5399,
				"countryId" => 181,
				"name" => "Katsina",
				"code" => "KT"
			]
 		];

		foreach ($states as $state) {
			State::create($state);
		}
    }
 
}