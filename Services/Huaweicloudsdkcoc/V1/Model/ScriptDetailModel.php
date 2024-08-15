<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ScriptDetailModel implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ScriptDetailModel';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * name  脚本名称
    * version  脚本版本号 约束条件  后期废除，不建议使用
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本）
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'scriptUuid' => 'string',
            'name' => 'string',
            'version' => 'string',
            'description' => 'string',
            'type' => 'string',
            'content' => 'string',
            'scriptParams' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]',
            'status' => 'string',
            'gmtCreated' => 'int',
            'gmtModified' => 'int',
            'creator' => 'string',
            'creatorId' => 'string',
            'operator' => 'string',
            'properties' => '\HuaweiCloud\SDK\Coc\V1\Model\ScriptPropertiesModel',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * scriptUuid  脚本uuid
    * name  脚本名称
    * version  脚本版本号 约束条件  后期废除，不建议使用
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本）
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'scriptUuid' => null,
        'name' => null,
        'version' => null,
        'description' => null,
        'type' => null,
        'content' => null,
        'scriptParams' => null,
        'status' => null,
        'gmtCreated' => 'int64',
        'gmtModified' => 'int64',
        'creator' => null,
        'creatorId' => null,
        'operator' => null,
        'properties' => null,
        'enterpriseProjectId' => null
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
    * scriptUuid  脚本uuid
    * name  脚本名称
    * version  脚本版本号 约束条件  后期废除，不建议使用
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本）
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'scriptUuid' => 'script_uuid',
            'name' => 'name',
            'version' => 'version',
            'description' => 'description',
            'type' => 'type',
            'content' => 'content',
            'scriptParams' => 'script_params',
            'status' => 'status',
            'gmtCreated' => 'gmt_created',
            'gmtModified' => 'gmt_modified',
            'creator' => 'creator',
            'creatorId' => 'creator_id',
            'operator' => 'operator',
            'properties' => 'properties',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * scriptUuid  脚本uuid
    * name  脚本名称
    * version  脚本版本号 约束条件  后期废除，不建议使用
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本）
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'scriptUuid' => 'setScriptUuid',
            'name' => 'setName',
            'version' => 'setVersion',
            'description' => 'setDescription',
            'type' => 'setType',
            'content' => 'setContent',
            'scriptParams' => 'setScriptParams',
            'status' => 'setStatus',
            'gmtCreated' => 'setGmtCreated',
            'gmtModified' => 'setGmtModified',
            'creator' => 'setCreator',
            'creatorId' => 'setCreatorId',
            'operator' => 'setOperator',
            'properties' => 'setProperties',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * scriptUuid  脚本uuid
    * name  脚本名称
    * version  脚本版本号 约束条件  后期废除，不建议使用
    * description  脚本描述
    * type  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    * content  脚本内容
    * scriptParams  脚本入参
    * status  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本）
    * gmtCreated  创建时间
    * gmtModified  修改时间
    * creator  创建人
    * creatorId  创建人Id
    * operator  修改人
    * properties  properties
    * enterpriseProjectId  企业项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'scriptUuid' => 'getScriptUuid',
            'name' => 'getName',
            'version' => 'getVersion',
            'description' => 'getDescription',
            'type' => 'getType',
            'content' => 'getContent',
            'scriptParams' => 'getScriptParams',
            'status' => 'getStatus',
            'gmtCreated' => 'getGmtCreated',
            'gmtModified' => 'getGmtModified',
            'creator' => 'getCreator',
            'creatorId' => 'getCreatorId',
            'operator' => 'getOperator',
            'properties' => 'getProperties',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['scriptUuid'] = isset($data['scriptUuid']) ? $data['scriptUuid'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['scriptParams'] = isset($data['scriptParams']) ? $data['scriptParams'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['gmtCreated'] = isset($data['gmtCreated']) ? $data['gmtCreated'] : null;
        $this->container['gmtModified'] = isset($data['gmtModified']) ? $data['gmtModified'] : null;
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['creatorId'] = isset($data['creatorId']) ? $data['creatorId'] : null;
        $this->container['operator'] = isset($data['operator']) ? $data['operator'] : null;
        $this->container['properties'] = isset($data['properties']) ? $data['properties'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['scriptUuid'] === null) {
            $invalidProperties[] = "'scriptUuid' can't be null";
        }
            if ((mb_strlen($this->container['scriptUuid']) > 25)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be smaller than or equal to 25.";
            }
            if ((mb_strlen($this->container['scriptUuid']) < 1)) {
                $invalidProperties[] = "invalid value for 'scriptUuid', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 16)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
            if ((mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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

        if ($this->container['content'] === null) {
            $invalidProperties[] = "'content' can't be null";
        }
            if ((mb_strlen($this->container['content']) > 4096)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 4096.";
            }
            if ((mb_strlen($this->container['content']) < 1)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 1.";
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
            if ((mb_strlen($this->container['creatorId']) > 32)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['creatorId']) < 1)) {
                $invalidProperties[] = "invalid value for 'creatorId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['operator']) && (mb_strlen($this->container['operator']) > 32)) {
                $invalidProperties[] = "invalid value for 'operator', the character length must be smaller than or equal to 32.";
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
    * Gets version
    *  脚本版本号 约束条件  后期废除，不建议使用
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version 脚本版本号 约束条件  后期废除，不建议使用
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets description
    *  脚本描述
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 脚本描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets type
    *  脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
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
    * @param string $type 脚本类型 SHELL:shell脚本， PYTHON:Python脚本， BAT:Bat脚本，
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets content
    *  脚本内容
    *
    * @return string
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string $content 脚本内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets scriptParams
    *  脚本入参
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]|null
    */
    public function getScriptParams()
    {
        return $this->container['scriptParams'];
    }

    /**
    * Sets scriptParams
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\ScriptParamDefine[]|null $scriptParams 脚本入参
    *
    * @return $this
    */
    public function setScriptParams($scriptParams)
    {
        $this->container['scriptParams'] = $scriptParams;
        return $this;
    }

    /**
    * Gets status
    *  脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本）
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
    * @param string $status 脚本状态 PENDING_APPROVE:待审批 APPROVED：正常（审批通过） REJECTED：驳回（审批人，驳回该脚本）
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
    * Gets enterpriseProjectId
    *  企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

