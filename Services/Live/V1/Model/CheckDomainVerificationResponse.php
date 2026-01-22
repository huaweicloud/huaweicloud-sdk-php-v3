<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckDomainVerificationResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckDomainVerificationResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domain  主域名
    * verifyContent  校验值，解析值或者文件内容
    * verifyResult  验证结果，true为验证成功确认归属，false为归属情况未确认
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domain' => 'string',
            'verifyContent' => 'string',
            'verifyResult' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domain  主域名
    * verifyContent  校验值，解析值或者文件内容
    * verifyResult  验证结果，true为验证成功确认归属，false为归属情况未确认
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domain' => null,
        'verifyContent' => null,
        'verifyResult' => null
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
    * domain  主域名
    * verifyContent  校验值，解析值或者文件内容
    * verifyResult  验证结果，true为验证成功确认归属，false为归属情况未确认
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domain' => 'domain',
            'verifyContent' => 'verify_content',
            'verifyResult' => 'verify_result'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domain  主域名
    * verifyContent  校验值，解析值或者文件内容
    * verifyResult  验证结果，true为验证成功确认归属，false为归属情况未确认
    *
    * @var string[]
    */
    protected static $setters = [
            'domain' => 'setDomain',
            'verifyContent' => 'setVerifyContent',
            'verifyResult' => 'setVerifyResult'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domain  主域名
    * verifyContent  校验值，解析值或者文件内容
    * verifyResult  验证结果，true为验证成功确认归属，false为归属情况未确认
    *
    * @var string[]
    */
    protected static $getters = [
            'domain' => 'getDomain',
            'verifyContent' => 'getVerifyContent',
            'verifyResult' => 'getVerifyResult'
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
        $this->container['domain'] = isset($data['domain']) ? $data['domain'] : null;
        $this->container['verifyContent'] = isset($data['verifyContent']) ? $data['verifyContent'] : null;
        $this->container['verifyResult'] = isset($data['verifyResult']) ? $data['verifyResult'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) > 255)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['domain']) && (mb_strlen($this->container['domain']) < 1)) {
                $invalidProperties[] = "invalid value for 'domain', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['verifyContent']) && (mb_strlen($this->container['verifyContent']) > 255)) {
                $invalidProperties[] = "invalid value for 'verifyContent', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['verifyContent']) && (mb_strlen($this->container['verifyContent']) < 1)) {
                $invalidProperties[] = "invalid value for 'verifyContent', the character length must be bigger than or equal to 1.";
            }
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
    * Gets domain
    *  主域名
    *
    * @return string|null
    */
    public function getDomain()
    {
        return $this->container['domain'];
    }

    /**
    * Sets domain
    *
    * @param string|null $domain 主域名
    *
    * @return $this
    */
    public function setDomain($domain)
    {
        $this->container['domain'] = $domain;
        return $this;
    }

    /**
    * Gets verifyContent
    *  校验值，解析值或者文件内容
    *
    * @return string|null
    */
    public function getVerifyContent()
    {
        return $this->container['verifyContent'];
    }

    /**
    * Sets verifyContent
    *
    * @param string|null $verifyContent 校验值，解析值或者文件内容
    *
    * @return $this
    */
    public function setVerifyContent($verifyContent)
    {
        $this->container['verifyContent'] = $verifyContent;
        return $this;
    }

    /**
    * Gets verifyResult
    *  验证结果，true为验证成功确认归属，false为归属情况未确认
    *
    * @return bool|null
    */
    public function getVerifyResult()
    {
        return $this->container['verifyResult'];
    }

    /**
    * Sets verifyResult
    *
    * @param bool|null $verifyResult 验证结果，true为验证成功确认归属，false为归属情况未确认
    *
    * @return $this
    */
    public function setVerifyResult($verifyResult)
    {
        $this->container['verifyResult'] = $verifyResult;
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

