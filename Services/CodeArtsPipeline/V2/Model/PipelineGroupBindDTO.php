<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineGroupBindDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineGroupBindDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  分组ID
    * pipelines  流水线集合
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'pipelines' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineGroupBindDTOPipelines[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  分组ID
    * pipelines  流水线集合
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'pipelines' => null
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
    * groupId  分组ID
    * pipelines  流水线集合
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'pipelines' => 'pipelines'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  分组ID
    * pipelines  流水线集合
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'pipelines' => 'setPipelines'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  分组ID
    * pipelines  流水线集合
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'pipelines' => 'getPipelines'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['pipelines'] = isset($data['pipelines']) ? $data['pipelines'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
        if ($this->container['pipelines'] === null) {
            $invalidProperties[] = "'pipelines' can't be null";
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
    * Gets groupId
    *  分组ID
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId 分组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets pipelines
    *  流水线集合
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineGroupBindDTOPipelines[]
    */
    public function getPipelines()
    {
        return $this->container['pipelines'];
    }

    /**
    * Sets pipelines
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineGroupBindDTOPipelines[] $pipelines 流水线集合
    *
    * @return $this
    */
    public function setPipelines($pipelines)
    {
        $this->container['pipelines'] = $pipelines;
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
