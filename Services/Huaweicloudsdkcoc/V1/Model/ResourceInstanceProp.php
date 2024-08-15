<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceInstanceProp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceInstanceProp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostName  主机名 未校验：长度
    * fixedIp  内网ip 未校验： 格式，长度
    * floatingIp  弹性公网ip 未校验： 格式，长度
    * regionId  区域 未校验： 长度
    * zoneId  可用区
    * application  CMDB应用，CMDB应用视图才有值。类似管理面的云服务
    * group  CMDB分组，CMDB应用视图才有值。类似管理面的schema
    * projectId  实例的 project_id  需要消费，建议必填 未校验长度
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostName' => 'string',
            'fixedIp' => 'string',
            'floatingIp' => 'string',
            'regionId' => 'string',
            'zoneId' => 'string',
            'application' => 'string',
            'group' => 'string',
            'projectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostName  主机名 未校验：长度
    * fixedIp  内网ip 未校验： 格式，长度
    * floatingIp  弹性公网ip 未校验： 格式，长度
    * regionId  区域 未校验： 长度
    * zoneId  可用区
    * application  CMDB应用，CMDB应用视图才有值。类似管理面的云服务
    * group  CMDB分组，CMDB应用视图才有值。类似管理面的schema
    * projectId  实例的 project_id  需要消费，建议必填 未校验长度
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostName' => null,
        'fixedIp' => null,
        'floatingIp' => null,
        'regionId' => null,
        'zoneId' => null,
        'application' => null,
        'group' => null,
        'projectId' => null
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
    * hostName  主机名 未校验：长度
    * fixedIp  内网ip 未校验： 格式，长度
    * floatingIp  弹性公网ip 未校验： 格式，长度
    * regionId  区域 未校验： 长度
    * zoneId  可用区
    * application  CMDB应用，CMDB应用视图才有值。类似管理面的云服务
    * group  CMDB分组，CMDB应用视图才有值。类似管理面的schema
    * projectId  实例的 project_id  需要消费，建议必填 未校验长度
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostName' => 'host_name',
            'fixedIp' => 'fixed_ip',
            'floatingIp' => 'floating_ip',
            'regionId' => 'region_id',
            'zoneId' => 'zone_id',
            'application' => 'application',
            'group' => 'group',
            'projectId' => 'project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostName  主机名 未校验：长度
    * fixedIp  内网ip 未校验： 格式，长度
    * floatingIp  弹性公网ip 未校验： 格式，长度
    * regionId  区域 未校验： 长度
    * zoneId  可用区
    * application  CMDB应用，CMDB应用视图才有值。类似管理面的云服务
    * group  CMDB分组，CMDB应用视图才有值。类似管理面的schema
    * projectId  实例的 project_id  需要消费，建议必填 未校验长度
    *
    * @var string[]
    */
    protected static $setters = [
            'hostName' => 'setHostName',
            'fixedIp' => 'setFixedIp',
            'floatingIp' => 'setFloatingIp',
            'regionId' => 'setRegionId',
            'zoneId' => 'setZoneId',
            'application' => 'setApplication',
            'group' => 'setGroup',
            'projectId' => 'setProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostName  主机名 未校验：长度
    * fixedIp  内网ip 未校验： 格式，长度
    * floatingIp  弹性公网ip 未校验： 格式，长度
    * regionId  区域 未校验： 长度
    * zoneId  可用区
    * application  CMDB应用，CMDB应用视图才有值。类似管理面的云服务
    * group  CMDB分组，CMDB应用视图才有值。类似管理面的schema
    * projectId  实例的 project_id  需要消费，建议必填 未校验长度
    *
    * @var string[]
    */
    protected static $getters = [
            'hostName' => 'getHostName',
            'fixedIp' => 'getFixedIp',
            'floatingIp' => 'getFloatingIp',
            'regionId' => 'getRegionId',
            'zoneId' => 'getZoneId',
            'application' => 'getApplication',
            'group' => 'getGroup',
            'projectId' => 'getProjectId'
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
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['fixedIp'] = isset($data['fixedIp']) ? $data['fixedIp'] : null;
        $this->container['floatingIp'] = isset($data['floatingIp']) ? $data['floatingIp'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['zoneId'] = isset($data['zoneId']) ? $data['zoneId'] : null;
        $this->container['application'] = isset($data['application']) ? $data['application'] : null;
        $this->container['group'] = isset($data['group']) ? $data['group'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['hostName'] === null) {
            $invalidProperties[] = "'hostName' can't be null";
        }
        if ($this->container['fixedIp'] === null) {
            $invalidProperties[] = "'fixedIp' can't be null";
        }
        if ($this->container['regionId'] === null) {
            $invalidProperties[] = "'regionId' can't be null";
        }
        if ($this->container['zoneId'] === null) {
            $invalidProperties[] = "'zoneId' can't be null";
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
    * Gets hostName
    *  主机名 未校验：长度
    *
    * @return string
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string $hostName 主机名 未校验：长度
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets fixedIp
    *  内网ip 未校验： 格式，长度
    *
    * @return string
    */
    public function getFixedIp()
    {
        return $this->container['fixedIp'];
    }

    /**
    * Sets fixedIp
    *
    * @param string $fixedIp 内网ip 未校验： 格式，长度
    *
    * @return $this
    */
    public function setFixedIp($fixedIp)
    {
        $this->container['fixedIp'] = $fixedIp;
        return $this;
    }

    /**
    * Gets floatingIp
    *  弹性公网ip 未校验： 格式，长度
    *
    * @return string|null
    */
    public function getFloatingIp()
    {
        return $this->container['floatingIp'];
    }

    /**
    * Sets floatingIp
    *
    * @param string|null $floatingIp 弹性公网ip 未校验： 格式，长度
    *
    * @return $this
    */
    public function setFloatingIp($floatingIp)
    {
        $this->container['floatingIp'] = $floatingIp;
        return $this;
    }

    /**
    * Gets regionId
    *  区域 未校验： 长度
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
    * @param string $regionId 区域 未校验： 长度
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets zoneId
    *  可用区
    *
    * @return string
    */
    public function getZoneId()
    {
        return $this->container['zoneId'];
    }

    /**
    * Sets zoneId
    *
    * @param string $zoneId 可用区
    *
    * @return $this
    */
    public function setZoneId($zoneId)
    {
        $this->container['zoneId'] = $zoneId;
        return $this;
    }

    /**
    * Gets application
    *  CMDB应用，CMDB应用视图才有值。类似管理面的云服务
    *
    * @return string|null
    */
    public function getApplication()
    {
        return $this->container['application'];
    }

    /**
    * Sets application
    *
    * @param string|null $application CMDB应用，CMDB应用视图才有值。类似管理面的云服务
    *
    * @return $this
    */
    public function setApplication($application)
    {
        $this->container['application'] = $application;
        return $this;
    }

    /**
    * Gets group
    *  CMDB分组，CMDB应用视图才有值。类似管理面的schema
    *
    * @return string|null
    */
    public function getGroup()
    {
        return $this->container['group'];
    }

    /**
    * Sets group
    *
    * @param string|null $group CMDB分组，CMDB应用视图才有值。类似管理面的schema
    *
    * @return $this
    */
    public function setGroup($group)
    {
        $this->container['group'] = $group;
        return $this;
    }

    /**
    * Gets projectId
    *  实例的 project_id  需要消费，建议必填 未校验长度
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 实例的 project_id  需要消费，建议必填 未校验长度
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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

