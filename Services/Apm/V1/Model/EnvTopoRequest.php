<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class EnvTopoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'EnvTopoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetEnvId  环境id。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetEnvId' => 'int',
            'direction' => 'string',
            'endTime' => 'string',
            'startTime' => 'string',
            'filterUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetEnvId  环境id。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetEnvId' => 'int64',
        'direction' => null,
        'endTime' => null,
        'startTime' => null,
        'filterUser' => null
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
    * targetEnvId  环境id。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetEnvId' => 'target_env_id',
            'direction' => 'direction',
            'endTime' => 'end_time',
            'startTime' => 'start_time',
            'filterUser' => 'filter_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetEnvId  环境id。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetEnvId' => 'setTargetEnvId',
            'direction' => 'setDirection',
            'endTime' => 'setEndTime',
            'startTime' => 'setStartTime',
            'filterUser' => 'setFilterUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetEnvId  环境id。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetEnvId' => 'getTargetEnvId',
            'direction' => 'getDirection',
            'endTime' => 'getEndTime',
            'startTime' => 'getStartTime',
            'filterUser' => 'getFilterUser'
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
        $this->container['targetEnvId'] = isset($data['targetEnvId']) ? $data['targetEnvId'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['filterUser'] = isset($data['filterUser']) ? $data['filterUser'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['targetEnvId'] === null) {
            $invalidProperties[] = "'targetEnvId' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
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
    * Gets targetEnvId
    *  环境id。
    *
    * @return int
    */
    public function getTargetEnvId()
    {
        return $this->container['targetEnvId'];
    }

    /**
    * Sets targetEnvId
    *
    * @param int $targetEnvId 环境id。
    *
    * @return $this
    */
    public function setTargetEnvId($targetEnvId)
    {
        $this->container['targetEnvId'] = $targetEnvId;
        return $this;
    }

    /**
    * Gets direction
    *  方向，可为空。
    *
    * @return string|null
    */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /**
    * Sets direction
    *
    * @param string|null $direction 方向，可为空。
    *
    * @return $this
    */
    public function setDirection($direction)
    {
        $this->container['direction'] = $direction;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets filterUser
    *  过滤。
    *
    * @return bool|null
    */
    public function getFilterUser()
    {
        return $this->container['filterUser'];
    }

    /**
    * Sets filterUser
    *
    * @param bool|null $filterUser 过滤。
    *
    * @return $this
    */
    public function setFilterUser($filterUser)
    {
        $this->container['filterUser'] = $filterUser;
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

