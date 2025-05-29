<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobScriptOrderInfoModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobScriptOrderInfoModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executeUuid  执行uuid
    * gmtCreated  执行创建时间
    * gmtFinished  执行完成时间
    * executeCosts  执行耗时，单位：秒
    * creator  创建人
    * status  执行状态
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executeUuid' => 'string',
            'gmtCreated' => 'int',
            'gmtFinished' => 'int',
            'executeCosts' => 'int',
            'creator' => 'string',
            'status' => 'string',
            'properties' => '\HuaweiCloud\SDK\Coc\V1\Model\JobScriptOrderInfoProp'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executeUuid  执行uuid
    * gmtCreated  执行创建时间
    * gmtFinished  执行完成时间
    * executeCosts  执行耗时，单位：秒
    * creator  创建人
    * status  执行状态
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executeUuid' => null,
        'gmtCreated' => 'int64',
        'gmtFinished' => 'int64',
        'executeCosts' => 'int64',
        'creator' => null,
        'status' => null,
        'properties' => null
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
    * executeUuid  执行uuid
    * gmtCreated  执行创建时间
    * gmtFinished  执行完成时间
    * executeCosts  执行耗时，单位：秒
    * creator  创建人
    * status  执行状态
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executeUuid' => 'execute_uuid',
            'gmtCreated' => 'gmt_created',
            'gmtFinished' => 'gmt_finished',
            'executeCosts' => 'execute_costs',
            'creator' => 'creator',
            'status' => 'status',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executeUuid  执行uuid
    * gmtCreated  执行创建时间
    * gmtFinished  执行完成时间
    * executeCosts  执行耗时，单位：秒
    * creator  创建人
    * status  执行状态
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'executeUuid' => 'setExecuteUuid',
            'gmtCreated' => 'setGmtCreated',
            'gmtFinished' => 'setGmtFinished',
            'executeCosts' => 'setExecuteCosts',
            'creator' => 'setCreator',
            'status' => 'setStatus',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executeUuid  执行uuid
    * gmtCreated  执行创建时间
    * gmtFinished  执行完成时间
    * executeCosts  执行耗时，单位：秒
    * creator  创建人
    * status  执行状态
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'executeUuid' => 'getExecuteUuid',
            'gmtCreated' => 'getGmtCreated',
            'gmtFinished' => 'getGmtFinished',
            'executeCosts' => 'getExecuteCosts',
            'creator' => 'getCreator',
            'status' => 'getStatus',
            'properties' => 'getProperties'
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
    const STATUS_READY = 'READY';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_ABNORMAL = 'ABNORMAL';
    const STATUS_PAUSED = 'PAUSED';
    const STATUS_CANCELED = 'CANCELED';
    const STATUS_FINISHED = 'FINISHED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_READY,
            self::STATUS_PROCESSING,
            self::STATUS_ABNORMAL,
            self::STATUS_PAUSED,
            self::STATUS_CANCELED,
            self::STATUS_FINISHED,
        ];
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
        $this->container['executeUuid'] = isset($data['executeUuid']) ? $data['executeUuid'] : null;
        $this->container['gmtCreated'] = isset($data['gmtCreated']) ? $data['gmtCreated'] : null;
        $this->container['gmtFinished'] = isset($data['gmtFinished']) ? $data['gmtFinished'] : null;
        $this->container['executeCosts'] = isset($data['executeCosts']) ? $data['executeCosts'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets executeUuid
    *  执行uuid
    *
    * @return string|null
    */
    public function getExecuteUuid()
    {
        return $this->container['executeUuid'];
    }

    /**
    * Sets executeUuid
    *
    * @param string|null $executeUuid 执行uuid
    *
    * @return $this
    */
    public function setExecuteUuid($executeUuid)
    {
        $this->container['executeUuid'] = $executeUuid;
        return $this;
    }

    /**
    * Gets gmtCreated
    *  执行创建时间
    *
    * @return int|null
    */
    public function getGmtCreated()
    {
        return $this->container['gmtCreated'];
    }

    /**
    * Sets gmtCreated
    *
    * @param int|null $gmtCreated 执行创建时间
    *
    * @return $this
    */
    public function setGmtCreated($gmtCreated)
    {
        $this->container['gmtCreated'] = $gmtCreated;
        return $this;
    }

    /**
    * Gets gmtFinished
    *  执行完成时间
    *
    * @return int|null
    */
    public function getGmtFinished()
    {
        return $this->container['gmtFinished'];
    }

    /**
    * Sets gmtFinished
    *
    * @param int|null $gmtFinished 执行完成时间
    *
    * @return $this
    */
    public function setGmtFinished($gmtFinished)
    {
        $this->container['gmtFinished'] = $gmtFinished;
        return $this;
    }

    /**
    * Gets executeCosts
    *  执行耗时，单位：秒
    *
    * @return int|null
    */
    public function getExecuteCosts()
    {
        return $this->container['executeCosts'];
    }

    /**
    * Sets executeCosts
    *
    * @param int|null $executeCosts 执行耗时，单位：秒
    *
    * @return $this
    */
    public function setExecuteCosts($executeCosts)
    {
        $this->container['executeCosts'] = $executeCosts;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string|null
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string|null $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets status
    *  执行状态
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 执行状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\JobScriptOrderInfoProp|null
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\JobScriptOrderInfoProp|null $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

