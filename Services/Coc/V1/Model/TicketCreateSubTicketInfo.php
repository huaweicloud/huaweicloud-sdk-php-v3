<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TicketCreateSubTicketInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TicketCreateSubTicketInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * appName  **参数解释：** 变更服务。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更服务中文名称。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** 变更Region。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更RegionID。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetType  **参数解释：** 目标选项信息，该值可传递不同的信息，当传递变更应用时，该值传递change_scope，当传递变更计划时，该值传递child_ticket。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetValue  **参数解释：** 传递变更单RegionID，需和target_type配合使用。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedStartTime  **参数解释：** 变更单计划开始时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedEndTime  **参数解释：** 变更单计划结束时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * executors  **参数解释：** 变更单实施人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cooperators  **参数解释：** 变更单配合人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'appName' => 'string',
            'region' => 'string',
            'targetType' => 'string',
            'targetValue' => 'string',
            'expectedStartTime' => 'int',
            'expectedEndTime' => 'int',
            'executors' => 'string',
            'cooperators' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * appName  **参数解释：** 变更服务。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更服务中文名称。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** 变更Region。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更RegionID。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetType  **参数解释：** 目标选项信息，该值可传递不同的信息，当传递变更应用时，该值传递change_scope，当传递变更计划时，该值传递child_ticket。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetValue  **参数解释：** 传递变更单RegionID，需和target_type配合使用。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedStartTime  **参数解释：** 变更单计划开始时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedEndTime  **参数解释：** 变更单计划结束时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * executors  **参数解释：** 变更单实施人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cooperators  **参数解释：** 变更单配合人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'appName' => null,
        'region' => null,
        'targetType' => null,
        'targetValue' => null,
        'expectedStartTime' => 'int64',
        'expectedEndTime' => 'int64',
        'executors' => null,
        'cooperators' => null
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
    * appName  **参数解释：** 变更服务。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更服务中文名称。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** 变更Region。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更RegionID。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetType  **参数解释：** 目标选项信息，该值可传递不同的信息，当传递变更应用时，该值传递change_scope，当传递变更计划时，该值传递child_ticket。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetValue  **参数解释：** 传递变更单RegionID，需和target_type配合使用。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedStartTime  **参数解释：** 变更单计划开始时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedEndTime  **参数解释：** 变更单计划结束时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * executors  **参数解释：** 变更单实施人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cooperators  **参数解释：** 变更单配合人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'appName' => 'app_name',
            'region' => 'region',
            'targetType' => 'target_type',
            'targetValue' => 'target_value',
            'expectedStartTime' => 'expected_start_time',
            'expectedEndTime' => 'expected_end_time',
            'executors' => 'executors',
            'cooperators' => 'cooperators'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * appName  **参数解释：** 变更服务。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更服务中文名称。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** 变更Region。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更RegionID。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetType  **参数解释：** 目标选项信息，该值可传递不同的信息，当传递变更应用时，该值传递change_scope，当传递变更计划时，该值传递child_ticket。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetValue  **参数解释：** 传递变更单RegionID，需和target_type配合使用。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedStartTime  **参数解释：** 变更单计划开始时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedEndTime  **参数解释：** 变更单计划结束时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * executors  **参数解释：** 变更单实施人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cooperators  **参数解释：** 变更单配合人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'appName' => 'setAppName',
            'region' => 'setRegion',
            'targetType' => 'setTargetType',
            'targetValue' => 'setTargetValue',
            'expectedStartTime' => 'setExpectedStartTime',
            'expectedEndTime' => 'setExpectedEndTime',
            'executors' => 'setExecutors',
            'cooperators' => 'setCooperators'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * appName  **参数解释：** 变更服务。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更服务中文名称。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * region  **参数解释：** 变更Region。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更RegionID。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetType  **参数解释：** 目标选项信息，该值可传递不同的信息，当传递变更应用时，该值传递change_scope，当传递变更计划时，该值传递child_ticket。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    * targetValue  **参数解释：** 传递变更单RegionID，需和target_type配合使用。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedStartTime  **参数解释：** 变更单计划开始时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * expectedEndTime  **参数解释：** 变更单计划结束时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * executors  **参数解释：** 变更单实施人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    * cooperators  **参数解释：** 变更单配合人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'appName' => 'getAppName',
            'region' => 'getRegion',
            'targetType' => 'getTargetType',
            'targetValue' => 'getTargetValue',
            'expectedStartTime' => 'getExpectedStartTime',
            'expectedEndTime' => 'getExpectedEndTime',
            'executors' => 'getExecutors',
            'cooperators' => 'getCooperators'
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
        $this->container['appName'] = isset($data['appName']) ? $data['appName'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['targetType'] = isset($data['targetType']) ? $data['targetType'] : null;
        $this->container['targetValue'] = isset($data['targetValue']) ? $data['targetValue'] : null;
        $this->container['expectedStartTime'] = isset($data['expectedStartTime']) ? $data['expectedStartTime'] : null;
        $this->container['expectedEndTime'] = isset($data['expectedEndTime']) ? $data['expectedEndTime'] : null;
        $this->container['executors'] = isset($data['executors']) ? $data['executors'] : null;
        $this->container['cooperators'] = isset($data['cooperators']) ? $data['cooperators'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) > 255)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['appName']) && (mb_strlen($this->container['appName']) < 1)) {
                $invalidProperties[] = "invalid value for 'appName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 255)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 1)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetType']) && (mb_strlen($this->container['targetType']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetType', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetType']) && (mb_strlen($this->container['targetType']) < 0)) {
                $invalidProperties[] = "invalid value for 'targetType', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) > 255)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['targetValue']) && (mb_strlen($this->container['targetValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expectedStartTime']) && ($this->container['expectedStartTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'expectedStartTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['expectedStartTime']) && ($this->container['expectedStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expectedStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expectedEndTime']) && ($this->container['expectedEndTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'expectedEndTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['expectedEndTime']) && ($this->container['expectedEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'expectedEndTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['executors']) && (mb_strlen($this->container['executors']) > 255)) {
                $invalidProperties[] = "invalid value for 'executors', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['executors']) && (mb_strlen($this->container['executors']) < 1)) {
                $invalidProperties[] = "invalid value for 'executors', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['cooperators']) && (mb_strlen($this->container['cooperators']) > 255)) {
                $invalidProperties[] = "invalid value for 'cooperators', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['cooperators']) && (mb_strlen($this->container['cooperators']) < 1)) {
                $invalidProperties[] = "invalid value for 'cooperators', the character length must be bigger than or equal to 1.";
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
    * Gets appName
    *  **参数解释：** 变更服务。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更服务中文名称。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getAppName()
    {
        return $this->container['appName'];
    }

    /**
    * Sets appName
    *
    * @param string|null $appName **参数解释：** 变更服务。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更服务中文名称。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setAppName($appName)
    {
        $this->container['appName'] = $appName;
        return $this;
    }

    /**
    * Gets region
    *  **参数解释：** 变更Region。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更RegionID。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释：** 变更Region。 **约束限制：** 当target_type为change_scope时，该字段需传递对应的变更RegionID。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
        return $this;
    }

    /**
    * Gets targetType
    *  **参数解释：** 目标选项信息，该值可传递不同的信息，当传递变更应用时，该值传递change_scope，当传递变更计划时，该值传递child_ticket。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTargetType()
    {
        return $this->container['targetType'];
    }

    /**
    * Sets targetType
    *
    * @param string|null $targetType **参数解释：** 目标选项信息，该值可传递不同的信息，当传递变更应用时，该值传递change_scope，当传递变更计划时，该值传递child_ticket。 **约束限制：** 不涉及 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTargetType($targetType)
    {
        $this->container['targetType'] = $targetType;
        return $this;
    }

    /**
    * Gets targetValue
    *  **参数解释：** 传递变更单RegionID，需和target_type配合使用。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getTargetValue()
    {
        return $this->container['targetValue'];
    }

    /**
    * Sets targetValue
    *
    * @param string|null $targetValue **参数解释：** 传递变更单RegionID，需和target_type配合使用。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setTargetValue($targetValue)
    {
        $this->container['targetValue'] = $targetValue;
        return $this;
    }

    /**
    * Gets expectedStartTime
    *  **参数解释：** 变更单计划开始时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getExpectedStartTime()
    {
        return $this->container['expectedStartTime'];
    }

    /**
    * Sets expectedStartTime
    *
    * @param int|null $expectedStartTime **参数解释：** 变更单计划开始时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExpectedStartTime($expectedStartTime)
    {
        $this->container['expectedStartTime'] = $expectedStartTime;
        return $this;
    }

    /**
    * Gets expectedEndTime
    *  **参数解释：** 变更单计划结束时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return int|null
    */
    public function getExpectedEndTime()
    {
        return $this->container['expectedEndTime'];
    }

    /**
    * Sets expectedEndTime
    *
    * @param int|null $expectedEndTime **参数解释：** 变更单计划结束时间时间戳。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExpectedEndTime($expectedEndTime)
    {
        $this->container['expectedEndTime'] = $expectedEndTime;
        return $this;
    }

    /**
    * Gets executors
    *  **参数解释：** 变更单实施人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getExecutors()
    {
        return $this->container['executors'];
    }

    /**
    * Sets executors
    *
    * @param string|null $executors **参数解释：** 变更单实施人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setExecutors($executors)
    {
        $this->container['executors'] = $executors;
        return $this;
    }

    /**
    * Gets cooperators
    *  **参数解释：** 变更单配合人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return string|null
    */
    public function getCooperators()
    {
        return $this->container['cooperators'];
    }

    /**
    * Sets cooperators
    *
    * @param string|null $cooperators **参数解释：** 变更单配合人。 **约束限制：** 当target_type值为child_ticket时，该值有效。 **取值范围：** 不涉及 **默认取值：** 不涉及
    *
    * @return $this
    */
    public function setCooperators($cooperators)
    {
        $this->container['cooperators'] = $cooperators;
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

