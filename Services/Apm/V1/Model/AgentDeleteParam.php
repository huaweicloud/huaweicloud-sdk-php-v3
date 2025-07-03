<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AgentDeleteParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AgentDeleteParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instanceList  实例列表。
    * region  region英文名称。
    * businessId  应用id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instanceList' => 'int[]',
            'region' => 'string',
            'businessId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instanceList  实例列表。
    * region  region英文名称。
    * businessId  应用id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instanceList' => 'int64',
        'region' => null,
        'businessId' => 'int64'
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
    * instanceList  实例列表。
    * region  region英文名称。
    * businessId  应用id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instanceList' => 'instance_list',
            'region' => 'region',
            'businessId' => 'business_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instanceList  实例列表。
    * region  region英文名称。
    * businessId  应用id。
    *
    * @var string[]
    */
    protected static $setters = [
            'instanceList' => 'setInstanceList',
            'region' => 'setRegion',
            'businessId' => 'setBusinessId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instanceList  实例列表。
    * region  region英文名称。
    * businessId  应用id。
    *
    * @var string[]
    */
    protected static $getters = [
            'instanceList' => 'getInstanceList',
            'region' => 'getRegion',
            'businessId' => 'getBusinessId'
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
        $this->container['instanceList'] = isset($data['instanceList']) ? $data['instanceList'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['businessId'] = isset($data['businessId']) ? $data['businessId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['instanceList'] === null) {
            $invalidProperties[] = "'instanceList' can't be null";
        }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
        if ($this->container['businessId'] === null) {
            $invalidProperties[] = "'businessId' can't be null";
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
    * Gets instanceList
    *  实例列表。
    *
    * @return int[]
    */
    public function getInstanceList()
    {
        return $this->container['instanceList'];
    }

    /**
    * Sets instanceList
    *
    * @param int[] $instanceList 实例列表。
    *
    * @return $this
    */
    public function setInstanceList($instanceList)
    {
        $this->container['instanceList'] = $instanceList;
        return $this;
    }

    /**
    * Gets region
    *  region英文名称。
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region region英文名称。
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets businessId
    *  应用id。
    *
    * @return int
    */
    public function getBusinessId()
    {
        return $this->container['businessId'];
    }

    /**
    * Sets businessId
    *
    * @param int $businessId 应用id。
    *
    * @return $this
    */
    public function setBusinessId($businessId)
    {
        $this->container['businessId'] = $businessId;
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

