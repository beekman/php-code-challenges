<?php
/* Harold is a kidnapper who wrote a ransom note, but now he is worried it will be traced back to him through his handwriting. He found a magazine and wants to know if he can cut out whole words from it and use them to create an untraceable replica of his ransom note. The words in his note are case-sensitive and he must use only whole words available in the magazine. He cannot use substrings or concatenation to create the words he needs.

Given the words in the magazine and the words in the ransom note, print Yes if he can replicate his ransom note exactly using whole words from the magazine; otherwise, print No.

Example
 = "attack at dawn"  = "Attack at dawn"

The magazine has all the right words, but there is a case mismatch. The answer is .

Function Description

Complete the checkMagazine function in the editor below. It must print  if the note can be formed using the magazine, or .

checkMagazine has the following parameters:

string magazine[m]: the words in the magazine
string note[n]: the words in the ransom note
Prints

string: either  or , no return value is expected
Input Format

The first line contains two space-separated integers,  and , the numbers of words in the  and the , respectively.
The second line contains  space-separated strings, each .
The third line contains  space-separated strings, each .

Constraints

.
Each word consists of English alphabetic letters (i.e.,  to  and  to ).
Sample Input 0

6 4
give me one grand today night
give one grand today
Sample Output 0
Yes

Sample Input 1
6 5
two times three is not four
two times two is four
Sample Output 1
No
Explanation 1
'two' only occurs once in the magazine.

Sample Input 2
7 4
ive got a lovely bunch of coconuts
ive got some coconuts
Sample Output 2
No
Explanation 2
Harold's magazine is missing the word some. */

/*
 * Complete the 'checkMagazine' function below.
 *
 * The function accepts following parameters:
 *  1. STRING_ARRAY magazine
 *  2. STRING_ARRAY note
 */

function checkMagazine($magazine, $note){
	$magazine = array_count_values($magazine);
	$note = array_count_values($note);
	foreach($note as $word => $value){
		if(!isset($magazine[$word]) || $magazine[$word] < $value){
			echo "No";
			return;
		}
	}
	echo "Yes";
}

$first_multiple_input = explode(' ', rtrim(fgets(STDIN)));

$m = intval($first_multiple_input[0]);

$n = intval($first_multiple_input[1]);

$magazine_temp = rtrim(fgets(STDIN));

$magazine = preg_split('/ /', $magazine_temp, -1, PREG_SPLIT_NO_EMPTY);

$note_temp = rtrim(fgets(STDIN));

$note = preg_split('/ /', $note_temp, -1, PREG_SPLIT_NO_EMPTY);

checkMagazine($magazine, $note);
