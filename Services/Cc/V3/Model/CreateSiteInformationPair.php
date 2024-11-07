<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateSiteInformationPair implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateSiteInformationPair';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sites  端到端(P2P)类型分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sites' => '\HuaweiCloud\SDK\Cc\V3\Model\CreateSiteInformation[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sites  端到端(P2P)类型分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sites' => null
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
    * sites  端到端(P2P)类型分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sites' => 'sites'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sites  端到端(P2P)类型分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $setters = [
            'sites' => 'setSites'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sites  端到端(P2P)类型分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @var string[]
    */
    protected static $getters = [
            'sites' => 'getSites'
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
        $this->container['sites'] = isset($data['sites']) ? $data['sites'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sites'] === null) {
            $invalidProperties[] = "'sites' can't be null";
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
    * Gets sites
    *  端到端(P2P)类型分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\CreateSiteInformation[]
    */
    public function getSites()
    {
        return $this->container['sites'];
    }

    /**
    * Sets sites
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\CreateSiteInformation[] $sites 端到端(P2P)类型分支网络连接的两个端点定义，长度固定为2的数组。
    *
    * @return $this
    */
    public function setSites($sites)
    {
        $this->container['sites'] = $sites;
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

