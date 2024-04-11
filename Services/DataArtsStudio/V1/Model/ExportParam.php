<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExportParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExportParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ids  导出对象ID的列表，如：某几个逻辑模型的ID。
    * asyn  是否是异步操作导出，true:异步，false:同步。
    * type  导出的业务类型：ER(关系建模)，Directory_CodeTable(码表目录)，Directory_Standard(标准目录)，DIM(维度建模)，codeTable(码表);dataStandard 数据标准;directory_id导出指定目录下的码表/数据标准;model_id，biz_catalog_id导出指定模型，目录下的业务表，import_bizcatalog导出流程架构，import_bizmetric导出业务指标。
    * directoryId  所属目录ID。
    * bizCatalogId  所属业务分层的ID。
    * bizCatalogIdList  所属的业务分层的ID列表。
    * modelId  所属关系建模的模型ID，导出关系模型需要此参数。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ids' => 'int[]',
            'asyn' => 'bool',
            'type' => 'string',
            'directoryId' => 'int',
            'bizCatalogId' => 'int',
            'bizCatalogIdList' => 'int[]',
            'modelId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ids  导出对象ID的列表，如：某几个逻辑模型的ID。
    * asyn  是否是异步操作导出，true:异步，false:同步。
    * type  导出的业务类型：ER(关系建模)，Directory_CodeTable(码表目录)，Directory_Standard(标准目录)，DIM(维度建模)，codeTable(码表);dataStandard 数据标准;directory_id导出指定目录下的码表/数据标准;model_id，biz_catalog_id导出指定模型，目录下的业务表，import_bizcatalog导出流程架构，import_bizmetric导出业务指标。
    * directoryId  所属目录ID。
    * bizCatalogId  所属业务分层的ID。
    * bizCatalogIdList  所属的业务分层的ID列表。
    * modelId  所属关系建模的模型ID，导出关系模型需要此参数。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ids' => 'int64',
        'asyn' => null,
        'type' => null,
        'directoryId' => 'int64',
        'bizCatalogId' => 'int64',
        'bizCatalogIdList' => 'int64',
        'modelId' => 'int64'
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
    * ids  导出对象ID的列表，如：某几个逻辑模型的ID。
    * asyn  是否是异步操作导出，true:异步，false:同步。
    * type  导出的业务类型：ER(关系建模)，Directory_CodeTable(码表目录)，Directory_Standard(标准目录)，DIM(维度建模)，codeTable(码表);dataStandard 数据标准;directory_id导出指定目录下的码表/数据标准;model_id，biz_catalog_id导出指定模型，目录下的业务表，import_bizcatalog导出流程架构，import_bizmetric导出业务指标。
    * directoryId  所属目录ID。
    * bizCatalogId  所属业务分层的ID。
    * bizCatalogIdList  所属的业务分层的ID列表。
    * modelId  所属关系建模的模型ID，导出关系模型需要此参数。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ids' => 'ids',
            'asyn' => 'asyn',
            'type' => 'type',
            'directoryId' => 'directory_id',
            'bizCatalogId' => 'biz_catalog_id',
            'bizCatalogIdList' => 'biz_catalog_id_list',
            'modelId' => 'model_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ids  导出对象ID的列表，如：某几个逻辑模型的ID。
    * asyn  是否是异步操作导出，true:异步，false:同步。
    * type  导出的业务类型：ER(关系建模)，Directory_CodeTable(码表目录)，Directory_Standard(标准目录)，DIM(维度建模)，codeTable(码表);dataStandard 数据标准;directory_id导出指定目录下的码表/数据标准;model_id，biz_catalog_id导出指定模型，目录下的业务表，import_bizcatalog导出流程架构，import_bizmetric导出业务指标。
    * directoryId  所属目录ID。
    * bizCatalogId  所属业务分层的ID。
    * bizCatalogIdList  所属的业务分层的ID列表。
    * modelId  所属关系建模的模型ID，导出关系模型需要此参数。
    *
    * @var string[]
    */
    protected static $setters = [
            'ids' => 'setIds',
            'asyn' => 'setAsyn',
            'type' => 'setType',
            'directoryId' => 'setDirectoryId',
            'bizCatalogId' => 'setBizCatalogId',
            'bizCatalogIdList' => 'setBizCatalogIdList',
            'modelId' => 'setModelId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ids  导出对象ID的列表，如：某几个逻辑模型的ID。
    * asyn  是否是异步操作导出，true:异步，false:同步。
    * type  导出的业务类型：ER(关系建模)，Directory_CodeTable(码表目录)，Directory_Standard(标准目录)，DIM(维度建模)，codeTable(码表);dataStandard 数据标准;directory_id导出指定目录下的码表/数据标准;model_id，biz_catalog_id导出指定模型，目录下的业务表，import_bizcatalog导出流程架构，import_bizmetric导出业务指标。
    * directoryId  所属目录ID。
    * bizCatalogId  所属业务分层的ID。
    * bizCatalogIdList  所属的业务分层的ID列表。
    * modelId  所属关系建模的模型ID，导出关系模型需要此参数。
    *
    * @var string[]
    */
    protected static $getters = [
            'ids' => 'getIds',
            'asyn' => 'getAsyn',
            'type' => 'getType',
            'directoryId' => 'getDirectoryId',
            'bizCatalogId' => 'getBizCatalogId',
            'bizCatalogIdList' => 'getBizCatalogIdList',
            'modelId' => 'getModelId'
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
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['asyn'] = isset($data['asyn']) ? $data['asyn'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['directoryId'] = isset($data['directoryId']) ? $data['directoryId'] : null;
        $this->container['bizCatalogId'] = isset($data['bizCatalogId']) ? $data['bizCatalogId'] : null;
        $this->container['bizCatalogIdList'] = isset($data['bizCatalogIdList']) ? $data['bizCatalogIdList'] : null;
        $this->container['modelId'] = isset($data['modelId']) ? $data['modelId'] : null;
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
    * Gets ids
    *  导出对象ID的列表，如：某几个逻辑模型的ID。
    *
    * @return int[]|null
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param int[]|null $ids 导出对象ID的列表，如：某几个逻辑模型的ID。
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets asyn
    *  是否是异步操作导出，true:异步，false:同步。
    *
    * @return bool|null
    */
    public function getAsyn()
    {
        return $this->container['asyn'];
    }

    /**
    * Sets asyn
    *
    * @param bool|null $asyn 是否是异步操作导出，true:异步，false:同步。
    *
    * @return $this
    */
    public function setAsyn($asyn)
    {
        $this->container['asyn'] = $asyn;
        return $this;
    }

    /**
    * Gets type
    *  导出的业务类型：ER(关系建模)，Directory_CodeTable(码表目录)，Directory_Standard(标准目录)，DIM(维度建模)，codeTable(码表);dataStandard 数据标准;directory_id导出指定目录下的码表/数据标准;model_id，biz_catalog_id导出指定模型，目录下的业务表，import_bizcatalog导出流程架构，import_bizmetric导出业务指标。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 导出的业务类型：ER(关系建模)，Directory_CodeTable(码表目录)，Directory_Standard(标准目录)，DIM(维度建模)，codeTable(码表);dataStandard 数据标准;directory_id导出指定目录下的码表/数据标准;model_id，biz_catalog_id导出指定模型，目录下的业务表，import_bizcatalog导出流程架构，import_bizmetric导出业务指标。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets directoryId
    *  所属目录ID。
    *
    * @return int|null
    */
    public function getDirectoryId()
    {
        return $this->container['directoryId'];
    }

    /**
    * Sets directoryId
    *
    * @param int|null $directoryId 所属目录ID。
    *
    * @return $this
    */
    public function setDirectoryId($directoryId)
    {
        $this->container['directoryId'] = $directoryId;
        return $this;
    }

    /**
    * Gets bizCatalogId
    *  所属业务分层的ID。
    *
    * @return int|null
    */
    public function getBizCatalogId()
    {
        return $this->container['bizCatalogId'];
    }

    /**
    * Sets bizCatalogId
    *
    * @param int|null $bizCatalogId 所属业务分层的ID。
    *
    * @return $this
    */
    public function setBizCatalogId($bizCatalogId)
    {
        $this->container['bizCatalogId'] = $bizCatalogId;
        return $this;
    }

    /**
    * Gets bizCatalogIdList
    *  所属的业务分层的ID列表。
    *
    * @return int[]|null
    */
    public function getBizCatalogIdList()
    {
        return $this->container['bizCatalogIdList'];
    }

    /**
    * Sets bizCatalogIdList
    *
    * @param int[]|null $bizCatalogIdList 所属的业务分层的ID列表。
    *
    * @return $this
    */
    public function setBizCatalogIdList($bizCatalogIdList)
    {
        $this->container['bizCatalogIdList'] = $bizCatalogIdList;
        return $this;
    }

    /**
    * Gets modelId
    *  所属关系建模的模型ID，导出关系模型需要此参数。
    *
    * @return int|null
    */
    public function getModelId()
    {
        return $this->container['modelId'];
    }

    /**
    * Sets modelId
    *
    * @param int|null $modelId 所属关系建模的模型ID，导出关系模型需要此参数。
    *
    * @return $this
    */
    public function setModelId($modelId)
    {
        $this->container['modelId'] = $modelId;
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

