<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Metrics implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Metrics';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endpoint  **参数解释：** 指标采集地址，支持IP地址、域名或localhost。 **取值范围：** 不涉及。
    * path  **参数解释：** 指标采集路径。 **取值范围：** 不涉及
    * port  **参数解释：** 指标采集端口。 **取值范围：** 1~65535。
    * scheme  **参数解释：** 指标采集协议。 **取值范围：** - HTTP。 - HTTPS。
    * metricsSource  **参数解释：** 指标来源类型。 **取值范围：** - CONTAINER表示容器内。 - OTHERS表示外部其他地址。 **约束限制：** 不涉及。 **默认取值：** CONTAINER。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endpoint' => 'string',
            'path' => 'string',
            'port' => 'string',
            'scheme' => 'string',
            'metricsSource' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endpoint  **参数解释：** 指标采集地址，支持IP地址、域名或localhost。 **取值范围：** 不涉及。
    * path  **参数解释：** 指标采集路径。 **取值范围：** 不涉及
    * port  **参数解释：** 指标采集端口。 **取值范围：** 1~65535。
    * scheme  **参数解释：** 指标采集协议。 **取值范围：** - HTTP。 - HTTPS。
    * metricsSource  **参数解释：** 指标来源类型。 **取值范围：** - CONTAINER表示容器内。 - OTHERS表示外部其他地址。 **约束限制：** 不涉及。 **默认取值：** CONTAINER。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endpoint' => null,
        'path' => null,
        'port' => null,
        'scheme' => null,
        'metricsSource' => null
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
    * endpoint  **参数解释：** 指标采集地址，支持IP地址、域名或localhost。 **取值范围：** 不涉及。
    * path  **参数解释：** 指标采集路径。 **取值范围：** 不涉及
    * port  **参数解释：** 指标采集端口。 **取值范围：** 1~65535。
    * scheme  **参数解释：** 指标采集协议。 **取值范围：** - HTTP。 - HTTPS。
    * metricsSource  **参数解释：** 指标来源类型。 **取值范围：** - CONTAINER表示容器内。 - OTHERS表示外部其他地址。 **约束限制：** 不涉及。 **默认取值：** CONTAINER。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endpoint' => 'endpoint',
            'path' => 'path',
            'port' => 'port',
            'scheme' => 'scheme',
            'metricsSource' => 'metrics_source'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endpoint  **参数解释：** 指标采集地址，支持IP地址、域名或localhost。 **取值范围：** 不涉及。
    * path  **参数解释：** 指标采集路径。 **取值范围：** 不涉及
    * port  **参数解释：** 指标采集端口。 **取值范围：** 1~65535。
    * scheme  **参数解释：** 指标采集协议。 **取值范围：** - HTTP。 - HTTPS。
    * metricsSource  **参数解释：** 指标来源类型。 **取值范围：** - CONTAINER表示容器内。 - OTHERS表示外部其他地址。 **约束限制：** 不涉及。 **默认取值：** CONTAINER。
    *
    * @var string[]
    */
    protected static $setters = [
            'endpoint' => 'setEndpoint',
            'path' => 'setPath',
            'port' => 'setPort',
            'scheme' => 'setScheme',
            'metricsSource' => 'setMetricsSource'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endpoint  **参数解释：** 指标采集地址，支持IP地址、域名或localhost。 **取值范围：** 不涉及。
    * path  **参数解释：** 指标采集路径。 **取值范围：** 不涉及
    * port  **参数解释：** 指标采集端口。 **取值范围：** 1~65535。
    * scheme  **参数解释：** 指标采集协议。 **取值范围：** - HTTP。 - HTTPS。
    * metricsSource  **参数解释：** 指标来源类型。 **取值范围：** - CONTAINER表示容器内。 - OTHERS表示外部其他地址。 **约束限制：** 不涉及。 **默认取值：** CONTAINER。
    *
    * @var string[]
    */
    protected static $getters = [
            'endpoint' => 'getEndpoint',
            'path' => 'getPath',
            'port' => 'getPort',
            'scheme' => 'getScheme',
            'metricsSource' => 'getMetricsSource'
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
        $this->container['endpoint'] = isset($data['endpoint']) ? $data['endpoint'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['port'] = isset($data['port']) ? $data['port'] : null;
        $this->container['scheme'] = isset($data['scheme']) ? $data['scheme'] : null;
        $this->container['metricsSource'] = isset($data['metricsSource']) ? $data['metricsSource'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['endpoint'] === null) {
            $invalidProperties[] = "'endpoint' can't be null";
        }
        if ($this->container['port'] === null) {
            $invalidProperties[] = "'port' can't be null";
        }
        if ($this->container['scheme'] === null) {
            $invalidProperties[] = "'scheme' can't be null";
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
    * Gets endpoint
    *  **参数解释：** 指标采集地址，支持IP地址、域名或localhost。 **取值范围：** 不涉及。
    *
    * @return string
    */
    public function getEndpoint()
    {
        return $this->container['endpoint'];
    }

    /**
    * Sets endpoint
    *
    * @param string $endpoint **参数解释：** 指标采集地址，支持IP地址、域名或localhost。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEndpoint($endpoint)
    {
        $this->container['endpoint'] = $endpoint;
        return $this;
    }

    /**
    * Gets path
    *  **参数解释：** 指标采集路径。 **取值范围：** 不涉及
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path **参数解释：** 指标采集路径。 **取值范围：** 不涉及
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets port
    *  **参数解释：** 指标采集端口。 **取值范围：** 1~65535。
    *
    * @return string
    */
    public function getPort()
    {
        return $this->container['port'];
    }

    /**
    * Sets port
    *
    * @param string $port **参数解释：** 指标采集端口。 **取值范围：** 1~65535。
    *
    * @return $this
    */
    public function setPort($port)
    {
        $this->container['port'] = $port;
        return $this;
    }

    /**
    * Gets scheme
    *  **参数解释：** 指标采集协议。 **取值范围：** - HTTP。 - HTTPS。
    *
    * @return string
    */
    public function getScheme()
    {
        return $this->container['scheme'];
    }

    /**
    * Sets scheme
    *
    * @param string $scheme **参数解释：** 指标采集协议。 **取值范围：** - HTTP。 - HTTPS。
    *
    * @return $this
    */
    public function setScheme($scheme)
    {
        $this->container['scheme'] = $scheme;
        return $this;
    }

    /**
    * Gets metricsSource
    *  **参数解释：** 指标来源类型。 **取值范围：** - CONTAINER表示容器内。 - OTHERS表示外部其他地址。 **约束限制：** 不涉及。 **默认取值：** CONTAINER。
    *
    * @return string|null
    */
    public function getMetricsSource()
    {
        return $this->container['metricsSource'];
    }

    /**
    * Sets metricsSource
    *
    * @param string|null $metricsSource **参数解释：** 指标来源类型。 **取值范围：** - CONTAINER表示容器内。 - OTHERS表示外部其他地址。 **约束限制：** 不涉及。 **默认取值：** CONTAINER。
    *
    * @return $this
    */
    public function setMetricsSource($metricsSource)
    {
        $this->container['metricsSource'] = $metricsSource;
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

