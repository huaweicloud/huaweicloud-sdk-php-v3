<?php

namespace HuaweiCloud\SDK\Aad\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CadDomainSwitchRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CadDomainSwitchRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * domainId  域名id
    * wafSwitch  是否开启WEB基础防护开关。0 - 开启， 1 - 关闭
    * ccSwitch  是否开启CC防护开关。0 - 开启， 1 - 关闭。开启CC开关必须同时开启WEB基础防护开关
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'domainId' => 'string',
            'wafSwitch' => 'int',
            'ccSwitch' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * domainId  域名id
    * wafSwitch  是否开启WEB基础防护开关。0 - 开启， 1 - 关闭
    * ccSwitch  是否开启CC防护开关。0 - 开启， 1 - 关闭。开启CC开关必须同时开启WEB基础防护开关
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'domainId' => null,
        'wafSwitch' => 'int32',
        'ccSwitch' => 'int32'
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
    * domainId  域名id
    * wafSwitch  是否开启WEB基础防护开关。0 - 开启， 1 - 关闭
    * ccSwitch  是否开启CC防护开关。0 - 开启， 1 - 关闭。开启CC开关必须同时开启WEB基础防护开关
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'domainId' => 'domain_id',
            'wafSwitch' => 'waf_switch',
            'ccSwitch' => 'cc_switch'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * domainId  域名id
    * wafSwitch  是否开启WEB基础防护开关。0 - 开启， 1 - 关闭
    * ccSwitch  是否开启CC防护开关。0 - 开启， 1 - 关闭。开启CC开关必须同时开启WEB基础防护开关
    *
    * @var string[]
    */
    protected static $setters = [
            'domainId' => 'setDomainId',
            'wafSwitch' => 'setWafSwitch',
            'ccSwitch' => 'setCcSwitch'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * domainId  域名id
    * wafSwitch  是否开启WEB基础防护开关。0 - 开启， 1 - 关闭
    * ccSwitch  是否开启CC防护开关。0 - 开启， 1 - 关闭。开启CC开关必须同时开启WEB基础防护开关
    *
    * @var string[]
    */
    protected static $getters = [
            'domainId' => 'getDomainId',
            'wafSwitch' => 'getWafSwitch',
            'ccSwitch' => 'getCcSwitch'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['wafSwitch'] = isset($data['wafSwitch']) ? $data['wafSwitch'] : null;
        $this->container['ccSwitch'] = isset($data['ccSwitch']) ? $data['ccSwitch'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['wafSwitch'] === null) {
            $invalidProperties[] = "'wafSwitch' can't be null";
        }
        if ($this->container['ccSwitch'] === null) {
            $invalidProperties[] = "'ccSwitch' can't be null";
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
    * Gets domainId
    *  域名id
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 域名id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets wafSwitch
    *  是否开启WEB基础防护开关。0 - 开启， 1 - 关闭
    *
    * @return int
    */
    public function getWafSwitch()
    {
        return $this->container['wafSwitch'];
    }

    /**
    * Sets wafSwitch
    *
    * @param int $wafSwitch 是否开启WEB基础防护开关。0 - 开启， 1 - 关闭
    *
    * @return $this
    */
    public function setWafSwitch($wafSwitch)
    {
        $this->container['wafSwitch'] = $wafSwitch;
        return $this;
    }

    /**
    * Gets ccSwitch
    *  是否开启CC防护开关。0 - 开启， 1 - 关闭。开启CC开关必须同时开启WEB基础防护开关
    *
    * @return int
    */
    public function getCcSwitch()
    {
        return $this->container['ccSwitch'];
    }

    /**
    * Sets ccSwitch
    *
    * @param int $ccSwitch 是否开启CC防护开关。0 - 开启， 1 - 关闭。开启CC开关必须同时开启WEB基础防护开关
    *
    * @return $this
    */
    public function setCcSwitch($ccSwitch)
    {
        $this->container['ccSwitch'] = $ccSwitch;
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

