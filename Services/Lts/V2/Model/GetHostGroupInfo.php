<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetHostGroupInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetHostGroupInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostGroupType  主机组类型。linux：linux类型，windows：windows类型
    * hostIdList  主机ID列表
    * hostGroupTag  标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * agentAccessType  **参数解释：** 主机组类型。分别为IP、LABEL类型。 **取值范围：** - IP。 - LABEL。
    * labels  **参数解释：** 主机组自定义标识。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostGroupId' => 'string',
            'hostGroupName' => 'string',
            'hostGroupType' => 'string',
            'hostIdList' => 'string[]',
            'hostGroupTag' => '\HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]',
            'createTime' => 'int',
            'updateTime' => 'int',
            'agentAccessType' => 'string',
            'labels' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostGroupType  主机组类型。linux：linux类型，windows：windows类型
    * hostIdList  主机ID列表
    * hostGroupTag  标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * agentAccessType  **参数解释：** 主机组类型。分别为IP、LABEL类型。 **取值范围：** - IP。 - LABEL。
    * labels  **参数解释：** 主机组自定义标识。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostGroupId' => null,
        'hostGroupName' => null,
        'hostGroupType' => null,
        'hostIdList' => null,
        'hostGroupTag' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'agentAccessType' => null,
        'labels' => null
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
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostGroupType  主机组类型。linux：linux类型，windows：windows类型
    * hostIdList  主机ID列表
    * hostGroupTag  标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * agentAccessType  **参数解释：** 主机组类型。分别为IP、LABEL类型。 **取值范围：** - IP。 - LABEL。
    * labels  **参数解释：** 主机组自定义标识。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostGroupId' => 'host_group_id',
            'hostGroupName' => 'host_group_name',
            'hostGroupType' => 'host_group_type',
            'hostIdList' => 'host_id_list',
            'hostGroupTag' => 'host_group_tag',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'agentAccessType' => 'agent_access_type',
            'labels' => 'labels'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostGroupType  主机组类型。linux：linux类型，windows：windows类型
    * hostIdList  主机ID列表
    * hostGroupTag  标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * agentAccessType  **参数解释：** 主机组类型。分别为IP、LABEL类型。 **取值范围：** - IP。 - LABEL。
    * labels  **参数解释：** 主机组自定义标识。
    *
    * @var string[]
    */
    protected static $setters = [
            'hostGroupId' => 'setHostGroupId',
            'hostGroupName' => 'setHostGroupName',
            'hostGroupType' => 'setHostGroupType',
            'hostIdList' => 'setHostIdList',
            'hostGroupTag' => 'setHostGroupTag',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'agentAccessType' => 'setAgentAccessType',
            'labels' => 'setLabels'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostGroupId  主机组ID
    * hostGroupName  主机组名称
    * hostGroupType  主机组类型。linux：linux类型，windows：windows类型
    * hostIdList  主机ID列表
    * hostGroupTag  标签信息
    * createTime  创建时间
    * updateTime  更新时间
    * agentAccessType  **参数解释：** 主机组类型。分别为IP、LABEL类型。 **取值范围：** - IP。 - LABEL。
    * labels  **参数解释：** 主机组自定义标识。
    *
    * @var string[]
    */
    protected static $getters = [
            'hostGroupId' => 'getHostGroupId',
            'hostGroupName' => 'getHostGroupName',
            'hostGroupType' => 'getHostGroupType',
            'hostIdList' => 'getHostIdList',
            'hostGroupTag' => 'getHostGroupTag',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'agentAccessType' => 'getAgentAccessType',
            'labels' => 'getLabels'
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
    const HOST_GROUP_TYPE_LINUX = 'linux';
    const HOST_GROUP_TYPE_WINDOWS = 'windows';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getHostGroupTypeAllowableValues()
    {
        return [
            self::HOST_GROUP_TYPE_LINUX,
            self::HOST_GROUP_TYPE_WINDOWS,
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
        $this->container['hostGroupId'] = isset($data['hostGroupId']) ? $data['hostGroupId'] : null;
        $this->container['hostGroupName'] = isset($data['hostGroupName']) ? $data['hostGroupName'] : null;
        $this->container['hostGroupType'] = isset($data['hostGroupType']) ? $data['hostGroupType'] : null;
        $this->container['hostIdList'] = isset($data['hostIdList']) ? $data['hostIdList'] : null;
        $this->container['hostGroupTag'] = isset($data['hostGroupTag']) ? $data['hostGroupTag'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['agentAccessType'] = isset($data['agentAccessType']) ? $data['agentAccessType'] : null;
        $this->container['labels'] = isset($data['labels']) ? $data['labels'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostGroupId']) && (mb_strlen($this->container['hostGroupId']) > 36)) {
                $invalidProperties[] = "invalid value for 'hostGroupId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['hostGroupId']) && (mb_strlen($this->container['hostGroupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'hostGroupId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['hostGroupName']) && (mb_strlen($this->container['hostGroupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostGroupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostGroupName']) && (mb_strlen($this->container['hostGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostGroupName']) && !preg_match("/^(?!\\.)(?!_)(?!.*?\\.$)[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,64}$/", $this->container['hostGroupName'])) {
                $invalidProperties[] = "invalid value for 'hostGroupName', must be conform to the pattern /^(?!\\.)(?!_)(?!.*?\\.$)[\\u4e00-\\u9fa5a-zA-Z0-9-_.]{1,64}$/.";
            }
            $allowedValues = $this->getHostGroupTypeAllowableValues();
                if (!is_null($this->container['hostGroupType']) && !in_array($this->container['hostGroupType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'hostGroupType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 0.";
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
    * Gets hostGroupId
    *  主机组ID
    *
    * @return string|null
    */
    public function getHostGroupId()
    {
        return $this->container['hostGroupId'];
    }

    /**
    * Sets hostGroupId
    *
    * @param string|null $hostGroupId 主机组ID
    *
    * @return $this
    */
    public function setHostGroupId($hostGroupId)
    {
        $this->container['hostGroupId'] = $hostGroupId;
        return $this;
    }

    /**
    * Gets hostGroupName
    *  主机组名称
    *
    * @return string|null
    */
    public function getHostGroupName()
    {
        return $this->container['hostGroupName'];
    }

    /**
    * Sets hostGroupName
    *
    * @param string|null $hostGroupName 主机组名称
    *
    * @return $this
    */
    public function setHostGroupName($hostGroupName)
    {
        $this->container['hostGroupName'] = $hostGroupName;
        return $this;
    }

    /**
    * Gets hostGroupType
    *  主机组类型。linux：linux类型，windows：windows类型
    *
    * @return string|null
    */
    public function getHostGroupType()
    {
        return $this->container['hostGroupType'];
    }

    /**
    * Sets hostGroupType
    *
    * @param string|null $hostGroupType 主机组类型。linux：linux类型，windows：windows类型
    *
    * @return $this
    */
    public function setHostGroupType($hostGroupType)
    {
        $this->container['hostGroupType'] = $hostGroupType;
        return $this;
    }

    /**
    * Gets hostIdList
    *  主机ID列表
    *
    * @return string[]|null
    */
    public function getHostIdList()
    {
        return $this->container['hostIdList'];
    }

    /**
    * Sets hostIdList
    *
    * @param string[]|null $hostIdList 主机ID列表
    *
    * @return $this
    */
    public function setHostIdList($hostIdList)
    {
        $this->container['hostIdList'] = $hostIdList;
        return $this;
    }

    /**
    * Gets hostGroupTag
    *  标签信息
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]|null
    */
    public function getHostGroupTag()
    {
        return $this->container['hostGroupTag'];
    }

    /**
    * Sets hostGroupTag
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\HostGroupTag[]|null $hostGroupTag 标签信息
    *
    * @return $this
    */
    public function setHostGroupTag($hostGroupTag)
    {
        $this->container['hostGroupTag'] = $hostGroupTag;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
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
    * @param int|null $createTime 创建时间
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
    *  更新时间
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
    * @param int|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets agentAccessType
    *  **参数解释：** 主机组类型。分别为IP、LABEL类型。 **取值范围：** - IP。 - LABEL。
    *
    * @return string|null
    */
    public function getAgentAccessType()
    {
        return $this->container['agentAccessType'];
    }

    /**
    * Sets agentAccessType
    *
    * @param string|null $agentAccessType **参数解释：** 主机组类型。分别为IP、LABEL类型。 **取值范围：** - IP。 - LABEL。
    *
    * @return $this
    */
    public function setAgentAccessType($agentAccessType)
    {
        $this->container['agentAccessType'] = $agentAccessType;
        return $this;
    }

    /**
    * Gets labels
    *  **参数解释：** 主机组自定义标识。
    *
    * @return string[]|null
    */
    public function getLabels()
    {
        return $this->container['labels'];
    }

    /**
    * Sets labels
    *
    * @param string[]|null $labels **参数解释：** 主机组自定义标识。
    *
    * @return $this
    */
    public function setLabels($labels)
    {
        $this->container['labels'] = $labels;
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

