<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StartOnlineTaskContentItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StartOnlineTaskContentItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * schema  **参数解释**：  无锁变更的目标数据库。 获取方法请参见[查询数据库列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabase.html)。  **约束限制**：  不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * ddlInfo  **参数解释**：  无锁变更的DDL信息。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'schema' => 'string',
            'ddlInfo' => '\HuaweiCloud\SDK\GaussDB\V3\Model\StartOnlineDDLInfoItem[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * schema  **参数解释**：  无锁变更的目标数据库。 获取方法请参见[查询数据库列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabase.html)。  **约束限制**：  不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * ddlInfo  **参数解释**：  无锁变更的DDL信息。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'schema' => null,
        'ddlInfo' => null
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
    * schema  **参数解释**：  无锁变更的目标数据库。 获取方法请参见[查询数据库列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabase.html)。  **约束限制**：  不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * ddlInfo  **参数解释**：  无锁变更的DDL信息。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'schema' => 'schema',
            'ddlInfo' => 'ddl_info'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * schema  **参数解释**：  无锁变更的目标数据库。 获取方法请参见[查询数据库列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabase.html)。  **约束限制**：  不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * ddlInfo  **参数解释**：  无锁变更的DDL信息。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'schema' => 'setSchema',
            'ddlInfo' => 'setDdlInfo'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * schema  **参数解释**：  无锁变更的目标数据库。 获取方法请参见[查询数据库列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabase.html)。  **约束限制**：  不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    * ddlInfo  **参数解释**：  无锁变更的DDL信息。  **约束限制**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'schema' => 'getSchema',
            'ddlInfo' => 'getDdlInfo'
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
        $this->container['schema'] = isset($data['schema']) ? $data['schema'] : null;
        $this->container['ddlInfo'] = isset($data['ddlInfo']) ? $data['ddlInfo'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['schema'] === null) {
            $invalidProperties[] = "'schema' can't be null";
        }
        if ($this->container['ddlInfo'] === null) {
            $invalidProperties[] = "'ddlInfo' can't be null";
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
    * Gets schema
    *  **参数解释**：  无锁变更的目标数据库。 获取方法请参见[查询数据库列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabase.html)。  **约束限制**：  不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return string
    */
    public function getSchema()
    {
        return $this->container['schema'];
    }

    /**
    * Sets schema
    *
    * @param string $schema **参数解释**：  无锁变更的目标数据库。 获取方法请参见[查询数据库列表](https://support.huaweicloud.com/api-taurusdb/ListGaussMySqlDatabase.html)。  **约束限制**：  不涉及。  **取值范围**： 不涉及。  **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setSchema($schema)
    {
        $this->container['schema'] = $schema;
        return $this;
    }

    /**
    * Gets ddlInfo
    *  **参数解释**：  无锁变更的DDL信息。  **约束限制**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\StartOnlineDDLInfoItem[]
    */
    public function getDdlInfo()
    {
        return $this->container['ddlInfo'];
    }

    /**
    * Sets ddlInfo
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\StartOnlineDDLInfoItem[] $ddlInfo **参数解释**：  无锁变更的DDL信息。  **约束限制**： 不涉及。
    *
    * @return $this
    */
    public function setDdlInfo($ddlInfo)
    {
        $this->container['ddlInfo'] = $ddlInfo;
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

