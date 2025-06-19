<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssetExportParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssetExportParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  项目ID
    * assetId  资产ID
    * parentId  父节点ID
    * factorIds  因子列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'assetId' => 'string',
            'parentId' => 'string',
            'factorIds' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  项目ID
    * assetId  资产ID
    * parentId  父节点ID
    * factorIds  因子列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'assetId' => null,
        'parentId' => null,
        'factorIds' => null
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
    * projectId  项目ID
    * assetId  资产ID
    * parentId  父节点ID
    * factorIds  因子列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'assetId' => 'asset_id',
            'parentId' => 'parent_id',
            'factorIds' => 'factor_ids'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  项目ID
    * assetId  资产ID
    * parentId  父节点ID
    * factorIds  因子列表
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'assetId' => 'setAssetId',
            'parentId' => 'setParentId',
            'factorIds' => 'setFactorIds'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  项目ID
    * assetId  资产ID
    * parentId  父节点ID
    * factorIds  因子列表
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'assetId' => 'getAssetId',
            'parentId' => 'getParentId',
            'factorIds' => 'getFactorIds'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['assetId'] = isset($data['assetId']) ? $data['assetId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['factorIds'] = isset($data['factorIds']) ? $data['factorIds'] : null;
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
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets assetId
    *  资产ID
    *
    * @return string|null
    */
    public function getAssetId()
    {
        return $this->container['assetId'];
    }

    /**
    * Sets assetId
    *
    * @param string|null $assetId 资产ID
    *
    * @return $this
    */
    public function setAssetId($assetId)
    {
        $this->container['assetId'] = $assetId;
        return $this;
    }

    /**
    * Gets parentId
    *  父节点ID
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父节点ID
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets factorIds
    *  因子列表
    *
    * @return string[]|null
    */
    public function getFactorIds()
    {
        return $this->container['factorIds'];
    }

    /**
    * Sets factorIds
    *
    * @param string[]|null $factorIds 因子列表
    *
    * @return $this
    */
    public function setFactorIds($factorIds)
    {
        $this->container['factorIds'] = $factorIds;
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

