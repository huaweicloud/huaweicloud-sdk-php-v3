<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BusinessCatalogTreeNode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BusinessCatalogTreeNode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * businessCatalogGuid  业务资产guid
    * businessCatalogName  业务资产名称
    * businessCatalogNameEng  业务资产英文名称
    * level  业务资产级别
    * qualifiedName  业务资产级唯一限定名称
    * ordinal  序数
    * childNodes  子级业务资产列表
    * logicEntityNodes  逻辑实体列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'businessCatalogGuid' => 'string',
            'businessCatalogName' => 'string',
            'businessCatalogNameEng' => 'string',
            'level' => 'string',
            'qualifiedName' => 'string',
            'ordinal' => 'int',
            'childNodes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BusinessCatalogTreeNode[]',
            'logicEntityNodes' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\LogicEntityNodes[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * businessCatalogGuid  业务资产guid
    * businessCatalogName  业务资产名称
    * businessCatalogNameEng  业务资产英文名称
    * level  业务资产级别
    * qualifiedName  业务资产级唯一限定名称
    * ordinal  序数
    * childNodes  子级业务资产列表
    * logicEntityNodes  逻辑实体列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'businessCatalogGuid' => null,
        'businessCatalogName' => null,
        'businessCatalogNameEng' => null,
        'level' => null,
        'qualifiedName' => null,
        'ordinal' => 'int32',
        'childNodes' => null,
        'logicEntityNodes' => null
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
    * businessCatalogGuid  业务资产guid
    * businessCatalogName  业务资产名称
    * businessCatalogNameEng  业务资产英文名称
    * level  业务资产级别
    * qualifiedName  业务资产级唯一限定名称
    * ordinal  序数
    * childNodes  子级业务资产列表
    * logicEntityNodes  逻辑实体列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'businessCatalogGuid' => 'business_catalog_guid',
            'businessCatalogName' => 'business_catalog_name',
            'businessCatalogNameEng' => 'business_catalog_name_eng',
            'level' => 'level',
            'qualifiedName' => 'qualified_name',
            'ordinal' => 'ordinal',
            'childNodes' => 'child_nodes',
            'logicEntityNodes' => 'logic_entity_nodes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * businessCatalogGuid  业务资产guid
    * businessCatalogName  业务资产名称
    * businessCatalogNameEng  业务资产英文名称
    * level  业务资产级别
    * qualifiedName  业务资产级唯一限定名称
    * ordinal  序数
    * childNodes  子级业务资产列表
    * logicEntityNodes  逻辑实体列表
    *
    * @var string[]
    */
    protected static $setters = [
            'businessCatalogGuid' => 'setBusinessCatalogGuid',
            'businessCatalogName' => 'setBusinessCatalogName',
            'businessCatalogNameEng' => 'setBusinessCatalogNameEng',
            'level' => 'setLevel',
            'qualifiedName' => 'setQualifiedName',
            'ordinal' => 'setOrdinal',
            'childNodes' => 'setChildNodes',
            'logicEntityNodes' => 'setLogicEntityNodes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * businessCatalogGuid  业务资产guid
    * businessCatalogName  业务资产名称
    * businessCatalogNameEng  业务资产英文名称
    * level  业务资产级别
    * qualifiedName  业务资产级唯一限定名称
    * ordinal  序数
    * childNodes  子级业务资产列表
    * logicEntityNodes  逻辑实体列表
    *
    * @var string[]
    */
    protected static $getters = [
            'businessCatalogGuid' => 'getBusinessCatalogGuid',
            'businessCatalogName' => 'getBusinessCatalogName',
            'businessCatalogNameEng' => 'getBusinessCatalogNameEng',
            'level' => 'getLevel',
            'qualifiedName' => 'getQualifiedName',
            'ordinal' => 'getOrdinal',
            'childNodes' => 'getChildNodes',
            'logicEntityNodes' => 'getLogicEntityNodes'
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
        $this->container['businessCatalogGuid'] = isset($data['businessCatalogGuid']) ? $data['businessCatalogGuid'] : null;
        $this->container['businessCatalogName'] = isset($data['businessCatalogName']) ? $data['businessCatalogName'] : null;
        $this->container['businessCatalogNameEng'] = isset($data['businessCatalogNameEng']) ? $data['businessCatalogNameEng'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['qualifiedName'] = isset($data['qualifiedName']) ? $data['qualifiedName'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['childNodes'] = isset($data['childNodes']) ? $data['childNodes'] : null;
        $this->container['logicEntityNodes'] = isset($data['logicEntityNodes']) ? $data['logicEntityNodes'] : null;
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
    * Gets businessCatalogGuid
    *  业务资产guid
    *
    * @return string|null
    */
    public function getBusinessCatalogGuid()
    {
        return $this->container['businessCatalogGuid'];
    }

    /**
    * Sets businessCatalogGuid
    *
    * @param string|null $businessCatalogGuid 业务资产guid
    *
    * @return $this
    */
    public function setBusinessCatalogGuid($businessCatalogGuid)
    {
        $this->container['businessCatalogGuid'] = $businessCatalogGuid;
        return $this;
    }

    /**
    * Gets businessCatalogName
    *  业务资产名称
    *
    * @return string|null
    */
    public function getBusinessCatalogName()
    {
        return $this->container['businessCatalogName'];
    }

    /**
    * Sets businessCatalogName
    *
    * @param string|null $businessCatalogName 业务资产名称
    *
    * @return $this
    */
    public function setBusinessCatalogName($businessCatalogName)
    {
        $this->container['businessCatalogName'] = $businessCatalogName;
        return $this;
    }

    /**
    * Gets businessCatalogNameEng
    *  业务资产英文名称
    *
    * @return string|null
    */
    public function getBusinessCatalogNameEng()
    {
        return $this->container['businessCatalogNameEng'];
    }

    /**
    * Sets businessCatalogNameEng
    *
    * @param string|null $businessCatalogNameEng 业务资产英文名称
    *
    * @return $this
    */
    public function setBusinessCatalogNameEng($businessCatalogNameEng)
    {
        $this->container['businessCatalogNameEng'] = $businessCatalogNameEng;
        return $this;
    }

    /**
    * Gets level
    *  业务资产级别
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 业务资产级别
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets qualifiedName
    *  业务资产级唯一限定名称
    *
    * @return string|null
    */
    public function getQualifiedName()
    {
        return $this->container['qualifiedName'];
    }

    /**
    * Sets qualifiedName
    *
    * @param string|null $qualifiedName 业务资产级唯一限定名称
    *
    * @return $this
    */
    public function setQualifiedName($qualifiedName)
    {
        $this->container['qualifiedName'] = $qualifiedName;
        return $this;
    }

    /**
    * Gets ordinal
    *  序数
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 序数
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets childNodes
    *  子级业务资产列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BusinessCatalogTreeNode[]|null
    */
    public function getChildNodes()
    {
        return $this->container['childNodes'];
    }

    /**
    * Sets childNodes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BusinessCatalogTreeNode[]|null $childNodes 子级业务资产列表
    *
    * @return $this
    */
    public function setChildNodes($childNodes)
    {
        $this->container['childNodes'] = $childNodes;
        return $this;
    }

    /**
    * Gets logicEntityNodes
    *  逻辑实体列表
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\LogicEntityNodes[]|null
    */
    public function getLogicEntityNodes()
    {
        return $this->container['logicEntityNodes'];
    }

    /**
    * Sets logicEntityNodes
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\LogicEntityNodes[]|null $logicEntityNodes 逻辑实体列表
    *
    * @return $this
    */
    public function setLogicEntityNodes($logicEntityNodes)
    {
        $this->container['logicEntityNodes'] = $logicEntityNodes;
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

