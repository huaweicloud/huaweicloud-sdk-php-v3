<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowUpgradeDbMajorVersionStatusResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowUpgradeDbMajorVersionStatusResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  实例大版本升级状态 \" running\"：预检查或大版本升级进行中 \" success\"：预检查或大版本升级成功 \" failed\"：预检查或大版本升级失败
    * targetVersion  目标版本。
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * checkExpirationTime  检查成功时，检查报告到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 该字段仅在action为check时返回。
    * detail  预检查或升级报告信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'string',
            'targetVersion' => 'string',
            'startTime' => 'string',
            'checkExpirationTime' => 'string',
            'detail' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  实例大版本升级状态 \" running\"：预检查或大版本升级进行中 \" success\"：预检查或大版本升级成功 \" failed\"：预检查或大版本升级失败
    * targetVersion  目标版本。
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * checkExpirationTime  检查成功时，检查报告到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 该字段仅在action为check时返回。
    * detail  预检查或升级报告信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'targetVersion' => null,
        'startTime' => null,
        'checkExpirationTime' => null,
        'detail' => null
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
    * status  实例大版本升级状态 \" running\"：预检查或大版本升级进行中 \" success\"：预检查或大版本升级成功 \" failed\"：预检查或大版本升级失败
    * targetVersion  目标版本。
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * checkExpirationTime  检查成功时，检查报告到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 该字段仅在action为check时返回。
    * detail  预检查或升级报告信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'targetVersion' => 'target_version',
            'startTime' => 'start_time',
            'checkExpirationTime' => 'check_expiration_time',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  实例大版本升级状态 \" running\"：预检查或大版本升级进行中 \" success\"：预检查或大版本升级成功 \" failed\"：预检查或大版本升级失败
    * targetVersion  目标版本。
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * checkExpirationTime  检查成功时，检查报告到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 该字段仅在action为check时返回。
    * detail  预检查或升级报告信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'targetVersion' => 'setTargetVersion',
            'startTime' => 'setStartTime',
            'checkExpirationTime' => 'setCheckExpirationTime',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  实例大版本升级状态 \" running\"：预检查或大版本升级进行中 \" success\"：预检查或大版本升级成功 \" failed\"：预检查或大版本升级失败
    * targetVersion  目标版本。
    * startTime  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    * checkExpirationTime  检查成功时，检查报告到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 该字段仅在action为check时返回。
    * detail  预检查或升级报告信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'targetVersion' => 'getTargetVersion',
            'startTime' => 'getStartTime',
            'checkExpirationTime' => 'getCheckExpirationTime',
            'detail' => 'getDetail'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['checkExpirationTime'] = isset($data['checkExpirationTime']) ? $data['checkExpirationTime'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
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
    * Gets status
    *  实例大版本升级状态 \" running\"：预检查或大版本升级进行中 \" success\"：预检查或大版本升级成功 \" failed\"：预检查或大版本升级失败
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 实例大版本升级状态 \" running\"：预检查或大版本升级进行中 \" success\"：预检查或大版本升级成功 \" failed\"：预检查或大版本升级失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets targetVersion
    *  目标版本。
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 目标版本。
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime 开始时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets checkExpirationTime
    *  检查成功时，检查报告到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 该字段仅在action为check时返回。
    *
    * @return string|null
    */
    public function getCheckExpirationTime()
    {
        return $this->container['checkExpirationTime'];
    }

    /**
    * Sets checkExpirationTime
    *
    * @param string|null $checkExpirationTime 检查成功时，检查报告到期时间，格式为“yyyy-mm-ddThh:mm:ssZ”。 其中，T指某个时间的开始；Z指时区偏移量，例如偏移1个小时显示为+0100。 该字段仅在action为check时返回。
    *
    * @return $this
    */
    public function setCheckExpirationTime($checkExpirationTime)
    {
        $this->container['checkExpirationTime'] = $checkExpirationTime;
        return $this;
    }

    /**
    * Gets detail
    *  预检查或升级报告信息。
    *
    * @return string|null
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param string|null $detail 预检查或升级报告信息。
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

