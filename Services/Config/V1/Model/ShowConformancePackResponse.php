<?php

namespace HuaweiCloud\SDK\Config\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowConformancePackResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowConformancePackResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  合规规则包ID。
    * name  合规规则包名称。
    * stackId  资源栈（stack）的唯一ID。
    * stackName  资源栈（stack）的名称。
    * deploymentId  部署ID。
    * createdAt  合规规则包创建时间。
    * updatedAt  合规规则包更新时间。
    * templateKey  预定义合规规则包模板名称。
    * templateUri  合规规则包模板OBS地址
    * agencyName  委托名称
    * status  合规规则包部署状态。
    * errorMessage  部署或删除合规规则包错误时的错误信息
    * varsStructure  合规规则包参数。
    * createdBy  创建者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'stackId' => 'string',
            'stackName' => 'string',
            'deploymentId' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'templateKey' => 'string',
            'templateUri' => 'string',
            'agencyName' => 'string',
            'status' => 'string',
            'errorMessage' => 'string',
            'varsStructure' => '\HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]',
            'createdBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  合规规则包ID。
    * name  合规规则包名称。
    * stackId  资源栈（stack）的唯一ID。
    * stackName  资源栈（stack）的名称。
    * deploymentId  部署ID。
    * createdAt  合规规则包创建时间。
    * updatedAt  合规规则包更新时间。
    * templateKey  预定义合规规则包模板名称。
    * templateUri  合规规则包模板OBS地址
    * agencyName  委托名称
    * status  合规规则包部署状态。
    * errorMessage  部署或删除合规规则包错误时的错误信息
    * varsStructure  合规规则包参数。
    * createdBy  创建者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'stackId' => null,
        'stackName' => null,
        'deploymentId' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'templateKey' => null,
        'templateUri' => null,
        'agencyName' => null,
        'status' => null,
        'errorMessage' => null,
        'varsStructure' => null,
        'createdBy' => null
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
    * id  合规规则包ID。
    * name  合规规则包名称。
    * stackId  资源栈（stack）的唯一ID。
    * stackName  资源栈（stack）的名称。
    * deploymentId  部署ID。
    * createdAt  合规规则包创建时间。
    * updatedAt  合规规则包更新时间。
    * templateKey  预定义合规规则包模板名称。
    * templateUri  合规规则包模板OBS地址
    * agencyName  委托名称
    * status  合规规则包部署状态。
    * errorMessage  部署或删除合规规则包错误时的错误信息
    * varsStructure  合规规则包参数。
    * createdBy  创建者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'stackId' => 'stack_id',
            'stackName' => 'stack_name',
            'deploymentId' => 'deployment_id',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'templateKey' => 'template_key',
            'templateUri' => 'template_uri',
            'agencyName' => 'agency_name',
            'status' => 'status',
            'errorMessage' => 'error_message',
            'varsStructure' => 'vars_structure',
            'createdBy' => 'created_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  合规规则包ID。
    * name  合规规则包名称。
    * stackId  资源栈（stack）的唯一ID。
    * stackName  资源栈（stack）的名称。
    * deploymentId  部署ID。
    * createdAt  合规规则包创建时间。
    * updatedAt  合规规则包更新时间。
    * templateKey  预定义合规规则包模板名称。
    * templateUri  合规规则包模板OBS地址
    * agencyName  委托名称
    * status  合规规则包部署状态。
    * errorMessage  部署或删除合规规则包错误时的错误信息
    * varsStructure  合规规则包参数。
    * createdBy  创建者
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'stackId' => 'setStackId',
            'stackName' => 'setStackName',
            'deploymentId' => 'setDeploymentId',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'templateKey' => 'setTemplateKey',
            'templateUri' => 'setTemplateUri',
            'agencyName' => 'setAgencyName',
            'status' => 'setStatus',
            'errorMessage' => 'setErrorMessage',
            'varsStructure' => 'setVarsStructure',
            'createdBy' => 'setCreatedBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  合规规则包ID。
    * name  合规规则包名称。
    * stackId  资源栈（stack）的唯一ID。
    * stackName  资源栈（stack）的名称。
    * deploymentId  部署ID。
    * createdAt  合规规则包创建时间。
    * updatedAt  合规规则包更新时间。
    * templateKey  预定义合规规则包模板名称。
    * templateUri  合规规则包模板OBS地址
    * agencyName  委托名称
    * status  合规规则包部署状态。
    * errorMessage  部署或删除合规规则包错误时的错误信息
    * varsStructure  合规规则包参数。
    * createdBy  创建者
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'stackId' => 'getStackId',
            'stackName' => 'getStackName',
            'deploymentId' => 'getDeploymentId',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'templateKey' => 'getTemplateKey',
            'templateUri' => 'getTemplateUri',
            'agencyName' => 'getAgencyName',
            'status' => 'getStatus',
            'errorMessage' => 'getErrorMessage',
            'varsStructure' => 'getVarsStructure',
            'createdBy' => 'getCreatedBy'
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
    const STATUS_CREATE_SUCCESSFUL = 'CREATE_SUCCESSFUL';
    const STATUS_CREATE_IN_PROGRESS = 'CREATE_IN_PROGRESS';
    const STATUS_CREATE_FAILED = 'CREATE_FAILED';
    const STATUS_DELETE_IN_PROGRESS = 'DELETE_IN_PROGRESS';
    const STATUS_DELETE_FAILED = 'DELETE_FAILED';
    const STATUS_ROLLBACK_SUCCESSFUL = 'ROLLBACK_SUCCESSFUL';
    const STATUS_ROLLBACK_IN_PROGRESS = 'ROLLBACK_IN_PROGRESS';
    const STATUS_ROLLBACK_FAILED = 'ROLLBACK_FAILED';
    const STATUS_UPDATE_SUCCESSFUL = 'UPDATE_SUCCESSFUL';
    const STATUS_UPDATE_IN_PROGRESS = 'UPDATE_IN_PROGRESS';
    const STATUS_UPDATE_FAILED = 'UPDATE_FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATE_SUCCESSFUL,
            self::STATUS_CREATE_IN_PROGRESS,
            self::STATUS_CREATE_FAILED,
            self::STATUS_DELETE_IN_PROGRESS,
            self::STATUS_DELETE_FAILED,
            self::STATUS_ROLLBACK_SUCCESSFUL,
            self::STATUS_ROLLBACK_IN_PROGRESS,
            self::STATUS_ROLLBACK_FAILED,
            self::STATUS_UPDATE_SUCCESSFUL,
            self::STATUS_UPDATE_IN_PROGRESS,
            self::STATUS_UPDATE_FAILED,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['deploymentId'] = isset($data['deploymentId']) ? $data['deploymentId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['templateKey'] = isset($data['templateKey']) ? $data['templateKey'] : null;
        $this->container['templateUri'] = isset($data['templateUri']) ? $data['templateUri'] : null;
        $this->container['agencyName'] = isset($data['agencyName']) ? $data['agencyName'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
        $this->container['varsStructure'] = isset($data['varsStructure']) ? $data['varsStructure'] : null;
        $this->container['createdBy'] = isset($data['createdBy']) ? $data['createdBy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 64)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stackName']) && (mb_strlen($this->container['stackName']) > 64)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['stackName']) && (mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stackName']) && !preg_match("/^[\\u4e00-\\u9fa5a-zA-Z0-9_.\\-]+/", $this->container['stackName'])) {
                $invalidProperties[] = "invalid value for 'stackName', must be conform to the pattern /^[\\u4e00-\\u9fa5a-zA-Z0-9_.\\-]+/.";
            }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    *  合规规则包ID。
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
    * @param string|null $id 合规规则包ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  合规规则包名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 合规规则包名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets stackId
    *  资源栈（stack）的唯一ID。
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 资源栈（stack）的唯一ID。
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets stackName
    *  资源栈（stack）的名称。
    *
    * @return string|null
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string|null $stackName 资源栈（stack）的名称。
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets deploymentId
    *  部署ID。
    *
    * @return string|null
    */
    public function getDeploymentId()
    {
        return $this->container['deploymentId'];
    }

    /**
    * Sets deploymentId
    *
    * @param string|null $deploymentId 部署ID。
    *
    * @return $this
    */
    public function setDeploymentId($deploymentId)
    {
        $this->container['deploymentId'] = $deploymentId;
        return $this;
    }

    /**
    * Gets createdAt
    *  合规规则包创建时间。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 合规规则包创建时间。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  合规规则包更新时间。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 合规规则包更新时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets templateKey
    *  预定义合规规则包模板名称。
    *
    * @return string|null
    */
    public function getTemplateKey()
    {
        return $this->container['templateKey'];
    }

    /**
    * Sets templateKey
    *
    * @param string|null $templateKey 预定义合规规则包模板名称。
    *
    * @return $this
    */
    public function setTemplateKey($templateKey)
    {
        $this->container['templateKey'] = $templateKey;
        return $this;
    }

    /**
    * Gets templateUri
    *  合规规则包模板OBS地址
    *
    * @return string|null
    */
    public function getTemplateUri()
    {
        return $this->container['templateUri'];
    }

    /**
    * Sets templateUri
    *
    * @param string|null $templateUri 合规规则包模板OBS地址
    *
    * @return $this
    */
    public function setTemplateUri($templateUri)
    {
        $this->container['templateUri'] = $templateUri;
        return $this;
    }

    /**
    * Gets agencyName
    *  委托名称
    *
    * @return string|null
    */
    public function getAgencyName()
    {
        return $this->container['agencyName'];
    }

    /**
    * Sets agencyName
    *
    * @param string|null $agencyName 委托名称
    *
    * @return $this
    */
    public function setAgencyName($agencyName)
    {
        $this->container['agencyName'] = $agencyName;
        return $this;
    }

    /**
    * Gets status
    *  合规规则包部署状态。
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 合规规则包部署状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets errorMessage
    *  部署或删除合规规则包错误时的错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage 部署或删除合规规则包错误时的错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
        return $this;
    }

    /**
    * Gets varsStructure
    *  合规规则包参数。
    *
    * @return \HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]|null
    */
    public function getVarsStructure()
    {
        return $this->container['varsStructure'];
    }

    /**
    * Sets varsStructure
    *
    * @param \HuaweiCloud\SDK\Config\V1\Model\VarsStructure[]|null $varsStructure 合规规则包参数。
    *
    * @return $this
    */
    public function setVarsStructure($varsStructure)
    {
        $this->container['varsStructure'] = $varsStructure;
        return $this;
    }

    /**
    * Gets createdBy
    *  创建者
    *
    * @return string|null
    */
    public function getCreatedBy()
    {
        return $this->container['createdBy'];
    }

    /**
    * Sets createdBy
    *
    * @param string|null $createdBy 创建者
    *
    * @return $this
    */
    public function setCreatedBy($createdBy)
    {
        $this->container['createdBy'] = $createdBy;
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

