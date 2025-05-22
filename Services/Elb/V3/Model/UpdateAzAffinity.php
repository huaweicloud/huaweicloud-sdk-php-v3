<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdateAzAffinity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdateAzAffinity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  参数解释：后端服务器组可用区亲和开关。  约束限制： - 当后端服务器组中有未设置availability_zone属性的iptarget类型的后端服务器时无法开启可用区亲和。 - 当后端服务器绑定TLS监听器时无法开启可用区亲和。 - 仅IP、UDP、TCP类型的后端服务器组支持开启可用区亲和。 - 当开启可用区亲和后，原本的pool_health配置失效。  取值范围：true或false，true表示开启，false表示关闭。
    * azMinimumHealthyMemberPercentage  参数解释：后端服务器组单可用区百分比健康度最小阈值，当“后端服务器组单可用区百分比健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区百分比健康度”是指在一个后端服务器组中，同可用区中健康检查结果正常的服务器数量与该后端服务器组中属于该可用区的后端服务器总数量的比值，百分比结果向上取整。例如：后端服务器组中属于可用区A的后端服务器总数量为3，设置后端服务器组单可用区百分比健康度最小阈值为66时，3x0.66=1.98向上取整为数量阈值2台，即属于可用区A的健康后端数小于2台时触发退避策略；设置后端服务器组单可用区百分比健康度最小阈值为67时，3x0.67=2.01向上取整为数量阈值3台，即属于可用区A的健康后端数小于3台时触发退避策略。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至100的整数，0-100为百分比范围，-1表示采用数量阈值。
    * azMinimumHealthyMemberCount  参数解释：后端服务器组单可用区中数量健康度最小阈值，当“后端服务器组单可用区中数量健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区中数量健康度”是指在一个后端服务器组中，属于同一个可用区的健康检查结果正常的服务器数量。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至10000的整数，0-10000为数量范围，-1表示采用百分比阈值。
    * azUnhealthyFallbackStrategy  参数解释：后端服务器组单可用区异常退避策略。后端服务器组的健康度小于所配置的最小阈值时，触发该退避策略。 forward_to_all_member_of_local_az：转发至同可用区的所有后端服务器，无论健康检查结果是否正常；forward_to_healthy_member_of_remote_az：转发至非同可用区中所有健康检查结果正常的后端服务器；forward_to_all_healthy_member：转发至所有可用区中健康检查结果正常的后端服务器；forward_to_all_member：转发至所有可用区中的所有后端服务器，无论健康检查结果是否正常  取值范围：forward_to_all_member_of_local_az，forward_to_healthy_member_of_remote_az，forward_to_all_healthy_member，forward_to_all_member。 默认值：forward_to_all_member_of_local_az
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'azMinimumHealthyMemberPercentage' => 'int',
            'azMinimumHealthyMemberCount' => 'int',
            'azUnhealthyFallbackStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  参数解释：后端服务器组可用区亲和开关。  约束限制： - 当后端服务器组中有未设置availability_zone属性的iptarget类型的后端服务器时无法开启可用区亲和。 - 当后端服务器绑定TLS监听器时无法开启可用区亲和。 - 仅IP、UDP、TCP类型的后端服务器组支持开启可用区亲和。 - 当开启可用区亲和后，原本的pool_health配置失效。  取值范围：true或false，true表示开启，false表示关闭。
    * azMinimumHealthyMemberPercentage  参数解释：后端服务器组单可用区百分比健康度最小阈值，当“后端服务器组单可用区百分比健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区百分比健康度”是指在一个后端服务器组中，同可用区中健康检查结果正常的服务器数量与该后端服务器组中属于该可用区的后端服务器总数量的比值，百分比结果向上取整。例如：后端服务器组中属于可用区A的后端服务器总数量为3，设置后端服务器组单可用区百分比健康度最小阈值为66时，3x0.66=1.98向上取整为数量阈值2台，即属于可用区A的健康后端数小于2台时触发退避策略；设置后端服务器组单可用区百分比健康度最小阈值为67时，3x0.67=2.01向上取整为数量阈值3台，即属于可用区A的健康后端数小于3台时触发退避策略。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至100的整数，0-100为百分比范围，-1表示采用数量阈值。
    * azMinimumHealthyMemberCount  参数解释：后端服务器组单可用区中数量健康度最小阈值，当“后端服务器组单可用区中数量健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区中数量健康度”是指在一个后端服务器组中，属于同一个可用区的健康检查结果正常的服务器数量。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至10000的整数，0-10000为数量范围，-1表示采用百分比阈值。
    * azUnhealthyFallbackStrategy  参数解释：后端服务器组单可用区异常退避策略。后端服务器组的健康度小于所配置的最小阈值时，触发该退避策略。 forward_to_all_member_of_local_az：转发至同可用区的所有后端服务器，无论健康检查结果是否正常；forward_to_healthy_member_of_remote_az：转发至非同可用区中所有健康检查结果正常的后端服务器；forward_to_all_healthy_member：转发至所有可用区中健康检查结果正常的后端服务器；forward_to_all_member：转发至所有可用区中的所有后端服务器，无论健康检查结果是否正常  取值范围：forward_to_all_member_of_local_az，forward_to_healthy_member_of_remote_az，forward_to_all_healthy_member，forward_to_all_member。 默认值：forward_to_all_member_of_local_az
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'azMinimumHealthyMemberPercentage' => 'int32',
        'azMinimumHealthyMemberCount' => 'int32',
        'azUnhealthyFallbackStrategy' => null
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
    * enable  参数解释：后端服务器组可用区亲和开关。  约束限制： - 当后端服务器组中有未设置availability_zone属性的iptarget类型的后端服务器时无法开启可用区亲和。 - 当后端服务器绑定TLS监听器时无法开启可用区亲和。 - 仅IP、UDP、TCP类型的后端服务器组支持开启可用区亲和。 - 当开启可用区亲和后，原本的pool_health配置失效。  取值范围：true或false，true表示开启，false表示关闭。
    * azMinimumHealthyMemberPercentage  参数解释：后端服务器组单可用区百分比健康度最小阈值，当“后端服务器组单可用区百分比健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区百分比健康度”是指在一个后端服务器组中，同可用区中健康检查结果正常的服务器数量与该后端服务器组中属于该可用区的后端服务器总数量的比值，百分比结果向上取整。例如：后端服务器组中属于可用区A的后端服务器总数量为3，设置后端服务器组单可用区百分比健康度最小阈值为66时，3x0.66=1.98向上取整为数量阈值2台，即属于可用区A的健康后端数小于2台时触发退避策略；设置后端服务器组单可用区百分比健康度最小阈值为67时，3x0.67=2.01向上取整为数量阈值3台，即属于可用区A的健康后端数小于3台时触发退避策略。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至100的整数，0-100为百分比范围，-1表示采用数量阈值。
    * azMinimumHealthyMemberCount  参数解释：后端服务器组单可用区中数量健康度最小阈值，当“后端服务器组单可用区中数量健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区中数量健康度”是指在一个后端服务器组中，属于同一个可用区的健康检查结果正常的服务器数量。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至10000的整数，0-10000为数量范围，-1表示采用百分比阈值。
    * azUnhealthyFallbackStrategy  参数解释：后端服务器组单可用区异常退避策略。后端服务器组的健康度小于所配置的最小阈值时，触发该退避策略。 forward_to_all_member_of_local_az：转发至同可用区的所有后端服务器，无论健康检查结果是否正常；forward_to_healthy_member_of_remote_az：转发至非同可用区中所有健康检查结果正常的后端服务器；forward_to_all_healthy_member：转发至所有可用区中健康检查结果正常的后端服务器；forward_to_all_member：转发至所有可用区中的所有后端服务器，无论健康检查结果是否正常  取值范围：forward_to_all_member_of_local_az，forward_to_healthy_member_of_remote_az，forward_to_all_healthy_member，forward_to_all_member。 默认值：forward_to_all_member_of_local_az
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'azMinimumHealthyMemberPercentage' => 'az_minimum_healthy_member_percentage',
            'azMinimumHealthyMemberCount' => 'az_minimum_healthy_member_count',
            'azUnhealthyFallbackStrategy' => 'az_unhealthy_fallback_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  参数解释：后端服务器组可用区亲和开关。  约束限制： - 当后端服务器组中有未设置availability_zone属性的iptarget类型的后端服务器时无法开启可用区亲和。 - 当后端服务器绑定TLS监听器时无法开启可用区亲和。 - 仅IP、UDP、TCP类型的后端服务器组支持开启可用区亲和。 - 当开启可用区亲和后，原本的pool_health配置失效。  取值范围：true或false，true表示开启，false表示关闭。
    * azMinimumHealthyMemberPercentage  参数解释：后端服务器组单可用区百分比健康度最小阈值，当“后端服务器组单可用区百分比健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区百分比健康度”是指在一个后端服务器组中，同可用区中健康检查结果正常的服务器数量与该后端服务器组中属于该可用区的后端服务器总数量的比值，百分比结果向上取整。例如：后端服务器组中属于可用区A的后端服务器总数量为3，设置后端服务器组单可用区百分比健康度最小阈值为66时，3x0.66=1.98向上取整为数量阈值2台，即属于可用区A的健康后端数小于2台时触发退避策略；设置后端服务器组单可用区百分比健康度最小阈值为67时，3x0.67=2.01向上取整为数量阈值3台，即属于可用区A的健康后端数小于3台时触发退避策略。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至100的整数，0-100为百分比范围，-1表示采用数量阈值。
    * azMinimumHealthyMemberCount  参数解释：后端服务器组单可用区中数量健康度最小阈值，当“后端服务器组单可用区中数量健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区中数量健康度”是指在一个后端服务器组中，属于同一个可用区的健康检查结果正常的服务器数量。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至10000的整数，0-10000为数量范围，-1表示采用百分比阈值。
    * azUnhealthyFallbackStrategy  参数解释：后端服务器组单可用区异常退避策略。后端服务器组的健康度小于所配置的最小阈值时，触发该退避策略。 forward_to_all_member_of_local_az：转发至同可用区的所有后端服务器，无论健康检查结果是否正常；forward_to_healthy_member_of_remote_az：转发至非同可用区中所有健康检查结果正常的后端服务器；forward_to_all_healthy_member：转发至所有可用区中健康检查结果正常的后端服务器；forward_to_all_member：转发至所有可用区中的所有后端服务器，无论健康检查结果是否正常  取值范围：forward_to_all_member_of_local_az，forward_to_healthy_member_of_remote_az，forward_to_all_healthy_member，forward_to_all_member。 默认值：forward_to_all_member_of_local_az
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'azMinimumHealthyMemberPercentage' => 'setAzMinimumHealthyMemberPercentage',
            'azMinimumHealthyMemberCount' => 'setAzMinimumHealthyMemberCount',
            'azUnhealthyFallbackStrategy' => 'setAzUnhealthyFallbackStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  参数解释：后端服务器组可用区亲和开关。  约束限制： - 当后端服务器组中有未设置availability_zone属性的iptarget类型的后端服务器时无法开启可用区亲和。 - 当后端服务器绑定TLS监听器时无法开启可用区亲和。 - 仅IP、UDP、TCP类型的后端服务器组支持开启可用区亲和。 - 当开启可用区亲和后，原本的pool_health配置失效。  取值范围：true或false，true表示开启，false表示关闭。
    * azMinimumHealthyMemberPercentage  参数解释：后端服务器组单可用区百分比健康度最小阈值，当“后端服务器组单可用区百分比健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区百分比健康度”是指在一个后端服务器组中，同可用区中健康检查结果正常的服务器数量与该后端服务器组中属于该可用区的后端服务器总数量的比值，百分比结果向上取整。例如：后端服务器组中属于可用区A的后端服务器总数量为3，设置后端服务器组单可用区百分比健康度最小阈值为66时，3x0.66=1.98向上取整为数量阈值2台，即属于可用区A的健康后端数小于2台时触发退避策略；设置后端服务器组单可用区百分比健康度最小阈值为67时，3x0.67=2.01向上取整为数量阈值3台，即属于可用区A的健康后端数小于3台时触发退避策略。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至100的整数，0-100为百分比范围，-1表示采用数量阈值。
    * azMinimumHealthyMemberCount  参数解释：后端服务器组单可用区中数量健康度最小阈值，当“后端服务器组单可用区中数量健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区中数量健康度”是指在一个后端服务器组中，属于同一个可用区的健康检查结果正常的服务器数量。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至10000的整数，0-10000为数量范围，-1表示采用百分比阈值。
    * azUnhealthyFallbackStrategy  参数解释：后端服务器组单可用区异常退避策略。后端服务器组的健康度小于所配置的最小阈值时，触发该退避策略。 forward_to_all_member_of_local_az：转发至同可用区的所有后端服务器，无论健康检查结果是否正常；forward_to_healthy_member_of_remote_az：转发至非同可用区中所有健康检查结果正常的后端服务器；forward_to_all_healthy_member：转发至所有可用区中健康检查结果正常的后端服务器；forward_to_all_member：转发至所有可用区中的所有后端服务器，无论健康检查结果是否正常  取值范围：forward_to_all_member_of_local_az，forward_to_healthy_member_of_remote_az，forward_to_all_healthy_member，forward_to_all_member。 默认值：forward_to_all_member_of_local_az
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'azMinimumHealthyMemberPercentage' => 'getAzMinimumHealthyMemberPercentage',
            'azMinimumHealthyMemberCount' => 'getAzMinimumHealthyMemberCount',
            'azUnhealthyFallbackStrategy' => 'getAzUnhealthyFallbackStrategy'
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['azMinimumHealthyMemberPercentage'] = isset($data['azMinimumHealthyMemberPercentage']) ? $data['azMinimumHealthyMemberPercentage'] : null;
        $this->container['azMinimumHealthyMemberCount'] = isset($data['azMinimumHealthyMemberCount']) ? $data['azMinimumHealthyMemberCount'] : null;
        $this->container['azUnhealthyFallbackStrategy'] = isset($data['azUnhealthyFallbackStrategy']) ? $data['azUnhealthyFallbackStrategy'] : null;
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
    * Gets enable
    *  参数解释：后端服务器组可用区亲和开关。  约束限制： - 当后端服务器组中有未设置availability_zone属性的iptarget类型的后端服务器时无法开启可用区亲和。 - 当后端服务器绑定TLS监听器时无法开启可用区亲和。 - 仅IP、UDP、TCP类型的后端服务器组支持开启可用区亲和。 - 当开启可用区亲和后，原本的pool_health配置失效。  取值范围：true或false，true表示开启，false表示关闭。
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 参数解释：后端服务器组可用区亲和开关。  约束限制： - 当后端服务器组中有未设置availability_zone属性的iptarget类型的后端服务器时无法开启可用区亲和。 - 当后端服务器绑定TLS监听器时无法开启可用区亲和。 - 仅IP、UDP、TCP类型的后端服务器组支持开启可用区亲和。 - 当开启可用区亲和后，原本的pool_health配置失效。  取值范围：true或false，true表示开启，false表示关闭。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets azMinimumHealthyMemberPercentage
    *  参数解释：后端服务器组单可用区百分比健康度最小阈值，当“后端服务器组单可用区百分比健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区百分比健康度”是指在一个后端服务器组中，同可用区中健康检查结果正常的服务器数量与该后端服务器组中属于该可用区的后端服务器总数量的比值，百分比结果向上取整。例如：后端服务器组中属于可用区A的后端服务器总数量为3，设置后端服务器组单可用区百分比健康度最小阈值为66时，3x0.66=1.98向上取整为数量阈值2台，即属于可用区A的健康后端数小于2台时触发退避策略；设置后端服务器组单可用区百分比健康度最小阈值为67时，3x0.67=2.01向上取整为数量阈值3台，即属于可用区A的健康后端数小于3台时触发退避策略。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至100的整数，0-100为百分比范围，-1表示采用数量阈值。
    *
    * @return int|null
    */
    public function getAzMinimumHealthyMemberPercentage()
    {
        return $this->container['azMinimumHealthyMemberPercentage'];
    }

    /**
    * Sets azMinimumHealthyMemberPercentage
    *
    * @param int|null $azMinimumHealthyMemberPercentage 参数解释：后端服务器组单可用区百分比健康度最小阈值，当“后端服务器组单可用区百分比健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区百分比健康度”是指在一个后端服务器组中，同可用区中健康检查结果正常的服务器数量与该后端服务器组中属于该可用区的后端服务器总数量的比值，百分比结果向上取整。例如：后端服务器组中属于可用区A的后端服务器总数量为3，设置后端服务器组单可用区百分比健康度最小阈值为66时，3x0.66=1.98向上取整为数量阈值2台，即属于可用区A的健康后端数小于2台时触发退避策略；设置后端服务器组单可用区百分比健康度最小阈值为67时，3x0.67=2.01向上取整为数量阈值3台，即属于可用区A的健康后端数小于3台时触发退避策略。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至100的整数，0-100为百分比范围，-1表示采用数量阈值。
    *
    * @return $this
    */
    public function setAzMinimumHealthyMemberPercentage($azMinimumHealthyMemberPercentage)
    {
        $this->container['azMinimumHealthyMemberPercentage'] = $azMinimumHealthyMemberPercentage;
        return $this;
    }

    /**
    * Gets azMinimumHealthyMemberCount
    *  参数解释：后端服务器组单可用区中数量健康度最小阈值，当“后端服务器组单可用区中数量健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区中数量健康度”是指在一个后端服务器组中，属于同一个可用区的健康检查结果正常的服务器数量。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至10000的整数，0-10000为数量范围，-1表示采用百分比阈值。
    *
    * @return int|null
    */
    public function getAzMinimumHealthyMemberCount()
    {
        return $this->container['azMinimumHealthyMemberCount'];
    }

    /**
    * Sets azMinimumHealthyMemberCount
    *
    * @param int|null $azMinimumHealthyMemberCount 参数解释：后端服务器组单可用区中数量健康度最小阈值，当“后端服务器组单可用区中数量健康度”小于该阈值时，触发可用区异常退避策略。“后端服务器组单可用区中数量健康度”是指在一个后端服务器组中，属于同一个可用区的健康检查结果正常的服务器数量。  约束限制： - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时为-1 - enable为true时，az_minimum_healthy_member_percentage与az_minimum_healthy_member_count不能同时不为-1  取值范围：-1至10000的整数，0-10000为数量范围，-1表示采用百分比阈值。
    *
    * @return $this
    */
    public function setAzMinimumHealthyMemberCount($azMinimumHealthyMemberCount)
    {
        $this->container['azMinimumHealthyMemberCount'] = $azMinimumHealthyMemberCount;
        return $this;
    }

    /**
    * Gets azUnhealthyFallbackStrategy
    *  参数解释：后端服务器组单可用区异常退避策略。后端服务器组的健康度小于所配置的最小阈值时，触发该退避策略。 forward_to_all_member_of_local_az：转发至同可用区的所有后端服务器，无论健康检查结果是否正常；forward_to_healthy_member_of_remote_az：转发至非同可用区中所有健康检查结果正常的后端服务器；forward_to_all_healthy_member：转发至所有可用区中健康检查结果正常的后端服务器；forward_to_all_member：转发至所有可用区中的所有后端服务器，无论健康检查结果是否正常  取值范围：forward_to_all_member_of_local_az，forward_to_healthy_member_of_remote_az，forward_to_all_healthy_member，forward_to_all_member。 默认值：forward_to_all_member_of_local_az
    *
    * @return string|null
    */
    public function getAzUnhealthyFallbackStrategy()
    {
        return $this->container['azUnhealthyFallbackStrategy'];
    }

    /**
    * Sets azUnhealthyFallbackStrategy
    *
    * @param string|null $azUnhealthyFallbackStrategy 参数解释：后端服务器组单可用区异常退避策略。后端服务器组的健康度小于所配置的最小阈值时，触发该退避策略。 forward_to_all_member_of_local_az：转发至同可用区的所有后端服务器，无论健康检查结果是否正常；forward_to_healthy_member_of_remote_az：转发至非同可用区中所有健康检查结果正常的后端服务器；forward_to_all_healthy_member：转发至所有可用区中健康检查结果正常的后端服务器；forward_to_all_member：转发至所有可用区中的所有后端服务器，无论健康检查结果是否正常  取值范围：forward_to_all_member_of_local_az，forward_to_healthy_member_of_remote_az，forward_to_all_healthy_member，forward_to_all_member。 默认值：forward_to_all_member_of_local_az
    *
    * @return $this
    */
    public function setAzUnhealthyFallbackStrategy($azUnhealthyFallbackStrategy)
    {
        $this->container['azUnhealthyFallbackStrategy'] = $azUnhealthyFallbackStrategy;
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

