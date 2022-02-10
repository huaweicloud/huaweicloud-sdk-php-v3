<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DemandProductInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DemandProductInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  |参数名称：ID标识| |参数约束及描述：同一次询价中不能重复，用于标识返回询价结果和请求的映射关系|
    * cloudServiceType  |参数名称：用户购买云服务产品的云服务类型| |参数约束及描述：例如EC2，云服务类型为hws.service.type.ec2|
    * resourceType  |参数名称：用户购买云服务产品的资源类型| |参数约束及描述：例如EC2中的VM，资源类型为hws.resource.type.vm。ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供|
    * resourceSpec  |参数名称：用户购买云服务产品的资源规格| |参数约束及描述：例如VM的小型规格，资源规格为m1.tiny|
    * region  |参数名称：云服务区编码| |参数约束及描述：云服务区编码|
    * availableZone  |参数名称：可用区标识| |参数约束及描述：可用区标识|
    * resourceSize  |参数名称：资源容量大小| |参数约束及描述：例如购买的卷大小或带宽大小，只有线性产品才有这个字段|
    * sizeMeasureId  |参数名称：资源容量度量标识| |参数约束及描述：枚举值如下：15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个只有线性产品才有这个字段|
    * usageFactor  |参数名称：使用量因子编码| |参数约束及描述：云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration具体每种云服务使用什么样的计费因子，需要找具体云服务确认，全集请参考|
    * usageValue  |参数名称：使用量值| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时|
    * usageMeasureId  |参数名称：使用量单位标识| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下：4：小时全量枚举如下：0：天（时长）；1：元（货币）；2：角（货币）；3：分（货币）；4：小时（时长）；5：分钟（时长）；6：秒（时长）；7：EB（流量）；8：PB（流量）；9：TB（流量）；10：GB（流量）；11：MB（流量）；12：KB（流量）；13：Byte（流量）；14：个(次)（数量）；15：Mbps（流量）；16：Byte（容量）；17：GB（容量）；18：KLOC（行数）；19：年（周期）；20：月（周期）；21：MB（容量）；22：赫兹（频率）；23：核（数量）；24：天（周期）；25：小时（周期）；30：个数（个数）；31：千次（数量）；32：百万次（数量）；33：十亿次（数量）；34：bps（带宽速率）；35：kbps（带宽速率）；36：Mbps（带宽速率）；37：Gbps（带宽速率）；38：Tbps（带宽速率）；39：GB-秒（容量时长）；40：次（数量）；41：个（数量）；42：千个（数量）；43：张（数量）；44：千张（数量）；45：每秒查询率（查询速率）；46：人/天（数量）；47：TB（容量）；48：PB（容量）。具体某个云服务应该使用什么单位，需要和云服务确认。|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0，默认为1|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'resourceSpec' => 'string',
            'region' => 'string',
            'availableZone' => 'string',
            'resourceSize' => 'int',
            'sizeMeasureId' => 'int',
            'usageFactor' => 'string',
            'usageValue' => 'float',
            'usageMeasureId' => 'int',
            'subscriptionNum' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  |参数名称：ID标识| |参数约束及描述：同一次询价中不能重复，用于标识返回询价结果和请求的映射关系|
    * cloudServiceType  |参数名称：用户购买云服务产品的云服务类型| |参数约束及描述：例如EC2，云服务类型为hws.service.type.ec2|
    * resourceType  |参数名称：用户购买云服务产品的资源类型| |参数约束及描述：例如EC2中的VM，资源类型为hws.resource.type.vm。ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供|
    * resourceSpec  |参数名称：用户购买云服务产品的资源规格| |参数约束及描述：例如VM的小型规格，资源规格为m1.tiny|
    * region  |参数名称：云服务区编码| |参数约束及描述：云服务区编码|
    * availableZone  |参数名称：可用区标识| |参数约束及描述：可用区标识|
    * resourceSize  |参数名称：资源容量大小| |参数约束及描述：例如购买的卷大小或带宽大小，只有线性产品才有这个字段|
    * sizeMeasureId  |参数名称：资源容量度量标识| |参数约束及描述：枚举值如下：15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个只有线性产品才有这个字段|
    * usageFactor  |参数名称：使用量因子编码| |参数约束及描述：云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration具体每种云服务使用什么样的计费因子，需要找具体云服务确认，全集请参考|
    * usageValue  |参数名称：使用量值| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时|
    * usageMeasureId  |参数名称：使用量单位标识| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下：4：小时全量枚举如下：0：天（时长）；1：元（货币）；2：角（货币）；3：分（货币）；4：小时（时长）；5：分钟（时长）；6：秒（时长）；7：EB（流量）；8：PB（流量）；9：TB（流量）；10：GB（流量）；11：MB（流量）；12：KB（流量）；13：Byte（流量）；14：个(次)（数量）；15：Mbps（流量）；16：Byte（容量）；17：GB（容量）；18：KLOC（行数）；19：年（周期）；20：月（周期）；21：MB（容量）；22：赫兹（频率）；23：核（数量）；24：天（周期）；25：小时（周期）；30：个数（个数）；31：千次（数量）；32：百万次（数量）；33：十亿次（数量）；34：bps（带宽速率）；35：kbps（带宽速率）；36：Mbps（带宽速率）；37：Gbps（带宽速率）；38：Tbps（带宽速率）；39：GB-秒（容量时长）；40：次（数量）；41：个（数量）；42：千个（数量）；43：张（数量）；44：千张（数量）；45：每秒查询率（查询速率）；46：人/天（数量）；47：TB（容量）；48：PB（容量）。具体某个云服务应该使用什么单位，需要和云服务确认。|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0，默认为1|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'cloudServiceType' => null,
        'resourceType' => null,
        'resourceSpec' => null,
        'region' => null,
        'availableZone' => null,
        'resourceSize' => 'int32',
        'sizeMeasureId' => 'int32',
        'usageFactor' => null,
        'usageValue' => 'bigdecimal',
        'usageMeasureId' => 'int32',
        'subscriptionNum' => 'int32'
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
    * id  |参数名称：ID标识| |参数约束及描述：同一次询价中不能重复，用于标识返回询价结果和请求的映射关系|
    * cloudServiceType  |参数名称：用户购买云服务产品的云服务类型| |参数约束及描述：例如EC2，云服务类型为hws.service.type.ec2|
    * resourceType  |参数名称：用户购买云服务产品的资源类型| |参数约束及描述：例如EC2中的VM，资源类型为hws.resource.type.vm。ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供|
    * resourceSpec  |参数名称：用户购买云服务产品的资源规格| |参数约束及描述：例如VM的小型规格，资源规格为m1.tiny|
    * region  |参数名称：云服务区编码| |参数约束及描述：云服务区编码|
    * availableZone  |参数名称：可用区标识| |参数约束及描述：可用区标识|
    * resourceSize  |参数名称：资源容量大小| |参数约束及描述：例如购买的卷大小或带宽大小，只有线性产品才有这个字段|
    * sizeMeasureId  |参数名称：资源容量度量标识| |参数约束及描述：枚举值如下：15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个只有线性产品才有这个字段|
    * usageFactor  |参数名称：使用量因子编码| |参数约束及描述：云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration具体每种云服务使用什么样的计费因子，需要找具体云服务确认，全集请参考|
    * usageValue  |参数名称：使用量值| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时|
    * usageMeasureId  |参数名称：使用量单位标识| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下：4：小时全量枚举如下：0：天（时长）；1：元（货币）；2：角（货币）；3：分（货币）；4：小时（时长）；5：分钟（时长）；6：秒（时长）；7：EB（流量）；8：PB（流量）；9：TB（流量）；10：GB（流量）；11：MB（流量）；12：KB（流量）；13：Byte（流量）；14：个(次)（数量）；15：Mbps（流量）；16：Byte（容量）；17：GB（容量）；18：KLOC（行数）；19：年（周期）；20：月（周期）；21：MB（容量）；22：赫兹（频率）；23：核（数量）；24：天（周期）；25：小时（周期）；30：个数（个数）；31：千次（数量）；32：百万次（数量）；33：十亿次（数量）；34：bps（带宽速率）；35：kbps（带宽速率）；36：Mbps（带宽速率）；37：Gbps（带宽速率）；38：Tbps（带宽速率）；39：GB-秒（容量时长）；40：次（数量）；41：个（数量）；42：千个（数量）；43：张（数量）；44：千张（数量）；45：每秒查询率（查询速率）；46：人/天（数量）；47：TB（容量）；48：PB（容量）。具体某个云服务应该使用什么单位，需要和云服务确认。|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0，默认为1|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'resourceSpec' => 'resource_spec',
            'region' => 'region',
            'availableZone' => 'available_zone',
            'resourceSize' => 'resource_size',
            'sizeMeasureId' => 'size_measure_id',
            'usageFactor' => 'usage_factor',
            'usageValue' => 'usage_value',
            'usageMeasureId' => 'usage_measure_id',
            'subscriptionNum' => 'subscription_num'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  |参数名称：ID标识| |参数约束及描述：同一次询价中不能重复，用于标识返回询价结果和请求的映射关系|
    * cloudServiceType  |参数名称：用户购买云服务产品的云服务类型| |参数约束及描述：例如EC2，云服务类型为hws.service.type.ec2|
    * resourceType  |参数名称：用户购买云服务产品的资源类型| |参数约束及描述：例如EC2中的VM，资源类型为hws.resource.type.vm。ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供|
    * resourceSpec  |参数名称：用户购买云服务产品的资源规格| |参数约束及描述：例如VM的小型规格，资源规格为m1.tiny|
    * region  |参数名称：云服务区编码| |参数约束及描述：云服务区编码|
    * availableZone  |参数名称：可用区标识| |参数约束及描述：可用区标识|
    * resourceSize  |参数名称：资源容量大小| |参数约束及描述：例如购买的卷大小或带宽大小，只有线性产品才有这个字段|
    * sizeMeasureId  |参数名称：资源容量度量标识| |参数约束及描述：枚举值如下：15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个只有线性产品才有这个字段|
    * usageFactor  |参数名称：使用量因子编码| |参数约束及描述：云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration具体每种云服务使用什么样的计费因子，需要找具体云服务确认，全集请参考|
    * usageValue  |参数名称：使用量值| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时|
    * usageMeasureId  |参数名称：使用量单位标识| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下：4：小时全量枚举如下：0：天（时长）；1：元（货币）；2：角（货币）；3：分（货币）；4：小时（时长）；5：分钟（时长）；6：秒（时长）；7：EB（流量）；8：PB（流量）；9：TB（流量）；10：GB（流量）；11：MB（流量）；12：KB（流量）；13：Byte（流量）；14：个(次)（数量）；15：Mbps（流量）；16：Byte（容量）；17：GB（容量）；18：KLOC（行数）；19：年（周期）；20：月（周期）；21：MB（容量）；22：赫兹（频率）；23：核（数量）；24：天（周期）；25：小时（周期）；30：个数（个数）；31：千次（数量）；32：百万次（数量）；33：十亿次（数量）；34：bps（带宽速率）；35：kbps（带宽速率）；36：Mbps（带宽速率）；37：Gbps（带宽速率）；38：Tbps（带宽速率）；39：GB-秒（容量时长）；40：次（数量）；41：个（数量）；42：千个（数量）；43：张（数量）；44：千张（数量）；45：每秒查询率（查询速率）；46：人/天（数量）；47：TB（容量）；48：PB（容量）。具体某个云服务应该使用什么单位，需要和云服务确认。|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0，默认为1|
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'resourceSpec' => 'setResourceSpec',
            'region' => 'setRegion',
            'availableZone' => 'setAvailableZone',
            'resourceSize' => 'setResourceSize',
            'sizeMeasureId' => 'setSizeMeasureId',
            'usageFactor' => 'setUsageFactor',
            'usageValue' => 'setUsageValue',
            'usageMeasureId' => 'setUsageMeasureId',
            'subscriptionNum' => 'setSubscriptionNum'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  |参数名称：ID标识| |参数约束及描述：同一次询价中不能重复，用于标识返回询价结果和请求的映射关系|
    * cloudServiceType  |参数名称：用户购买云服务产品的云服务类型| |参数约束及描述：例如EC2，云服务类型为hws.service.type.ec2|
    * resourceType  |参数名称：用户购买云服务产品的资源类型| |参数约束及描述：例如EC2中的VM，资源类型为hws.resource.type.vm。ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供|
    * resourceSpec  |参数名称：用户购买云服务产品的资源规格| |参数约束及描述：例如VM的小型规格，资源规格为m1.tiny|
    * region  |参数名称：云服务区编码| |参数约束及描述：云服务区编码|
    * availableZone  |参数名称：可用区标识| |参数约束及描述：可用区标识|
    * resourceSize  |参数名称：资源容量大小| |参数约束及描述：例如购买的卷大小或带宽大小，只有线性产品才有这个字段|
    * sizeMeasureId  |参数名称：资源容量度量标识| |参数约束及描述：枚举值如下：15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个只有线性产品才有这个字段|
    * usageFactor  |参数名称：使用量因子编码| |参数约束及描述：云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration具体每种云服务使用什么样的计费因子，需要找具体云服务确认，全集请参考|
    * usageValue  |参数名称：使用量值| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时|
    * usageMeasureId  |参数名称：使用量单位标识| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下：4：小时全量枚举如下：0：天（时长）；1：元（货币）；2：角（货币）；3：分（货币）；4：小时（时长）；5：分钟（时长）；6：秒（时长）；7：EB（流量）；8：PB（流量）；9：TB（流量）；10：GB（流量）；11：MB（流量）；12：KB（流量）；13：Byte（流量）；14：个(次)（数量）；15：Mbps（流量）；16：Byte（容量）；17：GB（容量）；18：KLOC（行数）；19：年（周期）；20：月（周期）；21：MB（容量）；22：赫兹（频率）；23：核（数量）；24：天（周期）；25：小时（周期）；30：个数（个数）；31：千次（数量）；32：百万次（数量）；33：十亿次（数量）；34：bps（带宽速率）；35：kbps（带宽速率）；36：Mbps（带宽速率）；37：Gbps（带宽速率）；38：Tbps（带宽速率）；39：GB-秒（容量时长）；40：次（数量）；41：个（数量）；42：千个（数量）；43：张（数量）；44：千张（数量）；45：每秒查询率（查询速率）；46：人/天（数量）；47：TB（容量）；48：PB（容量）。具体某个云服务应该使用什么单位，需要和云服务确认。|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0，默认为1|
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'resourceSpec' => 'getResourceSpec',
            'region' => 'getRegion',
            'availableZone' => 'getAvailableZone',
            'resourceSize' => 'getResourceSize',
            'sizeMeasureId' => 'getSizeMeasureId',
            'usageFactor' => 'getUsageFactor',
            'usageValue' => 'getUsageValue',
            'usageMeasureId' => 'getUsageMeasureId',
            'subscriptionNum' => 'getSubscriptionNum'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['resourceSpec'] = isset($data['resourceSpec']) ? $data['resourceSpec'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['availableZone'] = isset($data['availableZone']) ? $data['availableZone'] : null;
        $this->container['resourceSize'] = isset($data['resourceSize']) ? $data['resourceSize'] : null;
        $this->container['sizeMeasureId'] = isset($data['sizeMeasureId']) ? $data['sizeMeasureId'] : null;
        $this->container['usageFactor'] = isset($data['usageFactor']) ? $data['usageFactor'] : null;
        $this->container['usageValue'] = isset($data['usageValue']) ? $data['usageValue'] : null;
        $this->container['usageMeasureId'] = isset($data['usageMeasureId']) ? $data['usageMeasureId'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            if ((mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
            if ((mb_strlen($this->container['cloudServiceType']) > 400)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 400.";
            }
            if ((mb_strlen($this->container['cloudServiceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 400)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 400.";
            }
            if ((mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceSpec'] === null) {
            $invalidProperties[] = "'resourceSpec' can't be null";
        }
            if ((mb_strlen($this->container['resourceSpec']) > 400)) {
                $invalidProperties[] = "invalid value for 'resourceSpec', the character length must be smaller than or equal to 400.";
            }
            if ((mb_strlen($this->container['resourceSpec']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSpec', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['region'] === null) {
            $invalidProperties[] = "'region' can't be null";
        }
            if ((mb_strlen($this->container['region']) > 64)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['availableZone']) && (mb_strlen($this->container['availableZone']) > 64)) {
                $invalidProperties[] = "invalid value for 'availableZone', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['availableZone']) && (mb_strlen($this->container['availableZone']) < 0)) {
                $invalidProperties[] = "invalid value for 'availableZone', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceSize']) && ($this->container['resourceSize'] > 214783647)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be smaller than or equal to 214783647.";
            }
            if (!is_null($this->container['resourceSize']) && ($this->container['resourceSize'] < 1)) {
                $invalidProperties[] = "invalid value for 'resourceSize', must be bigger than or equal to 1.";
            }
        if ($this->container['usageFactor'] === null) {
            $invalidProperties[] = "'usageFactor' can't be null";
        }
            if ((mb_strlen($this->container['usageFactor']) > 400)) {
                $invalidProperties[] = "invalid value for 'usageFactor', the character length must be smaller than or equal to 400.";
            }
            if ((mb_strlen($this->container['usageFactor']) < 1)) {
                $invalidProperties[] = "invalid value for 'usageFactor', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['usageValue'] === null) {
            $invalidProperties[] = "'usageValue' can't be null";
        }
        if ($this->container['usageMeasureId'] === null) {
            $invalidProperties[] = "'usageMeasureId' can't be null";
        }
            if (($this->container['usageMeasureId'] > 100)) {
                $invalidProperties[] = "invalid value for 'usageMeasureId', must be smaller than or equal to 100.";
            }
            if (($this->container['usageMeasureId'] < 0)) {
                $invalidProperties[] = "invalid value for 'usageMeasureId', must be bigger than or equal to 0.";
            }
        if ($this->container['subscriptionNum'] === null) {
            $invalidProperties[] = "'subscriptionNum' can't be null";
        }
            if (($this->container['subscriptionNum'] > 10000)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be smaller than or equal to 10000.";
            }
            if (($this->container['subscriptionNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'subscriptionNum', must be bigger than or equal to 1.";
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
    * Gets id
    *  |参数名称：ID标识| |参数约束及描述：同一次询价中不能重复，用于标识返回询价结果和请求的映射关系|
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id |参数名称：ID标识| |参数约束及描述：同一次询价中不能重复，用于标识返回询价结果和请求的映射关系|
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets cloudServiceType
    *  |参数名称：用户购买云服务产品的云服务类型| |参数约束及描述：例如EC2，云服务类型为hws.service.type.ec2|
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType |参数名称：用户购买云服务产品的云服务类型| |参数约束及描述：例如EC2，云服务类型为hws.service.type.ec2|
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  |参数名称：用户购买云服务产品的资源类型| |参数约束及描述：例如EC2中的VM，资源类型为hws.resource.type.vm。ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供|
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType |参数名称：用户购买云服务产品的资源类型| |参数约束及描述：例如EC2中的VM，资源类型为hws.resource.type.vm。ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供|
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets resourceSpec
    *  |参数名称：用户购买云服务产品的资源规格| |参数约束及描述：例如VM的小型规格，资源规格为m1.tiny|
    *
    * @return string
    */
    public function getResourceSpec()
    {
        return $this->container['resourceSpec'];
    }

    /**
    * Sets resourceSpec
    *
    * @param string $resourceSpec |参数名称：用户购买云服务产品的资源规格| |参数约束及描述：例如VM的小型规格，资源规格为m1.tiny|
    *
    * @return $this
    */
    public function setResourceSpec($resourceSpec)
    {
        $this->container['resourceSpec'] = $resourceSpec;
        return $this;
    }

    /**
    * Gets region
    *  |参数名称：云服务区编码| |参数约束及描述：云服务区编码|
    *
    * @return string
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string $region |参数名称：云服务区编码| |参数约束及描述：云服务区编码|
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets availableZone
    *  |参数名称：可用区标识| |参数约束及描述：可用区标识|
    *
    * @return string|null
    */
    public function getAvailableZone()
    {
        return $this->container['availableZone'];
    }

    /**
    * Sets availableZone
    *
    * @param string|null $availableZone |参数名称：可用区标识| |参数约束及描述：可用区标识|
    *
    * @return $this
    */
    public function setAvailableZone($availableZone)
    {
        $this->container['availableZone'] = $availableZone;
        return $this;
    }

    /**
    * Gets resourceSize
    *  |参数名称：资源容量大小| |参数约束及描述：例如购买的卷大小或带宽大小，只有线性产品才有这个字段|
    *
    * @return int|null
    */
    public function getResourceSize()
    {
        return $this->container['resourceSize'];
    }

    /**
    * Sets resourceSize
    *
    * @param int|null $resourceSize |参数名称：资源容量大小| |参数约束及描述：例如购买的卷大小或带宽大小，只有线性产品才有这个字段|
    *
    * @return $this
    */
    public function setResourceSize($resourceSize)
    {
        $this->container['resourceSize'] = $resourceSize;
        return $this;
    }

    /**
    * Gets sizeMeasureId
    *  |参数名称：资源容量度量标识| |参数约束及描述：枚举值如下：15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个只有线性产品才有这个字段|
    *
    * @return int|null
    */
    public function getSizeMeasureId()
    {
        return $this->container['sizeMeasureId'];
    }

    /**
    * Sets sizeMeasureId
    *
    * @param int|null $sizeMeasureId |参数名称：资源容量度量标识| |参数约束及描述：枚举值如下：15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个只有线性产品才有这个字段|
    *
    * @return $this
    */
    public function setSizeMeasureId($sizeMeasureId)
    {
        $this->container['sizeMeasureId'] = $sizeMeasureId;
        return $this;
    }

    /**
    * Gets usageFactor
    *  |参数名称：使用量因子编码| |参数约束及描述：云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration具体每种云服务使用什么样的计费因子，需要找具体云服务确认，全集请参考|
    *
    * @return string
    */
    public function getUsageFactor()
    {
        return $this->container['usageFactor'];
    }

    /**
    * Sets usageFactor
    *
    * @param string $usageFactor |参数名称：使用量因子编码| |参数约束及描述：云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration具体每种云服务使用什么样的计费因子，需要找具体云服务确认，全集请参考|
    *
    * @return $this
    */
    public function setUsageFactor($usageFactor)
    {
        $this->container['usageFactor'] = $usageFactor;
        return $this;
    }

    /**
    * Gets usageValue
    *  |参数名称：使用量值| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时|
    *
    * @return float
    */
    public function getUsageValue()
    {
        return $this->container['usageValue'];
    }

    /**
    * Sets usageValue
    *
    * @param float $usageValue |参数名称：使用量值| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时|
    *
    * @return $this
    */
    public function setUsageValue($usageValue)
    {
        $this->container['usageValue'] = $usageValue;
        return $this;
    }

    /**
    * Gets usageMeasureId
    *  |参数名称：使用量单位标识| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下：4：小时全量枚举如下：0：天（时长）；1：元（货币）；2：角（货币）；3：分（货币）；4：小时（时长）；5：分钟（时长）；6：秒（时长）；7：EB（流量）；8：PB（流量）；9：TB（流量）；10：GB（流量）；11：MB（流量）；12：KB（流量）；13：Byte（流量）；14：个(次)（数量）；15：Mbps（流量）；16：Byte（容量）；17：GB（容量）；18：KLOC（行数）；19：年（周期）；20：月（周期）；21：MB（容量）；22：赫兹（频率）；23：核（数量）；24：天（周期）；25：小时（周期）；30：个数（个数）；31：千次（数量）；32：百万次（数量）；33：十亿次（数量）；34：bps（带宽速率）；35：kbps（带宽速率）；36：Mbps（带宽速率）；37：Gbps（带宽速率）；38：Tbps（带宽速率）；39：GB-秒（容量时长）；40：次（数量）；41：个（数量）；42：千个（数量）；43：张（数量）；44：千张（数量）；45：每秒查询率（查询速率）；46：人/天（数量）；47：TB（容量）；48：PB（容量）。具体某个云服务应该使用什么单位，需要和云服务确认。|
    *
    * @return int
    */
    public function getUsageMeasureId()
    {
        return $this->container['usageMeasureId'];
    }

    /**
    * Sets usageMeasureId
    *
    * @param int $usageMeasureId |参数名称：使用量单位标识| |参数约束及描述：例如按小时询价，使用量值为1，使用量单位为小时，枚举值如下：4：小时全量枚举如下：0：天（时长）；1：元（货币）；2：角（货币）；3：分（货币）；4：小时（时长）；5：分钟（时长）；6：秒（时长）；7：EB（流量）；8：PB（流量）；9：TB（流量）；10：GB（流量）；11：MB（流量）；12：KB（流量）；13：Byte（流量）；14：个(次)（数量）；15：Mbps（流量）；16：Byte（容量）；17：GB（容量）；18：KLOC（行数）；19：年（周期）；20：月（周期）；21：MB（容量）；22：赫兹（频率）；23：核（数量）；24：天（周期）；25：小时（周期）；30：个数（个数）；31：千次（数量）；32：百万次（数量）；33：十亿次（数量）；34：bps（带宽速率）；35：kbps（带宽速率）；36：Mbps（带宽速率）；37：Gbps（带宽速率）；38：Tbps（带宽速率）；39：GB-秒（容量时长）；40：次（数量）；41：个（数量）；42：千个（数量）；43：张（数量）；44：千张（数量）；45：每秒查询率（查询速率）；46：人/天（数量）；47：TB（容量）；48：PB（容量）。具体某个云服务应该使用什么单位，需要和云服务确认。|
    *
    * @return $this
    */
    public function setUsageMeasureId($usageMeasureId)
    {
        $this->container['usageMeasureId'] = $usageMeasureId;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0，默认为1|
    *
    * @return int
    */
    public function getSubscriptionNum()
    {
        return $this->container['subscriptionNum'];
    }

    /**
    * Sets subscriptionNum
    *
    * @param int $subscriptionNum |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0，默认为1|
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
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

