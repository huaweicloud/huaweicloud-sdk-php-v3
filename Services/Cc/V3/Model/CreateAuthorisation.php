<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAuthorisation implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAuthorisation';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  授权的名称。
    * description  授权的描述信息。
    * instanceId  授权网络实例的ID。
    * instanceType  授权网络实例的类型: - vpc：虚拟私有云
    * projectId  授权网络实例所属项目。
    * regionId  授权实例所属Region。
    * cloudConnectionDomainId  被授权云连接实例所属的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'description' => 'string',
            'instanceId' => 'string',
            'instanceType' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'cloudConnectionDomainId' => 'string',
            'cloudConnectionId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  授权的名称。
    * description  授权的描述信息。
    * instanceId  授权网络实例的ID。
    * instanceType  授权网络实例的类型: - vpc：虚拟私有云
    * projectId  授权网络实例所属项目。
    * regionId  授权实例所属Region。
    * cloudConnectionDomainId  被授权云连接实例所属的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'description' => null,
        'instanceId' => null,
        'instanceType' => null,
        'projectId' => null,
        'regionId' => null,
        'cloudConnectionDomainId' => null,
        'cloudConnectionId' => null
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
    * name  授权的名称。
    * description  授权的描述信息。
    * instanceId  授权网络实例的ID。
    * instanceType  授权网络实例的类型: - vpc：虚拟私有云
    * projectId  授权网络实例所属项目。
    * regionId  授权实例所属Region。
    * cloudConnectionDomainId  被授权云连接实例所属的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'description' => 'description',
            'instanceId' => 'instance_id',
            'instanceType' => 'instance_type',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'cloudConnectionDomainId' => 'cloud_connection_domain_id',
            'cloudConnectionId' => 'cloud_connection_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  授权的名称。
    * description  授权的描述信息。
    * instanceId  授权网络实例的ID。
    * instanceType  授权网络实例的类型: - vpc：虚拟私有云
    * projectId  授权网络实例所属项目。
    * regionId  授权实例所属Region。
    * cloudConnectionDomainId  被授权云连接实例所属的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'description' => 'setDescription',
            'instanceId' => 'setInstanceId',
            'instanceType' => 'setInstanceType',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'cloudConnectionDomainId' => 'setCloudConnectionDomainId',
            'cloudConnectionId' => 'setCloudConnectionId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  授权的名称。
    * description  授权的描述信息。
    * instanceId  授权网络实例的ID。
    * instanceType  授权网络实例的类型: - vpc：虚拟私有云
    * projectId  授权网络实例所属项目。
    * regionId  授权实例所属Region。
    * cloudConnectionDomainId  被授权云连接实例所属的账户ID。
    * cloudConnectionId  被授权云连接实例ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'description' => 'getDescription',
            'instanceId' => 'getInstanceId',
            'instanceType' => 'getInstanceType',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'cloudConnectionDomainId' => 'getCloudConnectionDomainId',
            'cloudConnectionId' => 'getCloudConnectionId'
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
    const INSTANCE_TYPE_VPC = 'vpc';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTypeAllowableValues()
    {
        return [
            self::INSTANCE_TYPE_VPC,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['cloudConnectionDomainId'] = isset($data['cloudConnectionDomainId']) ? $data['cloudConnectionDomainId'] : null;
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 85)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 85.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && !preg_match("/^[^&lt;&gt;]*$/", $this->container['description'])) {
                $invalidProperties[] = "invalid value for 'description', must be conform to the pattern /^[^&lt;&gt;]*$/.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['instanceType'] === null) {
            $invalidProperties[] = "'instanceType' can't be null";
        }
            $allowedValues = $this->getInstanceTypeAllowableValues();
                if (!is_null($this->container['instanceType']) && !in_array($this->container['instanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['instanceType']) > 255)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['instanceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceType', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 36)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 255)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['regionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['cloudConnectionDomainId'] === null) {
            $invalidProperties[] = "'cloudConnectionDomainId' can't be null";
        }
            if ((mb_strlen($this->container['cloudConnectionDomainId']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionDomainId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['cloudConnectionDomainId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionDomainId', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['cloudConnectionId'] === null) {
            $invalidProperties[] = "'cloudConnectionId' can't be null";
        }
            if ((mb_strlen($this->container['cloudConnectionId']) > 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['cloudConnectionId']) < 0)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be bigger than or equal to 0.";
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
    * Gets name
    *  授权的名称。
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
    * @param string|null $name 授权的名称。
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
    *  授权的描述信息。
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
    * @param string|null $description 授权的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets instanceId
    *  授权网络实例的ID。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId 授权网络实例的ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceType
    *  授权网络实例的类型: - vpc：虚拟私有云
    *
    * @return string
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string $instanceType 授权网络实例的类型: - vpc：虚拟私有云
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets projectId
    *  授权网络实例所属项目。
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
    * @param string $projectId 授权网络实例所属项目。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets regionId
    *  授权实例所属Region。
    *
    * @return string
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string $regionId 授权实例所属Region。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets cloudConnectionDomainId
    *  被授权云连接实例所属的账户ID。
    *
    * @return string
    */
    public function getCloudConnectionDomainId()
    {
        return $this->container['cloudConnectionDomainId'];
    }

    /**
    * Sets cloudConnectionDomainId
    *
    * @param string $cloudConnectionDomainId 被授权云连接实例所属的账户ID。
    *
    * @return $this
    */
    public function setCloudConnectionDomainId($cloudConnectionDomainId)
    {
        $this->container['cloudConnectionDomainId'] = $cloudConnectionDomainId;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  被授权云连接实例ID。
    *
    * @return string
    */
    public function getCloudConnectionId()
    {
        return $this->container['cloudConnectionId'];
    }

    /**
    * Sets cloudConnectionId
    *
    * @param string $cloudConnectionId 被授权云连接实例ID。
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
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

