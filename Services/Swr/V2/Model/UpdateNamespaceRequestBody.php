<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateNamespaceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateNamespaceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'metadata' => '\HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata',
            'cveAllowlist' => '\HuaweiCloud\SDK\Swr\V2\Model\UpdateCVEAllowlistRequest'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'metadata' => 'metadata',
            'cveAllowlist' => 'cve_allowlist'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $setters = [
            'metadata' => 'setMetadata',
            'cveAllowlist' => 'setCveAllowlist'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * metadata  metadata
    * cveAllowlist  cveAllowlist
    *
    * @var string[]
    */
    protected static $getters = [
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
        if ($this->container['metadata'] === null) {
            $invalidProperties[] = "'metadata' can't be null";
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
    * Gets metadata
    *  metadata
    *
    * @return \HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata
    */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
    * Sets metadata
    *
    * @param \HuaweiCloud\SDK\Swr\V2\Model\NamespaceMetadata $metadata metadata
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

