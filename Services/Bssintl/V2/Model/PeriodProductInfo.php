<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PeriodProductInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PeriodProductInfo';

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
    * periodType  |参数名称：订购周期类型| |参数约束及描述：0：天；1：周；2：月；3：年；4：小时；|
    * periodNum  |参数名称：订购周期数| |参数约束及描述：订购周期数|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0|
    * feeInstallmentMode  |参数名称：费用分期模式| |参数约束及描述：HALF_PAY：半付；ZERO_PAY：零付；NA：不支持费用分期模式；不传默认为空，效果等同于NA|
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
            'periodType' => 'int',
            'periodNum' => 'int',
            'subscriptionNum' => 'int',
            'feeInstallmentMode' => 'string'
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
    * periodType  |参数名称：订购周期类型| |参数约束及描述：0：天；1：周；2：月；3：年；4：小时；|
    * periodNum  |参数名称：订购周期数| |参数约束及描述：订购周期数|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0|
    * feeInstallmentMode  |参数名称：费用分期模式| |参数约束及描述：HALF_PAY：半付；ZERO_PAY：零付；NA：不支持费用分期模式；不传默认为空，效果等同于NA|
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
        'periodType' => 'int32',
        'periodNum' => 'int32',
        'subscriptionNum' => 'int32',
        'feeInstallmentMode' => null
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
    * periodType  |参数名称：订购周期类型| |参数约束及描述：0：天；1：周；2：月；3：年；4：小时；|
    * periodNum  |参数名称：订购周期数| |参数约束及描述：订购周期数|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0|
    * feeInstallmentMode  |参数名称：费用分期模式| |参数约束及描述：HALF_PAY：半付；ZERO_PAY：零付；NA：不支持费用分期模式；不传默认为空，效果等同于NA|
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
            'periodType' => 'period_type',
            'periodNum' => 'period_num',
            'subscriptionNum' => 'subscription_num',
            'feeInstallmentMode' => 'fee_installment_mode'
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
    * periodType  |参数名称：订购周期类型| |参数约束及描述：0：天；1：周；2：月；3：年；4：小时；|
    * periodNum  |参数名称：订购周期数| |参数约束及描述：订购周期数|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0|
    * feeInstallmentMode  |参数名称：费用分期模式| |参数约束及描述：HALF_PAY：半付；ZERO_PAY：零付；NA：不支持费用分期模式；不传默认为空，效果等同于NA|
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
            'periodType' => 'setPeriodType',
            'periodNum' => 'setPeriodNum',
            'subscriptionNum' => 'setSubscriptionNum',
            'feeInstallmentMode' => 'setFeeInstallmentMode'
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
    * periodType  |参数名称：订购周期类型| |参数约束及描述：0：天；1：周；2：月；3：年；4：小时；|
    * periodNum  |参数名称：订购周期数| |参数约束及描述：订购周期数|
    * subscriptionNum  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0|
    * feeInstallmentMode  |参数名称：费用分期模式| |参数约束及描述：HALF_PAY：半付；ZERO_PAY：零付；NA：不支持费用分期模式；不传默认为空，效果等同于NA|
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
            'periodType' => 'getPeriodType',
            'periodNum' => 'getPeriodNum',
            'subscriptionNum' => 'getSubscriptionNum',
            'feeInstallmentMode' => 'getFeeInstallmentMode'
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
        $this->container['periodType'] = isset($data['periodType']) ? $data['periodType'] : null;
        $this->container['periodNum'] = isset($data['periodNum']) ? $data['periodNum'] : null;
        $this->container['subscriptionNum'] = isset($data['subscriptionNum']) ? $data['subscriptionNum'] : null;
        $this->container['feeInstallmentMode'] = isset($data['feeInstallmentMode']) ? $data['feeInstallmentMode'] : null;
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
        if ($this->container['periodType'] === null) {
            $invalidProperties[] = "'periodType' can't be null";
        }
            if (($this->container['periodType'] > 4)) {
                $invalidProperties[] = "invalid value for 'periodType', must be smaller than or equal to 4.";
            }
            if (($this->container['periodType'] < 0)) {
                $invalidProperties[] = "invalid value for 'periodType', must be bigger than or equal to 0.";
            }
        if ($this->container['periodNum'] === null) {
            $invalidProperties[] = "'periodNum' can't be null";
        }
            if (($this->container['periodNum'] > 214783647)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be smaller than or equal to 214783647.";
            }
            if (($this->container['periodNum'] < 1)) {
                $invalidProperties[] = "invalid value for 'periodNum', must be bigger than or equal to 1.";
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
            if (!is_null($this->container['feeInstallmentMode']) && (mb_strlen($this->container['feeInstallmentMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'feeInstallmentMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['feeInstallmentMode']) && (mb_strlen($this->container['feeInstallmentMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'feeInstallmentMode', the character length must be bigger than or equal to 0.";
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
    * Gets periodType
    *  |参数名称：订购周期类型| |参数约束及描述：0：天；1：周；2：月；3：年；4：小时；|
    *
    * @return int
    */
    public function getPeriodType()
    {
        return $this->container['periodType'];
    }

    /**
    * Sets periodType
    *
    * @param int $periodType |参数名称：订购周期类型| |参数约束及描述：0：天；1：周；2：月；3：年；4：小时；|
    *
    * @return $this
    */
    public function setPeriodType($periodType)
    {
        $this->container['periodType'] = $periodType;
        return $this;
    }

    /**
    * Gets periodNum
    *  |参数名称：订购周期数| |参数约束及描述：订购周期数|
    *
    * @return int
    */
    public function getPeriodNum()
    {
        return $this->container['periodNum'];
    }

    /**
    * Sets periodNum
    *
    * @param int $periodNum |参数名称：订购周期数| |参数约束及描述：订购周期数|
    *
    * @return $this
    */
    public function setPeriodNum($periodNum)
    {
        $this->container['periodNum'] = $periodNum;
        return $this;
    }

    /**
    * Gets subscriptionNum
    *  |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0|
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
    * @param int $subscriptionNum |参数名称：订购数量| |参数约束及描述：订购数量,有值时不能小于0|
    *
    * @return $this
    */
    public function setSubscriptionNum($subscriptionNum)
    {
        $this->container['subscriptionNum'] = $subscriptionNum;
        return $this;
    }

    /**
    * Gets feeInstallmentMode
    *  |参数名称：费用分期模式| |参数约束及描述：HALF_PAY：半付；ZERO_PAY：零付；NA：不支持费用分期模式；不传默认为空，效果等同于NA|
    *
    * @return string|null
    */
    public function getFeeInstallmentMode()
    {
        return $this->container['feeInstallmentMode'];
    }

    /**
    * Sets feeInstallmentMode
    *
    * @param string|null $feeInstallmentMode |参数名称：费用分期模式| |参数约束及描述：HALF_PAY：半付；ZERO_PAY：零付；NA：不支持费用分期模式；不传默认为空，效果等同于NA|
    *
    * @return $this
    */
    public function setFeeInstallmentMode($feeInstallmentMode)
    {
        $this->container['feeInstallmentMode'] = $feeInstallmentMode;
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

