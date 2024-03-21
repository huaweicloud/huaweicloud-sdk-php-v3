<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAppRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAppRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * name  应用名称
    * description  描述
    * groupId  分组id
    * isDraft  是否为草稿
    * createType  创建类型，创建类型只有一个'template'，即根据模板创建
    * slaveClusterId  自定义slave资源池id
    * trigger  trigger
    * arrangeInfos  部署任务列表信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'name' => 'string',
            'description' => 'string',
            'groupId' => 'string',
            'isDraft' => 'bool',
            'createType' => 'string',
            'slaveClusterId' => 'string',
            'trigger' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskTriggerVO',
            'arrangeInfos' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskV2RequestBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * name  应用名称
    * description  描述
    * groupId  分组id
    * isDraft  是否为草稿
    * createType  创建类型，创建类型只有一个'template'，即根据模板创建
    * slaveClusterId  自定义slave资源池id
    * trigger  trigger
    * arrangeInfos  部署任务列表信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'name' => null,
        'description' => null,
        'groupId' => null,
        'isDraft' => null,
        'createType' => null,
        'slaveClusterId' => null,
        'trigger' => null,
        'arrangeInfos' => null
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
    * projectId  项目ID
    * name  应用名称
    * description  描述
    * groupId  分组id
    * isDraft  是否为草稿
    * createType  创建类型，创建类型只有一个'template'，即根据模板创建
    * slaveClusterId  自定义slave资源池id
    * trigger  trigger
    * arrangeInfos  部署任务列表信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'name' => 'name',
            'description' => 'description',
            'groupId' => 'group_id',
            'isDraft' => 'is_draft',
            'createType' => 'create_type',
            'slaveClusterId' => 'slave_cluster_id',
            'trigger' => 'trigger',
            'arrangeInfos' => 'arrange_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * name  应用名称
    * description  描述
    * groupId  分组id
    * isDraft  是否为草稿
    * createType  创建类型，创建类型只有一个'template'，即根据模板创建
    * slaveClusterId  自定义slave资源池id
    * trigger  trigger
    * arrangeInfos  部署任务列表信息
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'description' => 'setDescription',
            'groupId' => 'setGroupId',
            'isDraft' => 'setIsDraft',
            'createType' => 'setCreateType',
            'slaveClusterId' => 'setSlaveClusterId',
            'trigger' => 'setTrigger',
            'arrangeInfos' => 'setArrangeInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * name  应用名称
    * description  描述
    * groupId  分组id
    * isDraft  是否为草稿
    * createType  创建类型，创建类型只有一个'template'，即根据模板创建
    * slaveClusterId  自定义slave资源池id
    * trigger  trigger
    * arrangeInfos  部署任务列表信息
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'description' => 'getDescription',
            'groupId' => 'getGroupId',
            'isDraft' => 'getIsDraft',
            'createType' => 'getCreateType',
            'slaveClusterId' => 'getSlaveClusterId',
            'trigger' => 'getTrigger',
            'arrangeInfos' => 'getArrangeInfos'
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
    const CREATE_TYPE_TEMPLATE = 'template';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getCreateTypeAllowableValues()
    {
        return [
            self::CREATE_TYPE_TEMPLATE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['isDraft'] = isset($data['isDraft']) ? $data['isDraft'] : null;
        $this->container['createType'] = isset($data['createType']) ? $data['createType'] : null;
        $this->container['slaveClusterId'] = isset($data['slaveClusterId']) ? $data['slaveClusterId'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['arrangeInfos'] = isset($data['arrangeInfos']) ? $data['arrangeInfos'] : null;
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
            if (!preg_match("/^[A-Za-z0-9]{32}$/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /^[A-Za-z0-9]{32}$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['name']) < 3)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 3.";
            }
            if (!preg_match("/^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-zA-Z0-9\\u4E00-\\u9FA5-_]+$/.";
            }
        if ($this->container['isDraft'] === null) {
            $invalidProperties[] = "'isDraft' can't be null";
        }
        if ($this->container['createType'] === null) {
            $invalidProperties[] = "'createType' can't be null";
        }
            $allowedValues = $this->getCreateTypeAllowableValues();
                if (!is_null($this->container['createType']) && !in_array($this->container['createType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'createType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['slaveClusterId']) && !preg_match("/^[A-Za-z0-9]{1,32}$/", $this->container['slaveClusterId'])) {
                $invalidProperties[] = "invalid value for 'slaveClusterId', must be conform to the pattern /^[A-Za-z0-9]{1,32}$/.";
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
    *  项目ID
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
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets name
    *  应用名称
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 应用名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets description
    *  描述
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
    * @param string|null $description 描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets groupId
    *  分组id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 分组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets isDraft
    *  是否为草稿
    *
    * @return bool
    */
    public function getIsDraft()
    {
        return $this->container['isDraft'];
    }

    /**
    * Sets isDraft
    *
    * @param bool $isDraft 是否为草稿
    *
    * @return $this
    */
    public function setIsDraft($isDraft)
    {
        $this->container['isDraft'] = $isDraft;
        return $this;
    }

    /**
    * Gets createType
    *  创建类型，创建类型只有一个'template'，即根据模板创建
    *
    * @return string
    */
    public function getCreateType()
    {
        return $this->container['createType'];
    }

    /**
    * Sets createType
    *
    * @param string $createType 创建类型，创建类型只有一个'template'，即根据模板创建
    *
    * @return $this
    */
    public function setCreateType($createType)
    {
        $this->container['createType'] = $createType;
        return $this;
    }

    /**
    * Gets slaveClusterId
    *  自定义slave资源池id
    *
    * @return string|null
    */
    public function getSlaveClusterId()
    {
        return $this->container['slaveClusterId'];
    }

    /**
    * Sets slaveClusterId
    *
    * @param string|null $slaveClusterId 自定义slave资源池id
    *
    * @return $this
    */
    public function setSlaveClusterId($slaveClusterId)
    {
        $this->container['slaveClusterId'] = $slaveClusterId;
        return $this;
    }

    /**
    * Gets trigger
    *  trigger
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskTriggerVO|null
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskTriggerVO|null $trigger trigger
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets arrangeInfos
    *  部署任务列表信息
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskV2RequestBody[]|null
    */
    public function getArrangeInfos()
    {
        return $this->container['arrangeInfos'];
    }

    /**
    * Sets arrangeInfos
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\TaskV2RequestBody[]|null $arrangeInfos 部署任务列表信息
    *
    * @return $this
    */
    public function setArrangeInfos($arrangeInfos)
    {
        $this->container['arrangeInfos'] = $arrangeInfos;
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

