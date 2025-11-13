<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowVoiceTrainingQuotasResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowVoiceTrainingQuotasResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * count  声音模型训练资源总条数。
    * resourceAvailableNums  resourceAvailableNums
    * resources  声音模型训练资源列表。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'count' => 'int',
            'resourceAvailableNums' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\ResourceAvailableNums',
            'resources' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceTrainingResource[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * count  声音模型训练资源总条数。
    * resourceAvailableNums  resourceAvailableNums
    * resources  声音模型训练资源列表。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'count' => null,
        'resourceAvailableNums' => null,
        'resources' => null
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
    * count  声音模型训练资源总条数。
    * resourceAvailableNums  resourceAvailableNums
    * resources  声音模型训练资源列表。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'count' => 'count',
            'resourceAvailableNums' => 'resource_available_nums',
            'resources' => 'resources'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * count  声音模型训练资源总条数。
    * resourceAvailableNums  resourceAvailableNums
    * resources  声音模型训练资源列表。
    *
    * @var string[]
    */
    protected static $setters = [
            'count' => 'setCount',
            'resourceAvailableNums' => 'setResourceAvailableNums',
            'resources' => 'setResources'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * count  声音模型训练资源总条数。
    * resourceAvailableNums  resourceAvailableNums
    * resources  声音模型训练资源列表。
    *
    * @var string[]
    */
    protected static $getters = [
            'count' => 'getCount',
            'resourceAvailableNums' => 'getResourceAvailableNums',
            'resources' => 'getResources'
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
        $this->container['resourceAvailableNums'] = isset($data['resourceAvailableNums']) ? $data['resourceAvailableNums'] : null;
        $this->container['resources'] = isset($data['resources']) ? $data['resources'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['count']) && ($this->container['count'] > 1000000)) {
                $invalidProperties[] = "invalid value for 'count', must be smaller than or equal to 1000000.";
            }
            if (!is_null($this->container['count']) && ($this->container['count'] < 0)) {
                $invalidProperties[] = "invalid value for 'count', must be bigger than or equal to 0.";
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
    * Gets count
    *  声音模型训练资源总条数。
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
    * @param int|null $count 声音模型训练资源总条数。
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets resourceAvailableNums
    *  resourceAvailableNums
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\ResourceAvailableNums|null
    */
    public function getResourceAvailableNums()
    {
        return $this->container['resourceAvailableNums'];
    }

    /**
    * Sets resourceAvailableNums
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\ResourceAvailableNums|null $resourceAvailableNums resourceAvailableNums
    *
    * @return $this
    */
    public function setResourceAvailableNums($resourceAvailableNums)
    {
        $this->container['resourceAvailableNums'] = $resourceAvailableNums;
        return $this;
    }

    /**
    * Gets resources
    *  声音模型训练资源列表。
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceTrainingResource[]|null
    */
    public function getResources()
    {
        return $this->container['resources'];
    }

    /**
    * Sets resources
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceTrainingResource[]|null $resources 声音模型训练资源列表。
    *
    * @return $this
    */
    public function setResources($resources)
    {
        $this->container['resources'] = $resources;
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

