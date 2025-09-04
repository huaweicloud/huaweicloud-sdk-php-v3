<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryApplicationBriefResponseDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryApplicationBriefResponseDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * edgeAppId  应用id
    * description  应用描述
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * lastPublishedVersion  最新发布版本
    * appType  应用类型SYSTEM_REQUIRED|SYSTEM_OPTIONAL|USER
    * functionType  应用类型DATA_PROCESSING|PROTOCOL_PARSING
    * deployType  部署类型docker|process
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    * edgeAppName  应用名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'edgeAppId' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'lastPublishedVersion' => 'string',
            'appType' => 'string',
            'functionType' => 'string',
            'deployType' => 'string',
            'protocol' => 'string',
            'edgeAppName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * edgeAppId  应用id
    * description  应用描述
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * lastPublishedVersion  最新发布版本
    * appType  应用类型SYSTEM_REQUIRED|SYSTEM_OPTIONAL|USER
    * functionType  应用类型DATA_PROCESSING|PROTOCOL_PARSING
    * deployType  部署类型docker|process
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    * edgeAppName  应用名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'edgeAppId' => null,
        'description' => null,
        'createTime' => null,
        'updateTime' => null,
        'lastPublishedVersion' => null,
        'appType' => null,
        'functionType' => null,
        'deployType' => null,
        'protocol' => null,
        'edgeAppName' => null
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
    * edgeAppId  应用id
    * description  应用描述
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * lastPublishedVersion  最新发布版本
    * appType  应用类型SYSTEM_REQUIRED|SYSTEM_OPTIONAL|USER
    * functionType  应用类型DATA_PROCESSING|PROTOCOL_PARSING
    * deployType  部署类型docker|process
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    * edgeAppName  应用名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'edgeAppId' => 'edge_app_id',
            'description' => 'description',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'lastPublishedVersion' => 'last_published_version',
            'appType' => 'app_type',
            'functionType' => 'function_type',
            'deployType' => 'deploy_type',
            'protocol' => 'protocol',
            'edgeAppName' => 'edge_app_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * edgeAppId  应用id
    * description  应用描述
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * lastPublishedVersion  最新发布版本
    * appType  应用类型SYSTEM_REQUIRED|SYSTEM_OPTIONAL|USER
    * functionType  应用类型DATA_PROCESSING|PROTOCOL_PARSING
    * deployType  部署类型docker|process
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    * edgeAppName  应用名称
    *
    * @var string[]
    */
    protected static $setters = [
            'edgeAppId' => 'setEdgeAppId',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'lastPublishedVersion' => 'setLastPublishedVersion',
            'appType' => 'setAppType',
            'functionType' => 'setFunctionType',
            'deployType' => 'setDeployType',
            'protocol' => 'setProtocol',
            'edgeAppName' => 'setEdgeAppName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * edgeAppId  应用id
    * description  应用描述
    * createTime  创建时间
    * updateTime  最后一次修改时间
    * lastPublishedVersion  最新发布版本
    * appType  应用类型SYSTEM_REQUIRED|SYSTEM_OPTIONAL|USER
    * functionType  应用类型DATA_PROCESSING|PROTOCOL_PARSING
    * deployType  部署类型docker|process
    * protocol  驱动协议类型OPCUA|Modbus-TCP
    * edgeAppName  应用名称
    *
    * @var string[]
    */
    protected static $getters = [
            'edgeAppId' => 'getEdgeAppId',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'lastPublishedVersion' => 'getLastPublishedVersion',
            'appType' => 'getAppType',
            'functionType' => 'getFunctionType',
            'deployType' => 'getDeployType',
            'protocol' => 'getProtocol',
            'edgeAppName' => 'getEdgeAppName'
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
        $this->container['edgeAppId'] = isset($data['edgeAppId']) ? $data['edgeAppId'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['lastPublishedVersion'] = isset($data['lastPublishedVersion']) ? $data['lastPublishedVersion'] : null;
        $this->container['appType'] = isset($data['appType']) ? $data['appType'] : null;
        $this->container['functionType'] = isset($data['functionType']) ? $data['functionType'] : null;
        $this->container['deployType'] = isset($data['deployType']) ? $data['deployType'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['edgeAppName'] = isset($data['edgeAppName']) ? $data['edgeAppName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeAppId']) && (mb_strlen($this->container['edgeAppId']) < 1)) {
                $invalidProperties[] = "invalid value for 'edgeAppId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 256)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['updateTime']) && (mb_strlen($this->container['updateTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'updateTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastPublishedVersion']) && (mb_strlen($this->container['lastPublishedVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'lastPublishedVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['lastPublishedVersion']) && (mb_strlen($this->container['lastPublishedVersion']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastPublishedVersion', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) > 64)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['appType']) && (mb_strlen($this->container['appType']) < 0)) {
                $invalidProperties[] = "invalid value for 'appType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['functionType']) && (mb_strlen($this->container['functionType']) > 64)) {
                $invalidProperties[] = "invalid value for 'functionType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['functionType']) && (mb_strlen($this->container['functionType']) < 0)) {
                $invalidProperties[] = "invalid value for 'functionType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['deployType']) && (mb_strlen($this->container['deployType']) > 64)) {
                $invalidProperties[] = "invalid value for 'deployType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['deployType']) && (mb_strlen($this->container['deployType']) < 0)) {
                $invalidProperties[] = "invalid value for 'deployType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) > 64)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protocol']) && (mb_strlen($this->container['protocol']) < 0)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['edgeAppName']) && (mb_strlen($this->container['edgeAppName']) > 64)) {
                $invalidProperties[] = "invalid value for 'edgeAppName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['edgeAppName']) && (mb_strlen($this->container['edgeAppName']) < 0)) {
                $invalidProperties[] = "invalid value for 'edgeAppName', the character length must be bigger than or equal to 0.";
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
    * Gets edgeAppId
    *  应用id
    *
    * @return string|null
    */
    public function getEdgeAppId()
    {
        return $this->container['edgeAppId'];
    }

    /**
    * Sets edgeAppId
    *
    * @param string|null $edgeAppId 应用id
    *
    * @return $this
    */
    public function setEdgeAppId($edgeAppId)
    {
        $this->container['edgeAppId'] = $edgeAppId;
        return $this;
    }

    /**
    * Gets description
    *  应用描述
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
    * @param string|null $description 应用描述
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  最后一次修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 最后一次修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets lastPublishedVersion
    *  最新发布版本
    *
    * @return string|null
    */
    public function getLastPublishedVersion()
    {
        return $this->container['lastPublishedVersion'];
    }

    /**
    * Sets lastPublishedVersion
    *
    * @param string|null $lastPublishedVersion 最新发布版本
    *
    * @return $this
    */
    public function setLastPublishedVersion($lastPublishedVersion)
    {
        $this->container['lastPublishedVersion'] = $lastPublishedVersion;
        return $this;
    }

    /**
    * Gets appType
    *  应用类型SYSTEM_REQUIRED|SYSTEM_OPTIONAL|USER
    *
    * @return string|null
    */
    public function getAppType()
    {
        return $this->container['appType'];
    }

    /**
    * Sets appType
    *
    * @param string|null $appType 应用类型SYSTEM_REQUIRED|SYSTEM_OPTIONAL|USER
    *
    * @return $this
    */
    public function setAppType($appType)
    {
        $this->container['appType'] = $appType;
        return $this;
    }

    /**
    * Gets functionType
    *  应用类型DATA_PROCESSING|PROTOCOL_PARSING
    *
    * @return string|null
    */
    public function getFunctionType()
    {
        return $this->container['functionType'];
    }

    /**
    * Sets functionType
    *
    * @param string|null $functionType 应用类型DATA_PROCESSING|PROTOCOL_PARSING
    *
    * @return $this
    */
    public function setFunctionType($functionType)
    {
        $this->container['functionType'] = $functionType;
        return $this;
    }

    /**
    * Gets deployType
    *  部署类型docker|process
    *
    * @return string|null
    */
    public function getDeployType()
    {
        return $this->container['deployType'];
    }

    /**
    * Sets deployType
    *
    * @param string|null $deployType 部署类型docker|process
    *
    * @return $this
    */
    public function setDeployType($deployType)
    {
        $this->container['deployType'] = $deployType;
        return $this;
    }

    /**
    * Gets protocol
    *  驱动协议类型OPCUA|Modbus-TCP
    *
    * @return string|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string|null $protocol 驱动协议类型OPCUA|Modbus-TCP
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets edgeAppName
    *  应用名称
    *
    * @return string|null
    */
    public function getEdgeAppName()
    {
        return $this->container['edgeAppName'];
    }

    /**
    * Sets edgeAppName
    *
    * @param string|null $edgeAppName 应用名称
    *
    * @return $this
    */
    public function setEdgeAppName($edgeAppName)
    {
        $this->container['edgeAppName'] = $edgeAppName;
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

