<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSupportObjectTypeResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSupportObjectTypeResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isFullTransSupportObject  全量任务是否支持对象选择。
    * isIncreTransSupportObject  增量任务是否支持对象选择。
    * isFullIncreTransSupportObject  全量加增量任务是否支持对象选择。
    * supportObjectImportEngine  支持对象导入的引引擎。
    * isSupportColumnMapping  是否支持列映射。
    * isDatabaseSupportSearch  库是否支持搜索。
    * isSchemaSupportSearch  schema是否支持搜索。
    * isTableSupportSearch  表是否支持搜索。
    * fileSize  对象导入支持的文件大小。
    * previousSelect  上一次选择迁移对象或者同步对象的方式。 - srcImportObject：当前任务上次选择的方式为导入方式
    * importLevel  对象导入类型。 - table：表级 - database：库级
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isFullTransSupportObject' => 'bool',
            'isIncreTransSupportObject' => 'bool',
            'isFullIncreTransSupportObject' => 'bool',
            'supportObjectImportEngine' => 'string[]',
            'isSupportColumnMapping' => 'bool',
            'isDatabaseSupportSearch' => 'bool',
            'isSchemaSupportSearch' => 'bool',
            'isTableSupportSearch' => 'bool',
            'fileSize' => 'string',
            'previousSelect' => 'string',
            'importLevel' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isFullTransSupportObject  全量任务是否支持对象选择。
    * isIncreTransSupportObject  增量任务是否支持对象选择。
    * isFullIncreTransSupportObject  全量加增量任务是否支持对象选择。
    * supportObjectImportEngine  支持对象导入的引引擎。
    * isSupportColumnMapping  是否支持列映射。
    * isDatabaseSupportSearch  库是否支持搜索。
    * isSchemaSupportSearch  schema是否支持搜索。
    * isTableSupportSearch  表是否支持搜索。
    * fileSize  对象导入支持的文件大小。
    * previousSelect  上一次选择迁移对象或者同步对象的方式。 - srcImportObject：当前任务上次选择的方式为导入方式
    * importLevel  对象导入类型。 - table：表级 - database：库级
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isFullTransSupportObject' => null,
        'isIncreTransSupportObject' => null,
        'isFullIncreTransSupportObject' => null,
        'supportObjectImportEngine' => null,
        'isSupportColumnMapping' => null,
        'isDatabaseSupportSearch' => null,
        'isSchemaSupportSearch' => null,
        'isTableSupportSearch' => null,
        'fileSize' => null,
        'previousSelect' => null,
        'importLevel' => null
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
    * isFullTransSupportObject  全量任务是否支持对象选择。
    * isIncreTransSupportObject  增量任务是否支持对象选择。
    * isFullIncreTransSupportObject  全量加增量任务是否支持对象选择。
    * supportObjectImportEngine  支持对象导入的引引擎。
    * isSupportColumnMapping  是否支持列映射。
    * isDatabaseSupportSearch  库是否支持搜索。
    * isSchemaSupportSearch  schema是否支持搜索。
    * isTableSupportSearch  表是否支持搜索。
    * fileSize  对象导入支持的文件大小。
    * previousSelect  上一次选择迁移对象或者同步对象的方式。 - srcImportObject：当前任务上次选择的方式为导入方式
    * importLevel  对象导入类型。 - table：表级 - database：库级
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isFullTransSupportObject' => 'is_full_trans_support_object',
            'isIncreTransSupportObject' => 'is_incre_trans_support_object',
            'isFullIncreTransSupportObject' => 'is_full_incre_trans_support_object',
            'supportObjectImportEngine' => 'support_object_import_engine',
            'isSupportColumnMapping' => 'is_support_column_mapping',
            'isDatabaseSupportSearch' => 'is_database_support_search',
            'isSchemaSupportSearch' => 'is_schema_support_search',
            'isTableSupportSearch' => 'is_table_support_search',
            'fileSize' => 'file_size',
            'previousSelect' => 'previous_select',
            'importLevel' => 'import_level'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isFullTransSupportObject  全量任务是否支持对象选择。
    * isIncreTransSupportObject  增量任务是否支持对象选择。
    * isFullIncreTransSupportObject  全量加增量任务是否支持对象选择。
    * supportObjectImportEngine  支持对象导入的引引擎。
    * isSupportColumnMapping  是否支持列映射。
    * isDatabaseSupportSearch  库是否支持搜索。
    * isSchemaSupportSearch  schema是否支持搜索。
    * isTableSupportSearch  表是否支持搜索。
    * fileSize  对象导入支持的文件大小。
    * previousSelect  上一次选择迁移对象或者同步对象的方式。 - srcImportObject：当前任务上次选择的方式为导入方式
    * importLevel  对象导入类型。 - table：表级 - database：库级
    *
    * @var string[]
    */
    protected static $setters = [
            'isFullTransSupportObject' => 'setIsFullTransSupportObject',
            'isIncreTransSupportObject' => 'setIsIncreTransSupportObject',
            'isFullIncreTransSupportObject' => 'setIsFullIncreTransSupportObject',
            'supportObjectImportEngine' => 'setSupportObjectImportEngine',
            'isSupportColumnMapping' => 'setIsSupportColumnMapping',
            'isDatabaseSupportSearch' => 'setIsDatabaseSupportSearch',
            'isSchemaSupportSearch' => 'setIsSchemaSupportSearch',
            'isTableSupportSearch' => 'setIsTableSupportSearch',
            'fileSize' => 'setFileSize',
            'previousSelect' => 'setPreviousSelect',
            'importLevel' => 'setImportLevel'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isFullTransSupportObject  全量任务是否支持对象选择。
    * isIncreTransSupportObject  增量任务是否支持对象选择。
    * isFullIncreTransSupportObject  全量加增量任务是否支持对象选择。
    * supportObjectImportEngine  支持对象导入的引引擎。
    * isSupportColumnMapping  是否支持列映射。
    * isDatabaseSupportSearch  库是否支持搜索。
    * isSchemaSupportSearch  schema是否支持搜索。
    * isTableSupportSearch  表是否支持搜索。
    * fileSize  对象导入支持的文件大小。
    * previousSelect  上一次选择迁移对象或者同步对象的方式。 - srcImportObject：当前任务上次选择的方式为导入方式
    * importLevel  对象导入类型。 - table：表级 - database：库级
    *
    * @var string[]
    */
    protected static $getters = [
            'isFullTransSupportObject' => 'getIsFullTransSupportObject',
            'isIncreTransSupportObject' => 'getIsIncreTransSupportObject',
            'isFullIncreTransSupportObject' => 'getIsFullIncreTransSupportObject',
            'supportObjectImportEngine' => 'getSupportObjectImportEngine',
            'isSupportColumnMapping' => 'getIsSupportColumnMapping',
            'isDatabaseSupportSearch' => 'getIsDatabaseSupportSearch',
            'isSchemaSupportSearch' => 'getIsSchemaSupportSearch',
            'isTableSupportSearch' => 'getIsTableSupportSearch',
            'fileSize' => 'getFileSize',
            'previousSelect' => 'getPreviousSelect',
            'importLevel' => 'getImportLevel'
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
        $this->container['isFullTransSupportObject'] = isset($data['isFullTransSupportObject']) ? $data['isFullTransSupportObject'] : null;
        $this->container['isIncreTransSupportObject'] = isset($data['isIncreTransSupportObject']) ? $data['isIncreTransSupportObject'] : null;
        $this->container['isFullIncreTransSupportObject'] = isset($data['isFullIncreTransSupportObject']) ? $data['isFullIncreTransSupportObject'] : null;
        $this->container['supportObjectImportEngine'] = isset($data['supportObjectImportEngine']) ? $data['supportObjectImportEngine'] : null;
        $this->container['isSupportColumnMapping'] = isset($data['isSupportColumnMapping']) ? $data['isSupportColumnMapping'] : null;
        $this->container['isDatabaseSupportSearch'] = isset($data['isDatabaseSupportSearch']) ? $data['isDatabaseSupportSearch'] : null;
        $this->container['isSchemaSupportSearch'] = isset($data['isSchemaSupportSearch']) ? $data['isSchemaSupportSearch'] : null;
        $this->container['isTableSupportSearch'] = isset($data['isTableSupportSearch']) ? $data['isTableSupportSearch'] : null;
        $this->container['fileSize'] = isset($data['fileSize']) ? $data['fileSize'] : null;
        $this->container['previousSelect'] = isset($data['previousSelect']) ? $data['previousSelect'] : null;
        $this->container['importLevel'] = isset($data['importLevel']) ? $data['importLevel'] : null;
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
    * Gets isFullTransSupportObject
    *  全量任务是否支持对象选择。
    *
    * @return bool|null
    */
    public function getIsFullTransSupportObject()
    {
        return $this->container['isFullTransSupportObject'];
    }

    /**
    * Sets isFullTransSupportObject
    *
    * @param bool|null $isFullTransSupportObject 全量任务是否支持对象选择。
    *
    * @return $this
    */
    public function setIsFullTransSupportObject($isFullTransSupportObject)
    {
        $this->container['isFullTransSupportObject'] = $isFullTransSupportObject;
        return $this;
    }

    /**
    * Gets isIncreTransSupportObject
    *  增量任务是否支持对象选择。
    *
    * @return bool|null
    */
    public function getIsIncreTransSupportObject()
    {
        return $this->container['isIncreTransSupportObject'];
    }

    /**
    * Sets isIncreTransSupportObject
    *
    * @param bool|null $isIncreTransSupportObject 增量任务是否支持对象选择。
    *
    * @return $this
    */
    public function setIsIncreTransSupportObject($isIncreTransSupportObject)
    {
        $this->container['isIncreTransSupportObject'] = $isIncreTransSupportObject;
        return $this;
    }

    /**
    * Gets isFullIncreTransSupportObject
    *  全量加增量任务是否支持对象选择。
    *
    * @return bool|null
    */
    public function getIsFullIncreTransSupportObject()
    {
        return $this->container['isFullIncreTransSupportObject'];
    }

    /**
    * Sets isFullIncreTransSupportObject
    *
    * @param bool|null $isFullIncreTransSupportObject 全量加增量任务是否支持对象选择。
    *
    * @return $this
    */
    public function setIsFullIncreTransSupportObject($isFullIncreTransSupportObject)
    {
        $this->container['isFullIncreTransSupportObject'] = $isFullIncreTransSupportObject;
        return $this;
    }

    /**
    * Gets supportObjectImportEngine
    *  支持对象导入的引引擎。
    *
    * @return string[]|null
    */
    public function getSupportObjectImportEngine()
    {
        return $this->container['supportObjectImportEngine'];
    }

    /**
    * Sets supportObjectImportEngine
    *
    * @param string[]|null $supportObjectImportEngine 支持对象导入的引引擎。
    *
    * @return $this
    */
    public function setSupportObjectImportEngine($supportObjectImportEngine)
    {
        $this->container['supportObjectImportEngine'] = $supportObjectImportEngine;
        return $this;
    }

    /**
    * Gets isSupportColumnMapping
    *  是否支持列映射。
    *
    * @return bool|null
    */
    public function getIsSupportColumnMapping()
    {
        return $this->container['isSupportColumnMapping'];
    }

    /**
    * Sets isSupportColumnMapping
    *
    * @param bool|null $isSupportColumnMapping 是否支持列映射。
    *
    * @return $this
    */
    public function setIsSupportColumnMapping($isSupportColumnMapping)
    {
        $this->container['isSupportColumnMapping'] = $isSupportColumnMapping;
        return $this;
    }

    /**
    * Gets isDatabaseSupportSearch
    *  库是否支持搜索。
    *
    * @return bool|null
    */
    public function getIsDatabaseSupportSearch()
    {
        return $this->container['isDatabaseSupportSearch'];
    }

    /**
    * Sets isDatabaseSupportSearch
    *
    * @param bool|null $isDatabaseSupportSearch 库是否支持搜索。
    *
    * @return $this
    */
    public function setIsDatabaseSupportSearch($isDatabaseSupportSearch)
    {
        $this->container['isDatabaseSupportSearch'] = $isDatabaseSupportSearch;
        return $this;
    }

    /**
    * Gets isSchemaSupportSearch
    *  schema是否支持搜索。
    *
    * @return bool|null
    */
    public function getIsSchemaSupportSearch()
    {
        return $this->container['isSchemaSupportSearch'];
    }

    /**
    * Sets isSchemaSupportSearch
    *
    * @param bool|null $isSchemaSupportSearch schema是否支持搜索。
    *
    * @return $this
    */
    public function setIsSchemaSupportSearch($isSchemaSupportSearch)
    {
        $this->container['isSchemaSupportSearch'] = $isSchemaSupportSearch;
        return $this;
    }

    /**
    * Gets isTableSupportSearch
    *  表是否支持搜索。
    *
    * @return bool|null
    */
    public function getIsTableSupportSearch()
    {
        return $this->container['isTableSupportSearch'];
    }

    /**
    * Sets isTableSupportSearch
    *
    * @param bool|null $isTableSupportSearch 表是否支持搜索。
    *
    * @return $this
    */
    public function setIsTableSupportSearch($isTableSupportSearch)
    {
        $this->container['isTableSupportSearch'] = $isTableSupportSearch;
        return $this;
    }

    /**
    * Gets fileSize
    *  对象导入支持的文件大小。
    *
    * @return string|null
    */
    public function getFileSize()
    {
        return $this->container['fileSize'];
    }

    /**
    * Sets fileSize
    *
    * @param string|null $fileSize 对象导入支持的文件大小。
    *
    * @return $this
    */
    public function setFileSize($fileSize)
    {
        $this->container['fileSize'] = $fileSize;
        return $this;
    }

    /**
    * Gets previousSelect
    *  上一次选择迁移对象或者同步对象的方式。 - srcImportObject：当前任务上次选择的方式为导入方式
    *
    * @return string|null
    */
    public function getPreviousSelect()
    {
        return $this->container['previousSelect'];
    }

    /**
    * Sets previousSelect
    *
    * @param string|null $previousSelect 上一次选择迁移对象或者同步对象的方式。 - srcImportObject：当前任务上次选择的方式为导入方式
    *
    * @return $this
    */
    public function setPreviousSelect($previousSelect)
    {
        $this->container['previousSelect'] = $previousSelect;
        return $this;
    }

    /**
    * Gets importLevel
    *  对象导入类型。 - table：表级 - database：库级
    *
    * @return string|null
    */
    public function getImportLevel()
    {
        return $this->container['importLevel'];
    }

    /**
    * Sets importLevel
    *
    * @param string|null $importLevel 对象导入类型。 - table：表级 - database：库级
    *
    * @return $this
    */
    public function setImportLevel($importLevel)
    {
        $this->container['importLevel'] = $importLevel;
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

