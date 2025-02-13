<?php

namespace HuaweiCloud\SDK\Cse\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateNacosNamespacesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateNacosNamespacesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * customNamespaceId  命名空间ID，仅支持大小写字母、数字、短划线（-）和下划线（_），不超过128个字符。
    * namespaceName  命名空间名，支持非@、#、$、%、^、&、*，不超过128个字符。
    * namespaceDesc  命名空间描述，不超过256个字符。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xEngineId' => 'string',
            'xEnterpriseProjectId' => 'string',
            'customNamespaceId' => 'string',
            'namespaceName' => 'string',
            'namespaceDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * customNamespaceId  命名空间ID，仅支持大小写字母、数字、短划线（-）和下划线（_），不超过128个字符。
    * namespaceName  命名空间名，支持非@、#、$、%、^、&、*，不超过128个字符。
    * namespaceDesc  命名空间描述，不超过256个字符。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xEngineId' => null,
        'xEnterpriseProjectId' => null,
        'customNamespaceId' => null,
        'namespaceName' => null,
        'namespaceDesc' => null
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
    * customNamespaceId  命名空间ID，仅支持大小写字母、数字、短划线（-）和下划线（_），不超过128个字符。
    * namespaceName  命名空间名，支持非@、#、$、%、^、&、*，不超过128个字符。
    * namespaceDesc  命名空间描述，不超过256个字符。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xEngineId' => 'x-engine-id',
            'xEnterpriseProjectId' => 'X-Enterprise-Project-ID',
            'customNamespaceId' => 'customNamespaceId',
            'namespaceName' => 'namespaceName',
            'namespaceDesc' => 'namespaceDesc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * customNamespaceId  命名空间ID，仅支持大小写字母、数字、短划线（-）和下划线（_），不超过128个字符。
    * namespaceName  命名空间名，支持非@、#、$、%、^、&、*，不超过128个字符。
    * namespaceDesc  命名空间描述，不超过256个字符。
    *
    * @var string[]
    */
    protected static $setters = [
            'xEngineId' => 'setXEngineId',
            'xEnterpriseProjectId' => 'setXEnterpriseProjectId',
            'customNamespaceId' => 'setCustomNamespaceId',
            'namespaceName' => 'setNamespaceName',
            'namespaceDesc' => 'setNamespaceDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xEngineId  微服务引擎的实例ID
    * xEnterpriseProjectId  企业项目ID
    * customNamespaceId  命名空间ID，仅支持大小写字母、数字、短划线（-）和下划线（_），不超过128个字符。
    * namespaceName  命名空间名，支持非@、#、$、%、^、&、*，不超过128个字符。
    * namespaceDesc  命名空间描述，不超过256个字符。
    *
    * @var string[]
    */
    protected static $getters = [
            'xEngineId' => 'getXEngineId',
            'xEnterpriseProjectId' => 'getXEnterpriseProjectId',
            'customNamespaceId' => 'getCustomNamespaceId',
            'namespaceName' => 'getNamespaceName',
            'namespaceDesc' => 'getNamespaceDesc'
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
        $this->container['customNamespaceId'] = isset($data['customNamespaceId']) ? $data['customNamespaceId'] : null;
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['namespaceDesc'] = isset($data['namespaceDesc']) ? $data['namespaceDesc'] : null;
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
        if ($this->container['customNamespaceId'] === null) {
            $invalidProperties[] = "'customNamespaceId' can't be null";
        }
        if ($this->container['namespaceName'] === null) {
            $invalidProperties[] = "'namespaceName' can't be null";
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
    * Gets customNamespaceId
    *  命名空间ID，仅支持大小写字母、数字、短划线（-）和下划线（_），不超过128个字符。
    *
    * @return string
    */
    public function getCustomNamespaceId()
    {
        return $this->container['customNamespaceId'];
    }

    /**
    * Sets customNamespaceId
    *
    * @param string $customNamespaceId 命名空间ID，仅支持大小写字母、数字、短划线（-）和下划线（_），不超过128个字符。
    *
    * @return $this
    */
    public function setCustomNamespaceId($customNamespaceId)
    {
        $this->container['customNamespaceId'] = $customNamespaceId;
        return $this;
    }

    /**
    * Gets namespaceName
    *  命名空间名，支持非@、#、$、%、^、&、*，不超过128个字符。
    *
    * @return string
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string $namespaceName 命名空间名，支持非@、#、$、%、^、&、*，不超过128个字符。
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets namespaceDesc
    *  命名空间描述，不超过256个字符。
    *
    * @return string|null
    */
    public function getNamespaceDesc()
    {
        return $this->container['namespaceDesc'];
    }

    /**
    * Sets namespaceDesc
    *
    * @param string|null $namespaceDesc 命名空间描述，不超过256个字符。
    *
    * @return $this
    */
    public function setNamespaceDesc($namespaceDesc)
    {
        $this->container['namespaceDesc'] = $namespaceDesc;
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

