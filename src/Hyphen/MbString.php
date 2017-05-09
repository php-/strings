<?php

namespace Hyphen;

/**
 * @author George Garchagudashvili <george@worldnet-intl.com>
 */
class MbString
{
    protected $encoding;
    
    public function __construct($encoding = 'utf-8')
    {
        $this->encoding = $encoding;
        mb_regex_encoding($encoding);
        mb_internal_encoding($encoding); 
    }
    
    public function lower(string $str) : string
    {
        return mb_strtolower($str, $this->encoding);
    }
    
    public function upper(string $str): string 
    {
        return mb_strtoupper($str, $this->encoding);
    }
    
    public function upFirst(string $str): string
    {
        
    }
    
    public function splitAtIndex(string $str, int $pos): array
    {
        
    }
}
