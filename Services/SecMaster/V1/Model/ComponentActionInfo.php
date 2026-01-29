<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ComponentActionInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ComponentActionInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  插件执行函数id
    * actionName  插件执行函数名称
    * actionDesc  插件执行函数描述
    * actionType  执行函数类型，可选action/connector/manager
    * createTime  创建时间
    * creatorName  创建者名称
    * canUpdate  是否可升级，true/false
    * actionVersionId  当前启用的插件执行函数版本id
    * actionVersionName  当前启用的用户自定义执行函数版本别名
    * actionVersionNumber  当前启用的执行函数版本号
    * actionEnable  启用/禁用状态
    * actionInput  当前启用的执行函数版本输入参数列表
    * actionOutput  当前启用的执行函数版本输出参数列表
    * actionVersions  全量插件执行函数版本列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'actionName' => 'string',
            'actionDesc' => 'string',
            'actionType' => 'string',
            'createTime' => 'string',
            'creatorName' => 'string',
            'canUpdate' => 'bool',
            'actionVersionId' => 'string',
            'actionVersionName' => 'string',
            'actionVersionNumber' => 'string',
            'actionEnable' => 'string',
            'actionInput' => 'string',
            'actionOutput' => 'string',
            'actionVersions' => '\HuaweiCloud\SDK\SecMaster\V1\Model\ComponentActionVersionInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  插件执行函数id
    * actionName  插件执行函数名称
    * actionDesc  插件执行函数描述
    * actionType  执行函数类型，可选action/connector/manager
    * createTime  创建时间
    * creatorName  创建者名称
    * canUpdate  是否可升级，true/false
    * actionVersionId  当前启用的插件执行函数版本id
    * actionVersionName  当前启用的用户自定义执行函数版本别名
    * actionVersionNumber  当前启用的执行函数版本号
    * actionEnable  启用/禁用状态
    * actionInput  当前启用的执行函数版本输入参数列表
    * actionOutput  当前启用的执行函数版本输出参数列表
    * actionVersions  全量插件执行函数版本列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'actionName' => null,
        'actionDesc' => null,
        'actionType' => null,
        'createTime' => null,
        'creatorName' => null,
        'canUpdate' => null,
        'actionVersionId' => null,
        'actionVersionName' => null,
        'actionVersionNumber' => null,
        'actionEnable' => null,
        'actionInput' => null,
        'actionOutput' => null,
        'actionVersions' => null
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
    * id  插件执行函数id
    * actionName  插件执行函数名称
    * actionDesc  插件执行函数描述
    * actionType  执行函数类型，可选action/connector/manager
    * createTime  创建时间
    * creatorName  创建者名称
    * canUpdate  是否可升级，true/false
    * actionVersionId  当前启用的插件执行函数版本id
    * actionVersionName  当前启用的用户自定义执行函数版本别名
    * actionVersionNumber  当前启用的执行函数版本号
    * actionEnable  启用/禁用状态
    * actionInput  当前启用的执行函数版本输入参数列表
    * actionOutput  当前启用的执行函数版本输出参数列表
    * actionVersions  全量插件执行函数版本列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'actionName' => 'action_name',
            'actionDesc' => 'action_desc',
            'actionType' => 'action_type',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'canUpdate' => 'can_update',
            'actionVersionId' => 'action_version_id',
            'actionVersionName' => 'action_version_name',
            'actionVersionNumber' => 'action_version_number',
            'actionEnable' => 'action_enable',
            'actionInput' => 'action_input',
            'actionOutput' => 'action_output',
            'actionVersions' => 'action_versions'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  插件执行函数id
    * actionName  插件执行函数名称
    * actionDesc  插件执行函数描述
    * actionType  执行函数类型，可选action/connector/manager
    * createTime  创建时间
    * creatorName  创建者名称
    * canUpdate  是否可升级，true/false
    * actionVersionId  当前启用的插件执行函数版本id
    * actionVersionName  当前启用的用户自定义执行函数版本别名
    * actionVersionNumber  当前启用的执行函数版本号
    * actionEnable  启用/禁用状态
    * actionInput  当前启用的执行函数版本输入参数列表
    * actionOutput  当前启用的执行函数版本输出参数列表
    * actionVersions  全量插件执行函数版本列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'actionName' => 'setActionName',
            'actionDesc' => 'setActionDesc',
            'actionType' => 'setActionType',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'canUpdate' => 'setCanUpdate',
            'actionVersionId' => 'setActionVersionId',
            'actionVersionName' => 'setActionVersionName',
            'actionVersionNumber' => 'setActionVersionNumber',
            'actionEnable' => 'setActionEnable',
            'actionInput' => 'setActionInput',
            'actionOutput' => 'setActionOutput',
            'actionVersions' => 'setActionVersions'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  插件执行函数id
    * actionName  插件执行函数名称
    * actionDesc  插件执行函数描述
    * actionType  执行函数类型，可选action/connector/manager
    * createTime  创建时间
    * creatorName  创建者名称
    * canUpdate  是否可升级，true/false
    * actionVersionId  当前启用的插件执行函数版本id
    * actionVersionName  当前启用的用户自定义执行函数版本别名
    * actionVersionNumber  当前启用的执行函数版本号
    * actionEnable  启用/禁用状态
    * actionInput  当前启用的执行函数版本输入参数列表
    * actionOutput  当前启用的执行函数版本输出参数列表
    * actionVersions  全量插件执行函数版本列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'actionName' => 'getActionName',
            'actionDesc' => 'getActionDesc',
            'actionType' => 'getActionType',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'canUpdate' => 'getCanUpdate',
            'actionVersionId' => 'getActionVersionId',
            'actionVersionName' => 'getActionVersionName',
            'actionVersionNumber' => 'getActionVersionNumber',
            'actionEnable' => 'getActionEnable',
            'actionInput' => 'getActionInput',
            'actionOutput' => 'getActionOutput',
            'actionVersions' => 'getActionVersions'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['actionDesc'] = isset($data['actionDesc']) ? $data['actionDesc'] : null;
        $this->container['actionType'] = isset($data['actionType']) ? $data['actionType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['canUpdate'] = isset($data['canUpdate']) ? $data['canUpdate'] : null;
        $this->container['actionVersionId'] = isset($data['actionVersionId']) ? $data['actionVersionId'] : null;
        $this->container['actionVersionName'] = isset($data['actionVersionName']) ? $data['actionVersionName'] : null;
        $this->container['actionVersionNumber'] = isset($data['actionVersionNumber']) ? $data['actionVersionNumber'] : null;
        $this->container['actionEnable'] = isset($data['actionEnable']) ? $data['actionEnable'] : null;
        $this->container['actionInput'] = isset($data['actionInput']) ? $data['actionInput'] : null;
        $this->container['actionOutput'] = isset($data['actionOutput']) ? $data['actionOutput'] : null;
        $this->container['actionVersions'] = isset($data['actionVersions']) ? $data['actionVersions'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 128)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionName']) && (mb_strlen($this->container['actionName']) > 64)) {
                $invalidProperties[] = "invalid value for 'actionName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['actionName']) && (mb_strlen($this->container['actionName']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionDesc']) && (mb_strlen($this->container['actionDesc']) > 2048)) {
                $invalidProperties[] = "invalid value for 'actionDesc', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['actionDesc']) && (mb_strlen($this->container['actionDesc']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionDesc', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionType']) && (mb_strlen($this->container['actionType']) > 16)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['actionType']) && (mb_strlen($this->container['actionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 128)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['creatorName']) && (mb_strlen($this->container['creatorName']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionVersionId']) && (mb_strlen($this->container['actionVersionId']) > 128)) {
                $invalidProperties[] = "invalid value for 'actionVersionId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['actionVersionId']) && (mb_strlen($this->container['actionVersionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'actionVersionId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['actionVersionName']) && (mb_strlen($this->container['actionVersionName']) > 8)) {
                $invalidProperties[] = "invalid value for 'actionVersionName', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['actionVersionName']) && (mb_strlen($this->container['actionVersionName']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionVersionName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionVersionNumber']) && (mb_strlen($this->container['actionVersionNumber']) > 8)) {
                $invalidProperties[] = "invalid value for 'actionVersionNumber', the character length must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['actionVersionNumber']) && (mb_strlen($this->container['actionVersionNumber']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionVersionNumber', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionEnable']) && (mb_strlen($this->container['actionEnable']) > 16)) {
                $invalidProperties[] = "invalid value for 'actionEnable', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['actionEnable']) && (mb_strlen($this->container['actionEnable']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionEnable', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionInput']) && (mb_strlen($this->container['actionInput']) > 65535)) {
                $invalidProperties[] = "invalid value for 'actionInput', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['actionInput']) && (mb_strlen($this->container['actionInput']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionInput', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['actionOutput']) && (mb_strlen($this->container['actionOutput']) > 65535)) {
                $invalidProperties[] = "invalid value for 'actionOutput', the character length must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['actionOutput']) && (mb_strlen($this->container['actionOutput']) < 0)) {
                $invalidProperties[] = "invalid value for 'actionOutput', the character length must be bigger than or equal to 0.";
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
    *  插件执行函数id
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
    * @param string|null $id 插件执行函数id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets actionName
    *  插件执行函数名称
    *
    * @return string|null
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string|null $actionName 插件执行函数名称
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets actionDesc
    *  插件执行函数描述
    *
    * @return string|null
    */
    public function getActionDesc()
    {
        return $this->container['actionDesc'];
    }

    /**
    * Sets actionDesc
    *
    * @param string|null $actionDesc 插件执行函数描述
    *
    * @return $this
    */
    public function setActionDesc($actionDesc)
    {
        $this->container['actionDesc'] = $actionDesc;
        return $this;
    }

    /**
    * Gets actionType
    *  执行函数类型，可选action/connector/manager
    *
    * @return string|null
    */
    public function getActionType()
    {
        return $this->container['actionType'];
    }

    /**
    * Sets actionType
    *
    * @param string|null $actionType 执行函数类型，可选action/connector/manager
    *
    * @return $this
    */
    public function setActionType($actionType)
    {
        $this->container['actionType'] = $actionType;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets creatorName
    *  创建者名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建者名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets canUpdate
    *  是否可升级，true/false
    *
    * @return bool|null
    */
    public function getCanUpdate()
    {
        return $this->container['canUpdate'];
    }

    /**
    * Sets canUpdate
    *
    * @param bool|null $canUpdate 是否可升级，true/false
    *
    * @return $this
    */
    public function setCanUpdate($canUpdate)
    {
        $this->container['canUpdate'] = $canUpdate;
        return $this;
    }

    /**
    * Gets actionVersionId
    *  当前启用的插件执行函数版本id
    *
    * @return string|null
    */
    public function getActionVersionId()
    {
        return $this->container['actionVersionId'];
    }

    /**
    * Sets actionVersionId
    *
    * @param string|null $actionVersionId 当前启用的插件执行函数版本id
    *
    * @return $this
    */
    public function setActionVersionId($actionVersionId)
    {
        $this->container['actionVersionId'] = $actionVersionId;
        return $this;
    }

    /**
    * Gets actionVersionName
    *  当前启用的用户自定义执行函数版本别名
    *
    * @return string|null
    */
    public function getActionVersionName()
    {
        return $this->container['actionVersionName'];
    }

    /**
    * Sets actionVersionName
    *
    * @param string|null $actionVersionName 当前启用的用户自定义执行函数版本别名
    *
    * @return $this
    */
    public function setActionVersionName($actionVersionName)
    {
        $this->container['actionVersionName'] = $actionVersionName;
        return $this;
    }

    /**
    * Gets actionVersionNumber
    *  当前启用的执行函数版本号
    *
    * @return string|null
    */
    public function getActionVersionNumber()
    {
        return $this->container['actionVersionNumber'];
    }

    /**
    * Sets actionVersionNumber
    *
    * @param string|null $actionVersionNumber 当前启用的执行函数版本号
    *
    * @return $this
    */
    public function setActionVersionNumber($actionVersionNumber)
    {
        $this->container['actionVersionNumber'] = $actionVersionNumber;
        return $this;
    }

    /**
    * Gets actionEnable
    *  启用/禁用状态
    *
    * @return string|null
    */
    public function getActionEnable()
    {
        return $this->container['actionEnable'];
    }

    /**
    * Sets actionEnable
    *
    * @param string|null $actionEnable 启用/禁用状态
    *
    * @return $this
    */
    public function setActionEnable($actionEnable)
    {
        $this->container['actionEnable'] = $actionEnable;
        return $this;
    }

    /**
    * Gets actionInput
    *  当前启用的执行函数版本输入参数列表
    *
    * @return string|null
    */
    public function getActionInput()
    {
        return $this->container['actionInput'];
    }

    /**
    * Sets actionInput
    *
    * @param string|null $actionInput 当前启用的执行函数版本输入参数列表
    *
    * @return $this
    */
    public function setActionInput($actionInput)
    {
        $this->container['actionInput'] = $actionInput;
        return $this;
    }

    /**
    * Gets actionOutput
    *  当前启用的执行函数版本输出参数列表
    *
    * @return string|null
    */
    public function getActionOutput()
    {
        return $this->container['actionOutput'];
    }

    /**
    * Sets actionOutput
    *
    * @param string|null $actionOutput 当前启用的执行函数版本输出参数列表
    *
    * @return $this
    */
    public function setActionOutput($actionOutput)
    {
        $this->container['actionOutput'] = $actionOutput;
        return $this;
    }

    /**
    * Gets actionVersions
    *  全量插件执行函数版本列表
    *
    * @return \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentActionVersionInfo[]|null
    */
    public function getActionVersions()
    {
        return $this->container['actionVersions'];
    }

    /**
    * Sets actionVersions
    *
    * @param \HuaweiCloud\SDK\SecMaster\V1\Model\ComponentActionVersionInfo[]|null $actionVersions 全量插件执行函数版本列表
    *
    * @return $this
    */
    public function setActionVersions($actionVersions)
    {
        $this->container['actionVersions'] = $actionVersions;
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

