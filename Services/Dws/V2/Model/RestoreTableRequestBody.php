<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreTableRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreTableRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * caseSensitive  **参数解释**： 名称是否区分大小写。 **取值范围**： 不涉及。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * restoreTableList  **参数解释**： 源表信息。 **取值范围**： 不涉及。
    * targetTableList  **参数解释**： 目的表信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'caseSensitive' => 'bool',
            'database' => 'string',
            'restoreTableList' => '\HuaweiCloud\SDK\Dws\V2\Model\TableDetail[]',
            'targetTableList' => '\HuaweiCloud\SDK\Dws\V2\Model\TableDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * caseSensitive  **参数解释**： 名称是否区分大小写。 **取值范围**： 不涉及。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * restoreTableList  **参数解释**： 源表信息。 **取值范围**： 不涉及。
    * targetTableList  **参数解释**： 目的表信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'caseSensitive' => null,
        'database' => null,
        'restoreTableList' => null,
        'targetTableList' => null
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
    * caseSensitive  **参数解释**： 名称是否区分大小写。 **取值范围**： 不涉及。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * restoreTableList  **参数解释**： 源表信息。 **取值范围**： 不涉及。
    * targetTableList  **参数解释**： 目的表信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'caseSensitive' => 'case_sensitive',
            'database' => 'database',
            'restoreTableList' => 'restore_table_list',
            'targetTableList' => 'target_table_list'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * caseSensitive  **参数解释**： 名称是否区分大小写。 **取值范围**： 不涉及。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * restoreTableList  **参数解释**： 源表信息。 **取值范围**： 不涉及。
    * targetTableList  **参数解释**： 目的表信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'caseSensitive' => 'setCaseSensitive',
            'database' => 'setDatabase',
            'restoreTableList' => 'setRestoreTableList',
            'targetTableList' => 'setTargetTableList'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * caseSensitive  **参数解释**： 名称是否区分大小写。 **取值范围**： 不涉及。
    * database  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    * restoreTableList  **参数解释**： 源表信息。 **取值范围**： 不涉及。
    * targetTableList  **参数解释**： 目的表信息。 **取值范围**： 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'caseSensitive' => 'getCaseSensitive',
            'database' => 'getDatabase',
            'restoreTableList' => 'getRestoreTableList',
            'targetTableList' => 'getTargetTableList'
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
        $this->container['caseSensitive'] = isset($data['caseSensitive']) ? $data['caseSensitive'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
        $this->container['restoreTableList'] = isset($data['restoreTableList']) ? $data['restoreTableList'] : null;
        $this->container['targetTableList'] = isset($data['targetTableList']) ? $data['targetTableList'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['caseSensitive'] === null) {
            $invalidProperties[] = "'caseSensitive' can't be null";
        }
        if ($this->container['database'] === null) {
            $invalidProperties[] = "'database' can't be null";
        }
        if ($this->container['restoreTableList'] === null) {
            $invalidProperties[] = "'restoreTableList' can't be null";
        }
        if ($this->container['targetTableList'] === null) {
            $invalidProperties[] = "'targetTableList' can't be null";
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
    * Gets caseSensitive
    *  **参数解释**： 名称是否区分大小写。 **取值范围**： 不涉及。
    *
    * @return bool
    */
    public function getCaseSensitive()
    {
        return $this->container['caseSensitive'];
    }

    /**
    * Sets caseSensitive
    *
    * @param bool $caseSensitive **参数解释**： 名称是否区分大小写。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setCaseSensitive($caseSensitive)
    {
        $this->container['caseSensitive'] = $caseSensitive;
        return $this;
    }

    /**
    * Gets database
    *  **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    *
    * @return string
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string $database **参数解释**： 数据库名称。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
        return $this;
    }

    /**
    * Gets restoreTableList
    *  **参数解释**： 源表信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableDetail[]
    */
    public function getRestoreTableList()
    {
        return $this->container['restoreTableList'];
    }

    /**
    * Sets restoreTableList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableDetail[] $restoreTableList **参数解释**： 源表信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setRestoreTableList($restoreTableList)
    {
        $this->container['restoreTableList'] = $restoreTableList;
        return $this;
    }

    /**
    * Gets targetTableList
    *  **参数解释**： 目的表信息。 **取值范围**： 不涉及。
    *
    * @return \HuaweiCloud\SDK\Dws\V2\Model\TableDetail[]
    */
    public function getTargetTableList()
    {
        return $this->container['targetTableList'];
    }

    /**
    * Sets targetTableList
    *
    * @param \HuaweiCloud\SDK\Dws\V2\Model\TableDetail[] $targetTableList **参数解释**： 目的表信息。 **取值范围**： 不涉及。
    *
    * @return $this
    */
    public function setTargetTableList($targetTableList)
    {
        $this->container['targetTableList'] = $targetTableList;
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

