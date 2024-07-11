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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * resourceSpec  云服务类型的资源规格，部分云服务类型和资源规格举例如下： 弹性云服务器：根据操作系统类型在云服务器规格的ID后添加“.win”或“.linux”，例如“s2.small.1.linux”。云服务器规格的ID字段，您可以调用查询规格详情和规格扩展信息列表接口获取。 带宽：12_bgp：动态BGP按流量计费带宽12_sbgp：静态BGP按流量计费带宽19_bgp：动态BGP按带宽计费带宽19_sbgp：静态BGP按带宽计费带宽19_share：按带宽计费共享带宽 IP：5_bgp：动态BGP公网IP5_sbgp：静态BGP公网IP 云硬盘：SATA：普通IO云硬盘SAS：高IO云硬盘GPSSD：通用型SSD云硬盘SSD：超高IO云硬盘
    * region  云服务区编码，例如：“ap-southeast-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availableZone  可用区标识。
    * resourceSize  资源容量大小，例如购买的卷大小或带宽大小。 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * sizeMeasureId  资源容量度量标识，枚举值如下： 15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个（次） 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * usageFactor  使用量因子编码，取值和话单中的使用量因子一致，云服务和使用量因子对应关系举例如下： 云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration 您可以调用查询使用量类型列表接口获取响应参数表3中参数code的取值，即每种云服务对应的计费因子。
    * usageValue  使用量值。 例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量度量单位，您可以调用查询度量单位列表接口获取。 例如按小时询价，使用量值为1，使用量单位为小时。
    * subscriptionNum  订购数量。
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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * resourceSpec  云服务类型的资源规格，部分云服务类型和资源规格举例如下： 弹性云服务器：根据操作系统类型在云服务器规格的ID后添加“.win”或“.linux”，例如“s2.small.1.linux”。云服务器规格的ID字段，您可以调用查询规格详情和规格扩展信息列表接口获取。 带宽：12_bgp：动态BGP按流量计费带宽12_sbgp：静态BGP按流量计费带宽19_bgp：动态BGP按带宽计费带宽19_sbgp：静态BGP按带宽计费带宽19_share：按带宽计费共享带宽 IP：5_bgp：动态BGP公网IP5_sbgp：静态BGP公网IP 云硬盘：SATA：普通IO云硬盘SAS：高IO云硬盘GPSSD：通用型SSD云硬盘SSD：超高IO云硬盘
    * region  云服务区编码，例如：“ap-southeast-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availableZone  可用区标识。
    * resourceSize  资源容量大小，例如购买的卷大小或带宽大小。 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * sizeMeasureId  资源容量度量标识，枚举值如下： 15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个（次） 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * usageFactor  使用量因子编码，取值和话单中的使用量因子一致，云服务和使用量因子对应关系举例如下： 云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration 您可以调用查询使用量类型列表接口获取响应参数表3中参数code的取值，即每种云服务对应的计费因子。
    * usageValue  使用量值。 例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量度量单位，您可以调用查询度量单位列表接口获取。 例如按小时询价，使用量值为1，使用量单位为小时。
    * subscriptionNum  订购数量。
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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * resourceSpec  云服务类型的资源规格，部分云服务类型和资源规格举例如下： 弹性云服务器：根据操作系统类型在云服务器规格的ID后添加“.win”或“.linux”，例如“s2.small.1.linux”。云服务器规格的ID字段，您可以调用查询规格详情和规格扩展信息列表接口获取。 带宽：12_bgp：动态BGP按流量计费带宽12_sbgp：静态BGP按流量计费带宽19_bgp：动态BGP按带宽计费带宽19_sbgp：静态BGP按带宽计费带宽19_share：按带宽计费共享带宽 IP：5_bgp：动态BGP公网IP5_sbgp：静态BGP公网IP 云硬盘：SATA：普通IO云硬盘SAS：高IO云硬盘GPSSD：通用型SSD云硬盘SSD：超高IO云硬盘
    * region  云服务区编码，例如：“ap-southeast-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availableZone  可用区标识。
    * resourceSize  资源容量大小，例如购买的卷大小或带宽大小。 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * sizeMeasureId  资源容量度量标识，枚举值如下： 15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个（次） 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * usageFactor  使用量因子编码，取值和话单中的使用量因子一致，云服务和使用量因子对应关系举例如下： 云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration 您可以调用查询使用量类型列表接口获取响应参数表3中参数code的取值，即每种云服务对应的计费因子。
    * usageValue  使用量值。 例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量度量单位，您可以调用查询度量单位列表接口获取。 例如按小时询价，使用量值为1，使用量单位为小时。
    * subscriptionNum  订购数量。
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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * resourceSpec  云服务类型的资源规格，部分云服务类型和资源规格举例如下： 弹性云服务器：根据操作系统类型在云服务器规格的ID后添加“.win”或“.linux”，例如“s2.small.1.linux”。云服务器规格的ID字段，您可以调用查询规格详情和规格扩展信息列表接口获取。 带宽：12_bgp：动态BGP按流量计费带宽12_sbgp：静态BGP按流量计费带宽19_bgp：动态BGP按带宽计费带宽19_sbgp：静态BGP按带宽计费带宽19_share：按带宽计费共享带宽 IP：5_bgp：动态BGP公网IP5_sbgp：静态BGP公网IP 云硬盘：SATA：普通IO云硬盘SAS：高IO云硬盘GPSSD：通用型SSD云硬盘SSD：超高IO云硬盘
    * region  云服务区编码，例如：“ap-southeast-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availableZone  可用区标识。
    * resourceSize  资源容量大小，例如购买的卷大小或带宽大小。 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * sizeMeasureId  资源容量度量标识，枚举值如下： 15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个（次） 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * usageFactor  使用量因子编码，取值和话单中的使用量因子一致，云服务和使用量因子对应关系举例如下： 云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration 您可以调用查询使用量类型列表接口获取响应参数表3中参数code的取值，即每种云服务对应的计费因子。
    * usageValue  使用量值。 例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量度量单位，您可以调用查询度量单位列表接口获取。 例如按小时询价，使用量值为1，使用量单位为小时。
    * subscriptionNum  订购数量。
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
    * id  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
    * cloudServiceType  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceType  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
    * resourceSpec  云服务类型的资源规格，部分云服务类型和资源规格举例如下： 弹性云服务器：根据操作系统类型在云服务器规格的ID后添加“.win”或“.linux”，例如“s2.small.1.linux”。云服务器规格的ID字段，您可以调用查询规格详情和规格扩展信息列表接口获取。 带宽：12_bgp：动态BGP按流量计费带宽12_sbgp：静态BGP按流量计费带宽19_bgp：动态BGP按带宽计费带宽19_sbgp：静态BGP按带宽计费带宽19_share：按带宽计费共享带宽 IP：5_bgp：动态BGP公网IP5_sbgp：静态BGP公网IP 云硬盘：SATA：普通IO云硬盘SAS：高IO云硬盘GPSSD：通用型SSD云硬盘SSD：超高IO云硬盘
    * region  云服务区编码，例如：“ap-southeast-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availableZone  可用区标识。
    * resourceSize  资源容量大小，例如购买的卷大小或带宽大小。 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * sizeMeasureId  资源容量度量标识，枚举值如下： 15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个（次） 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
    * usageFactor  使用量因子编码，取值和话单中的使用量因子一致，云服务和使用量因子对应关系举例如下： 云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration 您可以调用查询使用量类型列表接口获取响应参数表3中参数code的取值，即每种云服务对应的计费因子。
    * usageValue  使用量值。 例如按小时询价，使用量值为1，使用量单位为小时。
    * usageMeasureId  使用量度量单位，您可以调用查询度量单位列表接口获取。 例如按小时询价，使用量值为1，使用量单位为小时。
    * subscriptionNum  订购数量。
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
    *  ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
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
    * @param string $id ID标识，同一次询价中不能重复，用于标识返回询价结果和请求的映射关系。
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
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
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
    * @param string $cloudServiceType 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
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
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
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
    * @param string $resourceType 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。 ResourceType是CloudServiceType中的一种资源，CloudServiceType由多种ResourceType组合提供。
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
    *  云服务类型的资源规格，部分云服务类型和资源规格举例如下： 弹性云服务器：根据操作系统类型在云服务器规格的ID后添加“.win”或“.linux”，例如“s2.small.1.linux”。云服务器规格的ID字段，您可以调用查询规格详情和规格扩展信息列表接口获取。 带宽：12_bgp：动态BGP按流量计费带宽12_sbgp：静态BGP按流量计费带宽19_bgp：动态BGP按带宽计费带宽19_sbgp：静态BGP按带宽计费带宽19_share：按带宽计费共享带宽 IP：5_bgp：动态BGP公网IP5_sbgp：静态BGP公网IP 云硬盘：SATA：普通IO云硬盘SAS：高IO云硬盘GPSSD：通用型SSD云硬盘SSD：超高IO云硬盘
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
    * @param string $resourceSpec 云服务类型的资源规格，部分云服务类型和资源规格举例如下： 弹性云服务器：根据操作系统类型在云服务器规格的ID后添加“.win”或“.linux”，例如“s2.small.1.linux”。云服务器规格的ID字段，您可以调用查询规格详情和规格扩展信息列表接口获取。 带宽：12_bgp：动态BGP按流量计费带宽12_sbgp：静态BGP按流量计费带宽19_bgp：动态BGP按带宽计费带宽19_sbgp：静态BGP按带宽计费带宽19_share：按带宽计费共享带宽 IP：5_bgp：动态BGP公网IP5_sbgp：静态BGP公网IP 云硬盘：SATA：普通IO云硬盘SAS：高IO云硬盘GPSSD：通用型SSD云硬盘SSD：超高IO云硬盘
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
    *  云服务区编码，例如：“ap-southeast-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
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
    * @param string $region 云服务区编码，例如：“ap-southeast-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
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
    *  可用区标识。
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
    * @param string|null $availableZone 可用区标识。
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
    *  资源容量大小，例如购买的卷大小或带宽大小。 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
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
    * @param int|null $resourceSize 资源容量大小，例如购买的卷大小或带宽大小。 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
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
    *  资源容量度量标识，枚举值如下： 15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个（次） 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
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
    * @param int|null $sizeMeasureId 资源容量度量标识，枚举值如下： 15：Mbps（购买带宽时使用）17：GB（购买云硬盘时使用）14：个（次） 线性产品时该参数不能为空。线性产品为包括硬盘，带宽等在订购时需要指定大小的产品。例如硬盘在订购时需选择10G、20G等不同大小。
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
    *  使用量因子编码，取值和话单中的使用量因子一致，云服务和使用量因子对应关系举例如下： 云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration 您可以调用查询使用量类型列表接口获取响应参数表3中参数code的取值，即每种云服务对应的计费因子。
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
    * @param string $usageFactor 使用量因子编码，取值和话单中的使用量因子一致，云服务和使用量因子对应关系举例如下： 云服务器：Duration云硬盘：Duration弹性IP：Duration带宽：Duration或upflow市场镜像：Duration 您可以调用查询使用量类型列表接口获取响应参数表3中参数code的取值，即每种云服务对应的计费因子。
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
    *  使用量值。 例如按小时询价，使用量值为1，使用量单位为小时。
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
    * @param float $usageValue 使用量值。 例如按小时询价，使用量值为1，使用量单位为小时。
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
    *  使用量度量单位，您可以调用查询度量单位列表接口获取。 例如按小时询价，使用量值为1，使用量单位为小时。
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
    * @param int $usageMeasureId 使用量度量单位，您可以调用查询度量单位列表接口获取。 例如按小时询价，使用量值为1，使用量单位为小时。
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
    *  订购数量。
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
    * @param int $subscriptionNum 订购数量。
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

