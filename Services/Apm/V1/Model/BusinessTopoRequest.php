<?php

namespace HuaweiCloud\SDK\Apm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessTopoRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessTopoRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * targetBusinessId  目标应用id。
    * envTagList  环境标签列表，可为空。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'targetBusinessId' => 'int',
            'envTagList' => 'int[]',
            'direction' => 'string',
            'endTime' => 'string',
            'startTime' => 'string',
            'filterUser' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * targetBusinessId  目标应用id。
    * envTagList  环境标签列表，可为空。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'targetBusinessId' => 'int64',
        'envTagList' => 'int64',
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
    * targetBusinessId  目标应用id。
    * envTagList  环境标签列表，可为空。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'targetBusinessId' => 'target_business_id',
            'envTagList' => 'env_tag_list',
            'direction' => 'direction',
            'endTime' => 'end_time',
            'startTime' => 'start_time',
            'filterUser' => 'filter_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * targetBusinessId  目标应用id。
    * envTagList  环境标签列表，可为空。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $setters = [
            'targetBusinessId' => 'setTargetBusinessId',
            'envTagList' => 'setEnvTagList',
            'direction' => 'setDirection',
            'endTime' => 'setEndTime',
            'startTime' => 'setStartTime',
            'filterUser' => 'setFilterUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * targetBusinessId  目标应用id。
    * envTagList  环境标签列表，可为空。
    * direction  方向，可为空。
    * endTime  结束时间。
    * startTime  开始时间。
    * filterUser  过滤。
    *
    * @var string[]
    */
    protected static $getters = [
            'targetBusinessId' => 'getTargetBusinessId',
            'envTagList' => 'getEnvTagList',
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
        $this->container['targetBusinessId'] = isset($data['targetBusinessId']) ? $data['targetBusinessId'] : null;
        $this->container['envTagList'] = isset($data['envTagList']) ? $data['envTagList'] : null;
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
        if ($this->container['targetBusinessId'] === null) {
            $invalidProperties[] = "'targetBusinessId' can't be null";
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
    * Gets targetBusinessId
    *  目标应用id。
    *
    * @return int
    */
    public function getTargetBusinessId()
    {
        return $this->container['targetBusinessId'];
    }

    /**
    * Sets targetBusinessId
    *
    * @param int $targetBusinessId 目标应用id。
    *
    * @return $this
    */
    public function setTargetBusinessId($targetBusinessId)
    {
        $this->container['targetBusinessId'] = $targetBusinessId;
        return $this;
    }

    /**
    * Gets envTagList
    *  环境标签列表，可为空。
    *
    * @return int[]|null
    */
    public function getEnvTagList()
    {
        return $this->container['envTagList'];
    }

    /**
    * Sets envTagList
    *
    * @param int[]|null $envTagList 环境标签列表，可为空。
    *
    * @return $this
    */
    public function setEnvTagList($envTagList)
    {
        $this->container['envTagList'] = $envTagList;
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

