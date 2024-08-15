<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptListModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptListModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  脚本自增id
    * scriptUuid  脚本uuid
    * enterpriseProjectId  企业项目ID，默认为：0
    * name  脚本名称
    * type  脚本类型 SHELL:shell脚本 PYTHON:python脚本 BAT:bat脚本
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'scriptUuid' => 'string',
            'enterpriseProjectId' => 'string',
            'name' => 'string',
            'type' => 'string',
            'status' => 'string',
            'gmtCreated' => 'int',
            'gmtModified' => 'int',
            'creator' => 'string',
            'creatorId' => 'string',
            'operator' => 'string',
            'properties' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  脚本自增id
    * scriptUuid  脚本uuid
    * enterpriseProjectId  企业项目ID，默认为：0
    * name  脚本名称
    * type  脚本类型 SHELL:shell脚本 PYTHON:python脚本 BAT:bat脚本
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'scriptUuid' => null,
        'enterpriseProjectId' => null,
        'name' => null,
        'type' => null,
        'status' => null,
        'gmtCreated' => 'int64',
        'gmtModified' => 'int64',
        'creator' => null,
        'creatorId' => null,
        'operator' => null,
        'properties' => null
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
    * id  脚本自增id
    * scriptUuid  脚本uuid
    * enterpriseProjectId  企业项目ID，默认为：0
    * name  脚本名称
    * type  脚本类型 SHELL:shell脚本 PYTHON:python脚本 BAT:bat脚本
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'scriptUuid' => 'script_uuid',
            'enterpriseProjectId' => 'enterprise_project_id',
            'name' => 'name',
            'type' => 'type',
            'status' => 'status',
            'gmtCreated' => 'gmt_created',
            'gmtModified' => 'gmt_modified',
            'creator' => 'creator',
            'creatorId' => 'creator_id',
            'operator' => 'operator',
            'properties' => 'properties'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  脚本自增id
    * scriptUuid  脚本uuid
    * enterpriseProjectId  企业项目ID，默认为：0
    * name  脚本名称
    * type  脚本类型 SHELL:shell脚本 PYTHON:python脚本 BAT:bat脚本
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'scriptUuid' => 'setScriptUuid',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'name' => 'setName',
            'type' => 'setType',
            'status' => 'setStatus',
            'gmtCreated' => 'setGmtCreated',
            'gmtModified' => 'setGmtModified',
            'creator' => 'setCreator',
            'creatorId' => 'setCreatorId',
            'operator' => 'setOperator',
            'properties' => 'setProperties'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  脚本自增id
    * scriptUuid  脚本uuid
    * enterpriseProjectId  企业项目ID，默认为：0
    * name  脚本名称
    * type  脚本类型 SHELL:shell脚本 PYTHON:python脚本 BAT:bat脚本
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'scriptUuid' => 'getScriptUuid',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'name' => 'getName',
            'type' => 'getType',
            'status' => 'getStatus',
            'gmtCreated' => 'getGmtCreated',
            'gmtModified' => 'getGmtModified',
            'creator' => 'getCreator',
            'creatorId' => 'getCreatorId',
            'operator' => 'getOperator',
            'properties' => 'getProperties'
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
    const TYPE_SHELL = 'SHELL';
    const TYPE_PYTHON = 'PYTHON';
    const TYPE_BAT = 'BAT';
    const STATUS_PENDING_APPROVE = 'PENDING_APPROVE';
    const STATUS_APPROVED = 'APPROVED';
    const STATUS_REJECTED = 'REJECTED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_SHELL,
            self::TYPE_PYTHON,
            self::TYPE_BAT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_PENDING_APPROVE,
            self::STATUS_APPROVED,
            self::STATUS_REJECTED,
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
        $this->container['scriptUuid'] = isset($data['scriptUuid']) ? $data['scriptUuid'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['gmtCreated'] = isset($data['gmtCreated']) ? $data['gmtCreated'] : null;
        $this->container['gmtModified'] = isset($data['gmtModified']) ? $data['gmtModified'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if (($this->container['id'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
        if ($this->container['scriptUuid'] === null) {
            $invalidProperties[] = "'scriptUuid' can't be null";
        }
            if ((mb_strlen($this->container['scriptUuid']) > 25)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be smaller than or equal to 25.";
            }
            if ((mb_strlen($this->container['scriptUuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['gmtCreated'] === null) {
            $invalidProperties[] = "'gmtCreated' can't be null";
        }
            if (($this->container['gmtCreated'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'gmtCreated', must be smaller than or equal to 9223372036854775807.";
            }
            if (($this->container['gmtCreated'] < 1)) {
                $invalidProperties[] = "invalid value for 'gmtCreated', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['gmtModified']) && ($this->container['gmtModified'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'gmtModified', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['gmtModified']) && ($this->container['gmtModified'] < 1)) {
                $invalidProperties[] = "invalid value for 'gmtModified', must be bigger than or equal to 1.";
            }
        if ($this->container['creator'] === null) {
            $invalidProperties[] = "'creator' can't be null";
        }
            if ((mb_strlen($this->container['creator']) > 64)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['creator']) < 1)) {
                $invalidProperties[] = "invalid value for 'creator', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['creatorId'] === null) {
            $invalidProperties[] = "'creatorId' can't be null";
        }
            if ((mb_strlen($this->container['creatorId']) > 64)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['creatorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 64)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) < 1)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['properties'] === null) {
            $invalidProperties[] = "'properties' can't be null";
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
    *  脚本自增id
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 脚本自增id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets scriptUuid
    *  脚本uuid
    *
    * @return string
    */
    public function getScriptUuid()
    {
        return $this->container['scriptUuid'];
    }

    /**
    * Sets scriptUuid
    *
    * @param string $scriptUuid 脚本uuid
    *
    * @return $this
    */
    public function setScriptUuid($scriptUuid)
    {
        $this->container['scriptUuid'] = $scriptUuid;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID，默认为：0
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId 企业项目ID，默认为：0
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets name
    *  脚本名称
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
    * @param string $name 脚本名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets type
    *  脚本类型 SHELL:shell脚本 PYTHON:python脚本 BAT:bat脚本
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 脚本类型 SHELL:shell脚本 PYTHON:python脚本 BAT:bat脚本
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets gmtCreated
    *  创建时间
    *
    * @return int
    */
    public function getGmtCreated()
    {
        return $this->container['gmtCreated'];
    }

    /**
    * Sets gmtCreated
    *
    * @param int $gmtCreated 创建时间
    *
    * @return $this
    */
    public function setGmtCreated($gmtCreated)
    {
        $this->container['gmtCreated'] = $gmtCreated;
        return $this;
    }

    /**
    * Gets gmtModified
    *  修改时间
    *
    * @return int|null
    */
    public function getGmtModified()
    {
        return $this->container['gmtModified'];
    }

    /**
    * Sets gmtModified
    *
    * @param int|null $gmtModified 修改时间
    *
    * @return $this
    */
    public function setGmtModified($gmtModified)
    {
        $this->container['gmtModified'] = $gmtModified;
        return $this;
    }

    /**
    * Gets creator
    *  创建人
    *
    * @return string
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string $creator 创建人
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets creatorId
    *  创建人Id
    *
    * @return string
    */
    public function getCreatorId()
    {
        return $this->container['creatorId'];
    }

    /**
    * Sets creatorId
    *
    * @param string $creatorId 创建人Id
    *
    * @return $this
    */
    public function setCreatorId($creatorId)
    {
        $this->container['creatorId'] = $creatorId;
        return $this;
    }

    /**
    * Gets operator
    *  修改人
    *
    * @return string|null
    */
    public function getOperator()
    {
        return $this->container['operator'];
    }

    /**
    * Sets operator
    *
    * @param string|null $operator 修改人
    *
    * @return $this
    */
    public function setOperator($operator)
    {
        $this->container['operator'] = $operator;
        return $this;
    }

    /**
    * Gets properties
    *  properties
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel
    */
    public function getProperties()
    {
        return $this->container['properties'];
    }

    /**
    * Sets properties
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel $properties properties
    *
    * @return $this
    */
    public function setProperties($properties)
    {
        $this->container['properties'] = $properties;
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

