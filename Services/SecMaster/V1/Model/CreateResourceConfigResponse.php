<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateResourceConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateResourceConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * datasets  数据集列表，包含多个数据集对象
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'datasets' => '\HuaweiCloud\SDK\SecMaster\V1\Model\DatasetItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * datasets  数据集列表，包含多个数据集对象
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'datasets' => null
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
    * datasets  数据集列表，包含多个数据集对象
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'datasets' => 'datasets'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * datasets  数据集列表，包含多个数据集对象
    *
    * @var string[]
    */
    protected static $setters = [
            'datasets' => 'setDatasets'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * datasets  数据集列表，包含多个数据集对象
    *
    * @var string[]
    */
    protected static $getters = [
            'datasets' => 'getDatasets'
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
        $this->container['datasets'] = isset($data['datasets']) ? $data['datasets'] : null;
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
    * Gets datasets
    *  数据集列表，包含多个数据集对象
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\DatasetItem[]|null
    */
    public function getDatasets()
    {
        return $this->container['datasets'];
    }

    /**
    * Sets datasets
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\DatasetItem[]|null $datasets 数据集列表，包含多个数据集对象
    *
    * @return $this
    */
    public function setDatasets($datasets)
    {
        $this->container['datasets'] = $datasets;
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

