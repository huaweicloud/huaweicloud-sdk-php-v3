<?php

namespace HuaweiCloud\SDK\Tics\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StageVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StageVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  执行阶段id
    * lastStepStageId  上游的stageId
    * processors  执行过程
    * stageName  执行阶段名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'lastStepStageId' => 'int[]',
            'processors' => '\HuaweiCloud\SDK\Tics\V1\Model\ProcessorVo[]',
            'stageName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  执行阶段id
    * lastStepStageId  上游的stageId
    * processors  执行过程
    * stageName  执行阶段名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'lastStepStageId' => 'int32',
        'processors' => null,
        'stageName' => null
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
    * id  执行阶段id
    * lastStepStageId  上游的stageId
    * processors  执行过程
    * stageName  执行阶段名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'lastStepStageId' => 'last_step_stage_id',
            'processors' => 'processors',
            'stageName' => 'stage_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  执行阶段id
    * lastStepStageId  上游的stageId
    * processors  执行过程
    * stageName  执行阶段名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'lastStepStageId' => 'setLastStepStageId',
            'processors' => 'setProcessors',
            'stageName' => 'setStageName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  执行阶段id
    * lastStepStageId  上游的stageId
    * processors  执行过程
    * stageName  执行阶段名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'lastStepStageId' => 'getLastStepStageId',
            'processors' => 'getProcessors',
            'stageName' => 'getStageName'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastStepStageId'] = isset($data['lastStepStageId']) ? $data['lastStepStageId'] : null;
        $this->container['processors'] = isset($data['processors']) ? $data['processors'] : null;
        $this->container['stageName'] = isset($data['stageName']) ? $data['stageName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (!is_null($this->container['stageName']) && (mb_strlen($this->container['stageName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stageName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['stageName']) && (mb_strlen($this->container['stageName']) < 0)) {
                $invalidProperties[] = "invalid value for 'stageName', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  执行阶段id
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 执行阶段id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lastStepStageId
    *  上游的stageId
    *
    * @return int[]|null
    */
    public function getLastStepStageId()
    {
        return $this->container['lastStepStageId'];
    }

    /**
    * Sets lastStepStageId
    *
    * @param int[]|null $lastStepStageId 上游的stageId
    *
    * @return $this
    */
    public function setLastStepStageId($lastStepStageId)
    {
        $this->container['lastStepStageId'] = $lastStepStageId;
        return $this;
    }

    /**
    * Gets processors
    *  执行过程
    *
    * @return \HuaweiCloud\SDK\Tics\V1\Model\ProcessorVo[]|null
    */
    public function getProcessors()
    {
        return $this->container['processors'];
    }

    /**
    * Sets processors
    *
    * @param \HuaweiCloud\SDK\Tics\V1\Model\ProcessorVo[]|null $processors 执行过程
    *
    * @return $this
    */
    public function setProcessors($processors)
    {
        $this->container['processors'] = $processors;
        return $this;
    }

    /**
    * Gets stageName
    *  执行阶段名称
    *
    * @return string|null
    */
    public function getStageName()
    {
        return $this->container['stageName'];
    }

    /**
    * Sets stageName
    *
    * @param string|null $stageName 执行阶段名称
    *
    * @return $this
    */
    public function setStageName($stageName)
    {
        $this->container['stageName'] = $stageName;
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

