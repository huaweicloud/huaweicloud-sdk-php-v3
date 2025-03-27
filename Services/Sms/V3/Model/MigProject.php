<?php

namespace HuaweiCloud\SDK\Sms\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MigProject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MigProject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  迁移项目ID
    * name  迁移项目名称
    * description  迁移项目描述
    * isdefault  是否为默认模板
    * region  区域名称
    * startTargetServer  迁移后是否启动目的端虚拟机
    * speedLimit  限制迁移速率，单位：Mbps
    * usePublicIp  是否使用公网IP迁移
    * existServer  是否是已经存在的服务器
    * type  迁移项目类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  企业项目名称
    * syncing  首次复制或者同步后 是否继续持续同步
    * startNetworkCheck  是否启动网络质量检测
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'description' => 'string',
            'isdefault' => 'bool',
            'region' => 'string',
            'startTargetServer' => 'bool',
            'speedLimit' => 'int',
            'usePublicIp' => 'bool',
            'existServer' => 'bool',
            'type' => 'string',
            'enterpriseProject' => 'string',
            'syncing' => 'bool',
            'startNetworkCheck' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  迁移项目ID
    * name  迁移项目名称
    * description  迁移项目描述
    * isdefault  是否为默认模板
    * region  区域名称
    * startTargetServer  迁移后是否启动目的端虚拟机
    * speedLimit  限制迁移速率，单位：Mbps
    * usePublicIp  是否使用公网IP迁移
    * existServer  是否是已经存在的服务器
    * type  迁移项目类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  企业项目名称
    * syncing  首次复制或者同步后 是否继续持续同步
    * startNetworkCheck  是否启动网络质量检测
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'description' => null,
        'isdefault' => null,
        'region' => null,
        'startTargetServer' => null,
        'speedLimit' => 'int32',
        'usePublicIp' => null,
        'existServer' => null,
        'type' => null,
        'enterpriseProject' => null,
        'syncing' => null,
        'startNetworkCheck' => null
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
    * description  迁移项目描述
    * isdefault  是否为默认模板
    * region  区域名称
    * startTargetServer  迁移后是否启动目的端虚拟机
    * speedLimit  限制迁移速率，单位：Mbps
    * usePublicIp  是否使用公网IP迁移
    * existServer  是否是已经存在的服务器
    * type  迁移项目类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  企业项目名称
    * syncing  首次复制或者同步后 是否继续持续同步
    * startNetworkCheck  是否启动网络质量检测
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'description' => 'description',
            'isdefault' => 'isdefault',
            'region' => 'region',
            'startTargetServer' => 'start_target_server',
            'speedLimit' => 'speed_limit',
            'usePublicIp' => 'use_public_ip',
            'existServer' => 'exist_server',
            'type' => 'type',
            'enterpriseProject' => 'enterprise_project',
            'syncing' => 'syncing',
            'startNetworkCheck' => 'start_network_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  迁移项目ID
    * name  迁移项目名称
    * description  迁移项目描述
    * isdefault  是否为默认模板
    * region  区域名称
    * startTargetServer  迁移后是否启动目的端虚拟机
    * speedLimit  限制迁移速率，单位：Mbps
    * usePublicIp  是否使用公网IP迁移
    * existServer  是否是已经存在的服务器
    * type  迁移项目类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  企业项目名称
    * syncing  首次复制或者同步后 是否继续持续同步
    * startNetworkCheck  是否启动网络质量检测
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'description' => 'setDescription',
            'isdefault' => 'setIsdefault',
            'region' => 'setRegion',
            'startTargetServer' => 'setStartTargetServer',
            'speedLimit' => 'setSpeedLimit',
            'usePublicIp' => 'setUsePublicIp',
            'existServer' => 'setExistServer',
            'type' => 'setType',
            'enterpriseProject' => 'setEnterpriseProject',
            'syncing' => 'setSyncing',
            'startNetworkCheck' => 'setStartNetworkCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  迁移项目ID
    * name  迁移项目名称
    * description  迁移项目描述
    * isdefault  是否为默认模板
    * region  区域名称
    * startTargetServer  迁移后是否启动目的端虚拟机
    * speedLimit  限制迁移速率，单位：Mbps
    * usePublicIp  是否使用公网IP迁移
    * existServer  是否是已经存在的服务器
    * type  迁移项目类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
    * enterpriseProject  企业项目名称
    * syncing  首次复制或者同步后 是否继续持续同步
    * startNetworkCheck  是否启动网络质量检测
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'description' => 'getDescription',
            'isdefault' => 'getIsdefault',
            'region' => 'getRegion',
            'startTargetServer' => 'getStartTargetServer',
            'speedLimit' => 'getSpeedLimit',
            'usePublicIp' => 'getUsePublicIp',
            'existServer' => 'getExistServer',
            'type' => 'getType',
            'enterpriseProject' => 'getEnterpriseProject',
            'syncing' => 'getSyncing',
            'startNetworkCheck' => 'getStartNetworkCheck'
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['isdefault'] = isset($data['isdefault']) ? $data['isdefault'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['startTargetServer'] = isset($data['startTargetServer']) ? $data['startTargetServer'] : null;
        $this->container['speedLimit'] = isset($data['speedLimit']) ? $data['speedLimit'] : null;
        $this->container['usePublicIp'] = isset($data['usePublicIp']) ? $data['usePublicIp'] : null;
        $this->container['existServer'] = isset($data['existServer']) ? $data['existServer'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
        $this->container['syncing'] = isset($data['syncing']) ? $data['syncing'] : null;
        $this->container['startNetworkCheck'] = isset($data['startNetworkCheck']) ? $data['startNetworkCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 254)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 254.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 19)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 19.";
            }
            if ((mb_strlen($this->container['name']) < 2)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] > 10000)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['speedLimit']) && ($this->container['speedLimit'] < 0)) {
                $invalidProperties[] = "invalid value for 'speedLimit', must be bigger than or equal to 0.";
            }
        if ($this->container['usePublicIp'] === null) {
            $invalidProperties[] = "'usePublicIp' can't be null";
        }
        if ($this->container['existServer'] === null) {
            $invalidProperties[] = "'existServer' can't be null";
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

            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) > 255)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['enterpriseProject']) && (mb_strlen($this->container['enterpriseProject']) < 0)) {
                $invalidProperties[] = "invalid value for 'enterpriseProject', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['syncing'] === null) {
            $invalidProperties[] = "'syncing' can't be null";
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
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 迁移项目名称
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
    * Gets region
    *  区域名称
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region 区域名称
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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
    * Gets speedLimit
    *  限制迁移速率，单位：Mbps
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
    * @param int|null $speedLimit 限制迁移速率，单位：Mbps
    *
    * @return $this
    */
    public function setSpeedLimit($speedLimit)
    {
        $this->container['speedLimit'] = $speedLimit;
        return $this;
    }

    /**
    * Gets usePublicIp
    *  是否使用公网IP迁移
    *
    * @return bool
    */
    public function getUsePublicIp()
    {
        return $this->container['usePublicIp'];
    }

    /**
    * Sets usePublicIp
    *
    * @param bool $usePublicIp 是否使用公网IP迁移
    *
    * @return $this
    */
    public function setUsePublicIp($usePublicIp)
    {
        $this->container['usePublicIp'] = $usePublicIp;
        return $this;
    }

    /**
    * Gets existServer
    *  是否是已经存在的服务器
    *
    * @return bool
    */
    public function getExistServer()
    {
        return $this->container['existServer'];
    }

    /**
    * Sets existServer
    *
    * @param bool $existServer 是否是已经存在的服务器
    *
    * @return $this
    */
    public function setExistServer($existServer)
    {
        $this->container['existServer'] = $existServer;
        return $this;
    }

    /**
    * Gets type
    *  迁移项目类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
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
    * @param string $type 迁移项目类型 MIGRATE_BLOCK:块级迁移 MIGRATE_FILE:文件级迁移
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
    *  企业项目名称
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
    * @param string|null $enterpriseProject 企业项目名称
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
    *  首次复制或者同步后 是否继续持续同步
    *
    * @return bool
    */
    public function getSyncing()
    {
        return $this->container['syncing'];
    }

    /**
    * Sets syncing
    *
    * @param bool $syncing 首次复制或者同步后 是否继续持续同步
    *
    * @return $this
    */
    public function setSyncing($syncing)
    {
        $this->container['syncing'] = $syncing;
        return $this;
    }

    /**
    * Gets startNetworkCheck
    *  是否启动网络质量检测
    *
    * @return bool|null
    */
    public function getStartNetworkCheck()
    {
        return $this->container['startNetworkCheck'];
    }

    /**
    * Sets startNetworkCheck
    *
    * @param bool|null $startNetworkCheck 是否启动网络质量检测
    *
    * @return $this
    */
    public function setStartNetworkCheck($startNetworkCheck)
    {
        $this->container['startNetworkCheck'] = $startNetworkCheck;
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

