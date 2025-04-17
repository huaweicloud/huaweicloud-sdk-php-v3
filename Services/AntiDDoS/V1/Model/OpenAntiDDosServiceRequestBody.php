<?php

namespace HuaweiCloud\SDK\AntiDDoS\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OpenAntiDDosServiceRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OpenAntiDDosServiceRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appTypeId  应用类型ID，固定值为0
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * enableL7  是否开启L7层防护，固定值为fasle
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * trafficPosId  流量分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appTypeId' => 'int',
            'cleaningAccessPosId' => 'int',
            'enableL7' => 'bool',
            'httpRequestPosId' => 'int',
            'trafficPosId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appTypeId  应用类型ID，固定值为0
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * enableL7  是否开启L7层防护，固定值为fasle
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * trafficPosId  流量分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appTypeId' => 'int64',
        'cleaningAccessPosId' => 'int64',
        'enableL7' => null,
        'httpRequestPosId' => 'int64',
        'trafficPosId' => 'int64'
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
    * appTypeId  应用类型ID，固定值为0
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * enableL7  是否开启L7层防护，固定值为fasle
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * trafficPosId  流量分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appTypeId' => 'app_type_id',
            'cleaningAccessPosId' => 'cleaning_access_pos_id',
            'enableL7' => 'enable_L7',
            'httpRequestPosId' => 'http_request_pos_id',
            'trafficPosId' => 'traffic_pos_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appTypeId  应用类型ID，固定值为0
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * enableL7  是否开启L7层防护，固定值为fasle
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * trafficPosId  流量分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @var string[]
    */
    protected static $setters = [
            'appTypeId' => 'setAppTypeId',
            'cleaningAccessPosId' => 'setCleaningAccessPosId',
            'enableL7' => 'setEnableL7',
            'httpRequestPosId' => 'setHttpRequestPosId',
            'trafficPosId' => 'setTrafficPosId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appTypeId  应用类型ID，固定值为0
    * cleaningAccessPosId  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    * enableL7  是否开启L7层防护，固定值为fasle
    * httpRequestPosId  HTTP请求数分段ID，固定值为1
    * trafficPosId  流量分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @var string[]
    */
    protected static $getters = [
            'appTypeId' => 'getAppTypeId',
            'cleaningAccessPosId' => 'getCleaningAccessPosId',
            'enableL7' => 'getEnableL7',
            'httpRequestPosId' => 'getHttpRequestPosId',
            'trafficPosId' => 'getTrafficPosId'
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
    const APP_TYPE_ID_0 = 0;
    const APP_TYPE_ID_1 = 1;
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getAppTypeIdAllowableValues()
    {
        return [
            self::APP_TYPE_ID_0,
            self::APP_TYPE_ID_1,
        ];
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
        $this->container['appTypeId'] = isset($data['appTypeId']) ? $data['appTypeId'] : null;
        $this->container['cleaningAccessPosId'] = isset($data['cleaningAccessPosId']) ? $data['cleaningAccessPosId'] : null;
        $this->container['enableL7'] = isset($data['enableL7']) ? $data['enableL7'] : null;
        $this->container['httpRequestPosId'] = isset($data['httpRequestPosId']) ? $data['httpRequestPosId'] : null;
        $this->container['trafficPosId'] = isset($data['trafficPosId']) ? $data['trafficPosId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['appTypeId'] === null) {
            $invalidProperties[] = "'appTypeId' can't be null";
        }
            $allowedValues = $this->getAppTypeIdAllowableValues();
                if (!is_null($this->container['appTypeId']) && !in_array($this->container['appTypeId'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'appTypeId', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['cleaningAccessPosId'] === null) {
            $invalidProperties[] = "'cleaningAccessPosId' can't be null";
        }
            if (($this->container['cleaningAccessPosId'] > 99)) {
                $invalidProperties[] = "invalid value for 'cleaningAccessPosId', must be smaller than or equal to 99.";
            }
            if (($this->container['cleaningAccessPosId'] < 1)) {
                $invalidProperties[] = "invalid value for 'cleaningAccessPosId', must be bigger than or equal to 1.";
            }
        if ($this->container['enableL7'] === null) {
            $invalidProperties[] = "'enableL7' can't be null";
        }
        if ($this->container['httpRequestPosId'] === null) {
            $invalidProperties[] = "'httpRequestPosId' can't be null";
        }
            if (($this->container['httpRequestPosId'] > 15)) {
                $invalidProperties[] = "invalid value for 'httpRequestPosId', must be smaller than or equal to 15.";
            }
            if (($this->container['httpRequestPosId'] < 1)) {
                $invalidProperties[] = "invalid value for 'httpRequestPosId', must be bigger than or equal to 1.";
            }
        if ($this->container['trafficPosId'] === null) {
            $invalidProperties[] = "'trafficPosId' can't be null";
        }
            if (($this->container['trafficPosId'] > 99)) {
                $invalidProperties[] = "invalid value for 'trafficPosId', must be smaller than or equal to 99.";
            }
            if (($this->container['trafficPosId'] < 1)) {
                $invalidProperties[] = "invalid value for 'trafficPosId', must be bigger than or equal to 1.";
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
    * Gets appTypeId
    *  应用类型ID，固定值为0
    *
    * @return int
    */
    public function getAppTypeId()
    {
        return $this->container['appTypeId'];
    }

    /**
    * Sets appTypeId
    *
    * @param int $appTypeId 应用类型ID，固定值为0
    *
    * @return $this
    */
    public function setAppTypeId($appTypeId)
    {
        $this->container['appTypeId'] = $appTypeId;
        return $this;
    }

    /**
    * Gets cleaningAccessPosId
    *  清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @return int
    */
    public function getCleaningAccessPosId()
    {
        return $this->container['cleaningAccessPosId'];
    }

    /**
    * Sets cleaningAccessPosId
    *
    * @param int $cleaningAccessPosId 清洗时访问限制分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @return $this
    */
    public function setCleaningAccessPosId($cleaningAccessPosId)
    {
        $this->container['cleaningAccessPosId'] = $cleaningAccessPosId;
        return $this;
    }

    /**
    * Gets enableL7
    *  是否开启L7层防护，固定值为fasle
    *
    * @return bool
    */
    public function getEnableL7()
    {
        return $this->container['enableL7'];
    }

    /**
    * Sets enableL7
    *
    * @param bool $enableL7 是否开启L7层防护，固定值为fasle
    *
    * @return $this
    */
    public function setEnableL7($enableL7)
    {
        $this->container['enableL7'] = $enableL7;
        return $this;
    }

    /**
    * Gets httpRequestPosId
    *  HTTP请求数分段ID，固定值为1
    *
    * @return int
    */
    public function getHttpRequestPosId()
    {
        return $this->container['httpRequestPosId'];
    }

    /**
    * Sets httpRequestPosId
    *
    * @param int $httpRequestPosId HTTP请求数分段ID，固定值为1
    *
    * @return $this
    */
    public function setHttpRequestPosId($httpRequestPosId)
    {
        $this->container['httpRequestPosId'] = $httpRequestPosId;
        return $this;
    }

    /**
    * Gets trafficPosId
    *  流量分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @return int
    */
    public function getTrafficPosId()
    {
        return $this->container['trafficPosId'];
    }

    /**
    * Sets trafficPosId
    *
    * @param int $trafficPosId 流量分段ID，取值范围：1：10M;2：30M;3：50M;4：70M;5：100M;6：150M;7：200M;8：250M;9：300M;10：500M;11：800M;88：1000M;99：默认防护。
    *
    * @return $this
    */
    public function setTrafficPosId($trafficPosId)
    {
        $this->container['trafficPosId'] = $trafficPosId;
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

