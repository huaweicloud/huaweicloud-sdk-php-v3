<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DatabaseObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DatabaseObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * syncType  该数据库在实时同步场景下的类型。取值： - config：仅当该库作为数据过滤高级设置的关联库时，需要填写，此时该库以及该库下的schemas、tables“不会”被同步到目标库，name、all属性不生效，schemas、tables需要填写被关联的相关对象。（注意：如果需要同步该库级对象，则在下级对象中填写sync_type值为config。）
    * name  该数据库在目标库的名称（库名映射）。
    * all  是否整库迁移或同步。注意： 1.当该库下的模式、表、列需要做数据过滤、列过滤、列映射时，填false，否则填true； 2.当该库下的表需要做附加列时，需要填true，并且在表级对象的columns里填写附加列信息； 3.当该库下的表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息，在config_conditions填写数据过滤高级设置的配置条件；
    * schemas  需要迁移或同步的模式，当整库迁移或同步为false时需要填写。
    * tables  需要迁移或同步的表，当整库迁移或同步为false时需要填写。
    * totalTableNum  库下的表的数量，表的数量超过阈值就不显示。
    * isSynchronized  是否已同步
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'syncType' => 'string',
            'name' => 'string',
            'all' => 'bool',
            'schemas' => 'map[string,\HuaweiCloud\SDK\Drs\V5\Model\SchemaObject]',
            'tables' => 'map[string,\HuaweiCloud\SDK\Drs\V5\Model\TableObject]',
            'totalTableNum' => 'int',
            'isSynchronized' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * syncType  该数据库在实时同步场景下的类型。取值： - config：仅当该库作为数据过滤高级设置的关联库时，需要填写，此时该库以及该库下的schemas、tables“不会”被同步到目标库，name、all属性不生效，schemas、tables需要填写被关联的相关对象。（注意：如果需要同步该库级对象，则在下级对象中填写sync_type值为config。）
    * name  该数据库在目标库的名称（库名映射）。
    * all  是否整库迁移或同步。注意： 1.当该库下的模式、表、列需要做数据过滤、列过滤、列映射时，填false，否则填true； 2.当该库下的表需要做附加列时，需要填true，并且在表级对象的columns里填写附加列信息； 3.当该库下的表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息，在config_conditions填写数据过滤高级设置的配置条件；
    * schemas  需要迁移或同步的模式，当整库迁移或同步为false时需要填写。
    * tables  需要迁移或同步的表，当整库迁移或同步为false时需要填写。
    * totalTableNum  库下的表的数量，表的数量超过阈值就不显示。
    * isSynchronized  是否已同步
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'syncType' => null,
        'name' => null,
        'all' => null,
        'schemas' => null,
        'tables' => null,
        'totalTableNum' => 'int32',
        'isSynchronized' => null
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
    * syncType  该数据库在实时同步场景下的类型。取值： - config：仅当该库作为数据过滤高级设置的关联库时，需要填写，此时该库以及该库下的schemas、tables“不会”被同步到目标库，name、all属性不生效，schemas、tables需要填写被关联的相关对象。（注意：如果需要同步该库级对象，则在下级对象中填写sync_type值为config。）
    * name  该数据库在目标库的名称（库名映射）。
    * all  是否整库迁移或同步。注意： 1.当该库下的模式、表、列需要做数据过滤、列过滤、列映射时，填false，否则填true； 2.当该库下的表需要做附加列时，需要填true，并且在表级对象的columns里填写附加列信息； 3.当该库下的表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息，在config_conditions填写数据过滤高级设置的配置条件；
    * schemas  需要迁移或同步的模式，当整库迁移或同步为false时需要填写。
    * tables  需要迁移或同步的表，当整库迁移或同步为false时需要填写。
    * totalTableNum  库下的表的数量，表的数量超过阈值就不显示。
    * isSynchronized  是否已同步
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'syncType' => 'sync_type',
            'name' => 'name',
            'all' => 'all',
            'schemas' => 'schemas',
            'tables' => 'tables',
            'totalTableNum' => 'total_table_num',
            'isSynchronized' => 'is_synchronized'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * syncType  该数据库在实时同步场景下的类型。取值： - config：仅当该库作为数据过滤高级设置的关联库时，需要填写，此时该库以及该库下的schemas、tables“不会”被同步到目标库，name、all属性不生效，schemas、tables需要填写被关联的相关对象。（注意：如果需要同步该库级对象，则在下级对象中填写sync_type值为config。）
    * name  该数据库在目标库的名称（库名映射）。
    * all  是否整库迁移或同步。注意： 1.当该库下的模式、表、列需要做数据过滤、列过滤、列映射时，填false，否则填true； 2.当该库下的表需要做附加列时，需要填true，并且在表级对象的columns里填写附加列信息； 3.当该库下的表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息，在config_conditions填写数据过滤高级设置的配置条件；
    * schemas  需要迁移或同步的模式，当整库迁移或同步为false时需要填写。
    * tables  需要迁移或同步的表，当整库迁移或同步为false时需要填写。
    * totalTableNum  库下的表的数量，表的数量超过阈值就不显示。
    * isSynchronized  是否已同步
    *
    * @var string[]
    */
    protected static $setters = [
            'syncType' => 'setSyncType',
            'name' => 'setName',
            'all' => 'setAll',
            'schemas' => 'setSchemas',
            'tables' => 'setTables',
            'totalTableNum' => 'setTotalTableNum',
            'isSynchronized' => 'setIsSynchronized'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * syncType  该数据库在实时同步场景下的类型。取值： - config：仅当该库作为数据过滤高级设置的关联库时，需要填写，此时该库以及该库下的schemas、tables“不会”被同步到目标库，name、all属性不生效，schemas、tables需要填写被关联的相关对象。（注意：如果需要同步该库级对象，则在下级对象中填写sync_type值为config。）
    * name  该数据库在目标库的名称（库名映射）。
    * all  是否整库迁移或同步。注意： 1.当该库下的模式、表、列需要做数据过滤、列过滤、列映射时，填false，否则填true； 2.当该库下的表需要做附加列时，需要填true，并且在表级对象的columns里填写附加列信息； 3.当该库下的表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息，在config_conditions填写数据过滤高级设置的配置条件；
    * schemas  需要迁移或同步的模式，当整库迁移或同步为false时需要填写。
    * tables  需要迁移或同步的表，当整库迁移或同步为false时需要填写。
    * totalTableNum  库下的表的数量，表的数量超过阈值就不显示。
    * isSynchronized  是否已同步
    *
    * @var string[]
    */
    protected static $getters = [
            'syncType' => 'getSyncType',
            'name' => 'getName',
            'all' => 'getAll',
            'schemas' => 'getSchemas',
            'tables' => 'getTables',
            'totalTableNum' => 'getTotalTableNum',
            'isSynchronized' => 'getIsSynchronized'
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
    const SYNC_TYPE_CONFIG = 'config';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncTypeAllowableValues()
    {
        return [
            self::SYNC_TYPE_CONFIG,
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
        $this->container['syncType'] = isset($data['syncType']) ? $data['syncType'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['all'] = isset($data['all']) ? $data['all'] : null;
        $this->container['schemas'] = isset($data['schemas']) ? $data['schemas'] : null;
        $this->container['tables'] = isset($data['tables']) ? $data['tables'] : null;
        $this->container['totalTableNum'] = isset($data['totalTableNum']) ? $data['totalTableNum'] : null;
        $this->container['isSynchronized'] = isset($data['isSynchronized']) ? $data['isSynchronized'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSyncTypeAllowableValues();
                if (!is_null($this->container['syncType']) && !in_array($this->container['syncType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncType', must be one of '%s'",
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
    * Gets syncType
    *  该数据库在实时同步场景下的类型。取值： - config：仅当该库作为数据过滤高级设置的关联库时，需要填写，此时该库以及该库下的schemas、tables“不会”被同步到目标库，name、all属性不生效，schemas、tables需要填写被关联的相关对象。（注意：如果需要同步该库级对象，则在下级对象中填写sync_type值为config。）
    *
    * @return string|null
    */
    public function getSyncType()
    {
        return $this->container['syncType'];
    }

    /**
    * Sets syncType
    *
    * @param string|null $syncType 该数据库在实时同步场景下的类型。取值： - config：仅当该库作为数据过滤高级设置的关联库时，需要填写，此时该库以及该库下的schemas、tables“不会”被同步到目标库，name、all属性不生效，schemas、tables需要填写被关联的相关对象。（注意：如果需要同步该库级对象，则在下级对象中填写sync_type值为config。）
    *
    * @return $this
    */
    public function setSyncType($syncType)
    {
        $this->container['syncType'] = $syncType;
        return $this;
    }

    /**
    * Gets name
    *  该数据库在目标库的名称（库名映射）。
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
    * @param string|null $name 该数据库在目标库的名称（库名映射）。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets all
    *  是否整库迁移或同步。注意： 1.当该库下的模式、表、列需要做数据过滤、列过滤、列映射时，填false，否则填true； 2.当该库下的表需要做附加列时，需要填true，并且在表级对象的columns里填写附加列信息； 3.当该库下的表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息，在config_conditions填写数据过滤高级设置的配置条件；
    *
    * @return bool|null
    */
    public function getAll()
    {
        return $this->container['all'];
    }

    /**
    * Sets all
    *
    * @param bool|null $all 是否整库迁移或同步。注意： 1.当该库下的模式、表、列需要做数据过滤、列过滤、列映射时，填false，否则填true； 2.当该库下的表需要做附加列时，需要填true，并且在表级对象的columns里填写附加列信息； 3.当该库下的表所包含的列作为数据过滤高级设置的关联列时，需要填true，并且在columns里填写关联列信息，在config_conditions填写数据过滤高级设置的配置条件；
    *
    * @return $this
    */
    public function setAll($all)
    {
        $this->container['all'] = $all;
        return $this;
    }

    /**
    * Gets schemas
    *  需要迁移或同步的模式，当整库迁移或同步为false时需要填写。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V5\Model\SchemaObject]|null
    */
    public function getSchemas()
    {
        return $this->container['schemas'];
    }

    /**
    * Sets schemas
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V5\Model\SchemaObject]|null $schemas 需要迁移或同步的模式，当整库迁移或同步为false时需要填写。
    *
    * @return $this
    */
    public function setSchemas($schemas)
    {
        $this->container['schemas'] = $schemas;
        return $this;
    }

    /**
    * Gets tables
    *  需要迁移或同步的表，当整库迁移或同步为false时需要填写。
    *
    * @return map[string,\HuaweiCloud\SDK\Drs\V5\Model\TableObject]|null
    */
    public function getTables()
    {
        return $this->container['tables'];
    }

    /**
    * Sets tables
    *
    * @param map[string,\HuaweiCloud\SDK\Drs\V5\Model\TableObject]|null $tables 需要迁移或同步的表，当整库迁移或同步为false时需要填写。
    *
    * @return $this
    */
    public function setTables($tables)
    {
        $this->container['tables'] = $tables;
        return $this;
    }

    /**
    * Gets totalTableNum
    *  库下的表的数量，表的数量超过阈值就不显示。
    *
    * @return int|null
    */
    public function getTotalTableNum()
    {
        return $this->container['totalTableNum'];
    }

    /**
    * Sets totalTableNum
    *
    * @param int|null $totalTableNum 库下的表的数量，表的数量超过阈值就不显示。
    *
    * @return $this
    */
    public function setTotalTableNum($totalTableNum)
    {
        $this->container['totalTableNum'] = $totalTableNum;
        return $this;
    }

    /**
    * Gets isSynchronized
    *  是否已同步
    *
    * @return bool|null
    */
    public function getIsSynchronized()
    {
        return $this->container['isSynchronized'];
    }

    /**
    * Sets isSynchronized
    *
    * @param bool|null $isSynchronized 是否已同步
    *
    * @return $this
    */
    public function setIsSynchronized($isSynchronized)
    {
        $this->container['isSynchronized'] = $isSynchronized;
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

