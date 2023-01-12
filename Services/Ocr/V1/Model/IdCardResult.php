<?php

namespace HuaweiCloud\SDK\Ocr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IdCardResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IdCardResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * detectReproduceResult  判断身份证图像是否经过翻拍，“true”表示是翻拍，“false”表示未经过翻拍。仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  判断身份证图像是黑白复印件还是原件，“true”表示是复印件，“false”表示是原件。仅在输入参数detect_copy为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'sex' => 'string',
            'birth' => 'string',
            'ethnicity' => 'string',
            'address' => 'string',
            'number' => 'string',
            'issue' => 'string',
            'validFrom' => 'string',
            'validTo' => 'string',
            'verificationResult' => '\HuaweiCloud\SDK\Ocr\V1\Model\IdcardVerificationResult',
            'textLocation' => 'object',
            'detectReproduceResult' => 'bool',
            'detectCopyResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * detectReproduceResult  判断身份证图像是否经过翻拍，“true”表示是翻拍，“false”表示未经过翻拍。仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  判断身份证图像是黑白复印件还是原件，“true”表示是复印件，“false”表示是原件。仅在输入参数detect_copy为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'sex' => null,
        'birth' => null,
        'ethnicity' => null,
        'address' => null,
        'number' => null,
        'issue' => null,
        'validFrom' => null,
        'validTo' => null,
        'verificationResult' => null,
        'textLocation' => null,
        'detectReproduceResult' => null,
        'detectCopyResult' => null
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
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * detectReproduceResult  判断身份证图像是否经过翻拍，“true”表示是翻拍，“false”表示未经过翻拍。仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  判断身份证图像是黑白复印件还是原件，“true”表示是复印件，“false”表示是原件。仅在输入参数detect_copy为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'sex' => 'sex',
            'birth' => 'birth',
            'ethnicity' => 'ethnicity',
            'address' => 'address',
            'number' => 'number',
            'issue' => 'issue',
            'validFrom' => 'valid_from',
            'validTo' => 'valid_to',
            'verificationResult' => 'verification_result',
            'textLocation' => 'text_location',
            'detectReproduceResult' => 'detect_reproduce_result',
            'detectCopyResult' => 'detect_copy_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * detectReproduceResult  判断身份证图像是否经过翻拍，“true”表示是翻拍，“false”表示未经过翻拍。仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  判断身份证图像是黑白复印件还是原件，“true”表示是复印件，“false”表示是原件。仅在输入参数detect_copy为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'sex' => 'setSex',
            'birth' => 'setBirth',
            'ethnicity' => 'setEthnicity',
            'address' => 'setAddress',
            'number' => 'setNumber',
            'issue' => 'setIssue',
            'validFrom' => 'setValidFrom',
            'validTo' => 'setValidTo',
            'verificationResult' => 'setVerificationResult',
            'textLocation' => 'setTextLocation',
            'detectReproduceResult' => 'setDetectReproduceResult',
            'detectCopyResult' => 'setDetectCopyResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  姓名。
    * sex  性别。
    * birth  出生日期。
    * ethnicity  民族。
    * address  地址。
    * number  身份证号。
    * issue  发证机关。
    * validFrom  有效起始日期。
    * validTo  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    * verificationResult  verificationResult
    * textLocation  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    * detectReproduceResult  判断身份证图像是否经过翻拍，“true”表示是翻拍，“false”表示未经过翻拍。仅在输入参数detect_reproduce为true时，返回该字段。
    * detectCopyResult  判断身份证图像是黑白复印件还是原件，“true”表示是复印件，“false”表示是原件。仅在输入参数detect_copy为true时，返回该字段。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'sex' => 'getSex',
            'birth' => 'getBirth',
            'ethnicity' => 'getEthnicity',
            'address' => 'getAddress',
            'number' => 'getNumber',
            'issue' => 'getIssue',
            'validFrom' => 'getValidFrom',
            'validTo' => 'getValidTo',
            'verificationResult' => 'getVerificationResult',
            'textLocation' => 'getTextLocation',
            'detectReproduceResult' => 'getDetectReproduceResult',
            'detectCopyResult' => 'getDetectCopyResult'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sex'] = isset($data['sex']) ? $data['sex'] : null;
        $this->container['birth'] = isset($data['birth']) ? $data['birth'] : null;
        $this->container['ethnicity'] = isset($data['ethnicity']) ? $data['ethnicity'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['number'] = isset($data['number']) ? $data['number'] : null;
        $this->container['issue'] = isset($data['issue']) ? $data['issue'] : null;
        $this->container['validFrom'] = isset($data['validFrom']) ? $data['validFrom'] : null;
        $this->container['validTo'] = isset($data['validTo']) ? $data['validTo'] : null;
        $this->container['verificationResult'] = isset($data['verificationResult']) ? $data['verificationResult'] : null;
        $this->container['textLocation'] = isset($data['textLocation']) ? $data['textLocation'] : null;
        $this->container['detectReproduceResult'] = isset($data['detectReproduceResult']) ? $data['detectReproduceResult'] : null;
        $this->container['detectCopyResult'] = isset($data['detectCopyResult']) ? $data['detectCopyResult'] : null;
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
    * Gets name
    *  姓名。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 姓名。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sex
    *  性别。
    *
    * @return string|null
    */
    public function getSex()
    {
        return $this->container['sex'];
    }

    /**
    * Sets sex
    *
    * @param string|null $sex 性别。
    *
    * @return $this
    */
    public function setSex($sex)
    {
        $this->container['sex'] = $sex;
        return $this;
    }

    /**
    * Gets birth
    *  出生日期。
    *
    * @return string|null
    */
    public function getBirth()
    {
        return $this->container['birth'];
    }

    /**
    * Sets birth
    *
    * @param string|null $birth 出生日期。
    *
    * @return $this
    */
    public function setBirth($birth)
    {
        $this->container['birth'] = $birth;
        return $this;
    }

    /**
    * Gets ethnicity
    *  民族。
    *
    * @return string|null
    */
    public function getEthnicity()
    {
        return $this->container['ethnicity'];
    }

    /**
    * Sets ethnicity
    *
    * @param string|null $ethnicity 民族。
    *
    * @return $this
    */
    public function setEthnicity($ethnicity)
    {
        $this->container['ethnicity'] = $ethnicity;
        return $this;
    }

    /**
    * Gets address
    *  地址。
    *
    * @return string|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string|null $address 地址。
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets number
    *  身份证号。
    *
    * @return string|null
    */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
    * Sets number
    *
    * @param string|null $number 身份证号。
    *
    * @return $this
    */
    public function setNumber($number)
    {
        $this->container['number'] = $number;
        return $this;
    }

    /**
    * Gets issue
    *  发证机关。
    *
    * @return string|null
    */
    public function getIssue()
    {
        return $this->container['issue'];
    }

    /**
    * Sets issue
    *
    * @param string|null $issue 发证机关。
    *
    * @return $this
    */
    public function setIssue($issue)
    {
        $this->container['issue'] = $issue;
        return $this;
    }

    /**
    * Gets validFrom
    *  有效起始日期。
    *
    * @return string|null
    */
    public function getValidFrom()
    {
        return $this->container['validFrom'];
    }

    /**
    * Sets validFrom
    *
    * @param string|null $validFrom 有效起始日期。
    *
    * @return $this
    */
    public function setValidFrom($validFrom)
    {
        $this->container['validFrom'] = $validFrom;
        return $this;
    }

    /**
    * Gets validTo
    *  有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    *
    * @return string|null
    */
    public function getValidTo()
    {
        return $this->container['validTo'];
    }

    /**
    * Sets validTo
    *
    * @param string|null $validTo 有效结束日期。  > 说明： - 身份证识别支持中华人民共和国居民身份证识别。
    *
    * @return $this
    */
    public function setValidTo($validTo)
    {
        $this->container['validTo'] = $validTo;
        return $this;
    }

    /**
    * Gets verificationResult
    *  verificationResult
    *
    * @return \HuaweiCloud\SDK\Ocr\V1\Model\IdcardVerificationResult|null
    */
    public function getVerificationResult()
    {
        return $this->container['verificationResult'];
    }

    /**
    * Sets verificationResult
    *
    * @param \HuaweiCloud\SDK\Ocr\V1\Model\IdcardVerificationResult|null $verificationResult verificationResult
    *
    * @return $this
    */
    public function setVerificationResult($verificationResult)
    {
        $this->container['verificationResult'] = $verificationResult;
        return $this;
    }

    /**
    * Gets textLocation
    *  文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @return object|null
    */
    public function getTextLocation()
    {
        return $this->container['textLocation'];
    }

    /**
    * Sets textLocation
    *
    * @param object|null $textLocation 文本框在原图位置。输出左上、右上、右下、左下四个点坐标。当“return_text_location”设置为“true”时才返回。
    *
    * @return $this
    */
    public function setTextLocation($textLocation)
    {
        $this->container['textLocation'] = $textLocation;
        return $this;
    }

    /**
    * Gets detectReproduceResult
    *  判断身份证图像是否经过翻拍，“true”表示是翻拍，“false”表示未经过翻拍。仅在输入参数detect_reproduce为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectReproduceResult()
    {
        return $this->container['detectReproduceResult'];
    }

    /**
    * Sets detectReproduceResult
    *
    * @param bool|null $detectReproduceResult 判断身份证图像是否经过翻拍，“true”表示是翻拍，“false”表示未经过翻拍。仅在输入参数detect_reproduce为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectReproduceResult($detectReproduceResult)
    {
        $this->container['detectReproduceResult'] = $detectReproduceResult;
        return $this;
    }

    /**
    * Gets detectCopyResult
    *  判断身份证图像是黑白复印件还是原件，“true”表示是复印件，“false”表示是原件。仅在输入参数detect_copy为true时，返回该字段。
    *
    * @return bool|null
    */
    public function getDetectCopyResult()
    {
        return $this->container['detectCopyResult'];
    }

    /**
    * Sets detectCopyResult
    *
    * @param bool|null $detectCopyResult 判断身份证图像是黑白复印件还是原件，“true”表示是复印件，“false”表示是原件。仅在输入参数detect_copy为true时，返回该字段。
    *
    * @return $this
    */
    public function setDetectCopyResult($detectCopyResult)
    {
        $this->container['detectCopyResult'] = $detectCopyResult;
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

