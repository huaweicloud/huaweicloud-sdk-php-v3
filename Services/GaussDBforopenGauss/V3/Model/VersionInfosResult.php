<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VersionInfosResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VersionInfosResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * version  **参数解释**: 引擎版本号。 **取值范围**: 不涉及
    * kernelVersion  **参数解释**: 内核引擎版本号。 **取值范围**: 不涉及
    * recommend  **参数解释**: 是否为推荐版本。 **取值范围**: - true：推荐版本 - flase: 非推荐版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'version' => 'string',
            'kernelVersion' => 'string',
            'recommend' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * version  **参数解释**: 引擎版本号。 **取值范围**: 不涉及
    * kernelVersion  **参数解释**: 内核引擎版本号。 **取值范围**: 不涉及
    * recommend  **参数解释**: 是否为推荐版本。 **取值范围**: - true：推荐版本 - flase: 非推荐版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'version' => null,
        'kernelVersion' => null,
        'recommend' => null
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
    * version  **参数解释**: 引擎版本号。 **取值范围**: 不涉及
    * kernelVersion  **参数解释**: 内核引擎版本号。 **取值范围**: 不涉及
    * recommend  **参数解释**: 是否为推荐版本。 **取值范围**: - true：推荐版本 - flase: 非推荐版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'version' => 'version',
            'kernelVersion' => 'kernel_version',
            'recommend' => 'recommend'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * version  **参数解释**: 引擎版本号。 **取值范围**: 不涉及
    * kernelVersion  **参数解释**: 内核引擎版本号。 **取值范围**: 不涉及
    * recommend  **参数解释**: 是否为推荐版本。 **取值范围**: - true：推荐版本 - flase: 非推荐版本
    *
    * @var string[]
    */
    protected static $setters = [
            'version' => 'setVersion',
            'kernelVersion' => 'setKernelVersion',
            'recommend' => 'setRecommend'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * version  **参数解释**: 引擎版本号。 **取值范围**: 不涉及
    * kernelVersion  **参数解释**: 内核引擎版本号。 **取值范围**: 不涉及
    * recommend  **参数解释**: 是否为推荐版本。 **取值范围**: - true：推荐版本 - flase: 非推荐版本
    *
    * @var string[]
    */
    protected static $getters = [
            'version' => 'getVersion',
            'kernelVersion' => 'getKernelVersion',
            'recommend' => 'getRecommend'
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
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['kernelVersion'] = isset($data['kernelVersion']) ? $data['kernelVersion'] : null;
        $this->container['recommend'] = isset($data['recommend']) ? $data['recommend'] : null;
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
    * Gets version
    *  **参数解释**: 引擎版本号。 **取值范围**: 不涉及
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
    * @param string|null $version **参数解释**: 引擎版本号。 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets kernelVersion
    *  **参数解释**: 内核引擎版本号。 **取值范围**: 不涉及
    *
    * @return string|null
    */
    public function getKernelVersion()
    {
        return $this->container['kernelVersion'];
    }

    /**
    * Sets kernelVersion
    *
    * @param string|null $kernelVersion **参数解释**: 内核引擎版本号。 **取值范围**: 不涉及
    *
    * @return $this
    */
    public function setKernelVersion($kernelVersion)
    {
        $this->container['kernelVersion'] = $kernelVersion;
        return $this;
    }

    /**
    * Gets recommend
    *  **参数解释**: 是否为推荐版本。 **取值范围**: - true：推荐版本 - flase: 非推荐版本
    *
    * @return bool|null
    */
    public function getRecommend()
    {
        return $this->container['recommend'];
    }

    /**
    * Sets recommend
    *
    * @param bool|null $recommend **参数解释**: 是否为推荐版本。 **取值范围**: - true：推荐版本 - flase: 非推荐版本
    *
    * @return $this
    */
    public function setRecommend($recommend)
    {
        $this->container['recommend'] = $recommend;
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

