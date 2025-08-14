<?php

namespace HuaweiCloud\SDK\IdentityCenter\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * applicationUrn  应用程序URN
    * applicationProviderUrn  应用程序提供商URN
    * assignmentConfig  assignmentConfig
    * createdDate  应用程序创建时间
    * description  应用程序描述
    * instanceUrn  IAM身份中心实例URN
    * name  应用程序显示名称
    * portalOptions  portalOptions
    * status  应用程序状态
    * applicationAccount  华为云账号
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'applicationUrn' => 'string',
            'applicationProviderUrn' => 'string',
            'assignmentConfig' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\AssignmentConfigDto',
            'createdDate' => 'int',
            'description' => 'string',
            'instanceUrn' => 'string',
            'name' => 'string',
            'portalOptions' => '\HuaweiCloud\SDK\IdentityCenter\V1\Model\PortalOptionsDto',
            'status' => 'string',
            'applicationAccount' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * applicationUrn  应用程序URN
    * applicationProviderUrn  应用程序提供商URN
    * assignmentConfig  assignmentConfig
    * createdDate  应用程序创建时间
    * description  应用程序描述
    * instanceUrn  IAM身份中心实例URN
    * name  应用程序显示名称
    * portalOptions  portalOptions
    * status  应用程序状态
    * applicationAccount  华为云账号
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'applicationUrn' => null,
        'applicationProviderUrn' => null,
        'assignmentConfig' => null,
        'createdDate' => 'int64',
        'description' => null,
        'instanceUrn' => null,
        'name' => null,
        'portalOptions' => null,
        'status' => null,
        'applicationAccount' => null
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
    * applicationUrn  应用程序URN
    * applicationProviderUrn  应用程序提供商URN
    * assignmentConfig  assignmentConfig
    * createdDate  应用程序创建时间
    * description  应用程序描述
    * instanceUrn  IAM身份中心实例URN
    * name  应用程序显示名称
    * portalOptions  portalOptions
    * status  应用程序状态
    * applicationAccount  华为云账号
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'applicationUrn' => 'application_urn',
            'applicationProviderUrn' => 'application_provider_urn',
            'assignmentConfig' => 'assignment_config',
            'createdDate' => 'created_date',
            'description' => 'description',
            'instanceUrn' => 'instance_urn',
            'name' => 'name',
            'portalOptions' => 'portal_options',
            'status' => 'status',
            'applicationAccount' => 'application_account'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * applicationUrn  应用程序URN
    * applicationProviderUrn  应用程序提供商URN
    * assignmentConfig  assignmentConfig
    * createdDate  应用程序创建时间
    * description  应用程序描述
    * instanceUrn  IAM身份中心实例URN
    * name  应用程序显示名称
    * portalOptions  portalOptions
    * status  应用程序状态
    * applicationAccount  华为云账号
    *
    * @var string[]
    */
    protected static $setters = [
            'applicationUrn' => 'setApplicationUrn',
            'applicationProviderUrn' => 'setApplicationProviderUrn',
            'assignmentConfig' => 'setAssignmentConfig',
            'createdDate' => 'setCreatedDate',
            'description' => 'setDescription',
            'instanceUrn' => 'setInstanceUrn',
            'name' => 'setName',
            'portalOptions' => 'setPortalOptions',
            'status' => 'setStatus',
            'applicationAccount' => 'setApplicationAccount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * applicationUrn  应用程序URN
    * applicationProviderUrn  应用程序提供商URN
    * assignmentConfig  assignmentConfig
    * createdDate  应用程序创建时间
    * description  应用程序描述
    * instanceUrn  IAM身份中心实例URN
    * name  应用程序显示名称
    * portalOptions  portalOptions
    * status  应用程序状态
    * applicationAccount  华为云账号
    *
    * @var string[]
    */
    protected static $getters = [
            'applicationUrn' => 'getApplicationUrn',
            'applicationProviderUrn' => 'getApplicationProviderUrn',
            'assignmentConfig' => 'getAssignmentConfig',
            'createdDate' => 'getCreatedDate',
            'description' => 'getDescription',
            'instanceUrn' => 'getInstanceUrn',
            'name' => 'getName',
            'portalOptions' => 'getPortalOptions',
            'status' => 'getStatus',
            'applicationAccount' => 'getApplicationAccount'
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
    const STATUS_DISABLED = 'DISABLED';
    const STATUS_ENABLED = 'ENABLED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DISABLED,
            self::STATUS_ENABLED,
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
        $this->container['applicationUrn'] = isset($data['applicationUrn']) ? $data['applicationUrn'] : null;
        $this->container['applicationProviderUrn'] = isset($data['applicationProviderUrn']) ? $data['applicationProviderUrn'] : null;
        $this->container['assignmentConfig'] = isset($data['assignmentConfig']) ? $data['assignmentConfig'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceUrn'] = isset($data['instanceUrn']) ? $data['instanceUrn'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['portalOptions'] = isset($data['portalOptions']) ? $data['portalOptions'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['applicationAccount'] = isset($data['applicationAccount']) ? $data['applicationAccount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 128)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[\\w+=,.@-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\w+=,.@-]+/.";
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
    * Gets applicationUrn
    *  应用程序URN
    *
    * @return string|null
    */
    public function getApplicationUrn()
    {
        return $this->container['applicationUrn'];
    }

    /**
    * Sets applicationUrn
    *
    * @param string|null $applicationUrn 应用程序URN
    *
    * @return $this
    */
    public function setApplicationUrn($applicationUrn)
    {
        $this->container['applicationUrn'] = $applicationUrn;
        return $this;
    }

    /**
    * Gets applicationProviderUrn
    *  应用程序提供商URN
    *
    * @return string|null
    */
    public function getApplicationProviderUrn()
    {
        return $this->container['applicationProviderUrn'];
    }

    /**
    * Sets applicationProviderUrn
    *
    * @param string|null $applicationProviderUrn 应用程序提供商URN
    *
    * @return $this
    */
    public function setApplicationProviderUrn($applicationProviderUrn)
    {
        $this->container['applicationProviderUrn'] = $applicationProviderUrn;
        return $this;
    }

    /**
    * Gets assignmentConfig
    *  assignmentConfig
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\AssignmentConfigDto|null
    */
    public function getAssignmentConfig()
    {
        return $this->container['assignmentConfig'];
    }

    /**
    * Sets assignmentConfig
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\AssignmentConfigDto|null $assignmentConfig assignmentConfig
    *
    * @return $this
    */
    public function setAssignmentConfig($assignmentConfig)
    {
        $this->container['assignmentConfig'] = $assignmentConfig;
        return $this;
    }

    /**
    * Gets createdDate
    *  应用程序创建时间
    *
    * @return int|null
    */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /**
    * Sets createdDate
    *
    * @param int|null $createdDate 应用程序创建时间
    *
    * @return $this
    */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;
        return $this;
    }

    /**
    * Gets description
    *  应用程序描述
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
    * @param string|null $description 应用程序描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceUrn
    *  IAM身份中心实例URN
    *
    * @return string|null
    */
    public function getInstanceUrn()
    {
        return $this->container['instanceUrn'];
    }

    /**
    * Sets instanceUrn
    *
    * @param string|null $instanceUrn IAM身份中心实例URN
    *
    * @return $this
    */
    public function setInstanceUrn($instanceUrn)
    {
        $this->container['instanceUrn'] = $instanceUrn;
        return $this;
    }

    /**
    * Gets name
    *  应用程序显示名称
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
    * @param string|null $name 应用程序显示名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets portalOptions
    *  portalOptions
    *
    * @return \HuaweiCloud\SDK\IdentityCenter\V1\Model\PortalOptionsDto|null
    */
    public function getPortalOptions()
    {
        return $this->container['portalOptions'];
    }

    /**
    * Sets portalOptions
    *
    * @param \HuaweiCloud\SDK\IdentityCenter\V1\Model\PortalOptionsDto|null $portalOptions portalOptions
    *
    * @return $this
    */
    public function setPortalOptions($portalOptions)
    {
        $this->container['portalOptions'] = $portalOptions;
        return $this;
    }

    /**
    * Gets status
    *  应用程序状态
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
    * @param string|null $status 应用程序状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets applicationAccount
    *  华为云账号
    *
    * @return string|null
    */
    public function getApplicationAccount()
    {
        return $this->container['applicationAccount'];
    }

    /**
    * Sets applicationAccount
    *
    * @param string|null $applicationAccount 华为云账号
    *
    * @return $this
    */
    public function setApplicationAccount($applicationAccount)
    {
        $this->container['applicationAccount'] = $applicationAccount;
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

