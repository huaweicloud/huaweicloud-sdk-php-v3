<?php

namespace HuaweiCloud\SDK\Ddm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ConfigSqlBlacklistReqV3VO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ConfigSqlBlacklistReqV3VO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sqlBlackListFullCheck  **参数解释**：  全量匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * requestId  **参数解释**：  请求ID。  **约束限制**：  不涉及  **取值范围**：  只能由英文字母、数字组成。  **默认取值**：  不涉及。
    * projectId  **参数解释**：  租户在某一Region下的project ID。  获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-ddm/ddm_api_01_0063.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，且长度为32个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。  **默认取值**：  不涉及。
    * logicDbName  **参数解释**：  逻辑库名称。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListPrefixCheck  **参数解释**：  前缀匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListRegexCheck  **参数解释**：  正则匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sqlBlackListFullCheck' => 'string',
            'requestId' => 'string',
            'projectId' => 'string',
            'instanceId' => 'string',
            'logicDbName' => 'string',
            'sqlBlackListPrefixCheck' => 'string',
            'sqlBlackListRegexCheck' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sqlBlackListFullCheck  **参数解释**：  全量匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * requestId  **参数解释**：  请求ID。  **约束限制**：  不涉及  **取值范围**：  只能由英文字母、数字组成。  **默认取值**：  不涉及。
    * projectId  **参数解释**：  租户在某一Region下的project ID。  获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-ddm/ddm_api_01_0063.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，且长度为32个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。  **默认取值**：  不涉及。
    * logicDbName  **参数解释**：  逻辑库名称。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListPrefixCheck  **参数解释**：  前缀匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListRegexCheck  **参数解释**：  正则匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sqlBlackListFullCheck' => null,
        'requestId' => null,
        'projectId' => null,
        'instanceId' => null,
        'logicDbName' => null,
        'sqlBlackListPrefixCheck' => null,
        'sqlBlackListRegexCheck' => null
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
    * sqlBlackListFullCheck  **参数解释**：  全量匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * requestId  **参数解释**：  请求ID。  **约束限制**：  不涉及  **取值范围**：  只能由英文字母、数字组成。  **默认取值**：  不涉及。
    * projectId  **参数解释**：  租户在某一Region下的project ID。  获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-ddm/ddm_api_01_0063.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，且长度为32个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。  **默认取值**：  不涉及。
    * logicDbName  **参数解释**：  逻辑库名称。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListPrefixCheck  **参数解释**：  前缀匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListRegexCheck  **参数解释**：  正则匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sqlBlackListFullCheck' => 'sql_black_list_full_check',
            'requestId' => 'request_id',
            'projectId' => 'project_id',
            'instanceId' => 'instance_id',
            'logicDbName' => 'logic_db_name',
            'sqlBlackListPrefixCheck' => 'sql_black_list_prefix_check',
            'sqlBlackListRegexCheck' => 'sql_black_list_regex_check'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sqlBlackListFullCheck  **参数解释**：  全量匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * requestId  **参数解释**：  请求ID。  **约束限制**：  不涉及  **取值范围**：  只能由英文字母、数字组成。  **默认取值**：  不涉及。
    * projectId  **参数解释**：  租户在某一Region下的project ID。  获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-ddm/ddm_api_01_0063.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，且长度为32个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。  **默认取值**：  不涉及。
    * logicDbName  **参数解释**：  逻辑库名称。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListPrefixCheck  **参数解释**：  前缀匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListRegexCheck  **参数解释**：  正则匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'sqlBlackListFullCheck' => 'setSqlBlackListFullCheck',
            'requestId' => 'setRequestId',
            'projectId' => 'setProjectId',
            'instanceId' => 'setInstanceId',
            'logicDbName' => 'setLogicDbName',
            'sqlBlackListPrefixCheck' => 'setSqlBlackListPrefixCheck',
            'sqlBlackListRegexCheck' => 'setSqlBlackListRegexCheck'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sqlBlackListFullCheck  **参数解释**：  全量匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * requestId  **参数解释**：  请求ID。  **约束限制**：  不涉及  **取值范围**：  只能由英文字母、数字组成。  **默认取值**：  不涉及。
    * projectId  **参数解释**：  租户在某一Region下的project ID。  获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-ddm/ddm_api_01_0063.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，且长度为32个字符。  **默认取值**：  不涉及。
    * instanceId  **参数解释**：  实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。  **默认取值**：  不涉及。
    * logicDbName  **参数解释**：  逻辑库名称。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListPrefixCheck  **参数解释**：  前缀匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    * sqlBlackListRegexCheck  **参数解释**：  正则匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'sqlBlackListFullCheck' => 'getSqlBlackListFullCheck',
            'requestId' => 'getRequestId',
            'projectId' => 'getProjectId',
            'instanceId' => 'getInstanceId',
            'logicDbName' => 'getLogicDbName',
            'sqlBlackListPrefixCheck' => 'getSqlBlackListPrefixCheck',
            'sqlBlackListRegexCheck' => 'getSqlBlackListRegexCheck'
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
        $this->container['sqlBlackListFullCheck'] = isset($data['sqlBlackListFullCheck']) ? $data['sqlBlackListFullCheck'] : null;
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['logicDbName'] = isset($data['logicDbName']) ? $data['logicDbName'] : null;
        $this->container['sqlBlackListPrefixCheck'] = isset($data['sqlBlackListPrefixCheck']) ? $data['sqlBlackListPrefixCheck'] : null;
        $this->container['sqlBlackListRegexCheck'] = isset($data['sqlBlackListRegexCheck']) ? $data['sqlBlackListRegexCheck'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sqlBlackListFullCheck']) && (mb_strlen($this->container['sqlBlackListFullCheck']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sqlBlackListFullCheck', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sqlBlackListFullCheck']) && (mb_strlen($this->container['sqlBlackListFullCheck']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlBlackListFullCheck', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['requestId']) && (mb_strlen($this->container['requestId']) < 0)) {
                $invalidProperties[] = "invalid value for 'requestId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 0)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['instanceId']) && (mb_strlen($this->container['instanceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'instanceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['logicDbName']) && (mb_strlen($this->container['logicDbName']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'logicDbName', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['logicDbName']) && (mb_strlen($this->container['logicDbName']) < 0)) {
                $invalidProperties[] = "invalid value for 'logicDbName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sqlBlackListPrefixCheck']) && (mb_strlen($this->container['sqlBlackListPrefixCheck']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sqlBlackListPrefixCheck', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sqlBlackListPrefixCheck']) && (mb_strlen($this->container['sqlBlackListPrefixCheck']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlBlackListPrefixCheck', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['sqlBlackListRegexCheck']) && (mb_strlen($this->container['sqlBlackListRegexCheck']) > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sqlBlackListRegexCheck', the character length must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sqlBlackListRegexCheck']) && (mb_strlen($this->container['sqlBlackListRegexCheck']) < 0)) {
                $invalidProperties[] = "invalid value for 'sqlBlackListRegexCheck', the character length must be bigger than or equal to 0.";
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
    * Gets sqlBlackListFullCheck
    *  **参数解释**：  全量匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getSqlBlackListFullCheck()
    {
        return $this->container['sqlBlackListFullCheck'];
    }

    /**
    * Sets sqlBlackListFullCheck
    *
    * @param string|null $sqlBlackListFullCheck **参数解释**：  全量匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSqlBlackListFullCheck($sqlBlackListFullCheck)
    {
        $this->container['sqlBlackListFullCheck'] = $sqlBlackListFullCheck;
        return $this;
    }

    /**
    * Gets requestId
    *  **参数解释**：  请求ID。  **约束限制**：  不涉及  **取值范围**：  只能由英文字母、数字组成。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
    * Sets requestId
    *
    * @param string|null $requestId **参数解释**：  请求ID。  **约束限制**：  不涉及  **取值范围**：  只能由英文字母、数字组成。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setRequestId($requestId)
    {
        $this->container['requestId'] = $requestId;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：  租户在某一Region下的project ID。  获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-ddm/ddm_api_01_0063.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，且长度为32个字符。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释**：  租户在某一Region下的project ID。  获取方法请参见[获取项目ID](https://support.huaweicloud.com/api-ddm/ddm_api_01_0063.html)。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，且长度为32个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：  实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。  **默认取值**：  不涉及。
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
    * @param string|null $instanceId **参数解释**：  实例ID，此参数是实例的唯一标识。  **约束限制**：  不涉及。  **取值范围**：  只能由英文字母、数字组成，后缀为in09，长度为36个字符。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets logicDbName
    *  **参数解释**：  逻辑库名称。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getLogicDbName()
    {
        return $this->container['logicDbName'];
    }

    /**
    * Sets logicDbName
    *
    * @param string|null $logicDbName **参数解释**：  逻辑库名称。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setLogicDbName($logicDbName)
    {
        $this->container['logicDbName'] = $logicDbName;
        return $this;
    }

    /**
    * Gets sqlBlackListPrefixCheck
    *  **参数解释**：  前缀匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getSqlBlackListPrefixCheck()
    {
        return $this->container['sqlBlackListPrefixCheck'];
    }

    /**
    * Sets sqlBlackListPrefixCheck
    *
    * @param string|null $sqlBlackListPrefixCheck **参数解释**：  前缀匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSqlBlackListPrefixCheck($sqlBlackListPrefixCheck)
    {
        $this->container['sqlBlackListPrefixCheck'] = $sqlBlackListPrefixCheck;
        return $this;
    }

    /**
    * Gets sqlBlackListRegexCheck
    *  **参数解释**：  正则匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return string|null
    */
    public function getSqlBlackListRegexCheck()
    {
        return $this->container['sqlBlackListRegexCheck'];
    }

    /**
    * Sets sqlBlackListRegexCheck
    *
    * @param string|null $sqlBlackListRegexCheck **参数解释**：  正则匹配sql黑名单。  **约束限制**：  不涉及  **取值范围**：  不涉及。  **默认取值**：  不涉及。
    *
    * @return $this
    */
    public function setSqlBlackListRegexCheck($sqlBlackListRegexCheck)
    {
        $this->container['sqlBlackListRegexCheck'] = $sqlBlackListRegexCheck;
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

