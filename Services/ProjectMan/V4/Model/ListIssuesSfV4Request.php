<?php

namespace HuaweiCloud\SDK\ProjectMan\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListIssuesSfV4Request implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListIssuesSfV4Request';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * offset  偏移量 从0开始
    * limit  每页数量 最小1,最大100
    * trackerId  工作项类型
    * createdTimeInterval  创建工作项的时间(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  更新工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'trackerId' => 'int',
            'createdTimeInterval' => 'string',
            'updatedTimeInterval' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  devcloud项目的32位id
    * offset  偏移量 从0开始
    * limit  每页数量 最小1,最大100
    * trackerId  工作项类型
    * createdTimeInterval  创建工作项的时间(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  更新工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'trackerId' => 'int32',
        'createdTimeInterval' => null,
        'updatedTimeInterval' => null
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
    * projectId  devcloud项目的32位id
    * offset  偏移量 从0开始
    * limit  每页数量 最小1,最大100
    * trackerId  工作项类型
    * createdTimeInterval  创建工作项的时间(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  更新工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'trackerId' => 'tracker_id',
            'createdTimeInterval' => 'created_time_interval',
            'updatedTimeInterval' => 'updated_time_interval'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  devcloud项目的32位id
    * offset  偏移量 从0开始
    * limit  每页数量 最小1,最大100
    * trackerId  工作项类型
    * createdTimeInterval  创建工作项的时间(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  更新工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'trackerId' => 'setTrackerId',
            'createdTimeInterval' => 'setCreatedTimeInterval',
            'updatedTimeInterval' => 'setUpdatedTimeInterval'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  devcloud项目的32位id
    * offset  偏移量 从0开始
    * limit  每页数量 最小1,最大100
    * trackerId  工作项类型
    * createdTimeInterval  创建工作项的时间(查询的起始时间,查询的结束时间)
    * updatedTimeInterval  更新工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'trackerId' => 'getTrackerId',
            'createdTimeInterval' => 'getCreatedTimeInterval',
            'updatedTimeInterval' => 'getUpdatedTimeInterval'
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
    const TRACKER_ID_2 = 2;
    const TRACKER_ID_3 = 3;
    const TRACKER_ID_4 = 4;
    const TRACKER_ID_5 = 5;
    const TRACKER_ID_6 = 6;
    const TRACKER_ID_7 = 7;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTrackerIdAllowableValues()
    {
        return [
            self::TRACKER_ID_2,
            self::TRACKER_ID_3,
            self::TRACKER_ID_4,
            self::TRACKER_ID_5,
            self::TRACKER_ID_6,
            self::TRACKER_ID_7,
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['trackerId'] = isset($data['trackerId']) ? $data['trackerId'] : null;
        $this->container['createdTimeInterval'] = isset($data['createdTimeInterval']) ? $data['createdTimeInterval'] : null;
        $this->container['updatedTimeInterval'] = isset($data['updatedTimeInterval']) ? $data['updatedTimeInterval'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/^[0-9a-z]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[0-9a-z]{32}$/.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTrackerIdAllowableValues();
                if (!is_null($this->container['trackerId']) && !in_array($this->container['trackerId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'trackerId', must be one of '%s'",
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
    * Gets projectId
    *  devcloud项目的32位id
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId devcloud项目的32位id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量 从0开始
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移量 从0开始
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每页数量 最小1,最大100
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页数量 最小1,最大100
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets trackerId
    *  工作项类型
    *
    * @return int|null
    */
    public function getTrackerId()
    {
        return $this->container['trackerId'];
    }

    /**
    * Sets trackerId
    *
    * @param int|null $trackerId 工作项类型
    *
    * @return $this
    */
    public function setTrackerId($trackerId)
    {
        $this->container['trackerId'] = $trackerId;
        return $this;
    }

    /**
    * Gets createdTimeInterval
    *  创建工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @return string|null
    */
    public function getCreatedTimeInterval()
    {
        return $this->container['createdTimeInterval'];
    }

    /**
    * Sets createdTimeInterval
    *
    * @param string|null $createdTimeInterval 创建工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @return $this
    */
    public function setCreatedTimeInterval($createdTimeInterval)
    {
        $this->container['createdTimeInterval'] = $createdTimeInterval;
        return $this;
    }

    /**
    * Gets updatedTimeInterval
    *  更新工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @return string|null
    */
    public function getUpdatedTimeInterval()
    {
        return $this->container['updatedTimeInterval'];
    }

    /**
    * Sets updatedTimeInterval
    *
    * @param string|null $updatedTimeInterval 更新工作项的时间(查询的起始时间,查询的结束时间)
    *
    * @return $this
    */
    public function setUpdatedTimeInterval($updatedTimeInterval)
    {
        $this->container['updatedTimeInterval'] = $updatedTimeInterval;
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

