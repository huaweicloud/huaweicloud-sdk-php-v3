<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DeleteNacosNamespacesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DeleteNacosNamespacesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * namespaceId  命名空间ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xEngineId' => 'string',
            'xEnterpriseProjectId' => 'string',
            'namespaceId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * namespaceId  命名空间ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xEngineId' => null,
        'xEnterpriseProjectId' => null,
        'namespaceId' => null
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
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * namespaceId  命名空间ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xEngineId' => 'x-engine-id',
            'xEnterpriseProjectId' => 'X-Enterprise-Project-ID',
            'namespaceId' => 'namespace_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * namespaceId  命名空间ID
    *
    * @var string[]
    */
    protected static $setters = [
            'xEngineId' => 'setXEngineId',
            'xEnterpriseProjectId' => 'setXEnterpriseProjectId',
            'namespaceId' => 'setNamespaceId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * namespaceId  命名空间ID
    *
    * @var string[]
    */
    protected static $getters = [
            'xEngineId' => 'getXEngineId',
            'xEnterpriseProjectId' => 'getXEnterpriseProjectId',
            'namespaceId' => 'getNamespaceId'
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
        $this->container['xEngineId'] = isset($data['xEngineId']) ? $data['xEngineId'] : null;
        $this->container['xEnterpriseProjectId'] = isset($data['xEnterpriseProjectId']) ? $data['xEnterpriseProjectId'] : null;
        $this->container['namespaceId'] = isset($data['namespaceId']) ? $data['namespaceId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['xEngineId'] === null) {
            $invalidProperties[] = "'xEngineId' can't be null";
        }
        if ($this->container['xEnterpriseProjectId'] === null) {
            $invalidProperties[] = "'xEnterpriseProjectId' can't be null";
        }
        if ($this->container['namespaceId'] === null) {
            $invalidProperties[] = "'namespaceId' can't be null";
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
    * Gets xEngineId
    *  微服务引擎的实例ID
    *
    * @return string
    */
    public function getXEngineId()
    {
        return $this->container['xEngineId'];
    }

    /**
    * Sets xEngineId
    *
    * @param string $xEngineId 微服务引擎的实例ID
    *
    * @return $this
    */
    public function setXEngineId($xEngineId)
    {
        $this->container['xEngineId'] = $xEngineId;
        return $this;
    }

    /**
    * Gets xEnterpriseProjectId
    *  企业项目ID
    *
    * @return string
    */
    public function getXEnterpriseProjectId()
    {
        return $this->container['xEnterpriseProjectId'];
    }

    /**
    * Sets xEnterpriseProjectId
    *
    * @param string $xEnterpriseProjectId 企业项目ID
    *
    * @return $this
    */
    public function setXEnterpriseProjectId($xEnterpriseProjectId)
    {
        $this->container['xEnterpriseProjectId'] = $xEnterpriseProjectId;
        return $this;
    }

    /**
    * Gets namespaceId
    *  命名空间ID
    *
    * @return string
    */
    public function getNamespaceId()
    {
        return $this->container['namespaceId'];
    }

    /**
    * Sets namespaceId
    *
    * @param string $namespaceId 命名空间ID
    *
    * @return $this
    */
    public function setNamespaceId($namespaceId)
    {
        $this->container['namespaceId'] = $namespaceId;
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

