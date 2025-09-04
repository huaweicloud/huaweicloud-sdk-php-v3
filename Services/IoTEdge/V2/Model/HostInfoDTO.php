<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class HostInfoDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'HostInfoDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * hostTag  主机标签DEFAULT|MASTER|SLAVE
    * hostStatus  主机工作状态(ONLINE|OFFLINE)
    * osName  边缘节点操作系统。例如：Ubuntu 20.04；CentOS 7.9。不同于os_type边缘节点系统类型。
    * hostName  边缘节点主机名
    * containerVersion  容器运行时版本
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * npuDetails  NPU设备详细信息，包括硬件信息和使用情况。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'hostTag' => 'string',
            'hostStatus' => 'string',
            'osName' => 'string',
            'hostName' => 'string',
            'containerVersion' => 'string',
            'nics' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\Nic[]',
            'specification' => 'string',
            'npuDetails' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\NPUDetailsDTO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * hostTag  主机标签DEFAULT|MASTER|SLAVE
    * hostStatus  主机工作状态(ONLINE|OFFLINE)
    * osName  边缘节点操作系统。例如：Ubuntu 20.04；CentOS 7.9。不同于os_type边缘节点系统类型。
    * hostName  边缘节点主机名
    * containerVersion  容器运行时版本
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * npuDetails  NPU设备详细信息，包括硬件信息和使用情况。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'hostTag' => null,
        'hostStatus' => null,
        'osName' => null,
        'hostName' => null,
        'containerVersion' => null,
        'nics' => null,
        'specification' => null,
        'npuDetails' => null
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
    * hostTag  主机标签DEFAULT|MASTER|SLAVE
    * hostStatus  主机工作状态(ONLINE|OFFLINE)
    * osName  边缘节点操作系统。例如：Ubuntu 20.04；CentOS 7.9。不同于os_type边缘节点系统类型。
    * hostName  边缘节点主机名
    * containerVersion  容器运行时版本
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * npuDetails  NPU设备详细信息，包括硬件信息和使用情况。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'hostTag' => 'host_tag',
            'hostStatus' => 'host_status',
            'osName' => 'os_name',
            'hostName' => 'host_name',
            'containerVersion' => 'container_version',
            'nics' => 'nics',
            'specification' => 'specification',
            'npuDetails' => 'npu_details'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * hostTag  主机标签DEFAULT|MASTER|SLAVE
    * hostStatus  主机工作状态(ONLINE|OFFLINE)
    * osName  边缘节点操作系统。例如：Ubuntu 20.04；CentOS 7.9。不同于os_type边缘节点系统类型。
    * hostName  边缘节点主机名
    * containerVersion  容器运行时版本
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * npuDetails  NPU设备详细信息，包括硬件信息和使用情况。
    *
    * @var string[]
    */
    protected static $setters = [
            'hostTag' => 'setHostTag',
            'hostStatus' => 'setHostStatus',
            'osName' => 'setOsName',
            'hostName' => 'setHostName',
            'containerVersion' => 'setContainerVersion',
            'nics' => 'setNics',
            'specification' => 'setSpecification',
            'npuDetails' => 'setNpuDetails'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * hostTag  主机标签DEFAULT|MASTER|SLAVE
    * hostStatus  主机工作状态(ONLINE|OFFLINE)
    * osName  边缘节点操作系统。例如：Ubuntu 20.04；CentOS 7.9。不同于os_type边缘节点系统类型。
    * hostName  边缘节点主机名
    * containerVersion  容器运行时版本
    * nics  边缘节点网络网卡信息
    * specification  网络规格，如4 cores | 3867 MB
    * npuDetails  NPU设备详细信息，包括硬件信息和使用情况。
    *
    * @var string[]
    */
    protected static $getters = [
            'hostTag' => 'getHostTag',
            'hostStatus' => 'getHostStatus',
            'osName' => 'getOsName',
            'hostName' => 'getHostName',
            'containerVersion' => 'getContainerVersion',
            'nics' => 'getNics',
            'specification' => 'getSpecification',
            'npuDetails' => 'getNpuDetails'
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
        $this->container['hostTag'] = isset($data['hostTag']) ? $data['hostTag'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['osName'] = isset($data['osName']) ? $data['osName'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['containerVersion'] = isset($data['containerVersion']) ? $data['containerVersion'] : null;
        $this->container['nics'] = isset($data['nics']) ? $data['nics'] : null;
        $this->container['specification'] = isset($data['specification']) ? $data['specification'] : null;
        $this->container['npuDetails'] = isset($data['npuDetails']) ? $data['npuDetails'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['hostTag']) && (mb_strlen($this->container['hostTag']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostTag', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostTag']) && (mb_strlen($this->container['hostTag']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostTag', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) > 64)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osName']) && (mb_strlen($this->container['osName']) < 1)) {
                $invalidProperties[] = "invalid value for 'osName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['containerVersion']) && (mb_strlen($this->container['containerVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'containerVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['containerVersion']) && (mb_strlen($this->container['containerVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'containerVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) > 64)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['specification']) && (mb_strlen($this->container['specification']) < 0)) {
                $invalidProperties[] = "invalid value for 'specification', the character length must be bigger than or equal to 0.";
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
    * Gets hostTag
    *  主机标签DEFAULT|MASTER|SLAVE
    *
    * @return string|null
    */
    public function getHostTag()
    {
        return $this->container['hostTag'];
    }

    /**
    * Sets hostTag
    *
    * @param string|null $hostTag 主机标签DEFAULT|MASTER|SLAVE
    *
    * @return $this
    */
    public function setHostTag($hostTag)
    {
        $this->container['hostTag'] = $hostTag;
        return $this;
    }

    /**
    * Gets hostStatus
    *  主机工作状态(ONLINE|OFFLINE)
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus 主机工作状态(ONLINE|OFFLINE)
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets osName
    *  边缘节点操作系统。例如：Ubuntu 20.04；CentOS 7.9。不同于os_type边缘节点系统类型。
    *
    * @return string|null
    */
    public function getOsName()
    {
        return $this->container['osName'];
    }

    /**
    * Sets osName
    *
    * @param string|null $osName 边缘节点操作系统。例如：Ubuntu 20.04；CentOS 7.9。不同于os_type边缘节点系统类型。
    *
    * @return $this
    */
    public function setOsName($osName)
    {
        $this->container['osName'] = $osName;
        return $this;
    }

    /**
    * Gets hostName
    *  边缘节点主机名
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName 边缘节点主机名
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets containerVersion
    *  容器运行时版本
    *
    * @return string|null
    */
    public function getContainerVersion()
    {
        return $this->container['containerVersion'];
    }

    /**
    * Sets containerVersion
    *
    * @param string|null $containerVersion 容器运行时版本
    *
    * @return $this
    */
    public function setContainerVersion($containerVersion)
    {
        $this->container['containerVersion'] = $containerVersion;
        return $this;
    }

    /**
    * Gets nics
    *  边缘节点网络网卡信息
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\Nic[]|null
    */
    public function getNics()
    {
        return $this->container['nics'];
    }

    /**
    * Sets nics
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\Nic[]|null $nics 边缘节点网络网卡信息
    *
    * @return $this
    */
    public function setNics($nics)
    {
        $this->container['nics'] = $nics;
        return $this;
    }

    /**
    * Gets specification
    *  网络规格，如4 cores | 3867 MB
    *
    * @return string|null
    */
    public function getSpecification()
    {
        return $this->container['specification'];
    }

    /**
    * Sets specification
    *
    * @param string|null $specification 网络规格，如4 cores | 3867 MB
    *
    * @return $this
    */
    public function setSpecification($specification)
    {
        $this->container['specification'] = $specification;
        return $this;
    }

    /**
    * Gets npuDetails
    *  NPU设备详细信息，包括硬件信息和使用情况。
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\NPUDetailsDTO[]|null
    */
    public function getNpuDetails()
    {
        return $this->container['npuDetails'];
    }

    /**
    * Sets npuDetails
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\NPUDetailsDTO[]|null $npuDetails NPU设备详细信息，包括硬件信息和使用情况。
    *
    * @return $this
    */
    public function setNpuDetails($npuDetails)
    {
        $this->container['npuDetails'] = $npuDetails;
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

