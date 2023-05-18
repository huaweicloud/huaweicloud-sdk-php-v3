<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicationResponseBase implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicationResponseBase';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  发布ID。
    * lastUpdatedBy  更新者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * publishName  发布名称。
    * publishScope  发布范围。
    * startTime  开始时间。
    * endTime  结束时间。
    * publishStatus  根据当前时间确定发布状态。 - NOT_ONLINE-未上线 - PUBLISHING-发布中 - ALREADY_OFFLINE-已下线
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'lastUpdatedBy' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'publishName' => 'string',
            'publishScope' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'publishStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  发布ID。
    * lastUpdatedBy  更新者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * publishName  发布名称。
    * publishScope  发布范围。
    * startTime  开始时间。
    * endTime  结束时间。
    * publishStatus  根据当前时间确定发布状态。 - NOT_ONLINE-未上线 - PUBLISHING-发布中 - ALREADY_OFFLINE-已下线
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'lastUpdatedBy' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'publishName' => null,
        'publishScope' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'publishStatus' => null
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
    * id  发布ID。
    * lastUpdatedBy  更新者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * publishName  发布名称。
    * publishScope  发布范围。
    * startTime  开始时间。
    * endTime  结束时间。
    * publishStatus  根据当前时间确定发布状态。 - NOT_ONLINE-未上线 - PUBLISHING-发布中 - ALREADY_OFFLINE-已下线
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'lastUpdatedBy' => 'lastUpdatedBy',
            'createTime' => 'createTime',
            'updateTime' => 'updateTime',
            'publishName' => 'publishName',
            'publishScope' => 'publishScope',
            'startTime' => 'startTime',
            'endTime' => 'endTime',
            'publishStatus' => 'publishStatus'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  发布ID。
    * lastUpdatedBy  更新者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * publishName  发布名称。
    * publishScope  发布范围。
    * startTime  开始时间。
    * endTime  结束时间。
    * publishStatus  根据当前时间确定发布状态。 - NOT_ONLINE-未上线 - PUBLISHING-发布中 - ALREADY_OFFLINE-已下线
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'lastUpdatedBy' => 'setLastUpdatedBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'publishName' => 'setPublishName',
            'publishScope' => 'setPublishScope',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'publishStatus' => 'setPublishStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  发布ID。
    * lastUpdatedBy  更新者。
    * createTime  创建时间。
    * updateTime  更新时间。
    * publishName  发布名称。
    * publishScope  发布范围。
    * startTime  开始时间。
    * endTime  结束时间。
    * publishStatus  根据当前时间确定发布状态。 - NOT_ONLINE-未上线 - PUBLISHING-发布中 - ALREADY_OFFLINE-已下线
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'lastUpdatedBy' => 'getLastUpdatedBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'publishName' => 'getPublishName',
            'publishScope' => 'getPublishScope',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'publishStatus' => 'getPublishStatus'
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
    const PUBLISH_STATUS_NOT_ONLINE = 'NOT_ONLINE';
    const PUBLISH_STATUS_PUBLISHING = 'PUBLISHING';
    const PUBLISH_STATUS_ALREADY_OFFLINE = 'ALREADY_OFFLINE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getPublishStatusAllowableValues()
    {
        return [
            self::PUBLISH_STATUS_NOT_ONLINE,
            self::PUBLISH_STATUS_PUBLISHING,
            self::PUBLISH_STATUS_ALREADY_OFFLINE,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lastUpdatedBy'] = isset($data['lastUpdatedBy']) ? $data['lastUpdatedBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['publishName'] = isset($data['publishName']) ? $data['publishName'] : null;
        $this->container['publishScope'] = isset($data['publishScope']) ? $data['publishScope'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['publishStatus'] = isset($data['publishStatus']) ? $data['publishStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getPublishStatusAllowableValues();
                if (!is_null($this->container['publishStatus']) && !in_array($this->container['publishStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'publishStatus', must be one of '%s'",
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
    * Gets id
    *  发布ID。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 发布ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lastUpdatedBy
    *  更新者。
    *
    * @return string|null
    */
    public function getLastUpdatedBy()
    {
        return $this->container['lastUpdatedBy'];
    }

    /**
    * Sets lastUpdatedBy
    *
    * @param string|null $lastUpdatedBy 更新者。
    *
    * @return $this
    */
    public function setLastUpdatedBy($lastUpdatedBy)
    {
        $this->container['lastUpdatedBy'] = $lastUpdatedBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  更新时间。
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets publishName
    *  发布名称。
    *
    * @return string|null
    */
    public function getPublishName()
    {
        return $this->container['publishName'];
    }

    /**
    * Sets publishName
    *
    * @param string|null $publishName 发布名称。
    *
    * @return $this
    */
    public function setPublishName($publishName)
    {
        $this->container['publishName'] = $publishName;
        return $this;
    }

    /**
    * Gets publishScope
    *  发布范围。
    *
    * @return string|null
    */
    public function getPublishScope()
    {
        return $this->container['publishScope'];
    }

    /**
    * Sets publishScope
    *
    * @param string|null $publishScope 发布范围。
    *
    * @return $this
    */
    public function setPublishScope($publishScope)
    {
        $this->container['publishScope'] = $publishScope;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间。
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  结束时间。
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime 结束时间。
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets publishStatus
    *  根据当前时间确定发布状态。 - NOT_ONLINE-未上线 - PUBLISHING-发布中 - ALREADY_OFFLINE-已下线
    *
    * @return string|null
    */
    public function getPublishStatus()
    {
        return $this->container['publishStatus'];
    }

    /**
    * Sets publishStatus
    *
    * @param string|null $publishStatus 根据当前时间确定发布状态。 - NOT_ONLINE-未上线 - PUBLISHING-发布中 - ALREADY_OFFLINE-已下线
    *
    * @return $this
    */
    public function setPublishStatus($publishStatus)
    {
        $this->container['publishStatus'] = $publishStatus;
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

