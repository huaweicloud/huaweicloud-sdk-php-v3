<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PushDomainApplication implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PushDomainApplication';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  应用名，默认为live
    * hlsFragment  HLS切片时长，单位：s。
    * hlsTsCount  每个M3U8文件内ts切片个数
    * hlsMinFrags  每个M3U8文件内最小ts分片数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'hlsFragment' => 'int',
            'hlsTsCount' => 'int',
            'hlsMinFrags' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  应用名，默认为live
    * hlsFragment  HLS切片时长，单位：s。
    * hlsTsCount  每个M3U8文件内ts切片个数
    * hlsMinFrags  每个M3U8文件内最小ts分片数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'hlsFragment' => null,
        'hlsTsCount' => null,
        'hlsMinFrags' => null
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
    * name  应用名，默认为live
    * hlsFragment  HLS切片时长，单位：s。
    * hlsTsCount  每个M3U8文件内ts切片个数
    * hlsMinFrags  每个M3U8文件内最小ts分片数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'hlsFragment' => 'hls_fragment',
            'hlsTsCount' => 'hls_ts_count',
            'hlsMinFrags' => 'hls_min_frags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  应用名，默认为live
    * hlsFragment  HLS切片时长，单位：s。
    * hlsTsCount  每个M3U8文件内ts切片个数
    * hlsMinFrags  每个M3U8文件内最小ts分片数
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'hlsFragment' => 'setHlsFragment',
            'hlsTsCount' => 'setHlsTsCount',
            'hlsMinFrags' => 'setHlsMinFrags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  应用名，默认为live
    * hlsFragment  HLS切片时长，单位：s。
    * hlsTsCount  每个M3U8文件内ts切片个数
    * hlsMinFrags  每个M3U8文件内最小ts分片数
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'hlsFragment' => 'getHlsFragment',
            'hlsTsCount' => 'getHlsTsCount',
            'hlsMinFrags' => 'getHlsMinFrags'
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
        $this->container['hlsFragment'] = isset($data['hlsFragment']) ? $data['hlsFragment'] : null;
        $this->container['hlsTsCount'] = isset($data['hlsTsCount']) ? $data['hlsTsCount'] : null;
        $this->container['hlsMinFrags'] = isset($data['hlsMinFrags']) ? $data['hlsMinFrags'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hlsFragment']) && ($this->container['hlsFragment'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsFragment', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsFragment']) && ($this->container['hlsFragment'] < 1)) {
                $invalidProperties[] = "invalid value for 'hlsFragment', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hlsTsCount']) && ($this->container['hlsTsCount'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsTsCount', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsTsCount']) && ($this->container['hlsTsCount'] < 3)) {
                $invalidProperties[] = "invalid value for 'hlsTsCount', must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['hlsMinFrags']) && ($this->container['hlsMinFrags'] > 10)) {
                $invalidProperties[] = "invalid value for 'hlsMinFrags', must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['hlsMinFrags']) && ($this->container['hlsMinFrags'] < 2)) {
                $invalidProperties[] = "invalid value for 'hlsMinFrags', must be bigger than or equal to 2.";
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
    * Gets name
    *  应用名，默认为live
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
    * @param string|null $name 应用名，默认为live
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets hlsFragment
    *  HLS切片时长，单位：s。
    *
    * @return int|null
    */
    public function getHlsFragment()
    {
        return $this->container['hlsFragment'];
    }

    /**
    * Sets hlsFragment
    *
    * @param int|null $hlsFragment HLS切片时长，单位：s。
    *
    * @return $this
    */
    public function setHlsFragment($hlsFragment)
    {
        $this->container['hlsFragment'] = $hlsFragment;
        return $this;
    }

    /**
    * Gets hlsTsCount
    *  每个M3U8文件内ts切片个数
    *
    * @return int|null
    */
    public function getHlsTsCount()
    {
        return $this->container['hlsTsCount'];
    }

    /**
    * Sets hlsTsCount
    *
    * @param int|null $hlsTsCount 每个M3U8文件内ts切片个数
    *
    * @return $this
    */
    public function setHlsTsCount($hlsTsCount)
    {
        $this->container['hlsTsCount'] = $hlsTsCount;
        return $this;
    }

    /**
    * Gets hlsMinFrags
    *  每个M3U8文件内最小ts分片数
    *
    * @return int|null
    */
    public function getHlsMinFrags()
    {
        return $this->container['hlsMinFrags'];
    }

    /**
    * Sets hlsMinFrags
    *
    * @param int|null $hlsMinFrags 每个M3U8文件内最小ts分片数
    *
    * @return $this
    */
    public function setHlsMinFrags($hlsMinFrags)
    {
        $this->container['hlsMinFrags'] = $hlsMinFrags;
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

