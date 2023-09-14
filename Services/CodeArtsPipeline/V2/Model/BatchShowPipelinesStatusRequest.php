<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchShowPipelinesStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchShowPipelinesStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipelineIds  要获取状态的流水线ID，用逗号隔开
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipelineIds' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipelineIds  要获取状态的流水线ID，用逗号隔开
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipelineIds' => null
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
    * pipelineIds  要获取状态的流水线ID，用逗号隔开
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipelineIds' => 'pipeline_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipelineIds  要获取状态的流水线ID，用逗号隔开
    *
    * @var string[]
    */
    protected static $setters = [
            'pipelineIds' => 'setPipelineIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipelineIds  要获取状态的流水线ID，用逗号隔开
    *
    * @var string[]
    */
    protected static $getters = [
            'pipelineIds' => 'getPipelineIds'
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
        $this->container['pipelineIds'] = isset($data['pipelineIds']) ? $data['pipelineIds'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['pipelineIds'] === null) {
            $invalidProperties[] = "'pipelineIds' can't be null";
        }
            if ((mb_strlen($this->container['pipelineIds']) > 3300)) {
                $invalidProperties[] = "invalid value for 'pipelineIds', the character length must be smaller than or equal to 3300.";
            }
            if ((mb_strlen($this->container['pipelineIds']) < 0)) {
                $invalidProperties[] = "invalid value for 'pipelineIds', the character length must be bigger than or equal to 0.";
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
    * Gets pipelineIds
    *  要获取状态的流水线ID，用逗号隔开
    *
    * @return string
    */
    public function getPipelineIds()
    {
        return $this->container['pipelineIds'];
    }

    /**
    * Sets pipelineIds
    *
    * @param string $pipelineIds 要获取状态的流水线ID，用逗号隔开
    *
    * @return $this
    */
    public function setPipelineIds($pipelineIds)
    {
        $this->container['pipelineIds'] = $pipelineIds;
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

