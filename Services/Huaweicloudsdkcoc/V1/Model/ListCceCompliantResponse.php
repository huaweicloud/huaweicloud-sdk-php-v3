<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCceCompliantResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCceCompliantResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  总数
    * cceInfoList  CCE信息列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'cceInfoList' => '\HuaweiCloud\SDK\Coc\V1\Model\CceInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  总数
    * cceInfoList  CCE信息列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => 'int64',
        'cceInfoList' => null
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
    * count  总数
    * cceInfoList  CCE信息列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'cceInfoList' => 'cce_info_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  总数
    * cceInfoList  CCE信息列表
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'cceInfoList' => 'setCceInfoList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  总数
    * cceInfoList  CCE信息列表
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'cceInfoList' => 'getCceInfoList'
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
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['cceInfoList'] = isset($data['cceInfoList']) ? $data['cceInfoList'] : null;
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
    * Gets count
    *  总数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets cceInfoList
    *  CCE信息列表
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\CceInfo[]|null
    */
    public function getCceInfoList()
    {
        return $this->container['cceInfoList'];
    }

    /**
    * Sets cceInfoList
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\CceInfo[]|null $cceInfoList CCE信息列表
    *
    * @return $this
    */
    public function setCceInfoList($cceInfoList)
    {
        $this->container['cceInfoList'] = $cceInfoList;
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

