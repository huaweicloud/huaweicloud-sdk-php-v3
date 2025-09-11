<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowCrossCloudDisasterRelationsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowCrossCloudDisasterRelationsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * instanceName  实例名称，可查询过滤本端实例名称。
    * instanceId  实例id，可查询过滤本端实例id。
    * drRole  容灾角色 - master 主 - disaster 备
    * drType  容灾类型 - stream - dorado
    * drStatus  状态 - normal - failover - pending - pre_check_failed - pre_checking
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'instanceName' => 'string',
            'instanceId' => 'string',
            'drRole' => 'string',
            'drType' => 'string',
            'drStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * instanceName  实例名称，可查询过滤本端实例名称。
    * instanceId  实例id，可查询过滤本端实例id。
    * drRole  容灾角色 - master 主 - disaster 备
    * drType  容灾类型 - stream - dorado
    * drStatus  状态 - normal - failover - pending - pre_check_failed - pre_checking
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'instanceName' => null,
        'instanceId' => null,
        'drRole' => null,
        'drType' => null,
        'drStatus' => null
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
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * instanceName  实例名称，可查询过滤本端实例名称。
    * instanceId  实例id，可查询过滤本端实例id。
    * drRole  容灾角色 - master 主 - disaster 备
    * drType  容灾类型 - stream - dorado
    * drStatus  状态 - normal - failover - pending - pre_check_failed - pre_checking
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'limit' => 'limit',
            'offset' => 'offset',
            'instanceName' => 'instance_name',
            'instanceId' => 'instance_id',
            'drRole' => 'dr_role',
            'drType' => 'dr_type',
            'drStatus' => 'dr_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * instanceName  实例名称，可查询过滤本端实例名称。
    * instanceId  实例id，可查询过滤本端实例id。
    * drRole  容灾角色 - master 主 - disaster 备
    * drType  容灾类型 - stream - dorado
    * drStatus  状态 - normal - failover - pending - pre_check_failed - pre_checking
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'instanceName' => 'setInstanceName',
            'instanceId' => 'setInstanceId',
            'drRole' => 'setDrRole',
            'drType' => 'setDrType',
            'drStatus' => 'setDrStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    * limit  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    * offset  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    * instanceName  实例名称，可查询过滤本端实例名称。
    * instanceId  实例id，可查询过滤本端实例id。
    * drRole  容灾角色 - master 主 - disaster 备
    * drType  容灾类型 - stream - dorado
    * drStatus  状态 - normal - failover - pending - pre_check_failed - pre_checking
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'instanceName' => 'getInstanceName',
            'instanceId' => 'getInstanceId',
            'drRole' => 'getDrRole',
            'drType' => 'getDrType',
            'drStatus' => 'getDrStatus'
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
    const X_LANGUAGE_ZH_CN = 'zh-cn';
    const X_LANGUAGE_EN_US = 'en-us';
    const DR_ROLE_MASTER = 'master';
    const DR_ROLE_DISASTER = 'disaster';
    const DR_TYPE_STREAM = 'stream';
    const DR_TYPE_DORADO = 'dorado';
    const DR_STATUS_NORMAL = 'normal';
    const DR_STATUS_FAILOVER = 'failover';
    const DR_STATUS_PENDING = 'pending';
    const DR_STATUS_PRE_CHECK_FAILED = 'pre_check_failed';
    const DR_STATUS_PRE_CHECKING = 'pre_checking';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getXLanguageAllowableValues()
    {
        return [
            self::X_LANGUAGE_ZH_CN,
            self::X_LANGUAGE_EN_US,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDrRoleAllowableValues()
    {
        return [
            self::DR_ROLE_MASTER,
            self::DR_ROLE_DISASTER,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDrTypeAllowableValues()
    {
        return [
            self::DR_TYPE_STREAM,
            self::DR_TYPE_DORADO,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDrStatusAllowableValues()
    {
        return [
            self::DR_STATUS_NORMAL,
            self::DR_STATUS_FAILOVER,
            self::DR_STATUS_PENDING,
            self::DR_STATUS_PRE_CHECK_FAILED,
            self::DR_STATUS_PRE_CHECKING,
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['drRole'] = isset($data['drRole']) ? $data['drRole'] : null;
        $this->container['drType'] = isset($data['drType']) ? $data['drType'] : null;
        $this->container['drStatus'] = isset($data['drStatus']) ? $data['drStatus'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getXLanguageAllowableValues();
                if (!is_null($this->container['xLanguage']) && !in_array($this->container['xLanguage'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'xLanguage', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDrRoleAllowableValues();
                if (!is_null($this->container['drRole']) && !in_array($this->container['drRole'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'drRole', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDrTypeAllowableValues();
                if (!is_null($this->container['drType']) && !in_array($this->container['drType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'drType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDrStatusAllowableValues();
                if (!is_null($this->container['drStatus']) && !in_array($this->container['drStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'drStatus', must be one of '%s'",
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
    * Gets xLanguage
    *  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**:   - zh-cn   - en-us  **默认取值**: en-us
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets limit
    *  查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询记录数。默认为100，不能为负数，最小值为1，最大值为100。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询，默认为0（偏移0条数据，表示从第一条数据开始查询），必须为数字，不能为负数。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets instanceName
    *  实例名称，可查询过滤本端实例名称。
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 实例名称，可查询过滤本端实例名称。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceId
    *  实例id，可查询过滤本端实例id。
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 实例id，可查询过滤本端实例id。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets drRole
    *  容灾角色 - master 主 - disaster 备
    *
    * @return string|null
    */
    public function getDrRole()
    {
        return $this->container['drRole'];
    }

    /**
    * Sets drRole
    *
    * @param string|null $drRole 容灾角色 - master 主 - disaster 备
    *
    * @return $this
    */
    public function setDrRole($drRole)
    {
        $this->container['drRole'] = $drRole;
        return $this;
    }

    /**
    * Gets drType
    *  容灾类型 - stream - dorado
    *
    * @return string|null
    */
    public function getDrType()
    {
        return $this->container['drType'];
    }

    /**
    * Sets drType
    *
    * @param string|null $drType 容灾类型 - stream - dorado
    *
    * @return $this
    */
    public function setDrType($drType)
    {
        $this->container['drType'] = $drType;
        return $this;
    }

    /**
    * Gets drStatus
    *  状态 - normal - failover - pending - pre_check_failed - pre_checking
    *
    * @return string|null
    */
    public function getDrStatus()
    {
        return $this->container['drStatus'];
    }

    /**
    * Sets drStatus
    *
    * @param string|null $drStatus 状态 - normal - failover - pending - pre_check_failed - pre_checking
    *
    * @return $this
    */
    public function setDrStatus($drStatus)
    {
        $this->container['drStatus'] = $drStatus;
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

