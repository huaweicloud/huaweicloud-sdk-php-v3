<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdcardVerificationResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdcardVerificationResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * validNumber  身份证号合法。校验规则为：将身份证号前17位数字分别乘以7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2，再求和，求和结果对11取模，取模结果作为数组[1,0,X,9,8,7,6,5,4,3,2]的下标，从里面取出一位结果，例如取模结果为0，则从数组里取出来的结果是1，最后判断从数组里面取出来的结果是否和身份证号最后一位是否一致。如果一致，代表身份证号合法，返回true，否则代表身份证号不合法，返回false。  当身份证图片是背面时，默认是false。
    * validBirth  身份证号与出生日期一致。出生日期和身份证号的第7位和第14位之间表示的出生日期是否一致。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validSex  身份证号与性别一致。性别和身份证号的第17位表示的性别信息是否一致。身份证号的第17位如果为奇数表示男性，偶数表示女性。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validDate  当前日期在有效期内。当前日期在身份证有效期内返回true，否则返回false。  当身份证图片是正面时，默认是false。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'validNumber' => 'bool',
            'validBirth' => 'bool',
            'validSex' => 'bool',
            'validDate' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * validNumber  身份证号合法。校验规则为：将身份证号前17位数字分别乘以7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2，再求和，求和结果对11取模，取模结果作为数组[1,0,X,9,8,7,6,5,4,3,2]的下标，从里面取出一位结果，例如取模结果为0，则从数组里取出来的结果是1，最后判断从数组里面取出来的结果是否和身份证号最后一位是否一致。如果一致，代表身份证号合法，返回true，否则代表身份证号不合法，返回false。  当身份证图片是背面时，默认是false。
    * validBirth  身份证号与出生日期一致。出生日期和身份证号的第7位和第14位之间表示的出生日期是否一致。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validSex  身份证号与性别一致。性别和身份证号的第17位表示的性别信息是否一致。身份证号的第17位如果为奇数表示男性，偶数表示女性。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validDate  当前日期在有效期内。当前日期在身份证有效期内返回true，否则返回false。  当身份证图片是正面时，默认是false。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'validNumber' => null,
        'validBirth' => null,
        'validSex' => null,
        'validDate' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * validNumber  身份证号合法。校验规则为：将身份证号前17位数字分别乘以7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2，再求和，求和结果对11取模，取模结果作为数组[1,0,X,9,8,7,6,5,4,3,2]的下标，从里面取出一位结果，例如取模结果为0，则从数组里取出来的结果是1，最后判断从数组里面取出来的结果是否和身份证号最后一位是否一致。如果一致，代表身份证号合法，返回true，否则代表身份证号不合法，返回false。  当身份证图片是背面时，默认是false。
    * validBirth  身份证号与出生日期一致。出生日期和身份证号的第7位和第14位之间表示的出生日期是否一致。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validSex  身份证号与性别一致。性别和身份证号的第17位表示的性别信息是否一致。身份证号的第17位如果为奇数表示男性，偶数表示女性。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validDate  当前日期在有效期内。当前日期在身份证有效期内返回true，否则返回false。  当身份证图片是正面时，默认是false。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'validNumber' => 'valid_number',
            'validBirth' => 'valid_birth',
            'validSex' => 'valid_sex',
            'validDate' => 'valid_date'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * validNumber  身份证号合法。校验规则为：将身份证号前17位数字分别乘以7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2，再求和，求和结果对11取模，取模结果作为数组[1,0,X,9,8,7,6,5,4,3,2]的下标，从里面取出一位结果，例如取模结果为0，则从数组里取出来的结果是1，最后判断从数组里面取出来的结果是否和身份证号最后一位是否一致。如果一致，代表身份证号合法，返回true，否则代表身份证号不合法，返回false。  当身份证图片是背面时，默认是false。
    * validBirth  身份证号与出生日期一致。出生日期和身份证号的第7位和第14位之间表示的出生日期是否一致。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validSex  身份证号与性别一致。性别和身份证号的第17位表示的性别信息是否一致。身份证号的第17位如果为奇数表示男性，偶数表示女性。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validDate  当前日期在有效期内。当前日期在身份证有效期内返回true，否则返回false。  当身份证图片是正面时，默认是false。
    *
    * @var string[]
    */
    protected static $setters = [
            'validNumber' => 'setValidNumber',
            'validBirth' => 'setValidBirth',
            'validSex' => 'setValidSex',
            'validDate' => 'setValidDate'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * validNumber  身份证号合法。校验规则为：将身份证号前17位数字分别乘以7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2，再求和，求和结果对11取模，取模结果作为数组[1,0,X,9,8,7,6,5,4,3,2]的下标，从里面取出一位结果，例如取模结果为0，则从数组里取出来的结果是1，最后判断从数组里面取出来的结果是否和身份证号最后一位是否一致。如果一致，代表身份证号合法，返回true，否则代表身份证号不合法，返回false。  当身份证图片是背面时，默认是false。
    * validBirth  身份证号与出生日期一致。出生日期和身份证号的第7位和第14位之间表示的出生日期是否一致。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validSex  身份证号与性别一致。性别和身份证号的第17位表示的性别信息是否一致。身份证号的第17位如果为奇数表示男性，偶数表示女性。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    * validDate  当前日期在有效期内。当前日期在身份证有效期内返回true，否则返回false。  当身份证图片是正面时，默认是false。
    *
    * @var string[]
    */
    protected static $getters = [
            'validNumber' => 'getValidNumber',
            'validBirth' => 'getValidBirth',
            'validSex' => 'getValidSex',
            'validDate' => 'getValidDate'
    ];

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    *
    * @return array
    */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    *
    * @return array
    */
    public static function setters()
    {
        return self::$setters;
    }

    /**
    * Array of attributes to getter functions (for serialization of requests)
    *
    * @return array
    */
    public static function getters()
    {
        return self::$getters;
    }

    /**
    * The original name of the model.
    *
    * @return string
    */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }
    


    /**
    * Associative array for storing property values
    *
    * @var mixed[]
    */
    protected $container = [];

    /**
    * Constructor
    *
    * @param mixed[] $data Associated array of property values
    *                      initializing the model
    */
    public function __construct(array $data = null)
    {
        $this->container['validNumber'] = isset($data['validNumber']) ? $data['validNumber'] : null;
        $this->container['validBirth'] = isset($data['validBirth']) ? $data['validBirth'] : null;
        $this->container['validSex'] = isset($data['validSex']) ? $data['validSex'] : null;
        $this->container['validDate'] = isset($data['validDate']) ? $data['validDate'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        return $invalidProperties;
    }

    /**
    * Validate all the properties in the model
    * return true if all passed
    *
    * @return bool True if all properties are valid
    */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }

    /**
    * Gets validNumber
    *  身份证号合法。校验规则为：将身份证号前17位数字分别乘以7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2，再求和，求和结果对11取模，取模结果作为数组[1,0,X,9,8,7,6,5,4,3,2]的下标，从里面取出一位结果，例如取模结果为0，则从数组里取出来的结果是1，最后判断从数组里面取出来的结果是否和身份证号最后一位是否一致。如果一致，代表身份证号合法，返回true，否则代表身份证号不合法，返回false。  当身份证图片是背面时，默认是false。
    *
    * @return bool|null
    */
    public function getValidNumber()
    {
        return $this->container['validNumber'];
    }

    /**
    * Sets validNumber
    *
    * @param bool|null $validNumber 身份证号合法。校验规则为：将身份证号前17位数字分别乘以7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2，再求和，求和结果对11取模，取模结果作为数组[1,0,X,9,8,7,6,5,4,3,2]的下标，从里面取出一位结果，例如取模结果为0，则从数组里取出来的结果是1，最后判断从数组里面取出来的结果是否和身份证号最后一位是否一致。如果一致，代表身份证号合法，返回true，否则代表身份证号不合法，返回false。  当身份证图片是背面时，默认是false。
    *
    * @return $this
    */
    public function setValidNumber($validNumber)
    {
        $this->container['validNumber'] = $validNumber;
        return $this;
    }

    /**
    * Gets validBirth
    *  身份证号与出生日期一致。出生日期和身份证号的第7位和第14位之间表示的出生日期是否一致。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    *
    * @return bool|null
    */
    public function getValidBirth()
    {
        return $this->container['validBirth'];
    }

    /**
    * Sets validBirth
    *
    * @param bool|null $validBirth 身份证号与出生日期一致。出生日期和身份证号的第7位和第14位之间表示的出生日期是否一致。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    *
    * @return $this
    */
    public function setValidBirth($validBirth)
    {
        $this->container['validBirth'] = $validBirth;
        return $this;
    }

    /**
    * Gets validSex
    *  身份证号与性别一致。性别和身份证号的第17位表示的性别信息是否一致。身份证号的第17位如果为奇数表示男性，偶数表示女性。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    *
    * @return bool|null
    */
    public function getValidSex()
    {
        return $this->container['validSex'];
    }

    /**
    * Sets validSex
    *
    * @param bool|null $validSex 身份证号与性别一致。性别和身份证号的第17位表示的性别信息是否一致。身份证号的第17位如果为奇数表示男性，偶数表示女性。一致返回true，否则返回false。  当身份证图片是背面时，默认是false。
    *
    * @return $this
    */
    public function setValidSex($validSex)
    {
        $this->container['validSex'] = $validSex;
        return $this;
    }

    /**
    * Gets validDate
    *  当前日期在有效期内。当前日期在身份证有效期内返回true，否则返回false。  当身份证图片是正面时，默认是false。
    *
    * @return bool|null
    */
    public function getValidDate()
    {
        return $this->container['validDate'];
    }

    /**
    * Sets validDate
    *
    * @param bool|null $validDate 当前日期在有效期内。当前日期在身份证有效期内返回true，否则返回false。  当身份证图片是正面时，默认是false。
    *
    * @return $this
    */
    public function setValidDate($validDate)
    {
        $this->container['validDate'] = $validDate;
        return $this;
    }

    /**
    * Returns true if offset exists. False otherwise.
    *
    * @param integer $offset Offset
    *
    * @return boolean
    */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
    * Gets offset.
    *
    * @param integer $offset Offset
    *
    * @return mixed
    */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
    * Sets value based on offset.
    *
    * @param integer $offset Offset
    * @param mixed   $value  Value to be set
    *
    * @return void
    */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
                $this->container[] = $value;
            } else {
                $this->container[$offset] = $value;
        }
    }

    /**
    * Unsets offset.
    *
    * @param integer $offset Offset
    *
    * @return void
    */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
    * Gets the string presentation of the object
    *
    * @return string
    */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

