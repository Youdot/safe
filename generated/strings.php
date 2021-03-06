<?php

namespace Safe;

use Safe\Exceptions\StringsException;

/**
 * convert_uudecode decodes a uuencoded string.
 *
 * @param string $string The uuencoded data.
 * @return string Returns the decoded data as a string.
 * @throws StringsException
 *
 */
function convert_uudecode(string $string): string
{
    error_clear_last();
    $result = \convert_uudecode($string);
    if ($result === false) {
        throw StringsException::createFromPhpError();
    }
    return $result;
}


/**
 * Counts the number of occurrences of every byte-value (0..255) in
 * string and returns it in various ways.
 *
 * @param string $string The examined string.
 * @param int $mode See return values.
 * @return mixed Depending on mode
 * count_chars returns one of the following:
 *
 *
 *
 * 0 - an array with the byte-value as key and the frequency of
 * every byte as value.
 *
 *
 *
 *
 * 1 - same as 0 but only byte-values with a frequency greater
 * than zero are listed.
 *
 *
 *
 *
 * 2 - same as 0 but only byte-values with a frequency equal to
 * zero are listed.
 *
 *
 *
 *
 * 3 - a string containing all unique characters is returned.
 *
 *
 *
 *
 * 4 - a string containing all not used characters is returned.
 *
 *
 *
 * @throws StringsException
 *
 */
function count_chars(string $string, int $mode = 0)
{
    error_clear_last();
    $result = \count_chars($string, $mode);
    if ($result === false) {
        throw StringsException::createFromPhpError();
    }
    return $result;
}


/**
 * Decodes a hexadecimally encoded binary string.
 *
 * @param string $string Hexadecimal representation of data.
 * @return string Returns the binary representation of the given data.
 * @throws StringsException
 *
 */
function hex2bin(string $string): string
{
    error_clear_last();
    $result = \hex2bin($string);
    if ($result === false) {
        throw StringsException::createFromPhpError();
    }
    return $result;
}


/**
 * Calculates the MD5 hash of the file specified by the
 * filename parameter using the
 * RSA Data Security, Inc.
 * MD5 Message-Digest Algorithm, and returns that hash.
 * The hash is a 32-character hexadecimal number.
 *
 * @param string $filename The filename
 * @param bool $binary When TRUE, returns the digest in raw binary format with a length of
 * 16.
 * @return string Returns a string on success, FALSE otherwise.
 * @throws StringsException
 *
 */
function md5_file(string $filename, bool $binary = false): string
{
    error_clear_last();
    $result = \md5_file($filename, $binary);
    if ($result === false) {
        throw StringsException::createFromPhpError();
    }
    return $result;
}


/**
 * Calculates the metaphone key of string.
 *
 * Similar to soundex metaphone creates the same key for
 * similar sounding words. It's more accurate than
 * soundex as it knows the basic rules of English
 * pronunciation.  The metaphone generated keys are of variable length.
 *
 * Metaphone was developed by Lawrence Philips
 * &lt;lphilips at verity dot com&gt;. It is described in ["Practical
 * Algorithms for Programmers", Binstock &amp; Rex, Addison Wesley,
 * 1995].
 *
 * @param string $string The input string.
 * @param int $max_phonemes This parameter restricts the returned metaphone key to
 * max_phonemes characters in length.
 * However, the resulting phonemes are always transcribed completely, so the
 * resulting string length may be slightly longer than max_phonemes.
 * The default value of 0 means no restriction.
 * @return string Returns the metaphone key as a string.
 * @throws StringsException
 *
 */
function metaphone(string $string, int $max_phonemes = 0): string
{
    error_clear_last();
    $result = \metaphone($string, $max_phonemes);
    if ($result === false) {
        throw StringsException::createFromPhpError();
    }
    return $result;
}


/**
 *
 *
 * @param string $filename The filename of the file to hash.
 * @param bool $binary When TRUE, returns the digest in raw binary format with a length of
 * 20.
 * @return string Returns a string on success, FALSE otherwise.
 * @throws StringsException
 *
 */
function sha1_file(string $filename, bool $binary = false): string
{
    error_clear_last();
    $result = \sha1_file($filename, $binary);
    if ($result === false) {
        throw StringsException::createFromPhpError();
    }
    return $result;
}


/**
 * Returns the portion of string specified by the
 * offset and length parameters.
 *
 * @param string $string The input string.
 * @param int $offset If offset is non-negative, the returned string
 * will start at the offset'th position in
 * string, counting from zero. For instance,
 * in the string 'abcdef', the character at
 * position 0 is 'a', the
 * character at position 2 is
 * 'c', and so forth.
 *
 * If offset is negative, the returned string
 * will start at the offset'th character
 * from the end of string.
 *
 * If string is less than
 * offset characters long, FALSE will be returned.
 *
 *
 * Using a negative offset
 *
 *
 * ]]>
 *
 *
 * @param int $length If length is given and is positive, the string
 * returned will contain at most length characters
 * beginning from offset (depending on the length of
 * string).
 *
 * If length is given and is negative, then that many
 * characters will be omitted from the end of string
 * (after the start position has been calculated when a
 * offset is negative).  If
 * offset denotes the position of this truncation or
 * beyond, FALSE will be returned.
 *
 * If length is given and is 0,
 * FALSE or NULL, an empty string will be returned.
 *
 * If length is omitted, the substring starting from
 * offset until the end of the string will be
 * returned.
 * @return string Returns the extracted part of string;, or
 * an empty string.
 * @throws StringsException
 *
 */
function substr(string $string, int $offset, int $length = null): string
{
    error_clear_last();
    if ($length !== null) {
        $result = \substr($string, $offset, $length);
    } else {
        $result = \substr($string, $offset);
    }
    if ($result === false) {
        throw StringsException::createFromPhpError();
    }
    return $result;
}
