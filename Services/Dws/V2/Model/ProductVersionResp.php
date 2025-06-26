<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProductVersionResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProductVersionResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * minCn  **参数解释**： 产品规格在该版本支持的最小CN数量。 **取值范围**： 不涉及。
    * maxCn  **参数解释**： 产品规格在该版本支持的最大CN数量。 **取值范围**： 不涉及。
    * versionType  **参数解释**： 产品规格该版本支持的类型。 **取值范围**： 1：稳定版； 0：最新版本。
    * datastoreVersion  **参数解释**： 产品规格版本号名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'minCn' => 'int',
            'maxCn' => 'int',
            'versionType' => 'string',
            'datastoreVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * minCn  **参数解释**： 产品规格在该版本支持的最小CN数量。 **取值范围**： 不涉及。
    * maxCn  **参数解释**： 产品规格在该版本支持的最大CN数量。 **取值范围**： 不涉及。
    * versionType  **参数解释**： 产品规格该版本支持的类型。 **取值范围**： 1：稳定版； 0：最新版本。
    * datastoreVersion  **参数解释**： 产品规格版本号名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'minCn' => 'int32',
        'maxCn' => 'int32',
        'versionType' => null,
        'datastoreVersion' => null
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
    * minCn  **参数解释**： 产品规格在该版本支持的最小CN数量。 **取值范围**： 不涉及。
    * maxCn  **参数解释**： 产品规格在该版本支持的最大CN数量。 **取值范围**： 不涉及。
    * versionType  **参数解释**： 产品规格该版本支持的类型。 **取值范围**： 1：稳定版； 0：最新版本。
    * datastoreVersion  **参数解释**： 产品规格版本号名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'minCn' => 'min_cn',
            'maxCn' => 'max_cn',
            'versionType' => 'version_type',
            'datastoreVersion' => 'datastore_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * minCn  **参数解释**： 产品规格在该版本支持的最小CN数量。 **取值范围**： 不涉及。
    * maxCn  **参数解释**： 产品规格在该版本支持的最大CN数量。 **取值范围**： 不涉及。
    * versionType  **参数解释**： 产品规格该版本支持的类型。 **取值范围**： 1：稳定版； 0：最新版本。
    * datastoreVersion  **参数解释**： 产品规格版本号名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'minCn' => 'setMinCn',
            'maxCn' => 'setMaxCn',
            'versionType' => 'setVersionType',
            'datastoreVersion' => 'setDatastoreVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * minCn  **参数解释**： 产品规格在该版本支持的最小CN数量。 **取值范围**： 不涉及。
    * maxCn  **参数解释**： 产品规格在该版本支持的最大CN数量。 **取值范围**： 不涉及。
    * versionType  **参数解释**： 产品规格该版本支持的类型。 **取值范围**： 1：稳定版； 0：最新版本。
    * datastoreVersion  **参数解释**： 产品规格版本号名称。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'minCn' => 'getMinCn',
            'maxCn' => 'getMaxCn',
            'versionType' => 'getVersionType',
            'datastoreVersion' => 'getDatastoreVersion'
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
        $this->container['minCn'] = isset($data['minCn']) ? $data['minCn'] : null;
        $this->container['maxCn'] = isset($data['maxCn']) ? $data['maxCn'] : null;
        $this->container['versionType'] = isset($data['versionType']) ? $data['versionType'] : null;
        $this->container['datastoreVersion'] = isset($data['datastoreVersion']) ? $data['datastoreVersion'] : null;
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
    * Gets minCn
    *  **参数解释**： 产品规格在该版本支持的最小CN数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMinCn()
    {
        return $this->container['minCn'];
    }

    /**
    * Sets minCn
    *
    * @param int|null $minCn **参数解释**： 产品规格在该版本支持的最小CN数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMinCn($minCn)
    {
        $this->container['minCn'] = $minCn;
        return $this;
    }

    /**
    * Gets maxCn
    *  **参数解释**： 产品规格在该版本支持的最大CN数量。 **取值范围**： 不涉及。
    *
    * @return int|null
    */
    public function getMaxCn()
    {
        return $this->container['maxCn'];
    }

    /**
    * Sets maxCn
    *
    * @param int|null $maxCn **参数解释**： 产品规格在该版本支持的最大CN数量。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setMaxCn($maxCn)
    {
        $this->container['maxCn'] = $maxCn;
        return $this;
    }

    /**
    * Gets versionType
    *  **参数解释**： 产品规格该版本支持的类型。 **取值范围**： 1：稳定版； 0：最新版本。
    *
    * @return string|null
    */
    public function getVersionType()
    {
        return $this->container['versionType'];
    }

    /**
    * Sets versionType
    *
    * @param string|null $versionType **参数解释**： 产品规格该版本支持的类型。 **取值范围**： 1：稳定版； 0：最新版本。
    *
    * @return $this
    */
    public function setVersionType($versionType)
    {
        $this->container['versionType'] = $versionType;
        return $this;
    }

    /**
    * Gets datastoreVersion
    *  **参数解释**： 产品规格版本号名称。 **取值范围**： 不涉及。
    *
    * @return string|null
    */
    public function getDatastoreVersion()
    {
        return $this->container['datastoreVersion'];
    }

    /**
    * Sets datastoreVersion
    *
    * @param string|null $datastoreVersion **参数解释**： 产品规格版本号名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDatastoreVersion($datastoreVersion)
    {
        $this->container['datastoreVersion'] = $datastoreVersion;
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

