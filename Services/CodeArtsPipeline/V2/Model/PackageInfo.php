<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PackageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PackageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  **参数解释**： 产物名。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 产物类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 产物版本号。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 产物下载地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'packageType' => 'string',
            'version' => 'string',
            'downloadUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  **参数解释**： 产物名。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 产物类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 产物版本号。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 产物下载地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'packageType' => null,
        'version' => null,
        'downloadUrl' => null
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
    * name  **参数解释**： 产物名。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 产物类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 产物版本号。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 产物下载地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'packageType' => 'packageType',
            'version' => 'version',
            'downloadUrl' => 'downloadUrl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  **参数解释**： 产物名。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 产物类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 产物版本号。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 产物下载地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'packageType' => 'setPackageType',
            'version' => 'setVersion',
            'downloadUrl' => 'setDownloadUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  **参数解释**： 产物名。 **取值范围**： 不涉及。
    * packageType  **参数解释**： 产物类型。 **取值范围**： 不涉及。
    * version  **参数解释**： 产物版本号。 **取值范围**： 不涉及。
    * downloadUrl  **参数解释**： 产物下载地址。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'packageType' => 'getPackageType',
            'version' => 'getVersion',
            'downloadUrl' => 'getDownloadUrl'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['packageType'] = isset($data['packageType']) ? $data['packageType'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['downloadUrl'] = isset($data['downloadUrl']) ? $data['downloadUrl'] : null;
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
    * Gets name
    *  **参数解释**： 产物名。 **取值范围**： 不涉及。
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
    * @param string|null $name **参数解释**： 产物名。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets packageType
    *  **参数解释**： 产物类型。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getPackageType()
    {
        return $this->container['packageType'];
    }

    /**
    * Sets packageType
    *
    * @param string|null $packageType **参数解释**： 产物类型。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setPackageType($packageType)
    {
        $this->container['packageType'] = $packageType;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 产物版本号。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**： 产物版本号。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets downloadUrl
    *  **参数解释**： 产物下载地址。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDownloadUrl()
    {
        return $this->container['downloadUrl'];
    }

    /**
    * Sets downloadUrl
    *
    * @param string|null $downloadUrl **参数解释**： 产物下载地址。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDownloadUrl($downloadUrl)
    {
        $this->container['downloadUrl'] = $downloadUrl;
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

