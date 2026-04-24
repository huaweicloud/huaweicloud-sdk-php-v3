<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ColumnProcessObjects implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ColumnProcessObjects';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * objectSourceNames  选择的源库对象名
    * objectAliasName  映射后的对象名
    * isSent  附加列是否已下发
    * extraColumnInfos  附加列信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'objectSourceNames' => 'string[]',
            'objectAliasName' => 'string',
            'isSent' => 'bool',
            'extraColumnInfos' => '\HuaweiCloud\SDK\Drs\V5\Model\AddColumnInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * objectSourceNames  选择的源库对象名
    * objectAliasName  映射后的对象名
    * isSent  附加列是否已下发
    * extraColumnInfos  附加列信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'objectSourceNames' => null,
        'objectAliasName' => null,
        'isSent' => null,
        'extraColumnInfos' => null
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
    * objectSourceNames  选择的源库对象名
    * objectAliasName  映射后的对象名
    * isSent  附加列是否已下发
    * extraColumnInfos  附加列信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'objectSourceNames' => 'object_source_names',
            'objectAliasName' => 'object_alias_name',
            'isSent' => 'is_sent',
            'extraColumnInfos' => 'extra_column_infos'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * objectSourceNames  选择的源库对象名
    * objectAliasName  映射后的对象名
    * isSent  附加列是否已下发
    * extraColumnInfos  附加列信息
    *
    * @var string[]
    */
    protected static $setters = [
            'objectSourceNames' => 'setObjectSourceNames',
            'objectAliasName' => 'setObjectAliasName',
            'isSent' => 'setIsSent',
            'extraColumnInfos' => 'setExtraColumnInfos'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * objectSourceNames  选择的源库对象名
    * objectAliasName  映射后的对象名
    * isSent  附加列是否已下发
    * extraColumnInfos  附加列信息
    *
    * @var string[]
    */
    protected static $getters = [
            'objectSourceNames' => 'getObjectSourceNames',
            'objectAliasName' => 'getObjectAliasName',
            'isSent' => 'getIsSent',
            'extraColumnInfos' => 'getExtraColumnInfos'
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
        $this->container['objectSourceNames'] = isset($data['objectSourceNames']) ? $data['objectSourceNames'] : null;
        $this->container['objectAliasName'] = isset($data['objectAliasName']) ? $data['objectAliasName'] : null;
        $this->container['isSent'] = isset($data['isSent']) ? $data['isSent'] : null;
        $this->container['extraColumnInfos'] = isset($data['extraColumnInfos']) ? $data['extraColumnInfos'] : null;
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
    * Gets objectSourceNames
    *  选择的源库对象名
    *
    * @return string[]|null
    */
    public function getObjectSourceNames()
    {
        return $this->container['objectSourceNames'];
    }

    /**
    * Sets objectSourceNames
    *
    * @param string[]|null $objectSourceNames 选择的源库对象名
    *
    * @return $this
    */
    public function setObjectSourceNames($objectSourceNames)
    {
        $this->container['objectSourceNames'] = $objectSourceNames;
        return $this;
    }

    /**
    * Gets objectAliasName
    *  映射后的对象名
    *
    * @return string|null
    */
    public function getObjectAliasName()
    {
        return $this->container['objectAliasName'];
    }

    /**
    * Sets objectAliasName
    *
    * @param string|null $objectAliasName 映射后的对象名
    *
    * @return $this
    */
    public function setObjectAliasName($objectAliasName)
    {
        $this->container['objectAliasName'] = $objectAliasName;
        return $this;
    }

    /**
    * Gets isSent
    *  附加列是否已下发
    *
    * @return bool|null
    */
    public function getIsSent()
    {
        return $this->container['isSent'];
    }

    /**
    * Sets isSent
    *
    * @param bool|null $isSent 附加列是否已下发
    *
    * @return $this
    */
    public function setIsSent($isSent)
    {
        $this->container['isSent'] = $isSent;
        return $this;
    }

    /**
    * Gets extraColumnInfos
    *  附加列信息
    *
    * @return \HuaweiCloud\SDK\Drs\V5\Model\AddColumnInfo[]|null
    */
    public function getExtraColumnInfos()
    {
        return $this->container['extraColumnInfos'];
    }

    /**
    * Sets extraColumnInfos
    *
    * @param \HuaweiCloud\SDK\Drs\V5\Model\AddColumnInfo[]|null $extraColumnInfos 附加列信息
    *
    * @return $this
    */
    public function setExtraColumnInfos($extraColumnInfos)
    {
        $this->container['extraColumnInfos'] = $extraColumnInfos;
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

