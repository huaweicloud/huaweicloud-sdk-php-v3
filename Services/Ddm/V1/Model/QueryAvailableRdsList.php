<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryAvailableRdsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryAvailableRdsList';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  数据库实例 ID。
    * projectId  数据库实例所在租户在某一region下的project ID。
    * status  数据库实例状态。
    * name  数据库实例名称。
    * engineName  数据库实例引擎名称。
    * engineSoftwareVersion  数据库实例引擎版本。
    * privateIp  数据库实例内网连接地址。
    * mode  数据库实例类型（主备或单机）。
    * port  数据库实例端口。
    * azCode  可用区。
    * timeZone  时区。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'projectId' => 'string',
            'status' => 'string',
            'name' => 'string',
            'engineName' => 'string',
            'engineSoftwareVersion' => 'string',
            'privateIp' => 'string',
            'mode' => 'string',
            'port' => 'int',
            'azCode' => 'string',
            'timeZone' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  数据库实例 ID。
    * projectId  数据库实例所在租户在某一region下的project ID。
    * status  数据库实例状态。
    * name  数据库实例名称。
    * engineName  数据库实例引擎名称。
    * engineSoftwareVersion  数据库实例引擎版本。
    * privateIp  数据库实例内网连接地址。
    * mode  数据库实例类型（主备或单机）。
    * port  数据库实例端口。
    * azCode  可用区。
    * timeZone  时区。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'projectId' => null,
        'status' => null,
        'name' => null,
        'engineName' => null,
        'engineSoftwareVersion' => null,
        'privateIp' => null,
        'mode' => null,
        'port' => null,
        'azCode' => null,
        'timeZone' => null
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
    * id  数据库实例 ID。
    * projectId  数据库实例所在租户在某一region下的project ID。
    * status  数据库实例状态。
    * name  数据库实例名称。
    * engineName  数据库实例引擎名称。
    * engineSoftwareVersion  数据库实例引擎版本。
    * privateIp  数据库实例内网连接地址。
    * mode  数据库实例类型（主备或单机）。
    * port  数据库实例端口。
    * azCode  可用区。
    * timeZone  时区。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'projectId' => 'projectId',
            'status' => 'status',
            'name' => 'name',
            'engineName' => 'engineName',
            'engineSoftwareVersion' => 'engineSoftwareVersion',
            'privateIp' => 'privateIp',
            'mode' => 'mode',
            'port' => 'port',
            'azCode' => 'azCode',
            'timeZone' => 'timeZone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  数据库实例 ID。
    * projectId  数据库实例所在租户在某一region下的project ID。
    * status  数据库实例状态。
    * name  数据库实例名称。
    * engineName  数据库实例引擎名称。
    * engineSoftwareVersion  数据库实例引擎版本。
    * privateIp  数据库实例内网连接地址。
    * mode  数据库实例类型（主备或单机）。
    * port  数据库实例端口。
    * azCode  可用区。
    * timeZone  时区。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'projectId' => 'setProjectId',
            'status' => 'setStatus',
            'name' => 'setName',
            'engineName' => 'setEngineName',
            'engineSoftwareVersion' => 'setEngineSoftwareVersion',
            'privateIp' => 'setPrivateIp',
            'mode' => 'setMode',
            'port' => 'setPort',
            'azCode' => 'setAzCode',
            'timeZone' => 'setTimeZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  数据库实例 ID。
    * projectId  数据库实例所在租户在某一region下的project ID。
    * status  数据库实例状态。
    * name  数据库实例名称。
    * engineName  数据库实例引擎名称。
    * engineSoftwareVersion  数据库实例引擎版本。
    * privateIp  数据库实例内网连接地址。
    * mode  数据库实例类型（主备或单机）。
    * port  数据库实例端口。
    * azCode  可用区。
    * timeZone  时区。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'projectId' => 'getProjectId',
            'status' => 'getStatus',
            'name' => 'getName',
            'engineName' => 'getEngineName',
            'engineSoftwareVersion' => 'getEngineSoftwareVersion',
            'privateIp' => 'getPrivateIp',
            'mode' => 'getMode',
            'port' => 'getPort',
            'azCode' => 'getAzCode',
            'timeZone' => 'getTimeZone'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['engineName'] = isset($data['engineName']) ? $data['engineName'] : null;
        $this->container['engineSoftwareVersion'] = isset($data['engineSoftwareVersion']) ? $data['engineSoftwareVersion'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['mode'] = isset($data['mode']) ? $data['mode'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['azCode'] = isset($data['azCode']) ? $data['azCode'] : null;
        $this->container['timeZone'] = isset($data['timeZone']) ? $data['timeZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  数据库实例 ID。
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
    * @param string|null $id 数据库实例 ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets projectId
    *  数据库实例所在租户在某一region下的project ID。
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
    * @param string|null $projectId 数据库实例所在租户在某一region下的project ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets status
    *  数据库实例状态。
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
    * @param string|null $status 数据库实例状态。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets name
    *  数据库实例名称。
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
    * @param string|null $name 数据库实例名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets engineName
    *  数据库实例引擎名称。
    *
    * @return string|null
    */
    public function getEngineName()
    {
        return $this->container['engineName'];
    }

    /**
    * Sets engineName
    *
    * @param string|null $engineName 数据库实例引擎名称。
    *
    * @return $this
    */
    public function setEngineName($engineName)
    {
        $this->container['engineName'] = $engineName;
        return $this;
    }

    /**
    * Gets engineSoftwareVersion
    *  数据库实例引擎版本。
    *
    * @return string|null
    */
    public function getEngineSoftwareVersion()
    {
        return $this->container['engineSoftwareVersion'];
    }

    /**
    * Sets engineSoftwareVersion
    *
    * @param string|null $engineSoftwareVersion 数据库实例引擎版本。
    *
    * @return $this
    */
    public function setEngineSoftwareVersion($engineSoftwareVersion)
    {
        $this->container['engineSoftwareVersion'] = $engineSoftwareVersion;
        return $this;
    }

    /**
    * Gets privateIp
    *  数据库实例内网连接地址。
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp 数据库实例内网连接地址。
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets mode
    *  数据库实例类型（主备或单机）。
    *
    * @return string|null
    */
    public function getMode()
    {
        return $this->container['mode'];
    }

    /**
    * Sets mode
    *
    * @param string|null $mode 数据库实例类型（主备或单机）。
    *
    * @return $this
    */
    public function setMode($mode)
    {
        $this->container['mode'] = $mode;
        return $this;
    }

    /**
    * Gets port
    *  数据库实例端口。
    *
    * @return int|null
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param int|null $port 数据库实例端口。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets azCode
    *  可用区。
    *
    * @return string|null
    */
    public function getAzCode()
    {
        return $this->container['azCode'];
    }

    /**
    * Sets azCode
    *
    * @param string|null $azCode 可用区。
    *
    * @return $this
    */
    public function setAzCode($azCode)
    {
        $this->container['azCode'] = $azCode;
        return $this;
    }

    /**
    * Gets timeZone
    *  时区。
    *
    * @return string|null
    */
    public function getTimeZone()
    {
        return $this->container['timeZone'];
    }

    /**
    * Sets timeZone
    *
    * @param string|null $timeZone 时区。
    *
    * @return $this
    */
    public function setTimeZone($timeZone)
    {
        $this->container['timeZone'] = $timeZone;
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

