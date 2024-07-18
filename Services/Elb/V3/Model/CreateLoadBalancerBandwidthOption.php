<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateLoadBalancerBandwidthOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateLoadBalancerBandwidthOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  参数解释：带宽名称。  约束限制： - 如果share_type是PER，该字段是必选。 - 如果bandwidth对象的id有值，该字段被忽略。  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * size  参数解释：带宽大小  约束限制：当id字段为null时，size是必须的。 注意，调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s: 默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s: 默认最小单位为50Mbit/s。 - 大于1000Mbit/s: 默认最小单位为500Mbit/s。  取值范围:默认1Mbit/s~2000Mbit/s(具体范围以各区域配置为准,请参见控制台对应页面显示)。
    * chargeMode  参数解释：计费模式。bandwidth 按带宽计费；traffic 按流量计费。  约束限制：当id字段为null时，charge_mode是必须的。  [当前仅支持traffic按流量计费。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt)  取值范围：  - bandwidth：按带宽计费。  - traffic： 按流量计费。
    * shareType  参数解释：带宽类型。  取值范围： - PER：独享带宽。 - WHOLE：共享带宽。
    * billingInfo  参数解释：资源计费信息。  约束限制： [如果billing_info不为空，说明是包周期计费的带宽，否则为按需计费的带宽。](tag:hws,hws_hk,tlf,ctc,hcso,sbc,cmcc)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,fcs)
    * id  参数解释：共享带宽ID。使用已存在的共享带宽。  约束限制：必须是已存在共享带宽ID。在预付费的情况下，不填该字段。该字段取空字符串时，会被忽略。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'size' => 'int',
            'chargeMode' => 'string',
            'shareType' => 'string',
            'billingInfo' => 'string',
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  参数解释：带宽名称。  约束限制： - 如果share_type是PER，该字段是必选。 - 如果bandwidth对象的id有值，该字段被忽略。  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * size  参数解释：带宽大小  约束限制：当id字段为null时，size是必须的。 注意，调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s: 默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s: 默认最小单位为50Mbit/s。 - 大于1000Mbit/s: 默认最小单位为500Mbit/s。  取值范围:默认1Mbit/s~2000Mbit/s(具体范围以各区域配置为准,请参见控制台对应页面显示)。
    * chargeMode  参数解释：计费模式。bandwidth 按带宽计费；traffic 按流量计费。  约束限制：当id字段为null时，charge_mode是必须的。  [当前仅支持traffic按流量计费。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt)  取值范围：  - bandwidth：按带宽计费。  - traffic： 按流量计费。
    * shareType  参数解释：带宽类型。  取值范围： - PER：独享带宽。 - WHOLE：共享带宽。
    * billingInfo  参数解释：资源计费信息。  约束限制： [如果billing_info不为空，说明是包周期计费的带宽，否则为按需计费的带宽。](tag:hws,hws_hk,tlf,ctc,hcso,sbc,cmcc)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,fcs)
    * id  参数解释：共享带宽ID。使用已存在的共享带宽。  约束限制：必须是已存在共享带宽ID。在预付费的情况下，不填该字段。该字段取空字符串时，会被忽略。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'size' => 'int32',
        'chargeMode' => null,
        'shareType' => null,
        'billingInfo' => null,
        'id' => null
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
    * name  参数解释：带宽名称。  约束限制： - 如果share_type是PER，该字段是必选。 - 如果bandwidth对象的id有值，该字段被忽略。  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * size  参数解释：带宽大小  约束限制：当id字段为null时，size是必须的。 注意，调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s: 默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s: 默认最小单位为50Mbit/s。 - 大于1000Mbit/s: 默认最小单位为500Mbit/s。  取值范围:默认1Mbit/s~2000Mbit/s(具体范围以各区域配置为准,请参见控制台对应页面显示)。
    * chargeMode  参数解释：计费模式。bandwidth 按带宽计费；traffic 按流量计费。  约束限制：当id字段为null时，charge_mode是必须的。  [当前仅支持traffic按流量计费。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt)  取值范围：  - bandwidth：按带宽计费。  - traffic： 按流量计费。
    * shareType  参数解释：带宽类型。  取值范围： - PER：独享带宽。 - WHOLE：共享带宽。
    * billingInfo  参数解释：资源计费信息。  约束限制： [如果billing_info不为空，说明是包周期计费的带宽，否则为按需计费的带宽。](tag:hws,hws_hk,tlf,ctc,hcso,sbc,cmcc)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,fcs)
    * id  参数解释：共享带宽ID。使用已存在的共享带宽。  约束限制：必须是已存在共享带宽ID。在预付费的情况下，不填该字段。该字段取空字符串时，会被忽略。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'size' => 'size',
            'chargeMode' => 'charge_mode',
            'shareType' => 'share_type',
            'billingInfo' => 'billing_info',
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  参数解释：带宽名称。  约束限制： - 如果share_type是PER，该字段是必选。 - 如果bandwidth对象的id有值，该字段被忽略。  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * size  参数解释：带宽大小  约束限制：当id字段为null时，size是必须的。 注意，调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s: 默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s: 默认最小单位为50Mbit/s。 - 大于1000Mbit/s: 默认最小单位为500Mbit/s。  取值范围:默认1Mbit/s~2000Mbit/s(具体范围以各区域配置为准,请参见控制台对应页面显示)。
    * chargeMode  参数解释：计费模式。bandwidth 按带宽计费；traffic 按流量计费。  约束限制：当id字段为null时，charge_mode是必须的。  [当前仅支持traffic按流量计费。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt)  取值范围：  - bandwidth：按带宽计费。  - traffic： 按流量计费。
    * shareType  参数解释：带宽类型。  取值范围： - PER：独享带宽。 - WHOLE：共享带宽。
    * billingInfo  参数解释：资源计费信息。  约束限制： [如果billing_info不为空，说明是包周期计费的带宽，否则为按需计费的带宽。](tag:hws,hws_hk,tlf,ctc,hcso,sbc,cmcc)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,fcs)
    * id  参数解释：共享带宽ID。使用已存在的共享带宽。  约束限制：必须是已存在共享带宽ID。在预付费的情况下，不填该字段。该字段取空字符串时，会被忽略。
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'size' => 'setSize',
            'chargeMode' => 'setChargeMode',
            'shareType' => 'setShareType',
            'billingInfo' => 'setBillingInfo',
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  参数解释：带宽名称。  约束限制： - 如果share_type是PER，该字段是必选。 - 如果bandwidth对象的id有值，该字段被忽略。  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    * size  参数解释：带宽大小  约束限制：当id字段为null时，size是必须的。 注意，调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s: 默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s: 默认最小单位为50Mbit/s。 - 大于1000Mbit/s: 默认最小单位为500Mbit/s。  取值范围:默认1Mbit/s~2000Mbit/s(具体范围以各区域配置为准,请参见控制台对应页面显示)。
    * chargeMode  参数解释：计费模式。bandwidth 按带宽计费；traffic 按流量计费。  约束限制：当id字段为null时，charge_mode是必须的。  [当前仅支持traffic按流量计费。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt)  取值范围：  - bandwidth：按带宽计费。  - traffic： 按流量计费。
    * shareType  参数解释：带宽类型。  取值范围： - PER：独享带宽。 - WHOLE：共享带宽。
    * billingInfo  参数解释：资源计费信息。  约束限制： [如果billing_info不为空，说明是包周期计费的带宽，否则为按需计费的带宽。](tag:hws,hws_hk,tlf,ctc,hcso,sbc,cmcc)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,fcs)
    * id  参数解释：共享带宽ID。使用已存在的共享带宽。  约束限制：必须是已存在共享带宽ID。在预付费的情况下，不填该字段。该字段取空字符串时，会被忽略。
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'size' => 'getSize',
            'chargeMode' => 'getChargeMode',
            'shareType' => 'getShareType',
            'billingInfo' => 'getBillingInfo',
            'id' => 'getId'
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
    const CHARGE_MODE_BANDWIDTH = 'bandwidth';
    const CHARGE_MODE_TRAFFIC = 'traffic';
    const SHARE_TYPE_PER = 'PER';
    const SHARE_TYPE_WHOLE = 'WHOLE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getChargeModeAllowableValues()
    {
        return [
            self::CHARGE_MODE_BANDWIDTH,
            self::CHARGE_MODE_TRAFFIC,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getShareTypeAllowableValues()
    {
        return [
            self::SHARE_TYPE_PER,
            self::SHARE_TYPE_WHOLE,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['shareType'] = isset($data['shareType']) ? $data['shareType'] : null;
        $this->container['billingInfo'] = isset($data['billingInfo']) ? $data['billingInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 64)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && !preg_match("/[\\u4e00-\\u9fa5A-Za-z0-9_.-]+/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /[\\u4e00-\\u9fa5A-Za-z0-9_.-]+/.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] > 99999)) {
                $invalidProperties[] = "invalid value for 'size', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['size']) && ($this->container['size'] < 0)) {
                $invalidProperties[] = "invalid value for 'size', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getChargeModeAllowableValues();
                if (!is_null($this->container['chargeMode']) && !in_array($this->container['chargeMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'chargeMode', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) > 36)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['chargeMode']) && (mb_strlen($this->container['chargeMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getShareTypeAllowableValues();
                if (!is_null($this->container['shareType']) && !in_array($this->container['shareType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'shareType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) > 1024)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be smaller than or equal to 1024.";
            }
            if (!is_null($this->container['billingInfo']) && (mb_strlen($this->container['billingInfo']) < 1)) {
                $invalidProperties[] = "invalid value for 'billingInfo', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 36)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
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
    * Gets name
    *  参数解释：带宽名称。  约束限制： - 如果share_type是PER，该字段是必选。 - 如果bandwidth对象的id有值，该字段被忽略。  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 参数解释：带宽名称。  约束限制： - 如果share_type是PER，该字段是必选。 - 如果bandwidth对象的id有值，该字段被忽略。  取值范围：1-64个字符，支持数字、字母、中文、_(下划线)、-（中划线）、.（点）
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets size
    *  参数解释：带宽大小  约束限制：当id字段为null时，size是必须的。 注意，调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s: 默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s: 默认最小单位为50Mbit/s。 - 大于1000Mbit/s: 默认最小单位为500Mbit/s。  取值范围:默认1Mbit/s~2000Mbit/s(具体范围以各区域配置为准,请参见控制台对应页面显示)。
    *
    * @return int|null
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param int|null $size 参数解释：带宽大小  约束限制：当id字段为null时，size是必须的。 注意，调整带宽时的最小单位会根据带宽范围不同存在差异。 - 小于等于300Mbit/s: 默认最小单位为1Mbit/s。 - 300Mbit/s~1000Mbit/s: 默认最小单位为50Mbit/s。 - 大于1000Mbit/s: 默认最小单位为500Mbit/s。  取值范围:默认1Mbit/s~2000Mbit/s(具体范围以各区域配置为准,请参见控制台对应页面显示)。
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets chargeMode
    *  参数解释：计费模式。bandwidth 按带宽计费；traffic 按流量计费。  约束限制：当id字段为null时，charge_mode是必须的。  [当前仅支持traffic按流量计费。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt)  取值范围：  - bandwidth：按带宽计费。  - traffic： 按流量计费。
    *
    * @return string|null
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string|null $chargeMode 参数解释：计费模式。bandwidth 按带宽计费；traffic 按流量计费。  约束限制：当id字段为null时，charge_mode是必须的。  [当前仅支持traffic按流量计费。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt)  取值范围：  - bandwidth：按带宽计费。  - traffic： 按流量计费。
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets shareType
    *  参数解释：带宽类型。  取值范围： - PER：独享带宽。 - WHOLE：共享带宽。
    *
    * @return string|null
    */
    public function getShareType()
    {
        return $this->container['shareType'];
    }

    /**
    * Sets shareType
    *
    * @param string|null $shareType 参数解释：带宽类型。  取值范围： - PER：独享带宽。 - WHOLE：共享带宽。
    *
    * @return $this
    */
    public function setShareType($shareType)
    {
        $this->container['shareType'] = $shareType;
        return $this;
    }

    /**
    * Gets billingInfo
    *  参数解释：资源计费信息。  约束限制： [如果billing_info不为空，说明是包周期计费的带宽，否则为按需计费的带宽。](tag:hws,hws_hk,tlf,ctc,hcso,sbc,cmcc)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,fcs)
    *
    * @return string|null
    */
    public function getBillingInfo()
    {
        return $this->container['billingInfo'];
    }

    /**
    * Sets billingInfo
    *
    * @param string|null $billingInfo 参数解释：资源计费信息。  约束限制： [如果billing_info不为空，说明是包周期计费的带宽，否则为按需计费的带宽。](tag:hws,hws_hk,tlf,ctc,hcso,sbc,cmcc)  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42,dt,dt_test,hcso_dt,hk_vdf,fcs)
    *
    * @return $this
    */
    public function setBillingInfo($billingInfo)
    {
        $this->container['billingInfo'] = $billingInfo;
        return $this;
    }

    /**
    * Gets id
    *  参数解释：共享带宽ID。使用已存在的共享带宽。  约束限制：必须是已存在共享带宽ID。在预付费的情况下，不填该字段。该字段取空字符串时，会被忽略。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 参数解释：共享带宽ID。使用已存在的共享带宽。  约束限制：必须是已存在共享带宽ID。在预付费的情况下，不填该字段。该字段取空字符串时，会被忽略。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

