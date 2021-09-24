<?php

namespace HuaweiCloud\SDK\Ivs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtentionRespDataByNameAndId implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtentionRespDataByNameAndId';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * verificationResult  审核校验结果： \"valid\"表示身份审核通过； \"invalid\"表示身份审核不通过； \"nonexistent\"表示数据源没有该身份证号码，这种情况一般是被验证人正在办理户籍迁移，或者被验证人是军人或政要。
    * verificationMessage  审核校验信息，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    * verificationCode  审核校验代码，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'verificationResult' => 'string',
            'verificationMessage' => 'string',
            'verificationCode' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * verificationResult  审核校验结果： \"valid\"表示身份审核通过； \"invalid\"表示身份审核不通过； \"nonexistent\"表示数据源没有该身份证号码，这种情况一般是被验证人正在办理户籍迁移，或者被验证人是军人或政要。
    * verificationMessage  审核校验信息，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    * verificationCode  审核校验代码，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'verificationResult' => null,
        'verificationMessage' => null,
        'verificationCode' => 'int32'
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
    * verificationResult  审核校验结果： \"valid\"表示身份审核通过； \"invalid\"表示身份审核不通过； \"nonexistent\"表示数据源没有该身份证号码，这种情况一般是被验证人正在办理户籍迁移，或者被验证人是军人或政要。
    * verificationMessage  审核校验信息，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    * verificationCode  审核校验代码，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'verificationResult' => 'verification_result',
            'verificationMessage' => 'verification_message',
            'verificationCode' => 'verification_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * verificationResult  审核校验结果： \"valid\"表示身份审核通过； \"invalid\"表示身份审核不通过； \"nonexistent\"表示数据源没有该身份证号码，这种情况一般是被验证人正在办理户籍迁移，或者被验证人是军人或政要。
    * verificationMessage  审核校验信息，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    * verificationCode  审核校验代码，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @var string[]
    */
    protected static $setters = [
            'verificationResult' => 'setVerificationResult',
            'verificationMessage' => 'setVerificationMessage',
            'verificationCode' => 'setVerificationCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * verificationResult  审核校验结果： \"valid\"表示身份审核通过； \"invalid\"表示身份审核不通过； \"nonexistent\"表示数据源没有该身份证号码，这种情况一般是被验证人正在办理户籍迁移，或者被验证人是军人或政要。
    * verificationMessage  审核校验信息，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    * verificationCode  审核校验代码，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @var string[]
    */
    protected static $getters = [
            'verificationResult' => 'getVerificationResult',
            'verificationMessage' => 'getVerificationMessage',
            'verificationCode' => 'getVerificationCode'
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
        $this->container['verificationResult'] = isset($data['verificationResult']) ? $data['verificationResult'] : null;
        $this->container['verificationMessage'] = isset($data['verificationMessage']) ? $data['verificationMessage'] : null;
        $this->container['verificationCode'] = isset($data['verificationCode']) ? $data['verificationCode'] : null;
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
    * Gets verificationResult
    *  审核校验结果： \"valid\"表示身份审核通过； \"invalid\"表示身份审核不通过； \"nonexistent\"表示数据源没有该身份证号码，这种情况一般是被验证人正在办理户籍迁移，或者被验证人是军人或政要。
    *
    * @return string|null
    */
    public function getVerificationResult()
    {
        return $this->container['verificationResult'];
    }

    /**
    * Sets verificationResult
    *
    * @param string|null $verificationResult 审核校验结果： \"valid\"表示身份审核通过； \"invalid\"表示身份审核不通过； \"nonexistent\"表示数据源没有该身份证号码，这种情况一般是被验证人正在办理户籍迁移，或者被验证人是军人或政要。
    *
    * @return $this
    */
    public function setVerificationResult($verificationResult)
    {
        $this->container['verificationResult'] = $verificationResult;
        return $this;
    }

    /**
    * Gets verificationMessage
    *  审核校验信息，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @return string|null
    */
    public function getVerificationMessage()
    {
        return $this->container['verificationMessage'];
    }

    /**
    * Sets verificationMessage
    *
    * @param string|null $verificationMessage 审核校验信息，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @return $this
    */
    public function setVerificationMessage($verificationMessage)
    {
        $this->container['verificationMessage'] = $verificationMessage;
        return $this;
    }

    /**
    * Gets verificationCode
    *  审核校验代码，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @return int|null
    */
    public function getVerificationCode()
    {
        return $this->container['verificationCode'];
    }

    /**
    * Sets verificationCode
    *
    * @param int|null $verificationCode 审核校验代码，具体参[考校验信息说明](https://support.huaweicloud.com/api-ivs/ivs_02_0017.html)
    *
    * @return $this
    */
    public function setVerificationCode($verificationCode)
    {
        $this->container['verificationCode'] = $verificationCode;
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

