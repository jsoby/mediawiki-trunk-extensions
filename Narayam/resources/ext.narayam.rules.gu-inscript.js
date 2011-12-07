/**
 * InScript regular expression rules table for Gujarati
 * According to CDAC's "Enhanced InScript Keyboard Layout 5.2"
 * @author Junaid P V ([[user:Junaidpv]])
 * @date 2011-11-20
 * License: GPLv3
 */
 
 // Normal rules
var rules = [
['X', '', '\u0A81'],
['x', '', '\u0A82'],
['_', '', '\u0A83'],
['D', '', '\u0A85'],
['E', '', '\u0A86'],
['F', '', '\u0A87'],
['R', '', '\u0A88'],
['G', '', '\u0A89'],
['T', '', '\u0A8A'],
['\\+', '', '\u0A8B'],
['!', '', '\u0A8D'],
['S', '', '\u0A8F'],
['W', '', '\u0A90'],
['\\|', '', '\u0A91'],
['A', '', '\u0A93'],
['Q', '', '\u0A94'],
['k', '', '\u0A95'],
['K', '', '\u0A96'],
['i', '', '\u0A97'],
['I', '', '\u0A98'],
['U', '', '\u0A99'],
[';', '', '\u0A9A'],
['\\:', '', '\u0A9B'],
['p', '', '\u0A9C'],
['P', '', '\u0A9D'],
['\\}', '', '\u0A9E'],
["'", '', '\u0A9F'],
['"', '', '\u0AA0'],
['\\[', '', '\u0AA1'],
['\\{', '', '\u0AA2'],
['C', '', '\u0AA3'],
['l', '', '\u0AA4'],
['L', '', '\u0AA5'],
['o', '', '\u0AA6'],
['O', '', '\u0AA7'],
['v', '', '\u0AA8'],
['h', '', '\u0AAA'],
['H', '', '\u0AAB'],
['y', '', '\u0AAC'],
['Y', '', '\u0AAD'],
['c', '', '\u0AAE'],
['/', '', '\u0AAF'],
['j', '', '\u0AB0'],
['n', '', '\u0AB2'],
['N', '', '\u0AB3'],
['b', '', '\u0AB5'],
['M', '', '\u0AB6'],
['\\<', '', '\u0AB7'],
['m', '', '\u0AB8'],
['u', '', '\u0AB9'],
['\\}', '', '\u0ABC'],
['e', '', '\u0ABE'],
['f', '', '\u0ABF'],
['r', '', '\u0AC0'],
['g', '', '\u0AC1'],
['t', '', '\u0AC2'],
['\\=', '', '\u0AC3'],
['\\@', '', '\u0AC5'],
['s', '', '\u0AC7'],
['w', '', '\u0AC8'],
['\\\\', '', '\u0AC9'],
['a', '', '\u0ACB'],
['q', '', '\u0ACC'],
['d', '', '\u0ACD'],
['\\>', '', '\u0AE4'],
['0', '', '\u0AE6'],
['1', '', '\u0AE7'],
['2', '', '\u0AE8'],
['3', '', '\u0AE9'],
['4', '', '\u0AEA'],
['5', '', '\u0AEB'],
['6', '', '\u0AEC'],
['7', '', '\u0AED'],
['8', '', '\u0AEE'],
['9', '', '\u0AEF'],
['\\#', '', '\u0ACD\u0AB0'],
['\\$', '', '\u0AB0\u0ACD'],
['\\%', '', '\u0A9C\u0ACD\u0A9E'],
['\\^', '', '\u0AA4\u0ACD\u0AB0'],
['\\&', '', '\u0A95\u0ACD\u0AB7'],
['\\*', '', '\u0AB6\u0ACD\u0AB0'],
['\\(', '', '\u200D'],
['\\)', '', '\u200C']
];

var rules_x = [
['F', '', '\u0A8C'],
['\\>', '', '\u0ABD'],
['\\=', '', '\u0AC4'],
['X', '', '\u0AD0'],
['\\+', '', '\u0AE0'],
['R', '', '\u0AE1'],
['f', '', '\u0AE2'],
['r', '', '\u0AE3'],
['\\.', '', '\u0AE5'],
['\\<', '', '\u0AF1'],
['$', '', '\u20B9']
];

jQuery.narayam.addScheme( 'gu-inscript', {
    'namemsg': 'narayam-gu-inscript',
    'extended_keyboard': true,
    'lookbackLength': 0,
    'keyBufferLength': 0,
    'rules': rules,
    'rules_x': rules_x
} ); 
