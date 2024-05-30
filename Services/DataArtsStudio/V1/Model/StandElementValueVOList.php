<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StandElementValueVOList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StandElementValueVOList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * values  属性信息。
    * id  数据标准的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * directoryPath  目录树。
    * rowId  标准行的ID，填写String类型替代Long类型。
    * status  status
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'values' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementValueVO[]',
            'id' => 'string',
            'directoryId' => 'string',
            'directoryPath' => 'string',
            'rowId' => 'string',
            'status' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizStatusEnum',
            'approvalInfo' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO',
            'newBiz' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO',
            'fromPublic' => 'bool',
            'createBy' => 'string',
            'updateBy' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * values  属性信息。
    * id  数据标准的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * directoryPath  目录树。
    * rowId  标准行的ID，填写String类型替代Long类型。
    * status  status
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'values' => null,
        'id' => null,
        'directoryId' => null,
        'directoryPath' => null,
        'rowId' => null,
        'status' => null,
        'approvalInfo' => null,
        'newBiz' => null,
        'fromPublic' => null,
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
    * values  属性信息。
    * id  数据标准的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * directoryPath  目录树。
    * rowId  标准行的ID，填写String类型替代Long类型。
    * status  status
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'values' => 'values',
            'id' => 'id',
            'directoryId' => 'directory_id',
            'directoryPath' => 'directory_path',
            'rowId' => 'row_id',
            'status' => 'status',
            'approvalInfo' => 'approval_info',
            'newBiz' => 'new_biz',
            'fromPublic' => 'from_public',
            'createBy' => 'create_by',
            'updateBy' => 'update_by',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * values  属性信息。
    * id  数据标准的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * directoryPath  目录树。
    * rowId  标准行的ID，填写String类型替代Long类型。
    * status  status
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $setters = [
            'values' => 'setValues',
            'id' => 'setId',
            'directoryId' => 'setDirectoryId',
            'directoryPath' => 'setDirectoryPath',
            'rowId' => 'setRowId',
            'status' => 'setStatus',
            'approvalInfo' => 'setApprovalInfo',
            'newBiz' => 'setNewBiz',
            'fromPublic' => 'setFromPublic',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * values  属性信息。
    * id  数据标准的ID，填写String类型替代Long类型。
    * directoryId  标准所属目录，填写String类型替代Long类型。
    * directoryPath  目录树。
    * rowId  标准行的ID，填写String类型替代Long类型。
    * status  status
    * approvalInfo  approvalInfo
    * newBiz  newBiz
    * fromPublic  是否来自公共层。
    * createBy  创建人。
    * updateBy  更新人。
    * createTime  创建时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，只读，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @var string[]
    */
    protected static $getters = [
            'values' => 'getValues',
            'id' => 'getId',
            'directoryId' => 'getDirectoryId',
            'directoryPath' => 'getDirectoryPath',
            'rowId' => 'getRowId',
            'status' => 'getStatus',
            'approvalInfo' => 'getApprovalInfo',
            'newBiz' => 'getNewBiz',
            'fromPublic' => 'getFromPublic',
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
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['directoryPath'] = isset($data['directoryPath']) ? $data['directoryPath'] : null;
        $this->container['rowId'] = isset($data['rowId']) ? $data['rowId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['approvalInfo'] = isset($data['approvalInfo']) ? $data['approvalInfo'] : null;
        $this->container['newBiz'] = isset($data['newBiz']) ? $data['newBiz'] : null;
        $this->container['fromPublic'] = isset($data['fromPublic']) ? $data['fromPublic'] : null;
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
        if ($this->container['values'] === null) {
            $invalidProperties[] = "'values' can't be null";
        }
        if ($this->container['directoryId'] === null) {
            $invalidProperties[] = "'directoryId' can't be null";
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
    * Gets values
    *  属性信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementValueVO[]
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\StandElementValueVO[] $values 属性信息。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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
    * Gets directoryId
    *  标准所属目录，填写String类型替代Long类型。
    *
    * @return string
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param string $directoryId 标准所属目录，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets directoryPath
    *  目录树。
    *
    * @return string|null
    */
    public function getDirectoryPath()
    {
        return $this->container['directoryPath'];
    }

    /**
    * Sets directoryPath
    *
    * @param string|null $directoryPath 目录树。
    *
    * @return $this
    */
    public function setDirectoryPath($directoryPath)
    {
        $this->container['directoryPath'] = $directoryPath;
        return $this;
    }

    /**
    * Gets rowId
    *  标准行的ID，填写String类型替代Long类型。
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
    * @param string|null $rowId 标准行的ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setRowId($rowId)
    {
        $this->container['rowId'] = $rowId;
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
    * Gets approvalInfo
    *  approvalInfo
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null
    */
    public function getApprovalInfo()
    {
        return $this->container['approvalInfo'];
    }

    /**
    * Sets approvalInfo
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\ApprovalVO|null $approvalInfo approvalInfo
    *
    * @return $this
    */
    public function setApprovalInfo($approvalInfo)
    {
        $this->container['approvalInfo'] = $approvalInfo;
        return $this;
    }

    /**
    * Gets newBiz
    *  newBiz
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null
    */
    public function getNewBiz()
    {
        return $this->container['newBiz'];
    }

    /**
    * Sets newBiz
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BizVersionManageVO|null $newBiz newBiz
    *
    * @return $this
    */
    public function setNewBiz($newBiz)
    {
        $this->container['newBiz'] = $newBiz;
        return $this;
    }

    /**
    * Gets fromPublic
    *  是否来自公共层。
    *
    * @return bool|null
    */
    public function getFromPublic()
    {
        return $this->container['fromPublic'];
    }

    /**
    * Sets fromPublic
    *
    * @param bool|null $fromPublic 是否来自公共层。
    *
    * @return $this
    */
    public function setFromPublic($fromPublic)
    {
        $this->container['fromPublic'] = $fromPublic;
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

