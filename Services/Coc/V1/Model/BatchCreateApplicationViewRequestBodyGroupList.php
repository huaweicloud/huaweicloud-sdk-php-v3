<?php

namespace HuaweiCloud\SDK\Coc\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchCreateApplicationViewRequestBodyGroupList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchCreateApplicationViewRequestBody_group_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  名称
    * regionId  region id
    * parentName  父节点code
    * syncMode  同步模式
    * cmdbResourceIdList  关联的资源id列表
    * syncRules  智能关联规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'regionId' => 'string',
            'parentName' => 'string',
            'syncMode' => 'string',
            'cmdbResourceIdList' => 'string[]',
            'syncRules' => '\HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodySyncRules[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  名称
    * regionId  region id
    * parentName  父节点code
    * syncMode  同步模式
    * cmdbResourceIdList  关联的资源id列表
    * syncRules  智能关联规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'regionId' => null,
        'parentName' => null,
        'syncMode' => null,
        'cmdbResourceIdList' => null,
        'syncRules' => null
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
    * name  名称
    * regionId  region id
    * parentName  父节点code
    * syncMode  同步模式
    * cmdbResourceIdList  关联的资源id列表
    * syncRules  智能关联规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'regionId' => 'region_id',
            'parentName' => 'parent_name',
            'syncMode' => 'sync_mode',
            'cmdbResourceIdList' => 'cmdb_resource_id_list',
            'syncRules' => 'sync_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  名称
    * regionId  region id
    * parentName  父节点code
    * syncMode  同步模式
    * cmdbResourceIdList  关联的资源id列表
    * syncRules  智能关联规则
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'regionId' => 'setRegionId',
            'parentName' => 'setParentName',
            'syncMode' => 'setSyncMode',
            'cmdbResourceIdList' => 'setCmdbResourceIdList',
            'syncRules' => 'setSyncRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  名称
    * regionId  region id
    * parentName  父节点code
    * syncMode  同步模式
    * cmdbResourceIdList  关联的资源id列表
    * syncRules  智能关联规则
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'regionId' => 'getRegionId',
            'parentName' => 'getParentName',
            'syncMode' => 'getSyncMode',
            'cmdbResourceIdList' => 'getCmdbResourceIdList',
            'syncRules' => 'getSyncRules'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['regionId'] = isset($data['regionId']) ? $data['regionId'] : null;
        $this->container['parentName'] = isset($data['parentName']) ? $data['parentName'] : null;
        $this->container['syncMode'] = isset($data['syncMode']) ? $data['syncMode'] : null;
        $this->container['cmdbResourceIdList'] = isset($data['cmdbResourceIdList']) ? $data['cmdbResourceIdList'] : null;
        $this->container['syncRules'] = isset($data['syncRules']) ? $data['syncRules'] : null;
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
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets regionId
    *  region id
    *
    * @return string|null
    */
    public function getRegionId()
    {
        return $this->container['regionId'];
    }

    /**
    * Sets regionId
    *
    * @param string|null $regionId region id
    *
    * @return $this
    */
    public function setRegionId($regionId)
    {
        $this->container['regionId'] = $regionId;
        return $this;
    }

    /**
    * Gets parentName
    *  父节点code
    *
    * @return string|null
    */
    public function getParentName()
    {
        return $this->container['parentName'];
    }

    /**
    * Sets parentName
    *
    * @param string|null $parentName 父节点code
    *
    * @return $this
    */
    public function setParentName($parentName)
    {
        $this->container['parentName'] = $parentName;
        return $this;
    }

    /**
    * Gets syncMode
    *  同步模式
    *
    * @return string|null
    */
    public function getSyncMode()
    {
        return $this->container['syncMode'];
    }

    /**
    * Sets syncMode
    *
    * @param string|null $syncMode 同步模式
    *
    * @return $this
    */
    public function setSyncMode($syncMode)
    {
        $this->container['syncMode'] = $syncMode;
        return $this;
    }

    /**
    * Gets cmdbResourceIdList
    *  关联的资源id列表
    *
    * @return string[]|null
    */
    public function getCmdbResourceIdList()
    {
        return $this->container['cmdbResourceIdList'];
    }

    /**
    * Sets cmdbResourceIdList
    *
    * @param string[]|null $cmdbResourceIdList 关联的资源id列表
    *
    * @return $this
    */
    public function setCmdbResourceIdList($cmdbResourceIdList)
    {
        $this->container['cmdbResourceIdList'] = $cmdbResourceIdList;
        return $this;
    }

    /**
    * Gets syncRules
    *  智能关联规则
    *
    * @return \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodySyncRules[]|null
    */
    public function getSyncRules()
    {
        return $this->container['syncRules'];
    }

    /**
    * Sets syncRules
    *
    * @param \HuaweiCloud\SDK\Coc\V1\Model\BatchCreateApplicationViewRequestBodySyncRules[]|null $syncRules 智能关联规则
    *
    * @return $this
    */
    public function setSyncRules($syncRules)
    {
        $this->container['syncRules'] = $syncRules;
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

