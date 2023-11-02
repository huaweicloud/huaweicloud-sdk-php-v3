<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobLogRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobLogRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * bridgeId  桥接作业id
    * classificationId  分类作业id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'bridgeId' => 'string',
            'classificationId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * bridgeId  桥接作业id
    * classificationId  分类作业id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'bridgeId' => null,
        'classificationId' => null
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
    * bridgeId  桥接作业id
    * classificationId  分类作业id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'bridgeId' => 'bridge_id',
            'classificationId' => 'classification_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * bridgeId  桥接作业id
    * classificationId  分类作业id
    *
    * @var string[]
    */
    protected static $setters = [
            'bridgeId' => 'setBridgeId',
            'classificationId' => 'setClassificationId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * bridgeId  桥接作业id
    * classificationId  分类作业id
    *
    * @var string[]
    */
    protected static $getters = [
            'bridgeId' => 'getBridgeId',
            'classificationId' => 'getClassificationId'
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
        $this->container['bridgeId'] = isset($data['bridgeId']) ? $data['bridgeId'] : null;
        $this->container['classificationId'] = isset($data['classificationId']) ? $data['classificationId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['bridgeId'] === null) {
            $invalidProperties[] = "'bridgeId' can't be null";
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
    * Gets bridgeId
    *  桥接作业id
    *
    * @return string
    */
    public function getBridgeId()
    {
        return $this->container['bridgeId'];
    }

    /**
    * Sets bridgeId
    *
    * @param string $bridgeId 桥接作业id
    *
    * @return $this
    */
    public function setBridgeId($bridgeId)
    {
        $this->container['bridgeId'] = $bridgeId;
        return $this;
    }

    /**
    * Gets classificationId
    *  分类作业id
    *
    * @return string|null
    */
    public function getClassificationId()
    {
        return $this->container['classificationId'];
    }

    /**
    * Sets classificationId
    *
    * @param string|null $classificationId 分类作业id
    *
    * @return $this
    */
    public function setClassificationId($classificationId)
    {
        $this->container['classificationId'] = $classificationId;
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

