<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListServiceDescribeDetailsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListServiceDescribeDetailsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID。
    * endpointServiceName  终端节点服务的名称。说明：该字段和id字段必须二选一，否则会出现错误。
    * id  终端节点服务的ID，唯一标识。 说明：该字段必须和endpoint_service_name字段二选一，否则会出现错误。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'endpointServiceName' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID。
    * endpointServiceName  终端节点服务的名称。说明：该字段和id字段必须二选一，否则会出现错误。
    * id  终端节点服务的ID，唯一标识。 说明：该字段必须和endpoint_service_name字段二选一，否则会出现错误。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'endpointServiceName' => null,
        'id' => null
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
    * projectId  项目ID。
    * endpointServiceName  终端节点服务的名称。说明：该字段和id字段必须二选一，否则会出现错误。
    * id  终端节点服务的ID，唯一标识。 说明：该字段必须和endpoint_service_name字段二选一，否则会出现错误。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'endpointServiceName' => 'endpoint_service_name',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID。
    * endpointServiceName  终端节点服务的名称。说明：该字段和id字段必须二选一，否则会出现错误。
    * id  终端节点服务的ID，唯一标识。 说明：该字段必须和endpoint_service_name字段二选一，否则会出现错误。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'endpointServiceName' => 'setEndpointServiceName',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID。
    * endpointServiceName  终端节点服务的名称。说明：该字段和id字段必须二选一，否则会出现错误。
    * id  终端节点服务的ID，唯一标识。 说明：该字段必须和endpoint_service_name字段二选一，否则会出现错误。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'endpointServiceName' => 'getEndpointServiceName',
            'id' => 'getId'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['endpointServiceName'] = isset($data['endpointServiceName']) ? $data['endpointServiceName'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
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
            if ((mb_strlen($this->container['projectId']) > 64)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['endpointServiceName']) && (mb_strlen($this->container['endpointServiceName']) > 128)) {
                $invalidProperties[] = "invalid value for 'endpointServiceName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['endpointServiceName']) && (mb_strlen($this->container['endpointServiceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'endpointServiceName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
    *  项目ID。
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
    * @param string $projectId 项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets endpointServiceName
    *  终端节点服务的名称。说明：该字段和id字段必须二选一，否则会出现错误。
    *
    * @return string|null
    */
    public function getEndpointServiceName()
    {
        return $this->container['endpointServiceName'];
    }

    /**
    * Sets endpointServiceName
    *
    * @param string|null $endpointServiceName 终端节点服务的名称。说明：该字段和id字段必须二选一，否则会出现错误。
    *
    * @return $this
    */
    public function setEndpointServiceName($endpointServiceName)
    {
        $this->container['endpointServiceName'] = $endpointServiceName;
        return $this;
    }

    /**
    * Gets id
    *  终端节点服务的ID，唯一标识。 说明：该字段必须和endpoint_service_name字段二选一，否则会出现错误。
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
    * @param string|null $id 终端节点服务的ID，唯一标识。 说明：该字段必须和endpoint_service_name字段二选一，否则会出现错误。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

