<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ModelNamespace implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Namespace';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespaceName  命名空间的名称
    * namespaceGuid  命名空间的guid
    * namespaceQualifiedName  命名空间的唯一标识名称
    * tableCount  命名空间下的表总数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespaceName' => 'string',
            'namespaceGuid' => 'string',
            'namespaceQualifiedName' => 'string',
            'tableCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespaceName  命名空间的名称
    * namespaceGuid  命名空间的guid
    * namespaceQualifiedName  命名空间的唯一标识名称
    * tableCount  命名空间下的表总数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespaceName' => null,
        'namespaceGuid' => null,
        'namespaceQualifiedName' => null,
        'tableCount' => null
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
    * namespaceName  命名空间的名称
    * namespaceGuid  命名空间的guid
    * namespaceQualifiedName  命名空间的唯一标识名称
    * tableCount  命名空间下的表总数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespaceName' => 'namespace_name',
            'namespaceGuid' => 'namespace_guid',
            'namespaceQualifiedName' => 'namespace_qualified_name',
            'tableCount' => 'table_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespaceName  命名空间的名称
    * namespaceGuid  命名空间的guid
    * namespaceQualifiedName  命名空间的唯一标识名称
    * tableCount  命名空间下的表总数
    *
    * @var string[]
    */
    protected static $setters = [
            'namespaceName' => 'setNamespaceName',
            'namespaceGuid' => 'setNamespaceGuid',
            'namespaceQualifiedName' => 'setNamespaceQualifiedName',
            'tableCount' => 'setTableCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespaceName  命名空间的名称
    * namespaceGuid  命名空间的guid
    * namespaceQualifiedName  命名空间的唯一标识名称
    * tableCount  命名空间下的表总数
    *
    * @var string[]
    */
    protected static $getters = [
            'namespaceName' => 'getNamespaceName',
            'namespaceGuid' => 'getNamespaceGuid',
            'namespaceQualifiedName' => 'getNamespaceQualifiedName',
            'tableCount' => 'getTableCount'
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
        $this->container['namespaceName'] = isset($data['namespaceName']) ? $data['namespaceName'] : null;
        $this->container['namespaceGuid'] = isset($data['namespaceGuid']) ? $data['namespaceGuid'] : null;
        $this->container['namespaceQualifiedName'] = isset($data['namespaceQualifiedName']) ? $data['namespaceQualifiedName'] : null;
        $this->container['tableCount'] = isset($data['tableCount']) ? $data['tableCount'] : null;
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
    * Gets namespaceName
    *  命名空间的名称
    *
    * @return string|null
    */
    public function getNamespaceName()
    {
        return $this->container['namespaceName'];
    }

    /**
    * Sets namespaceName
    *
    * @param string|null $namespaceName 命名空间的名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets namespaceGuid
    *  命名空间的guid
    *
    * @return string|null
    */
    public function getNamespaceGuid()
    {
        return $this->container['namespaceGuid'];
    }

    /**
    * Sets namespaceGuid
    *
    * @param string|null $namespaceGuid 命名空间的guid
    *
    * @return $this
    */
    public function setNamespaceGuid($namespaceGuid)
    {
        $this->container['namespaceGuid'] = $namespaceGuid;
        return $this;
    }

    /**
    * Gets namespaceQualifiedName
    *  命名空间的唯一标识名称
    *
    * @return string|null
    */
    public function getNamespaceQualifiedName()
    {
        return $this->container['namespaceQualifiedName'];
    }

    /**
    * Sets namespaceQualifiedName
    *
    * @param string|null $namespaceQualifiedName 命名空间的唯一标识名称
    *
    * @return $this
    */
    public function setNamespaceQualifiedName($namespaceQualifiedName)
    {
        $this->container['namespaceQualifiedName'] = $namespaceQualifiedName;
        return $this;
    }

    /**
    * Gets tableCount
    *  命名空间下的表总数
    *
    * @return int|null
    */
    public function getTableCount()
    {
        return $this->container['tableCount'];
    }

    /**
    * Sets tableCount
    *
    * @param int|null $tableCount 命名空间下的表总数
    *
    * @return $this
    */
    public function setTableCount($tableCount)
    {
        $this->container['tableCount'] = $tableCount;
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

