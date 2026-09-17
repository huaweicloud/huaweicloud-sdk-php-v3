<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IndexUsageDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IndexUsageDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * tableName  表名称
    * indexName  索引名称
    * ixTypeDesc  索引类型描述
    * fragmentationPercentage  碎片率
    * indexSizeMb  索引占用的空间大小(MB)
    * maintenanceOperation  维护操作
    * pageCount  索引占用的空间页数
    * ixSeekCount  通过用户查询执行的搜索次数
    * ixScanCount  未使用索引的用户查询的扫描数
    * ixKeyLookupCount  由用户查询执行的书签查找次数
    * ixUpdateCount  通过用户查询执行的更新次数
    * seekPercentage  查找百分比
    * scanPercentage  扫描百分比
    * keyLookupPercentage  书签查找百分比
    * updatePercentage  更新百分比
    * isPrimaryKey  索引是否是主键
    * isDisabled  索引是否被禁用
    * columnList  列
    * fillFactor  填充因子
    * createDate  创建时间
    * statsLastUpdated  统计信息更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'tableName' => 'string',
            'indexName' => 'string',
            'ixTypeDesc' => 'string',
            'fragmentationPercentage' => 'double',
            'indexSizeMb' => 'double',
            'maintenanceOperation' => 'string',
            'pageCount' => 'int',
            'ixSeekCount' => 'int',
            'ixScanCount' => 'int',
            'ixKeyLookupCount' => 'int',
            'ixUpdateCount' => 'int',
            'seekPercentage' => 'double',
            'scanPercentage' => 'double',
            'keyLookupPercentage' => 'double',
            'updatePercentage' => 'double',
            'isPrimaryKey' => 'bool',
            'isDisabled' => 'bool',
            'columnList' => 'string',
            'fillFactor' => 'string',
            'createDate' => 'int',
            'statsLastUpdated' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * tableName  表名称
    * indexName  索引名称
    * ixTypeDesc  索引类型描述
    * fragmentationPercentage  碎片率
    * indexSizeMb  索引占用的空间大小(MB)
    * maintenanceOperation  维护操作
    * pageCount  索引占用的空间页数
    * ixSeekCount  通过用户查询执行的搜索次数
    * ixScanCount  未使用索引的用户查询的扫描数
    * ixKeyLookupCount  由用户查询执行的书签查找次数
    * ixUpdateCount  通过用户查询执行的更新次数
    * seekPercentage  查找百分比
    * scanPercentage  扫描百分比
    * keyLookupPercentage  书签查找百分比
    * updatePercentage  更新百分比
    * isPrimaryKey  索引是否是主键
    * isDisabled  索引是否被禁用
    * columnList  列
    * fillFactor  填充因子
    * createDate  创建时间
    * statsLastUpdated  统计信息更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'tableName' => null,
        'indexName' => null,
        'ixTypeDesc' => null,
        'fragmentationPercentage' => 'double',
        'indexSizeMb' => 'double',
        'maintenanceOperation' => null,
        'pageCount' => 'int64',
        'ixSeekCount' => 'int64',
        'ixScanCount' => 'int64',
        'ixKeyLookupCount' => 'int64',
        'ixUpdateCount' => 'int64',
        'seekPercentage' => 'double',
        'scanPercentage' => 'double',
        'keyLookupPercentage' => 'double',
        'updatePercentage' => 'double',
        'isPrimaryKey' => null,
        'isDisabled' => null,
        'columnList' => null,
        'fillFactor' => null,
        'createDate' => 'int64',
        'statsLastUpdated' => 'int64'
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
    * tableName  表名称
    * indexName  索引名称
    * ixTypeDesc  索引类型描述
    * fragmentationPercentage  碎片率
    * indexSizeMb  索引占用的空间大小(MB)
    * maintenanceOperation  维护操作
    * pageCount  索引占用的空间页数
    * ixSeekCount  通过用户查询执行的搜索次数
    * ixScanCount  未使用索引的用户查询的扫描数
    * ixKeyLookupCount  由用户查询执行的书签查找次数
    * ixUpdateCount  通过用户查询执行的更新次数
    * seekPercentage  查找百分比
    * scanPercentage  扫描百分比
    * keyLookupPercentage  书签查找百分比
    * updatePercentage  更新百分比
    * isPrimaryKey  索引是否是主键
    * isDisabled  索引是否被禁用
    * columnList  列
    * fillFactor  填充因子
    * createDate  创建时间
    * statsLastUpdated  统计信息更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'tableName' => 'table_name',
            'indexName' => 'index_name',
            'ixTypeDesc' => 'ix_type_desc',
            'fragmentationPercentage' => 'fragmentation_percentage',
            'indexSizeMb' => 'index_size_mb',
            'maintenanceOperation' => 'maintenance_operation',
            'pageCount' => 'page_count',
            'ixSeekCount' => 'ix_seek_count',
            'ixScanCount' => 'ix_scan_count',
            'ixKeyLookupCount' => 'ix_key_lookup_count',
            'ixUpdateCount' => 'ix_update_count',
            'seekPercentage' => 'seek_percentage',
            'scanPercentage' => 'scan_percentage',
            'keyLookupPercentage' => 'key_lookup_percentage',
            'updatePercentage' => 'update_percentage',
            'isPrimaryKey' => 'is_primary_key',
            'isDisabled' => 'is_disabled',
            'columnList' => 'column_list',
            'fillFactor' => 'fill_factor',
            'createDate' => 'create_date',
            'statsLastUpdated' => 'stats_last_updated'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * tableName  表名称
    * indexName  索引名称
    * ixTypeDesc  索引类型描述
    * fragmentationPercentage  碎片率
    * indexSizeMb  索引占用的空间大小(MB)
    * maintenanceOperation  维护操作
    * pageCount  索引占用的空间页数
    * ixSeekCount  通过用户查询执行的搜索次数
    * ixScanCount  未使用索引的用户查询的扫描数
    * ixKeyLookupCount  由用户查询执行的书签查找次数
    * ixUpdateCount  通过用户查询执行的更新次数
    * seekPercentage  查找百分比
    * scanPercentage  扫描百分比
    * keyLookupPercentage  书签查找百分比
    * updatePercentage  更新百分比
    * isPrimaryKey  索引是否是主键
    * isDisabled  索引是否被禁用
    * columnList  列
    * fillFactor  填充因子
    * createDate  创建时间
    * statsLastUpdated  统计信息更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'tableName' => 'setTableName',
            'indexName' => 'setIndexName',
            'ixTypeDesc' => 'setIxTypeDesc',
            'fragmentationPercentage' => 'setFragmentationPercentage',
            'indexSizeMb' => 'setIndexSizeMb',
            'maintenanceOperation' => 'setMaintenanceOperation',
            'pageCount' => 'setPageCount',
            'ixSeekCount' => 'setIxSeekCount',
            'ixScanCount' => 'setIxScanCount',
            'ixKeyLookupCount' => 'setIxKeyLookupCount',
            'ixUpdateCount' => 'setIxUpdateCount',
            'seekPercentage' => 'setSeekPercentage',
            'scanPercentage' => 'setScanPercentage',
            'keyLookupPercentage' => 'setKeyLookupPercentage',
            'updatePercentage' => 'setUpdatePercentage',
            'isPrimaryKey' => 'setIsPrimaryKey',
            'isDisabled' => 'setIsDisabled',
            'columnList' => 'setColumnList',
            'fillFactor' => 'setFillFactor',
            'createDate' => 'setCreateDate',
            'statsLastUpdated' => 'setStatsLastUpdated'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * tableName  表名称
    * indexName  索引名称
    * ixTypeDesc  索引类型描述
    * fragmentationPercentage  碎片率
    * indexSizeMb  索引占用的空间大小(MB)
    * maintenanceOperation  维护操作
    * pageCount  索引占用的空间页数
    * ixSeekCount  通过用户查询执行的搜索次数
    * ixScanCount  未使用索引的用户查询的扫描数
    * ixKeyLookupCount  由用户查询执行的书签查找次数
    * ixUpdateCount  通过用户查询执行的更新次数
    * seekPercentage  查找百分比
    * scanPercentage  扫描百分比
    * keyLookupPercentage  书签查找百分比
    * updatePercentage  更新百分比
    * isPrimaryKey  索引是否是主键
    * isDisabled  索引是否被禁用
    * columnList  列
    * fillFactor  填充因子
    * createDate  创建时间
    * statsLastUpdated  统计信息更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'tableName' => 'getTableName',
            'indexName' => 'getIndexName',
            'ixTypeDesc' => 'getIxTypeDesc',
            'fragmentationPercentage' => 'getFragmentationPercentage',
            'indexSizeMb' => 'getIndexSizeMb',
            'maintenanceOperation' => 'getMaintenanceOperation',
            'pageCount' => 'getPageCount',
            'ixSeekCount' => 'getIxSeekCount',
            'ixScanCount' => 'getIxScanCount',
            'ixKeyLookupCount' => 'getIxKeyLookupCount',
            'ixUpdateCount' => 'getIxUpdateCount',
            'seekPercentage' => 'getSeekPercentage',
            'scanPercentage' => 'getScanPercentage',
            'keyLookupPercentage' => 'getKeyLookupPercentage',
            'updatePercentage' => 'getUpdatePercentage',
            'isPrimaryKey' => 'getIsPrimaryKey',
            'isDisabled' => 'getIsDisabled',
            'columnList' => 'getColumnList',
            'fillFactor' => 'getFillFactor',
            'createDate' => 'getCreateDate',
            'statsLastUpdated' => 'getStatsLastUpdated'
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
        $this->container['tableName'] = isset($data['tableName']) ? $data['tableName'] : null;
        $this->container['indexName'] = isset($data['indexName']) ? $data['indexName'] : null;
        $this->container['ixTypeDesc'] = isset($data['ixTypeDesc']) ? $data['ixTypeDesc'] : null;
        $this->container['fragmentationPercentage'] = isset($data['fragmentationPercentage']) ? $data['fragmentationPercentage'] : null;
        $this->container['indexSizeMb'] = isset($data['indexSizeMb']) ? $data['indexSizeMb'] : null;
        $this->container['maintenanceOperation'] = isset($data['maintenanceOperation']) ? $data['maintenanceOperation'] : null;
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
        $this->container['ixSeekCount'] = isset($data['ixSeekCount']) ? $data['ixSeekCount'] : null;
        $this->container['ixScanCount'] = isset($data['ixScanCount']) ? $data['ixScanCount'] : null;
        $this->container['ixKeyLookupCount'] = isset($data['ixKeyLookupCount']) ? $data['ixKeyLookupCount'] : null;
        $this->container['ixUpdateCount'] = isset($data['ixUpdateCount']) ? $data['ixUpdateCount'] : null;
        $this->container['seekPercentage'] = isset($data['seekPercentage']) ? $data['seekPercentage'] : null;
        $this->container['scanPercentage'] = isset($data['scanPercentage']) ? $data['scanPercentage'] : null;
        $this->container['keyLookupPercentage'] = isset($data['keyLookupPercentage']) ? $data['keyLookupPercentage'] : null;
        $this->container['updatePercentage'] = isset($data['updatePercentage']) ? $data['updatePercentage'] : null;
        $this->container['isPrimaryKey'] = isset($data['isPrimaryKey']) ? $data['isPrimaryKey'] : null;
        $this->container['isDisabled'] = isset($data['isDisabled']) ? $data['isDisabled'] : null;
        $this->container['columnList'] = isset($data['columnList']) ? $data['columnList'] : null;
        $this->container['fillFactor'] = isset($data['fillFactor']) ? $data['fillFactor'] : null;
        $this->container['createDate'] = isset($data['createDate']) ? $data['createDate'] : null;
        $this->container['statsLastUpdated'] = isset($data['statsLastUpdated']) ? $data['statsLastUpdated'] : null;
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
    * Gets tableName
    *  表名称
    *
    * @return string|null
    */
    public function getTableName()
    {
        return $this->container['tableName'];
    }

    /**
    * Sets tableName
    *
    * @param string|null $tableName 表名称
    *
    * @return $this
    */
    public function setTableName($tableName)
    {
        $this->container['tableName'] = $tableName;
        return $this;
    }

    /**
    * Gets indexName
    *  索引名称
    *
    * @return string|null
    */
    public function getIndexName()
    {
        return $this->container['indexName'];
    }

    /**
    * Sets indexName
    *
    * @param string|null $indexName 索引名称
    *
    * @return $this
    */
    public function setIndexName($indexName)
    {
        $this->container['indexName'] = $indexName;
        return $this;
    }

    /**
    * Gets ixTypeDesc
    *  索引类型描述
    *
    * @return string|null
    */
    public function getIxTypeDesc()
    {
        return $this->container['ixTypeDesc'];
    }

    /**
    * Sets ixTypeDesc
    *
    * @param string|null $ixTypeDesc 索引类型描述
    *
    * @return $this
    */
    public function setIxTypeDesc($ixTypeDesc)
    {
        $this->container['ixTypeDesc'] = $ixTypeDesc;
        return $this;
    }

    /**
    * Gets fragmentationPercentage
    *  碎片率
    *
    * @return double|null
    */
    public function getFragmentationPercentage()
    {
        return $this->container['fragmentationPercentage'];
    }

    /**
    * Sets fragmentationPercentage
    *
    * @param double|null $fragmentationPercentage 碎片率
    *
    * @return $this
    */
    public function setFragmentationPercentage($fragmentationPercentage)
    {
        $this->container['fragmentationPercentage'] = $fragmentationPercentage;
        return $this;
    }

    /**
    * Gets indexSizeMb
    *  索引占用的空间大小(MB)
    *
    * @return double|null
    */
    public function getIndexSizeMb()
    {
        return $this->container['indexSizeMb'];
    }

    /**
    * Sets indexSizeMb
    *
    * @param double|null $indexSizeMb 索引占用的空间大小(MB)
    *
    * @return $this
    */
    public function setIndexSizeMb($indexSizeMb)
    {
        $this->container['indexSizeMb'] = $indexSizeMb;
        return $this;
    }

    /**
    * Gets maintenanceOperation
    *  维护操作
    *
    * @return string|null
    */
    public function getMaintenanceOperation()
    {
        return $this->container['maintenanceOperation'];
    }

    /**
    * Sets maintenanceOperation
    *
    * @param string|null $maintenanceOperation 维护操作
    *
    * @return $this
    */
    public function setMaintenanceOperation($maintenanceOperation)
    {
        $this->container['maintenanceOperation'] = $maintenanceOperation;
        return $this;
    }

    /**
    * Gets pageCount
    *  索引占用的空间页数
    *
    * @return int|null
    */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /**
    * Sets pageCount
    *
    * @param int|null $pageCount 索引占用的空间页数
    *
    * @return $this
    */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;
        return $this;
    }

    /**
    * Gets ixSeekCount
    *  通过用户查询执行的搜索次数
    *
    * @return int|null
    */
    public function getIxSeekCount()
    {
        return $this->container['ixSeekCount'];
    }

    /**
    * Sets ixSeekCount
    *
    * @param int|null $ixSeekCount 通过用户查询执行的搜索次数
    *
    * @return $this
    */
    public function setIxSeekCount($ixSeekCount)
    {
        $this->container['ixSeekCount'] = $ixSeekCount;
        return $this;
    }

    /**
    * Gets ixScanCount
    *  未使用索引的用户查询的扫描数
    *
    * @return int|null
    */
    public function getIxScanCount()
    {
        return $this->container['ixScanCount'];
    }

    /**
    * Sets ixScanCount
    *
    * @param int|null $ixScanCount 未使用索引的用户查询的扫描数
    *
    * @return $this
    */
    public function setIxScanCount($ixScanCount)
    {
        $this->container['ixScanCount'] = $ixScanCount;
        return $this;
    }

    /**
    * Gets ixKeyLookupCount
    *  由用户查询执行的书签查找次数
    *
    * @return int|null
    */
    public function getIxKeyLookupCount()
    {
        return $this->container['ixKeyLookupCount'];
    }

    /**
    * Sets ixKeyLookupCount
    *
    * @param int|null $ixKeyLookupCount 由用户查询执行的书签查找次数
    *
    * @return $this
    */
    public function setIxKeyLookupCount($ixKeyLookupCount)
    {
        $this->container['ixKeyLookupCount'] = $ixKeyLookupCount;
        return $this;
    }

    /**
    * Gets ixUpdateCount
    *  通过用户查询执行的更新次数
    *
    * @return int|null
    */
    public function getIxUpdateCount()
    {
        return $this->container['ixUpdateCount'];
    }

    /**
    * Sets ixUpdateCount
    *
    * @param int|null $ixUpdateCount 通过用户查询执行的更新次数
    *
    * @return $this
    */
    public function setIxUpdateCount($ixUpdateCount)
    {
        $this->container['ixUpdateCount'] = $ixUpdateCount;
        return $this;
    }

    /**
    * Gets seekPercentage
    *  查找百分比
    *
    * @return double|null
    */
    public function getSeekPercentage()
    {
        return $this->container['seekPercentage'];
    }

    /**
    * Sets seekPercentage
    *
    * @param double|null $seekPercentage 查找百分比
    *
    * @return $this
    */
    public function setSeekPercentage($seekPercentage)
    {
        $this->container['seekPercentage'] = $seekPercentage;
        return $this;
    }

    /**
    * Gets scanPercentage
    *  扫描百分比
    *
    * @return double|null
    */
    public function getScanPercentage()
    {
        return $this->container['scanPercentage'];
    }

    /**
    * Sets scanPercentage
    *
    * @param double|null $scanPercentage 扫描百分比
    *
    * @return $this
    */
    public function setScanPercentage($scanPercentage)
    {
        $this->container['scanPercentage'] = $scanPercentage;
        return $this;
    }

    /**
    * Gets keyLookupPercentage
    *  书签查找百分比
    *
    * @return double|null
    */
    public function getKeyLookupPercentage()
    {
        return $this->container['keyLookupPercentage'];
    }

    /**
    * Sets keyLookupPercentage
    *
    * @param double|null $keyLookupPercentage 书签查找百分比
    *
    * @return $this
    */
    public function setKeyLookupPercentage($keyLookupPercentage)
    {
        $this->container['keyLookupPercentage'] = $keyLookupPercentage;
        return $this;
    }

    /**
    * Gets updatePercentage
    *  更新百分比
    *
    * @return double|null
    */
    public function getUpdatePercentage()
    {
        return $this->container['updatePercentage'];
    }

    /**
    * Sets updatePercentage
    *
    * @param double|null $updatePercentage 更新百分比
    *
    * @return $this
    */
    public function setUpdatePercentage($updatePercentage)
    {
        $this->container['updatePercentage'] = $updatePercentage;
        return $this;
    }

    /**
    * Gets isPrimaryKey
    *  索引是否是主键
    *
    * @return bool|null
    */
    public function getIsPrimaryKey()
    {
        return $this->container['isPrimaryKey'];
    }

    /**
    * Sets isPrimaryKey
    *
    * @param bool|null $isPrimaryKey 索引是否是主键
    *
    * @return $this
    */
    public function setIsPrimaryKey($isPrimaryKey)
    {
        $this->container['isPrimaryKey'] = $isPrimaryKey;
        return $this;
    }

    /**
    * Gets isDisabled
    *  索引是否被禁用
    *
    * @return bool|null
    */
    public function getIsDisabled()
    {
        return $this->container['isDisabled'];
    }

    /**
    * Sets isDisabled
    *
    * @param bool|null $isDisabled 索引是否被禁用
    *
    * @return $this
    */
    public function setIsDisabled($isDisabled)
    {
        $this->container['isDisabled'] = $isDisabled;
        return $this;
    }

    /**
    * Gets columnList
    *  列
    *
    * @return string|null
    */
    public function getColumnList()
    {
        return $this->container['columnList'];
    }

    /**
    * Sets columnList
    *
    * @param string|null $columnList 列
    *
    * @return $this
    */
    public function setColumnList($columnList)
    {
        $this->container['columnList'] = $columnList;
        return $this;
    }

    /**
    * Gets fillFactor
    *  填充因子
    *
    * @return string|null
    */
    public function getFillFactor()
    {
        return $this->container['fillFactor'];
    }

    /**
    * Sets fillFactor
    *
    * @param string|null $fillFactor 填充因子
    *
    * @return $this
    */
    public function setFillFactor($fillFactor)
    {
        $this->container['fillFactor'] = $fillFactor;
        return $this;
    }

    /**
    * Gets createDate
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateDate()
    {
        return $this->container['createDate'];
    }

    /**
    * Sets createDate
    *
    * @param int|null $createDate 创建时间
    *
    * @return $this
    */
    public function setCreateDate($createDate)
    {
        $this->container['createDate'] = $createDate;
        return $this;
    }

    /**
    * Gets statsLastUpdated
    *  统计信息更新时间
    *
    * @return int|null
    */
    public function getStatsLastUpdated()
    {
        return $this->container['statsLastUpdated'];
    }

    /**
    * Sets statsLastUpdated
    *
    * @param int|null $statsLastUpdated 统计信息更新时间
    *
    * @return $this
    */
    public function setStatsLastUpdated($statsLastUpdated)
    {
        $this->container['statsLastUpdated'] = $statsLastUpdated;
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

