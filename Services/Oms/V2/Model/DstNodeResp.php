<?php

namespace HuaweiCloud\SDK\Oms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DstNodeResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DstNodeResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bucket  目的端桶的名称。
    * region  目的端桶所处的区域。  请与Endpoint对应的区域保持一致。
    * savePrefix  目的端桶内路径前缀（拼接在对象key前面,组成新的key,拼接后不能超过1024个字符）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bucket' => 'string',
            'region' => 'string',
            'savePrefix' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bucket  目的端桶的名称。
    * region  目的端桶所处的区域。  请与Endpoint对应的区域保持一致。
    * savePrefix  目的端桶内路径前缀（拼接在对象key前面,组成新的key,拼接后不能超过1024个字符）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bucket' => null,
        'region' => null,
        'savePrefix' => null
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
    * bucket  目的端桶的名称。
    * region  目的端桶所处的区域。  请与Endpoint对应的区域保持一致。
    * savePrefix  目的端桶内路径前缀（拼接在对象key前面,组成新的key,拼接后不能超过1024个字符）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bucket' => 'bucket',
            'region' => 'region',
            'savePrefix' => 'save_prefix'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bucket  目的端桶的名称。
    * region  目的端桶所处的区域。  请与Endpoint对应的区域保持一致。
    * savePrefix  目的端桶内路径前缀（拼接在对象key前面,组成新的key,拼接后不能超过1024个字符）。
    *
    * @var string[]
    */
    protected static $setters = [
            'bucket' => 'setBucket',
            'region' => 'setRegion',
            'savePrefix' => 'setSavePrefix'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bucket  目的端桶的名称。
    * region  目的端桶所处的区域。  请与Endpoint对应的区域保持一致。
    * savePrefix  目的端桶内路径前缀（拼接在对象key前面,组成新的key,拼接后不能超过1024个字符）。
    *
    * @var string[]
    */
    protected static $getters = [
            'bucket' => 'getBucket',
            'region' => 'getRegion',
            'savePrefix' => 'getSavePrefix'
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
        $this->container['bucket'] = isset($data['bucket']) ? $data['bucket'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['savePrefix'] = isset($data['savePrefix']) ? $data['savePrefix'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['bucket']) && (mb_strlen($this->container['bucket']) > 1024)) {
                $invalidProperties[] = "invalid value for 'bucket', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['bucket']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]$/", $this->container['bucket'])) {
                $invalidProperties[] = "invalid value for 'bucket', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]$/.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 100)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && !preg_match("/^[^<>&\\\"'\\\\\\\\]$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^[^<>&\\\"'\\\\\\\\]$/.";
            }
            if (!is_null($this->container['savePrefix']) && (mb_strlen($this->container['savePrefix']) > 1024)) {
                $invalidProperties[] = "invalid value for 'savePrefix', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['savePrefix']) && (mb_strlen($this->container['savePrefix']) < 0)) {
                $invalidProperties[] = "invalid value for 'savePrefix', the character length must be bigger than or equal to 0.";
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
    * Gets bucket
    *  目的端桶的名称。
    *
    * @return string|null
    */
    public function getBucket()
    {
        return $this->container['bucket'];
    }

    /**
    * Sets bucket
    *
    * @param string|null $bucket 目的端桶的名称。
    *
    * @return $this
    */
    public function setBucket($bucket)
    {
        $this->container['bucket'] = $bucket;
        return $this;
    }

    /**
    * Gets region
    *  目的端桶所处的区域。  请与Endpoint对应的区域保持一致。
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 目的端桶所处的区域。  请与Endpoint对应的区域保持一致。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets savePrefix
    *  目的端桶内路径前缀（拼接在对象key前面,组成新的key,拼接后不能超过1024个字符）。
    *
    * @return string|null
    */
    public function getSavePrefix()
    {
        return $this->container['savePrefix'];
    }

    /**
    * Sets savePrefix
    *
    * @param string|null $savePrefix 目的端桶内路径前缀（拼接在对象key前面,组成新的key,拼接后不能超过1024个字符）。
    *
    * @return $this
    */
    public function setSavePrefix($savePrefix)
    {
        $this->container['savePrefix'] = $savePrefix;
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

