<?php

namespace HuaweiCloud\SDK\GaussDBforopenGauss\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListLtsConfigsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListLtsConfigsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 实例名称。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceMode  **参数解释**: 实例类型，不传该参数默认查询全部实例类型。 **约束限制**: 不涉及。 **取值范围**: - Ha 为集中式类型。 - Independent 为独立部署类型。 - Combined 为混合部署类型。  **默认取值**: 不涉及。
    * enterpriseProjectId  **参数解释**: 企业项目ID。只有企业租户时该参数才生效。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。例如：该参数指定为1，limit指定为10，则只展示第2-11条数据。 **约束限制**: 不涉及。 **取值范围**: [0, 2^31-1] **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。例如该参数设定为10，则查询结果最多只显示10条记录。 **约束限制**: 不涉及。 **取值范围**: [1, 50] **默认取值**: 50
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceMode' => 'string',
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 实例名称。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceMode  **参数解释**: 实例类型，不传该参数默认查询全部实例类型。 **约束限制**: 不涉及。 **取值范围**: - Ha 为集中式类型。 - Independent 为独立部署类型。 - Combined 为混合部署类型。  **默认取值**: 不涉及。
    * enterpriseProjectId  **参数解释**: 企业项目ID。只有企业租户时该参数才生效。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。例如：该参数指定为1，limit指定为10，则只展示第2-11条数据。 **约束限制**: 不涉及。 **取值范围**: [0, 2^31-1] **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。例如该参数设定为10，则查询结果最多只显示10条记录。 **约束限制**: 不涉及。 **取值范围**: [1, 50] **默认取值**: 50
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'instanceId' => null,
        'instanceName' => null,
        'instanceMode' => null,
        'enterpriseProjectId' => null,
        'offset' => null,
        'limit' => null
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
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 实例名称。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceMode  **参数解释**: 实例类型，不传该参数默认查询全部实例类型。 **约束限制**: 不涉及。 **取值范围**: - Ha 为集中式类型。 - Independent 为独立部署类型。 - Combined 为混合部署类型。  **默认取值**: 不涉及。
    * enterpriseProjectId  **参数解释**: 企业项目ID。只有企业租户时该参数才生效。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。例如：该参数指定为1，limit指定为10，则只展示第2-11条数据。 **约束限制**: 不涉及。 **取值范围**: [0, 2^31-1] **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。例如该参数设定为10，则查询结果最多只显示10条记录。 **约束限制**: 不涉及。 **取值范围**: [1, 50] **默认取值**: 50
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceMode' => 'instance_mode',
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 实例名称。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceMode  **参数解释**: 实例类型，不传该参数默认查询全部实例类型。 **约束限制**: 不涉及。 **取值范围**: - Ha 为集中式类型。 - Independent 为独立部署类型。 - Combined 为混合部署类型。  **默认取值**: 不涉及。
    * enterpriseProjectId  **参数解释**: 企业项目ID。只有企业租户时该参数才生效。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。例如：该参数指定为1，limit指定为10，则只展示第2-11条数据。 **约束限制**: 不涉及。 **取值范围**: [0, 2^31-1] **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。例如该参数设定为10，则查询结果最多只显示10条记录。 **约束限制**: 不涉及。 **取值范围**: [1, 50] **默认取值**: 50
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceMode' => 'setInstanceMode',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    * instanceId  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceName  **参数解释**: 实例名称。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    * instanceMode  **参数解释**: 实例类型，不传该参数默认查询全部实例类型。 **约束限制**: 不涉及。 **取值范围**: - Ha 为集中式类型。 - Independent 为独立部署类型。 - Combined 为混合部署类型。  **默认取值**: 不涉及。
    * enterpriseProjectId  **参数解释**: 企业项目ID。只有企业租户时该参数才生效。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    * offset  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。例如：该参数指定为1，limit指定为10，则只展示第2-11条数据。 **约束限制**: 不涉及。 **取值范围**: [0, 2^31-1] **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    * limit  **参数解释**: 查询记录数。例如该参数设定为10，则查询结果最多只显示10条记录。 **约束限制**: 不涉及。 **取值范围**: [1, 50] **默认取值**: 50
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceMode' => 'getInstanceMode',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
    const INSTANCE_MODE_HA = 'Ha';
    const INSTANCE_MODE_INDEPENDENT = 'Independent';
    const INSTANCE_MODE_COMBINED = 'Combined';
    

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
    public function getInstanceModeAllowableValues()
    {
        return [
            self::INSTANCE_MODE_HA,
            self::INSTANCE_MODE_INDEPENDENT,
            self::INSTANCE_MODE_COMBINED,
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
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceMode'] = isset($data['instanceMode']) ? $data['instanceMode'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
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

        if ($this->container['instanceId'] === null) {
            $invalidProperties[] = "'instanceId' can't be null";
        }
            $allowedValues = $this->getInstanceModeAllowableValues();
                if (!is_null($this->container['instanceMode']) && !in_array($this->container['instanceMode'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceMode', must be one of '%s'",
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
    *  **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
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
    * @param string|null $xLanguage **参数解释**: 语言。 **约束限制**: 不涉及。 **取值范围**: - zh-cn  - en-us  **默认取值**: en-us
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return string
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string $instanceId **参数解释**: 实例ID，此参数是用户创建实例的唯一标识。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  **参数解释**: 实例名称。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
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
    * @param string|null $instanceName **参数解释**: 实例名称。 **约束限制**: 不涉及。 **取值范围**: 只能由英文字母、数字组成，且长度为36个字符。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceMode
    *  **参数解释**: 实例类型，不传该参数默认查询全部实例类型。 **约束限制**: 不涉及。 **取值范围**: - Ha 为集中式类型。 - Independent 为独立部署类型。 - Combined 为混合部署类型。  **默认取值**: 不涉及。
    *
    * @return string|null
    */
    public function getInstanceMode()
    {
        return $this->container['instanceMode'];
    }

    /**
    * Sets instanceMode
    *
    * @param string|null $instanceMode **参数解释**: 实例类型，不传该参数默认查询全部实例类型。 **约束限制**: 不涉及。 **取值范围**: - Ha 为集中式类型。 - Independent 为独立部署类型。 - Combined 为混合部署类型。  **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setInstanceMode($instanceMode)
    {
        $this->container['instanceMode'] = $instanceMode;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID。只有企业租户时该参数才生效。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID。只有企业租户时该参数才生效。 **约束限制**: 不涉及。 **取值范围**: 不涉及。 **默认取值**: 不涉及。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。例如：该参数指定为1，limit指定为10，则只展示第2-11条数据。 **约束限制**: 不涉及。 **取值范围**: [0, 2^31-1] **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
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
    * @param int|null $offset **参数解释**: 索引位置，偏移量。从第一条数据偏移offset条数据后开始查询。例如：该参数指定为1，limit指定为10，则只展示第2-11条数据。 **约束限制**: 不涉及。 **取值范围**: [0, 2^31-1] **默认取值**: 默认为0（偏移0条数据，表示从第一条数据开始查询）。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 查询记录数。例如该参数设定为10，则查询结果最多只显示10条记录。 **约束限制**: 不涉及。 **取值范围**: [1, 50] **默认取值**: 50
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
    * @param int|null $limit **参数解释**: 查询记录数。例如该参数设定为10，则查询结果最多只显示10条记录。 **约束限制**: 不涉及。 **取值范围**: [1, 50] **默认取值**: 50
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

