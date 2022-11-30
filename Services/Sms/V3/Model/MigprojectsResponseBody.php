<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigprojectsResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigprojectsResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  迁移项目ID
    * name  迁移项目名称
    * usePublicIp  是否使用公网IP迁移
    * isdefault  是否为默认模板
    * startTargetServer  迁移后是否启动目的端虚拟机
    * region  区域名称
    * speedLimit  模板中配置的限速信息，单位：Mbps
    * existServer  迁移项目下是否存在服务器
    * description  迁移项目描述
    * type  迁移项目默认迁移类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  迁移项目所属的企业项目名称
    * syncing  是否持续同步
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'usePublicIp' => 'bool',
            'isdefault' => 'bool',
            'startTargetServer' => 'bool',
            'region' => 'string',
            'speedLimit' => 'int',
            'existServer' => 'bool',
            'description' => 'string',
            'type' => 'string',
            'enterpriseProject' => 'string',
            'syncing' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  迁移项目ID
    * name  迁移项目名称
    * usePublicIp  是否使用公网IP迁移
    * isdefault  是否为默认模板
    * startTargetServer  迁移后是否启动目的端虚拟机
    * region  区域名称
    * speedLimit  模板中配置的限速信息，单位：Mbps
    * existServer  迁移项目下是否存在服务器
    * description  迁移项目描述
    * type  迁移项目默认迁移类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  迁移项目所属的企业项目名称
    * syncing  是否持续同步
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'usePublicIp' => null,
        'isdefault' => null,
        'startTargetServer' => null,
        'region' => null,
        'speedLimit' => 'int32',
        'existServer' => null,
        'description' => null,
        'type' => null,
        'enterpriseProject' => null,
        'syncing' => null
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
    * id  迁移项目ID
    * name  迁移项目名称
    * usePublicIp  是否使用公网IP迁移
    * isdefault  是否为默认模板
    * startTargetServer  迁移后是否启动目的端虚拟机
    * region  区域名称
    * speedLimit  模板中配置的限速信息，单位：Mbps
    * existServer  迁移项目下是否存在服务器
    * description  迁移项目描述
    * type  迁移项目默认迁移类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  迁移项目所属的企业项目名称
    * syncing  是否持续同步
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'usePublicIp' => 'use_public_ip',
            'isdefault' => 'isdefault',
            'startTargetServer' => 'start_target_server',
            'region' => 'region',
            'speedLimit' => 'speed_limit',
            'existServer' => 'exist_server',
            'description' => 'description',
            'type' => 'type',
            'enterpriseProject' => 'enterprise_project',
            'syncing' => 'syncing'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  迁移项目ID
    * name  迁移项目名称
    * usePublicIp  是否使用公网IP迁移
    * isdefault  是否为默认模板
    * startTargetServer  迁移后是否启动目的端虚拟机
    * region  区域名称
    * speedLimit  模板中配置的限速信息，单位：Mbps
    * existServer  迁移项目下是否存在服务器
    * description  迁移项目描述
    * type  迁移项目默认迁移类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  迁移项目所属的企业项目名称
    * syncing  是否持续同步
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'usePublicIp' => 'setUsePublicIp',
            'isdefault' => 'setIsdefault',
            'startTargetServer' => 'setStartTargetServer',
            'region' => 'setRegion',
            'speedLimit' => 'setSpeedLimit',
            'existServer' => 'setExistServer',
            'description' => 'setDescription',
            'type' => 'setType',
            'enterpriseProject' => 'setEnterpriseProject',
            'syncing' => 'setSyncing'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  迁移项目ID
    * name  迁移项目名称
    * usePublicIp  是否使用公网IP迁移
    * isdefault  是否为默认模板
    * startTargetServer  迁移后是否启动目的端虚拟机
    * region  区域名称
    * speedLimit  模板中配置的限速信息，单位：Mbps
    * existServer  迁移项目下是否存在服务器
    * description  迁移项目描述
    * type  迁移项目默认迁移类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  迁移项目所属的企业项目名称
    * syncing  是否持续同步
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'usePublicIp' => 'getUsePublicIp',
            'isdefault' => 'getIsdefault',
            'startTargetServer' => 'getStartTargetServer',
            'region' => 'getRegion',
            'speedLimit' => 'getSpeedLimit',
            'existServer' => 'getExistServer',
            'description' => 'getDescription',
            'type' => 'getType',
            'enterpriseProject' => 'getEnterpriseProject',
            'syncing' => 'getSyncing'
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
    const TYPE_MIGRATE_BLOCK = 'MIGRATE_BLOCK';
    const TYPE_MIGRATE_FILE = 'MIGRATE_FILE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_MIGRATE_BLOCK,
            self::TYPE_MIGRATE_FILE,
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
        $this->container['usePublicIp'] = isset($data['usePublicIp']) ? $data['usePublicIp'] : null;
        $this->container['isdefault'] = isset($data['isdefault']) ? $data['isdefault'] : null;
        $this->container['startTargetServer'] = isset($data['startTargetServer']) ? $data['startTargetServer'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['existServer'] = isset($data['existServer']) ? $data['existServer'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['syncing'] = isset($data['syncing']) ? $data['syncing'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 255)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 0)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] > 10000)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be bigger than or equal to 0.";
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
    *  迁移项目ID
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
    * @param string|null $id 迁移项目ID
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
    *  迁移项目名称
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
    * @param string|null $name 迁移项目名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets usePublicIp
    *  是否使用公网IP迁移
    *
    * @return bool|null
    */
    public function getUsePublicIp()
    {
        return $this->container['usePublicIp'];
    }

    /**
    * Sets usePublicIp
    *
    * @param bool|null $usePublicIp 是否使用公网IP迁移
    *
    * @return $this
    */
    public function setUsePublicIp($usePublicIp)
    {
        $this->container['usePublicIp'] = $usePublicIp;
        return $this;
    }

    /**
    * Gets isdefault
    *  是否为默认模板
    *
    * @return bool|null
    */
    public function getIsdefault()
    {
        return $this->container['isdefault'];
    }

    /**
    * Sets isdefault
    *
    * @param bool|null $isdefault 是否为默认模板
    *
    * @return $this
    */
    public function setIsdefault($isdefault)
    {
        $this->container['isdefault'] = $isdefault;
        return $this;
    }

    /**
    * Gets startTargetServer
    *  迁移后是否启动目的端虚拟机
    *
    * @return bool|null
    */
    public function getStartTargetServer()
    {
        return $this->container['startTargetServer'];
    }

    /**
    * Sets startTargetServer
    *
    * @param bool|null $startTargetServer 迁移后是否启动目的端虚拟机
    *
    * @return $this
    */
    public function setStartTargetServer($startTargetServer)
    {
        $this->container['startTargetServer'] = $startTargetServer;
        return $this;
    }

    /**
    * Gets region
    *  区域名称
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域名称
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets speedLimit
    *  模板中配置的限速信息，单位：Mbps
    *
    * @return int|null
    */
    public function getSpeedLimit()
    {
        return $this->container['speedLimit'];
    }

    /**
    * Sets speedLimit
    *
    * @param int|null $speedLimit 模板中配置的限速信息，单位：Mbps
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets existServer
    *  迁移项目下是否存在服务器
    *
    * @return bool|null
    */
    public function getExistServer()
    {
        return $this->container['existServer'];
    }

    /**
    * Sets existServer
    *
    * @param bool|null $existServer 迁移项目下是否存在服务器
    *
    * @return $this
    */
    public function setExistServer($existServer)
    {
        $this->container['existServer'] = $existServer;
        return $this;
    }

    /**
    * Gets description
    *  迁移项目描述
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
    * @param string|null $description 迁移项目描述
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
    *  迁移项目默认迁移类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
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
    * @param string|null $type 迁移项目默认迁移类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  迁移项目所属的企业项目名称
    *
    * @return string|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param string|null $enterpriseProject 迁移项目所属的企业项目名称
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
        return $this;
    }

    /**
    * Gets syncing
    *  是否持续同步
    *
    * @return bool|null
    */
    public function getSyncing()
    {
        return $this->container['syncing'];
    }

    /**
    * Sets syncing
    *
    * @param bool|null $syncing 是否持续同步
    *
    * @return $this
    */
    public function setSyncing($syncing)
    {
        $this->container['syncing'] = $syncing;
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

