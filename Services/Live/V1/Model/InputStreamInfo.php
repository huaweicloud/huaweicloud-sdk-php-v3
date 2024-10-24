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
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，需要配置的最大带宽。  用户提供的拉流URL中，针对不同码率的音视频，均会携带带宽参数“BANDWIDTH”。 - 如果这里配置最大带宽，媒体直播服务从URL拉流时，会选择小于最大带宽且码率最大的音视频流，推流到源站。 - 如果这里未配置最大带宽，媒体直播服务从URL拉流时，会默认选择“BANDWIDTH”最高的音视频流，推流到源站。
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    * ipWhitelist  SRT_PUSH类型时，客户push ip白名单
    * scte35Source  广告的scte35信号源。  仅HLS_PULL类型的频道支持此配置，且目前仅支持SEGMENTS。
    * adTriggers  广告触发器配置。  包含如下取值： - Splice insert：拼接插入 - Provider advertisement：提供商广告 - Distributor advertisement：分销商广告 - Provider placement opportunity：提供商置放机会 - Distributor placement opportunity：分销商置放机会
    * audioSelectors  设置音频选择器，最多设置8个音频选择器
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'inputProtocol' => 'string',
            'sources' => '\HuaweiCloud\SDK\Live\V1\Model\SourcesInfo[]',
            'secondarySources' => '\HuaweiCloud\SDK\Live\V1\Model\SecondarySourcesInfo[]',
            'failoverConditions' => '\HuaweiCloud\SDK\Live\V1\Model\FailoverConditions',
            'maxBandwidthLimit' => 'int',
            'ipPortMode' => 'bool',
            'ipWhitelist' => 'string',
            'scte35Source' => 'string',
            'adTriggers' => 'string[]',
            'audioSelectors' => '\HuaweiCloud\SDK\Live\V1\Model\InputAudioSelector[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，需要配置的最大带宽。  用户提供的拉流URL中，针对不同码率的音视频，均会携带带宽参数“BANDWIDTH”。 - 如果这里配置最大带宽，媒体直播服务从URL拉流时，会选择小于最大带宽且码率最大的音视频流，推流到源站。 - 如果这里未配置最大带宽，媒体直播服务从URL拉流时，会默认选择“BANDWIDTH”最高的音视频流，推流到源站。
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    * ipWhitelist  SRT_PUSH类型时，客户push ip白名单
    * scte35Source  广告的scte35信号源。  仅HLS_PULL类型的频道支持此配置，且目前仅支持SEGMENTS。
    * adTriggers  广告触发器配置。  包含如下取值： - Splice insert：拼接插入 - Provider advertisement：提供商广告 - Distributor advertisement：分销商广告 - Provider placement opportunity：提供商置放机会 - Distributor placement opportunity：分销商置放机会
    * audioSelectors  设置音频选择器，最多设置8个音频选择器
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'inputProtocol' => null,
        'sources' => null,
        'secondarySources' => null,
        'failoverConditions' => null,
        'maxBandwidthLimit' => 'int32',
        'ipPortMode' => null,
        'ipWhitelist' => null,
        'scte35Source' => null,
        'adTriggers' => null,
        'audioSelectors' => null
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
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，需要配置的最大带宽。  用户提供的拉流URL中，针对不同码率的音视频，均会携带带宽参数“BANDWIDTH”。 - 如果这里配置最大带宽，媒体直播服务从URL拉流时，会选择小于最大带宽且码率最大的音视频流，推流到源站。 - 如果这里未配置最大带宽，媒体直播服务从URL拉流时，会默认选择“BANDWIDTH”最高的音视频流，推流到源站。
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    * ipWhitelist  SRT_PUSH类型时，客户push ip白名单
    * scte35Source  广告的scte35信号源。  仅HLS_PULL类型的频道支持此配置，且目前仅支持SEGMENTS。
    * adTriggers  广告触发器配置。  包含如下取值： - Splice insert：拼接插入 - Provider advertisement：提供商广告 - Distributor advertisement：分销商广告 - Provider placement opportunity：提供商置放机会 - Distributor placement opportunity：分销商置放机会
    * audioSelectors  设置音频选择器，最多设置8个音频选择器
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'inputProtocol' => 'input_protocol',
            'sources' => 'sources',
            'secondarySources' => 'secondary_sources',
            'failoverConditions' => 'failover_conditions',
            'maxBandwidthLimit' => 'max_bandwidth_limit',
            'ipPortMode' => 'ip_port_mode',
            'ipWhitelist' => 'ip_whitelist',
            'scte35Source' => 'scte35_source',
            'adTriggers' => 'ad_triggers',
            'audioSelectors' => 'audio_selectors'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，需要配置的最大带宽。  用户提供的拉流URL中，针对不同码率的音视频，均会携带带宽参数“BANDWIDTH”。 - 如果这里配置最大带宽，媒体直播服务从URL拉流时，会选择小于最大带宽且码率最大的音视频流，推流到源站。 - 如果这里未配置最大带宽，媒体直播服务从URL拉流时，会默认选择“BANDWIDTH”最高的音视频流，推流到源站。
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    * ipWhitelist  SRT_PUSH类型时，客户push ip白名单
    * scte35Source  广告的scte35信号源。  仅HLS_PULL类型的频道支持此配置，且目前仅支持SEGMENTS。
    * adTriggers  广告触发器配置。  包含如下取值： - Splice insert：拼接插入 - Provider advertisement：提供商广告 - Distributor advertisement：分销商广告 - Provider placement opportunity：提供商置放机会 - Distributor placement opportunity：分销商置放机会
    * audioSelectors  设置音频选择器，最多设置8个音频选择器
    *
    * @var string[]
    */
    protected static $setters = [
            'inputProtocol' => 'setInputProtocol',
            'sources' => 'setSources',
            'secondarySources' => 'setSecondarySources',
            'failoverConditions' => 'setFailoverConditions',
            'maxBandwidthLimit' => 'setMaxBandwidthLimit',
            'ipPortMode' => 'setIpPortMode',
            'ipWhitelist' => 'setIpWhitelist',
            'scte35Source' => 'setScte35Source',
            'adTriggers' => 'setAdTriggers',
            'audioSelectors' => 'setAudioSelectors'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * inputProtocol  频道入流协议 - FLV_PULL - RTMP_PUSH - HLS_PULL - SRT_PULL - SRT_PUSH
    * sources  频道主源流信息。入流协议为RTMP_PUSH和SRT_PUSH时，非必填项。其他情况下，均为必填项。
    * secondarySources  备入流数组，非必填项。如果有备入流，则主备入流必须保证路数、codec和分辨率均一致。入流协议为RTMP_PUSH时，无需填写。
    * failoverConditions  failoverConditions
    * maxBandwidthLimit  当入流协议为HLS_PULL时，需要配置的最大带宽。  用户提供的拉流URL中，针对不同码率的音视频，均会携带带宽参数“BANDWIDTH”。 - 如果这里配置最大带宽，媒体直播服务从URL拉流时，会选择小于最大带宽且码率最大的音视频流，推流到源站。 - 如果这里未配置最大带宽，媒体直播服务从URL拉流时，会默认选择“BANDWIDTH”最高的音视频流，推流到源站。
    * ipPortMode  当推流协议为SRT_PUSH时，如果配置了直推源站，编码器不支持输入streamid，需要打开设置为true
    * ipWhitelist  SRT_PUSH类型时，客户push ip白名单
    * scte35Source  广告的scte35信号源。  仅HLS_PULL类型的频道支持此配置，且目前仅支持SEGMENTS。
    * adTriggers  广告触发器配置。  包含如下取值： - Splice insert：拼接插入 - Provider advertisement：提供商广告 - Distributor advertisement：分销商广告 - Provider placement opportunity：提供商置放机会 - Distributor placement opportunity：分销商置放机会
    * audioSelectors  设置音频选择器，最多设置8个音频选择器
    *
    * @var string[]
    */
    protected static $getters = [
            'inputProtocol' => 'getInputProtocol',
            'sources' => 'getSources',
            'secondarySources' => 'getSecondarySources',
            'failoverConditions' => 'getFailoverConditions',
            'maxBandwidthLimit' => 'getMaxBandwidthLimit',
            'ipPortMode' => 'getIpPortMode',
            'ipWhitelist' => 'getIpWhitelist',
            'scte35Source' => 'getScte35Source',
            'adTriggers' => 'getAdTriggers',
            'audioSelectors' => 'getAudioSelectors'
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
        $this->container['ipWhitelist'] = isset($data['ipWhitelist']) ? $data['ipWhitelist'] : null;
        $this->container['scte35Source'] = isset($data['scte35Source']) ? $data['scte35Source'] : null;
        $this->container['adTriggers'] = isset($data['adTriggers']) ? $data['adTriggers'] : null;
        $this->container['audioSelectors'] = isset($data['audioSelectors']) ? $data['audioSelectors'] : null;
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

            if (!is_null($this->container['ipWhitelist']) && (mb_strlen($this->container['ipWhitelist']) > 256)) {
                $invalidProperties[] = "invalid value for 'ipWhitelist', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ipWhitelist']) && (mb_strlen($this->container['ipWhitelist']) < 0)) {
                $invalidProperties[] = "invalid value for 'ipWhitelist', the character length must be bigger than or equal to 0.";
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
    *  频道入流协议 - FLV_PULL - RTMP_PUSH - HLS_PULL - SRT_PULL - SRT_PUSH
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
    * @param string $inputProtocol 频道入流协议 - FLV_PULL - RTMP_PUSH - HLS_PULL - SRT_PULL - SRT_PUSH
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
    *  当入流协议为HLS_PULL时，需要配置的最大带宽。  用户提供的拉流URL中，针对不同码率的音视频，均会携带带宽参数“BANDWIDTH”。 - 如果这里配置最大带宽，媒体直播服务从URL拉流时，会选择小于最大带宽且码率最大的音视频流，推流到源站。 - 如果这里未配置最大带宽，媒体直播服务从URL拉流时，会默认选择“BANDWIDTH”最高的音视频流，推流到源站。
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
    * @param int|null $maxBandwidthLimit 当入流协议为HLS_PULL时，需要配置的最大带宽。  用户提供的拉流URL中，针对不同码率的音视频，均会携带带宽参数“BANDWIDTH”。 - 如果这里配置最大带宽，媒体直播服务从URL拉流时，会选择小于最大带宽且码率最大的音视频流，推流到源站。 - 如果这里未配置最大带宽，媒体直播服务从URL拉流时，会默认选择“BANDWIDTH”最高的音视频流，推流到源站。
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
    * Gets ipWhitelist
    *  SRT_PUSH类型时，客户push ip白名单
    *
    * @return string|null
    */
    public function getIpWhitelist()
    {
        return $this->container['ipWhitelist'];
    }

    /**
    * Sets ipWhitelist
    *
    * @param string|null $ipWhitelist SRT_PUSH类型时，客户push ip白名单
    *
    * @return $this
    */
    public function setIpWhitelist($ipWhitelist)
    {
        $this->container['ipWhitelist'] = $ipWhitelist;
        return $this;
    }

    /**
    * Gets scte35Source
    *  广告的scte35信号源。  仅HLS_PULL类型的频道支持此配置，且目前仅支持SEGMENTS。
    *
    * @return string|null
    */
    public function getScte35Source()
    {
        return $this->container['scte35Source'];
    }

    /**
    * Sets scte35Source
    *
    * @param string|null $scte35Source 广告的scte35信号源。  仅HLS_PULL类型的频道支持此配置，且目前仅支持SEGMENTS。
    *
    * @return $this
    */
    public function setScte35Source($scte35Source)
    {
        $this->container['scte35Source'] = $scte35Source;
        return $this;
    }

    /**
    * Gets adTriggers
    *  广告触发器配置。  包含如下取值： - Splice insert：拼接插入 - Provider advertisement：提供商广告 - Distributor advertisement：分销商广告 - Provider placement opportunity：提供商置放机会 - Distributor placement opportunity：分销商置放机会
    *
    * @return string[]|null
    */
    public function getAdTriggers()
    {
        return $this->container['adTriggers'];
    }

    /**
    * Sets adTriggers
    *
    * @param string[]|null $adTriggers 广告触发器配置。  包含如下取值： - Splice insert：拼接插入 - Provider advertisement：提供商广告 - Distributor advertisement：分销商广告 - Provider placement opportunity：提供商置放机会 - Distributor placement opportunity：分销商置放机会
    *
    * @return $this
    */
    public function setAdTriggers($adTriggers)
    {
        $this->container['adTriggers'] = $adTriggers;
        return $this;
    }

    /**
    * Gets audioSelectors
    *  设置音频选择器，最多设置8个音频选择器
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\InputAudioSelector[]|null
    */
    public function getAudioSelectors()
    {
        return $this->container['audioSelectors'];
    }

    /**
    * Sets audioSelectors
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\InputAudioSelector[]|null $audioSelectors 设置音频选择器，最多设置8个音频选择器
    *
    * @return $this
    */
    public function setAudioSelectors($audioSelectors)
    {
        $this->container['audioSelectors'] = $audioSelectors;
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

