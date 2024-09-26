<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudConnectionRoute implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudConnectionRoute';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  实例ID。
    * cloudConnectionId  云连接实例ID。
    * domainId  实例所属账号ID。
    * instanceId  网络实例（VPC，VGW）的ID。
    * projectId  实例所属项目ID。
    * regionId  RegionID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cloudConnectionId' => 'string',
            'domainId' => 'string',
            'instanceId' => 'string',
            'projectId' => 'string',
            'regionId' => 'string',
            'type' => 'string',
            'destination' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  实例ID。
    * cloudConnectionId  云连接实例ID。
    * domainId  实例所属账号ID。
    * instanceId  网络实例（VPC，VGW）的ID。
    * projectId  实例所属项目ID。
    * regionId  RegionID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cloudConnectionId' => null,
        'domainId' => null,
        'instanceId' => null,
        'projectId' => null,
        'regionId' => null,
        'type' => null,
        'destination' => null
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
    * id  实例ID。
    * cloudConnectionId  云连接实例ID。
    * domainId  实例所属账号ID。
    * instanceId  网络实例（VPC，VGW）的ID。
    * projectId  实例所属项目ID。
    * regionId  RegionID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cloudConnectionId' => 'cloud_connection_id',
            'domainId' => 'domain_id',
            'instanceId' => 'instance_id',
            'projectId' => 'project_id',
            'regionId' => 'region_id',
            'type' => 'type',
            'destination' => 'destination'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  实例ID。
    * cloudConnectionId  云连接实例ID。
    * domainId  实例所属账号ID。
    * instanceId  网络实例（VPC，VGW）的ID。
    * projectId  实例所属项目ID。
    * regionId  RegionID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cloudConnectionId' => 'setCloudConnectionId',
            'domainId' => 'setDomainId',
            'instanceId' => 'setInstanceId',
            'projectId' => 'setProjectId',
            'regionId' => 'setRegionId',
            'type' => 'setType',
            'destination' => 'setDestination'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  实例ID。
    * cloudConnectionId  云连接实例ID。
    * domainId  实例所属账号ID。
    * instanceId  网络实例（VPC，VGW）的ID。
    * projectId  实例所属项目ID。
    * regionId  RegionID。
    * type  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    * destination  目的地址。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cloudConnectionId' => 'getCloudConnectionId',
            'domainId' => 'getDomainId',
            'instanceId' => 'getInstanceId',
            'projectId' => 'getProjectId',
            'regionId' => 'getRegionId',
            'type' => 'getType',
            'destination' => 'getDestination'
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
    const TYPE_VPC = 'vpc';
    const TYPE_VGW = 'vgw';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VPC,
            self::TYPE_VGW,
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
        $this->container['cloudConnectionId'] = isset($data['cloudConnectionId']) ? $data['cloudConnectionId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['destination'] = isset($data['destination']) ? $data['destination'] : null;
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
            if ((mb_strlen($this->container['id']) > 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['id']) < 32)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['cloudConnectionId'] === null) {
            $invalidProperties[] = "'cloudConnectionId' can't be null";
        }
            if ((mb_strlen($this->container['cloudConnectionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['cloudConnectionId']) < 36)) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['cloudConnectionId'])) {
                $invalidProperties[] = "invalid value for 'cloudConnectionId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
            if ((mb_strlen($this->container['domainId']) > 32)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['domainId']) < 10)) {
                $invalidProperties[] = "invalid value for 'domainId', the character length must be bigger than or equal to 10.";
            }
            if (!preg_match("/[a-fA-F0-9]{10,32}/", $this->container['domainId'])) {
                $invalidProperties[] = "invalid value for 'domainId', must be conform to the pattern /[a-fA-F0-9]{10,32}/.";
            }
        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            if ((mb_strlen($this->container['instanceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['instanceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /[a-fA-F0-9]{8}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{4}-[a-fA-F0-9]{12}/.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if ((mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['projectId']) < 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 32.";
            }
            if (!preg_match("/[a-fA-F0-9]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[a-fA-F0-9]{32}/.";
            }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
            if ((mb_strlen($this->container['regionId']) > 32)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['regionId']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 3)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 3.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 2)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) > 36)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['destination']) && (mb_strlen($this->container['destination']) < 0)) {
                $invalidProperties[] = "invalid value for 'destination', the character length must be bigger than or equal to 0.";
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
    *  实例ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 实例ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cloudConnectionId
    *  云连接实例ID。
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
    * @param string $cloudConnectionId 云连接实例ID。
    *
    * @return $this
    */
    public function setCloudConnectionId($cloudConnectionId)
    {
        $this->container['cloudConnectionId'] = $cloudConnectionId;
        return $this;
    }

    /**
    * Gets domainId
    *  实例所属账号ID。
    *
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 实例所属账号ID。
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets instanceId
    *  网络实例（VPC，VGW）的ID。
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
    * @param string $instanceId 网络实例（VPC，VGW）的ID。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets projectId
    *  实例所属项目ID。
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
    * @param string $projectId 实例所属项目ID。
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
    *  RegionID。
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
    * @param string $regionId RegionID。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets type
    *  路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 路由条目下一跳指向的网络实例的类型。 - VPC：虚拟私有云。 - VGW：虚拟网关。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets destination
    *  目的地址。
    *
    * @return string|null
    */
    public function getDestination()
    {
        return $this->container['destination'];
    }

    /**
    * Sets destination
    *
    * @param string|null $destination 目的地址。
    *
    * @return $this
    */
    public function setDestination($destination)
    {
        $this->container['destination'] = $destination;
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

