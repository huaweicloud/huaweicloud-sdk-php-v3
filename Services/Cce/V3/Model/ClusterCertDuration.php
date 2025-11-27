<?php

namespace HuaweiCloud\SDK\Cce\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ClusterCertDuration implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ClusterCertDuration';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * duration  **参数解释：** 集群证书有效时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 最小值为1天，最大值为5年，因此取值范围为1-1827（以天为单位，实际上限取决于5年内闰年的数量，例如5年内存在一个闰年则上限为1826天）；若填-1则为最大值5年 **默认取值：** 不涉及
    * expireAt  **参数解释：** 集群证书到期时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 证书到期时间须在当前时间后15分钟至5年之间，参数格式为：2025-01-01 16:00:00 +0000 UTC。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'duration' => 'int',
            'expireAt' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * duration  **参数解释：** 集群证书有效时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 最小值为1天，最大值为5年，因此取值范围为1-1827（以天为单位，实际上限取决于5年内闰年的数量，例如5年内存在一个闰年则上限为1826天）；若填-1则为最大值5年 **默认取值：** 不涉及
    * expireAt  **参数解释：** 集群证书到期时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 证书到期时间须在当前时间后15分钟至5年之间，参数格式为：2025-01-01 16:00:00 +0000 UTC。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'duration' => 'int32',
        'expireAt' => null
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
    * duration  **参数解释：** 集群证书有效时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 最小值为1天，最大值为5年，因此取值范围为1-1827（以天为单位，实际上限取决于5年内闰年的数量，例如5年内存在一个闰年则上限为1826天）；若填-1则为最大值5年 **默认取值：** 不涉及
    * expireAt  **参数解释：** 集群证书到期时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 证书到期时间须在当前时间后15分钟至5年之间，参数格式为：2025-01-01 16:00:00 +0000 UTC。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'duration' => 'duration',
            'expireAt' => 'expire_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * duration  **参数解释：** 集群证书有效时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 最小值为1天，最大值为5年，因此取值范围为1-1827（以天为单位，实际上限取决于5年内闰年的数量，例如5年内存在一个闰年则上限为1826天）；若填-1则为最大值5年 **默认取值：** 不涉及
    * expireAt  **参数解释：** 集群证书到期时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 证书到期时间须在当前时间后15分钟至5年之间，参数格式为：2025-01-01 16:00:00 +0000 UTC。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'duration' => 'setDuration',
            'expireAt' => 'setExpireAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * duration  **参数解释：** 集群证书有效时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 最小值为1天，最大值为5年，因此取值范围为1-1827（以天为单位，实际上限取决于5年内闰年的数量，例如5年内存在一个闰年则上限为1826天）；若填-1则为最大值5年 **默认取值：** 不涉及
    * expireAt  **参数解释：** 集群证书到期时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 证书到期时间须在当前时间后15分钟至5年之间，参数格式为：2025-01-01 16:00:00 +0000 UTC。 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'duration' => 'getDuration',
            'expireAt' => 'getExpireAt'
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
        $this->container['duration'] = isset($data['duration']) ? $data['duration'] : null;
        $this->container['expireAt'] = isset($data['expireAt']) ? $data['expireAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['duration']) && ($this->container['duration'] > 1827)) {
                $invalidProperties[] = "invalid value for 'duration', must be smaller than or equal to 1827.";
            }
            if (!is_null($this->container['duration']) && ($this->container['duration'] < 1)) {
                $invalidProperties[] = "invalid value for 'duration', must be bigger than or equal to 1.";
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
    * Gets duration
    *  **参数解释：** 集群证书有效时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 最小值为1天，最大值为5年，因此取值范围为1-1827（以天为单位，实际上限取决于5年内闰年的数量，例如5年内存在一个闰年则上限为1826天）；若填-1则为最大值5年 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getDuration()
    {
        return $this->container['duration'];
    }

    /**
    * Sets duration
    *
    * @param int|null $duration **参数解释：** 集群证书有效时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 最小值为1天，最大值为5年，因此取值范围为1-1827（以天为单位，实际上限取决于5年内闰年的数量，例如5年内存在一个闰年则上限为1826天）；若填-1则为最大值5年 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setDuration($duration)
    {
        $this->container['duration'] = $duration;
        return $this;
    }

    /**
    * Gets expireAt
    *  **参数解释：** 集群证书到期时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 证书到期时间须在当前时间后15分钟至5年之间，参数格式为：2025-01-01 16:00:00 +0000 UTC。 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getExpireAt()
    {
        return $this->container['expireAt'];
    }

    /**
    * Sets expireAt
    *
    * @param string|null $expireAt **参数解释：** 集群证书到期时间。 **约束限制：** duration和expire_at参数至少需要指定一个，若同时指定则以expire_at参数为准。 **取值范围：** 证书到期时间须在当前时间后15分钟至5年之间，参数格式为：2025-01-01 16:00:00 +0000 UTC。 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExpireAt($expireAt)
    {
        $this->container['expireAt'] = $expireAt;
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

