<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExternalEntityResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExternalEntityResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * nodeId  节点ID
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    * externalId  外部实体ID
    * protocol  接入协议类型
    * connectionType  连接类型(client和server)
    * createTime  创建时间
    * lastModifyTime  最后修改时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'nodeId' => 'string',
            'spaceId' => 'string',
            'externalId' => 'string',
            'protocol' => 'string',
            'connectionType' => 'string',
            'createTime' => 'string',
            'lastModifyTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * nodeId  节点ID
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    * externalId  外部实体ID
    * protocol  接入协议类型
    * connectionType  连接类型(client和server)
    * createTime  创建时间
    * lastModifyTime  最后修改时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'nodeId' => null,
        'spaceId' => null,
        'externalId' => null,
        'protocol' => null,
        'connectionType' => null,
        'createTime' => null,
        'lastModifyTime' => null
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
    * nodeId  节点ID
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    * externalId  外部实体ID
    * protocol  接入协议类型
    * connectionType  连接类型(client和server)
    * createTime  创建时间
    * lastModifyTime  最后修改时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'nodeId' => 'node_id',
            'spaceId' => 'space_id',
            'externalId' => 'external_id',
            'protocol' => 'protocol',
            'connectionType' => 'connection_type',
            'createTime' => 'create_time',
            'lastModifyTime' => 'last_modify_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * nodeId  节点ID
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    * externalId  外部实体ID
    * protocol  接入协议类型
    * connectionType  连接类型(client和server)
    * createTime  创建时间
    * lastModifyTime  最后修改时间
    *
    * @var string[]
    */
    protected static $setters = [
            'nodeId' => 'setNodeId',
            'spaceId' => 'setSpaceId',
            'externalId' => 'setExternalId',
            'protocol' => 'setProtocol',
            'connectionType' => 'setConnectionType',
            'createTime' => 'setCreateTime',
            'lastModifyTime' => 'setLastModifyTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * nodeId  节点ID
    * spaceId  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    * externalId  外部实体ID
    * protocol  接入协议类型
    * connectionType  连接类型(client和server)
    * createTime  创建时间
    * lastModifyTime  最后修改时间
    *
    * @var string[]
    */
    protected static $getters = [
            'nodeId' => 'getNodeId',
            'spaceId' => 'getSpaceId',
            'externalId' => 'getExternalId',
            'protocol' => 'getProtocol',
            'connectionType' => 'getConnectionType',
            'createTime' => 'getCreateTime',
            'lastModifyTime' => 'getLastModifyTime'
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
        $this->container['nodeId'] = isset($data['nodeId']) ? $data['nodeId'] : null;
        $this->container['spaceId'] = isset($data['spaceId']) ? $data['spaceId'] : null;
        $this->container['externalId'] = isset($data['externalId']) ? $data['externalId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['connectionType'] = isset($data['connectionType']) ? $data['connectionType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['lastModifyTime'] = isset($data['lastModifyTime']) ? $data['lastModifyTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) > 64)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nodeId']) && (mb_strlen($this->container['nodeId']) < 1)) {
                $invalidProperties[] = "invalid value for 'nodeId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nodeId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['nodeId'])) {
                $invalidProperties[] = "invalid value for 'nodeId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) > 36)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['spaceId']) && (mb_strlen($this->container['spaceId']) < 1)) {
                $invalidProperties[] = "invalid value for 'spaceId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['spaceId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['spaceId'])) {
                $invalidProperties[] = "invalid value for 'spaceId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['externalId']) && (mb_strlen($this->container['externalId']) > 64)) {
                $invalidProperties[] = "invalid value for 'externalId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['externalId']) && (mb_strlen($this->container['externalId']) < 1)) {
                $invalidProperties[] = "invalid value for 'externalId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['externalId']) && !preg_match("/^[a-zA-Z0-9_-]*$/", $this->container['externalId'])) {
                $invalidProperties[] = "invalid value for 'externalId', must be conform to the pattern /^[a-zA-Z0-9_-]*$/.";
            }
            if (!is_null($this->container['protocol']) && !preg_match("/(MQTT|HTTP)/", $this->container['protocol'])) {
                $invalidProperties[] = "invalid value for 'protocol', must be conform to the pattern /(MQTT|HTTP)/.";
            }
            if (!is_null($this->container['connectionType']) && !preg_match("/(CLIENT|SERVER)/", $this->container['connectionType'])) {
                $invalidProperties[] = "invalid value for 'connectionType', must be conform to the pattern /(CLIENT|SERVER)/.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['lastModifyTime']) && (mb_strlen($this->container['lastModifyTime']) > 256)) {
                $invalidProperties[] = "invalid value for 'lastModifyTime', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['lastModifyTime']) && (mb_strlen($this->container['lastModifyTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'lastModifyTime', the character length must be bigger than or equal to 0.";
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
    * Gets nodeId
    *  节点ID
    *
    * @return string|null
    */
    public function getNodeId()
    {
        return $this->container['nodeId'];
    }

    /**
    * Sets nodeId
    *
    * @param string|null $nodeId 节点ID
    *
    * @return $this
    */
    public function setNodeId($nodeId)
    {
        $this->container['nodeId'] = $nodeId;
        return $this;
    }

    /**
    * Gets spaceId
    *  资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @return string|null
    */
    public function getSpaceId()
    {
        return $this->container['spaceId'];
    }

    /**
    * Sets spaceId
    *
    * @param string|null $spaceId 资源空间ID。此参数为非必选参数，存在多资源空间的用户需要使用该接口时，建议携带该参数指定创建的外部实体归属到IoDA哪个资源空间下的边缘节点设备下，否则创建的外部实体将会归属到默认资源空间下对应的边缘节点下,对应于IoDA的app_id.
    *
    * @return $this
    */
    public function setSpaceId($spaceId)
    {
        $this->container['spaceId'] = $spaceId;
        return $this;
    }

    /**
    * Gets externalId
    *  外部实体ID
    *
    * @return string|null
    */
    public function getExternalId()
    {
        return $this->container['externalId'];
    }

    /**
    * Sets externalId
    *
    * @param string|null $externalId 外部实体ID
    *
    * @return $this
    */
    public function setExternalId($externalId)
    {
        $this->container['externalId'] = $externalId;
        return $this;
    }

    /**
    * Gets protocol
    *  接入协议类型
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
    * @param string|null $protocol 接入协议类型
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets connectionType
    *  连接类型(client和server)
    *
    * @return string|null
    */
    public function getConnectionType()
    {
        return $this->container['connectionType'];
    }

    /**
    * Sets connectionType
    *
    * @param string|null $connectionType 连接类型(client和server)
    *
    * @return $this
    */
    public function setConnectionType($connectionType)
    {
        $this->container['connectionType'] = $connectionType;
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
    * Gets lastModifyTime
    *  最后修改时间
    *
    * @return string|null
    */
    public function getLastModifyTime()
    {
        return $this->container['lastModifyTime'];
    }

    /**
    * Sets lastModifyTime
    *
    * @param string|null $lastModifyTime 最后修改时间
    *
    * @return $this
    */
    public function setLastModifyTime($lastModifyTime)
    {
        $this->container['lastModifyTime'] = $lastModifyTime;
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

