<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResRelation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResRelation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * selfResourceId  |参数名称：当前费用对应的资源ID| |参数约束及描述：当前费用对应的资源ID|
    * relationInfos  |参数名称：当前费用对应资源ID关联的资源信息。| |参数约束及描述：当前费用对应资源ID关联的资源信息，数组个数不超过2层|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'selfResourceId' => 'string',
            'relationInfos' => '\HuaweiCloud\SDK\Bssintl\V2\Model\RelationInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * selfResourceId  |参数名称：当前费用对应的资源ID| |参数约束及描述：当前费用对应的资源ID|
    * relationInfos  |参数名称：当前费用对应资源ID关联的资源信息。| |参数约束及描述：当前费用对应资源ID关联的资源信息，数组个数不超过2层|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'selfResourceId' => null,
        'relationInfos' => null
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
    * selfResourceId  |参数名称：当前费用对应的资源ID| |参数约束及描述：当前费用对应的资源ID|
    * relationInfos  |参数名称：当前费用对应资源ID关联的资源信息。| |参数约束及描述：当前费用对应资源ID关联的资源信息，数组个数不超过2层|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'selfResourceId' => 'self_resource_id',
            'relationInfos' => 'relation_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * selfResourceId  |参数名称：当前费用对应的资源ID| |参数约束及描述：当前费用对应的资源ID|
    * relationInfos  |参数名称：当前费用对应资源ID关联的资源信息。| |参数约束及描述：当前费用对应资源ID关联的资源信息，数组个数不超过2层|
    *
    * @var string[]
    */
    protected static $setters = [
            'selfResourceId' => 'setSelfResourceId',
            'relationInfos' => 'setRelationInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * selfResourceId  |参数名称：当前费用对应的资源ID| |参数约束及描述：当前费用对应的资源ID|
    * relationInfos  |参数名称：当前费用对应资源ID关联的资源信息。| |参数约束及描述：当前费用对应资源ID关联的资源信息，数组个数不超过2层|
    *
    * @var string[]
    */
    protected static $getters = [
            'selfResourceId' => 'getSelfResourceId',
            'relationInfos' => 'getRelationInfos'
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
        $this->container['selfResourceId'] = isset($data['selfResourceId']) ? $data['selfResourceId'] : null;
        $this->container['relationInfos'] = isset($data['relationInfos']) ? $data['relationInfos'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['selfResourceId']) && (mb_strlen($this->container['selfResourceId']) > 128)) {
                $invalidProperties[] = "invalid value for 'selfResourceId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['selfResourceId']) && (mb_strlen($this->container['selfResourceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'selfResourceId', the character length must be bigger than or equal to 0.";
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
    * Gets selfResourceId
    *  |参数名称：当前费用对应的资源ID| |参数约束及描述：当前费用对应的资源ID|
    *
    * @return string|null
    */
    public function getSelfResourceId()
    {
        return $this->container['selfResourceId'];
    }

    /**
    * Sets selfResourceId
    *
    * @param string|null $selfResourceId |参数名称：当前费用对应的资源ID| |参数约束及描述：当前费用对应的资源ID|
    *
    * @return $this
    */
    public function setSelfResourceId($selfResourceId)
    {
        $this->container['selfResourceId'] = $selfResourceId;
        return $this;
    }

    /**
    * Gets relationInfos
    *  |参数名称：当前费用对应资源ID关联的资源信息。| |参数约束及描述：当前费用对应资源ID关联的资源信息，数组个数不超过2层|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\RelationInfo[]|null
    */
    public function getRelationInfos()
    {
        return $this->container['relationInfos'];
    }

    /**
    * Sets relationInfos
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\RelationInfo[]|null $relationInfos |参数名称：当前费用对应资源ID关联的资源信息。| |参数约束及描述：当前费用对应资源ID关联的资源信息，数组个数不超过2层|
    *
    * @return $this
    */
    public function setRelationInfos($relationInfos)
    {
        $this->container['relationInfos'] = $relationInfos;
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

