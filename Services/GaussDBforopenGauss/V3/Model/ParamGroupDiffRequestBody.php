<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParamGroupDiffRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParamGroupDiffRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sourceId  需要进行比较的参数组模板ID。
    * targetId  需要进行比较的参数组模板ID，需要与源参数组模板的部署形态相同才可比较。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sourceId' => 'string',
            'targetId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sourceId  需要进行比较的参数组模板ID。
    * targetId  需要进行比较的参数组模板ID，需要与源参数组模板的部署形态相同才可比较。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sourceId' => null,
        'targetId' => null
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
    * sourceId  需要进行比较的参数组模板ID。
    * targetId  需要进行比较的参数组模板ID，需要与源参数组模板的部署形态相同才可比较。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sourceId' => 'source_id',
            'targetId' => 'target_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sourceId  需要进行比较的参数组模板ID。
    * targetId  需要进行比较的参数组模板ID，需要与源参数组模板的部署形态相同才可比较。
    *
    * @var string[]
    */
    protected static $setters = [
            'sourceId' => 'setSourceId',
            'targetId' => 'setTargetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sourceId  需要进行比较的参数组模板ID。
    * targetId  需要进行比较的参数组模板ID，需要与源参数组模板的部署形态相同才可比较。
    *
    * @var string[]
    */
    protected static $getters = [
            'sourceId' => 'getSourceId',
            'targetId' => 'getTargetId'
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
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['targetId'] = isset($data['targetId']) ? $data['targetId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['sourceId'] === null) {
            $invalidProperties[] = "'sourceId' can't be null";
        }
        if ($this->container['targetId'] === null) {
            $invalidProperties[] = "'targetId' can't be null";
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
    * Gets sourceId
    *  需要进行比较的参数组模板ID。
    *
    * @return string
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string $sourceId 需要进行比较的参数组模板ID。
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets targetId
    *  需要进行比较的参数组模板ID，需要与源参数组模板的部署形态相同才可比较。
    *
    * @return string
    */
    public function getTargetId()
    {
        return $this->container['targetId'];
    }

    /**
    * Sets targetId
    *
    * @param string $targetId 需要进行比较的参数组模板ID，需要与源参数组模板的部署形态相同才可比较。
    *
    * @return $this
    */
    public function setTargetId($targetId)
    {
        $this->container['targetId'] = $targetId;
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

