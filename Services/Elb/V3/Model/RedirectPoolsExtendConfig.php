<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RedirectPoolsExtendConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RedirectPoolsExtendConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rewriteUrlEnable  **参数解释**：是否开启url重定向。  **取值范围**：true 开启，false 未开启。
    * rewriteUrlConfig  rewriteUrlConfig
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    * corsConfig  corsConfig
    * trafficMirrorConfig  trafficMirrorConfig
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rewriteUrlEnable' => 'bool',
            'rewriteUrlConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\RewriteUrlConfig',
            'insertHeadersConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\InsertHeadersConfig',
            'removeHeadersConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\RemoveHeadersConfig',
            'trafficLimitConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\TrafficLimitConfig',
            'corsConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CorsConfig',
            'trafficMirrorConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\TrafficMirrorConfig'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rewriteUrlEnable  **参数解释**：是否开启url重定向。  **取值范围**：true 开启，false 未开启。
    * rewriteUrlConfig  rewriteUrlConfig
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    * corsConfig  corsConfig
    * trafficMirrorConfig  trafficMirrorConfig
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rewriteUrlEnable' => null,
        'rewriteUrlConfig' => null,
        'insertHeadersConfig' => null,
        'removeHeadersConfig' => null,
        'trafficLimitConfig' => null,
        'corsConfig' => null,
        'trafficMirrorConfig' => null
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
    * rewriteUrlEnable  **参数解释**：是否开启url重定向。  **取值范围**：true 开启，false 未开启。
    * rewriteUrlConfig  rewriteUrlConfig
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    * corsConfig  corsConfig
    * trafficMirrorConfig  trafficMirrorConfig
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rewriteUrlEnable' => 'rewrite_url_enable',
            'rewriteUrlConfig' => 'rewrite_url_config',
            'insertHeadersConfig' => 'insert_headers_config',
            'removeHeadersConfig' => 'remove_headers_config',
            'trafficLimitConfig' => 'traffic_limit_config',
            'corsConfig' => 'cors_config',
            'trafficMirrorConfig' => 'traffic_mirror_config'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rewriteUrlEnable  **参数解释**：是否开启url重定向。  **取值范围**：true 开启，false 未开启。
    * rewriteUrlConfig  rewriteUrlConfig
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    * corsConfig  corsConfig
    * trafficMirrorConfig  trafficMirrorConfig
    *
    * @var string[]
    */
    protected static $setters = [
            'rewriteUrlEnable' => 'setRewriteUrlEnable',
            'rewriteUrlConfig' => 'setRewriteUrlConfig',
            'insertHeadersConfig' => 'setInsertHeadersConfig',
            'removeHeadersConfig' => 'setRemoveHeadersConfig',
            'trafficLimitConfig' => 'setTrafficLimitConfig',
            'corsConfig' => 'setCorsConfig',
            'trafficMirrorConfig' => 'setTrafficMirrorConfig'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rewriteUrlEnable  **参数解释**：是否开启url重定向。  **取值范围**：true 开启，false 未开启。
    * rewriteUrlConfig  rewriteUrlConfig
    * insertHeadersConfig  insertHeadersConfig
    * removeHeadersConfig  removeHeadersConfig
    * trafficLimitConfig  trafficLimitConfig
    * corsConfig  corsConfig
    * trafficMirrorConfig  trafficMirrorConfig
    *
    * @var string[]
    */
    protected static $getters = [
            'rewriteUrlEnable' => 'getRewriteUrlEnable',
            'rewriteUrlConfig' => 'getRewriteUrlConfig',
            'insertHeadersConfig' => 'getInsertHeadersConfig',
            'removeHeadersConfig' => 'getRemoveHeadersConfig',
            'trafficLimitConfig' => 'getTrafficLimitConfig',
            'corsConfig' => 'getCorsConfig',
            'trafficMirrorConfig' => 'getTrafficMirrorConfig'
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
        $this->container['rewriteUrlEnable'] = isset($data['rewriteUrlEnable']) ? $data['rewriteUrlEnable'] : null;
        $this->container['rewriteUrlConfig'] = isset($data['rewriteUrlConfig']) ? $data['rewriteUrlConfig'] : null;
        $this->container['insertHeadersConfig'] = isset($data['insertHeadersConfig']) ? $data['insertHeadersConfig'] : null;
        $this->container['removeHeadersConfig'] = isset($data['removeHeadersConfig']) ? $data['removeHeadersConfig'] : null;
        $this->container['trafficLimitConfig'] = isset($data['trafficLimitConfig']) ? $data['trafficLimitConfig'] : null;
        $this->container['corsConfig'] = isset($data['corsConfig']) ? $data['corsConfig'] : null;
        $this->container['trafficMirrorConfig'] = isset($data['trafficMirrorConfig']) ? $data['trafficMirrorConfig'] : null;
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
    * Gets rewriteUrlEnable
    *  **参数解释**：是否开启url重定向。  **取值范围**：true 开启，false 未开启。
    *
    * @return bool|null
    */
    public function getRewriteUrlEnable()
    {
        return $this->container['rewriteUrlEnable'];
    }

    /**
    * Sets rewriteUrlEnable
    *
    * @param bool|null $rewriteUrlEnable **参数解释**：是否开启url重定向。  **取值范围**：true 开启，false 未开启。
    *
    * @return $this
    */
    public function setRewriteUrlEnable($rewriteUrlEnable)
    {
        $this->container['rewriteUrlEnable'] = $rewriteUrlEnable;
        return $this;
    }

    /**
    * Gets rewriteUrlConfig
    *  rewriteUrlConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RewriteUrlConfig|null
    */
    public function getRewriteUrlConfig()
    {
        return $this->container['rewriteUrlConfig'];
    }

    /**
    * Sets rewriteUrlConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RewriteUrlConfig|null $rewriteUrlConfig rewriteUrlConfig
    *
    * @return $this
    */
    public function setRewriteUrlConfig($rewriteUrlConfig)
    {
        $this->container['rewriteUrlConfig'] = $rewriteUrlConfig;
        return $this;
    }

    /**
    * Gets insertHeadersConfig
    *  insertHeadersConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\InsertHeadersConfig|null
    */
    public function getInsertHeadersConfig()
    {
        return $this->container['insertHeadersConfig'];
    }

    /**
    * Sets insertHeadersConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\InsertHeadersConfig|null $insertHeadersConfig insertHeadersConfig
    *
    * @return $this
    */
    public function setInsertHeadersConfig($insertHeadersConfig)
    {
        $this->container['insertHeadersConfig'] = $insertHeadersConfig;
        return $this;
    }

    /**
    * Gets removeHeadersConfig
    *  removeHeadersConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RemoveHeadersConfig|null
    */
    public function getRemoveHeadersConfig()
    {
        return $this->container['removeHeadersConfig'];
    }

    /**
    * Sets removeHeadersConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RemoveHeadersConfig|null $removeHeadersConfig removeHeadersConfig
    *
    * @return $this
    */
    public function setRemoveHeadersConfig($removeHeadersConfig)
    {
        $this->container['removeHeadersConfig'] = $removeHeadersConfig;
        return $this;
    }

    /**
    * Gets trafficLimitConfig
    *  trafficLimitConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\TrafficLimitConfig|null
    */
    public function getTrafficLimitConfig()
    {
        return $this->container['trafficLimitConfig'];
    }

    /**
    * Sets trafficLimitConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\TrafficLimitConfig|null $trafficLimitConfig trafficLimitConfig
    *
    * @return $this
    */
    public function setTrafficLimitConfig($trafficLimitConfig)
    {
        $this->container['trafficLimitConfig'] = $trafficLimitConfig;
        return $this;
    }

    /**
    * Gets corsConfig
    *  corsConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CorsConfig|null
    */
    public function getCorsConfig()
    {
        return $this->container['corsConfig'];
    }

    /**
    * Sets corsConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CorsConfig|null $corsConfig corsConfig
    *
    * @return $this
    */
    public function setCorsConfig($corsConfig)
    {
        $this->container['corsConfig'] = $corsConfig;
        return $this;
    }

    /**
    * Gets trafficMirrorConfig
    *  trafficMirrorConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\TrafficMirrorConfig|null
    */
    public function getTrafficMirrorConfig()
    {
        return $this->container['trafficMirrorConfig'];
    }

    /**
    * Sets trafficMirrorConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\TrafficMirrorConfig|null $trafficMirrorConfig trafficMirrorConfig
    *
    * @return $this
    */
    public function setTrafficMirrorConfig($trafficMirrorConfig)
    {
        $this->container['trafficMirrorConfig'] = $trafficMirrorConfig;
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

