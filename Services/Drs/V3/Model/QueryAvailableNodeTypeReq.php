<?php

namespace HuaweiCloud\SDK\Drs\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAvailableNodeTypeReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAvailableNodeTypeReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineType  引擎类型
    * dbUseType  迁移场景，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * jobDirection  迁移方向，up ：入云 ，灾备场景时对应本云为备，down：出云，灾备场景时对应本云为主，non-dbs：自建
    * nodeType  规格类型。
    * multiWrite  是否是双主灾备，不填默认为false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineType' => 'string',
            'dbUseType' => 'string',
            'jobDirection' => 'string',
            'nodeType' => 'string',
            'multiWrite' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineType  引擎类型
    * dbUseType  迁移场景，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * jobDirection  迁移方向，up ：入云 ，灾备场景时对应本云为备，down：出云，灾备场景时对应本云为主，non-dbs：自建
    * nodeType  规格类型。
    * multiWrite  是否是双主灾备，不填默认为false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineType' => null,
        'dbUseType' => null,
        'jobDirection' => null,
        'nodeType' => null,
        'multiWrite' => null
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
    * engineType  引擎类型
    * dbUseType  迁移场景，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * jobDirection  迁移方向，up ：入云 ，灾备场景时对应本云为备，down：出云，灾备场景时对应本云为主，non-dbs：自建
    * nodeType  规格类型。
    * multiWrite  是否是双主灾备，不填默认为false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineType' => 'engine_type',
            'dbUseType' => 'db_use_type',
            'jobDirection' => 'job_direction',
            'nodeType' => 'node_type',
            'multiWrite' => 'multi_write'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineType  引擎类型
    * dbUseType  迁移场景，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * jobDirection  迁移方向，up ：入云 ，灾备场景时对应本云为备，down：出云，灾备场景时对应本云为主，non-dbs：自建
    * nodeType  规格类型。
    * multiWrite  是否是双主灾备，不填默认为false
    *
    * @var string[]
    */
    protected static $setters = [
            'engineType' => 'setEngineType',
            'dbUseType' => 'setDbUseType',
            'jobDirection' => 'setJobDirection',
            'nodeType' => 'setNodeType',
            'multiWrite' => 'setMultiWrite'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineType  引擎类型
    * dbUseType  迁移场景，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    * jobDirection  迁移方向，up ：入云 ，灾备场景时对应本云为备，down：出云，灾备场景时对应本云为主，non-dbs：自建
    * nodeType  规格类型。
    * multiWrite  是否是双主灾备，不填默认为false
    *
    * @var string[]
    */
    protected static $getters = [
            'engineType' => 'getEngineType',
            'dbUseType' => 'getDbUseType',
            'jobDirection' => 'getJobDirection',
            'nodeType' => 'getNodeType',
            'multiWrite' => 'getMultiWrite'
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
    const DB_USE_TYPE_MIGRATION = 'migration';
    const DB_USE_TYPE_SYNC = 'sync';
    const DB_USE_TYPE_CLOUD_DATA_GUARD = 'cloudDataGuard';
    const JOB_DIRECTION_UP = 'up';
    const JOB_DIRECTION_DOWN = 'down';
    const JOB_DIRECTION_NON_DBS = 'non-dbs';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDbUseTypeAllowableValues()
    {
        return [
            self::DB_USE_TYPE_MIGRATION,
            self::DB_USE_TYPE_SYNC,
            self::DB_USE_TYPE_CLOUD_DATA_GUARD,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getJobDirectionAllowableValues()
    {
        return [
            self::JOB_DIRECTION_UP,
            self::JOB_DIRECTION_DOWN,
            self::JOB_DIRECTION_NON_DBS,
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
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['dbUseType'] = isset($data['dbUseType']) ? $data['dbUseType'] : null;
        $this->container['jobDirection'] = isset($data['jobDirection']) ? $data['jobDirection'] : null;
        $this->container['nodeType'] = isset($data['nodeType']) ? $data['nodeType'] : null;
        $this->container['multiWrite'] = isset($data['multiWrite']) ? $data['multiWrite'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
        }
        if ($this->container['dbUseType'] === null) {
            $invalidProperties[] = "'dbUseType' can't be null";
        }
            $allowedValues = $this->getDbUseTypeAllowableValues();
                if (!is_null($this->container['dbUseType']) && !in_array($this->container['dbUseType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dbUseType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['jobDirection'] === null) {
            $invalidProperties[] = "'jobDirection' can't be null";
        }
            $allowedValues = $this->getJobDirectionAllowableValues();
                if (!is_null($this->container['jobDirection']) && !in_array($this->container['jobDirection'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'jobDirection', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['nodeType'] === null) {
            $invalidProperties[] = "'nodeType' can't be null";
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
    * Gets engineType
    *  引擎类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 引擎类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets dbUseType
    *  迁移场景，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    *
    * @return string
    */
    public function getDbUseType()
    {
        return $this->container['dbUseType'];
    }

    /**
    * Sets dbUseType
    *
    * @param string $dbUseType 迁移场景，migration-实时迁移,sync-实时同步,cloudDataGuard-实时灾备
    *
    * @return $this
    */
    public function setDbUseType($dbUseType)
    {
        $this->container['dbUseType'] = $dbUseType;
        return $this;
    }

    /**
    * Gets jobDirection
    *  迁移方向，up ：入云 ，灾备场景时对应本云为备，down：出云，灾备场景时对应本云为主，non-dbs：自建
    *
    * @return string
    */
    public function getJobDirection()
    {
        return $this->container['jobDirection'];
    }

    /**
    * Sets jobDirection
    *
    * @param string $jobDirection 迁移方向，up ：入云 ，灾备场景时对应本云为备，down：出云，灾备场景时对应本云为主，non-dbs：自建
    *
    * @return $this
    */
    public function setJobDirection($jobDirection)
    {
        $this->container['jobDirection'] = $jobDirection;
        return $this;
    }

    /**
    * Gets nodeType
    *  规格类型。
    *
    * @return string
    */
    public function getNodeType()
    {
        return $this->container['nodeType'];
    }

    /**
    * Sets nodeType
    *
    * @param string $nodeType 规格类型。
    *
    * @return $this
    */
    public function setNodeType($nodeType)
    {
        $this->container['nodeType'] = $nodeType;
        return $this;
    }

    /**
    * Gets multiWrite
    *  是否是双主灾备，不填默认为false
    *
    * @return string|null
    */
    public function getMultiWrite()
    {
        return $this->container['multiWrite'];
    }

    /**
    * Sets multiWrite
    *
    * @param string|null $multiWrite 是否是双主灾备，不填默认为false
    *
    * @return $this
    */
    public function setMultiWrite($multiWrite)
    {
        $this->container['multiWrite'] = $multiWrite;
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

