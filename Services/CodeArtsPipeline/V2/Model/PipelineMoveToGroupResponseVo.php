<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineMoveToGroupResponseVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineMoveToGroupResponseVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * code  响应码 [\"failed\", \"success\"]
    * pipelineId  流水线ID
    * pipelineName  流水线名
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'code' => 'string',
            'pipelineId' => 'string',
            'pipelineName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * code  响应码 [\"failed\", \"success\"]
    * pipelineId  流水线ID
    * pipelineName  流水线名
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'code' => null,
        'pipelineId' => null,
        'pipelineName' => null
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
    * code  响应码 [\"failed\", \"success\"]
    * pipelineId  流水线ID
    * pipelineName  流水线名
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'code' => 'code',
            'pipelineId' => 'pipeline_id',
            'pipelineName' => 'pipeline_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * code  响应码 [\"failed\", \"success\"]
    * pipelineId  流水线ID
    * pipelineName  流水线名
    *
    * @var string[]
    */
    protected static $setters = [
            'code' => 'setCode',
            'pipelineId' => 'setPipelineId',
            'pipelineName' => 'setPipelineName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * code  响应码 [\"failed\", \"success\"]
    * pipelineId  流水线ID
    * pipelineName  流水线名
    *
    * @var string[]
    */
    protected static $getters = [
            'code' => 'getCode',
            'pipelineId' => 'getPipelineId',
            'pipelineName' => 'getPipelineName'
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
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['pipelineId'] = isset($data['pipelineId']) ? $data['pipelineId'] : null;
        $this->container['pipelineName'] = isset($data['pipelineName']) ? $data['pipelineName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['pipelineId'] === null) {
            $invalidProperties[] = "'pipelineId' can't be null";
        }
        if ($this->container['pipelineName'] === null) {
            $invalidProperties[] = "'pipelineName' can't be null";
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
    * Gets code
    *  响应码 [\"failed\", \"success\"]
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 响应码 [\"failed\", \"success\"]
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets pipelineId
    *  流水线ID
    *
    * @return string
    */
    public function getPipelineId()
    {
        return $this->container['pipelineId'];
    }

    /**
    * Sets pipelineId
    *
    * @param string $pipelineId 流水线ID
    *
    * @return $this
    */
    public function setPipelineId($pipelineId)
    {
        $this->container['pipelineId'] = $pipelineId;
        return $this;
    }

    /**
    * Gets pipelineName
    *  流水线名
    *
    * @return string
    */
    public function getPipelineName()
    {
        return $this->container['pipelineName'];
    }

    /**
    * Sets pipelineName
    *
    * @param string $pipelineName 流水线名
    *
    * @return $this
    */
    public function setPipelineName($pipelineName)
    {
        $this->container['pipelineName'] = $pipelineName;
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

