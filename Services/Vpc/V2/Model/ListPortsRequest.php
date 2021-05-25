<?php

namespace HuaweiCloud\SDK\Vpc\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPortsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPortsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * name  功能说明：按照name过滤查询  取值范围：最大长度不超过255
    * id  按照port_id过滤查询
    * limit  每页返回的个数
    * adminStateUp  按照admin_state_up进行过滤
    * networkId  按照network_id过滤查询
    * macAddress  按照mac_address过滤查询
    * deviceId  按照device_id过滤查询
    * deviceOwner  按照device_owner过滤查询
    * status  功能说明：按照status过滤查询  取值范围：ACTIVE、BUILD、DOWN
    * marker  分页查询起始的资源ID，为空时查询第一页
    * fixedIps  按照fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * enterpriseProjectId  功能说明：企业项目ID，用于基于企业项目的权限管理。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。  若需要查询当前用户所有企业项目绑定的端口，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'name' => 'string',
            'id' => 'string',
            'limit' => 'int',
            'adminStateUp' => 'bool',
            'networkId' => 'string',
            'macAddress' => 'string',
            'deviceId' => 'string',
            'deviceOwner' => 'string',
            'status' => 'string',
            'marker' => 'string',
            'fixedIps' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * name  功能说明：按照name过滤查询  取值范围：最大长度不超过255
    * id  按照port_id过滤查询
    * limit  每页返回的个数
    * adminStateUp  按照admin_state_up进行过滤
    * networkId  按照network_id过滤查询
    * macAddress  按照mac_address过滤查询
    * deviceId  按照device_id过滤查询
    * deviceOwner  按照device_owner过滤查询
    * status  功能说明：按照status过滤查询  取值范围：ACTIVE、BUILD、DOWN
    * marker  分页查询起始的资源ID，为空时查询第一页
    * fixedIps  按照fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * enterpriseProjectId  功能说明：企业项目ID，用于基于企业项目的权限管理。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。  若需要查询当前用户所有企业项目绑定的端口，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'name' => null,
        'id' => null,
        'limit' => 'int32',
        'adminStateUp' => null,
        'networkId' => null,
        'macAddress' => null,
        'deviceId' => null,
        'deviceOwner' => null,
        'status' => null,
        'marker' => null,
        'fixedIps' => null,
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
    * projectId  项目ID
    * name  功能说明：按照name过滤查询  取值范围：最大长度不超过255
    * id  按照port_id过滤查询
    * limit  每页返回的个数
    * adminStateUp  按照admin_state_up进行过滤
    * networkId  按照network_id过滤查询
    * macAddress  按照mac_address过滤查询
    * deviceId  按照device_id过滤查询
    * deviceOwner  按照device_owner过滤查询
    * status  功能说明：按照status过滤查询  取值范围：ACTIVE、BUILD、DOWN
    * marker  分页查询起始的资源ID，为空时查询第一页
    * fixedIps  按照fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * enterpriseProjectId  功能说明：企业项目ID，用于基于企业项目的权限管理。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。  若需要查询当前用户所有企业项目绑定的端口，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'name' => 'name',
            'id' => 'id',
            'limit' => 'limit',
            'adminStateUp' => 'admin_state_up',
            'networkId' => 'network_id',
            'macAddress' => 'mac_address',
            'deviceId' => 'device_id',
            'deviceOwner' => 'device_owner',
            'status' => 'status',
            'marker' => 'marker',
            'fixedIps' => 'fixed_ips',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * name  功能说明：按照name过滤查询  取值范围：最大长度不超过255
    * id  按照port_id过滤查询
    * limit  每页返回的个数
    * adminStateUp  按照admin_state_up进行过滤
    * networkId  按照network_id过滤查询
    * macAddress  按照mac_address过滤查询
    * deviceId  按照device_id过滤查询
    * deviceOwner  按照device_owner过滤查询
    * status  功能说明：按照status过滤查询  取值范围：ACTIVE、BUILD、DOWN
    * marker  分页查询起始的资源ID，为空时查询第一页
    * fixedIps  按照fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * enterpriseProjectId  功能说明：企业项目ID，用于基于企业项目的权限管理。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。  若需要查询当前用户所有企业项目绑定的端口，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'id' => 'setId',
            'limit' => 'setLimit',
            'adminStateUp' => 'setAdminStateUp',
            'networkId' => 'setNetworkId',
            'macAddress' => 'setMacAddress',
            'deviceId' => 'setDeviceId',
            'deviceOwner' => 'setDeviceOwner',
            'status' => 'setStatus',
            'marker' => 'setMarker',
            'fixedIps' => 'setFixedIps',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * name  功能说明：按照name过滤查询  取值范围：最大长度不超过255
    * id  按照port_id过滤查询
    * limit  每页返回的个数
    * adminStateUp  按照admin_state_up进行过滤
    * networkId  按照network_id过滤查询
    * macAddress  按照mac_address过滤查询
    * deviceId  按照device_id过滤查询
    * deviceOwner  按照device_owner过滤查询
    * status  功能说明：按照status过滤查询  取值范围：ACTIVE、BUILD、DOWN
    * marker  分页查询起始的资源ID，为空时查询第一页
    * fixedIps  按照fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    * enterpriseProjectId  功能说明：企业项目ID，用于基于企业项目的权限管理。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。  若需要查询当前用户所有企业项目绑定的端口，请传参all_granted_eps。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'id' => 'getId',
            'limit' => 'getLimit',
            'adminStateUp' => 'getAdminStateUp',
            'networkId' => 'getNetworkId',
            'macAddress' => 'getMacAddress',
            'deviceId' => 'getDeviceId',
            'deviceOwner' => 'getDeviceOwner',
            'status' => 'getStatus',
            'marker' => 'getMarker',
            'fixedIps' => 'getFixedIps',
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
    const DEVICE_OWNER_NETWORKDHCP = 'network:dhcp';
    const DEVICE_OWNER_NETWORKVIP_PORT = 'network:VIP_PORT';
    const DEVICE_OWNER_NETWORKROUTER_INTERFACE_DISTRIBUTED = 'network:router_interface_distributed';
    const DEVICE_OWNER_NETWORKROUTER_CENTRALIZED_SNAT = 'network:router_centralized_snat';
    const STATUS_ACTIVE = 'ACTIVE';
    const STATUS_BUILD = 'BUILD';
    const STATUS_DOWN = 'DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDeviceOwnerAllowableValues()
    {
        return [
            self::DEVICE_OWNER_NETWORKDHCP,
            self::DEVICE_OWNER_NETWORKVIP_PORT,
            self::DEVICE_OWNER_NETWORKROUTER_INTERFACE_DISTRIBUTED,
            self::DEVICE_OWNER_NETWORKROUTER_CENTRALIZED_SNAT,
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
            self::STATUS_ACTIVE,
            self::STATUS_BUILD,
            self::STATUS_DOWN,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 2000;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['networkId'] = isset($data['networkId']) ? $data['networkId'] : null;
        $this->container['macAddress'] = isset($data['macAddress']) ? $data['macAddress'] : null;
        $this->container['deviceId'] = isset($data['deviceId']) ? $data['deviceId'] : null;
        $this->container['deviceOwner'] = isset($data['deviceOwner']) ? $data['deviceOwner'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['fixedIps'] = isset($data['fixedIps']) ? $data['fixedIps'] : null;
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
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
            if (!preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['id']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['id'])) {
                $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['networkId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['networkId'])) {
                $invalidProperties[] = "invalid value for 'networkId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            if (!is_null($this->container['deviceId']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['deviceId'])) {
                $invalidProperties[] = "invalid value for 'deviceId', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
            }
            $allowedValues = $this->getDeviceOwnerAllowableValues();
                if (!is_null($this->container['deviceOwner']) && !in_array($this->container['deviceOwner'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'deviceOwner', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['marker']) && !preg_match("/[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/", $this->container['marker'])) {
                $invalidProperties[] = "invalid value for 'marker', must be conform to the pattern /[0-9a-z]{8}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{4}-[0-9a-z]{12}/.";
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
    *  功能说明：按照name过滤查询  取值范围：最大长度不超过255
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
    * @param string|null $name 功能说明：按照name过滤查询  取值范围：最大长度不超过255
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets id
    *  按照port_id过滤查询
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
    * @param string|null $id 按照port_id过滤查询
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets limit
    *  每页返回的个数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页返回的个数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  按照admin_state_up进行过滤
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp 按照admin_state_up进行过滤
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets networkId
    *  按照network_id过滤查询
    *
    * @return string|null
    */
    public function getNetworkId()
    {
        return $this->container['networkId'];
    }

    /**
    * Sets networkId
    *
    * @param string|null $networkId 按照network_id过滤查询
    *
    * @return $this
    */
    public function setNetworkId($networkId)
    {
        $this->container['networkId'] = $networkId;
        return $this;
    }

    /**
    * Gets macAddress
    *  按照mac_address过滤查询
    *
    * @return string|null
    */
    public function getMacAddress()
    {
        return $this->container['macAddress'];
    }

    /**
    * Sets macAddress
    *
    * @param string|null $macAddress 按照mac_address过滤查询
    *
    * @return $this
    */
    public function setMacAddress($macAddress)
    {
        $this->container['macAddress'] = $macAddress;
        return $this;
    }

    /**
    * Gets deviceId
    *  按照device_id过滤查询
    *
    * @return string|null
    */
    public function getDeviceId()
    {
        return $this->container['deviceId'];
    }

    /**
    * Sets deviceId
    *
    * @param string|null $deviceId 按照device_id过滤查询
    *
    * @return $this
    */
    public function setDeviceId($deviceId)
    {
        $this->container['deviceId'] = $deviceId;
        return $this;
    }

    /**
    * Gets deviceOwner
    *  按照device_owner过滤查询
    *
    * @return string|null
    */
    public function getDeviceOwner()
    {
        return $this->container['deviceOwner'];
    }

    /**
    * Sets deviceOwner
    *
    * @param string|null $deviceOwner 按照device_owner过滤查询
    *
    * @return $this
    */
    public function setDeviceOwner($deviceOwner)
    {
        $this->container['deviceOwner'] = $deviceOwner;
        return $this;
    }

    /**
    * Gets status
    *  功能说明：按照status过滤查询  取值范围：ACTIVE、BUILD、DOWN
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
    * @param string|null $status 功能说明：按照status过滤查询  取值范围：ACTIVE、BUILD、DOWN
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets marker
    *  分页查询起始的资源ID，为空时查询第一页
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 分页查询起始的资源ID，为空时查询第一页
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets fixedIps
    *  按照fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    *
    * @return string|null
    */
    public function getFixedIps()
    {
        return $this->container['fixedIps'];
    }

    /**
    * Sets fixedIps
    *
    * @param string|null $fixedIps 按照fixed_ips=ip_address或者fixed_ips=subnet_id过滤查询
    *
    * @return $this
    */
    public function setFixedIps($fixedIps)
    {
        $this->container['fixedIps'] = $fixedIps;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  功能说明：企业项目ID，用于基于企业项目的权限管理。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。  若需要查询当前用户所有企业项目绑定的端口，请传参all_granted_eps。
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
    * @param string|null $enterpriseProjectId 功能说明：企业项目ID，用于基于企业项目的权限管理。  取值范围：最大长度36字节，带“-”连字符的UUID格式，或者是字符串“0”。“0”表示默认企业项目。  若需要查询当前用户所有企业项目绑定的端口，请传参all_granted_eps。
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

