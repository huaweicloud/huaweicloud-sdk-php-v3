<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InputStreamInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InputStreamInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - RTMP_PULL - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，最大带宽限制。 未配置会默认选择BANDWIDTH最高的流
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputProtocol' => 'string',
            'sources' => '\HuaweiCloud\SDK\Live\V1\Model\SourcesInfo[]',
            'secondarySources' => '\HuaweiCloud\SDK\Live\V1\Model\SecondarySourcesInfo[]',
            'failoverConditions' => '\HuaweiCloud\SDK\Live\V1\Model\FailoverConditions',
            'maxBandwidthLimit' => 'int',
            'ipPortMode' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - RTMP_PULL - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，最大带宽限制。 未配置会默认选择BANDWIDTH最高的流
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputProtocol' => null,
        'sources' => null,
        'secondarySources' => null,
        'failoverConditions' => null,
        'maxBandwidthLimit' => 'int32',
        'ipPortMode' => null
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
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - RTMP_PULL - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，最大带宽限制。 未配置会默认选择BANDWIDTH最高的流
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputProtocol' => 'input_protocol',
            'sources' => 'sources',
            'secondarySources' => 'secondary_sources',
            'failoverConditions' => 'failover_conditions',
            'maxBandwidthLimit' => 'max_bandwidth_limit',
            'ipPortMode' => 'ip_port_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - RTMP_PULL - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，最大带宽限制。 未配置会默认选择BANDWIDTH最高的流
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    *
    * @var string[]
    */
    protected static $setters = [
            'inputProtocol' => 'setInputProtocol',
            'sources' => 'setSources',
            'secondarySources' => 'setSecondarySources',
            'failoverConditions' => 'setFailoverConditions',
            'maxBandwidthLimit' => 'setMaxBandwidthLimit',
            'ipPortMode' => 'setIpPortMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - RTMP_PULL - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，最大带宽限制。 未配置会默认选择BANDWIDTH最高的流
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    *
    * @var string[]
    */
    protected static $getters = [
            'inputProtocol' => 'getInputProtocol',
            'sources' => 'getSources',
            'secondarySources' => 'getSecondarySources',
            'failoverConditions' => 'getFailoverConditions',
            'maxBandwidthLimit' => 'getMaxBandwidthLimit',
            'ipPortMode' => 'getIpPortMode'
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
    const INPUT_PROTOCOL_FLV_PULL = 'FLV_PULL';
    const INPUT_PROTOCOL_RTMP_PUSH = 'RTMP_PUSH';
    const INPUT_PROTOCOL_RTMP_PULL = 'RTMP_PULL';
    const INPUT_PROTOCOL_HLS_PULL = 'HLS_PULL';
    const INPUT_PROTOCOL_SRT_PULL = 'SRT_PULL';
    const INPUT_PROTOCOL_SRT_PUSH = 'SRT_PUSH';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInputProtocolAllowableValues()
    {
        return [
            self::INPUT_PROTOCOL_FLV_PULL,
            self::INPUT_PROTOCOL_RTMP_PUSH,
            self::INPUT_PROTOCOL_RTMP_PULL,
            self::INPUT_PROTOCOL_HLS_PULL,
            self::INPUT_PROTOCOL_SRT_PULL,
            self::INPUT_PROTOCOL_SRT_PUSH,
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
        $this->container['inputProtocol'] = isset($data['inputProtocol']) ? $data['inputProtocol'] : null;
        $this->container['sources'] = isset($data['sources']) ? $data['sources'] : null;
        $this->container['secondarySources'] = isset($data['secondarySources']) ? $data['secondarySources'] : null;
        $this->container['failoverConditions'] = isset($data['failoverConditions']) ? $data['failoverConditions'] : null;
        $this->container['maxBandwidthLimit'] = isset($data['maxBandwidthLimit']) ? $data['maxBandwidthLimit'] : null;
        $this->container['ipPortMode'] = isset($data['ipPortMode']) ? $data['ipPortMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['inputProtocol'] === null) {
            $invalidProperties[] = "'inputProtocol' can't be null";
        }
            $allowedValues = $this->getInputProtocolAllowableValues();
                if (!is_null($this->container['inputProtocol']) && !in_array($this->container['inputProtocol'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'inputProtocol', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets inputProtocol
    *  频道入流协议 - FLV_PULL - RTMP_PUSH - RTMP_PULL - HLS_PULL - SRT_PULL - SRT_PUSH
    *
    * @return string
    */
    public function getInputProtocol()
    {
        return $this->container['inputProtocol'];
    }

    /**
    * Sets inputProtocol
    *
    * @param string $inputProtocol 频道入流协议 - FLV_PULL - RTMP_PUSH - RTMP_PULL - HLS_PULL - SRT_PULL - SRT_PUSH
    *
    * @return $this
    */
    public function setInputProtocol($inputProtocol)
    {
        $this->container['inputProtocol'] = $inputProtocol;
        return $this;
    }

    /**
    * Gets sources
    *  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\SourcesInfo[]|null
    */
    public function getSources()
    {
        return $this->container['sources'];
    }

    /**
    * Sets sources
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\SourcesInfo[]|null $sources 频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    *
    * @return $this
    */
    public function setSources($sources)
    {
        $this->container['sources'] = $sources;
        return $this;
    }

    /**
    * Gets secondarySources
    *  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\SecondarySourcesInfo[]|null
    */
    public function getSecondarySources()
    {
        return $this->container['secondarySources'];
    }

    /**
    * Sets secondarySources
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\SecondarySourcesInfo[]|null $secondarySources 备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    *
    * @return $this
    */
    public function setSecondarySources($secondarySources)
    {
        $this->container['secondarySources'] = $secondarySources;
        return $this;
    }

    /**
    * Gets failoverConditions
    *  failoverConditions
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\FailoverConditions|null
    */
    public function getFailoverConditions()
    {
        return $this->container['failoverConditions'];
    }

    /**
    * Sets failoverConditions
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\FailoverConditions|null $failoverConditions failoverConditions
    *
    * @return $this
    */
    public function setFailoverConditions($failoverConditions)
    {
        $this->container['failoverConditions'] = $failoverConditions;
        return $this;
    }

    /**
    * Gets maxBandwidthLimit
    *  当入流协议为HLS_PULL时，最大带宽限制。 未配置会默认选择BANDWIDTH最高的流
    *
    * @return int|null
    */
    public function getMaxBandwidthLimit()
    {
        return $this->container['maxBandwidthLimit'];
    }

    /**
    * Sets maxBandwidthLimit
    *
    * @param int|null $maxBandwidthLimit 当入流协议为HLS_PULL时，最大带宽限制。 未配置会默认选择BANDWIDTH最高的流
    *
    * @return $this
    */
    public function setMaxBandwidthLimit($maxBandwidthLimit)
    {
        $this->container['maxBandwidthLimit'] = $maxBandwidthLimit;
        return $this;
    }

    /**
    * Gets ipPortMode
    *  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    *
    * @return bool|null
    */
    public function getIpPortMode()
    {
        return $this->container['ipPortMode'];
    }

    /**
    * Sets ipPortMode
    *
    * @param bool|null $ipPortMode 当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    *
    * @return $this
    */
    public function setIpPortMode($ipPortMode)
    {
        $this->container['ipPortMode'] = $ipPortMode;
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

