<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StandElementValueVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StandElementValueVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fdName  属性名称。
    * fdValue  属性值。
    * fdId  属性定义的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * rowId  标准所属行，填写String类型替代Long类型。
    * id  数据标准的ID，填写String类型替代Long类型。
    * status  status
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fdName' => 'string',
            'fdValue' => 'string',
            'fdId' => 'string',
            'directoryId' => 'string',
            'rowId' => 'string',
            'id' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fdName  属性名称。
    * fdValue  属性值。
    * fdId  属性定义的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * rowId  标准所属行，填写String类型替代Long类型。
    * id  数据标准的ID，填写String类型替代Long类型。
    * status  status
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fdName' => null,
        'fdValue' => null,
        'fdId' => null,
        'directoryId' => null,
        'rowId' => null,
        'id' => null,
        'status' => null,
        'createBy' => null,
        'updateBy' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time'
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
    * fdName  属性名称。
    * fdValue  属性值。
    * fdId  属性定义的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * rowId  标准所属行，填写String类型替代Long类型。
    * id  数据标准的ID，填写String类型替代Long类型。
    * status  status
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fdName' => 'fd_name',
            'fdValue' => 'fd_value',
            'fdId' => 'fd_id',
            'directoryId' => 'directory_id',
            'rowId' => 'row_id',
            'id' => 'id',
            'status' => 'status',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fdName  属性名称。
    * fdValue  属性值。
    * fdId  属性定义的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * rowId  标准所属行，填写String类型替代Long类型。
    * id  数据标准的ID，填写String类型替代Long类型。
    * status  status
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'fdName' => 'setFdName',
            'fdValue' => 'setFdValue',
            'fdId' => 'setFdId',
            'directoryId' => 'setDirectoryId',
            'rowId' => 'setRowId',
            'id' => 'setId',
            'status' => 'setStatus',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fdName  属性名称。
    * fdValue  属性值。
    * fdId  属性定义的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * rowId  标准所属行，填写String类型替代Long类型。
    * id  数据标准的ID，填写String类型替代Long类型。
    * status  status
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'fdName' => 'getFdName',
            'fdValue' => 'getFdValue',
            'fdId' => 'getFdId',
            'directoryId' => 'getDirectoryId',
            'rowId' => 'getRowId',
            'id' => 'getId',
            'status' => 'getStatus',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime'
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
        $this->container['fdName'] = isset($data['fdName']) ? $data['fdName'] : null;
        $this->container['fdValue'] = isset($data['fdValue']) ? $data['fdValue'] : null;
        $this->container['fdId'] = isset($data['fdId']) ? $data['fdId'] : null;
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['rowId'] = isset($data['rowId']) ? $data['rowId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fdName'] === null) {
            $invalidProperties[] = "'fdName' can't be null";
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
    * Gets fdName
    *  属性名称。
    *
    * @return string
    */
    public function getFdName()
    {
        return $this->container['fdName'];
    }

    /**
    * Sets fdName
    *
    * @param string $fdName 属性名称。
    *
    * @return $this
    */
    public function setFdName($fdName)
    {
        $this->container['fdName'] = $fdName;
        return $this;
    }

    /**
    * Gets fdValue
    *  属性值。
    *
    * @return string|null
    */
    public function getFdValue()
    {
        return $this->container['fdValue'];
    }

    /**
    * Sets fdValue
    *
    * @param string|null $fdValue 属性值。
    *
    * @return $this
    */
    public function setFdValue($fdValue)
    {
        $this->container['fdValue'] = $fdValue;
        return $this;
    }

    /**
    * Gets fdId
    *  属性定义的ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getFdId()
    {
        return $this->container['fdId'];
    }

    /**
    * Sets fdId
    *
    * @param string|null $fdId 属性定义的ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setFdId($fdId)
    {
        $this->container['fdId'] = $fdId;
        return $this;
    }

    /**
    * Gets directoryId
    *  标准所属目录，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param string|null $directoryId 标准所属目录，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets rowId
    *  标准所属行，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getRowId()
    {
        return $this->container['rowId'];
    }

    /**
    * Sets rowId
    *
    * @param string|null $rowId 标准所属行，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setRowId($rowId)
    {
        $this->container['rowId'] = $rowId;
        return $this;
    }

    /**
    * Gets id
    *  数据标准的ID，填写String类型替代Long类型。
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
    * @param string|null $id 数据标准的ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets status
    *  status
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum|null $status status
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets updateBy
    *  更新人。
    *
    * @return string|null
    */
    public function getUpdateBy()
    {
        return $this->container['updateBy'];
    }

    /**
    * Sets updateBy
    *
    * @param string|null $updateBy 更新人。
    *
    * @return $this
    */
    public function setUpdateBy($updateBy)
    {
        $this->container['updateBy'] = $updateBy;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    *  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

