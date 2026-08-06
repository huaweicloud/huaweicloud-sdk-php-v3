<?php

namespace HuaweiCloud\SDK\Kms\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateAccessPointRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateAccessPointRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * keyspaceId  **参数解释：** 接入点归属的可信密钥空间ID **约束限制：** UUID格式，满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * accessPointName  **参数解释：** 接入点的名称 **约束限制：** 满足正则表达式^[a-zA-Z0-9:/_-]{1,255}$ **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 接入点的类型 **约束限制：** 不涉及 **取值范围：** - 1：ECS - 2：CCE - 3：Custom **默认取值：** 不涉及
    * identity  **参数解释：** 接入点的唯一标志 **约束限制：** ECS接入点填入ecs_id CCE接入点填入CCE集群公钥信息 Custom接入点无需填写，创建Custom接入点后，会生成一对密钥对，可以下载私钥，使用私钥签名，服务端验证签名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 创建CCE接入点时必填，CCE集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 接入点描述信息 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'keyspaceId' => 'string',
            'accessPointName' => 'string',
            'type' => 'int',
            'identity' => 'string',
            'clusterId' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * keyspaceId  **参数解释：** 接入点归属的可信密钥空间ID **约束限制：** UUID格式，满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * accessPointName  **参数解释：** 接入点的名称 **约束限制：** 满足正则表达式^[a-zA-Z0-9:/_-]{1,255}$ **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 接入点的类型 **约束限制：** 不涉及 **取值范围：** - 1：ECS - 2：CCE - 3：Custom **默认取值：** 不涉及
    * identity  **参数解释：** 接入点的唯一标志 **约束限制：** ECS接入点填入ecs_id CCE接入点填入CCE集群公钥信息 Custom接入点无需填写，创建Custom接入点后，会生成一对密钥对，可以下载私钥，使用私钥签名，服务端验证签名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 创建CCE接入点时必填，CCE集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 接入点描述信息 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'keyspaceId' => null,
        'accessPointName' => null,
        'type' => 'int32',
        'identity' => null,
        'clusterId' => null,
        'description' => null
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
    * keyspaceId  **参数解释：** 接入点归属的可信密钥空间ID **约束限制：** UUID格式，满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * accessPointName  **参数解释：** 接入点的名称 **约束限制：** 满足正则表达式^[a-zA-Z0-9:/_-]{1,255}$ **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 接入点的类型 **约束限制：** 不涉及 **取值范围：** - 1：ECS - 2：CCE - 3：Custom **默认取值：** 不涉及
    * identity  **参数解释：** 接入点的唯一标志 **约束限制：** ECS接入点填入ecs_id CCE接入点填入CCE集群公钥信息 Custom接入点无需填写，创建Custom接入点后，会生成一对密钥对，可以下载私钥，使用私钥签名，服务端验证签名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 创建CCE接入点时必填，CCE集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 接入点描述信息 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'keyspaceId' => 'keyspace_id',
            'accessPointName' => 'access_point_name',
            'type' => 'type',
            'identity' => 'identity',
            'clusterId' => 'cluster_id',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * keyspaceId  **参数解释：** 接入点归属的可信密钥空间ID **约束限制：** UUID格式，满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * accessPointName  **参数解释：** 接入点的名称 **约束限制：** 满足正则表达式^[a-zA-Z0-9:/_-]{1,255}$ **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 接入点的类型 **约束限制：** 不涉及 **取值范围：** - 1：ECS - 2：CCE - 3：Custom **默认取值：** 不涉及
    * identity  **参数解释：** 接入点的唯一标志 **约束限制：** ECS接入点填入ecs_id CCE接入点填入CCE集群公钥信息 Custom接入点无需填写，创建Custom接入点后，会生成一对密钥对，可以下载私钥，使用私钥签名，服务端验证签名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 创建CCE接入点时必填，CCE集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 接入点描述信息 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'keyspaceId' => 'setKeyspaceId',
            'accessPointName' => 'setAccessPointName',
            'type' => 'setType',
            'identity' => 'setIdentity',
            'clusterId' => 'setClusterId',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * keyspaceId  **参数解释：** 接入点归属的可信密钥空间ID **约束限制：** UUID格式，满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    * accessPointName  **参数解释：** 接入点的名称 **约束限制：** 满足正则表达式^[a-zA-Z0-9:/_-]{1,255}$ **取值范围：** 1-255 **默认取值：** 不涉及
    * type  **参数解释：** 接入点的类型 **约束限制：** 不涉及 **取值范围：** - 1：ECS - 2：CCE - 3：Custom **默认取值：** 不涉及
    * identity  **参数解释：** 接入点的唯一标志 **约束限制：** ECS接入点填入ecs_id CCE接入点填入CCE集群公钥信息 Custom接入点无需填写，创建Custom接入点后，会生成一对密钥对，可以下载私钥，使用私钥签名，服务端验证签名 **取值范围：** 不涉及 **默认取值：** 不涉及
    * clusterId  **参数解释：** 创建CCE接入点时必填，CCE集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * description  **参数解释：** 接入点描述信息 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'keyspaceId' => 'getKeyspaceId',
            'accessPointName' => 'getAccessPointName',
            'type' => 'getType',
            'identity' => 'getIdentity',
            'clusterId' => 'getClusterId',
            'description' => 'getDescription'
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
    const TYPE_1 = 1;
    const TYPE_2 = 2;
    const TYPE_3 = 3;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_1,
            self::TYPE_2,
            self::TYPE_3,
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
        $this->container['keyspaceId'] = isset($data['keyspaceId']) ? $data['keyspaceId'] : null;
        $this->container['accessPointName'] = isset($data['accessPointName']) ? $data['accessPointName'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['identity'] = isset($data['identity']) ? $data['identity'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['keyspaceId'] === null) {
            $invalidProperties[] = "'keyspaceId' can't be null";
        }
            if ((mb_strlen($this->container['keyspaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'keyspaceId', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['keyspaceId']) < 36)) {
                $invalidProperties[] = "invalid value for 'keyspaceId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/", $this->container['keyspaceId'])) {
                $invalidProperties[] = "invalid value for 'keyspaceId', must be conform to the pattern /^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$/.";
            }
        if ($this->container['accessPointName'] === null) {
            $invalidProperties[] = "'accessPointName' can't be null";
        }
            if ((mb_strlen($this->container['accessPointName']) > 255)) {
                $invalidProperties[] = "invalid value for 'accessPointName', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['accessPointName']) < 1)) {
                $invalidProperties[] = "invalid value for 'accessPointName', the character length must be bigger than or equal to 1.";
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
    * Gets keyspaceId
    *  **参数解释：** 接入点归属的可信密钥空间ID **约束限制：** UUID格式，满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getKeyspaceId()
    {
        return $this->container['keyspaceId'];
    }

    /**
    * Sets keyspaceId
    *
    * @param string $keyspaceId **参数解释：** 接入点归属的可信密钥空间ID **约束限制：** UUID格式，满足正则表达式^[0-9a-fA-F]{8}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{4}-[0-9a-fA-F]{12}$ **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setKeyspaceId($keyspaceId)
    {
        $this->container['keyspaceId'] = $keyspaceId;
        return $this;
    }

    /**
    * Gets accessPointName
    *  **参数解释：** 接入点的名称 **约束限制：** 满足正则表达式^[a-zA-Z0-9:/_-]{1,255}$ **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @return string
    */
    public function getAccessPointName()
    {
        return $this->container['accessPointName'];
    }

    /**
    * Sets accessPointName
    *
    * @param string $accessPointName **参数解释：** 接入点的名称 **约束限制：** 满足正则表达式^[a-zA-Z0-9:/_-]{1,255}$ **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAccessPointName($accessPointName)
    {
        $this->container['accessPointName'] = $accessPointName;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释：** 接入点的类型 **约束限制：** 不涉及 **取值范围：** - 1：ECS - 2：CCE - 3：Custom **默认取值：** 不涉及
    *
    * @return int
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param int $type **参数解释：** 接入点的类型 **约束限制：** 不涉及 **取值范围：** - 1：ECS - 2：CCE - 3：Custom **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets identity
    *  **参数解释：** 接入点的唯一标志 **约束限制：** ECS接入点填入ecs_id CCE接入点填入CCE集群公钥信息 Custom接入点无需填写，创建Custom接入点后，会生成一对密钥对，可以下载私钥，使用私钥签名，服务端验证签名 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getIdentity()
    {
        return $this->container['identity'];
    }

    /**
    * Sets identity
    *
    * @param string|null $identity **参数解释：** 接入点的唯一标志 **约束限制：** ECS接入点填入ecs_id CCE接入点填入CCE集群公钥信息 Custom接入点无需填写，创建Custom接入点后，会生成一对密钥对，可以下载私钥，使用私钥签名，服务端验证签名 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setIdentity($identity)
    {
        $this->container['identity'] = $identity;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释：** 创建CCE接入点时必填，CCE集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释：** 创建CCE接入点时必填，CCE集群ID **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 接入点描述信息 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
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
    * @param string|null $description **参数解释：** 接入点描述信息 **约束限制：** 不涉及 **取值范围：** 1-255 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

