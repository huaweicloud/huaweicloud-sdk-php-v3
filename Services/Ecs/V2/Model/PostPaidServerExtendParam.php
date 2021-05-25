<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PostPaidServerExtendParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PostPaidServerExtendParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * chargingMode  计费模式：  - 0：按需计费。
    * regionId  云服务器所在区域ID。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * supportAutoRecovery  是否配置弹性云服务器自动恢复的功能。  - “true”：配置该功能 - “false”：不配置该功能  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照【“false”：不配置该功能】方式处理。 >  > 当marketType为spot时，不支持该功能。
    * enterpriseProjectId  企业项目ID。  > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见《[企业管理服务用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)》。 >  > 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * marketType  创建竞价实例时，需指定该参数的值为“spot”。  > 说明： >  > 当chargingMode=0时且marketType=spot时此参数生效。
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格。  > 说明： >  > 仅chargingMode=0且marketType=spot时，该参数设置后生效。 >  > 当chargingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。
    * diskPrior  是否支持先创建卷，再创建虚拟机。  “true”：配置该功能 “false”：不配置该功能
    * spotDurationHours  购买的竞价实例时长。  - 仅interruption_policy=immediate 时该字段有效 。 - pot_duration_hours大于0。最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_hours字段中查询。
    * interruptionPolicy  竞价实例中断策略，当前支持immediate。  - 当interruption_policy=immediate时表示释放策略为立即释放。
    * spotDurationCount  表示购买的“竞价实例时长”的个数。  - 仅spot_duration_hours>0 时该字段有效。 - spot_duration_hours小于6时，spot_duration_count值必须为1。 - spot_duration_hours等于6时，spot_duration_count大于等于1。  spot_duration_count的最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_count字段中查询。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'chargingMode' => 'int',
            'regionId' => 'string',
            'supportAutoRecovery' => 'bool',
            'enterpriseProjectId' => 'string',
            'marketType' => 'string',
            'spotPrice' => 'string',
            'diskPrior' => 'string',
            'spotDurationHours' => 'int',
            'interruptionPolicy' => 'string',
            'spotDurationCount' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * chargingMode  计费模式：  - 0：按需计费。
    * regionId  云服务器所在区域ID。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * supportAutoRecovery  是否配置弹性云服务器自动恢复的功能。  - “true”：配置该功能 - “false”：不配置该功能  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照【“false”：不配置该功能】方式处理。 >  > 当marketType为spot时，不支持该功能。
    * enterpriseProjectId  企业项目ID。  > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见《[企业管理服务用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)》。 >  > 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * marketType  创建竞价实例时，需指定该参数的值为“spot”。  > 说明： >  > 当chargingMode=0时且marketType=spot时此参数生效。
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格。  > 说明： >  > 仅chargingMode=0且marketType=spot时，该参数设置后生效。 >  > 当chargingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。
    * diskPrior  是否支持先创建卷，再创建虚拟机。  “true”：配置该功能 “false”：不配置该功能
    * spotDurationHours  购买的竞价实例时长。  - 仅interruption_policy=immediate 时该字段有效 。 - pot_duration_hours大于0。最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_hours字段中查询。
    * interruptionPolicy  竞价实例中断策略，当前支持immediate。  - 当interruption_policy=immediate时表示释放策略为立即释放。
    * spotDurationCount  表示购买的“竞价实例时长”的个数。  - 仅spot_duration_hours>0 时该字段有效。 - spot_duration_hours小于6时，spot_duration_count值必须为1。 - spot_duration_hours等于6时，spot_duration_count大于等于1。  spot_duration_count的最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_count字段中查询。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'chargingMode' => 'int32',
        'regionId' => null,
        'supportAutoRecovery' => null,
        'enterpriseProjectId' => null,
        'marketType' => null,
        'spotPrice' => null,
        'diskPrior' => null,
        'spotDurationHours' => 'int32',
        'interruptionPolicy' => null,
        'spotDurationCount' => 'int32'
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
    * chargingMode  计费模式：  - 0：按需计费。
    * regionId  云服务器所在区域ID。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * supportAutoRecovery  是否配置弹性云服务器自动恢复的功能。  - “true”：配置该功能 - “false”：不配置该功能  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照【“false”：不配置该功能】方式处理。 >  > 当marketType为spot时，不支持该功能。
    * enterpriseProjectId  企业项目ID。  > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见《[企业管理服务用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)》。 >  > 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * marketType  创建竞价实例时，需指定该参数的值为“spot”。  > 说明： >  > 当chargingMode=0时且marketType=spot时此参数生效。
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格。  > 说明： >  > 仅chargingMode=0且marketType=spot时，该参数设置后生效。 >  > 当chargingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。
    * diskPrior  是否支持先创建卷，再创建虚拟机。  “true”：配置该功能 “false”：不配置该功能
    * spotDurationHours  购买的竞价实例时长。  - 仅interruption_policy=immediate 时该字段有效 。 - pot_duration_hours大于0。最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_hours字段中查询。
    * interruptionPolicy  竞价实例中断策略，当前支持immediate。  - 当interruption_policy=immediate时表示释放策略为立即释放。
    * spotDurationCount  表示购买的“竞价实例时长”的个数。  - 仅spot_duration_hours>0 时该字段有效。 - spot_duration_hours小于6时，spot_duration_count值必须为1。 - spot_duration_hours等于6时，spot_duration_count大于等于1。  spot_duration_count的最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_count字段中查询。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'chargingMode' => 'chargingMode',
            'regionId' => 'regionID',
            'supportAutoRecovery' => 'support_auto_recovery',
            'enterpriseProjectId' => 'enterprise_project_id',
            'marketType' => 'marketType',
            'spotPrice' => 'spotPrice',
            'diskPrior' => 'diskPrior',
            'spotDurationHours' => 'spot_duration_hours',
            'interruptionPolicy' => 'interruption_policy',
            'spotDurationCount' => 'spot_duration_count'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * chargingMode  计费模式：  - 0：按需计费。
    * regionId  云服务器所在区域ID。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * supportAutoRecovery  是否配置弹性云服务器自动恢复的功能。  - “true”：配置该功能 - “false”：不配置该功能  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照【“false”：不配置该功能】方式处理。 >  > 当marketType为spot时，不支持该功能。
    * enterpriseProjectId  企业项目ID。  > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见《[企业管理服务用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)》。 >  > 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * marketType  创建竞价实例时，需指定该参数的值为“spot”。  > 说明： >  > 当chargingMode=0时且marketType=spot时此参数生效。
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格。  > 说明： >  > 仅chargingMode=0且marketType=spot时，该参数设置后生效。 >  > 当chargingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。
    * diskPrior  是否支持先创建卷，再创建虚拟机。  “true”：配置该功能 “false”：不配置该功能
    * spotDurationHours  购买的竞价实例时长。  - 仅interruption_policy=immediate 时该字段有效 。 - pot_duration_hours大于0。最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_hours字段中查询。
    * interruptionPolicy  竞价实例中断策略，当前支持immediate。  - 当interruption_policy=immediate时表示释放策略为立即释放。
    * spotDurationCount  表示购买的“竞价实例时长”的个数。  - 仅spot_duration_hours>0 时该字段有效。 - spot_duration_hours小于6时，spot_duration_count值必须为1。 - spot_duration_hours等于6时，spot_duration_count大于等于1。  spot_duration_count的最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_count字段中查询。
    *
    * @var string[]
    */
    protected static $setters = [
            'chargingMode' => 'setChargingMode',
            'regionId' => 'setRegionId',
            'supportAutoRecovery' => 'setSupportAutoRecovery',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'marketType' => 'setMarketType',
            'spotPrice' => 'setSpotPrice',
            'diskPrior' => 'setDiskPrior',
            'spotDurationHours' => 'setSpotDurationHours',
            'interruptionPolicy' => 'setInterruptionPolicy',
            'spotDurationCount' => 'setSpotDurationCount'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * chargingMode  计费模式：  - 0：按需计费。
    * regionId  云服务器所在区域ID。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    * supportAutoRecovery  是否配置弹性云服务器自动恢复的功能。  - “true”：配置该功能 - “false”：不配置该功能  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照【“false”：不配置该功能】方式处理。 >  > 当marketType为spot时，不支持该功能。
    * enterpriseProjectId  企业项目ID。  > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见《[企业管理服务用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)》。 >  > 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    * marketType  创建竞价实例时，需指定该参数的值为“spot”。  > 说明： >  > 当chargingMode=0时且marketType=spot时此参数生效。
    * spotPrice  用户愿意为竞价实例每小时支付的最高价格。  > 说明： >  > 仅chargingMode=0且marketType=spot时，该参数设置后生效。 >  > 当chargingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。
    * diskPrior  是否支持先创建卷，再创建虚拟机。  “true”：配置该功能 “false”：不配置该功能
    * spotDurationHours  购买的竞价实例时长。  - 仅interruption_policy=immediate 时该字段有效 。 - pot_duration_hours大于0。最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_hours字段中查询。
    * interruptionPolicy  竞价实例中断策略，当前支持immediate。  - 当interruption_policy=immediate时表示释放策略为立即释放。
    * spotDurationCount  表示购买的“竞价实例时长”的个数。  - 仅spot_duration_hours>0 时该字段有效。 - spot_duration_hours小于6时，spot_duration_count值必须为1。 - spot_duration_hours等于6时，spot_duration_count大于等于1。  spot_duration_count的最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_count字段中查询。
    *
    * @var string[]
    */
    protected static $getters = [
            'chargingMode' => 'getChargingMode',
            'regionId' => 'getRegionId',
            'supportAutoRecovery' => 'getSupportAutoRecovery',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'marketType' => 'getMarketType',
            'spotPrice' => 'getSpotPrice',
            'diskPrior' => 'getDiskPrior',
            'spotDurationHours' => 'getSpotDurationHours',
            'interruptionPolicy' => 'getInterruptionPolicy',
            'spotDurationCount' => 'getSpotDurationCount'
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
    const INTERRUPTION_POLICY_IMMEDIATE = 'immediate';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInterruptionPolicyAllowableValues()
    {
        return [
            self::INTERRUPTION_POLICY_IMMEDIATE,
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
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : 0;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['supportAutoRecovery'] = isset($data['supportAutoRecovery']) ? $data['supportAutoRecovery'] : false;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : '0';
        $this->container['marketType'] = isset($data['marketType']) ? $data['marketType'] : null;
        $this->container['spotPrice'] = isset($data['spotPrice']) ? $data['spotPrice'] : null;
        $this->container['diskPrior'] = isset($data['diskPrior']) ? $data['diskPrior'] : null;
        $this->container['spotDurationHours'] = isset($data['spotDurationHours']) ? $data['spotDurationHours'] : null;
        $this->container['interruptionPolicy'] = isset($data['interruptionPolicy']) ? $data['interruptionPolicy'] : null;
        $this->container['spotDurationCount'] = isset($data['spotDurationCount']) ? $data['spotDurationCount'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['chargingMode']) && ($this->container['chargingMode'] > 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be smaller than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && ($this->container['chargingMode'] < 0)) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getInterruptionPolicyAllowableValues();
                if (!is_null($this->container['interruptionPolicy']) && !in_array($this->container['interruptionPolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'interruptionPolicy', must be one of '%s'",
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
    * Gets chargingMode
    *  计费模式：  - 0：按需计费。
    *
    * @return int|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param int|null $chargingMode 计费模式：  - 0：按需计费。
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets regionId
    *  云服务器所在区域ID。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId 云服务器所在区域ID。  请参考[地区和终端节点](https://developer.huaweicloud.com/endpoint)获取。
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets supportAutoRecovery
    *  是否配置弹性云服务器自动恢复的功能。  - “true”：配置该功能 - “false”：不配置该功能  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照【“false”：不配置该功能】方式处理。 >  > 当marketType为spot时，不支持该功能。
    *
    * @return bool|null
    */
    public function getSupportAutoRecovery()
    {
        return $this->container['supportAutoRecovery'];
    }

    /**
    * Sets supportAutoRecovery
    *
    * @param bool|null $supportAutoRecovery 是否配置弹性云服务器自动恢复的功能。  - “true”：配置该功能 - “false”：不配置该功能  > 说明： >  > 此参数为boolean类型，若传入非boolean类型字符，程序将按照【“false”：不配置该功能】方式处理。 >  > 当marketType为spot时，不支持该功能。
    *
    * @return $this
    */
    public function setSupportAutoRecovery($supportAutoRecovery)
    {
        $this->container['supportAutoRecovery'] = $supportAutoRecovery;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目ID。  > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见《[企业管理服务用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)》。 >  > 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目ID。  > 说明： >  > 关于企业项目ID的获取及企业项目特性的详细信息，请参见《[企业管理服务用户指南](https://support.huaweicloud.com/usermanual-em/zh-cn_topic_0126101490.html)》。 >  > 该字段不传（或传为字符串“0”），则将资源绑定给默认企业项目。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets marketType
    *  创建竞价实例时，需指定该参数的值为“spot”。  > 说明： >  > 当chargingMode=0时且marketType=spot时此参数生效。
    *
    * @return string|null
    */
    public function getMarketType()
    {
        return $this->container['marketType'];
    }

    /**
    * Sets marketType
    *
    * @param string|null $marketType 创建竞价实例时，需指定该参数的值为“spot”。  > 说明： >  > 当chargingMode=0时且marketType=spot时此参数生效。
    *
    * @return $this
    */
    public function setMarketType($marketType)
    {
        $this->container['marketType'] = $marketType;
        return $this;
    }

    /**
    * Gets spotPrice
    *  用户愿意为竞价实例每小时支付的最高价格。  > 说明： >  > 仅chargingMode=0且marketType=spot时，该参数设置后生效。 >  > 当chargingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。
    *
    * @return string|null
    */
    public function getSpotPrice()
    {
        return $this->container['spotPrice'];
    }

    /**
    * Sets spotPrice
    *
    * @param string|null $spotPrice 用户愿意为竞价实例每小时支付的最高价格。  > 说明： >  > 仅chargingMode=0且marketType=spot时，该参数设置后生效。 >  > 当chargingMode=0且marketType=spot时，如果不传递spotPrice，默认使用按需购买的价格作为竞价。
    *
    * @return $this
    */
    public function setSpotPrice($spotPrice)
    {
        $this->container['spotPrice'] = $spotPrice;
        return $this;
    }

    /**
    * Gets diskPrior
    *  是否支持先创建卷，再创建虚拟机。  “true”：配置该功能 “false”：不配置该功能
    *
    * @return string|null
    */
    public function getDiskPrior()
    {
        return $this->container['diskPrior'];
    }

    /**
    * Sets diskPrior
    *
    * @param string|null $diskPrior 是否支持先创建卷，再创建虚拟机。  “true”：配置该功能 “false”：不配置该功能
    *
    * @return $this
    */
    public function setDiskPrior($diskPrior)
    {
        $this->container['diskPrior'] = $diskPrior;
        return $this;
    }

    /**
    * Gets spotDurationHours
    *  购买的竞价实例时长。  - 仅interruption_policy=immediate 时该字段有效 。 - pot_duration_hours大于0。最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_hours字段中查询。
    *
    * @return int|null
    */
    public function getSpotDurationHours()
    {
        return $this->container['spotDurationHours'];
    }

    /**
    * Sets spotDurationHours
    *
    * @param int|null $spotDurationHours 购买的竞价实例时长。  - 仅interruption_policy=immediate 时该字段有效 。 - pot_duration_hours大于0。最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_hours字段中查询。
    *
    * @return $this
    */
    public function setSpotDurationHours($spotDurationHours)
    {
        $this->container['spotDurationHours'] = $spotDurationHours;
        return $this;
    }

    /**
    * Gets interruptionPolicy
    *  竞价实例中断策略，当前支持immediate。  - 当interruption_policy=immediate时表示释放策略为立即释放。
    *
    * @return string|null
    */
    public function getInterruptionPolicy()
    {
        return $this->container['interruptionPolicy'];
    }

    /**
    * Sets interruptionPolicy
    *
    * @param string|null $interruptionPolicy 竞价实例中断策略，当前支持immediate。  - 当interruption_policy=immediate时表示释放策略为立即释放。
    *
    * @return $this
    */
    public function setInterruptionPolicy($interruptionPolicy)
    {
        $this->container['interruptionPolicy'] = $interruptionPolicy;
        return $this;
    }

    /**
    * Gets spotDurationCount
    *  表示购买的“竞价实例时长”的个数。  - 仅spot_duration_hours>0 时该字段有效。 - spot_duration_hours小于6时，spot_duration_count值必须为1。 - spot_duration_hours等于6时，spot_duration_count大于等于1。  spot_duration_count的最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_count字段中查询。
    *
    * @return int|null
    */
    public function getSpotDurationCount()
    {
        return $this->container['spotDurationCount'];
    }

    /**
    * Sets spotDurationCount
    *
    * @param int|null $spotDurationCount 表示购买的“竞价实例时长”的个数。  - 仅spot_duration_hours>0 时该字段有效。 - spot_duration_hours小于6时，spot_duration_count值必须为1。 - spot_duration_hours等于6时，spot_duration_count大于等于1。  spot_duration_count的最大值由预测系统给出可以从flavor的extra_specs的cond:spot_block:operation:longest_duration_count字段中查询。
    *
    * @return $this
    */
    public function setSpotDurationCount($spotDurationCount)
    {
        $this->container['spotDurationCount'] = $spotDurationCount;
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

