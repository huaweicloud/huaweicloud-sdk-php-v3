<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceLimit implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceLimit';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * rateLimit  rateLimit
    * requestSizeLimit  **参数解释：** 请求大小限制。 **约束限制：** 不涉及。 **取值范围：** 1-50M。 **默认取值：** 不涉及。
    * requestTimeout  **参数解释：** 超时时间。 **约束限制：** 不涉及。 **取值范围：** 1到7200秒。 **默认取值：** 不涉及。
    * ipWhiteList  **参数解释：** IP白名单。 **约束限制：** 不涉及。
    * ipBlackList  **参数解释：** IP黑名单。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'rateLimit' => '\HuaweiCloud\SDK\ModelArts\V1\Model\RateLimit',
            'requestSizeLimit' => 'int',
            'requestTimeout' => 'int',
            'ipWhiteList' => 'string[]',
            'ipBlackList' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * rateLimit  rateLimit
    * requestSizeLimit  **参数解释：** 请求大小限制。 **约束限制：** 不涉及。 **取值范围：** 1-50M。 **默认取值：** 不涉及。
    * requestTimeout  **参数解释：** 超时时间。 **约束限制：** 不涉及。 **取值范围：** 1到7200秒。 **默认取值：** 不涉及。
    * ipWhiteList  **参数解释：** IP白名单。 **约束限制：** 不涉及。
    * ipBlackList  **参数解释：** IP黑名单。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'rateLimit' => null,
        'requestSizeLimit' => 'int32',
        'requestTimeout' => 'int32',
        'ipWhiteList' => null,
        'ipBlackList' => null
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
    * rateLimit  rateLimit
    * requestSizeLimit  **参数解释：** 请求大小限制。 **约束限制：** 不涉及。 **取值范围：** 1-50M。 **默认取值：** 不涉及。
    * requestTimeout  **参数解释：** 超时时间。 **约束限制：** 不涉及。 **取值范围：** 1到7200秒。 **默认取值：** 不涉及。
    * ipWhiteList  **参数解释：** IP白名单。 **约束限制：** 不涉及。
    * ipBlackList  **参数解释：** IP黑名单。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'rateLimit' => 'rate_limit',
            'requestSizeLimit' => 'request_size_limit',
            'requestTimeout' => 'request_timeout',
            'ipWhiteList' => 'ip_white_list',
            'ipBlackList' => 'ip_black_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * rateLimit  rateLimit
    * requestSizeLimit  **参数解释：** 请求大小限制。 **约束限制：** 不涉及。 **取值范围：** 1-50M。 **默认取值：** 不涉及。
    * requestTimeout  **参数解释：** 超时时间。 **约束限制：** 不涉及。 **取值范围：** 1到7200秒。 **默认取值：** 不涉及。
    * ipWhiteList  **参数解释：** IP白名单。 **约束限制：** 不涉及。
    * ipBlackList  **参数解释：** IP黑名单。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'rateLimit' => 'setRateLimit',
            'requestSizeLimit' => 'setRequestSizeLimit',
            'requestTimeout' => 'setRequestTimeout',
            'ipWhiteList' => 'setIpWhiteList',
            'ipBlackList' => 'setIpBlackList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * rateLimit  rateLimit
    * requestSizeLimit  **参数解释：** 请求大小限制。 **约束限制：** 不涉及。 **取值范围：** 1-50M。 **默认取值：** 不涉及。
    * requestTimeout  **参数解释：** 超时时间。 **约束限制：** 不涉及。 **取值范围：** 1到7200秒。 **默认取值：** 不涉及。
    * ipWhiteList  **参数解释：** IP白名单。 **约束限制：** 不涉及。
    * ipBlackList  **参数解释：** IP黑名单。 **约束限制：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'rateLimit' => 'getRateLimit',
            'requestSizeLimit' => 'getRequestSizeLimit',
            'requestTimeout' => 'getRequestTimeout',
            'ipWhiteList' => 'getIpWhiteList',
            'ipBlackList' => 'getIpBlackList'
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
        $this->container['rateLimit'] = isset($data['rateLimit']) ? $data['rateLimit'] : null;
        $this->container['requestSizeLimit'] = isset($data['requestSizeLimit']) ? $data['requestSizeLimit'] : null;
        $this->container['requestTimeout'] = isset($data['requestTimeout']) ? $data['requestTimeout'] : null;
        $this->container['ipWhiteList'] = isset($data['ipWhiteList']) ? $data['ipWhiteList'] : null;
        $this->container['ipBlackList'] = isset($data['ipBlackList']) ? $data['ipBlackList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['rateLimit'] === null) {
            $invalidProperties[] = "'rateLimit' can't be null";
        }
        if ($this->container['requestSizeLimit'] === null) {
            $invalidProperties[] = "'requestSizeLimit' can't be null";
        }
        if ($this->container['requestTimeout'] === null) {
            $invalidProperties[] = "'requestTimeout' can't be null";
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
    * Gets rateLimit
    *  rateLimit
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\RateLimit
    */
    public function getRateLimit()
    {
        return $this->container['rateLimit'];
    }

    /**
    * Sets rateLimit
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\RateLimit $rateLimit rateLimit
    *
    * @return $this
    */
    public function setRateLimit($rateLimit)
    {
        $this->container['rateLimit'] = $rateLimit;
        return $this;
    }

    /**
    * Gets requestSizeLimit
    *  **参数解释：** 请求大小限制。 **约束限制：** 不涉及。 **取值范围：** 1-50M。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getRequestSizeLimit()
    {
        return $this->container['requestSizeLimit'];
    }

    /**
    * Sets requestSizeLimit
    *
    * @param int $requestSizeLimit **参数解释：** 请求大小限制。 **约束限制：** 不涉及。 **取值范围：** 1-50M。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRequestSizeLimit($requestSizeLimit)
    {
        $this->container['requestSizeLimit'] = $requestSizeLimit;
        return $this;
    }

    /**
    * Gets requestTimeout
    *  **参数解释：** 超时时间。 **约束限制：** 不涉及。 **取值范围：** 1到7200秒。 **默认取值：** 不涉及。
    *
    * @return int
    */
    public function getRequestTimeout()
    {
        return $this->container['requestTimeout'];
    }

    /**
    * Sets requestTimeout
    *
    * @param int $requestTimeout **参数解释：** 超时时间。 **约束限制：** 不涉及。 **取值范围：** 1到7200秒。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRequestTimeout($requestTimeout)
    {
        $this->container['requestTimeout'] = $requestTimeout;
        return $this;
    }

    /**
    * Gets ipWhiteList
    *  **参数解释：** IP白名单。 **约束限制：** 不涉及。
    *
    * @return string[]|null
    */
    public function getIpWhiteList()
    {
        return $this->container['ipWhiteList'];
    }

    /**
    * Sets ipWhiteList
    *
    * @param string[]|null $ipWhiteList **参数解释：** IP白名单。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setIpWhiteList($ipWhiteList)
    {
        $this->container['ipWhiteList'] = $ipWhiteList;
        return $this;
    }

    /**
    * Gets ipBlackList
    *  **参数解释：** IP黑名单。 **约束限制：** 不涉及。
    *
    * @return string[]|null
    */
    public function getIpBlackList()
    {
        return $this->container['ipBlackList'];
    }

    /**
    * Sets ipBlackList
    *
    * @param string[]|null $ipBlackList **参数解释：** IP黑名单。 **约束限制：** 不涉及。
    *
    * @return $this
    */
    public function setIpBlackList($ipBlackList)
    {
        $this->container['ipBlackList'] = $ipBlackList;
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

