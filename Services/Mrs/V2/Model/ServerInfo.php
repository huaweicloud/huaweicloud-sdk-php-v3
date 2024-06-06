<?php

namespace HuaweiCloud\SDK\Mrs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serverId  服务器ID。
    * serverName  服务器名称。
    * serverType  ECS或者BMS。
    * dataVolumes  数据盘。
    * rootVolume  rootVolume
    * cpuType  CPU类型。x86或者ARM。
    * cpu  CPU大小。
    * mem  内存大小。
    * internalIp  内部IP。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serverId' => 'string',
            'serverName' => 'string',
            'serverType' => 'string',
            'dataVolumes' => '\HuaweiCloud\SDK\Mrs\V2\Model\VolumeInfo[]',
            'rootVolume' => '\HuaweiCloud\SDK\Mrs\V2\Model\VolumeInfo',
            'cpuType' => 'string',
            'cpu' => 'string',
            'mem' => 'string',
            'internalIp' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serverId  服务器ID。
    * serverName  服务器名称。
    * serverType  ECS或者BMS。
    * dataVolumes  数据盘。
    * rootVolume  rootVolume
    * cpuType  CPU类型。x86或者ARM。
    * cpu  CPU大小。
    * mem  内存大小。
    * internalIp  内部IP。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serverId' => null,
        'serverName' => null,
        'serverType' => null,
        'dataVolumes' => null,
        'rootVolume' => null,
        'cpuType' => null,
        'cpu' => null,
        'mem' => null,
        'internalIp' => null
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
    * serverId  服务器ID。
    * serverName  服务器名称。
    * serverType  ECS或者BMS。
    * dataVolumes  数据盘。
    * rootVolume  rootVolume
    * cpuType  CPU类型。x86或者ARM。
    * cpu  CPU大小。
    * mem  内存大小。
    * internalIp  内部IP。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serverId' => 'server_id',
            'serverName' => 'server_name',
            'serverType' => 'server_type',
            'dataVolumes' => 'data_volumes',
            'rootVolume' => 'root_volume',
            'cpuType' => 'cpu_type',
            'cpu' => 'cpu',
            'mem' => 'mem',
            'internalIp' => 'internal_ip'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serverId  服务器ID。
    * serverName  服务器名称。
    * serverType  ECS或者BMS。
    * dataVolumes  数据盘。
    * rootVolume  rootVolume
    * cpuType  CPU类型。x86或者ARM。
    * cpu  CPU大小。
    * mem  内存大小。
    * internalIp  内部IP。
    *
    * @var string[]
    */
    protected static $setters = [
            'serverId' => 'setServerId',
            'serverName' => 'setServerName',
            'serverType' => 'setServerType',
            'dataVolumes' => 'setDataVolumes',
            'rootVolume' => 'setRootVolume',
            'cpuType' => 'setCpuType',
            'cpu' => 'setCpu',
            'mem' => 'setMem',
            'internalIp' => 'setInternalIp'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serverId  服务器ID。
    * serverName  服务器名称。
    * serverType  ECS或者BMS。
    * dataVolumes  数据盘。
    * rootVolume  rootVolume
    * cpuType  CPU类型。x86或者ARM。
    * cpu  CPU大小。
    * mem  内存大小。
    * internalIp  内部IP。
    *
    * @var string[]
    */
    protected static $getters = [
            'serverId' => 'getServerId',
            'serverName' => 'getServerName',
            'serverType' => 'getServerType',
            'dataVolumes' => 'getDataVolumes',
            'rootVolume' => 'getRootVolume',
            'cpuType' => 'getCpuType',
            'cpu' => 'getCpu',
            'mem' => 'getMem',
            'internalIp' => 'getInternalIp'
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
        $this->container['serverId'] = isset($data['serverId']) ? $data['serverId'] : null;
        $this->container['serverName'] = isset($data['serverName']) ? $data['serverName'] : null;
        $this->container['serverType'] = isset($data['serverType']) ? $data['serverType'] : null;
        $this->container['dataVolumes'] = isset($data['dataVolumes']) ? $data['dataVolumes'] : null;
        $this->container['rootVolume'] = isset($data['rootVolume']) ? $data['rootVolume'] : null;
        $this->container['cpuType'] = isset($data['cpuType']) ? $data['cpuType'] : null;
        $this->container['cpu'] = isset($data['cpu']) ? $data['cpu'] : null;
        $this->container['mem'] = isset($data['mem']) ? $data['mem'] : null;
        $this->container['internalIp'] = isset($data['internalIp']) ? $data['internalIp'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serverId'] === null) {
            $invalidProperties[] = "'serverId' can't be null";
        }
            if ((mb_strlen($this->container['serverId']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['serverName'] === null) {
            $invalidProperties[] = "'serverName' can't be null";
        }
            if ((mb_strlen($this->container['serverName']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverName', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['serverType'] === null) {
            $invalidProperties[] = "'serverType' can't be null";
        }
            if ((mb_strlen($this->container['serverType']) < 3)) {
                $invalidProperties[] = "invalid value for 'serverType', the character length must be bigger than or equal to 3.";
            }
            if (!is_null($this->container['cpuType']) && (mb_strlen($this->container['cpuType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cpuType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cpu']) && (mb_strlen($this->container['cpu']) < 1)) {
                $invalidProperties[] = "invalid value for 'cpu', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['internalIp']) && (mb_strlen($this->container['internalIp']) > 15)) {
                $invalidProperties[] = "invalid value for 'internalIp', the character length must be smaller than or equal to 15.";
            }
            if (!is_null($this->container['internalIp']) && (mb_strlen($this->container['internalIp']) < 7)) {
                $invalidProperties[] = "invalid value for 'internalIp', the character length must be bigger than or equal to 7.";
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
    * Gets serverId
    *  服务器ID。
    *
    * @return string
    */
    public function getServerId()
    {
        return $this->container['serverId'];
    }

    /**
    * Sets serverId
    *
    * @param string $serverId 服务器ID。
    *
    * @return $this
    */
    public function setServerId($serverId)
    {
        $this->container['serverId'] = $serverId;
        return $this;
    }

    /**
    * Gets serverName
    *  服务器名称。
    *
    * @return string
    */
    public function getServerName()
    {
        return $this->container['serverName'];
    }

    /**
    * Sets serverName
    *
    * @param string $serverName 服务器名称。
    *
    * @return $this
    */
    public function setServerName($serverName)
    {
        $this->container['serverName'] = $serverName;
        return $this;
    }

    /**
    * Gets serverType
    *  ECS或者BMS。
    *
    * @return string
    */
    public function getServerType()
    {
        return $this->container['serverType'];
    }

    /**
    * Sets serverType
    *
    * @param string $serverType ECS或者BMS。
    *
    * @return $this
    */
    public function setServerType($serverType)
    {
        $this->container['serverType'] = $serverType;
        return $this;
    }

    /**
    * Gets dataVolumes
    *  数据盘。
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\VolumeInfo[]|null
    */
    public function getDataVolumes()
    {
        return $this->container['dataVolumes'];
    }

    /**
    * Sets dataVolumes
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\VolumeInfo[]|null $dataVolumes 数据盘。
    *
    * @return $this
    */
    public function setDataVolumes($dataVolumes)
    {
        $this->container['dataVolumes'] = $dataVolumes;
        return $this;
    }

    /**
    * Gets rootVolume
    *  rootVolume
    *
    * @return \HuaweiCloud\SDK\Mrs\V2\Model\VolumeInfo|null
    */
    public function getRootVolume()
    {
        return $this->container['rootVolume'];
    }

    /**
    * Sets rootVolume
    *
    * @param \HuaweiCloud\SDK\Mrs\V2\Model\VolumeInfo|null $rootVolume rootVolume
    *
    * @return $this
    */
    public function setRootVolume($rootVolume)
    {
        $this->container['rootVolume'] = $rootVolume;
        return $this;
    }

    /**
    * Gets cpuType
    *  CPU类型。x86或者ARM。
    *
    * @return string|null
    */
    public function getCpuType()
    {
        return $this->container['cpuType'];
    }

    /**
    * Sets cpuType
    *
    * @param string|null $cpuType CPU类型。x86或者ARM。
    *
    * @return $this
    */
    public function setCpuType($cpuType)
    {
        $this->container['cpuType'] = $cpuType;
        return $this;
    }

    /**
    * Gets cpu
    *  CPU大小。
    *
    * @return string|null
    */
    public function getCpu()
    {
        return $this->container['cpu'];
    }

    /**
    * Sets cpu
    *
    * @param string|null $cpu CPU大小。
    *
    * @return $this
    */
    public function setCpu($cpu)
    {
        $this->container['cpu'] = $cpu;
        return $this;
    }

    /**
    * Gets mem
    *  内存大小。
    *
    * @return string|null
    */
    public function getMem()
    {
        return $this->container['mem'];
    }

    /**
    * Sets mem
    *
    * @param string|null $mem 内存大小。
    *
    * @return $this
    */
    public function setMem($mem)
    {
        $this->container['mem'] = $mem;
        return $this;
    }

    /**
    * Gets internalIp
    *  内部IP。
    *
    * @return string|null
    */
    public function getInternalIp()
    {
        return $this->container['internalIp'];
    }

    /**
    * Sets internalIp
    *
    * @param string|null $internalIp 内部IP。
    *
    * @return $this
    */
    public function setInternalIp($internalIp)
    {
        $this->container['internalIp'] = $internalIp;
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

