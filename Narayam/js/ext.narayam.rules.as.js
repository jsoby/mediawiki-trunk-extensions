/**
 * Trasliteration regular expression rules table for Assamese script
 * @author Junaid P V ([[user:Junaidpv]])
 * @date 2010-12-01
 * @credits Derived from Bengali transiliteration scheme developed with help from
 * Belayet Hossain, Jayanta Nath and Ragib Hasan
 * Changes for Assamese suggested by W Chaipau and Prabhakar Sarma Neog
 * License: GPLv3, CC-BY-SA 3.0
 */

var rules = [
['ক্h','c','চ্'],

['([ক-হৰ])্a','', '$1'],
['([ক-হৰ])(a|্A)','', '$1া'],
['([ক-হৰ])্i','', '$1ি'],
['([ক-হৰ])(িi|্I|েe|েE)','', '$1ী'],
['([ক-হৰ])্u','', '$1ু'],
['([ক-হৰ])(ুu|্U|োo|োO)','', '$1ূ'],
['([ক-হৰ])্R','', '$1ৃ'],
['([ক-হৰ])ৃR','', '$1ৄ'],
['([ক-হৰ])্L','', '$1ৢ'],
['([ক-হৰ])ৢL','', '$1ৣ'],
['([ক-হৰ])্(e|E)','', '$1ে'],
['([ক-হৰ])i','', '$1ে'],
['([ক-হৰ])্(o|O)','', '$1ো'],
['([ক-হৰ])u','', '$1ৌ'],
['([ক-হৰ])([া-ৌৗ])?m','', '$1$1ং'],

['ং~','', 'ম্'],
['ংa','', 'ম'],
['ংA','', 'মা'],
['ংi','', 'মি'],
['ংI','', 'মী'],
['ংu','', 'মু'],
['ংU','', 'মূ'],
['ংR','', 'মৃ'],
['ং(e|E)','', 'মে'],
['ং(o|O)','', 'মো'],

['অa','', 'আ'],
['ইi','', 'ঈ'],
['এ(e|E)','', 'ঈ'],
['অi','', 'ঐ'],
['উu','', 'ঊ'],
['ও(o|O)','', 'ঊ'],
['অu','', 'ঔ'],
['ঋR','', 'ৠ'],
['ঌL','', 'ৡ'],

['ক্h','', 'খ্'],
['গ্h','', 'ঘ্'],
['ন্g','', 'ঙ্'],
['চ্h','', 'ছ্'],
['জ্h','', 'ঝ্'],
['ন্j','', 'ঞ্'],
['ট্h','', 'ঠ্'],
['ড্h','', 'ঢ্'],
['ত্h','', 'থ্'],
['দ্h','', 'ধ্'],
['প্h','', 'ফ্'],
['ব্h','', 'ভ্'],
['স্h','', 'ষ্'],


['a','', 'অ'],
['b','', 'ব্'],
['c','', 'ক্'],
['d','', 'দ্'],
['(e|E)','', 'এ'],
//['f','', 'অ'],
['g','', 'গ্'],
['h','', 'স্'],
['i','', 'ই'],
['j','', 'জ্'],
['k','', 'ক্'],
['l','', 'ল্'],
['m','', 'ম্'],
['n','', 'ন্'],
['(o|O)','', 'ও'],
['p','', 'প্'],
//['q','', 'অ'],
['r','', 'ৰ্'],
['s','', 'স্'],
['t','', 'ত্'],
['u','', 'উ'],
//['v','', 'অ'],
//['w','', 'অ'],
//['x','', 'অ'],
['y','', 'য্'],
//['z','', 'অ'],
['A','', 'আ'],
['B','', 'ব্ব্'],
['C','', 'ক্ক্'],
['D','', 'ড্'],
//['F','', 'অ'],
['G','', 'গ্গ্'],
['H','', 'ঃ'],
['I','', 'ঈ'],
['J','', 'জ্জ্'],
['K','', 'ক্ক্'],
['L','', 'ঌ'],
['M','', 'ম্ম্'],
['N','', 'ণ্'],
['P','', 'প্প্'],
//['Q','', 'অ'],
['R','', 'ঋ'],
['S','', 'শ্'],
['T','', 'ট্'],
['U','', 'ঊ'],
//['V','', 'অ'],
//['W','', 'অ'],
//['X','', 'অ'],
['Y','', 'য্য্'],
//['Z','', 'অ'],
['0','', '০'],
['1','', '১'],
['2','', '২'],
['3','', '৩'],
['4','', '৪'],
['5','', '৫'],
['6','', '৬'],
['7','', '৭'],
['8','', '৮'],
['9','', '৯'],

['//','', 'ঽ']
];

jQuery.narayam.addScheme( 'as', {
	'namemsg': 'narayam-as',
	'extended_keyboard': false,
	'lookbackLength': 3,
	'keyBufferLength': 2,
	'rules': rules
} );
