<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateInstanceNamespaceResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateInstanceNamespaceResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * namespaceName  命名空间名称
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'namespaceName' => 'string',
            'metadata' => '\HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata',
            'cveAllowlist' => '\HuaweiCloud\SDK\Swr\V2\Model\UpdateCVEAllowlistRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * namespaceName  命名空间名称
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'namespaceName' => null,
        'metadata' => null,
        'cveAllowlist' => null
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
    * namespaceName  命名空间名称
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'namespaceName' => 'namespace_name',
            'metadata' => 'metadata',
            'cveAllowlist' => 'cve_allowlist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * namespaceName  命名空间名称
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $setters = [
            'namespaceName' => 'setNamespaceName',
            'metadata' => 'setMetadata',
            'cveAllowlist' => 'setCveAllowlist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * namespaceName  命名空间名称
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $getters = [
            'namespaceName' => 'getNamespaceName',
            'metadata' => 'getMetadata',
            'cveAllowlist' => 'getCveAllowlist'
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
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['cveAllowlist'] = isset($data['cveAllowlist']) ? $data['cveAllowlist'] : null;
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
    *  命名空间名称
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
    * @param string|null $namespaceName 命名空间名称
    *
    * @return $this
    */
    public function setNamespaceName($namespaceName)
    {
        $this->container['namespaceName'] = $namespaceName;
        return $this;
    }

    /**
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata|null
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata|null $metadata metadata
    *
    * @return $this
    */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;
        return $this;
    }

    /**
    * Gets cveAllowlist
    *  cveAllowlist
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\UpdateCVEAllowlistRequest|null
    */
    public function getCveAllowlist()
    {
        return $this->container['cveAllowlist'];
    }

    /**
    * Sets cveAllowlist
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\UpdateCVEAllowlistRequest|null $cveAllowlist cveAllowlist
    *
    * @return $this
    */
    public function setCveAllowlist($cveAllowlist)
    {
        $this->container['cveAllowlist'] = $cveAllowlist;
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

