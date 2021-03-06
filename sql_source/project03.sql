create table p3_organization(
	o_id integer AUTO_INCREMENT primary key,
	o_name varchar(255),
	o_slug varchar(10),
	o_country char(3),
)

p3_deptartment(
	d_id integer AUTO_INCREMENT primary key,
	d_name varchar(255),
	o_slug varchar(10), 
	org_id integer,
	
)

create table p3_employee(

);




CREATE TABLE IF NOT EXISTS `p3_country` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` text,
  `c_capital` varchar(255) DEFAULT NULL,
  `c_slug` char(3) DEFAULT NULL,
  `c_flag` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=251 ;

--
-- Dumping data for table `p3_country`
--

INSERT INTO `p3_country` (`c_id`, `c_name`, `c_capital`, `c_slug`, `c_flag`) VALUES
(1, 'Afghanistan', 'Kabul', 'AFG', 'AFG.svg'),
(2, 'Ã…land Islands', 'Mariehamn', 'ALA', 'ALA.svg'),
(3, 'Albania', 'Tirana', 'ALB', 'ALB.svg'),
(4, 'Algeria', 'Algiers', 'DZA', 'DZA.svg'),
(5, 'American Samoa', 'Pago Pago', 'ASM', 'ASM.svg'),
(6, 'Andorra', 'Andorra la Vella', 'AND', 'AND.svg'),
(7, 'Angola', 'Luanda', 'AGO', 'AGO.svg'),
(8, 'Anguilla', 'The Valley', 'AIA', 'AIA.svg'),
(9, 'Antarctica', '', 'ATA', 'ATA.svg'),
(10, 'Antigua and Barbuda', 'Saint John''s', 'ATG', 'ATG.svg'),
(11, 'Argentina', 'Buenos Aires', 'ARG', 'ARG.svg'),
(12, 'Armenia', 'Yerevan', 'ARM', 'ARM.svg'),
(13, 'Aruba', 'Oranjestad', 'ABW', 'ABW.svg'),
(14, 'Australia', 'Canberra', 'AUS', 'AUS.svg'),
(15, 'Austria', 'Vienna', 'AUT', 'AUT.svg'),
(16, 'Azerbaijan', 'Baku', 'AZE', 'AZE.svg'),
(17, 'Bahamas', 'Nassau', 'BHS', 'BHS.svg'),
(18, 'Bahrain', 'Manama', 'BHR', 'BHR.svg'),
(19, 'Bangladesh', 'Dhaka', 'BGD', 'BGD.svg'),
(20, 'Barbados', 'Bridgetown', 'BRB', 'BRB.svg'),
(21, 'Belarus', 'Minsk', 'BLR', 'BLR.svg'),
(22, 'Belgium', 'Brussels', 'BEL', 'BEL.svg'),
(23, 'Belize', 'Belmopan', 'BLZ', 'BLZ.svg'),
(24, 'Benin', 'Porto-Novo', 'BEN', 'BEN.svg'),
(25, 'Bermuda', 'Hamilton', 'BMU', 'BMU.svg'),
(26, 'Bhutan', 'Thimphu', 'BTN', 'BTN.svg'),
(27, 'Bolivia (Plurinational State of)', 'Sucre', 'BOL', 'BOL.svg'),
(28, 'Bonaire, Sint Eustatius and Saba', 'Kralendijk', 'BES', 'BES.svg'),
(29, 'Bosnia and Herzegovina', 'Sarajevo', 'BIH', 'BIH.svg'),
(30, 'Botswana', 'Gaborone', 'BWA', 'BWA.svg'),
(31, 'Bouvet Island', '', 'BVT', 'BVT.svg'),
(32, 'Brazil', 'BrasÃ­lia', 'BRA', 'BRA.svg'),
(33, 'British Indian Ocean Territory', 'Diego Garcia', 'IOT', 'IOT.svg'),
(34, 'United States Minor Outlying Islands', '', 'UMI', 'UMI.svg'),
(35, 'Virgin Islands (British)', 'Road Town', 'VGB', 'VGB.svg'),
(36, 'Virgin Islands (U.S.)', 'Charlotte Amalie', 'VIR', 'VIR.svg'),
(37, 'Brunei Darussalam', 'Bandar Seri Begawan', 'BRN', 'BRN.svg'),
(38, 'Bulgaria', 'Sofia', 'BGR', 'BGR.svg'),
(39, 'Burkina Faso', 'Ouagadougou', 'BFA', 'BFA.svg'),
(40, 'Burundi', 'Bujumbura', 'BDI', 'BDI.svg'),
(41, 'Cambodia', 'Phnom Penh', 'KHM', 'KHM.svg'),
(42, 'Cameroon', 'YaoundÃ©', 'CMR', 'CMR.svg'),
(43, 'Canada', 'Ottawa', 'CAN', 'CAN.svg'),
(44, 'Cabo Verde', 'Praia', 'CPV', 'CPV.svg'),
(45, 'Cayman Islands', 'George Town', 'CYM', 'CYM.svg'),
(46, 'Central African Republic', 'Bangui', 'CAF', 'CAF.svg'),
(47, 'Chad', 'N''Djamena', 'TCD', 'TCD.svg'),
(48, 'Chile', 'Santiago', 'CHL', 'CHL.svg'),
(49, 'China', 'Beijing', 'CHN', 'CHN.svg'),
(50, 'Christmas Island', 'Flying Fish Cove', 'CXR', 'CXR.svg'),
(51, 'Cocos (Keeling) Islands', 'West Island', 'CCK', 'CCK.svg'),
(52, 'Colombia', 'BogotÃ¡', 'COL', 'COL.svg'),
(53, 'Comoros', 'Moroni', 'COM', 'COM.svg'),
(54, 'Congo', 'Brazzaville', 'COG', 'COG.svg'),
(55, 'Congo (Democratic Republic of the)', 'Kinshasa', 'COD', 'COD.svg'),
(56, 'Cook Islands', 'Avarua', 'COK', 'COK.svg'),
(57, 'Costa Rica', 'San JosÃ©', 'CRI', 'CRI.svg'),
(58, 'Croatia', 'Zagreb', 'HRV', 'HRV.svg'),
(59, 'Cuba', 'Havana', 'CUB', 'CUB.svg'),
(60, 'CuraÃ§ao', 'Willemstad', 'CUW', 'CUW.svg'),
(61, 'Cyprus', 'Nicosia', 'CYP', 'CYP.svg'),
(62, 'Czech Republic', 'Prague', 'CZE', 'CZE.svg'),
(63, 'Denmark', 'Copenhagen', 'DNK', 'DNK.svg'),
(64, 'Djibouti', 'Djibouti', 'DJI', 'DJI.svg'),
(65, 'Dominica', 'Roseau', 'DMA', 'DMA.svg'),
(66, 'Dominican Republic', 'Santo Domingo', 'DOM', 'DOM.svg'),
(67, 'Ecuador', 'Quito', 'ECU', 'ECU.svg'),
(68, 'Egypt', 'Cairo', 'EGY', 'EGY.svg'),
(69, 'El Salvador', 'San Salvador', 'SLV', 'SLV.svg'),
(70, 'Equatorial Guinea', 'Malabo', 'GNQ', 'GNQ.svg'),
(71, 'Eritrea', 'Asmara', 'ERI', 'ERI.svg'),
(72, 'Estonia', 'Tallinn', 'EST', 'EST.svg'),
(73, 'Ethiopia', 'Addis Ababa', 'ETH', 'ETH.svg'),
(74, 'Falkland Islands (Malvinas)', 'Stanley', 'FLK', 'FLK.svg'),
(75, 'Faroe Islands', 'TÃ³rshavn', 'FRO', 'FRO.svg'),
(76, 'Fiji', 'Suva', 'FJI', 'FJI.svg'),
(77, 'Finland', 'Helsinki', 'FIN', 'FIN.svg'),
(78, 'France', 'Paris', 'FRA', 'FRA.svg'),
(79, 'French Guiana', 'Cayenne', 'GUF', 'GUF.svg'),
(80, 'French Polynesia', 'PapeetÄ“', 'PYF', 'PYF.svg'),
(81, 'French Southern Territories', 'Port-aux-FranÃ§ais', 'ATF', 'ATF.svg'),
(82, 'Gabon', 'Libreville', 'GAB', 'GAB.svg'),
(83, 'Gambia', 'Banjul', 'GMB', 'GMB.svg'),
(84, 'Georgia', 'Tbilisi', 'GEO', 'GEO.svg'),
(85, 'Germany', 'Berlin', 'DEU', 'DEU.svg'),
(86, 'Ghana', 'Accra', 'GHA', 'GHA.svg'),
(87, 'Gibraltar', 'Gibraltar', 'GIB', 'GIB.svg'),
(88, 'Greece', 'Athens', 'GRC', 'GRC.svg'),
(89, 'Greenland', 'Nuuk', 'GRL', 'GRL.svg'),
(90, 'Grenada', 'St. George''s', 'GRD', 'GRD.svg'),
(91, 'Guadeloupe', 'Basse-Terre', 'GLP', 'GLP.svg'),
(92, 'Guam', 'HagÃ¥tÃ±a', 'GUM', 'GUM.svg'),
(93, 'Guatemala', 'Guatemala City', 'GTM', 'GTM.svg'),
(94, 'Guernsey', 'St. Peter Port', 'GGY', 'GGY.svg'),
(95, 'Guinea', 'Conakry', 'GIN', 'GIN.svg'),
(96, 'Guinea-Bissau', 'Bissau', 'GNB', 'GNB.svg'),
(97, 'Guyana', 'Georgetown', 'GUY', 'GUY.svg'),
(98, 'Haiti', 'Port-au-Prince', 'HTI', 'HTI.svg'),
(99, 'Heard Island and McDonald Islands', '', 'HMD', 'HMD.svg'),
(100, 'Holy See', 'Rome', 'VAT', 'VAT.svg'),
(101, 'Honduras', 'Tegucigalpa', 'HND', 'HND.svg'),
(102, 'Hong Kong', 'City of Victoria', 'HKG', 'HKG.svg'),
(103, 'Hungary', 'Budapest', 'HUN', 'HUN.svg'),
(104, 'Iceland', 'ReykjavÃ­k', 'ISL', 'ISL.svg'),
(105, 'India', 'New Delhi', 'IND', 'IND.svg'),
(106, 'Indonesia', 'Jakarta', 'IDN', 'IDN.svg'),
(107, 'CÃ´te d''Ivoire', 'Yamoussoukro', 'CIV', 'CIV.svg'),
(108, 'Iran (Islamic Republic of)', 'Tehran', 'IRN', 'IRN.svg'),
(109, 'Iraq', 'Baghdad', 'IRQ', 'IRQ.svg'),
(110, 'Ireland', 'Dublin', 'IRL', 'IRL.svg'),
(111, 'Isle of Man', 'Douglas', 'IMN', 'IMN.svg'),
(112, 'Israel', 'Jerusalem', 'ISR', 'ISR.svg'),
(113, 'Italy', 'Rome', 'ITA', 'ITA.svg'),
(114, 'Jamaica', 'Kingston', 'JAM', 'JAM.svg'),
(115, 'Japan', 'Tokyo', 'JPN', 'JPN.svg'),
(116, 'Jersey', 'Saint Helier', 'JEY', 'JEY.svg'),
(117, 'Jordan', 'Amman', 'JOR', 'JOR.svg'),
(118, 'Kazakhstan', 'Astana', 'KAZ', 'KAZ.svg'),
(119, 'Kenya', 'Nairobi', 'KEN', 'KEN.svg'),
(120, 'Kiribati', 'South Tarawa', 'KIR', 'KIR.svg'),
(121, 'Kuwait', 'Kuwait City', 'KWT', 'KWT.svg'),
(122, 'Kyrgyzstan', 'Bishkek', 'KGZ', 'KGZ.svg'),
(123, 'Lao People''s Democratic Republic', 'Vientiane', 'LAO', 'LAO.svg'),
(124, 'Latvia', 'Riga', 'LVA', 'LVA.svg'),
(125, 'Lebanon', 'Beirut', 'LBN', 'LBN.svg'),
(126, 'Lesotho', 'Maseru', 'LSO', 'LSO.svg'),
(127, 'Liberia', 'Monrovia', 'LBR', 'LBR.svg'),
(128, 'Libya', 'Tripoli', 'LBY', 'LBY.svg'),
(129, 'Liechtenstein', 'Vaduz', 'LIE', 'LIE.svg'),
(130, 'Lithuania', 'Vilnius', 'LTU', 'LTU.svg'),
(131, 'Luxembourg', 'Luxembourg', 'LUX', 'LUX.svg'),
(132, 'Macao', '', 'MAC', 'MAC.svg'),
(133, 'Macedonia (the former Yugoslav Republic of)', 'Skopje', 'MKD', 'MKD.svg'),
(134, 'Madagascar', 'Antananarivo', 'MDG', 'MDG.svg'),
(135, 'Malawi', 'Lilongwe', 'MWI', 'MWI.svg'),
(136, 'Malaysia', 'Kuala Lumpur', 'MYS', 'MYS.svg'),
(137, 'Maldives', 'MalÃ©', 'MDV', 'MDV.svg'),
(138, 'Mali', 'Bamako', 'MLI', 'MLI.svg'),
(139, 'Malta', 'Valletta', 'MLT', 'MLT.svg'),
(140, 'Marshall Islands', 'Majuro', 'MHL', 'MHL.svg'),
(141, 'Martinique', 'Fort-de-France', 'MTQ', 'MTQ.svg'),
(142, 'Mauritania', 'Nouakchott', 'MRT', 'MRT.svg'),
(143, 'Mauritius', 'Port Louis', 'MUS', 'MUS.svg'),
(144, 'Mayotte', 'Mamoudzou', 'MYT', 'MYT.svg'),
(145, 'Mexico', 'Mexico City', 'MEX', 'MEX.svg'),
(146, 'Micronesia (Federated States of)', 'Palikir', 'FSM', 'FSM.svg'),
(147, 'Moldova (Republic of)', 'ChiÈ™inÄƒu', 'MDA', 'MDA.svg'),
(148, 'Monaco', 'Monaco', 'MCO', 'MCO.svg'),
(149, 'Mongolia', 'Ulan Bator', 'MNG', 'MNG.svg'),
(150, 'Montenegro', 'Podgorica', 'MNE', 'MNE.svg'),
(151, 'Montserrat', 'Plymouth', 'MSR', 'MSR.svg'),
(152, 'Morocco', 'Rabat', 'MAR', 'MAR.svg'),
(153, 'Mozambique', 'Maputo', 'MOZ', 'MOZ.svg'),
(154, 'Myanmar', 'Naypyidaw', 'MMR', 'MMR.svg'),
(155, 'Namibia', 'Windhoek', 'NAM', 'NAM.svg'),
(156, 'Nauru', 'Yaren', 'NRU', 'NRU.svg'),
(157, 'Nepal', 'Kathmandu', 'NPL', 'NPL.svg'),
(158, 'Netherlands', 'Amsterdam', 'NLD', 'NLD.svg'),
(159, 'New Caledonia', 'NoumÃ©a', 'NCL', 'NCL.svg'),
(160, 'New Zealand', 'Wellington', 'NZL', 'NZL.svg'),
(161, 'Nicaragua', 'Managua', 'NIC', 'NIC.svg'),
(162, 'Niger', 'Niamey', 'NER', 'NER.svg'),
(163, 'Nigeria', 'Abuja', 'NGA', 'NGA.svg'),
(164, 'Niue', 'Alofi', 'NIU', 'NIU.svg'),
(165, 'Norfolk Island', 'Kingston', 'NFK', 'NFK.svg'),
(166, 'Korea (Democratic People''s Republic of)', 'Pyongyang', 'PRK', 'PRK.svg'),
(167, 'Northern Mariana Islands', 'Saipan', 'MNP', 'MNP.svg'),
(168, 'Norway', 'Oslo', 'NOR', 'NOR.svg'),
(169, 'Oman', 'Muscat', 'OMN', 'OMN.svg'),
(170, 'Pakistan', 'Islamabad', 'PAK', 'PAK.svg'),
(171, 'Palau', 'Ngerulmud', 'PLW', 'PLW.svg'),
(172, 'Palestine, State of', 'Ramallah', 'PSE', 'PSE.svg'),
(173, 'Panama', 'Panama City', 'PAN', 'PAN.svg'),
(174, 'Papua New Guinea', 'Port Moresby', 'PNG', 'PNG.svg'),
(175, 'Paraguay', 'AsunciÃ³n', 'PRY', 'PRY.svg'),
(176, 'Peru', 'Lima', 'PER', 'PER.svg'),
(177, 'Philippines', 'Manila', 'PHL', 'PHL.svg'),
(178, 'Pitcairn', 'Adamstown', 'PCN', 'PCN.svg'),
(179, 'Poland', 'Warsaw', 'POL', 'POL.svg'),
(180, 'Portugal', 'Lisbon', 'PRT', 'PRT.svg'),
(181, 'Puerto Rico', 'San Juan', 'PRI', 'PRI.svg'),
(182, 'Qatar', 'Doha', 'QAT', 'QAT.svg'),
(183, 'Republic of Kosovo', 'Pristina', 'KOS', 'KOS.svg'),
(184, 'RÃ©union', 'Saint-Denis', 'REU', 'REU.svg'),
(185, 'Romania', 'Bucharest', 'ROU', 'ROU.svg'),
(186, 'Russian Federation', 'Moscow', 'RUS', 'RUS.svg'),
(187, 'Rwanda', 'Kigali', 'RWA', 'RWA.svg'),
(188, 'Saint BarthÃ©lemy', 'Gustavia', 'BLM', 'BLM.svg'),
(189, 'Saint Helena, Ascension and Tristan da Cunha', 'Jamestown', 'SHN', 'SHN.svg'),
(190, 'Saint Kitts and Nevis', 'Basseterre', 'KNA', 'KNA.svg'),
(191, 'Saint Lucia', 'Castries', 'LCA', 'LCA.svg'),
(192, 'Saint Martin (French part)', 'Marigot', 'MAF', 'MAF.svg'),
(193, 'Saint Pierre and Miquelon', 'Saint-Pierre', 'SPM', 'SPM.svg'),
(194, 'Saint Vincent and the Grenadines', 'Kingstown', 'VCT', 'VCT.svg'),
(195, 'Samoa', 'Apia', 'WSM', 'WSM.svg'),
(196, 'San Marino', 'City of San Marino', 'SMR', 'SMR.svg'),
(197, 'Sao Tome and Principe', 'SÃ£o TomÃ©', 'STP', 'STP.svg'),
(198, 'Saudi Arabia', 'Riyadh', 'SAU', 'SAU.svg'),
(199, 'Senegal', 'Dakar', 'SEN', 'SEN.svg'),
(200, 'Serbia', 'Belgrade', 'SRB', 'SRB.svg'),
(201, 'Seychelles', 'Victoria', 'SYC', 'SYC.svg'),
(202, 'Sierra Leone', 'Freetown', 'SLE', 'SLE.svg'),
(203, 'Singapore', 'Singapore', 'SGP', 'SGP.svg'),
(204, 'Sint Maarten (Dutch part)', 'Philipsburg', 'SXM', 'SXM.svg'),
(205, 'Slovakia', 'Bratislava', 'SVK', 'SVK.svg'),
(206, 'Slovenia', 'Ljubljana', 'SVN', 'SVN.svg'),
(207, 'Solomon Islands', 'Honiara', 'SLB', 'SLB.svg'),
(208, 'Somalia', 'Mogadishu', 'SOM', 'SOM.svg'),
(209, 'South Africa', 'Pretoria', 'ZAF', 'ZAF.svg'),
(210, 'South Georgia and the South Sandwich Islands', 'King Edward Point', 'SGS', 'SGS.svg'),
(211, 'Korea (Republic of)', 'Seoul', 'KOR', 'KOR.svg'),
(212, 'South Sudan', 'Juba', 'SSD', 'SSD.svg'),
(213, 'Spain', 'Madrid', 'ESP', 'ESP.svg'),
(214, 'Sri Lanka', 'Colombo', 'LKA', 'LKA.svg'),
(215, 'Sudan', 'Khartoum', 'SDN', 'SDN.svg'),
(216, 'Suriname', 'Paramaribo', 'SUR', 'SUR.svg'),
(217, 'Svalbard and Jan Mayen', 'Longyearbyen', 'SJM', 'SJM.svg'),
(218, 'Swaziland', 'Lobamba', 'SWZ', 'SWZ.svg'),
(219, 'Sweden', 'Stockholm', 'SWE', 'SWE.svg'),
(220, 'Switzerland', 'Bern', 'CHE', 'CHE.svg'),
(221, 'Syrian Arab Republic', 'Damascus', 'SYR', 'SYR.svg'),
(222, 'Taiwan', 'Taipei', 'TWN', 'TWN.svg'),
(223, 'Tajikistan', 'Dushanbe', 'TJK', 'TJK.svg'),
(224, 'Tanzania, United Republic of', 'Dodoma', 'TZA', 'TZA.svg'),
(225, 'Thailand', 'Bangkok', 'THA', 'THA.svg'),
(226, 'Timor-Leste', 'Dili', 'TLS', 'TLS.svg'),
(227, 'Togo', 'LomÃ©', 'TGO', 'TGO.svg'),
(228, 'Tokelau', 'Fakaofo', 'TKL', 'TKL.svg'),
(229, 'Tonga', 'Nuku''alofa', 'TON', 'TON.svg'),
(230, 'Trinidad and Tobago', 'Port of Spain', 'TTO', 'TTO.svg'),
(231, 'Tunisia', 'Tunis', 'TUN', 'TUN.svg'),
(232, 'Turkey', 'Ankara', 'TUR', 'TUR.svg'),
(233, 'Turkmenistan', 'Ashgabat', 'TKM', 'TKM.svg'),
(234, 'Turks and Caicos Islands', 'Cockburn Town', 'TCA', 'TCA.svg'),
(235, 'Tuvalu', 'Funafuti', 'TUV', 'TUV.svg'),
(236, 'Uganda', 'Kampala', 'UGA', 'UGA.svg'),
(237, 'Ukraine', 'Kiev', 'UKR', 'UKR.svg'),
(238, 'United Arab Emirates', 'Abu Dhabi', 'ARE', 'ARE.svg'),
(239, 'United Kingdom of Great Britain and Northern Ireland', 'London', 'GBR', 'GBR.svg'),
(240, 'United States of America', 'Washington, D.C.', 'USA', 'USA.svg'),
(241, 'Uruguay', 'Montevideo', 'URY', 'URY.svg'),
(242, 'Uzbekistan', 'Tashkent', 'UZB', 'UZB.svg'),
(243, 'Vanuatu', 'Port Vila', 'VUT', 'VUT.svg'),
(244, 'Venezuela (Bolivarian Republic of)', 'Caracas', 'VEN', 'VEN.svg'),
(245, 'Viet Nam', 'Hanoi', 'VNM', 'VNM.svg'),
(246, 'Wallis and Futuna', 'Mata-Utu', 'WLF', 'WLF.svg'),
(247, 'Western Sahara', 'El AaiÃºn', 'ESH', 'ESH.svg'),
(248, 'Yemen', 'Sana''a', 'YEM', 'YEM.svg'),
(249, 'Zambia', 'Lusaka', 'ZMB', 'ZMB.svg'),
(250, 'Zimbabwe', 'Harare', 'ZWE', 'ZWE.svg');
