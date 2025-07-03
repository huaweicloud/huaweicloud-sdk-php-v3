<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class FlowDetailRespBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'FlowDetailRespBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  流名称
    * region  区域
    * sources  入流信息
    * status  状态
    * flowId  流id
    * outputs  流输出信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'region' => 'string',
            'sources' => '\HuaweiCloud\SDK\Live\V1\Model\FlowSource[]',
            'status' => 'string',
            'flowId' => 'string',
            'outputs' => '\HuaweiCloud\SDK\Live\V1\Model\FlowOutput[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  流名称
    * region  区域
    * sources  入流信息
    * status  状态
    * flowId  流id
    * outputs  流输出信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'region' => null,
        'sources' => null,
        'status' => null,
        'flowId' => null,
        'outputs' => null
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
    * name  流名称
    * region  区域
    * sources  入流信息
    * status  状态
    * flowId  流id
    * outputs  流输出信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'region' => 'region',
            'sources' => 'sources',
            'status' => 'status',
            'flowId' => 'flow_id',
            'outputs' => 'outputs'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  流名称
    * region  区域
    * sources  入流信息
    * status  状态
    * flowId  流id
    * outputs  流输出信息
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'region' => 'setRegion',
            'sources' => 'setSources',
            'status' => 'setStatus',
            'flowId' => 'setFlowId',
            'outputs' => 'setOutputs'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  流名称
    * region  区域
    * sources  入流信息
    * status  状态
    * flowId  流id
    * outputs  流输出信息
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'region' => 'getRegion',
            'sources' => 'getSources',
            'status' => 'getStatus',
            'flowId' => 'getFlowId',
            'outputs' => 'getOutputs'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['flowId'] = isset($data['flowId']) ? $data['flowId'] : null;
        $this->container['outputs'] = isset($data['outputs']) ? $data['outputs'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['sources'] === null) {
            $invalidProperties[] = "'sources' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            if ((mb_strlen($this->container['status']) > 16)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be smaller than or equal to 16.";
            }
            if ((mb_strlen($this->container['status']) < 1)) {
                $invalidProperties[] = "invalid value for 'status', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['flowId'] === null) {
            $invalidProperties[] = "'flowId' can't be null";
        }
            if ((mb_strlen($this->container['flowId']) > 64)) {
                $invalidProperties[] = "invalid value for 'flowId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['flowId']) < 1)) {
                $invalidProperties[] = "invalid value for 'flowId', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  流名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 流名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets region
    *  区域
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
    * @param string $region 区域
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets sources
    *  入流信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\FlowSource[]
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\FlowSource[] $sources 入流信息
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets status
    *  状态
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets flowId
    *  流id
    *
    * @return string
    */
    public function getFlowId()
    {
        return $this->container['flowId'];
    }

    /**
    * Sets flowId
    *
    * @param string $flowId 流id
    *
    * @return $this
    */
    public function setFlowId($flowId)
    {
        $this->container['flowId'] = $flowId;
        return $this;
    }

    /**
    * Gets outputs
    *  流输出信息
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\FlowOutput[]|null
    */
    public function getOutputs()
    {
        return $this->container['outputs'];
    }

    /**
    * Sets outputs
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\FlowOutput[]|null $outputs 流输出信息
    *
    * @return $this
    */
    public function setOutputs($outputs)
    {
        $this->container['outputs'] = $outputs;
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

