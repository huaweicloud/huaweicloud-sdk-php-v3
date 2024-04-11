<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StandElementFieldVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StandElementFieldVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * fdName  属性名称。
    * description  属性描述。
    * id  数据标准ID。
    * actived  是否显示，系统默认项必然显示不允许修改。
    * required  是否必填。
    * searchable  是否可搜索。
    * displayedName  前端展示名。
    * displayedNameEn  前端展示名英文。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'fdName' => 'string',
            'description' => 'string',
            'id' => 'int',
            'actived' => 'bool',
            'required' => 'bool',
            'searchable' => 'bool',
            'displayedName' => 'string',
            'displayedNameEn' => 'string',
            'createTime' => '\DateTime',
            'updateTime' => '\DateTime',
            'createBy' => 'string',
            'updateBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * fdName  属性名称。
    * description  属性描述。
    * id  数据标准ID。
    * actived  是否显示，系统默认项必然显示不允许修改。
    * required  是否必填。
    * searchable  是否可搜索。
    * displayedName  前端展示名。
    * displayedNameEn  前端展示名英文。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'fdName' => null,
        'description' => null,
        'id' => 'int64',
        'actived' => null,
        'required' => null,
        'searchable' => null,
        'displayedName' => null,
        'displayedNameEn' => null,
        'createTime' => 'date-time',
        'updateTime' => 'date-time',
        'createBy' => null,
        'updateBy' => null
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
    * description  属性描述。
    * id  数据标准ID。
    * actived  是否显示，系统默认项必然显示不允许修改。
    * required  是否必填。
    * searchable  是否可搜索。
    * displayedName  前端展示名。
    * displayedNameEn  前端展示名英文。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'fdName' => 'fd_name',
            'description' => 'description',
            'id' => 'id',
            'actived' => 'actived',
            'required' => 'required',
            'searchable' => 'searchable',
            'displayedName' => 'displayed_name',
            'displayedNameEn' => 'displayed_name_en',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'createBy' => 'create_by',
            'updateBy' => 'update_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * fdName  属性名称。
    * description  属性描述。
    * id  数据标准ID。
    * actived  是否显示，系统默认项必然显示不允许修改。
    * required  是否必填。
    * searchable  是否可搜索。
    * displayedName  前端展示名。
    * displayedNameEn  前端展示名英文。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $setters = [
            'fdName' => 'setFdName',
            'description' => 'setDescription',
            'id' => 'setId',
            'actived' => 'setActived',
            'required' => 'setRequired',
            'searchable' => 'setSearchable',
            'displayedName' => 'setDisplayedName',
            'displayedNameEn' => 'setDisplayedNameEn',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'createBy' => 'setCreateBy',
            'updateBy' => 'setUpdateBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * fdName  属性名称。
    * description  属性描述。
    * id  数据标准ID。
    * actived  是否显示，系统默认项必然显示不允许修改。
    * required  是否必填。
    * searchable  是否可搜索。
    * displayedName  前端展示名。
    * displayedNameEn  前端展示名英文。
    * createTime  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * updateTime  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    * createBy  创建人。
    * updateBy  更新人。
    *
    * @var string[]
    */
    protected static $getters = [
            'fdName' => 'getFdName',
            'description' => 'getDescription',
            'id' => 'getId',
            'actived' => 'getActived',
            'required' => 'getRequired',
            'searchable' => 'getSearchable',
            'displayedName' => 'getDisplayedName',
            'displayedNameEn' => 'getDisplayedNameEn',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'createBy' => 'getCreateBy',
            'updateBy' => 'getUpdateBy'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['actived'] = isset($data['actived']) ? $data['actived'] : null;
        $this->container['required'] = isset($data['required']) ? $data['required'] : null;
        $this->container['searchable'] = isset($data['searchable']) ? $data['searchable'] : null;
        $this->container['displayedName'] = isset($data['displayedName']) ? $data['displayedName'] : null;
        $this->container['displayedNameEn'] = isset($data['displayedNameEn']) ? $data['displayedNameEn'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['updateBy'] = isset($data['updateBy']) ? $data['updateBy'] : null;
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
        if ($this->container['actived'] === null) {
            $invalidProperties[] = "'actived' can't be null";
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
    * Gets description
    *  属性描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 属性描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  数据标准ID。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id 数据标准ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets actived
    *  是否显示，系统默认项必然显示不允许修改。
    *
    * @return bool
    */
    public function getActived()
    {
        return $this->container['actived'];
    }

    /**
    * Sets actived
    *
    * @param bool $actived 是否显示，系统默认项必然显示不允许修改。
    *
    * @return $this
    */
    public function setActived($actived)
    {
        $this->container['actived'] = $actived;
        return $this;
    }

    /**
    * Gets required
    *  是否必填。
    *
    * @return bool|null
    */
    public function getRequired()
    {
        return $this->container['required'];
    }

    /**
    * Sets required
    *
    * @param bool|null $required 是否必填。
    *
    * @return $this
    */
    public function setRequired($required)
    {
        $this->container['required'] = $required;
        return $this;
    }

    /**
    * Gets searchable
    *  是否可搜索。
    *
    * @return bool|null
    */
    public function getSearchable()
    {
        return $this->container['searchable'];
    }

    /**
    * Sets searchable
    *
    * @param bool|null $searchable 是否可搜索。
    *
    * @return $this
    */
    public function setSearchable($searchable)
    {
        $this->container['searchable'] = $searchable;
        return $this;
    }

    /**
    * Gets displayedName
    *  前端展示名。
    *
    * @return string|null
    */
    public function getDisplayedName()
    {
        return $this->container['displayedName'];
    }

    /**
    * Sets displayedName
    *
    * @param string|null $displayedName 前端展示名。
    *
    * @return $this
    */
    public function setDisplayedName($displayedName)
    {
        $this->container['displayedName'] = $displayedName;
        return $this;
    }

    /**
    * Gets displayedNameEn
    *  前端展示名英文。
    *
    * @return string|null
    */
    public function getDisplayedNameEn()
    {
        return $this->container['displayedNameEn'];
    }

    /**
    * Sets displayedNameEn
    *
    * @param string|null $displayedNameEn 前端展示名英文。
    *
    * @return $this
    */
    public function setDisplayedNameEn($displayedNameEn)
    {
        $this->container['displayedNameEn'] = $displayedNameEn;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $createTime 创建时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    *  更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
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
    * @param \DateTime|null $updateTime 更新时间，格式遵循RFC3339，精确到秒，UTC时区，即yyyy-mm-ddTHH:MM:SSZ，如1970-01-01T00:00:00Z。
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
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

