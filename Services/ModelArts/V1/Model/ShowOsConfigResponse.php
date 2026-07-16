<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowOsConfigResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowOsConfigResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * networkCidrs  **参数解释**：网络配置项。
    * networkQuota  **参数解释**：用户可创建网络个数配额。 **取值范围**：不涉及
    * poolQuota  **参数解释**：用户可创建资源池个数配额。 **取值范围**：不涉及
    * poolHighAvailable  **参数解释**：当前环境/局点是否支持创建高可用资源池。 **取值范围**： - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'networkCidrs' => 'string[]',
            'networkQuota' => 'int',
            'poolQuota' => 'int',
            'poolHighAvailable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * networkCidrs  **参数解释**：网络配置项。
    * networkQuota  **参数解释**：用户可创建网络个数配额。 **取值范围**：不涉及
    * poolQuota  **参数解释**：用户可创建资源池个数配额。 **取值范围**：不涉及
    * poolHighAvailable  **参数解释**：当前环境/局点是否支持创建高可用资源池。 **取值范围**： - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'networkCidrs' => null,
        'networkQuota' => null,
        'poolQuota' => null,
        'poolHighAvailable' => null
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
    * networkCidrs  **参数解释**：网络配置项。
    * networkQuota  **参数解释**：用户可创建网络个数配额。 **取值范围**：不涉及
    * poolQuota  **参数解释**：用户可创建资源池个数配额。 **取值范围**：不涉及
    * poolHighAvailable  **参数解释**：当前环境/局点是否支持创建高可用资源池。 **取值范围**： - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'networkCidrs' => 'networkCidrs',
            'networkQuota' => 'networkQuota',
            'poolQuota' => 'poolQuota',
            'poolHighAvailable' => 'poolHighAvailable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * networkCidrs  **参数解释**：网络配置项。
    * networkQuota  **参数解释**：用户可创建网络个数配额。 **取值范围**：不涉及
    * poolQuota  **参数解释**：用户可创建资源池个数配额。 **取值范围**：不涉及
    * poolHighAvailable  **参数解释**：当前环境/局点是否支持创建高可用资源池。 **取值范围**： - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $setters = [
            'networkCidrs' => 'setNetworkCidrs',
            'networkQuota' => 'setNetworkQuota',
            'poolQuota' => 'setPoolQuota',
            'poolHighAvailable' => 'setPoolHighAvailable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * networkCidrs  **参数解释**：网络配置项。
    * networkQuota  **参数解释**：用户可创建网络个数配额。 **取值范围**：不涉及
    * poolQuota  **参数解释**：用户可创建资源池个数配额。 **取值范围**：不涉及
    * poolHighAvailable  **参数解释**：当前环境/局点是否支持创建高可用资源池。 **取值范围**： - true：支持 - false：不支持
    *
    * @var string[]
    */
    protected static $getters = [
            'networkCidrs' => 'getNetworkCidrs',
            'networkQuota' => 'getNetworkQuota',
            'poolQuota' => 'getPoolQuota',
            'poolHighAvailable' => 'getPoolHighAvailable'
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
        $this->container['networkCidrs'] = isset($data['networkCidrs']) ? $data['networkCidrs'] : null;
        $this->container['networkQuota'] = isset($data['networkQuota']) ? $data['networkQuota'] : null;
        $this->container['poolQuota'] = isset($data['poolQuota']) ? $data['poolQuota'] : null;
        $this->container['poolHighAvailable'] = isset($data['poolHighAvailable']) ? $data['poolHighAvailable'] : null;
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
    * Gets networkCidrs
    *  **参数解释**：网络配置项。
    *
    * @return string[]|null
    */
    public function getNetworkCidrs()
    {
        return $this->container['networkCidrs'];
    }

    /**
    * Sets networkCidrs
    *
    * @param string[]|null $networkCidrs **参数解释**：网络配置项。
    *
    * @return $this
    */
    public function setNetworkCidrs($networkCidrs)
    {
        $this->container['networkCidrs'] = $networkCidrs;
        return $this;
    }

    /**
    * Gets networkQuota
    *  **参数解释**：用户可创建网络个数配额。 **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getNetworkQuota()
    {
        return $this->container['networkQuota'];
    }

    /**
    * Sets networkQuota
    *
    * @param int|null $networkQuota **参数解释**：用户可创建网络个数配额。 **取值范围**：不涉及
    *
    * @return $this
    */
    public function setNetworkQuota($networkQuota)
    {
        $this->container['networkQuota'] = $networkQuota;
        return $this;
    }

    /**
    * Gets poolQuota
    *  **参数解释**：用户可创建资源池个数配额。 **取值范围**：不涉及
    *
    * @return int|null
    */
    public function getPoolQuota()
    {
        return $this->container['poolQuota'];
    }

    /**
    * Sets poolQuota
    *
    * @param int|null $poolQuota **参数解释**：用户可创建资源池个数配额。 **取值范围**：不涉及
    *
    * @return $this
    */
    public function setPoolQuota($poolQuota)
    {
        $this->container['poolQuota'] = $poolQuota;
        return $this;
    }

    /**
    * Gets poolHighAvailable
    *  **参数解释**：当前环境/局点是否支持创建高可用资源池。 **取值范围**： - true：支持 - false：不支持
    *
    * @return bool|null
    */
    public function getPoolHighAvailable()
    {
        return $this->container['poolHighAvailable'];
    }

    /**
    * Sets poolHighAvailable
    *
    * @param bool|null $poolHighAvailable **参数解释**：当前环境/局点是否支持创建高可用资源池。 **取值范围**： - true：支持 - false：不支持
    *
    * @return $this
    */
    public function setPoolHighAvailable($poolHighAvailable)
    {
        $this->container['poolHighAvailable'] = $poolHighAvailable;
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

